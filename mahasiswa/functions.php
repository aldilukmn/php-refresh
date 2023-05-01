<?php

$db = mysqli_connect("localhost", "root", "", "data_mahasiswa");

function query($query) {
    GLOBAL $db;
    $result = mysqli_query($db, $query);
    if (!$result) {
        echo mysqli_error($db);
        exit;
    }
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    GLOBAL $db;
    $nama = htmlspecialchars($data["nama"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $nim = htmlspecialchars($data["nim"]);
    if(trim($nama) == null || trim($jurusan) == null || trim($nim) == null) {
        echo "
        <script>
            alert('Nama / Jurusan / NIM tidak boleh kosong');
            document.location.href = 'tambah.php';
        </script>
        ";
        exit;
    }
    $query = "INSERT INTO data (nama, jurusan, nim)
                VALUES
                ('$nama', '$jurusan', '$nim')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}


function hapus($id) {
    GLOBAL $db;
    $query = "DELETE FROM data WHERE id = $id";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function ubah($data) {
    GLOBAL $db;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $nim = htmlspecialchars($data["nim"]);
    if(trim($nama) == null || trim($jurusan) == null || trim($nim) == null) {
        echo "
        <script>
            alert('Nama / Jurusan / NIM tidak boleh kosong');
            document.location.href = 'index.php';
        </script>
        ";
        exit;
    }
    $query = "UPDATE data 
            SET
                nama = '$nama',
                jurusan = '$jurusan',
                nim = '$nim'
                WHERE id = $id
                ";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}