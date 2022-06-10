-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 01:31 AM
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
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Fauzi Ilyas Nuryadi', 'admin', '827ccb0eea8a706c4c34a16891f84e7b'),
(8, 'Kiritod', 'kirito', '0f1d8ced8b8821476ba4f8db915df1d1');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` int(50) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `gambar_produk` varchar(100) NOT NULL,
  `status_produk` tinyint(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `deskripsi_produk`, `gambar_produk`, `status_produk`, `date_created`) VALUES
(42, 'Figure Kirito Alicization', 1500000, '<p>Classification: EXQ Figure<br />Origin: Sword Art Online: Alicization<br />Character: Kirito<br />Company: Banpresto As Manufacturer<br />Materials: ABS, PVC<br />Scale &amp; Dimensions: H=23cm</p>', 'produk1654076502.jpeg', 1, '2022-06-10 23:16:44'),
(43, 'Action Figure Saber Fate', 1000000, '<p>Model : Action Figure PVC 1/7 Scale Alter Fate Stay Night Saber Dress Code<br />Material : PVC<br />Detail &amp; Cat : High Quality<br />Tinggi : 24 cm<br />Kemasan : Box<br />Ketersediaan Stok : Terbatas ( Grab it Fast )<br />Packing : Free Bubblewrap + Kardus Pelapis<br />PRODUK RECAST/TIDAK ORIGINAL<br /><br /><br />NOTE : barang ready siap kirim , packing aman kualitas detail dan warna terjamin OK !!!<br />&nbsp;</p>', 'produk1654256326.jpg', 1, '2022-06-03 11:38:46'),
(45, 'Action Figure Saber Fate Dress Code', 1200000, '<p>Model : Action Figure PVC 1/7 Scale Alter Fate Stay Night Saber Dress Code<br />Material : PVC<br />Detail &amp; Cat : High Quality<br />Tinggi : 24 cm<br />Kemasan : Box<br />Ketersediaan Stok : Terbatas ( Grab it Fast )<br />Packing : Free Bubblewrap + Kardus Pelapis<br />Original</p>', 'produk1654605584.jpg', 1, '2022-06-10 23:15:50'),
(46, 'Action Figure Kirito Ordinal Scale', 8500000, '<p>Material : PVC<br />Detail : High Quality<br />Tinggi : 25 cm<br /><strong>Original</strong></p>', 'produk1654903079.jpg', 1, '2022-06-10 23:24:37'),
(47, 'Figure Kirito GGO Season 2', 8500000, '<p>Kondisi: Baru<br />Berat: 813 Gram<br />Waktu Preorder: 30 Hari<br />Kategori: Action Figure<br />Etalase: Action Figure</p><p>From Medicom Toy. The hero of Sword Art Online 2 becomes a Real Action Hero! Kirito appears as he did in the Gun Gale Online game during the series&#39; second season with a realistic costume, photon sword (with replaceable clear parts), FN Five Seven pistol, multiple hands and facial expressions and a movable stand!.</p>', 'produk1654903239.jpg', 1, '2022-06-10 23:20:39'),
(48, 'Action Figure Asuna (Aincrad Ver)', 5000000, '<p>Kondisi: Baru<br />Berat: 500 Gram<br />Kategori: Action Figure<br />Etalase: Semua Etalase<br />Material : PVC<br />Tinggi : 25 cm<br />Barang Original</p>', 'produk1654903429.jpg', 1, '2022-06-10 23:23:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
