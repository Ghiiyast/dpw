<?php
include 'Database.php';

$db = new Database();

$id_cari = isset($_GET['id']) ? $_GET['id'] : 10;

$tampil = $db->getDosenById($id_cari);

echo "<h2>Data Dosen (Hasil Object-Oriented Class)</h2>";

if ($tampil->num_rows > 0) {
    while ($row = $tampil->fetch_assoc()) {
        echo "ID: " . htmlspecialchars($row['idDosen']) . "<br>";
        echo "Nama: " . htmlspecialchars($row['namaDosen']) . "<br>";
        echo "No HP: " . htmlspecialchars($row['noHP']) . "<br>";
        echo "-----------------------------------<br>";
    }
} else {
    echo "Data dosen dengan ID $id_cari tidak ditemukan.";
}
?>