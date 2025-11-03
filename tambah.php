<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nim  = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    $query = "INSERT INTO mahasiswa (nim, nama, prodi) VALUES ('$nim', '$nama', '$prodi')";
    mysqli_query($koneksi, $query);
    echo "Data berhasil ditambahkan!";
}
?>

<form method="post">
  <label>NIM:</label><br>
  <input type="text" name="nim"><br>
  <label>Nama:</label><br>
  <input type="text" name="nama"><br>
  <label>Prodi:</label><br>
  <input type="text" name="prodi"><br><br>
  <button type="submit" name="submit">Tambah Data</button>
</form>
