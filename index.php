<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KSI2025 - Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">KSI2025</a>
  </div>
</nav>

<!-- Content -->
<div class="container mt-4">
  <h2 class="text-center mb-4">Daftar Mahasiswa</h2>

  <?php
  // Data mahasiswa (contoh data statis)
  $mahasiswa = [
      ["NIM" => "230101001", "Nama" => "Ari YT", "Prodi" => "Teknik Informatika"],
      ["NIM" => "230101002", "Nama" => "Budi Santoso", "Prodi" => "Sistem Informasi"],
      ["NIM" => "230101003", "Nama" => "Citra Dewi", "Prodi" => "Manajemen Informatika"]
  ];
  ?>

  <table class="table table-bordered table-striped">
    <thead class="table-primary text-center">
      <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Program Studi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; foreach ($mahasiswa as $mhs): ?>
        <tr>
          <td class="text-center"><?= $no++ ?></td>
          <td><?= $mhs["NIM"] ?></td>
          <td><?= $mhs["Nama"] ?></td>
          <td><?= $mhs["Prodi"] ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<!-- Footer -->
<footer class="bg-primary text-white text-center py-3 mt-4">
  <small>© 2025 KSI | Keamanan Sistem Informasi</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
