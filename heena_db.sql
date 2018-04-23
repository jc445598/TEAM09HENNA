-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2018 at 06:22 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `heena_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123!');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`) VALUES
(1, 'White Heena'),
(2, 'Body Design'),
(3, 'Baby Shower'),
(4, 'Hand'),
(5, 'Bridal'),
(6, 'Kids'),
(7, 'Foot');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(250) NOT NULL,
  `service_title` varchar(252) NOT NULL,
  `service_image` varchar(256) NOT NULL,
  `service_desc` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `cat_name`, `service_title`, `service_image`, `service_desc`) VALUES
(1, 'White Heena', 'Arabic White Heena', '151698735413138864_631421197022723_3172428499012918977_n.jpg', 'Arabic White Heena'),
(2, 'Kids', 'Back Tattoo', '151698757818341901_847896022041905_9022599359742646785_n.jpg', 'Kids Mehndi'),
(3, 'Hand', 'Hand Mehndi Designs', '151698765926169154_1023883674443138_3351358855746006953_n.jpg', 'Arabic designs'),
(4, 'Foot', 'Foot Mehndi Designs', '151698772322814529_980477638783742_7394110600862511426_n.jpg', 'Arabic designs'),
(5, 'Bridal', 'Bridal Mehndi ', '151698784524174287_1002648383233334_8477819829483657523_n.jpg', 'Bridal Arabic'),
(6, 'Body Design', 'Back designs', '151698790112932827_621051684726341_4729059749606113963_n.jpg', 'Back designs'),
(7, 'Baby Shower', 'Baby shower designs', '151698794812417809_583264698505040_1562850014252429888_n.jpg', 'Baby shower designs');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `mobile` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(1, 'test', 'test@gmail.com', '5412151', '12345'),
(2, 'dfdfsdf', 'r@gmail.com', 'dfsdf', 'sdfsd'),
(3, 'dfdfsdf', 'r@gmail.com', 'dfsdf', 'sdfsd'),
(4, 'sfsdf', 'mini@gmail.com', '5455', 'ghgh');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
