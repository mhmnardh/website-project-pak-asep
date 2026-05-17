-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2026 pada 17.02
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_tugas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_jadwal`
--

CREATE TABLE `db_jadwal` (
  `id` int(11) NOT NULL,
  `Waktu` varchar(50) NOT NULL,
  `Tim1` varchar(50) NOT NULL,
  `Tim2` varchar(50) NOT NULL,
  `Kondisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `db_jadwal`
--

INSERT INTO `db_jadwal` (`id`, `Waktu`, `Tim1`, `Tim2`, `Kondisi`) VALUES
(1, '13.00', 'Tim Muhaimin', 'Tim Herlino', 'Live'),
(2, '14.00', 'Tim Arif', 'Tim Lutfi', 'Segera'),
(3, '2026-05-17T21:29', 'tim 6', 'tim 7', 'Belum Selesai');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_jadwal`
--
ALTER TABLE `db_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `db_jadwal`
--
ALTER TABLE `db_jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
