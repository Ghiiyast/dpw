<?php
$name = $email = $comment = "";

function bersihkan_input($data) {
    $data = trim($data);            
    $data = stripslashes($data);    
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = bersihkan_input($_POST["name"]);
    $email = bersihkan_input($_POST["email"]);
    $comment = bersihkan_input($_POST["comment"]);

    echo "Nama: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Komentar: " . $comment . "<br>";
    echo "<hr>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Komentar</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nama: <input type="text" name="name"><br><br>
        E-mail: <input type="email" name="email"><br><br>
        Komentar: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
        
        <input type="submit" value="simpan">
        <input type="reset" value="bersihkan">
    </form>
</body>
</html>