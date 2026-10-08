/* ===================================================
   TRISTARA IT SOLUTIONS — animations.js
   Scroll-triggered reveals, number counter animations,
   hero parallax, and infinite carousel setup.
   =================================================== */

(function initAnimations() {
  'use strict';

  /* ---------- SCROLL REVEAL OBSERVER ---------- */
  var revealObserver = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry, idx) {
        if (entry.isIntersecting) {
          setTimeout(function () {
            entry.target.classList.add('visible');
          }, idx * 80);
          revealObserver.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.15, rootMargin: '0px 0px -50px 0px' }
  );

  document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(function (el) {
    revealObserver.observe(el);
  });


  /* ---------- COUNTER ANIMATION ---------- */
  function animateCounter(el, target, suffix) {
    var duration  = 2000;
    var startTime = performance.now();

    function update(currentTime) {
      var elapsed  = currentTime - startTime;
      var progress = Math.min(elapsed / duration, 1);
      var eased    = 1 - Math.pow(1 - progress, 3); // ease-out cubic
      var current  = Math.round(target * eased);
      el.textContent = current.toLocaleString() + suffix;
      if (progress < 1) requestAnimationFrame(update);
    }

    requestAnimationFrame(update);
  }

  var counterObserver = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          var el     = entry.target;
          var target = parseInt(el.dataset.target, 10);
          var suffix = el.dataset.suffix || '';
          animateCounter(el, target, suffix);
          counterObserver.unobserve(el);
        }
      });
    },
    { threshold: 0.5 }
  );

  document.querySelectorAll('[data-target]').forEach(function (el) {
    counterObserver.observe(el);
  });


  /* ---------- TESTIMONIAL CAROUSEL DUPLICATION (INFINITE LOOP) ---------- */
  var testTrack = document.getElementById('testTrack');
  if (testTrack && !testTrack.dataset.duplicated) {
    testTrack.innerHTML += testTrack.innerHTML;
    testTrack.dataset.duplicated = 'true';
  }


  /* ---------- HERO PARALLAX ---------- */
  window.addEventListener('scroll', function () {
    var scrollY = window.scrollY;
    document.querySelectorAll('.floating-el').forEach(function (el, i) {
      var speed = 0.02 + i * 0.01;
      el.style.transform = 'translateY(' + (-scrollY * speed) + 'px)';
    });
  }, { passive: true });
})();
