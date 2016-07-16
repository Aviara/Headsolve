-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2016 at 08:59 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `erp`
--

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
  `delivery_by` varchar(11) DEFAULT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `challanes`
--

INSERT INTO `challanes` (`id`, `client_id`, `employee_id`, `pick_up_date`, `delivery_estimate_date`, `delivery_date`, `special_request`, `washing_status_id`, `urgent_required`, `priority`, `delivery_status_id`, `delivery_by`, `updated_by`, `updated_on`, `created_by`, `created_on`) VALUES
(7, 1, 1, '2015-12-11 06:20:06', '2016-01-07 06:20:06', '2015-12-18 06:20:06', NULL, 1, NULL, NULL, 7, NULL, 6, '2016-01-08 04:34:49', 1, '2015-12-11 05:46:23'),
(8, 1, 1, '2015-12-16 02:25:13', '2016-01-07 02:25:13', '2015-12-23 02:25:13', NULL, 1, NULL, NULL, 7, NULL, 6, '2015-12-29 04:35:11', 1, '2015-12-16 02:25:13'),
(9, 1, 1, '2015-12-16 03:07:48', '2016-01-07 03:07:48', '2015-12-23 03:07:48', NULL, 1, NULL, NULL, 6, NULL, 5, '2016-01-02 09:23:14', 1, '2015-12-16 02:32:17'),
(10, 2, 12, '2016-01-13 02:51:35', '2016-01-20 02:51:35', '2016-01-20 02:51:35', '1', 1, NULL, NULL, 1, NULL, 12, '2016-01-13 02:51:35', 1, '2015-12-17 12:10:13'),
(11, 2, 1, '2015-12-18 09:06:01', '2016-01-07 09:06:01', '2015-12-25 09:06:01', NULL, 1, NULL, NULL, 3, NULL, 3, '2016-01-07 06:55:17', 1, '2015-12-18 09:06:01'),
(12, 2, 1, '2015-12-29 07:36:58', '2016-01-07 07:36:58', '2016-01-05 07:36:58', NULL, 1, NULL, NULL, 3, NULL, 3, '2016-01-07 06:53:01', 1, '2015-12-29 07:36:58'),
(13, 2, 1, '2016-01-02 08:25:39', '2016-01-07 08:25:39', '2016-01-09 08:25:39', NULL, 1, NULL, NULL, 3, NULL, 3, '2016-01-07 06:53:36', 1, '2016-01-02 08:25:39'),
(14, 1, 1, '2016-01-02 01:52:04', '2016-01-07 01:52:04', '2016-01-09 01:52:04', NULL, 1, NULL, NULL, 1, NULL, 1, '2016-01-08 01:52:04', 1, '2016-01-02 01:52:04'),
(15, 2, 1, '2016-01-02 01:52:32', '2016-01-08 01:52:32', '2016-01-09 01:52:32', '1', 1, 1, NULL, 7, 'Rajan', 1, '2016-01-08 01:52:32', 1, '2016-01-02 01:52:32'),
(16, 2, 1, '2016-01-08 10:16:42', '2016-01-10 10:16:42', '2016-01-10 10:16:42', NULL, 1, NULL, NULL, 1, NULL, 1, '2016-01-08 10:16:42', 1, '2016-01-08 10:16:42'),
(17, 2, 1, '2016-01-08 10:40:32', '2016-01-10 10:40:32', '2016-01-10 10:40:32', NULL, 1, NULL, NULL, 1, NULL, 1, '2016-01-08 10:40:32', 1, '2016-01-08 10:40:32'),
(29, 2, 1, '2016-01-09 04:58:23', '2016-01-11 04:58:23', '2016-01-11 04:58:23', NULL, 1, NULL, NULL, 1, NULL, 1, '2016-01-09 04:58:23', 1, '2016-01-09 04:58:23'),
(30, 2, 1, '2016-01-09 05:41:30', '2016-01-11 05:41:30', '2016-01-11 05:41:30', NULL, 1, NULL, NULL, 1, NULL, 1, '2016-01-09 05:41:30', 1, '2016-01-09 05:41:30'),
(31, 2, 1, '2016-01-11 07:57:55', '2016-01-13 07:57:55', '2016-01-13 07:57:56', NULL, 1, NULL, NULL, 1, NULL, 1, '2016-01-11 07:57:56', 1, '2016-01-11 07:57:56'),
(32, 2, 12, '2016-01-11 02:37:52', '2016-01-18 02:37:52', '2016-01-18 02:37:52', NULL, 1, NULL, NULL, 1, NULL, 12, '2016-01-11 02:37:52', 12, '2016-01-11 02:34:22'),
(33, 3, 13, '2016-01-12 07:51:42', '2016-01-14 07:51:42', '2016-01-14 07:51:42', NULL, 1, NULL, NULL, 1, NULL, 13, '2016-01-12 07:51:42', 13, '2016-01-12 07:51:42'),
(34, 3, 12, '2016-01-13 11:07:48', '2016-01-15 11:07:48', '2016-01-15 11:07:48', NULL, 1, NULL, NULL, 1, NULL, 12, '2016-01-13 11:07:48', 12, '2016-01-13 11:07:48'),
(35, 3, 12, '2016-01-13 11:08:29', '2016-01-15 11:08:29', '2016-01-15 11:08:29', NULL, 1, NULL, NULL, 1, NULL, 12, '2016-01-13 11:08:29', 12, '2016-01-13 11:08:29'),
(36, 3, 12, '2016-01-13 11:09:11', '2016-01-15 11:09:11', '2016-01-15 11:09:11', NULL, 1, NULL, NULL, 1, NULL, 12, '2016-01-13 11:09:11', 12, '2016-01-13 11:09:11'),
(37, 3, 12, '2016-01-13 11:09:11', '2016-01-15 11:09:11', '2016-01-15 11:09:11', NULL, 1, NULL, NULL, 1, NULL, 12, '2016-01-13 11:09:11', 12, '2016-01-13 11:09:11'),
(38, 46, 12, '2016-01-13 02:03:05', '2016-01-15 02:03:05', '2016-01-15 02:03:05', NULL, 1, NULL, NULL, 1, NULL, 12, '2016-01-13 02:03:05', 12, '2016-01-13 02:03:05'),
(39, 46, 12, '2016-01-13 02:05:37', '2016-01-15 02:05:37', '2016-01-15 02:05:37', NULL, 1, NULL, NULL, 1, NULL, 12, '2016-01-13 02:05:37', 12, '2016-01-13 02:05:37'),
(40, 46, 12, '2016-01-13 02:06:05', '2016-01-15 02:06:05', '2016-01-15 02:06:05', NULL, 1, NULL, NULL, 1, NULL, 12, '2016-01-13 02:06:05', 12, '2016-01-13 02:06:05'),
(41, 46, 12, '2016-01-13 03:10:27', '2016-01-15 03:10:27', '2016-01-15 03:10:27', NULL, 1, NULL, NULL, 1, NULL, 12, '2016-01-13 03:10:27', 12, '2016-01-13 03:10:27');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

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
(8, 13, 1, 0, 1, '2016-01-02 08:25:39'),
(9, 13, 1, 0, 1, '2016-01-02 08:25:39'),
(10, 10, 5, 1, 4, '2016-01-02 09:21:23'),
(11, 9, 6, 7, 5, '2016-01-02 09:23:14'),
(12, 10, 6, 5, 5, '2016-01-02 09:24:02'),
(13, 14, 1, 0, 1, '2016-01-02 01:52:04'),
(14, 14, 1, 0, 1, '2016-01-02 01:52:04'),
(15, 15, 1, 0, 1, '2016-01-02 01:52:32'),
(16, 15, 1, 0, 1, '2016-01-02 01:52:32'),
(17, 12, 3, 1, 3, '2016-01-07 06:52:35'),
(18, 13, 3, 1, 3, '2016-01-07 06:53:22'),
(19, 11, 3, 7, 3, '2016-01-07 06:55:05'),
(20, 16, 1, 0, 1, '2016-01-08 10:16:42'),
(21, 16, 1, 0, 1, '2016-01-08 10:16:42'),
(22, 17, 1, 0, 1, '2016-01-08 10:40:32'),
(23, 17, 1, 0, 1, '2016-01-08 10:40:32'),
(24, 18, 1, 0, 1, '2016-01-09 08:59:40'),
(25, 18, 1, 0, 1, '2016-01-09 08:59:40'),
(26, 19, 1, 0, 1, '2016-01-09 03:20:24'),
(27, 19, 1, 0, 1, '2016-01-09 03:20:24'),
(28, 20, 1, 0, 1, '2016-01-09 03:27:23'),
(29, 20, 1, 0, 1, '2016-01-09 03:27:23'),
(30, 21, 1, 0, 1, '2016-01-09 04:47:17'),
(31, 21, 1, 0, 1, '2016-01-09 04:47:17'),
(32, 22, 1, 0, 1, '2016-01-09 04:50:54'),
(33, 22, 1, 0, 1, '2016-01-09 04:50:54'),
(34, 23, 1, 0, 1, '2016-01-09 04:52:09'),
(35, 23, 1, 0, 1, '2016-01-09 04:52:09'),
(36, 24, 1, 0, 1, '2016-01-09 04:53:14'),
(37, 24, 1, 0, 1, '2016-01-09 04:53:14'),
(38, 25, 1, 0, 1, '2016-01-09 04:54:18'),
(39, 25, 1, 0, 1, '2016-01-09 04:54:18'),
(40, 26, 1, 0, 1, '2016-01-09 04:55:38'),
(41, 26, 1, 0, 1, '2016-01-09 04:55:38'),
(42, 27, 1, 0, 1, '2016-01-09 04:56:32'),
(43, 27, 1, 0, 1, '2016-01-09 04:56:32'),
(44, 28, 1, 0, 1, '2016-01-09 04:57:30'),
(45, 28, 1, 0, 1, '2016-01-09 04:57:30'),
(46, 29, 1, 0, 1, '2016-01-09 04:58:23'),
(47, 29, 1, 0, 1, '2016-01-09 04:58:23'),
(48, 30, 1, 0, 1, '2016-01-09 05:41:30'),
(49, 30, 1, 0, 1, '2016-01-09 05:41:30'),
(50, 31, 1, 0, 1, '2016-01-11 07:57:56'),
(51, 31, 1, 0, 1, '2016-01-11 07:57:56'),
(52, 32, 1, 0, 12, '2016-01-11 02:34:22'),
(53, 32, 1, 0, 12, '2016-01-11 02:34:22'),
(54, 33, 1, 0, 13, '2016-01-12 07:51:42'),
(55, 33, 1, 0, 13, '2016-01-12 07:51:42'),
(56, 34, 1, 0, 12, '2016-01-13 11:07:48'),
(57, 34, 1, 0, 12, '2016-01-13 11:07:48'),
(58, 35, 1, 0, 12, '2016-01-13 11:08:29'),
(59, 35, 1, 0, 12, '2016-01-13 11:08:29'),
(60, 36, 1, 0, 12, '2016-01-13 11:09:11'),
(61, 36, 1, 0, 12, '2016-01-13 11:09:11'),
(62, 37, 1, 0, 12, '2016-01-13 11:09:11'),
(63, 37, 1, 0, 12, '2016-01-13 11:09:11'),
(64, 38, 1, 0, 12, '2016-01-13 02:03:05'),
(65, 38, 1, 0, 12, '2016-01-13 02:03:05'),
(66, 39, 1, 0, 12, '2016-01-13 02:05:37'),
(67, 39, 1, 0, 12, '2016-01-13 02:05:37'),
(68, 40, 1, 0, 12, '2016-01-13 02:06:05'),
(69, 40, 1, 0, 12, '2016-01-13 02:06:05'),
(70, 41, 1, 0, 12, '2016-01-13 03:10:27'),
(71, 41, 1, 0, 12, '2016-01-13 03:10:27');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `challan_time_logs`
--

