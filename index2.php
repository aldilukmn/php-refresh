<?php

if(!isset($_POST['nama']) || !isset($_POST['asal']) ) {
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpor" content="width=device-width, initial-scale=1.0">
        <title>Halaman ini</title>
    </head>    
    <body>
        <h1>Selamat Datang, <?php echo $_POST['nama'] ?></h1>
        <p>berasal dari : <?php echo $_POST['asal'] ?></p>
        <a href="index.php">Kembali</a>
    </body>
</html>