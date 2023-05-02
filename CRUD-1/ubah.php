<?php

session_start();

if(!$_SESSION['masuk']) {
    header("Location: masuk.php");
    exit;
}

require "functions.php";

$id = $_GET['id'];

$data = data("SELECT * FROM pasien WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if(ubah($_POST) === 1) {
        echo "
        <script>
            alert('Data berhasil diubah');
            document.location.href = 'index.php';
        </script>
        ";
    } elseif(ubah($_POST) === 0) {
        echo "
        <script>
            alert('Data tidak diubah');
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ubah Pasien</title>
    </head>
    <body>
        <h1>Ubah Pasien</h1>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            <ul style="list-style: none;">
                <li>
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" value="<?php echo $data['nama'] ?>">
                </li>
                <br>
                <li>
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" value="<?php echo $data['alamat'] ?>">
                </li>
                <br>
                <li>
                    <label for="kendala">Kendala</label>
                    <input type="text" id="kendala" name="kendala" value="<?php echo $data['kendala'] ?>">
                </li>
                <br>
                <li>
                    <button type="submit" name="ubah">Ubah</button>
                </li>
            </ul>
        </form>
        <a href="index.php">
            <h5>< Kembali</h5>
        </a>
    </body>
</html>