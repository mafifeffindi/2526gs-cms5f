// Enhanced interactivity: mobile menu toggle with smooth transitions and fade-in animations
document.addEventListener('DOMContentLoaded', function(){
  // Mobile menu toggle with smooth transitions
  const toggle = document.querySelector('.menu-toggle');
  const menu = document.querySelector('.main-nav');
  if(toggle && menu){
    toggle.addEventListener('click', ()=>{
      const isOpen = menu.classList.toggle('open');
      toggle.setAttribute('aria-expanded', isOpen);
      // Use opacity and transform for smooth transition instead of display
      if(isOpen) {
        menu.style.opacity = '1';
        menu.style.transform = 'translateY(0)';
        menu.style.pointerEvents = 'auto';
      } else {
        menu.style.opacity = '0';
        menu.style.transform = 'translateY(-10px)';
        menu.style.pointerEvents = 'none';
      }
    });
  }

  // Intersection Observer for fade-in animations
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, observerOptions);

  // Observe elements with animate-fade class
  const fadeElements = document.querySelectorAll('.animate-fade');
  fadeElements.forEach(el => observer.observe(el));
});
