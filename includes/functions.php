<?php
/**
 * IGNIS NUSANTARA 2026 - Helper Functions
 * Platform Pemantauan GIS Karhutla & Tanggap Darurat Bencana Iklim Global Indonesia
 * Dikembangkan untuk: Lomba Web Design Techno Versary Vol. II FKOM UNIKU
 */

// Menghindari direct access path jika diperlukan
if (!defined('APP_NAME')) {
    define('APP_NAME', 'IGNIS Nusantara 2026');
    define('APP_TAGLINE', 'Platform Pemantauan GIS Karhutla & Tanggap Darurat Iklim Global');
}

/**
 * Load Hotspots Data 2026
 */
function get_hotspots_data() {
    $filePath = __DIR__ . '/../data/hotspots_2026.json';
    if (!file_exists($filePath)) {
        return [];
    }
    $json = file_get_contents($filePath);
    $data = json_decode($json, true);
    return is_array($data) ? $data : [];
}

/**
 * Load Articles Data 2026
 */
function get_articles_data() {
    $filePath = __DIR__ . '/../data/articles_2026.json';
    if (!file_exists($filePath)) {
        return [];
    }
    $json = file_get_contents($filePath);
    $data = json_decode($json, true);
    return is_array($data) ? $data : [];
}

/**
 * Get Article by Slug or ID
 */
function get_article_by_slug($slug_or_id) {
    $articles = get_articles_data();
    foreach ($articles as $art) {
        if ($art['slug'] === $slug_or_id || (string)$art['id'] === (string)$slug_or_id) {
            return $art;
        }
    }
    return null;
}

/**
 * Hitung Statistik Real-Time 2026
 */
function get_hotspot_statistics() {
    $hotspots = get_hotspots_data();
    $total = count($hotspots);
    $highRisk = 0;
    $peatlandCount = 0;
    $activeCount = 0;
    $provinces = [];

    foreach ($hotspots as $hs) {
        if ($hs['confidence'] >= 80) {
            $highRisk++;
        }
        if (!empty($hs['peatland'])) {
            $peatlandCount++;
        }
        if (strpos(strtolower($hs['status']), 'aktif') !== false) {
            $activeCount++;
        }
        $prov = $hs['province'];
        if (!isset($provinces[$prov])) {
            $provinces[$prov] = 0;
        }
        $provinces[$prov]++;
    }

    arsort($provinces);

    return [
        'total' => $total,
        'high_risk' => $highRisk,
        'peatland' => $peatlandCount,
        'active' => $activeCount,
        'provinces' => $provinces,
        'top_province' => !empty($provinces) ? array_key_first($provinces) : 'Riau'
    ];
}

/**
 * Helper Badge Status ISPU
 */
function get_ispu_badge_class($status) {
    $status = strtolower($status);
    if (strpos($status, 'berbahaya') !== false) {
        return 'bg-danger text-white border border-danger';
    } elseif (strpos($status, 'sangat tidak sehat') !== false) {
        return 'bg-danger text-light';
    } elseif (strpos($status, 'tidak sehat') !== false) {
        return 'bg-warning text-dark';
    } elseif (strpos($status, 'sedang') !== false) {
        return 'bg-primary text-white';
    }
    return 'bg-success text-white';
}

/**
 * Helper Badge Status Hotspot
 */
function get_hotspot_status_badge($status) {
    $s = strtolower($status);
    if (strpos($s, 'kritis') !== false) {
        return '<span class="badge bg-danger-subtle text-danger border border-danger"><i class="bi bi-exclamation-octagon-fill me-1"></i> ' . htmlspecialchars($status) . '</span>';
    } elseif (strpos($s, 'satgas') !== false || strpos($s, 'aktif') !== false) {
        return '<span class="badge bg-warning-subtle text-warning border border-warning"><i class="bi bi-fire me-1"></i> ' . htmlspecialchars($status) . '</span>';
    } elseif (strpos($s, 'terkendali') !== false) {
        return '<span class="badge bg-info-subtle text-info border border-info"><i class="bi bi-shield-check me-1"></i> ' . htmlspecialchars($status) . '</span>';
    } else {
        return '<span class="badge bg-success-subtle text-success border border-success"><i class="bi bi-check-circle-fill me-1"></i> ' . htmlspecialchars($status) . '</span>';
    }
}

/**
 * Clean string for output
 */
function e($str) {
    return htmlspecialchars($str ?? '', ENT_QUOTES, 'UTF-8');
}
