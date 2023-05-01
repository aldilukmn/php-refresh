<?php

require ("functions.php");

$id = $_GET['id'];

$mahasiswa = query("SELECT * FROM data WHERE id = $id")[0];



if(isset($_POST["ubah"])) {
    if (ubah($_POST) === 1) {
        echo "
        <script>
            alert('Data berhasil diubah');
            document.location.href = 'index.php';
        </script>
        ";
    } elseif (ubah($_POST) === 0) {
        echo "
        <script>
            alert('Silahkan ubah data');
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
            Ubah Mahasiswa
        </title>
    </head>
    <body>
        <h1>Ubah Mahasiswa Baru</h1>
        <form method="post">
            <input type="hidden" name="id"; value="<?php echo $mahasiswa['id'] ?>">
            <ul style="list-style: none;">
                <li>
                    <label for="nama">Nama : </label>
                    <input type="text" id="nama" name="nama" value="<?php echo $mahasiswa['nama'] ?>">
                </li>
                <br>
                <li>
                    <label for="jurusan">Jurusan : </label>
                    <input type="text" id="jurusan" name="jurusan" value="<?php echo $mahasiswa['jurusan'] ?>">
                </li>
                <br>
                <li>
                    <label for="nim">NIM : </label>
                    <input type="text" id="nim" name="nim" value="<?php echo $mahasiswa['nim'] ?>">
                </li>
                <br>
                <li>
                    <button type="submit" name="ubah">Ubah</button>
                </li>
            </ul>
        </form>
        <h5>
            <a href="index.php">Kembali</a>
        </h5>
    </body>

</html>