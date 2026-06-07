<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';

$keyword = "";
if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $query   = "SELECT * FROM t_matakuliah WHERE namaMK LIKE '%$keyword%' ORDER BY kodeMK ASC";
} else {
    $query   = "SELECT * FROM t_matakuliah ORDER BY kodeMK ASC";
}

$result = mysqli_query($link, $query);
if (!$result) {
    die("Query Error Mata Kuliah: " . mysqli_errno($link) . " - " . mysqli_error($link));
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mata Kuliah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Sistem Informasi Akademik</h1>
        <?php include 'menu.php'; ?>
        
        <h2>Data Mata Kuliah</h2>
        
        <div style="margin-bottom: 15px;">
            <a href="inputmatakuliah.php" class="btn btn-success">+ Tambah Mata Kuliah</a>
        </div>

        <div class="search-wrapper">
            <form action="viewmatakuliah.php" method="get">
                <input type="text" name="keyword" placeholder="Cari nama mata kuliah..." value="<?php echo $keyword; ?>">
                <input type="submit" name="cari" value="Cari" class="btn">
                <?php if($keyword != "") { echo "<a href='viewmatakuliah.php' class='btn btn-danger'>Reset</a>"; } ?>
            </form>
        </div>

        <table>
            <tr>
                <th>Kode MK</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Jam</th>
                <th>Aksi</th>
            </tr>
            <?php
            if (mysqli_num_rows($result) == 0) {
                echo "<tr><td colspan='5' style='text-align:center;'>Data tidak ditemukan.</td></tr>";
            } else {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>{$row['kodeMK']}</td>
                            <td>{$row['namaMK']}</td>
                            <td>{$row['sks']} SKS</td>
                            <td>{$row['jam']} Jam</td>
                            <td>
                                <a href='editmatakuliah.php?kodeMK={$row['kodeMK']}' class='btn' style='padding:5px 10px;'>Edit</a>
                                <a href='hapusmatakuliah.php?kodeMK={$row['kodeMK']}' class='btn btn-danger' style='padding:5px 10px;' onclick='return confirm(\"Yakin ingin menghapus mata kuliah ini?\")'>Hapus</a>
                            </td>
                          </tr>";
                }
            }
            ?>
        </table>
    </div>
</body>
</html>