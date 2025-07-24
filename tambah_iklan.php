<form action="proses_tambah_iklan.php" method="POST" enctype="multipart/form-data">
  <input type="text" name="nama" placeholder="Nama Mobil" required><br>
  <input type="text" name="merk" placeholder="Merk" required><br>
  <input type="number" name="tahun" placeholder="Tahun" required><br>
  <input type="number" name="harga" placeholder="Harga" required><br>
  <input type="text" name="wilayah" placeholder="Wilayah" required><br>
  <input type="file" name="gambar" required><br>
  <button type="submit">Pasang Iklan</button>
</form>
