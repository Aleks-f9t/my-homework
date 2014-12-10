-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2014 at 07:06 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pcstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `pcbrands`
--

CREATE TABLE IF NOT EXISTS `pcbrands` (
  `PCbrandsID` int(11) NOT NULL,
  `brands` varchar(1023) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pcbrands`
--

INSERT INTO `pcbrands` (`PCbrandsID`, `brands`) VALUES
(0, 'Toshiba'),
(1, 'Lenovo'),
(2, 'HP');

-- --------------------------------------------------------

--
-- Table structure for table `pcmodels`
--

CREATE TABLE IF NOT EXISTS `pcmodels` (
  `PCmodelsID` int(11) NOT NULL,
  `models` varchar(1023) NOT NULL,
  `PCbrandsID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `pcmodels`:
--   `PCmodelsID`
--       `pcbrands` -> `PCbrandsID`
--

--
-- Dumping data for table `pcmodels`
--

INSERT INTO `pcmodels` (`PCmodelsID`, `models`, `PCbrandsID`) VALUES
(0, 'C50-A-176', 0),
(1, 'S440 20AY001DBM', 0),
(2, '1040 F1N10EA', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pcprices`
--

CREATE TABLE IF NOT EXISTS `pcprices` (
  `PCpricesID` int(11) NOT NULL,
  `Prices` double NOT NULL,
  `PCmodelsID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `pcprices`:
--   `PCpricesID`
--       `pcmodels` -> `PCmodelsID`
--

--
-- Dumping data for table `pcprices`
--

INSERT INTO `pcprices` (`PCpricesID`, `Prices`, `PCmodelsID`) VALUES
(0, 980, 0),
(1, 1300, 0),
(2, 899, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pcbrands`
--
ALTER TABLE `pcbrands`
 ADD PRIMARY KEY (`PCbrandsID`);

--
-- Indexes for table `pcmodels`
--
ALTER TABLE `pcmodels`
 ADD PRIMARY KEY (`PCmodelsID`);

--
-- Indexes for table `pcprices`
--
ALTER TABLE `pcprices`
 ADD PRIMARY KEY (`PCpricesID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pcmodels`
--
ALTER TABLE `pcmodels`
ADD CONSTRAINT `pcmodels_ibfk_1` FOREIGN KEY (`PCmodelsID`) REFERENCES `pcbrands` (`PCbrandsID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pcprices`
--
ALTER TABLE `pcprices`
ADD CONSTRAINT `pcprices_ibfk_1` FOREIGN KEY (`PCpricesID`) REFERENCES `pcmodels` (`PCmodelsID`) ON DELETE CASCADE ON UPDATE CASCADE;
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
