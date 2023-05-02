<?php

$db = mysqli_connect("localhost", "root", "", "crud_2");

function data($query) {
    GLOBAL $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function ubah($query) {
    GLOBAL $db;
    $id = $query['id'];
    $nama = htmlspecialchars($query['nama']);
    $alamat = htmlspecialchars($query['alamat']);
    $kendala = htmlspecialchars($query['kendala']);

    $query = "UPDATE pasien
                SET nama = '$nama',
                alamat = '$alamat',
                kendala = '$kendala'
                WHERE id = $id";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}


function hapus($id) {
    GLOBAL $db;
    mysqli_query($db, "DELETE FROM pasien WHERE id = $id");
    return mysqli_affected_rows($db);
}

function tambah($data) {
    GLOBAL $db;
    $nama = trim(htmlspecialchars($data['nama']));
    $alamat = trim(htmlspecialchars($data['alamat']));
    $kendala = trim(htmlspecialchars($data['kendala']));
    if ($nama == null || $alamat == null || $kendala == null) {
        echo "
        <script>
            alert('Nama / Alamat / Kendala tidak boleh kosong');
            document.location.href = 'tambah.php';
        </script>
        ";
        exit;
    }
    $query = "INSERT INTO pasien (nama, alamat, kendala)
                VALUES
                ('$nama', '$alamat', '$kendala')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function daftar($data) {
    GLOBAL $db;
    $username = stripslashes(strtolower($data['username']));
    $password = mysqli_real_escape_string($db, $data['password']);
    $password1 = mysqli_real_escape_string($db, $data['password1']);

    if ($password != $password1) {
        echo "
        <script>
            alert('Konfirmasi password tidak sesuai')
            document.location.href = 'daftar.php';
        </script>
        ";
        exit;
    }

    $result = mysqli_query($db, "SELECT * FROM admin WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "
        <script>
            alert('Username sudah digunakan');
            document.location.href = 'daftar.php';
        </script>
        ";
        exit;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query ="INSERT INTO admin (username, password)
            VALUES
            ('$username', '$password')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

?>