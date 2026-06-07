<?php
include 'koneksi.php';

if (isset($_POST['update'])) {
    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks    = $_POST['sks'];
    $jam    = $_POST['jam'];

    $query  = "UPDATE t_matakuliah SET namaMK='$namaMK', sks='$sks', jam='$jam' WHERE kodeMK='$kodeMK'";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Gagal memperbarui data mata kuliah: " . mysqli_error($link));
    }

    header("Location: viewmatakuliah.php");
    exit();
}
?>