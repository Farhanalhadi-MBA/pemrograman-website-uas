<?php
include 'db.php';

if (!isset($_GET['id'])) {
    echo "<div class='container mt-4'><div class='alert alert-danger'>ID mobil tidak ditemukan.</div></div>";
    exit;
}

$id = intval($_GET['id']);
$result = mysqli_query($conn, "SELECT * FROM mobil WHERE id = $id");

if (mysqli_num_rows($result) == 0) {
    echo "<div class='container mt-4'><div class='alert alert-danger'>Data mobil tidak ditemukan.</div></div>";
    exit;
}

$mobil = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Detail Mobil - <?= htmlspecialchars($mobil['nama']) ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
  <div class="container">
    <a class="navbar-brand" href="index.php">Alhadi Jaya Motor</a>
  </div>
</nav>

<!-- Detail Mobil -->
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <img src="img/<?= htmlspecialchars($mobil['gambar']) ?>" alt="<?= htmlspecialchars($mobil['nama']) ?>" class="img-fluid rounded shadow">
    </div>
    <div class="col-md-6">
      <h2><?= htmlspecialchars($mobil['nama']) ?></h2>
      <p><strong>Merk:</strong> <?= htmlspecialchars($mobil['merk']) ?></p>
      <p><strong>Tahun:</strong> <?= htmlspecialchars($mobil['tahun']) ?></p>
      <p><strong>Harga:</strong> <span class="text-success fw-bold">Rp <?= number_format($mobil['harga'], 0, ',', '.') ?></span></p>
      <?php if (!empty($mobil['deskripsi'])): ?>
  <p><strong>Deskripsi:</strong><br><?= nl2br(htmlspecialchars($mobil['deskripsi'])) ?></p>
<?php else: ?>
  <p><strong>Deskripsi:</strong><br><em>Iwan Guteng.</em></p>
<?php endif; ?>
      <a href="index.php" class="btn btn-secondary mt-3">← Kembali ke Beranda</a>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="bg-light text-center mt-5 py-3">
  <p class="mb-0">&copy; <?= date('Y') ?> Alhadi Jaya Motor</p>
</footer>

</body>
</html>
