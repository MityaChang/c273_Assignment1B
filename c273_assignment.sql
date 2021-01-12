-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 03:17 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c273_assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE `entry` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `exercise` varchar(40) NOT NULL,
  `duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`id`, `username`, `exercise`, `duration`) VALUES
(1, 'JohnDoe', 'Run', 66),
(4, 'JohnDoe', 'Cycle', 20),
(5, 'JohnDoe', 'Run', 11),
(6, 'JohnDoe', 'Walk', 31),
(7, 'JohnDoe', 'Cycle', 33),
(8, 'JohnDoe', 'Walk', 50),
(9, 'JohnDoe', 'Walk', 36),
(10, 'JohnDoe', 'Cycle', 29),
(11, 'JohnDoe', 'Walk', 44),
(12, 'JohnDoe', 'Cycle', 19),
(13, 'JohnDoe', 'Run', 9),
(14, 'Mary', 'Walk', 91),
(15, 'Mary', 'Run', 50),
(16, 'dany', 'Run', 120),
(17, 'dany', 'Walk', 67),
(18, 'dany', 'Run', 86),
(19, 'dany', 'Cycle', 120),
(20, 'dany', 'Walk', 5),
(21, 'dany', 'Run', 12),
(22, 'dany', 'Cycle', 16);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `weight` int(11) NOT NULL,
  `height` decimal(10,0) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `activeLevel` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `gender`, `weight`, `height`, `dateOfBirth`, `activeLevel`) VALUES
(1, 'JohnDoe', 'johndoe@gmail.com', 'b9921b6ebaac9174f01ea9e2fe3df9f95010410b', 'Male', 80, '2', '1996-03-12', 'moderate'),
(2, 'Mary', 'mary@gmail.com', '94f85995c7492eec546c321821aa4beca9a3e2b1', 'Female', 60, '2', '2002-12-25', 'sedentary'),
(3, 'Ben Dover', 'bendover@gmail.com', 'affaea157382584ad318dd38aeb2dc797a79c119', 'Male', 100, '2', '1970-07-11', 'active'),
(4, 'dany', '123452a@hotmail.com', '601f1889667efaebb33b8c12572835da3f027f78', 'Male', 87, '2', '2021-01-05', 'moderate');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entry`
--
ALTER TABLE `entry`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `entry_id_uindex` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_username_uindex` (`username`),
  ADD UNIQUE KEY `user_id_uindex` (`id`),
  ADD UNIQUE KEY `user_email_uindex` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entry`
--
ALTER TABLE `entry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