INSERT INTO `challan_time_logs` (`id`, `challan_id`, `employee_id`, `start_on`, `completed_on`, `employee_type_id`, `delivery_status_id`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 12, 3, '2016-01-07 06:52:35', '2016-01-07 06:53:01', 4, 3, 3, '2016-01-07 06:52:35', 3, '2016-01-07 06:53:01'),
(2, 13, 3, '2016-01-07 06:53:22', '2016-01-07 06:53:36', 4, 3, 3, '2016-01-07 06:53:22', 3, '2016-01-07 06:53:36'),
(3, 11, 3, '2016-01-07 06:55:05', '2016-01-07 06:55:17', 4, 3, 3, '2016-01-07 06:55:05', 3, '2016-01-07 06:55:17');

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
  `city_id` int(11) NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `no_of_cycles` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `first_name`, `middle_name`, `last_name`, `mobile_no`, `email_id`, `home_no`, `address_line1`, `address_line2`, `location`, `area`, `pin_code`, `customer_type_id`, `city_id`, `package_id`, `no_of_cycles`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'raipur/1', 'E', 'Shinde', '9665781284', 'soma.shinde@gmail.com', '9665781284', 'raipur', 'Working address wil be here.', 'Kharadi', 'Chandannagar', '411014', 1, 1, 1, NULL, 1, '2015-12-05 02:34:20', 1, '2015-12-05 02:34:20'),
