<?php

session_start();

if(!$_SESSION['masuk']) {
    header("Location: masuk.php");
    exit;
}

require "functions.php";

if (isset($_POST['cari'])) {

    $keyword = $_POST['keyword'];
    $pasien = data("SELECT * FROM pasien
                    WHERE nama LIKE '%$keyword%' OR
                    alamat LIKE '%$keyword%'");
} else {

    $pasien = data("SELECT * FROM pasien");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Data Pasien
    </title>
</head>

<body>
    <h1>Daftar Pasien</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, at.</p>
    <a href="tambah.php">
        <h4>Tambah Pasien</h4>
    </a>
    <form method="post">
        <input type="text" name="keyword" placeholder="Cari">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kendala</th>
            <th>Aksi</th>
        </tr>
        <?php $nomor = 1 ?>
        <?php foreach ($pasien as $pas) : ?>
            <tr>
                <td style="text-align: center;"><?php echo $nomor ?></td>
                <td><?php echo $pas['nama'] ?></td>
                <td><?php echo $pas['alamat'] ?></td>
                <td><?php echo $pas['kendala'] ?></td>
                <?php $nomor++ ?>
                <td>
                    <a href="ubah.php?id=<?php echo $pas['id'] ?>">Ubah</a> ||
                    <a href="hapus.php?id=<?php echo $pas['id'] ?>" onclick="return confirm('Yakin ingin menghapus ?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
    <br>
    <hr>
    <a href="daftar.php">
        <h5>Daftar</h5>
    </a>
    <a href="keluar.php">
        <h5>Keluar</h5>
    </a>
</body>

</html>