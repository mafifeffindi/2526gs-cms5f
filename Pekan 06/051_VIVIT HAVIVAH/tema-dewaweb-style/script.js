// script.js
(function(){
  var btn = document.getElementById('navToggle');
  var menu = document.getElementById('mobileMenu');
  if (btn && menu){
    btn.addEventListener('click', function(){
      var expanded = btn.getAttribute('aria-expanded') === 'true';
      btn.setAttribute('aria-expanded', !expanded);
      if (menu.style.display === 'none' || menu.style.display === '') {
        menu.style.display = 'block';
      } else {
        menu.style.display = 'none';
      }
    });
  }
})();
