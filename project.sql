-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2015 at 02:59 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

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
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `pwd` varchar(10) NOT NULL,
  `cpwd` varchar(10) NOT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  UNIQUE KEY `email` (`email`,`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`fname`, `lname`, `dob`, `gender`, `email`, `uname`, `pwd`, `cpwd`, `mobile`) VALUES
('alif', 'momin', '1992-05-13', 'm', 'alif@gmail.com', 'alif', 'alif', 'alif', '1234567890'),
('anoop', 'antony', '1991-02-03', 'm', 'anoop@gmail.com', 'anoop', '786110', '786110', '2147483647'),
('navid', 'maredia', '1991-04-07', 'm', 'navid@gmail.com', 'navid', '786110', '786110', '6477786110'),
('ram', 'prudhvi', '1964-09-14', 'm', 'ramchandra.prudhvi@gmail.com', 'ramchandra', 'prudhvi147', 'prudhvi147', NULL),
('soaib', 'momin', '1991-01-20', 'm', 'soaib@gmail.com', 'soaib', '786110', '786110', '1234567890'),
('Uttam', 'Lankala', '1986-03-21', 'm', 'uttam216@aol.com', 'uttam216', 'uttam', 'uttam', '1234567890'),
('vaisakh', 'shaji', '1989-01-27', 'm', 'vaisakh@gmail.com', 'vaisakh', 'vai', 'vai', '1234567890'),
('vinod', 'Prudhvi', '1989-06-22', 'm', 'vinod.prudhvi@gmail.com', 'vinod.prudhvi', 'vinod2206', 'vinod2206', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
