<?php

if (isset($_POST['login'])) {
    if ($_POST['username'] == 'admin' && $_POST['password'] == 'password') {
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Halaman Login</h1>
    <?php if(isset($error)) : ?>
        <p style="color:red; font-style:italic;">Username & Password salah! Coba lagi.</p>
    <?php endif ?>
    <form method="post">
        <ul style="list-style: none;">
            <li>
                <label for="username">Username : </label>
                <input type="text" id="username" name="username">
            </li>
            <br>
            <li>
                <label for="password">Password : </label>
                <input type="password" id="password" name="password">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    </form>
</body>

</html>