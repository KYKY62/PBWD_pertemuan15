-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Mar 2023 pada 08.48
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pertemuan15`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_album`
--

CREATE TABLE `tb_album` (
  `album_id` int(11) NOT NULL,
  `album_id_photo` int(11) NOT NULL,
  `album_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_category`
--

CREATE TABLE `tb_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_text` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_category`
--

INSERT INTO `tb_category` (`cat_id`, `cat_name`, `cat_text`) VALUES
(1, 'Rizky yeager', 'SISTEM INFORMASI ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_photos`
--

CREATE TABLE `tb_photos` (
  `photo_id` int(11) NOT NULL,
  `photo_id_post` int(11) NOT NULL,
  `photo_title` varchar(100) NOT NULL,
  `photo_file` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_post`
--

CREATE TABLE `tb_post` (
  `post_id` int(11) NOT NULL,
  `post_id_cat` int(11) NOT NULL,
  `post_slug` varchar(25) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_text` text NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_album`
--
ALTER TABLE `tb_album`
  ADD PRIMARY KEY (`album_id`),
  ADD UNIQUE KEY `album_id_photo` (`album_id_photo`);

--
-- Indeks untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indeks untuk tabel `tb_photos`
--
ALTER TABLE `tb_photos`
  ADD PRIMARY KEY (`photo_id`),
  ADD UNIQUE KEY `photo_id_post` (`photo_id_post`);

--
-- Indeks untuk tabel `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_id_cat` (`post_id_cat`),
  ADD UNIQUE KEY `post_id_cat_2` (`post_id_cat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_album`
--
ALTER TABLE `tb_album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_photos`
--
ALTER TABLE `tb_photos`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_album`
--
ALTER TABLE `tb_album`
  ADD CONSTRAINT `tb_album_ibfk_1` FOREIGN KEY (`album_id_photo`) REFERENCES `tb_photos` (`photo_id`);

--
-- Ketidakleluasaan untuk tabel `tb_photos`
--
ALTER TABLE `tb_photos`
  ADD CONSTRAINT `tb_photos_ibfk_1` FOREIGN KEY (`photo_id_post`) REFERENCES `tb_post` (`post_id`);

--
-- Ketidakleluasaan untuk tabel `tb_post`
--
ALTER TABLE `tb_post`
  ADD CONSTRAINT `tb_post_ibfk_1` FOREIGN KEY (`post_id_cat`) REFERENCES `tb_category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
