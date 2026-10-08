/* ===================================================
   TRISTARA IT SOLUTIONS — main.js
   Core app initialization, navbar scroll state, 
   mobile navigation toggle, FAQ accordion,
   smooth anchor scrolling, and contact form handler.
   =================================================== */

(function initMain() {
  'use strict';

  /* ---------- NAVBAR SCROLL ---------- */
  var navbar = document.getElementById('navbar');
  if (navbar) {
    window.addEventListener('scroll', function () {
      navbar.classList.toggle('scrolled', window.scrollY > 50);
    });
  }


  /* ---------- MOBILE MENU TOGGLE ---------- */
  var mobileMenu    = document.getElementById('mobileMenu');
  var mobileOverlay = document.getElementById('mobileOverlay');
  var mobileToggle  = document.querySelector('.mobile-toggle');
  var mobileClose   = document.querySelector('.mobile-close');

  function toggleMobile() {
    if (mobileMenu && mobileOverlay) {
      mobileMenu.classList.toggle('open');
      mobileOverlay.classList.toggle('open');
    }
  }

  // Expose globally for inline onclick handlers
  window.toggleMobile = toggleMobile;

  if (mobileToggle)  mobileToggle.addEventListener('click', toggleMobile);
  if (mobileClose)   mobileClose.addEventListener('click', toggleMobile);
  if (mobileOverlay) mobileOverlay.addEventListener('click', toggleMobile);

  // Close menu when a navigation link inside is clicked
  document.querySelectorAll('.mobile-menu a').forEach(function (link) {
    link.addEventListener('click', toggleMobile);
  });


  /* ---------- FAQ ACCORDION ---------- */
  window.toggleFaq = function (el) {
    var item     = el.parentElement;
    var answer   = item.querySelector('.faq-answer');
    var isActive = item.classList.contains('active');

    // Close all other open items
    document.querySelectorAll('.faq-item').forEach(function (i) {
      i.classList.remove('active');
      var ans = i.querySelector('.faq-answer');
      if (ans) ans.style.maxHeight = '0';
    });

    // Expand clicked item if not previously active
    if (!isActive && answer) {
      item.classList.add('active');
      answer.style.maxHeight = answer.scrollHeight + 'px';
    }
  };


  /* ---------- SMOOTH SCROLL FOR ANCHOR LINKS ---------- */
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      var targetId = this.getAttribute('href');
      if (targetId && targetId !== '#') {
        var targetEl = document.querySelector(targetId);
        if (targetEl) {
          e.preventDefault();
          targetEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      }
    });
  });


  /* ---------- FORM SUBMIT ---------- */
  window.handleSubmit = function (e) {
    e.preventDefault();
    var btn = e.target.querySelector('.form-submit');
    if (!btn) return;

    var originalText = btn.textContent;
    btn.textContent = '✓ Request Submitted!';
    btn.style.background = '#059669';

    setTimeout(function () {
      btn.textContent = originalText;
      btn.style.background = '';
      e.target.reset();
    }, 3000);
  };
})();
