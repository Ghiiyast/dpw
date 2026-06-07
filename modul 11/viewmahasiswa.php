<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';

$keyword = "";
if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $query   = "SELECT * FROM t_mahasiswa WHERE namaMhs LIKE '%$keyword%' ORDER BY npm ASC";
} else {
    $query   = "SELECT * FROM t_mahasiswa ORDER BY npm ASC";
}

$result = mysqli_query($link, $query);
if (!$result) {
    die("Query Error Mahasiswa: " . mysqli_errno($link) . " - " . mysqli_error($link));
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Sistem Informasi Akademik</h1>
        <?php include 'menu.php'; ?>
        
        <h2>Data Mahasiswa</h2>
        
        <div style="margin-bottom: 15px;">
            <a href="inputmahasiswa.php" class="btn btn-success">+ Tambah Mahasiswa Baru</a>
        </div>

        <div class="search-wrapper">
            <form action="viewmahasiswa.php" method="get">
                <input type="text" name="keyword" placeholder="Cari nama mahasiswa..." value="<?php echo $keyword; ?>">
                <input type="submit" name="cari" value="Cari" class="btn">
                <?php if($keyword != "") { echo "<a href='viewmahasiswa.php' class='btn btn-danger'>Reset</a>"; } ?>
            </form>
        </div>

        <table>
            <tr>
                <th>NPM</th>
                <th>Nama Mahasiswa</th>
                <th>Prodi</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
            <?php
            if (mysqli_num_rows($result) == 0) {
                echo "<tr><td colspan='6' style='text-align:center;'>Data tidak ditemukan.</td></tr>";
            } else {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>{$row['npm']}</td>
                            <td>{$row['namaMhs']}</td>
                            <td>{$row['prodi']}</td>
                            <td>{$row['alamat']}</td>
                            <td>{$row['noHP']}</td>
                            <td>
                                <a href='editmahasiswa.php?npm={$row['npm']}' class='btn' style='padding:5px 10px;'>Edit</a>
                                <a href='hapusmahasiswa.php?npm={$row['npm']}' class='btn btn-danger' style='padding:5px 10px;' onclick='return confirm(\"Yakin hapus data ini?\")'>Hapus</a>
                            </td>
                          </tr>";
                }
            }
            ?>
        </table>
    </div>
</body>
</html>