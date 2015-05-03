-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2015 at 04:45 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_relief911`
--

-- --------------------------------------------------------

--
-- Table structure for table `relief_info`
--

CREATE TABLE IF NOT EXISTS `relief_info` (
  `rlf_id` int(11) NOT NULL AUTO_INCREMENT,
  `head_fname` varchar(100) NOT NULL,
  `head_mname` varchar(100) NOT NULL,
  `head_lname` varchar(100) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `age` int(11) NOT NULL,
  `address 1` varchar(255) NOT NULL,
  `tole` varchar(255) NOT NULL,
  `ward_no` int(11) NOT NULL,
  `vdc` varchar(255) NOT NULL,
  `district` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `tel_no` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`rlf_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
