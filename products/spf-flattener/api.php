<?php
/**
 * SPF Flattener API
 * POST/GET: domain (required unless record given), record (optional pasted SPF).
 * Resolves every include/redirect/a/mx recursively via DNS and returns a
 * flattened record, lookup counts, warnings, and a replayable trace log.
 */

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');
set_time_limit(30);

function respond(array $payload, int $code = 200)
{
    http_response_code($code);
    echo json_encode($payload, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    exit;
}

function fail(string $msg, int $code = 400)
{
    respond(array('ok' => false, 'error' => $msg), $code);
}

function validDomain(string $d)
{
    return $d !== '' && strlen($d) <= 253
        && preg_match('/^(?:[a-z0-9_](?:[a-z0-9_\-]{0,61}[a-z0-9_])?\.)+[a-z]{2,63}$/i', $d) === 1;
}

final class SpfFlattener
{
    const MAX_LOOKUPS  = 40;
    const MAX_INCLUDES = 30;

    public $lookups   = 0;   // DNS lookups the record costs under RFC 7208
    public $visited   = array();
    public $ip4       = array();
    public $ip6       = array();
    public $keep      = array();
    public $keepLookups = 0; // lookups still required by kept (unflattenable) terms
    public $warnings  = array();
    public $trace     = array();
    public $allQ      = null;
    public $truncated = false;

    public function log($type, $msg)
    {
        $this->trace[] = array('t' => $type, 'msg' => $msg);
    }

    public function warn($msg)
    {
        $this->warnings[] = $msg;
        $this->log('warn', $msg);
    }

    private function guard()
    {
        if ($this->lookups > self::MAX_LOOKUPS || count($this->visited) > self::MAX_INCLUDES) {
            if (!$this->truncated) {
                $this->warn('Stopped after ' . self::MAX_LOOKUPS . ' DNS lookups. This record tree is enormous. Results are partial.');
            }
            $this->truncated = true;
            return false;
        }
        return true;
    }

    private function txts($name)
    {
        $recs = @dns_get_record($name, DNS_TXT);
        if (!is_array($recs)) {
            return array();
        }
        $out = array();
        foreach ($recs as $r) {
            if (isset($r['txt'])) {
                $out[] = $r['txt'];
            }
        }
        return $out;
    }

    public function spfFor($name)
    {
        $spf = array();
        foreach ($this->txts($name) as $t) {
            if (preg_match('/^v=spf1(\s|$)/i', trim($t))) {
                $spf[] = trim($t);
            }
        }
        if (count($spf) > 1) {
            $this->warn($name . ' publishes multiple SPF records. That alone is a permerror. Using the first.');
        }
        return isset($spf[0]) ? $spf[0] : null;
    }

    private function ips($host)
    {
        $v4 = array();
        $v6 = array();
        $a = @dns_get_record($host, DNS_A);
        if (is_array($a)) {
            foreach ($a as $r) {
                if (!empty($r['ip'])) {
                    $v4[] = $r['ip'];
                }
            }
        }
        $aaaa = @dns_get_record($host, DNS_AAAA);
        if (is_array($aaaa)) {
            foreach ($aaaa as $r) {
                if (!empty($r['ipv6'])) {
                    $v6[] = $r['ipv6'];
                }
            }
        }
        return array($v4, $v6);
    }

    private function mx($host)
    {
        $recs = @dns_get_record($host, DNS_MX);
        if (!is_array($recs)) {
            return array();
        }
        usort($recs, function ($a, $b) {
            $pa = isset($a['pri']) ? $a['pri'] : 0;
            $pb = isset($b['pri']) ? $b['pri'] : 0;
            return $pa - $pb;
        });
        $out = array();
        foreach ($recs as $r) {
            if (!empty($r['target'])) {
                $out[] = rtrim($r['target'], '.');
            }
        }
        return array_slice($out, 0, 10);
    }

    private function keepTerm($raw, $costsLookup, $reason)
    {
        if (!in_array($raw, $this->keep, true)) {
            $this->keep[] = $raw;
            if ($costsLookup) {
                $this->keepLookups++;
            }
        }
        $this->warn($reason);
    }

    public function walk($domain, $record, $isRoot)
    {
        $terms = preg_split('/\s+/', trim($record));
        array_shift($terms); // v=spf1

        // RFC 7208: if a record contains "all", any redirect= in it is ignored
        $hasAll = false;
        foreach ($terms as $t) {
            if (preg_match('/^[+\-~?]?all$/i', $t)) {
                $hasAll = true;
            }
        }

        foreach ($terms as $raw) {
            if ($this->truncated) {
                return;
            }
            $term = $raw;
            $q = '+';
            if (preg_match('/^[+\-~?]/', $term)) {
                $q = $term[0];
                $term = substr($term, 1);
            }
            $lower = strtolower($term);

            if (strpos($term, '%') !== false) {
                $costs = preg_match('/^(include:|exists:|ptr|a[:\/]|mx[:\/])/', $lower) === 1;
                if ($costs) {
                    $this->lookups++;
                }
                $this->keepTerm($raw, $costs, 'Kept "' . $raw . '". Macros are evaluated per-message and can\'t be flattened.');
                continue;
            }

            if ($lower === 'all') {
                if ($isRoot) {
                    $this->allQ = $q;
                } elseif ($q === '+') {
                    $this->warn('An included record contains "+all", which authorizes the entire internet. Flattening drops it. Double-check that include.');
                }
                continue;
            }

            if (strpos($lower, 'ip4:') === 0) {
                $this->ip4[substr($term, 4)] = true;
                continue;
            }
            if (strpos($lower, 'ip6:') === 0) {
                $this->ip6[substr($term, 4)] = true;
                continue;
            }

            $isInclude  = strpos($lower, 'include:') === 0;
            $isRedirect = strpos($lower, 'redirect=') === 0;
            if ($isInclude || $isRedirect) {
                if ($isRedirect && $hasAll) {
                    $this->log('info', 'redirect ignored. Record already has an "all" mechanism');
                    continue;
                }
                $target = strtolower(rtrim(substr($term, $isInclude ? 8 : 9), '.'));
                $this->lookups++;
                if (!validDomain($target)) {
                    $this->keepTerm($raw, true, 'Kept "' . $raw . '". "' . $target . '" isn\'t a resolvable domain.');
                    continue;
                }
                if ($isInclude && $q !== '+') {
                    $this->keepTerm($raw, true, 'Kept "' . $raw . '". A non-pass qualifier on include can\'t be flattened safely.');
                    continue;
                }
                if (isset($this->visited[$target])) {
                    $this->warn('Skipped ' . $target . '. Already resolved (include loop?).');
                    continue;
                }
                $this->visited[$target] = true;
                if (!$this->guard()) {
                    return;
                }
                $this->log('lookup', ($isRedirect ? 'redirect= ' : 'include: ') . $target);
                $sub = $this->spfFor($target);
                if ($sub === null) {
                    $this->warn($target . ' publishes no SPF record. A receiving server would permerror here.');
                    continue;
                }
                $b4 = count($this->ip4);
                $b6 = count($this->ip6);
                $this->walk($target, $sub, false);
                $this->log('ok', $target . ' → +' . (count($this->ip4) - $b4) . ' ip4, +' . (count($this->ip6) - $b6) . ' ip6');
                continue;
            }

            if (preg_match('/^(a|mx)(?::([^\/]+))?(?:\/(\d{1,2}))?(?:\/\/(\d{1,3}))?$/i', $term, $m)) {
                $mech = strtolower($m[1]);
                $host = (isset($m[2]) && $m[2] !== '') ? strtolower(rtrim($m[2], '.')) : $domain;
                $c4 = (isset($m[3]) && $m[3] !== '') ? '/' . $m[3] : '';
                $c6 = (isset($m[4]) && $m[4] !== '') ? '/' . $m[4] : '';
                $this->lookups++;
                if ($host === '') {
                    $this->keepTerm($raw, true, 'Kept "' . $raw . '". No domain to resolve it against. Add your domain above and rerun.');
                    continue;
                }
                if (!$this->guard()) {
                    return;
                }
                $this->log('lookup', $mech . ' → ' . $host);
                $hosts = ($mech === 'mx') ? $this->mx($host) : array($host);
                if ($mech === 'mx' && count($hosts) === 0) {
                    $this->warn($host . ' has no MX records. The mx mechanism matches nothing.');
                }
                $n = 0;
                foreach ($hosts as $h) {
                    list($v4, $v6) = $this->ips($h);
                    foreach ($v4 as $ip) {
                        $this->ip4[$ip . $c4] = true;
                        $n++;
                    }
                    foreach ($v6 as $ip) {
                        $this->ip6[$ip . $c6] = true;
                        $n++;
                    }
                }
                if ($n === 0 && $mech === 'a') {
                    $this->warn($host . ' has no A/AAAA records. The a mechanism matches nothing.');
                } else {
                    $this->log('ok', $mech . ':' . $host . ' → ' . $n . ' address' . ($n === 1 ? '' : 'es'));
                }
                continue;
            }

            if ($lower === 'ptr' || strpos($lower, 'ptr:') === 0) {
                $this->lookups++;
                $this->keepTerm($raw, true, 'Kept "' . $raw . '". ptr can\'t be flattened, and RFC 7208 says not to use it at all.');
                continue;
            }
            if (strpos($lower, 'exists:') === 0) {
                $this->lookups++;
                $this->keepTerm($raw, true, 'Kept "' . $raw . '". exists is evaluated per-sender and can\'t be pre-resolved.');
                continue;
            }
            if (strpos($lower, 'exp=') === 0) {
                $this->keepTerm($raw, false, 'Kept "' . $raw . '". exp is an explanation modifier and doesn\'t count against the limit.');
                continue;
            }

            $this->keepTerm($raw, false, 'Kept unrecognized term "' . $raw . '" as-is.');
        }
    }
}

/* ---------------- request handling ---------------- */

$domain = strtolower(trim(isset($_REQUEST['domain']) ? (string) $_REQUEST['domain'] : ''));
$domain = rtrim($domain, '.');
$pasted = trim(isset($_REQUEST['record']) ? (string) $_REQUEST['record'] : '');
// normalize whitespace in pasted records (people paste with line breaks)
$pasted = preg_replace('/\s+/', ' ', $pasted);

if ($domain === '' && $pasted === '') {
    fail('Give me a domain or an SPF record to work with.');
}
if ($domain !== '' && !validDomain($domain)) {
    fail('"' . $domain . '" doesn\'t look like a valid domain name.');
}
if ($pasted !== '') {
    if (strlen($pasted) > 4096) {
        fail('That record is suspiciously long. 4 KB max.');
    }
    if (!preg_match('/^v=spf1(\s|$)/i', $pasted)) {
        fail('A pasted record must start with "v=spf1".');
    }
}

$f = new SpfFlattener();
$label = $domain !== '' ? $domain : '(pasted record)';
$f->log('cmd', 'spf-flatten ' . $label);

$original = $pasted;
if ($original === '') {
    $original = $f->spfFor($domain);
    if ($original === null) {
        fail('No SPF record found on ' . $domain . '. Nothing to flatten, but also nothing protecting it from spoofing.', 404);
    }
}
$f->log('info', 'TXT ' . $label . ' → ' . $original);

$f->walk($domain, $original, true);

if ($f->allQ === null) {
    $f->warn('Original record has no "all" mechanism. Defaulting to ~all (softfail). Consider -all once you trust the record.');
    $f->allQ = '~';
}

$parts = array('v=spf1');
foreach (array_keys($f->ip4) as $ip) {
    $parts[] = 'ip4:' . $ip;
}
foreach (array_keys($f->ip6) as $ip) {
    $parts[] = 'ip6:' . $ip;
}
foreach ($f->keep as $k) {
    $parts[] = $k;
}
$parts[] = $f->allQ . 'all';
$flat = implode(' ', $parts);

$chunks = array();
$cur = '';
foreach (explode(' ', $flat) as $t) {
    if ($cur !== '' && strlen($cur) + 1 + strlen($t) > 255) {
        $chunks[] = $cur;
        $cur = $t;
    } else {
        $cur = ($cur === '') ? $t : $cur . ' ' . $t;
    }
}
if ($cur !== '') {
    $chunks[] = $cur;
}

$f->log('info', 'lookup count: ' . $f->lookups . ' / 10 ' . ($f->lookups > 10 ? 'OVER THE LIMIT' : 'within limit'));
$f->log('done', 'flattened → ' . count($f->ip4) . ' ip4 + ' . count($f->ip6) . ' ip6 ranges, '
    . $f->keepLookups . ' lookup' . ($f->keepLookups === 1 ? '' : 's') . ' remaining, ' . strlen($flat) . ' chars');

respond(array(
    'ok'          => true,
    'domain'      => $domain,
    'original'    => $original,
    'lookups'     => $f->lookups,
    'overLimit'   => $f->lookups > 10,
    'truncated'   => $f->truncated,
    'flattened'   => $flat,
    'flatLookups' => $f->keepLookups,
    'chunks'      => $chunks,
    'warnings'    => $f->warnings,
    'trace'       => $f->trace,
));
