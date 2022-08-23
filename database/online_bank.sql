-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 12:00 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(50) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Name`, `Email`, `Password`) VALUES
(1, 'admin01', 'admin@mail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `Sl_no` int(50) NOT NULL,
  `Account_Number` varchar(50) NOT NULL,
  `Transaction_Type` varchar(50) NOT NULL,
  `Amount` bigint(255) NOT NULL,
  `Receiver` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`Sl_no`, `Account_Number`, `Transaction_Type`, `Amount`, `Receiver`) VALUES
(2, '01', 'Diposit', 10, ''),
(4, '02', 'Diposit', 100, '02'),
(5, '02', 'Send Money', 10, '01'),
(6, '02', 'Send Money', 10, '01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` bigint(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NID` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `Permanent_Add` varchar(10) NOT NULL,
  `Temporary_Add` varchar(20) NOT NULL,
  `Area_Code` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Account_Type` varchar(50) NOT NULL,
  `Account_Number` varchar(50) NOT NULL,
  `Balance` bigint(255) NOT NULL,
  `Picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Name`, `Phone`, `Email`, `NID`, `dob`, `Permanent_Add`, `Temporary_Add`, `Area_Code`, `Password`, `Gender`, `Account_Type`, `Account_Number`, `Balance`, `Picture`) VALUES
(16, 'user1', '+8801887687069', 'user@mail.com', '01', '2022-08-01', 'O.R Nizam', 'O.R Nizam', '4203', '123', 'Male', 'Saving', '01', 110, ''),
(18, 'user2', '+8801887687069', 'user2@gmail.com', '02', '2022-08-24', 'O.R Nizam', 'O.R Nizam', '4203', '123', 'Male', 'Saving', '02', 190, ''),
(24, 'user3', '+8801887687069', 'user3@gmail.com', '03', '2022-08-16', 'O.R Nizam', 'O.R Nizam', '4203', '123', 'Female', 'Current', '03', 0, '../asset/picture/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`Sl_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `Sl_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
