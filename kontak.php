<?php
/**
 * IGNIS NUSANTARA 2026 - Halaman Kontak & Pelaporan Titik Api
 * Techno Versary Vol. II HIMA-TI FKOM UNIKU
 * Sub-tema 8: Isu Lingkungan Global
 */
$page_title = 'Kontak & Posko Siaga Karhutla 2026 | IGNIS Nusantara';
$current_page = 'kontak';

require_once __DIR__ . '/includes/header.php';
?>

<!-- Header Banner -->
<section class="py-5 bg-black border-bottom border-secondary">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <span class="badge-eco badge-orange-subtle mb-2">POSKO DARURAT &amp; LAYANAN PENGADUAN</span>
        <h1 class="display-5 fw-bold text-white mb-2">Kontak Siaga &amp; Lapor Karhutla 2026</h1>
        <p class="lead text-muted mb-0">
          Melihat kepulan asap atau bara api baru di wilayah Anda? Laporkan segera ke pos komando terdekat atau kirimkan koordinat untuk verifikasi satgas darat.
        </p>
      </div>
      <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
        <div class="p-3 bg-danger-subtle border border-danger rounded-3 text-start d-inline-block">
          <div class="text-danger fw-bold small"><i class="bi bi-telephone-fill me-1"></i> Hotline Nasional Bencana:</div>
          <div class="fs-4 fw-extrabold text-white">117 (Bebas Pulsa)</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Formulir Lapor Titik Api & Hotline -->
<section class="py-5" id="form-lapor">
  <div class="container">
    <div class="row g-5">
      
      <!-- Kolom 1: Form Lapor Karhutla Mandiri (Citizen Reporting) -->
      <div class="col-lg-7">
        <div class="card-custom p-4 border-orange">
          <div class="d-flex align-items-center gap-2 mb-3">
            <span class="custom-fire-marker marker-high" style="width: 32px; height: 32px; font-size: 14px; animation: none;">
              <i class="bi bi-broadcast"></i>
            </span>
            <div>
              <h4 class="text-white fw-bold mb-0">Formulir Lapor Titik Asap / Kebakaran</h4>
              <small class="text-muted">Data langsung diteruskan ke Daops Manggala Agni terdekat</small>
            </div>
          </div>

          <form id="karhutla-report-form">
            <div class="row g-3">
              
              <div class="col-md-6">
                <label for="report-name" class="form-label-custom">Nama Lengkap Pelapor *</label>
                <input type="text" id="report-name" class="form-control form-control-custom" placeholder="Nama Anda" required>
              </div>

              <div class="col-md-6">
                <label for="report-phone" class="form-label-custom">No. Telepon / WhatsApp Aktif *</label>
                <input type="tel" id="report-phone" class="form-control form-control-custom" placeholder="08xxxxxxxxxx" required>
              </div>

              <div class="col-12">
                <label for="report-location" class="form-label-custom">Lokasi Detail Kebakaran (Patokan / Desa / Kecamatan) *</label>
                <input type="text" id="report-location" class="form-control form-control-custom" placeholder="Contoh: Belakang parit Km 14, Desa Sei Rangau, Kab. Pelalawan" required>
              </div>

              <div class="col-md-6">
                <label for="report-province" class="form-label-custom">Provinsi Kejadian *</label>
                <select id="report-province" class="form-select form-select-custom" required>
                  <option value="">-- Pilih Provinsi --</option>
                  <option value="Riau">Riau</option>
                  <option value="Kalimantan Barat">Kalimantan Barat</option>
                  <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                  <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                  <option value="Kalimantan Timur">Kalimantan Timur</option>
                  <option value="Sumatera Selatan">Sumatera Selatan</option>
                  <option value="Jambi">Jambi</option>
                  <option value="Aceh">Aceh</option>
                  <option value="Lainnya">Provinsi Lainnya</option>
                </select>
              </div>

              <div class="col-md-6">
                <label for="report-land-type" class="form-label-custom">Tipe Lahan Terbakar *</label>
                <select id="report-land-type" class="form-select form-select-custom" required>
                  <option value="Gambut">Lahan Gambut (Asap Tebal / Bara Dalam)</option>
                  <option value="Semak Belukar">Semak Belukar / Alang-alang Kering</option>
                  <option value="Hutan Sekunder">Hutan Sekunder / Pepohonan Tinggi</option>
                  <option value="Perkebunan">Area Perkebunan Warga / Sawit</option>
                </select>
              </div>

              <div class="col-12">
                <label for="report-notes" class="form-label-custom">Keterangan Tambahan &amp; Estimasi Jarak ke Pemukiman</label>
                <textarea id="report-notes" class="form-control form-control-custom" rows="3" placeholder="Jelaskan perkiraan jarak api ke rumah warga, arah angin, atau ketersediaan sumber air sungai terdekat..."></textarea>
              </div>

              <div class="col-12 mt-4">
                <button type="submit" class="btn btn-orange w-100 py-2 fw-bold">
                  <i class="bi bi-send-check-fill me-1"></i> Kirim Laporan Darurat Karhutla
                </button>
                <small class="text-muted d-block text-center mt-2" style="font-size:0.75rem;">
                  Laporan palsu dapat dikenakan sanksi peraturan perundangan. Mohon berikan informasi akurat.
                </small>
              </div>

            </div>
          </form>
        </div>
      </div>

      <!-- Kolom 2: Kontak Darurat Pos Komando Daerah -->
      <div class="col-lg-5">
        <h4 class="text-white fw-bold mb-3"><i class="bi bi-shield-fill-exclamation text-orange me-2"></i>Daftar Posko Siaga 2026</h4>
        <p class="text-muted small mb-4">
          Hubungi hotline satgas terpadu di masing-masing provinsi rawan karhutla jika memerlukan intervensi pemadaman segera:
        </p>

        <div class="d-flex flex-column gap-3 mb-4">
          <!-- Riau -->
          <div class="p-3 bg-card border border-secondary rounded-3">
            <div class="d-flex justify-content-between align-items-center mb-1">
              <strong class="text-white">Posko Satgas Karhutla Riau</strong>
              <span class="badge bg-danger">Siaga I</span>
            </div>
            <div class="text-orange fw-bold small"><i class="bi bi-telephone-inbound me-1"></i> (0761) 859-432 / 0811-752-990</div>
            <div class="text-muted small">Daops Pekanbaru, Dumai, Siak &amp; Rengat</div>
          </div>

          <!-- Kalteng -->
          <div class="p-3 bg-card border border-secondary rounded-3">
            <div class="d-flex justify-content-between align-items-center mb-1">
              <strong class="text-white">Posko BPBD Kalimantan Tengah</strong>
              <span class="badge bg-danger">Siaga I</span>
            </div>
            <div class="text-orange fw-bold small"><i class="bi bi-telephone-inbound me-1"></i> (0536) 322-1199 / 0812-500-1122</div>
            <div class="text-muted small">Daops Palangka Raya, Sampit &amp; Pulang Pisau</div>
          </div>

          <!-- Kalbar -->
          <div class="p-3 bg-card border border-secondary rounded-3">
            <div class="d-flex justify-content-between align-items-center mb-1">
              <strong class="text-white">Satgas Karhutla Kalimantan Barat</strong>
              <span class="badge bg-warning text-dark">Siaga II</span>
            </div>
            <div class="text-orange fw-bold small"><i class="bi bi-telephone-inbound me-1"></i> (0561) 734-521 / 0852-454-9988</div>
            <div class="text-muted small">Daops Pontianak, Ketapang &amp; Sintang</div>
          </div>

          <!-- Sumsel -->
          <div class="p-3 bg-card border border-secondary rounded-3">
            <div class="d-flex justify-content-between align-items-center mb-1">
              <strong class="text-white">Satgas Karhutla Sumatera Selatan</strong>
              <span class="badge bg-warning text-dark">Siaga II</span>
            </div>
            <div class="text-orange fw-bold small"><i class="bi bi-telephone-inbound me-1"></i> (0711) 561-2200</div>
            <div class="text-muted small">Daops Ogan Komering Ilir (OKI) &amp; Banyuasin</div>
          </div>
        </div>

        <!-- Tim Pengembang Info -->
        <div class="p-3 bg-black rounded-3 border border-secondary small">
          <div class="text-muted mb-1">Sekretariat Panitia Penyelenggara:</div>
          <strong class="text-light d-block">Techno Versary Vol. II HIMA-TI FKOM UNIKU</strong>
          <span class="text-muted">Universitas Kuningan, Jawa Barat</span>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- Formulir Pesan Kontak Umum & Masukan -->
