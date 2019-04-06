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
-- Database: `deliveryman`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivery_man`
--

DROP TABLE IF EXISTS `delivery_man`;
CREATE TABLE IF NOT EXISTS `delivery_man` (
  `delivery_man_id` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `delivery_man_name` varchar(50) NOT NULL,
  `delivery_man_number` int(8) NOT NULL,
  `delivery_man_email` varchar(100) NOT NULL,
  `delivery_man_postalcode` int(6) NOT NULL,
  PRIMARY KEY (`delivery_man_id`,`username`)
) ENGINE=MyISAM AUTO_INCREMENT=500008 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_man`
--

INSERT INTO `delivery_man` (`delivery_man_id`, `username`, `password`, `delivery_man_name`, `delivery_man_number`, `delivery_man_email`, `delivery_man_postalcode`) VALUES
(500001, 'g5t1', 'g5t1', 'G5T1 Delivery Man', 98765432, 'esd213g5t1@outlook.com', 179100),
(500002, 'jerry', 'jerry', 'Jerry Yap', 94561205, 'esd213g5t1@outlook.com', 310145),
(500003, 'joseph', 'joseph', 'Joseph Koh', 93356712, 'esd213g5t1@outlook.com', 510566),
(500004, 'melvin', 'melvin', 'Melvin Ong', 91345812, 'esd213g5t1@outlook.com', 120435),
(500005, 'ferne', 'ferne', 'Ferne Lo', 81285612, 'esd213g5t1@outlook.com', 440061),
(500006, 'junyi', 'junyi', 'Chen Junyi', 88993456, 'esd213g5t1@outlook.com', 520419),
(500007, 'suetting', 'suetting', 'Chong Suet Ting', 96235225, 'esd213g5t1@outlook.com', 160007);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
