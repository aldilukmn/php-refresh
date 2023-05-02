<?php

session_start();

if(!$_SESSION['masuk']) {
    header("Location: masuk.php");
    exit;
}

require "functions.php";

if (isset($_POST['daftar'])) {
    if (daftar($_POST)) {
        echo "
        <script>
            alert('Pendaftaran berhasil');
            document.location.href = 'masuk.php';
        </script>
        ";
        exit;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar</title>
    </head>
    <body>
        <h1>Daftar</h1>
        <form method="post">
            <ul style="list-style:none;">
                <li>
                    <label for="username">Username : </label>
                    <input type="text" id="username" name="username">
                </li>
                <br>
                <li>
                    <label for="password">Password : </label>
                    <input type="password" id="password" name="password">
                </li>
                <br>
                <li>
                    <label for="password1">Konfirmasi Password : </label>
                    <input type="password" id="password1" name="password1">
                </li>
                <br>
                <li>
                    <button type="submit" name="daftar">Daftar</button>
                </li>
            </ul>
        </form>
    </body>
</html>