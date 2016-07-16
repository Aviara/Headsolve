-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2016 at 05:50 AM
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
  `area_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city_id` int(11) NOT NULL,
  PRIMARY KEY (`area_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_name`, `city_id`) VALUES
(1, 'vimannagar', 2),
(2, 'Sb road', 2),
(3, 'Lavale', 2),
(4, 'area of raipur', 1),
(5, 'second area of raipur', 1),
(6, 'area of goa', 3),
(7, 'second area of goa', 3);

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE IF NOT EXISTS `branches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_id` int(11) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `city_id`, `name`, `description`, `location`, `address_line1`, `address_line2`, `branch_code`, `available_machine`, `employee_count`, `delivery_boy_count`, `manager_id`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 1, 'RaipurBranch', 'Pune near Vimanagar', 'Vimanagar', 'Vimanagar', 'Vimanagar', 'Vimanagar', 12, 30, 10, NULL, 1, '2015-12-05 09:20:59', 1, '2015-12-05 09:20:59'),
(2, 1, 'RaipurBranch2', 'descriptoin', 'kharadi', 'add1', 'add2', '12', 45, 13, 10, NULL, 1, '2015-12-05 09:40:14', 1, '2015-12-05 09:40:14'),
(3, 1, 'RaipurBranch3', 'descriptoin', 'kharadi', 'add1', 'add2', '12', 45, 13, 10, NULL, 1, '2015-12-05 09:40:20', 1, '2015-12-05 09:40:20'),
(4, 2, 'puneBranch', 'raipurBranch', 'raipurBranch', 'raipurBranch', 'raipurBranch', 'raipurBranch', 4, 5, 4, 1, 1, '2016-01-21 12:46:44', 1, '2016-01-21 12:46:44'),
(5, 2, 'puneBranch2', 'descriptoin', 'kharadi', 'add1', 'add2', '12', 45, 13, 10, NULL, 1, '2015-12-05 09:40:20', 1, '2015-12-05 09:40:20'),
(6, 2, 'puneBranch3', 'descriptoin', 'kharadi', 'add1', 'add2', '12', 45, 13, 10, NULL, 1, '2015-12-05 09:40:20', 1, '2015-12-05 09:40:20'),
(7, 3, 'Goa Branch', 'descriptoin', 'kharadi', 'add1', 'add2', '12', 45, 13, 10, NULL, 1, '2015-12-05 09:40:20', 1, '2015-12-05 09:40:20'),
(8, 3, 'Goa Branch2', 'descriptoin', 'kharadi', 'add1', 'add2', '12', 45, 13, 10, NULL, 1, '2015-12-05 09:40:20', 1, '2015-12-05 09:40:20'),
(9, 3, 'Goa Branch3', 'descriptoin', 'kharadi', 'add1', 'add2', '12', 45, 13, 10, NULL, 1, '2015-12-05 09:40:20', 1, '2015-12-05 09:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `challanes`
--

CREATE TABLE IF NOT EXISTS `challanes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `challanes`
--

INSERT INTO `challanes` (`id`, `branch_id`, `city_id`, `client_id`, `employee_id`, `pick_up_date`, `delivery_estimate_date`, `delivery_date`, `special_request`, `washing_status_id`, `urgent_required`, `priority`, `delivery_status_id`, `delivery_by`, `updated_by`, `updated_on`, `created_by`, `created_on`) VALUES
(7, 1, 1, 1, 1, '2015-12-11 06:20:06', '2015-12-18 06:20:06', '2015-12-18 06:20:06', NULL, 1, NULL, NULL, 2, NULL, 17, '2016-01-21 07:26:15', 1, '2015-12-11 05:46:23'),
(8, 1, 1, 1, 1, '2015-12-16 02:25:13', '2015-12-23 02:25:13', '2015-12-23 02:25:13', NULL, 1, NULL, NULL, 2, NULL, 17, '2016-01-21 07:26:49', 1, '2015-12-16 02:25:13'),
(9, 1, 1, 1, 1, '2015-12-16 03:07:48', '2015-12-23 03:07:48', '2015-12-23 03:07:48', NULL, 1, NULL, NULL, 2, NULL, 17, '2016-01-19 11:37:41', 1, '2015-12-16 02:32:17'),
(10, 1, 1, 2, 1, '2015-12-17 12:22:47', '2015-12-24 12:22:47', '2015-12-24 12:22:47', NULL, 1, NULL, NULL, 2, NULL, 17, '2016-01-19 09:52:24', 1, '2015-12-17 12:10:13'),
(11, 1, 1, 2, 1, '2015-12-18 09:06:01', '2015-12-25 09:06:01', '2015-12-25 09:06:01', NULL, 1, NULL, NULL, 7, NULL, 6, '2015-12-29 04:35:31', 1, '2015-12-18 09:06:01'),
(12, 1, 1, 2, 1, '2015-12-29 07:36:58', '2016-01-05 07:36:58', '2016-01-05 07:36:58', NULL, 1, NULL, NULL, 2, NULL, 17, '2016-01-21 07:28:46', 1, '2015-12-29 07:36:58'),
(13, 4, 2, 1, 1, '2016-01-02 03:56:16', '2016-01-09 03:56:16', '2016-01-09 03:56:16', NULL, 1, NULL, NULL, 1, NULL, 1, '2016-01-02 03:56:16', 1, '2016-01-02 03:56:16'),
(14, 4, 2, 1, 1, '2016-01-20 08:14:53', '2016-01-27 08:14:53', '2016-01-27 08:14:53', NULL, 1, NULL, NULL, 2, NULL, 17, '2016-01-20 10:16:33', 1, '2016-01-02 04:40:10'),
(15, 4, 2, 4, 11, '2016-01-02 05:32:29', '2016-01-09 05:32:29', '2016-01-09 05:32:29', NULL, 1, NULL, NULL, 2, NULL, 17, '2016-01-20 10:17:22', 11, '2016-01-02 05:32:29'),
(16, 4, 2, 5, 11, '2016-01-03 10:14:13', '2016-01-10 10:14:13', '2016-01-10 10:14:13', NULL, 1, NULL, NULL, 2, NULL, 17, '2016-01-20 10:17:41', 11, '2016-01-03 10:14:13'),
(17, 7, 3, 6, 1, '2016-01-03 04:40:35', '2016-01-10 04:40:35', '2016-01-10 04:40:35', NULL, 1, NULL, NULL, 2, NULL, 17, '2016-01-21 07:08:06', 11, '2016-01-03 04:15:07'),
(18, 7, 3, 4, 11, '2016-01-11 10:04:39', '2016-01-13 10:04:39', '2016-01-13 10:04:39', NULL, 1, NULL, NULL, 2, NULL, 17, '2016-01-21 07:09:04', 11, '2016-01-11 10:04:39'),
(19, 7, 3, 2, 11, '2016-01-11 10:08:00', '2016-01-13 10:08:00', '2016-01-13 10:08:00', NULL, 1, NULL, NULL, 2, NULL, 17, '2016-01-21 07:14:02', 11, '2016-01-11 10:08:00'),
(20, 7, 3, 7, 11, '2016-01-11 10:14:38', '2016-01-13 10:14:38', '2016-01-13 10:14:38', NULL, 1, NULL, NULL, 2, NULL, 17, '2016-01-21 07:24:50', 11, '2016-01-11 10:14:38'),
(21, 4, 2, 4, 19, '2016-01-22 09:20:33', '2016-01-24 09:20:33', '2016-01-24 09:20:33', NULL, 1, NULL, NULL, 1, NULL, 19, '2016-01-22 09:20:33', 19, '2016-01-22 09:20:33'),
(22, 4, 2, 4, 19, '2016-01-22 09:22:53', '2016-01-24 09:22:53', '2016-01-24 09:22:53', NULL, 1, NULL, NULL, 1, NULL, 19, '2016-01-22 09:22:53', 19, '2016-01-22 09:22:53'),
(23, 1, 1, 1, 10, '2016-01-22 09:26:01', '2016-01-24 09:26:01', '2016-01-24 09:26:01', NULL, 1, NULL, NULL, 1, NULL, 10, '2016-01-22 09:26:01', 10, '2016-01-22 09:26:01'),
(24, 4, 2, 4, 19, '2016-01-22 01:19:23', '2016-01-24 01:19:23', '2016-01-24 01:19:23', NULL, 1, NULL, NULL, 1, NULL, 19, '2016-01-22 01:19:23', 19, '2016-01-22 01:19:23'),
(25, 4, 2, 4, 19, '2016-01-22 01:21:01', '2016-01-24 01:21:01', '2016-01-24 01:21:01', NULL, 1, NULL, NULL, 1, NULL, 19, '2016-01-22 01:21:01', 19, '2016-01-22 01:21:01'),
(26, 1, 1, 1, 10, '2016-01-22 02:33:38', '2016-01-24 02:33:38', '2016-01-24 02:33:38', NULL, 1, NULL, NULL, 1, NULL, 10, '2016-01-22 02:33:38', 10, '2016-01-22 02:33:38'),
(27, 1, 1, 1, 7, '2016-02-26 01:29:17', '2016-02-28 01:29:17', '2016-02-28 01:29:17', NULL, 1, NULL, NULL, 7, NULL, 6, '2016-02-26 02:02:49', 7, '2016-02-26 01:29:17'),
(28, 4, 2, 46, 19, '2016-02-26 02:22:39', '2016-02-28 02:22:39', '2016-02-28 02:22:39', NULL, 1, NULL, NULL, 1, NULL, 19, '2016-02-26 02:22:39', 19, '2016-02-26 02:22:39');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

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
(43, 16, 2, 7, 17, '2016-01-20 10:17:35'),
(44, 17, 2, 6, 17, '2016-01-21 07:07:41'),
(45, 18, 2, 1, 17, '2016-01-21 07:09:01'),
(46, 19, 2, 1, 17, '2016-01-21 07:13:32'),
(47, 7, 2, 7, 17, '2016-01-21 07:26:10'),
(48, 8, 2, 7, 17, '2016-01-21 07:26:49'),
(49, 12, 2, 1, 17, '2016-01-21 07:28:46'),
(50, 21, 1, 0, 19, '2016-01-22 09:20:33'),
(51, 21, 1, 0, 19, '2016-01-22 09:20:33'),
(52, 22, 1, 0, 19, '2016-01-22 09:22:53'),
(53, 22, 1, 0, 19, '2016-01-22 09:22:53'),
(54, 23, 1, 0, 10, '2016-01-22 09:26:01'),
(55, 23, 1, 0, 10, '2016-01-22 09:26:01'),
(56, 24, 1, 0, 19, '2016-01-22 01:19:23'),
(57, 24, 1, 0, 19, '2016-01-22 01:19:23'),
(58, 25, 1, 0, 19, '2016-01-22 01:21:01'),
(59, 25, 1, 0, 19, '2016-01-22 01:21:01'),
(60, 26, 1, 0, 10, '2016-01-22 02:33:38'),
(61, 26, 1, 0, 10, '2016-01-22 02:33:38'),
(62, 27, 1, 0, 7, '2016-02-26 01:29:17'),
(63, 27, 1, 0, 7, '2016-02-26 01:29:17'),
(64, 27, 3, 1, 3, '2016-02-26 01:39:18'),
(65, 27, 4, 3, 2, '2016-02-26 01:57:19'),
(66, 27, 6, 4, 5, '2016-02-26 01:59:44'),
(67, 27, 7, 6, 6, '2016-02-26 02:02:40'),
(68, 28, 1, 0, 19, '2016-02-26 02:22:39'),
(69, 28, 1, 0, 19, '2016-02-26 02:22:39');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `challan_time_logs`
--

INSERT INTO `challan_time_logs` (`id`, `challan_id`, `employee_id`, `start_on`, `completed_on`, `employee_type_id`, `delivery_status_id`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 20, 17, '2016-01-11 10:44:51', '2016-01-21 07:24:50', 10, 2, 17, '2016-01-11 10:44:51', 17, '2016-01-21 07:24:50'),
(2, 10, 17, '2016-01-19 09:52:16', '2016-01-19 09:52:24', 10, 2, 17, '2016-01-19 09:52:16', 17, '2016-01-19 09:52:24'),
(3, 9, 17, '2016-01-19 11:37:24', '2016-01-19 11:37:41', 10, 2, 17, '2016-01-19 11:37:24', 17, '2016-01-19 11:37:41'),
(4, 14, 17, '2016-01-20 10:16:30', '2016-01-20 10:16:33', 10, 2, 17, '2016-01-20 10:16:30', 17, '2016-01-20 10:16:33'),
(5, 15, 17, '2016-01-20 10:17:08', '2016-01-20 10:17:22', 10, 2, 17, '2016-01-20 10:17:08', 17, '2016-01-20 10:17:22'),
(6, 16, 17, '2016-01-20 10:17:35', '2016-01-20 10:17:41', 10, 2, 17, '2016-01-20 10:17:35', 17, '2016-01-20 10:17:41'),
(7, 17, 17, '2016-01-21 07:07:41', '2016-01-21 07:08:06', 10, 2, 17, '2016-01-21 07:07:41', 17, '2016-01-21 07:08:06'),
(8, 18, 17, '2016-01-21 07:09:01', '2016-01-21 07:09:04', 10, 2, 17, '2016-01-21 07:09:01', 17, '2016-01-21 07:09:04'),
(9, 19, 17, '2016-01-21 07:13:32', '2016-01-21 07:14:02', 10, 2, 17, '2016-01-21 07:13:32', 17, '2016-01-21 07:14:02'),
(10, 7, 17, '2016-01-21 07:26:10', '2016-01-21 07:26:15', 10, 2, 17, '2016-01-21 07:26:10', 17, '2016-01-21 07:26:15'),
(11, 8, 17, '2016-01-21 07:26:49', NULL, 10, 2, 17, '2016-01-21 07:26:49', 17, '2016-01-21 07:26:49'),
(12, 12, 17, '2016-01-21 07:28:46', NULL, 10, 2, 17, '2016-01-21 07:28:46', 17, '2016-01-21 07:28:46'),
(13, 27, 3, '2016-02-26 01:39:18', '2016-02-26 02:02:49', 4, 3, 3, '2016-02-26 01:39:18', 6, '2016-02-26 02:02:49'),
(14, 27, 2, '2016-02-26 01:57:19', '2016-02-26 02:02:49', 3, 4, 2, '2016-02-26 01:57:19', 6, '2016-02-26 02:02:49'),
(15, 27, 5, '2016-02-26 01:59:44', '2016-02-26 02:02:49', 6, 6, 5, '2016-02-26 01:59:44', 6, '2016-02-26 02:02:49'),
(16, 27, 6, '2016-02-26 02:02:40', '2016-02-26 02:02:49', 9, 7, 6, '2016-02-26 02:02:40', 6, '2016-02-26 02:02:49');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city name`) VALUES
(1, 'Raipur'),
(2, 'pune'),
(3, 'goa');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) NOT NULL,
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
  `city_id` int(11) NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `no_of_cycles` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `branch_id`, `first_name`, `middle_name`, `last_name`, `mobile_no`, `email_id`, `home_no`, `address_line1`, `address_line2`, `location`, `area`, `pin_code`, `customer_type_id`, `city_id`, `package_id`, `no_of_cycles`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 1, 'raipur/1', 'E', 'Shinde', '9665781284', 'soma.shinde@gmail.com', '9665781284', 'raipur', 'Working address wil be here.', 'Kharadi', 'Chandannagar', '411014', 1, 1, 1, NULL, 1, '2015-12-05 02:34:20', 1, '2015-12-05 02:34:20'),
