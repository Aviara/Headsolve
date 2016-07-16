-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2016 at 09:01 AM
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
-- Table structure for table `tbl_resorts`
--

CREATE TABLE IF NOT EXISTS `tbl_resorts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `countryId` int(11) DEFAULT NULL,
  `stateId` int(11) DEFAULT NULL,
  `cityId` int(11) DEFAULT NULL,
  `place_id` text NOT NULL,
  `address` text NOT NULL,
  `description` text NOT NULL,
  `listImageUrl` text NOT NULL,
  `xCoordinate` text NOT NULL,
  `yCoordinate` text NOT NULL,
  `createdBy` int(11) NOT NULL,
  `createdOn` datetime NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `updatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_resorts`
--

INSERT INTO `tbl_resorts` (`id`, `name`, `countryId`, `stateId`, `cityId`, `place_id`, `address`, `description`, `listImageUrl`, `xCoordinate`, `yCoordinate`, `createdBy`, `createdOn`, `updatedBy`, `updatedOn`) VALUES
(1, 'Somatheeram', NULL, NULL, NULL, 'ChIJv8a-SlENCDsRkkGEpcqC1Qs', 'cdcd', 'cdcd', '1467952901.jpg', 'cvfvf', 'vfvfv', 3, '2016-07-08 07:42:25', 3, '2016-07-08 09:05:10'),
(3, 'Yo Yo resort', NULL, NULL, NULL, 'ChIJv8a-SlENCDsRkkGEpcqC1Qs', 'kochi, kerala.', 'No description.', '1467957892.jpg', 'cvfvf', 'vfvfv', 3, '2016-07-08 09:04:59', 3, '2016-07-08 09:04:59');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
