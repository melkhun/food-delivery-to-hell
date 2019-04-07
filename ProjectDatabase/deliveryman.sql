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
