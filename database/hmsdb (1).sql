-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 01:28 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'adminwayua', 'adminwayua');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `age` int(200) NOT NULL,
  `weight` int(40) NOT NULL,
  `phone` int(50) NOT NULL,
  `address` varchar(40) NOT NULL,
  `specialist` varchar(40) NOT NULL,
  `medcondition` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `fullname`, `age`, `weight`, `phone`, `address`, `specialist`, `medcondition`) VALUES
(1, 'admin', 16, 16, 701390723, 'box 36 kathonzweni', '', 'medcondition'),
(2, 'admin', 16, 16, 701390723, 'box 36 kathonzweni', '', 'medcondition'),
(3, 'admin', 45, 16, 701390723, '345', '', 'medcondition'),
(4, 'admin', 45, 16, 701390723, '345', '', 'medcondition'),
(5, 'jackline', 34, 0, 701390723, 'rtrtt', '', 'medcondition'),
(6, 'admin', 34, 34, 32, 'ffgfg', '', 'medcondition'),
(7, 'jackline', 5, 16, 701390723, 'cccc', '', 'medcondition'),
(8, 'equ', 1, 34, 701390723, 'hnh', '', 'medcondition'),
(9, 'equ', 1, 34, 701390723, ' b', '', 'medcondition');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(40) NOT NULL,
  `age` varchar(50) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `specialization` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `username`, `email`, `address`, `age`, `phone`, `specialization`, `password`) VALUES
(1, '', 'connie@gmail.com', '', '23', '0701390723', '', '0714684683');

-- --------------------------------------------------------

--
-- Table structure for table `logintb`
--

CREATE TABLE `logintb` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintb`
--

INSERT INTO `logintb` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(2, 'jackline', 'jackline@gmail.com', 'jackline'),
(3, 'jackline jackline', 'jackline@gmail.com', '123456789'),
(4, 'admin', 'admin@gmail.com', 'asdfgh'),
(5, 'admin', 'admin@gmail.com', 'asdfg'),
(6, 'jackline jackline', 'jackline@gmail.com', '12345678'),
(7, 'jackline wayua', 'wayua212@gmail.com', 'wayua'),
(8, 'jackline jackline', 'jackline@gmail.com', '123456789'),
(9, 'admin', 'admin@gmail.com', '1'),
(10, 'admin', 'jackline@gmail.com', '123'),
(11, 'admin', 'admin@gmail.com', 'fg'),
(12, 'admin', 'admin@gmail.com', 'fg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
