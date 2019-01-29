-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2019 at 07:06 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `Image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `user_id`, `created_at`, `Image_path`) VALUES
(8, 'anubhav', 'This article for anubhav only....', 1, '2018-07-03 08:34:24', ''),
(10, 'article3', 'article body\r\n', 1, '2018-07-04 08:34:24', ''),
(11, 'article body', 'article body', 1, '2018-07-04 04:34:24', ''),
(12, 'article body', 'Article ', 1, '2018-07-05 06:34:24', ''),
(13, 'kala', 'sasadsad', 1, '2018-07-06 12:34:24', ''),
(14, 'Rahul', 'dsa', 1, '2018-06-06 07:34:24', ''),
(15, 'Kalakar', 'sadczxcd', 1, '2018-04-06 10:34:24', ''),
(16, 'Desi_Kalakar', 'New', 1, '2018-07-06 08:34:24', ''),
(17, 'new2', 'New article is best', 1, '2018-07-06 08:34:24', ''),
(18, 'test', 'test Body', 1, '2018-03-09 01:34:24', ''),
(19, 'anubhav', 'This article is created by the nubhav ', 0, '2018-10-27 08:26:16', ''),
(20, 'deepak', 'fsdfsdafadsfadsfdsfadsfdsafsdf', 0, '2018-10-27 08:31:36', ''),
(21, 'chunit', 'this article is created by the chunit because chunit like the kid.', 0, '2018-10-27 08:42:01', ''),
(22, 'chaina', 'this article are created for the chanease character. that we are creaed ', 0, '2018-10-27 09:08:32', ''),
(23, 'Japan', 'Japan article', 0, '2018-10-27 09:12:58', 'http://localhost/Codeigniter/uploads/cozy-thanksgiving-wallpaper-140.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pword` varchar(255) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `pword`, `fname`, `lname`) VALUES
(1, 'admin', 'admin', 'rahul', 'kumar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
