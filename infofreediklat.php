<?php
    require "functions.php";
    $nextEvent = showNextEvent();
    $linkResource = showLink("resource");
    $linkSocial = showLink("social");
    $linkOther = showLink("other");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>Link Belajar Era Digital</title>
</head>
<body>
    <div class="md:max-w-[600px] max-w-[90%] mx-auto flex justify-between mt-9">
        <a href="/" class="w-14 h-14 bg-[#196ECD] flex rounded-full justify-center items-center transition-transform transform-gpu hover:scale-105">
            <img class="" src="assets/img/logo.png">
        </a>
        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="w-14 h-14 bg-[#F1F1F1] flex rounded-full justify-center items-center transition-transform transform-gpu hover:scale-105">
            <i class="ri-menu-3-fill text-2xl text-[#196ECD]"></i>
        </button>
        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-auto">
            <ul class="py-2" aria-labelledby="dropdownDefaultButton">
            <li>
                <a href="#" class="block px-4 py-2 font-inter hover:bg-gray-100">Dashboard</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 font-inter hover:bg-gray-100">Settings</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 font-inter hover:bg-gray-100">Earnings</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 font-inter hover:bg-gray-100">Sign out</a>
            </li>
            </ul>
        </div>
    </div>
    <div class="md:max-w-[600px] max-w-[90%] mx-auto text-center justify-between mt-9">
        <h1 class="font-syne text-2xl font-bold transition-transform transform-gpu hover:scale-105">Belajar Era Digital</h1>
        <p class="mt-3 mx-auto max-w-[370px] font-inter text-[#64748B]">Selamat datang di Belajar Era Digital, Klik tombol dibawah untuk bergabung</p>
        <div class="mt-5 mb-6 flex mx-auto max-w-[190px] justify-between">
            <a target="_blank" href="https://instagram.com/belajarera.digital"><i class="text-2xl transition-colors duration-300 hover:text-[#196ECD] ri-instagram-fill"></i></a>
            <a target="_blank" href="https://www.youtube.com/@BelajarEraDigital"><i class="text-2xl transition-colors duration-300 hover:text-[#196ECD] ri-telegram-fill"></i></a>
            <a target="_blank" href="https://t.me/eventBED"><i class="text-2xl transition-colors duration-300 hover:text-[#196ECD] ri-youtube-fill"></i></a>
            <a target="_blank" href="mailto:belajareradigital10@gmail.com"><i class="text-2xl transition-colors duration-300 hover:text-[#196ECD] ri-mail-send-fill"></i></a>
            <a target="_blank" href="https://belajareradigital.com"><i class="text-2xl transition-colors duration-300 hover:text-[#196ECD] ri-global-fill"></i></a>
        </div>
        <button data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal">
            <img class="rounded-3xl transition-transform transform-gpu hover:scale-105" src="assets/img/video.jpg">
        </button>
        <!-- Extra Large Modal -->
        <div id="extralarge-modal" tabindex="-1" class=" inset-0 bg-black bg-opacity-50 fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <iframe width="720" height="405" src="https://www.youtube.com/embed/PYXbZaGRmxI?mute=1" title="Profil Belajar Era Digital" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="mb-8">
            <h3 class="font-inter font-bold mt-5 mb-3">Kegiatan Belajar Era Digital</h3>
            <?php foreach($linkResource as $resource) : ?>
            <a href="<?= $resource["link"] ?>" class="bg-[#F1F1F1] mb-4 flex justify-between h-14 items-center rounded-full  transition-transform transform-gpu hover:bg-[#196ECD] hover:text-white hover:scale-105">
                <img class="ml-2 mr-1 p-1 rounded-full h-10 w-10 bg-slate-600" src="assets/img/<?= $resource["icon"] ?>">
                <p class="font-inter md:text-base text-sm"><?= $resource["title"] ?></p>
                <i class="ri-arrow-right-line text-2xl ml-1 mr-3"></i>
            </a>
            <?php endforeach ?>
        </div>
        <div class="mb-8">
            <h3 class="font-inter font-bold mt-5 mb-4">Kegiatan Terdekat Kami</h3>
            <div class="grid grid-cols-2 gap-3">
                <?php foreach(array_reverse($nextEvent) as $event) : ?>
                <a href="<?= $event["link"] ?>">
                    <img class="rounded-lg md:rounded-2xl transition-transform transform-gpu hover:scale-105" src="assets/img/<?= $event["img"] ?>">
                    <p class="line-clamp-3 ... font-inter text-xs text-left md:text-sm my-1 md:my-2"><?= $event["title"] ?></p>
                </a>
                <?php endforeach ?>
            </div>
        </div>
        <div class="mb-8">
            <h3 class="font-inter font-bold mt-5 mb-3">Media Sosial Belajar Era Digital</h3>
            <?php foreach($linkSocial as $social) : ?>
            <a href="<?= $social["link"] ?>" class="bg-[#F1F1F1] mb-4 flex justify-between h-14 items-center rounded-full  transition-transform transform-gpu hover:bg-[#196ECD] hover:text-white hover:scale-105">
                <img class="ml-2 mr-1 p-1 rounded-full h-10 w-10 bg-slate-600" src="assets/img/<?= $social["icon"] ?>">
                <p class="font-inter md:text-base text-sm"><?= $social["title"] ?></p>
                <i class="ri-arrow-right-line text-2xl ml-1 mr-3"></i>
            </a>
            <?php endforeach ?>
        </div>
        <div class="mb-8">
            <h3 class="font-inter font-bold mt-5 mb-3">Info Event Bersertifikat Nasional</h3>
            <?php foreach($linkOther as $other) : ?>
            <a href="<?= $other["link"] ?>" class="bg-[#F1F1F1] mb-4 flex justify-between h-14 items-center rounded-full  transition-transform transform-gpu hover:bg-[#196ECD] hover:text-white hover:scale-105">
                <img class="ml-2 mr-1 p-1 rounded-full h-10 w-10 bg-slate-600" src="assets/img/<?= $other["icon"] ?>">
                <p class="font-inter md:text-base text-sm"><?= $other["title"] ?></p>
                <i class="ri-arrow-right-line text-2xl ml-1 mr-3"></i>
            </a>
            <?php endforeach ?>
        </div>
        <hr class="border-[#F1F1F1]">
        <div class="flex justify-between mt-5 mb-6 items-baseline">
            <a class="font-inter font-bold transition-colors duration-300 hover:text-[#196ECD]" href="http://BelajarEraDigital.com">BelajarEraDigital.com</a>
            <div class="flex gap-3">
                <a target="_blank" href="https://instagram.com/belajarera.digital"><i class="text-xl transition-colors duration-300 hover:text-[#196ECD] ri-instagram-fill"></i></a>
                <a target="_blank" href="https://www.youtube.com/@BelajarEraDigital"><i class="text-xl transition-colors duration-300 hover:text-[#196ECD] ri-telegram-fill"></i></a>
                <a target="_blank" href="https://t.me/eventBED"><i class="text-xl transition-colors duration-300 hover:text-[#196ECD] ri-youtube-fill"></i></a>
                <a target="_blank" href="https://belajareradigital.com"><i class="text-xl transition-colors duration-300 hover:text-[#196ECD] ri-global-fill"></i></a>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>