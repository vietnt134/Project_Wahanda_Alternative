-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2014 at 05:04 PM
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
  `booking_detail_date` date NOT NULL,
  `booking_detail_time` time NOT NULL,
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
  `client_phone` varchar(50) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_name`, `client_email`, `client_pass`, `client_phone`, `client_postcode`, `client_username`, `client_sex`, `client_creditpoint`, `client_giftpoint`, `client_verify`, `client_is_active`) VALUES
(1, 'LeTrongLoi', 'trongloikt192@gmail.com', 'bd18fa92a97df32d0da484fe76ad2dc2', '123456789', '70000', 'trongloikt192', 0, 0, 0, '88399349280acb8805887b3a269a02ea', 1),
(2, 'Nguyễn Trung Việt', 'vietnt134@gmail.com', 'a3ed0c6e51714fedb944c820b63b3c7a', '0903676222', '70000', 'viet_nt', 0, 0, 0, '2d4e4f0b2a29ce2484d87c69ec77c09b', 1);

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
  `country_id` int(5) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(255) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=253 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'Afghanistan'),
(2, 'Albania'),
(3, 'Algeria'),
(4, 'American Samoa'),
(5, 'Andorra'),
(6, 'Angola'),
(7, 'Anguilla'),
(8, 'Antarctica'),
(9, 'Antigua and Barbuda'),
(10, 'Argentina'),
(11, 'Armenia'),
(12, 'Armenia'),
(13, 'Aruba'),
(14, 'Australia'),
(15, 'Austria'),
(16, 'Azerbaijan'),
(17, 'Azerbaijan'),
(18, 'Bahamas'),
(19, 'Bahrain'),
(20, 'Bangladesh'),
(21, 'Barbados'),
(22, 'Belarus'),
(23, 'Belgium'),
(24, 'Belize'),
(25, 'Benin'),
(26, 'Bermuda'),
(27, 'Bhutan'),
(28, 'Bolivia'),
(29, 'Bosnia and Herzegovina'),
(30, 'Botswana'),
(31, 'Bouvet Island'),
(32, 'Brazil'),
(33, 'British Indian Ocean Territory'),
(34, 'Brunei Darussalam'),
(35, 'Bulgaria'),
(36, 'Burkina Faso'),
(37, 'Burundi'),
(38, 'Cambodia'),
(39, 'Cameroon'),
(40, 'Canada'),
(41, 'Cape Verde'),
(42, 'Cayman Islands'),
(43, 'Central African Republic'),
(44, 'Chad'),
(45, 'Chile'),
(46, 'China'),
(47, 'Christmas Island'),
(48, 'Cocos (Keeling) Islands'),
(49, 'Colombia'),
(50, 'Comoros'),
(51, 'Congo'),
(52, 'Congo, The Democratic Republic of The'),
(53, 'Cook Islands'),
(54, 'Costa Rica'),
(55, 'Cote D''ivoire'),
(56, 'Croatia'),
(57, 'Cuba'),
(58, 'Cyprus'),
(60, 'Czech Republic'),
(61, 'Denmark'),
(62, 'Djibouti'),
(63, 'Dominica'),
(64, 'Dominican Republic'),
(65, 'Easter Island'),
(66, 'Ecuador'),
(67, 'Egypt'),
(68, 'El Salvador'),
(69, 'Equatorial Guinea'),
(70, 'Eritrea'),
(71, 'Estonia'),
(72, 'Ethiopia'),
(73, 'Falkland Islands (Malvinas)'),
(74, 'Faroe Islands'),
(75, 'Fiji'),
(76, 'Finland'),
(77, 'France'),
(78, 'French Guiana'),
(79, 'French Polynesia'),
(80, 'French Southern Territories'),
(81, 'Gabon'),
(82, 'Gambia'),
(83, 'Georgia'),
(85, 'Germany'),
(86, 'Ghana'),
(87, 'Gibraltar'),
(88, 'Greece'),
(89, 'Greenland'),
(91, 'Grenada'),
(92, 'Guadeloupe'),
(93, 'Guam'),
(94, 'Guatemala'),
(95, 'Guinea'),
(96, 'Guinea-bissau'),
(97, 'Guyana'),
(98, 'Haiti'),
(99, 'Heard Island and Mcdonald Islands'),
(100, 'Honduras'),
(101, 'Hong Kong'),
(102, 'Hungary'),
(103, 'Iceland'),
(104, 'India'),
(105, 'Indonesia'),
(106, 'Indonesia'),
(107, 'Iran'),
(108, 'Iraq'),
(109, 'Ireland'),
(110, 'Israel'),
(111, 'Italy'),
(112, 'Jamaica'),
(113, 'Japan'),
(114, 'Jordan'),
(115, 'Kazakhstan'),
(116, 'Kazakhstan'),
(117, 'Kenya'),
(118, 'Kiribati'),
(119, 'Korea, North'),
(120, 'Korea, South'),
(121, 'Kosovo'),
(122, 'Kuwait'),
(123, 'Kyrgyzstan'),
(124, 'Laos'),
(125, 'Latvia'),
(126, 'Lebanon'),
(127, 'Lesotho'),
(128, 'Liberia'),
(129, 'Libyan Arab Jamahiriya'),
(130, 'Liechtenstein'),
(131, 'Lithuania'),
(132, 'Luxembourg'),
(133, 'Macau'),
(134, 'Macedonia'),
(135, 'Madagascar'),
(136, 'Malawi'),
(137, 'Malaysia'),
(138, 'Maldives'),
(139, 'Mali'),
(140, 'Malta'),
(141, 'Marshall Islands'),
(142, 'Martinique'),
(143, 'Mauritania'),
(144, 'Mauritius'),
(145, 'Mayotte'),
(146, 'Mexico'),
(147, 'Micronesia, Federated States of'),
(148, 'Moldova, Republic of'),
(149, 'Monaco'),
(150, 'Mongolia'),
(151, 'Montenegro'),
(152, 'Montserrat'),
(153, 'Morocco'),
(154, 'Mozambique'),
(155, 'Myanmar'),
(156, 'Namibia'),
(157, 'Nauru'),
(158, 'Nepal'),
(159, 'Netherlands'),
(160, 'Netherlands Antilles'),
(161, 'New Caledonia'),
(162, 'New Zealand'),
(163, 'Nicaragua'),
(164, 'Niger'),
(165, 'Nigeria'),
(166, 'Niue'),
(167, 'Norfolk Island'),
(168, 'Northern Mariana Islands'),
(169, 'Norway'),
(170, 'Oman'),
(171, 'Pakistan'),
(172, 'Palau'),
(173, 'Palestinian Territory'),
(174, 'Panama'),
(175, 'Papua New Guinea'),
(176, 'Paraguay'),
(177, 'Peru'),
(178, 'Philippines'),
(179, 'Pitcairn'),
(180, 'Poland'),
(181, 'Portugal'),
(182, 'Puerto Rico'),
(183, 'Qatar'),
(184, 'Reunion'),
(185, 'Romania'),
(186, 'Russia'),
(187, 'Russia'),
(188, 'Rwanda'),
(189, 'Saint Helena'),
(190, 'Saint Kitts and Nevis'),
(191, 'Saint Lucia'),
(192, 'Saint Pierre and Miquelon'),
(193, 'Saint Vincent and The Grenadines'),
(194, 'Samoa'),
(195, 'San Marino'),
(196, 'Sao Tome and Principe'),
(197, 'Saudi Arabia'),
(198, 'Senegal'),
(199, 'Serbia and Montenegro'),
(200, 'Seychelles'),
(201, 'Sierra Leone'),
(202, 'Singapore'),
(203, 'Slovakia'),
(204, 'Slovenia'),
(205, 'Solomon Islands'),
(206, 'Somalia'),
(207, 'South Africa'),
(208, 'South Georgia and The South Sandwich Islands'),
(209, 'Spain'),
(210, 'Sri Lanka'),
(211, 'Sudan'),
(212, 'Suriname'),
(213, 'Svalbard and Jan Mayen'),
(214, 'Swaziland'),
(215, 'Sweden'),
(216, 'Switzerland'),
(217, 'Syria'),
(218, 'Taiwan'),
(219, 'Tajikistan'),
(220, 'Tanzania, United Republic of'),
(221, 'Thailand'),
(222, 'Timor-leste'),
(223, 'Togo'),
(224, 'Tokelau'),
(225, 'Tonga'),
(226, 'Trinidad and Tobago'),
(227, 'Tunisia'),
(228, 'Turkey'),
(229, 'Turkey'),
(230, 'Turkmenistan'),
(231, 'Turks and Caicos Islands'),
(232, 'Tuvalu'),
(233, 'Uganda'),
(234, 'Ukraine'),
(235, 'United Arab Emirates'),
(236, 'United Kingdom'),
(237, 'United States'),
(238, 'United States Minor Outlying Islands'),
(239, 'Uruguay'),
(240, 'Uzbekistan'),
(241, 'Vanuatu'),
(242, 'Vatican City'),
(243, 'Venezuela'),
(244, 'Vietnam'),
(245, 'Virgin Islands, British'),
(246, 'Virgin Islands, U.S.'),
(247, 'Wallis and Futuna'),
(248, 'Western Sahara'),
(249, 'Yemen'),
(250, 'Yemen'),
(251, 'Zambia'),
(252, 'Zimbabwe');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `group_service`
--

INSERT INTO `group_service` (`group_service_id`, `group_service_name`, `group_service_user_id`) VALUES
(1, 'Cắt tóc', 1),
(2, 'Massage toàn thân', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `service_image`, `service_service_typr_id`) VALUES
(1, 'Cắt tóc kiểu hàn quốc', '', 1),
(2, 'Làm tóc đám cưới', '', 1),
(3, 'Gội đầu phong cách Châu Âu', '', 1),
(4, 'Massage da mặt', '', 5),
(5, 'Massage toàn thân với đá nóng', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `service_type`
--

CREATE TABLE IF NOT EXISTS `service_type` (
  `service_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_type_name` varchar(50) NOT NULL,
  PRIMARY KEY (`service_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `service_type`
