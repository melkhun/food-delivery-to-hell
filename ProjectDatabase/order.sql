--
-- Database: `order`
--
DROP DATABASE IF EXISTS `order`;
CREATE DATABASE `order`;
USE `order`;

--
-- Table structure for table `orders`
--
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `order_id` int(6) NOT NULL AUTO_INCREMENT,
  `order_time` datetime default CURRENT_TIMESTAMP,
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
  `item_id` int(3) NOT NULL AUTO_INCREMENT,		
  `order_id` int(6) NOT NULL,
  `food_id`int(3) NOT NULL,
  `quantity` int NOT NULL,
  `sub_total` decimal(12,2),
  
  PRIMARY KEY(item_id),
  FOREIGN KEY (`order_id`) REFERENCES orders(order_id)

);

INSERT INTO `order_items` (`item_id`,`order_id`, `food_id`, `quantity`, `sub_total`) VALUES
(001,000001, 002, 1, 4.00),
(002,000001, 003, 1, 6.00);