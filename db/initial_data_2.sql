-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2015 at 09:05 AM
-- Server version: 5.6.23
-- PHP Version: 5.5.9-1ubuntu4.9

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `districts`
--

CREATE TABLE IF NOT EXISTS `districts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `gps` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `code`, `name`, `gps`) VALUES
(1, 0, 'Bhaktapur', 0),
(2, 0, 'Dhading', 0),
(3, 0, 'Kathmandu', 0),
(4, 0, 'Kavrepalanchok', 0),
(5, 0, 'Lalitpur', 0),
(6, 0, 'Nuwakot', 0),
(7, 0, 'Rasuwa', 0),
(8, 0, 'Sindhupalchok', 0),
(9, 0, 'Banke', 0),
(10, 0, 'Bardiya', 0),
(11, 0, 'Dailekh', 0),
(12, 0, 'Jajarkot', 0),
(13, 0, 'Surkhet', 0),
(14, 0, 'Baglung', 0),
(15, 0, 'Mustang', 0),
(16, 0, 'Myagdi', 0),
(17, 0, 'Parbat', 0),
(18, 0, 'Gorkha', 0),
(19, 0, 'Kaski', 0),
(20, 0, 'Lamjung', 0),
(21, 0, 'Manang', 0),
(22, 0, 'Syangja', 0),
(23, 0, 'Tanahu', 0),
(24, 0, 'Dhanusa', 0),
(25, 0, 'Dolakha', 0),
(26, 0, 'Mahottari', 0),
(27, 0, 'Ramechhap', 0),
(28, 0, 'Sarlahi', 0),
(29, 0, 'Sindhuli', 0),
(30, 0, 'Dolpa', 0),
(31, 0, 'Humla', 0),
(32, 0, 'Jumla', 0),
(33, 0, 'Kalikot', 0),
(34, 0, 'Mugu', 0),
(35, 0, 'Bhojpur', 0),
(36, 0, 'Dhankuta', 0),
(37, 0, 'Morang', 0),
(38, 0, 'Sankhuwasabha', 0),
(39, 0, 'Sunsari', 0),
(40, 0, 'Terhathum', 0),
(41, 0, 'Arghakhanchi', 0),
(42, 0, 'Gulmi', 0),
(43, 0, 'Kapilvastu', 0),
(44, 0, 'Nawalparasi', 0),
(45, 0, 'Palpa', 0),
(46, 0, 'Rupandehi', 0),
(47, 0, 'Baitadi', 0),
(48, 0, 'Dadeldhura', 0),
(49, 0, 'Darchula', 0),
(50, 0, 'Kanchanpur', 0),
(51, 0, 'Ilam', 0),
(52, 0, 'Jhapa', 0),
(53, 0, 'Panchthar', 0),
(54, 0, 'Taplejung', 0),
(55, 0, 'Bara', 0),
(56, 0, 'Chitwan', 0),
(57, 0, 'Makwanpur', 0),
(58, 0, 'Parsa', 0),
(59, 0, 'Rautahat', 0),
(60, 0, 'Dang', 0),
(61, 0, 'Pyuthan', 0),
(62, 0, 'Rolpa', 0),
(63, 0, 'Rukum', 0),
(64, 0, 'Salyan', 0),
(65, 0, 'Khotang', 0),
(66, 0, 'Okhaldhunga', 0),
(67, 0, 'Saptari', 0),
(68, 0, 'Siraha', 0),
(69, 0, 'Solukhumbu', 0),
(70, 0, 'Udayapur', 0),
(71, 0, 'Achham', 0),
(72, 0, 'Bajhang', 0),
(73, 0, 'Bajura', 0),
(74, 0, 'Doti', 0),
(75, 0, 'Kailali', 0);

-- --------------------------------------------------------

--
-- Table structure for table `district_units`
--

CREATE TABLE IF NOT EXISTS `district_units` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `district_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` int(11) NOT NULL,
  `region` varchar(100) DEFAULT NULL,
  `noofwards` int(11) DEFAULT NULL,
  `population` int(11) DEFAULT NULL,
  `has_road_access` tinyint(1) DEFAULT NULL,
  `condition_of_road` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `disctict_id` (`district_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `district_units`
--

