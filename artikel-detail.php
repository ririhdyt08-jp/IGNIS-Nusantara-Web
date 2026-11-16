<?php
/**
 * IGNIS NUSANTARA 2026 - Detail Artikel
 * Techno Versary Vol. II HIMA-TI FKOM UNIKU
 */
$slug = $_GET['slug'] ?? '';
require_once __DIR__ . '/includes/functions.php';

$article = get_article_by_slug($slug);

if (!$article) {
    header('Location: artikel.php');
    exit;
}

$page_title = e($article['title']) . ' | IGNIS Nusantara 2026';
$current_page = 'artikel';

require_once __DIR__ . '/includes/header.php';

// Ambil artikel terkait lainnya
$all_articles = get_articles_data();
$related = [];
foreach ($all_articles as $a) {
    if ($a['id'] !== $article['id']) {
        $related[] = $a;
    }
}
$related = array_slice($related, 0, 2);
?>

<!-- Breadcrumbs & Title Header -->
<section class="py-5 bg-black border-bottom border-secondary">
  <div class="container" style="max-width: 900px;">
    <nav aria-label="breadcrumb" class="mb-3">
      <ol class="breadcrumb small">
        <li class="breadcrumb-item"><a href="index.php" class="text-muted text-decoration-none">Beranda</a></li>
        <li class="breadcrumb-item"><a href="artikel.php" class="text-muted text-decoration-none">Artikel</a></li>
        <li class="breadcrumb-item active text-orange" aria-current="page"><?= e($article['category']) ?></li>
      </ol>
    </nav>
    <div class="d-flex align-items-center gap-2 mb-3">
      <span class="badge bg-secondary-subtle text-orange border border-secondary"><?= e($article['category']) ?></span>
      <span class="text-muted small">&bull;</span>
      <span class="text-muted small"><i class="bi bi-calendar3 me-1"></i><?= e($article['date']) ?></span>
      <span class="text-muted small">&bull;</span>
      <span class="text-muted small"><i class="bi bi-clock me-1"></i><?= e($article['read_time']) ?></span>
    </div>
    <h1 class="display-6 fw-bold text-white mb-3"><?= e($article['title']) ?></h1>
    <div class="d-flex align-items-center gap-3 text-muted small">
      <div><i class="bi bi-person-circle text-orange me-1"></i> Penulis: <strong class="text-light"><?= e($article['author']) ?></strong></div>
    </div>
  </div>
</section>

<!-- Konten Utama Artikel -->
<section class="py-5">
  <div class="container" style="max-width: 900px;">
    <div class="row">
      <div class="col-12">
        
        <!-- Summary Box Highlight -->
        <div class="p-4 rounded-3 mb-4 bg-card border-start border-4 border-orange">
          <h6 class="text-orange fw-bold text-uppercase small mb-2"><i class="bi bi-chat-quote-fill me-1"></i> Intisari Riset:</h6>
          <p class="text-light mb-0 fst-italic">
            <?= e($article['summary']) ?>
          </p>
        </div>

        <!-- Konten Body HTML -->
        <div class="article-content text-light" style="font-size: 1.05rem; line-height: 1.85;">
          <?= $article['content'] ?>
        </div>

        <!-- Bagikan Artikel -->
        <div class="py-4 my-5 border-top border-bottom border-secondary d-flex flex-column flex-sm-row justify-content-between align-items-center gap-3">
          <div class="text-muted small">
            <strong class="text-white">Bagikan Edukasi Ini:</strong> Sebarkan kesadaran lingkungan global karhutla.
          </div>
          <div class="d-flex gap-2">
            <a href="https://api.whatsapp.com/send?text=<?= urlencode($article['title'] . ' - Baca di IGNIS Nusantara 2026') ?>" target="_blank" class="btn btn-sm btn-dark-custom">
              <i class="bi bi-whatsapp text-success me-1"></i> WhatsApp
            </a>
            <a href="https://twitter.com/intent/tweet?text=<?= urlencode($article['title']) ?>" target="_blank" class="btn btn-sm btn-dark-custom">
              <i class="bi bi-twitter-x text-light me-1"></i> Twitter
            </a>
            <button class="btn btn-sm btn-outline-orange" onclick="navigator.clipboard.writeText(window.location.href); alert('Tautan artikel berhasil disalin!');">
              <i class="bi bi-link-45deg me-1"></i> Salin Tautan
            </button>
          </div>
        </div>

        <!-- Terkait / Next Reads -->
        <h4 class="fw-bold text-white mb-3">Artikel Terkait Lainnya</h4>
        <div class="row g-3">
          <?php foreach ($related as $rel): ?>
          <div class="col-md-6">
            <div class="card-custom p-3 h-100 d-flex flex-column hover-lift">
              <div class="small text-orange mb-1"><?= e($rel['category']) ?></div>
              <h6 class="text-white fw-bold mb-2">
                <a href="artikel-detail.php?slug=<?= e($rel['slug']) ?>" class="text-white text-decoration-none">
                  <?= e($rel['title']) ?>
                </a>
              </h6>
              <div class="mt-auto pt-2 small text-muted d-flex justify-content-between">
                <span><?= e($rel['date']) ?></span>
                <span class="text-orange">Baca &rarr;</span>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
