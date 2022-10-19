-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 04:48 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profiles`
--

-- --------------------------------------------------------

--
-- Table structure for table `google_users`
--

CREATE TABLE `google_users` (
  `id` int(11) NOT NULL,
  `google_id` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `google_users`
--

INSERT INTO `google_users` (`id`, `google_id`, `email`, `name`, `image`) VALUES
(1, 'MTA4MjUxNjg0NjEyNzc3NDcwMDkw', 'shujakhalid26@gmail.com', 'Shuja Khalid', 'https://lh3.googleusercontent.com/a-/AOh14Ggj7yPhzTdEpAL6k9NsM1hYBr4skt-XUbJFhBlG=s96-c');

-- --------------------------------------------------------

--
-- Table structure for table `h_review`
--

CREATE TABLE `h_review` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `h_id` int(11) NOT NULL,
  `review` text NOT NULL,
  `rating` int(1) NOT NULL,
  `time` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `h_review`
--

INSERT INTO `h_review` (`id`, `user_id`, `h_id`, `review`, `rating`, `time`) VALUES
(1, 1, 14, 'Good review', 4, 1586429024402),
(3, 1, 14, 'test<br />\r\nReview', 1, 1586429654276),
(6, 1, 14, 'good place!!', 4, 1586429848183),
(10, 1, 13, 'Royal rooms', 4, 1586437595930),
(13, 1, 12, 'rev rev rev<br />\r\nrev rev<br />\r\n rev', 3, 1586438050112);

-- --------------------------------------------------------

--
-- Table structure for table `propgallery`
--

CREATE TABLE `propgallery` (
  `id` int(11) NOT NULL,
  `hostelId` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `props`
--

CREATE TABLE `props` (
  `id` int(11) NOT NULL,
  `keyUnique` varchar(50) NOT NULL,
  `name` varchar(80) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(40) NOT NULL,
  `zip` int(8) NOT NULL,
  `im_1` varchar(100) NOT NULL,
  `im_2` varchar(100) NOT NULL,
  `im_3` varchar(100) NOT NULL,
  `im_4` varchar(100) NOT NULL,
  `review_count` int(11) NOT NULL,
  `booking_open` int(1) NOT NULL,
  `facilities` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `props`
--

INSERT INTO `props` (`id`, `keyUnique`, `name`, `seller_id`, `type`, `country`, `state`, `city`, `zip`, `im_1`, `im_2`, `im_3`, `im_4`, `review_count`, `booking_open`, `facilities`) VALUES
(1, '3h4mbeEe1', 'Latest_Host', 1, 'Boys', 'India', 'Uttarakhand', 'Dehradun', 1234, 'hh.jpeg', 'download.jpeg', 'photo-1506354666786-959d6d497f1a.jpeg', 'z.jpeg', 0, 1, '#AC#WiFi#Mess#Friendly Environment'),
(2, 'H42O1I51Pg', 'Nrew', 1, 'Guest Host', 'India', 'Delhi', 'Delhi', 0, 'download.jpeg', 'album.jpg', 'hh.jpeg', 'z.jpeg', 0, 1, '#AC#WiFi#Mess'),
(3, 'eAE9qacbHq', 'Saving_Uni', 1, 'Girls', 'India', 'Delhi', 'Delhi', 0, 'screenshot-1.jpg', 'z.jpeg', 'poster-audiotheme.jpg', 'photo-1497034825429-c343d7c6a68f.jpeg', 0, 1, '#WiFi#Mess'),
(4, 'cahwRV9G', 'Royal_rooms', 2, 'All', 'India', 'Delhi', 'Delhi', 0, 'download.jpeg', 'photo-1506354666786-959d6d497f1a.jpeg', 'hh.jpeg', 'album.jpg', 0, 1, '#Mess#Friendly Environment'),
(5, 'OrgquHTc7a', 'Second_Host', 2, 'Boys', 'India', 'Delhi', 'Delhi', 0, 'photo-1506354666786-959d6d497f1a.jpeg', 'IMG_20200402_185312.jpg', 'download.jpeg', 'paris.jpg', 0, 1, 'WiFi#Mess#AC#Friendly Environment'),
(6, 'rwzTds4[2r', 'Good_Rooms', 7, 'All', 'Turkey', 'Istanbul', 'Istanbul', 1246, 'balloon.jpg', 'hh.jpeg', 'download.jpeg', 'z.jpeg', 0, 1, 'no#WiFi#AC');

-- --------------------------------------------------------

--
-- Table structure for table `prop_desc`
--

CREATE TABLE `prop_desc` (
  `id` int(11) NOT NULL,
  `prop_id` int(11) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prop_desc`
--

