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
-- Table structure for table `tbl_resorts`
--

CREATE TABLE IF NOT EXISTS `tbl_resorts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `countryId` int(11) NOT NULL,
  `stateId` int(11) NOT NULL,
  `cityId` int(11) NOT NULL,
  `place_id` text NOT NULL,
  `address` text NOT NULL,
  `description` text NOT NULL,
  `listImageUrl` text NOT NULL,
  `xCoordinate` float NOT NULL,
  `yCoordinate` float NOT NULL,
  `createdBy` int(11) NOT NULL,
  `createdOn` datetime NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `updatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_resorts`
--

INSERT INTO `tbl_resorts` (`id`, `name`, `countryId`, `stateId`, `cityId`, `place_id`, `address`, `description`, `listImageUrl`, `xCoordinate`, `yCoordinate`, `createdBy`, `createdOn`, `updatedBy`, `updatedOn`) VALUES
(1, 'hotel', 91, 12, 12, '12', 'pune', 'ac room ', '', 0, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(2, 'ayurveda', 11, 11, 11, '11ser', 'fgbdfvd', 'fsfew', '', 33, 33, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
