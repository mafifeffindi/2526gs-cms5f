<?php get_header(); ?>

<div class="container">

    <!-- Home Section -->
    <section id="home" class="page active">
        <div class="card welcome-card">
            <h1 class="card-title">Halo, saya Nabila 👋</h1>
            <p>Selamat datang di portfolio saya.</p>
        </div>
    </section>

    <!-- Data Pribadi -->
    <section id="data-pribadi" class="page">
        <div class="card">
            <h2 class="card-title">Data Pribadi</h2>
            <p>Nama: Siti Nabila Aulia Wibowo</p>
            <p>TTL: Bojonegoro, 30 April 2005</p>
            <p>Email: sitinabilasiti9@gmail.com</p>
        </div>
    </section>

    <!-- Prestasi -->
    <section id="prestasi" class="page">
        <div class="card">
            <h2 class="card-title">Prestasi</h2>
            <ul>
                <li>Juara 1 Lomba Desain Web 2023</li>
                <li>Finalis UI/UX Competition 2024</li>
                <li>Peserta Microsoft Imagine Cup</li>
            </ul>
        </div>
    </section>

    <!-- Pengalaman -->
    <section id="pengalaman" class="page">
        <div class="card">
            <h2 class="card-title">Pengalaman</h2>
            <p>Magang di Dinas Kominfo Bojonegoro (2024)</p>
            <p>Freelance Web Developer</p>
        </div>
    </section>

    <!-- Keahlian -->
    <section id="keahlian" class="page">
        <div class="card">
            <h2 class="card-title">Keahlian</h2>
            <p>HTML, CSS, JavaScript, PHP, WordPress</p>
        </div>
    </section>

    <!-- Kontak -->
    <section id="kontak" class="page">
        <div class="card">
            <h2 class="card-title">Kontak</h2>
            <form>
                <input type="text" placeholder="Nama" required>
                <input type="email" placeholder="Email" required>
                <textarea placeholder="Pesan" required></textarea>
                <button type="submit">Kirim</button>
            </form>
        </div>
    </section>

</div>

<?php get_footer(); ?>
