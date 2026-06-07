<?php
include 'koneksi.php';

$keyword = "";
if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $query   = "SELECT * FROM t_dosen WHERE namaDosen LIKE '%$keyword%' ORDER BY idDosen ASC";
} else {
    $query   = "SELECT * FROM t_dosen ORDER BY idDosen ASC";
}

$result = mysqli_query($link, $query);
if (!$result) {
    die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Dosen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Sistem Informasi Akademik</h1>
        
        <?php include 'menu.php'; ?>
        
        <h2>Tabel Dosen</h2>
        
        <div style="margin-bottom: 15px;">
            <a href="input.php" class="btn btn-success">Input Data Baru</a>
        </div>
        
        <div class="search-wrapper">
            <form action="viewdosen.php" method="get">
                <input type="text" name="keyword" placeholder="Cari nama dosen..." value="<?php echo $keyword; ?>">
                <input type="submit" name="cari" value="Cari" class="btn">
                <?php if($keyword != "") { echo "<a href='viewdosen.php' class='btn btn-danger'>Reset</a>"; } ?>
            </form>
        </div>

        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama Dosen</th>
                <th>No HP</th>
                <th>Pilihan</th>
            </tr>
            <?php
      
            if (mysqli_num_rows($result) == 0) {
                echo "<tr><td colspan='4' style='text-align:center;'>Belum ada data dosen atau data tidak ditemukan.</td></tr>";
            } else {
                while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $data['idDosen'] . "</td>";
                    echo "<td>" . $data['namaDosen'] . "</td>";
                    echo "<td>" . $data['noHP'] . "</td>";
                    echo "<td>
                            <a href='editdosen.php?idDosen=" . $data['idDosen'] . "' class='btn' style='padding:5px 10px;'>Edit</a> 
                            <a href='hapusdosen.php?idDosen=" . $data['idDosen'] . "' class='btn btn-danger' style='padding:5px 10px;' onclick='return confirm(\"Anda yakin akan menghapus data?\")'>Hapus</a>
                          </td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>
</body>
</html>