-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 04, 2024 at 12:40 PM
-- Server version: 8.0.36-0ubuntu0.20.04.1
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ch295301_saransol`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookies`
--

CREATE TABLE `bookies` (
  `bid` mediumint NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(10) DEFAULT NULL,
  `jdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookies`
--

INSERT INTO `bookies` (`bid`, `username`, `password`, `role`, `jdate`) VALUES
(1, 'admin', 'welcome', 'admin', '2014-07-10'),
(2, 'saran', 'welcome3ibm', NULL, '2014-11-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookies`
--
ALTER TABLE `bookies`
  ADD PRIMARY KEY (`bid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
