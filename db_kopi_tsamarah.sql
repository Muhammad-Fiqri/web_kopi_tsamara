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
-- Table structure for table `nilai_alternatif`
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
