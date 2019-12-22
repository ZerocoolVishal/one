-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 22, 2019 at 01:06 PM
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
(2, 'Bollywood'),
(3, 'Webseries'),
(4, 'Marathi');

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
  `language_id` int(11) NOT NULL,
  `launchYear` year(4) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `title`, `description`, `image`, `date`, `category`, `language_id`, `launchYear`, `timestamp`) VALUES
(1, 'Venom', 'Journalist Eddie Brock is trying to take down Carlton Drake, the notorious and brilliant founder of the Life Foundation. While investigating one of Drake\'s experiments, Eddie\'s body merges with the alien Venom -- leaving him with superhuman strength and power. Twisted, dark and fueled by rage, Venom…', 'http://www.gstatic.com/tv/thumb/movieposters/13937884/p13937884_p_v8_ab.jpg', '0000-00-00', 1, 1, 2018, '2018-10-19 15:52:04'),
(2, 'Padmaavat', 'Queen Padmavati is happily married to a Rajput ruler until a tyrant Sultan, Alauddin Khilji, enters their life and calls a war on their kingdom due to his obsession with the queen.', 'http://t0.gstatic.com/images?q=tbn:ANd9GcREhV2NVzC0OhjtRD-K0GMLFwvaIBXBb8Hu7_dPrUiZy1jD-jRE', '0000-00-00', 2, 2, 2018, '2018-10-19 15:52:04'),
(3, 'Crazy Rich Asians', 'Rachel Chu is happy to accompany her longtime boyfriend, Nick, to his best friend\'s wedding in Singapore. She\'s also surprised to learn that Nick\'s family is extremely wealthy and he\'s considered one of the country\'s most eligible bachelors. Thrust into the spotlight, Rachel must now contend with je…', 'http://t3.gstatic.com/images?q=tbn:ANd9GcTLOexe_utHYfS57cG9AHH7OJigrPcH44UzJRyfHdIx9t35c4RY', '0000-00-00', 1, 1, 2018, '2018-10-19 15:52:04'),
(5, 'A Simple Favor', 'A SIMPLE FAVOR, directed by Paul Feig, centers around Stephanie (Anna Kendrick), a mommy vlogger who seeks to uncover the truth behind her best friend Emily\'s (Blake Lively) sudden disappearance from their small town.', 'http://www.gstatic.com/tv/thumb/v22vodart/15223195/p15223195_v_v8_ab.jpg', '0000-00-00', 1, 1, 2018, '2018-10-19 15:52:04'),
(6, 'Raazi', 'An Indian spy marries a Pakistani man during the Indo-Pakistan War of 1971.', 'http://t3.gstatic.com/images?q=tbn:ANd9GcRHhtivVieLWw8QpVdWF2sVk9HUSEBDUgk0q7lkowPUWxsTQy9z', '0000-00-00', 2, 2, 2018, '2018-10-19 15:52:04'),
(7, 'Sui Dhaaga', 'An unemployed small-town man defies all odds and naysayers and starts his own garment business.', 'http://www.gstatic.com/tv/thumb/movieposters/15844343/p15844343_p_v8_aa.jpg', '0000-00-00', 2, 2, 2018, '2018-10-19 15:52:04'),
(8, 'Stranger Things', 'This thrilling Netflix original drama stars Golden Globe-winning actress Winona Ryder as Joyce Byers, who lives in a small Indiana town in 1983 -- inspired by a time when tales of science fiction captivated audiences. When Joyce\'s 12-year-old son, Will, goes missing, she launches a terrifying invest…', 'https://images-na.ssl-images-amazon.com/images/M/MV5BMjEzMDAxOTUyMV5BMl5BanBnXkFtZTgwNzAxMzYzOTE@._V1_.jpg', '2018-10-08', 3, 1, 2016, '2018-10-19 15:52:04'),
(10, 'Lost in Space', 'A rip in the space-time continuum forces the Robinsons, a family of space colonists, to crash-land on an unknown planet. Now, they must battle an alien environ to escape the planet and reach safety.', 'http://www.gstatic.com/tv/thumb/tvbanners/15197695/p15197695_b_v8_ab.jpg', '2018-10-09', 3, 1, 2018, '2018-10-19 15:52:04'),
(11, 'The Spy Who Dumped Me', 'The Spy Who Dumped Me tells the story of Audrey (Kunis) and Morgan (McKinnon), two best friends who unwittingly become entangled in an international conspiracy when one of the women discovers the boyfriend who dumped her was actually a spy.', 'http://www.gstatic.com/tv/thumb/v22vodart/14988000/p14988000_v_v8_aa.jpg', '2018-10-19', 1, 1, 2018, '2018-10-19 15:52:04'),
(12, 'Hello Guru Prema Kosame', 'Hello Guru Prema Kosame follows an easygoing youngster named Sanju, and his quest to win over Anu, his ever so sensible lady-love.', 'http://t0.gstatic.com/images?q=tbn:ANd9GcS0EbNL04_JS_Y4gLX8vSAcrs4oNWkKdvKIjZ5qSeI3XgdkFQ9E', '2018-10-19', 2, 2, 2018, '2018-10-19 15:57:58'),
(13, 'Skyscraper', 'FBI Hostage Rescue Team leader and U.S. war veteran Will Sawyer now assesses security for skyscrapers. On assignment in Hong Kong he finds the tallest, safest building in the world suddenly ablaze and he\'s been framed for it. A wanted man on the run, Will must find those responsible, clear his name and somehow rescue his family who are trapped inside the building - above the fire line.', 'http://t3.gstatic.com/images?q=tbn:ANd9GcTNyNlFcArGANEsj3666WYxlgPEi4FAGt0fNjMIXoN0qkRxi3fM', '2018-10-19', 1, 1, 2018, '2018-10-19 16:37:17'),
(14, 'Mamma Mia! Here We Go Again', 'Discover Donna\'s (Meryl Streep, Lily James) young life, experiencing the fun she had with the three possible dads of Sophie (Amanda Seyfriend). As she reflects on her mom\'s journey, Sophie finds herself to be more like her mother than she ever even realized.', 'http://www.gstatic.com/tv/thumb/v22vodart/14179583/p14179583_v_v8_ad.jpg', '2018-10-19', 1, 1, 2018, '2018-10-19 16:39:40');

