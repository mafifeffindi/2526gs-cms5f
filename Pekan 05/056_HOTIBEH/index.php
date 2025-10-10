<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MyPress — Tema WordPress (Demo)</title>
  <meta name="description" content="Tampilan tema WordPress sederhana - demo satu file (HTML/CSS/JS)">
  <style>
    :root{
      --bg:#ffffff;
      --card:#ffffff;
      --muted:#6b6b6b;
      --accent:#1e90ff;
      --text:#111827;
      --header-height:72px;
      --radius:12px;
      --container:1100px;
    }
    [data-theme="dark"]{
      --bg:#0b1220;
      --card:#0f1724;
      --muted:#9aa4b2;
      --accent:#60a5fa;
      --text:#e6eef8;
    }
    *{box-sizing:border-box}
    html,body{height:100%}
    body{
      margin:0;font-family:Inter, ui-sans-serif, system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;
      background:linear-gradient(180deg,var(--bg),#f6f9ff 60%);
      color:var(--text);-webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale;line-height:1.45;
    }

    /* Container */
    .wrap{max-width:var(--container);margin:28px auto;padding:16px}

    /* Header / nav */
    header.site-header{position:sticky;top:14px;z-index:40;background:transparent;padding:8px 12px}
    .site-brand{display:flex;align-items:center;gap:14px}
    .logo{display:flex;align-items:center;gap:10px}
    .logo-mark{width:46px;height:46px;border-radius:10px;background:linear-gradient(135deg,var(--accent),#7c3aed);display:flex;align-items:center;justify-content:center;color:white;font-weight:700}
    .site-title{font-size:18px;font-weight:700}
    nav.primary{display:flex;gap:10px;align-items:center;margin-left:auto}
    .nav-link{padding:8px 12px;border-radius:8px;text-decoration:none;color:var(--text);font-weight:600}
    .nav-link:hover{background:rgba(0,0,0,0.04)}

    /* Header row */
    .header-row{display:flex;align-items:center;gap:16px;background:transparent;padding:10px;border-radius:12px}

    /* Hero */
    .hero{display:grid;grid-template-columns:1fr 340px;gap:18px;margin-top:18px}
    .hero-card{background:linear-gradient(180deg,var(--card),rgba(255,255,255,0.02));padding:20px;border-radius:var(--radius);box-shadow:0 6px 20px rgba(11,18,32,0.06)}
    .hero h1{margin:0 0 10px;font-size:28px}
    .hero p{margin:0 0 14px;color:var(--muted)}
    .cta-row{display:flex;gap:10px}
    .btn{display:inline-block;padding:10px 14px;border-radius:10px;text-decoration:none;font-weight:700}
    .btn-primary{background:var(--accent);color:white}
    .btn-ghost{background:transparent;border:1px solid rgba(0,0,0,0.06)}

    /* Posts and sidebar layout */
    .main-grid{display:grid;grid-template-columns:1fr 320px;gap:18px;margin-top:18px}
    .card{background:var(--card);padding:16px;border-radius:12px;box-shadow:0 6px 20px rgba(11,18,32,0.04)}
    .post{display:flex;gap:14px;align-items:flex-start;padding:14px 10px;border-radius:10px}
    .post + .post{margin-top:12px}
    .post-thumb{width:120px;height:80px;border-radius:8px;background:linear-gradient(135deg,#e0e7ff,#fef9c3);flex-shrink:0;display:flex;align-items:center;justify-content:center;color:#334155;font-weight:700}
    .post-body{flex:1}
    .post-title{margin:0;font-size:16px}
    .post-meta{font-size:13px;color:var(--muted);margin-top:6px}

    /* Sidebar components */
    .search{display:flex;gap:8px}
    .search input{flex:1;padding:10px;border-radius:10px;border:1px solid rgba(0,0,0,0.06)}
    .category-list{display:flex;flex-direction:column;gap:8px}
    .tag{display:inline-block;padding:6px 8px;border-radius:999px;border:1px solid rgba(0,0,0,0.06);font-size:13px}

    /* Footer */
    footer.site-footer{margin-top:28px;padding:20px;text-align:center;color:var(--muted)}

    /* Responsive */
    @media (max-width:920px){
      .hero{grid-template-columns:1fr}
      .main-grid{grid-template-columns:1fr}
      nav.primary{display:none}
      .mobile-show{display:flex}
      .wrap{padding:12px}
    }

    /* Small js-only classes */
    .hidden{display:none}
    .muted{color:var(--muted)}

    /* Accessibility focus */
    a:focus{outline:3px solid rgba(99,102,241,0.18);outline-offset:2px}
  </style>
</head>
<body>
  <div class="wrap">
    <header class="site-header" role="banner">
      <div class="header-row">
        <div class="site-brand" style="width:100%">
          <div class="logo">
            <div class="logo-mark">MP</div>
            <div>
              <div class="site-title">MyPress</div>
              <div class="muted" style="font-size:12px">Tema WordPress - Demo</div>
            </div>
          </div>

          <nav class="primary" role="navigation" aria-label="Menu utama">
            <a class="nav-link" href="#">Beranda</a>
            <a class="nav-link" href="#">Artikel</a>
            <a class="nav-link" href="#">Tentang</a>
            <a class="nav-link" href="#">Kontak</a>
            <button id="themeToggle" class="nav-link" title="Toggle tema">🌙</button>
          </nav>

          <button id="mobileMenuBtn" class="nav-link mobile-show hidden" aria-expanded="false" aria-controls="mobileMenu">☰</button>
        </div>
      </div>
    </header>

    <main>
      <section class="hero">
        <div class="hero-card">
          <h1>Selamat datang di Hotibeh — Tema WordPress ringan</h1>
          <p>Contoh halaman depan tema WordPress yang responsif, cepat, dan mudah dikembangkan. Dilengkapi komponen posting, sidebar, pencarian, dan mode gelap.</p>
          <div class="cta-row">
            <a href="#posts" class="btn btn-primary">Baca Artikel</a>
            <a href="#about" class="btn btn-ghost">Pelajari</a>
          </div>

          <hr style="margin:16px 0;border:none;border-top:1px solid rgba(0,0,0,0.06)">
          <div style="display:flex;gap:10px;align-items:center">
            <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='56' height='56'><rect width='100%' height='100%' rx='10' fill='%23e6eef8'/><text x='50%' y='54%' text-anchor='middle' font-size='20' fill='%23334755' font-family='Arial' font-weight='700'>A</text></svg>" alt="author" style="border-radius:8px;">
            <div>
              <div style="font-weight:700">Admin Hotibeh</div>
              <div class="muted" style="font-size:13px">Menerbitkan berita & tutorial web</div>
            </div>
          </div>
        </div>

        <aside class="card">
          <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:10px">
            <strong>Highlight</strong>
            <span class="muted" style="font-size:13px">5 menit baca</span>
          </div>
          <div style="font-size:14px;color:var(--muted)">Posting unggulan hari ini: <strong>Desain UI modern untuk blog sekolah</strong></div>
          <div style="margin-top:12px;display:flex;gap:8px;flex-wrap:wrap">
            <span class="tag">UI</span>
            <span class="tag">WordPress</span>
            <span class="tag">HTML</span>
            <span class="tag">CSS</span>
          </div>
        </aside>
      </section>

      <section class="main-grid" style="margin-top:18px">
        <div>
          <div class="card" id="posts">
            <h3>Artikel Terbaru</h3>

            <div class="post" data-title="Membuat Tema WordPress Sederhana">
              <div class="post-thumb">IMG</div>
              <div class="post-body">
                <h4 class="post-title">Membuat Tema WordPress Sederhana</h4>
                <div class="post-meta">12 Sep 2025 · 6 menit baca · Kategori: Tutorial</div>
                <p class="muted" style="margin-top:8px">Panduan langkah demi langkah membuat tema WordPress dasar dengan HTML, CSS, dan sedikit JS. Cocok untuk pemula.</p>
                <div style="margin-top:8px"><button class="btn btn-ghost" onclick="openPost(this)">Baca Lebih Lanjut</button></div>
              </div>
            </div>

            <div class="post" data-title="Optimasi Kecepatan Situs Sekolah">
              <div class="post-thumb">IMG</div>
              <div class="post-body">
                <h4 class="post-title">Optimasi Kecepatan Situs Sekolah</h4>
                <div class="post-meta">5 Sep 2025 · 9 menit baca · Kategori: Keamanan</div>
                <p class="muted" style="margin-top:8px">Teknik ringan untuk mempercepat website sekolah tanpa perlu hosting mahal.</p>
                <div style="margin-top:8px"><button class="btn btn-ghost" onclick="openPost(this)">Baca Lebih Lanjut</button></div>
              </div>
            </div>

            <div class="post" data-title="Desain Poster untuk Acara Sekolah">
              <div class="post-thumb">IMG</div>
              <div class="post-body">
                <h4 class="post-title">Desain Poster untuk Acara Sekolah</h4>
                <div class="post-meta">22 Agu 2025 · 4 menit baca · Kategori: Desain</div>
                <p class="muted" style="margin-top:8px">Contoh layout poster acara dengan elemen tajam dan kontras warna yang efektif.</p>
                <div style="margin-top:8px"><button class="btn btn-ghost" onclick="openPost(this)">Baca Lebih Lanjut</button></div>
              </div>
            </div>

          </div>

          <div class="card" style="margin-top:16px">
            <h4>Kategori Populer</h4>
            <div class="category-list" style="margin-top:8px">
              <a href="#" class="nav-link">Tutorial</a>
              <a href="#" class="nav-link">Keamanan</a>
              <a href="#" class="nav-link">Desain</a>
              <a href="#" class="nav-link">Pemrograman</a>
            </div>
          </div>
        </div>

        <aside>
          <div class="card">
            <h4>Pencarian</h4>
            <div class="search" style="margin-top:8px">
              <input id="searchInput" placeholder="Cari artikel..." aria-label="Cari artikel">
              <button class="btn btn-primary" onclick="doSearch()">Cari</button>
            </div>
            <div id="searchHint" class="muted" style="margin-top:8px;font-size:13px">Ketik kata kunci, contoh: "Desain"</div>
          </div>

          <div class="card" style="margin-top:12px">
            <h4>Tentang Penulis</h4>
            <p class="muted">Admin MyPress — Menulis topik web, desain, dan edukasi. Tooling sederhana untuk sekolah & UKM.</p>
          </div>

          <div class="card" style="margin-top:12px">
            <h4>Tag Populer</h4>
            <div style="margin-top:8px;display:flex;gap:8px;flex-wrap:wrap">
              <span class="tag">WordPress</span>
              <span class="tag">HTML</span>
              <span class="tag">CSS</span>
              <span class="tag">Javascript</span>
              <span class="tag">Keamanan</span>
            </div>
          </div>
        </aside>
      </section>

      <section id="about" style="margin-top:18px">
        <div class="card">
          <h3>Tentang Tema</h3>
          <p class="muted">Tema ini didesain sebagai starting point untuk membuat tema WordPress. Untuk penggunaan nyata, pisahkan file CSS, JS, dan gunakan template PHP WordPress (header.php, index.php, single.php, functions.php, dsb.).</p>
        </div>
      </section>

    </main>

    <footer class="site-footer">
      <div class="muted">© 2025 MyPress • Dibuat untuk demo tampilan tema WordPress</div>
    </footer>
  </div>

  <template id="postModalTpl">
    <div style="padding:18px;max-width:720px">
      <h2 id="modalTitle">Judul</h2>
      <div class="muted" id="modalMeta">Meta</div>
      <p style="margin-top:12px">Konten artikel demo. Untuk versi penuh, integrasikan dengan PHP + loop WordPress.</p>
    </div>
  </template>

  <script>
    // Mobile menu toggle (basic)
    const mobileBtn = document.getElementById('mobileMenuBtn');
    mobileBtn?.addEventListener('click', ()=>{
      const nav = document.querySelector('nav.primary');
      const expanded = mobileBtn.getAttribute('aria-expanded') === 'true';
      mobileBtn.setAttribute('aria-expanded', (!expanded).toString());
      if(nav) nav.style.display = expanded? 'none':'flex';
    });

    // Theme toggle
    const themeToggle = document.getElementById('themeToggle');
    function applyTheme(theme){
      if(theme === 'dark') document.documentElement.setAttribute('data-theme','dark');
      else document.documentElement.removeAttribute('data-theme');
      localStorage.setItem('theme', theme);
      themeToggle.textContent = theme === 'dark'? '☀️':'🌙';
    }
    themeToggle?.addEventListener('click', ()=>{
      const cur = document.documentElement.getAttribute('data-theme') === 'dark' ? 'dark' : 'light';
      applyTheme(cur === 'dark' ? 'light' : 'dark');
    });
    // restore
    (function(){
      const saved = localStorage.getItem('theme') || (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches? 'dark':'light');
      applyTheme(saved);
    })();

    // Search function: filter posts by data-title
    function doSearch(){
      const q = document.getElementById('searchInput').value.toLowerCase().trim();
      const posts = document.querySelectorAll('.post');
      if(!q){
        posts.forEach(p=>p.style.display='flex');
        return;
      }
      posts.forEach(p=>{
        const title = (p.dataset.title||'').toLowerCase();
        p.style.display = title.includes(q)? 'flex':'none';
      });
    }

    // Open post modal (very simple)
    function openPost(btn){
      const post = btn.closest('.post');
      const title = post?.dataset.title || 'Artikel';
      const tpl = document.getElementById('postModalTpl');
      const overlay = document.createElement('div');
      overlay.style= 'position:fixed;inset:0;display:flex;align-items:center;justify-content:center;background:rgba(2,6,23,0.6);z-index:100';
      const card = document.createElement('div');
      card.style = 'background:var(--card);padding:18px;border-radius:12px;max-width:760px;box-shadow:0 10px 40px rgba(2,6,23,0.45);color:var(--text)';
      const content = tpl.content.cloneNode(true);
      content.getElementById('modalTitle').textContent = title;
      content.getElementById('modalMeta').textContent = post.querySelector('.post-meta')?.textContent || '';
      card.appendChild(content);
      const close = document.createElement('button');
      close.textContent='Tutup';
      close.className='btn btn-ghost';
      close.style.marginTop='12px';
      close.onclick = ()=> document.body.removeChild(overlay);
      card.appendChild(close);
      overlay.appendChild(card);
      document.body.appendChild(overlay);
    }

    // Keyboard accessibility: Escape closes modal
    document.addEventListener('keydown', (e)=>{
      if(e.key === 'Escape'){
        const overlays = Array.from(document.querySelectorAll('body > div'));
        overlays.forEach(d=>{ if(d.style && d.style.zIndex=='100') d.remove(); });
      }
    });
  </script>
</body>
</html>
