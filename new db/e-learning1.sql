-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 26, 2017 at 02:41 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e-learning`
--
CREATE DATABASE IF NOT EXISTS `e-learning` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `e-learning`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `accountid` int(11) NOT NULL AUTO_INCREMENT,
  `instructorid` int(11) NOT NULL,
  `studentid` varchar(23) NOT NULL,
  `username` varchar(34) NOT NULL,
  `password` varchar(34) NOT NULL,
  `usertype` varchar(34) NOT NULL,
  PRIMARY KEY (`accountid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=133 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`accountid`, `instructorid`, `studentid`, `username`, `password`, `usertype`) VALUES
(37, 44, '083', 'ayelinesh', '123456', 'dean'),
(43, 44, '', 'solomon', '123456', 'instructor'),
(47, 32, '', 'mujib', '123456', 'instructor'),
(41, 0, 'compr/049/04', 'werku', '123456', 'student'),
(40, 0, 'compr/048/04', 'thomas', '123456', 'student'),
(39, 111, '', 'david', '123456', 'registrar'),
(122, 124, '1', 'haile', '123456', 'dean'),
(123, 11, 'dbu1452', 'aa', '123456', 'student'),
(124, 0, '6701244', 'haile', '123456', 'student'),
(125, 0, '201010', 'haile', '123456', 'student'),
(126, 0, 'compr12', 'haile', '123456', 'student'),
(127, 0, '12121212', 'Temesegan', '123456', 'student'),
(128, 0, '12121212', 'Temesegan', '12121212', 'student'),
(129, 0, 'compr/176/07', 'Temesegan', 'compr/176/07', 'student'),
(130, 120, '', 'ayele', '123456', 'instructor'),
(131, 0, 'compr/176/070', 'Temesegan', 'compr/176/070', 'student'),
(132, 0, 'dbu14524', 'ayelinesh', 'dbu14524', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE IF NOT EXISTS `assignment` (
  `assignmentnumber` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL,
  `studentid` varchar(34) NOT NULL,
  `instructorid` int(11) NOT NULL,
  `coursecode` varchar(34) NOT NULL,
  `assignmenttype` varchar(34) NOT NULL,
  `filename` varchar(34) NOT NULL,
  `filetype` varchar(34) NOT NULL,
  `filesize` int(11) NOT NULL,
  `uploadeddate` date NOT NULL,
  `deadlinedate` date NOT NULL,
  `submissiondate` date NOT NULL,
  PRIMARY KEY (`assignmentnumber`),
  KEY `studentid` (`studentid`,`instructorid`,`coursecode`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignmentnumber`, `number`, `studentid`, `instructorid`, `coursecode`, `assignmenttype`, `filename`, `filetype`, `filesize`, `uploadeddate`, `deadlinedate`, `submissiondate`) VALUES
(19, 18, 'compr/048/04', 0, '2027', 'Individual Assignment', 'mujib.docx', 'application/vnd.openxmlformats-off', 3112258, '2015-06-26', '0000-00-00', '2015-06-26'),
(18, 0, '', 32, '2027', 'Individual Assignment', 'e-learningsecondsemister.docx', 'application/vnd.openxmlformats-off', 3111884, '2015-06-26', '2015-06-27', '0000-00-00'),
(20, 0, '', 44, '2022', 'Individual Assignment', 'Advert2.docx', 'application/vnd.openxmlformats-off', 42117, '2017-07-25', '2017-07-26', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `coursecode` varchar(34) NOT NULL,
  `coursename` varchar(34) NOT NULL,
  `credit` int(11) NOT NULL,
  `prerequiest` varchar(34) NOT NULL,
  `departmentid` int(11) NOT NULL,
  `year` varchar(34) NOT NULL,
  `semister` varchar(34) NOT NULL,
  PRIMARY KEY (`coursecode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`coursecode`, `coursename`, `credit`, `prerequiest`, `departmentid`, `year`, `semister`) VALUES
('2021', 'java', 4, '', 5, 'I', 'I'),
('2022', 'cpp', 6, 'oop', 3, 'II', 'II'),
('2023', 'csharp', 5, '', 2, 'I', 'I'),
('2024', 'html', 4, '', 2, 'II', 'II'),
('2025', 'php', 5, 'html', 2, 'II', 'II'),
('2026', 'distributed system', 5, '', 2, 'II', 'II'),
('2027', 'complexity', 6, '', 2, 'II', 'II'),
('2323', 'engluish', 5, '', 5, 'I', 'I');

-- --------------------------------------------------------

--
-- Table structure for table `courseinstructor`
--

CREATE TABLE IF NOT EXISTS `courseinstructor` (
  `courseinstructorid` int(11) NOT NULL AUTO_INCREMENT,
  `instructorid` int(11) NOT NULL,
  `coursecode` varchar(34) NOT NULL,
  PRIMARY KEY (`courseinstructorid`),
  KEY `instructorid` (`instructorid`,`coursecode`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `courseinstructor`
--

INSERT INTO `courseinstructor` (`courseinstructorid`, `instructorid`, `coursecode`) VALUES
(48, 32, '2027'),
(49, 32, '2026'),
(51, 83, '2021'),
(52, 83, '2023'),
(53, 32, '2026'),
(54, 44, '2022'),
(55, 111, '2021'),
(56, 44, '2023'),
(57, 120, '2021'),
(58, 120, '2024');

-- --------------------------------------------------------

--
-- Table structure for table `coursematerial`
--

CREATE TABLE IF NOT EXISTS `coursematerial` (
  `materialid` int(11) NOT NULL AUTO_INCREMENT,
  `instructorid` int(11) NOT NULL,
  `coursecode` varchar(34) NOT NULL,
  `filename` varchar(34) NOT NULL,
  `filetype` varchar(34) NOT NULL,
  `filesize` int(11) NOT NULL,
  `uploadeddate` date NOT NULL,
  PRIMARY KEY (`materialid`),
  KEY `instructorid` (`instructorid`,`coursecode`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `coursematerial`
--

INSERT INTO `coursematerial` (`materialid`, `instructorid`, `coursecode`, `filename`, `filetype`, `filesize`, `uploadeddate`) VALUES
(47, 32, '2026', 'e-learningsecondsemister.docx', 'application/vnd.openxmlformats-off', 3111884, '2015-06-26'),
(46, 32, '2027', 'mujib.docx', 'application/vnd.openxmlformats-off', 3112258, '2015-06-26'),
(48, 44, '2022', 'Studentinfo.accdb', 'application/msaccess', 471040, '2017-07-25'),
(49, 44, '2022', 'Application Letter.docx', 'application/vnd.openxmlformats-off', 14152, '2017-07-25'),
(50, 44, '2022', '2.ppt', 'application/vnd.ms-powerpoint', 978432, '2017-07-25'),
(51, 44, '2022', 'Advert2.docx', 'application/vnd.openxmlformats-off', 42117, '2017-07-25'),
(52, 44, '2022', 'logo.png', 'image/png', 69880, '2017-07-25'),
(53, 44, '2022', 'Restaurant.java', 'application/octet-stream', 27903, '2017-07-25'),
(54, 44, '2022', 'ss.png', 'image/png', 127873, '2017-07-25'),
(55, 44, '2022', 'Advert2.docx', 'application/vnd.openxmlformats-off', 42117, '2017-07-25'),
(56, 44, '2022', 'Reccommendation.doc', 'application/msword', 32768, '2017-07-25'),
(57, 44, '2022', 'Grady Booch - Object-Oriented Anal', 'application/vnd.openxmlformats-off', 31605, '2017-07-25'),
(58, 44, '2022', 'table of contents.docx', 'application/vnd.openxmlformats-off', 30356, '2017-07-25'),
(59, 44, '2022', '3.ppt', 'application/vnd.ms-powerpoint', 690176, '2017-07-25'),
(60, 44, '2022', '10.1.1.92.8064.pdf', 'application/pdf', 206, '2017-07-25'),
(61, 44, '2023', 'NumToWords.java', 'application/octet-stream', 5715, '2017-07-25'),
(62, 44, '2023', 'cx.png', 'image/png', 74736, '2017-07-25'),
(63, 44, '2022', 'free ebook org.txt', 'text/plain', 26, '2017-07-25'),
(64, 44, '2022', 'HTML1.doc', 'application/msword', 284672, '2017-07-25'),
(65, 44, '2022', 'HTML1.doc', 'application/msword', 284672, '2017-07-25'),
(66, 120, '2021', 'internetprogramminglecture1-130421', 'application/pdf', 1951996, '2017-07-25'),
(67, 120, '2021', 'Inventry System.docx', 'application/vnd.openxmlformats-off', 1003779, '2017-07-25'),
(68, 120, '2021', 'Inventry System.docx', 'application/vnd.openxmlformats-off', 1003779, '2017-07-25'),
(69, 120, '2021', 'Inventry System.docx', 'application/vnd.openxmlformats-off', 1003779, '2017-07-25'),
(70, 120, '2021', 'ymBiT Library Database Management ', 'application/vnd.openxmlformats-off', 747424, '2017-07-25'),
(71, 120, '2021', 'ymBiT Library Database Management ', 'application/vnd.openxmlformats-off', 747424, '2017-07-25'),
(72, 120, '2021', 'Project proposal Buisness plan CS4', 'application/vnd.openxmlformats-off', 36872, '2017-07-25');

-- --------------------------------------------------------

--
-- Table structure for table `coursestudent`
--

CREATE TABLE IF NOT EXISTS `coursestudent` (
  `enrollmentid` int(11) NOT NULL AUTO_INCREMENT,
  `studentid` varchar(34) NOT NULL,
  `coursecode` varchar(34) NOT NULL,
  `year` varchar(3) NOT NULL,
  `semister` varchar(2) NOT NULL,
  PRIMARY KEY (`enrollmentid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=17 ;

--
-- Dumping data for table `coursestudent`
--

INSERT INTO `coursestudent` (`enrollmentid`, `studentid`, `coursecode`, `year`, `semister`) VALUES
(16, 'compr/049/04', '2025', 'I', 'I'),
(15, 'compr/048/04', '2025', 'I', 'I'),
(14, 'compr/049/04', '2027', 'I', 'I'),
(13, 'compr/048/04', '2027', 'I', 'I'),
(12, 'compr/049/04', '2026', 'I', 'I'),
(11, 'compr/048/04', '2026', 'I', 'I');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `departmentid` int(11) NOT NULL AUTO_INCREMENT,
  `departmentname` varchar(34) NOT NULL,
  PRIMARY KEY (`departmentid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`departmentid`, `departmentname`) VALUES
(5, 'English'),
(2, 'mathimatics'),
(3, 'physics'),
(4, 'biology'),
(6, 'Chemistry'),
(8, 'information system'),
(9, 'informatiobn techn'),
(10, 'IT'),
(11, 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE IF NOT EXISTS `instructor` (
  `instructorid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(34) NOT NULL,
  `midlename` varchar(34) NOT NULL,
  `lastname` varchar(34) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `departmentid` int(11) NOT NULL,
  `status` varchar(4) NOT NULL,
  PRIMARY KEY (`instructorid`),
  KEY `departmentid` (`departmentid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34571 ;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instructorid`, `firstname`, `midlename`, `lastname`, `sex`, `departmentid`, `status`) VALUES
(83, 'mohammed', 'hiyar', 'dawud', 'male', 3, 'on'),
(44, 'solomon', 'amanuel', 'shewafera', 'Male', 2, 'on'),
(111, 'david', 'amanuel', 'kebede', 'Male', 2, 'on'),
(32, 'mujib', 'hassen', 'wolde', 'Male', 2, 'on'),
(120, 'ayelinesh', 'abbebe', 'ayele', 'Female', 9, 'on');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `result_id` int(11) NOT NULL AUTO_INCREMENT,
  `instructorid` int(11) NOT NULL,
  `studentid` varchar(34) NOT NULL,
  `coursecode` varchar(34) NOT NULL,
  `quizz` int(11) NOT NULL,
  `test` int(11) NOT NULL,
  `individualassignment` int(11) NOT NULL,
  `groupassignment` int(11) NOT NULL,
  `final` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `grade` varchar(34) NOT NULL,
  PRIMARY KEY (`result_id`),
  KEY `instructorid` (`instructorid`,`studentid`,`coursecode`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`result_id`, `instructorid`, `studentid`, `coursecode`, `quizz`, `test`, `individualassignment`, `groupassignment`, `final`, `total`, `grade`) VALUES
(29, 32, 'compr/048/04', '2027', 7, 8, 7, 9, 45, 76, 'B'),
(28, 32, 'compr/049/04', '2027', 7, 8, 7, 9, 45, 76, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `studentid` varchar(34) NOT NULL,
  `firstname` varchar(34) NOT NULL,
  `lastname` varchar(34) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(34) NOT NULL,
  `departmentid` int(11) NOT NULL,
  `year` varchar(34) NOT NULL,
  `semister` varchar(2) NOT NULL,
  PRIMARY KEY (`studentid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentid`, `firstname`, `lastname`, `age`, `sex`, `departmentid`, `year`, `semister`) VALUES
('compr/048/04', 'thomas', 'gesese', 23, 'Male', 2, 'I', 'I'),
('compr/049/04', 'werku', 'shewafera', 34, 'Male', 2, 'I', 'I');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
