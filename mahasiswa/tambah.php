<?php

require ("functions.php");

if(isset($_POST["tambah"])) {
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
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-widith, initial-scale=1.0">
        <title>
            Tambah Mahasiswa
        </title>
    </head>
    <body>
        <h1>Tambah Mahasiswa Baru</h1>
        <form method="post">
            <ul style="list-style: none;">
                <li>
                    <label for="nama">Nama : </label>
                    <input type="text" id="nama" name="nama">
                </li>
                <br>
                <li>
                    <label for="jurusan">Jurusan : </label>
                    <input type="text" id="jurusan" name="jurusan">
                </li>
                <br>
                <li>
                    <label for="nim">NIM : </label>
                    <input type="text" id="nim" name="nim">
                </li>
                <br>
                <li>
                    <button type="submit" name="tambah">Tambah</button>
                </li>
            </ul>
        </form>
        <h5>
            <a href="index.php">Kembali</a>
        </h5>
    </body>

</html>