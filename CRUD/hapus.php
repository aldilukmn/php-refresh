<?php

require "functions.php";

$id = $_GET["id"];

if (hapus($id)) {
    echo "
    <script>
        alert('Data berhasil dihapus');
        document.location.href = 'index.php';
    </script>
    ";
}

?>