<?php

$db = mysqli_connect("localhost", "root", "", "crud");

function query($query) {
    GLOBAL $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data) {
    GLOBAL $db;
    $nama = htmlspecialchars($data['nama']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $nim = htmlspecialchars($data['nim']);
    if (trim($nama) == null || trim($jurusan) == null || trim($nim) == null) {
        echo "
        <script>
            alert('Nama / Jurusan / NIM belum diisi');
            document.location.href = 'tambah.php';
        </script>";
        exit;
    }
    $query = "INSERT INTO mahasiswa (nama, jurusan, nim)
                VALUES
                ('$nama', '$jurusan', '$nim')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function hapus($data) {
    GLOBAL $db;
    $query = "DELETE FROM mahasiswa WHERE id = $data";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function ubah($data){
    GLOBAL $db;
    $id = $data['id'];
    $nama = htmlspecialchars($data['nama']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $nim = htmlspecialchars($data['nim']);
    if (trim($nama) == null || trim($jurusan) == null || trim($nim) == null) {
        echo "
            <script>
                alert('Data tidak boleh kosong');
                document.location.href = 'ubah.php?id=$id';
            </script>
        ";
    }
    $query = "UPDATE mahasiswa SET
                nama = '$nama',
                jurusan = '$jurusan',
                nim = '$nim'
                WHERE
                id = $id";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

?>