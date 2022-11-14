-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 06:25 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_bus_ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_ticket`
--

CREATE TABLE `booking_ticket` (
  `tid` int(11) NOT NULL,
  `busoperator` text NOT NULL,
  `route` text NOT NULL,
  `departuretime` text NOT NULL,
  `arrivaltime` text NOT NULL,
  `seatno` text NOT NULL,
  `totalprice` text NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_ticket`
--

INSERT INTO `booking_ticket` (`tid`, `busoperator`, `route`, `departuretime`, `arrivaltime`, `seatno`, `totalprice`, `uid`) VALUES
(1, 'Shwe Sin Set Kyar', 'Yangon-Mandalay', '07:00 AM', '06:00 PM', '3', 'MMK 25,000', 1),
(2, 'Mandalar Min', 'Yangon-Mandalay', '07:30 AM', '06:30 PM', '2', 'MMK 33,000', 1),
(7, 'Aung Thein Peik', 'Yangon-Taunggyi', '07:00 AM', '02:00 AM', '2', 'MMK 25000', 6);

-- --------------------------------------------------------

--
-- Table structure for table `bus_information`
--

CREATE TABLE `bus_information` (
  `busid` int(11) NOT NULL,
  `busoperator` text NOT NULL,
  `fromplace` text NOT NULL,
  `toplace` text NOT NULL,
  `departuretime` text NOT NULL,
  `arrivaltime` text NOT NULL,
  `price` int(11) NOT NULL,
  `busimage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus_information`
--

INSERT INTO `bus_information` (`busid`, `busoperator`, `fromplace`, `toplace`, `departuretime`, `arrivaltime`, `price`, `busimage`) VALUES
(0, '', '', '', '', '', 0, ''),
(1, 'Shwe Sin Set Kyar', 'Yangon', 'Mandalay', '07:00 AM', '06:00 PM', 25000, ''),
(2, 'Mandalar Min', 'Yangon', 'Mandalay', '07:30 AM', '06:30 PM', 33000, ''),
(3, 'Lumbini', 'Yangon', 'MawLamyine', '07:30 AM', '11:00 PM', 25000, ''),
(4, 'Shwe Sin Set Kyar', 'Yangon', 'Mandalay', '08:00 AM', '07:00 PM', 20000, ''),
(5, 'Academy Express', 'Yangon', 'Mawlamyine', '08:00 AM', '06:00 PM', 22000, ''),
(6, 'Khaing Mandalay Express', 'Yangon', 'Mandalay', '08:00 AM', '08:00 PM', 30000, ''),
(7, 'Mandalar Minn', 'Yangon ', 'Mandalay', '08:00 AM', '04:00 PM', 23000, ''),
(8, 'Academy Express', 'Yangon', 'Mandalay', '08:30 AM', '04:30 PM', 27000, ''),
(9, 'Golden Mandalay Express', 'Yangon', 'Bagan', '08:30 AM', '05:30 PM', 25000, ''),
(10, 'GI Express', 'Yangon', 'Bagan', '09:00 AM', '06:00 PM', 25000, ''),
(11, 'Boss Express', 'Yangon', 'Mandalay', '09:00 AM', '06:00 PM', 30000, ''),
(12, 'Maw Kon Thit', 'Naypyitaw', 'Yangon', '08:00 AM', '06:00 PM', 20000, ''),
(13, 'Shwe Mandalar', 'Naypyitaw', 'Yangon', '08:45 AM', '02:00 PM', 18000, ''),
(14, 'Shwe Mandalar', 'Naypyitaw', 'Bagan', '11:00 AM', '06:30 PM', 18000, ''),
(15, 'Mandalar Min', 'Naypyitaw', 'Yangon', '11:00 AM', '04:00 PM', 20000, ''),
(16, 'Myat Mandalar Htun', 'Naypyitaw', 'Yangon', '02:00 AM', '06:00 PM', 18000, ''),
(17, 'Shwe Sin Set Kyar', 'Naypyitaw', 'Yangon', '02:00 AM', '06:00 PM', 17000, ''),
(18, 'Shwe Sin Set Kyar', 'Naypyitaw', 'Yangon', '02:00 PM', '06:00 AM', 17000, ''),
(19, 'Shwe Sin Set Kyar', 'Naypyitaw', 'Bagan', '08:30 AM', '04:30 PM', 23000, ''),
(20, 'Maw Kon Thit', 'Naypyitaw', 'Yangon', '09:00 AM', '06:00 PM', 25000, ''),
(21, 'Shwe Sin Set Kyar', 'Naypyitaw', 'Yangon', '10:00 AM', '05:00 PM', 23000, ''),
(22, 'Myat Mandalar Htun', 'Naypyitaw', 'Mandalay', '11:00 AM', '03:30 PM', 23000, ''),
(23, 'Mandalar Min', 'Naypyitaw', 'Mandalay', '02:00 PM', '09:00 PM', 25000, ''),
(24, 'Shwe Sin Set Kyar', 'Mandalay', 'Yangon', '07:00 AM', '02:00 PM', 23000, ''),
(25, 'Shwe Sin Set Kyar', 'Mandalay', 'Yangon', '07:30 AM', '02:30 PM', 28000, ''),
(26, 'Myat Mandalar Htun', 'Mandalay', 'Yangon', '08:00 AM', '02:00 PM', 23000, ''),
(27, 'Mandalar Min', 'Mandalay', 'Yangon', '08:30 AM', '03:00 PM', 23000, ''),
(28, 'Shwe Sin Set Kyar', 'Mandalay', 'Yangon', '09:00 AM', '03:00 PM', 21000, ''),
(29, 'Shwe Sin Set Kyar', 'Mandalay', 'Yangon', '09:00 AM', '03:30 PM', 24000, ''),
(30, 'Boss Express', 'Mandalay', 'Yangon', '09:30 AM', '04:00 PM', 18000, ''),
(31, 'Mandalar Min', 'Mandalay', 'Yangon', '10:00 AM', '05:00 PM', 20000, ''),
(32, 'Mandalar Min', 'Mandalay', 'Yangon', '10:30 AM', '05:00 PM', 20000, ''),
(33, 'Maw Kon Thit', 'Mandalay', 'Yangon', '12:00 PM', '05:00 PM', 18000, ''),
(34, 'Aung Thein Peik', 'Yangon', 'Taunggyi', '07:00 AM', '02:00 AM', 25000, ''),
(35, 'Aung Thein Peik', 'Yangon', 'Taunggyi', '09:00 AM', '08:00 AM', 33000, ''),
(36, 'Lumbini', 'Yangon', 'Taunggyi', '10:00 AM', '03:30 AM', 28000, ''),
(37, 'Shwe Taung Yoe', 'Taunggyi', 'Yangon', '02:00 PM', '06:30 AM', 35000, ''),
(38, 'Shwe Taung Yoe', 'Taunggyi', 'Yangon', '02:30 PM', '07:00 AM', 35000, ''),
(39, 'Shwe Taung Yoe', 'Taunggyi', 'Bagan', '04:00 PM', '05:00 AM', 30000, ''),
(40, 'Mandalar Min', 'Taunggyi', 'Yangon', '06:00 PM', '05:00 AM', 29000, ''),
(41, 'Lumbini', 'Taunggyi', 'Mandalay', '04:00 PM', '05:00 AM', 30000, ''),
(42, 'Tun Ayar', 'Bagan', 'Mandalay', '06:30 AM', '02:00 PM', 18000, ''),
(43, 'Tun Ayar', 'Bagan', 'Mandalay', '07:00 AM', '03:00 PM', 18000, ''),
(44, 'Shwe Mandalar', 'Bagan', 'Yangon', '09:00 AM', '03:30 PM', 21000, ''),
(45, 'Shwe Sin Set Kyar 2', 'Bagan', 'Mandalay', '10:00 AM', '04:30 PM', 23000, ''),
(46, 'Lumbini', 'Bagan', 'Naypyitaw', '03:00 PM', '06:30 PM', 17000, ''),
(47, 'Mandalar Min', 'Bagan', 'Taunggyi', '05:00 PM', '06:30 AM', 25000, ''),
(48, 'Myat Mandalar', 'Mawlamyine', 'Yangon', '06:30 AM', '12:00 PM', 18000, ''),
(49, 'Mandalar Min', 'Mawlamyine', 'Yangon', '07:00 AM', '12:30 PM', 18000, ''),
(50, 'Golden Mandalay', 'Mawlamyine', 'Mandalay', '08:00 AM', '02:30 PM', 22000, ''),
(51, 'Golden Mandalay', 'Mawlamyine', 'Mandalay', '08:30 AM', '03:00 PM', 23000, ''),
(52, 'New Generation', 'Mawlamyine', 'Bagan', '09:00 AM', '04:30 PM', 23000, ''),
(53, 'Myat Mandalar', 'Mawlamyine', 'Naypyitaw', '09:30 AM', '04:30 PM', 30000, ''),
(54, 'Shwe Sin Set Kyar 2', 'Mawlamyine', 'Naypyitaw', '10:00 AM', '05:30 PM', 27000, ''),
(55, 'Shwe Sin Set Kyar ', 'Mawlamyine', 'Taunggyi', '05:30 PM', '12:00 PM', 32000, '');

-- --------------------------------------------------------

--
-- Table structure for table `bus_seats`
--

CREATE TABLE `bus_seats` (
  `sid` int(11) NOT NULL,
  `seatno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus_seats`
--

INSERT INTO `bus_seats` (`sid`, `seatno`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30),
(31, 31),
(32, 32),
(33, 33),
(34, 34),
(35, 35),
(36, 36),
(37, 37),
(38, 38),
(39, 39),
(40, 40),
(41, 41),
(42, 42),
(43, 43),
(44, 44);

-- --------------------------------------------------------

--
-- Table structure for table `buy_ticket`
--

CREATE TABLE `buy_ticket` (
  `tid` int(11) NOT NULL,
  `busoperator` text NOT NULL,
  `route` text NOT NULL,
  `departuretime` text NOT NULL,
  `arrivaltime` text NOT NULL,
  `seatno` text NOT NULL,
  `totalprice` text NOT NULL,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buy_ticket`
--

INSERT INTO `buy_ticket` (`tid`, `busoperator`, `route`, `departuretime`, `arrivaltime`, `seatno`, `totalprice`, `uid`, `pid`) VALUES
(1, 'Shwe Sin Set Kyar', 'Yangon-Mandalay', '07:00 AM', '06:00 PM', '8', 'MMK 25,000', 1, 1),
(2, 'Shwe Sin Set Kyar', 'Yangon-Mandalay', '07:00 AM', '06:00 PM', '43', '25000', 1, 1),
(3, 'Aung Thein Peik', 'Yangon-Taunggyi', '07:00 AM', '02:00 AM', '11', 'MMK 25000', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pid` int(11) NOT NULL,
  `cardholdername` text NOT NULL,
  `cardnumber` text NOT NULL,
  `expiration` text NOT NULL,
  `cvv` text NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pid`, `cardholdername`, `cardnumber`, `expiration`, `cvv`, `uid`) VALUES
(1, 'Lucia', '4000 1223 5678 9010', '15/20', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `rid` int(11) NOT NULL,
  `report_reasons` text NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`rid`, `report_reasons`, `uid`) VALUES
(1, 'This website is amazing and user friendly.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `uid` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`uid`, `username`, `email`, `password`) VALUES
(1, 'user12', 'user@gmail.com', 'asd'),
(2, 'user', 'user@gamil.com', 'user123'),
(6, 'customer', 'customer@gmail.com', 'asd'),
(9, 'kaunghtet', 'kaunghtet12@gmail.com', 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_ticket`
--
ALTER TABLE `booking_ticket`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `bus_information`
--
ALTER TABLE `bus_information`
  ADD PRIMARY KEY (`busid`);

--
-- Indexes for table `bus_seats`
--
ALTER TABLE `bus_seats`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `buy_ticket`
--
ALTER TABLE `buy_ticket`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_ticket`
--
ALTER TABLE `booking_ticket`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bus_seats`
--
ALTER TABLE `bus_seats`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `buy_ticket`
--
ALTER TABLE `buy_ticket`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
