-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2018 at 09:51 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socks1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `userid`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int(11) NOT NULL,
  `cartid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `category` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `category`) VALUES
(1, 'Trail'),
(2, 'Mountain'),
(3, 'Road');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentid` int(11) NOT NULL,
  `heading` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`commentid`, `heading`, `content`, `date_created`, `userid`, `productid`) VALUES
(1, 'Testing comment', 'Aaaa', '2018-02-16 18:53:29', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `genderid` int(11) NOT NULL,
  `gender` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`genderid`, `gender`) VALUES
(1, 'Unisex'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `imageid` int(11) NOT NULL,
  `src` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`imageid`, `src`, `alt`) VALUES
(1, 'assets/img/products/trail/female1.png', 'Womens Trail Midweight Mini-Crew'),
(2, 'assets/img/products/trail/female2.png', 'Womens Trail Midweight Crew '),
(3, 'assets/img/products/trail/female3.png', 'Womens Trail Midweight Mini-Crew '),
(4, 'assets/img/products/trail/unisex1.png', 'Trail Midweight Mini-Crew '),
(5, 'assets/img/products/trail/unisex2.png', 'Spectrum Trail Midweight Crew '),
(6, 'assets/img/products/trail/unisex3.png', 'Trail Midweight Crew '),
(7, 'assets/img/products/mountain/unisex3.png', 'Snow Midweight OTC Nordic'),
(8, 'assets/img/products/mountain/unisex4.png', 'Snow Midweight OTC Houndstooth');

-- --------------------------------------------------------

--
-- Table structure for table `nav`
--

CREATE TABLE `nav` (
  `navid` int(11) NOT NULL,
  `title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nav`
--

INSERT INTO `nav` (`navid`, `title`, `link`) VALUES
(1, 'Home', '/index'),
(2, 'Trail', '/products?category=1'),
(3, 'Mountain', '/products?category=2'),
(4, 'Road', '/products?category=3');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(3) NOT NULL,
  `categoryid` int(2) NOT NULL,
  `genderid` int(11) NOT NULL,
  `imageid` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `name`, `description`, `price`, `categoryid`, `genderid`, `imageid`) VALUES
(1, 'Womens Trail Midweight Mini-Crew ', 'The Womens Trail Midweight Mini-Crew features a narrower profile to better accommodate the contours of a female foot. The double-cuff on the mini-crew provide a snug fit to keep dirt and debris out while tackling any terrain, while the extra cushion on the footbed help reduce the impact. The mini-crew length rests just above the ankle, fully covering and protecting the heel. ', 15, 1, 2, 1),
(2, 'Womens Trail Midweight Crew', 'The Womens Trail Midweight Crew features a narrower profile to better accommodate the contours of a female foot. The ribbing provides a snug fit to keep dirt and debris out while tackling any terrain, while the extra cushion on the footbed help reduce the impact. The crew length hits mid-calf. ', 16, 1, 2, 2),
(3, 'Spectrum Womens Trail Midweight Crew ', 'The Womens Trail Midweight Crew features a narrower profile to better accommodate the contours of a female foot. The ribbing provides a snug fit to keep dirt and debris out while tackling any terrain, while the extra cushion on the footbed help reduce the impact. The crew length hits mid-calf. ', 18, 1, 2, 3),
(4, 'Trail Midweight Mini-Crew', 'The Trail series is engineered for the uneven and unpredictable terrain of the trail to offer the best fit, feel and protection in any shoe. Trail socks are built to handle the impact of dirt paths and rocky trails, while the double elastic cuff keep dirt and debris out.\r\n\r\nThe mini-crew length rests just above the ankle, fully covering and protecting the heel.', 15, 1, 1, 4),
(5, 'Spectrum Trail Midweight Crew', 'The Trail series is engineered for the uneven and unpredictable terrain of the trail to offer the best fit, feel and protection in any shoe. Trail socks are built to handle the impact of dirt paths and rocky trails with a protective cushion and midweight design. The crew length rests at mid-calf\r\n\r\nSpectrum is a new look featuring bold colors and graphics while maintaining the benefits of toesocks. The Spectrum print process creates a fresh design that will not distort or fade when worn. In other words, what you see is what you get.', 15, 1, 1, 5),
(6, 'Trail Midweight Crew', 'The Trail series is engineered for the uneven and unpredictable terrain of the trail to offer the best fit, feel and protection in any shoe. Trail socks are built to handle the impact of dirt paths and rocky trails with a protective cushion and midweight design.\r\n\r\nThe crew length rests at mid-calf.', 16, 1, 1, 6),
(7, 'Snow Midweight OTC Nordic', 'The Snow Series is engineered with NuWool to provide superior comfort and warmth while optimizing your body\'s strength, balance and recovery. Injinji Snow socks feature strategically placed padding and graduated compression. Injinji\'s anatomical 5 toed design allows your foot a full range of motion for better gripping and balance. ', 25, 2, 1, 7),
(8, 'Snow Midweight OTC Houndstooth', 'The Snow Series is engineered with NuWool to provide superior comfort and warmth while optimizing your body\'s strength, balance and recovery. Injinji Snow socks feature strategically placed padding and graduated compression. Injinjis anatomical 5 toed design allows your foot a full range of motion for better gripping and balance. ', 25, 2, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `ratingid` int(11) NOT NULL,
  `number_of_votes` int(11) NOT NULL DEFAULT '0',
  `sum` int(11) NOT NULL DEFAULT '0',
  `productid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`ratingid`, `number_of_votes`, `sum`, `productid`) VALUES
(1, 2, 7, 1),
(2, 3, 13, 2),
(3, 2, 8, 3),
(4, 0, 0, 4),
(5, 0, 0, 5),
(6, 0, 0, 6),
(7, 0, 0, 7),
(8, 0, 0, 9);

-- --------------------------------------------------------

--
-- Table structure for table `rating_log`
--

CREATE TABLE `rating_log` (
  `logid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rating_log`
--

INSERT INTO `rating_log` (`logid`, `productid`, `userid`) VALUES
(1, 3, 2),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `roleid` int(11) NOT NULL,
  `role` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`roleid`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `roleid` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `first_name`, `last_name`, `password`, `email`, `roleid`) VALUES
(1, 'Nikola', 'Mitrovic', '$2y$10$wCzcygtwSW8h.dkHpOYunemJIaFGQNCIN.r/ANDzz3x2SWY67anBi', 'admin@gmail.com', 1),
(2, 'Ljubitelj', 'Carapa', '$2y$10$//cXErpzxN6csmsidU10FOBsPDr/bDENpgtJ4QinViRYdt32B3Z/C', 'carapan@gmail.com', 2),
(3, 'Proba', 'Proba', '$2y$10$8foc2b9VotK7vtIOt6cbFOGzmWlpJXBERE9X7zjxPl0o/u4Uxa2qq', 'nikola@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentid`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`genderid`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`imageid`);

--
-- Indexes for table `nav`
--
ALTER TABLE `nav`
  ADD PRIMARY KEY (`navid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`ratingid`);

--
-- Indexes for table `rating_log`
--
ALTER TABLE `rating_log`
  ADD PRIMARY KEY (`logid`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`roleid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `genderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `imageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nav`
--
ALTER TABLE `nav`
  MODIFY `navid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `ratingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rating_log`
--
ALTER TABLE `rating_log`
  MODIFY `logid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `roleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
