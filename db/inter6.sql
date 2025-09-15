-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2024 at 01:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inter6`
--

-- --------------------------------------------------------

--
-- Table structure for table `713`
--

CREATE TABLE `713` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock_status` varchar(10) DEFAULT 'In Stock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `713`
--

INSERT INTO `713` (`id`, `name`, `image`, `price`, `stock_status`) VALUES
(2, 'vv', 'image/2.jpg', 15.00, 'In Stock'),
(3, 'Toy 3', 'image/7133.jpg', 15.00, 'In Stock'),
(4, 'Toy 4', 'image/7134.jpg', 20.00, 'In Stock'),
(5, 'Toy 5', 'image/7135.jpg', 10.00, 'In Stock'),
(6, 'Toy 6', 'image/7-136.jpg', 15.00, 'In Stock');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjects` varchar(25) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp(5) NOT NULL DEFAULT current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `full_name`, `email`, `subjects`, `message`, `created_at`) VALUES
(1, 'vidhi', 'mm@gmail.com', 'nothing', 'sdfhjkertyui', '2024-07-21 21:21:05.53704'),
(2, 'vidhi', 'jj@gmail.com', 'dfghj', 'sdfghjkertyui', '2024-07-22 10:55:28.75404'),
(3, 'vidhi', 'jj@gmail.com', 'nothing', 'dfghjk', '2024-08-06 16:27:21.65107');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  `created_at` timestamp(5) NOT NULL DEFAULT current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `image`, `comments`, `created_at`) VALUES
(1, 'happy', 'kk', '2024-07-24 18:57:03.43654'),
(2, 'happy', 'website is fabulous.', '2024-07-24 18:58:35.33233'),
(4, 'happy', 'website is fabulous.', '2024-07-24 19:02:10.85692'),
(20, 'sad', 'hjcBckBKBChD', '2024-07-25 12:05:07.90216'),
(21, 'happy', 'mm', '2024-07-25 15:55:18.88950'),
(22, 'happy', 'mm', '2024-07-25 15:59:39.96544'),
(23, 'sad', 'fgf', '2024-07-29 12:15:08.31716'),
(24, '', '', '2024-08-06 21:30:31.82986'),
(25, '', '', '2024-08-06 21:30:37.60311');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('ab', 123),
('vidhi', 1010),
('yashvi ', 2211),
('mm', 0),
('hasti', 0),
('mike', 2222);

-- --------------------------------------------------------

--
-- Table structure for table `logina`
--

CREATE TABLE `logina` (
  `username` varchar(50) NOT NULL,
  `password` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logina`
--

INSERT INTO `logina` (`username`, `password`) VALUES
('vidhi', 1010);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `iid` int(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_price` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `quantity` int(255) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `created_at` timestamp(5) NOT NULL DEFAULT current_timestamp(5),
  `upi_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`iid`, `item_name`, `item_image`, `item_price`, `customer_name`, `customer_email`, `customer_address`, `quantity`, `payment_method`, `created_at`, `upi_id`) VALUES
(1, 'Toy 2', 'image/19282.png', '$15', 'jqkjq', 'xjnjnw123@gmail.com', '0', 2, '0', '2024-07-21 22:11:50.31762', 0),
(87, 'Toy 2', 'image/14192.jpeg', '$15', 'nnnnnnnn', 'xjnjnw123@gmail.com', 'asdx', 1, '', '2024-07-25 16:03:15.76974', 0),
(92, '', '', '', 'jqkjq', 'xjnjnw123@gmail.com', 'dfghj', 1, '', '2024-07-25 16:53:25.13980', 0),
(93, 'Toy 2', 'image/14192.jpeg', '$15', 'jqkjq', 'xjnjnw123@gmail.com', 'mmm', 1, '', '2024-07-25 17:44:08.11583', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `username` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(20) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`username`, `gender`, `email`, `password`, `id`) VALUES
('bb', 'female', 'abc@gmail.com', 1234, 1),
('mike', 'male', 'mike@gmail.com', 1234, 3),
('mm', 'female', 'wsa@123.com', 0, 4),
('hasti', 'female', 'wsa@123.com', 0, 5),
('mike', 'male', 'mike@gmail.com', 2222, 6);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `icon`) VALUES
(2, '24/7 Customer Support', 'Our customer support team is available around the clock to assist you with any queries.', 'fa fa-headphones'),
(3, 'Gift Wrapping', 'We offer gift wrapping services to make your presents extra special.', 'fa fa-gift'),
(4, 'Easy Returns', 'Enjoy a hassle-free return process if you\'re not completely satisfied with your purchase.', 'fa fa-refresh'),
(5, 'Fast Delivery', 'We offer quick and reliable delivery to get your toys to you as soon as possible.', 'fa fa-truck');

