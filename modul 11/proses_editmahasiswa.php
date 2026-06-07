<?php
include 'koneksi.php';

if (isset($_POST['update'])) {
    $npm     = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi   = $_POST['prodi'];
    $alamat  = $_POST['alamat'];
    $noHP    = $_POST['noHP'];

    $query  = "UPDATE t_mahasiswa SET namaMhs='$namaMhs', prodi='$prodi', alamat='$alamat', noHP='$noHP' WHERE npm='$npm'";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Gagal memperbarui data mahasiswa: " . mysqli_error($link));
    }

    header("Location: viewmahasiswa.php");
    exit();
}
?>