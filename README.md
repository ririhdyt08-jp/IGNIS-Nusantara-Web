# IGNIS NUSANTARA 2026
### Platform Pemantauan GIS Karhutla & Tanggap Darurat Bencana Iklim Global Indonesia

> **Karya Desain & Pengembangan Web untuk Lomba Nasional:**  
> **TECHNO VERSARY VOL. II**  
> *Himpunan Mahasiswa Teknik Informatika (HIMA-TI), Fakultas Ilmu Komputer, Universitas Kuningan (UNIKU)*  
> **Tema Utama:** EcoDigital for Environment: Web Design Competition  
> **Sub-Tema 8:** Isu Lingkungan Global (Kebakaran Hutan dan Lahan / Karhutla Indonesia)

---

## 📌 Identitas Tim & Anggota
* **Format Nama Folder / Repo:** `webdesign_IGNIS_technoversary_vol.II` *(Dapat disesuaikan dengan Nama Tim Resmi Anda)*
* **Nama Tim:** Tim IGNIS (EmberWatch Developer Team)
* **Ketua Tim:** [Nama Ketua Tim Anda] (NIM / Asal Institusi)
* **Anggota 1:** [Nama Anggota 1] (NIM / Asal Institusi)
* **Anggota 2:** [Nama Anggota 2] (NIM / Asal Institusi)
* **Tahun Rilis Proyek:** November 2026

---

## 📖 Deskripsi Website
**IGNIS Nusantara 2026** adalah platform portal web berbasis **EcoDigital** yang mengintegrasikan sistem informasi geografis (**Web-GIS**) interaktif, literasi ilmiah, dan aksi sosial tanggap darurat untuk mengatasi krisis **Kebakaran Hutan dan Lahan (Karhutla)** di Indonesia sebagai salah satu isu lingkungan global paling mendesak di tahun 2026.

### Mengapa Isu Karhutla Indonesia adalah Isu Lingkungan Global?
1. **Pelepasan Simpanan Karbon Gambut (Carbon Sink):** Lahan gambut tropis Indonesia menyimpan lebih dari **57 Gigaton karbon purba**. Kebakaran gambut menghasilkan pelepasan emisi metana ($CH_4$) dan $CO_2$ masif yang mempercepat laju pemanasan global melebihi batas toleransi 1,5°C Perjanjian Paris.
2. **Kabut Asap Lintas Batas (Transboundary Haze):** Polutan partikel beracun PM2.5 melintasi batas samudra ke negara-negara tetangga di Asia Tenggara, berdampak langsung pada hubungan diplomatik regional dan krisis kesehatan pernapasan jutaan warga.
3. **Pemusnahan Habitat Endemik Dunia:** Mengancam kepunahan satwa langka primata Orangutan Kalimantan, Harimau Sumatra, dan keanekaragaman hayati hutan hujan tropis dunia.

---

## 🎨 Palet Warna & Desain Visual (Sesuai Ketentuan)
Website dibangun dengan kombinasi palet warna khusus sesuai instruksi perlombaan:
* **Hitam (`#0b0e14`, `#111622`):** Memberikan kontras tinggi bergaya *modern dark interface*, menonjolkan visual titik bara api.
* **Abu-abu (`#242c3d`, `#64748b`, `#cbd5e1`):** Digunakan untuk border kartu, elemen pendukung, dan teks pembantu yang nyaman di mata.
* **Putih (`#ffffff`, `#f8fafc`):** Memberikan tingkat keterbacaan (*readability*) maksimal pada tipografi judul dan paragraf.
* **Oranye (`#ff6b00`, `#ff5722`, glow effect):** Aksen utama yang merepresentasikan bara api, status siaga, indikator GIS, dan tombol aksi krusial.

---

## 🛠️ Tech Stack & Kepatuhan Hak Cipta
* **Bahasa Pemrograman Backend/Template:** PHP 8.x (Modular Template Architecture).
* **Framework Frontend:** Bootstrap 5.3.x (Open-Source CDN).
* **GIS Engine:** Leaflet.js v1.9.4 (Open-Source Geospasial Engine).
* **Tile Provider GIS:** CartoDB Dark Matter (Open-Source Tile), ESRI World Imagery, & OpenStreetMap.
* **Ikon:** Bootstrap Icons (Open-Source SVG/Font).
* **Tipografi:** Google Fonts - Plus Jakarta Sans (Open Font License).
* **Kepatuhan Aturan Lomba No. 7:** **100% Bebas Template Berbayar / Premium**. Seluruh komponen dibuat *handcrafted*, menggunakan library open-source gratis dan orisinalitas tinggi.

---

## 📂 Struktur Direktori Proyek (Modular & Terorganisir)
Struktur direktori disusun secara profesional agar pemeliharaan kode mudah dan tidak menumpuk menjadi satu file:

