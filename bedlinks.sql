-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Mar 2024 pada 17.19
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bedlinks`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `link` varchar(300) NOT NULL,
  `icon` varchar(300) NOT NULL,
  `category` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `links`
--

INSERT INTO `links` (`id`, `title`, `link`, `icon`, `category`) VALUES
(1, 'Buku Panduan Diklat Belajar Era Digital', 'https://drive.google.com/file/d/1-u6c1X7J70Y1Gouw9UWGXm_PB9tSp_cj/view?usp=share_link', 'book-icon.png', 'resource'),
(17, 'Komunitas Belajar Asyik Powerpoint', 'belajareradigital.com', '65e9dd33ae20c_png-clipart-powerpoint-logo-microsoft-powerpoint-microsoft-publisher-presentation-slide-icon-ms-powerpoint-background-text-rectangle.png', 'resource'),
(18, 'Seminar | Workshop | Pelatihan | Diklat', 'https://instagram.com/ruangevent_oa', '65e9dcce7375d_insragram.png', 'other'),
(19, 'ssss', 'sss', '65e9a9c9e6dc8_p yanto.jpg', '12 Januari 2010'),
(21, 'Telegram', 'https://t.me/eventBED', '65e9d9955e672_Platform=Telegram, Color=Original.png', 'social'),
(22, 'Instagram', 'https://instagram.com/infofreediklat', '65e9da37ee4c6_insragram.png', 'social'),
(23, 'YouTube', 'https://www.youtube.com/c/BelajarEraDigital', '65e9db65a07c0_yt.jpg', 'social'),
(24, 'Hubungi Admin', 'http://linktr.ee/adminbed', '65e9dc4655a6b_whatsapp-logo-icon-free-png.webp', 'social'),
(25, 'Diskon 30% Upgrade Classpoint PRO!', 'https://subscribe.classpoint.io/?a=LBED', '65e9dca1a29b0_company_13325171_logo.jpg', 'resource');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nextevent`
--

CREATE TABLE `nextevent` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `link` varchar(150) NOT NULL,
  `img` varchar(100) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nextevent`
--

INSERT INTO `nextevent` (`id`, `title`, `link`, `img`, `date`) VALUES
(3, 'Workshop 40 JP : Pemanfaatan PMM untuk Pembelajaran dan Peningkatan Kompetensi Guru', 'Workshop 40 JP : Pemanfaatan PMM untuk Pembelajaran dan Peningkatan Kompetensi Guru', '9-12februari2024.webp', '9-12 Februari 2024'),
(5, 'Diklat 32JP : Pengelolaan Kinerja Guru dan Kepala Sekolah pada Platform Merdeka Mengajar', 'https://belajareradigital.com/event/1-4februari2024', '1-4februari2024.webp', '1-4 Februari 2024'),
(6, 'Workshop 40 JP : Implementasi Asesmen Diagnostik Guna Memahami Kemampuan Siswa di Semester Baru', 'https://belajareradigital.com/event/28-31januari2024', '28-31januari2024.webp', '28-31 Januari 2024'),
(7, 'Workshop 40 JP : Pemanfaatan Canva dalam Menyelesaikan Aksi Nyata PMM', 'https://belajareradigital.com/event/24-27januari2024', '24-27januari2024.webp', '24-27 Januari 2024');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$IBQSaOHyAxI0pIqiXpk28uA0EZidLePav3gBP24XGkSl740k5v.t.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nextevent`
--
ALTER TABLE `nextevent`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `nextevent`
--
ALTER TABLE `nextevent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
