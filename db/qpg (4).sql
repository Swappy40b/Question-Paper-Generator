 -- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2020 at 08:22 AM
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
  `tid` int(11) NOT NULL,
  `qstatus` varchar(100) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addsubject`
--

INSERT INTO `addsubject` (`sid`, `sname`, `tid`, `qstatus`) VALUES
(1, 'PHP', 10, 'Yes'),
(101, 'oop', 10, 'Yes'),
(104, 'linux', 10, 'No'),
(105, 'HTML', 15, 'No');

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
(567, 'shweta', 'sh123', 'siteadmin');

-- --------------------------------------------------------

--
-- Table structure for table `mcq_quetion`
--

CREATE TABLE IF NOT EXISTS `mcq_quetion` (
  `qmid` int(11) NOT NULL AUTO_INCREMENT,
  `qmnm` varchar(255) NOT NULL,
  `op1` varchar(255) NOT NULL,
  `op2` varchar(255) NOT NULL,
  `op3` varchar(255) NOT NULL,
  `op4` varchar(255) NOT NULL,
  `sid` int(10) NOT NULL,
  `tid` int(11) NOT NULL,
  `qtype` varchar(255) NOT NULL,
  PRIMARY KEY (`qmid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `mcq_quetion`
--

INSERT INTO `mcq_quetion` (`qmid`, `qmnm`, `op1`, `op2`, `op3`, `op4`, `sid`, `tid`, `qtype`) VALUES
(1, 'PHP is____ scripting language', 'Client Side', 'Server Side', 'both A and B', 'None Of These', 1, 10, 'mcq'),
(9, 'Use the ____ to delete the data inside the tableand not the table', 'Drop Table', 'Delete Table', 'Remove Table', 'Truncate Table', 1, 10, 'mcq'),
(10, '___ function computes the difference of arrays', 'array_diff', 'diff_array', 'arrays_diff', 'diff_arrays', 1, 10, 'mcq'),
(11, 'Variables always start with a __ in PHP', 'Pond sign', 'Yen sign', 'Dollar sign', 'Euro sign', 1, 10, 'mcq'),
(12, '___function counts elements in an array', 'Count', 'Counter', 'Array_Count', 'Count_array', 1, 10, 'mcq'),
(13, '___ are used to denote multiline comment in PHP', '/*---*/', '//', '#', 'None of the Above', 1, 10, 'mcq'),
(14, '___ function is used to execute query in  MySQL', 'mysql_select_db()', 'mysql_execute()', 'mysql_query()', 'None of the these', 1, 10, 'mcq'),
(15, '___ used to catch the data, submitted by using HTTP method', '-post[]', 'get[]', '$_POST[]', '$_isset()', 1, 10, 'mcq'),
(16, 'PHP stands for-----', 'PHP ', 'PHP Hypertext  Program', 'PHP  Hypertext Preprocessor', 'None Of These', 1, 10, 'mcq'),
(17, '---sorting type is mainly useful for associative array in php', 'sort()', 'krsort()', 'ksort()', 'Both (b) & (c)', 1, 10, 'mcq'),
(18, 'The syntax of Ternary operator is----', 'condition?statement:statement', 'condition?statement;statement', 'condition?statement:statement:', 'None of the Above', 1, 10, 'mcq'),
(19, 'In php variable must starts with----sign', 'Dollar($)', 'Colon(:)', 'Ampersand(&)', 'None of the Above', 1, 10, 'mcq'),
(20, '----keyword is used to declare constant in php', 'constant', 'const', 'both A and B', 'None of the Above', 1, 10, 'mcq'),
(21, '-----operator check the datatype as well as value of variable ', 'Equal to(==)', 'Identical(===)', 'comparision', 'assignment', 1, 10, 'mcq'),
(22, '-----array comes with key and value pair', 'One diamentional', 'Index', 'Associative', 'None of the Above', 1, 10, 'mcq'),
(23, 'In php ----- function is used to establish connection with MySQL', 'mysql_connection()', 'mysql_connect()', 'sql_connect()', 'connect()', 1, 10, 'mcq'),
(24, 'PHP file can contain ------ code', 'HTML', 'CSS', 'JavaScript', 'All of the above', 1, 10, 'mcq'),
(25, 'Which statement contain default case when no any match is found', 'if', 'nested if', 'switch', 'None of the Above', 1, 10, 'mcq'),
(26, '---- loop which is work only on an array and moves pointer by one ,until it reaches the last element of array.', 'While', 'For', 'Foreach', 'Do-while', 1, 10, 'mcq'),
(27, '--- function displays all values of array with their index or keys, datatype and length of those values.', 'var_dump()', 'print_r()', 'both A and B', 'None of the Above', 1, 10, 'mcq'),
(28, '---- are the types of comment used in php', 'Single line (//)', 'Multiple line (/*-----*/)', 'both A and B', 'None Of These', 1, 10, 'mcq'),
(29, '---- datatype represents the two possible results which are true or false.', 'String', 'Boolen', 'Integer', 'None of the Above', 1, 10, 'mcq');

