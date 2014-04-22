-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `spice`
--

CREATE DATABASE IF NOT EXISTS `spice`;

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE IF NOT EXISTS `addresses` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `street` varchar(64) COLLATE utf8_bin NOT NULL,
  `zip` varchar(8) COLLATE utf8_bin NOT NULL,
  `citiesid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `first_name`, `last_name`, `street`, `zip`, `citiesid`) VALUES
(1, 'FirstName1', 'LastName1', 'Street1', '11-22-33', 1),
(2, 'FirstName2', 'LastName2', 'Street2', '22-33-44', 1),
(3, 'FirstName3', 'LastName3', 'Street3', '22-33-44', 2),
(4, 'FirstName4', 'LastName4', 'Street4', '22-33-44', 3),
(5, 'FirstName5', 'LastName5', 'Street5', '22-33-44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`) VALUES
(1, 'Alingsas'),
(2, 'Arboga'),
(3, 'Arvika'),
(4, 'Askersund');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
