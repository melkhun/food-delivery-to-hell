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
  `status` varchar(50) NOT NULL DEFAULT 'open',
  
  PRIMARY KEY(order_id)
);

INSERT INTO `orders` (`order_id`, `order_time`, `customer_id`, `delivery_location`, `total_price`, `delivery_man_id`, `status`) VALUES
(000001, '2019-04-04 20:20:20', 100001, 'Singapore Management University', 10.00,  500001, 'delivered'),
(000002, '2019-04-04 21:19:20', 100002, 'Singapore Management University', 50.00,  500005, 'delivered'),
(000003, '2019-04-05 07:59:20', 100003, 'Singapore Management University', 10.00,  500004, 'accepted'),
(000004, '2019-03-15 08:03:08', 100004, 'Singapore Management University', 7.00,  NULL, 'open'),
(000005, '2019-03-15 08:08:10', 100005, 'Singapore Management University', 10.00,  NULL, 'open'),
(000006, '2019-03-15 08:10:30', 100006, 'Singapore Management University', 14.00,  NULL, 'open'),
(000007, '2019-03-15 08:12:12', 100007, 'Singapore Management University', 5.50,  NULL, 'open'),
(000008, '2019-03-15 08:13:13', 100002, 'Singapore Management University', 53.50,  NULL, 'open'),
(000009, '2019-03-15 08:14:14', 100001, 'Singapore Management University', 12.00,  NULL, 'open');

--
-- Table structure for table `order_items`
--
DROP TABLE IF EXISTS `order_items`;
CREATE TABLE `order_items` (
  `item_id` int(6) NOT NULL AUTO_INCREMENT,
  `order_id` int(6) NOT NULL,
  `food_id`int(3) NOT NULL,
  `quantity` int NOT NULL,
  `sub_total` decimal(12,2),
  
  PRIMARY KEY(`item_id`),
  FOREIGN KEY (`order_id`) REFERENCES orders(order_id)
);

INSERT INTO `order_items` (`item_id`, `order_id`, `food_id`, `quantity`, `sub_total`) VALUES
(000001, 000001, 002, 1, 4.00),
(000002, 000001, 003, 1, 6.00),
(000003, 000002, 006, 1, 50.00),
(000004, 000003, 001, 1, 2.00),
(000005, 000003, 004, 1, 8.00),
(000006, 000004, 005, 2, 7.00),
(000007, 000005, 002, 1, 4.00),
(000008, 000005, 003, 1, 6.00),
(000009, 000006, 003, 1, 6.00),
(000010, 000006, 004, 1, 8.00),
(000011, 000007, 001, 1, 2.00),
(000012, 000007, 005, 1, 3.50),
(000013, 000008, 005, 1, 3.50),
(000014, 000008, 006, 1, 50.00),
(000015, 000009, 001, 1, 2.00),
(000016, 000009, 002, 1, 4.00),
(000017, 000009, 003, 1, 6.00);