-- --------------------------------------------------------

--
-- Table structure for table `qcat`
--

CREATE TABLE IF NOT EXISTS `qcat` (
  `catid` int(11) NOT NULL AUTO_INCREMENT,
  `qcatnm` varchar(255) NOT NULL,
  `catmarks` int(11) NOT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `qcat`
--

INSERT INTO `qcat` (`catid`, `qcatnm`, `catmarks`) VALUES
(3, 'Attempt Any two of the following', 8),
(4, 'Write Short note on following', 4),
(5, 'Attempt Any one of the following', 5),
(6, 'Attempt Any four of the following', 5);

-- --------------------------------------------------------

--
-- Table structure for table `theory_quetion`
--

CREATE TABLE IF NOT EXISTS `theory_quetion` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `qnm` varchar(255) NOT NULL,
  `catid` int(11) NOT NULL,
  `sid` int(10) NOT NULL,
  `tid` int(11) NOT NULL,
  `qtype` varchar(100) NOT NULL,
  PRIMARY KEY (`qid`),
  KEY `tid` (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `theory_quetion`
--

INSERT INTO `theory_quetion` (`qid`, `qnm`, `catid`, `sid`, `tid`, `qtype`) VALUES
(3, 'Explain Data Types in PHP', 4, 1, 10, 'theory'),
(4, 'Explain while loop in PHP with suitable example', 4, 1, 10, 'theory'),
(5, 'How to declare variables and constants in PHP', 3, 1, 10, 'theory'),
(6, 'Explain ternary operators', 4, 1, 10, 'theory'),
(7, 'Explain two dimensional array in PHP', 4, 1, 10, 'theory'),
(8, 'Explain Order by Clause  SQL query in PHP application', 4, 1, 10, 'theory'),
(9, 'Explain different types of if statements in PHP', 3, 1, 10, 'theory'),
(10, 'Explain sorting methods in PHP array', 3, 1, 10, 'theory'),
(11, 'what is MySQL database? Explain how to connect PeHP application with MySQL databas', 3, 1, 10, 'theory'),
(12, 'Explain concept of oop', 3, 101, 10, 'theory'),
(13, 'Explain Heading Tags', 4, 105, 15, 'theory'),
(14, 'Explain any two sorting technique of array with example', 6, 1, 10, 'theory'),
(15, 'Explain session in php ?', 5, 1, 10, 'theory'),
(16, 'Explain form methods in php?', 5, 1, 10, 'theory'),
(17, 'What is associative array?', 5, 1, 10, 'theory');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tregister`
--

INSERT INTO `tregister` (`tid`, `tname`, `username`, `password`, `branch`, `contact`, `email`) VALUES
(10, 'ankita chavan', 'ankita', 'ac@123', 'BCS', '8605204022', 'anku0603@gmail.com'),
(11, 'yashashri bitale', 'yashashri', 'yash@321', 'BSC', '8899005678', 'yasha09@gmail.com'),
(12, 'tejal gade', 'tejal', 'tejal@321', 'BSC', '8899005678', 'tejal09@gmail.com'),
(13, 'pranali salunkhe', 'pranali', 'ps@123', 'BCS', '9934256789', 'pranali123@gmail.com'),
(14, 'shubham jadhav', 'shubham', 'sj@123', 'BSC', '8623831856', 'shubhamjadhav609.sj@gmail.com'),
(15, 'Prashant Aware', 'prashant09', 'prashant@09', 'BCS', '9898989898', 'prashantaware222@gmail.com'),
(16, 'Roshani Atar', 'Roshani', 'ra@123', 'BSC(c.s)', '8967004479', 'roshani123@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
