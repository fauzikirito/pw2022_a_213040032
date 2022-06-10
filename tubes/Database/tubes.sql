-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 12:59 AM
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
(1, 'Fauzi Ilyas Nuryadi', 'admin', '821c555bd3c5c9b949c00722bd993f45'),
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
(16, 'Logo', 5000, '<p>Logo Terbaik</p>', 'Logo.jpg', 1, '2022-06-01 10:46:40'),
(41, 'Crop', 120000, '<p>Duar!</p>', 'produk1654076183.png', 1, '2022-06-01 11:09:49'),
(42, 'Figure Kirito', 1500000, '<p>Figure Kirito</p>', 'produk1654076502.jpeg', 1, '2022-06-01 09:53:16'),
(43, 'Action Figure Saber Fate', 1000000, '<p>Model : Action Figure PVC 1/7 Scale Alter Fate Stay Night Saber Dress Code<br />Material : PVC<br />Detail &amp; Cat : High Quality<br />Tinggi : 24 cm<br />Kemasan : Box<br />Ketersediaan Stok : Terbatas ( Grab it Fast )<br />Packing : Free Bubblewrap + Kardus Pelapis<br />PRODUK RECAST/TIDAK ORIGINAL<br /><br /><br />NOTE : barang ready siap kirim , packing aman kualitas detail dan warna terjamin OK !!!<br />&nbsp;</p>', 'produk1654256326.jpg', 1, '2022-06-03 11:38:46'),
(44, 'dawda', 111, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer scelerisque massa lorem, ut mattis lacus tincidunt vitae. Phasellus ullamcorper urna et enim auctor commodo. Vivamus id vestibulum dolor. Duis bibendum tristique augue. Vestibulum varius ornare risus, sed ornare leo faucibus vitae. Integer aliquam enim sit amet magna mollis, ut semper quam convallis. Vivamus non imperdiet nunc. Proin vitae arcu at felis iaculis porta viverra ut ante. Vivamus tempor tellus eleifend commodo vestibulum. Quisque finibus congue velit sagittis ornare. Pellentesque mollis libero nulla, et hendrerit felis congue id. Nunc feugiat blandit luctus. Cras velit urna, lobortis ac accumsan at, egestas eu ligula.</p><p>Nam bibendum faucibus rhoncus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque ultrices tellus enim, in ornare tortor vulputate et. Fusce quis est posuere lectus bibendum convallis. Nulla convallis suscipit enim sit amet malesuada. Curabitur rhoncus diam a faucibus consectetur. Nullam faucibus eros id ante imperdiet aliquam.</p>', 'produk1654236909.png', 1, '2022-06-03 10:50:32'),
(45, 'adw', 10, '<p>dawda</p>', 'produk1654605584.jpg', 1, '2022-06-07 12:39:44');

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
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
