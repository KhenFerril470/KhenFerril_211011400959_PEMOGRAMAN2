-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2024 pada 02.50
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblogineuro`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `grup_uefa`
--

CREATE TABLE `grup_uefa` (
  `id` int(11) NOT NULL,
  `nama_grup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `grup_uefa`
--

INSERT INTO `grup_uefa` (`id`, `nama_grup`) VALUES
(1, 'Grup B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblklasemen`
--

CREATE TABLE `tblklasemen` (
  `id` int(11) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `menang` int(11) NOT NULL,
  `seri` int(11) NOT NULL,
  `kalah` int(11) NOT NULL,
  `poin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tblklasemen`
--

INSERT INTO `tblklasemen` (`id`, `negara`, `menang`, `seri`, `kalah`, `poin`) VALUES
(1, 'Spanyol', 0, 0, 0, 0),
(2, 'Italia', 0, 0, 0, 0),
(3, 'Croatia', 0, 0, 0, 0),
(4, 'Albania', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbluser`
--

INSERT INTO `tbluser` (`id`, `nim`, `password`) VALUES
(1, '211011400959', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `grup_uefa`
--
ALTER TABLE `grup_uefa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tblklasemen`
--
ALTER TABLE `tblklasemen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `grup_uefa`
--
ALTER TABLE `grup_uefa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tblklasemen`
--
ALTER TABLE `tblklasemen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
