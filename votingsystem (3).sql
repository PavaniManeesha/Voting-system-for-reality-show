-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2021 at 07:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comID` int(3) NOT NULL,
  `JID` int(3) DEFAULT NULL,
  `regUserID` int(3) DEFAULT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comID`, `JID`, `regUserID`, `comment`) VALUES
(1, NULL, 2, 'Nice program'),
(2, 3, NULL, 'Excellent peformance Udara'),
(3, NULL, 1, 'We need more programs like this'),
(4, NULL, 5, 'Chamila will be the winner'),
(5, 4, NULL, 'Good luck');

-- --------------------------------------------------------

--
-- Table structure for table `competitors`
--

CREATE TABLE `competitors` (
  `CompID` int(3) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `competitors`
--

INSERT INTO `competitors` (`CompID`, `firstName`, `lastName`, `email`, `password`) VALUES
(1, 'Manith', 'Vijewikrama', 'manith@gmail.com', 'manith'),
(2, 'Naveen', 'Rathnayaka', 'naveen@gmail.com', 'naveen'),
(3, 'Amara', 'Piyasena', 'amara@gmail.com', 'amara'),
(4, 'Sneha', 'Samuwel', 'sneha@gmail.com', 'sneha'),
(5, 'Ahinsa', 'De Silwa', 'ahinsa@gmail.com', 'ahinsa');

-- --------------------------------------------------------

--
-- Table structure for table `duelvote`
--

CREATE TABLE `duelvote` (
  `DuelID` int(3) NOT NULL,
  `groupname` varchar(15) NOT NULL,
  `name1` varchar(20) NOT NULL,
  `name2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `duelvote`
--

INSERT INTO `duelvote` (`DuelID`, `groupname`, `name1`, `name2`) VALUES
(1, 'Shasha&Masha', 'Shasha', 'Masha'),
(2, 'Amara&Samara', 'Amara', 'Samara'),
(3, 'Mala&kanthi', 'Mala', 'Kanthi'),
(4, 'Nehara&Shehani', 'Nehara', 'Shehani'),
(5, 'Suraj&Nuran', 'Suraj', 'Nuran');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FID` int(3) NOT NULL,
  `regUserID` int(3) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `contactno` int(10) DEFAULT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FID`, `regUserID`, `name`, `email`, `contactno`, `feedback`) VALUES
(1, 1, '', NULL, NULL, 'Nice program'),
(2, 3, '', NULL, NULL, 'Excellent peformance Udara'),
(3, 4, '', NULL, NULL, 'We need more programs like this'),
(4, 2, '', NULL, NULL, 'Chamila will be the winner'),
(5, 5, '', NULL, NULL, 'Good luck');

-- --------------------------------------------------------

--
-- Table structure for table `groupvote`
--

CREATE TABLE `groupvote` (
  `GroupID` int(3) NOT NULL,
  `groupname` varchar(20) NOT NULL,
  `name1` varchar(20) NOT NULL,
  `name2` varchar(20) NOT NULL,
  `name3` varchar(20) NOT NULL,
  `name4` varchar(20) NOT NULL,
  `name5` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groupvote`
--

INSERT INTO `groupvote` (`GroupID`, `groupname`, `name1`, `name2`, `name3`, `name4`, `name5`) VALUES
(1, 'Fab 5', 'Dilano', 'Senara', 'Lakkana', 'Ovidu', 'Dulan'),
(2, 'River Rangers', 'Devini', 'Ruchith', 'Nimantha', 'Senal', 'Duneru'),
(3, 'Five Musketeers', 'Rividu', 'Nimuthu', 'Miyulasi', 'Oshitha', 'Tehan'),
(4, 'Spice Sugar', 'Pasidu', 'Naveenda', 'Nilupul', 'Wuwani', 'Hansana'),
(5, 'Birds of Feathers', 'Shalini', 'Himansa', 'Dahandi', 'Dinunjaya', 'Ershaka');

-- --------------------------------------------------------

--
-- Table structure for table `judge`
--

CREATE TABLE `judge` (
  `JID` int(3) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `age` int(2) NOT NULL,
  `address` varchar(300) NOT NULL,
  `nic` varchar(13) NOT NULL,
  `number` int(10) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `judge`
--

INSERT INTO `judge` (`JID`, `firstName`, `lastName`, `email`, `age`, `address`, `nic`, `number`, `password`) VALUES
(1, 'Chamath', 'Liyanage', 'chamath@gmail.com', 0, '', '', 0, 'chamath'),
(2, 'Aman', 'Pathmendra', 'aman@gmail.com', 0, '', '', 0, 'aman'),
(3, 'Udantha', 'Samarasinghe', 'udantha@gmail.com', 20, 'Kandy', '200006701539', 772548963, 'udantha'),
(4, 'Purnitha', 'Bandara', 'purnitha@gmail.com', 0, '', '', 0, 'purnitha'),
(5, 'Pavani', 'Senadheera', 'pavani@gmail.com', 0, '', '', 0, 'pavani');

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `performanceID` int(3) NOT NULL,
  `type` varchar(25) NOT NULL,
  `CompUID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`performanceID`, `type`, `CompUID`) VALUES
(1, 'Solo', 1),
(2, 'Solo', 4),
(3, 'Duel', 5),
(4, 'Duel', 1),
(5, 'Group', 3);

-- --------------------------------------------------------

--
-- Table structure for table `reguser`
--

CREATE TABLE `reguser` (
  `regUserID` int(3) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `age` int(2) NOT NULL,
  `address` text DEFAULT NULL,
  `number` int(10) NOT NULL,
  `nic` varchar(13) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reguser`
--

INSERT INTO `reguser` (`regUserID`, `firstName`, `lastName`, `age`, `address`, `number`, `nic`, `email`, `password`) VALUES
(1, 'Amal', 'Rathnayaka', 0, NULL, 0, '', 'amal@gmail.com', 'amal'),
(2, 'Sachintha', 'Bandara', 20, 'swsa', 20020, '60000', 'sachintha@gmail.com', 'sachintha'),
(3, 'Udantha', 'Samarasinghe', 20, 'Kandy', 772548963, '200006701539', 'udantha@gmail.com', 'udantha'),
(4, 'Janith', 'Senanayaka', 0, NULL, 0, '', 'janith@gmail.com', 'janith'),
(5, 'Kavidu', 'Chandrarathna', 0, NULL, 0, '', 'kavidu@gmail.com', 'kavidu');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `resultID` int(3) NOT NULL,
  `vote` int(3) NOT NULL,
  `CompID` int(3) DEFAULT NULL,
  `DualID` int(3) DEFAULT NULL,
  `TrioID` int(3) DEFAULT NULL,
  `GroupID` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`resultID`, `vote`, `CompID`, `DualID`, `TrioID`, `GroupID`) VALUES
(1, 4, 1, NULL, NULL, NULL),
(2, 5, 2, NULL, NULL, NULL),
(3, 5, 3, NULL, NULL, NULL),
(4, 2, 4, NULL, NULL, NULL),
(5, 2, 5, NULL, NULL, NULL),
(11, 4, NULL, 1, NULL, NULL),
(12, 2, NULL, 2, NULL, NULL),
(13, 1, NULL, 3, NULL, NULL),
(14, 0, NULL, 4, NULL, NULL),
(15, 0, NULL, 5, NULL, NULL),
(16, 0, NULL, NULL, 1, NULL),
(17, 0, NULL, NULL, 2, NULL),
(18, 2, NULL, NULL, 3, NULL),
(19, 0, NULL, NULL, 4, NULL),
(20, 1, NULL, NULL, 5, NULL),
(21, 2, NULL, NULL, NULL, 1),
(22, 1, NULL, NULL, NULL, 2),
(23, 2, NULL, NULL, NULL, 3),
(24, 0, NULL, NULL, NULL, 4),
(25, 1, NULL, NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `triovote`
--

CREATE TABLE `triovote` (
  `TrioID` int(3) NOT NULL,
  `groupname` varchar(20) NOT NULL,
  `name1` varchar(20) NOT NULL,
  `name2` varchar(20) NOT NULL,
  `name3` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `triovote`
--

INSERT INTO `triovote` (`TrioID`, `groupname`, `name1`, `name2`, `name3`) VALUES
(1, 'Fantastic3', 'Akash', 'Samith', 'Uthpala'),
(2, 'Best Fries', 'Madushanka', 'Tharushi', 'Bumidu'),
(3, 'Triple A', 'Amalmi', 'Amaya', 'Anudi'),
(4, 'Core Three', 'Anupa', 'Asel', 'Bhanu'),
(5, 'Trice Squad', 'Dineshka', 'Chamudi', 'Chamali');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `VID` int(3) NOT NULL,
  `regUserID` int(3) DEFAULT NULL,
  `JID` int(11) DEFAULT NULL,
  `CompID` int(11) DEFAULT NULL,
  `DualID` int(3) DEFAULT NULL,
  `TrioID` int(3) DEFAULT NULL,
  `grp` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`VID`, `regUserID`, `JID`, `CompID`, `DualID`, `TrioID`, `grp`) VALUES
(1, 2, NULL, 5, NULL, NULL, NULL),
(2, 4, NULL, 3, NULL, NULL, NULL),
(3, 3, NULL, 4, NULL, NULL, NULL),
(5, 1, NULL, 1, NULL, NULL, NULL),
(6, 2, NULL, 1, NULL, NULL, NULL),
(7, 2, NULL, 5, NULL, NULL, NULL),
(8, 3, NULL, 2, NULL, NULL, NULL),
(9, 4, NULL, 2, NULL, NULL, NULL),
(10, 5, NULL, 3, NULL, NULL, NULL),
(11, 2, NULL, 3, NULL, NULL, NULL),
(12, 3, NULL, 1, NULL, NULL, NULL),
(13, 2, NULL, 3, NULL, NULL, NULL),
(14, 5, NULL, 3, NULL, NULL, NULL),
(20, 3, NULL, 3, NULL, NULL, NULL),
(21, 2, NULL, 2, NULL, NULL, NULL),
(22, 2, NULL, 5, NULL, NULL, NULL),
(23, 2, NULL, 5, NULL, NULL, NULL),
(24, 2, NULL, 4, NULL, NULL, NULL),
(25, 2, NULL, NULL, 3, NULL, NULL),
(26, 2, NULL, NULL, 3, NULL, NULL),
(27, 2, NULL, NULL, 3, NULL, NULL),
(28, 2, NULL, NULL, 2, NULL, NULL),
(29, 2, NULL, NULL, 5, NULL, NULL),
(30, 2, NULL, NULL, 3, NULL, NULL),
(31, 2, NULL, NULL, 1, NULL, NULL),
(32, 2, NULL, NULL, 1, NULL, NULL),
(33, 2, NULL, 2, NULL, NULL, NULL),
(34, 2, NULL, NULL, NULL, NULL, 3),
(35, 2, NULL, NULL, NULL, NULL, 2),
(36, 2, NULL, NULL, 2, NULL, NULL),
(37, 2, NULL, NULL, 2, NULL, NULL),
(38, 2, NULL, NULL, 2, NULL, NULL),
(39, 2, NULL, NULL, 1, NULL, NULL),
(40, 2, NULL, NULL, NULL, NULL, 5),
(41, 2, NULL, NULL, 1, NULL, NULL),
(42, 2, NULL, NULL, 1, NULL, NULL),
(43, 2, NULL, NULL, 1, NULL, NULL),
(44, 2, NULL, NULL, 1, NULL, NULL),
(45, 2, NULL, NULL, 1, NULL, NULL),
(46, 2, NULL, NULL, 1, NULL, NULL),
(47, 2, NULL, NULL, 5, NULL, NULL),
(48, 2, NULL, NULL, 5, NULL, NULL),
(49, 2, NULL, NULL, 5, NULL, NULL),
(50, 2, NULL, 1, NULL, NULL, NULL),
(51, 2, NULL, NULL, 1, NULL, NULL),
(52, 2, NULL, NULL, 3, NULL, NULL),
(53, 2, NULL, NULL, 2, NULL, NULL),
(54, 2, NULL, NULL, 1, NULL, NULL),
(55, 2, NULL, NULL, 1, NULL, NULL),
(56, 2, NULL, NULL, 1, NULL, NULL),
(57, 2, NULL, NULL, 1, NULL, NULL),
(58, 2, NULL, NULL, 1, NULL, NULL),
(59, 2, NULL, NULL, 1, NULL, NULL),
(60, 2, NULL, NULL, 1, NULL, NULL),
(61, 2, NULL, NULL, 1, NULL, NULL),
(62, 2, NULL, NULL, 1, NULL, NULL),
(63, 2, NULL, NULL, 1, NULL, NULL),
(64, 2, NULL, NULL, 1, NULL, NULL),
(65, 2, NULL, NULL, NULL, NULL, 1),
(66, 2, NULL, NULL, NULL, NULL, 1),
(67, 2, NULL, NULL, 1, NULL, NULL),
(68, 2, NULL, NULL, 1, NULL, NULL),
(69, 2, NULL, NULL, 1, NULL, NULL),
(70, 2, NULL, NULL, 3, NULL, NULL),
(71, 2, NULL, NULL, 2, NULL, NULL),
(72, 2, NULL, 2, NULL, NULL, NULL),
(73, 2, NULL, 2, NULL, NULL, NULL),
(74, 16, NULL, NULL, 2, NULL, NULL),
(75, 16, NULL, NULL, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comID`);

--
-- Indexes for table `competitors`
--
ALTER TABLE `competitors`
  ADD PRIMARY KEY (`CompID`);

--
-- Indexes for table `duelvote`
--
ALTER TABLE `duelvote`
  ADD PRIMARY KEY (`DuelID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FID`);

--
-- Indexes for table `groupvote`
--
ALTER TABLE `groupvote`
  ADD PRIMARY KEY (`GroupID`);

--
-- Indexes for table `judge`
--
ALTER TABLE `judge`
  ADD PRIMARY KEY (`JID`);

--
-- Indexes for table `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`performanceID`);

--
-- Indexes for table `reguser`
--
ALTER TABLE `reguser`
  ADD PRIMARY KEY (`regUserID`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`resultID`);

--
-- Indexes for table `triovote`
--
ALTER TABLE `triovote`
  ADD PRIMARY KEY (`TrioID`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`VID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `competitors`
--
ALTER TABLE `competitors`
  MODIFY `CompID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `duelvote`
--
ALTER TABLE `duelvote`
  MODIFY `DuelID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `groupvote`
--
ALTER TABLE `groupvote`
  MODIFY `GroupID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `judge`
--
ALTER TABLE `judge`
  MODIFY `JID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `performance`
--
ALTER TABLE `performance`
  MODIFY `performanceID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reguser`
--
ALTER TABLE `reguser`
  MODIFY `regUserID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `resultID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `triovote`
--
ALTER TABLE `triovote`
  MODIFY `TrioID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `VID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
