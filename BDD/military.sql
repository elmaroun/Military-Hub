-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 01:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `military`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country` varchar(50) NOT NULL,
  `Ground Forces` varchar(20) NOT NULL,
  `Air Forces` varchar(20) NOT NULL,
  `Naval FOrces` varchar(20) NOT NULL,
  `Tanks` varchar(20) NOT NULL,
  `Fighter Aircrafts` varchar(20) NOT NULL,
  `Frigates` varchar(20) NOT NULL,
  `Rank` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country`, `Ground Forces`, `Air Forces`, `Naval FOrces`, `Tanks`, `Fighter Aircrafts`, `Frigates`, `Rank`) VALUES
('Morocco', '195,800', '800', '105', '2,420', '183', '2', '61'),
('USA', '950,000', '4,900', '700', '14,420', '1,121', '8', '1'),
('Russia', '850,000', '4,173', '605', '12,420', '772', '11', '2'),
('China', '550,000', '1,173', '501', '9,980', '582', '10', '3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
