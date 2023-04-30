<?php

if (isset($_POST['submit'])) {
    if ($_POST['username'] == 'admin' && $_POST['password'] == 123) {
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

        <?php if(isset($error)) : ?>
            <p style="color: red ; font-style: italic ;">Username & Password Salah</p>
        <?php endif ?>    

        <ul>
            <form action="" method="post">
                <li>
                    <label for="username">username</label>
                    <input type="text" id="username" name="username">
                </li>
                <li>
                    <label for="password">password</label>
                    <input type="text" id="password" name="password">
                </li>
                <button type="submi" name="submit">submit</button>
            </form>
        </ul>
    </body>
</html>