-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 05:54 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peterpan`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktiva_tetap`
--

CREATE TABLE `aktiva_tetap` (
  `id_aset` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_aset` text COLLATE latin1_bin,
  `harga_perolehan` int(11) DEFAULT NULL,
  `metode_penyusutan` text COLLATE latin1_bin NOT NULL,
  `residu` int(11) DEFAULT NULL,
  `umur_ekonomis` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nilai_setelah_penyusutan` int(11) NOT NULL,
  `keterangan` text COLLATE latin1_bin
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `aktiva_tetap`
--

INSERT INTO `aktiva_tetap` (`id_aset`, `id_kategori`, `nama_aset`, `harga_perolehan`, `metode_penyusutan`, `residu`, `umur_ekonomis`, `tanggal`, `nilai_setelah_penyusutan`, `keterangan`) VALUES
(15, 10, 'tanah', 45000000, 'ganda', 3000000, 45, '2010-07-13', 2000000, '<p>selatan jawa</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` text COLLATE latin1_bin,
  `deskripsi` text COLLATE latin1_bin
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `deskripsi`) VALUES
(10, 'kategori 1 uhuy', 'mantab gan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `role`) VALUES
(5, 'jiwo', 'jiwo', '3c2ee83a17a6a802bcf7476b8be38129', 1),
(6, 'jokow', 'jokow', 'b356c1bc4585fc6dbc055315f6bc5697', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktiva_tetap`
--
ALTER TABLE `aktiva_tetap`
  ADD PRIMARY KEY (`id_aset`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktiva_tetap`
--
ALTER TABLE `aktiva_tetap`
  MODIFY `id_aset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
