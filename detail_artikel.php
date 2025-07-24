<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM artikel WHERE id = $id");
$data = mysqli_fetch_assoc($query);
$gambar = !empty($data['gambar']) ? "img/artikel/" . $data['gambar'] : "img/no-image.png";
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= $data['judul'] ?> - Alhadi Jaya Motor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-4">
    <a href="artikel.php" class="btn btn-outline-secondary mb-3">⬅ Kembali ke Artikel</a>
    <div class="card shadow-sm">
      <img src="<?= $gambar ?>" class="card-img-top" alt="<?= $data['judul'] ?>" style="max-height: 400px; object-fit: cover;">
      <div class="card-body">
        <h3><?= $data['judul'] ?></h3>
        <p class="text-muted"><?= date('d M Y', strtotime($data['created_at'])) ?></p>
        <p><?= nl2br($data['isi']) ?></p>
      </div>
    </div>
  </div>
</body>
</html>
