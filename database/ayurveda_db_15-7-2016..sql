-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2016 at 08:34 AM
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
-- Table structure for table `tbl_employees`
--

CREATE TABLE IF NOT EXISTS `tbl_employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(30) NOT NULL,
  `middleName` varchar(30) DEFAULT NULL,
  `lastName` varchar(30) NOT NULL,
  `employeeTypeId` int(11) NOT NULL,
  `resortId` int(11) NOT NULL,
  `addressLine1` varchar(500) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `birthDate` datetime NOT NULL,
  `gender` char(1) NOT NULL,
  `emailId` varchar(100) NOT NULL,
  `officeEmailId` varchar(100) DEFAULT NULL,
  `mobileNo` varchar(10) NOT NULL,
  `password` varchar(300) NOT NULL,
  `oldPassword` varchar(300) DEFAULT NULL,
  `createdBy` int(11) NOT NULL,
  `createdOn` datetime NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `updatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `tbl_employees`
--

INSERT INTO `tbl_employees` (`id`, `firstName`, `middleName`, `lastName`, `employeeTypeId`, `resortId`, `addressLine1`, `age`, `birthDate`, `gender`, `emailId`, `officeEmailId`, `mobileNo`, `password`, `oldPassword`, `createdBy`, `createdOn`, `updatedBy`, `updatedOn`) VALUES
(3, 'Super ', 'E', 'Admin', 22, 0, 'dfgsdfg', 25, '0000-00-00 00:00:00', 'M', 'nalin', NULL, '9423792564', '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2015-12-29 07:46:50', 1, '2015-12-29 07:46:50'),
(35, 'Resort ', 'K', 'Admin1', 23, 3, 'yty', 23, '1992-01-24 00:00:00', 'm', 'resortadmin1@gmail.com', 'kkk@ss.com', '1234567890', '1afa72085c30c6bd27856a006f7a2f1f', '7363a0d0604902af7b70b271a0b96480', 3, '2016-07-12 02:56:37', 3, '2016-07-12 02:56:37'),
(36, 'Resort', 'Mansukhbhai', 'Admin2', 23, 3, 'dsdsd', 23, '1992-01-24 00:00:00', 'm', 'resortadmin2@gmail.l.com', 'jatin@gmail.com', '1234567890', 'aaf22ee710e7e1cb6ce6bbeebe156dce', 'c5fa5652e07356e3af15a18fb6f4dab1', 3, '2016-07-13 02:53:44', 3, '2016-07-13 02:53:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_types`
--

CREATE TABLE IF NOT EXISTS `tbl_employee_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `description` varchar(600) DEFAULT NULL,
  `createdBy` int(11) NOT NULL,
  `createdOn` datetime NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `updatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tbl_employee_types`
--

INSERT INTO `tbl_employee_types` (`id`, `name`, `description`, `createdBy`, `createdOn`, `updatedBy`, `updatedOn`) VALUES
(22, 'Super admin', 'He is the admin he handles the whole ERP System. He is able to add resorts and resort admin''s in the ERP.', 3, '2016-07-11 12:55:55', 3, '2016-07-11 12:55:55'),
(23, 'Resort Admin', 'This is the resort admin which is responsible for performing all operations on his resort like adding room in his perticular resort.', 3, '2016-07-11 12:56:08', 3, '2016-07-11 12:56:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_features`
--

CREATE TABLE IF NOT EXISTS `tbl_features` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `logo` text NOT NULL,
  `createdBy` int(11) NOT NULL,
  `createdOn` datetime NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `updatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_policies`
--

CREATE TABLE IF NOT EXISTS `tbl_policies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resortId` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `createdBy` int(11) NOT NULL,
  `createdOn` datetime NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `updatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `tbl_policies`
--

INSERT INTO `tbl_policies` (`id`, `resortId`, `heading`, `description`, `createdBy`, `createdOn`, `updatedBy`, `updatedOn`) VALUES
(20, 1, 'dfsdff', 'dfdf', 3, '2016-07-14 09:33:10', 3, '2016-07-14 09:33:10'),
(32, 3, 'awdwd', 'aadsdasd', 35, '2016-07-14 01:59:42', 35, '2016-07-14 01:59:42'),
(36, 3, 'jhmkjhkjhk', 'eytytyryrtyrtyrty', 35, '2016-07-15 06:25:28', 35, '2016-07-15 06:25:28'),
(37, 1, '2', '3', 3, '2016-07-15 08:22:01', 3, '2016-07-15 08:22:01');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_resorts`
--

INSERT INTO `tbl_resorts` (`id`, `name`, `countryId`, `stateId`, `cityId`, `place_id`, `address`, `description`, `listImageUrl`, `xCoordinate`, `yCoordinate`, `createdBy`, `createdOn`, `updatedBy`, `updatedOn`) VALUES
(1, 'Somatheeram', 0, 0, 0, 'ChIJv8a-SlENCDsRkkGEpcqC1Qs', 'cdcd', 'cdcd', '1467952901.jpg', 0, 0, 3, '2016-07-08 07:42:25', 3, '2016-07-08 09:05:10'),
(3, 'Yo Yo resort', 0, 0, 0, 'ChIJv8a-SlENCDsRkkGEpcqC1Qs', 'kochi, kerala.', 'No description.', '1467957892.jpg', 0, 0, 3, '2016-07-08 09:04:59', 3, '2016-07-08 09:04:59'),
(4, 'Kumarakom Lake Resort', 0, 0, 0, 'ChIJv8a-SlENCDsRkkGEpcqC1Qs', 'Kumarakom North Post - Kottayam:\n686 563, Kerala, India.\nTel: 00 91 481 2524900\nFax: 0091 481 2524987', 'Kumarakom Lake Resort, acclaimed as the finest luxury heritage resort in India, nestles on the serene banks of the Lake Vembanad, the vast stretch of tranquil, emerald green backwaters, in one of India’s popular holiday spots, Kerala.', '1468384146.jpg', 0, 0, 3, '2016-07-13 07:29:11', 3, '2016-07-13 07:29:11'),
(5, 'Vythiri Resort', 0, 0, 0, 'ChIJv8a-SlENCDsRkkGEpcqC1Qs', 'Vythiri Resort\nLakkidi P.O, Wayanad 673 576\nKerala, India.\nTel : +91 4936 256800\n+91 4936 255366\nMob: +092872 21130, +094470 55367\nFax : +91 4936 255368', 'Elegant, exclusive and in its essence a state of mind, the Vythiri Resort is an exquisite jungle getaway located in Wayanad, a largely mountainous district in northern Kerala, a state in the south of India. Situated beneath an enormous canopy of a lush tropical rainforest, journey into nature''s wonderland - in the company of amphibians, birds, fish, mammals, reptiles, flowering plants and butterflies that inhabit the dense Vythiri rainforest. You will be seduced by the promise of discovery, bliss and exaltation - body, mind and soul.', '1468384552.jpg', 0, 0, 3, '2016-07-13 07:35:58', 3, '2016-07-13 07:35:58'),
(6, 'Lion Wood', 0, 0, 0, 'ChIJv8a-SlENCDsRkkGEpcqC1Qs', 'Kochi', 'Nice', '1468563572.jpg', 0, 0, 3, '2016-07-15 09:19:34', 3, '2016-07-15 09:19:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resort_features`
--

CREATE TABLE IF NOT EXISTS `tbl_resort_features` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resortId` int(11) NOT NULL,
  `featureId` int(11) NOT NULL,
  `logo` text NOT NULL,
  `description` varchar(256) NOT NULL,
  `createdBy` int(11) NOT NULL,
  `createdOn` datetime NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `updatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resort_images`
--

CREATE TABLE IF NOT EXISTS `tbl_resort_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resortId` int(11) NOT NULL,
  `imageName` varchar(128) NOT NULL,
  `createdby` int(11) NOT NULL,
  `createdOn` datetime NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `updatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbl_resort_images`
--

INSERT INTO `tbl_resort_images` (`id`, `resortId`, `imageName`, `createdby`, `createdOn`, `updatedBy`, `updatedOn`) VALUES
(15, 0, '1468232301.jpg', 1, '2016-07-11 01:18:21', 1, '2016-07-11 01:18:21'),
(16, 0, '1468232368.jpg', 1, '2016-07-11 01:19:28', 1, '2016-07-11 01:19:28'),
(17, 0, '1468563668.jpg', 3, '2016-07-15 09:21:08', 3, '2016-07-15 09:21:08'),
(18, 0, '1468563786.jpg', 3, '2016-07-15 09:23:06', 3, '2016-07-15 09:23:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rooms`
--

CREATE TABLE IF NOT EXISTS `tbl_rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resortId` int(11) DEFAULT NULL,
  `roomTypeId` int(11) NOT NULL,
  `roomNo` int(11) NOT NULL,
  `status` varchar(128) NOT NULL,
  `numberOfBeds` int(11) NOT NULL,
  `costForExtraBed` int(11) NOT NULL,
  `costPerNight` int(11) NOT NULL,
  `size` float NOT NULL,
  `description` text NOT NULL,
  `windowView` varchar(128) NOT NULL,
  `createdBy` int(11) NOT NULL,
  `createdOn` datetime NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `updatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roomNo` (`roomNo`),
  UNIQUE KEY `roomNo_2` (`roomNo`),
  UNIQUE KEY `roomNo_3` (`roomNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_rooms`
--

INSERT INTO `tbl_rooms` (`id`, `resortId`, `roomTypeId`, `roomNo`, `status`, `numberOfBeds`, `costForExtraBed`, `costPerNight`, `size`, `description`, `windowView`, `createdBy`, `createdOn`, `updatedBy`, `updatedOn`) VALUES
(1, NULL, 6, 34, 'Availabal', 3, 150, 840, 34, 'vfvf', 'Sea View', 0, '2016-07-11 08:09:34', 3, '2016-07-15 09:10:46'),
(2, NULL, 9, 35, 'Availabal', 2, 450, 600, 44, 'fine', 'Sea View', 0, '2016-07-11 08:29:45', 3, '2016-07-14 07:26:15'),
(3, NULL, 10, 36, 'Availabal', 2, 600, 1750, 30, 'good', 'Loan View', 3, '2016-07-14 08:30:38', 3, '2016-07-14 08:30:38'),
(5, NULL, 9, 37, 'Availabal', 2, 850, 1800, 40, 'ddf', 'Loan View', 3, '2016-07-14 08:32:08', 3, '2016-07-14 08:32:08'),
(6, NULL, 6, 12, 'Availabal', 1, 11, 11, 12, '11', 'Sea View', 3, '2016-07-15 08:40:05', 3, '2016-07-15 08:40:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room_offers_benefites`
--

CREATE TABLE IF NOT EXISTS `tbl_room_offers_benefites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resortId` int(11) NOT NULL,
  `roomId` int(11) NOT NULL,
  `heading` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `createdBy` int(11) NOT NULL,
  `createdOn` datetime NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `updatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_room_offers_benefites`
--

INSERT INTO `tbl_room_offers_benefites` (`id`, `resortId`, `roomId`, `heading`, `description`, `createdBy`, `createdOn`, `updatedBy`, `updatedOn`) VALUES
(2, 0, 1, 'good', 'too good', 0, '2016-07-08 07:05:48', 3, '2016-07-15 09:16:52'),
(3, 0, 0, 'Diwali Offer limited', '10% discount For Couple', 0, '2016-07-08 08:55:21', 0, '2016-07-08 08:49:55'),
(4, 0, 0, 'dddd', 'ddd', 0, '2016-07-08 02:12:57', 0, '0000-00-00 00:00:00'),
(15, 0, 35, 'jhmkjhkjhk', 'jkjk', 3, '2016-07-15 09:18:05', 3, '2016-07-15 09:18:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room_type`
--

CREATE TABLE IF NOT EXISTS `tbl_room_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `resortId` int(11) NOT NULL,
  `createdBy` int(11) NOT NULL,
  `createdOn` datetime NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `updatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_room_type`
--

INSERT INTO `tbl_room_type` (`id`, `name`, `resortId`, `createdBy`, `createdOn`, `updatedBy`, `updatedOn`) VALUES
(6, 'Galaxy Room', 3, 3, '2016-07-15 09:03:57', 3, '2016-07-15 09:03:57'),
(9, 'Royal Bed', 2, 1, '2016-07-12 08:43:35', 1, '2016-07-12 08:43:35'),
(10, 'Junior Room', 3, 3, '2016-07-13 03:03:41', 3, '2016-07-13 03:03:41'),
(11, 'Kid''s Special', 3, 3, '2016-07-15 08:36:12', 3, '2016-07-15 08:36:12'),
(12, 'kid''s speclal', 4, 3, '2016-07-15 08:36:37', 3, '2016-07-15 08:36:37'),
(13, 'dfsdfdf', 3, 3, '2016-07-15 08:38:32', 3, '2016-07-15 08:38:32'),
(14, 'iiiuiiu', 5, 3, '2016-07-15 08:40:53', 3, '2016-07-15 08:40:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_star_ratings`
--

CREATE TABLE IF NOT EXISTS `tbl_star_ratings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resortId` int(11) NOT NULL,
  `travelerTypeId` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `hotelConditionCleanliness` float NOT NULL,
  `location` float NOT NULL,
  `staffPerformance` float NOT NULL,
  `foodDining` float NOT NULL,
  `facilities` float NOT NULL,
  `roomComfortStanderd` float NOT NULL,
  `valueForMoney` float NOT NULL,
  `heading` varchar(256) NOT NULL,
  `comment` text NOT NULL,
  `createdBy` int(11) NOT NULL,
  `createdOn` datetime NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `updatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_traveller_type`
--

CREATE TABLE IF NOT EXISTS `tbl_traveller_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  `createdBy` int(11) NOT NULL,
  `createdOn` datetime NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `updatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_useful_info`
--

CREATE TABLE IF NOT EXISTS `tbl_useful_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resortId` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `createdBy` int(11) NOT NULL,
  `createdOn` datetime NOT NULL,
  `updatedBy` int(11) NOT NULL,
  `updatedOn` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_useful_info`
--

INSERT INTO `tbl_useful_info` (`id`, `resortId`, `heading`, `description`, `createdBy`, `createdOn`, `updatedBy`, `updatedOn`) VALUES
(1, 2, 'Security', 'CCTV', 1, '2016-07-11 10:02:48', 1, '2016-07-11 10:02:48'),
(2, 3, 'About Us', '2', 3, '2016-07-13 03:21:43', 3, '2016-07-13 03:21:43'),
(3, 4, 'About Us', 'India''s No 1', 3, '2016-07-13 02:16:26', 3, '2016-07-13 02:16:26'),
(4, 4, 'About Us', 'yo yo', 3, '2016-07-13 03:19:09', 3, '2016-07-13 03:19:09'),
(5, 4, 'About Us', '52222', 3, '2016-07-13 03:23:47', 3, '2016-07-13 03:23:47');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
