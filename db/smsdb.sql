-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2014 at 09:09 AM
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
-- Table structure for table `management`
--

CREATE TABLE IF NOT EXISTS `management` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `OwnerFirstName` varchar(255) NOT NULL,
  `OwnerLastName` varchar(255) NOT NULL,
  `ContactNo` varchar(255) NOT NULL,
  `EmailId` varchar(255) NOT NULL,
  `Sex` varchar(255) NOT NULL,
  `ImageUpload` varchar(255) NOT NULL,
  `MAUID` varchar(255) NOT NULL,
  `MaTemporaryPassword` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`id`, `OwnerFirstName`, `OwnerLastName`, `ContactNo`, `EmailId`, `Sex`, `ImageUpload`, `MAUID`, `MaTemporaryPassword`) VALUES
(1, 'Owner First Name', 'Owner Last Name', '9043038157', 'owner@gmail.com', 'male', 'No Image', 'ma5484675c5db99', 'IOiyLSNY'),
(2, 'Owner First Name', 'Owner Last Name', '9043038157', 'owner@gmail.com', 'male', 'No Image', 'ma548467d3ebc0a', '1HUEn7AN');

-- --------------------------------------------------------

--
-- Table structure for table `principal`
--

CREATE TABLE IF NOT EXISTS `principal` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `SchoolName` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `PrincipalFirstName` varchar(255) NOT NULL,
  `PrincipalLastName` varchar(255) NOT NULL,
  `Sex` varchar(255) NOT NULL,
  `IDProof` varchar(255) NOT NULL,
  `PhoneCode` varchar(255) NOT NULL,
  `PhoneNo` varchar(255) NOT NULL,
  `MobileCode` varchar(255) NOT NULL,
  `MobileNo` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `EducationalQualification` varchar(255) NOT NULL,
  `ImageUpload` varchar(255) NOT NULL,
  `Salary` varchar(255) NOT NULL,
  `PRUID` varchar(255) NOT NULL,
  `PrTemporaryPassword` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `principal`
--

INSERT INTO `principal` (`id`, `SchoolName`, `Title`, `PrincipalFirstName`, `PrincipalLastName`, `Sex`, `IDProof`, `PhoneCode`, `PhoneNo`, `MobileCode`, `MobileNo`, `Email`, `EducationalQualification`, `ImageUpload`, `Salary`, `PRUID`, `PrTemporaryPassword`) VALUES
(1, 'UCA-2', 'Miss', 'Principal First Name', 'Principal Last Name', 'Male', 'No ID Proof', '22-', '4444444-', '91-', '9043038157-', 'alisftpp@gmail.com', 'b.tech', 'No Image', '6000000', 'pr54846b14a9d33', 'lQgVLVjN'),
(2, 'UCA-2', 'Ms', 'Principal First Name', 'Principal Last Name', 'Female', 'No ID Proof', '22-', '4444444-', '91-', '9043038157-', 'alisftpp@gmail.com', 'b.tech', 'No Image', '6000000', 'pr54846bb18cd6b', '6V4bwqxK');

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
(5, 'UCA-1', 'tUSA-', 'SchoolLogo', 'Document', 'India-', 'TN-', 'Chennai-', '600095-', 'MGR-', 'hjhj', '22-', '4444444-', '91-', '9043038157-', 'ali.com-', 'alisftpp@gmail.com', 'sc547edde156873'),
(6, 'UCA-2', 'tUSA-', 'SchoolLogo', 'Document', 'India-', 'TN-', 'Chennai-', '600095-', 'MGR-', 'fs', '22-', '4444444-', '91-', '9043038157-', 'ali.com-', 'alisftpp@gmail.com', 'sc547ef9f463a4e'),
(7, 'UCA-3', 'tUSA-', 'SchoolLogo', 'Document', 'India-', 'TN-', 'Chennai-', '600095-', 'MGR-', 'hjjk', '22-', '4444444-', '91-', '9043038157-', 'ali.com-', 'alisftpp@gmail.com', 'sc547f37d3bb437');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `School` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `ContactNo` varchar(255) NOT NULL,
  `EmailId` varchar(255) NOT NULL,
  `Class` varchar(255) NOT NULL,
  `Section` varchar(255) NOT NULL,
  `ClassTeacherName` varchar(255) NOT NULL,
  `DateofBirth` varchar(255) NOT NULL,
  `Sex` varchar(255) NOT NULL,
  `ImageUpload` varchar(255) NOT NULL,
  `BloodGroup` varchar(255) NOT NULL,
  `FatherName` varchar(255) NOT NULL,
  `FatherEmailID` varchar(255) NOT NULL,
  `FatherContactNo` varchar(255) NOT NULL,
  `MotherName` varchar(255) NOT NULL,
  `MotherEmailID` varchar(255) NOT NULL,
  `MotherContactNo` varchar(255) NOT NULL,
  `Sibling` varchar(255) NOT NULL,
  `stuid` varchar(255) NOT NULL,
  `TemporaryPassword` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `School`, `FirstName`, `LastName`, `ContactNo`, `EmailId`, `Class`, `Section`, `ClassTeacherName`, `DateofBirth`, `Sex`, `ImageUpload`, `BloodGroup`, `FatherName`, `FatherEmailID`, `FatherContactNo`, `MotherName`, `MotherEmailID`, `MotherContactNo`, `Sibling`, `stuid`, `TemporaryPassword`) VALUES
