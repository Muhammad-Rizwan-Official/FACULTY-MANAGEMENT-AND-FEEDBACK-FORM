-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2022 at 05:59 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `feed_fac`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblclg`
--

CREATE TABLE IF NOT EXISTS `tblclg` (
  `fid` int(20) NOT NULL AUTO_INCREMENT,
  `studid` int(20) NOT NULL,
  `date` date NOT NULL,
  `comment` varchar(500) NOT NULL,
  `rating` float NOT NULL,
  PRIMARY KEY (`fid`),
  KEY `studid` (`studid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblclg`
--

INSERT INTO `tblclg` (`fid`, `studid`, `date`, `comment`, `rating`) VALUES
(1, 1, '2022-12-06', 'Good. But need improvement', 2.5);

-- --------------------------------------------------------

--
-- Table structure for table `tblclgchild`
--

CREATE TABLE IF NOT EXISTS `tblclgchild` (
  `chid` int(20) NOT NULL AUTO_INCREMENT,
  `fid` int(20) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  PRIMARY KEY (`chid`),
  KEY `fid` (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tblclgchild`
--


-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE IF NOT EXISTS `tblcourse` (
  `cid` int(20) NOT NULL AUTO_INCREMENT,
  `depid` int(20) NOT NULL,
  `course` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`),
  KEY `depid` (`depid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`cid`, `depid`, `course`, `status`) VALUES
(3, 2, 'BCom Tax', '1'),
(4, 1, 'BCA', '1'),
(5, 2, 'BCom CA', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbldep`
--

CREATE TABLE IF NOT EXISTS `tbldep` (
  `depid` int(20) NOT NULL AUTO_INCREMENT,
  `department` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`depid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbldep`
--

INSERT INTO `tbldep` (`depid`, `department`, `status`) VALUES
(1, 'Computer application', '1'),
(2, 'Commerce', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbldesignation`
--

CREATE TABLE IF NOT EXISTS `tbldesignation` (
  `desid` int(20) NOT NULL AUTO_INCREMENT,
  `designation` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`desid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbldesignation`
--

INSERT INTO `tbldesignation` (`desid`, `designation`, `status`) VALUES
(1, 'HOD', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblduties`
--

CREATE TABLE IF NOT EXISTS `tblduties` (
  `did` int(10) NOT NULL AUTO_INCREMENT,
  `teachid` int(10) NOT NULL,
  `date` date NOT NULL,
  `duties` varchar(100) NOT NULL,
  PRIMARY KEY (`did`),
  KEY `teachid` (`teachid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblduties`
--

INSERT INTO `tblduties` (`did`, `teachid`, `date`, `duties`) VALUES
(1, 1, '2022-11-17', 'sdffythjbn');

-- --------------------------------------------------------

--
-- Table structure for table `tbllesson`
--

CREATE TABLE IF NOT EXISTS `tbllesson` (
  `lid` int(20) NOT NULL AUTO_INCREMENT,
  `teachid` int(20) NOT NULL,
  `date` date NOT NULL,
  `cid` int(20) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `hr1` varchar(20) NOT NULL,
  `hr2` varchar(20) NOT NULL,
  `hr3` varchar(20) NOT NULL,
  `hr4` varchar(20) NOT NULL,
  `hr5` varchar(20) NOT NULL,
  PRIMARY KEY (`lid`),
  KEY `cid` (`cid`),
  KEY `teachid` (`teachid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbllesson`
--

INSERT INTO `tbllesson` (`lid`, `teachid`, `date`, `cid`, `sem`, `hr1`, `hr2`, `hr3`, `hr4`, `hr5`) VALUES
(1, 1, '2022-11-01', 3, '4', 'h', 'y', 'g', 's', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `tbllogin`
--

CREATE TABLE IF NOT EXISTS `tbllogin` (
  `loginid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`loginid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbllogin`
--

INSERT INTO `tbllogin` (`loginid`, `email`, `password`, `usertype`, `status`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', '1'),
(2, 'shine@gmail.com', '12345', 'teacher', '1'),
(3, 'ghjgh@gmail.com', '1230', 'teacher', '1'),
(4, 'fhb@gmail.com', '12345', 'teacher', '1'),
(5, 'sswa@gmail.com', '7879', 'student', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tblpub`
--

CREATE TABLE IF NOT EXISTS `tblpub` (
  `pid` int(20) NOT NULL AUTO_INCREMENT,
  `teachid` int(20) NOT NULL,
  `publication` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `field` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`pid`),
  KEY `teachid` (`teachid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblpub`
--

INSERT INTO `tblpub` (`pid`, `teachid`, `publication`, `description`, `field`, `date`) VALUES
(1, 1, 'tfuytvki', 'iuyggo78goh987j', 'dfuyfvuguy', '2022-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `tblstud`
--

CREATE TABLE IF NOT EXISTS `tblstud` (
  `studid` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `cid` int(20) NOT NULL,
  `sem` int(20) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`studid`),
  KEY `cid` (`cid`),
  KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblstud`
--

INSERT INTO `tblstud` (`studid`, `name`, `cid`, `sem`, `phno`, `email`, `password`, `address`) VALUES
(1, 'dtryyt', 3, 2, '7845129632', 'sswa@gmail.com', '7879', 'stgeyeyeg');

-- --------------------------------------------------------

--
-- Table structure for table `tblteach`
--

CREATE TABLE IF NOT EXISTS `tblteach` (
  `teachid` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `depid` int(20) NOT NULL,
  `desid` int(20) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `doj` date NOT NULL,
  `qualification` varchar(30) NOT NULL,
  PRIMARY KEY (`teachid`),
  KEY `depid` (`depid`),
  KEY `desid` (`desid`),
  KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tblteach`
--

INSERT INTO `tblteach` (`teachid`, `name`, `depid`, `desid`, `phno`, `email`, `password`, `address`, `doj`, `qualification`) VALUES
(1, 'shine', 1, 1, '7845127845', 'shine@gmail.com', '12345', 'adrtyrtr', '2022-11-07', 'MCA'),
(2, 'fd', 1, 1, '6475687527', 'ghjgh@gmail.com', '1230', 'yjtyjt', '2022-11-30', 'tfhyj'),
(3, 'uty', 1, 1, '7845126598', 'fhb@gmail.com', '12345', 'dggyjuuuu', '2022-11-14', 'ghhj');

-- --------------------------------------------------------

--
-- Table structure for table `tblteachf`
--

CREATE TABLE IF NOT EXISTS `tblteachf` (
  `ftid` int(20) NOT NULL AUTO_INCREMENT,
  `studid` int(20) NOT NULL,
  `date` date NOT NULL,
  `sem` int(20) NOT NULL,
  `teachid` int(20) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `overall` float NOT NULL,
  PRIMARY KEY (`ftid`),
  KEY `teachid` (`teachid`),
  KEY `studid` (`studid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tblteachf`
--

INSERT INTO `tblteachf` (`ftid`, `studid`, `date`, `sem`, `teachid`, `comment`, `overall`) VALUES
(1, 1, '2022-11-18', 1, 1, ' kjkljl', 4.9),
(2, 1, '2022-11-23', 2, 1, '', 3.4),
(3, 1, '2022-11-25', 4, 2, 'tfjd,gvfkjghil,kjlkhk,jghjg', 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblduties`
--
ALTER TABLE `tblduties`
  ADD CONSTRAINT `teachid` FOREIGN KEY (`teachid`) REFERENCES `tblteach` (`teachid`);
