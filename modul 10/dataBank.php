<?php
require_once('kelas/akunBank.php');

$data1 = new akunBank("801", 10000);
$data1->setNama("Ghiyast Afif");

echo "<h3>Informasi Akun Bank 1:</h3>";
echo "No Akun: " . $data1->getAccountNumber() . "<br>";
echo "Pemilik: " . $data1->getNama() . "<br>";
echo "Saldo Awal: Rp. " . $data1->getSaldo() . "<br>";

$data1->tambahUang(5000);
echo "Saldo setelah setor Rp. 5000: Rp. " . $data1->getSaldo() . "<br>";

$data1->kurangiUang(2000);
echo "Saldo setelah tarik Rp. 2000: Rp. " . $data1->getSaldo() . "<br>";

// Hitung pajak
echo "Pajak yang harus dibayar (11%): Rp. " . $data1->hitungPajak() . "<br>";