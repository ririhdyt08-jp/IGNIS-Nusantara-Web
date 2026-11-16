<?php
/**
 * IGNIS NUSANTARA 2026 - Beranda (Home Page)
 * Techno Versary Vol. II HIMA-TI FKOM UNIKU
 * Sub-tema 8: Isu Lingkungan Global - Karhutla Indonesia
 */
$page_title = 'IGNIS Nusantara 2026 | Beranda - Portal Pemantauan GIS Karhutla & Iklim Global';
$current_page = 'home';
$enable_map = true;
$map_container_id = 'gis-map-preview';
$map_is_preview = true;

require_once __DIR__ . '/includes/header.php';
$stats = get_hotspot_statistics();
$articles = array_slice(get_articles_data(), 0, 3);
$recent_hotspots = array_slice(get_hotspots_data(), 0, 4);
?>

<!-- Hero Section -->
<section class="hero-wrapper">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-lg-7">
        <div class="status-live-pill">
          <span class="pulse-indicator"></span>
          <span>STATUS MONITORING: SIAGA DARURAT KARHUTLA 2026</span>
        </div>
        <h1 class="display-4 fw-extrabold text-white mb-3">
          Meredam Api, Melindungi <span class="text-orange-glow">Paru-Paru Dunia.</span>
        </h1>
        <p class="lead text-muted mb-4" style="max-width: 600px;">
          Solusi <strong class="text-white">EcoDigital</strong> terintegrasi untuk pemantauan titik api (hotspot) lahan gambut di Indonesia secara real-time. Mengurangi emisi karbon global dan menyelamatkan keanekaragaman hayati tropis demi masa depan bumi 2026.
        </p>
        <div class="d-flex flex-wrap gap-3 mb-4">
          <a href="gis.php" class="btn btn-orange btn-lg">
            <i class="bi bi-map-fill me-2"></i> Jelajahi Peta GIS 2026
          </a>
          <a href="donasi.php" class="btn btn-outline-orange btn-lg">
            <i class="bi bi-heart-fill me-2"></i> Donasi Aksi Tanggap
          </a>
          <a href="about.php" class="btn btn-dark-custom btn-lg">
            Pelajari Isu Global &rarr;
          </a>
        </div>
        <div class="d-flex align-items-center gap-3 text-muted small">
          <div><i class="bi bi-check-circle-fill text-success me-1"></i> Data Satelit Terintegrasi 2026</div>
          <div><i class="bi bi-check-circle-fill text-success me-1"></i> SNPP-VIIRS & MODIS</div>
          <div><i class="bi bi-check-circle-fill text-success me-1"></i> Siaga Lahan Gambut</div>
        </div>
      </div>

      <!-- Quick GIS Interactive Teaser -->
      <div class="col-lg-5">
        <div class="card-custom p-3 shadow-lg">
          <div class="d-flex justify-content-between align-items-center mb-2 px-1">
            <div class="small fw-bold text-white">
              <i class="bi bi-geo-alt-fill text-orange me-1"></i> Pantauan Sebaran Hotspot 2026
            </div>
            <a href="gis.php" class="small text-orange text-decoration-none fw-semibold">
              Buka Layar Penuh <i class="bi bi-arrow-right"></i>
            </a>
          </div>
          <div id="gis-map-preview"></div>
          <div class="d-flex justify-content-between align-items-center mt-2 px-1 small text-muted">
            <span><i class="bi bi-circle-fill text-danger me-1" style="font-size: 8px;"></i> Risiko Kritis</span>
            <span><i class="bi bi-circle-fill text-warning me-1" style="font-size: 8px;"></i> Sedang / Tinggi</span>
            <span><i class="bi bi-circle-fill text-info me-1" style="font-size: 8px;"></i> Terkendali</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Real-time Stat Counters (2026 Dataset) -->
<section class="py-5 bg-secondary-subtle" style="background-color: #0e141f !important; border-bottom: 1px solid var(--border-color);">
  <div class="container">
    <div class="row g-4">
      <div class="col-6 col-lg-3">
        <div class="stat-box">
          <div class="stat-number text-orange counter-anim" data-target="<?= $stats['total'] ?>">0</div>
          <div class="stat-label">Titik Api Terdeteksi (2026)</div>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="stat-box">
          <div class="stat-number text-danger counter-anim" data-target="<?= $stats['high_risk'] ?>">0</div>
          <div class="stat-label">Hotspot Risiko Tinggi (&ge;80%)</div>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="stat-box">
          <div class="stat-number text-warning counter-anim" data-target="<?= $stats['peatland'] ?>">0</div>
          <div class="stat-label">Di Area Lahan Gambut</div>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="stat-box">
          <div class="stat-number text-info counter-anim" data-target="14250">0</div>
          <div class="stat-label">Hektar Terpantau Sensor</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Mengapa Karhutla Adalah Isu Lingkungan Global? (Sub-Tema 8) -->
