/**
 * IGNIS NUSANTARA 2026 - Main JavaScript
 * Interaktivitas Portal Karhutla 2026, Simulasi Donasi, dan Form Tanggap Bencana
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Counter Animation for Stat Boxes
  const statCounters = document.querySelectorAll('.counter-anim');
  if (statCounters.length > 0) {
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const target = parseInt(entry.target.getAttribute('data-target'), 10) || 0;
          animateValue(entry.target, 0, target, 1600);
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    statCounters.forEach(el => observer.observe(el));
  }

  function animateValue(obj, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
      if (!startTimestamp) startTimestamp = timestamp;
      const progress = Math.min((timestamp - startTimestamp) / duration, 1);
      const current = Math.floor(progress * (end - start));
      obj.innerHTML = (start + current).toLocaleString('id-ID');
      if (progress < 1) {
        window.requestAnimationFrame(step);
      } else {
        obj.innerHTML = end.toLocaleString('id-ID');
      }
    };
    window.requestAnimationFrame(step);
  }

  // 2. Donation Page Interactive Tiers
  const tierCards = document.querySelectorAll('.donation-tier-card');
  const customAmountInput = document.getElementById('custom-donation-amount');
  const donationTotalDisplay = document.getElementById('donation-total-display');

  if (tierCards.length > 0) {
    tierCards.forEach(card => {
      card.addEventListener('click', () => {
        tierCards.forEach(c => c.classList.remove('selected'));
        card.classList.add('selected');
        const amount = card.getAttribute('data-amount');
        if (customAmountInput) {
          customAmountInput.value = amount;
        }
        if (donationTotalDisplay) {
          donationTotalDisplay.textContent = 'Rp ' + parseInt(amount, 10).toLocaleString('id-ID');
        }
      });
    });
  }

  if (customAmountInput && donationTotalDisplay) {
    customAmountInput.addEventListener('input', () => {
      tierCards.forEach(c => c.classList.remove('selected'));
      const val = parseInt(customAmountInput.value, 10) || 0;
      donationTotalDisplay.textContent = 'Rp ' + val.toLocaleString('id-ID');
    });
  }

  // 3. Donation Form Submission Simulation
  const donationForm = document.getElementById('donation-form');
  if (donationForm) {
    donationForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const donaturName = document.getElementById('donatur-name')?.value || 'Sahabat Lingkungan';
      const amount = customAmountInput ? customAmountInput.value : '100000';
      const paymentMethod = document.querySelector('input[name="payment_method"]:checked')?.value || 'QRIS';

      // Update Modal
      const modalReceipt = document.getElementById('receipt-donatur-name');
      const modalAmount = document.getElementById('receipt-amount');
      const modalMethod = document.getElementById('receipt-method');
      const modalCode = document.getElementById('receipt-code');

      if (modalReceipt) modalReceipt.textContent = donaturName;
      if (modalAmount) modalAmount.textContent = 'Rp ' + parseInt(amount, 10).toLocaleString('id-ID');
      if (modalMethod) modalMethod.textContent = paymentMethod.toUpperCase();
      if (modalCode) modalCode.textContent = 'IGNIS-' + Math.floor(100000 + Math.random() * 900000);

      const bsModal = new bootstrap.Modal(document.getElementById('donationSuccessModal'));
      bsModal.show();
      donationForm.reset();
    });
  }

  // 4. Contact & Emergency Report Form Simulation
  const reportForm = document.getElementById('karhutla-report-form');
  if (reportForm) {
    reportForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const loc = document.getElementById('report-location')?.value;
      const reporter = document.getElementById('report-name')?.value;

      alert(`✅ Laporan Karhutla 2026 Berhasil Diterima!\n\nTerima kasih, ${reporter}. Laporan titik asap di "${loc}" telah diteruskan ke Pos Komando Satgas Manggala Agni dan BPBD setempat untuk verifikasi drone segera.`);
      reportForm.reset();
    });
  }

  // 5. Contact Inquiries Form Simulation
  const contactForm = document.getElementById('contact-form');
  if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const sender = document.getElementById('contact-name')?.value;
      alert(`✅ Pesan Terkirim!\n\nTerima kasih, ${sender}. Pesan Anda telah kami terima dan tim IGNIS Nusantara 2026 akan segera merespons via email.`);
      contactForm.reset();
    });
  }

  // 6. Gallery Filter Logic
  const galleryFilterBtns = document.querySelectorAll('.gallery-filter-btn');
  const galleryItems = document.querySelectorAll('.gallery-item');

  if (galleryFilterBtns.length > 0) {
    galleryFilterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        galleryFilterBtns.forEach(b => {
          b.classList.remove('btn-orange');
          b.classList.add('btn-dark-custom');
        });
        btn.classList.remove('btn-dark-custom');
        btn.classList.add('btn-orange');

        const filter = btn.getAttribute('data-filter');
        galleryItems.forEach(item => {
          if (filter === 'all' || item.getAttribute('data-category') === filter) {
            item.style.display = 'block';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });
  }
});
