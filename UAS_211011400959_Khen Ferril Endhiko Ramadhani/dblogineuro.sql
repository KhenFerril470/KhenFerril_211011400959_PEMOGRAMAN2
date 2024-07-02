-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2024 pada 16.52
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
-- Struktur dari tabel `klasemen_uefa`
--

CREATE TABLE `klasemen_uefa` (
  `id` int(11) NOT NULL,
  `nama_negara` varchar(100) NOT NULL,
  `jumlah_menang` int(11) NOT NULL,
  `jumlah_seri` int(11) NOT NULL,
  `jumlah_kalah` int(11) NOT NULL,
  `jumlah_poin` int(11) NOT NULL,
  `grup_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `klasemen_uefa`
--

INSERT INTO `klasemen_uefa` (`id`, `nama_negara`, `jumlah_menang`, `jumlah_seri`, `jumlah_kalah`, `jumlah_poin`, `grup_id`) VALUES
(1, 'Spanyol', 3, 1, 0, 10, 1),
(2, 'Kroasia', 2, 1, 1, 7, 1),
(3, 'Italia', 1, 1, 2, 4, 1),
(4, 'Albania', 0, 1, 3, 1, 1);

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
-- Indeks untuk tabel `klasemen_uefa`
--
ALTER TABLE `klasemen_uefa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grup_id` (`grup_id`);

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
-- AUTO_INCREMENT untuk tabel `klasemen_uefa`
--
ALTER TABLE `klasemen_uefa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `klasemen_uefa`
--
ALTER TABLE `klasemen_uefa`
  ADD CONSTRAINT `klasemen_uefa_ibfk_1` FOREIGN KEY (`grup_id`) REFERENCES `grup_uefa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
