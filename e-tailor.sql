-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 04:21 AM
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
-- Database: `e-tailor`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(20) NOT NULL,
  `nama_admin` varchar(64) NOT NULL,
  `username_admin` varchar(64) NOT NULL,
  `password_admin` varchar(64) NOT NULL,
  `email_admin` varchar(64) NOT NULL,
  `nohp_admin` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_admin`, `username_admin`, `password_admin`, `email_admin`, `nohp_admin`) VALUES
(1, 'william', 'admin', 'admin', 'william99@gmail.com', 2299345);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesanan`
--

CREATE TABLE `tbl_pesanan` (
  `id_pesanan` int(20) NOT NULL,
  `jenis_pakaian` varchar(64) NOT NULL,
  `ukuran` varchar(64) NOT NULL,
  `warna` varchar(64) NOT NULL,
  `jenis_kain` varchar(64) NOT NULL,
  `jumlah` varchar(64) NOT NULL,
  `tanggal_pemesanan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pesanan`
--

INSERT INTO `tbl_pesanan` (`id_pesanan`, `jenis_pakaian`, `ukuran`, `warna`, `jenis_kain`, `jumlah`, `tanggal_pemesanan`) VALUES
(1, 'hkh', 'jkh', 'kjhkjh', 'kh', 'kjh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email_user` varchar(64) NOT NULL,
  `nohp_user` int(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username_user` varchar(50) NOT NULL,
  `password_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `tgl_lahir`, `email_user`, `nohp_user`, `alamat`, `username_user`, `password_user`) VALUES
(53551, 'Roni', '0000-00-00', '', 0, 'Gresik', 'roni', 'roni'),
(53552, 'Elma', '0000-00-00', '', 0, 'Lamongan', 'elma', 'elma'),
(53553, 'Yogi', '0000-00-00', '', 0, 'Sukabumi', 'yogi', 'yogi'),
(53554, 'Kevin', '0000-00-00', '', 0, 'Lampung', 'kevin', 'kevin'),
(53555, 'Sasa', '0000-00-00', '', 0, 'Banyuwangi', 'sasa', 'sasa'),
(53556, 'Sinta', '0000-00-00', '', 0, 'Madiun', 'sinta', 'sinta'),
(53557, 'Kartiko', '0000-00-00', '', 0, 'Nganjuk', 'kartiko', 'kartiko'),
(53558, 'Erna', '0000-00-00', '', 0, 'Madiun', 'erna', 'erna'),
(53559, 'Feni', '0000-00-00', '', 0, 'Lampung', 'feni', 'feni'),
(53560, 'Sultan', '0000-00-00', '', 0, 'Surabaya', 'sultan', 'sultan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  MODIFY `id_pesanan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53562;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
