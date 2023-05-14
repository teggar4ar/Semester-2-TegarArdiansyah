-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2023 at 03:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id`, `nama`) VALUES
(789, 'smartphone'),
(800, 'komputer & aksesoris'),
(801, 'fotografi');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_pemesan` varchar(45) DEFAULT NULL,
  `alamat_pemesan` varchar(45) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `jumlah_pesanan` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `produk_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `tanggal`, `nama_pemesan`, `alamat_pemesan`, `no_hp`, `email`, `jumlah_pesanan`, `deskripsi`, `produk_id`) VALUES
(1, '2023-05-02', 'smartphone', 'daaxacx', '090910893191', 'pepeepe@gmail.com', 1, 'scscsc', 11),
(3, '2023-05-15', 'sasa', 'kajxnajkcnakjca', '45353535', 'mqe@gmail.com', 1, 'peaaaa', 11),
(790, '2023-05-02', 'kankad', 'SCJNSC', '1090129102', 'klamskadmk@gmail.com', 1, 'SKCMSKC', 11),
(791, '2023-05-02', 'kankad', 'SCJNSC', '1090129102', 'klamskadmk@gmail.com', 1, 'SKCMSKC', 11),
(792, '2023-05-02', 'kankad', 'SCJNSC', '1090129102', 'klamskadmk@gmail.com', 1, 'SKCMSKC', 11),
(793, '2023-05-02', 'sd', 'wdwd', '1212', 'add@gmail.com', 1, 'wdwd', 11),
(802, '2023-05-02', 'jsbdjs', 'uhdwjdg', '817391739', 'kwdnwkdnbw@gmail.com', 3, 'owjmlwkfnlknfw', 16),
(803, '2023-05-04', 'romli', 'jsdhksjdbjskd', '9829372837', 'ksndksnd@gmail.com', 2, 'wldmlwdmn', 12),
(804, '2023-05-04', 'romli', 'jsdhksjdbjskd', '9829372837', 'ksndksnd@gmail.com', 2, 'wldmlwdmn', 12),
(806, '2023-05-03', 'awwaww', 'ajnjadhjadh', '8178718317', 'asnajsnjan@gmail.com', 4, 'axaxax', 11);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga_jual` double DEFAULT NULL,
  `harga_beli` double DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `min_stok` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `kategori_produk_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama`, `harga_jual`, `harga_beli`, `stok`, `min_stok`, `deskripsi`, `kategori_produk_id`) VALUES
(11, '20', 'AirPods', 1799000, 1500000, 6, 2, 'Dengan waktu bicara yang optimal dan terobosan teknologi, dilengkapi Casing Pengisian Daya, AirPods menghadirkan pengalaman headphone nirkabel yang tak tertandingi.', 800),
(12, '21', 'Samsung', 12000000, 11500000, 30, 5, 'Konfirmasi warna sebelum order ( CANTUMKAN WARNA DI NOTED )', 789),
(13, '22', 'JBL', 3499000, 3200000, 6, 2, 'The Tune 510BT wireless headphones feature renowned JBL Pure Bass sound, which can be found in the most famous venues all around the world. ', 800),
(14, '23', 'EOS', 133000000, 129000000, 5, 1, 'Canon menghadirkan kamera DSLR EOS entry-level generasi terbarunya yaitu EOS 3000D. Dengan dibekali prosesor gambar DIGIG 4+ serta sensor APS-C CMOS 18 megapiksel untuk EOS 3000D,', 801),
(15, '24', 'Redmi Not 12 Pro', 1499000, 1300000, 8, 2, 'Jaringan & Konektivitas Mendukung 5G ganda ', 789),
(16, '25', 'Asus ROG', 14000000, 13500000, 5, 2, 'ASUS TUF Gaming F15  FX506HC-I535B6T-O11 GraphiteBlack', 800);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produk_id` (`produk_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_produk_id` (`kategori_produk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=802;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=810;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`kategori_produk_id`) REFERENCES `kategori_produk` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
