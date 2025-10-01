<?php get_header(); ?>

<section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero.jpeg');">
  <div class="hero-text">
    <h1>Selamat Datang di Universitas Trunojoyo Madura</h1>
    <p>Unggul, Tangguh, Mandiri</p>
  </div>
</section>

<main>
  
</main>
<section class="about">
  <div class="about-container">
    <div class="about-text">
      <h2><span class="highlight">Tentang</span> Universitas Trunojoyo Madura</h2>
      <p>
        Universitas Trunojoyo Madura (UTM) adalah perguruan tinggi negeri yang
        berkomitmen pada pengembangan ilmu pengetahuan, teknologi, dan seni.
        Sebagai pusat pendidikan tinggi, UTM hadir untuk mencetak generasi yang
        <strong>Unggul, Tangguh, dan Mandiri</strong>.
      </p>
      <a href="#" class="btn-about">Lihat Lebih Banyak</a>
    </div>
    <div class="about-image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo UTM">
    </div>
  </div>
</section>

<section id="info-kampus" class="container mt-5">
  <h2 class="mb-4 text-center">Informasi Kampus</h2>

  <div class="three-boxes">
    <!-- Box 1 -->
    <div class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/daftar.jpg" alt="Cara Mendaftar">
      <h3>Cara Mendaftar</h3>
      <p>Panduan lengkap untuk melakukan pendaftaran di UTM.</p>
    </div>

    <!-- Box 2 -->
    <div class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/beasiswa.jpg" alt="Beasiswa">
      <h3>Beasiswa</h3>
      <p>Informasi beasiswa yang tersedia untuk mahasiswa UTM.</p>
    </div>

    <!-- Box 3 -->
    <div class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kampus.jpg" alt="Kehidupan di Kampus">
      <h3>Kehidupan di Kampus</h3>
      <p>Suasana belajar dan kegiatan mahasiswa di kampus UTM.</p>
    </div>
  </div>
</section>

<?php get_footer(); ?>
