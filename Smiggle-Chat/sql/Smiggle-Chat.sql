-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 28, 2016 at 01:30 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Smiggle-Chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `messageID` int(11) NOT NULL,
  `messageUser` varchar(200) NOT NULL,
  `messageRecipt` varchar(200) NOT NULL,
  `messageText` text NOT NULL,
  `messageDate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`messageID`, `messageUser`, `messageRecipt`, `messageText`, `messageDate`) VALUES
(1, 'mphomashigo2@gmail.com', 'mpho@gmail.com', 'Testing message number1 ', 'today'),
(2, 'mphomashigo2@gmail.com', 'mpho@gmail.com', 'Testing message number 3 ', 'today'),
(3, 'mpho@gmail.com', 'mphomashigo2@gmail.com', 'Messsage form recipt', '1212'),
(4, 'lerato@gmail.com', 'mphomashigo2@gmail.com', 'lerato@gmail.com text 1 ', '12'),
(5, 'lerato@gmail.com', 'mphomashigo2@gmail.com', 'lerato@gmail.com text 1 ', '12'),
(18, 'mphomashigo2@gmail.com', 'mpho@gmail.com', 'dfgdf', 'Thursday 28th of April 2016 11:04:12 AM'),
(19, 'mphomashigo2@gmail.com', 'lerato@gmail.com', 'ewrwer', 'Thursday 28th of April 2016 11:05:25 AM'),
(20, 'mphomashigo2@gmail.com', 'lerato@gmail.com', 'egsdgfd', 'Thursday 28th of April 2016 11:05:28 AM'),
(21, 'mphomashigo2@gmail.com', 'benfisious@gmail.com', 'ek se', 'Thursday 28th of April 2016 11:06:06 AM'),
(22, 'mphomashigo2@gmail.com', 'lerato@gmail.com', 'Testing message ', 'Thursday 28th of April 2016 11:31:01 AM'),
(23, 'benfisious@gmail.com', 'mphomashigo2@gmail.com', 'Hola', 'Thursday 28th of April 2016 11:49:25 AM'),
(24, 'mpho@gmail.com', 'casta@gmail.com', 'Helo Ma', 'Thursday 28th of April 2016 11:57:19 AM'),
(25, 'casta@gmail.com', 'mpho@gmail.com', 'hi', 'Thursday 28th of April 2016 11:57:37 AM'),
(26, 'mpho@gmail.com', 'benfisious@gmail.com', 'Hi', 'Thursday 28th of April 2016 12:37:01 PM'),
(27, 'mars@gmail.com', 'mphomashigo2@gmail.com', 'Hola\r\n', 'Thursday 28th of April 2016 12:38:49 PM'),
(28, 'benfisious@gmail.com', 'mars@gmail.com', 'ek se', 'Thursday 28th of April 2016 01:16:46 PM');

-- --------------------------------------------------------

--
-- Table structure for table `User_tbl`
--

CREATE TABLE `User_tbl` (
  `UserID` int(11) NOT NULL,
  `UserTitle` varchar(200) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `UserLastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `UserPassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User_tbl`
--

INSERT INTO `User_tbl` (`UserID`, `UserTitle`, `UserName`, `UserLastname`, `email`, `UserPassword`) VALUES
(1, 'MR', 'Mpho', 'Mashigo', 'mphomashigo2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Mr', 'Ben', 'Lephale', 'benfisious@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'Miss', 'Lira', 'Lesuta', '1erato@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'Mrs', 'Casta', 'Mash', 'casta@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'Miss', 'Lira2', 'Moeketsi', 'lerato@gmail.com', '123456'),
(6, 'Mr', 'Mpho', 'Mash', 'mpho@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'Mr', 'Kim', 'Owen', 'kim@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'Mr', 'Marribe', 'Modia', 'mars@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`messageID`);

--
-- Indexes for table `User_tbl`
--
ALTER TABLE `User_tbl`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `User_tbl`
--
ALTER TABLE `User_tbl`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
