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
(500001, 'g5t1', 'g5t1', 'G5T1 Delivery Man', 98765432, 'esd213g5t1@outlook.com', 179100),
(500002, 'jerry', 'jerry', 'Jerry Yap', 94561205, 'esd213g5t1@outlook.com', 310145 ),
(500003, 'joseph', 'joseph', 'Joseph Koh', 93356712, 'esd213g5t1@outlook.com', 510566 ),
(500004, 'melvin', 'melvin', 'Melvin Ong', 91345812, 'esd213g5t1@outlook.com', 120435 ),
(500005, 'ferne', 'ferne', 'Ferne Lo', 81285612, 'esd213g5t1@outlook.com', 440061 ),
(500006, 'junyi', 'junyi', 'Chen Junyi', 88993456, 'esd213g5t1@outlook.com', 520419 ),
(500007, 'suetting', 'suetting', 'Chong Suet Ting', 96235225,'esd213g5t1@outlook.com', 160007);

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
(001, 'Apple Pie', 2.00, 'Best apple pie'),
(002, 'Banana Pie', 4.00, 'Best banana pie'),
(003, 'Pear Pie', 6.00, 'Best pear pie'),
(004, 'Laksa', 8.00, 'Our housebrand Laksa'),
(005, 'Chicken Satay', 3.50, 'Grill chicken on stick'),
(006, 'Snake Soup', 50.00, 'The soup will make you strong like a snake. A strong snake.');

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
  `food_id` int(6) NOT NULL,
  `quantity` int NOT NULL,
  `delivery_location` varchar(150) NOT NULL,
  `total_price` decimal(12,2) NOT NULL,
  `delivery_man_id` int(6) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'open',
  
  PRIMARY KEY(`order_id`)
);

INSERT INTO `orders` (`order_id`, `order_time`, `customer_id`, `food_id`, `quantity`, `delivery_location`, `total_price`, `delivery_man_id`, `status`) VALUES
(000001, '2019-04-04 20:20:20', 100001, 001, 1, 'Singapore Management University', 2.00,  500001, 'delivered'),
(000002, '2019-04-04 21:19:20', 100002, 002, 1,'Singapore Management University', 4.00,  500005, 'delivered'),
(000003, '2019-04-05 07:59:20', 100003, 003, 1,'Singapore Management University',60.00,  500004, 'accepted'),
(000004, '2019-03-15 08:03:08', 100004, 004, 1,'Singapore Management University', 8.00,  NULL, 'open'),
(000005, '2019-03-15 08:08:10', 100005, 005, 1, 'Singapore Management University', 3.50,  NULL, 'open'),
(000006, '2019-03-15 08:10:30', 100006, 006, 1, 'Singapore Management University', 50.00,  NULL, 'open'),
(000007, '2019-03-15 08:12:12', 100007, 001, 2, 'Singapore Management University', 4.00,  NULL, 'open'),
(000008, '2019-03-15 08:13:13', 100002, 002, 1, 'Singapore Management University', 4.00,  NULL, 'open'),
(000009, '2019-03-15 08:14:14', 100001, 003, 1,'Singapore Management University', 6.00,  NULL, 'open');