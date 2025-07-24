<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Beranda - Alhadi Jaya Motor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="index.php">
      <img src="img/logo.png" alt="Logo" width="40" height="40" class="me-2">
      <strong>Alhadi Jaya Motor</strong>
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="index.php">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="mobil.php">Mobil</a></li>
        <li class="nav-item"><a class="nav-link" href="artikel.php">Artikel</a></li>
        <li class="nav-item"><a class="nav-link" href="user.php">Akun</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Container -->
<div class="container">
  <h2 class="text-center mb-4">Daftar Mobil Tersedia</h2>
  <div class="row">
    <?php
    $result = mysqli_query($conn, "SELECT * FROM mobil");
    while ($mobil = mysqli_fetch_assoc($result)) {
    ?>
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <img src="img/<?= htmlspecialchars($mobil['gambar']) ?>" class="card-img-top" alt="<?= htmlspecialchars($mobil['nama']) ?>" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title"><?= htmlspecialchars($mobil['nama']) ?></h5>
            <p class="card-text">Merk: <?= htmlspecialchars($mobil['merk']) ?></p>
            <p class="card-text">Tahun: <?= htmlspecialchars($mobil['tahun']) ?></p>
            <p class="card-text text-success fw-bold">Rp <?= number_format($mobil['harga'], 0, ',', '.') ?></p>
            <a href="detail.php?id=<?= $mobil['id'] ?>" class="btn btn-primary btn-sm">Lihat Detail</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<!-- Footer -->
<footer class="bg-light text-center mt-4 py-3">
  <p class="mb-0">&copy; <?= date('Y') ?> Alhadi Jaya Motor. All rights reserved.</p>
</footer>

</body>
</html>
