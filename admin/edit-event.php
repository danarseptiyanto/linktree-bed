<?php
    require "../functions.php";
    preventOpen();
    $datas = showLEventId($_GET["id"]);

    if (isset($_POST["submit"])) {
        editEvent($_POST);
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
    <h1>Edit Event</h1>
    <hr>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" placeholder="judul" value="<?= $datas[0]['id'] ?>">
        <input type="hidden" name="imgOld" placeholder="imgOld" value="<?= $datas[0]['img'] ?>">
        <label>Judul</label>
        <input type="text" name="title" placeholder="judul" value="<?= $datas[0]['title'] ?>">
        <label>Link</label>
        <input type="text" name="link" placeholder="link" value="<?= $datas[0]['link'] ?>">
        <label>Tanggal Pelaksanaan</label>
        <input type="text" name="date" placeholder="date" value="<?= $datas[0]['date'] ?>">
        <label>Upload Poster</label>
        <img style="max-width: 300px; margin-bottom: 10px; border-radius: 10px;" src="../assets/img/<?= $datas[0]['img'] ?>" alt="">
        <input name="img" type="file" accept="image/*">
        <input type="submit" name="submit" value="Simpan">
    </form>
    <br>
</body>
</html>