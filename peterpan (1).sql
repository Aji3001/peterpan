-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 06:37 PM
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
  `kd_aktiva` int(11) NOT NULL,
  `id_aset` varchar(10) COLLATE latin1_bin DEFAULT NULL,
  `akun_penyusutan` varchar(50) COLLATE latin1_bin DEFAULT NULL,
  `nilai_beli` varchar(25) COLLATE latin1_bin DEFAULT NULL,
  `nilai_jual` varchar(25) COLLATE latin1_bin DEFAULT NULL,
  `tgl_hapus` varchar(10) COLLATE latin1_bin DEFAULT NULL,
  `keterangan` varchar(50) COLLATE latin1_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `aktiva_tetap`
--

INSERT INTO `aktiva_tetap` (`kd_aktiva`, `id_aset`, `akun_penyusutan`, `nilai_beli`, `nilai_jual`, `tgl_hapus`, `keterangan`) VALUES
(1, 'A31', 'A', 'Rp.900000', '800000', '01/08/1999', 'Belum Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `aset`
--

CREATE TABLE `aset` (
  `id_aset` int(11) NOT NULL,
  `id_kategori` varchar(10) COLLATE latin1_bin DEFAULT NULL,
  `nama_aset` char(30) COLLATE latin1_bin DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `residu` varchar(50) COLLATE latin1_bin DEFAULT NULL,
  `tanggal` varchar(10) COLLATE latin1_bin DEFAULT NULL,
  `unit` int(10) DEFAULT NULL,
  `keterangan` char(100) COLLATE latin1_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `aset`
--

INSERT INTO `aset` (`id_aset`, `id_kategori`, `nama_aset`, `harga`, `residu`, `tanggal`, `unit`, `keterangan`) VALUES
(1, '3', 'Gitar Yamaha', 0, '15000', '01 Apr 21', 15, 'Lunas'),
(2, '1', 'Mobil Barang', 0, 'Rp.25000', '18 April 2', 3, 'Sedang Perbaikan'),
(11, '3', 'Tiket Konser', 50000, '15000', '01 Apr 21', 15, 'Lunas');

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
(10, 'kategori 1 gan', 'mantab gan'),
(11, 'tambah lagi gan', 'teruss gan');

-- --------------------------------------------------------

--
-- Table structure for table `penyusutan`
--

CREATE TABLE `penyusutan` (
  `id_penyusutan` int(10) NOT NULL,
  `id_aset` varchar(10) COLLATE latin1_bin DEFAULT NULL,
  `beban_penyusutan` varchar(25) COLLATE latin1_bin DEFAULT NULL,
  `akm_penyusutuan` varchar(15) COLLATE latin1_bin DEFAULT NULL,
  `nilai_beli` varchar(25) COLLATE latin1_bin DEFAULT NULL,
  `waktu` date NOT NULL,
  `tahun` varchar(10) COLLATE latin1_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `penyusutan`
--

INSERT INTO `penyusutan` (`id_penyusutan`, `id_aset`, `beban_penyusutan`, `akm_penyusutuan`, `nilai_beli`, `waktu`, `tahun`) VALUES
(1, 'A31', 'Rp 150000', 'Rp 100000', 'Rp 250000', '0000-00-00', '2016');

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
(5, 'jiwo', 'jiwo', '3c2ee83a17a6a802bcf7476b8be38129', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktiva_tetap`
--
ALTER TABLE `aktiva_tetap`
  ADD PRIMARY KEY (`kd_aktiva`);

--
-- Indexes for table `aset`
--
ALTER TABLE `aset`
  ADD PRIMARY KEY (`id_aset`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `penyusutan`
--
ALTER TABLE `penyusutan`
  ADD PRIMARY KEY (`id_penyusutan`);

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
  MODIFY `kd_aktiva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aset`
--
ALTER TABLE `aset`
  MODIFY `id_aset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `penyusutan`
--
ALTER TABLE `penyusutan`
  MODIFY `id_penyusutan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
