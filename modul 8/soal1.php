<?php
$gaji_pokok = 3250000;
$tunjangan = 1200000;

$gaji_kotor = $gaji_pokok + $tunjangan;
$pajak = 0.1 * $gaji_kotor;
$gaji_bersih = $gaji_kotor - $pajak;

echo "<h3>Perhitungan Gaji Obi</h3>";
echo "Gaji Pokok: Rp " . number_format($gaji_pokok, 0, ',', '.') . "<br>";
echo "Tunjangan: Rp " . number_format($tunjangan, 0, ',', '.') . "<br>";
echo "Gaji Kotor: Rp " . number_format($gaji_kotor, 0, ',', '.') . "<br>";
echo "Potongan Pajak (10%): Rp " . number_format($pajak, 0, ',', '.') . "<br>";
echo "<b>Gaji Bersih yang Diterima: Rp " . number_format($gaji_bersih, 0, ',', '.') . "</b>";
?>