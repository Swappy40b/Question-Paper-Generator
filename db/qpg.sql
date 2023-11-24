-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2020 at 06:34 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qpg`
--

-- --------------------------------------------------------

--
-- Table structure for table `addsubject`
--

CREATE TABLE IF NOT EXISTS `addsubject` (
  `sid` int(10) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `smark` int(100) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addsubject`
--

INSERT INTO `addsubject` (`sid`, `sname`, `smark`) VALUES
(101, 'data structure', 100),
(102, 'oop', 100),
(103, 'networking', 100),
(104, 'linux', 100),
(105, 'electronics', 100);

-- --------------------------------------------------------

--
-- Table structure for table `admindetails`
--

CREATE TABLE IF NOT EXISTS `admindetails` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `ausername` varchar(255) NOT NULL,
  `apassword` varchar(255) NOT NULL,
  `arole` varchar(100) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=568 ;

--
-- Dumping data for table `admindetails`
--

INSERT INTO `admindetails` (`aid`, `ausername`, `apassword`, `arole`) VALUES
(567, 'shweta', 'shweta123', 'siteadmin');

-- --------------------------------------------------------

--
-- Table structure for table `tregister`
--

CREATE TABLE IF NOT EXISTS `tregister` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `tname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tregister`
--

INSERT INTO `tregister` (`tid`, `tname`, `username`, `password`, `branch`, `contact`, `email`) VALUES
(4, 'anku kadam', 'ankita', 'ak@123', 'BCS', '8605204022', 'anku0603@gmail.com'),
(5, 'rucha', 'nikam', 'rn123', 'bsc', '8605204022', 'ruvha999@123');

-- --------------------------------------------------------

--
-- Table structure for table `unitdetails`
--

CREATE TABLE IF NOT EXISTS `unitdetails` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `unitname` varchar(100) NOT NULL,
  `sid` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `unitdetails`
--

INSERT INTO `unitdetails` (`uid`, `unitname`, `sid`) VALUES
(1, 'shell programming', 104),
(2, 'microprocessor', 105);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
