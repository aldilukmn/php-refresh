<?php

require "functions.php";

if (isset($_POST['daftar'])) {
    if(registrasi($_POST) === 1) {
        echo "
        <script>
            alert('Registrasi berhasil');
            document.location.href = 'registrasi.php';
        </script>
        ";
    }
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrasi</title>
    </head>
    <body>
        <h1>Halaman Registrasi</h1>
        <form method="post">
            <ul style="list-style: none;">
                <li>
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username">
                </li>
                <br>
                <li>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                </li>
                <br>
                <li>
                    <label for="password1">Konfirmasi Password</label>
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