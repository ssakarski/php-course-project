-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 01:08 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kursova`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brandName` varchar(30) COLLATE utf32_bin NOT NULL,
  `brandCountry` varchar(30) COLLATE utf32_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brandName`, `brandCountry`) VALUES
(30, 'HP', 'USA'),
(36, 'Brother', 'Japan'),
(37, 'Canon', 'Japan'),
(38, 'Samsung', 'South Korea'),
(39, 'Epson', 'Japan');

-- --------------------------------------------------------

--
-- Table structure for table `printer`
--

CREATE TABLE `printer` (
  `id` int(11) NOT NULL,
  `brandID` int(11) NOT NULL,
  `model` varchar(30) COLLATE utf32_bin NOT NULL,
  `type` varchar(30) COLLATE utf32_bin NOT NULL,
  `pagesPerMin` int(11) NOT NULL,
  `pagesPerCartridge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `printer`
--

INSERT INTO `printer` (`id`, `brandID`, `model`, `type`, `pagesPerMin`, `pagesPerCartridge`) VALUES
(3, 30, '93-pl13', 'matrix', 42, 455),
(4, 30, '17t-12', 'laser', 123, 333),
(5, 38, 'Samsonite', 'inkjet', 45, 333),
(6, 36, 'B19-R25', 'laser', 33, 222);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf32_bin NOT NULL,
  `password` varchar(32) COLLATE utf32_bin NOT NULL,
  `email` varchar(30) COLLATE utf32_bin NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `type`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@pw.com', 1),
(7, 'ungabunga', 'e10adc3949ba59abbe56e057f20f883e', 'hello@bg.bg', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `printer`
--
ALTER TABLE `printer`
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
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `printer`
--
ALTER TABLE `printer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
