<?php
/**
 * IGNIS NUSANTARA 2026 - Peta GIS Titik Api (Hotspot Map Explorer)
 * Techno Versary Vol. II HIMA-TI FKOM UNIKU
 * Sistem Informasi Geografis Kebakaran Hutan & Lahan Gambut Indonesia 2026
 */
$page_title = 'Peta GIS Titik Api Karhutla Indonesia 2026 | IGNIS Nusantara';
$current_page = 'gis';
$enable_map = true;
$map_container_id = 'gis-map';
$map_is_preview = false;

require_once __DIR__ . '/includes/header.php';
$stats = get_hotspot_statistics();
$provinces = array_keys($stats['provinces']);
sort($provinces);
?>

<!-- GIS Explorer Header -->
<section class="py-4 bg-black border-bottom border-secondary">
  <div class="container">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
      <div>
        <div class="d-flex align-items-center gap-2 mb-1">
          <span class="pulse-indicator"></span>
          <span class="badge-eco badge-orange-subtle">SISTEM INFORMASI GEOGRAFIS REAL-TIME 2026</span>
        </div>
        <h1 class="h2 fw-bold text-white mb-0">Peta Sebaran Titik Api &amp; Risiko Gambut Indonesia</h1>
      </div>
      <div class="d-flex gap-2">
        <button id="toggle-smoke-radius" class="btn btn-sm btn-orange">
          <i class="bi bi-eye-slash-fill me-1"></i> Sembunyikan Radius Asap
        </button>
        <a href="kontak.php#form-lapor" class="btn btn-sm btn-outline-warning">
          <i class="bi bi-geo-fill me-1"></i> Lapor Titik Baru
        </a>
      </div>
    </div>
  </div>
</section>

