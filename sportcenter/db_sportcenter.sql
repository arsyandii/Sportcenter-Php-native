-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 01:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sportcenter`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` int(11) NOT NULL,
  `merek` varchar(30) DEFAULT NULL,
  `harga` varchar(30) DEFAULT NULL,
  `kategori` varchar(30) DEFAULT NULL,
  `kondisi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `merek`, `harga`, `kategori`, `kondisi`) VALUES
(1, 'nike', '10000', 'sepatu', 'baru'),
(2, 'vans', '20000', 'sepatu', 'baru'),
(3, 'ventela', '50000', 'sepatu', 'baru');

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `nomor_hp` varchar(30) DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `id_pembayaran` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`id`, `nama`, `alamat`, `email`, `nomor_hp`, `foto`, `id_barang`, `id_pembayaran`) VALUES
(1, 'sandi', 'malang', 'sandi@outlook.com', '098765464765', '1', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_foto_profile`
--

CREATE TABLE `tb_foto_profile` (
  `id` int(22) NOT NULL,
  `foto` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_foto_profile`
--

INSERT INTO `tb_foto_profile` (`id`, `foto`) VALUES
(15, '1.jpg'),
(19, 'slipknot5-'),
(20, 'animeks.jp'),
(21, 'animeks.jp');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id` int(11) NOT NULL,
  `emoney` varchar(30) DEFAULT NULL,
  `mbanking` varchar(30) DEFAULT NULL,
  `id_transaksi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id`, `emoney`, `mbanking`, `id_transaksi`) VALUES
(1, 'ovo', '', 'e3d18a2b-4852-11ed-99e5-1c697a791a76'),
(2, '', 'bank danamon', 'e3d18cf4-4852-11ed-99e5-1c697a791a76'),
(3, 'dana', '', 'e3d18d69-4852-11ed-99e5-1c697a791a76');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`) VALUES
(1, 'sandi', 'sandi'),
(3, 'a', 'a'),
(8, 'a', '0cc175b9c0f1b6a831c399e269772661'),
(9, 'sandi', 'ac9b4e0b6a21758534db2a6324d34a54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pembayaran` (`id_pembayaran`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `tb_foto_profile`
--
ALTER TABLE `tb_foto_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `tb_foto_profile`
--
ALTER TABLE `tb_foto_profile`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD CONSTRAINT `tb_customer_ibfk_2` FOREIGN KEY (`id_pembayaran`) REFERENCES `tb_customer` (`id`),
  ADD CONSTRAINT `tb_customer_ibfk_3` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_customer_ibfk_4` FOREIGN KEY (`id_pembayaran`) REFERENCES `tb_pembayaran` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
