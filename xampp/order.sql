
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `order` (
	`id` int(30) NOT NULL AUTO_INCREMENT,
	`username` varchar(255) NOT NULL,
	`first_name` varchar(255) NOT NULL,
	`last_name` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`telephoneNo` varchar(40) NOT NULL,
	`date_order` date NOT NULL,
	`cake_type` varchar(255) NOT NULL,
	`activated` enum('0','1') NOT NULL,
	PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin AUTO_INCREMENT=1;