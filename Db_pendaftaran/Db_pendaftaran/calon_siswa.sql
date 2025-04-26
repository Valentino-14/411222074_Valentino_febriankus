-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2025 at 12:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pendaftaaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `jenis kelamin` varchar(20) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `sekolah_asal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calon_siswa`
--

INSERT INTO `calon_siswa` (`id`, `nama`, `alamat`, `jenis kelamin`, `agama`, `sekolah_asal`) VALUES
(1, 'budi ', 'jakarta barat', 'Laki-laki', 'Islam', 'SMP negri 1'),
(2, 'jona', 'jakarta barat', 'Laki-laki', 'Kristen', 'SMP negri 2'),
(3, 'budi ', 'jakarta barat', 'Laki-laki', 'Islam', 'SMP negri 1'),
(4, 'jona', 'jakarta barat', 'Laki-laki', 'Kristen', 'SMP negri 2'),
(5, 'budi ', 'jakarta barat', 'Laki-laki', 'Islam', 'SMP negri 1'),
(6, 'jona', 'jakarta barat', 'Laki-laki', 'Kristen', 'SMP negri 2'),
(7, 'budi ', 'jakarta barat', 'Laki-laki', 'Islam', 'SMP negri 1'),
(8, 'jona', 'jakarta barat', 'Laki-laki', 'Kristen', 'SMP negri 2'),
(9, 'budi ', 'jakarta barat', 'Laki-laki', 'Islam', 'SMP negri 1'),
(10, 'jona', 'jakarta barat', 'Laki-laki', 'Kristen', 'SMP negri 2'),
(11, 'budi ', 'jakarta barat', 'Laki-laki', 'Islam', 'SMP negri 1'),
(12, 'jona', 'jakarta barat', 'Laki-laki', 'Kristen', 'SMP negri 2'),
(13, 'budi ', 'jakarta barat', 'Laki-laki', 'Islam', 'SMP negri 1'),
(14, 'jona', 'jakarta barat', 'Laki-laki', 'Kristen', 'SMP negri 2'),
(15, 'budi ', 'jakarta barat', 'Laki-laki', 'Islam', 'SMP negri 1'),
(16, 'jona', 'jakarta barat', 'Laki-laki', 'Kristen', 'SMP negri 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
