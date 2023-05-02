<?php

session_start();

if(!$_SESSION['masuk']) {
    header("Location: masuk.php");
    exit;
}

require "functions.php";


if(isset($_POST['tambah'])) {
    if(tambah($_POST) === 1) {
        echo "
        <script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
        exit;
    }
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah Pasien</title>
    </head>
    <body>
        <h1>Tambah Pasien</h1>
        <form method="post">
            <ul style="list-style: none;">
                <li>
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama">
                </li>
                <br>
                <li>
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat">
                </li>
                <br>
                <li>
                    <label for="kendala">Kendala</label>
                    <input type="text" id="kendala" name="kendala">
                </li>
                <br>
                <li>
                    <button type="submit" name="tambah">Tambah</button>
                </li>
            </ul>
        </form>
        <a href="index.php">
            <h5>< Kembali</h5>
        </a>
    </body>
</html>