(1, 'UCA-2', 'fname', 'lname', 'student mob', 'owner@gmail.com', 'class', 'section', 'class teacher', '12/24/2014', 'male', 'No Image', 'A-', 'father name', 'father email', 'father contact', 'mother name', 'mother email', 'mother contact', 'sibling', 'st548477415160d', '4RFwY0Ob'),
(2, 'UCA-3', 'fname', 'lname', 'student mob', 'student emaai', 'class', 'section', 'class teacher', '12/10/2014', 'male', 'No Image', 'AB-', 'father name', 'father email', 'father contact', 'mother name', 'mother email', 'mother contact', 'sibling', 'st5484781c8098c', '2E5hy41E');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `TeacherSchoolName` varchar(255) NOT NULL,
  `TeacherFirstName` varchar(255) NOT NULL,
  `TeacherLastName` varchar(255) NOT NULL,
  `ContactNo` varchar(255) NOT NULL,
  `EmailId` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Sex` varchar(255) NOT NULL,
  `ImageUpload` varchar(255) NOT NULL,
  `Salary` varchar(255) NOT NULL,
  `TEUID` varchar(255) NOT NULL,
  `TeTemporaryPassword` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `TeacherSchoolName`, `TeacherFirstName`, `TeacherLastName`, `ContactNo`, `EmailId`, `Subject`, `Sex`, `ImageUpload`, `Salary`, `TEUID`, `TeTemporaryPassword`) VALUES
(1, 'UCA-3', 'Teacher First Name', 'Teacher Last Name', '9043038157', '9043038157', 'fsdfsd', 'Female', '', '6000000', 'te5484733b6461d', 'TBRuVNxu'),
(2, 'UCA-3', 'Teacher First Name', 'Teacher Last Name', '9043038157', '9043038157', 'fsdfsd', 'Female', 'No Image', '6000000', 'te5484733b6461d', 'TBRuVNxu'),
(3, 'UCA-1', 'Teacher First Name', 'Teacher Last Name', 'student mob', 'student mob', 'fsdfsd', 'Male', 'No Image', '6000000', 'te5484740c8e90c', 'tLra40WR'),
(4, 'ChooseSchool', '', '', '', '', '', 'Male', 'No Image', '', 'te54847a87de860', 'wN7iKfiK'),
(5, 'UCA-1', 'Teacher First Name', 'Teacher Last Name', 'student mob', 'student mob', 'fsdfsd', 'Male', 'No Image', '6000000xx', 'te54847c01b2c96', 'Zvx0pbc3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
