-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 14, 2016 at 06:09 AM
-- Server version: 5.6.33
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `appsoxkb_IMY320`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`Ann_Id`, `Ann_Mess`, `Ann_Title`, `Ann_Date`, `Ann_User`) VALUES
(17, '4 kittens found missing on  Arcadia street ', 'Missing kitten', '2016-10-14', 'Pete'),
(18, 'Tomorrow is Earth day. Please remember your donations. ', 'Remember Earth Day', '2016-10-14', 'Pete'),
(26, 'It''s an epidemic! EVEN HUSKIES! EVEN HUSKIES!', '500 dogs go missing', '2016-10-14', 'Greg'),
(27, 'I hope you guys are having a grand old time!', 'What a wonderful day!', '2016-10-14', 'Greg'),
(28, 'We''re putting on a show of catz and we need one', 'Cat needed', '2016-10-14', 'Greg'),
(29, 'Who''s got it, who''s got it!', 'Who''s got the money?', '2016-10-14', 'Greg');

-- --------------------------------------------------------

--
-- Table structure for table `Events`
--

CREATE TABLE IF NOT EXISTS `Events` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Date` varchar(15) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Decor` tinyint(1) NOT NULL,
  `PR` tinyint(1) NOT NULL,
  `Staff` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `Events`
--

INSERT INTO `Events` (`ID`, `Name`, `Location`, `Date`, `Description`, `Decor`, `PR`, `Staff`) VALUES
(14, 'Sausage Dog race', 'Cape Town', '09/06/2016', 'Place your bets', 1, 0, 0),
(13, 'Solar Exclipse Dog wash', 'Benoni', '09/18/2016', 'Suns out , Dogs out?', 0, 0, 1),
(12, 'Gregs Cat party', 'Johannesburg', '09/22/2016', 'Them cats man.', 1, 0, 0),
(11, 'Puppy Training Fundraiser', 'Pretoria', '09/08/2016', 'Them pups need discipline', 0, 1, 0),
(15, '.Small cats ride big dogs', 'Benoni', '10/12/2016', 'An insane event that you''ll only see at the SPCA. You''ll only see it once, and for one day only! ', 1, 0, 0),
(16, '.Event', 'My House', '10/26/2016', 'It''s gonna be a helluva party. Don''t forget the dogs, and cats, and other animals that are domesticated.', 0, 0, 1),
(17, 'Big smackles', 'Johnsontown', '09/23/2016', 'There''s gonna be a lot happening', 0, 1, 0),
(18, 'Loving this PR', 'My House', '09/30/2016', 'GONNA BE CRAY', 0, 0, 1),
(19, 'CRAZY CRAZY BIZ', 'Peters House', '10/14/2016', 'Don''t forget your sun tan cream!', 0, 1, 0),
(20, 'If I had a nickel!', 'Johnathons Crib', '11/10/2016', 'Who''s got the cash who''s got the cash?!', 1, 0, 0),
(21, 'Puppies are pe', 'Cape Town', '10/19/2016', 'Man I love puppies\r\n', 1, 0, 1),
(22, 'Big guys and big dogs', 'The City of Cats', '10/29/2016', ' A lot big things ;) ', 0, 1, 0),
(27, 'pool party', 'jburg', '10/18/2016', ' polopolop', 0, 1, 0);

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
  `Title` varchar(80) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ID`, `Name`, `Location`, `Date`, `Description`, `Title`) VALUES
(14, 'Sausage Dog race', 'Cape Town', '09/06/2016', 'Place your bets', 'Admin'),
(13, 'Solar Exclipse Dog wash', 'Benoni', '09/18/2016', 'Suns out , Dogs out?', 'Admin'),
(12, 'Gregs Cat party', 'Johannesburg', '09/22/2016', 'Them cats man.', 'PR'),
(11, 'Puppy Training Fundraiser', 'Pretoria', '09/08/2016', 'Them pups need discipline', 'Admin'),
(15, '.Small cats ride big dogs', 'Benoni', '10/12/2016', 'An insane event that you''ll only see at the SPCA. You''ll only see it once, and for one day only! ', 'PR'),
(16, '.Event', 'My House', '10/26/2016', 'It''s gonna be a helluva party. Don''t forget the dogs, and cats, and other animals that are domesticated.', 'PR'),
(17, 'New thing', 'My cousins house', '09/23/2016', 'asdfadsfadsffdas', 'PR'),
(18, 'dfdsf', 'dsfdsfdfs', '09/21/2016', 'dsfdsfdsf', 'Staff'),
(19, 'Thing', 'mdjd', '09/22/2016', 'efefe', 'PR');

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
  `News_Date` date NOT NULL,
  PRIMARY KEY (`News_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Username`, `News_title`, `News_Article`, `News_picture`, `News_ID`, `News_Date`) VALUES
('Corne', 'Donald is the cutest cat ever', 'he is indeed the cutes cat ever', 'cat.jpg', 1, '2016-10-13'),
('Corne', 'Man saves polar bear ', 'Polar bears....they be dead', 'polor.jpg', 2, '2016-10-06'),
('P', 'Man stays up all night preparing website', 'Two men attempt to stay up all night to save their IMY project. Legend has it they''re still coding to this day', 'computer-programmer.jpg', 8, '2016-10-14');

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
('Greg', 'password', 'Admin', 'gregisbeans@gmail.com'),
('P', '123', 'Admin', 'octopusnuts@yahoo.com'),
('Pete', '123', 'Admin', 'peterboxitall@gmail.com'),
('sa', 'a', 'Admin', 'corneels.els@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
