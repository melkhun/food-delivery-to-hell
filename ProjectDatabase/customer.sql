--
-- Database: `customer`
--

DROP DATABASE IF EXISTS `customer`;
CREATE DATABASE `customer`;
USE `customer`;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `customer_id` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `customer_number` int(8) NOT NULL,
  `postalcode` int(6) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  
  PRIMARY KEY (`customer_id`,`username`)
);

INSERT INTO `customers` (`customer_id`, `username`, `password`, `customer_name`, `gender`, `customer_number`, `postalcode`, `customer_email`) VALUES
(100001, 'g5t1', 'g5t1', 'User G5T1', 'M', 91234567, 178903, 'esd213g5t1@outlook.com'),
(100002, 'melvin', 'melvin', 'Melvin Ong', 'M', 91345812, 178903, 'esd213g5t1@outlook.com'),
(100003, 'ferne', 'ferne', 'Ferne Lo', 'F', 81285612, 178903, 'esd213g5t1@outlook.com'),
(100004, 'junyi', 'junyi', 'Chen Junyi', 'M', 88993456, 178903, 'esd213g5t1@outlook.com'),
(100005, 'joseph', 'joseph', 'Joseph Koh', 'M', 93356712, 178903, 'esd213g5t1@outlook.com'),
(100006, 'jerry', 'jerry', 'Jerry Yap', 'M', 94561205, 178903, 'esd213g5t1@outlook.com'),
(100007, 'suetting', 'suetting', 'Chong Suet Ting', 'F', 96235225, 178903, 'esd213g5t1@outlook.com');
