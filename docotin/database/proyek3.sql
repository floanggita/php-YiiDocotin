-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2019 at 05:27 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

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
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga_barang` int(20) NOT NULL,
  `gambar_barang` text NOT NULL,
  `stok` int(10) NOT NULL,
  `deksripsi` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga_barang`, `gambar_barang`, `stok`, `deksripsi`, `id_user`) VALUES
(4, 'Mie', 10000, '/uploads/barang/mie.jpg', 1, 'Barang Bagus nih', 31),
(5, 'Kebab', 10000, '/uploads/barang/Resep-Kebab.jpg', 0, 'Kebab Hangat dapat di Simpan di Microwave', 31);

-- --------------------------------------------------------

--
-- Table structure for table `detailuser`
--

CREATE TABLE `detailuser` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama_lengkap` varchar(250) DEFAULT NULL,
  `lantai` varchar(10) DEFAULT NULL,
  `no_hp` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailuser`
--

INSERT INTO `detailuser` (`id`, `id_user`, `nama_lengkap`, `lantai`, `no_hp`) VALUES
(1, 31, 'asdf ghjk', '3', '085767898899');

-- --------------------------------------------------------

--
-- Table structure for table `detailuserpenjual`
--

CREATE TABLE `detailuserpenjual` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `namaLengkap` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `noHp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `noNpwp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fotoKtp` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `detailuserpenjual`
--

INSERT INTO `detailuserpenjual` (`id`, `id_user`, `namaLengkap`, `noHp`, `alamat`, `noNpwp`, `fotoKtp`) VALUES
(1, 29, 'Agus Marsugus', '089778789909', 'jalan merdeka utara', '878776868', 'q4gFfqtzVr1_IaxpcU43RR9TwxaLc1TC.jpeg');

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
(2, 'pembeli');

-- --------------------------------------------------------

--
-- Table structure for table `saldo`
--

CREATE TABLE `saldo` (
  `id_saldo` int(11) NOT NULL,
  `JumlahSaldoPertama` int(11) NOT NULL,
  `JumlahSaldoUpdate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `status_bayar` varchar(50) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_grup` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_grup`, `username`, `password`, `email`) VALUES
(9, 2, 'yoga', 'd41d8cd98f00b204e9800998ecf8427e', 'yoga@xmail.com'),
(16, 0, 'irky', 'd41d8cd98f00b204e9800998ecf8427e', 'irky@xmail.com'),
(27, 0, 'bambang', 'd41d8cd98f00b204e9800998ecf8427e', 'bambang@xmail.com'),
(28, 0, 'ilham', 'b63d204bf086017e34d8bd27ab969f28', 'ilham@xmail.com'),
(29, 1, 'agus', 'fdf169558242ee051cca1479770ebac3', 'agus@xmail.com'),
(30, 1, 'riski', '6e24184c9f8092a67bcd413cbcf598da', 'riski@xmail.com'),
(31, 2, 'asdf', '912ec803b2ce49e4a541068d495ab570', 'asdf@xmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `detailuser`
--
ALTER TABLE `detailuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detailuserpenjual`
--
ALTER TABLE `detailuserpenjual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grup`
--
ALTER TABLE `grup`
  ADD PRIMARY KEY (`id_grup`);

--
-- Indexes for table `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`id_saldo`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detailuser`
--
ALTER TABLE `detailuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detailuserpenjual`
--
ALTER TABLE `detailuserpenjual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grup`
--
ALTER TABLE `grup`
  MODIFY `id_grup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `saldo`
--
ALTER TABLE `saldo`
  MODIFY `id_saldo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
