-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 06, 2022 at 03:40 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_sucps`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint DEFAULT NULL,
  `Security_Code` int NOT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Security_Code`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Administrator', 'admin', 746579794, 1100, 'admin@gmail.com', 'd00f5d5217896fb7fd601412cb890830', '2021-01-05 05:38:23');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

DROP TABLE IF EXISTS `booking_details`;
CREATE TABLE IF NOT EXISTS `booking_details` (
  `bid` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `id_no` int NOT NULL,
  `contact` int NOT NULL,
  `hours` int NOT NULL,
  `car_brand` varchar(100) NOT NULL,
  `car_model` varchar(100) NOT NULL,
  `no_plate` varchar(100) NOT NULL,
  `car_color` varchar(100) NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL,
  `book_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `slot_no` varchar(4) DEFAULT NULL,
  `slot_status` int DEFAULT '1',
  `b_amount` int NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`bid`, `fname`, `lname`, `id_no`, `contact`, `hours`, `car_brand`, `car_model`, `no_plate`, `car_color`, `time_in`, `time_out`, `book_time`, `slot_no`, `slot_status`, `b_amount`) VALUES
(1, 'maureen', 'mugo', 12345678, 746579794, 2, 'lexus', 'LX570', 'KDD 234Z', 'Black', '00:00:00', '00:00:00', '2022-11-05 13:38:47', 'A08', 1, 200),
(2, 'Jedidah', 'Achieng', 23456789, 746579789, 3, 'Sedan', '234 make', 'KBB 654Y', 'Pink', '15:00:00', '18:00:00', '2022-11-05 13:17:01', 'A04', 1, 300),
(3, 'Mike', 'Lay', 43443493, 724000000, 2, 'lex', 'hatchback', 'KBZ 200', 'yellow', '19:00:00', '21:00:00', '2022-11-05 13:17:01', 'A04', 1, 200),
(4, 'Jane', 'Doe', 43443497, 724000000, 2, 'lex', 'hatchback', 'KBZ 200', 'white', '20:00:00', '22:00:00', '2022-11-05 13:43:28', 'A05', 1, 200),
(5, 'Peris', 'Wambui', 43443464, 724000000, 6, 'lex', 'hatchback', 'KBZ 200', 'yellow', '15:00:00', '21:00:00', '2022-11-05 13:17:01', 'A02', 1, 600),
(6, 'Simon', 'Peter', 43443493, 724000000, 1, 'lex', 'hatchback', 'KBZ 200', 'yellow', '12:00:00', '13:00:00', '2022-11-05 13:17:01', 'A01', 1, 100),
(7, 'Jadwell', 'Wanyonyi', 43216789, 746579794, 11, 'suzuki', 'l432', 'KDW 236Y', 'Green', '07:00:00', '18:00:00', '2022-11-05 13:17:01', 'A01', 1, 1100),
(8, 'Jenny', 'Wesley', 12345567, 734267384, 3, 'volkswagon', 'L560', 'KDW 236Y', 'white', '08:00:00', '11:05:00', '2022-11-05 13:17:01', 'A03', 1, 300),
(9, 'Chemeli', 'Joyline', 23456789, 746567890, 1, 'Toyota', 'vitz', 'KBY 234R', 'Red', '10:00:00', '11:09:00', '2022-11-05 13:17:01', 'A03', 1, 100),
(10, 'Davis', 'Bett', 23456789, 783546575, 2, 'Probox', '250GX', 'KBY 234R', 'Green', '09:00:00', '11:15:00', '2022-11-05 13:17:01', 'A03', 1, 200),
(11, 'Jenny', 'Wanjiku', 12345567, 789654321, 2, 'Probox', '570', 'KZA 243Y', 'Red', '09:00:00', '11:50:00', '2022-11-05 13:17:01', 'A03', 1, 200),
(12, 'Felistus', 'Wambui', 12345567, 789654321, 2, 'Probox', '570', 'KZA 243Y', 'Red', '09:00:00', '11:50:00', '2022-11-05 13:17:01', 'A03', 1, 200),
(13, 'Jill', 'Kariuki', 22876543, 763554234, 11, 'Tesla', '2022', 'KEG 245Q', 'Red', '07:00:00', '18:00:00', '2022-11-05 13:17:01', 'A03', 1, 1100),
(14, 'George', 'Abashwili', 34567890, 723456789, 10, 'Toyota', '2012', 'KZW 235R', 'Orange', '10:00:00', '20:00:00', '2022-10-15 18:04:59', 'A03', 1, 1000),
(15, 'Jane', 'Njoki', 453781236, 723457876, 16, 'Toyota', 'Vitz', 'KDF 236Y', 'Yellow', '07:00:00', '23:00:00', '2022-11-05 13:43:46', 'A04', 1, 1600),
(16, 'Daniel', 'Gathemba', 201723567, 726378905, 1, 'Discovery', '270G3', 'KAD 456Y', 'Green', '18:00:00', '19:00:00', '2022-10-15 19:00:07', 'A03', 1, 100),
(17, 'Jane', 'Maina', 201723567, 726378905, 2, 'Discovery', '270G3', 'KAD 456Y', 'Green', '18:00:00', '20:00:00', '2022-11-05 13:17:01', 'A03', 1, 200),
(18, 'David', 'Macharia', 45678908, 732456789, 1, 'lexus', 'LX670', 'KBY 234H', 'Red', '18:00:00', '19:00:00', '2022-10-26 18:05:14', 'A02', 1, 100),
(19, 'Harriet', 'Gakii', 43443493, 724000000, 2, 'lex', 'hatchback', 'KBZ 200', 'yellow', '13:00:00', '15:00:00', '2022-11-05 13:17:01', 'A01', 1, 200),
(20, 'Sharon', 'mwanthi', 43443467, 724000008, 1, 'lex', 'hatchback', 'KBZ 200', 'yellow', '12:00:00', '13:00:00', '2022-11-05 13:17:01', 'A05', 1, 100),
(21, 'Erastus', 'Wambugu', 43443464, 724000000, 1, 'lex', 'hatchback', 'KBZ 200', 'yellow', '10:00:00', '11:00:00', '2022-11-05 13:17:01', 'A07', 1, 100),
(22, 'Amos', 'Chibabi', 43443490, 724000000, 11, 'lex', 'hatchback', 'KBZ 200', 'yellow', '07:00:00', '18:00:00', '2022-11-05 13:17:01', 'A08', 1, 1100),
(23, 'Salome', 'Wanjiru', 43443490, 724000000, 11, 'lex', 'hatchback', 'KBZ 200', 'yellow', '07:00:00', '18:00:00', '2022-11-05 13:17:01', 'A08', 1, 1100),
(24, 'Cephas', 'Mwai', 43443467, 724000000, 7, 'lex', 'hatchback', 'KBZ 200', 'yellow', '11:00:00', '18:00:00', '2022-11-05 13:17:01', 'A08', 1, 700),
(25, 'Jerop', 'Kiptanui', 43443493, 724000000, 1, 'lex', 'hatchback', 'KBZ 200', 'yellow', '10:00:00', '11:00:00', '2022-11-05 13:17:01', 'A07', 1, 100),
(26, 'wqwe', 'drd', 43443493, 724000000, 1, 'lex', 'hatchback', 'KBZ 200', 'white', '10:00:00', '11:00:00', '2022-10-21 08:44:33', 'A07', 1, 100),
(27, 'vhyv', 'drd', 43443464, 724000000, 1, 'lex', 'hatchback', 'KBZ 200', 'yellow', '10:00:00', '11:00:00', '2022-10-21 08:52:27', 'A07', 1, 100),
(28, 'vhyv', 'drd', 43443490, 724000000, 1, 'lex', 'hatchback', 'KBZ 200', 'yellow', '10:00:00', '11:00:00', '2022-10-21 08:59:09', 'A07', 1, 100),
(29, 'vhyv', 'drd', 43443464, 724000000, 7, 'lex', 'hatchback', 'KBZ 200', 'yellow', '04:00:00', '11:00:00', '2022-10-21 08:59:09', 'A07', 1, 700),
(30, 'vhyv', 'drd', 43443490, 724000000, 1, 'lex', 'hatchback', 'KBZ 200', 'yellow', '10:00:00', '11:00:00', '2022-10-21 09:08:03', 'A07', 1, 100),
(31, 'vhyv', 'drd', 43443469, 724000000, 3, 'lex', 'hatchback', 'KBZ 200', 'yellow', '10:00:00', '13:00:00', '2022-10-21 12:35:50', 'A01', 1, 300),
(32, 'wqwe', 'drd', 43443460, 724000000, 12, 'lex', 'hatchback', 'KBZ 200', 'yellow', '06:01:00', '18:00:00', '2022-10-25 18:00:08', 'A02', 1, 1200),
(33, 'vhyv', 'drd', 43443493, 724000000, 7, 'lex', 'hatchback', 'KBZ 200', 'yellow', '11:00:00', '18:00:00', '2022-10-25 18:00:08', 'A02', 1, 700),
(34, 'vhyv', 'drd', 43443469, 724000000, 7, 'lex', 'hatchback', 'KBZ 200', 'yellow', '11:00:00', '18:00:00', '2022-10-25 18:00:08', 'A02', 1, 700),
(35, 'Chemeli', 'davis', 32456789, 746579790, 3, 'Toyota', 'Sedan', 'KBR 456Y', 'maroon', '15:40:00', '18:00:00', '2022-10-25 18:00:08', 'A03', 1, 300),
(36, 'Chemeli', 'Nikita', 45678905, 734678906, 3, 'Tesla', '2022', 'KBY 236Y', 'Blue', '15:20:00', '18:00:00', '2022-10-25 18:00:08', 'A01', 1, 300),
(37, 'Chemeli', 'Nikita', 45678905, 734678906, 1, 'Tesla', '2022', 'KBY 236Y', 'Blue', '15:20:00', '16:00:00', '2022-10-25 16:00:08', 'A01', 1, 100),
(38, 'Chemeli', 'Nikita', 45678905, 734678906, 4, 'Tesla', '2022', 'KBY 236Y', 'Blue', '15:20:00', '19:00:00', '2022-10-26 18:05:14', 'A01', 1, 400),
(39, 'Chemeli', 'Joyline', 23456789, 778579794, 2, 'Toyota', '2021', 'KZB 234Y', 'Black', '21:00:00', '23:00:00', '2022-11-05 23:00:07', 'A01', 1, 200),
(40, 'Chemeli', 'davis', 23456789, 746579789, 10, 'Tesla', '2022', 'KDD 224Z', 'Red', '08:00:00', '18:00:00', '2022-10-26 18:19:07', 'A01', 1, 1000),
(41, 'Chemeli', 'davis', 23456789, 746579789, 10, 'Tesla', '2022', 'KDD 224Z', 'Red', '10:00:00', '20:00:00', '2022-10-26 18:33:15', 'A01', 1, 1000),
(42, 'Mike', 'Murimi', 12345678, 798764314, 11, 'Tesla', '2033', 'KBT 234R', 'yellow', '07:00:00', '18:00:00', '2022-11-05 18:00:07', 'A01', 1, 1100),
(43, 'Alphonce', 'Kiprono', 32456789, 746876905, 10, 'Toyota', 'Vitz', 'KZA 234B', 'Yellow', '00:00:00', '10:00:00', '2022-11-05 22:07:07', 'A02', 1, 1000),
(44, 'Jenny', 'Wanjiku', 324567890, 746579794, 0, 'Probox', '250GX', 'KCB 345Y', 'Green', '18:24:00', '18:54:00', '2022-11-06 15:25:27', 'A01', 0, 100);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uid` int NOT NULL,
  `booking_id` int NOT NULL,
  `slot_no` varchar(50) NOT NULL,
  `amount` int NOT NULL,
  `phone` varchar(50) NOT NULL DEFAULT '',
  `date_paid` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `uid`, `booking_id`, `slot_no`, `amount`, `phone`, `date_paid`) VALUES
