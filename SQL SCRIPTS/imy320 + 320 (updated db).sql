-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 02, 2016 at 10:28 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

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
-- Table structure for table `announcements`
--

CREATE TABLE IF NOT EXISTS `announcements` (
`Ann_Id` int(11) NOT NULL,
  `Ann_Mess` text NOT NULL,
  `Ann_Title` text NOT NULL,
  `Ann_Date` date NOT NULL,
  `Ann_User` varchar(80) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`Ann_Id`, `Ann_Mess`, `Ann_Title`, `Ann_Date`, `Ann_User`) VALUES
(11, 'I LOVE CATS !!! SAID STEFFELS ', 'I LOVE CATS', '2016-08-31', 'Corne'),
(12, 'wasnt trying to scream ', 'SORRY FOR ALL CAPS', '2016-08-31', 'Corne');

-- --------------------------------------------------------

--
-- Table structure for table `Events`
--

CREATE TABLE IF NOT EXISTS `Events` (
`ID` int(255) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Date` varchar(15) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Title` varchar(80) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Events`
--

INSERT INTO `Events` (`ID`, `Name`, `Location`, `Date`, `Description`, `Title`) VALUES
(14, 'Sausage Dog race', 'Cape Town', '09/06/2016', 'Place your bets', 'Admin'),
(13, 'Solar Exclipse Dog wash', 'Benoni', '09/18/2016', 'Suns out , Dogs out?', 'Admin'),
(12, 'Gregs Cat party', 'Johannesburg', '09/22/2016', 'Them cats man.', 'PR'),
(11, 'Puppy Training Fundraiser', 'Pretoria', '09/08/2016', 'Them pups need discipline', 'Admin'),
(15, '.Small cats ride big dogs', 'Benoni', '10/12/2016', 'An insane event that you''ll only see at the SPCA. You''ll only see it once, and for one day only! ', 'PR'),
(16, '.Event', 'My House', '10/26/2016', 'It''s gonna be a helluva party. Don''t forget the dogs, and cats, and other animals that are domesticated.', 'PR');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `Username` varchar(80) NOT NULL,
  `News_title` varchar(100) NOT NULL,
  `News_Article` text NOT NULL,
  `News_picture` text NOT NULL,
`News_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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
  `Email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`, `Title`, `Email`) VALUES
('Corne', 'a', 'Admin', 'corneels.els@gmail.com'),
('Greg', 'password', 'PR', 'gregisbeans@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
 ADD PRIMARY KEY (`Ann_Id`);

--
-- Indexes for table `Events`
--
ALTER TABLE `Events`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`News_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`Username`), ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
MODIFY `Ann_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `Events`
--
ALTER TABLE `Events`
MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `News_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
