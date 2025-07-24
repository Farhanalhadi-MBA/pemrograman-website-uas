<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Mobil - Alhadi Jaya Motor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background-color: #f8f9fa; }
    .card-img-top { height: 180px; object-fit: cover; }
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

<div class="container">
  <h3 class="text-center mb-4">🚗 Daftar Mobil Tersedia</h3>
  <div class="row g-4">
    <?php
    $query = mysqli_query($conn, "SELECT * FROM mobil ORDER BY id DESC");
    while ($row = mysqli_fetch_assoc($query)):
        $gambar = !empty($row['gambar']) ? "img/mobil/" . $row['gambar'] : "img/no-image.png";
    ?>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="<?= $gambar ?>" class="card-img-top" alt="<?= $row['nama'] ?>">
          <div class="card-body">
            <h5 class="card-title"><?= $row['nama'] ?> (<?= $row['merk'] ?>)</h5>
            <p class="card-text">Tahun: <?= $row['tahun'] ?><br>Harga: Rp <?= number_format($row['harga'], 0, ',', '.') ?></p>
            <a href="detail_mobil.php?id=<?= $row['id'] ?>" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>

  <div class="text-center mt-4">
    <a href="dashboard.php" class="btn btn-secondary">⬅ Kembali ke Dashboard</a>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
