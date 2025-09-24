<?php get_header(); ?>

<!-- HOME -->
<div id="home" class="page active">
    <div class="card welcome-card">
        <h1 class="card-title">Halo, saya Nabila 👋</h1>
        <p style="font-size: 1.2rem; margin-bottom: 2rem;">
            Selamat datang di portfolio saya. Silakan scroll atau klik menu untuk melihat data pribadi, prestasi, pengalaman, keahlian, dan kontak.
        </p>
    </div>
</div>

<!-- DATA PRIBADI -->
<div id="data-pribadi" class="page">
    <div class="card">
        <h2 class="card-title">Data Pribadi</h2>
        <div class="profile-section">
            <div class="profile-image">
                <div class="profile-placeholder">👤</div>
                <h3 style="margin-top: 1rem; color: #1e40af;">Siti Nabila</h3>
            </div>
            <div class="info-grid">
                <div class="info-item"><span class="info-label">Nama Lengkap:</span> Siti Nabila Aulia Wibowo</div>
                <div class="info-item"><span class="info-label">TTL:</span> Bojonegoro, 30 April 2005</div>
                <div class="info-item"><span class="info-label">Jenis Kelamin:</span> Perempuan</div>
                <div class="info-item"><span class="info-label">Alamat:</span> Bojonegoro, Jawa Timur</div>
                <div class="info-item"><span class="info-label">Pendidikan:</span> Universitas Trunojoyo Madura</div>
                <div class="info-item"><span class="info-label">Jurusan:</span> Pendidikan Informatika</div>
                <div class="info-item"><span class="info-label">Email:</span> sitinabilasiti9@gmail.com</div>
                <div class="info-item"><span class="info-label">Telepon:</span> +6285856187608</div>
            </div>
        </div>
    </div>
</div>

<!-- PRESTASI -->
<div id="prestasi" class="page">
    <div class="card">
        <h2 class="card-title">Prestasi</h2>
        <ul>
            <li>Juara 1 Lomba Desain Web 2023</li>
            <li>Finalis UI/UX Competition 2024</li>
            <li>Peserta Microsoft Imagine Cup</li>
        </ul>
    </div>
</div>

<!-- PENGALAMAN -->
<div id="pengalaman" class="page">
    <div class="card">
        <h2 class="card-title">Pengalaman</h2>
        <p>- Magang di Dinas Kominfo Bojonegoro (2024)</p>
        <p>- Freelance Web Developer</p>
    </div>
</div>

<!-- KEAHLIAN -->
<div id="keahlian" class="page">
    <div class="card">
        <h2 class="card-title">Keahlian</h2>
        <div class="skill">
            <span>HTML</span>
            <div class="skill-bar"><div class="skill-progress" data-width="90%"></div></div>
        </div>
        <div class="skill">
            <span>CSS</span>
            <div class="skill-bar"><div class="skill-progress" data-width="80%"></div></div>
        </div>
        <div class="skill">
            <span>JavaScript</span>
            <div class="skill-bar"><div class="skill-progress" data-width="70%"></div></div>
        </div>
    </div>
</div>

<!-- KONTAK -->
<div id="kontak" class="page">
    <div class="card">
        <h2 class="card-title">Kontak</h2>
        <form>
            <input type="text" placeholder="Nama" required>
            <input type="email" placeholder="Email" required>
            <textarea placeholder="Pesan" required></textarea>
            <button type="submit">Kirim</button>
        </form>
    </div>
</div>

<?php get_footer(); ?>
