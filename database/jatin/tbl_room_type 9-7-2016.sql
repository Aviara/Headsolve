-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2016 at 06:49 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `room_type` varchar(128) NOT NULL,
  `resortId` int(11) NOT NULL,
  `Created_by` int(11) NOT NULL,
  `Created_on` datetime NOT NULL,
  `Updated_by` int(11) NOT NULL,
  `Updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_room_type`
--

INSERT INTO `tbl_room_type` (`id`, `room_type`, `resortId`, `Created_by`, `Created_on`, `Updated_by`, `Updated_on`) VALUES
(1, 'Delux Master', 0, 1, '2016-06-12 00:00:00', 0, '0000-00-00 00:00:00'),
(2, 'Additional Kid''s room', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(3, 'Loft Room', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(4, 'Rock Star Suite', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(5, 'Luxury Suit', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
