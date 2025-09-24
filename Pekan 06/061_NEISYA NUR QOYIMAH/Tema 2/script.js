document.addEventListener("DOMContentLoaded", function() {
  let currentSlide = 0;
  const slides = document.querySelectorAll(".produk-card");
  
  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.style.display = (i === index) ? "block" : "none";
    });
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
  }

  // Tampilkan slide pertama
  showSlide(currentSlide);

  // Ganti slide tiap 3 detik
  setInterval(nextSlide, 3000);
});


document.addEventListener("DOMContentLoaded", function() {
  const cards = document.querySelectorAll(".produk-card");
  let index = 0;

  function showNextCard() {
    cards.forEach((card, i) => {
      card.style.transform = `translateX(${100 * (i - index)}%)`;
      card.style.transition = "transform 0.5s ease";
    });
    index = (index + 1) % cards.length;
  }

  showNextCard();
  setInterval(showNextCard, 3000);
});
