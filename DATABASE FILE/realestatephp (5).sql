-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 20, 2024 at 07:59 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestatephp`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `content`, `image`) VALUES
(10, 'About Us', '<div id=\"pgc-w5d0dcc3394ac1-0-0\" class=\"panel-grid-cell\">\r\n<div id=\"panel-w5d0dcc3394ac1-0-0-0\" class=\"so-panel widget widget_sow-editor panel-first-child panel-last-child\" data-index=\"0\">\r\n<div class=\"so-widget-sow-editor so-widget-sow-editor-base\">\r\n<div class=\"siteorigin-widget-tinymce textwidget\">\r\n<p class=\"text_all_p_tag_css\">This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project.</p>\r\n<p class=\"text_all_p_tag_css\">This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project. (codeastro.com). This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project.</p>\r\n<div id=\"pgc-w5d0dcc3394ac1-0-0\" class=\"panel-grid-cell\">\r\n<div id=\"panel-w5d0dcc3394ac1-0-0-0\" class=\"so-panel widget widget_sow-editor panel-first-child panel-last-child\" data-index=\"0\">\r\n<div class=\"so-widget-sow-editor so-widget-sow-editor-base\">\r\n<div class=\"siteorigin-widget-tinymce textwidget\">\r\n<p class=\"text_all_p_tag_css\">This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project.</p>\r\n<p class=\"text_all_p_tag_css\">This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project. (codeastro.com) This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'condos-pool.png');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `auser` varchar(50) NOT NULL,
  `aemail` varchar(50) NOT NULL,
  `apass` varchar(50) NOT NULL,
  `adob` date NOT NULL,
  `aphone` varchar(15) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `auser`, `aemail`, `apass`, `adob`, `aphone`) VALUES
(1, 'admin', 'admin1@gmail.com', 'admin', '2024-02-12', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `cid` int(50) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) NOT NULL,
  `sid` int(50) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cid`, `cname`, `sid`) VALUES
(1, 'Surat', 1),
(2, 'Ahmedabad', 1),
(3, 'Vadodara', 1),
(4, 'Gandhinagar', 1),
(5, 'Vapi', 1),
(6, 'Rajkot', 1),
(7, 'Bhavnager', 1),
(8, 'Junagadh', 1),
(9, 'Nashik', 2),
(10, 'Mumbai', 2),
(11, 'Pune', 2),
(12, 'Nagpur', 2),
(13, 'Kolhapur', 2),
(14, 'Chennai', 3),
(15, 'Madurai', 3),
(16, 'Salem', 3),
(17, 'Baga Beach', 4),
(18, 'Panjim', 4),
(19, 'Hawa Mahal', 5),
(20, 'Jaipur', 5),
(21, 'Ajmer', 5),
(22, 'Bangluru', 6),
(23, 'Udaipur', 6),
(24, 'Kolar', 6);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `fid` int(50) NOT NULL AUTO_INCREMENT,
  `uid` int(50) NOT NULL,
  `fdescription` varchar(300) NOT NULL,
  `status` int(1) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `uid`, `fdescription`, `status`, `date`) VALUES
(1, 1, 'this website is very useful', 1, '2024-03-14 22:38:51');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `message` longtext NOT NULL,
  `uid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `email`, `message`, `uid`, `pid`) VALUES
(6, 'raval@gmail.com', 'hi', 5, 5),
(7, 'raval@gmail.com', 'hi', 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `product_id` int(50) NOT NULL,
  `payment_id` text NOT NULL,
  `aded_date` datetime NOT NULL,
  `uid` int(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_id` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `product_id`, `payment_id`, `aded_date`, `uid`) VALUES
