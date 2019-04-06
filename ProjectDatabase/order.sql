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
-- Database: `order`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(6) NOT NULL AUTO_INCREMENT,
  `order_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `customer_id` int(6) NOT NULL,
  `food_id` int(6) NOT NULL,
  `quantity` int(11) NOT NULL,
  `delivery_location` varchar(150) NOT NULL,
  `total_price` decimal(12,2) NOT NULL,
  `delivery_man_id` int(6) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'open',
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_time`, `customer_id`, `food_id`, `quantity`, `delivery_location`, `total_price`, `delivery_man_id`, `status`) VALUES
(1, '2019-04-04 20:20:20', 100001, 1, 1, 'Singapore Management University', '2.00', 500001, 'accepted'),
(2, '2019-04-04 21:19:20', 100002, 2, 1, 'Singapore Management University', '4.00', 500005, 'delivered'),
(3, '2019-04-05 07:59:20', 100003, 3, 1, 'Singapore Management University', '60.00', 500004, 'accepted'),
(4, '2019-03-15 08:03:08', 100004, 4, 1, 'Singapore Management University', '8.00', NULL, 'open'),
(5, '2019-03-15 08:08:10', 100005, 5, 1, 'Singapore Management University', '3.50', NULL, 'open'),
(6, '2019-03-15 08:10:30', 100006, 6, 1, 'Singapore Management University', '50.00', NULL, 'open'),
(7, '2019-03-15 08:12:12', 100007, 1, 2, 'Singapore Management University', '4.00', NULL, 'open'),
(8, '2019-03-15 08:13:13', 100002, 2, 1, 'Singapore Management University', '4.00', NULL, 'open'),
(9, '2019-03-15 08:14:14', 100001, 3, 1, 'Singapore Management University', '6.00', NULL, 'open');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