(2, 'raipur/2', 'M', 'pune', '9665781284', 'sonaly@gmail.com', '9665781284', 'Pune', 'Aklu', 'Akluj', 'Akluj', '411013', 2, 1, 2, NULL, 1, '2015-12-14 09:23:41', 1, '2015-12-14 09:23:41'),
(3, 'goa/4', 'y', 'pune', 'g4', 'email@gmail.com', '1', 'adc', 'cds', 'scd', 'csd', 'cs', 2, 3, 4, 20, 13, '2016-01-12 07:51:15', 13, '2016-01-12 07:51:15'),
(4, 'goa/5', 'H', 'goa', 'g55', 'ml;m', 'lm', ';lm', ';lm', 'lm', 'l;m', 'l;m', 0, 3, 5, 20, 13, '2016-01-14 07:20:01', 13, '2016-01-14 07:20:01'),
(46, 'pune/4', 'lkm', ';lkm', 'p4', ';k', 'm;m', 'k', 'mk', 'm;', 'km;', 'km', NULL, 2, 4, 4, 12, '2016-01-13 10:02:42', 12, '2016-01-13 10:02:42'),
(48, 'pune/5', 'jn', 'jn', 'p5', 'j', 'nlkj', 'n', 'jn', 'ljn', 'kj', 'lk', NULL, 2, 5, 20, 12, '2016-01-13 10:04:30', 12, '2016-01-13 10:04:30'),
(56, 'p/y/4', 'luj', 'j', 'lj', 'jb', 'j', 'jb', 'ljb', 'jb', 'jb', '411006', NULL, 2, 4, 4, 12, '2016-01-13 02:07:52', 12, '2016-01-13 02:07:52');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `client_types`
--

