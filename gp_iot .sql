-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2016 at 06:15 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gp_iot`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title1` varchar(500) COLLATE utf8_bin NOT NULL,
  `desc` text COLLATE utf8_bin NOT NULL,
  `image` text COLLATE utf8_bin NOT NULL,
  `type` varchar(500) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title1`, `desc`, `image`, `type`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,inim lit,inim lit,inim lit,inim lit,inim lit,inim lit,inim ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua nim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ommodo consequat consectetur is adipisicing elit, sed do eiusmod tempor incididunt magna.', '1 (3)_KDZqE.jpg', 'about_us'),
(2, '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua nim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ommodo consequat consectetur is adipisicing elit, sed do eiusmod tempor incididunt magna.', 'rpi1bplus_FUHPC.png', 'who_we_are'),
(3, '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua nim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ommodo consequat consectetur is adipisicing elit, sed do eiusmod tempor incididunt magna.', '2_eaworldcupgame_UUJAS.jpg', 'what_we_do'),
(4, '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua nim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ommodo consequat consectetur is adipisicing elit, sed do eiusmod tempor incididunt magna.', '8_HLRBr.jpg', 'our_mission');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `image` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `image`) VALUES
(3, '1 (7)_rDWZL.jpg'),
(4, '1 (1)_RMKDB.jpg'),
(5, '1 (3)_LLAVF.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `desc` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `desc`) VALUES
(1, 'samo');

-- --------------------------------------------------------

--
-- Table structure for table `out_service`
--

CREATE TABLE IF NOT EXISTS `out_service` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `icon` varchar(500) COLLATE utf8_bin NOT NULL,
  `title` varchar(500) COLLATE utf8_bin NOT NULL,
  `desc` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `out_service`
--

INSERT INTO `out_service` (`id`, `icon`, `title`, `desc`) VALUES
(1, 'database', 'Hossams', 'Lorem Ipsum is simply dummy text of theprinting and typesetting it has the randomised words Lorem ipsum dolor sit amet');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title1` varchar(500) COLLATE utf8_bin NOT NULL,
  `title2` varchar(500) COLLATE utf8_bin NOT NULL,
  `title3` varchar(500) COLLATE utf8_bin NOT NULL,
  `image` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=11 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title1`, `title2`, `title3`, `image`) VALUES
(5, 'Hossam Samo', 'Samo', 'Hossam Samo', '1 (1)_EXIWY.jpg'),
(6, 'Hossam', 'Samo', 'Hossam Samo', '1 (2)_SUZPB.jpg'),
(7, 'Hossam', 'Samo', 'Hossam Samo', '1 (6)_DwJJT.jpg'),
(8, 'Hossam', 'Samo', 'Hossam Samo', '1 (9)_OLOOL.jpg'),
(9, 'Hossam', 'Samo', 'Hossam Samo', '1 (10)_HRwJK.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) COLLATE utf8_bin NOT NULL,
  `job` varchar(500) COLLATE utf8_bin NOT NULL,
  `desc` text COLLATE utf8_bin NOT NULL,
  `image` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `job`, `desc`, `image`) VALUES
(1, 'hossam', 'web developer', 'Lorem Ipsum is simply dummy text of theprinting and typesetting it has the randomised words Lorem ipsum dolor sit amet\r\n                                        ', '1 (3)_DYULr.jpg'),
(3, 'hossam', 'web developer', 'Lorem Ipsum is simply dummy text of theprinting and typesetting it has the randomised words Lorem ipsum dolor sit amet', '1 (7)_MqRYA.jpg'),
(4, 'hossam', 'web developer', 'Lorem Ipsum is simply dummy text of theprinting and typesetting it has the randomised words Lorem ipsum dolor sit amet', '1 (10)_SZQQE.jpg'),
(5, 'hossam', 'web developer', 'Lorem Ipsum is simply dummy text of theprinting and typesetting it has the randomised words Lorem ipsum dolor sit amet', '1_aura_BeIRF.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_system`
--

CREATE TABLE IF NOT EXISTS `user_system` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `mail` text COLLATE utf8_bin NOT NULL,
  `password` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_system`
--

INSERT INTO `user_system` (`id`, `mail`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `video` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `video`) VALUES
(1, '1.MKV');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
