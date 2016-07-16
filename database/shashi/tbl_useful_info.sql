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
-- Table structure for table `tbl_useful_info`
--

CREATE TABLE IF NOT EXISTS `tbl_useful_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resortId` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `Description` text NOT NULL,
  `Created_by` int(11) NOT NULL,
  `Created_on` datetime NOT NULL,
  `Updated_by` int(11) NOT NULL,
  `Updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_useful_info`
--

INSERT INTO `tbl_useful_info` (`id`, `resortId`, `heading`, `Description`, `Created_by`, `Created_on`, `Updated_by`, `Updated_on`) VALUES
(2, 2, 'shashiadd', 'bestadd', 1, '2016-07-09 11:10:07', 1, '2016-07-09 11:10:07'),
(3, 2, 'cdsf', 'sdfwef1', 1, '2016-07-09 09:35:53', 1, '2016-07-09 09:35:53'),
(4, 1, 'change', 'change', 1, '2016-07-09 10:56:19', 1, '2016-07-09 10:56:19'),
(7, 1, 'sxsxsx', 'sxsxsxsxsxs', 1, '2016-07-09 11:22:57', 1, '2016-07-09 11:22:57'),
(8, 1, 'testheadupdate', 'testdescupdate', 1, '2016-07-09 02:24:16', 1, '2016-07-09 02:24:16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