INSERT INTO `prop_desc` (`id`, `prop_id`, `description`) VALUES
(1, 2, 'Hello'),
(6, 7, 'This is a test product.'),
(8, 12, 'To test if unregistered uni is saving or not'),
(9, 13, 'Good info'),
(10, 14, 'Hello ');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `uni_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `profileImg` varchar(100) NOT NULL,
  `revnum` int(1) NOT NULL,
  `review` text NOT NULL,
  `timestamp` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `uni_id`, `name`, `profileImg`, `revnum`, `review`, `timestamp`) VALUES
(1, 1, 'Shuja Khalid', 'https://lh3.googleusercontent.com/a-/AOh14Ggj7yPhzTdEpAL6k9NsM1hYBr4skt-XUbJFhBlG=s96-c', 4, 'First_review', 1585560956539),
(2, 1, 'Shuja Khalid', 'https://lh3.googleusercontent.com/a-/AOh14Ggj7yPhzTdEpAL6k9NsM1hYBr4skt-XUbJFhBlG=s96-c', 4, 'second_review', 1585561551186);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL DEFAULT 0,
  `hostelId` int(11) NOT NULL,
  `roomName` varchar(150) NOT NULL,
  `roomType` tinyint(1) NOT NULL DEFAULT 0,
  `bPrice` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `grade` int(11) NOT NULL DEFAULT 0,
  `beds` int(11) NOT NULL DEFAULT 0,
  `availableBeds` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `seller_id`, `hostelId`, `roomName`, `roomType`, `bPrice`, `price`, `grade`, `beds`, `availableBeds`) VALUES
(1, 1, 2, 'Basic Shared 12 Bed Room', 0, 120, 500, 0, 12, 12),
(2, 1, 2, 'Standard Private 12 Bed Room', 1, 220, 850, 1, 12, 12),
(3, 1, 2, 'Standard Shared 350 Bed Room', 0, 150, 450, 1, 350, 350),
(4, 1, 3, 'Basic Shared 14 Bed Room', 0, 125, 686, 0, 14, 14),
(5, 1, 2, 'Standard Private 2 Bed Room', 1, 520, 899, 1, 2, 2),
(6, 1, 2, 'Basic Private 4 Bed Room', 1, 820, 560, 0, 4, 4),
(7, 1, 2, 'Basic Private 4 Bed Room', 1, 320, 560, 0, 4, 4),
(8, 1, 2, 'Basic Private 4 Bed Room', 1, 320, 560, 0, 4, 4),
(9, 1, 3, 'Standard Private 1 Bed Room', 1, 120, 899, 1, 1, 1),
(10, 1, 3, 'Standard Shared 8 Bed Room', 0, 120, 299, 1, 8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `uni`
--

CREATE TABLE `uni` (
  `id` int(11) NOT NULL,
  `uni_name` varchar(40) NOT NULL,
  `logo` varchar(80) NOT NULL DEFAULT 'defaultuni.png',
  `country` varchar(30) NOT NULL,
  `city` varchar(50) NOT NULL,
  `block` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni`
--

INSERT INTO `uni` (`id`, `uni_name`, `logo`, `country`, `city`, `block`) VALUES
(1, 'St.Albert', 'defaultuni.png', 'IN', 'DL', 0),
(2, 'St.Albert', 'defaultuni.png', 'India', 'Dehradun', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile_image` varchar(100) NOT NULL DEFAULT 'default.png',
  `role` varchar(50) NOT NULL,
  `profession` varchar(100) NOT NULL DEFAULT 'NA',
  `location` varchar(40) NOT NULL DEFAULT 'NA',
  `member_since` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `profile_image`, `role`, `profession`, `location`, `member_since`) VALUES
(1, 'shujakhalid', 'shujakhalid26@gmail.com', 'a01610228fe998f515a72dd730294d87', 'default.png', 'entre', 'NA', 'NA', 1581144913311),
(2, 'John_doe', 'johndoe@gmail.com', 'a01610228fe998f515a72dd730294d87', 'default.png', 'entre', 'NA', 'NA', 1581144913311),
(6, 'borris_johnson', 'borris@gmail.com', 'a01610228fe998f515a72dd730294d87', 'default.png', 'entre', 'NA', 'NA', 1581146044670),
(7, 'mark', 'mark@gmail.com', 'a01610228fe998f515a72dd730294d87', 'default.png', 'entre', 'NA', 'NA', 1581146964348),
(8, 'myron', 'myron@gmail.com', 'a01610228fe998f515a72dd730294d87', 'default.png', 'entre', 'NA', 'NA', 1581147128438),
(9, 'russel', 'russel@gmail.com', 'a01610228fe998f515a72dd730294d87', 'default.png', 'entre', 'NA', 'NA', 1581147128438),
(10, 'dipper', 'dipper@gmail.com', 'a01610228fe998f515a72dd730294d87', 'default.png', 'entre', 'NA', 'NA', 1601039113642);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `google_users`
--
ALTER TABLE `google_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_review`
--
ALTER TABLE `h_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `props`
--
ALTER TABLE `props`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `keyUnique` (`keyUnique`);

--
-- Indexes for table `prop_desc`
--
ALTER TABLE `prop_desc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prop_id` (`prop_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni`
--
ALTER TABLE `uni`
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
-- AUTO_INCREMENT for table `google_users`
--
ALTER TABLE `google_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `h_review`
--
ALTER TABLE `h_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `props`
--
ALTER TABLE `props`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `prop_desc`
--
ALTER TABLE `prop_desc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `uni`
--
ALTER TABLE `uni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prop_desc`
--
ALTER TABLE `prop_desc`
  ADD CONSTRAINT `prop_desc_ibfk_1` FOREIGN KEY (`prop_id`) REFERENCES `prop` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
