-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2019 at 02:42 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tempat_hiburan`
--

CREATE TABLE `tempat_hiburan` (
  `id` varchar(20) NOT NULL,
  `nama_tempat` varchar(30) DEFAULT NULL,
  `lokasi_wisata` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempat_hiburan`
--

INSERT INTO `tempat_hiburan` (`id`, `nama_tempat`, `lokasi_wisata`) VALUES
('101', 'Taman Nasional Way Kambas', 'Lampung Timur'),
('102', 'Pantai Pasir Putih', 'Desa Tarahan, Lampung Selatan'),
('103', 'Air Terjun Lembah Pelangi', 'Desa Sukamaju Kec. Ulu Belu, Kab. Tanggamus'),
('104', 'Taman Kupu-Kupu Gita Persada', 'Desa Tanjung Manis Kemiling, Bandar Lampung'),
('105', 'Pantai Teluk Kiluan', 'Desa Kiluan Negeri, Kec. Kelumbayan, Kab. Tanggamu'),
('106', 'Pantai Mutun', 'Kec. Padang Cermin, Kab. Pesawaran'),
('107', 'Taman Wisata Bumi Kedaton', 'Teluk Betung, Bandar Lampung'),
('108', 'Air Terjun Curup Tujuh', 'Lampung Tengah'),
('109', 'Pulau Pahawang', 'Kab. Pesawaran, Lampung Selatan'),
('110', 'Bendungan Batu Tegi', 'Tanggamus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tempat_hiburan`
--
ALTER TABLE `tempat_hiburan`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
