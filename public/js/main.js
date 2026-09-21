/* ==========================================================================
   AIIRA TISSUE PAPERS - MAIN JAVASCRIPT
   Interactivity, Animations, Product Filtering, and Form Enhancements
   ========================================================================== */

document.addEventListener('DOMContentLoaded', function () {
  
  // 1. Initialize AOS (Animate On Scroll)
  if (typeof AOS !== 'undefined') {
    AOS.init({
      duration: 800,
      easing: 'ease-out-cubic',
      once: true,
      offset: 60,
      delay: 50
    });
  }

  // 2. Sticky Navbar on Scroll
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

  // 3. Scroll to Top Button
  const scrollTopBtn = document.getElementById('scrollToTopBtn');
  if (scrollTopBtn) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 350) {
        scrollTopBtn.classList.add('visible');
      } else {
        scrollTopBtn.classList.remove('visible');
      }
    });

    scrollTopBtn.addEventListener('click', function () {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  // 4. Product Catalog Filter
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

  // 5. Counter Animation for Statistics (Smooth easing)
  const counters = document.querySelectorAll('.stat-number');
  if (counters.length > 0) {
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const counter = entry.target;
          const target = +counter.getAttribute('data-target');
          const suffix = counter.getAttribute('data-suffix') || '';
          const duration = 1800; // ms
          let startTimestamp = null;

          const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            // Ease out cubic
            const easeProgress = 1 - Math.pow(1 - progress, 3);
            const current = Math.floor(easeProgress * target);
            counter.innerText = current.toLocaleString() + suffix;
            if (progress < 1) {
              window.requestAnimationFrame(step);
            } else {
              counter.innerText = target.toLocaleString() + suffix;
            }
          };

          window.requestAnimationFrame(step);
          obs.unobserve(counter);
        }
      });
    }, { threshold: 0.3 });

    counters.forEach(counter => observer.observe(counter));
  }

  // 6. Quick Product Inquiry Modal Data Binder
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

  // 7. Interactive Subtle Tilt on Hero Image (Desktop only)
  const heroImage = document.querySelector('.hero-image-wrap img');
  if (heroImage && window.innerWidth > 992) {
    const heroWrap = document.querySelector('.hero-image-wrap');
    heroWrap.addEventListener('mousemove', function (e) {
      const rect = heroWrap.getBoundingClientRect();
      const x = e.clientX - rect.left - rect.width / 2;
      const y = e.clientY - rect.top - rect.height / 2;
      heroImage.style.transform = `perspective(1000px) rotateY(${x * 0.03}deg) rotateX(${-y * 0.03}deg) scale(1.03)`;
    });

    heroWrap.addEventListener('mouseleave', function () {
      heroImage.style.transform = '';
    });
  }

});
