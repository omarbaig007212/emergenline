-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: sql12.freemysqlhosting.net
-- Generation Time: Aug 14, 2020 at 03:09 PM
-- Server version: 5.5.62-0ubuntu0.14.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dZlqhGsQpi`
--
CREATE DATABASE IF NOT EXISTS `dZlqhGsQpi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dZlqhGsQpi`;

-- --------------------------------------------------------

--
-- Table structure for table `emergency_form`
--

CREATE TABLE IF NOT EXISTS `emergency_form` (
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `phonenumber` int(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `homephone` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency_form`
--

INSERT INTO `emergency_form` (`fname`, `lname`, `gender`, `date`, `phonenumber`, `address`, `city`, `homephone`) VALUES
('Pias', 'Paul', 'Male', '0000-00-00', 1776688358, 'A Block', 'Dhaka', 85163078),
('fasf', 'asff', 'Male', '0000-00-00', 99233123, 'saffaaaaaaaaaaaaaaaaaaa', 'MymenSingh', 999),
('name', 'eman', 'Male', '0000-00-00', 2147483647, 'No.119,1st floor,Sashaank Aavaas\r\nshamarajpura Shamarajpura,amba bhavani temple road Bengaluru, KARNATAKA 560097', 'Hassan', 2147483647),
('name', 'eman', 'Male', '0000-00-00', 2147483647, 'No.119,1st floor,Sashaank Aavaas\r\nshamarajpura Shamarajpura,amba bhavani temple road Bengaluru, KARNATAKA 560097', 'Gadag', 2147483647),
('Sudeep', 'Shetty', 'Male', '0000-00-00', 1234567890, 'Fucked up', 'Bengaluru Rural', 987654321),
('Tr', 'We', 'Male', '0000-00-00', 754, 'Ccc', 'Belagavi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient_registration`
--

CREATE TABLE IF NOT EXISTS `patient_registration` (
  `patient_name` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `mobile_number` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `street_address` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `zipcode` int(30) NOT NULL,
  `country` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `test1` varchar(20) NOT NULL,
  `test2` varchar(20) NOT NULL,
  `test3` varchar(20) NOT NULL,
  `test4` varchar(20) NOT NULL,
  `test5` varchar(20) NOT NULL,
  `test6` varchar(20) NOT NULL,
  `patient_id` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_registration`
--

INSERT INTO `patient_registration` (`patient_name`, `gender`, `mobile_number`, `date`, `street_address`, `city`, `zipcode`, `country`, `email`, `test1`, `test2`, `test3`, `test4`, `test5`, `test6`, `patient_id`) VALUES
('new', 'Female', '123', '0000-00-00', 'A', 'B', 12, 'D', 'fasil@gmail.com', '', '', 'on', '', '', '', 9),
('name', 'Male', '9921182211', '0000-00-00', 'asd', 'fasf', 560097, 'fsafa', 'pcmobgamer181@gmail.com', '', '', '', '', 'on', '', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registered_users`
--

CREATE TABLE IF NOT EXISTS `tbl_registered_users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registered_users`
--

INSERT INTO `tbl_registered_users` (`id`, `name`, `email`, `password`) VALUES
(0, 'fox', '1hk18cs082@hkbk.edu.in', '50263dc02cca01353a2668706a21bf1c'),
(0, 'espn', 'pcmobgamer181@gmail.com', '89e6d2b383471fc370d828e552c19e65'),
(0, 'test', 'new@gmail.com', '22af645d1859cb5ca6da0c484f1f37ea'),
(0, 'Sudeep', '1hk18is091@hkbk.edu.in', '4051918ba5dd57f98cbfc4847a5da354');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
