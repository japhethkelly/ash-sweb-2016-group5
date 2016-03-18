-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2016 at 08:29 PM
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
-- Table structure for table `irb-application`
--

CREATE TABLE IF NOT EXISTS `irb-application` (
  `Status` enum('Faculty/Staff', 'Student') NOT NULL,
  `DateSubmitted` date NOT NULL,
  `TitleOfProject` varchar(255) NOT NULL,
  `PrincipalInvestigator` varchar(255) NOT NULL,
  `CoPrincipalInvestigator` varchar(255) NOT NULL,
  `PIDepartment` varchar(255) NOT NULL,
  `PIPhoneNo` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `GrantSource` varchar(255) NOT NULL,
  `GrantDeadline` date NOT NULL,
  `Exemption` text NOT NULL,
  `NumCharOfSubjects` text NOT NULL,
  `SpecialClasses` text NOT NULL,
  `HowRecruited` text NOT NULL,
  `HowResProc` text NOT NULL,
  `ReseachMethodClass` text NOT NULL,
  `DataSources` text NOT NULL,
  `RiskProcedure` set ('Deception of the participant?', 'Punishment of the participant?', 'Materials commonly regarded as socially?', 'Any other procedure that might be considered to be an invasion of privacy?', 'Disclosure of the name of individual participants?', 'Any other physically invasive procedure?') NOT NULL,
  `Risks` text NOT NULL,
  `ExtentOfConf` text NOT NULL,
  `PorcForHandlingData` text NOT NULL,
  `HowDisseminated` text NOT NULL,
  `HowInformed` text NOT NULL,
  `HowConfProtected` text NOT NULL,
  `WillSubjectReward` text NOT NULL,
  `WhatIntrinsicBenefits` text NOT NULL,
  `WhyUnavailable` text NULL,
  `ApplicationID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL,
  PRIMARY KEY (`ApplicationID`,`UserID`)
);



CREATE TABLE IF NOT EXISTS `uploadedfiles` (
  `filedir` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `appid` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
   PRIMARY KEY (`appid`),
  KEY `appid` (`appid`)
);
