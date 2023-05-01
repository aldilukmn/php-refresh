<?php

require "functions.php";

if (isset($_POST['cari'])) {
    $keyword = $_POST['keyword'];
    $mahasiswa = query("SELECT * FROM mahasiswa
                WHERE
                nama LIKE '%$keyword%'");
} else {
    $mahasiswa = query("SELECT * FROM mahasiswa");
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Mahasiswa</title>
    </head>
    <body>
        <h1>Data Mahasiswa Universitas Mana Aja</h1>
        <a href="tambah.php">
            <h3>Tambah Mahasiswa</h3>
        </a>
        <form method="post">
            <input type="text" name="keyword" placeholder="Cari ... " autocomplete="off">
            <button type="submit" name="cari">Cari</button>
        </form>
        <br>
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>NIM</th>
                <th>Aksi</th>
            </tr>
            <?php $nomor = 1; ?>
            <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td style="text-align:center;"><?php echo $nomor ?></td>
                <td><?php echo $mhs["nama"] ?></td>
                <td><?php echo $mhs["jurusan"] ?></td>
                <td><?php echo $mhs["nim"] ?></td>
                <td>
                    <a href="ubah.php?id=<?php echo $mhs["id"] ?>">Ubah</a> ||
                    <a href="hapus.php?id=<?php echo $mhs["id"] ?>" onclick="return confirm('Hapus data ini ?')">Hapus</a>
                </td>
                <?php $nomor++ ?>
            </tr>
            <?php endforeach ?>
        </table>
        <a href="login.php">
            <h4>< Logout</h4>
        </a>
    </body>
</html>
