-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 04:20 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id` int(11) NOT NULL COMMENT 'id table',
  `nama` varchar(100) NOT NULL COMMENT 'nama tamu',
  `jk` enum('Pria','Wanita') NOT NULL COMMENT 'jenis kelamin',
  `identitas` varchar(16) NOT NULL COMMENT 'ktp/sim',
  `tipe` varchar(50) NOT NULL COMMENT 'tipe kamar (sesuai harga)',
  `harga` int(11) NOT NULL COMMENT 'logika pada form',
  `tanggal` date NOT NULL COMMENT 'tanggal pesan',
  `durasi` int(11) NOT NULL COMMENT 'lama nginep',
  `breakfast` enum('Y','N') NOT NULL COMMENT 'pake sarapan?',
  `Total` int(11) NOT NULL COMMENT 'total keseluruhan (nilai akhir)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id`, `nama`, `jk`, `identitas`, `tipe`, `harga`, `tanggal`, `durasi`, `breakfast`, `Total`) VALUES
(8, 'Daffa Athallah', 'Pria', '121223123123', 'Family', 0, '2021-12-01', 5, 'Y', 4580000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id table', AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
