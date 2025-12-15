<?php
include 'koneksi.php';
$result = $conn->query("SELECT * FROM mahasiswa ORDER BY id_mahasiswa DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Data Mahasiswa - KSI20255</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">KSI2025</a>
  </div>
</nav>

<!-- Form Tambah Data -->
<div class="container mt-4">
  <h3 class="mb-4">Tambah Data Mahasiswa</h3>
  <form action="tambah.php" method="POST" class="card p-4 shadow-sm">
    <div class="mb-3">
      <label class="form-label">NIM</label>
      <input type="text" name="nim" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Namaa</label>
      <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Jurusan</label>
      <input type="text" name="jurusan" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Alamat</label>
      <textarea name="alamat" class="form-control"></textarea>
    </div>
    <div class="mb-3">
      <label class="form-label">No HP</label>
      <input type="text" name="no_hp" class="form-control">
    </div>
    <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
  </form>
</div>

<!-- Tabel Data Mahasiswa -->
<div class="container mt-5">
  <h3 class="mb-3">Daftar Mahasiswa</h3>
  <table class="table table-striped table-bordered shadow-sm">
    <thead class="table-primary">
      <tr class="text-center">
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Tanggal Input</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $no = 1;
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<tr>
                  <td class='text-center'>{$no}</td>
                  <td>{$row['nim']}</td>
                  <td>{$row['nama']}</td>
                  <td>{$row['jurusan']}</td>
                  <td>{$row['alamat']}</td>
                  <td>{$row['no_hp']}</td>
                  <td>{$row['created_at']}</td>
                </tr>";
          $no++;
        }
      } else {
        echo "<tr><td colspan='7' class='text-center text-muted'>Belum ada data</td></tr>";
      }
      ?>
    </tbody>
  </table>
</div>

<!-- Footer -->
<footer class="bg-light text-center py-3 mt-5">
  <small>&copy; 2025 - Keamanan Sistem Informasi</small>
</footer>

</body>
</html>