<section class="py-5">
  <div class="container">
    <div class="text-center mb-5" style="max-width: 720px; margin: 0 auto;">
      <span class="badge-eco badge-orange-subtle mb-2">SUB-TEMA 8: ISU LINGKUNGAN GLOBAL</span>
      <h2 class="display-6 fw-bold text-white">Mengapa Karhutla di Indonesia Merupakan Krisis Dunia?</h2>
      <p class="text-muted">
        Kebakaran hutan dan lahan di Indonesia bukan sekadar masalah lokal, melainkan detonator utama percepatan krisis iklim planet bumi.
      </p>
    </div>

    <div class="row g-4">
      <div class="col-md-4">
        <div class="impact-card">
          <div class="feature-icon-circle">
            <i class="bi bi-cloud-haze2-fill"></i>
          </div>
          <h4 class="text-white fw-bold mb-2">Bom Karbon Gambut (Carbon Sink)</h4>
          <p class="text-muted small">
            Lahan gambut tropis Indonesia menyimpan lebih dari 57 Gigaton karbon purba. Saat terbakar di tahun 2026, pelepasan gas metana dan $CO_2$ melipatgandakan efek rumah kaca global lebih cepat daripada kebakaran hutan boreal.
          </p>
          <div class="border-top border-secondary pt-2 mt-3 small text-orange fw-semibold">
            <i class="bi bi-arrow-up-right me-1"></i> Melepas Jutaan Ton Emisi Emisi GHG
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="impact-card" style="border-left-color: #f97316;">
          <div class="feature-icon-circle">
            <i class="bi bi-globe-americas"></i>
          </div>
          <h4 class="text-white fw-bold mb-2">Kabut Asap Lintas Batas (Transboundary Haze)</h4>
          <p class="text-muted small">
            Partikulat beracun PM2.5 terbawa angin monsun hingga ribuan kilometer melintasi perbatasan negara tetangga (Singapura, Malaysia, Brunei), melumpuhkan transportasi udara dan mengancam kesehatan pernapasan jutaan orang.
          </p>
          <div class="border-top border-secondary pt-2 mt-3 small text-orange fw-semibold">
            <i class="bi bi-arrow-up-right me-1"></i> Perjanjian ASEAN Haze 2026
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="impact-card" style="border-left-color: #ea580c;">
          <div class="feature-icon-circle">
            <i class="bi bi-shield-shaded"></i>
          </div>
          <h4 class="text-white fw-bold mb-2">Kepunahan Biodiversitas Langka</h4>
          <p class="text-muted small">
            Hutan tropis Sumatra dan Kalimantan adalah rumah bagi Orangutan, Harimau Sumatra, dan Gajah Kerdil. Kebakaran memusnahkan koridor migrasi dan habitat yang tak tergantikan dalam rantai ekologi dunia.
          </p>
          <div class="border-top border-secondary pt-2 mt-3 small text-orange fw-semibold">
            <i class="bi bi-arrow-up-right me-1"></i> Ancaman Punah Spesies Kunci
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Latest Hotspot Ticker / Alerts -->
<section class="py-5" style="background-color: #0e131e; border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color);">
  <div class="container">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-2">
      <div>
        <h3 class="fw-bold text-white mb-1"><i class="bi bi-radar text-orange me-2"></i>Titik Api Terkini (Deteksi Satelit 2026)</h3>
        <p class="text-muted small mb-0">Dipantau langsung dari sensor SNPP-VIIRS dan Aqua/Terra MODIS SiPongi KLHK.</p>
      </div>
      <div>
        <a href="gis.php" class="btn btn-outline-orange btn-sm">
          Lihat Semua Hotspot di GIS <i class="bi bi-arrow-right ms-1"></i>
        </a>
      </div>
    </div>

    <div class="row g-3">
      <?php foreach ($recent_hotspots as $hs): ?>
      <div class="col-md-6 col-lg-3">
        <div class="card-custom p-3 h-100 hover-lift">
          <div class="d-flex justify-content-between align-items-center mb-2">
            <span class="badge <?= $hs['confidence'] >= 85 ? 'bg-danger' : 'bg-warning text-dark' ?> fw-bold">
              <?= $hs['confidence'] ?>% Confidence
            </span>
            <small class="text-muted"><?= e($hs['id']) ?></small>
          </div>
          <h5 class="text-white fw-bold fs-6 mb-1"><?= e($hs['district']) ?></h5>
          <div class="text-muted small mb-2"><i class="bi bi-geo-alt text-danger me-1"></i><?= e($hs['province']) ?>, Kec. <?= e($hs['subdistrict']) ?></div>
          
          <div class="small mb-3">
            <div class="d-flex justify-content-between text-secondary">
              <span>Satelit:</span>
              <span class="text-light"><?= e($hs['satellite']) ?></span>
            </div>
            <div class="d-flex justify-content-between text-secondary">
              <span>Lahan:</span>
              <span class="<?= $hs['peatland'] ? 'text-warning' : 'text-info' ?>"><?= $hs['peatland'] ? 'Gambut' : 'Mineral' ?></span>
            </div>
          </div>

          <div class="mt-auto pt-2 border-top border-secondary d-flex justify-content-between align-items-center">
            <span class="badge <?= get_ispu_badge_class($hs['ispu_status']) ?>" style="font-size: 0.72rem;">
              ISPU: <?= $hs['ispu'] ?>
            </span>
            <a href="gis.php" class="btn btn-sm btn-dark-custom py-0 px-2 small">Detail</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Featured Articles & Edukasi Lingkungan 2026 -->
