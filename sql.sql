-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2020 at 02:41 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_database`
--
CREATE DATABASE IF NOT EXISTS `project_database` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `project_database`;

-- --------------------------------------------------------

--
-- Table structure for table `moviegrade`
--

CREATE TABLE `moviegrade` (
  `MovieID` int(4) NOT NULL,
  `movieName` varchar(30) NOT NULL,
  `movieGrade` varchar(25) NOT NULL,
  `dateTime` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moviegrade`
--

INSERT INTO `moviegrade` (`MovieID`, `movieName`, `movieGrade`, `dateTime`) VALUES
(1, 'The Intern', 'Must be watched [3]', '2020-04-11'),
(2, 'Harry Potter', 'Should be watched [2]', '2020-04-11'),
(3, 'He is out there', 'Should be watched [2]', '2020-04-11'),
(4, 'House of Cards', 'Must be watched [3]', '2020-04-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `moviegrade`
--
ALTER TABLE `moviegrade`
  ADD PRIMARY KEY (`MovieID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `moviegrade`
--
ALTER TABLE `moviegrade`
  MODIFY `MovieID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
