<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$merk = $_POST['merk'];
$tahun = $_POST['tahun'];
$harga = $_POST['harga'];
$wilayah = $_POST['wilayah'];

$gambar = '';
if ($_FILES['gambar']['name'] != '') {
    $target_dir = "img/mobil/";
    if (!is_dir($target_dir)) mkdir($target_dir, 0777, true);
    $gambar = basename($_FILES["gambar"]["name"]);
    $target_file = $target_dir . $gambar;
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);
}

$query = "INSERT INTO mobil (nama, merk, tahun, harga, wilayah, gambar)
          VALUES ('$nama', '$merk', '$tahun', '$harga', '$wilayah', '$gambar')";
mysqli_query($conn, $query);

header("Location: mobil.php");
?>
