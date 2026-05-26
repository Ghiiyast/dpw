<?php
$jumlah_uang = 1387500;
$pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 500];

echo "<h3>Analisis Pecahan Uang Penarikan Ani:</h3>";
echo "Total Uang: Rp " . number_format($jumlah_uang, 0, ',', '.') . "<br><br>";

foreach ($pecahan as $nilai_pecahan) {
    $lembar = floor($jumlah_uang / $nilai_pecahan);
    $jumlah_uang = $jumlah_uang % $nilai_pecahan;
    
    if ($lembar > 0) {
        echo "Pecahan Rp " . number_format($nilai_pecahan, 0, ',', '.') . " sebanyak: <b>$lembar</b> lembar/koin<br>";
    }
}
?>