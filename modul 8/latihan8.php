<?php
$array = [
    "10A" => ["udin", "ismail", "adi"], 
    "10B" => ["lukman", "fajri", "mahmud"]
];

echo "<pre>";
print_r($array);
echo "</pre>";
echo "Siswa Kelas 10A: <br>";
print_r($array['10A']);
echo "<br><br>";
echo "Siswa pertama di 10A: " . $array['10A'][0] . "<br>";

echo "Tampilkan Fajri: " . $array['10B'][1] . "<br>"; 
echo "Tampilkan Adi: " . $array['10A'][2] . "<br>"; 
?>