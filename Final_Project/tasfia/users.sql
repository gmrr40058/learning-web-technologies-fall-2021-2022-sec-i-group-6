-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 05:54 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `donat`
--

CREATE TABLE `donat` (
  `ID` int(20) NOT NULL,
  `name` varchar(220) NOT NULL,
  `tk` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donat`
--

INSERT INTO `donat` (`ID`, `name`, `tk`) VALUES
(1, '', 500),
(2, '', 200);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `username`, `password`, `email`, `type`) VALUES
(24, 'tushar', '123', 'dewapebye@uma3.be', 'user'),
(25, 'chaity', '1234', 'chaity04@gmail.com', 'user'),
(26, 'tushar', '123456', 'dewapebye@uma3.be', 'user'),
(27, 'tushar', '1234', 'chaity04@gmail.com', 'user'),
(28, 'tushar', '123', 'chaity04@gmail.com', 'user'),
(29, 'tushar', '123456', 'chaity04@gmail.com', 'user'),
(30, 'tushar', '123456', 'risul0408@gmail.com', 'user'),
(31, 'saiful', '123456', 'hasankabir223344@gmail.com', 'user'),
(32, 'tushar', '123456', 'hasankabir223344@gmail.com', 'user'),
(33, 'tushar', '12312', 'chaity04@gmail.com', 'user'),
(34, 'tushar', '123', 'hasankabir223344@gmail.com', 'user'),
(35, 'tushar', '123', 'hasankabir223344@gmail.com', 'user'),
(36, 'tushar', '123456', 'risul0408@gmail.com', 'user'),
(37, 'tushar', '123', 'risul0408@gmail.com', 'user'),
(38, 'tushar', '123', 'chaity04@gmail.com', 'user'),
(39, 'doner1', '1', 'doner1@gmail.com', 'donar'),
(40, 'doner1', '1', 'doner1@gmail.com', 'donar'),
(41, 'doner2', '2', 'd2@gmail.com', 'donar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donat`
--
ALTER TABLE `donat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donat`
--
ALTER TABLE `donat`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
