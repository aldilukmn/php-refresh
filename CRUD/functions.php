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

function registrasi($data){
    GLOBAL $db;
    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($db, $data['password']);
    $password1 = mysqli_real_escape_string($db, $data['password1']);

    if ($password !== $password1) {
        echo "
        <script>
            alert('Konfirmasi password tidak sesuai');
            document.location.href = 'registrasi.php';
        </script>
        ";
        exit;
    }

    if (trim($username == null || trim($password)) == null || trim($password1) == null) {
        echo "
        <script>
            alert('Input tidak boleh kosong');
            document.location.href = 'registrasi.php';
        </script>
        ";
        exit;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $result = mysqli_query($db, "SELECT * FROM admin WHERE username = '$username'");
    
    if (mysqli_fetch_assoc($result)) {
        echo "
        <script>
            alert('Username sudah digunakan');
            document.location.href = 'registrasi.php';
        </script>
        ";
        exit;
    }

    $query = "INSERT INTO admin (username, password)
                VALUES
                ('$username', '$password')";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

?>