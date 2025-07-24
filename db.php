<?php
$conn = mysqli_connect("localhost", "root", "", "mobil_db");
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