```text
webdesign_IGNIS_technoversary_vol.II/
│
├── assets/
│   ├── css/
│   │   └── style.css            # Custom theme palette (Hitam, Abu-abu, Putih, Oranye)
│   ├── js/
│   │   ├── main.js              # Interaktivitas UI, counter anim, form donasi, filter galeri
│   │   └── map-gis.js           # Controller Web-GIS Leaflet, layer satelit, filter, flyTo
│   └── img/                     # Aset gambar & ilustrasi visual
│
├── data/
│   ├── hotspots_2026.json       # Dataset geospasial titik api karhutla Indonesia 2026
│   └── articles_2026.json       # Dataset konten artikel ilmiah & riset karhutla 2026
│
├── includes/
│   ├── header.php               # Komponen header modular, metadata SEO, navbar responsif
│   ├── footer.php               # Komponen footer, kontak darurat, modal struk donasi, JS
│   └── functions.php            # Helper kalkulasi statistik, filter JSON, status badge
│
├── index.php                    # Halaman Home (Hero, Counter 2026, Teaser GIS, Isu Global)
├── about.php                    # Halaman About (Latar belakang, 4 Pilar EcoDigital, Profil Tim)
├── gis.php                      # Halaman GIS Interaktif (Filter Provinsi, Satelit, Radius Asap)
├── artikel.php                  # Halaman Artikel & Edukasi Karhutla
├── artikel-detail.php           # Halaman Baca Artikel Lengkap & Berbagi Edukasi
├── galeri.php                   # Halaman Galeri Dokumentasi Foto & Citra Satelit 2026
├── donasi.php                   # Halaman Donasi Terintegrasi (Kitabisa, LindungiHutan, QRIS Mock)
├── kontak.php                   # Halaman Kontak Posko Darurat & Lapor Titik Api Cepat
└── README.md                    # Dokumentasi Proyek Resmi Lomba Techno Versary
```

---

## 🚀 Petunjuk Instalasi & Menjalankan Project

### Prasyarat:
1. Komputer/Laptop dengan instalasi **PHP 7.4 / 8.x** (Bisa menggunakan PHP CLI bawaan atau paket XAMPP / Laragon).
2. Web browser modern (Google Chrome, Mozilla Firefox, Microsoft Edge).

### Cara Menjalankan Menggunakan PHP Built-in Server (Cara Paling Cepat):
1. Buka Terminal / PowerShell / Command Prompt.
2. Masuk ke direktori folder project ini:
   ```bash
   cd "C:\Users\Lenovo\.gemini\antigravity\scratch\webdesign_IGNIS_technoversary_vol.II"
   ```
3. Jalankan server lokal PHP dengan perintah:
   ```bash
   php -S localhost:8000
   ```
4. Buka browser Anda dan akses tautan:
   ```text
   http://localhost:8000
   ```

### Alternatif Menggunakan XAMPP:
1. Pindahkan atau salin folder `webdesign_IGNIS_technoversary_vol.II` ke dalam folder `htdocs` XAMPP (biasanya di `C:\xampp\htdocs\`).
2. Buka **XAMPP Control Panel** dan klik **Start** pada modul **Apache**.
3. Buka browser dan akses:
   ```text
   http://localhost/webdesign_IGNIS_technoversary_vol.II/
   ```

---

## 🌟 Fitur Unggulan Website

1. **Web-GIS Hotspot Explorer (Leaflet.js):**
   * Menampilkan titik koordinat sebaran api terbaru tahun **2026** di wilayah krusial (Riau, Kalimantan Barat, Kalimantan Tengah, Kalimantan Selatan, Sumatera Selatan, Jambi).
   * Filter real-time berdasarkan: **Provinsi**, **Tingkat Kepercayaan Satelit (High/Medium/Low)**, dan **Sensor Satelit (SNPP-VIIRS, MODIS, NOAA)**.
   * Visualisasi lingkaran **Radius Sebaran Bahaya Asap PM2.5** (Transboundary haze radius).
   * Fitur navigasi kamera otomatis (*Fly-To Marker*) saat baris tabel diklik.

2. **Integrasi Platform Donasi:**
   * Tautan langsung ke kampanye donasi mitra kemanusiaan terpercaya (**Kitabisa.com**, **LindungiHutan.com**, **WWF Indonesia**, **WALHI**).
   * Formulir simulasi donasi mandiri terpadu dengan pilihan paket masker balita, bibit revegetasi gambut, tabung oksigen posko, serta generator struk instan QRIS / VA.

3. **Citizen Science & Pelaporan Cepat (Early Warning):**
   * Warga dapat melaporkan kepulan asap baru dengan data lokasi, karakteristik lahan, dan catatan detail yang siap diteruskan ke Daops Manggala Agni / BPBD setempat.

4. **Desain Responsif & Kinerja Tinggi:**
   * Tampilan fleksibel dan optimal di layar Smartphone, Tablet, maupun Desktop dengan standar UX yang ramah pengguna.
