<?php
/**
 * IGNIS NUSANTARA 2026 - Galeri Dokumentasi Lapangan & Citra Satelit 2026
 * Techno Versary Vol. II HIMA-TI FKOM UNIKU
 * Sub-tema 8: Isu Lingkungan Global
 */
$page_title = 'Galeri Dokumentasi Lapangan & Citra Satelit 2026 | IGNIS Nusantara';
$current_page = 'galeri';

require_once __DIR__ . '/includes/header.php';

$gallery_items = [
  [
    'id' => 1,
    'title' => 'Water Bombing Helikopter Kamov Ka-32 di Pelalawan',
    'category' => 'satgas',
    'category_name' => 'Satgas Lapangan',
    'location' => 'Kabupaten Pelalawan, Riau',
    'date' => '25 Oktober 2026',
    'icon' => 'bi-airplane-engines-fill',
    'desc' => 'Operasi pemadaman udara mengerahkan bom air 5.000 liter untuk menekan perambatan kobaran api di kubah gambut dalam.'
  ],
  [
    'id' => 2,
    'title' => 'Deteksi Sensor Termal Satelit SNPP-VIIRS 375m',
    'category' => 'satelit',
    'category_name' => 'Citra Satelit',
    'location' => 'Kawasan Konsesi Gambut OKI, Sumsel',
    'date' => '02 November 2026',
    'icon' => 'bi-satellite-dish',
    'desc' => 'Tangkapan inframerah gelombang pendek menembus tutupan asap tebal guna mendeteksi inti panas bara bawah tanah.'
  ],
  [
    'id' => 3,
    'title' => 'Evakuasi Induk dan Bayi Orangutan Kalimantan',
    'category' => 'satwa',
    'category_name' => 'Penyelamatan Satwa',
    'location' => 'Hutan Lindung Gunung Palung, Kalbar',
    'date' => '04 November 2026',
    'icon' => 'bi-heart-pulse-fill',
    'desc' => 'Penyelamatan darurat oleh tim gabungan BKSDA terhadap satwa yang terjebak dehidrasi parah dan infeksi saluran napas.'
  ],
  [
    'id' => 4,
    'title' => 'Regu Manggala Agni Menggelar Teknik Suntik Gambut',
    'category' => 'satgas',
    'category_name' => 'Satgas Lapangan',
    'location' => 'Sebangau Kuala, Pulang Pisau, Kalteng',
    'date' => '08 November 2026',
    'icon' => 'bi-fire',
    'desc' => 'Menggunakan pipa nozzle bertekanan tinggi yang ditancapkan sedalam 2 meter untuk memadamkan bara gambut yang tersembunyi.'
  ],
  [
    'id' => 5,
    'title' => 'Kondisi Langit Pekat Asap dan Indeks ISPU Kritis',
    'category' => 'asap',
    'category_name' => 'Kabut Asap Warga',
    'location' => 'Jalur Lingkar Kota Palangka Raya, Kalteng',
    'date' => '10 November 2026',
    'icon' => 'bi-cloud-fog2-fill',
    'desc' => 'Jarak pandang berkurang drastis hingga di bawah 300 meter. Posko darurat mendistribusikan ribuan masker standar N95 kepada anak-anak.'
  ],
  [
    'id' => 6,
    'title' => 'Restorasi Sekat Kanal dan Pembibitan Pohon Rawa',
    'category' => 'restorasi',
    'category_name' => 'Restorasi Gambut',
    'location' => 'Desa Sungai Apit, Siak, Riau',
    'date' => '12 November 2026',
    'icon' => 'bi-tree-fill',
    'desc' => 'Pembangunan canal blocking permanen untuk membasahi kembali (rewetting) area gambut terdegradasi agar tidak mudah terbakar di musim depan.'
  ]
];
?>

<!-- Header Banner -->
<section class="py-5 bg-black border-bottom border-secondary">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <span class="badge-eco badge-orange-subtle mb-2">DOKUMENTASI VISUAL 2026</span>
        <h1 class="display-5 fw-bold text-white mb-2">Galeri Lapangan &amp; Pantauan Satelit</h1>
        <p class="lead text-muted mb-0">
          Potret nyata perjuangan regu pemadam, dampak ekologis terhadap satwa langka, serta upaya pemulihan ekosistem gambut Indonesia tahun 2026.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Filter & Galeri Grid -->
<section class="py-5">
  <div class="container">
    
    <!-- Filter Buttons -->
    <div class="d-flex flex-wrap gap-2 mb-4 pb-2 border-bottom border-secondary">
      <button class="btn btn-sm btn-orange gallery-filter-btn" data-filter="all">Semua Foto (6)</button>
      <button class="btn btn-sm btn-dark-custom gallery-filter-btn" data-filter="satgas">Satgas Lapangan</button>
      <button class="btn btn-sm btn-dark-custom gallery-filter-btn" data-filter="satelit">Citra Satelit</button>
      <button class="btn btn-sm btn-dark-custom gallery-filter-btn" data-filter="satwa">Penyelamatan Satwa</button>
      <button class="btn btn-sm btn-dark-custom gallery-filter-btn" data-filter="asap">Dampak Asap Warga</button>
      <button class="btn btn-sm btn-dark-custom gallery-filter-btn" data-filter="restorasi">Restorasi Gambut</button>
    </div>

    <!-- Gallery Grid Cards -->
    <div class="row g-4" id="gallery-container">
      <?php foreach ($gallery_items as $item): ?>
      <div class="col-lg-4 col-md-6 gallery-item" data-category="<?= e($item['category']) ?>">
        <div class="card-custom h-100 d-flex flex-column hover-lift overflow-hidden">
          
          <!-- Visual Decorative Canvas -->
          <div class="p-4 text-center d-flex flex-column align-items-center justify-content-center" style="background: linear-gradient(135deg, #182235, #0b0f17); min-height: 200px; border-bottom: 1px solid var(--border-color);">
            <div class="feature-icon-circle mb-2" style="width: 68px; height: 68px; font-size: 2rem;">
              <i class="bi <?= e($item['icon']) ?>"></i>
            </div>
            <span class="badge bg-black text-orange border border-secondary small">
              <i class="bi bi-camera-fill me-1"></i> Dokumentasi 2026
            </span>
          </div>

          <div class="p-4 d-flex flex-column h-100">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <span class="badge bg-secondary-subtle text-orange border border-secondary small">
                <?= e($item['category_name']) ?>
              </span>
              <small class="text-muted"><i class="bi bi-calendar-event me-1"></i><?= e($item['date']) ?></small>
            </div>

            <h5 class="text-white fw-bold mb-2"><?= e($item['title']) ?></h5>
            <div class="text-secondary small mb-3">
              <i class="bi bi-geo-alt-fill text-danger me-1"></i><?= e($item['location']) ?>
            </div>
            <p class="text-muted small mb-0 flex-grow-1">
              <?= e($item['desc']) ?>
            </p>
          </div>

        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
