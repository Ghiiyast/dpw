<?php
$namaBuah = array("Nanas", "Mangga", "jeruk", "Apel", "Melon", "Manggis");

echo "saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . ".<br>";

echo "saya suka " . $namaBuah[1] . "<br>"; // Menampilkan Mangga
echo "saya suka " . $namaBuah[2] . "<br>"; // Menampilkan Jeruk
echo "saya suka " . $namaBuah[3] . "<br>"; // Menampilkan Apel
echo "saya suka " . $namaBuah[4] . "<br>"; // Menampilkan Melon
echo "<br>";

$umur = array("Andi" => "35 Tahun", "Ben" => "37 Tahun", "Joe" => "40 Tahun");
$umur['ahmad'] = "50 Tahun"; 

echo "Umur andi adalah " . $umur['Andi'] . "<br><br>";

echo "<b>Daftar semua umur:</b><br>";
foreach ($umur as $nama => $usia) {
    echo "Umur $nama adalah $usia<br>";
}
?>