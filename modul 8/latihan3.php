<?php
$x = 5;
$y = 10;

// --- Arithmetic Operators ---
echo "Penambahan: " . ($x + $y) . "<br>";
echo "Pengurangan: " . ($x - $y) . "<br>"; 
echo "Perkalian: " . ($x * $y) . "<br>";   
echo "Pembagian: " . ($x / $y) . "<br>";   
echo "Modulus (Sisa Bagi): " . ($x % $y) . "<br>";
echo "Eksponensial (Pangkat): " . ($x ** $y) . "<br>"; 
echo "<br>";

// --- Assignment Operators ---
$x += 2;
$y *= 2; 
echo "Penambahan x: " . $x . "<br>";
echo "Perkalian y: " . $y . "<br>";
echo "<br>";

// --- Increment/Decrement Operators ---
echo "Isi ++x = " . ++$x . "<br>"; 
echo "Isi x++ = " . $x++ . "<br>"; 
echo "Isi x sekarang = " . $x . "<br>"; 
echo "<br>";

echo "Isi --y = " . --$y . "<br>"; 
echo "Isi y-- = " . $y-- . "<br>"; 
echo "Isi y sekarang = " . $y . "<br>"; 
echo "<br>";


$user = "Andi darmawan";


$status = (empty($user)) ? "Kosong" : "Ada isi"; 
echo "Status User: " . $status . "<br>";

$color = $color ?? "red"; 
echo "Warna: " . $color . "<br>";
?>