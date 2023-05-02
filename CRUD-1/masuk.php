<?php

session_start();

if(isset($_SESSION['masuk'])) {
    header("Location: index.php");
    exit;
}

require "functions.php";

if (isset($_POST['masuk'])) {
    global $db;
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($db, "SELECT * FROM admin WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $assoc = mysqli_fetch_assoc($result);
        $verify = password_verify($password, $assoc['password']);
        if ($verify) {
            $_SESSION['masuk'] = true;
            header('Location: index.php');
            exit;
        }
        echo "
            <script>
                alert('Password salah, coba lagi');
                document.location.href = 'masuk.php';
            </script>
            ";
        exit;
    }

    echo "
            <script>
                alert('Username tidak ditemukan');
                document.location.href = 'masuk.php';
            </script>
            ";
    exit;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Masuk
    </title>
</head>

<body>
    <h1>Halaman Masuk</h1>
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
                <button type="submit" name="masuk">masuk</button>
            </li>
        </ul>
    </form>
</body>

</html>