-- --------------------------------------------------------

--
-- Table structure for table `t1419`
--

CREATE TABLE `t1419` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `stock_status` varchar(25) NOT NULL DEFAULT 'In Stock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t1419`
--

INSERT INTO `t1419` (`id`, `name`, `price`, `image`, `stock_status`) VALUES
(1, 'Toy 1', 10.00, 'image/1.jpg', 'In Stock'),
(2, 'Toy 2', 15.00, 'image/14192.jpeg', 'In Stock'),
(3, 'Toy 3', 20.00, 'image/14193.jpg', 'In Stock'),
(4, 'Toy 4', 10.00, 'image/14194.jpg', 'In Stock'),
(5, 'Toy 5', 15.00, 'image/14195.jpg', 'In Stock'),
(6, 'Toy 6', 20.00, 'image/14196.jpg', 'In Stock');

-- --------------------------------------------------------

--
-- Table structure for table `t1928`
--

CREATE TABLE `t1928` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t1928`
--

INSERT INTO `t1928` (`id`, `image`, `name`, `price`, `stock_status`) VALUES
(1, 'image/55.jpg', 'jkj', 40.00, 'In Stock'),
(2, 'image/29392.jpg', 'Toy 2', 15.00, 'In Stock'),
(3, 'image/29393.jpg', 'Toy 3', 20.00, 'In Stock'),
(4, 'image/29394.jpg', 'Toy 4', 10.00, 'In Stock'),
(5, 'image/29395.jpg', 'Toy 5', 15.00, 'In Stock'),
(6, 'image/29396.jpg', 'Toy 6', 20.00, 'In Stock'),
(7, 'image/063.jpg', 'Toy 1', 10.00, 'In Stock');

-- --------------------------------------------------------

--
-- Table structure for table `t2939`
--

CREATE TABLE `t2939` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` enum('In Stock','Out of Stock') DEFAULT 'In Stock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t2939`
--

INSERT INTO `t2939` (`id`, `image`, `name`, `price`, `status`) VALUES
(2, 'image/33.jpg', 'vv', 15.00, 'Out of Stock'),
(3, 'image/29393.jpg', 'Toy 3', 20.00, 'In Stock'),
(4, 'image/29394.jpg', 'Toy 1', 10.00, 'In Stock'),
(5, 'image/29395.jpg', 'Toy 2', 15.00, 'In Stock'),
(6, 'image/29396.jpg', 'Toy 3', 20.00, 'In Stock'),
(7, 'image/063.jpg', 'Toy 1', 10.00, 'In Stock'),
(8, 'image/063.jpg', 'Toy 1', 10.00, 'In Stock');

-- --------------------------------------------------------

--
-- Table structure for table `toys`
--

CREATE TABLE `toys` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(10) DEFAULT 'in_stock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `toys`
--

INSERT INTO `toys` (`id`, `name`, `image`, `price`, `status`) VALUES
(4, 'Toy 4', 'image/55.jpg', 10.00, 'In Stock'),
(5, 'Toy 5', 'image/7-136.jpg', 15.00, 'in_stock'),
(6, 'Toy 6', 'image/12.jpg', 20.00, 'in_stock'),
(7, 'Toy 7', 'image/067.jpg', 10.00, 'in_stock'),
(8, 'Toy 8', 'image/068.jpg', 15.00, 'in_stock'),
(9, 'Toy 9', 'image/069.jpg', 20.00, 'in_stock'),
(10, 'Toy 10', 'image/0610.jpg', 10.00, 'in_stock'),
(11, 'Toy 11', 'image/0611.jpg', 15.00, 'in_stock'),
(12, 'Toy 12', 'image/0612.jpg', 20.00, 'in_stock'),
(13, 'toy1', 'image/061.jpg', 10.00, 'in_stock'),
(14, 'Toy 2', 'image/062.jpg', 15.00, 'in_stock'),
(17, 'www', 'image/063.jpg', 1111.00, 'in_stock');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `713`
--
ALTER TABLE `713`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t1419`
--
ALTER TABLE `t1419`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t1928`
--
ALTER TABLE `t1928`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t2939`
--
ALTER TABLE `t2939`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toys`
--
ALTER TABLE `toys`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `713`
--
ALTER TABLE `713`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `iid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t1419`
--
ALTER TABLE `t1419`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t1928`
--
ALTER TABLE `t1928`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t2939`
--
ALTER TABLE `t2939`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `toys`
--
ALTER TABLE `toys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
