-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2014 at 07:39 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `designation` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `uid` varchar(55) NOT NULL,
  `FirstName` varchar(55) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `designation`, `email`, `uid`, `FirstName`) VALUES
(1, 'admin', 'admin123', 'admin', 'ali54@live.in', 'ad546cc33839e5d', 'AdminSam'),
(2, 'ali1', 'ali123', 'student', 'ali54@live.in', 'st546ce30a2c280', 'Ali2'),
(3, 'ali2', 'ali123', 'student', 'ali54@live.in', 'st546ce2f574374', 'Ali3'),
(4, 'ali3', 'a;i123', 'student', 'ali54@live.in', 'st546ce5630f03d', 'Ali4'),
(9, 'management', 'management123', 'management', 'management@gmail.com', 'ma54734fc2c75b1', 'Management'),
(10, 'principal', 'principal123', 'principal', 'principal@gmail.com', 'pr54734fff94c3c', 'Principal'),
(11, 'teacher', 'teacher123', 'teacher', 'teacher@gmail.com', 'te5473507173956', 'Teacher'),
(12, 'student', 'student123', 'student', 'student@gmail.com', 'st547350a7128f2', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `SchoolName` varchar(255) NOT NULL,
  `SchoolTitle` varchar(255) NOT NULL,
  `SchoolLogo` varchar(255) NOT NULL,
  `Document` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `PinCode` varchar(255) NOT NULL,
  `Landmark` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `PhoneCode` varchar(255) NOT NULL,
  `PhoneNo` varchar(255) NOT NULL,
  `MobileCode` varchar(255) NOT NULL,
  `MobileNo` varchar(255) NOT NULL,
  `Website` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `sid` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `SchoolName`, `SchoolTitle`, `SchoolLogo`, `Document`, `Country`, `State`, `City`, `PinCode`, `Landmark`, `Address`, `PhoneCode`, `PhoneNo`, `MobileCode`, `MobileNo`, `Website`, `Email`, `sid`) VALUES
(5, 'UCA-', 'tUSA-', 'SchoolLogo', 'Document', 'India-', 'TN-', 'Chennai-', '600095-', 'MGR-', 'hjhj', '22-', '4444444-', '91-', '9043038157-', 'ali.com-', 'alisftpp@gmail.com', 'sc547edde156873'),
(6, 'UCA-', 'tUSA-', 'SchoolLogo', 'Document', 'India-', 'TN-', 'Chennai-', '600095-', 'MGR-', 'fs', '22-', '4444444-', '91-', '9043038157-', 'ali.com-', 'alisftpp@gmail.com', 'sc547ef9f463a4e'),
(7, 'UCA-', 'tUSA-', 'SchoolLogo', 'Document', 'India-', 'TN-', 'Chennai-', '600095-', 'MGR-', 'hjjk', '22-', '4444444-', '91-', '9043038157-', 'ali.com-', 'alisftpp@gmail.com', 'sc547f37d3bb437');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
