-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 04:19 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc_native_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `daftarID` int(8) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `prodi` varchar(35) NOT NULL,
  `pt` varchar(35) NOT NULL,
  `noHP` varchar(14) NOT NULL,
  `cv` varchar(35) NOT NULL,
  `zip` varchar(35) NOT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`daftarID`, `email`, `nama`, `nim`, `prodi`, `pt`, `noHP`, `cv`, `zip`, `status`) VALUES
(14, 'kanzulf.16@gmail.com', 'Kanzul Fiqri', '192410102035', 'Teknologi Informasi', 'Universitas Jember', '082132618941', 'https://www.youtube.com/watch?v=ni5', 'https://www.youtube.com/watch?v=ni5', 'diterima'),
(17, 'Ziu Zahiyah', 'ziu21empat@gmail.com', '19291219731937', 'kedokteran', 'Universitas Jember', '009128197313', 'yt.com', 'fb.com', 'diterima'),
(18, 'kanzulf.16@gmail.com', 'Kanzul Fiqri', '19241010203520E', 'a', 'Universitas Jember', '009128197313', 'google.com', 'https://www.youtube.com/watch?v=ni5', ''),
(19, 'kanzulf.16@gmail.com', 'asd', '19241010203520E', 'a', 'Universitas Jember', '009128197313', 'google.com', 'sdvsdvs', ''),
(20, 'kanzulf.16@gmail.com', 'asd', '192410102035', 'a', 'Universitas Jember', '009128197313', 'http://link.ui', 'https://www.youtube.com/watch?v=ni5', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`daftarID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `daftarID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
