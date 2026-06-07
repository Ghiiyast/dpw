<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mata Kuliah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container form-container">
        <h1>Input Mata Kuliah</h1>
        <form action="proses_inputmatakuliah.php" method="post">
            <fieldset>
                <legend>Data Mata Kuliah Baru</legend>
                <p>
                    <label>Kode MK:</label>
                    <input type="number" name="kodeMK" placeholder="Masukkan Kode Angka" required>
                </p>
                <p>
                    <label>Nama Mata Kuliah:</label>
                    <input type="text" name="namaMK" placeholder="Contoh: Pemrograman Web" required>
                </p>
                <p>
                    <label>Jumlah SKS:</label>
                    <input type="number" name="sks" min="1" max="6" required>
                </p>
                <p>
                    <label>Jumlah Jam:</label>
                    <input type="number" name="jam" min="1" max="12" required>
                </p>
                <p style="text-align: center; margin-bottom: 0;">
                    <button type="submit" name="simpan" class="btn btn-success">Simpan Data</button>
                    <a href="viewmatakuliah.php" class="btn btn-danger">Batal</a>
                </p>
            </fieldset>
        </form>
    </div>
</body>
</html>