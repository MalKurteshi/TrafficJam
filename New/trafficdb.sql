-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 09:01 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trafficdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `user_id` int(11) NOT NULL,
  `Location` varchar(150) NOT NULL,
  `Latitude` varchar(20) NOT NULL,
  `Longtitude` varchar(20) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`user_id`, `Location`, `Latitude`, `Longtitude`, `Type`, `Description`) VALUES
(1, 'Asvestochori 570 10, Greece', '40.6416947', '23.025996299999974', 'Accident', '0'),
(2, 'Polichni, Greece', '40.6595291', '22.95561900000007', 'Traffic Jam', '0'),
(3, 'Triandria, Greece', '40.6241099', '22.973462299999937', 'Parking', '0'),
(4, 'Egnatia 572 00, Greece', '40.683333', '23.28333299999997', 'Accident', 'Deadly');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstName`, `lastName`, `userName`, `email`, `pwd`, `creation_date`) VALUES
(1, 'Filan', 'Fisteku', 'filani', 'filanfisteku', '0000', '2018-04-19 23:55:16'),
(2, 'aaa', 'aaa', 'bcd', 'aa', '00144', '2018-04-19 23:55:16'),
(3, 'r', 'a', 'aw', 'aaq', 'aaaa', '2018-04-19 23:55:16'),
(4, 'John', 'Doe', 'johnD', 'jdoe@gmail.com', '0000', '2018-04-19 23:55:16'),
(5, 'Filane', 'Fistekja', 'filanja', 'filja@gmail.com', '0000', '2018-04-19 23:55:16'),
(6, 'bardhe', 'zeza', 'bardha/zeza', 'bzeza@u.com', '0000', '2018-04-19 23:58:20'),
(7, 'Abc', 'Def', 'AbcDef', 'abc@a.b', '$2y$10$78BsQnlk1Oi0v', '2018-04-20 10:14:36'),
(8, 'WWW', 'AAA', 'AWAQ', 'W@Z.COM', '$2y$10$LYS/bsurDeCaa', '2018-04-20 11:04:20'),
(9, 'easfa', 'asfwe', 'fwqawffq', 'asfasf@a.c', '$2y$10$Pls3SMMn.rYUF', '2018-04-20 11:20:10'),
(10, 'aaa', 'aaa', 'filanja', 'asfasf@a.c', '0000', '2018-04-20 12:14:18'),
(11, 'Mihrie', 'Braha', 'miki', 'miki@gmail.com', '123456', '2018-04-20 17:03:14'),
(12, 'Vlerone', 'Islami', 'vlera', 'vlera@gmail.com', '000000', '2018-04-21 15:30:32'),
(13, 'Johnnie', 'Down', 'jdown', 'jdown@a.b', '123456', '2018-04-24 20:36:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