INSERT INTO `client_types` (`id`, `name`, `description`, `is_published`, `order_by`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(2, 'fg', 'fg', 1, 1, 1, '2016-01-13 00:00:00', 1, '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `cloth_info`
--

INSERT INTO `cloth_info` (`id`, `challan_id`, `cloth_type_id`, `total_item_count`, `total_kg`, `package_id`, `is_iron`, `washing_powder_type_id`, `washing_status_id`, `urgent_required`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(29, 7, 4, 2, 2, 1, 0, 1, 1, 0, 1, '2015-12-11 05:46:24', 1, '2015-12-11 06:20:06'),
(30, 7, 2, 3, 3, 1, 1, 1, 1, 0, 1, '2015-12-11 05:46:24', 1, '2015-12-11 06:20:06'),
(31, 8, 1, 2, 2, 1, 0, 1, 1, 0, 1, '2015-12-16 02:25:14', 1, '2015-12-16 02:25:14'),
(32, 9, 1, 6, 4, 1, 0, 1, 1, 0, 1, '2015-12-16 02:32:18', 1, '2015-12-16 03:07:49'),
(33, 9, 2, 6, 4, 1, 0, 1, 1, 0, 0, '0000-00-00 00:00:00', 1, '2015-12-16 03:07:49'),
(34, 10, 2, 2, 3, 4, 0, 1, 1, 0, 1, '2015-12-17 12:10:13', 12, '2016-01-13 02:51:35'),
(35, 11, 1, 3, 4, 2, 0, 1, 1, 0, 1, '2015-12-18 09:06:01', 1, '2015-12-18 09:06:01'),
(36, 12, 3, 6, 6, 2, 0, 1, 1, 0, 1, '2015-12-29 07:36:58', 1, '2015-12-29 07:36:58'),
(37, 13, 3, 4, 3, 3, 0, 1, 1, 0, 1, '2016-01-02 08:25:39', 1, '2016-01-02 08:25:39'),
(38, 14, 1, 5, 4, 3, 0, 1, 1, 0, 1, '2016-01-02 01:52:04', 1, '2016-01-02 01:52:04'),
(39, 15, 4, 10, 5, 3, 0, 1, 1, 0, 1, '2016-01-02 01:52:32', 1, '2016-01-02 01:52:32'),
(40, 16, 2, 4, 5, 5, 0, 1, 1, 0, 1, '2016-01-08 10:16:43', 1, '2016-01-08 10:16:43'),
(41, 16, 1, 4, 5, 5, 0, 1, 1, 0, 1, '2016-01-08 10:16:43', 1, '2016-01-08 10:16:43'),
(42, 17, 1, 4, 4, 6, 0, 1, 1, 0, 1, '2016-01-08 10:40:32', 1, '2016-01-08 10:40:32'),
(43, 18, 1, 6, 6, 1, 0, 1, 1, 0, 1, '2016-01-09 08:59:40', 1, '2016-01-09 08:59:40'),
(44, 18, 2, 5, 6, 1, 0, 1, 1, 0, 1, '2016-01-09 08:59:40', 1, '2016-01-09 08:59:40'),
(45, 19, 1, 4, 5, 5, 0, 1, 1, 0, 1, '2016-01-09 03:20:24', 1, '2016-01-09 03:20:24'),
(46, 19, 1, 5, 5, 5, 0, 1, 1, 0, 1, '2016-01-09 03:20:24', 1, '2016-01-09 03:20:24'),
(47, 29, 2, 33, 3, 5, 0, 1, 1, 0, 1, '2016-01-09 04:58:23', 1, '2016-01-09 04:58:23'),
(48, 30, 2, 4, 4, 5, 0, 1, 1, 0, 1, '2016-01-09 05:41:30', 1, '2016-01-09 05:41:30'),
(49, 31, 1, 2, 6, 5, 0, 1, 1, 0, 1, '2016-01-11 07:57:56', 1, '2016-01-11 07:57:56'),
(50, 32, 1, 4, 0, 3, 0, 1, 1, 0, 12, '2016-01-11 02:34:22', 12, '2016-01-11 02:37:52'),
(51, 33, 2, 5, 0, 3, 0, 1, 1, 0, 13, '2016-01-12 07:51:42', 13, '2016-01-12 07:51:42'),
(52, 33, 3, 5, 0, 3, 0, 1, 1, 0, 13, '2016-01-12 07:51:42', 13, '2016-01-12 07:51:42'),
(53, 34, 1, 5, 0, 3, 0, 1, 1, 0, 12, '2016-01-13 11:07:48', 12, '2016-01-13 11:07:48'),
(54, 35, 2, 4, 4, 5, 0, 1, 1, 0, 12, '2016-01-13 11:08:29', 12, '2016-01-13 11:08:29'),
(55, 36, 2, 4, 0, 3, 0, 1, 1, 0, 12, '2016-01-13 11:09:11', 12, '2016-01-13 11:09:11'),
(56, 37, 2, 4, 0, 3, 0, 1, 1, 0, 12, '2016-01-13 11:09:11', 12, '2016-01-13 11:09:11'),
(57, 38, 1, 4, 4, 4, 0, 1, 1, 0, 12, '2016-01-13 02:03:05', 12, '2016-01-13 02:03:05'),
(58, 39, 1, 4, 4, 4, 0, 1, 1, 0, 12, '2016-01-13 02:05:37', 12, '2016-01-13 02:05:37'),
(59, 40, 1, 4, 4, 4, 0, 1, 1, 0, 12, '2016-01-13 02:06:05', 12, '2016-01-13 02:06:05'),
(60, 40, 2, 4, 4, 4, 0, 1, 1, 0, 12, '2016-01-13 02:06:05', 12, '2016-01-13 02:06:05'),
(61, 10, 1, 2, 3, 4, 0, 1, 1, 0, 0, '0000-00-00 00:00:00', 12, '2016-01-13 02:51:35'),
(62, 41, 1, 5, 6, 4, 0, 1, 1, 0, 12, '2016-01-13 03:10:27', 12, '2016-01-13 03:10:27'),
(63, 41, 2, 8, 6, 4, 0, 1, 1, 0, 12, '2016-01-13 03:10:27', 12, '2016-01-13 03:10:27');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cloth_types`
--

INSERT INTO `cloth_types` (`id`, `name`, `description`, `merger_type`, `iron_price`, `gold_per_kg_price`, `gold_per_item_price`, `silver_per_kg_price`, `silver_per_item_price`, `platinum_per_kg_price`, `platinum_per_item_price`, `package_id`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'Shirt', 'Shirt', 1, 20, 60, 20, 80, 25, 90, 35, NULL, '0000-00-00 00:00:00', '2015-12-05 04:57:27', 1, '2015-12-11 09:40:18'),
(2, 'Pant', 'pant', 3, 15, 60, 20, 140, 100, 90, 35, NULL, '0000-00-00 00:00:00', '2015-12-09 09:50:04', 1, '2015-12-11 09:40:25'),
(3, 'Sadi', 'Sadi', 3, 25, 60, 20, 50, 25, 40, 20, NULL, '0000-00-00 00:00:00', '2015-12-09 09:55:43', 1, '2015-12-11 09:40:32'),
(4, 'Blankate', 'Blankate', 3, 30, 60, 100, 80, 90, 90, 70, NULL, '0000-00-00 00:00:00', '2015-12-09 11:25:01', 1, '2015-12-29 07:35:56');

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
  `city_id` int(11) DEFAULT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `branch_id`, `first_name`, `middle_name`, `last_name`, `employee_type_id`, `city_id`, `pan_no`, `address_line1`, `address_line2`, `driving_listien_no`, `adhar_no`, `age`, `birth_date`, `gender`, `email_id`, `office_email_id`, `city`, `location`, `area`, `mobile_no`, `home_no`, `password`, `old_password`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 0, 'Somnath', 'E', 'Shinde', 1, 1, '12456445', 'Kharadi', 'Kharadi', 'D5454DU', '44547212165464565', 26, '0000-00-00 00:00:00', 'M', 'soma.shinde@gmail.com', 'soma.shinde@gmail.com', 'pune', 'Raipur', 'MH', '9665781284', '9665781284', '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2015-12-05 11:17:34', 1, '2015-12-05 11:17:34'),
(2, 0, 'Sonal', 'M', 'yadhav', 3, 1, '3465456456', 'Kharadi', 'sdfsdsd', 'DHHD9wer47', '4e345365346456', 26, '0000-00-00 00:00:00', 'F', 'iron@gmail.com', NULL, 'Pune', 'Akluj', 'Akluj', '9665781284', '9665781284', '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2015-12-29 07:43:58', 1, '2015-12-29 07:43:58'),
(3, 0, 'Kiran', 'E', 'Shinde', 4, 1, '34536356', 'dfgsdfg', 'fgdfgdfg', 'w987347', '349834774397', 25, '0000-00-00 00:00:00', 'M', 'washer@gmail.com', NULL, 'Pune', 'Pune', 'Pune', '9423792564', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2015-12-29 07:46:50', 1, '2015-12-29 07:46:50'),
(4, 0, 'Vikas', 'M', 'Raut', 5, 1, '345sdgf', 'sdgsf', 'dfgdfg', '345734875', '3479347', 27, '0000-00-00 00:00:00', 'M', 'packer@gmail.com', NULL, 'Puine', 'Puine', 'Puine', '9970509084', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2015-12-29 07:47:50', 1, '2015-12-29 07:47:50'),
(5, 0, 'Anil', 'm', 'Waghmode', 6, 1, '34597', 'sdfksdh', 'sdfsjl', '3487349d', '3475384', 28, '0000-00-00 00:00:00', 'M', 'diapatcher@gmil.com', 'anil@gmil.com', 'Pune', 'Pune', 'Pune', '9876543210', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2015-12-29 07:49:10', 1, '2015-12-29 07:49:10'),
(6, 0, 'Delivery', 'b', 'Delivery', 9, 1, 'sgwe53456', 'dsgdfgdfg', 'sfsdf', 'sgdf3466', 'dfg4547', 30, '0000-00-00 00:00:00', 'M', 'delivery@gmail.com', NULL, 'Pune', 'Pune', 'Pune', '8899665577', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2015-12-29 03:44:47', 1, '2015-12-29 03:45:16'),
(7, 0, 'PickUP', 'p', 'PickUP', 7, 1, 'hh345345', 'sddfkjhsdh', 'ksdhfhsdfj', 'sdfsd45', 'sddg5446453', 30, '0000-00-00 00:00:00', 'F', 'pickup@gmail.com', NULL, 'Pune', 'Pune', 'Pune', '4455667722', NULL, '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2015-12-29 03:48:48', 1, '2015-12-29 03:48:48'),
(12, 0, 'Bharat/p/2', 'r', 'nigade', 1, 2, 'sd', 'sds', 'sds', 'df', 'df', 25, '0000-00-00 00:00:00', 's', 'pune2@gmail.com', 'pune2@gmail.com', 'sd', 's', 'sd', 'sd', 'd', '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 1, '2016-01-11 10:17:26', 12, '2016-01-13 08:14:12'),
(13, 0, 'Akash/g/3', 'P', 'Pandey', 1, 3, 'kj', 'jn', 'jn', 'kjb', 'jb', 30, '0000-00-00 00:00:00', 'j', 'goa/3@gmail.com', 'akash@gmail.com', 'jn', 'j', 'j', 'jn', 'jn', '1afa72085c30c6bd27856a006f7a2f1f', '1afa72085c30c6bd27856a006f7a2f1f', 12, '2016-01-12 07:41:22', 12, '2016-01-12 07:44:36');

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
  `to_branch_id` int(11) DEFAULT NULL,
  `to_company_id` varchar(25) DEFAULT NULL,
  `challan_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time2` varchar(20) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `outsource`
--

INSERT INTO `outsource` (`id`, `branch_id`, `to_branch_id`, `to_company_id`, `challan_id`, `client_id`, `employee_id`, `date`, `time2`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 1, 2, 'daha', 10, 2, 1, '0000-00-00 00:00:00', '', 1, '2016-01-14 01:00:16', 1, '2016-01-14 01:00:16'),
(2, 1, 2, 'juju', 8, 1, 1, '0000-00-00 00:00:00', '', 1, '2016-01-14 01:01:59', 1, '2016-01-14 01:01:59'),
(3, 1, 2, 'juju', 8, 1, 1, '0000-00-00 00:00:00', '', 1, '2016-01-14 01:01:59', 1, '2016-01-14 01:01:59'),
(4, 1, 2, NULL, 10, 2, 1, '0000-00-00 00:00:00', '', 1, '2016-01-14 03:31:05', 1, '2016-01-14 03:31:05'),
(5, 1, 2, 'dwdwa', 7, 1, 1, '0000-00-00 00:00:00', '', 1, '2016-01-14 04:11:44', 1, '2016-01-14 04:11:44'),
(6, 1, 2, 'my dry cleaners', 14, 1, 1, '01/16/2016', '', 1, '2016-01-14 05:04:31', 1, '2016-01-14 05:04:31'),
(7, 1, 2, 'my dry cleaners', 9, 1, 1, '01/15/2016', '', 1, '2016-01-14 05:14:46', 1, '2016-01-14 05:14:46');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `package_cycle_details`
--

INSERT INTO `package_cycle_details` (`id`, `package_id`, `client_id`, `total_cycles`, `remaining_cycles`, `store_id`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(2, 4, 3, 4, 4, 1, 1, '2016-01-09 00:00:00', 1, '2016-01-11 07:57:56'),
(3, 5, 4, 20, 20, 0, 13, '2016-01-12 03:11:31', 13, '2016-01-12 03:11:31'),
(7, 4, 46, 4, 1, 0, 12, '2016-01-13 10:02:42', 12, '2016-01-13 03:10:27'),
(9, 4, 48, 4, 4, 0, 12, '2016-01-13 10:04:30', 12, '2016-01-13 10:04:30'),
(15, 4, 56, 4, 0, 0, 12, '2016-01-13 02:07:52', 12, '2016-01-13 02:07:52');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `package_cycle_logs`
--

INSERT INTO `package_cycle_logs` (`id`, `package_id`, `challan_id`, `employee_id`, `client_id`, `total_cycles`, `used_cycles`, `remaining_cycles`, `created_on`, `created_by`, `updated_on`, `updated_by`) VALUES
(6, 4, 39, 12, 46, 4, 1, 3, '2016-01-13', 12, '2016-01-13', 12),
(7, 4, 40, 12, 46, 4, 2, 2, '2016-01-13', 12, '2016-01-13', 12),
(8, 4, 41, 12, 46, 4, 3, 1, '2016-01-13', 12, '2016-01-13', 12);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `challan_id`, `client_id`, `employee_id`, `store_id`, `total_amount`, `paid_amount`, `remaining_amount`, `total_items`, `is_completed`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(4, 7, 1, 2, 1, 835, 835, 0, 5, 0, 1, '2015-12-11 05:46:23', 1, '2016-01-06 11:47:42'),
(5, 8, 1, 2, 1, 60, 0, 60, 2, 0, 1, '2015-12-16 02:25:14', 1, '2016-01-07 02:25:14'),
(6, 9, 1, 2, 1, 220, 60, 0, 4, 0, 1, '2015-12-16 02:32:17', 1, '2016-01-07 01:27:08'),
(7, 10, 2, 12, 1, 0, 0, 60, 3, 0, 1, '2015-12-17 12:10:13', 12, '2016-01-13 02:51:35'),
(8, 11, 2, 2, 1, 60, 60, 0, 4, 0, 1, '2015-12-18 09:06:01', 1, '2016-01-07 03:35:34'),
(9, 12, 2, 2, 1, 60, 60, 0, 6, 0, 1, '2015-12-29 07:36:58', 1, '2016-01-07 02:59:49'),
(10, 13, 2, 1, 1, 60, 0, 60, 3, 0, 1, '2016-01-02 08:25:39', 1, '2016-01-07 08:25:39'),
(11, 14, 1, 1, 1, 60, 0, 60, 4, 0, 1, '2016-01-02 01:52:04', 1, '2016-01-07 01:52:04'),
(12, 15, 2, 1, 1, 80, 0, 80, 5, 0, 1, '2016-01-02 01:52:32', 1, '2016-01-07 01:52:32'),
(13, 16, 2, 1, 1, 0, 0, 0, 5, 0, 1, '2016-01-08 10:16:42', 1, '2016-01-08 10:16:42'),
(14, 17, 2, 1, 1, 0, 0, 0, 4, 0, 1, '2016-01-08 10:40:32', 1, '2016-01-08 10:40:32'),
(15, 18, 2, 1, 1, 60, 0, 60, 6, 0, 1, '2016-01-09 08:59:40', 1, '2016-01-09 08:59:40'),
(16, 19, 2, 1, 1, 0, 0, 0, 5, 0, 1, '2016-01-09 03:20:24', 1, '2016-01-09 03:20:24'),
(17, 20, 2, 1, 1, 0, 0, 0, 0, 0, 1, '2016-01-09 03:27:23', 1, '2016-01-09 03:27:23'),
(18, 21, 2, 1, 1, 0, 0, 0, 0, 0, 1, '2016-01-09 04:47:17', 1, '2016-01-09 04:47:17'),
(19, 22, 2, 1, 1, 0, 0, 0, 0, 0, 1, '2016-01-09 04:50:54', 1, '2016-01-09 04:50:54'),
(20, 23, 2, 1, 1, 0, 0, 0, 2, 0, 1, '2016-01-09 04:52:09', 1, '2016-01-09 04:52:09'),
(21, 24, 2, 1, 1, 0, 0, 0, 4, 0, 1, '2016-01-09 04:53:14', 1, '2016-01-09 04:53:14'),
(22, 25, 2, 1, 1, 0, 0, 0, 5, 0, 1, '2016-01-09 04:54:18', 1, '2016-01-09 04:54:18'),
(23, 26, 2, 1, 1, 0, 0, 0, 5, 0, 1, '2016-01-09 04:55:38', 1, '2016-01-09 04:55:38'),
(24, 27, 2, 1, 1, 0, 0, 0, 5, 0, 1, '2016-01-09 04:56:32', 1, '2016-01-09 04:56:32'),
(25, 28, 2, 1, 1, 0, 0, 0, 1, 0, 1, '2016-01-09 04:57:30', 1, '2016-01-09 04:57:30'),
(26, 29, 2, 1, 1, 0, 0, 0, 3, 0, 1, '2016-01-09 04:58:23', 1, '2016-01-09 04:58:23'),
(27, 30, 2, 1, 1, 0, 0, 0, 4, 0, 1, '2016-01-09 05:41:30', 1, '2016-01-09 05:41:30'),
(28, 31, 2, 1, 1, 0, 0, 0, 6, 0, 1, '2016-01-11 07:57:56', 1, '2016-01-11 07:57:56'),
(29, 32, 2, 12, 1, 0, 0, 0, 0, 0, 12, '2016-01-11 02:34:22', 12, '2016-01-11 02:37:52'),
(30, 33, 3, 13, 1, 0, 0, 0, 0, 0, 13, '2016-01-12 07:51:42', 13, '2016-01-12 07:51:42'),
(31, 34, 3, 12, 1, 0, 0, 0, 0, 0, 12, '2016-01-13 11:07:48', 12, '2016-01-13 11:07:48'),
(32, 35, 3, 12, 1, 0, 0, 0, 4, 0, 12, '2016-01-13 11:08:29', 12, '2016-01-13 11:08:29'),
(33, 36, 3, 12, 1, 0, 0, 0, 0, 0, 12, '2016-01-13 11:09:11', 12, '2016-01-13 11:09:11'),
(34, 37, 3, 12, 1, 0, 0, 0, 0, 0, 12, '2016-01-13 11:09:11', 12, '2016-01-13 11:09:11'),
(35, 38, 46, 12, 1, 0, 0, 0, 4, 0, 12, '2016-01-13 02:03:05', 12, '2016-01-13 02:03:05'),
(36, 39, 46, 12, 1, 0, 0, 0, 4, 0, 12, '2016-01-13 02:05:37', 12, '2016-01-13 02:05:37'),
(37, 40, 46, 12, 1, 0, 0, 0, 4, 0, 12, '2016-01-13 02:06:05', 12, '2016-01-13 02:06:05'),
(38, 41, 46, 12, 1, 0, 0, 0, 6, 0, 12, '2016-01-13 03:10:27', 12, '2016-01-13 03:10:27');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

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
(18, 6, 9, 1, 100, -40, 220, 1, '2016-01-02 01:26:26', 1, '2016-01-02 01:26:26'),
(19, 6, 9, 1, -40, 0, 220, 1, '2016-01-02 01:27:08', 1, '2016-01-02 01:27:08'),
(20, 9, 12, 2, 50, 10, 60, 1, '2016-01-02 01:28:08', 1, '2016-01-02 01:28:08'),
(21, 9, 12, 2, 10, 0, 60, 1, '2016-01-02 01:28:19', 1, '2016-01-02 01:28:19'),
(22, 9, 12, 2, 10, -10, 60, 1, '2016-01-02 01:28:25', 1, '2016-01-02 01:28:25'),
(23, 9, 12, 2, -10, 0, 60, 1, '2016-01-02 01:28:42', 1, '2016-01-02 01:28:42'),
(24, 9, 12, 2, -10, 10, 60, 1, '2016-01-02 01:28:56', 1, '2016-01-02 01:28:56'),
(25, 9, 12, 2, 10, 0, 60, 1, '2016-01-07 02:59:49', 1, '2016-01-07 02:59:49');

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
