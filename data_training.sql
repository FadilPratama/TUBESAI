-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2022 pada 20.43
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_training`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pabrik`
--

CREATE TABLE `pabrik` (
  `id` int(11) NOT NULL,
  `harga_tanah` enum('Murah','Mahal') NOT NULL,
  `jarak_bahan` enum('Dekat','Sedang','Jauh') NOT NULL,
  `jarak_pasar` enum('Dekat','Sedang','Jauh') NOT NULL,
  `transportasi` enum('Banyak','Sedikit') NOT NULL,
  `tenaga_kerja` enum('Banyak','Sedikit') NOT NULL,
  `pilih` enum('Ya','Tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pabrik`
--

INSERT INTO `pabrik` (`id`, `harga_tanah`, `jarak_bahan`, `jarak_pasar`, `transportasi`, `tenaga_kerja`, `pilih`) VALUES
(1, 'Murah', 'Dekat', 'Dekat', 'Banyak', 'Banyak', 'Ya'),
(2, 'Mahal', 'Sedang', 'Jauh', 'Sedikit', 'Sedikit', 'Tidak'),
(3, 'Mahal', 'Jauh', 'Jauh', 'Sedikit', 'Banyak', 'Ya'),
(4, 'Mahal', 'Sedang', 'Jauh', 'Banyak', 'Sedikit', 'Ya'),
(5, 'Murah', 'Dekat', 'Dekat', 'Sedikit', 'Banyak', 'Tidak'),
(6, 'Mahal', 'Dekat', 'Jauh', 'Sedikit', 'Banyak', 'Tidak'),
(7, 'Murah', 'Jauh', 'Jauh', 'Banyak', 'Sedikit', 'Ya'),
(8, 'Murah', 'Jauh', 'Dekat', 'Banyak', 'Sedikit', 'Ya'),
(9, 'Murah', 'Dekat', 'Dekat', 'Sedikit', 'Banyak', 'Ya'),
(10, 'Mahal', 'Jauh', 'Sedang', 'Banyak', 'Sedikit', 'Tidak'),
(11, 'Murah', 'Sedang', 'Sedang', 'Sedikit', 'Banyak', 'Ya'),
(12, 'Mahal', 'Jauh', 'Sedang', 'Sedikit', 'Banyak', 'Ya'),
(13, 'Mahal', 'Jauh', 'Dekat', 'Sedikit', 'Sedikit', 'Tidak'),
(14, 'Murah', 'Jauh', 'Dekat', 'Sedikit', 'Sedikit', 'Tidak'),
(15, 'Murah', 'Jauh', 'Sedang', 'Banyak', 'Banyak', 'Tidak'),
(16, 'Murah', 'Jauh', 'Jauh', 'Banyak', 'Sedikit', 'Tidak'),
(17, 'Murah', 'Dekat', 'Jauh', 'Banyak', 'Banyak', 'Ya'),
(18, 'Murah', 'Jauh', 'Jauh', 'Sedikit', 'Sedikit', 'Ya'),
(19, 'Mahal', 'Jauh', 'Jauh', 'Banyak', 'Banyak', 'Ya'),
(20, 'Murah', 'Sedang', 'Dekat', 'Sedikit', 'Sedikit', 'Ya'),
(21, 'Mahal', 'Dekat', 'Dekat', 'Sedikit', 'Banyak', 'Tidak'),
(22, 'Mahal', 'Sedang', 'Sedang', 'Banyak', 'Sedikit', 'Tidak'),
(23, 'Mahal', 'Sedang', 'Dekat', 'Banyak', 'Banyak', 'Ya'),
(24, 'Mahal', 'Sedang', 'Sedang', 'Banyak', 'Banyak', 'Tidak'),
(25, 'Mahal', 'Sedang', 'Dekat', 'Banyak', 'Banyak', 'Ya'),
(26, 'Murah', 'Dekat', 'Dekat', 'Sedikit', 'Sedikit', 'Tidak'),
(27, 'Mahal', 'Dekat', 'Jauh', 'Banyak', 'Banyak', 'Ya'),
(28, 'Murah', 'Dekat', 'Jauh', 'Sedikit', 'Sedikit', 'Ya'),
(29, 'Murah', 'Sedang', 'Dekat', 'Banyak', 'Sedikit', 'Tidak'),
(30, 'Mahal', 'Dekat', 'Jauh', 'Sedikit', 'Banyak', 'Ya');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pabrik`
--
ALTER TABLE `pabrik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pabrik`
--
ALTER TABLE `pabrik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
