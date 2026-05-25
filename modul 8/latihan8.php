<?php
// Menggunakan sintaks array_simple sesuai petunjuk halaman terakhir
$array = [
    "10A" => ["udin", "ismail", "adi"], // Diganti 10A dan 10B agar kuncinya tidak tumpang tindih
    "10B" => ["lukman", "fajri", "mahmud"]
];

echo "<pre>";
// Menampilkan seluruh struktur data array
print_r($array);
echo "</pre>";

// Menampilkan kelas 10A saja
echo "Siswa Kelas 10A: <br>";
print_r($array['10A']);
echo "<br><br>";

// Menampilkan udin (Kelas 10A index ke-0)
echo "Siswa pertama di 10A: " . $array['10A'][0] . "<br>";

// TUGAS MODUL: Tampilkan fajri dan andi
echo "Tampilkan Fajri: " . $array['10B'][1] . "<br>"; // Fajri ada di kelas 10B index 1
echo "Tampilkan Adi: " . $array['10A'][2] . "<br>";   // Adi ada di kelas 10A index 2
?>