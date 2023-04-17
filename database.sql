-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 12:31 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bimbel`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `jad_id` int(11) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `pembimbing` varchar(30) NOT NULL,
  `mata_pelajaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`jad_id`, `hari`, `pembimbing`, `mata_pelajaran`) VALUES
(1, 'Senin', '', 'Bahasa Indonesia'),
(2, 'Selasa', '', 'Bahasa Inggris'),
(3, 'Rabu', '', 'Matematika'),
(4, 'Kamis', '', 'IPA'),
(5, 'Jumat', '', 'IPS'),
(6, 'Sabtu', '', 'Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `mapel_data`
--

CREATE TABLE `mapel_data` (
  `mapel_id` int(11) NOT NULL,
  `namas` varchar(30) NOT NULL,
  `p1` int(30) NOT NULL,
  `p2` int(30) NOT NULL,
  `p3` int(30) NOT NULL,
  `p4` int(30) NOT NULL,
  `p5` int(30) NOT NULL,
  `p6` int(30) NOT NULL,
  `harga` int(20) NOT NULL,
  `total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel_data`
--

INSERT INTO `mapel_data` (`mapel_id`, `namas`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `harga`, `total`) VALUES
(2, '', 1, 0, 0, 1, 0, 0, 0, 0),
(3, '', 0, 0, 1, 1, 1, 0, 0, 0),
(4, '', 0, 0, 0, 1, 1, 0, 0, 0),
(5, '', 0, 0, 1, 1, 0, 0, 0, 0),
(6, '', 1, 1, 0, 1, 0, 0, 0, 0),
(7, '', 0, 0, 1, 1, 0, 0, 0, 0),
(8, '', 1, 1, 0, 0, 1, 0, 0, 0),
(9, '', 1, 1, 1, 0, 0, 1, 0, 0),
(10, '', 0, 1, 1, 0, 1, 1, 0, 0),
(11, '', 1, 1, 0, 1, 0, 0, 0, 0),
(12, '', 0, 0, 1, 0, 0, 1, 0, 0),
(13, '', 0, 0, 1, 0, 1, 1, 0, 0),
(15, '', 0, 0, 1, 1, 0, 0, 0, 0),
(16, '', 1, 0, 1, 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `lv` int(6) NOT NULL,
  `us` varchar(30) NOT NULL,
  `pw` varchar(30) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `ass` varchar(99) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `nip` int(20) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tingkat` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `lv`, `us`, `pw`, `nama`, `alamat`, `ass`, `nom`, `nip`, `hari`, `tingkat`) VALUES
(1, 3, 'rechmand', 'Ubimbel2424', 'Rechmand Ganteng', 'Tangerag City', '-', '08236452734234', 0, '-', '0'),
(2, 1, 'jonson', 'u', 'Jonson Eko', 'Lampung Barat', 'Lampung Barat', '081219496485', 0, '-', 'Tingkat 1'),
(3, 1, 'ahmad', 'u', 'Ahmad Dani', 'Cibadak', 'SMP Cibadak', '081243240735', 0, '-', 'Tingkat 1'),
(4, 1, 'bianca', 'u', 'Bianca Saputri', 'Merak', 'SMP Merak', '081251100243', 0, '-', 'Tingkat 1'),
(5, 1, 'renata', 'u', 'Renata Cantik', 'Cimone', 'SMP Cimone', '081268844251', 0, '-', 'Tingkat 2'),
(6, 1, 'leo', 'u', 'Leo Nardo', 'Cikupa', 'SMP Cikupa', '081285015843', 0, '-', 'Tingkat 1'),
(7, 1, 'beta', 'u', 'Beta Suryo', 'Batak', 'SMP Batak', '081286616893', 0, '-', 'Tingkat 3'),
(8, 1, 'dicky', 'u', 'Dicky Fernando', 'Cimone Selatan', 'SMP Cimone Selatan', '081286001337', 0, '-', 'Tingkat 3'),
(9, 1, 'akbar', 'u', 'Akbar Ramadhan', 'Tigaraksa', 'SMP Tigaraksa', '081285550385', 0, '-', 'Tingkat 3'),
(10, 1, 'nauval', 'u', 'Nauval Akbar', 'Balaraja', 'SMP Balaraja', '081296520528', 0, '-', 'Tingkat 2'),
(11, 1, 'adam', 'u', 'Adam Suryo', 'Pasar Kemis', 'SMP Pasar Kemis', '081377771761', 0, '-', 'Tingkat 1'),
(12, 1, 'arifin', 'u', 'Arifin Wira', 'Cikupa Barat', 'SMP Cikupa Bara', '081574465202', 0, '-', 'Tingkat 2'),
(13, 1, 'tino', 'u', 'Tino Anggara', 'Bitung Curug', 'SMP Bitung Curug', '082191323309', 0, '-', 'Tingkat 3'),
(15, 1, 'enda', 'u', 'Enda Renal', 'Tangeran Selatan', 'SMP Tangeran Selatan', '082116715460', 0, '-', 'Tingkat 3'),
(16, 1, 'bagas', 'u', 'Bagas Azizir', 'Pasar Modern', 'SMP Pasar Modern', '082330602071', 0, '-', 'Tingkat 2'),
(18, 2, 'lintang', 'u', 'Lintang Melita SPD', 'Jakarta Selatan', '', '082253041634', 2147483647, 'Rabu', '-'),
(19, 2, 'lumita', 'u', 'Lumita Angraini SPD', 'Jakarta Barat', '', '085329097347', 2147483647, 'Kamis', '-'),
(20, 2, 'andika', 'u', 'Andika Surya SKOM', 'Tangerang BSD', '', '083841212088', 2147483647, 'Sabtu', '-'),
(23, 3, 'admin', '^&^&hneuw&*^', 'admin', 'kota tangerang', '-', '0823534534534', 0, '-', '-'),
(24, 2, 'purwodadi', 'u', 'Purwodadi', 'jati', '', '08422546456', 2147483647, 'Selasa', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`jad_id`);

--
-- Indexes for table `mapel_data`
--
ALTER TABLE `mapel_data`
  ADD PRIMARY KEY (`mapel_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `jad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
