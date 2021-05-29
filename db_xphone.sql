-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 05:05 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_xphone`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE IF NOT EXISTS `tb_barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(50) NOT NULL,
  `harga_barang` varchar(50) NOT NULL,
  `imei` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `stok` int(12) NOT NULL,
  `gambar_ut` text NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `harga_barang`, `imei`, `keterangan`, `stok`, `gambar_ut`) VALUES
(7, 's', '200000', '120120', 'KDKSD\r\nasdaskd\r\nKKDa\r\nasdsa', 12, 'afd39e244eba7e30797d88d2392b7e8f.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE IF NOT EXISTS `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `hak_akses` varchar(30) NOT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_lengkap`, `username`, `password`, `alamat`, `no_hp`, `hak_akses`) VALUES
(7, 'bbb', 'bb', 'd41d8cd98f00b204e9800998ecf8427e', 'asdsad', '78979', 'admin'),
(9, 'sad', 'sad', 'd41d8cd98f00b204e9800998ecf8427e', 'sads', '23432', 'admin'),
(10, 'sadas', 'dsd', 'd41d8cd98f00b204e9800998ecf8427e', 'sdsad', '24324', 'admin'),
(12, 'asd', 'asd', 'd41d8cd98f00b204e9800998ecf8427e', 'sad', '08808080808', 'admin'),
(13, 'jhjh', 'rty', 'd41d8cd98f00b204e9800998ecf8427e', 'hkh', '0980898', 'admin'),
(14, 'xsadas', 'sad', 'd41d8cd98f00b204e9800998ecf8427e', 'sds', '0809', 'admin'),
(15, 'xsadas', 'sad', 'd41d8cd98f00b204e9800998ecf8427e', 'sds', '0809', 'admin'),
(16, 'xsadas', 'sad', 'd41d8cd98f00b204e9800998ecf8427e', 'sds', '0809', 'admin'),
(17, 'xsadas', 'sad', 'd41d8cd98f00b204e9800998ecf8427e', 'sds', '0809', 'admin'),
(18, 'xsadas', 'sad', 'd41d8cd98f00b204e9800998ecf8427e', 'sds', '0809', 'admin'),
(19, 'xsadas', 'sad', 'd41d8cd98f00b204e9800998ecf8427e', 'sds', '0809', 'admin'),
(20, 'xsadas', 'sad', 'd41d8cd98f00b204e9800998ecf8427e', 'sds', '0809', 'admin'),
(21, 'xsadas', 'sad', 'd41d8cd98f00b204e9800998ecf8427e', 'sds', '0809', 'admin'),
(22, 'xsadas', 'sad', 'd41d8cd98f00b204e9800998ecf8427e', 'sds', '0809', 'admin'),
(23, 'xsadas', 'sad', 'd41d8cd98f00b204e9800998ecf8427e', 'sds', '0809', 'admin'),
(24, 'xsadas', 'sad', 'd41d8cd98f00b204e9800998ecf8427e', 'sds', '0809', 'admin'),
(25, 'xsadas', 'sad', 'd41d8cd98f00b204e9800998ecf8427e', 'sds', '0809', 'admin'),
(26, 'SADHK', 'DSHAKJDH', 'd41d8cd98f00b204e9800998ecf8427e', 'DSAD', '4343', 'admin'),
(27, 'SADHK', 'DSHAKJDH', 'd41d8cd98f00b204e9800998ecf8427e', 'DSAD', '4343', 'admin'),
(28, 'SADHK', 'DSHAKJDH', 'd41d8cd98f00b204e9800998ecf8427e', 'DSAD', '4343', 'admin'),
(29, 'asdhkj', 'ashdkh', 'd41d8cd98f00b204e9800998ecf8427e', 'asd', '12312', 'admin'),
(30, 'sdad', 'askdha', 'd41d8cd98f00b204e9800998ecf8427e', 'sdsa', '8908', 'admin'),
(31, 'dasd', 'sadasd', 'd41d8cd98f00b204e9800998ecf8427e', 'asdsa', '12392103', 'admin'),
(32, 'asdas', 'asdas', 'd41d8cd98f00b204e9800998ecf8427e', 'asd', '1239210', 'admin'),
(33, 'adasd', 'sadas', 'd41d8cd98f00b204e9800998ecf8427e', 'asdsa', '0809', 'admin'),
(34, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ss', '000', 'admin'),
(35, 'admin2', 'admin2', 'd41d8cd98f00b204e9800998ecf8427e', 'asd', '10239', 'admin'),
(36, 'admin4', 'admin4', 'fc1ebc848e31e0a68e868432225e3c82', 'dsa', '41413', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi_detail`
--

CREATE TABLE IF NOT EXISTS `tb_transaksi_detail` (
  `id_detail` int(11) NOT NULL AUTO_INCREMENT,
  `no_invoice` varchar(50) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `harga` int(12) NOT NULL,
  `jml` int(12) NOT NULL,
  PRIMARY KEY (`id_detail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi_header`
--

CREATE TABLE IF NOT EXISTS `tb_transaksi_header` (
  `no_invoice` varchar(50) NOT NULL,
  `pengguna_id` int(11) NOT NULL,
  `alamat_tujuan` text NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `ongkir` int(12) NOT NULL,
  `total_bayar` int(50) NOT NULL,
  PRIMARY KEY (`no_invoice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
