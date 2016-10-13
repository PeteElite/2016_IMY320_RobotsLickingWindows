-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2016 at 09:45 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `imy320`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE IF NOT EXISTS `announcements` (
  `Ann_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Ann_Mess` text NOT NULL,
  `Ann_Title` text NOT NULL,
  `Ann_Date` date NOT NULL,
  `Ann_User` varchar(80) NOT NULL,
  PRIMARY KEY (`Ann_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`Ann_Id`, `Ann_Mess`, `Ann_Title`, `Ann_Date`, `Ann_User`) VALUES
(11, 'I LOVE CATS !!! SAID STEFFELS ', 'I LOVE CATS', '2016-08-31', 'Corne'),
(12, 'wasnt trying to scream ', 'SORRY FOR ALL CAPS', '2016-08-31', 'Corne');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `Username` varchar(80) NOT NULL,
  `News_title` varchar(100) NOT NULL,
  `News_Article` text NOT NULL,
  `News_picture` text NOT NULL,
  `News_ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`News_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Username`, `News_title`, `News_Article`, `News_picture`, `News_ID`) VALUES
('Corne', 'a', ' a', 'null', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Username` varchar(80) NOT NULL,
  `Password` varchar(80) NOT NULL,
  `Title` varchar(80) NOT NULL,
  `Email` varchar(80) NOT NULL,
  PRIMARY KEY (`Username`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`, `Title`, `Email`) VALUES
('Corne', 'a', 'admin', 'corneels.els@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
