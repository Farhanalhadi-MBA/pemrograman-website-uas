<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

include 'db.php';

$user = $_SESSION['user'];
$user_id = $user['id'];

$query = mysqli_query($conn, "SELECT * FROM user WHERE id = $user_id");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .box {
            max-width: 600px;
            margin: 40px auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="dashboard.php">Alhadi Jaya Motor</a>
  </div>
</nav>

<div class="box">
    <h3 class="mb-4">Akun Saya</h3>
    <table class="table">
        <tr><th>Nama</th><td><?= htmlspecialchars($data['nama']) ?></td></tr>
        <tr><th>Username</th><td><?= htmlspecialchars($data['username']) ?></td></tr>
        <tr><th>Email</th><td><?= htmlspecialchars($data['email']) ?></td></tr>
        <tr><th>Alamat</th><td><?= htmlspecialchars($data['alamat']) ?></td></tr>
        <tr><th>No. HP</th><td><?= htmlspecialchars($data['no_hp']) ?></td></tr>
    </table>
    <a href="dashboard.php" class="btn btn-secondary">Kembali</a>
</div>

</body>
</html>
