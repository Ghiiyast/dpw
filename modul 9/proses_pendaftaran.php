<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Proses Pendaftaran</title>
    <style>
        .btn-kembali {
            display: inline-block;
            margin-top: 20px;
            padding: 6px 12px;
            background-color: #f0f0f0;
            color: #000;
            text-decoration: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            font-family: Arial, sans-serif;
        }
        .btn-kembali:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>
    <h2>Data yang Terdaftar:</h2>
    <hr>
    
    Selamat datang, <b><?php echo htmlspecialchars($_POST['nama'] ?? ''); ?></b><br><br>
    
    <b>Detail Data Yang Ada:</b><br>
    NIM : <?php echo htmlspecialchars($_POST['nim'] ?? ''); ?><br>
    Email : <?php echo htmlspecialchars($_POST['email'] ?? ''); ?><br>
    Tempat, Tanggal Lahir : <?php echo htmlspecialchars($_POST['tempat'] ?? ''); ?>, <?php echo htmlspecialchars($_POST['ttl'] ?? ''); ?><br>
    Alamat : <?php echo htmlspecialchars($_POST['alamat'] ?? ''); ?><br>
    Jenis Kelamin : <?php echo htmlspecialchars($_POST['gender'] ?? ''); ?><br>

    <a href="form_pendaftaran.html" class="btn-kembali">Kembali ke Form</a>
</body>
</html>