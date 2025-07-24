<?php
include 'db.php';
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background-color: #f8f9fa; }
    .navbar { background-color: #0d6efd; }
    .navbar-brand, .nav-link, .navbar-text { color: white !important; }
    .card-img-top { height: 200px; object-fit: cover; }
  </style>
</head>
<body>

<div class="container mt-4">
  <h2 class="text-center mb-4">Dashboard Admin - Data Mobil</h2>
  <a href="tambah_mobil.php" class="btn btn-success mb-3">+ Tambah Mobil</a>

  <div class="row">
    <?php
    $query = mysqli_query($conn, "SELECT * FROM mobil");
    while ($row = mysqli_fetch_assoc($query)) {
        echo '
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="img/' . $row['gambar'] . '" class="card-img-top" alt="' . $row['nama'] . '">
            <div class="card-body">
              <h5 class="card-title">' . $row['nama'] . '</h5>
              <p class="card-text">Merk: ' . $row['merk'] . ' | Tahun: ' . $row['tahun'] . '</p>
              <p class="card-text">Rp ' . number_format($row['harga'], 0, ',', '.') . '</p>
              <a href="hapus.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus?\')">Hapus</a>
            </div>
          </div>
        </div>';
    }
    ?>
  </div>
</div>

</body>
</html>
