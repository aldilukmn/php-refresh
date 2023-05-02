<?php

session_start();

if(!$_SESSION['masuk']) {
    header("Location: masuk.php");
    exit;
}

require "functions.php";

$id = $_GET['id'];

if (hapus($id) === 1) {
    echo "
    <script>
        alert('Data berhasil dihapus');
        document.location.href = 'index.php';
    </script>
    ";
    exit;
} elseif (hapus($id) === 0) {
    echo "
    <script>
        alert('Data tidak ditemukan');
        document.location.href = 'index.php';
    </script>
    ";
    exit;
}

?>