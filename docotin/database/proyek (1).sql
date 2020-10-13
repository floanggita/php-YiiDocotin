-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2019 at 05:59 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(11) NOT NULL,
  `nama_bank` varchar(225) NOT NULL,
  `kode_bank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id_bank`, `nama_bank`, `kode_bank`) VALUES
(1, 'BNI', 25),
(2, 'BRI', 26),
(3, 'MANDIRI', 27);

-- --------------------------------------------------------

--
-- Table structure for table `grup`
--

CREATE TABLE `grup` (
  `id_grup` int(11) NOT NULL,
  `nama_grup` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grup`
--

INSERT INTO `grup` (`id_grup`, `nama_grup`) VALUES
(1, 'penjual\r\n'),
(2, 'pembeli'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(0, 'belum di proses'),
(1, 'tertunda'),
(2, 'berhasil'),
(3, 'gagal');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_topup` double NOT NULL,
  `id_user` int(11) NOT NULL,
  `jumlah_saldo` int(225) NOT NULL,
  `status_topup` int(1) NOT NULL DEFAULT '0' COMMENT '0=belum di proses, 1=tertunda, 2=berhasil, 3=gagal',
  `tanggal` datetime DEFAULT CURRENT_TIMESTAMP,
  `id_bank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_topup`, `id_user`, `jumlah_saldo`, `status_topup`, `tanggal`, `id_bank`) VALUES
(201907110008, 37, 100000, 3, '2019-07-11 14:10:51', 3),
(201907160002, 37, 100000, 2, '2019-07-16 10:40:27', 3),
(201907160003, 37, 100000, 3, '2019-07-16 10:40:51', 3),
(201907180009, 37, 40000, 3, '2019-07-18 15:43:06', 2),
(201907180010, 37, 150000, 3, '2019-07-18 16:21:01', 1),
(201907180011, 37, 100000, 3, '2019-07-18 16:22:03', 3),
(201907190002, 37, 100000, 3, '2019-07-19 11:07:13', 3),
(201907190003, 37, 50000, 3, '2019-07-19 11:07:22', 1),
(201907190004, 37, 150000, 3, '2019-07-19 11:07:32', 2),
(201907190005, 37, 100000, 3, '2019-07-19 11:07:41', 3),
(201907190006, 37, 50000, 3, '2019-07-19 11:07:49', 3),
(201907190007, 37, 150000, 0, '2019-07-19 11:07:55', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_grup` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `nama_lengkap` varchar(60) NOT NULL,
  `password` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `no_hp` double NOT NULL,
  `lantai` int(11) DEFAULT NULL,
  `saldo` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_grup`, `username`, `nama_lengkap`, `password`, `email`, `no_hp`, `lantai`, `saldo`) VALUES
(33, 2, 'bambang', 'bambang sutanto', 'f3743faf6187404247076a8e14b8fe26', 'bambang@xmail.com', 6282251252772, 5, 50000),
(34, 1, 'yoga', 'yoga aja', '79fee944c4ac662f317dabd53dadd969', 'yoga@xmail.com', 2147483647, 4, 60000),
(35, 2, 'agus', '', 'fdf169558242ee051cca1479770ebac3', 'agus@xmail.com', 82251252772, 3, 0),
(36, 1, 'ilham', '', 'b63d204bf086017e34d8bd27ab969f28', 'il', 82251252772, 3, 0),
(37, 2, 'irky', 'irky', '18011a9a59199d229b06975cde9f4ff9', 'irky@xmail.com', 82251252772, 2, 0),
(39, 3, 'admin', 'admin clr cff', '21232f297a57a5a743894a0e4a801fc3', 'admin@xmail.com', 82251252772, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `va`
--

CREATE TABLE `va` (
  `id_va` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_bank` int(11) NOT NULL,
  `nomer_va` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `grup`
--
ALTER TABLE `grup`
  ADD PRIMARY KEY (`id_grup`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_topup`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `va`
--
ALTER TABLE `va`
  ADD PRIMARY KEY (`id_va`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `grup`
--
ALTER TABLE `grup`
  MODIFY `id_grup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `va`
--
ALTER TABLE `va`
  MODIFY `id_va` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
