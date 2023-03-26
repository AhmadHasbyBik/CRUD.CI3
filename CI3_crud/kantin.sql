-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 11:00 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kantin`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahsiswa`
--

CREATE TABLE `mahsiswa` (
  `npm` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `angkatan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahsiswa`
--

INSERT INTO `mahsiswa` (`npm`, `nama`, `prodi`, `angkatan`) VALUES
('123123', 'MAPAN KEDANA', 'BISNIS', 2019),
('2008123', 'IMAM BUTET', 'INFORMATIKA', 2020),
('2008124', 'ABU YAYAN', 'AGRIBISNIS', 2019),
('200853', 'ABDL SANET', 'ALQURAN', 2018),
('202213', 'ABAH BAHROTEK', 'ALQURAN', 2015),
('202231', 'AHMAD HILWA', 'HADITS', 2021),
('202313', 'ABDUL GEPREK', 'SISTEM INFORMASI', 2021),
('202321', 'KAKAK MEMET', 'KIMIA', 2016),
('202324', 'ABU LAHAB', 'BISNIS', 2020),
('20232423', 'KOLID CIBLEK', 'SAINS DATA', 2016),
('20329', 'YAKEPUR', 'INFORMATIKA', 2018),
('2081023', 'IMAM BIDIN', 'ALQURAN', 2019),
('21212', 'NEYMAR DA SILVA', 'INFORMATIKA', 2015);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahsiswa`
--
ALTER TABLE `mahsiswa`
  ADD PRIMARY KEY (`npm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
