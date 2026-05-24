/* ==========================================
   PIXELFRAME — script.js
   ========================================== */

// ── Counter Animation ──────────────────────
function animateCounter(el) {
  const target = parseInt(el.dataset.target, 10);
  const suffix = el.dataset.suffix || '';
  const duration = 1400;
  const startTime = performance.now();

  function update(now) {
    const elapsed = now - startTime;
    const progress = Math.min(elapsed / duration, 1);
    // Ease out cubic
    const eased = 1 - Math.pow(1 - progress, 3);
    el.textContent = Math.round(eased * target) + suffix;
    if (progress < 1) requestAnimationFrame(update);
  }
  requestAnimationFrame(update);
}

// ── Intersection Observer ──────────────────
const observerOptions = { threshold: 0.15 };

// Stats counter trigger
const statsSection = document.querySelector('.stats');
let countersDone = false;

const statsObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting && !countersDone) {
      countersDone = true;
      document.querySelectorAll('.stat-num').forEach(animateCounter);
    }
  });
}, observerOptions);

if (statsSection) statsObserver.observe(statsSection);

// Reveal on scroll
const revealEls = document.querySelectorAll('.reveal');
const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry, i) => {
    if (entry.isIntersecting) {
      setTimeout(() => entry.target.classList.add('visible'), i * 80);
      revealObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.1 });

revealEls.forEach(el => revealObserver.observe(el));

// ── Process Accordion ─────────────────────
document.querySelectorAll('.process-toggle').forEach(btn => {
  btn.addEventListener('click', () => {
    const item = btn.closest('.process-item');
    const isOpen = item.classList.contains('open');

    // Close all
    document.querySelectorAll('.process-item').forEach(i => {
      i.classList.remove('open');
      i.querySelector('.process-toggle').setAttribute('aria-expanded', 'false');
    });

    // Open clicked if it was closed
    if (!isOpen) {
      item.classList.add('open');
      btn.setAttribute('aria-expanded', 'true');
    }
  });
});

// ── Mobile Nav ────────────────────────────
const burger = document.querySelector('.nav-burger');
const navLinks = document.querySelector('.nav-links');

burger?.addEventListener('click', () => {
  navLinks.classList.toggle('mobile-open');
  // Animate burger
  burger.classList.toggle('active');
});

// Close mobile nav on link click
document.querySelectorAll('.nav-links a').forEach(link => {
  link.addEventListener('click', () => {
    navLinks.classList.remove('mobile-open');
    burger?.classList.remove('active');
  });
});

// ── Nav background on scroll ───────────────
const nav = document.querySelector('.nav');
window.addEventListener('scroll', () => {
  if (window.scrollY > 40) {
    nav.style.borderBottomColor = '#e8e8e2';
  } else {
    nav.style.borderBottomColor = '#e8e8e2';
  }
}, { passive: true });

// ── Add reveal class to sections ──────────
document.querySelectorAll(
  '.service-card, .work-card, .process-item, .stat-item, .section-header'
).forEach(el => {
  el.classList.add('reveal');
});

// Re-observe newly added reveal elements
document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

// ── Work card hover ripple ─────────────────
document.querySelectorAll('.work-card').forEach(card => {
  card.addEventListener('mouseenter', function () {
    this.style.transition = 'transform 0.25s cubic-bezier(.34,1.56,.64,1), box-shadow 0.25s ease';
  });
  card.addEventListener('mouseleave', function () {
    this.style.transition = 'transform 0.25s ease, box-shadow 0.25s ease';
  });
});

// ── Smooth active state for service cards ──
document.querySelectorAll('.service-card').forEach(card => {
  card.addEventListener('click', function () {
    document.querySelectorAll('.service-card').forEach(c => c.classList.remove('active'));
    this.classList.add('active');
  });
});

// ── Contact Form (Formspree AJAX) ──────────
const contactForm = document.getElementById('contactForm');
const submitBtn   = document.getElementById('submitBtn');
const submitText  = submitBtn?.querySelector('.submit-text');
const submitLoad  = submitBtn?.querySelector('.submit-loading');
const formSuccess = document.getElementById('formSuccess');
const formError   = document.getElementById('formError');

contactForm?.addEventListener('submit', async function (e) {
  e.preventDefault();

  // Hide old messages
  formSuccess.style.display = 'none';
  formError.style.display   = 'none';

  // Loading state
  submitBtn.disabled    = true;
  submitText.style.display = 'none';
  submitLoad.style.display = 'inline';

  try {
    const data = new FormData(contactForm);
    const res  = await fetch(contactForm.action, {
      method:  'POST',
      body:    data,
      headers: { 'Accept': 'application/json' }
    });

    if (res.ok) {
      formSuccess.style.display = 'block';
      contactForm.reset();
    } else {
      const json = await res.json().catch(() => ({}));
      throw new Error(json?.errors?.[0]?.message || 'Server error');
    }
  } catch (err) {
    console.error(err);
    formError.style.display = 'block';
  } finally {
    submitBtn.disabled       = false;
    submitText.style.display = 'inline';
    submitLoad.style.display = 'none';
  }
});