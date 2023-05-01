<?php

session_start();

if(!$_SESSION['login']) {
    header('Location: login.php');
    exit;
}

require "functions.php";

if (isset($_POST['tambah'])) {
    if (tambah($_POST) === 1) {
        echo "
        <script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    }
}



?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Tambah Mahasiswa Baru
        </title>
    </head>
    <body>
        <h1>Tambah Mahasiswa Baru</h1>
        <form method="post">
            <ul style="list-style: none;">
                <li>
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama">
                </li>
                <br>
                <li>
                    <label for="jurusan">Jurusan</label>
                    <input type="text" id="jurusan" name="jurusan">
                </li>
                <br>
                <li>
                    <label for="nim">NIM</label>
                    <input type="text" id="nim" name="nim">
                </li>
                <br>
                <li>
                    <button type="submit" name="tambah">Tambah</button>
                </li>
            </ul>
        </form>
        <a href="index.php">
            <h5>< Kembali</h3>
        </a>
    </body>
</html>