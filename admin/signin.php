<?php 

require "../functions.php";

session_start();

    if (isset($_SESSION["login"])) {
        header("Location: index");
        exit;
    }

    if (isset($_POST["signin"])) {
        signin($_POST);
    }

?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>Admin Linktree BED</title>
</head>
<body class="container">
    <br>
    <br>
    <br>
    <br>
    <div class="container" style="max-width: 550px;">
    <article>
        <h3>Login</h3>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="signin">Sign In</button>
        </form>
    </article>
    </div>
</body>
</html>
