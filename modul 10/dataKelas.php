<?php

require_once('kelas/Mahasiswa.php');

$mhs1 = new mahasiswa("Ghiyast Afif Ajuang Prakasa");
$mhs1->setNIM("253307053"); 
$mhs1->setKelas("2B"); 
$mhs1->setJurusan("D3 Teknik Informatika");


echo "<h3>Data Mahasiswa:</h3>";
echo "Nama: " . $mhs1->getNama() . "<br>";
echo "NIM: " . $mhs1->getNIM() . "<br>";
echo "Kelas: " . $mhs1->getKelas() . "<br>";
echo "Jurusan: " . $mhs1->getJurusan() . "<br>";