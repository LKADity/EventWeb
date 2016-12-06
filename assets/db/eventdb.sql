-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2016 at 05:07 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `datawebsite`
--

CREATE TABLE `datawebsite` (
  `id` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `date` date NOT NULL,
  `place` varchar(50) NOT NULL,
  `about us` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datawebsite`
--

INSERT INTO `datawebsite` (`id`, `year`, `date`, `place`, `about us`) VALUES
(1, 2016, '2017-01-01', 'Nama Tempat', 'Tentang Kita');

-- --------------------------------------------------------

--
-- Table structure for table `performer`
--

CREATE TABLE `performer` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `pic1` varchar(255) NOT NULL,
  `pic2` varchar(255) NOT NULL,
  `pic3` varchar(255) NOT NULL,
  `pic4` varchar(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stand`
--

CREATE TABLE `stand` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `pic1` varchar(30) NOT NULL,
  `pic2` varchar(30) NOT NULL,
  `owner` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticketing`
--

CREATE TABLE `ticketing` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticketing`
--

INSERT INTO `ticketing` (`id`, `username`, `amount`, `status`) VALUES
(4, 'aditya', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `ktp` varchar(20) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `poss` varchar(5) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `gender`, `date`, `email`, `ktp`, `contact`, `address`, `poss`, `role`) VALUES
(1, 'aditya', '$2y$10$fhkgCZh/mIsV9O4wrJIcuuztLN7QlxLtwzDf5oC8R5lEklhwE/zXW', 'Adit', 'L', '1997-04-09', 'zzz@yahoo.com', '123345567789', 'LOL', 'Tes', 'Tes', 'user'),
(2, 'admin', 'admin', 'admin', 'L', '2016-12-01', 'admin@event.com', 'admin', 'admin', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datawebsite`
--
ALTER TABLE `datawebsite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `performer`
--
ALTER TABLE `performer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stand`
--
ALTER TABLE `stand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticketing`
--
ALTER TABLE `ticketing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datawebsite`
--
ALTER TABLE `datawebsite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `performer`
--
ALTER TABLE `performer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `stand`
--
ALTER TABLE `stand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `ticketing`
--
ALTER TABLE `ticketing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
