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
    <title>Pengaturan Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f1f1f1;
        }
        .box {
            max-width: 600px;
            margin: 40px auto;
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="box">
    <h3 class="mb-4">Pengaturan Akun</h3>
    <table class="table">
        <tr>
            <th>Nama</th>
            <td><?php echo htmlspecialchars($data['nama']); ?></td>
        </tr>
        <tr>
            <th>Username</th>
            <td><?php echo htmlspecialchars($data['username']); ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo htmlspecialchars($data['email']); ?></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><?php echo htmlspecialchars($data['alamat']); ?></td>
        </tr>
        <tr>
            <th>No. HP</th>
            <td><?php echo htmlspecialchars($data['no_hp']); ?></td>
        </tr>
    </table>
    <a href="dashboard.php" class="btn btn-secondary">Kembali ke Dashboard</a>
</div>

</body>
</html>