--

INSERT INTO `service_type` (`service_type_id`, `service_type_name`) VALUES
(1, 'HAIR'),
(2, 'BODY'),
(3, 'NAILS'),
(4, 'FACE'),
(5, 'MASSAGE'),
(6, 'FITNESS');

-- --------------------------------------------------------

--
-- Table structure for table `type_business`
--

CREATE TABLE IF NOT EXISTS `type_business` (
  `type_business_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_business_name` varchar(50) NOT NULL,
  PRIMARY KEY (`type_business_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `type_business`
--

INSERT INTO `type_business` (`type_business_id`, `type_business_name`) VALUES
(1, 'Casino Spa'),
(2, 'Beauty School');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_full_name` varchar(50) NOT NULL,
  `user_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_business_name` varchar(50) NOT NULL,
  `user_phone` varchar(50) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_facebook` varchar(50) DEFAULT NULL,
  `user_googleplus` varchar(50) DEFAULT NULL,
  `user_website` varchar(50) DEFAULT NULL,
  `user_description` text,
  `user_open_hour` varchar(255) DEFAULT '{"Monday":[8,20],"Monday":[8,20],"Monday":[8,20],"Tueday":[8,20],"Wednesday":[8,20],"Thursday":[8,20],"Friday":[8,20],"Saturday":[],"Sunday":[]}',
  `user_post_code` varchar(10) NOT NULL,
  `user_lat` varchar(255) NOT NULL,
  `user_long` varchar(255) NOT NULL,
  `user_logo` text NOT NULL,
  `user_slide` text NOT NULL,
  `user_is_use_voucher` int(11) NOT NULL DEFAULT '0',
  `user_tax_code` varchar(50) NOT NULL,
  `user_pre_name` varchar(50) NOT NULL,
  `user_country_id` int(5) NOT NULL,
  `user_lvl_id` int(11) NOT NULL,
  `user_type_business_id` int(11) NOT NULL,
  `user_bank_acc_owner` varchar(50) NOT NULL,
  `user_bank_acc` int(11) NOT NULL,
  `user_bank_name` varchar(50) NOT NULL,
  `user_bank_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `user_bank_branch` varchar(50) NOT NULL,
  `user_company_name` varchar(50) DEFAULT NULL,
  `user_company_address` varchar(255) DEFAULT NULL,
  `user_company_delegate` varchar(50) DEFAULT NULL,
  `user_company_tax_code` varchar(50) DEFAULT NULL,
  `user_company_country_id` int(5) DEFAULT NULL,
  `user_contact_name` varchar(50) DEFAULT NULL,
  `user_contact_email` varchar(50) DEFAULT NULL,
  `user_contact_phone` varchar(50) DEFAULT NULL,
  `user_contact_role` varchar(50) DEFAULT NULL,
  `user_notification_email` varchar(50) DEFAULT NULL,
  `user_limit_before_service` int(11) NOT NULL DEFAULT '180',
  `user_limit_before_booking` int(11) NOT NULL DEFAULT '30',
  PRIMARY KEY (`user_id`),
  KEY `user_lvl_id` (`user_lvl_id`),
  KEY `user_type_business_id` (`user_type_business_id`),
  KEY `user_location_id` (`user_country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_full_name`, `user_email`, `user_password`, `user_business_name`, `user_phone`, `user_address`, `user_facebook`, `user_googleplus`, `user_website`, `user_description`, `user_open_hour`, `user_post_code`, `user_lat`, `user_long`, `user_logo`, `user_slide`, `user_is_use_voucher`, `user_tax_code`, `user_pre_name`, `user_country_id`, `user_lvl_id`, `user_type_business_id`, `user_bank_acc_owner`, `user_bank_acc`, `user_bank_name`, `user_bank_address`, `user_bank_branch`, `user_company_name`, `user_company_address`, `user_company_delegate`, `user_company_tax_code`, `user_company_country_id`, `user_contact_name`, `user_contact_email`, `user_contact_phone`, `user_contact_role`, `user_notification_email`, `user_limit_before_service`, `user_limit_before_booking`) VALUES
(1, '', 'admincp@gmail.com', '0e246b470994ecdc91f7bfb3506f3e7d', 'Spa Ngọc Trinh', '0123456789', '188A3 Man Thiện, Q.9, Tp.HCM', 'facebook.com/trongloikt192', 'plus.google.com/trongloikt192', 'trongloikt192.vn', 'Ngọc Trinh SPA được thành lập năm 2007 với các dịch vụ dành cho phái nữ, qua nhiều năm kinh nghiệm chúng tôi đã nhận được sự tín nhiệm từ khách hàng và ngày một nâng cao trình độ phục vụ. Ngọc Trinh SPA có các chi nhánh tại Hà Nội và thành phố Hồ Chí Minh. Ngọc Trinh SPA hân hạnh phục vụ quý khách.', '{"Mon":[1,8,22],"Tue":[1,9,22],"Wed":[1,9,22],"Thu":[1,8,22],"Fri":[1,16,22],"Sat":[1,8,22],"Sun":[0,8,22]}', '7000', '', '', '//localhost:81/project_wahanda_alternative/public/assets/plugins/image-manager/upload/77652-1920x1200.jpg', '', 0, 'TX2001', 'GD. Lê Trọng Lợi', 244, 0, 2, 'Nguyễn Minh Nhật', 767236, 'Techcombank', '69 Thống Nhất, Q.Thủ Đức, Tp. HCM', 'Techcombank Q.Bình Thạnh', 'Brights VIệt Nam', 'Meritime Bank Tower, P.Bến Nghé, Q.1, Tp.HCM', 'GD. Lê Trọng Lợi', 'TX2001', 244, 'Nguyễn Trung Việt', 'viet_nt@gmail.com', '0123829222', 'Trưởng phòng', NULL, 120, 84),
(2, '', 'admin@gmail.com', '0e246b470994ecdc91f7bfb3506f3e7d', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 0, '', '', 5, 0, 2, '', 0, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 60, 30);

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
  `user_service_use_evoucher` int(11) NOT NULL DEFAULT '0',
  `user_service_group_id` int(11) NOT NULL,
  `user_service_service_id` int(11) NOT NULL,
  `user_service_delete_flg` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_service`
--

INSERT INTO `user_service` (`user_service_id`, `user_service_name`, `user_service_duration`, `user_service_full_price`, `user_service_sale_price`, `user_service_status`, `user_service_image`, `user_service_description`, `user_service_use_evoucher`, `user_service_group_id`, `user_service_service_id`, `user_service_delete_flg`) VALUES
(1, 'Cắt tóc Hàn Quốc dành cho nữ', 30, '400000', '350000', 1, '', 'Đến với spa của chị Ngọc Trinh chúng ta sẽ được phục vụ tận tình, Spa bao gồm các dịch vụ về tóc, body...đồng thời khi đã là thành viên, quý khách sẽ được hưởng các ưu đãi có 1 không 2 của Spa, nhanh chân lên khi ưu đãi là có hạn', 0, 1, 1, 0),
(2, 'Massage toản thân trắng da mịn màng', 80, '450000', '400000', 1, '', 'Đến với spa của chị Ngọc Trinh chúng ta sẽ được phục vụ tận tình, Spa bao gồm các dịch vụ về tóc, body...đồng thời khi đã là thành viên, quý khách sẽ được hưởng các ưu đãi có 1 không 2 của Spa, nhanh chân lên khi ưu đãi là có hạn', 0, 2, 5, 0),
(3, 'Massage mặt (bonus làm móng)', 80, '600000', '520000', 1, '', 'Đến với spa của chị Ngọc Trinh chúng ta sẽ được phục vụ tận tình, Spa bao gồm các dịch vụ về tóc, body...đồng thời khi đã là thành viên, quý khách sẽ được hưởng các ưu đãi có 1 không 2 của Spa, nhanh chân lên khi ưu đãi là có hạn', 0, 2, 4, 0),
(4, 'Cắt tóc cô dâu', 45, '400000', '350000', 1, '', 'Đến với spa của chị Ngọc Trinh chúng ta sẽ được phục vụ tận tình, Spa bao gồm các dịch vụ về tóc, body...đồng thời khi đã là thành viên, quý khách sẽ được hưởng các ưu đãi có 1 không 2 của Spa, nhanh chân lên khi ưu đãi là có hạn', 0, 1, 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
