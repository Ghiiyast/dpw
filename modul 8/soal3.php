<?php
$data_siswa = [
    1 => ["nama" => "Adi", "poin" => 75],
    2 => ["nama" => "Joni", "poin" => 80],
    3 => ["nama" => "Jihan", "poin" => 65],
    4 => ["nama" => "Aya", "poin" => 70],
    5 => ["nama" => "Ita", "poin" => 85],
    6 => ["nama" => "Budi", "poin" => 90],
    7 => ["nama" => "Tini", "poin" => 95],
    8 => ["nama" => "Sari", "poin" => 65]
];

echo "<b>a) Poin siswa dengan nomor urut 5:</b><br>";
echo "Nama: " . $data_siswa[5]['nama'] . " | Poin: " . $data_siswa[5]['poin'] . "<br><br>";

echo "<b>b) Siswa yang memiliki poin 90:</b><br>";
foreach ($data_siswa as $no => $siswa) {
    if ($siswa['poin'] == 90) {
        echo "- " . $siswa['nama'] . "<br>";
    }
}
echo "<br>";

echo "<b>c) Siswa yang memiliki poin 100:</b><br>";
$menemukan_siswa = false;

foreach ($data_siswa as $no => $siswa) {
    if ($siswa['poin'] == 100) {
        echo "- " . $siswa['nama'] . "<br>";
        $menemukan_siswa = true;
    }
}

if ($menemukan_siswa == false) {
    echo "(hasil: tidak ada)<br>";
}
?>