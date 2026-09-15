/**
 * main.js
 *
 * Small, dependency-free behaviours shared by every page:
 *   1. Adds a background to the header once the page is scrolled.
 *   2. Opens / closes the mobile navigation panel.
 *   3. Adds basic client-side validation feedback to any form with
 *      the "vx-form" class before it is submitted to the server.
 *
 * The real form processing (saving/emailing the submission) happens in
 * process-form.php — this file only improves the experience while the
 * user is filling the form in, it does not replace server-side checks.
 */

(function () {
  'use strict';

  /* 1. Header background on scroll -------------------------------------- */
  var header = document.getElementById('site-header');
  if (header) {
    var onScroll = function () {
      header.classList.toggle('is-scrolled', window.scrollY > 40);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  /* 2. Mobile navigation panel -------------------------------------------- */
  var burger = document.getElementById('burger-btn');
  var panel = document.getElementById('mobile-panel');
  if (burger && panel) {
    burger.addEventListener('click', function () {
      var isOpen = panel.classList.toggle('is-open');
      burger.setAttribute('aria-expanded', String(isOpen));
    });
    panel.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        panel.classList.remove('is-open');
        burger.setAttribute('aria-expanded', 'false');
      });
    });
  }

  /* 3. Client-side form validation ---------------------------------------- */
  document.querySelectorAll('form.vx-form').forEach(function (form) {
    form.addEventListener('submit', function (event) {
      var requiredFields = form.querySelectorAll('[required]');
      var firstInvalid = null;

      requiredFields.forEach(function (field) {
        var wrapper = field.closest('.field');
        var isEmpty = field.value.trim() === '';
        if (wrapper) {
          wrapper.classList.toggle('has-error', isEmpty);
        }
        if (isEmpty && !firstInvalid) {
          firstInvalid = field;
        }
      });

      if (firstInvalid) {
        event.preventDefault();
        firstInvalid.focus();
      }
    });
  });
})();