INSERT INTO `district_units` (`id`, `district_id`, `name`, `code`, `region`, `noofwards`, `population`, `has_road_access`, `condition_of_road`) VALUES
(1, 18, 'Aanppipal', 36001, NULL, NULL, NULL, NULL, NULL),
(2, 18, 'Aaruarbang', 36002, NULL, NULL, NULL, NULL, NULL),
(3, 18, 'Aaruchanuate', 36003, NULL, NULL, NULL, NULL, NULL),
(4, 18, 'Aarupokhari', 36004, NULL, NULL, NULL, NULL, NULL),
(5, 18, 'Asrang', 36005, NULL, NULL, NULL, NULL, NULL),
(6, 18, 'Baguwa', 36006, NULL, NULL, NULL, NULL, NULL),
(7, 18, 'Bakrang', 36007, NULL, NULL, NULL, NULL, NULL),
(8, 18, 'Bhirkot', 36008, NULL, NULL, NULL, NULL, NULL),
(9, 18, 'Bhumlichok', 36009, NULL, NULL, NULL, NULL, NULL),
(10, 18, 'Bihi', 36010, NULL, NULL, NULL, NULL, NULL),
(11, 18, 'Borlang', 36011, NULL, NULL, NULL, NULL, NULL),
(12, 18, 'Bunkot', 36012, NULL, NULL, NULL, NULL, NULL),
(13, 18, 'Chhaikampar', 36013, NULL, NULL, NULL, NULL, NULL),
(14, 18, 'Chhoprak', 36014, NULL, NULL, NULL, NULL, NULL),
(15, 18, 'Chumchet', 36015, NULL, NULL, NULL, NULL, NULL),
(16, 18, 'Chyngli', 36016, NULL, NULL, NULL, NULL, NULL),
(17, 18, 'Darbhung', 36017, NULL, NULL, NULL, NULL, NULL),
(18, 18, 'Deurali', 36018, NULL, NULL, NULL, NULL, NULL),
(19, 18, 'Dhawa', 36019, NULL, NULL, NULL, NULL, NULL),
(20, 18, 'Dhuwakot', 36020, NULL, NULL, NULL, NULL, NULL),
(21, 18, 'Finam', 36021, NULL, NULL, NULL, NULL, NULL),
(22, 18, 'Fujel', 36022, NULL, NULL, NULL, NULL, NULL),
(23, 18, 'Gaikhur', 36023, NULL, NULL, NULL, NULL, NULL),
(24, 18, 'Gakhu', 36024, NULL, NULL, NULL, NULL, NULL),
(25, 18, 'Ghairung', 36025, NULL, NULL, NULL, NULL, NULL),
(26, 18, 'Ghyachok', 36026, NULL, NULL, NULL, NULL, NULL),
(27, 18, 'Ghyalchok', 36027, NULL, NULL, NULL, NULL, NULL),
(28, 18, 'Gumda', 36028, NULL, NULL, NULL, NULL, NULL),
(29, 18, 'Hanspur', 36029, NULL, NULL, NULL, NULL, NULL),
(30, 18, 'Harmhi', 36030, NULL, NULL, NULL, NULL, NULL),
(31, 18, 'Jaubari', 36031, NULL, NULL, NULL, NULL, NULL),
(32, 18, 'Kashigaun', 36032, NULL, NULL, NULL, NULL, NULL),
(33, 18, 'Kerabari', 36033, NULL, NULL, NULL, NULL, NULL),
(34, 18, 'Kerauja', 36034, NULL, NULL, NULL, NULL, NULL),
(35, 18, 'Kharibot', 36035, NULL, NULL, NULL, NULL, NULL),
(36, 18, 'Khoplang', 36036, NULL, NULL, NULL, NULL, NULL),
(37, 18, 'Laprak', 36037, NULL, NULL, NULL, NULL, NULL),
(38, 18, 'Lapu', 36038, NULL, NULL, NULL, NULL, NULL),
(39, 18, 'Lho', 36039, NULL, NULL, NULL, NULL, NULL),
(40, 18, 'Makaising', 36040, NULL, NULL, NULL, NULL, NULL),
(41, 18, 'Manakamana', 36041, NULL, NULL, NULL, NULL, NULL),
(42, 18, 'Manbu', 36042, NULL, NULL, NULL, NULL, NULL),
(43, 18, 'Masel', 36043, NULL, NULL, NULL, NULL, NULL),
(44, 18, 'Muchhok', 36044, NULL, NULL, NULL, NULL, NULL),
(45, 18, 'Namjung', 36045, NULL, NULL, NULL, NULL, NULL),
(46, 18, 'Nareshwor', 36046, NULL, NULL, NULL, NULL, NULL),
(47, 18, 'Palumtar', 36047, NULL, NULL, NULL, NULL, NULL),
(48, 18, 'Panchkhuwadeurali', 36048, NULL, NULL, NULL, NULL, NULL),
(49, 18, 'Pandrung', 36049, NULL, NULL, NULL, NULL, NULL),
(50, 18, 'Prithvinarayan Municipality', 36050, NULL, NULL, NULL, NULL, NULL),
(51, 18, 'Prok', 36051, NULL, NULL, NULL, NULL, NULL),
(52, 18, 'Samagaun', 36052, NULL, NULL, NULL, NULL, NULL),
(53, 18, 'Saurpani', 36053, NULL, NULL, NULL, NULL, NULL),
(54, 18, 'Shreenathkot', 36054, NULL, NULL, NULL, NULL, NULL),
(55, 18, 'Simjung', 36055, NULL, NULL, NULL, NULL, NULL),
(56, 18, 'Sirdibas', 36056, NULL, NULL, NULL, NULL, NULL),
(57, 18, 'Swara', 36057, NULL, NULL, NULL, NULL, NULL),
(58, 18, 'Taklung', 36058, NULL, NULL, NULL, NULL, NULL),
(59, 18, 'Takukot', 36059, NULL, NULL, NULL, NULL, NULL),
(60, 18, 'Takumajhalakuribot', 36060, NULL, NULL, NULL, NULL, NULL),
(61, 18, 'Tandrang', 36061, NULL, NULL, NULL, NULL, NULL),
(62, 18, 'Tanglichok', 36062, NULL, NULL, NULL, NULL, NULL),
(63, 18, 'Taple', 36063, NULL, NULL, NULL, NULL, NULL),
(64, 18, 'Thalajung', 36064, NULL, NULL, NULL, NULL, NULL),
(65, 18, 'Thumi', 36065, NULL, NULL, NULL, NULL, NULL),
(66, 18, 'Uhya', 36066, NULL, NULL, NULL, NULL, NULL),
(67, 18, 'Warpak', 36067, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE IF NOT EXISTS `donation` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `item` varchar(200) NOT NULL,
  `item_desc` varchar(400) NOT NULL,
  `item_type` enum('general','money','food','clothes','service') NOT NULL DEFAULT 'general',
  `num_items` int(11) unsigned NOT NULL DEFAULT '1',
  `where_to_collect` varchar(300) NOT NULL,
  `phone_number` varchar(120) NOT NULL,
  `media_upload_type` enum('photo','document','pdf','general') NOT NULL DEFAULT 'photo',
  `media_upload_path` varchar(300) NOT NULL,
  `status` varchar(60) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `user_id`, `item`, `item_desc`, `item_type`, `num_items`, `where_to_collect`, `phone_number`, `media_upload_type`, `media_upload_path`, `status`, `date_added`) VALUES
