-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2016 at 08:58 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laundry_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `area_id` int(11) NOT NULL AUTO_INCREMENT,
  `area` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city_id` int(11) NOT NULL,
  PRIMARY KEY (`area_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area`, `city_id`) VALUES
(1, 'vimannagar', 1),
(2, 'Sb road', 1),
(3, 'Lavale', 1);

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE IF NOT EXISTS `branches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `location` varchar(300) NOT NULL,
  `address_line1` varchar(500) DEFAULT NULL,
  `address_line2` varchar(500) DEFAULT NULL,
  `branch_code` varchar(20) NOT NULL,
  `available_machine` int(11) DEFAULT '0',
  `employee_count` int(11) DEFAULT '0',
  `delivery_boy_count` int(11) DEFAULT '0',
  `manager_id` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `description`, `location`, `address_line1`, `address_line2`, `branch_code`, `available_machine`, `employee_count`, `delivery_boy_count`, `manager_id`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'Pune', 'Pune near Vimanagar', 'Vimanagar', 'Vimanagar', 'Vimanagar', 'Vimanagar', 12, 30, 10, NULL, 1, '2015-12-05 09:20:59', 1, '2015-12-05 09:20:59'),
(2, 'kharadi', 'descriptoin', 'kharadi', 'add1', 'add2', '12', 45, 13, 10, NULL, 1, '2015-12-05 09:40:14', 1, '2015-12-05 09:40:14'),
(3, 'kharadi', 'descriptoin', 'kharadi', 'add1', 'add2', '12', 45, 13, 10, NULL, 1, '2015-12-05 09:40:20', 1, '2015-12-05 09:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `challanes`
--

CREATE TABLE IF NOT EXISTS `challanes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `pick_up_date` datetime NOT NULL,
  `delivery_estimate_date` datetime DEFAULT NULL,
  `delivery_date` datetime DEFAULT NULL,
  `special_request` text,
  `washing_status_id` int(11) NOT NULL,
  `urgent_required` int(11) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `delivery_status_id` int(11) NOT NULL,
  `delivery_by` int(11) DEFAULT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `challanes`
--

INSERT INTO `challanes` (`id`, `client_id`, `employee_id`, `pick_up_date`, `delivery_estimate_date`, `delivery_date`, `special_request`, `washing_status_id`, `urgent_required`, `priority`, `delivery_status_id`, `delivery_by`, `updated_by`, `updated_on`, `created_by`, `created_on`) VALUES
(7, 1, 1, '2015-12-11 06:20:06', '2015-12-18 06:20:06', '2015-12-18 06:20:06', NULL, 1, NULL, NULL, 7, NULL, 6, '2015-12-29 04:34:49', 1, '2015-12-11 05:46:23'),
(8, 1, 1, '2015-12-16 02:25:13', '2015-12-23 02:25:13', '2015-12-23 02:25:13', NULL, 1, NULL, NULL, 7, NULL, 6, '2015-12-29 04:35:11', 1, '2015-12-16 02:25:13'),
(9, 1, 1, '2015-12-16 03:07:48', '2015-12-23 03:07:48', '2015-12-23 03:07:48', NULL, 1, NULL, NULL, 2, NULL, 17, '2016-01-19 11:37:41', 1, '2015-12-16 02:32:17'),
(10, 2, 1, '2015-12-17 12:22:47', '2015-12-24 12:22:47', '2015-12-24 12:22:47', NULL, 1, NULL, NULL, 2, NULL, 17, '2016-01-19 09:52:24', 1, '2015-12-17 12:10:13'),
(11, 2, 1, '2015-12-18 09:06:01', '2015-12-25 09:06:01', '2015-12-25 09:06:01', NULL, 1, NULL, NULL, 7, NULL, 6, '2015-12-29 04:35:31', 1, '2015-12-18 09:06:01'),
(12, 2, 1, '2015-12-29 07:36:58', '2016-01-05 07:36:58', '2016-01-05 07:36:58', NULL, 1, NULL, NULL, 1, NULL, 1, '2015-12-29 07:36:58', 1, '2015-12-29 07:36:58'),
(13, 1, 1, '2016-01-02 03:56:16', '2016-01-09 03:56:16', '2016-01-09 03:56:16', NULL, 1, NULL, NULL, 1, NULL, 1, '2016-01-02 03:56:16', 1, '2016-01-02 03:56:16'),
(14, 1, 1, '2016-01-20 08:14:53', '2016-01-27 08:14:53', '2016-01-27 08:14:53', NULL, 1, NULL, NULL, 2, NULL, 17, '2016-01-20 10:16:33', 1, '2016-01-02 04:40:10'),
(15, 4, 11, '2016-01-02 05:32:29', '2016-01-09 05:32:29', '2016-01-09 05:32:29', NULL, 1, NULL, NULL, 2, NULL, 17, '2016-01-20 10:17:22', 11, '2016-01-02 05:32:29'),
(16, 5, 11, '2016-01-03 10:14:13', '2016-01-10 10:14:13', '2016-01-10 10:14:13', NULL, 1, NULL, NULL, 2, NULL, 17, '2016-01-20 10:17:41', 11, '2016-01-03 10:14:13'),
(17, 6, 1, '2016-01-03 04:40:35', '2016-01-10 04:40:35', '2016-01-10 04:40:35', NULL, 1, NULL, NULL, 6, NULL, 15, '2016-01-03 05:10:43', 11, '2016-01-03 04:15:07'),
(18, 4, 11, '2016-01-11 10:04:39', '2016-01-13 10:04:39', '2016-01-13 10:04:39', NULL, 1, NULL, NULL, 1, NULL, 11, '2016-01-11 10:04:39', 11, '2016-01-11 10:04:39'),
(19, 2, 11, '2016-01-11 10:08:00', '2016-01-13 10:08:00', '2016-01-13 10:08:00', NULL, 1, NULL, NULL, 1, NULL, 11, '2016-01-11 10:08:00', 11, '2016-01-11 10:08:00'),
(20, 7, 11, '2016-01-11 10:14:38', '2016-01-13 10:14:38', '2016-01-13 10:14:38', NULL, 1, NULL, NULL, 2, NULL, 17, '2016-01-11 10:44:51', 11, '2016-01-11 10:14:38');

-- --------------------------------------------------------

--
-- Table structure for table `challan_status_logs`
--

CREATE TABLE IF NOT EXISTS `challan_status_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `challan_id` int(11) NOT NULL,
  `delivery_status_id` int(11) NOT NULL,
  `old_delivery_status_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `challan_status_logs`
--

INSERT INTO `challan_status_logs` (`id`, `challan_id`, `delivery_status_id`, `old_delivery_status_id`, `created_by`, `created_on`) VALUES
(1, 7, 7, 1, 6, '2015-12-29 04:33:21'),
(2, 7, 7, 1, 6, '2015-12-29 04:33:21'),
(3, 7, 7, 1, 6, '2015-12-29 04:33:21'),
(4, 7, 7, 7, 6, '2015-12-29 04:34:49'),
(5, 8, 7, 2, 6, '2015-12-29 04:35:11'),
(6, 9, 7, 5, 6, '2015-12-29 04:35:20'),
(7, 11, 7, 7, 6, '2015-12-29 04:35:31'),
(8, 13, 1, 0, 1, '2016-01-02 03:56:16'),
(9, 13, 1, 0, 1, '2016-01-02 03:56:16'),
(10, 14, 1, 0, 1, '2016-01-02 04:40:10'),
(11, 14, 1, 0, 1, '2016-01-02 04:40:10'),
(12, 15, 1, 0, 11, '2016-01-02 05:32:29'),
(13, 15, 1, 0, 11, '2016-01-02 05:32:29'),
(14, 15, 4, 1, 12, '2016-01-02 05:37:59'),
(15, 16, 1, 0, 11, '2016-01-03 10:14:13'),
(16, 16, 1, 0, 11, '2016-01-03 10:14:13'),
(17, 17, 1, 0, 11, '2016-01-03 04:15:07'),
(18, 17, 1, 0, 11, '2016-01-03 04:15:07'),
(19, 16, 2, 1, 17, '2016-01-03 04:31:06'),
(20, 17, 2, 1, 17, '2016-01-03 04:32:55'),
(21, 17, 2, 1, 17, '2016-01-03 04:41:55'),
(22, 16, 3, 2, 13, '2016-01-03 04:47:37'),
(23, 17, 3, 2, 13, '2016-01-03 04:47:43'),
(24, 17, 3, 3, 13, '2016-01-03 04:48:08'),
(25, 16, 4, 3, 12, '2016-01-03 04:56:37'),
(26, 17, 4, 3, 12, '2016-01-03 04:57:23'),
(27, 16, 5, 4, 14, '2016-01-03 04:59:30'),
(28, 17, 5, 4, 14, '2016-01-03 04:59:41'),
(29, 16, 6, 5, 15, '2016-01-03 05:10:35'),
(30, 17, 6, 5, 15, '2016-01-03 05:10:43'),
(31, 16, 7, 6, 16, '2016-01-03 05:44:57'),
(32, 18, 1, 0, 11, '2016-01-11 10:04:39'),
(33, 18, 1, 0, 11, '2016-01-11 10:04:39'),
(34, 19, 1, 0, 11, '2016-01-11 10:08:00'),
(35, 19, 1, 0, 11, '2016-01-11 10:08:00'),
(36, 20, 1, 0, 11, '2016-01-11 10:14:38'),
(37, 20, 1, 0, 11, '2016-01-11 10:14:38'),
(38, 20, 2, 1, 17, '2016-01-11 10:44:51'),
(39, 10, 2, 1, 17, '2016-01-19 09:52:16'),
(40, 9, 2, 7, 17, '2016-01-19 11:37:24'),
(41, 14, 2, 1, 17, '2016-01-20 10:16:30'),
(42, 15, 2, 4, 17, '2016-01-20 10:17:08'),
(43, 16, 2, 7, 17, '2016-01-20 10:17:35');

-- --------------------------------------------------------

--
-- Table structure for table `challan_time_logs`
--

CREATE TABLE IF NOT EXISTS `challan_time_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `challan_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `start_on` datetime NOT NULL,
  `completed_on` datetime DEFAULT NULL,
  `employee_type_id` int(11) NOT NULL,
  `delivery_status_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `challan_time_logs`
--

INSERT INTO `challan_time_logs` (`id`, `challan_id`, `employee_id`, `start_on`, `completed_on`, `employee_type_id`, `delivery_status_id`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 20, 17, '2016-01-11 10:44:51', NULL, 10, 2, 17, '2016-01-11 10:44:51', 17, '2016-01-11 10:44:51'),
(2, 10, 17, '2016-01-19 09:52:16', '2016-01-19 09:52:24', 10, 2, 17, '2016-01-19 09:52:16', 17, '2016-01-19 09:52:24'),
(3, 9, 17, '2016-01-19 11:37:24', '2016-01-19 11:37:41', 10, 2, 17, '2016-01-19 11:37:24', 17, '2016-01-19 11:37:41'),
(4, 14, 17, '2016-01-20 10:16:30', '2016-01-20 10:16:33', 10, 2, 17, '2016-01-20 10:16:30', 17, '2016-01-20 10:16:33'),
(5, 15, 17, '2016-01-20 10:17:08', '2016-01-20 10:17:22', 10, 2, 17, '2016-01-20 10:17:08', 17, '2016-01-20 10:17:22'),
(6, 16, 17, '2016-01-20 10:17:35', '2016-01-20 10:17:41', 10, 2, 17, '2016-01-20 10:17:35', 17, '2016-01-20 10:17:41');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city name`) VALUES
(2, 'Raipur');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) NOT NULL,
  `mobile_no` varchar(10) DEFAULT NULL,
  `email_id` varchar(100) DEFAULT NULL,
  `home_no` varchar(16) DEFAULT NULL,
  `address_line1` varchar(600) DEFAULT NULL,
  `address_line2` varchar(600) DEFAULT NULL,
  `location` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `pin_code` char(6) NOT NULL,
  `customer_type_id` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `first_name`, `middle_name`, `last_name`, `mobile_no`, `email_id`, `home_no`, `address_line1`, `address_line2`, `location`, `area`, `pin_code`, `customer_type_id`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'Somnath', 'E', 'Shinde', '9665781284', 'soma.shinde@gmail.com', '9665781284', 'Test address this is.', 'Working address wil be here.', 'Kharadi', 'Chandannagar', '411014', 1, 1, '2015-12-05 02:34:20', 1, '2015-12-05 02:34:20'),
(2, 'Sonal', 'M', 'yadhav', '9665781284', 'sonaly@gmail.com', '9665781284', 'Akluj', 'Aklu', 'Akluj', 'Akluj', '411013', 2, 1, '2015-12-14 09:23:41', 1, '2015-12-14 09:23:41'),
(4, 'Abhishek', 'S', 'Jain', '9179674321', 'nalinagarwal489@gmail.com', '8888888888', 'Kusum Complex', 'Shankar Nagar', 'Raipur', 'Shankar Nagar', '492007', 0, 11, '2016-01-02 05:31:12', 11, '2016-01-02 05:31:12'),
(5, 'Satish', 'S', 'Jain', '2289224910', 'nalinagarwal489@gmail.com', '1902919201', 'Shankar Nagar', 'Shankar Nagar', 'Raipur', 'Raipur', '492007', 0, 11, '2016-01-03 10:12:41', 11, '2016-01-03 10:12:41'),
(6, 'Poorva', 'S', 'Jain', '1293485838', 'snsndjs', '19238491023', 'Shankar Nagar', 'Shankar Nagar', 'Raipur', 'Raipur', '492007', 0, 11, '2016-01-03 04:08:19', 11, '2016-01-03 04:08:19'),
(7, 'K', 'K', 'Tiwari', '9826289877', 'kktiwari@gmail.com', '1382834929492', 'Krishnam Hotel', 'Near Station Road', 'Station', 'Raipur', '492007', 0, 11, '2016-01-11 10:13:38', 11, '2016-01-11 10:13:38');

-- --------------------------------------------------------

--
-- Table structure for table `client_data`
--

CREATE TABLE IF NOT EXISTS `client_data` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `client_data`
--

INSERT INTO `client_data` (`c_id`, `name`, `mobile`, `email`, `city`, `area`, `address`, `date`) VALUES
(1, 'Pankaj Godhani', '9601309052', 'godhanipnj131@gmail.com', 'Raipur', '', 'Sarthak ,Pune-411060', '2015-10-31 06:56:15'),
(2, 'pnj', '9601309052', 'godhanipnj131@gmail.com', 'Raipur', '', 'pune.', '2015-11-02 04:25:02'),
(3, 'sandip bhanderi', '7507683413', 'godhani.pankaj@yahoo.in', 'Raipur', '', 'Test Address', '2015-11-03 17:09:53'),
(4, 'diwali', '9875986365', '', 'Raipur', '', 'raipur', '2015-11-04 07:52:11'),
(5, 'nalin', '9890505489', 'nalinagarwal489@gmail.com', 'Raipur', '', 'vdjbhkl', '2015-11-06 13:39:23'),
(6, 'Nalim', '9890505489', '', 'Raipur', '', 'test', '2015-11-07 07:35:04'),
(7, 'Ajay Kumar ', '8103588866', 'ajayamrate@gmail.com', 'Raipur', '', '408 , 4th floor , Magneto Mall , offizo ', '2015-11-17 06:30:48'),
(8, 'sneha', '9960513144', 'snehahotkar1@gmail.com', 'Raipur', '', 'khradi,pune', '2015-11-20 11:44:40'),
(9, 'Sameer', '8109104858', 'sameer.b089@gmail.com', 'Raipur', '', 'E-7 Shivaji Park, Vidhan Sabha Road, Saddu', '2015-11-22 06:09:54'),
(10, 'Sameer', '8109104858', 'sameer.b089@gmail.com', 'Raipur', '', 'E-7 ShivajiPark,VidhanSVidhan Sabha Road, Saddu', '2015-11-23 08:55:51'),
(11, 'Vikram ', '8889908090', '', 'Raipur', '', 'Cross road society, amlidih raipur', '2015-11-23 14:24:08'),
(12, 'Sameer', '8109104858', 'sameer.b089@gmail.com', 'Raipur', '', 'E-7 Shivaji Park, Vidhan Sabha Road,Saddu', '2015-11-24 07:34:56'),
(13, 'MANOJ', '9669442244', '', 'Raipur', '', 'Rainbow Academy, L.I.G, E-23, Near HDFC Bank, Shailendra Nagar, Raipur', '2015-12-06 15:35:54'),
(14, 's fg', '9235252535', '', 'Raipur', '', '226vedddbtyje6', '2015-12-11 12:22:08'),
(15, 'Saurabh Mishra', '8085077580', '', 'Raipur', '', 'F-603, Golden Sky Apartments VIP Road Bear Hotel Grand Imperia Raipur', '2015-12-24 09:11:20'),
(16, 'Imtiyaz', '9993487457', 'imtiyazhusain11@yahoo.in', 'Raipur', '', 'Opp.ekta enclave,Byron bazar ', '2015-12-28 04:39:56');

-- --------------------------------------------------------

--
-- Table structure for table `client_types`
--

CREATE TABLE IF NOT EXISTS `client_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `description` varchar(600) NOT NULL,
  `is_published` int(11) NOT NULL,
  `order_by` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cloth_info`
--

CREATE TABLE IF NOT EXISTS `cloth_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `challan_id` int(11) NOT NULL,
  `cloth_type_id` int(11) NOT NULL,
  `total_item_count` int(11) NOT NULL,
  `total_kg` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `is_iron` int(11) DEFAULT NULL,
  `washing_powder_type_id` int(11) DEFAULT NULL,
  `washing_status_id` tinyint(1) NOT NULL,
  `urgent_required` tinyint(1) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `cloth_info`
--

INSERT INTO `cloth_info` (`id`, `challan_id`, `cloth_type_id`, `total_item_count`, `total_kg`, `package_id`, `is_iron`, `washing_powder_type_id`, `washing_status_id`, `urgent_required`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(29, 7, 4, 2, 2, 1, 0, 1, 1, 0, 1, '2015-12-11 05:46:24', 1, '2015-12-11 06:20:06'),
(30, 7, 2, 3, 3, 2, 1, 1, 1, 0, 1, '2015-12-11 05:46:24', 1, '2015-12-11 06:20:06'),
(31, 8, 1, 2, 2, 3, 0, 1, 1, 0, 1, '2015-12-16 02:25:14', 1, '2015-12-16 02:25:14'),
(32, 9, 1, 6, 4, 2, 0, 1, 1, 0, 1, '2015-12-16 02:32:18', 1, '2015-12-16 03:07:49'),
(33, 9, 2, 6, 4, 2, 0, 1, 1, 0, 0, '0000-00-00 00:00:00', 1, '2015-12-16 03:07:49'),
(34, 10, 2, 2, 3, 1, 0, 1, 1, 0, 1, '2015-12-17 12:10:13', 1, '2015-12-17 12:22:47'),
(35, 11, 1, 3, 4, 1, 0, 1, 1, 0, 1, '2015-12-18 09:06:01', 1, '2015-12-18 09:06:01'),
(36, 12, 3, 6, 6, 1, 0, 1, 1, 0, 1, '2015-12-29 07:36:58', 1, '2015-12-29 07:36:58'),
(37, 13, 2, 4, 4, 1, 0, 1, 1, 0, 1, '2016-01-02 03:56:16', 1, '2016-01-02 03:56:16'),
(38, 14, 1, 10, 5, 1, 0, 1, 1, 0, 1, '2016-01-02 04:40:10', 1, '2016-01-20 08:14:53'),
(39, 15, 1, 5, 3, 1, 0, 1, 1, 0, 11, '2016-01-02 05:32:29', 11, '2016-01-02 05:32:29'),
(40, 15, 2, 3, 3, 1, 0, 1, 1, 0, 11, '2016-01-02 05:32:29', 11, '2016-01-02 05:32:29'),
(41, 15, 3, 2, 3, 1, 0, 1, 1, 0, 11, '2016-01-02 05:32:29', 11, '2016-01-02 05:32:29'),
(42, 16, 1, 3, 6, 2, 0, 1, 1, 0, 11, '2016-01-03 10:14:13', 11, '2016-01-03 10:14:13'),
(43, 16, 2, 3, 6, 2, 0, 1, 1, 0, 11, '2016-01-03 10:14:13', 11, '2016-01-03 10:14:13'),
(44, 16, 3, 2, 6, 2, 0, 1, 1, 0, 11, '2016-01-03 10:14:13', 11, '2016-01-03 10:14:13'),
(45, 16, 4, 4, 6, 2, 0, 1, 1, 0, 11, '2016-01-03 10:14:13', 11, '2016-01-03 10:14:13'),
(46, 17, 1, 10, 9, 3, 0, 1, 1, 0, 11, '2016-01-03 04:15:07', 1, '2016-01-03 04:40:35'),
(47, 17, 2, 2, 9, 3, 0, 1, 1, 0, 11, '2016-01-03 04:15:07', 1, '2016-01-03 04:40:35'),
(48, 17, 5, 3, 9, 3, 0, 1, 1, 0, 11, '2016-01-03 04:15:07', 1, '2016-01-03 04:40:35'),
(49, 17, 4, 1, 9, 3, 0, 1, 1, 0, 11, '2016-01-03 04:15:07', 1, '2016-01-03 04:40:35'),
(50, 18, 1, 5, 6, 3, 0, 1, 1, 0, 11, '2016-01-11 10:04:39', 11, '2016-01-11 10:04:39'),
(51, 18, 2, 4, 6, 3, 0, 1, 1, 0, 11, '2016-01-11 10:04:39', 11, '2016-01-11 10:04:39'),
(52, 18, 5, 1, 6, 3, 0, 1, 1, 0, 11, '2016-01-11 10:04:39', 11, '2016-01-11 10:04:39'),
(53, 19, 3, 4, 12, 2, 0, 1, 1, 0, 11, '2016-01-11 10:08:00', 11, '2016-01-11 10:08:00'),
(54, 19, 2, 2, 12, 2, 0, 1, 1, 0, 11, '2016-01-11 10:08:00', 11, '2016-01-11 10:08:00'),
(55, 19, 5, 1, 12, 2, 0, 1, 1, 0, 11, '2016-01-11 10:08:00', 11, '2016-01-11 10:08:00'),
(56, 20, 1, 12, 6, 1, 0, 1, 1, 0, 11, '2016-01-11 10:14:38', 11, '2016-01-11 10:14:38'),
(57, 20, 2, 6, 6, 1, 0, 1, 1, 0, 11, '2016-01-11 10:14:38', 11, '2016-01-11 10:14:38'),
(58, 20, 5, 1, 6, 1, 0, 1, 1, 0, 11, '2016-01-11 10:14:38', 11, '2016-01-11 10:14:38'),
(59, 14, 2, 5, 5, 1, 0, 1, 1, 0, 0, '0000-00-00 00:00:00', 1, '2016-01-20 08:14:53'),
(60, 14, 3, 3, 5, 1, 0, 1, 1, 0, 0, '0000-00-00 00:00:00', 1, '2016-01-20 08:14:53');

-- --------------------------------------------------------

--
-- Table structure for table `cloth_types`
--

CREATE TABLE IF NOT EXISTS `cloth_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `description` varchar(600) NOT NULL,
  `merger_type` int(11) DEFAULT NULL,
  `iron_price` int(11) NOT NULL,
  `gold_per_kg_price` int(11) DEFAULT NULL,
  `gold_per_item_price` int(11) DEFAULT NULL,
  `silver_per_kg_price` int(11) DEFAULT NULL,
  `silver_per_item_price` int(11) DEFAULT NULL,
  `platinum_per_kg_price` int(11) DEFAULT NULL,
  `platinum_per_item_price` int(11) DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `created_by` datetime NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cloth_types`
--

INSERT INTO `cloth_types` (`id`, `name`, `description`, `merger_type`, `iron_price`, `gold_per_kg_price`, `gold_per_item_price`, `silver_per_kg_price`, `silver_per_item_price`, `platinum_per_kg_price`, `platinum_per_item_price`, `package_id`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'Shirt', 'Shirt', 1, 20, 60, 20, 80, 25, 90, 35, NULL, '0000-00-00 00:00:00', '2015-12-05 04:57:27', 1, '2015-12-11 09:40:18'),
(2, 'Pant', 'pant', 3, 15, 60, 20, 140, 100, 90, 35, NULL, '0000-00-00 00:00:00', '2015-12-09 09:50:04', 1, '2015-12-11 09:40:25'),
(3, 'Sadi', 'Sadi', 3, 25, 60, 20, 50, 25, 40, 20, NULL, '0000-00-00 00:00:00', '2015-12-09 09:55:43', 1, '2015-12-11 09:40:32'),
(4, 'Blankate', 'Blankate', 3, 30, 60, 100, 80, 90, 90, 70, NULL, '0000-00-00 00:00:00', '2015-12-09 11:25:01', 1, '2015-12-29 07:35:56'),
(5, 'Jackaet', 'Jacket', 3, 35, 60, 120, 80, 100, 90, 60, NULL, '0000-00-00 00:00:00', '2015-12-10 12:48:58', 1, '2015-12-29 07:36:06');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `message`) VALUES
(1, 'sanip', 'sanddy.bhanderi@gmail.com', '7507683413', 'good morning sir'),
(2, 'pankaj', 'godhani.pankaj131@yahoo.co', '8758607151', 'your msg..'),
(3, 'pankaj patel', 'godhani.pankaj@yahoo.in', '9601309052', 'your msg..'),
(4, 'bhadrehs', 'pipaliya@yahoo.in', '9722753237', 'hello..'),
(5, 'bhdresh', 'bhdresh@yahoo.in', '9722753237', 'bhdresh msg..');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_status`
--

CREATE TABLE IF NOT EXISTS `delivery_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `description` varchar(600) NOT NULL,
  `employee_type_id` int(11) NOT NULL,
  `order_by` int(11) NOT NULL,
  `is_published` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `delivery_status`
--

INSERT INTO `delivery_status` (`id`, `name`, `description`, `employee_type_id`, `order_by`, `is_published`, `updated_by`, `updated_on`, `created_by`, `created_on`) VALUES
(1, 'Picked UP', 'Picked UP', 7, 1, 1, 1, '2015-12-11 00:00:00', 1, '2015-12-11 00:00:00'),
(2, 'Labeled', 'Labeled', 10, 2, 1, 1, '2015-12-11 00:00:00', 1, '2015-12-11 00:00:00'),
(3, 'Washing', 'Washing', 4, 3, 1, 1, '2015-12-18 00:00:00', 1, '2015-12-18 00:00:00'),
(4, 'Ironing', 'Ironing', 3, 4, 1, 1, '2015-12-11 00:00:00', 1, '2015-12-11 00:00:00'),
(5, 'Packging', 'Packging', 5, 5, 1, 1, '2015-12-18 00:00:00', 1, '2015-12-18 00:00:00'),
(6, 'Disparched', 'Disparched', 6, 6, 1, 1, '2015-12-11 00:00:00', 1, '2015-12-11 00:00:00'),
(7, 'Delivered', 'Delivered', 9, 7, 1, 1, '2015-12-18 00:00:00', 1, '2015-12-18 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) NOT NULL,
  `employee_type_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `pan_no` varchar(20) DEFAULT NULL,
  `address_line1` varchar(500) DEFAULT NULL,
  `address_line2` varchar(600) DEFAULT NULL,
  `driving_listien_no` varchar(20) DEFAULT NULL,
  `adhar_no` varchar(30) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `birth_date` datetime NOT NULL,
  `gender` char(1) NOT NULL,
  `email_id` varchar(100) DEFAULT NULL,
  `office_email_id` varchar(100) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `location` varchar(600) NOT NULL,
  `area` varchar(100) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `home_no` varchar(10) DEFAULT NULL,
  `password` varchar(300) NOT NULL,
  `old_password` varchar(300) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `branch_id`, `first_name`, `middle_name`, `last_name`, `employee_type_id`, `city_id`, `pan_no`, `address_line1`, `address_line2`, `driving_listien_no`, `adhar_no`, `age`, `birth_date`, `gender`, `email_id`, `office_email_id`, `city`, `location`, `area`, `mobile_no`, `home_no`, `password`, `old_password`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 0, 'Nalin', '', 'Agarwal', 1, 0, '12456445', 'Kharadi', 'Kharadi', 'D5454DU', '44547212165464565', 26, '0000-00-00 00:00:00', 'M', 'Nalin', 'soma.shinde@gmail.com', 'Pune', 'Pune', 'MH', '9665781284', '9665781284', '15fc31cd6ffb8d65aecd4e61e8d33f08', '15fc31cd6ffb8d65aecd4e61e8d33f08', 1, '2015-12-05 11:17:34', 1, '2015-12-05 11:17:34'),
(2, 0, 'Sonal', 'M', 'yadhav', 3, 0, '3465456456', 'Kharadi', 'sdfsdsd', 'DHHD9wer47', '4e345365346456', 26, '0000-00-00 00:00:00', 'F', 'sonal@gmail.com', NULL, 'Pune', 'Akluj', 'Akluj', '9665781284', '9665781284', '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2015-12-29 07:43:58', 1, '2015-12-29 07:43:58'),
(3, 0, 'Kiran', 'E', 'Shinde', 4, 0, '34536356', 'dfgsdfg', 'fgdfgdfg', 'w987347', '349834774397', 25, '0000-00-00 00:00:00', 'M', 'kiran@gmail.com', NULL, 'Pune', 'Pune', 'Pune', '9423792564', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2015-12-29 07:46:50', 1, '2015-12-29 07:46:50'),
(4, 0, 'Vikas', 'M', 'Raut', 5, 0, '345sdgf', 'sdgsf', 'dfgdfg', '345734875', '3479347', 27, '0000-00-00 00:00:00', 'M', 'vikas@gmail.com', NULL, 'Puine', 'Puine', 'Puine', '9970509084', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2015-12-29 07:47:50', 1, '2015-12-29 07:47:50'),
(5, 0, 'Anil', 'm', 'Waghmode', 6, 0, '34597', 'sdfksdh', 'sdfsjl', '3487349d', '3475384', 28, '0000-00-00 00:00:00', 'M', 'anil@gmil.com', 'anil@gmil.com', 'Pune', 'Pune', 'Pune', '9876543210', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2015-12-29 07:49:10', 1, '2015-12-29 07:49:10'),
(6, 0, 'Delivery', 'b', 'Delivery', 9, 0, 'sgwe53456', 'dsgdfgdfg', 'sfsdf', 'sgdf3466', 'dfg4547', 30, '0000-00-00 00:00:00', 'M', 'delivery@gmail.com', NULL, 'Pune', 'Pune', 'Pune', '8899665577', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2015-12-29 03:44:47', 1, '2015-12-29 03:45:16'),
(7, 0, 'PickUP', 'p', 'PickUP', 7, 0, 'hh345345', 'sddfkjhsdh', 'ksdhfhsdfj', 'sdfsd45', 'sddg5446453', 30, '0000-00-00 00:00:00', 'F', 'pickup@gmail.com', NULL, 'Pune', 'Pune', 'Pune', '4455667722', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2015-12-29 03:48:48', 1, '2015-12-29 03:48:48'),
(8, 0, 'Accounts', 'A', 'Accounts', 8, 0, 'sdf435456', 'Kharadi', 'Kharadi', 'sdfsdf34545656', '345346dfg', 30, '0000-00-00 00:00:00', 'M', 'accounts@gmail.com', 'accounts@gmail.com', 'Pune', 'Pune', 'Pune', '9423792564', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2016-01-02 02:44:47', 1, '2016-01-02 02:44:47'),
(10, 0, 'Honey', 'S', 'Jain', 2, 0, 'dshf137237hsh', 'Shankar Nagar', 'Shankar Nagar', 'efedhf23323', 'dkvkd24233', 32, '0000-00-00 00:00:00', 'F', 'honey@tlb.co.in', NULL, 'Raipur', 'Raipur', 'Shankar Nagar', '9890505489', '9890505489', '15fc31cd6ffb8d65aecd4e61e8d33f08', '15fc31cd6ffb8d65aecd4e61e8d33f08', 1, '2016-01-02 05:00:21', 1, '2016-01-02 05:00:21'),
(11, 0, 'Bhavesh', 'S', 'Jain', 7, 0, 'fgshjs1243js', 'Shankar Nagar', 'Shankar Nagar', 'shfdgah12433', 'dhgfgs1323', 24, '0000-00-00 00:00:00', 'M', 'bhavesh@tlb.co.in', NULL, 'Raipur', 'Raipur', 'Shankar Nagar', '9890505489', '9890505489', '15fc31cd6ffb8d65aecd4e61e8d33f08', '15fc31cd6ffb8d65aecd4e61e8d33f08', 1, '2016-01-02 05:03:18', 1, '2016-01-02 05:03:18'),
(12, 0, 'Sameem', 'S', 'Jain', 3, 0, 'fgsh1243gd', 'Shankar Nagar', 'Shankar Nagar', 'gfhdwh1263', 'dddf11231', 30, '0000-00-00 00:00:00', 'M', 'sameem@tlb.co.in', NULL, 'Raipur', 'Raipur', 'Shankar Nagar', '9890505489', '9890505489', '15fc31cd6ffb8d65aecd4e61e8d33f08', '15fc31cd6ffb8d65aecd4e61e8d33f08', 1, '2016-01-02 05:05:17', 1, '2016-01-02 05:05:17'),
(13, 0, 'Vishal', 'S', 'Jain', 4, 0, 'dhds125ad', 'Shankar Nagar', 'Shankar Nagar', 'sdhf1242hjd', 'dhfsh12442j', 27, '0000-00-00 00:00:00', 'M', 'vishal@tlb.co.in', NULL, 'Raipur', 'Raipur', 'Shankar Nagar', '9890505489', NULL, '15fc31cd6ffb8d65aecd4e61e8d33f08', '15fc31cd6ffb8d65aecd4e61e8d33f08', 1, '2016-01-02 05:08:06', 1, '2016-01-02 05:08:06'),
(14, 0, 'Neetu', 'S', 'Jain', 5, 0, 'asd234nsh', 'Shankar Nagar', 'Shankar Nagar', 'sdhw24394n', 'shdhr1332jd', 23, '0000-00-00 00:00:00', 'F', 'neetu@tlb.co.in', NULL, 'Raipur', 'Raipur', 'Shankar Nagar', '9890505489', NULL, '15fc31cd6ffb8d65aecd4e61e8d33f08', '15fc31cd6ffb8d65aecd4e61e8d33f08', 1, '2016-01-02 05:10:35', 1, '2016-01-02 05:10:35'),
(15, 0, 'Rajesh', 'S', 'Jain', 6, 0, 'ashd1220', 'Shankar Nagar', 'Shankar Nagar', 'sdh123jd', 'shfs123434', 22, '0000-00-00 00:00:00', 'M', 'rajesh@tlb.co.in', NULL, 'Raipur', 'Raipur', 'Shankar Nagar', '9890505489', NULL, '15fc31cd6ffb8d65aecd4e61e8d33f08', '15fc31cd6ffb8d65aecd4e61e8d33f08', 1, '2016-01-02 05:12:22', 1, '2016-01-02 05:12:22'),
(16, 0, 'Kailash', 'S', 'Jain', 9, 0, 'cns138nw3', 'Shankar Nagar', 'Shankar Nagar', 'cnh2493jf', 'vmsjfd11312md', 27, '0000-00-00 00:00:00', 'M', 'kailash@tlb.co.in', NULL, 'Raipur', 'Raipur', 'Shankar Nagar', '9890505489', NULL, '15fc31cd6ffb8d65aecd4e61e8d33f08', '15fc31cd6ffb8d65aecd4e61e8d33f08', 1, '2016-01-02 05:14:05', 1, '2016-01-02 05:14:05'),
(17, 0, 'Anjali', 'S', 'Jain', 10, 0, 'dnfdns12234', 'Shankar Nagar', 'Shankar Nagar', 'cnsj1283hn', 'cncfh1848387', 29, '0000-00-00 00:00:00', 'F', 'anjali@tlb.co.in', NULL, 'Raipur', 'Raipur', 'Shankar Nagar', '9890505489', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '15fc31cd6ffb8d65aecd4e61e8d33f08', 1, '2016-01-02 05:16:06', 1, '2016-01-02 05:16:06'),
(18, 0, 'Zakira', 'S', 'Jain', 8, 0, 'xnchs121x', 'Shankar Nagar', 'Shankar Nagar', 'cmmk9829854mx', 'mcmx121212', 24, '0000-00-00 00:00:00', 'F', 'zakira@tlb.co.in', NULL, 'Raipur', 'Raipur', 'Shankar Nagar', '9890505489', NULL, '15fc31cd6ffb8d65aecd4e61e8d33f08', '15fc31cd6ffb8d65aecd4e61e8d33f08', 1, '2016-01-02 05:19:46', 1, '2016-01-02 05:19:46');

-- --------------------------------------------------------

--
-- Table structure for table `employee_types`
--

CREATE TABLE IF NOT EXISTS `employee_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `description` varchar(600) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `employee_types`
--

INSERT INTO `employee_types` (`id`, `name`, `description`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'Super Admin', 'Admin manage the all the details.', 1, '2015-12-29 07:51:48', 1, '2015-12-29 07:51:48'),
(2, 'Admin', 'Branch manager or sub admin', 1, '2015-12-29 07:52:12', 1, '2015-12-29 07:52:12'),
(3, 'Iron Man', 'Iron Man', 1, '2015-12-17 10:51:40', 1, '2015-12-17 10:51:40'),
(4, 'Washer', 'Washer', 1, '2015-12-17 10:51:50', 1, '2015-12-17 10:51:50'),
(5, 'Packaging', 'Packaging', 1, '2015-12-17 10:52:03', 1, '2015-12-17 10:52:03'),
(6, 'Dispatch', 'Dispatch', 1, '2015-12-17 10:52:15', 1, '2015-12-17 10:52:15'),
(7, 'Pickup', 'Pick-UP Body', 1, '2015-12-29 07:53:00', 1, '2015-12-29 07:53:00'),
(8, 'Accounts', 'Accounts manager', 1, '2015-12-29 07:53:30', 1, '2015-12-29 07:53:30'),
(9, 'Delivery', 'Delivery Boy', 1, '2015-12-29 08:12:15', 1, '2015-12-29 08:12:15'),
(10, 'Labeled', 'Labeling man.', 1, '2015-12-29 08:12:44', 1, '2015-12-29 08:12:44');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(600) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `url` varchar(300) NOT NULL,
  `is_published` tinyint(1) NOT NULL,
  `order_by` int(11) NOT NULL,
  `image_url` varchar(300) DEFAULT NULL,
  `parent_menu_id` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `description`, `title`, `url`, `is_published`, `order_by`, `image_url`, `parent_menu_id`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'Home', 'Home', 'Home', '/home', 1, 1, NULL, NULL, 1, '2015-11-30 06:26:51', 1, '2015-11-30 06:26:51'),
(2, 'Branch', 'Branch', 'Branch', '/branch', 0, 2, NULL, NULL, 1, '2015-12-01 07:31:18', 1, '2015-12-01 07:31:18'),
(3, 'Branch', 'Branch', 'Branch', '/branch', 0, 4, NULL, NULL, 1, '2015-12-09 09:28:00', 1, '2015-12-09 09:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `description` varchar(600) NOT NULL,
  `basic_price` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `description`, `basic_price`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'Golder', 'Golder', 2000, 1, '2015-12-05 03:09:37', 1, '2015-12-05 03:09:37'),
(2, 'Silver', 'Silver', 1500, 1, '2015-12-05 03:13:00', 1, '2015-12-05 03:13:00'),
(3, 'Patinum', 'Patinum', 1000, 1, '2015-12-05 03:13:15', 1, '2015-12-05 03:13:15');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `challan_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL COMMENT 'Means location wise laundry ID.',
  `total_amount` double NOT NULL,
  `paid_amount` int(11) NOT NULL DEFAULT '0',
  `remaining_amount` int(11) DEFAULT NULL,
  `total_items` int(11) DEFAULT NULL,
  `is_completed` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `challan_id`, `client_id`, `employee_id`, `store_id`, `total_amount`, `paid_amount`, `remaining_amount`, `total_items`, `is_completed`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(4, 7, 1, 1, 1, 835, 835, 0, 5, 0, 1, '2015-12-11 05:46:23', 1, '2015-12-15 11:47:42'),
(5, 8, 1, 1, 1, 60, 0, 60, 2, 0, 1, '2015-12-16 02:25:14', 1, '2015-12-16 02:25:14'),
(6, 9, 1, 1, 1, 220, 0, 60, 4, 0, 1, '2015-12-16 02:32:17', 1, '2015-12-16 03:07:48'),
(7, 10, 2, 1, 1, 60, 0, 60, 3, 0, 1, '2015-12-17 12:10:13', 1, '2015-12-17 12:22:47'),
(8, 11, 2, 1, 1, 60, 60, 0, 4, 0, 1, '2015-12-18 09:06:01', 1, '2015-12-29 03:35:34'),
(9, 12, 2, 1, 1, 60, 60, 0, 6, 0, 1, '2015-12-29 07:36:58', 1, '2016-01-02 04:58:39'),
(10, 13, 1, 1, 1, 60, 0, 60, 4, 0, 1, '2016-01-02 03:56:16', 1, '2016-01-02 03:56:16'),
(11, 14, 1, 1, 1, 60, 0, 60, 5, 0, 1, '2016-01-02 04:40:10', 1, '2016-01-20 08:14:53'),
(12, 15, 4, 11, 1, 60, 0, 60, 3, 0, 11, '2016-01-02 05:32:29', 11, '2016-01-02 05:32:29'),
(13, 16, 5, 11, 1, 80, 80, 0, 6, 0, 11, '2016-01-03 10:14:13', 16, '2016-01-03 05:46:39'),
(14, 17, 6, 1, 1, 180, 175, 5, 9, 0, 11, '2016-01-03 04:15:07', 16, '2016-01-03 05:48:06'),
(15, 18, 4, 11, 1, 90, 0, 90, 6, 0, 11, '2016-01-11 10:04:39', 11, '2016-01-11 10:04:39'),
(16, 19, 2, 11, 1, 160, 0, 160, 12, 0, 11, '2016-01-11 10:08:00', 11, '2016-01-11 10:08:00'),
(17, 20, 7, 11, 1, 60, 0, 60, 6, 0, 11, '2016-01-11 10:14:38', 11, '2016-01-11 10:14:38');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_id` int(11) NOT NULL,
  `challan_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `billed_amount` int(11) NOT NULL,
  `remaning_amount` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `payment_id`, `challan_id`, `client_id`, `billed_amount`, `remaning_amount`, `total_amount`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(11, 4, 7, 1, 35, 800, 835, 1, '2015-12-15 11:47:01', 1, '2015-12-15 11:47:01'),
(12, 4, 7, 1, 100, 700, 835, 1, '2015-12-15 11:47:10', 1, '2015-12-15 11:47:10'),
(13, 4, 7, 1, 200, 500, 835, 1, '2015-12-15 11:47:18', 1, '2015-12-15 11:47:18'),
(14, 4, 7, 1, 100, 400, 835, 1, '2015-12-15 11:47:28', 1, '2015-12-15 11:47:28'),
(15, 4, 7, 1, 100, 300, 835, 1, '2015-12-15 11:47:33', 1, '2015-12-15 11:47:33'),
(16, 4, 7, 1, 300, 0, 835, 1, '2015-12-15 11:47:42', 1, '2015-12-15 11:47:42'),
(17, 8, 11, 2, 60, 0, 60, 1, '2015-12-29 03:35:34', 1, '2015-12-29 03:35:34'),
(18, 9, 12, 2, 60, 0, 60, 1, '2016-01-02 04:58:39', 1, '2016-01-02 04:58:39'),
(19, 13, 16, 5, 80, 0, 80, 16, '2016-01-03 05:46:39', 16, '2016-01-03 05:46:39'),
(20, 14, 17, 6, 175, 5, 180, 16, '2016-01-03 05:48:06', 16, '2016-01-03 05:48:06');

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE IF NOT EXISTS `transfers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) NOT NULL,
  `to_branch_id` int(11) NOT NULL,
  `challan_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `washing_power_types`
--

CREATE TABLE IF NOT EXISTS `washing_power_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `is_published` tinyint(1) NOT NULL,
  `order_number` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `washing_power_types`
--

INSERT INTO `washing_power_types` (`id`, `name`, `description`, `is_published`, `order_number`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'Nirma', 'Nirma', 1, 1, 1, '2015-12-05 03:51:33', 1, '2015-12-05 03:51:33');

-- --------------------------------------------------------

--
-- Table structure for table `washing_status`
--

CREATE TABLE IF NOT EXISTS `washing_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `order_by` int(11) NOT NULL,
  `is_published` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
