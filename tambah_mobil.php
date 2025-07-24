<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Mobil - Alhadi Jaya Motor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background-color: #f4f8fc; }
    .navbar-brand img { border-radius: 10px; }
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

<!-- Konten -->
<div class="container">
  <div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
      <h5 class="mb-0">📝 Tambah Mobil Baru</h5>
    </div>
    <div class="card-body">
      <form action="proses_tambah_mobil.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Mobil</label>
          <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="merk" class="form-label">Merk</label>
          <input type="text" name="merk" id="merk" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="tahun" class="form-label">Tahun</label>
          <input type="number" name="tahun" id="tahun" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="harga" class="form-label">Harga (Rp)</label>
          <input type="number" name="harga" id="harga" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="gambar" class="form-label">Upload Gambar</label>
          <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Mobil</button>
        <a href="dashboard.php" class="btn btn-secondary">Kembali</a>
      </form>
    </div>
  </div>
</div>

<!-- Script Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
