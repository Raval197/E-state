-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 24, 2024 at 04:11 AM
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
  `title` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `content`, `image`) VALUES
(10, 'About Us', '<div id=\"pgc-w5d0dcc3394ac1-0-0\" class=\"panel-grid-cell\">\r\n<div id=\"panel-w5d0dcc3394ac1-0-0-0\" class=\"so-panel widget widget_sow-editor panel-first-child panel-last-child\" data-index=\"0\">\r\n<div class=\"so-widget-sow-editor so-widget-sow-editor-base\">\r\n<div class=\"siteorigin-widget-tinymce textwidget\">\r\n<p class=\"text_all_p_tag_css\">This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project.</p>\r\n<p class=\"text_all_p_tag_css\">This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project. (codeastro.com). This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project.</p>\r\n<div id=\"pgc-w5d0dcc3394ac1-0-0\" class=\"panel-grid-cell\">\r\n<div id=\"panel-w5d0dcc3394ac1-0-0-0\" class=\"so-panel widget widget_sow-editor panel-first-child panel-last-child\" data-index=\"0\">\r\n<div class=\"so-widget-sow-editor so-widget-sow-editor-base\">\r\n<div class=\"siteorigin-widget-tinymce textwidget\">\r\n<p class=\"text_all_p_tag_css\">This is a demo about us page for this project. This is a demo about us page for this project. This is a demo about us page for this project.</p>\r\n<p class=\"text_all_p_tag_css\">This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project. (codeastro.com) This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.This is a demo about us page for this project.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'house-floor-plan.png');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

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
  `cname` varchar(100) NOT NULL,
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
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `cid` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(250) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(1, 'vishal lalit', 'lrdhingadiya@gmail.com', '1234567890', 'safe', 'it is very safe plateform\r\n'),
(2, 'vishal lalit', 'lrdhingadiya@gmail.com', '1234567890', 'saller', 'its help to sale you property easy and safe '),
(3, 'vishal lalit', 'lrdhingadiya@gmail.com', '1234567890', 'saller', 'hy');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `uid`, `fdescription`, `status`, `date`) VALUES
(1, 2, 'this is very use fully and easy to use for every user . and its easy to findout smart property', 1, '2024-02-23 14:35:11'),
(2, 2, 'it is very usefull for  find property', 1, '2024-02-23 14:36:34'),
(3, 2, 'very safe and secure plateform for property seller and deller', 1, '2024-02-23 14:37:37');

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
  `hall` int(50) NOT NULL,
  `floor` varchar(50) NOT NULL,
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
  `totalfloor` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isFeatured` int(11) DEFAULT NULL,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`pid`, `title`, `pcontent`, `type`, `bhk`, `stype`, `bedroom`, `bathroom`, `balcony`, `kitchen`, `hall`, `floor`, `size`, `price`, `location`, `city`, `state`, `feature`, `pimage`, `pimage1`, `pimage2`, `pimage3`, `pimage4`, `uid`, `status`, `mapimage`, `topmapimage`, `groundmapimage`, `totalfloor`, `date`, `isFeatured`) VALUES
(1, 'sudram villa`', '<p>surat olpad</p>', 'house', '1 BHK', 'sale', 1, 2, 1, 1, 1, '1st Floor', 760, 2500000, 'karmala ', 'surat', 'Gujarat', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Church/Temple : </span>No</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', '1-11-2048x1367-1.jpg', '1713ad8e866c96d26a968cbc126f08d8.jpg', '1675356602_en-idei-club-p-home-interior-ideas-interer-1.jpg', '1687578910_en-idei-club-p-interior-concept-house-dizain-krasivo-29.jpg', '96cdfbdc773234ca0a658dc1521923bd.png', 2, 'available', '91cf8acc8f538c72f929da7e4b988941.jpg', '96cdfbdc773234ca0a658dc1521923bd.png', '1713ad8e866c96d26a968cbc126f08d8.jpg', '1 Floor', '2024-02-23 14:11:55', 1),
(3, 'madhuram villa', '<p>surat</p>', 'apartment', '1 BHK', 'sale', 1, 2, 1, 1, 1, '1st Floor', 760, 2500000, 'karmala ', 'surat', 'Gujarat', '<p>&nbsp;</p>\r\n<!---feature area start--->\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swiming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">GYM : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Church/Temple : </span>No</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Alivator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>\r\n<!---feature area end---->\r\n<p>&nbsp;</p>', '96cdfbdc773234ca0a658dc1521923bd.png', '1713ad8e866c96d26a968cbc126f08d8.jpg', '1687578910_en-idei-club-p-interior-concept-house-dizain-krasivo-29.jpg', '1687578910_en-idei-club-p-interior-concept-house-dizain-krasivo-29.jpg', '3b7bbbff3f89ca6e03f67f1aed8c6968.jpg', 2, 'available', '91cf8acc8f538c72f929da7e4b988941.jpg', '96cdfbdc773234ca0a658dc1521923bd.png', '1687578910_en-idei-club-p-interior-concept-house-dizain-krasivo-29.jpg', '1 Floor', '2024-02-24 09:36:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `sid` int(50) NOT NULL AUTO_INCREMENT,
  `sname` varchar(100) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

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
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `uemail`, `uphone`, `upass`, `utype`, `uimage`) VALUES
(2, 'vishal lalit', 'lrdhingadiya@gmail.c', '1234567890', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'user', '1-11-2048x1367-1.jpg'),
(3, 'balo', 'balo@gmail.com', '55555555', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'user', '3b7bbbff3f89ca6e03f67f1aed8c6968.jpg'),
(4, 'raval', 'raval@gmail.com', '1212121212', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'builder', '1675356602_en-idei-club-p-home-interior-ideas-interer-1.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
