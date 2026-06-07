<?php
include 'koneksi.php';
if (!isset($_GET['npm'])) {
    header("Location: viewmahasiswa.php");
    exit();
}
$npm = $_GET['npm'];
$query = "SELECT * FROM t_mahasiswa WHERE npm='$npm'";
$result = mysqli_query($link, $query);
$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container form-container">
        <h1>Edit Data Mahasiswa</h1>
        <form action="proses_editmahasiswa.php" method="post">
            <fieldset>
                <legend>Ubah Biodata Mahasiswa</legend>
                <input type="hidden" name="npm" value="<?php echo $data['npm']; ?>">
                <p>
                    <label>NPM:</label>
                    <input type="text" value="<?php echo $data['npm']; ?>" disabled>
                </p>
                <p>
                    <label>Nama Mahasiswa:</label>
                    <input type="text" name="namaMhs" value="<?php echo $data['namaMhs']; ?>" required>
                </p>
                <p>
                    <label>Program Studi:</label>
                    <input type="text" name="prodi" value="<?php echo $data['prodi']; ?>" required>
                </p>
                <p>
                    <label>Alamat:</label>
                    <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" required>
                </p>
                <p>
                    <label>No HP:</label>
                    <input type="text" name="noHP" value="<?php echo $data['noHP']; ?>" required>
                </p>
                <p style="text-align: center; margin-bottom: 0;">
                    <button type="submit" name="update" class="btn btn-success">Update Data</button>
                    <a href="viewmahasiswa.php" class="btn btn-danger">Batal</a>
                </p>
            </fieldset>
        </form>
    </div>
</body>
</html>