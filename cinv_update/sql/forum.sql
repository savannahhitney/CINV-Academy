-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1

-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myforum_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `post` text NOT NULL,
  `date` datetime NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `comments` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `post`, `date`, `parent_id`, `comments`) VALUES
(1, 1, 'This is my first post', '2023-02-06 16:30:16', 0, 0),
(2, 1, 'this is my second post', '2023-02-06 16:49:15', 0, 0),
(3, 1, 'this is my third post', '2023-02-06 16:50:19', 0, 0),
(4, 1, 'this is my fourth post', '2023-02-06 17:07:56', 0, 1),
(5, 1, 'post number 5', '2023-02-06 17:17:48', 0, 0),
(6, 4, 'a post by mary and some other guy', '2023-02-10 16:31:06', 0, 0),
(10, 4, 'a comment by mary', '2023-02-10 20:59:06', 0, 0),
(11, 4, 'another post by mary', '2023-02-10 20:59:51', 0, 5),
(13, 4, 'a real comment by mary', '2023-02-10 21:11:26', 11, 0),
(14, 4, 'a second comment by mary', '2023-02-10 21:11:48', 11, 0),
(15, 4, 'a third comment', '2023-02-10 21:13:08', 11, 0),
(16, 4, 'a comment on eathornes post', '2023-02-10 21:14:25', 4, 0),
(17, 1, 'a comment by eathorne', '2023-02-10 21:18:13', 11, 0),
(18, 5, 'Hi, this is my first post as john doe', '2023-02-10 23:20:02', 0, 1),
(19, 5, 'a comment by john does on his own post', '2023-02-10 23:20:17', 18, 0),
(20, 5, 'hey there guys', '2023-02-10 23:20:30', 11, 0);

-- --------------------------------------------------------


--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `comments` (`comments`);


--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
