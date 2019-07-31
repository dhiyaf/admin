-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2019 at 01:13 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saham`
--

-- --------------------------------------------------------

--
-- Table structure for table `classifier`
--

CREATE TABLE `classifier` (
  `id` int(15) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classifier`
--

INSERT INTO `classifier` (`id`, `kode`, `nama`) VALUES
(1, 'NBTree ', 'Naive Bayes Tree'),
(2, 'RFg', 'Random Forest'),
(3, 'LADTee', 'LADTree'),
(5, 'RF', 'Random Forest Tree'),
(9, 'pkl', 'pekalongannn'),
(10, 'SMG', 'Semarang'),
(11, 'lmp', 'lampung');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(15) NOT NULL,
  `id_classifier` int(15) NOT NULL,
  `id_subsektor` int(15) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `website` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `id_classifier`, `id_subsektor`, `kode`, `nama`, `alamat`, `website`, `deskripsi`) VALUES
(1, 0, 2, 'ESSA', 'PT. SURYA ESA PERKASA', 'Jl. abc Palembang', 'www.essa.com', '     Pada suatu hari, terjadilah kelaparan di sebuah pulau yang penduduknya kebanyakan di huni oleh para Harimau. Mereka sangat kelaparan, karena semakin hari tidak ada hewan yang dapat mereka mangsa. Akhirnya, Raja Harimau mengutus Panglima'),
(2, 0, 3, 'ELSA', 'PT. ELSA ELFA', 'Jl. dnh Jakarta', 'www.elsa.com', ' Perusahaan elsa merupakan blablabla'),
(3, 0, 3, 'PTBA', 'Persatuan Batu Bara', 'Jl. Merdeka, Surabaya', 'www.ptba.com', ' perusahaan blablabla'),
(4, 0, 4, 'TPA', 'Tempat Pembuangan Anak', 'Jl. Antah Berantah', 'www.anak.com', ' blablabla'),
(5, 0, 2, 'MEDC', 'Medco JK', 'Indonesia', 'www.medc.com', ' blablabla'),
(18, 0, 1, 'erf', 'efdef', 'sedew', 'wedwed', 'wredwre'),
(20, 0, 0, 'coba', 'apa', 'saja', 'yang', 'penting senang');

-- --------------------------------------------------------

--
-- Table structure for table `subsektor`
--

CREATE TABLE `subsektor` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subsektor`
--

INSERT INTO `subsektor` (`id`, `nama`) VALUES
(1, 'Batubara'),
(2, 'Minyak Bumi & Gas'),
(3, 'Logam & Mineral Lainnya'),
(4, 'Batu-Batuan');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_company`
-- (See below for the actual view)
--
CREATE TABLE `view_company` (
`id` int(15)
,`kode` varchar(100)
,`nama` varchar(100)
,`subsektor` varchar(50)
,`alamat` varchar(250)
,`website` varchar(100)
,`deskripsi` text
);

-- --------------------------------------------------------

--
-- Structure for view `view_company`
--
DROP TABLE IF EXISTS `view_company`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_company`  AS  select `a`.`id` AS `id`,`a`.`kode` AS `kode`,`a`.`nama` AS `nama`,`b`.`nama` AS `subsektor`,`a`.`alamat` AS `alamat`,`a`.`website` AS `website`,`a`.`deskripsi` AS `deskripsi` from (`company` `a` left join `subsektor` `b` on(`a`.`id_subsektor` = `b`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classifier`
--
ALTER TABLE `classifier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subsektor`
--
ALTER TABLE `subsektor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classifier`
--
ALTER TABLE `classifier`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `subsektor`
--
ALTER TABLE `subsektor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subsektor`
--
ALTER TABLE `subsektor`
  ADD CONSTRAINT `subsektor_ibfk_1` FOREIGN KEY (`id`) REFERENCES `company` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
