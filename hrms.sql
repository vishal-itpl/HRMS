-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 07, 2023 at 12:05 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_info`
--

DROP TABLE IF EXISTS `emp_info`;
CREATE TABLE IF NOT EXISTS `emp_info` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_name` varchar(255) NOT NULL,
  `emp_dob` date NOT NULL,
  `emp_gender` varchar(255) NOT NULL,
  `emp_email` varchar(55) NOT NULL,
  `emp_mob` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `c_password` varchar(255) NOT NULL,
  `emp_address` varchar(255) NOT NULL,
  `emp_role` varchar(255) NOT NULL,
  `emp_position` varchar(255) NOT NULL,
  `emp_doj` date NOT NULL,
  `emp_salary` int(11) NOT NULL,
  `emg_name` varchar(255) NOT NULL,
  `emg_rltn` varchar(255) NOT NULL,
  `emg_contact` varchar(10) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `bank_accno` varchar(15) NOT NULL,
  `bank_acctype` varchar(255) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_info`
--

INSERT INTO `emp_info` (`emp_id`, `emp_name`, `emp_dob`, `emp_gender`, `emp_email`, `emp_mob`, `password`, `c_password`, `emp_address`, `emp_role`, `emp_position`, `emp_doj`, `emp_salary`, `emg_name`, `emg_rltn`, `emg_contact`, `bank_name`, `bank_accno`, `bank_acctype`) VALUES
(1, 'Vishal Kewalramani', '2003-03-10', 'Male', 'vishal@admin.com', '9856952645', 'e3bc667bf0c9cbd97a92a9ee8638e18e', 'e3bc667bf0c9cbd97a92a9ee8638e18e', 'Test', 'Admin', 'Intern', '2023-03-01', 56500, 'IDK', 'IDK', '7485968486', '1', '965832514563254', '2'),
(2, 'Kavita Kumari', '2000-09-15', 'Female', 'kavita@mail.com', '8457958452', '8308909f13e1ba949f8dfd23e0121098', '8308909f13e1ba949f8dfd23e0121098', 'Test', 'Employee', 'Intern', '2022-08-11', 8500, 'Savita Kumari', 'Sister', '7854845295', '4', '958745574584125', '3'),
(3, 'Jigar Joshi', '2003-01-01', 'Male', 'jigar@mail.com', '9658965896', '0b4dc3cc2c0cd1921a7c650755191bab', '0b4dc3cc2c0cd1921a7c650755191bab', 'test', 'Employee', 'Intern', '2023-01-01', 5000, 'Savita', 'Friend', '7458547854', '2', '965874589658474', '2'),
(4, 'Raj Verma', '2001-01-02', 'Male', 'raj@mail.com', '8569547854', '9e2420bf0ae98180f93f8c8a83f35939', '9e2420bf0ae98180f93f8c8a83f35939', 'test', 'Employee', 'Jr. Developer', '2022-12-09', 28500, 'Suresh Verma ', 'Father', '9658745874', '3', '', '2'),
(5, 'Ishan Malhotra', '1996-02-05', 'Male', 'ishan@mail.com', '8547859658', '1902437f3adc144da30cfcf0c1b80b07', '1902437f3adc144da30cfcf0c1b80b07', 'test', 'Employee', 'Jr. Developer', '2021-01-01', 27500, 'Neil Malhotra', 'Dad', '7469658548', '1', '987987454546876', '1');

-- --------------------------------------------------------

--
-- Table structure for table `leave_application`
--

DROP TABLE IF EXISTS `leave_application`;
CREATE TABLE IF NOT EXISTS `leave_application` (
  `application_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `app_date` timestamp NULL DEFAULT NULL,
  `leave_type` varchar(50) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`application_id`),
  KEY `emp_id` (`emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_application`
--

INSERT INTO `leave_application` (`application_id`, `emp_id`, `app_date`, `leave_type`, `from_date`, `to_date`, `description`) VALUES
(1, 2, '2023-10-04 18:30:00', 'Casual Leave', '2023-10-06', '2023-10-08', 'This is a casual leave kindly approve '),
(2, 2, '2023-10-06 09:02:18', 'Work from Home Leave', '2023-10-14', '2023-10-21', 'I would not be able to come to office on these days kindly approve my work from home leave '),
(3, 3, '2023-10-06 10:17:34', 'Personal Leave', '2023-10-07', '2023-10-08', 'I have a personal work due to which I would not be able to come to the office on the following days.\r\n'),
(4, 4, '2023-10-10 10:09:08', 'Work from Home Leave', '2023-10-13', '2023-10-14', 'I\'ll not be able to come office for the following days for some reasons so I\'ll work from home.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

DROP TABLE IF EXISTS `payroll`;
CREATE TABLE IF NOT EXISTS `payroll` (
  `payroll_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `actual_salary` int(11) NOT NULL,
  `basic_sal` int(11) NOT NULL,
  `working_days` int(11) NOT NULL,
  `total_days` int(11) NOT NULL COMMENT 'per month',
  `hra` int(11) NOT NULL,
  `others` int(11) NOT NULL,
  `provident_fund` int(11) NOT NULL,
  `esi` int(11) NOT NULL,
  `ptax` int(11) NOT NULL,
  `leave_days` int(11) NOT NULL,
  `leave_amount` int(11) NOT NULL,
  `net_salary` int(11) NOT NULL,
  PRIMARY KEY (`payroll_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`payroll_id`, `emp_id`, `actual_salary`, `basic_sal`, `working_days`, `total_days`, `hra`, `others`, `provident_fund`, `esi`, `ptax`, `leave_days`, `leave_amount`, `net_salary`) VALUES
(1, 2, 8500, 4250, 22, 31, 1700, 2550, 510, 128, 200, 0, 0, 7663);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
