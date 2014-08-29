-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2014 at 04:42 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbwahanda`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `appointment_id` int(11) NOT NULL AUTO_INCREMENT,
  `appointment_date` date NOT NULL,
  `appointment_duration` int(11) NOT NULL,
  `appointment_source` text NOT NULL,
  `appointment_user_id` int(11) NOT NULL,
  PRIMARY KEY (`appointment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` varchar(255) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_status` int(11) NOT NULL,
  `booking_total` int(20) NOT NULL,
  `booking_client_id` int(11) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `booking_detail`
--

CREATE TABLE IF NOT EXISTS `booking_detail` (
  `booking_id` varchar(255) NOT NULL,
  `user_service_id` int(11) NOT NULL,
  `booking_detail_price` int(11) NOT NULL,
  PRIMARY KEY (`booking_id`,`user_service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(50) NOT NULL,
  `client_email` varchar(50) NOT NULL,
  `client_pass` varchar(50) NOT NULL,
  `client_phone` int(11) NOT NULL,
  `client_postcode` varchar(50) NOT NULL,
  `client_username` varchar(50) NOT NULL,
  `client_sex` int(11) NOT NULL,
  `client_creditpoint` int(11) NOT NULL,
  `client_giftpoint` int(11) NOT NULL,
  `client_verify` varchar(255) NOT NULL,
  `client_is_active` int(11) NOT NULL,
  PRIMARY KEY (`client_id`),
  UNIQUE KEY `client_email` (`client_email`),
  UNIQUE KEY `client_username` (`client_username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_content` text NOT NULL,
  `comment_status` int(11) NOT NULL,
  `comment_client_id` int(11) NOT NULL,
  `comment_user_id` int(11) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` int(50) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `e_voucher`
--

CREATE TABLE IF NOT EXISTS `e_voucher` (
  `e_voucher_id` varchar(255) NOT NULL,
  `e_voucher_due_date` date NOT NULL,
  `e_voucher_price` int(20) NOT NULL,
  `e_voucher_user_service_id` int(11) NOT NULL,
  `e_voucher_booking_id` int(11) NOT NULL,
  PRIMARY KEY (`e_voucher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gift_voucher`
--

CREATE TABLE IF NOT EXISTS `gift_voucher` (
  `gift_voucher_id` int(11) NOT NULL AUTO_INCREMENT,
  `gift_voucher_code` varchar(50) NOT NULL,
  `gift_voucher_due_date` date NOT NULL,
  `gift_voucher_price` varchar(50) NOT NULL,
  PRIMARY KEY (`gift_voucher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `group_service`
--

CREATE TABLE IF NOT EXISTS `group_service` (
  `group_service_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_service_name` varchar(50) NOT NULL,
  `group_service_user_id` int(11) NOT NULL,
  PRIMARY KEY (`group_service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE IF NOT EXISTS `promotion` (
  `promotion_id` int(11) NOT NULL AUTO_INCREMENT,
  `promotion_content` text NOT NULL,
  PRIMARY KEY (`promotion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(50) NOT NULL,
  `service_image` text NOT NULL,
  `service_service_typr_id` int(11) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `service_type`
--

CREATE TABLE IF NOT EXISTS `service_type` (
  `service_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_type_name` varchar(50) NOT NULL,
  PRIMARY KEY (`service_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `type_business`
--

CREATE TABLE IF NOT EXISTS `type_business` (
  `type_business_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_business_name` varchar(50) NOT NULL,
  PRIMARY KEY (`type_business_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_full_name` varchar(50) NOT NULL,
  `user_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_phone` varchar(50) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `user_post_code` varchar(10) NOT NULL,
  `user_lat` varchar(255) NOT NULL,
  `user_long` varchar(255) NOT NULL,
  `user_bussiness_name` varchar(50) NOT NULL,
  `user_logo` text NOT NULL,
  `user_slide` text NOT NULL,
  `user_is_use_voucher` int(11) NOT NULL,
  `user_tax_code` varchar(50) NOT NULL,
  `user_pre_name` varchar(50) NOT NULL,
  `user_bank_acc` int(11) NOT NULL,
  `user_bank_acc_owner` varchar(50) NOT NULL,
  `user_bank_name` varchar(50) NOT NULL,
  `user_bank_address` varchar(50) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `user_bank_branch` varchar(50) NOT NULL,
  `user_lvl_id` int(11) NOT NULL,
  `user_type_business_id` int(11) NOT NULL,
  `user_country_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_lvl_id` (`user_lvl_id`),
  KEY `user_type_business_id` (`user_type_business_id`),
  KEY `user_location_id` (`user_country_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_lvl`
--

CREATE TABLE IF NOT EXISTS `user_lvl` (
  `user_lvl_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_lvl_name` varchar(50) NOT NULL,
  PRIMARY KEY (`user_lvl_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_service`
--

CREATE TABLE IF NOT EXISTS `user_service` (
  `user_service_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_service_name` varchar(50) NOT NULL,
  `user_service_duration` int(11) NOT NULL,
  `user_service_full_price` varchar(50) NOT NULL,
  `user_service_sale_price` varchar(50) NOT NULL,
  `user_service_status` int(11) NOT NULL,
  `user_service_image` text NOT NULL,
  `user_service_description` text NOT NULL,
  `user_service_use_evoucher` int(11) NOT NULL,
  `user_service_group_id` int(11) NOT NULL,
  `user_service_service_id` int(11) NOT NULL,
  PRIMARY KEY (`user_service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
