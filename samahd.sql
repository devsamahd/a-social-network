-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 08:46 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samahd`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentid` int(11) NOT NULL,
  `postid` int(225) NOT NULL,
  `recipid` int(225) NOT NULL,
  `sendid` int(225) NOT NULL,
  `coommenttext` mediumtext NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentid`, `postid`, `recipid`, `sendid`, `coommenttext`, `time`) VALUES
(13, 1, 1, 5, 'hello', ''),
(14, 1, 1, 1, 'hi', ''),
(15, 5, 1, 1, 'hi', ''),
(16, 4, 1, 1, 'hi', '');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `fullname` varchar(10000) NOT NULL,
  `skill1` varchar(1000) NOT NULL,
  `cert1` varchar(1000) NOT NULL,
  `skill2` varchar(1000) NOT NULL,
  `cert2` varchar(1000) NOT NULL,
  `skill3` varchar(1000) NOT NULL,
  `cert3` varchar(1000) NOT NULL,
  `ownerid` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`id`, `fullname`, `skill1`, `cert1`, `skill2`, `cert2`, `skill3`, `cert3`, `ownerid`) VALUES
(1, 'Doctor lee', 'coding', 'certs/IMG2.JPG', '', 'certs/', '', 'certs/', 5),
(2, 'samahd', 'javascript', 'certs/GJNO0746.JPG', '', 'certs/', '', 'certs/', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `mesid` int(11) NOT NULL,
  `senderid` int(225) NOT NULL,
  `recid` int(225) NOT NULL,
  `message` longtext COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`mesid`, `senderid`, `recid`, `message`) VALUES
(23, 1, 2, 'hmm'),
(24, 1, 2, 'hi'),
(25, 1, 2, 'salah hi'),
(26, 3, 1, 'hi'),
(27, 1, 3, 'how'),
(28, 1, 3, 'how are you'),
(29, 1, 3, 'wwwwww'),
(30, 3, 1, 'really'),
(31, 4, 5, 'hi'),
(32, 4, 5, 'vbvnvbn'),
(33, 4, 5, 'hi locci'),
(34, 4, 5, 'how far'),
(35, 5, 4, 'i dey'),
(36, 5, 4, 'hi'),
(37, 4, 5, 'wassup'),
(38, 4, 5, 'ho'),
(39, 4, 5, 'you there'),
(40, 4, 5, 'how are you padding-right:5px;padding-right:5px;padding-right:5px;padding-right:5px;padding-right:5px;padding-right:5px;padding-right:5px;padding-right:5px;padding-right:5px;padding-right:5px;'),
(41, 4, 5, 'sup'),
(42, 5, 4, 'hi'),
(43, 5, 1, 'hi'),
(44, 5, 1, 'wassup'),
(45, 1, 5, 'do you know?'),
(46, 5, 1, 'that?'),
(47, 1, 5, 'mujib is an asshole kikikiki'),
(48, 5, 1, 'bruh ode ni samad yi'),
(49, 1, 2, '😎'),
(50, 1, 2, 'Hi😎'),
(51, 1, 2, '🦓hi');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postid` int(11) NOT NULL,
  `article` longtext NOT NULL,
  `userid` varchar(225) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `date` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postid`, `article`, `userid`, `photo`, `date`) VALUES
(1, 'hi my name is samahd', '1', 'images/IMG_8560.JPG', '25-11-19, 05-11-19'),
(4, '', '1', 'images/CVPS3826.JPG', '10-12-19, 11-12-18'),
(5, 'mujib is an asshole', '1', 'images/IMG_1901[1].JPG', '10-12-19, 11-12-40'),
(6, 'hihihi', '1', 'images/CVPS3826.JPG', '11-12-19, 01-12-28'),
(7, 'noellll!!!', '1', 'images/IMG_0050.JPG', '11-12-19, 03-12-37');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `requestsid` int(11) NOT NULL,
  `recid` int(225) NOT NULL,
  `senderid` int(225) NOT NULL,
  `pending` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`requestsid`, `recid`, `senderid`, `pending`) VALUES
(1, 1, 2, 1),
(2, 1, 3, 1),
(3, 1, 4, 0),
(4, 4, 5, 1),
(5, 5, 6, 0),
(6, 5, 1, 1),
(7, 1, 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tint`
--

CREATE TABLE `tint` (
  `id` int(11) NOT NULL,
  `firstname` varchar(1000) NOT NULL,
  `lastname` varchar(1000) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `date` varchar(1000) NOT NULL,
  `profilepic` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tint`
--

INSERT INTO `tint` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `date`, `profilepic`, `status`) VALUES
(1, 'Abdulsalam', 'Abdulsamad', 'I am samahd', 'samahd626@gmail.com', '552e6a97297c53e592208cf97fbb3b60', '2019-11-25 05:41:51', 'images/GGAL5707.JPG', '2019-12-11 21:33:32'),
(2, 'mo', 'sallah', 'mo sallah', 'mo@sallah.com', 'a7c9ba98e9d61eb377caf62834ef661c', '2019-11-25 06:07:50', 'images/img1.jpg', ''),
(3, 'sanahd', 'salam', 'ccc', 'o@gmail.com', '552e6a97297c53e592208cf97fbb3b60', '2019-11-30 10:06:49', 'images/img1.jpg', ''),
(5, 'Dr', 'chilling', 'dr', 'd@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2019-12-03 01:13:35', 'images/img1.jpg', ''),
(7, 'samahd', 'mmm', 'juice wrld', 'j@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2019-12-11 08:02:38', 'images/img1.png', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentid`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mesid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`requestsid`);

--
-- Indexes for table `tint`
--
ALTER TABLE `tint`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `mesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `requestsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tint`
--
ALTER TABLE `tint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
