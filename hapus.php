<?php
session_start();
include 'db.php';
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM mobil WHERE id=$id");
header("Location: dashboard.php");
exit;
?>
