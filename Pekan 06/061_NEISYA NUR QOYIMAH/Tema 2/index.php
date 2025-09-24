<?php get_header(); ?>
<main class="wrap">
  <section class="hero">
  <div class="hero-text">
    <h1>Selamat Datang di Bakery Kami</h1>
    <p>Roti fresh setiap hari, manis, lembut, dan penuh cinta!</p>
    <a href="#produk" class="btn-hero">Lihat Produk Kami</a>
  </div>
  <div class="hero-balloons">
    <span></span><span></span><span></span><span></span>
  </div>
</section>


  <section class="produk">
    <h2>Produk Unggulan</h2>
    <div class="produk-grid">
      <div class="produk-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/roti1.jpg" alt="Roti Manis">
        <h3>Roti Manis</h3>
        <p>Roti lembut dengan isian cokelat manis.</p>
      </div>
      <div class="produk-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/roti2.jpg" alt="Croissant">
        <h3>Croissant</h3>
        <p>Kue khas Perancis, renyah di luar lembut di dalam.</p>
      </div>
      <div class="produk-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/roti3.jpg" alt="Donat">
        <h3>Donat</h3>
        <p>Donat empuk dengan topping manis menggoda.</p>
      </div>
    </div>
  </section>

  <section class="tentang">
    <h2>Tentang Kami</h2>
    <div class="tentang-box">
      <p>Kami adalah toko roti keluarga yang menghadirkan berbagai macam roti dan kue berkualitas dengan bahan pilihan terbaik. Setiap gigitan adalah rasa kebahagiaan.</p>
    </div>
  </section>
  
  <section class="testimonial">
  <h2>Apa Kata Mereka</h2>
  <div class="testimonial-grid">
    <div class="testimonial-card">
      <p>"Roti di sini selalu fresh dan enak! Setiap gigitan bikin bahagia."</p>
      <h4>- Dina, Pelanggan Setia</h4>
    </div>
    <div class="testimonial-card">
      <p>"Croissantnya luar biasa renyah di luar tapi lembut di dalam!"</p>
      <h4>- Budi, Penikmat Kue</h4>
    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>