<section class="py-5">
  <div class="container">
    <div class="d-flex justify-content-between align-items-end mb-4">
      <div>
        <span class="badge-eco badge-orange-subtle mb-1">EDUKASI & RISET</span>
        <h3 class="fw-bold text-white mb-0">Artikel & Wawasan Karhutla 2026</h3>
      </div>
      <a href="artikel.php" class="btn btn-outline-secondary btn-sm text-light">
        Semua Artikel <i class="bi bi-chevron-right ms-1"></i>
      </a>
    </div>

    <div class="row g-4">
      <?php foreach ($articles as $art): ?>
      <div class="col-lg-4 col-md-6">
        <div class="card-custom h-100 d-flex flex-column hover-lift">
          <div class="p-4 d-flex flex-column h-100">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <span class="badge bg-secondary-subtle text-orange border border-secondary small">
                <?= e($art['category']) ?>
              </span>
              <small class="text-muted"><i class="bi bi-clock me-1"></i><?= e($art['read_time']) ?></small>
            </div>
            <h5 class="text-white fw-bold mb-3">
              <a href="artikel-detail.php?slug=<?= e($art['slug']) ?>" class="text-white text-decoration-none hover-orange">
                <?= e($art['title']) ?>
              </a>
            </h5>
            <p class="text-muted small mb-4 flex-grow-1">
              <?= e($art['summary']) ?>
            </p>
            <div class="pt-3 border-top border-secondary d-flex justify-content-between align-items-center mt-auto">
              <small class="text-muted"><?= e($art['date']) ?></small>
              <a href="artikel-detail.php?slug=<?= e($art['slug']) ?>" class="text-orange text-decoration-none small fw-semibold">
                Baca Selengkapnya &rarr;
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Action Banner: Donasi & Lapor Karhutla -->
<section class="py-5" style="background: linear-gradient(135deg, #161e2e, #0e131d); border-top: 1px solid var(--border-color);">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-lg-8">
        <h3 class="fw-bold text-white mb-2">Bantu Petugas Satgas & Masyarakat Terdampak Karhutla 2026</h3>
        <p class="text-muted mb-0">
          Dukungan Anda disalurkan langsung untuk pengadaan masker gas N95, tabung oksigen posko darurat, serta logistik regu pemadam Manggala Agni di garis depan kebakaran gambut.
        </p>
      </div>
      <div class="col-lg-4 text-lg-end">
        <div class="d-flex flex-wrap gap-2 justify-content-lg-end">
          <a href="donasi.php" class="btn btn-orange">
            <i class="bi bi-heart-fill me-1"></i> Donasi Sekarang
          </a>
          <a href="kontak.php#form-lapor" class="btn btn-outline-orange">
            <i class="bi bi-telephone-fill me-1"></i> Hubungi Satgas
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