-- --------------------------------------------------------

--
-- Table structure for table `contentTags`
--

CREATE TABLE `contentTags` (
  `id` int(11) NOT NULL,
  `content` int(11) NOT NULL,
  `tag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contentTags`
--

INSERT INTO `contentTags` (`id`, `content`, `tag`) VALUES
(1, 1, 1),
(2, 6, 2),
(3, 1, 3),
(4, 6, 1),
(5, 8, 4),
(6, 10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`) VALUES
(1, 'English'),
(2, 'Hindi'),
(3, 'Marathi'),
(4, 'Tamil');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `name` enum('Trailer','Download','720p','1080p','UHD','4K','Coming Soon') NOT NULL,
  `url` varchar(1000) NOT NULL,
  `content` int(11) NOT NULL,
  `clicks` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `name`, `url`, `content`, `clicks`) VALUES
(1, 'Download', '#', 1, 2),
(2, 'Download', '#', 2, 0),
(3, 'Trailer', 'https://www.youtube.com/watch?v=X_5_BLt76c0', 2, 4),
(5, '1080p', '#', 3, 0),
(6, 'Trailer', 'https://www.youtube.com/watch?v=ZQ-YX-5bAs0', 3, 3),
(7, 'Trailer', 'https://www.youtube.com/watch?v=xLCn88bfW1o', 1, 7),
(8, 'Trailer', 'https://www.youtube.com/watch?v=nDbjJVmGV98', 6, 1),
(9, 'Coming Soon', '#', 5, 0),
(10, 'Trailer', 'https://www.youtube.com/watch?v=rAqMlh0b2HU', 5, 1),
(11, 'Coming Soon', '#', 7, 0),
(12, 'Trailer', 'https://www.youtube.com/watch?v=VUe3p23AJMo', 7, 0),
(13, 'Trailer', 'https://www.youtube.com/watch?v=XWxyRG_tckY', 8, 0),
(15, 'Trailer', 'https://www.youtube.com/watch?v=fzmM0AB60QQ', 10, 4),
(16, '720p', 'magnet:?xt=urn:btih:f0bd816482616711a7e8199a5a6b080ea4cb50a1&dn=Raazi.2018.Hindi.1080p.WEB-DL.x264.%5B2GB%5D.%5BMP4%5D&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969&tr=udp%3A%2F%2Fzer0day.ch%3A1337&tr=udp%3A%2F%2Fopen.demonii.com%3A1337&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969&tr=udp%3A%2F%2Fexodus.desync.com%3A6969', 6, 2),
(17, '1080p', 'magnet:?xt=urn:btih:3AA0275C59B1B1C14DA38B0C07CCA049E00C6921&dn=Mamma+Mia%21+Here+We+Go+Again+%282018%29+%5B1080p%5D+%5BYTS.AG%5D&tr=udp%3A%2F%2Fglotorrents.pw%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969&tr=udp%3A%2F%2Fp4p.arenabg.ch%3A1337&tr=udp%3A%2F%2Ftracker.internetwarriors.net%3A1337', 14, 2),
(18, 'Trailer', 'https://www.youtube.com/watch?v=XcSMdhfKga4', 14, 1),
(19, '4K', '#', 3, 0);

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
(14, '', 'Hello !!', '2018-10-07 04:24:03'),
(15, '', 'Awesome !!!', '2018-10-08 17:08:02'),
(16, '', 'Awesome !!!', '2018-10-08 17:08:25'),
(17, '', 'Hello', '2018-10-17 17:21:26'),
(18, 'zerocoolvishal@gmail.com', 'Yo', '2018-12-26 13:39:03'),
(19, 'zerocoolvishal@gmail.com', 'Yo', '2018-12-26 13:39:34'),
(20, 'zerocoolvishal@gmail.com', 'Hello', '2018-12-26 14:01:38'),
(21, 'zerocoolvishal@gmail.com', 'Hello', '2018-12-26 14:02:02'),
(22, 'developer.vishalbhosle@gmail.com', 'Awesome !!', '2018-12-26 14:05:15'),
(23, 'developer.vishalbhosle@gmail.com', 'Awesome !!', '2018-12-26 14:06:18'),
(24, 'vishal@gmail.com', 'Hello', '2019-12-22 09:13:53');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`) VALUES
(1, 'action'),
(2, 'bollywood'),
(3, 'marvel'),
(4, 'sci-fi'),
(5, 'horror');

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
  ADD KEY `category` (`category`),
  ADD KEY `language_id` (`language_id`);

--
-- Indexes for table `contentTags`
--
ALTER TABLE `contentTags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content` (`content`),
  ADD KEY `tag` (`tag`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contentTags`
--
ALTER TABLE `contentTags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `content_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `content_ibfk_2` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`);

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
