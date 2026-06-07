<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Galeri Gambar</title>
    <style>
        .galeri-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }
        .box-gambar {
            border: 1px solid #ccc;
            padding: 5px;
            text-align: center;
        }
        .box-gambar img {
            width: 200px;
            height: 150px;
            object-fit: cover;
        }
    </style>
</head>
<body>

<h2>Galeri Gambar</h2>
<div class="galeri-container">

<?php
$filelist = glob('gambar/*');

foreach ($filelist as $filename) {
    if (is_file($filename)) {
        echo '<div class="box-gambar">';
        echo '<img src="' . $filename . '" alt="Gambar">';
        echo '<br><small>' . basename($filename) . '</small>';
        echo '</div>';
    }
}
?>

</div>
</body>
</html>