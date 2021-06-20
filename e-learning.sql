-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 26, 2015 at 05:52 AM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e-learning`
--

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `account`
--

INSERT DELAYED IGNORE INTO `account` (`accountid`, `instructorid`, `studentid`, `username`, `password`, `usertype`) VALUES
(37, 44, '083', 'mohammed', 'd2288a1c043ddbcaafda9136313389a7', 'dean'),
(43, 44, '', 'solomon', 'bff82d18862ce94df14bdee55295f812', 'instructor'),
(47, 32, '', 'mujib', '9ac05befca7d6499e3abec9bdfef2b68', 'instructor'),
(41, 0, 'compr/049/04', 'werku', 'ef6837d0cd5f6e9bb9795fca923e21e2', 'student'),
(40, 0, 'compr/048/04', 'thomas', 'ef6e65efc188e7dffd7335b646a85a21', 'student'),
(39, 111, '', 'david', '698d51a19d8a121ce581499d7b701668', 'registrar');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `assignment`
--

INSERT DELAYED IGNORE INTO `assignment` (`assignmentnumber`, `number`, `studentid`, `instructorid`, `coursecode`, `assignmenttype`, `filename`, `filetype`, `filesize`, `uploadeddate`, `deadlinedate`, `submissiondate`) VALUES
(19, 18, 'compr/048/04', 0, '2027', 'Individual Assignment', 'mujib.docx', 'application/vnd.openxmlformats-off', 3112258, '2015-06-26', '0000-00-00', '2015-06-26'),
(18, 0, '', 32, '2027', 'Individual Assignment', 'e-learningsecondsemister.docx', 'application/vnd.openxmlformats-off', 3111884, '2015-06-26', '2015-06-27', '0000-00-00');

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

INSERT DELAYED IGNORE INTO `course` (`coursecode`, `coursename`, `credit`, `prerequiest`, `departmentid`, `year`, `semister`) VALUES
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `courseinstructor`
--

INSERT DELAYED IGNORE INTO `courseinstructor` (`courseinstructorid`, `instructorid`, `coursecode`) VALUES
(48, 32, '2027'),
(49, 32, '2026');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `coursematerial`
--

INSERT DELAYED IGNORE INTO `coursematerial` (`materialid`, `instructorid`, `coursecode`, `filename`, `filetype`, `filesize`, `uploadeddate`) VALUES
(47, 32, '2026', 'e-learningsecondsemister.docx', 'application/vnd.openxmlformats-off', 3111884, '2015-06-26'),
(46, 32, '2027', 'mujib.docx', 'application/vnd.openxmlformats-off', 3112258, '2015-06-26');

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

INSERT DELAYED IGNORE INTO `coursestudent` (`enrollmentid`, `studentid`, `coursecode`, `year`, `semister`) VALUES
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `department`
--

INSERT DELAYED IGNORE INTO `department` (`departmentid`, `departmentname`) VALUES
(5, 'English'),
(2, 'mathimatics'),
(3, 'physics'),
(4, 'biology'),
(6, 'Chemistry'),
(8, 'information system'),
(9, 'informatiobn techn');

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

INSERT DELAYED IGNORE INTO `instructor` (`instructorid`, `firstname`, `midlename`, `lastname`, `sex`, `departmentid`, `status`) VALUES
(83, 'mohammed', 'hiyar', 'dawud', 'male', 3, 'on'),
(44, 'solomon', 'amanuel', 'shewafera', 'Male', 2, 'on'),
(111, 'david', 'amanuel', 'kebede', 'Male', 2, 'on'),
(32, 'mujib', 'hassen', 'wolde', 'Male', 2, 'on');

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

INSERT DELAYED IGNORE INTO `result` (`result_id`, `instructorid`, `studentid`, `coursecode`, `quizz`, `test`, `individualassignment`, `groupassignment`, `final`, `total`, `grade`) VALUES
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

INSERT DELAYED IGNORE INTO `student` (`studentid`, `firstname`, `lastname`, `age`, `sex`, `departmentid`, `year`, `semister`) VALUES
('compr/048/04', 'thomas', 'gesese', 23, 'Male', 2, 'I', 'I'),
('compr/049/04', 'werku', 'shewafera', 34, 'Male', 2, 'I', 'I');
