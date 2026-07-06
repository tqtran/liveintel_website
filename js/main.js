/* =========================================================
   LiveIntel – main.js
   ========================================================= */

(function () {
  'use strict';

  /* ---- Mobile nav toggle -------------------------------- */
  const toggle    = document.querySelector('.nav-toggle');
  const navLinks  = document.querySelector('.nav-links');
  const navCta    = document.querySelector('.nav-cta');

  if (toggle) {
    toggle.addEventListener('click', () => {
      const open = navLinks && navLinks.classList.toggle('open');
      if (navCta) navCta.classList.toggle('open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });

    /* Close on outside click */
    document.addEventListener('click', (e) => {
      if (!e.target.closest('.site-header')) {
        navLinks && navLinks.classList.remove('open');
        navCta   && navCta.classList.remove('open');
        toggle.setAttribute('aria-expanded', 'false');
      }
    });
  }

  /* ---- Active nav link ---------------------------------- */
  const currentPath = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.nav-links a').forEach((a) => {
    const href = a.getAttribute('href').split('/').pop();
    if (href === currentPath) a.classList.add('active');
  });

  /* ---- Intersection-observer fade-in ------------------- */
  const io = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          io.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.12 }
  );

  document.querySelectorAll('.fade-in').forEach((el) => io.observe(el));

  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ---- Typed terminal effect (index hero only) --------- */
  const typedLines = document.querySelectorAll('.typed-line');
  if (typedLines.length) {
    if (prefersReducedMotion) {
      typedLines.forEach((line) => { line.style.visibility = 'visible'; });
    } else {
      typedLines.forEach((line, i) => {
        const text = line.textContent;
        line.textContent = '';
        line.style.visibility = 'visible';
        let j = 0;
        setTimeout(() => {
          const iv = setInterval(() => {
            line.textContent += text[j++];
            if (j >= text.length) clearInterval(iv);
          }, 28);
        }, i * 900);
      });
    }
  }

  /* ---- Workflow diagram: light up on scroll into view --- */
  const workflow = document.querySelector('.workflow');
  if (workflow) {
    const wfObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            workflow.classList.add('is-visible');
            wfObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.3 }
    );
    wfObserver.observe(workflow);
  }

  /* ---- Animated fill bars/meters (dept risk, risk score) - */
  const fillTargets = document.querySelectorAll('[data-fill]');
  if (fillTargets.length) {
    const fillObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.style.width = entry.target.dataset.fill + '%';
            fillObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.4 }
    );
    fillTargets.forEach((el) => fillObserver.observe(el));
  }

  /* ---- Animated counters (metric-value with data-count) -- */
  const counters = document.querySelectorAll('[data-count]');
  if (counters.length) {
    const countObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) return;
          const el = entry.target;
          countObserver.unobserve(el);
          const end = parseFloat(el.dataset.count);
          const suffix = el.dataset.suffix || '';
          const decimals = el.dataset.count.includes('.') ? el.dataset.count.split('.')[1].length : 0;
          if (prefersReducedMotion) {
            el.textContent = end.toFixed(decimals) + suffix;
            return;
          }
          const duration = 900;
          const start = performance.now();
          const step = (now) => {
            const progress = Math.min((now - start) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            el.textContent = (end * eased).toFixed(decimals) + suffix;
            if (progress < 1) requestAnimationFrame(step);
          };
          requestAnimationFrame(step);
        });
      },
      { threshold: 0.4 }
    );
    counters.forEach((el) => countObserver.observe(el));
  }
})();
