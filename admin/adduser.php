<?php
    require "../functions.php";

$username = "admin";
$password = password_hash("adminbed456", PASSWORD_DEFAULT);

    mysqli_query($conn,"INSERT INTO user VALUES('', '$username', '$password')");