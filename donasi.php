<?php
/**
 * IGNIS NUSANTARA 2026 - Halaman Donasi Terintegrasi
 * Techno Versary Vol. II HIMA-TI FKOM UNIKU
 * Integrasi Lembaga Donasi Resmi & Penyaluran Logistik Tanggap Karhutla 2026
 */
$page_title = 'Donasi Tanggap Karhutla & Restorasi Gambut 2026 | IGNIS Nusantara';
$current_page = 'donasi';

require_once __DIR__ . '/includes/header.php';
?>

<!-- Header Banner -->
<section class="py-5 bg-black border-bottom border-secondary">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <span class="badge-eco badge-orange-subtle mb-2">AKSI NYATA LINGKUNGAN 2026</span>
        <h1 class="display-5 fw-bold text-white mb-2">Donasi Terpadu Tanggap Bencana Karhutla</h1>
        <p class="lead text-muted mb-0">
          Setiap rupiah yang Anda salurkan membantu melindungi ribuan jiwa dari bahaya racun partikel PM2.5 dan mendukung regu pemadam di garis depan lahan gambut Indonesia.
        </p>
      </div>
      <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
        <div class="p-3 bg-card border border-orange rounded-3 text-start d-inline-block">
          <div class="d-flex align-items-center gap-2 mb-1">
            <i class="bi bi-shield-fill-check text-success fs-4"></i>
            <div>
              <div class="fw-bold text-white small">100% Terverifikasi &amp; Aman</div>
              <div class="text-muted" style="font-size: 0.75rem;">Terintegrasi Platform Resmi</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Pilihan Platform Donasi Eksternal (Integrasi Resmi) -->
