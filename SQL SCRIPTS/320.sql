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
-- Database: `320`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Date` varchar(15) NOT NULL,
  `Description` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ID`, `Name`, `Location`, `Date`, `Description`) VALUES
(14, 'Sausage Dog race', 'Cape Town', '09/06/2016', 'Place your bets'),
(13, 'Solar Exclipse Dog wash', 'Benoni', '09/18/2016', 'Suns out , Dogs out?'),
(12, 'Gregs Cat party', 'Johannesburg', '09/22/2016', 'Them cats man.'),
(11, 'Puppy Training Fundraiser', 'Pretoria', '09/08/2016', 'Them pups need discipline'),
(15, '.Small cats ride big dogs', 'Benoni', '10/12/2016', 'An insane event that you''ll only see at the SPCA. You''ll only see it once, and for one day only! '),
(16, '.Event', 'My House', '10/26/2016', 'It''s gonna be a helluva party. Don''t forget the dogs, and cats, and other animals that are domesticated.'),
(17, 'a', 'w', '09/02/2016', 'erhdbn'),
(18, 'e', 's', '09/02/2016', 'efsef');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
