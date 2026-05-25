<?php
$nilai_angka = 82; 

if ($nilai_angka >= 90 && $nilai_angka <= 100) {
    $nilai_huruf = "A";
} elseif ($nilai_angka >= 80 && $nilai_angka <= 89) {
    $nilai_huruf = "AB";
} elseif ($nilai_angka >= 70 && $nilai_angka <= 79) {
    $nilai_huruf = "B";
} elseif ($nilai_angka >= 60 && $nilai_angka <= 69) {
    $nilai_huruf = "BC";
} elseif ($nilai_angka >= 0 && $nilai_angka <= 59) {
    $nilai_huruf = "C";
} else {
    $nilai_huruf = "Nilai Tidak Valid (Harus 0-100)";
}

echo "Nilai Angka: " . $nilai_angka . "<br>";
echo "Konversi Nilai Huruf: <b>" . $nilai_huruf . "</b>";
?>