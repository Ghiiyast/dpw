<?php
include 'koneksi.php';

// Query DML untuk insert data
$sql = "INSERT INTO t_dosen (idDosen, namaDosen, noHP) 
        VALUES (10, 'Rahmat Dwi Prasetya', '081234567890')"; 

if ($con->query($sql) === TRUE) {
    echo "Data dosen berhasil ditambahkan!";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>