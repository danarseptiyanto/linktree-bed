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
<html class="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
  <title>Admin Linktree BED</title>
</head>

<body>
  <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start rtl:justify-end">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
          </button>
          <a href="https://belajareradigital.com" class="flex ms-2 md:me-24">
            <img src="../assets/img/bedlogo.png" class="h-8 me-3" alt="BED Logo" />
            <span class="self-center text-lg font-bold sm:text-2xl whitespace-nowrap dark:text-white">LinktreeBED</span>
          </a>
        </div>
        <div class="flex items-center">
          <div class="flex items-center ms-3">
            <div>
              <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 p-2 rounded-full" src="../assets/img/outicon.png" alt="user photo">
              </button>
            </div>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
              <!-- <div class="px-4 py-3" role="none">
                <p class="text-sm text-gray-900 dark:text-white" role="none">
                  Neil Sims
                </p>
                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                  neil.sims@flowbite.com
                </p>
              </div> -->
              <ul class="py-1" role="none">
                <li>
                  <a href="/linktree/infofreediklat" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Infofreediklat</a>
                </li>
                <li>
                  <a href="signout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Log Out</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800 flex flex-col justify-between">
      <div>
        <ul class="space-y-2 font-medium">
          <li>
            <a href="/linktree/admin/index" class="bg-gray-100 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
              </svg>
              <span class="ms-3">Dashboard</span>
            </a>
          </li>
          <li>
            <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
              <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
              </svg>
              <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Tambah</span>
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
              </svg>
            </button>
            <ul id="dropdown-example" class="hidden py-2 space-y-2">
              <li>
                <a href="add-event" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Tambah Event</a>
              </li>
              <li>
                <a href="add-link" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Tambah Link</a>
              </li>
            </ul>
          </li>
          <li>
            <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example1" data-collapse-toggle="dropdown-example1">
              <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
              </svg>
              <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Cek Link</span>
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
              </svg>
            </button>
            <ul id="dropdown-example1" class="hidden py-2 space-y-2">
              <li>
                <a href="/linktree/infofreediklat" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Infofreediklat</a>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
          <li>
            <a href="signout" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
              </svg>
              <span class="flex-1 ms-3 whitespace-nowrap">Log Out</span>
            </a>
          </li>
        </ul>
      </div>
      <div id="dropdown-cta" class="p-4 mt-6 rounded-lg bg-blue-50 dark:bg-blue-900" role="alert">
        <div class="flex items-center mb-3">
          <span class="bg-orange-100 text-orange-800 text-sm font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-orange-200 dark:text-orange-900">Beta</span>
          <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 inline-flex justify-center items-center text-blue-900 rounded-lg focus:ring-2 focus:ring-blue-400 p-1 hover:bg-blue-200 h-6 w-6 dark:bg-blue-900 dark:text-blue-400 dark:hover:bg-blue-800" data-dismiss-target="#dropdown-cta" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
          </button>
        </div>
        <p class="mb-3 text-sm text-blue-800 dark:text-blue-400">
          Aplikasi ini masih dalam pengembangan, silahkan hubungi tim webdev bila menemukan bug/error.
        </p>
        <a class="text-sm text-blue-800 underline font-medium hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300" href="#">Kontak Admin</a>
      </div>
    </div>
  </aside>
  <div class="mt-14 p-4 sm:ml-64 bg-slate-100">
    <div class="max-w-screen-xl mx-auto">
      <div class="mb-5 max-w-screen-xl bg-blue-600 px-5 py-8 rounded-lg">
        <h1 class="mb-1 text-4xl font-extrabold leading-none tracking-tight text-white md:text-2xl lg:text-3xl dark:text-white">Dashboard ✨</h1>
        <p class="text-lg font-normal text-gray-50 lg:text-lg dark:text-gray-400">Edit atau hapus link dan event BED selanjutnya pada list dibawah ini</p>
      </div>
      <div class="mb-3 flex justify-between">
        <h3 class="text-xl font-bold text-gray-700">Next Event</h3>
        <a href="add-event"><button type="submit" class="px-3 py-2 text-xs font-medium text-center text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Tambah</button></a>
      </div>
      <div class="relative overflow-x-auto border-x border-t sm:rounded-lg mb-5">
        <table class="w-full text-[15px] text-left rtl:text-right text-gray-500 dark:text-gray-400">
          <thead class="text-sm text-gray-700 uppercase bg-slate-50 dark:bg-gray-700 dark:text-gray-400 border-b">
            <tr>
              <th scope="col" class="pl-6 py-5 w-0">
                No
              </th>
              <th scope="col" class="px-6 py-5">
                Judul
              </th>
              <th scope="col" class="px-6 py-5 md:whitespace-nowrap">
                Tanggal
              </th>
              <th scope="col" class="px-6 py-5 text-right">
                Aksi
              </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($nextEvent as $event) : ?>
              <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-white even:dark:bg-gray-800 bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="pl-6 py-4">
                  <?= $nomor1 ?>
                </td>
                <td class="px-6 py-4 font-medium text-gray-900">
                  <?= $event["title"] ?>
                </td>
                <td class="px-6 py-4 md:whitespace-nowrap">
                  <?= $event["date"] ?>
                </td>
                <td class="px-6 py-4 text-right">
                  <div class="flex gap-1 justify-end">
                    <a href="edit-event?id=<?= $event['id'] ?>" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class="ri-edit-box-line"></i></a>
                    <a href="index?deleteevent=true&id=<?= $event['id'] ?>" class="px-3 py-2 text-xs font-medium text-center text-white bg-red-500 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class="ri-delete-bin-2-line"></i></a>
                  </div>
                </td>
              </tr>
              <?php $nomor1++ ?>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
      <div class="mb-3 flex justify-between">
        <h3 class="text-xl font-bold text-gray-700">Kegiatan Belajar Era Digital</h3>
        <a href="add-link"><button type="submit" class="px-3 py-2 text-xs font-medium text-center text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Tambah</button></a>
      </div>
      <div class="relative overflow-x-auto border-x border-t sm:rounded-lg mb-5">
        <table class="w-full text-[15px] text-left rtl:text-right text-gray-500 dark:text-gray-400">
          <thead class="text-sm text-gray-700 uppercase bg-slate-50 dark:bg-gray-700 dark:text-gray-400 border-b">
            <tr>
              <th scope="col" class="pl-6 py-5 w-0">
                No
              </th>
              <th scope="col" class="px-6 py-5">
                Judul
              </th>
              <th scope="col" class="px-6 py-5 text-right">
                Aksi
              </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($linkResource as $resource) : ?>
              <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-white even:dark:bg-gray-800 bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="pl-6 py-4">
                  <?= $nomor2 ?>
                </td>
                <td class="px-6 py-4 font-medium text-gray-900">
                  <?= $resource["title"] ?>
                </td>
                <td class="px-6 py-4 text-right">
                  <div class="flex gap-1 justify-end">
                    <a href="edit-link?id=<?= $resource['id'] ?>" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class="ri-edit-box-line"></i></a>
                    <a href="index?deletelink=true&id=<?= $resource['id'] ?>" class="px-3 py-2 text-xs font-medium text-center text-white bg-red-500 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class="ri-delete-bin-2-line"></i></a>
                  </div>
                </td>
              </tr>
              <?php $nomor2++ ?>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
      <div class="mb-3 flex justify-between">
        <h3 class="text-xl font-bold text-gray-700">Media Sosial Belajar Era Digital</h3>
        <a href="add-link"><button type="submit" class="px-3 py-2 text-xs font-medium text-center text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Tambah</button></a>
      </div>
      <div class="relative overflow-x-auto border-x border-t sm:rounded-lg mb-5">
        <table class="w-full text-[15px] text-left rtl:text-right text-gray-500 dark:text-gray-400">
          <thead class="text-sm text-gray-700 uppercase bg-slate-50 dark:bg-gray-700 dark:text-gray-400 border-b">
            <tr>
              <th scope="col" class="pl-6 py-5 w-0">
                No
              </th>
              <th scope="col" class="px-6 py-5">
                Judul
              </th>
              <th scope="col" class="px-6 py-5 text-right">
                Aksi
              </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($linkSocial as $social) : ?>
              <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-white even:dark:bg-gray-800 bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="pl-6 py-4">
                  <?= $nomor3 ?>
                </td>
                <td class="px-6 py-4 font-medium text-gray-900">
                  <?= $social["title"] ?>
                </td>
                <td class="px-6 py-4 text-right">
                  <div class="flex gap-1 justify-end">
                    <a href="edit-link?id=<?= $social['id'] ?>" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class="ri-edit-box-line"></i></a>
                    <a href="index?deletelink=true&id=<?= $social['id'] ?>" class="px-3 py-2 text-xs font-medium text-center text-white bg-red-500 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class="ri-delete-bin-2-line"></i></a>
                  </div>
                </td>
              </tr>
              <?php $nomor3++ ?>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
      <div class="mb-3 flex justify-between">
        <h3 class="text-xl font-bold text-gray-700">Info Event Bersertifikat</h3>
        <a href="add-link"><button type="submit" class="px-3 py-2 text-xs font-medium text-center text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Tambah</button></a>
      </div>
      <div class="relative overflow-x-auto border-x border-t sm:rounded-lg mb-5">
        <table class="w-full text-[15px] text-left rtl:text-right text-gray-500 dark:text-gray-400">
          <thead class="text-sm text-gray-700 uppercase bg-slate-50 dark:bg-gray-700 dark:text-gray-400 border-b">
            <tr>
              <th scope="col" class="pl-6 py-5 w-0">
                No
              </th>
              <th scope="col" class="px-6 py-5">
                Judul
              </th>
              <th scope="col" class="px-6 py-5 text-right">
                Aksi
              </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($linkOther as $other) : ?>
              <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-white even:dark:bg-gray-800 bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="pl-6 py-4">
                  <?= $nomor4 ?>
                </td>
                <td class="px-6 py-4 font-medium text-gray-900">
                  <?= $other["title"] ?>
                </td>
                <td class="px-6 py-4 text-right">
                  <div class="flex gap-1 justify-end">
                    <a href="edit-link?id=<?= $other['id'] ?>" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class="ri-edit-box-line"></i></a>
                    <a href="index?deletelink=true&id=<?= $other['id'] ?>" class="px-3 py-2 text-xs font-medium text-center text-white bg-red-500 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class="ri-delete-bin-2-line"></i></a>
                  </div>
                </td>
              </tr>
              <?php $nomor4++ ?>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>