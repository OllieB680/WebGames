-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 04, 2017 at 09:05 PM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smonitor`
--
CREATE DATABASE IF NOT EXISTS `smonitor` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `smonitor`;

-- --------------------------------------------------------

--
-- Table structure for table `sensors`
--

CREATE TABLE IF NOT EXISTS `sensors` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'transaction ID',
  `sID` tinyint(4) NOT NULL,
  `sStatus` varchar(3) NOT NULL,
  `SValue` tinyint(4) NOT NULL,
  `sTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `sensors`
--

INSERT INTO `sensors` (`ID`, `sID`, `sStatus`, `SValue`, `sTime`) VALUES
(20, 1, 'NOK', 0, '2017-10-04 20:56:33'),
(21, 2, 'OK', 1, '2017-10-04 20:56:33'),
(22, 3, 'NOK', 0, '2017-10-04 20:56:33');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
