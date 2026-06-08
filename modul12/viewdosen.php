<?php
include 'koneksi.php';

if (isset($_GET['id'])) {

    $input = $con->escape_string($_GET['id']);

    $statement = $con->prepare("SELECT idDosen, namaDosen, noHP FROM t_dosen WHERE idDosen = ?");

    $statement->bind_param("i", $input);
    
    $statement->execute();
    
    $hasil = $statement->get_result();
    
    while ($baris = $hasil->fetch_assoc()) {
        // Mencegah XSS dengan htmlspecialchars
        echo "Nama Dosen: " . htmlspecialchars($baris['namaDosen']) . " - No HP: " . htmlspecialchars($baris['noHP']) . "<br>";
    }

    $statement->close();
} else {
    echo "Silakan masukkan parameter ID pada URL. Contoh: viewdosen.php?id=10";
}

$con->close();
?>