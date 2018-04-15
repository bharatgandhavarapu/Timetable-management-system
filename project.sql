-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2017 at 05:23 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `uname` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `password`, `email`) VALUES
('admin', 'admin', 'admin@mvgr.com');

-- --------------------------------------------------------

--
-- Table structure for table `coursedata`
--

CREATE TABLE IF NOT EXISTS `coursedata` (
  `scode` varchar(10) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `fid` varchar(10) NOT NULL,
  `department` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `sid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursedata`
--

INSERT INTO `coursedata` (`scode`, `fname`, `fid`, `department`, `year`, `semester`, `section`, `sid`) VALUES
('daa', 'kalyanchak', 'f11111', 'CSE', '3', '6', 'b', 's1'),
('DWDM', 'p.srinuvas', 'f22222', 'CSE', '3', '6', 'b', 's2'),
('wt', 'b.srinuvas', 'f33333', 'CSE', '3', '6', 'b', 's3'),
('SE', 'anurag', 'f44444', 'CSE', '3', '6', 'b', 's4'),
('CN', 'priyankha', 'f55555', 'CSE', '3', '6', 'b', 's5'),
('IPR', 'raju', 'f66666', 'CSE', '3', '6', 'b', 's6'),
('daa', 'kalyanchak', 'f11111', 'CSE', '3', '6', 'a', 's1');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `fid` varchar(10) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `designation` varchar(10) NOT NULL,
  `qualification` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `fname`, `designation`, `qualification`, `email`) VALUES
('f11111', 'kalyanchak', 'professor', 'P.G', 'kalyan@mvgr.com'),
('f22222', 'p.srinuvas', 'professor', 'M.tech', 'ps@mvgr.com'),
('f33333', 'b.srinuvas', 'professor', 'M.tech', 'bs@mvgr.com'),
('f44444', 'anurag', 'assistant ', 'B.tech', 'anurag@mvgr.com'),
('f55555', 'priyankha', 'assistant ', 'B.tech', 'priya@mvgr.com'),
('f66666', 'raju', 'professor', 'M.tech', 'raju@mvgr.com');

-- --------------------------------------------------------

--
-- Table structure for table `period`
--

CREATE TABLE IF NOT EXISTS `period` (
  `sid` varchar(10) NOT NULL,
  `scode` varchar(10) NOT NULL,
  `day` varchar(10) NOT NULL,
  `period` varchar(10) NOT NULL,
  `subjectsteach` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `period`
--

INSERT INTO `period` (`sid`, `scode`, `day`, `period`, `subjectsteach`) VALUES
('s2', 'DWDM', 'Monday', '5', '1'),
('s2', 'DWDM', 'Wednesday', '3', '1'),
('s2', 'DWDM', 'Thusday', '5', '2'),
('s2', 'DWDM', 'Friday', '3', '1'),
('s3', 'wt', 'Wednesday', '5', '2'),
('s3', 'wt', 'Friday', '2', '2'),
('s4', 'cnlab', 'Thursday', '3', '3'),
('s20', 'addoncours', 'Saturday', '3', '3'),
('', '', '', '', ''),
('s1', 'daa', 'Friday', '5', '2'),
('s1', 'daa', 'Monday', '1', '2'),
('s4', 'SE', 'Monday', '', '2');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `pass1` varchar(10) NOT NULL,
  `phn` varchar(10) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`fname`, `lname`, `id`, `pass`, `pass1`, `phn`, `dept`, `email`) VALUES
('kalyan', 'chakravart', 'f11111', 'f11111', 'f1111', '9491122916', 'cse', 'kalyan@mvgr.com'),
('p.srinuvas', 'rao', 'f22222', 'f22222', 'f22222', '967854321', 'cse', 'ps@mvgr.com'),
('b.srinuvas', 'rao', 'f33333', 'f33333', 'f33333', '7894563214', 'cse', 'bs@mvgr.com'),
('f33333', 'b.srinuvas', 'rao', 'f33333', 'f33333', '7894563215', 'cse', 'bs@mvgr.com');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `rno` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `pass1` varchar(10) NOT NULL,
  `phn` varchar(10) NOT NULL,
  `sec` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `dept` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`fname`, `lname`, `email`, `rno`, `pass`, `pass1`, `phn`, `sec`, `year`, `dept`) VALUES
('sudha', 'rani', 'sudharanikilladi@gma', '14331a0570', '14331a0570', '14331a0570', '9491126298', 'b', '3', 'cse');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `sid` varchar(10) NOT NULL,
  `scode` varchar(10) NOT NULL,
  `sname` varchar(10) NOT NULL,
  `TL` varchar(10) NOT NULL,
  `TT` varchar(10) NOT NULL,
  `TP` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sid`, `scode`, `sname`, `TL`, `TT`, `TP`) VALUES
('s1', 'daa', 'design ana', '50', '5', '0'),
('s2', 'DWDM', 'data wareh', '52', '5', '0'),
('s3', 'wt', 'web techno', '52', '5', '13'),
('s4', 'SE', 'software e', '50', '5', '13'),
('s5', 'CN', 'computer n', '50', '5', '13'),
('s6', 'IPR', 'intellectu', '47', '5', '0'),
('s10', 'CN', 'complierde', '50', '4', '13'),
('s12', 'java', 'java progr', '50', '5', '13'),
('a1', 'daa', 'design ana', '50', '5', '0');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
  `section` varchar(10) NOT NULL,
  `9:00-9:50` varchar(10) NOT NULL,
  `9:50-10:40` varchar(10) NOT NULL,
  `10:40-11:30` varchar(10) NOT NULL,
  `11:30-12:20` varchar(10) NOT NULL,
  `12:20-1:10` varchar(10) NOT NULL,
  `1:10-2:00` varchar(10) NOT NULL,
  `2:00-2:50` varchar(10) NOT NULL,
  `2:50-3:40` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`section`, `9:00-9:50`, `9:50-10:40`, `10:40-11:30`, `11:30-12:20`, `12:20-1:10`, `1:10-2:00`, `2:00-2:50`, `2:50-3:40`) VALUES
('MON', '', '', '', '', '', '', '', ''),
('TUESDAY', '', '', '', '', '', '', '', ''),
('WEDDAY', '', '', '', '', '', '', '', ''),
('THURSDAY', '', '', '', '', '', '', '', ''),
('FRIDAY', '', '', '', '', '', '', '', ''),
('SATDAY', '', '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
