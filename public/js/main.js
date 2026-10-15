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

  function getMenuElements() {
    if (!mobileMenu) mobileMenu = document.getElementById('mobileMenu');
    if (!mobileOverlay) mobileOverlay = document.getElementById('mobileOverlay');
    return { menu: mobileMenu, overlay: mobileOverlay };
  }

  function openMobile(e) {
    if (e && e.preventDefault) e.preventDefault();
    var els = getMenuElements();
    if (els.menu) els.menu.classList.add('open');
    if (els.overlay) els.overlay.classList.add('open');
    document.body.style.overflow = 'hidden';
  }

  function closeMobile(e) {
    if (e && e.preventDefault) e.preventDefault();
    var els = getMenuElements();
    if (els.menu) els.menu.classList.remove('open');
    if (els.overlay) els.overlay.classList.remove('open');
    document.body.style.overflow = '';
  }

  var toggleLock = false;
  function toggleMobile(e) {
    if (e && e.preventDefault) e.preventDefault();
    // Guard against double invocation in the same tap/click cycle
    if (toggleLock) return;
    toggleLock = true;
    setTimeout(function () { toggleLock = false; }, 320);

    var els = getMenuElements();
    if (els.menu) {
      if (els.menu.classList.contains('open')) {
        closeMobile();
      } else {
        openMobile();
      }
    }
  }

  // Expose globally for inline onclick handlers in HTML
  window.toggleMobile = toggleMobile;
  window.openMobile   = openMobile;
  window.closeMobile  = closeMobile;

  // Single unified event handlers (replaces inline collision)
  if (mobileToggle) {
    mobileToggle.onclick = function (e) {
      if (e) e.preventDefault();
      toggleMobile(e);
    };
  }

  if (mobileClose) {
    mobileClose.onclick = function (e) {
      if (e) e.preventDefault();
      closeMobile(e);
    };
  }

  if (mobileOverlay) {
    mobileOverlay.onclick = function (e) {
      if (e) e.preventDefault();
      closeMobile(e);
    };
  }

  // Close menu when navigation link is clicked
  document.querySelectorAll('.mobile-menu a').forEach(function (link) {
    link.addEventListener('click', function () {
      closeMobile();
    });
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
