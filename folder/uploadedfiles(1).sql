-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2016 at 12:03 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `uploadedfiles`
--

CREATE TABLE IF NOT EXISTS `uploadedfiles` (
  `filedir` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `section` varchar(255) NOT NULL,
  `appid` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`section`,`appid`),
  KEY `appid` (`appid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploadedfiles`
--

INSERT INTO `uploadedfiles` (`filedir`, `filename`, `size`, `section`, `appid`, `type`) VALUES
('folder/Licence.txt', 'Licence.txt', 990, '', 1, 'text/plain'),
('folder/Read-me_PC.txt', 'Read-me_PC.txt', 1497, 'test1', 1, 'text/plain');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `uploadedfiles`
--
ALTER TABLE `uploadedfiles`
  ADD CONSTRAINT `uploadedfiles_ibfk_1` FOREIGN KEY (`appid`) REFERENCES `irb-application` (`ApplicationID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
