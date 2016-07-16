-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2016 at 08:30 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ayurveda_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room_type`
--

CREATE TABLE IF NOT EXISTS `tbl_room_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `resortId` int(11) NOT NULL,
  `Created_by` int(11) NOT NULL,
  `Created_on` datetime NOT NULL,
  `Updated_by` int(11) NOT NULL,
  `Updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_room_type`
--

INSERT INTO `tbl_room_type` (`id`, `name`, `resortId`, `Created_by`, `Created_on`, `Updated_by`, `Updated_on`) VALUES
(4, 'single-joint-room', 1, 1, '2016-07-07 02:21:32', 1, '2016-07-07 02:21:32'),
(5, 'semi-private-room1', 1, 1, '2016-07-07 02:14:00', 1, '2016-07-07 02:14:00'),
(6, 'VIP-Room', 1, 1, '2016-07-07 01:41:26', 1, '2016-07-07 01:41:26'),
(10, 'Standard Rooms', 2, 1, '2016-07-07 03:12:18', 1, '2016-07-07 03:12:18'),
(11, 'Executive Suites', 2, 1, '2016-07-07 03:13:53', 1, '2016-07-07 03:13:53'),
(12, 'Wooden Heritage', 2, 1, '2016-07-07 03:14:12', 1, '2016-07-07 03:14:12'),
(14, 'abc', 1, 1, '2016-07-11 09:18:56', 1, '2016-07-11 09:18:56');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
