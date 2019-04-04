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
  `item_id` int(6) NOT NULL,
  `quantity` int NOT NULL,
  `delivery_location` varchar(150) NOT NULL,
  `total_price` decimal(12,2) NOT NULL,
  `delivery_man_id` int(6) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'open',
  
  PRIMARY KEY(`order_id`)
);

INSERT INTO `orders` (`order_id`, `order_time`, `customer_id`, `item_id`, `quantity`, `delivery_location`, `total_price`, `delivery_man_id`, `status`) VALUES
(000001, '2019-04-04 20:20:20', 100001, 001, 1, 'Singapore Management University', 2.00,  500001, 'delivered'),
(000002, '2019-04-04 21:19:20', 100002, 002, 1,'Singapore Management University', 4.00,  500005, 'delivered'),
(000003, '2019-04-05 07:59:20', 100003, 003, 1,'Singapore Management University',60.00,  500004, 'accepted'),
(000004, '2019-03-15 08:03:08', 100004, 004, 1,'Singapore Management University', 8.00,  NULL, 'open'),
(000005, '2019-03-15 08:08:10', 100005, 005, 1, 'Singapore Management University', 3.50,  NULL, 'open'),
(000006, '2019-03-15 08:10:30', 100006, 006, 1, 'Singapore Management University', 50.00,  NULL, 'open'),
(000007, '2019-03-15 08:12:12', 100007, 001, 2, 'Singapore Management University', 4.00,  NULL, 'open'),
(000008, '2019-03-15 08:13:13', 100002, 002, 1, 'Singapore Management University', 4.00,  NULL, 'open'),
(000009, '2019-03-15 08:14:14', 100001, 003, 1,'Singapore Management University', 6.00,  NULL, 'open');

