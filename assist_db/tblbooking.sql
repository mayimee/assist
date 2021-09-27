-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 27, 2021 at 07:42 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `odmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `ID` int(10) NOT NULL,
  `BookingID` int(10) DEFAULT NULL,
  `ServiceID` int(10) DEFAULT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `EventDate` varchar(200) DEFAULT NULL,
  `EventStartingtime` varchar(200) DEFAULT NULL,
  `EventEndingtime` varchar(200) DEFAULT NULL,
  `VenueAddress` mediumtext,
  `EventType` varchar(200) DEFAULT NULL,
  `AdditionalInformation` mediumtext,
  `BookingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Remark` varchar(200) DEFAULT NULL,
  `Status` varchar(200) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`ID`, `BookingID`, `ServiceID`, `Name`, `MobileNumber`, `Email`, `EventDate`, `EventStartingtime`, `EventEndingtime`, `VenueAddress`, `EventType`, `AdditionalInformation`, `BookingDate`, `Remark`, `Status`, `UpdationDate`) VALUES
(11, 870575981, 3, 'Grace ', 4562, 'df@gmail.com', '2021-09-29', '11 a.m', '1 p.m', 'fgfg', 'Charity', 'fgfgh', '2021-09-26 15:35:27', 'approved', 'Approved', '2021-09-27 02:36:06'),
(12, 536191904, 3, 'ciel', 4546, 'dfd@gmail.com', '2021-10-06', '12 p.m', '11 a.m', 'hfghh', 'Birthday Party', 'ggbnn', '2021-09-26 15:52:46', 'Cancelled', 'Cancelled', '2021-09-27 04:42:32'),
(13, 708031991, 1, 'Didi', 949171168, 'didi@gmail.com', '2021-09-30', '8 a.m', '1 p.m', 'Cebu', 'Anniversary', 'Thanks', '2021-09-27 02:45:44', 'approved', 'Approved', '2021-09-27 02:48:03'),
(14, 847028932, 1, 'Marielle', 656232, 'm@yahoo.com', '2021-09-28', '11 a.m', '4 p.m', 'dfcxvgffdb', 'Charity', 'dgvbvbfddfb', '2021-09-27 03:17:17', NULL, NULL, NULL),
(15, 357959418, 6, 'JM', 894366, 'jm@yahoo.com', '2021-10-02', '1 p.m', NULL, 'QC', NULL, 'cvbvbvb', '2021-09-27 06:15:22', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ServiceID` (`ServiceID`),
  ADD KEY `EventType` (`EventType`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
