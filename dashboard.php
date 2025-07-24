<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard - Alhadi Jaya Motor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f2f4f7;
    }
    .card {
      border: none;
      border-radius: 12px;
      transition: transform 0.2s ease;
    }
    .card:hover {
      transform: scale(1.02);
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .icon {
      font-size: 2rem;
    }
    .navbar-brand img {
      border-radius: 10px;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="dashboard.php">
      <img src="img/logo.png" alt="Logo" width="40" height="40" class="me-2">
      <strong>Alhadi Jaya Motor</strong>
    </a>
  </div>
</nav>

<!-- Dashboard -->
<div class="container">
  <h3 class="text-center mb-4">📊 Dashboard Alhadi Jaya Motor</h3>
  <div class="row g-4">

    <!-- Beranda -->
    <div class="col-md-4">
      <div class="card text-center p-3 bg-light">
        <div class="card-body">
          <h5 class="card-title">🏠 Beranda</h5>
          <p class="card-text">Kembali ke halaman utama.</p>
          <a href="index.php" class="btn btn-outline-primary">Kembali</a>
        </div>
      </div>
    </div>

    <!-- Daftar Mobil -->
    <div class="col-md-4">
      <div class="card text-center p-3 bg-light">
        <div class="card-body">
          <h5 class="card-title">🚗 Mobil</h5>
          <p class="card-text">Lihat semua mobil yang tersedia.</p>
          <a href="mobil.php" class="btn btn-outline-primary">Lihat Mobil</a>
        </div>
      </div>
    </div>

    <!-- Tambah Mobil -->
    <div class="col-md-4">
      <div class="card text-center p-3 bg-light">
        <div class="card-body">
          <h5 class="card-title">➕ Tambah Mobil</h5>
          <p class="card-text">Tambah mobil baru ke database.</p>
          <a href="tambah_mobil.php" class="btn btn-success">Tambah Mobil</a>
        </div>
      </div>
    </div>

    <!-- Artikel -->
    <div class="col-md-4">
      <div class="card text-center p-3 bg-light">
        <div class="card-body">
          <h5 class="card-title">📰 Artikel</h5>
          <p class="card-text">Baca artikel dan berita terbaru.</p>
          <a href="artikel.php" class="btn btn-outline-primary">Lihat Artikel</a>
        </div>
      </div>
    </div>

    <!-- Akun -->
    <div class="col-md-4">
      <div class="card text-center p-3 bg-light">
        <div class="card-body">
          <h5 class="card-title">👤 Akun</h5>
          <p class="card-text">Kelola profil pengguna & login.</p>
          <a href="user.php" class="btn btn-outline-primary">Lihat Akun</a>
        </div>
      </div>
    </div>

    <!-- Pengaturan -->
    <div class="col-md-4">
      <div class="card text-center p-3 bg-light">
        <div class="card-body">
          <h5 class="card-title">⚙️ Pengaturan</h5>
          <p class="card-text">Lihat profil, struktur & ketentuan.</p>
          <a href="pengaturan.php" class="btn btn-outline-primary">Lihat Pengaturan</a>
        </div>
      </div>
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
