-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 06:02 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_xphone`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `id_merk` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_barang` varchar(50) NOT NULL,
  `imei` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `stok` int(12) NOT NULL,
  `gambar_ut` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `id_merk`, `nama_barang`, `harga_barang`, `imei`, `keterangan`, `stok`, `gambar_ut`) VALUES
(7, 1, 's', '200000', '120120', 'KDKSD\r\nasdaskd\r\nKKDa\r\nasdsa', 12, 'afd39e244eba7e30797d88d2392b7e8f.png'),
(9, 4, 'bandulan', '1321312', '312312', '321312', 123, '32257b3669346347f098be04c741e4a2.jpg'),
(10, 2, 'Aqua 600ml', '21313', '12312', '312', 123, '235c36dee4dfa93473d878f2da13c151.jpg'),
(11, 1, 's', '200000', '120120', 'KDKSD\r\nasdaskd\r\nKKDa\r\nasdsa', 12, 'afd39e244eba7e30797d88d2392b7e8f.png'),
(12, 4, 'bandulan', '1321312', '312312', '321312', 123, '32257b3669346347f098be04c741e4a2.jpg'),
(13, 2, 'Aqua 600ml', '21313', '12312', '312', 123, '235c36dee4dfa93473d878f2da13c151.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_merk`
--

CREATE TABLE `tb_merk` (
  `id_merk` int(11) NOT NULL,
  `nama_merk` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_merk`
--

INSERT INTO `tb_merk` (`id_merk`, `nama_merk`) VALUES
(1, 'SAMSUNG'),
(2, 'APPLE'),
(3, 'GOOGLE PIXEL'),
(4, 'HUAWEI'),
(5, 'COBA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `hak_akses` enum('0','1') NOT NULL COMMENT '0=admin,1=user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_lengkap`, `username`, `password`, `alamat`, `no_hp`, `hak_akses`) VALUES
(34, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ss', '000', '0'),
(38, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Sragi Pekalongan', '085201365883', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi_detail`
--

CREATE TABLE `tb_transaksi_detail` (
  `id_detail` int(11) NOT NULL,
  `no_invoice` varchar(50) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `harga` int(12) NOT NULL,
  `jml` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi_header`
--

CREATE TABLE `tb_transaksi_header` (
  `no_invoice` varchar(50) NOT NULL,
  `pengguna_id` int(11) NOT NULL,
  `alamat_tujuan` text NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('0','1','2') NOT NULL COMMENT '0=masuk,1=proses,2=selesai',
  `ongkir` int(12) NOT NULL,
  `total_bayar` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_merk`
--
ALTER TABLE `tb_merk`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_transaksi_detail`
--
ALTER TABLE `tb_transaksi_detail`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `tb_transaksi_header`
--
ALTER TABLE `tb_transaksi_header`
  ADD PRIMARY KEY (`no_invoice`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_merk`
--
ALTER TABLE `tb_merk`
  MODIFY `id_merk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tb_transaksi_detail`
--
ALTER TABLE `tb_transaksi_detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
