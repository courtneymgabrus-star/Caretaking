/* CareMatch — main.js */
(function () {
  'use strict';

  // ─────────────────────────────────────────
  // Scroll-based fade-in animations
  // ─────────────────────────────────────────
  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.15 });

  document.querySelectorAll('.fade-in').forEach(function (el) {
    observer.observe(el);
  });

  // ─────────────────────────────────────────
  // Nav shadow on scroll
  // ─────────────────────────────────────────
  var nav = document.getElementById('site-nav');
  if (nav) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 60) {
        nav.style.boxShadow = '0 4px 30px rgba(0,0,0,0.08)';
      } else {
        nav.style.boxShadow = 'none';
      }
    }, { passive: true });
  }

  // ─────────────────────────────────────────
  // Waitlist tab toggle
  // ─────────────────────────────────────────
  window.careMatchSetTab = function (btn, type) {
    document.querySelectorAll('.tab-btn').forEach(function (b) {
      b.classList.remove('active');
      b.setAttribute('aria-pressed', 'false');
    });
    btn.classList.add('active');
    btn.setAttribute('aria-pressed', 'true');

    var roleInput = document.getElementById('waitlist-role');
    var emailInput = document.getElementById('waitlist-email');
    if (roleInput) roleInput.value = type;
    if (emailInput) {
      emailInput.placeholder = type === 'family'
        ? 'Enter your email — I need care for my family'
        : 'Enter your email — I am a caregiver';
    }
  };

  // ─────────────────────────────────────────
  // Waitlist form — AJAX submit
  // ─────────────────────────────────────────
  var form = document.getElementById('waitlist-form');
  if (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();

      var emailInput = document.getElementById('waitlist-email');
      var roleInput  = document.getElementById('waitlist-role');
      var successMsg = document.getElementById('success-msg');
      var submitBtn  = form.querySelector('button[type="submit"]');

      if (!emailInput || !emailInput.value || !emailInput.value.includes('@')) {
        emailInput.style.borderColor = '#B85C38';
        emailInput.focus();
        return;
      }

      // Reset border
      emailInput.style.borderColor = '';
      submitBtn.disabled = true;
      submitBtn.textContent = 'Sending…';

      // Use WordPress AJAX if available, otherwise show success directly
      if (typeof careMatchData !== 'undefined' && careMatchData.ajaxUrl) {
        var data = new FormData();
        data.append('action', 'carematch_waitlist');
        data.append('email',  emailInput.value);
        data.append('role',   roleInput ? roleInput.value : 'family');
        data.append('nonce',  careMatchData.nonce);

        fetch(careMatchData.ajaxUrl, { method: 'POST', body: data })
          .then(function (res) { return res.json(); })
          .then(function (json) {
            if (json.success) {
              form.style.display = 'none';
              if (successMsg) {
                successMsg.style.display = 'block';
                successMsg.textContent = json.data.message;
              }
            } else {
              emailInput.style.borderColor = '#B85C38';
              submitBtn.disabled = false;
              submitBtn.textContent = 'Get Early Access';
              alert(json.data.message || 'Something went wrong. Please try again.');
            }
          })
          .catch(function () {
            submitBtn.disabled = false;
            submitBtn.textContent = 'Get Early Access';
          });
      } else {
        // Static fallback (no WordPress)
        form.style.display = 'none';
        if (successMsg) {
          successMsg.style.display = 'block';
          successMsg.textContent = "🎉 You're on the list! We'll be in touch as we launch in your area.";
        }
      }
    });
  }

}());
