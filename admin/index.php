<?php
    require "../functions.php";

    preventOpen();
    $nextEvent = showNextEvent();
    $linkResource = showLink("resource");
    $linkSocial = showLink("social");
    $linkOther = showLink("other");
    $nomor1 = 1;
    $nomor2 = 1;
    $nomor3 = 1;
    $nomor4 = 1;

    if (isset($_GET['deletelink'])) {
        deleteLink($_GET["id"]);
    }
    
    if (isset($_GET['deleteevent'])) {
        deleteEvent($_GET["id"]);
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
            <li><a target="_blank" class="secondary" href="/linktree"><strong><i class="ri-share-forward-box-line"></i> Kunjungi</strong></a></li>
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
    <h1>LinkTreeBED</h1>
    <hr>
    <div class="overflow-auto">
        <h5>Next Event</h5>
        <table class="striped">
        <thead>
        <tr>
            <th style="width: 10px;" scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Tanggal</th>
            <th style="width: 10px;" scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($nextEvent as $event) : ?>
        <tr>
            <th style="width: 10px;" scope="row"><?= $nomor1 ?></th>
            <td><?= $event["title"] ?></td>
            <td><?= $event["date"] ?></td>
            <td style="width: 10px;">
                <a href="edit-event?id=<?= $event['id'] ?>">Edit</a><br>
                <a href="index?deleteevent=true&id=<?= $event['id'] ?>">Hapus</a>
            </td>
        </tr>
        <?php $nomor1++ ?>
        <?php endforeach ?>
        </table>
        <br>
    </div>
    <div class="overflow-auto">
        <h5>Kegiatan Belajar Era Digital</h5>
        <table class="striped">
        <thead>
        <tr>
            <th style="width: 10px;" scope="col">No</th>
            <th scope="col">Judul</th>
            <th style="width: 10px;" scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($linkResource as $resource) : ?>
        <tr>
            <th style="width: 10px;"scope="row"><?= $nomor2 ?></th>
            <td><?= $resource["title"] ?></td>
            <td style="width: 10px;">
                <a href="edit-link?id=<?= $resource['id'] ?>">Edit</a><br>
                <a href="index?deletelink=true&id=<?= $resource['id'] ?>">Hapus</a>
            </td>
        </tr>
        <?php $nomor2++ ?>
        <?php endforeach ?>
        </table>
        <br>
    </div>
    <div class="overflow-auto">
        <h5>Media Sosial Belajar Era Digital</h5>
        <table class="striped">
        <thead>
        <tr>
            <th style="width: 10px;" scope="col">No</th>
            <th scope="col">Judul</th>
            <th style="width: 10px;" scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($linkSocial as $social) : ?>
        <tr>
            <th style="width: 10px;"scope="row"><?= $nomor3 ?></th>
            <td><?= $social["title"] ?></td>
            <td style="width: 10px;">
                <a href="edit-link?id=<?= $social['id'] ?>">Edit</a><br>
                <a href="index?deletelink=true&id=<?= $social['id'] ?>">Hapus</a>
            </td>
        </tr>
        <?php $nomor3++ ?>
        <?php endforeach ?>
        </table>
        <br>
    </div>
    <div class="overflow-auto">
        <h5>Info Event Bersertifikat</h5>
        <table class="striped">
        <thead>
        <tr>
            <th style="width: 10px;" scope="col">No</th>
            <th scope="col">Judul</th>
            <th style="width: 10px;" scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($linkOther as $other) : ?>
        <tr>
            <th style="width: 10px;"scope="row"><?= $nomor4 ?></th>
            <td><?= $other["title"] ?></td>
            <td style="width: 10px;">
                <a href="edit-link?id=<?= $other['id'] ?>">Edit</a><br>
                <a href="index?deletelink=true&id=<?= $other['id'] ?>">Hapus</a>
            </td>
        </tr>
        <?php $nomor4++ ?>
        <?php endforeach ?>
        </table>
        <br>
    </div>
    <hr>
    <p><b>BelajarEraDigital</b> 2024</p><br>
</body>
</html>