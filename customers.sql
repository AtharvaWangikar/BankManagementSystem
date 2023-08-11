-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 12, 2023 at 06:54 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `AccountNo` int(5) NOT NULL,
  `FirstName` varchar(32) NOT NULL,
  `LastName` varchar(32) NOT NULL,
  `EMail` varchar(20) NOT NULL,
  `Balance` double NOT NULL,
  `City` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`AccountNo`, `FirstName`, `LastName`, `EMail`, `Balance`, `City`) VALUES
(1001, 'Anand', 'Singh', 'ana123@gmail.com', 52998, 'Pune'),
(1002, 'Mira ', 'Dixit', 'Mira223@gmail.com', 52002, 'Bangalore'),
(1003, 'Gautam', 'Marathe', 'Gautam337@gmail.com', 60000, 'Pune'),
(1004, 'Neha', 'Tiwari', 'neha@gmail.com', 56000, 'Pune'),
(1005, 'Suraj', 'Saha', 'sahasuraj@gmail.com', 70000, 'Mumbai'),
(1006, 'Yash', 'Mane', 'maney@gmail.com', 50000, 'Pune'),
(1007, 'Sayali ', 'Rathod', 'sayalir@gmail.com', 55000, 'Mumbai'),
(1008, 'Sameer', 'Joshi', 'sameerjo@gmail.com', 65000, 'Bangalore'),
(1009, 'Kartik', 'Mahajan', 'kartik21@gmail.com', 65000, 'Bangalore'),
(1010, 'Vihar', 'Mehta', 'vmehta@gmail.com', 60000, 'Mumbai');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
