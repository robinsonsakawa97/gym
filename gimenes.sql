-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 29, 2020 at 09:30 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gimenes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admnistrator`
--

DROP TABLE IF EXISTS `admnistrator`;
CREATE TABLE IF NOT EXISTS `admnistrator` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admnistrator`
--

INSERT INTO `admnistrator` (`id`, `username`, `password`) VALUES
(1, 'hbxa', '$2y$10$mrjb9putaJTm40/TkZR11eZUH0tZREseCswIVhxjoAh3hvVcGoXK2'),
(2, 'robin1', '$2y$10$gtDyFYPUX8fAl3GViFNj8OihLEuXBECp4Y1FIjSuitwMBvEYO2qdS'),
(3, 'robin', '$2y$10$QFQQt/wXPKtZGLfj9N07lenHzCpOY5BHcKfymoQ938kU2WjOiDDDq'),
(4, 'edwin', '$2y$10$.yULOfsu1DTHq8HBoHMuMey08lvYi9PGpL2l4iNjxF/zVgfI98rjW'),
(5, 'edww', '$2y$10$ikkaCb0o81uxEpE8m85whO32Bq.RGCKeln3tx9d0.Hyony4iEaCkG');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `ID` int(25) NOT NULL AUTO_INCREMENT,
  `first` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(20) NOT NULL,
  `code` int(50) NOT NULL,
  `phone` int(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`ID`, `first`, `last`, `email`, `country`, `code`, `phone`) VALUES
(1, 'dabcan', 'mmulwas', 'dancanmulwa@gmail.com', 'USA', 91331361, 535323233);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
