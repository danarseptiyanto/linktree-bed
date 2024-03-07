<?php 
session_start();
$_SESSION["name"] = [];
session_destroy();
session_destroy();

header("Location: signin")

?>