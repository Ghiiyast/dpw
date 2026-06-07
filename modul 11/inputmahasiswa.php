<!DOCTYPE html>
<html>
<head>
    <title>Input Mahasiswa</title>
</head>
<body>
    <h2 style="text-align:center;">Tambah Data Mahasiswa</h2>
    <form action="proses_inputmahasiswa.php" method="post" style="width:300px; margin:auto;">
        <p>NPM: <br><input type="number" name="npm" required></p>
        <p>Nama Mahasiswa: <br><input type="text" name="namaMhs" required></p>
        <p>Prodi: <br><input type="text" name="prodi" required></p>
        <p>Alamat: <br><input type="text" name="alamat" required></p>
        <p>No HP: <br><input type="text" name="noHP" required></p>
        <button type="submit" name="simpan">Simpan Data</button>
    </form>
</body>
</html>