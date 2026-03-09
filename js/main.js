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

  /* ---- Typed terminal effect (index hero only) --------- */
  const typedLines = document.querySelectorAll('.typed-line');
  if (typedLines.length) {
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
})();
