/* ==========================================================================
   AIIRA TISSUE PAPERS - MAIN JAVASCRIPT
   Interactivity, Animations, Product Filtering, and Form Enhancements
   ========================================================================== */

document.addEventListener('DOMContentLoaded', function () {
  
  // 1. Sticky Navbar on Scroll
  const navbar = document.querySelector('.aiira-navbar');
  if (navbar) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 40) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
  }

  // 2. Product Catalog Filter
  const filterBtns = document.querySelectorAll('.filter-btn');
  const productCards = document.querySelectorAll('.product-item');

  if (filterBtns.length > 0 && productCards.length > 0) {
    filterBtns.forEach(btn => {
      btn.addEventListener('click', function () {
        filterBtns.forEach(b => b.classList.remove('active'));
        this.classList.add('active');

        const filterValue = this.getAttribute('data-filter');

        productCards.forEach(card => {
          if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
            card.style.display = 'block';
            card.style.opacity = '0';
            setTimeout(() => {
              card.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
              card.style.opacity = '1';
              card.style.transform = 'translateY(0)';
            }, 30);
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
  }

  // 3. Counter Animation for Statistics
  const counters = document.querySelectorAll('.stat-number');
  if (counters.length > 0) {
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const counter = entry.target;
          const target = +counter.getAttribute('data-target');
          const duration = 1500;
          const stepTime = 20;
          const totalSteps = duration / stepTime;
          const stepValue = target / totalSteps;
          let current = 0;

          const timer = setInterval(() => {
            current += stepValue;
            if (current >= target) {
              counter.innerText = target.toLocaleString() + (counter.getAttribute('data-suffix') || '');
              clearInterval(timer);
            } else {
              counter.innerText = Math.floor(current).toLocaleString() + (counter.getAttribute('data-suffix') || '');
            }
          }, stepTime);

          obs.unobserve(counter);
        }
      });
    }, { threshold: 0.5 });

    counters.forEach(counter => observer.observe(counter));
  }

  // 4. Quick Product Inquiry Modal Data Binder
  const inquiryModal = document.getElementById('inquiryModal');
  if (inquiryModal) {
    inquiryModal.addEventListener('show.bs.modal', function (event) {
      const button = event.relatedTarget;
      if (button) {
        const productName = button.getAttribute('data-product-name') || 'Aiira Tissue Products';
        const modalProductInput = inquiryModal.querySelector('#inquiryProductName');
        const modalProductDisplay = inquiryModal.querySelector('#modalProductNameText');
        
        if (modalProductInput) modalProductInput.value = productName;
        if (modalProductDisplay) modalProductDisplay.textContent = productName;
      }
    });
  }

});
