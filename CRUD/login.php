<?php

session_start();

if(isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

require "functions.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = mysqli_query($db, "SELECT * FROM admin WHERE username = '$username'");
    if (mysqli_num_rows($result) === 1) {
        $data = mysqli_fetch_assoc($result);
        $verif = password_verify($password, $data['password']);
        if ($verif) {
            $_SESSION['login'] = true;
            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale">
        <title>Login</title>
    </head>
    <body>
        <h1>Silahkan Login</h1>
        <?php if(isset($error)) : ?>
            <h4 id="error" style="font-style:italic; color:red;">Username & Password Salah.</h4>
        <?php endif ?>
        <form method="post" action="login.php">
            <ul style="list-style: none;">
                <li>
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username">
                </li>
                <br>
                <li>
                    <label for="password">Password</label>
                    <input type="text" id="password" name="password">
                </li>
                <br>
                <li>
                    <button type="submit" name="login">Login</button>
                </li>
            </ul>
        </form>
        <script>
            const error = document.getElementById('error');
            setTimeout(() => {
                error.style.display = 'none';
            }, 1000);
        </script>
    </body>
</html>