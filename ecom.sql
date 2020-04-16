-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Apr 16, 2020 at 06:52 PM
-- Server version: 8.0.18
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
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

DROP TABLE IF EXISTS `tblproduct`;
CREATE TABLE IF NOT EXISTS `tblproduct` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Blue Bed', '3DcAM01', '../img/2-1.jpg', 1500.00),
(2, 'Brown Bed', 'USB02', '../img/2-2.jpg', 1300.00),
(3, 'Brown Leather Sofa', 'wristWear03', '../img/2-4.jpg', 700.00),
(4, 'Fancy Kitchen', 'LPN45', '../img/6.jpg', 3000.00),
(5, 'Family Living Room', 'FMLY', '../img/4.jpg', 5000.00),
(6, 'Royal Bedroom', 'RBD300', '../img/5.jpg', 2500.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idUsers` int(11) NOT NULL AUTO_INCREMENT,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL,
  PRIMARY KEY (`idUsers`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(1, 'SamoelDK', 'samoello007@gmail.com', '$2y$10$xLhhfsRPqwlbt1.zzBMyHOa89gkbFoJjrHVIkqPZPpo6NRTXRZFKG'),
(2, 'test', 'test@test.test', '$2y$10$UAA2lE8bw3REhQ2D4O2yY.MivzzCoL8cYmtj0TNKalMW.HnRTrMVu');

-- --------------------------------------------------------

--
-- Table structure for table `user_carts`
--

DROP TABLE IF EXISTS `user_carts`;
CREATE TABLE IF NOT EXISTS `user_carts` (
  `idCart` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` int(8) NOT NULL,
  `cartContent` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  PRIMARY KEY (`idCart`),
  KEY `idUser` (`idUser`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_carts`
--

INSERT INTO `user_carts` (`idCart`, `idUser`, `cartContent`) VALUES
(19, 2, 'a:2:{s:11:\"wristWear03\";a:5:{s:4:\"name\";s:18:\"Brown Leather Sofa\";s:4:\"code\";s:11:\"wristWear03\";s:8:\"quantity\";s:1:\"1\";s:5:\"price\";s:6:\"700.00\";s:5:\"image\";s:14:\"../img/2-4.jpg\";}s:7:\"3DcAM01\";a:5:{s:4:\"name\";s:8:\"Blue Bed\";s:4:\"code\";s:7:\"3DcAM01\";s:8:\"quantity\";s:1:\"1\";s:5:\"price\";s:7:\"1500.00\";s:5:\"image\";s:14:\"../img/2-1.jpg\";}}'),
(20, 1, 'N;');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
