<?php
// File: profil.php
include 'navbar.php';
?>
<div class="container mt-4">
    <h3 class="mb-3">Profil Perusahaan</h3>
    <div class="row">
        <div class="col-md-4">
            <img src="img/logo.png" class="img-fluid rounded shadow" alt="Logo">
        </div>
        <div class="col-md-8">
            <div class="bg-light p-4 rounded shadow-sm">
                <h4 class="fw-bold">Alhadi Jaya Motor</h4>
                <p><strong>Alamat:</strong> Jl. Merdeka No.123, Jakarta</p>
                <p><strong>Email:</strong> info@alhadijayamotor.com</p>
                <p><strong>Telepon:</strong> 0812-3456-7890</p>
                <hr>
                <p><strong>Deskripsi:</strong> Alhadi Jaya Motor adalah showroom terpercaya dalam jual beli mobil baru & bekas. Memberikan pelayanan terbaik, harga bersaing, dan kendaraan berkualitas.</p>
                <p><strong>Visi:</strong> Menjadi showroom mobil terpercaya di Indonesia.</p>
                <p><strong>Misi:</strong> Memberikan pengalaman jual beli mobil yang mudah, cepat, dan aman.</p>
            </div>
        </div>
    </div>
</div>

<?php
// File: dokumen.php
include 'navbar.php';
?>
<div class="container mt-4">
    <h3 class="mb-3">Dokumen Perusahaan</h3>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card shadow-sm">
                <div class="card-body">
                    <p class="text-muted">Berikut adalah dokumen resmi perusahaan Alhadi Jaya Motor yang dapat Anda unduh:</p>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Akta Perusahaan
                            <a href="dokumen/akta_perusahaan.pdf" class="btn btn-outline-primary btn-sm" target="_blank">Lihat</a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            NPWP
                            <a href="dokumen/npwp.pdf" class="btn btn-outline-primary btn-sm" target="_blank">Lihat</a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Surat Izin Usaha
                            <a href="dokumen/surat_izin_usaha.pdf" class="btn btn-outline-primary btn-sm" target="_blank">Lihat</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// File: navbar.php
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="index.php">
      <img src="img/logo.png" alt="Logo" width="40" height="40" class="me-2">
      <strong>Alhadi Jaya Motor</strong>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mobil.php">Mobil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="artikel.php">Artikel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profil.php">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dokumen.php">Dokumen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user.php">Akun</a>
        </li>
      </ul>
    </d