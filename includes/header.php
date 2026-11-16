<?php
/**
 * IGNIS NUSANTARA 2026 - Header Template
 * Techno Versary Vol. II HIMA-TI FKOM UNIKU
 */
require_once __DIR__ . '/functions.php';

// Default page meta
$page_title = $page_title ?? 'IGNIS Nusantara 2026 | Monitoring GIS Karhutla & Tanggap Iklim';
$current_page = $current_page ?? 'home';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Platform Pemantauan GIS Karhutla dan Tanggap Bencana Iklim Global Indonesia 2026. Data satelit real-time, edukasi lingkungan, dan aksi nyata mitigasi emisi karbon.">
  <meta name="author" content="Tim IGNIS - Techno Versary Vol. II UNIKU">
  <title><?= e($page_title) ?></title>

  <!-- Google Font: Plus Jakarta Sans -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Bootstrap 5 CSS (Open Source CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Leaflet GIS CSS (Open Source) -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>

  <!-- Custom Theme CSS (Palette: Black, Dark Gray, White, Fire Orange) -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- Emergency Top Bar -->
<div class="bg-black py-1 px-3 border-bottom border-secondary small text-muted d-none d-md-block">
  <div class="container d-flex justify-content-between align-items-center">
    <div>
      <span class="text-orange fw-bold"><i class="bi bi-broadcast me-1"></i> UPDATE DATA 2026:</span>
      Sistem Pemantauan Hotspot Terintegrasi SNPP-VIIRS & NOAA-20 Real-Time
    </div>
    <div class="d-flex gap-3">
      <span><i class="bi bi-telephone-fill text-danger me-1"></i> Hotline Siaga Karhutla: <strong class="text-white">117 / 0812-2026-FIRE</strong></span>
      <span><i class="bi bi-shield-check text-success me-1"></i> Portal Resmi EcoDigital</span>
    </div>
  </div>
</div>

<!-- Main Navigation -->
<nav class="navbar navbar-expand-lg navbar-custom sticky-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
      <span class="brand-logo-fire">
        <i class="bi bi-fire fs-5"></i>
      </span>
      <div>
        <span class="fw-bold tracking-tight">IGNIS<span class="text-orange">2026</span></span>
        <div style="font-size: 0.65rem; color: #94a3b8; font-weight: 500; letter-spacing: 0.08em; text-transform: uppercase; margin-top: -3px;">
          Nusantara EmberWatch
        </div>
      </div>
    </a>

    <button class="navbar-toggler border-secondary text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
      <i class="bi bi-list fs-2 text-orange"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarMain">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center gap-1">
        <li class="nav-item">
          <a class="nav-link <?= $current_page === 'home' ? 'active' : '' ?>" href="index.php">
            <i class="bi bi-house-door me-1"></i> Beranda
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $current_page === 'about' ? 'active' : '' ?>" href="about.php">
            <i class="bi bi-info-circle me-1"></i> Tentang Isu
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $current_page === 'gis' ? 'active' : '' ?>" href="gis.php">
            <i class="bi bi-map-fill me-1 text-orange"></i> Peta GIS Titik Api
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $current_page === 'artikel' ? 'active' : '' ?>" href="artikel.php">
            <i class="bi bi-journal-text me-1"></i> Artikel
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $current_page === 'galeri' ? 'active' : '' ?>" href="galeri.php">
            <i class="bi bi-images me-1"></i> Galeri
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $current_page === 'donasi' ? 'active' : '' ?>" href="donasi.php">
            <i class="bi bi-heart-fill me-1 text-danger"></i> Donasi
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $current_page === 'kontak' ? 'active' : '' ?>" href="kontak.php">
            <i class="bi bi-telephone-inbound me-1"></i> Kontak
          </a>
        </li>
        <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
          <a class="btn btn-sm btn-orange" href="kontak.php#form-lapor">
            <i class="bi bi-exclamation-triangle-fill me-1"></i> Lapor Titik Api
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<main>
