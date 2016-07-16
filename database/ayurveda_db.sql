-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2016 at 07:26 AM
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
-- Table structure for table `tbl_features`
--

CREATE TABLE IF NOT EXISTS `tbl_features` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `logo` text NOT NULL,
  `Created_by` int(11) NOT NULL,
  `Created_on` datetime NOT NULL,
  `Updated_by` int(11) NOT NULL,
  `Updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_policies`
--

CREATE TABLE IF NOT EXISTS `tbl_policies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resort_Id` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `Description` text NOT NULL,
  `Created_by` int(11) NOT NULL,
  `Created_on` datetime NOT NULL,
  `Updated_by` int(11) NOT NULL,
  `Updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resort_features`
--

CREATE TABLE IF NOT EXISTS `tbl_resort_features` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resort_Id` int(11) NOT NULL,
  `feature_Id` int(11) NOT NULL,
  `logo` text NOT NULL,
  `Description` varchar(256) NOT NULL,
  `Created_by` int(11) NOT NULL,
  `Created_on` datetime NOT NULL,
  `Updated_by` int(11) NOT NULL,
  `Updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resort_images`
--

CREATE TABLE IF NOT EXISTS `tbl_resort_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resortId` int(11) NOT NULL,
  `Image_name` varchar(128) NOT NULL,
  `Created_by` int(11) NOT NULL,
  `Created_on` datetime NOT NULL,
  `Updated_by` int(11) NOT NULL,
  `Updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rooms`
--

CREATE TABLE IF NOT EXISTS `tbl_rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resortId` int(11) NOT NULL,
  `roomno` int(11) NOT NULL,
  `room_type_Id` int(11) NOT NULL,
  `Status` varchar(128) NOT NULL,
  `Number_of_beds` int(11) NOT NULL,
  `Cost_for_extra_bed` int(11) NOT NULL,
  `Cost_per_night` int(11) NOT NULL,
  `size` float NOT NULL,
  `Description` text NOT NULL,
  `Window_view` varchar(128) NOT NULL,
  `Created_by` int(11) NOT NULL,
  `Created_on` datetime NOT NULL,
  `Updated_by` int(11) NOT NULL,
  `Updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room_offers_benefites`
--

CREATE TABLE IF NOT EXISTS `tbl_room_offers_benefites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resortId` int(11) NOT NULL,
  `room_Id` int(11) NOT NULL,
  `heading` varchar(128) NOT NULL,
  `Description` text NOT NULL,
  `Created_by` int(11) NOT NULL,
  `Created_on` datetime NOT NULL,
  `Updated_by` int(11) NOT NULL,
  `Updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room_type`
--

CREATE TABLE IF NOT EXISTS `tbl_room_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_type` varchar(128) NOT NULL,
  `Created_by` int(11) NOT NULL,
  `Created_on` datetime NOT NULL,
  `Updated_by` int(11) NOT NULL,
  `Updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_star_ratings`
--

CREATE TABLE IF NOT EXISTS `tbl_star_ratings` (
  `1	id` int(11) NOT NULL AUTO_INCREMENT,
  `resort_Id` int(11) NOT NULL,
  `traveler_type_Id` int(11) NOT NULL,
  `Customer_Id` int(11) NOT NULL,
  `Hotel_condition_cleanliness` int(11) NOT NULL,
  `Location` int(11) NOT NULL,
  `Staff_performance` int(11) NOT NULL,
  `Food_dining` int(11) NOT NULL,
  `Facilities` int(11) NOT NULL,
  `Room_comfort_standerd` int(11) NOT NULL,
  `Value_for_money` int(11) NOT NULL,
  `Heading` varchar(256) NOT NULL,
  `Comment` text NOT NULL,
  `Date` datetime NOT NULL,
  `Created_by` int(11) NOT NULL,
  `Created_on` datetime NOT NULL,
  `Updated_by` int(11) NOT NULL,
  `Updated_on` datetime NOT NULL,
  PRIMARY KEY (`1	id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
