<?php
include 'db.php'; // pastikan file ini sudah ada dan koneksi berhasil
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Registrasi - Alhadi Jaya Motor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <h2 class="text-center mb-4">Form Registrasi Pengguna</h2>
  
  <?php
  if (isset($_POST['register'])) {
      $username = htmlspecialchars($_POST['username']);
      $password = htmlspecialchars($_POST['password']);
      $nama     = htmlspecialchars($_POST['nama']);
      $email    = htmlspecialchars($_POST['email']);
      $alamat   = htmlspecialchars($_POST['alamat']);
      $no_hp    = htmlspecialchars($_POST['no_hp']);

      // cek apakah username sudah digunakan
      $cek = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
      if (mysqli_num_rows($cek) > 0) {
          echo '<div class="alert alert-danger">❌ Username sudah digunakan. Gunakan yang lain.</div>';
      } else {
          $query = mysqli_query($conn, "INSERT INTO user (username, password, nama, email, alamat, no_hp) 
                      VALUES ('$username', '$password', '$nama', '$email', '$alamat', '$no_hp')");
          if ($query) {
              echo '<div class="alert alert-success">✅ Registrasi berhasil. <a href="login.php">Login sekarang</a>.</div>';
          } else {
              echo '<div class="alert alert-danger">❌ Terjadi kesalahan saat menyimpan data.</div>';
          }
      }
  }
  ?>

  <form method="POST" class="border p-4 bg-white shadow-sm">
    <div class="mb-3">
      <label>Username</label>
      <input type="text" name="username" class="form-control" required>
    </div>

    <div class="mb-3">
      <label>Password</label>
      <input type="password" name="password" class="form-control" required>
    </div>

    <div class="mb-3">
      <label>Nama Lengkap</label>
      <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="mb-3">
      <label>Email</label>
      <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
      <label>Alamat</label>
      <textarea name="alamat" class="form-control" required></textarea>
    </div>

    <div class="mb-3">
      <label>No. HP</label>
      <input type="text" name="no_hp" class="form-control" required>
    </div>

    <button type="submit" name="register" class="btn btn-primary">Daftar Sekarang</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
  </form>
</div>

</body>
</html>
