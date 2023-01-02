-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.36 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for new_sucps
CREATE DATABASE IF NOT EXISTS `new_sucps` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `new_sucps`;

-- Dumping structure for table new_sucps.booking_details
CREATE TABLE IF NOT EXISTS `booking_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `id_no` int(11) NOT NULL,
  `contact` int(11) NOT NULL,
  `hours` int(11) NOT NULL,
  `car_brand` varchar(100) NOT NULL,
  `car_model` varchar(100) NOT NULL,
  `no_plate` varchar(100) NOT NULL,
  `car_color` varchar(100) NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL,
  `book_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `slot_no` varchar(4) DEFAULT NULL,
  `slot_status` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table new_sucps.booking_details: 6 rows
/*!40000 ALTER TABLE `booking_details` DISABLE KEYS */;
INSERT INTO `booking_details` (`id`, `fname`, `lname`, `id_no`, `contact`, `hours`, `car_brand`, `car_model`, `no_plate`, `car_color`, `time_in`, `time_out`, `book_time`, `slot_no`, `slot_status`) VALUES
	(1, 'maureen', 'mugo', 12345678, 746579794, 2, 'lexus', 'LX570', 'KDD 234Z', 'Black', '00:00:00', '00:00:00', '2022-10-04 10:57:16', 'A08', 1),
	(2, 'maureen', 'mugo', 23456789, 746579789, 3, 'Sedan', '234 make', 'KBB 654Y', 'Pink', '15:00:00', '18:00:00', '2022-10-03 19:10:45', 'A04', 0),
	(3, 'vhyv', 'drd', 43443493, 724000000, 2, 'lex', 'hatchback', 'KBZ 200', 'yellow', '19:00:00', '21:00:00', '2022-10-03 19:10:47', 'A04', 0),
	(4, 'wqwe', 'drd', 43443497, 724000000, 2, 'lex', 'hatchback', 'KBZ 200', 'white', '20:00:00', '22:00:00', '2022-10-03 19:10:50', 'A05', 0),
	(5, 'vhyv', 'drd', 43443464, 724000000, 6, 'lex', 'hatchback', 'KBZ 200', 'yellow', '15:00:00', '21:00:00', '2022-10-04 11:01:14', 'A02', 0),
	(6, 'wqwe', 'drd', 43443493, 724000000, 1, 'lex', 'hatchback', 'KBZ 200', 'yellow', '12:00:00', '13:00:00', '2022-10-04 11:06:49', 'A01', 1);
/*!40000 ALTER TABLE `booking_details` ENABLE KEYS */;

-- Dumping structure for event new_sucps.expirer
DELIMITER //
CREATE EVENT `expirer` ON SCHEDULE EVERY 1 MINUTE STARTS '2022-10-03 22:40:07' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE booking_details SET booking_details.slot_status=1 WHERE booking_details.time_out<CURRENT_TIME()//
DELIMITER ;

-- Dumping structure for table new_sucps.slots
CREATE TABLE IF NOT EXISTS `slots` (
  `slot_id` int(11) NOT NULL AUTO_INCREMENT,
  `slot_no` varchar(50) NOT NULL DEFAULT '',
  `status` int(11) NOT NULL,
  `time_out` time DEFAULT NULL,
  PRIMARY KEY (`slot_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Dumping data for table new_sucps.slots: 8 rows
/*!40000 ALTER TABLE `slots` DISABLE KEYS */;
INSERT INTO `slots` (`slot_id`, `slot_no`, `status`, `time_out`) VALUES
	(1, 'A01', 1, '13:00:00'),
	(2, 'A02', 0, '21:00:00'),
	(3, 'A03', 1, '21:20:43'),
	(4, 'A04', 1, '21:20:44'),
	(5, 'A05', 1, '21:20:44'),
	(6, 'A06', 1, '21:20:45'),
	(7, 'A07', 1, '21:20:46'),
	(8, 'A08', 1, '21:20:47');
/*!40000 ALTER TABLE `slots` ENABLE KEYS */;

-- Dumping structure for table new_sucps.users2
CREATE TABLE IF NOT EXISTS `users2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table new_sucps.users2: ~2 rows (approximately)
INSERT INTO `users2` (`id`, `username`, `email`, `password`) VALUES
	(1, 'David', 'dave@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
	(2, 'Stanley', 'kamanguya@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
