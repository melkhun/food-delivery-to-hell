--
-- Database: `foods`
--
DROP DATABASE IF EXISTS `food`;
CREATE DATABASE `food`;
USE `food`;

--
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE `food` (
  `food_id` int(3) NOT NULL AUTO_INCREMENT,
  `food_name` varchar(50),
  `food_price` decimal(12,2) NOT NULL,
  `food_description` varchar(1000),
  
  PRIMARY KEY (`food_id`)
);

INSERT INTO `food` (`food_id`, `food_name`, `food_price`, `food_description`) VALUES
(001, 'apple pie', 2.00, 'best apple pie'),
(002, 'banana pie', 4.00, 'best banana pie'),
(003, 'pear pie', 6.00, 'best pear pie');


