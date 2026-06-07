<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';
if (isset($_POST['input'])) {

    $namaDosen = $_POST['namaDosen'];
    $noHP      = $_POST['noHP'];

    $query  = "INSERT INTO t_dosen (idDosen, namaDosen, noHP) VALUES (NULL, '$namaDosen', '$noHP')";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }

    header("Location: viewdosen.php");
    exit(); 
} else {
    header("Location: viewdosen.php");
    exit();
}
?>