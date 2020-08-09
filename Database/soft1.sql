-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2019 at 03:55 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `soft1`
--

-- --------------------------------------------------------

--
-- Table structure for table `request1`
--

CREATE TABLE IF NOT EXISTS `request1` (
  `Email` varchar(30) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `User_Name` varchar(20) NOT NULL,
  `Software_Name` varchar(20) NOT NULL,
  `Software_Version` varchar(30) NOT NULL,
  `Software_Year` varchar(4) NOT NULL,
  `Comment` varchar(150) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request1`
--

INSERT INTO `request1` (`Email`, `First_Name`, `Last_Name`, `User_Name`, `Software_Name`, `Software_Version`, `Software_Year`, `Comment`) VALUES
('hansakaudana2000@gmail.com', 'fddh', 'dh', 'hdh', 'hdhg', 'hd', 'hdhg', 'dhh'),
('hansakaudana2002@gmail.com', 'sfdg', 'sfh', 'hdfsfh', 'hfd ', 'dhgdgh', 'ghg', 'hgfdhg'),
('hansakaudana2004@gmail.com', 'dggdh', 'hgdf', 'hgfjhfg', 'fjfj ', 'fjfhj', 'jgh', 'ghjjjg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
