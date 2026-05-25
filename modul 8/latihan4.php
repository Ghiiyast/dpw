<?php
/* Operator logika dan perbandingan yang tersedia:
  ==  : Sama Dengan
  === : Identikal (Sama nilai dan tipe data)
  !=  : Tidak sama dengan
  <>  : Tidak sama dengan
  !== : Not identical
  >   : Lebih Besar dari
  <   : Kurang Dari
  >=  : Lebih besar atau Sama dengan
  <=  : Kurang dari atau sama dengan
  <=> : Spaceship (Mengembalikan -1, 0, atau 1)
*/

// Mengambil data jam digital sekarang dalam format 24 jam (00 - 23)
$t = date("H"); 


echo "<b>--- Contoh If ---</b><br>";
if ($t < 16) {
    echo "Selamat siang! (karena jam sekarang kurang dari jam 16:00)<br>";
}
echo "<br>";

echo "<b>--- Contoh If dan Else ---</b><br>";
if ($t < 20) {
    echo "Selamat siang/sore!";
} else {
    echo "Selamat malam!";
}
echo "<br><br>";


echo "<b>--- Contoh Nested If (If Bersyarat Banyak) ---</b><br>";
if ($t < 11) {
    echo "Selamat Pagi!";
} elseif ($t < 16) {
    echo "Selamat sore!";
} else {
    echo "Selamat Malam!";
}
?>