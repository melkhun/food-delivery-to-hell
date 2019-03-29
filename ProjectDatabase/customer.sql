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
  `customer_card_number` bigint NOT NULL,
  
  PRIMARY KEY (`customer_id`,`username`)
);

INSERT INTO `customers` (`customer_id`, `username`, `password`, `customer_name`, `gender`, `customer_number`, `postalcode`, `customer_email`, `customer_card_number`) VALUES
(111111, 'g5t4', 'g5t4', 'User G5t4', 'M', 91234567, 178903, 'suet.ting.chong@gmail.com', 5400123412341234);
