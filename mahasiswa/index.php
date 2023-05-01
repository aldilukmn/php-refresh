<?php

require ("functions.php");

$mahasiswa = query("SELECT * FROM data");

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Data Mahasiswa
    </title>
</head>

<body>
    <main>
        <h1>
            Data Mahasiswa
        </h1>
        <h5>
            <a href="tambah.php">
                Tambah Mahasiswa
            </a>
        </h5>
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>NIM</th>
                <th>Action</th>
            </tr>
            <?php $no = 1; ?>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <td style="text-align: center;"><?php echo $no; ?></td>
                    <td><?php echo $mhs["nama"] ?></td>
                    <td><?php echo $mhs["jurusan"] ?></td>
                    <td><?php echo $mhs["nim"] ?></td>
                    <td>
                        <a href="ubah.php?id=<?php echo $mhs['id'] ?>">Edit</a> ||
                        <a href="hapus.php?id=<?php echo $mhs['id'] ?>" onclick="return confirm('Hapus data ini ?')">Hapus</a>
                    </td>
                </tr>
                <?php $no++; ?>
            <?php endforeach ?>    
        </table>
    </main>
</body>

</html>