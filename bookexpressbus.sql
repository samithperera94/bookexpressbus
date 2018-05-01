-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 01, 2018 at 10:19 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookexpressbus`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaign`
--

DROP TABLE IF EXISTS `complaign`;
CREATE TABLE IF NOT EXISTS `complaign` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(15) NOT NULL,
  `mobile` int(10) NOT NULL,
  `issue` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaign`
--

INSERT INTO `complaign` (`c_id`, `name`, `email`, `mobile`, `issue`, `description`) VALUES
(1, 'sdfesdfd', 'sfdsg', 243, '{issue}', '{des}');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `feedback` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`) VALUES
(9, 'Enter Name', 'You Experience'),
(8, 'sncdjhfjergjkd', ',admklwetjio4 fjeijfeife'),
(7, 'wdqwd efwefwrf efewf', 'fwefewf efwefwef ewfwefwef wefwefwe fwefewfefewf'),
(10, 'Enter Name', 'You Experience'),
(11, 's,smcjnfjd', 'mckldvkldngdn'),
(12, 'shaminda', 'jhbddhjhs'),
(13, 'shaminda', 'njwdjwsdbh'),
(14, '', ''),
(15, '', ''),
(16, 'Enter a city', 'Enter a city'),
(17, 'Enter a city', 'Enter a city');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
