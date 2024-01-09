-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2016 at 02:38 PM
-- Server version: 5.0.67
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pemasaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(3) NOT NULL auto_increment,
  `nama` varchar(255) collate latin1_general_ci NOT NULL,
  `email` varchar(255) collate latin1_general_ci NOT NULL,
  `kelamin` varchar(8) collate latin1_general_ci NOT NULL,
  `user` varchar(25) collate latin1_general_ci NOT NULL,
  `password` varchar(255) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `kelamin`, `user`, `password`) VALUES
(3, 'User Admin', 'user@yahoo.com', 'pria', 'admin', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE IF NOT EXISTS `counter` (
  `tgl` varchar(30) collate latin1_general_ci NOT NULL,
  `jml` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`tgl`, `jml`) VALUES
('Tue, 14-Oct-2014 16:48:06', 53);

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE IF NOT EXISTS `daftar` (
  `id` int(5) NOT NULL auto_increment,
  `nama` varchar(50) collate latin1_general_ci NOT NULL,
  `user` varchar(20) collate latin1_general_ci NOT NULL,
  `email` varchar(50) collate latin1_general_ci NOT NULL,
  `pass` varchar(70) collate latin1_general_ci NOT NULL,
  `tanggal` varchar(30) collate latin1_general_ci NOT NULL,
  `alamat` text collate latin1_general_ci NOT NULL,
  `kota` varchar(50) collate latin1_general_ci NOT NULL,
  `kodepos` varchar(15) collate latin1_general_ci NOT NULL,
  `provinsi` varchar(50) collate latin1_general_ci NOT NULL,
  `telpon` varchar(15) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=54 ;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id`, `nama`, `user`, `email`, `pass`, `tanggal`, `alamat`, `kota`, `kodepos`, `provinsi`, `telpon`) VALUES
(43, 'Mailizar', 'izar', 'izar.chaniago@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Tue, 14-Oct-2014 15:46:05', 'Hhgadjhah', 'Jhadgja', '54778', 'Jgada', '766546889'),
(44, 'Me', 'me', 'izar.chaniago@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Tue, 14-Oct-2014 16:48:21', 'Kapundung', 'Padang', '5454545', 'Sumtra Barat', '0855436562'),
(45, '12345', '12345', 'saffputra@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Tue, 14-Oct-2014 22:03:12', 'Tjhgdjhhs', 'Padang', '245762', 'Jajgdad', '865482'),
(46, 'Kjdgfad', 'saf', 'saffputra@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Tue, 14-Oct-2014 22:13:30', 'Rytfsr', 'Kffkjs', '856837', 'Jhsgfjhhs', '87635939'),
(47, 'Ferri', 'ferri', 'vendry_bb@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Wed, 29-Oct-2014 13:47:54', 'Jln Lubeg No 40 ', 'Padang', '12045', 'Sumbar', '082170214495'),
(48, 'Nabil', 'nabil', 'vendry7@gmail.com', '070aa66550916626673f492bdbdb655f', 'Mon, 16-Feb-2015 21:03:46', '', '', '', '', ''),
(49, 'Kaka', 'kaka', 'kaka@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Wed, 25-Feb-2015 15:46:06', 'Padang', 'Padang', 'Kaka@gmail.com', 'Sumbar', '082170214495'),
(50, 'Elga', 'elga', 'elga@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Mon, 04-May-2015 16:18:53', 'Padang', 'Padang', '1235', 'Sumatera Barat', '082170214495'),
(51, 'Nana', 'nana', 'vendry7@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Wed, 06-May-2015 13:41:23', 'JL.Berok Raya No 40 Siteba', 'Padang', '12045', 'Sumatera Barat', '081243657790'),
(52, 'Fdfs', 'fafa', 'fafaa', '05d251ea28c5be9426611a121db0c92a', 'Mon, 01-Jun-2015 20:19:56', 'Dsfsd', 'Wer', 'Wer', 'Wer', 'wer'),
(53, 'Niko Fernandes', 'niko', 'niko@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Thu, 21-Apr-2016 21:14:02', 'Jl.Aru Indah No 20 Padang', 'Pariaman', '25146', 'Sumatera Barat', '082170214495');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `ID_topik` int(5) NOT NULL auto_increment,
  `nama` varchar(50) collate latin1_general_ci NOT NULL,
  `email` varchar(50) collate latin1_general_ci NOT NULL,
  `topik` varchar(255) collate latin1_general_ci NOT NULL,
  `isi` text collate latin1_general_ci NOT NULL,
  `ID_replay` int(5) NOT NULL,
  `tanggal` varchar(30) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`ID_topik`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=288 ;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`ID_topik`, `nama`, `email`, `topik`, `isi`, `ID_replay`, `tanggal`) VALUES
(287, 'Ferri', 'vendry_bb@yahoo.com', 'terima kasih ', 'terima kasih atas krimannya barang sudah diterima', 0, 'Wed, 29-Oct-2014 14:07:42');

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE IF NOT EXISTS `guestbook` (
  `id_gb` int(3) NOT NULL auto_increment,
  `tgl` varchar(30) collate latin1_general_ci NOT NULL,
  `nama` varchar(255) collate latin1_general_ci NOT NULL,
  `email` varchar(255) collate latin1_general_ci NOT NULL,
  `pesan` varchar(255) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_gb`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=200 ;

--
-- Dumping data for table `guestbook`
--


-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE IF NOT EXISTS `laporan` (
  `idlap` int(4) NOT NULL auto_increment,
  `iduser` varchar(4) collate latin1_general_ci NOT NULL,
  `tgl` varchar(30) collate latin1_general_ci NOT NULL,
  `status` varchar(20) collate latin1_general_ci NOT NULL,
  `kode` varchar(50) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`idlap`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=50 ;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`idlap`, `iduser`, `tgl`, `status`, `kode`) VALUES
(39, '43', 'Tue, 14-Oct-2014', 'lunas', '141014-154657'),
(40, '44', 'Tue, 14-Oct-2014', 'lunas', '141014-164911'),
(41, '45', 'Tue, 14-Oct-2014', 'lunas', '141014-220354'),
(42, '46', 'Tue, 14-Oct-2014', 'proses', '141014-221406'),
(43, '43', 'Sun, 26-Oct-2014', 'lunas', '261014-222410'),
(44, '47', 'Wed, 29-Oct-2014', 'lunas', '291014-135000'),
(45, '47', 'Sun, 15-Feb-2015', 'proses', '150215-175429'),
(46, '51', 'Wed, 06-May-2015', 'proses', '060515-134431'),
(47, '52', 'Mon, 01-Jun-2015', 'proses', '010615-202939'),
(48, '49', 'Mon, 18-Apr-2016', 'proses', '180416-231600'),
(49, '53', 'Thu, 21-Apr-2016', 'proses', '210416-211645');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `idpesan` int(4) NOT NULL auto_increment,
  `iduser` varchar(4) collate latin1_general_ci NOT NULL,
  `idbrg` varchar(4) collate latin1_general_ci NOT NULL,
  `idlap` varchar(4) collate latin1_general_ci NOT NULL,
  `status` varchar(10) collate latin1_general_ci NOT NULL,
  `tgl` varchar(30) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`idpesan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=126 ;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`idpesan`, `iduser`, `idbrg`, `idlap`, `status`, `tgl`) VALUES
(100, '44', '12', '40', 'lunas', 'Tue, 14-Oct-2014 16:48:37'),
(98, '43', '14', '39', 'lunas', 'Tue, 14-Oct-2014 15:46:33'),
(99, '44', '17', '40', 'lunas', 'Tue, 14-Oct-2014 16:48:34'),
(96, '43', '17', '39', 'lunas', 'Tue, 14-Oct-2014 15:46:24'),
(97, '43', '12', '39', 'lunas', 'Tue, 14-Oct-2014 15:46:27'),
(101, '44', '14', '40', 'lunas', 'Tue, 14-Oct-2014 16:48:40'),
(102, '45', '17', '41', 'lunas', 'Tue, 14-Oct-2014 22:03:27'),
(103, '45', '12', '41', 'lunas', 'Tue, 14-Oct-2014 22:03:30'),
(104, '46', '17', '42', 'proses', 'Tue, 14-Oct-2014 22:13:46'),
(105, '46', '12', '42', 'proses', 'Tue, 14-Oct-2014 22:13:50'),
(106, '43', ',idb', '43', 'lunas', 'Sun, 26-Oct-2014 22:23:35'),
(107, '43', ',idb', '43', 'lunas', 'Sun, 26-Oct-2014 22:23:53'),
(108, '47', '17', '44', 'lunas', 'Wed, 29-Oct-2014 13:48:50'),
(109, '47', '14', '44', 'lunas', 'Wed, 29-Oct-2014 13:49:02'),
(110, '47', '12', '44', 'lunas', 'Wed, 29-Oct-2014 13:49:26'),
(111, '47', ',idb', '45', 'proses', 'Sun, 15-Feb-2015 17:52:53'),
(112, '48', '25', '', 'proses', 'Mon, 16-Feb-2015 21:08:51'),
(113, '49', '25', '48', 'proses', 'Wed, 25-Feb-2015 15:46:26'),
(114, '49', '25', '48', 'proses', 'Wed, 25-Feb-2015 15:52:04'),
(115, '49', '17', '48', 'proses', 'Wed, 25-Feb-2015 16:00:37'),
(116, '49', '12', '48', 'proses', 'Wed, 25-Feb-2015 16:09:02'),
(117, '49', '12', '48', 'proses', 'Wed, 25-Feb-2015 16:14:03'),
(118, '50', '17', '', 'proses', 'Mon, 04-May-2015 16:22:40'),
(119, '50', '12', '', 'proses', 'Mon, 04-May-2015 16:22:53'),
(120, '51', '17', '', 'proses', 'Wed, 06-May-2015 13:41:37'),
(121, '51', '28', '', 'proses', 'Wed, 06-May-2015 13:41:46'),
(122, '51', '14', '', 'proses', 'Wed, 06-May-2015 13:41:56'),
(123, '52', '17', '', 'proses', 'Mon, 01-Jun-2015 20:20:29'),
(124, '49', '17', '48', 'proses', 'Mon, 18-Apr-2016 23:15:32'),
(125, '53', '29', '49', 'proses', 'Thu, 21-Apr-2016 21:14:20');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `idbrg` int(3) NOT NULL auto_increment,
  `tgl` varchar(30) collate latin1_general_ci NOT NULL,
  `namabrg` varchar(50) collate latin1_general_ci NOT NULL,
  `spek` text collate latin1_general_ci NOT NULL,
  `hargabrg` int(7) NOT NULL,
  `stok` int(2) NOT NULL,
  `gambar` varchar(255) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`idbrg`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=33 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idbrg`, `tgl`, `namabrg`, `spek`, `hargabrg`, `stok`, `gambar`) VALUES
(32, 'Wed, 20-Apr-2016 18:21:39', 'Pupuk Organik Sapi', '<p>Adalah pupuk organik hasil pengomposan kotoran sapi.<br />Sangat berguna untuk memperbaiki kesuburan tanah,struktur tanah dan biologi tanah.</p>\r\n<p><br />Merek : Trubus<br /><br />KELEBIHAN : <br /><br />.Mengandung unsur hara lengkap<br /><br />.Remah<br /><br />.Ramah lingkungan</p>', 26500, 20, './admin/gambar/1.jpg'),
(31, 'Wed, 20-Apr-2016 18:20:45', 'Good Compost', '<p><br />Sangat berguna untuk memperbaiki kesuburan tanah,struktur tanah dan biologi tanah.<br /><br />Merek : Trubus<br />KELEBIHAN : <br /><br />.Mengandung unsur hara lengkap<br /><br />.Remah<br /><br />.Ramah lingkungan</p>', 35000, 20, './admin/gambar/2.jpg'),
(30, 'Tue, 19-Apr-2016 12:16:01', 'Media Tanam Hias', '<p><br />Sangat berguna untuk memperbaiki kesuburan tanah,struktur tanah dan biologi tanah.<br /><br /><br />Merek : Trubus<br />Berat : -+ 15kg<br />KELEBIHAN : <br /><br />.Mengandung unsur hara lengkap<br /><br />.Remah<br /><br />.Ramah lingkungan</p>', 26500, 20, './admin/gambar/hias.jpg'),
(29, 'Tue, 19-Apr-2016 12:14:29', 'Media Tanam Trubus', '<p><br />Sangat berguna untuk memperbaiki kesuburan tanah,struktur tanah dan biologi tanah.<br /><br /><br />Merek : Trubus<br />Berat : -+ 15kg<br />KELEBIHAN : <br /><br />.Mengandung unsur hara lengkap<br /><br />.Remah<br /><br />.Ramah lingkungan</p>', 26500, 20, './admin/gambar/trubus.png');

-- --------------------------------------------------------

--
-- Table structure for table `shoping`
--

CREATE TABLE IF NOT EXISTS `shoping` (
  `idshop` int(4) NOT NULL auto_increment,
  `idbrg` int(4) NOT NULL,
  `iduser` int(4) NOT NULL,
  `tgl` varchar(30) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`idshop`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=149 ;

--
-- Dumping data for table `shoping`
--

INSERT INTO `shoping` (`idshop`, `idbrg`, `iduser`, `tgl`) VALUES
(135, 25, 48, 'Mon, 16-Feb-2015 21:08:51'),
(141, 17, 50, 'Mon, 04-May-2015 16:22:40'),
(142, 12, 50, 'Mon, 04-May-2015 16:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `voting`
--

CREATE TABLE IF NOT EXISTS `voting` (
  `bagus` int(5) NOT NULL,
  `jelek` int(5) NOT NULL,
  `tidaktahu` int(5) NOT NULL,
  `waktu` varchar(30) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `voting`
--

INSERT INTO `voting` (`bagus`, `jelek`, `tidaktahu`, `waktu`) VALUES
(132, 38, 46, 'Thu, 05-Nov-2009 15:44:45');
