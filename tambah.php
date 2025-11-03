<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nim     = $_POST['nim'];
    $nama    = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat  = $_POST['alamat'];
    $no_hp   = $_POST['no_hp'];

    $sql = "INSERT INTO mahasiswa (nim, nama, jurusan, alamat, no_hp)
            VALUES ('$nim', '$nama', '$jurusan', '$alamat', '$no_hp')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
