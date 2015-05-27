-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2015 at 05:45 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `merobazaar`
--

-- --------------------------------------------------------

--
-- Table structure for table `rescue_calls`
--

CREATE TABLE IF NOT EXISTS `rescue_calls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `lon` double DEFAULT NULL,
  `pos_acc` varchar(255) DEFAULT NULL,
  `injury` varchar(255) DEFAULT NULL,
  `trap` varchar(255) DEFAULT NULL,
  `complications` text,
  `hazards` text,
  `description` text,
  `locality` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city_vdc` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `rescue_status` varchar(255) DEFAULT NULL,
  `call_received_date_time` datetime DEFAULT NULL,
  `call_ack_date_time` datetime DEFAULT NULL,
  `rescued_date_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `rescue_calls`
--

INSERT INTO `rescue_calls` (`id`, `name`, `phone`, `address`, `lat`, `lon`, `pos_acc`, `injury`, `trap`, `complications`, `hazards`, `description`, `locality`, `street`, `city_vdc`, `region`, `zip_code`, `rescue_status`, `call_received_date_time`, `call_ack_date_time`, `rescued_date_time`) VALUES
(1, 'raj', '11111', 'Timba Sirak Factory, Patan 44700, Nepal\r\n\r\n', 27.657416, 85.318379, '25', 'Minor', 'trapped_and_immobile', 'suffocating, loosing consciousness', 'fire, chemical', NULL, NULL, NULL, NULL, NULL, NULL, 'rescued', NULL, NULL, NULL),
(2, 'raja', '22222', 'Lagankhel Road, Patan 44700, Nepal', 27.659696, 85.324387, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
