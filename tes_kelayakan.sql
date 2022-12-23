-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 06:33 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes_kelayakan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kendaraan`
--

CREATE TABLE `data_kendaraan` (
  `id` int(50) NOT NULL,
  `merek` varchar(100) DEFAULT NULL,
  `pembuat` varchar(100) DEFAULT NULL,
  `tipe` varchar(100) DEFAULT NULL,
  `jenis` varchar(100) DEFAULT NULL,
  `chassis_no` varchar(100) DEFAULT NULL,
  `engine_no` varchar(100) DEFAULT NULL,
  `model` varchar(10) DEFAULT NULL,
  `letak_motor` varchar(10) DEFAULT NULL,
  `silinder` varchar(10) DEFAULT NULL,
  `rem` int(10) DEFAULT NULL,
  `rangka` int(10) DEFAULT NULL,
  `emisi` int(10) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kendaraan`
--

INSERT INTO `data_kendaraan` (`id`, `merek`, `pembuat`, `tipe`, `jenis`, `chassis_no`, `engine_no`, `model`, `letak_motor`, `silinder`, `rem`, `rangka`, `emisi`, `status`, `tanggal`) VALUES
(1, 'Carry', 'PT. Suzuki Indonesia', 'Angkutan Barang', 'Angkutan Pedesaan', 'UU77810Q9S80', '8877711189872', 'OHV', 'FR', '4', 65, 56, 50, 'Peremajaan', '2017-04-24'),
(2, 'HR-V Prestige', 'Honda Indonesia', 'Angkutan Penumpang', 'Angkutan Kota', 'UUTR99987AAUTR', '8871653999111UOQ', 'DOHC', 'FR', '4', 44, 76, 70, 'Layak', NULL),
(3, 'BMW TI8', 'PT. BMW Indonesia', 'Angkutan Barang', 'Angkutan Kota', '88UUIDJAOZUJ', '88726111776XX1', 'DOHC', 'FR', '4', 80, 87, 77, 'Tidak', NULL),
(4, 'BMW I2', 'PT. BMW Indonesia', 'Angkutan Barang', 'Angkutan Kota', '789YHJI89UYH', '098UYIJNHU8U', 'DOHC', 'FR', '4', 70, 70, 70, 'Layak', NULL),
(5, 'Grand Max', 'PT. Daihatsu Indoensia', 'Angkutan Barang', 'Angkutan Kota', '888HJHUAYA7820AJ', '88772J2JAUISMXO', 'DOHC', 'FR', '4', 66, 60, 40, 'Tidak', NULL),
(6, 'BMW I3', 'PT. BMW Indonesia', 'Angkutan Barang', 'Angkutan Kota', '98890AJA02W92Y', '8872618SDUAIDJ', 'DOHC', 'FR', '4', 66, 67, 80, 'Tidak', NULL),
(7, 'Xenia 2011', 'PT. Daihatsu Indonesia', 'Angkutan Barang', 'Angkutan Kota', '789YHJI89UYH', '098UYIJNHU8U', 'DOHC', 'FR', '4', 50, 88, 77, 'Tidak', NULL),
(9, 'Rubicon', 'Rubicon Corp', 'Angkutan Penumpang', 'Angkutan Kota', '6677TUYU61188', '887GJOOO98272112', 'DOHC', 'FR', '5', 78, 77, 80, 'Tidak', '2017-04-25'),
(10, 'Rubicon PRESTIGE', 'Rubicon Corp', 'Angkutan Penumpang', 'Angkutan Kota', 'YY887761JKLAAA', '88UUAI11190XL', 'DOHC', 'FR', '5', 78, 77, 70, 'Layak', NULL),
(11, 'Rubicon 2017', 'Rubicon Corp', 'Angkutan Penumpang', 'Angkutan Kota', '88UYTTQQQ1111987A', '8877111909111', 'DOHC', 'FR', '5', 78, 77, 80, 'Tidak', NULL),
(12, 'Rubicon 2011', 'Rubicon Corp', 'Angkutan Penumpang', 'Angkutan Kota', '8890AUAUW92211', '8876111AAUT8910', 'DOHC', 'FR', '5', 78, 77, 80, 'Tidak', '2017-04-25'),
(13, 'Sonic', 'SONIC Indonesia', 'Angkutan Barang', 'Angkutan Kota', '678908HGVGHY678', '98YUI87YGBNJU78', 'DOHC', 'FR', '4', 60, 69, 57, 'Tidak', NULL),
(14, 'BMW i3', 'PT BWM Indonesa', 'Angkutan Penumpang', 'Angkutan Pedesaan', '987GUHIJOIU8IOI8U', '9IJNU8IJHGYU8', 'DOHC', 'FF', '4', 76, 67, 80, 'Tidak', '2017-04-24'),
(15, 'Jazz GE9', 'Honda Indonesia', 'Angkutan Penumpang', 'Angkutan Pedesaan', '9876678IJHBYUJ', '987YHJIUHBHU8U', 'OHV', 'FF', '4', 50, 67, 66, 'Layak', NULL),
(16, 'Jazz RS 2011', 'Honda Indonesia', 'Angkutan Penumpang', 'Angkutan Pedesaan', 'UU891777AAA11', '7788Q7111A89A', 'OHV', 'FF', '4', 50, 67, 66, 'Layak', NULL),
(17, 'Carry', 'PT. Suzuki Indonesia', 'Angkutan Penumpang', 'Angkutan Kota', '776YUAKDL88119', 'SCA1199000CCOPAUQ', 'DOHC', 'FF', '4', 40, 50, 66, 'Tidak', NULL),
(18, 'Carry 2011', 'PT. Suzuki Indonesia', 'Angkutan Penumpang', 'Angkutan Kota', 'WQ776111OUI1', 'DSC2211098YYU', 'DOHC', 'FF', '4', 20, 50, 66, 'Tidak', '2017-04-25'),
(19, 'Civic T8', 'Honda Indonesia', 'Angkutan Penumpang', 'Angkutan Pedesaan', '88UAIAY11187618', '876611JUS99A8A', 'DOHC', 'FR', '2', 70, 70, 70, 'Layak', '2017-04-24'),
(20, 'Grand Max PICKUP', 'PT. Daihatsu Indonesia', 'Angkutan Barang', 'Angkutan Kota', '99888UUIO1190', '99011JJKDST11542', 'OHV', 'FF', '4', 71, 50, 70, 'Peremajaan', NULL),
(21, 'Carry', 'Honda Indonesia', 'Angkutan Penumpang', 'Angkutan Pedesaan', '0987890OJHBGYUI', '887GJOOO98272112', 'OHV', 'RR', '4', 66, 77, 70, 'Layak', NULL),
(22, 'Grand Livina', 'Nissan', 'Angkutan Penumpang', 'Angkutan Kota', '12e434', '12323445', 'DOHC', 'FF', '4', 70, 70, 40, 'Peremajaan', '2022-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama`, `link`) VALUES
(1, 'Home', 'index.php'),
(2, 'Uji Kendaraan', 'input.php'),
(3, 'Data Mobil', 'data_kendaraan.php'),
(4, 'Rule Fuzzy', 'data_rule.php'),
(5, 'Logout', 'proses_login.php?action=logout');

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE `rule` (
  `id` int(10) NOT NULL,
  `rem` varchar(50) DEFAULT NULL,
  `rangka` varchar(50) DEFAULT NULL,
  `emisi` varchar(50) DEFAULT NULL,
  `hasil` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`id`, `rem`, `rangka`, `emisi`, `hasil`) VALUES
(1, 'rendah', 'rendah', 'rendah', 'tidak'),
(2, 'rendah', 'rendah', 'sedang', 'tidak'),
(3, 'rendah', 'rendah', 'tinggi', 'peremajaan'),
(4, 'rendah', 'sedang', 'rendah', 'peremajaan'),
(5, 'rendah', 'sedang', 'sedang', 'peremajaan'),
(6, 'rendah', 'sedang', 'tinggi', 'peremajaan'),
(7, 'rendah', 'tinggi', 'rendah', 'tidak'),
(8, 'rendah', 'tinggi', 'sedang', 'peremajaan'),
(9, 'rendah', 'tinggi', 'tinggi', 'peremajaan'),
(10, 'sedang', 'rendah', 'rendah', 'tidak'),
(11, 'sedang', 'rendah', 'sedang', 'peremajaan'),
(12, 'sedang', 'rendah', 'tinggi', 'peremajaan'),
(13, 'sedang', 'sedang', 'rendah', 'peremajaan'),
(14, 'sedang', 'sedang', 'sedang', 'layak'),
(15, 'sedang', 'sedang', 'tinggi', 'layak'),
(16, 'sedang', 'tinggi', 'rendah', 'peremajaan'),
(17, 'sedang', 'tinggi', 'sedang', 'peremajaan'),
(18, 'sedang', 'tinggi', 'tinggi', 'layak'),
(19, 'tinggi', 'rendah', 'rendah', 'tidak'),
(20, 'tinggi', 'rendah', 'sedang', 'peremajaan'),
(21, 'tinggi', 'rendah', 'tinggi', 'peremajaan'),
(22, 'tinggi', 'sedang', 'rendah', 'peremajaan'),
(23, 'tinggi', 'sedang', 'sedang', 'layak'),
(24, 'tinggi', 'sedang', 'tinggi', 'layak'),
(25, 'tinggi', 'tinggi', 'rendah', 'layak'),
(26, 'tinggi', 'tinggi', 'sedang', 'layak'),
(27, 'tinggi', 'tinggi', 'tinggi', 'layak');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(10) NOT NULL,
  `status` varchar(100) NOT NULL,
  `min` int(20) DEFAULT NULL,
  `max` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`, `min`, `max`) VALUES
(1, 'layak', 60, 80),
(2, 'peremajaan', 20, 80),
(3, 'tidak', 20, 40);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `fullname` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `fullname`, `email`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 1),
(2, 'adiholick', 'A Nugroho', 'adi@gmail.com', 'greentea', 1),
(3, 'bambang', 'bambang tri', 'bamban@gmail.com', 'bambang', 1),
(4, 'developer', 'developer', 'developer', 'developer', 1),
(5, 'toti', 'Toti', 'Toti@gmail.com', '1234', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kendaraan`
--
ALTER TABLE `data_kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kendaraan`
--
ALTER TABLE `data_kendaraan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `rule`
--
ALTER TABLE `rule`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
