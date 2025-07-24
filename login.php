<?php
session_start();

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "mobil_db");
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Proses login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['login'] = true;
        $_SESSION['user'] = mysqli_fetch_assoc($result);
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Login gagal! Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Alhadi Jaya Motor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
        }
        .login-box {
            max-width: 400px;
            margin: 80px auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px #aaa;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h3 class="text-center mb-4">Login Admin</h3>

    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>

    <form method="POST">
        <div class="mb-3">
            <input type="text" name="username" class="form-control" placeholder="Username" required>
        </div>
        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="d-grid">
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>

</body>
</html>
