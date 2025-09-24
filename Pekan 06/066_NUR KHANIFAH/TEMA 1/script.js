// JS minimal: toggling navigation on mobile, smooth scroll for anchors
document.addEventListener('DOMContentLoaded', function() {
  const btn = document.querySelector('.nav-toggle');
  const nav = document.querySelector('.main-menu');
  if (btn && nav) {
    btn.addEventListener('click', function() {
      const expanded = this.getAttribute('aria-expanded') === 'true' || false;
      this.setAttribute('aria-expanded', !expanded);
      nav.classList.toggle('open');
    });
  }

  // smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e){
      e.preventDefault();
      document.querySelector(this.getAttribute('href')).scrollIntoView({ behavior: 'smooth' });
    });
  });
});
