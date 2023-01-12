-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 04:36 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datapelajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `infopelajar`
--

CREATE TABLE `infopelajar` (
  `id` int(3) NOT NULL,
  `nondp` int(9) NOT NULL,
  `namapelajar` varchar(50) NOT NULL,
  `nokp` varchar(50) NOT NULL,
  `jantina` varchar(50) NOT NULL,
  `nohp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infopelajar`
--

INSERT INTO `infopelajar` (`id`, `nondp`, `namapelajar`, `nokp`, `jantina`, `nohp`) VALUES
(232210332, 23221157, 'AINA NAJWA BINTI AMRAN', '030605101400', 'PEREMPUAN', '016225442');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infopelajar`
--
ALTER TABLE `infopelajar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `infopelajar`
--
ALTER TABLE `infopelajar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232210333;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
