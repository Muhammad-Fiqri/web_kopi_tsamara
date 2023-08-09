-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 12:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kopi_tsamarah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot`
--

CREATE TABLE `bobot` (
  `id_bobot` int(10) NOT NULL,
  `ket_bobot` varchar(30) NOT NULL,
  `bobot` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bobot`
--

INSERT INTO `bobot` (`id_bobot`, `ket_bobot`, `bobot`) VALUES
(1, 'Sangat Tidak Penting (STP)', 1),
(2, 'Tidak Penting (TP)', 2),
(3, 'Cukup Penting (CP)', 3),
(4, 'Penting (P)', 4),
(5, 'Sangat Penting (SP)', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot_kriteria`
--

CREATE TABLE `bobot_kriteria` (
  `id_bobot_kriteria` int(10) NOT NULL,
  `kode_kriteria` varchar(30) NOT NULL,
  `kriteria` varchar(30) NOT NULL,
  `bobot` int(30) NOT NULL,
  `atribut` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bobot_kriteria`
--

INSERT INTO `bobot_kriteria` (`id_bobot_kriteria`, `kode_kriteria`, `kriteria`, `bobot`, `atribut`) VALUES
(1, 'C1', 'Kadar Air', 5, 'Keuntungan'),
(2, 'C2', 'Ketinggian Lokasi', 4, 'Keuntungan'),
(3, 'C3', 'Warna Biji', 3, 'Keuntungan'),
(4, 'C4', 'Aroma', 4, 'Keuntungan'),
(5, 'C5', 'Nilai Cacat', 5, 'Keuntungan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(10) NOT NULL,
  `kode_kriteria` varchar(30) NOT NULL,
  `kriteria` varchar(30) NOT NULL,
  `nilai_mutu` varchar(30) NOT NULL,
  `nilai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kode_kriteria`, `kriteria`, `nilai_mutu`, `nilai`) VALUES
(1, 'C1', 'Kadar Air', '<12,5%', 1),
(2, 'C1', 'Kadar Air', '13-15%', 2),
(3, 'C1', 'Kadar Air', '16-17%', 3),
(4, 'C1', 'Kadar Air', '>17%', 4),
(5, 'C2', 'Ketinggian Lokasi', 'Tidak Tinggi', 1),
(6, 'C2', 'Ketinggian Lokasi', 'Sedikit Tinggi', 2),
(7, 'C2', 'Ketinggian Lokasi', 'Tinggi', 3),
(8, 'C2', 'Ketinggian Lokasi', 'Sangat Tinggi', 4),
(9, 'C3', 'Warna Biji', 'Hijau Kebiruan', 1),
(10, 'C3', 'Warna Biji', 'Hijau Seragam', 2),
(11, 'C3', 'Warna Biji', 'Coklat Muda', 3),
(12, 'C3', 'Warna Biji', 'Coklat Tua', 4),
(13, 'C4', 'Aroma', 'Tidak Berbau', 1),
(14, 'C4', 'Aroma', 'Sedikit Berbau', 2),
(15, 'C4', 'Aroma', 'Berbau', 3),
(16, 'C4', 'Aroma', 'Sangat Berbau', 4),
(17, 'C5', 'Nilai Cacat', '<11', 1),
(18, 'C5', 'Nilai Cacat', '12-25', 2),
(19, 'C5', 'Nilai Cacat', '26-44', 3),
(20, 'C5', 'Nilai Cacat', '45-80', 4),
(21, 'C5', 'Nilai Cacat', '81-150', 5),
(22, 'C5', 'Nilai Cacat', '>150', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_alternatif`
--

CREATE TABLE `nilai_alternatif` (
  `Id_nilai_alternatif` int(10) NOT NULL,
  `Kode_alternatif` varchar(11) NOT NULL,
  `Alternatif` varchar(30) NOT NULL,
  `C1` int(11) NOT NULL,
  `C2` int(11) NOT NULL,
  `C3` int(11) NOT NULL,
  `C4` int(11) NOT NULL,
  `C5` int(11) NOT NULL,
  `V1` float(30,2) NOT NULL,
  `Rank` int(30) NOT NULL,
  `Yp` float(30,2) NOT NULL,
  `Ym` float(30,2) NOT NULL,
  `Created_at` datetime DEFAULT NULL,
  `Updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nilai_alternatif`
--

INSERT INTO `nilai_alternatif` (`Id_nilai_alternatif`, `Kode_alternatif`, `Alternatif`, `C1`, `C2`, `C3`, `C4`, `C5`, `V1`, `Rank`, `Yp`, `Ym`, `Created_at`, `Updated_at`) VALUES
(1, 'A1', 'Kemasan Kopi Tarbulan Jenis Ro', 1, 2, 1, 3, 3, 0.63, 5, 4.24, 0.00, '2023-08-04 17:07:19', '2023-08-04 17:07:19'),
(2, 'A2', 'Kopi Robusta Aceh Gayo', 2, 3, 1, 3, 3, 0.78, 3, 7.07, 0.00, '2023-08-04 17:07:19', '2023-08-04 17:07:19'),
(3, 'A3', 'Kopi Robusta Jantan Lanang', 2, 2, 1, 3, 3, 0.72, 4, 3.46, 0.00, '2023-08-04 17:07:19', '2023-08-04 17:07:19'),
(4, 'A4', 'Kopi Arabika Aceh Gayo ', 2, 4, 2, 4, 3, 1.00, 1, 7.28, 0.00, '2023-08-04 17:07:19', '2023-08-04 17:07:19'),
(5, 'A5', 'Kopi Arabika Toraja', 2, 4, 2, 3, 3, 0.89, 2, 6.78, 0.00, '2023-08-04 17:07:19', '2023-08-04 17:07:19'),
(6, 'A6', '', 0, 0, 0, 0, 0, 0.00, 6, 2.36, 0.00, '2023-08-04 17:07:19', '2023-08-04 17:07:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nilai_alternatif`
--
ALTER TABLE `nilai_alternatif`
  ADD PRIMARY KEY (`Id_nilai_alternatif`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai_alternatif`
--
ALTER TABLE `nilai_alternatif`
  MODIFY `Id_nilai_alternatif` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
