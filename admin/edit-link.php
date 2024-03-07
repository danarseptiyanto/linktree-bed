<?php
    require "../functions.php";
    preventOpen();
    $datas = showLinkAll($_GET["id"]);;
    if (isset($_POST["submit"])) {
        editLink($_POST);
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
        <input type="hidden" name="iconOld" placeholder="iconOld" value="<?= $datas[0]['icon'] ?>">
        <label>Kategori</label>
        <select name="category">
            <option style="display: none;" value="<?= $datas[0]['category'] ?>" selected><?= $datas[0]['category'] ?></option>
            <option value="resource">Resource</option>
            <option value="social">media Sosial</option>
            <option value="other">Lainnya</option>
        </select>
        <label>Judul</label>
        <input type="text" name="title" placeholder="judul" value="<?= $datas[0]['title'] ?>">
        <label>Link</label>
        <input type="text" name="link" placeholder="link" value="<?= $datas[0]['link'] ?>">
        <label>Upload Icon</label>
        <img style="max-width: 200px; margin-bottom: 10px; border-radius: 10px;" src="../assets/img/<?= $datas[0]['icon'] ?>" alt="">
        <input name="icon" type="file" accept="image/*">
        <input type="submit" name="submit" value="Simpan">
    </form>
    <br>
    <br>
    
</body>
</html>