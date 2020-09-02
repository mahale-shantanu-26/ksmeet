-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 02, 2020 at 05:11 PM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ks_meet`
--

-- --------------------------------------------------------

--
-- Table structure for table `meet`
--

CREATE TABLE `meet` (
  `meetid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `to_meet` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL,
  `start_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meet`
--

INSERT INTO `meet` (`meetid`, `title`, `to_meet`, `userid`, `start_datetime`, `end_datetime`) VALUES
(2, 'sdfbg', 'annie', 3, '2020-09-01 20:07:06', '2020-09-01 20:07:06'),
(5, 'SDF', 'FXCGHJV', 1, '2020-09-19 00:50:00', '2020-09-19 00:50:00'),
(6, 'SDF', 'FXCGHJV', 1, '2020-09-20 00:50:00', '2020-09-20 00:50:00'),
(7, 'SDF', 'sdfghj', 1, '2020-09-22 01:13:00', '2020-09-22 01:13:00'),
(12, 'SDF', 'FXCGHJV', 1, '2020-09-12 15:22:00', '2020-09-12 04:22:00'),
(13, 'SDF2', 'wertyu', 1, '2020-11-08 16:40:00', '2020-11-08 05:40:00'),
(14, 'as', 'julia', 1, '2020-09-13 16:49:00', '2020-09-13 05:49:00'),
(16, 'Prelims', 'Invigilators', 4, '2020-09-04 18:00:00', '2020-09-04 07:00:00'),
(21, 'Discussing projects', 'Kraftshala', 4, '2020-09-04 19:00:00', '2020-09-04 08:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meet`
--
ALTER TABLE `meet`
  ADD PRIMARY KEY (`meetid`),
  ADD KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meet`
--
ALTER TABLE `meet`
  MODIFY `meetid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `meet`
--
ALTER TABLE `meet`
  ADD CONSTRAINT `meet_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
