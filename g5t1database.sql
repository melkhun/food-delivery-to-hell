--
-- Database: `g5t1_restaurant`
--
DROP DATABASE IF EXISTS `g5t1_restaurant`;
CREATE DATABASE `g5t1_restaurant`;
USE `g5t1_restaurant`;

--
-- Table structure for table `customer`
--
DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `customer_id` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `customer_number` int(8) NOT NULL,
  `address` varchar(150) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_card_number` bigint NOT NULL,
  
  PRIMARY KEY (`customer_id`,`username`)
);

INSERT INTO `customers` (`customer_id`, `username`, `password`, `customer_name`, `gender`, `customer_number`, `address`, `customer_email`, `customer_card_number`) VALUES
(111111, 'g5t4', 'g5t4', 'User G5t4', 'M', 91234567, 'Singapore Management University', 'suet.ting.chong@gmail.com', 5400123412341234);

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
  `delivery_man_lat` decimal(12,6) NOT NULL,
  `delivery_man_long` decimal(12,6) NOT NULL,
  
  PRIMARY KEY (`delivery_man_id`,`username`)
);

INSERT INTO `delivery_man` (`delivery_man_id`, `username`, `password`, `delivery_man_name`, `delivery_man_number`, `delivery_man_email`, `delivery_man_lat`, `delivery_man_long`) VALUES
(500000, 'johndelivers', '1234', 'John Deliver', 98765432, 'suet.ting.chong@gmail.com', 1.3000167, 103.838080 );

--
-- Table structure for table `orders`
--
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `order_id` int(6) NOT NULL AUTO_INCREMENT,
  `order_time` datetime,
  `customer_id` int(6) NOT NULL,
  `delivery_location` varchar(150) NOT NULL,
  `total_price` decimal(12,2) NOT NULL,
  `delivery_man_id` int(6) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Open',
  
  PRIMARY KEY(order_id),
  FOREIGN KEY (`customer_id`) REFERENCES customers(customer_id),
  FOREIGN KEY (`delivery_man_id`) REFERENCES delivery_man(delivery_man_id)
);

INSERT INTO `orders` (`order_id`, `order_time`, `customer_id`, `delivery_location`, `total_price`, `delivery_man_id`, `status`) VALUES
(000001, '2019-03-15 20:20:20', 111111, 'Singapore Management University', 10,  NULL, 'open');

--
-- Table structure for table `order_items`
--
DROP TABLE IF EXISTS `order_items`;
CREATE TABLE `order_items` (
  `order_id` int(6) NOT NULL,
  `food_id`int(3) NOT NULL,
  `quantity` int NOT NULL,
  `sub_total` decimal(12,2),
  
  PRIMARY KEY(order_id, food_id),
  FOREIGN KEY (`order_id`) REFERENCES orders(order_id),
  FOREIGN KEY (`food_id`) REFERENCES food(food_id)
);

INSERT INTO `order_items` (`order_id`, `food_id`, `quantity`, `sub_total`) VALUES
(000001, 002, 1, 4.00),
(000001, 003, 1, 6.00);