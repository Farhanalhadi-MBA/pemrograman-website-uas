<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Pengaturan - Alhadi Jaya Motor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Tombol Kembali -->
<div class="container mt-3">
  <a href="dashboard.php" class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm">← Kembali ke Dashboard</a>
</div>

<!-- Judul Halaman -->
<div class="container mt-4">
  <h2 class="text-center mb-4">Halaman Pengaturan</h2>
  <p class="text-center text-muted mb-5">Lihat informasi perusahaan, struktur organisasi, dan syarat & ketentuan.</p>

  <!-- Isi Pengaturan -->
  <div class="row row-cols-1 row-cols-md-3 g-4">

    <!-- Profil Perusahaan -->
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="img/profil.jpg" class="card-img-top" alt="Profil Perusahaan">
        <div class="card-body">
          <h5 class="card-title">Profil Perusahaan</h5>
          <p class="card-text">Informasi tentang Alhadi Jaya Motor, visi, misi, dan sejarah perusahaan.</p>
          <a href="profil_perusahaan.php" class="btn btn-primary btn-sm">Lihat Profil</a>
        </div>
      </div>
    </div>

    <!-- Struktur Organisasi -->
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="img/struktur.jpg" class="card-img-top" alt="Struktur Organisasi">
        <div class="card-body">
          <h5 class="card-title">Struktur Organisasi</h5>
          <p class="card-text">Struktur dan pembagian tanggung jawab dalam organisasi Alhadi Jaya Motor.</p>
          <a href="struktur_organisasi.php" class="btn btn-primary btn-sm">Lihat Struktur</a>
        </div>
      </div>
    </div>

    <!-- Syarat & Ketentuan -->
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="img/syarat.jpg" class="card-img-top" alt="Syarat dan Ketentuan">
        <div class="card-body">
          <h5 class="card-title">Syarat & Ketentuan</h5>
          <p class="card-text">Ketentuan layanan dan aturan transaksi jual beli di Alhadi Jaya Motor.</p>
          <a href="syarat_ketentuan.php" class="btn btn-primary btn-sm">Lihat Syarat</a>
        </div>
      </div>
    </div>

  </div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
