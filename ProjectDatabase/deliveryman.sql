--
-- Database: `g5t1_restaurant`
--
DROP DATABASE IF EXISTS `deliveryman`;
CREATE DATABASE `deliveryman`;
USE `deliveryman`;

--
-- Table structure for table `delivery_man`
--
DROP TABLE IF EXISTS `delivery_man`;
CREATE TABLE `delivery_man` (
  `delivery_man_id` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `delivery_man_name` varchar(50) NOT NULL,
  `delivery_man_number` int(8) NOT NULL,
  `delivery_man_email` varchar(100) NOT NULL,
  `delivery_man_postalcode` int(6) NOT NULL,
  
  PRIMARY KEY (`delivery_man_id`,`username`)
);

INSERT INTO `delivery_man` (`delivery_man_id`, `username`, `password`, `delivery_man_name`, `delivery_man_number`, `delivery_man_email`, `delivery_man_postalcode`) VALUES
(500000, 'johndelivers', '1234', 'John Deliver', 98765432, 'suet.ting.chong@gmail.com', 160007 );
