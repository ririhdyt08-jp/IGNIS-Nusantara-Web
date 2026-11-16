<?php
/**
 * IGNIS NUSANTARA 2026 - Halaman Artikel & Edukasi Karhutla
 * Techno Versary Vol. II HIMA-TI FKOM UNIKU
 * Sub-tema 8: Isu Lingkungan Global
 */
$page_title = 'Artikel & Edukasi Karhutla 2026 | IGNIS Nusantara';
$current_page = 'artikel';

require_once __DIR__ . '/includes/header.php';
$articles = get_articles_data();

// Filter Kategori
$selected_cat = $_GET['cat'] ?? 'all';
$filtered_articles = [];

foreach ($articles as $art) {
    if ($selected_cat === 'all' || $art['category'] === $selected_cat) {
        $filtered_articles[] = $art;
    }
}

// Ambil Kategori Unik
$categories = array_unique(array_column($articles, 'category'));
?>

<!-- Header Banner -->
<section class="py-5 bg-black border-bottom border-secondary">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <span class="badge-eco badge-orange-subtle mb-2">LITERASI LINGKUNGAN 2026</span>
        <h1 class="display-5 fw-bold text-white mb-2">Artikel, Riset &amp; Edukasi Karhutla</h1>
        <p class="lead text-muted mb-0">
          Kumpulan analisis mendalam mengenai anomali iklim tropis, sains kebakaran lahan gambut, diplomasi kabut asap lintas batas, serta panduan kesehatan masyarakat tahun 2026.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Filter Kategori & List Artikel -->
<section class="py-5">
  <div class="container">
    
    <!-- Kategori Filter Pills -->
    <div class="d-flex flex-wrap gap-2 mb-4 pb-2 border-bottom border-secondary">
      <a href="artikel.php?cat=all" class="btn btn-sm <?= $selected_cat === 'all' ? 'btn-orange' : 'btn-dark-custom' ?>">
        Semua Kategori (<?= count($articles) ?>)
      </a>
      <?php foreach ($categories as $cat): ?>
        <a href="artikel.php?cat=<?= urlencode($cat) ?>" class="btn btn-sm <?= $selected_cat === $cat ? 'btn-orange' : 'btn-dark-custom' ?>">
          <?= e($cat) ?>
        </a>
      <?php endforeach; ?>
    </div>

    <!-- Article Cards Grid -->
    <div class="row g-4">
      <?php if (empty($filtered_articles)): ?>
        <div class="col-12 text-center py-5">
          <i class="bi bi-journal-x text-muted" style="font-size: 3rem;"></i>
          <p class="text-muted mt-3">Tidak ditemukan artikel dalam kategori yang dipilih.</p>
          <a href="artikel.php" class="btn btn-sm btn-outline-orange">Tampilkan Semua Artikel</a>
        </div>
      <?php else: ?>
        <?php foreach ($filtered_articles as $art): ?>
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
                  <a href="artikel-detail.php?slug=<?= e($art['slug']) ?>" class="text-white text-decoration-none">
                    <?= e($art['title']) ?>
                  </a>
                </h5>
                
                <p class="text-muted small mb-4 flex-grow-1">
                  <?= e($art['summary']) ?>
                </p>

                <div class="pt-3 border-top border-secondary d-flex justify-content-between align-items-center mt-auto">
                  <small class="text-muted">
                    <i class="bi bi-calendar3 me-1"></i><?= e($art['date']) ?>
                  </small>
                  <a href="artikel-detail.php?slug=<?= e($art['slug']) ?>" class="btn btn-sm btn-outline-orange py-1 px-3">
                    Baca <i class="bi bi-arrow-right ms-1"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

    <!-- Info Box Edukasi -->
    <div class="mt-5 p-4 rounded-3 bg-card border border-orange">
      <div class="row align-items-center g-3">
        <div class="col-md-8">
          <h5 class="text-white fw-bold mb-1"><i class="bi bi-lightbulb-fill text-warning me-2"></i>Ingin Berkontribusi Menulis Opini Lingkungan?</h5>
          <p class="text-muted small mb-0">Platform IGNIS membuka ruang bagi pelajar, mahasiswa, dan peneliti untuk mempublikasikan artikel advokasi iklim dan pencegahan karhutla.</p>
        </div>
        <div class="col-md-4 text-md-end">
          <a href="kontak.php" class="btn btn-orange btn-sm">Hubungi Redaksi Tim</a>
        </div>
      </div>
    </div>

  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
