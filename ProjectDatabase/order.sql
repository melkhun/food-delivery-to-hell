--
-- Database: `order`
--
DROP DATABASE IF EXISTS `order`;
CREATE DATABASE `order`;
USE `order`;

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
  
  PRIMARY KEY(order_id)
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