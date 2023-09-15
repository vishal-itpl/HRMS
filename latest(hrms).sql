-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 15, 2023 at 12:29 PM
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
-- Table structure for table `credentials`
--

DROP TABLE IF EXISTS `credentials`;
CREATE TABLE IF NOT EXISTS `credentials` (
  `Email` varchar(20) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`Email`, `Password`, `role`) VALUES
('admin@hrv.com', '41749b965e8bde9ea809e214a72dcea5', ''),
('vishal@mail.com', 'e3bc667bf0c9cbd97a92a9ee8638e18e', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_info`
--

INSERT INTO `emp_info` (`emp_id`, `emp_name`, `emp_dob`, `emp_gender`, `emp_email`, `emp_mob`, `password`, `c_password`, `emp_address`, `emp_role`, `emp_position`, `emp_doj`, `emp_salary`, `emg_name`, `emg_rltn`, `emg_contact`, `bank_name`, `bank_accno`, `bank_acctype`) VALUES
(1, 'Vishal Kewalramani', '2003-03-10', 'Male', 'vishal@admin.com', '9856952645', 'e3bc667bf0c9cbd97a92a9ee8638e18e', 'e3bc667bf0c9cbd97a92a9ee8638e18e', 'Test', 'Admin', '', '2023-03-01', 56500, 'Anuj', 'Brother', '7485968486', '1', '965832514563254', '2'),
(2, 'Kavita Kumari', '2000-09-15', 'Female', 'kavita@mail.com', '8457958452', '8308909f13e1ba949f8dfd23e0121098', '8308909f13e1ba949f8dfd23e0121098', 'Test', 'Employee', 'Intern', '2022-08-11', 8500, 'Savita Kumari', 'Sister', '7854845295', '4', '958745574584125', '3');

-- --------------------------------------------------------

--
-- Table structure for table `leave_application`
--

DROP TABLE IF EXISTS `leave_application`;
CREATE TABLE IF NOT EXISTS `leave_application` (
  `application_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `app_date` date DEFAULT NULL,
  `leave_type` varchar(50) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`application_id`),
  KEY `emp_id` (`emp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(4, 'admin', '6057f13c496ecf7fd777ceb9e79ae285', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