(1, 1, 'pay_NmU8gmB3WUWgx7', '2024-03-15 09:07:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

DROP TABLE IF EXISTS `property`;
CREATE TABLE IF NOT EXISTS `property` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `pcontent` longtext NOT NULL,
  `type` varchar(100) NOT NULL,
  `bhk` varchar(50) NOT NULL,
  `stype` varchar(100) NOT NULL,
  `bedroom` int(50) NOT NULL,
  `bathroom` int(50) NOT NULL,
  `balcony` int(50) NOT NULL,
  `kitchen` int(50) NOT NULL,
  `hall` int(50) DEFAULT NULL,
  `floor` varchar(50) DEFAULT NULL,
  `size` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `location` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `feature` longtext NOT NULL,
  `pimage` varchar(300) NOT NULL,
  `pimage1` varchar(300) NOT NULL,
  `pimage2` varchar(300) NOT NULL,
  `pimage3` varchar(300) NOT NULL,
  `pimage4` varchar(300) NOT NULL,
  `uid` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `mapimage` varchar(300) NOT NULL,
  `topmapimage` varchar(300) NOT NULL,
  `groundmapimage` varchar(300) NOT NULL,
  `totalfloor` varchar(50) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`pid`, `title`, `pcontent`, `type`, `bhk`, `stype`, `bedroom`, `bathroom`, `balcony`, `kitchen`, `hall`, `floor`, `size`, `price`, `location`, `city`, `state`, `feature`, `pimage`, `pimage1`, `pimage2`, `pimage3`, `pimage4`, `uid`, `status`, `mapimage`, `topmapimage`, `groundmapimage`, `totalfloor`, `date`) VALUES
