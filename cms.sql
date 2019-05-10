-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2017 at 03:56 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_place`
--

CREATE TABLE `add_place` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `tourist` text NOT NULL,
  `division` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_place`
--

INSERT INTO `add_place` (`id`, `title`, `image`, `description`, `tourist`, `division`) VALUES
(5, 'METI Handmade School', 'Dipshikha.jpg', 'The METI Handmade School, a primary school for 168 students located in Rudrapur in northern Bangladesh, was built with the assistance of local craftsmen making use of traditional materials, primarily mud and bamboo. An example of sustainable architecture, the project received the Aga Khan Award for Architecture in 2007, not only for its simple, humane approach and beauty but also for the level of cooperation achieved between architects, craftsmen, clients and users.', 'The regularly spaced vertical bamboo support connected to horizontal slats create a powerful decorative effect enhanced by the sunlight. It  looks amazing.', '/Final%20All%20in%20One/Rangpuroffline.php'),
(8, 'Boga Lake', 'boga-lake.jpg', 'Bogakain Lake, also called Baga Lake or Boga Lake, is a lake located in Ruma Upazila in the hill district Bandarban, Bangladesh. It is a natural sweet and deep water lake. Its height from sea level is nearly 2,000 feet (610 m). Geologists believe that it was created by collection of rain water in the crater of a dead volcano almost 2000 years ago. The lake is rectangular in shape.\n\nA local legend tells that the lake was created after the inhabitants of a Khumi village killed and ate a deity who later reappeared to them in the form of a dragon. Instantly an earthquake occurred, the hillside caved in, and the village disappeared and formed a deep lake.The water color of the lake varies at different times at a day depending upon the sun light, humidity and clouds.', 'There are small tribal communities like the Bawm, Tripura and Khumi located around the lake. In the rainy season, it is quite difficult to stroll beside the lake. The road from Ruma to Boga Lake is still under construction.The lake attracts tourists because of its scenic beauty but it is inaccessible by any means of transport. Only those who take the trouble of walking through the hilly bushes sometimes visit the lake. Due to the acidity of the lake, there is no immediate vegetation on its banks and no fish in its waters either.\r\n\r\n', '/Final%20All%20in%20One/Chittagongoffline.php');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `comment`, `date`) VALUES
(1, 'Pranab', 'holudhimubackagain10@gmail.com', 'Hi I am Groot!!!', '2017-09-14 20:20:51'),
(2, 'Mehedi Hasan', 'mmehedihasann@gmail.com', 'Hello Groot!!!', '2017-09-14 20:21:18');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `date`, `name`, `username`, `post_id`, `email`, `website`, `image`, `comment`, `status`) VALUES
(11, 1454233069, 'Muhammad Babar,', 'babar786', 3, 'babar786@gmail.com', '', 'slider-img2.jpg', 'great work', 'approve'),
(12, 1454451788, 'lldfsjadsfd', 'user', 15, 'ljadslfjaslasfj', 'jasdlfjaldkjdf', 'unknown-picture.png', 'helolo', 'approve'),
(13, 1454453211, 'ildjladfjadl', 'user', 1, 'jasdlfjadljf', 'ldjlfajf', 'unknown-picture.png', 'ldasfjladjfdlkfdasj', 'approve'),
(14, 1454453241, 'Muhammad Babar,', 'babar786', 1, 'babar786@gmail.com', '', 'slider-img2.jpg', 'good', 'approve'),
(15, 1454454437, 'Muhammad Babar', 'babar786', 1, 'babar786@gmail.com', '', 'slider-img2.jpg', 'hello', 'pending'),
(20, 1454232171, 'saleem', 'user', 3, 'lasjfads@gmail.com', 'jflajadsflfdasj.com', 'unknown-picture.png', 'pakistan ', 'approve'),
(21, 1454233069, 'Muhammad Babar,', 'babar786', 3, 'babar786@gmail.com', '', 'slider-img2.jpg', 'great work', 'approve'),
(22, 1454451788, 'lldfsjadsfd', 'user', 15, 'ljadslfjaslasfj', 'jasdlfjaldkjdf', 'unknown-picture.png', 'helolo', 'approve'),
(23, 1454453211, 'ildjladfjadl', 'user', 1, 'jasdlfjadljf', 'ldjlfajf', 'unknown-picture.png', 'ldasfjladjfdlkfdasj', 'approve'),
(24, 1454453241, 'Muhammad Babar,', 'babar786', 1, 'babar786@gmail.com', '', 'slider-img2.jpg', 'good', 'approve'),
(25, 1454454437, 'Muhammad Babar', 'babar786', 1, 'babar786@gmail.com', '', 'slider-img2.jpg', 'hello', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(50) NOT NULL,
  `author_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `description`, `image`, `date`, `author`, `author_image`) VALUES
(9, 'Puthia Temple Complex', 'The Puthia Temple Complex consists of a cluster of notable old Hindu temples in Puthia Upazila, Rajshahi District, Bangladesh. Located 23 km to the east of Rajshahi city, it has the largest number of historic temples in Bangladesh. The temples were built by Hindu Zamindars Rajas of the Puthia Raj family who were noted philanthropists of Rajshahi. The temples have been built in terracotta in a variety of styles combining the typical Jor-bangla architecture with other influences. The Rajbari or Palace of the Raja of Puthia and the Dol Mancha are part of the complex. The temples are laid out around a lake with a sprawling lawn.', 'slider-imgshow.jpg', '2017-09-21 10:38:39', 'holudhimu', 'himu.jpg'),
(10, 'Dhakeshwari Temple', 'Dhakeshwari National Temple is a Hindu temple in Dhaka, Bangladesh. It is state-owned, giving it the distinction of being Bangladesh\'s \'National Temple\'. The name \"Dhakeshwari\"  means \"Goddess of Dhaka\". Since the destruction of Ramna Kali Mandir in 1971 by the Pakistan Army during the Bangladesh Liberation War, the Dhakeshwari Temple has assumed status as the most important Hindu place of worship in Bangladesh.', 'dhakeshwari-mondir.jpg', '2017-09-21 23:59:43', 'himalayhimu', 'himu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `author_image` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `post_data` text NOT NULL,
  `views` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_comment`
--

CREATE TABLE `post_comment` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_comment`
--

INSERT INTO `post_comment` (`id`, `post_id`, `name`, `email`, `comment`, `date`) VALUES
(9, 9, 'Arif', 'ARIF@gmail.com', 'Great Place!!!!', '2017-09-21 14:40:51'),
(10, 10, 'Anamica ', 'Anamica@gmail.com', 'This Temple is really mind blowing.', '2017-09-22 04:02:46'),
(11, 11, 'Munna', 'Munna33@gmail.com', 'The view of SUN is amazing.', '2017-09-22 04:10:22'),
(13, 11, 'Sajal', 'Sajal40@gmail.com', 'Amaazing!!!', '2017-09-23 16:37:21'),
(14, 10, 'Avoya Sarker', 'ganbattekudasau@gmail.com', 'nice, good, outstanding', '2017-09-30 05:35:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `salt` varchar(255) NOT NULL DEFAULT '$2y$10$quickbrownfoxjumpsover'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `date`, `first_name`, `last_name`, `username`, `email`, `image`, `password`, `role`, `details`, `salt`) VALUES
(13, 1505399164, 'Pranab', 'Sarker', 'holudhimu', 'holudhimubackagain10@gmail.com', 'himu.jpg', '$2y$10$quickbrownfoxjumpsovee.DP3YNjH2rTClTEleP.N4yRLDSo5FZO', 'admin', '', '$2y$10$quickbrownfoxjumpsover'),
(14, 1506051894, 'SUDDEN', 'RISER', 'himalayhimu', 'suddenriser10@gmail.com', 'himu.jpg', '$2y$10$quickbrownfoxjumpsovee/VUtZXeqljcXEEb4E3A8P55.NH61C.q', 'admin', '', '$2y$10$quickbrownfoxjumpsover'),
(15, 1506052362, 'Mehedi ', 'Hasan', 'mehedihasan', 'mmehedihasann@gmail.com', 'dfgd.bmp', '$2y$10$quickbrownfoxjumpsoveeMYh0nOiTL.5iCIuvQNx6wOGllM2A3z2', 'author', '', '$2y$10$quickbrownfoxjumpsover'),
(16, 1506229694, 'Tanvir', 'Hossain', 'tanvirhossain', 'tanvirruet14@gmail.com', 'Desert.jpg', '$2y$10$quickbrownfoxjumpsoveeLrU5X6oqs2gPIFllmuPy4f8klF4OwDW', 'author', '', '$2y$10$quickbrownfoxjumpsover');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_place`
--
ALTER TABLE `add_place`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_comment`
--
ALTER TABLE `post_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_place`
--
ALTER TABLE `add_place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post_comment`
--
ALTER TABLE `post_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
