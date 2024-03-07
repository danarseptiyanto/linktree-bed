<?php
    require "../functions.php";
    preventOpen();
    if (isset($_POST["submit"])) {
        addEvent($_POST);
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
    <nav>
        <ul>
            <li><a class="secondary" href="index"><strong><i class="ri-share-forward-box-line"></i> Cancel</strong></a></li>
        </ul>
        <ul>
            <details class="dropdown">
            <summary><i class="ri-list-check-2"></i> Tambah</summary>
            <ul>
                <li><a href="add-event">Add Event</a></li>
                <li><a href="add-link">Add Link</a></li>
            </ul>
            </details>
            <li><button><a style="color: white;" href='signout'><i style='padding: 0 3 0 3' class='ri-logout-box-line'></i></a></button>
        </ul>
    </nav>
    <br>
    <h1>Tambah Event</h1>
    <hr>
    <form action="" method="POST" enctype="multipart/form-data">
        <label>Judul</label>    
        <input type="text" name="title" placeholder="Judul">
        <label>Link</label>
        <input type="text" name="link" placeholder="Link">
        <label>Tanggal Pelaksanaan</label>
        <input type="text" name="date" placeholder="Tanggal Pelaksanaan">
        <label>Upload Poster</label>
        <input name="img" type="file" accept="image/*">
        <input type="submit" name="submit" value="submit">
    </form>
    <br>
    <br>
</body>
</html>