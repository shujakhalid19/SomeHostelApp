-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 02, 2020 at 05:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2
SET FOREIGN_KEY_CHECKS = 0;
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
-- Table structure for table `prop`
--

CREATE TABLE `prop` (
  `id` int(11) NOT NULL,
  `keyUnique` varchar(50) NOT NULL,
  `name` varchar(80) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `num_rms` int(11) NOT NULL,
  `rms_left` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `b_cost` int(11) NOT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(40) NOT NULL,
  `zip` int(8) NOT NULL,
  `near_uni` varchar(100) NOT NULL,
  `dist_near_uni` int(11) NOT NULL DEFAULT 0,
  `im_1` varchar(100) NOT NULL,
  `im_2` varchar(100) NOT NULL,
  `im_3` varchar(100) NOT NULL,
  `im_4` varchar(100) NOT NULL,
  `review_count` int(11) NOT NULL DEFAULT 0,
  `booking_open` int(1) NOT NULL DEFAULT 1,
  `facilities` varchar(100) NOT NULL DEFAULT 'no',
  `views` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prop`
--

INSERT INTO `prop` (`id`, `keyUnique`, `name`, `seller_id`, `type`, `num_rms`, `rms_left`, `cost`, `b_cost`, `country`, `state`, `city`, `zip`, `near_uni`, `dist_near_uni`, `im_1`, `im_2`, `im_3`, `im_4`, `review_count`, `booking_open`, `facilities`, `views`) VALUES
(2, 'H42O1I51Pg', 'Nrew', 1, 'Girls', 12, 12, 4000, 200, 'India', 'Delhi', 'Delhi', 0, 'adadasd', 1, 'download.jpeg', 'album.jpg', 'hh.jpeg', 'z.jpeg', 0, 1, '#AC#WiFi#Mess', 0),
(7, 'OrgquHTc7a', 'Second_Host', 2, 'Boys', 12, 12, 2000, 40, 'India', 'Delhi', 'Delhi', 0, 'St.Xaviers', 1, 'photo-1506354666786-959d6d497f1a.jpeg', 'IMG_20200402_185312.jpg', 'download.jpeg', 'paris.jpg', 0, 1, 'WiFi#Mess#AC#Friendly Environment', 0),
(12, 'eAE9qacbHq', 'Saving_Uni', 1, 'Girls', 12, 12, 1000, 199, 'India', 'Delhi', 'Delhi', 0, 'St.Albert', 1, 'screenshot-1.jpg', 'z.jpeg', 'poster-audiotheme.jpg', 'photo-1497034825429-c343d7c6a68f.jpeg', 0, 1, '#WiFi#Mess', 0),
(13, 'cahwRV9G', 'Royal_rooms', 2, 'All', 6, 6, 2000, 59, 'India', 'Delhi', 'Delhi', 0, 'St.Albert', 1, 'download.jpeg', 'photo-1506354666786-959d6d497f1a.jpeg', 'hh.jpeg', 'album.jpg', 0, 1, '#Mess#Friendly Environment', 0),
(14, '3h4mbeEe1', 'Latest_Host', 1, 'Boys', 3, 3, 4500, 100, 'India', 'Uttarakhand', 'Dehradun', 1234, 'St.Albert', 1, 'hh.jpeg', 'download.jpeg', 'photo-1506354666786-959d6d497f1a.jpeg', 'z.jpeg', 0, 1, 'no', 0),
(15, 'rwzTds4[2r', 'Good_Rooms', 7, 'All', 6, 6, 2400, 200, 'Turkey', 'Istanbul', 'Istanbul', 1246, 'Ottoman', 2, 'balloon.jpg', 'hh.jpeg', 'download.jpeg', 'z.jpeg', 0, 1, 'no#WiFi#AC', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prop`
--
ALTER TABLE `prop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prop`
--
ALTER TABLE `prop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
SET FOREIGN_KEY_CHECKS = 1;