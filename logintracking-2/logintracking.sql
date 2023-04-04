-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 01:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logintracking`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `userName`, `password`, `email`) VALUES
(1, 'admin', 'Test@123', 'admin@mail.com'),
(2, 'anuj', 'Demo@123', 'anuj@mail.com'),
(3, 'raji', 'test', 'raji@mail.com'),
(5, 'sample', 'sample123', 'sample@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `sessionid` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `logoutTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userId`, `sessionid`, `username`, `userIp`, `loginTime`, `logoutTime`) VALUES
(14, 2, 976, 'anuj', 0x3a3a31, '2023-04-03 10:11:49', '15:41:53'),
(15, 1, 900, 'admin', 0x3a3a31, '2023-04-04 05:02:02', '10:32:11'),
(16, 2, 480, 'anuj', 0x3a3a31, '2023-04-04 06:56:13', '13:06:38'),
(17, 1, 231, 'admin', 0x3a3a31, '2023-04-04 07:36:47', '13:11:29'),
(18, 2, 742, 'anuj', 0x3a3a31, '2023-04-04 07:41:43', '13:12:13'),
(19, 2, 333, 'anuj', 0x3a3a31, '2023-04-04 07:42:24', '13:21:28'),
(20, 2, 803, 'anuj', 0x3a3a31, '2023-04-04 07:51:35', '13:22:47'),
(22, 1, 960, 'admin', 0x3a3a31, '2023-04-04 07:56:34', '13:31:52'),
(23, 2, 922, 'anuj', 0x3a3a31, '2023-04-04 08:24:27', '13:54:42'),
(24, 2, 566, 'anuj', 0x3a3a31, '2023-04-04 08:24:44', '13:57:04'),
(26, 1, 783, 'admin', 0x3a3a31, '2023-04-04 09:45:47', '15:20:27'),
(28, 2, 804, 'anuj', 0x3a3a31, '2023-04-04 10:21:25', '15:52:57'),
(29, 1, 69, 'admin', 0x3a3a31, '2023-04-04 10:23:20', '15:53:44'),
(30, 1, 141, 'admin', 0x3a3a31, '2023-04-04 10:25:12', '16:00:00'),
(31, 1, 817, 'admin', 0x3a3a31, '2023-04-04 10:30:20', '16:33:35'),
(32, 2, 35, 'anuj', 0x3a3a31, '2023-04-04 11:03:52', '16:40:40'),
(33, 2, 6, 'anuj', 0x3a3a31, '2023-04-04 11:10:43', '16:42:42'),
(34, 5, 250, 'sample', 0x3a3a31, '2023-04-04 11:27:35', '16:58:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