<section class="py-5 bg-black border-top border-secondary">
  <div class="container" style="max-width: 760px;">
    <div class="text-center mb-4">
      <h3 class="fw-bold text-white mb-2">Pesan &amp; Kemitraan Media</h3>
      <p class="text-muted small">Punya pertanyaan, usulan riset, atau ingin berkolaborasi menyebarkan data GIS lingkungan bersama kami?</p>
    </div>

    <div class="card-custom p-4">
      <form id="contact-form">
        <div class="row g-3">
          <div class="col-md-6">
            <label for="contact-name" class="form-label-custom">Nama Lengkap *</label>
            <input type="text" id="contact-name" class="form-control form-control-custom" placeholder="Nama Anda" required>
          </div>
          <div class="col-md-6">
            <label for="contact-email" class="form-label-custom">Alamat Email *</label>
            <input type="email" id="contact-email" class="form-control form-control-custom" placeholder="email@domain.com" required>
          </div>
          <div class="col-12">
            <label for="contact-subject" class="form-label-custom">Subjek Pesan *</label>
            <input type="text" id="contact-subject" class="form-control form-control-custom" placeholder="Topik pesan..." required>
          </div>
          <div class="col-12">
            <label for="contact-message" class="form-label-custom">Isi Pesan *</label>
            <textarea id="contact-message" class="form-control form-control-custom" rows="4" placeholder="Tuliskan pesan Anda di sini..." required></textarea>
          </div>
          <div class="col-12 text-end">
            <button type="submit" class="btn btn-outline-orange px-4">
              <i class="bi bi-envelope-fill me-1"></i> Kirim Pesan
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
