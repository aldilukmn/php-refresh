<?php

if (!isset($_GET["nama"]) || !isset($_GET["jurusan"]) || !isset($_GET["nomor"]) ) {
    header("Location: index.php");
    exit;
}

function name($nama = "admin") {
    if(isset($_GET["nama"])) {
        return $_GET["nama"];
    } else {
        return $nama;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Lain</title>
</head>

<body>
    <h1>Selamat datang, <?php echo name() ?></h1>
    <ul>
        <li><?php echo $_GET["nama"] ?></li>
        <li><?php echo $_GET["jurusan"] ?></li>
        <li><?php echo $_GET["nomor"] ?></li>
    </ul>
    <a href="index.php">kembali</a>
</body>

</html>