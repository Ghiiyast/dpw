<?php

require_once 'kelas/Manusia.php';

$andi = new Manusia();
$andi->setNama("Andi Pratama");
echo "Nama Objek 1: " . $andi->getNama() . "<br>";

$budi = new Manusia();
$budi->setNama("Budi Santoso");
echo "Nama Objek 2: " . $budi->getNama() . "<br>";

echo "---------------------------------------<br>";

$saya = new Manusia();
$saya->setNama("Ghiyast Afif Ajuang Prakasa");
$saya->setUmur(19); 

echo "<h3>Identitas Saya:</h3>";
echo "Nama: " . $saya->getNama() . "<br>";
echo "Umur: " . $saya->getUmur() . " tahun<br>";


echo $saya->tampilkanNIK() . "<br>";

/* KESIMPULAN UJICOBA :
1. Properti ber-modifier 'protected' ($name, $nik) tidak bisa diakses langsung dari luar class 
   (misal: $saya->name akan error). Kita harus menggunakan fungsi 'public' (getter/setter) untuk mengaksesnya.
2. Method ber-modifier 'private' (getNIK) sama sekali tidak bisa dipanggil dari luar class. 
   Solusinya adalah memanggilnya melalui method lain yang bersifat 'public' di dalam class yang sama.
*/

echo "<hr>";
echo "<h3>Menu Cek Tugas Modul 10:</h3>";
echo "<ul>";
echo "  <li><a href='index.php'>Lembar Kerja 2 (Manusia)</a></li>";
echo "  <li><a href='dataBank.php'>Lembar Kerja 3 (Akun Bank)</a></li>";
echo "  <li><a href='dataKelas.php'>Lembar Kerja 4 (Data Kelas Mahasiswa)</a></li>";
echo "  <li><a href='kelas/buah2.php'>Lembar Kerja 6 (Buah 2)</a></li>";
echo "</ul>";