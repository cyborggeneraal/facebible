-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 25, 2018 at 07:56 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facebible`
--
CREATE DATABASE IF NOT EXISTS `facebible` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `facebible`;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(31) NOT NULL,
  `email` varchar(127) NOT NULL,
  `hashedPassword` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `email`, `hashedPassword`) VALUES
(1, 'cyborggeneraal', 'alexvantilburg@outlook.com', ''),
(2, 'ebboer', 'ebboer@gmail.com', ''),
(6, 'banaan', 'huis@gmail.com', 'bccae4ce7be65100a8472740c829b76610a653a6816a7b88c7f7def8ae8e9b0c'),
(5, 'banaan', 'huis@gmail.com', 'bccae4ce7be65100a8472740c829b76610a653a6816a7b88c7f7def8ae8e9b0c'),
(7, 'banaan', 'huis@gmail.com', 'bccae4ce7be65100a8472740c829b76610a653a6816a7b88c7f7def8ae8e9b0c'),
(8, 'banaan', 'huis@gmail.com', 'bccae4ce7be65100a8472740c829b76610a653a6816a7b88c7f7def8ae8e9b0c'),
(9, 'banaan', 'huis@gmail.com', '1b4b0aab64890e5064d62018cd0f4fa29a4eb437502c6034738692af0dda2e47');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
