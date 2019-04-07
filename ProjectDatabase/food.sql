--
-- Database: `food`
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



