-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 02:51 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logint`
--

-- --------------------------------------------------------

--
-- Table structure for table `img_display`
--

CREATE TABLE `img_display` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `artist` varchar(200) NOT NULL,
  `type` varchar(50) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `img_display`
--

INSERT INTO `img_display` (`id`, `name`, `artist`, `type`, `link`) VALUES
(1, 'Bass Rani', 'Nucleya', 'album', 'http://localhost/new%20yeah/mp3/1.mp3'),
(2, 'Eminem', '', 'artist', ''),
(3, 'Selena Gomez', '', 'artist', ''),
(4, 'Atif Aslam', '', 'artist', ''),
(5, 'Arijit Singh', '', 'artist', ''),
(6, 'Rihanna', '', 'artist', ''),
(7, 'Divide', 'Ed Sheeran', 'album', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(12) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`, `email`) VALUES
(56459, 'saksham', '123456', 'saksham.mathur25@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img_display`
--
ALTER TABLE `img_display`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `img_display`
--
ALTER TABLE `img_display`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56460;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