<section class="py-5">
  <div class="container">
    <div class="text-center mb-5" style="max-width: 680px; margin: 0 auto;">
      <span class="badge-eco badge-dark-subtle mb-2">INTEGRASI MITRA KEMANUSIAAN</span>
      <h2 class="fw-bold text-white">Mitra Platform Donasi Terhubung 2026</h2>
      <p class="text-muted small">
        Anda dapat berdonasi langsung ke kampanye terverifikasi pada situs-situs crowdfunding lingkungan terkemuka di bawah ini:
      </p>
    </div>

    <div class="row g-4">
      <!-- Mitra 1: Kitabisa -->
      <div class="col-lg-6">
        <div class="card-custom p-4 h-100 d-flex flex-column hover-lift">
          <div class="d-flex justify-content-between align-items-start mb-3">
            <div>
              <span class="badge bg-primary text-white mb-2">Kitabisa.com</span>
              <h4 class="text-white fw-bold mb-1">Bantuan Darurat Kabut Asap &amp; Masker N95</h4>
              <p class="text-muted small mb-0">Diselenggarakan bersama Relawan Medis Riau &amp; Kalteng</p>
            </div>
            <div class="p-2 bg-black rounded border border-secondary text-primary fs-3">
              <i class="bi bi-heart-pulse"></i>
            </div>
          </div>
          <p class="text-light small flex-grow-1">
            Pengadaan posko oksigen gratis, pembagian puluhan ribu masker standar medis PM2.5 bagi balita dan lansia di wilayah dengan ISPU kategori Berbahaya (&gt;300).
          </p>
          <div class="mb-3">
            <div class="d-flex justify-content-between small text-muted mb-1">
              <span>Terkumpul (Kampanye 2026):</span>
              <strong class="text-orange">Rp 142.850.000 / Rp 200.000.000</strong>
            </div>
            <div class="progress" style="height: 8px; background-color: #273449;">
              <div class="progress-bar bg-orange" role="progressbar" style="width: 71%;" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="pt-2">
            <a href="https://kitabisa.com" target="_blank" rel="noopener noreferrer" class="btn btn-outline-orange w-100">
              <i class="bi bi-box-arrow-up-right me-1"></i> Donasi via Kitabisa.com
            </a>
          </div>
        </div>
      </div>

      <!-- Mitra 2: LindungiHutan -->
      <div class="col-lg-6">
        <div class="card-custom p-4 h-100 d-flex flex-column hover-lift">
          <div class="d-flex justify-content-between align-items-start mb-3">
            <div>
              <span class="badge bg-success text-white mb-2">LindungiHutan</span>
              <h4 class="text-white fw-bold mb-1">Adopsi Pohon &amp; Sekat Kanal Gambut</h4>
              <p class="text-muted small mb-0">Program Rewetting dan Revegetasi Lahan Bekas Karhutla</p>
            </div>
            <div class="p-2 bg-black rounded border border-secondary text-success fs-3">
              <i class="bi bi-tree"></i>
            </div>
          </div>
          <p class="text-light small flex-grow-1">
            Menanam kembali bibit pohon rawa endemik (Jelutung Rawa &amp; Belangeran) serta membangun sekat kanal hidrologis permanen untuk mencegah api menyala kembali.
          </p>
          <div class="mb-3">
            <div class="d-flex justify-content-between small text-muted mb-1">
              <span>Pohon Tertanam (Target 2026):</span>
              <strong class="text-success">8.420 / 10.000 Pohon</strong>
            </div>
            <div class="progress" style="height: 8px; background-color: #273449;">
              <div class="progress-bar bg-success" role="progressbar" style="width: 84%;" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="pt-2">
            <a href="https://lindungihutan.com" target="_blank" rel="noopener noreferrer" class="btn btn-outline-success w-100">
              <i class="bi bi-box-arrow-up-right me-1"></i> Donasi via LindungiHutan.com
            </a>
          </div>
        </div>
      </div>

      <!-- Mitra 3: WWF Indonesia -->
      <div class="col-lg-6">
        <div class="card-custom p-4 h-100 d-flex flex-column hover-lift">
          <div class="d-flex justify-content-between align-items-start mb-3">
            <div>
              <span class="badge bg-warning text-dark mb-2">WWF Indonesia</span>
              <h4 class="text-white fw-bold mb-1">Penyelamatan Habitat &amp; Suaka Orangutan</h4>
              <p class="text-muted small mb-0">Koridor Konservasi Hutan Gambut Sebangau</p>
            </div>
            <div class="p-2 bg-black rounded border border-secondary text-warning fs-3">
              <i class="bi bi-shield-shaded"></i>
            </div>
          </div>
          <p class="text-light small flex-grow-1">
            Mendukung regu patroli anti-perambahan hutan dan klinik medis darurat hewan primata yang terluka serta kehilangan habitat akibat karhutla di Kalimantan.
          </p>
          <div class="pt-3 border-top border-secondary mt-auto">
            <a href="https://www.wwf.id" target="_blank" rel="noopener noreferrer" class="btn btn-dark-custom w-100">
              <i class="bi bi-box-arrow-up-right me-1"></i> Kunjungi Program WWF Indonesia
            </a>
          </div>
        </div>
      </div>

      <!-- Mitra 4: WALHI -->
      <div class="col-lg-6">
        <div class="card-custom p-4 h-100 d-flex flex-column hover-lift">
          <div class="d-flex justify-content-between align-items-start mb-3">
            <div>
              <span class="badge bg-danger text-white mb-2">WALHI</span>
              <h4 class="text-white fw-bold mb-1">Advokasi Keadilan Iklim &amp; Posko Rakyat</h4>
              <p class="text-muted small mb-0">Pendampingan Komunitas Adat &amp; Petani</p>
            </div>
            <div class="p-2 bg-black rounded border border-secondary text-danger fs-3">
              <i class="bi bi-megaphone-fill"></i>
            </div>
          </div>
          <p class="text-light small flex-grow-1">
            Mendorong penegakan hukum terhadap korporasi perusak lingkungan dan mendirikan posko perlindungan udara bersih di desa-desa lingkar gambut.
          </p>
          <div class="pt-3 border-top border-secondary mt-auto">
            <a href="https://www.walhi.or.id" target="_blank" rel="noopener noreferrer" class="btn btn-dark-custom w-100">
              <i class="bi bi-box-arrow-up-right me-1"></i> Kunjungi Portal WALHI
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Formulir Donasi Cepat Terpadu IGNIS (Simulation Gateway) -->
<section class="py-5 bg-black border-top border-bottom border-secondary">
  <div class="container" style="max-width: 860px;">
    
    <div class="text-center mb-4">
      <span class="badge-eco badge-orange-subtle mb-2">AKSI CEPAT 1-KLIK</span>
      <h2 class="fw-bold text-white">Simulasi Donasi Mandiri Terpadu</h2>
      <p class="text-muted small">Pilih paket logistik darurat karhutla yang ingin Anda bantu salurkan:</p>
    </div>

    <!-- Tiers Options -->
    <div class="row g-3 mb-4">
      <div class="col-sm-6 col-md-3">
        <div class="donation-tier-card text-center h-100" data-amount="25000">
          <div class="fw-bold text-white fs-6">5 Masker N95</div>
          <div class="text-orange fw-bold my-1">Rp 25.000</div>
          <small class="text-muted" style="font-size:0.75rem;">Lindungi 5 Anak dari PM2.5</small>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="donation-tier-card text-center h-100" data-amount="50000">
          <div class="fw-bold text-white fs-6">Bibit Restorasi</div>
          <div class="text-orange fw-bold my-1">Rp 50.000</div>
          <small class="text-muted" style="font-size:0.75rem;">Adopsi 2 Pohon Rawa</small>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="donation-tier-card text-center h-100 selected" data-amount="100000">
          <span class="badge bg-orange position-absolute top-0 end-0 m-2" style="font-size: 0.65rem;">Favorit</span>
          <div class="fw-bold text-white fs-6">Oksigen &amp; Obat</div>
          <div class="text-orange fw-bold my-1">Rp 100.000</div>
          <small class="text-muted" style="font-size:0.75rem;">Tabung Oksigen Posko</small>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="donation-tier-card text-center h-100" data-amount="250000">
          <div class="fw-bold text-white fs-6">Alat Suntik Gambut</div>
          <div class="text-orange fw-bold my-1">Rp 250.000</div>
          <small class="text-muted" style="font-size:0.75rem;">Nozzle Pemadam Bara</small>
        </div>
      </div>
    </div>

    <!-- Form Donasi Input -->
    <div class="card-custom p-4">
      <form id="donation-form">
        <div class="row g-3">
          
          <div class="col-md-6">
            <label for="donatur-name" class="form-label-custom">Nama Lengkap Donatur *</label>
            <input type="text" id="donatur-name" class="form-control form-control-custom" placeholder="Nama Anda / Hamba Allah" required>
          </div>

          <div class="col-md-6">
            <label for="donatur-email" class="form-label-custom">Email / No. WhatsApp *</label>
            <input type="text" id="donatur-email" class="form-control form-control-custom" placeholder="Untuk bukti tanda terima" required>
          </div>

          <div class="col-12">
            <label for="custom-donation-amount" class="form-label-custom">Nominal Donasi (Rp) *</label>
            <div class="input-group">
              <span class="input-group-text bg-secondary text-white border-secondary">Rp</span>
              <input type="number" id="custom-donation-amount" class="form-control form-control-custom" value="100000" min="10000" step="5000" required>
            </div>
            <div class="form-text text-muted small">Bisa memasukkan nominal custom lainnya (minimal Rp 10.000).</div>
          </div>

          <!-- Pilihan Metode Pembayaran -->
          <div class="col-12 mt-3">
            <label class="form-label-custom d-block mb-2">Pilih Kanal Pembayaran:</label>
            <div class="d-flex flex-wrap gap-2">
              <div class="form-check form-check-inline p-2 bg-dark rounded border border-secondary">
                <input class="form-check-input ms-0 me-2" type="radio" name="payment_method" id="pay-qris" value="QRIS" checked>
                <label class="form-check-label text-light small fw-bold" for="pay-qris">
                  <i class="bi bi-qr-code-scan text-warning me-1"></i> QRIS (Semua Bank / Dompet Digital)
                </label>
              </div>
              <div class="form-check form-check-inline p-2 bg-dark rounded border border-secondary">
                <input class="form-check-input ms-0 me-2" type="radio" name="payment_method" id="pay-va" value="Virtual Account">
                <label class="form-check-label text-light small fw-bold" for="pay-va">
                  <i class="bi bi-bank text-info me-1"></i> Virtual Account (BCA, Mandiri, BRI, BNI)
                </label>
              </div>
              <div class="form-check form-check-inline p-2 bg-dark rounded border border-secondary">
                <input class="form-check-input ms-0 me-2" type="radio" name="payment_method" id="pay-ewallet" value="E-Wallet">
                <label class="form-check-label text-light small fw-bold" for="pay-ewallet">
                  <i class="bi bi-wallet2 text-success me-1"></i> GoPay / OVO / DANA
                </label>
              </div>
            </div>
          </div>

          <!-- Total Ringkasan & Submit -->
          <div class="col-12 mt-4 pt-3 border-top border-secondary d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
            <div>
              <div class="text-muted small">Total Komitmen Donasi:</div>
              <div class="fs-3 fw-bold text-orange" id="donation-total-display">Rp 100.000</div>
            </div>
            <button type="submit" class="btn btn-orange btn-lg px-5">
              <i class="bi bi-heart-fill me-2"></i> Lanjutkan Pembayaran
            </button>
          </div>

        </div>
      </form>
    </div>

    <!-- Jaminan Transparansi -->
    <div class="text-center mt-4 small text-muted">
      <i class="bi bi-lock-fill text-success me-1"></i> Seluruh donasi yang terkumpul disalurkan 100% tanpa potongan administrasi langsung ke rekening posko satgas terdaftar.
    </div>

  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
