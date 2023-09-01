-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2023 at 04:32 PM
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
-- Database: `ovba`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `ph_no` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `address`, `ph_no`, `email`, `password`, `cpassword`) VALUES
(1, 'admin', 'kinniya', 775525755, 'admin', '252525', '252525');

-- --------------------------------------------------------

--
-- Table structure for table `mechanic`
--

CREATE TABLE `mechanic` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `ph_no` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mechanic`
--

INSERT INTO `mechanic` (`id`, `name`, `location`, `ph_no`, `email`, `password`, `cpassword`) VALUES
(43, 'rifan', 'kinniya', 772545755, 'rifankny@gmail.com', '111111', '111111'),
(46, 'riyal', 'kurunagal', 778545955, 'riyal@gmail.com', '888888', '888888'),
(64, 'sakeel', 'kanthala', 2147483647, 'saki@gmail.com', '101010', '101010'),
(65, 'khan', 'colombo', 772545855, 'khan@gmail.com', '7878', '7878'),
(66, 'kamal', 'kandy', 778575655, 'kamal@gmail.com', '787878', '787878'),
(67, 'ajith', 'Batticalo', 778575255, 'ajith@gmail.com', '151515', '151515'),
(68, 'surya', 'Jaffna', 752545955, 'surya@gmail.com', '969696', '969696'),
(71, 'prakas', 'kinniya', 778545255, 'pra@gmail.com', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `ph_no` varchar(20) NOT NULL,
  `vhprblm` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `zip`, `ph_no`, `vhprblm`, `address`, `location`, `status`) VALUES
(49, 'ahsan', '', '', '', 'kinniya', 'kinniya', 'unapproved'),
(50, 'natheef', '', '', '', 'kurunagal', 'kurunagal', 'approve'),
(58, 'mahroof', '4541', '772267067', 'radiator boiling', 'colombo Zahira Schoo', 'colombo', 'unapproved'),
(59, 'amjath', '7878', '772545755', 'engine heat', 'Kanthala Damp', 'kanthala', 'approve'),
(60, 'arjun', '4545', '0789625455', 'pertol leak', 'Raja theater', 'Jaffna', 'approve'),
(61, 'kalil', '1012', '0778545255', 'kanthala', 'kanthala base hospit', 'kanthala', 'approve'),
(62, '', '', '', '', '', '', ''),
(63, '', '', '', '', '', '', ''),
(64, '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mechanic`
--
ALTER TABLE `mechanic`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mechanic`
--
ALTER TABLE `mechanic`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
