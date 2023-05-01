<?php

require "functions.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = query("SELECT * FROM admin
    WHERE username = '$username'")[0];
    if ($user === 'admin') {
        header("Location: index.php");
        exit;
    } else {
        $error = true;
    }
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