-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2026 pada 17.03
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
-- Struktur dari tabel `db_teams`
--

CREATE TABLE `db_teams` (
  `id` int(11) NOT NULL,
  `NamaTim` varchar(50) NOT NULL,
  `Player1` varchar(50) NOT NULL,
  `Player2` varchar(50) NOT NULL,
  `Player3` varchar(50) NOT NULL,
  `Player4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `db_teams`
--

INSERT INTO `db_teams` (`id`, `NamaTim`, `Player1`, `Player2`, `Player3`, `Player4`) VALUES
(1, 'Tim PPLG 1', 'Faisal', 'Lutfi', 'Arif', 'Herlino'),
(2, 'Tim PPLG 2', 'Muhaimin', 'Arif', 'Faisal', 'hendra'),
(5, 'Tim PPLG 3', 'Herlino', 'Muhaimin', 'Arif', 'Faisal');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_teams`
--
ALTER TABLE `db_teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `db_teams`
--
ALTER TABLE `db_teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
