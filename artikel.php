<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Artikel - Alhadi Jaya Motor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .card-img-top {
      height: 200px;
      object-fit: cover;
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
    <a class="navbar-brand d-flex align-items-center" href="index.php">
      <img src="img/logo.png" alt="Logo" width="40" height="40" class="me-2">
      <strong>Alhadi Jaya Motor</strong>
    </a>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
        <li class="nav-item"><a class="nav-link active" href="artikel.php">Artikel</a></li>
        <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="pengaturan.php">Pengaturan</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Konten -->
<div class="container">
  <h3 class="text-center mb-4">📰 Artikel Terbaru</h3>
  <div class="row g-4">
    <?php
    $query = mysqli_query($conn, "SELECT * FROM artikel ORDER BY id DESC");
    while ($row = mysqli_fetch_assoc($query)):
      $gambar = !empty($row['gambar']) ? "img/artikel/" . $row['gambar'] : "img/no-image.png";
    ?>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="<?= $gambar ?>" class="card-img-top" alt="<?= $row['judul'] ?>">
          <div class="card-body">
            <h5 class="card-title"><?= $row['judul'] ?></h5>
            <p class="card-text text-muted small"><?= date('d M Y', strtotime($row['created_at'])) ?></p>
            <p class="card-text"><?= mb_strimwidth(strip_tags($row['isi']), 0, 100, '...') ?></p>
            <a href="detail_artikel.php?id=<?= $row['id'] ?>" class="btn btn-outline-primary btn-sm">Baca Selengkapnya</a>
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