(1, 1, 'Waiwai', 'Waiwai full cartons', 'food', 50, 'Mangal Bazar', '9851128832', 'document', 'photo if any', 'available', '2015-04-30 08:42:38');

-- --------------------------------------------------------

--
-- Table structure for table `donation_distribution`
--

CREATE TABLE IF NOT EXISTS `donation_distribution` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `donation_id` int(11) NOT NULL,
  `village_id` int(11) NOT NULL,
  `notes` varchar(500) NOT NULL,
  `approved_by_user_id` int(11) NOT NULL,
  `status` varchar(200) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `need_relief`
--

CREATE TABLE IF NOT EXISTS `need_relief` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` enum('m','f','u') NOT NULL,
  `age` int(5) NOT NULL,
  `address1` varchar(400) NOT NULL,
  `address2` varchar(400) NOT NULL,
  `tole` varchar(255) NOT NULL,
  `ward_num` int(11) NOT NULL,
  `vdc` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone_mobile` varchar(100) NOT NULL,
  `phone_home` varchar(100) NOT NULL,
  `notes` varchar(2000) NOT NULL,
  `village_id` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_type` enum('representative','admin','donator','editor') NOT NULL DEFAULT 'donator',
  `username` varchar(60) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `second_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `phone` varchar(60) DEFAULT NULL,
  `city` varchar(150) DEFAULT NULL,
  `state` varchar(150) DEFAULT NULL,
  `country` varchar(150) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `village`
--

CREATE TABLE IF NOT EXISTS `village` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` varchar(400) NOT NULL,
  `representative_user_id` int(11) NOT NULL,
  `category` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE IF NOT EXISTS `wards` (
  `id` int(11) NOT NULL,
  `disctict_unit_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `has_road_access` tinyint(1) NOT NULL,
  `population` int(11) NOT NULL,
  `region` enum('terai','pahad','himal','bhitri madhes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
