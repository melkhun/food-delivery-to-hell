-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 06, 2019 at 10:59 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `customer_number` int(8) NOT NULL,
  `postalcode` int(6) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  PRIMARY KEY (`customer_id`,`username`)
) ENGINE=MyISAM AUTO_INCREMENT=100008 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `username`, `password`, `customer_name`, `gender`, `customer_number`, `postalcode`, `customer_email`) VALUES
(100001, 'g5t1', 'g5t1', 'User G5T1', 'M', 91234567, 178903, 'esd213g5t1@outlook.com'),
(100002, 'melvin', 'melvin', 'Melvin Ong', 'M', 91345812, 178903, 'esd213g5t1@outlook.com'),
(100003, 'ferne', 'ferne', 'Ferne Lo', 'F', 81285612, 178903, 'esd213g5t1@outlook.com'),
(100004, 'junyi', 'junyi', 'Chen Junyi', 'M', 88993456, 178903, 'esd213g5t1@outlook.com'),
(100005, 'joseph', 'joseph', 'Joseph Koh', 'M', 93356712, 178903, 'esd213g5t1@outlook.com'),
(100006, 'jerry', 'jerry', 'Jerry Yap', 'M', 94561205, 178903, 'esd213g5t1@outlook.com'),
(100007, 'suetting', 'suetting', 'Chong Suet Ting', 'F', 96235225, 178903, 'esd213g5t1@outlook.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
