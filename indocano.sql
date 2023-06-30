-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 01:36 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectse`
--

-- --------------------------------------------------------

--
-- Table structure for table `msprogress`
--

CREATE TABLE `msprogress` (
  `progressid` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `provinceid` int(11) DEFAULT NULL,
  `quiz1` int(11) DEFAULT NULL,
  `quiz2` int(11) DEFAULT NULL,
  `quiz3` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msprogress`
--

INSERT INTO `msprogress` (`progressid`, `userid`, `provinceid`, `quiz1`, `quiz2`, `quiz3`) VALUES
(1, 2, 1, 1, 1, 0),
(5, 1, 1, 1, 0, 0),
(6, 1, 2, 0, 0, 0),
(7, 3, 1, 0, 0, 0),
(8, 4, 1, 0, 0, 0),
(14, 5, 1, 0, 0, 0),
(15, 5, 2, 0, 0, 0),
(23, 14, 1, 1, 0, 0),
(24, 14, 2, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `msprovince`
--

CREATE TABLE `msprovince` (
  `provinceid` int(11) NOT NULL,
  `provincename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msprovince`
--

INSERT INTO `msprovince` (`provinceid`, `provincename`) VALUES
(1, 'Bali'),
(2, 'Jawa Tengah');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `userid` int(11) NOT NULL,
  `firstName` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`userid`, `firstName`, `lastName`, `username`, `email`, `password`, `dob`) VALUES
(1, 'Jonathan', 'Gunawan', 'johovenn', 'jonathan18@gmail.com', 'jojo123', '2003-10-18'),
(2, 'Jeremy', 'Pranata', 'shawnny', 'shawn@gmail.com', 'shawn123', '2002-11-14'),
(3, 'Frederico', 'Akira', 'fred', 'fredericoa@gmail.com', 'fred123', '2002-11-20'),
(4, 'Darrell', 'Wijaya', 'darr05', 'darrellw@gmail.com', 'dar123', '2003-12-17'),
(5, 'Chen', 'Hao', 'chen11', 'chen@gmail.com', 'chen123', '2003-02-12'),
(14, 'Vincent', 'Tan', 'vincent21', 'vt21@gmail.com', 'vt123', '2003-10-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msprogress`
--
ALTER TABLE `msprogress`
  ADD PRIMARY KEY (`progressid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `provinceid` (`provinceid`);

--
-- Indexes for table `msprovince`
--
ALTER TABLE `msprovince`
  ADD PRIMARY KEY (`provinceid`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msprogress`
--
ALTER TABLE `msprogress`
  MODIFY `progressid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `msprovince`
--
ALTER TABLE `msprovince`
  MODIFY `provinceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `msprogress`
--
ALTER TABLE `msprogress`
  ADD CONSTRAINT `msprogress_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `userdata` (`userid`),
  ADD CONSTRAINT `msprogress_ibfk_2` FOREIGN KEY (`provinceid`) REFERENCES `msprovince` (`provinceid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