<!-- GIS Map & Filter Controls -->
<section class="py-4">
  <div class="container">
    
    <!-- Filter Control Bar -->
    <div class="card-custom p-3 mb-4">
      <div class="row g-3 align-items-end">
        <!-- Search -->
        <div class="col-lg-3 col-md-6">
          <label for="search-location" class="form-label-custom">
            <i class="bi bi-search me-1 text-orange"></i> Cari Wilayah / ID:
          </label>
          <input type="text" id="search-location" class="form-control form-control-custom" placeholder="Contoh: Pelalawan, Ketapang...">
        </div>

        <!-- Filter Provinsi -->
        <div class="col-lg-3 col-md-6">
          <label for="filter-province" class="form-label-custom">
            <i class="bi bi-geo-alt-fill me-1 text-orange"></i> Filter Provinsi:
          </label>
          <select id="filter-province" class="form-select form-select-custom">
            <option value="all">Semua Provinsi (Nasional)</option>
            <?php foreach ($provinces as $p): ?>
              <option value="<?= e($p) ?>"><?= e($p) ?> (<?= $stats['provinces'][$p] ?>)</option>
            <?php endforeach; ?>
          </select>
        </div>

        <!-- Filter Tingkat Kepercayaan -->
        <div class="col-lg-3 col-md-6">
          <label for="filter-confidence" class="form-label-custom">
            <i class="bi bi-shield-exclamation me-1 text-orange"></i> Tingkat Kepercayaan (Confidence):
          </label>
          <select id="filter-confidence" class="form-select form-select-custom">
            <option value="all">Semua Tingkat Kepercayaan</option>
            <option value="high">Tinggi (&ge; 80% - Siaga Kritis)</option>
            <option value="medium">Sedang (50% - 79%)</option>
            <option value="low">Rendah (&lt; 50%)</option>
          </select>
        </div>

        <!-- Filter Sensor Satelit -->
        <div class="col-lg-3 col-md-6">
          <label for="filter-satellite" class="form-label-custom">
            <i class="bi bi-satellite me-1 text-orange"></i> Sensor Satelit:
          </label>
          <select id="filter-satellite" class="form-select form-select-custom">
            <option value="all">Semua Satelit</option>
            <option value="VIIRS">SNPP-VIIRS (Resolusi 375m)</option>
            <option value="MODIS">Terra/Aqua-MODIS (1km)</option>
            <option value="NOAA">NOAA-20 (Polar)</option>
          </select>
        </div>
      </div>
    </div>

    <!-- Live Map Canvas -->
    <div class="position-relative mb-4">
      <div id="gis-map"></div>
      
      <!-- Overlay Legend -->
      <div class="p-3 rounded-3 d-none d-md-block" style="position: absolute; bottom: 20px; left: 20px; z-index: 1000; background: rgba(11, 14, 20, 0.92); border: 1px solid var(--border-color); backdrop-filter: blur(8px); max-width: 280px; font-size: 0.82rem;">
        <div class="fw-bold text-white mb-2 border-bottom border-secondary pb-1">
          <i class="bi bi-info-circle-fill text-orange me-1"></i> Legenda Peta GIS 2026:
        </div>
        <div class="d-flex align-items-center mb-1">
          <span class="custom-fire-marker marker-high me-2" style="width: 18px; height: 18px; font-size: 9px; animation: none;"><i class="bi bi-fire"></i></span>
          <span class="text-light">Risiko Kritis (&ge;85% / Gambut Aktif)</span>
        </div>
        <div class="d-flex align-items-center mb-1">
          <span class="custom-fire-marker marker-medium me-2" style="width: 18px; height: 18px; font-size: 9px; animation: none;"><i class="bi bi-fire"></i></span>
          <span class="text-light">Titik Api Sedang (50-84%)</span>
        </div>
        <div class="d-flex align-items-center mb-2">
          <span class="custom-fire-marker marker-controlled me-2" style="width: 18px; height: 18px; font-size: 9px; animation: none;"><i class="bi bi-check-lg"></i></span>
          <span class="text-light">Terkendali / Padam Pendinginan</span>
        </div>
        <div class="border-top border-secondary pt-1 text-muted" style="font-size: 0.75rem;">
          <span class="d-inline-block border border-danger border-dashed me-1" style="width: 14px; height: 8px; background: rgba(255,102,0,0.15);"></span>
          Lingkaran putus: Radius bahaya kabut asap
        </div>
      </div>
    </div>

    <!-- Quick Stats Bar Below Map -->
    <div class="row g-3 mb-5">
      <div class="col-md-4">
        <div class="p-3 bg-card border border-secondary rounded-3 text-center">
          <div class="small text-muted mb-1">TOTAL TITIK API TERFILTER</div>
          <div class="fs-3 fw-bold text-orange" id="stat-total-hotspots"><?= $stats['total'] ?></div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-3 bg-card border border-secondary rounded-3 text-center">
          <div class="small text-muted mb-1">HOTSPOT RISIKO TINGGI (&ge;80%)</div>
          <div class="fs-3 fw-bold text-danger" id="stat-high-risk"><?= $stats['high_risk'] ?></div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-3 bg-card border border-secondary rounded-3 text-center">
          <div class="small text-muted mb-1">KONSENTRASI DI LAHAN GAMBUT</div>
          <div class="fs-3 fw-bold text-warning" id="stat-peatland"><?= $stats['peatland'] ?></div>
        </div>
      </div>
    </div>

    <!-- Data Table with Direct Fly-To Action -->
    <div class="card-custom p-4 mb-4">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
          <h4 class="fw-bold text-white mb-1"><i class="bi bi-table text-orange me-2"></i>Daftar Tabulasi Hotspot Karhutla 2026</h4>
          <p class="text-muted small mb-0">Klik tombol "Lihat" untuk menavigasi kamera peta langsung ke koordinat titik api.</p>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-dark table-dark-custom align-middle">
          <thead>
            <tr class="text-muted small text-uppercase">
              <th>ID Hotspot</th>
              <th>Lokasi Wilayah</th>
              <th>Confidence</th>
              <th>Satelit</th>
              <th>Ekosistem</th>
              <th>Waktu Deteksi (2026)</th>
              <th class="text-end">Aksi Peta</th>
            </tr>
          </thead>
          <tbody id="hotspots-table-body" class="small">
            <!-- Populated via map-gis.js -->
            <tr>
              <td colspan="7" class="text-center py-4 text-muted">
                <div class="spinner-border text-orange spinner-border-sm me-2" role="status"></div>
                Memuat data geospasial titik api 2026...
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
