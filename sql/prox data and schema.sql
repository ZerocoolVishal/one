-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 07, 2018 at 06:27 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prox`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Hollywood'),
(2, 'Bollywood');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `category` int(11) NOT NULL,
  `launchYear` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `title`, `description`, `image`, `date`, `category`, `launchYear`) VALUES
(1, 'Venom', 'Journalist Eddie Brock is trying to take down Carlton Drake, the notorious and brilliant founder of the Life Foundation. While investigating one of Drake\'s experiments, Eddie\'s body merges with the alien Venom -- leaving him with superhuman strength and power. Twisted, dark and fueled by rage, Venom…', 'http://www.gstatic.com/tv/thumb/movieposters/13937884/p13937884_p_v8_ab.jpg', '0000-00-00', 1, 2018),
(2, 'Padmaavat', 'Queen Padmavati is happily married to a Rajput ruler until a tyrant Sultan, Alauddin Khilji, enters their life and calls a war on their kingdom due to his obsession with the queen.', 'http://t0.gstatic.com/images?q=tbn:ANd9GcREhV2NVzC0OhjtRD-K0GMLFwvaIBXBb8Hu7_dPrUiZy1jD-jRE', '0000-00-00', 2, 2018),
(3, 'Crazy Rich Asians', 'Rachel Chu is happy to accompany her longtime boyfriend, Nick, to his best friend\'s wedding in Singapore. She\'s also surprised to learn that Nick\'s family is extremely wealthy and he\'s considered one of the country\'s most eligible bachelors. Thrust into the spotlight, Rachel must now contend with je…', 'http://t3.gstatic.com/images?q=tbn:ANd9GcTLOexe_utHYfS57cG9AHH7OJigrPcH44UzJRyfHdIx9t35c4RY', '0000-00-00', 1, 2018),
(5, 'A Simple Favor', 'A SIMPLE FAVOR, directed by Paul Feig, centers around Stephanie (Anna Kendrick), a mommy vlogger who seeks to uncover the truth behind her best friend Emily\'s (Blake Lively) sudden disappearance from their small town.', 'http://www.gstatic.com/tv/thumb/v22vodart/15223195/p15223195_v_v8_ab.jpg', '0000-00-00', 1, 2018),
(6, 'Raazi', 'An Indian spy marries a Pakistani man during the Indo-Pakistan War of 1971.', 'http://t3.gstatic.com/images?q=tbn:ANd9GcRHhtivVieLWw8QpVdWF2sVk9HUSEBDUgk0q7lkowPUWxsTQy9z', '0000-00-00', 2, 2018),
(7, 'Sui Dhaaga', 'An unemployed small-town man defies all odds and naysayers and starts his own garment business.', 'http://www.gstatic.com/tv/thumb/movieposters/15844343/p15844343_p_v8_aa.jpg', '0000-00-00', 2, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `contentTags`
--

CREATE TABLE `contentTags` (
  `id` int(11) NOT NULL,
  `content` int(11) NOT NULL,
  `tag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `content` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `name`, `url`, `content`) VALUES
(1, 'Download', '#', 1),
(2, 'Download', '#', 2),
(3, 'Trailer', 'https://www.youtube.com/watch?v=X_5_BLt76c0', 2),
(4, 'Download 720p', '#', 3),
(5, 'Download 1080p', '#', 3),
(6, 'Trailer', 'https://www.youtube.com/watch?v=ZQ-YX-5bAs0', 3),
(7, 'Trailer', 'https://www.youtube.com/watch?v=xLCn88bfW1o', 1),
(8, 'Trailer', 'https://www.youtube.com/watch?v=nDbjJVmGV98', 6),
(9, 'Coming Soon', '#', 5),
(10, 'Trailer', 'https://www.youtube.com/watch?v=rAqMlh0b2HU', 5),
(11, 'Coming Soon', '#', 7);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` varchar(1000) NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `email`, `message`, `timeStamp`) VALUES
(1, 'anonymous', 'Hello', '2018-10-06 16:22:05'),
(2, 'vishalbhosle83@gmail.com', 'Hello', '2018-10-06 16:22:38'),
(3, 'anonymous', 'Hello', '2018-10-06 17:07:22'),
(4, 'vishalbhosle83@gmail.com', 'Hello and Thankyou', '2018-10-06 17:25:28'),
(5, 'anonymous', 'Hello', '2018-10-06 17:29:44'),
(6, '', 'Hello', '2018-10-06 17:31:55'),
(7, 'vishalbhosle83@gmail.com', 'Test message', '2018-10-06 17:32:55'),
(8, '', 'Test message', '2018-10-06 17:33:05'),
(9, '', 'Test message', '2018-10-06 17:35:39'),
(10, 'zerocoolvishal@gmail.com', 'Please can you upload XYZ movie', '2018-10-06 17:37:14'),
(11, '', 'Hello', '2018-10-06 17:37:56'),
(12, '', 'Hello', '2018-10-06 17:38:44'),
(13, '', 'Hello', '2018-10-06 17:39:14'),
(14, '', 'Hello !!', '2018-10-07 04:24:03');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `contentTags`
--
ALTER TABLE `contentTags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content` (`content`),
  ADD KEY `tag` (`tag`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content` (`content`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contentTags`
--
ALTER TABLE `contentTags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `content_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`id`);

--
-- Constraints for table `contentTags`
--
ALTER TABLE `contentTags`
  ADD CONSTRAINT `contentTags_ibfk_1` FOREIGN KEY (`content`) REFERENCES `content` (`id`),
  ADD CONSTRAINT `contentTags_ibfk_2` FOREIGN KEY (`tag`) REFERENCES `tags` (`id`);

--
-- Constraints for table `links`
--
ALTER TABLE `links`
  ADD CONSTRAINT `links_ibfk_1` FOREIGN KEY (`content`) REFERENCES `content` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