(1, 0, 0, '', 0, '2147483647', '2022-10-15 21:08:58'),
(2, 0, 0, '', 0, '2147483647', '2022-10-16 18:20:35'),
(3, 1, 30, 'A07', 600, '0724427501', '2022-10-21 12:01:04'),
(4, 1, 31, 'A01', 300, '0724427501', '2022-10-21 12:08:55'),
(5, 1, 34, 'A02', 600, '0724427501', '2022-10-21 12:12:19'),
(6, 1, 35, 'A03', 135, '254746579794', '2022-10-21 15:37:43'),
(7, 1, 41, 'A01', 1000, '254713271669', '2022-10-26 21:33:12'),
(8, 3, 42, 'A01', 1100, '254746579789', '2022-11-05 17:08:48'),
(9, 1, 44, 'A01', 100, '254746579790', '2022-11-06 18:25:40');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `c_name` varchar(255) NOT NULL,
  `c_email` varchar(55) NOT NULL,
  `c_website` varchar(55) NOT NULL,
  `c_address` varchar(255) NOT NULL,
  `last_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `c_name`, `c_email`, `c_website`, `c_address`, `last_update`) VALUES
(1, 'Demo Company', 'vparksystem@company.com', 'codeastro.com', '8169 Geigeer St NW', '2021-06-08 20:48:52');

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

DROP TABLE IF EXISTS `slots`;
CREATE TABLE IF NOT EXISTS `slots` (
  `slot_id` int NOT NULL AUTO_INCREMENT,
  `slot_no` varchar(50) NOT NULL DEFAULT '',
  `status` int NOT NULL,
  `time_out` time DEFAULT NULL,
  PRIMARY KEY (`slot_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`slot_id`, `slot_no`, `status`, `time_out`) VALUES
(1, 'A01', 0, '18:54:00'),
(2, 'A02', 1, '10:00:00'),
(3, 'A03', 1, '18:00:00'),
(4, 'A04', 1, '23:00:00'),
(5, 'A05', 1, '13:00:00'),
(6, 'A06', 1, '18:00:00'),
(7, 'A07', 1, '11:00:00'),
(8, 'A08', 1, '18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

DROP TABLE IF EXISTS `users2`;
CREATE TABLE IF NOT EXISTS `users2` (
  `uid` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users2`
--

INSERT INTO `users2` (`uid`, `username`, `email`, `password`) VALUES
(1, 'David', 'dave@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Stanley', 'kamanguya@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'mike', 'mike@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

DELIMITER $$
--
-- Events
--
DROP EVENT IF EXISTS `expirer`$$
CREATE DEFINER=`root`@`localhost` EVENT `expirer` ON SCHEDULE EVERY 1 MINUTE STARTS '2022-10-03 22:40:07' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE booking_details SET booking_details.slot_status=1 WHERE booking_details.time_out<CURRENT_TIME()$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
