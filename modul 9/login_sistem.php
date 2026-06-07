<?php
session_start();
if(isset($_SESSION['username'])){
    header("Location: halaman_utama.php");
    exit;
}

$error_pesan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        if (empty($username) || empty($password)) {
            throw new Exception("Username dan Password tidak boleh kosong!");
        }

        if ($username === "admin" && $password === "password123") {
            $_SESSION['username'] = $username;
    
            setcookie("nama_user", "Dibuat oleh: Identitas Anda (Nama/NIM)", time() + 3600, "/");
            
            header("Location: halaman_utama.php");
            exit;
        } else {
            throw new Exception("Username atau Password salah!");
        }

    } catch (Exception $e) {
        $error_pesan = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Session & Exception</title>
</head>
<body>
    <h2>Form Login</h2>
    <?php if(!empty($error_pesan)) echo "<p style='color:red;'>$error_pesan</p>"; ?>
    
    <form method="post" action="">
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
    <p><small>*Gunakan username: <b>admin</b> dan password: <b>password123</b></small></p>
</body>
</html>