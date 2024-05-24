-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2024 at 09:33 AM
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
-- Database: `njajanupn`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rincian`
--

CREATE TABLE `rincian` (
  `id_rincian` int(12) NOT NULL,
  `id_tempat` int(12) NOT NULL,
  `tentang` text NOT NULL,
  `kisaran_harga` varchar(255) NOT NULL,
  `makanan` varchar(255) NOT NULL,
  `fitur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rincian`
--

INSERT INTO `rincian` (`id_rincian`, `id_tempat`, `tentang`, `kisaran_harga`, `makanan`, `fitur`) VALUES
(1, 1, 'A-Ngop (Andhok Plus Ngopi) merupakan coffee shop dan pujasera yang menyediakan berbagai macam pilihan makanan dan minuman. Tempat ini buka mulai pukul 00:00 - 24:00 (24 jam) sehingga cocok digunakan untuk nongkrong dan nugas.', '- minuman (3000 - 10000)\r\n- makanan (10000 - 20000)', '- aneka minuman\r\n- makanan ringan\r\n- makanan berat', '- wifi\r\n- toilet\r\n- charging station\r\n- mushola'),
(2, 2, 'Mixue adalah gerai es krim soft serve dan minuman teh asal China yang telah ekspansi ke Indonesia. Mixue memiliki lebih dari 300 gerai yang tersebar di seluruh Indonesia. Mixue merupakan istilah dalam bahasa Mandarin yang berarti madu dan salju', '8000 - 22000', '- es krim\r\n- milk tea\r\n- fruit tea\r\n- kopi', '- wifi\r\n- toilet\r\n'),
(3, 3, 'Tomoro Coffee menawarkan banyak pilihan menu bagi para pecinta produk coffee maupun non coffee. Tak hanya itu, ada pula menu makanan yang cocok jadi teman ngopi.', '- Tomoro Aren Latte (Rp 18,000)\n- Caffe Latte (Rp 22,000)\n- Cappuccino (Rp 22,000)\n- Tomoro Oat Latte (Rp 22,000)\n- Manuka Oat Latte (Rp 28,000)\n- Hojicha Oat Latte (Rp 28,000)\n- Matcha Latte (Rp 25,000)\n- Choco Croissant (Rp 10,000)\n- Cinnamon Ro', '- Tomoro Aren Latte \r\n- Caffe Latte \r\n- Cappuccino \r\n- Tomoro Oat Latte \r\n- Manuka Oat Latte \r\n- Hojicha Oat Latte \r\n- Matcha Latte \r\n- Choco Croissant \r\n- Cinnamon Roll \r\n- Tuna Mayo Panini ', '- wifi\r\n- toilet\r\n- reward untuk member'),
(4, 4, 'Patdua Coffee & Eatery berlokasi sangat dekat dengan kampus UPN Veteran Jawa Timur, karena hanya berjarak kurang lebih 23 meter saja. Di kafe ini, kamu bisa leluasa untuk chill maupun nugas, karena di sini selain tempatnya estetik juga nyaman tentunya. Ka', 'mulai dari Rp18 ribuan', '- aneka kopi\r\n- aneka makanan ringan', '- wifi\r\n- toilet\r\n- charging station\r\n- mushola'),
(5, 5, 'Memiliki tempat yang estetik, One Piece Coffee menjadi pilihan yang tepat untuk tempat hang out bareng teman yang dekat dengan kampus UPN Veteran Jawa Timur. Kafe ini memiliki tema yang unik, sesuai namanya coffe shop ini mengusung tema One Piece-salah sa', 'mulai dari Rp12 ribuan', '- aneka kopi\r\n- aneka makanan ringan', '- wifi\r\n- toilet\r\n- charging station\r\n- mushola\r\n- smoking area'),
(6, 6, 'Inilah cafe Instagramworthy di Surabaya yang tidak boleh kamu lewatkan. Bagi kalian yang nyari tempat nongkrong murah tapi tak murahan, disini tempatnya. Dari namanya saja \"Tampan\" merupakan representasi dari sebuah cafe yang menyajikan menu makanan dan m', '10000 - 20000', '- coffee\r\n- non-coffee beverages\r\n- food', '- wifi\r\n- smoking area\r\n- ruang vip\r\n- bisa reservasi\r\n- area parkir luas'),
(7, 7, 'Rahasia Art Space & Eatery merupakan kafe yang bernoansa folks dan homey, lokasinya yang terletak di dalam kompleks perumahan mampu memberikan nuansa yang tenang dan nyaman.', '13000 - 37000', '- aneka teh\r\n- kombucha\r\n- coffee\r\n- neutralizer\r\n- herbal\r\n- food & meals\r\n- secret menu', '- wifi\r\n- smoking area\r\n- area parkir');

-- --------------------------------------------------------

--
-- Table structure for table `tempat`
--

CREATE TABLE `tempat` (
  `id_tempat` int(12) NOT NULL,
  `nama_tempat` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `jam_operasional` varchar(255) NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tempat`
--

INSERT INTO `tempat` (`id_tempat`, `nama_tempat`, `kategori`, `alamat`, `telepon`, `jam_operasional`, `gambar`) VALUES
(1, 'Angop', 'Warkop', 'Jl. Raya Medokan Sawah No.I, Gunung Anyar, East Java', '081231014555', 'Senin - Minggu (00:00-24:00 WIB)', ''),
(2, 'Mixue Ice Cream & Tea', 'Kafe', 'Jl. Rungkut Madya No.213, Medokan Ayu, Kec. Rungkut, Surabaya, Jawa Timur, Indonesia', '-', 'Senin - Minggu (10:00-22:00 WIB)', ''),
(3, 'Tomoro Coffee', 'Kafe', 'Jl. Rungkut Madya No. 213D, Medokan Ayu, Rungkut, Surabaya', '081119285492', 'Senin - Minggu (07.00-22.00 WIB)', ''),
(4, 'Patdua Coffee & Eatery', 'Kafe', 'Jl. Rungkut Madya No.203, Rungkut Kidul, Kecamatan Rungkut, Surabaya', '-', 'Senin - Minggu (09.00-23.00 WIB)', ''),
(5, 'One Piece Coffee', 'Kafe', 'Jl. I Gusti Ngurah Rai No. 17, Gn. Anyar, Kecamatan Gn. Anyar, Surabaya', '-', 'Senin - Minggu (13.00-21.00 WIB)', ''),
(6, 'Tampan Mie & Coffee', 'Kafe', 'Jl. Rungkut Madya (Depan UPN), Rungkut, Surabaya', '081252916603', 'Senin - Minggu (08:00 - 24:00 WIB)', ''),
(7, 'Rahasia Art Space & Eatery', 'Kafe', 'Perumahan YKP, Blok PM No. 22', '085646188983', 'Senin - Minggu (13:00 - 21:00 WIB)', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rincian`
--
ALTER TABLE `rincian`
  ADD PRIMARY KEY (`id_rincian`),
  ADD KEY `idTempat` (`id_tempat`);

--
-- Indexes for table `tempat`
--
ALTER TABLE `tempat`
  ADD PRIMARY KEY (`id_tempat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rincian`
--
ALTER TABLE `rincian`
  MODIFY `id_rincian` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3009;

--
-- AUTO_INCREMENT for table `tempat`
--
ALTER TABLE `tempat`
  MODIFY `id_tempat` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2008;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
