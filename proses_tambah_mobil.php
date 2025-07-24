<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$merk = $_POST['merk'];
$tahun = $_POST['tahun'];
$harga = $_POST['harga'];
$gambar = '';

if (!empty($_FILES['gambar']['name'])) {
  $upload_dir = 'img/mobil/';
  if (!is_dir($upload_dir)) mkdir($upload_dir, 0755, true);
  $gambar = basename($_FILES['gambar']['name']);
  move_uploaded_file($_FILES['gambar']['tmp_name'], $upload_dir . $gambar);
}

$query = "INSERT INTO mobil (nama, merk, tahun, harga, gambar, created_at) VALUES ('$nama', '$merk', '$tahun', '$harga', '$gambar', NOW())";

if (mysqli_query($conn, $query)) {
  header("Location: mobil.php");
} else {
  echo "Gagal menambah mobil: " . mysqli_error($conn);
}
?>
