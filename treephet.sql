-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 09, 2024 at 06:33 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `treephet`
--

-- --------------------------------------------------------

--
-- Table structure for table `treephet_admin`
--

CREATE TABLE `treephet_admin` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nickname` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treephet_admin`
--

INSERT INTO `treephet_admin` (`id`, `username`, `password`, `nickname`) VALUES
(1, 'arm17', '1234', 'admin11'),
(2, 'arm16', '1234', 'admin12');

-- --------------------------------------------------------

--
-- Table structure for table `treephet_system`
--

CREATE TABLE `treephet_system` (
  `id` int(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(99) NOT NULL,
  `nickname` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `phone` varchar(99) NOT NULL,
  `sex` varchar(99) NOT NULL,
  `age` varchar(99) NOT NULL,
  `admin` enum('admin','user','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treephet_system`
--

INSERT INTO `treephet_system` (`id`, `username`, `password`, `nickname`, `email`, `phone`, `sex`, `age`, `admin`) VALUES
(2, 'root', '1234', 'aaa', 'prommachonticha3231@gmail.com', '0999999999', 'ชาย', '12', 'user'),
(5, 'roblox', '1234', 'www', 'prommachonticha3231@gmail.com', '0999999999', 'ชาย', '12', 'user'),
(6, 'y223', '21', 'www', 'prommachonticha3231@gmail.com', '0999999999', 'ชาย', '12', 'user'),
(7, 'tree', '21', 'www', 'prommachonticha3231@gmail.com', '0999999999', 'ชาย', '12', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `treephet_admin`
--
ALTER TABLE `treephet_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treephet_system`
--
ALTER TABLE `treephet_system`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `treephet_admin`
--
ALTER TABLE `treephet_admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `treephet_system`
--
ALTER TABLE `treephet_system`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
