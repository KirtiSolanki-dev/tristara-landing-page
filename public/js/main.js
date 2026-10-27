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


  /* ---------- REAL BACKEND FORM SUBMISSION VIA AJAX ---------- */
  window.handleSubmit = function (e) {
    e.preventDefault();
    var form = e.target;
    var btn = form.querySelector('.form-submit');
    if (!btn || btn.disabled) return;

    var originalText = btn.textContent;
    btn.disabled = true;
    btn.textContent = '⏳ Submitting to 4D Pocket...';
    btn.style.opacity = '0.8';

    // Remove any previous feedback message
    var prevMsg = form.querySelector('.form-feedback-alert');
    if (prevMsg) prevMsg.remove();

    var formData = new FormData(form);

    fetch('index.php?url=contact/submit', {
      method: 'POST',
      body: formData
    })
    .then(function (res) {
      return res.json().then(function (data) {
        return { status: res.status, ok: res.ok, data: data };
      });
    })
    .then(function (resObj) {
      if (resObj.ok && resObj.data.success) {
        btn.textContent = '✓ Inquiry Sent Successfully!';
        btn.style.background = '#16a34a';
        btn.style.opacity = '1';

        var successAlert = document.createElement('div');
        successAlert.className = 'form-feedback-alert';
        successAlert.style.cssText = 'margin-top: 16px; padding: 14px 18px; border-radius: 12px; background: rgba(34, 197, 94, 0.15); border: 1.5px solid #22c55e; color: #ffffff; font-size: 0.95rem; line-height: 1.6; text-align: center;';
        successAlert.innerHTML = '🎉 <strong>Inquiry Registered (# ' + (resObj.data.inquiry_id || '') + ')</strong><br>' + resObj.data.message;
        form.appendChild(successAlert);

        form.reset();

        setTimeout(function () {
          btn.textContent = originalText;
          btn.style.background = '';
          btn.disabled = false;
        }, 5000);
      } else {
        throw new Error(resObj.data.message || 'Submission failed. Please check your details.');
      }
    })
    .catch(function (err) {
      btn.textContent = '⚠ Submission Failed';
      btn.style.background = '#dc2626';
      btn.style.opacity = '1';

      var errAlert = document.createElement('div');
      errAlert.className = 'form-feedback-alert';
      errAlert.style.cssText = 'margin-top: 16px; padding: 14px 18px; border-radius: 12px; background: rgba(239, 68, 68, 0.15); border: 1.5px solid #ef4444; color: #fca5a5; font-size: 0.95rem; text-align: center;';
      errAlert.innerHTML = '⚠ ' + err.message;
      form.appendChild(errAlert);

      setTimeout(function () {
        btn.textContent = originalText;
        btn.style.background = '';
        btn.disabled = false;
      }, 4000);
    });
  };
})();