(2, 4, 'raipur/2', 'M', 'pune', '9665781284', 'sonaly@gmail.com', '9665781284', 'Pune', 'Aklu', 'Akluj', 'Akluj', '411013', 2, 2, 2, NULL, 1, '2015-12-14 09:23:41', 1, '2015-12-14 09:23:41'),
(3, 0, 'goa/4', 'y', 'pune', 'g4', 'email@gmail.com', '1', 'adc', 'cds', 'scd', 'csd', 'cs', 2, 3, 4, 20, 13, '2016-01-12 07:51:15', 13, '2016-01-12 07:51:15'),
(4, 0, 'goa/5', 'H', 'goa', 'g55', 'ml;m', 'lm', ';lm', ';lm', 'lm', 'l;m', 'l;m', 0, 3, 5, 20, 13, '2016-01-14 07:20:01', 13, '2016-01-14 07:20:01'),
(46, 4, 'pune/4', 'lkm', ';lkm', 'p4', ';k', 'm;m', 'k', 'mk', 'm;', 'km;', 'km', NULL, 2, 4, 4, 12, '2016-01-13 10:02:42', 12, '2016-01-13 10:02:42'),
(48, 4, 'pune/5', 'jn', 'jn', 'p5', 'j', 'nlkj', 'n', 'jn', 'ljn', 'kj', 'lk', NULL, 2, 5, 20, 12, '2016-01-13 10:04:30', 12, '2016-01-13 10:04:30'),
(56, 0, 'p/y/4', 'luj', 'j', 'lj', 'jb', 'j', 'jb', 'ljb', 'jb', 'jb', '411006', NULL, 2, 4, 4, 12, '2016-01-13 02:07:52', 12, '2016-01-13 02:07:52'),
(57, 4, 'jeevan', 'sakharam', 'nikam', '9665781284', 'jeevann87@gmail.com', '456558452', 'dddddd', 'ddd', 'jb', 'VISHRAANTWADI', '411014', NULL, 2, 4, 4, 19, '2016-01-22 01:34:49', 19, '2016-01-22 01:34:49');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

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
(60, 14, 3, 3, 5, 1, 0, 1, 1, 0, 0, '0000-00-00 00:00:00', 1, '2016-01-20 08:14:53'),
(61, 8, 1, 2, 2, 3, 0, 1, 1, 0, 1, '2015-12-16 02:25:14', 1, '2015-12-16 02:25:14'),
(62, 21, 1, 8, 5, 5, 0, 1, 1, 0, 19, '2016-01-22 09:20:33', 19, '2016-01-22 09:20:33'),
(63, 21, 5, 2, 5, 5, 0, 1, 1, 0, 19, '2016-01-22 09:20:33', 19, '2016-01-22 09:20:33'),
(64, 22, 1, 5, 4, 5, 0, 1, 1, 0, 19, '2016-01-22 09:22:53', 19, '2016-01-22 09:22:53'),
(65, 22, 2, 9, 4, 5, 0, 1, 1, 0, 19, '2016-01-22 09:22:53', 19, '2016-01-22 09:22:53'),
(66, 23, 2, 5, 5, 2, 0, 1, 1, 0, 10, '2016-01-22 09:26:01', 10, '2016-01-22 09:26:01'),
(67, 23, 3, 5, 5, 2, 0, 1, 1, 0, 10, '2016-01-22 09:26:01', 10, '2016-01-22 09:26:01'),
(68, 24, 1, 1, 1, 5, 0, 1, 1, 0, 19, '2016-01-22 01:19:23', 19, '2016-01-22 01:19:23'),
(69, 25, 2, 2, 1, 5, 0, 1, 1, 0, 19, '2016-01-22 01:21:01', 19, '2016-01-22 01:21:01'),
(70, 26, 1, 2, 2, 1, 0, 1, 1, 0, 10, '2016-01-22 02:33:38', 10, '2016-01-22 02:33:38'),
(71, 26, 2, 2, 2, 1, 0, 1, 1, 0, 10, '2016-01-22 02:33:38', 10, '2016-01-22 02:33:38'),
(72, 27, 1, 7, 6, 2, 0, 1, 1, 0, 7, '2016-02-26 01:29:17', 7, '2016-02-26 01:29:17'),
(73, 27, 2, 4, 6, 2, 0, 1, 1, 0, 7, '2016-02-26 01:29:17', 7, '2016-02-26 01:29:17'),
(74, 28, 1, 4, 4, 4, 0, 1, 1, 0, 19, '2016-02-26 02:22:39', 19, '2016-02-26 02:22:39'),
(75, 28, 2, 4, 4, 4, 0, 1, 1, 0, 19, '2016-02-26 02:22:39', 19, '2016-02-26 02:22:39');

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
  `area_id` int(11) DEFAULT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `branch_id`, `first_name`, `middle_name`, `last_name`, `employee_type_id`, `city_id`, `area_id`, `pan_no`, `address_line1`, `address_line2`, `driving_listien_no`, `adhar_no`, `age`, `birth_date`, `gender`, `email_id`, `office_email_id`, `city`, `location`, `area`, `mobile_no`, `home_no`, `password`, `old_password`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 1, 'Nalin', '', 'Agarwal', 1, 1, NULL, '12456445', 'Kharadi', 'Kharadi', 'D5454DU', '44547212165464565', 26, '0000-00-00 00:00:00', 'M', 'Nalin', 'soma.shinde@gmail.com', 'Pune', 'Pune', 'MH', '9665781284', '9665781284', '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2015-12-05 11:17:34', 1, '2015-12-05 11:17:34'),