(7, 'Shree villa', '<p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p>', 'apartment', '1 BHK', 'buy', 1, 1, 1, 1, 1, '1st Floor', 780, 1500000, '197 shree darsan residensy', 'Surat', 'Gujarat', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Church/Temple : </span>No</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', '1-11-2048x1367-1.jpg', '3b7bbbff3f89ca6e03f67f1aed8c6968.jpg', '6faf8b753d981b76fa951efb02dda601.jpg', '91cf8acc8f538c72f929da7e4b988941.jpg', '1713ad8e866c96d26a968cbc126f08d8.jpg', 1, 'available', '1687578910_en-idei-club-p-interior-concept-house-dizain-krasivo-29.jpg', 'i.webp', '1675356602_en-idei-club-p-home-interior-ideas-interer-1.jpg', '1 Floor', '2024-03-18 17:52:21'),
(8, 'Radhika vatika', '<p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p>', 'flat', '1 BHK', 'buy', 1, 1, 1, 1, 1, '1st Floor', 800, 5500000, '197 shree darsan residensy', 'Mumbai', 'Maharashtra', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Church/Temple : </span>No</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', '1-11-2048x1367-1.jpg', '3b7bbbff3f89ca6e03f67f1aed8c6968.jpg', '6faf8b753d981b76fa951efb02dda601.jpg', '91cf8acc8f538c72f929da7e4b988941.jpg', '1687578910_en-idei-club-p-interior-concept-house-dizain-krasivo-29.jpg', 1, 'available', '1713ad8e866c96d26a968cbc126f08d8.jpg', '1713ad8e866c96d26a968cbc126f08d8.jpg', 'i.webp', '2 Floor', '2024-03-18 17:54:26'),
(9, 'Madhuvan hight', '<p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p>', 'house', '2 BHK', 'buy', 2, 1, 3, 2, 1, '1st Floor', 780, 7500000, '197 shree darsan residensy', 'Chennai', 'Tamil Nadu', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Church/Temple : </span>No</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', '1-11-2048x1367-1.jpg', '3b7bbbff3f89ca6e03f67f1aed8c6968.jpg', '6faf8b753d981b76fa951efb02dda601.jpg', '96cdfbdc773234ca0a658dc1521923bd.png', '1675356602_en-idei-club-p-home-interior-ideas-interer-1.jpg', 1, 'available', 'i.webp', 'ec7b80418cf6e47e3ea49d2e1da4e6fa.jpg', '147305506957cd095d55b06.jpg', '2 Floor', '2024-03-18 17:58:44'),
(10, 'Vrindavan society ', '<p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p>', 'villa', '1 BHK', 'buy', 2, 2, 3, 2, 2, '2nd Floor', 780, 5500000, '197 shree darsan residensy', 'Baga Beach', 'Goa', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Church/Temple : </span>No</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', '1-11-2048x1367-1.jpg', '6faf8b753d981b76fa951efb02dda601.jpg', '1675356602_en-idei-club-p-home-interior-ideas-interer-1.jpg', '96cdfbdc773234ca0a658dc1521923bd.png', 'House-mansion-lawn-flowers-grass-trees_2560x1600.jpg', 1, 'available', '1675356602_en-idei-club-p-home-interior-ideas-interer-1.jpg', '3b7bbbff3f89ca6e03f67f1aed8c6968.jpg', '147305506957cd095d55b06.jpg', '3 Floor', '2024-03-18 18:00:19'),
(11, 'Shai villa', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p>', 'villa', '1 BHK', 'rent', 1, 1, 1, 1, 1, '1st Floor', 780, 5000, '197 shree darsan residensy', 'Ahmedabad', '1', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Church/Temple : </span>No</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', '1-11-2048x1367-1.jpg', '3b7bbbff3f89ca6e03f67f1aed8c6968.jpg', '6faf8b753d981b76fa951efb02dda601.jpg', '91cf8acc8f538c72f929da7e4b988941.jpg', '96cdfbdc773234ca0a658dc1521923bd.png', 1, 'available', '1675356602_en-idei-club-p-home-interior-ideas-interer-1.jpg', '1687578910_en-idei-club-p-interior-concept-house-dizain-krasivo-29.jpg', 'c40c8d351fcd060bd00904296cf6c2f3.jpg', '1 Floor', '2024-03-18 19:20:54'),
(12, 'Paramhansh house', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p>', 'house', '1 BHK', 'rent', 1, 1, 1, 1, 1, '1st Floor', 800, 10000, '197 shree darsan residensy', 'Pune', '2', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Church/Temple : </span>No</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', '1-11-2048x1367-1.jpg', '3b7bbbff3f89ca6e03f67f1aed8c6968.jpg', '6faf8b753d981b76fa951efb02dda601.jpg', '91cf8acc8f538c72f929da7e4b988941.jpg', '96cdfbdc773234ca0a658dc1521923bd.png', 1, 'available', '1675356602_en-idei-club-p-home-interior-ideas-interer-1.jpg', '1687578910_en-idei-club-p-interior-concept-house-dizain-krasivo-29.jpg', 'House-mansion-lawn-flowers-grass-trees_2560x1600.jpg', '1 Floor', '2024-03-18 19:23:09'),
(13, 'Sunday haven ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p>', 'flat', '2 BHK', 'rent', 2, 2, 2, 1, 1, '4th Floor', 800, 7000, '197 shree darsan residensy', 'Madurai', '3', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Church/Temple : </span>No</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', '96cdfbdc773234ca0a658dc1521923bd.png', '91cf8acc8f538c72f929da7e4b988941.jpg', '1687578910_en-idei-club-p-interior-concept-house-dizain-krasivo-29.jpg', '1675356602_en-idei-club-p-home-interior-ideas-interer-1.jpg', '1-11-2048x1367-1.jpg', 1, 'available', '1675356602_en-idei-club-p-home-interior-ideas-interer-1.jpg', '1713ad8e866c96d26a968cbc126f08d8.jpg', '3b7bbbff3f89ca6e03f67f1aed8c6968.jpg', '4 Floor', '2024-03-18 19:26:03'),
(14, 'Navigant  aparment', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p>', 'apartment', '2 BHK', 'rent', 3, 3, 2, 2, 3, '1st Floor', 480, 8000, '197 shree darsan residensy', 'Baga Beach', '4', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Church/Temple : </span>No</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', '96cdfbdc773234ca0a658dc1521923bd.png', '3b7bbbff3f89ca6e03f67f1aed8c6968.jpg', '6faf8b753d981b76fa951efb02dda601.jpg', '1687578910_en-idei-club-p-interior-concept-house-dizain-krasivo-29.jpg', '6faf8b753d981b76fa951efb02dda601.jpg', 1, 'available', 'House-mansion-lawn-flowers-grass-trees_2560x1600.jpg', 'c40c8d351fcd060bd00904296cf6c2f3.jpg', '1687578910_en-idei-club-p-interior-concept-house-dizain-krasivo-29.jpg', '1 Floor', '2024-03-18 19:28:44'),
(15, 'jjjj', '<p>njj</p>', 'apartment', '1 BHK', 'buy', 1, 1, 1, 1, 1, NULL, 760, 5000000, 'fwejfw', 'Surat', '1', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Church/Temple : </span>No</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', '1713ad8e866c96d26a968cbc126f08d8.jpg', '01.jpg', '1675356602_en-idei-club-p-home-interior-ideas-interer-1.jpg', '1-11-2048x1367-1.jpg', 'c40c8d351fcd060bd00904296cf6c2f3.jpg', 2, 'available', '91cf8acc8f538c72f929da7e4b988941.jpg', '1687578910_en-idei-club-p-interior-concept-house-dizain-krasivo-29.jpg', '1675356602_en-idei-club-p-home-interior-ideas-interer-1.jpg', NULL, '2024-03-19 23:09:00'),
(16, 'raj-g', '<p>uuujn</p>', 'apartment', '1 BHK', 'rent', 1, 1, 1, 1, 1, NULL, 760, 345678, 'katargam', 'Vapi', '1', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Church/Temple : </span>No</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', '1713ad8e866c96d26a968cbc126f08d8.jpg', '1675356602_en-idei-club-p-home-interior-ideas-interer-1.jpg', '96cdfbdc773234ca0a658dc1521923bd.png', '3b7bbbff3f89ca6e03f67f1aed8c6968.jpg', '91cf8acc8f538c72f929da7e4b988941.jpg', 2, 'available', '6faf8b753d981b76fa951efb02dda601.jpg', '96cdfbdc773234ca0a658dc1521923bd.png', '3b7bbbff3f89ca6e03f67f1aed8c6968.jpg', NULL, '2024-03-19 23:10:40');

-- --------------------------------------------------------

--
-- Table structure for table `req`
--

DROP TABLE IF EXISTS `req`;
CREATE TABLE IF NOT EXISTS `req` (
  `did` int(50) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `message` text NOT NULL,
  `status` text NOT NULL,
  `uid` int(20) NOT NULL,
  `pid` int(10) NOT NULL,
  `bid` int(10) NOT NULL,
  PRIMARY KEY (`did`),
  UNIQUE KEY `bid` (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `req`
--

INSERT INTO `req` (`did`, `date`, `time`, `name`, `email`, `phone`, `message`, `status`, `uid`, `pid`, `bid`) VALUES
(3, '2024-03-13', '18:04:00.000000', 'raval', 'raval@gmail.com', 1234567890, 'I am intrested in this property.', 'Null', 5, 1, 5),
(5, '2024-03-20', '12:18:00.000000', 'raval', 'lrdhingadiya@gmail.com', 1234567890, 'I am intrested in this property.', 'Null', 1, 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `sid` int(50) NOT NULL AUTO_INCREMENT,
  `sname` varchar(50) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`sid`, `sname`) VALUES
(1, 'Gujarat'),
(2, 'Maharashtra'),
(3, 'Tamil Nadu'),
(4, 'Goa'),
(5, 'Rajasthan'),
(6, 'Karnataka');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(50) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `uphone` varchar(20) NOT NULL,
  `upass` varchar(50) NOT NULL,
  `utype` varchar(50) NOT NULL,
  `uimage` varchar(300) NOT NULL,
  `resettoken` varchar(255) DEFAULT NULL,
  `resetexpiry` date DEFAULT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `uemail` (`uemail`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `uemail`, `uphone`, `upass`, `utype`, `uimage`, `resettoken`, `resetexpiry`) VALUES
(1, 'raval', 'lrdhingadiya@gmail.com', '1234567890', '9d7778a60c1605f40eecc147a48c3d14db1ecc83', 'user', 'avatarm7-min.jpg', NULL, NULL),
(2, 'bhavesh', 'bhavesh@gmail.com', '9898924563', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'builder', 'user-a-min.png', NULL, NULL),
(3, 'rakesh', 'akbhumi16@gmail.com', '8965434561', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'builder', 'usersys-min.png', NULL, NULL),
(4, 'dashrath', 'dashrath@gmail.com', '8128914882', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'user', 'user-profile-min.png', NULL, NULL),
(5, 'dharmik', 'savanidharmik@gmail.com', '9523578629', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'builder', 'user-default-3-min.png', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
