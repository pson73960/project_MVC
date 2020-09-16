-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 16, 2020 at 04:28 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game`
--

-- --------------------------------------------------------

--
-- Table structure for table `Imfomation`
--
-- Creation: Sep 11, 2020 at 10:30 AM
--

CREATE TABLE IF NOT EXISTS `Imfomation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `NXX` text NOT NULL,
  `SL` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Imfomation`
--

INSERT INTO `Imfomation` (`id`, `name`, `price`, `image`, `NXX`, `SL`) VALUES
(1, 'Death Stranding Hệ Asia', 980000, 'a1.jpg', 'Asia', 100),
(2, 'Pes 2020 Hệ Asia', 680000, 'a2.jpg', 'Asia', 150),
(3, 'Diablo III Eternal Collection Hệ Us', 850000, 'a3.jpg', 'US', 50),
(4, 'Spider-man: Game of The Year Edition Hệ Asia', 780000, 'a4.jpg', 'US', 80),
(5, 'WWWE 2020 Hệ UK', 890000, 'a5.jpg', 'UK', 80),
(6, 'Crash Team Racing Nitro-Fueled Hệ Asia', 480000, 'a6.jpg', 'Asia', 90),
(7, 'Sekiro Shadows Die Twice Hệ US', 880000, 'a7.jpg', 'US', 100),
(8, 'Resident Evil 3 Hệ Asia', 980000, 'a8.jpg', 'Asia', 100);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