(2, 1, 'Sonal', 'M', 'yadhav', 3, 1, NULL, '3465456456', 'Kharadi', 'sdfsdsd', 'DHHD9wer47', '4e345365346456', 26, '0000-00-00 00:00:00', 'F', 'sonal@gmail.com', NULL, 'Pune', 'Akluj', 'Akluj', '9665781284', '9665781284', '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2015-12-29 07:43:58', 1, '2015-12-29 07:43:58'),
(3, 1, 'Kiran', 'E', 'Shinde', 4, 1, NULL, '34536356', 'dfgsdfg', 'fgdfgdfg', 'w987347', '349834774397', 25, '0000-00-00 00:00:00', 'M', 'kiran@gmail.com', NULL, 'Pune', 'Pune', 'Pune', '9423792564', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2015-12-29 07:46:50', 1, '2015-12-29 07:46:50'),
(4, 1, 'Vikas', 'M', 'Raut', 5, 1, NULL, '345sdgf', 'sdgsf', 'dfgdfg', '345734875', '3479347', 27, '0000-00-00 00:00:00', 'M', 'vikas@gmail.com', NULL, 'Puine', 'Puine', 'Puine', '9970509084', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2015-12-29 07:47:50', 1, '2015-12-29 07:47:50'),
(5, 1, 'Anil', 'm', 'Waghmode', 6, 1, NULL, '34597', 'sdfksdh', 'sdfsjl', '3487349d', '3475384', 28, '0000-00-00 00:00:00', 'M', 'anil@gmil.com', 'anil@gmil.com', 'Pune', 'Pune', 'Pune', '9876543210', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2015-12-29 07:49:10', 1, '2015-12-29 07:49:10'),
(6, 1, 'Delivery', 'b', 'Delivery', 9, 1, NULL, 'sgwe53456', 'dsgdfgdfg', 'sfsdf', 'sgdf3466', 'dfg4547', 30, '0000-00-00 00:00:00', 'M', 'delivery@gmail.com', NULL, 'Pune', 'Pune', 'Pune', '8899665577', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2015-12-29 03:44:47', 1, '2015-12-29 03:45:16'),
(7, 1, 'PickUP', 'p', 'PickUP', 7, 1, NULL, 'hh345345', 'sddfkjhsdh', 'ksdhfhsdfj', 'sdfsd45', 'sddg5446453', 30, '0000-00-00 00:00:00', 'F', 'pickup@gmail.com', NULL, 'Pune', 'Pune', 'Pune', '4455667722', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2015-12-29 03:48:48', 1, '2015-12-29 03:48:48'),
(8, 1, 'Accounts', 'A', 'Accounts', 8, 1, NULL, 'sdf435456', 'Kharadi', 'Kharadi', 'sdfsdf34545656', '345346dfg', 30, '0000-00-00 00:00:00', 'M', 'accounts@gmail.com', 'accounts@gmail.com', 'Pune', 'Pune', 'Pune', '9423792564', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2016-01-02 02:44:47', 1, '2016-01-02 02:44:47'),
(10, 1, 'Honeyr', 'S', 'Jain', 2, 1, NULL, 'dshf137237hsh', 'Shankar Nagar', 'Shankar Nagar', 'efedhf23323', 'dkvkd24233', 32, '0000-00-00 00:00:00', 'F', 'honeyr@tlb.co.in', 'honeyr@tlb.co.in', 'Raipur', 'Raipur', 'Shankar Nagar', '9890505489', '9890505489', '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2016-01-02 05:00:21', 1, '2016-01-02 05:00:21'),
(11, 4, 'Bhavesh', 'S', 'Jain', 7, 2, NULL, 'fgshjs1243js', 'Shankar Nagar', 'Shankar Nagar', 'shfdgah12433', 'dhgfgs1323', 24, '0000-00-00 00:00:00', 'M', 'bhavesh@tlb.co.in', NULL, 'Raipur', 'Raipur', 'Shankar Nagar', '9890505489', '9890505489', '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2016-01-02 05:03:18', 1, '2016-01-02 05:03:18'),
(12, 4, 'Sameem', 'S', 'Jain', 3, 2, NULL, 'fgsh1243gd', 'Shankar Nagar', 'Shankar Nagar', 'gfhdwh1263', 'dddf11231', 30, '0000-00-00 00:00:00', 'M', 'sameem@tlb.co.in', NULL, 'Raipur', 'Raipur', 'Shankar Nagar', '9890505489', '9890505489', '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2016-01-02 05:05:17', 1, '2016-01-02 05:05:17'),
(13, 4, 'Vishal', 'S', 'Jain', 4, 2, NULL, 'dhds125ad', 'Shankar Nagar', 'Shankar Nagar', 'sdhf1242hjd', 'dhfsh12442j', 27, '0000-00-00 00:00:00', 'M', 'vishal@tlb.co.in', NULL, 'Raipur', 'Raipur', 'Shankar Nagar', '9890505489', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2016-01-02 05:08:06', 1, '2016-01-02 05:08:06'),
(14, 4, 'Neetu', 'S', 'Jain', 5, 2, NULL, 'asd234nsh', 'Shankar Nagar', 'Shankar Nagar', 'sdhw24394n', 'shdhr1332jd', 23, '0000-00-00 00:00:00', 'F', 'neetu@tlb.co.in', NULL, 'Raipur', 'Raipur', 'Shankar Nagar', '9890505489', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2016-01-02 05:10:35', 1, '2016-01-02 05:10:35'),
(15, 4, 'Rajesh', 'S', 'Jain', 6, 2, NULL, 'ashd1220', 'Shankar Nagar', 'Shankar Nagar', 'sdh123jd', 'shfs123434', 22, '0000-00-00 00:00:00', 'M', 'rajesh@tlb.co.in', NULL, 'Raipur', 'Raipur', 'Shankar Nagar', '9890505489', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2016-01-02 05:12:22', 1, '2016-01-02 05:12:22'),
(16, 4, 'Kailash', 'S', 'Jain', 9, 2, NULL, 'cns138nw3', 'Shankar Nagar', 'Shankar Nagar', 'cnh2493jf', 'vmsjfd11312md', 27, '0000-00-00 00:00:00', 'M', 'kailash@tlb.co.in', NULL, 'Raipur', 'Raipur', 'Shankar Nagar', '9890505489', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2016-01-02 05:14:05', 1, '2016-01-02 05:14:05'),
(17, 1, 'Anjali', 'S', 'Jain', 10, 1, NULL, 'dnfdns12234', 'Shankar Nagar', 'Shankar Nagar', 'cnsj1283hn', 'cncfh1848387', 29, '0000-00-00 00:00:00', 'F', 'anjali@tlb.co.in', NULL, 'Raipur', 'Raipur', 'Shankar Nagar', '9890505489', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2016-01-02 05:16:06', 1, '2016-01-02 05:16:06'),
(18, 4, 'Zakira', 'S', 'Jain', 8, 2, NULL, 'xnchs121x', 'Shankar Nagar', 'Shankar Nagar', 'cmmk9829854mx', 'mcmx121212', 24, '0000-00-00 00:00:00', 'F', 'zakira@tlb.co.in', NULL, 'Raipur', 'Raipur', 'Shankar Nagar', '9890505489', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2016-01-02 05:19:46', 1, '2016-01-02 05:19:46'),
(19, 4, 'Honeyp', 'S', 'Jain', 2, 2, NULL, 'dshf137237hsh', 'Shankar Nagar', 'Shankar Nagar', 'efedhf23323', 'dkvkd24233', 32, '0000-00-00 00:00:00', 'F', 'honeyp@tlb.co.in', 'honeyp@tlb.co.in', 'Raipur', 'Raipur', 'Shankar Nagar', '9890505489', '9890505489', '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2016-01-02 05:00:21', 1, '2016-01-02 05:00:21'),
(22, 2, 'Sonal', 'M', 'yadhav', 3, 1, NULL, '3465456456', 'Kharadi', 'sdfsdsd', 'DHHD9wer47', '4e345365346456', 26, '0000-00-00 00:00:00', 'F', 'sonal@gmail.com', NULL, 'Pune', 'Akluj', 'Akluj', '9665781284', '9665781284', '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2015-12-29 07:43:58', 1, '2015-12-29 07:43:58'),
(23, 2, 'Kiran', 'E', 'Shinde', 4, 1, NULL, '34536356', 'dfgsdfg', 'fgdfgdfg', 'w987347', '349834774397', 25, '0000-00-00 00:00:00', 'M', 'kiran@gmail.com', NULL, 'Pune', 'Pune', 'Pune', '9423792564', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2015-12-29 07:46:50', 1, '2015-12-29 07:46:50'),
(24, 2, 'Vikas', 'M', 'Raut', 5, 1, NULL, '345sdgf', 'sdgsf', 'dfgdfg', '345734875', '3479347', 27, '0000-00-00 00:00:00', 'M', 'vikas@gmail.com', NULL, 'Puine', 'Puine', 'Puine', '9970509084', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2015-12-29 07:47:50', 1, '2015-12-29 07:47:50'),
(25, 2, 'PickUP', 'p', 'PickUP', 7, 1, NULL, 'hh345345', 'sddfkjhsdh', 'ksdhfhsdfj', 'sdfsd45', 'sddg5446453', 30, '0000-00-00 00:00:00', 'F', 'pickup@gmail.com', NULL, 'Pune', 'Pune', 'Pune', '4455667722', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2015-12-29 03:48:48', 1, '2015-12-29 03:48:48'),
(26, 2, 'Accounts', 'A', 'Accounts', 8, 1, NULL, 'sdf435456', 'Kharadi', 'Kharadi', 'sdfsdf34545656', '345346dfg', 30, '0000-00-00 00:00:00', 'M', 'accounts@gmail.com', 'accounts@gmail.com', 'Pune', 'Pune', 'Pune', '9423792564', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2016-01-02 02:44:47', 1, '2016-01-02 02:44:47'),
(27, 2, 'Anil', 'm', 'Waghmode', 6, 1, NULL, '34597', 'sdfksdh', 'sdfsjl', '3487349d', '3475384', 28, '0000-00-00 00:00:00', 'M', 'anil@gmil.com', 'anil@gmil.com', 'Pune', 'Pune', 'Pune', '9876543210', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2015-12-29 07:49:10', 1, '2015-12-29 07:49:10'),
(28, 2, 'Delivery', 'b', 'Delivery', 9, 1, NULL, 'sgwe53456', 'dsgdfgdfg', 'sfsdf', 'sgdf3466', 'dfg4547', 30, '0000-00-00 00:00:00', 'M', 'delivery@gmail.com', NULL, 'Pune', 'Pune', 'Pune', '8899665577', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2015-12-29 03:44:47', 1, '2015-12-29 03:45:16'),
(29, 2, 'Anjali', 'S', 'Jain', 10, 1, NULL, 'dnfdns12234', 'Shankar Nagar', 'Shankar Nagar', 'cnsj1283hn', 'cncfh1848387', 29, '0000-00-00 00:00:00', 'F', 'anjali@tlb.co.in', NULL, 'Raipur', 'Raipur', 'Shankar Nagar', '9890505489', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2016-01-02 05:16:06', 1, '2016-01-02 05:16:06'),
(30, 7, 'Honeyg', 'S', 'Jain', 2, 3, NULL, 'dshf137237hsh', 'Shankar Nagar', 'Shankar Nagar', 'efedhf23323', 'dkvkd24233', 32, '0000-00-00 00:00:00', 'F', 'honeyg@tlb.co.in', 'honeyg@tlb.co.in', 'Raipur', 'Raipur', 'Shankar Nagar', '9890505489', '9890505489', '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2016-01-02 05:00:21', 1, '2016-01-02 05:00:21'),
(31, 4, 'Honeyp', 'S', 'Jain', 2, 2, NULL, 'dshf137237hsh', 'Shankar Nagar', 'Shankar Nagar', 'efedhf23323', 'dkvkd24233', 32, '0000-00-00 00:00:00', 'F', 'honeyr@tlb.co.in', NULL, 'Raipur', 'Raipur', 'Shankar Nagar', '9890505489', '9890505489', '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2016-01-02 05:00:21', 1, '2016-02-02 07:13:02');

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
-- Table structure for table `outsource`
--

CREATE TABLE IF NOT EXISTS `outsource` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `to_branch_id` int(11) DEFAULT NULL,
  `to_company_id` varchar(25) DEFAULT NULL,
  `challan_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time2` varchar(20) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `outsource`
--

INSERT INTO `outsource` (`id`, `branch_id`, `city_id`, `to_branch_id`, `to_company_id`, `challan_id`, `client_id`, `employee_id`, `date`, `time2`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 1, NULL, 2, 'daha', 10, 2, 1, '0000-00-00 00:00:00', '', 1, '2016-01-14 01:00:16', 1, '2016-01-14 01:00:16'),
(2, 1, NULL, 2, 'juju', 8, 1, 1, '0000-00-00 00:00:00', '', 1, '2016-01-14 01:01:59', 1, '2016-01-14 01:01:59'),
(3, 1, NULL, 2, 'juju', 8, 1, 1, '0000-00-00 00:00:00', '', 1, '2016-01-14 01:01:59', 1, '2016-01-14 01:01:59'),
(4, 1, NULL, 2, NULL, 10, 2, 1, '0000-00-00 00:00:00', '', 1, '2016-01-14 03:31:05', 1, '2016-01-14 03:31:05'),
(5, 1, NULL, 2, 'dwdwa', 7, 1, 1, '0000-00-00 00:00:00', '', 1, '2016-01-14 04:11:44', 1, '2016-01-14 04:11:44'),
(6, 1, NULL, 2, 'my dry cleaners', 14, 1, 1, '01/16/2016', '', 1, '2016-01-14 05:04:31', 1, '2016-01-14 05:04:31'),
(7, 1, NULL, 2, 'my dry cleaners', 9, 1, 1, '01/15/2016', '', 1, '2016-01-14 05:14:46', 1, '2016-01-14 05:14:46'),
(8, 4, 2, 2, 'my dry cleaners', 28, 46, 19, '02/26/2016', NULL, 19, '2016-02-26 02:24:59', 19, '2016-02-26 02:24:59');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `description` varchar(600) NOT NULL,
  `basic_price` int(11) DEFAULT NULL,
  `cycle` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `description`, `basic_price`, `cycle`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'Gold', 'Gold', 450, NULL, 1, '2016-01-05 07:20:57', 1, '2016-01-05 07:20:57'),
(2, 'Silver', 'Silver', 350, NULL, 1, '2016-01-14 08:15:43', 1, '2016-01-14 08:15:43'),
(3, 'Platinum', 'Platinum', 99, NULL, 1, '2016-01-14 08:15:21', 1, '2016-01-14 08:15:21'),
(4, 'Monthly', 'Monthly', 1100, 4, 1, '2016-01-08 07:55:33', 1, '2016-01-08 07:55:33'),
(5, 'Semester', 'Semester', 5700, 20, 1, '2016-01-08 07:55:38', 1, '2016-01-08 07:55:38'),
(6, 'Monthly', 'Monthly', 1710, 6, 1, '2016-01-08 10:08:11', 1, '2016-01-08 10:08:11');

-- --------------------------------------------------------

--
-- Table structure for table `package_cycle_details`
--

CREATE TABLE IF NOT EXISTS `package_cycle_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `total_cycles` int(11) DEFAULT NULL,
  `remaining_cycles` int(11) DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(25) DEFAULT NULL,
  `created_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `package_cycle_details`
--

INSERT INTO `package_cycle_details` (`id`, `branch_id`, `city_id`, `package_id`, `client_id`, `total_cycles`, `remaining_cycles`, `store_id`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(2, 4, 2, 4, 2, 4, 4, 1, 1, '2016-01-09 00:00:00', 1, '2016-01-11 07:57:56'),
(3, 4, 2, 5, 4, 20, 16, 0, 13, '2016-01-12 03:11:31', 19, '2016-01-22 01:21:01'),
(4, 4, 2, 4, 46, 4, 0, 0, 12, '2016-01-13 10:02:42', 19, '2016-02-26 02:22:39'),
(9, 7, 3, 4, 48, 4, 4, 0, 12, '2016-01-13 10:04:30', 12, '2016-01-13 10:04:30'),
(15, 6, 3, 4, 56, 4, 0, 0, 12, '2016-01-13 02:07:52', 12, '2016-01-13 02:07:52'),
(16, 6, 3, 4, 57, 4, 4, 0, 19, '2016-01-22 01:34:49', 19, '2016-01-22 01:34:49'),
(17, 4, 2, 5, 58, 20, 20, 0, 19, '2016-02-26 02:41:25', 19, '2016-02-26 02:41:25');

-- --------------------------------------------------------

--
-- Table structure for table `package_cycle_logs`
--

CREATE TABLE IF NOT EXISTS `package_cycle_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package_id` int(11) NOT NULL,
  `challan_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `total_cycles` int(11) NOT NULL,
  `used_cycles` int(11) NOT NULL,
  `remaining_cycles` int(11) NOT NULL,
  `created_on` date NOT NULL,
  `created_by` int(25) NOT NULL,
  `updated_on` date NOT NULL,
  `updated_by` int(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `package_cycle_logs`
--

INSERT INTO `package_cycle_logs` (`id`, `package_id`, `challan_id`, `employee_id`, `client_id`, `total_cycles`, `used_cycles`, `remaining_cycles`, `created_on`, `created_by`, `updated_on`, `updated_by`) VALUES
(6, 4, 39, 12, 46, 4, 1, 3, '2016-01-13', 12, '2016-01-13', 12),
(7, 4, 40, 12, 46, 4, 2, 2, '2016-01-13', 12, '2016-01-13', 12),
(8, 4, 41, 12, 46, 4, 3, 1, '2016-01-13', 12, '2016-01-13', 12),
(9, 5, 21, 19, 4, 20, 1, 19, '2016-01-22', 19, '2016-01-22', 19),
(10, 5, 22, 19, 4, 20, 2, 18, '2016-01-22', 19, '2016-01-22', 19),
(11, 5, 24, 19, 4, 20, 3, 17, '2016-01-22', 19, '2016-01-22', 19),
(12, 5, 25, 19, 4, 20, 4, 16, '2016-01-22', 19, '2016-01-22', 19),
(13, 4, 28, 19, 46, 4, 4, 0, '2016-02-26', 19, '2016-02-26', 19);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `branch_id`, `city_id`, `challan_id`, `client_id`, `employee_id`, `store_id`, `total_amount`, `paid_amount`, `remaining_amount`, `total_items`, `is_completed`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(4, 1, 1, 7, 1, 1, 1, 835, 835, 0, 5, 0, 1, '2015-12-11 05:46:23', 1, '2015-12-15 11:47:42'),
(5, 1, 1, 8, 1, 1, 1, 60, 60, 0, 2, 0, 1, '2015-12-16 02:25:14', 1, '2016-02-27 07:15:00'),
(6, 1, 1, 9, 1, 1, 1, 220, 0, 60, 4, 0, 1, '2015-12-16 02:32:17', 1, '2015-12-16 03:07:48'),
(7, 1, 1, 10, 2, 1, 1, 60, 0, 60, 3, 0, 1, '2015-12-17 12:10:13', 1, '2015-12-17 12:22:47'),
(8, 1, 1, 11, 2, 1, 1, 60, 60, 0, 4, 0, 1, '2015-12-18 09:06:01', 1, '2015-12-29 03:35:34'),
(9, 1, 1, 12, 2, 1, 1, 60, 60, 0, 6, 0, 1, '2015-12-29 07:36:58', 1, '2016-01-02 04:58:39'),
(10, 4, 2, 13, 1, 1, 1, 60, 120, -60, 4, 0, 1, '2016-01-02 03:56:16', 1, '2016-02-27 07:22:45'),
(11, 4, 2, 14, 1, 1, 1, 60, 60, 0, 5, 0, 1, '2016-01-02 04:40:10', 1, '2016-02-27 07:18:47'),
(12, 4, 2, 15, 4, 11, 1, 60, 130, -70, 3, 0, 11, '2016-01-02 05:32:29', 1, '2016-02-27 07:18:02'),
(13, 4, 2, 16, 5, 11, 1, 80, 80, 0, 6, 0, 11, '2016-01-03 10:14:13', 16, '2016-01-03 05:46:39'),
(14, 7, 3, 17, 6, 1, 1, 180, 175, 5, 9, 0, 11, '2016-01-03 04:15:07', 16, '2016-01-03 05:48:06'),
(15, 7, 3, 18, 4, 11, 1, 90, 90, 0, 6, 0, 11, '2016-01-11 10:04:39', 1, '2016-02-27 07:21:10'),
(16, 7, 3, 19, 2, 11, 1, 160, 160, 0, 12, 0, 11, '2016-01-11 10:08:00', 1, '2016-02-27 07:16:39'),
(17, 7, 3, 20, 7, 11, 1, 60, 60, 0, 6, 0, 11, '2016-01-11 10:14:38', 1, '2016-01-22 10:38:23'),
(18, 7, 3, 21, 4, 19, 1, 0, 0, 0, 5, 0, 19, '2016-01-22 09:20:33', 19, '2016-01-22 09:20:33'),
(19, 7, 3, 22, 4, 19, 1, 0, 0, 0, 4, 0, 19, '2016-01-22 09:22:53', 19, '2016-01-22 09:22:53'),
(20, 7, 3, 23, 1, 10, 1, 50, 50, 0, 5, 0, 10, '2016-01-22 09:26:01', 1, '2016-02-27 07:24:01'),
(21, 4, 2, 24, 4, 19, 1, 0, 0, 0, 1, 0, 19, '2016-01-22 01:19:23', 19, '2016-01-22 01:19:23'),
(22, 4, 2, 25, 4, 19, 1, 0, 0, 0, 1, 0, 19, '2016-01-22 01:21:01', 19, '2016-01-22 01:21:01'),
(23, 1, 1, 26, 1, 10, 1, 60, 60, 0, 2, 0, 10, '2016-01-22 02:33:38', 1, '2016-02-27 07:24:56'),
(24, 1, 1, 27, 1, 7, 1, 140, 90, 50, 6, 0, 7, '2016-02-26 01:29:17', 1, '2016-02-27 07:31:52'),
(25, 4, 2, 28, 46, 19, 1, 0, 0, 0, 4, 0, 19, '2016-02-26 02:22:39', 19, '2016-02-26 02:22:39');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

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
(20, 14, 17, 6, 175, 5, 180, 16, '2016-01-03 05:48:06', 16, '2016-01-03 05:48:06'),
(21, 17, 20, 7, 60, 0, 60, 1, '2016-01-22 10:38:23', 1, '2016-01-22 10:38:23'),
(22, 5, 8, 1, 60, 0, 60, 1, '2016-02-27 07:15:00', 1, '2016-02-27 07:15:00'),
(23, 16, 19, 2, 160, 0, 160, 1, '2016-02-27 07:16:39', 1, '2016-02-27 07:16:39'),
(24, 12, 15, 4, 65, -5, 60, 1, '2016-02-27 07:18:00', 1, '2016-02-27 07:18:00'),
(25, 12, 15, 4, 65, -70, 60, 1, '2016-02-27 07:18:02', 1, '2016-02-27 07:18:02'),
(26, 11, 14, 1, 60, 0, 60, 1, '2016-02-27 07:18:47', 1, '2016-02-27 07:18:47'),
(27, 15, 18, 4, 90, 0, 90, 1, '2016-02-27 07:21:10', 1, '2016-02-27 07:21:10'),
(28, 10, 13, 1, 60, 0, 60, 1, '2016-02-27 07:21:55', 1, '2016-02-27 07:21:55'),
(29, 10, 13, 1, 60, -60, 60, 1, '2016-02-27 07:22:45', 1, '2016-02-27 07:22:45'),
(30, 20, 23, 1, 50, 0, 50, 1, '2016-02-27 07:24:01', 1, '2016-02-27 07:24:01'),
(31, 23, 26, 1, 60, 0, 60, 1, '2016-02-27 07:24:56', 1, '2016-02-27 07:24:56'),
(32, 24, 27, 1, 50, 90, 140, 1, '2016-02-27 07:28:37', 1, '2016-02-27 07:28:37'),
(33, 24, 27, 1, 10, 80, 140, 1, '2016-02-27 07:29:51', 1, '2016-02-27 07:29:51'),
(34, 24, 27, 1, 10, 70, 140, 1, '2016-02-27 07:30:51', 1, '2016-02-27 07:30:51'),
(35, 24, 27, 1, 10, 60, 140, 1, '2016-02-27 07:31:31', 1, '2016-02-27 07:31:31'),
(36, 24, 27, 1, 10, 50, 140, 1, '2016-02-27 07:31:52', 1, '2016-02-27 07:31:52');

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
