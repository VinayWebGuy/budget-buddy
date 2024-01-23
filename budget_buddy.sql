-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 01:28 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `budget_buddy`
--

-- --------------------------------------------------------

--
-- Table structure for table `bb_club`
--

CREATE TABLE `bb_club` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `date` date DEFAULT NULL,
  `payment_type` varchar(255) NOT NULL,
  `remarks` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bb_club`
--

INSERT INTO `bb_club` (`id`, `user_id`, `amount`, `date`, `payment_type`, `remarks`, `created_at`, `updated_at`) VALUES
(2, 1, 1200, '2024-01-22', 'AAC', 'Testing Data', '2024-01-23 13:34:45', '2024-01-23 13:34:45'),
(3, 1, 3100, '2024-01-23', 'SAA', 'PNB to HDFC', '2024-01-23 13:35:02', '2024-01-23 13:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(7, 1, 'Food', 'food', 1, '2024-01-20 10:57:50', '2024-01-20 10:57:50'),
(8, 1, 'Travel', 'travel', 1, '2024-01-20 10:57:58', '2024-01-20 10:57:58'),
(9, 1, 'Online Shopping', 'online-shopping', 1, '2024-01-20 10:58:09', '2024-01-20 10:58:09'),
(10, 1, 'Health', 'health', 1, '2024-01-20 10:58:41', '2024-01-20 10:58:41'),
(11, 1, 'Salary', 'salary', 1, '2024-01-20 10:58:48', '2024-01-20 10:58:48'),
(12, 1, 'Home Rapair', 'home-rapair', 1, '2024-01-20 10:59:06', '2024-01-20 10:59:06'),
(13, 1, 'Grooming', 'grooming', 1, '2024-01-20 10:59:17', '2024-01-20 10:59:17'),
(14, 1, 'Fuel', 'fuel', 1, '2024-01-20 10:59:23', '2024-01-20 10:59:23'),
(15, 1, 'Family Member', 'family-member', 1, '2024-01-20 10:59:42', '2024-01-20 10:59:42'),
(16, 1, 'Entertainment', 'entertainment', 1, '2024-01-20 10:59:51', '2024-01-20 10:59:51'),
(17, 1, 'Education', 'education', 1, '2024-01-20 10:59:57', '2024-01-20 10:59:57'),
(18, 1, 'Bills', 'bills', 1, '2024-01-20 11:00:13', '2024-01-20 11:00:13'),
(19, 1, 'Shopping', 'shopping', 1, '2024-01-20 11:00:21', '2024-01-20 11:00:21'),
(20, 1, 'Gift', 'gift', 1, '2024-01-20 11:00:27', '2024-01-20 11:00:27'),
(21, 1, 'Extra', 'extra', 1, '2024-01-20 11:00:41', '2024-01-20 11:00:41'),
(22, 1, 'Website Development', 'website-development', 1, '2024-01-20 11:00:57', '2024-01-20 11:00:57'),
(23, 2, 'Dummy', 'dummy', 1, '2024-01-20 16:54:51', '2024-01-20 16:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `date` date NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `method` varchar(255) DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `user_id`, `amount`, `date`, `category`, `method`, `remarks`, `created_at`, `updated_at`) VALUES
(2, 2, 3000, '2024-01-12', NULL, 'UPI', NULL, '2024-01-20 16:30:26', '2024-01-20 16:30:26'),
(3, 2, 20000, '2024-01-19', NULL, 'Cash', NULL, '2024-01-20 16:39:32', '2024-01-20 16:39:32'),
(4, 2, 16000, '2023-12-31', 'Dummy', 'UPI', NULL, '2024-01-20 16:55:42', '2024-01-20 16:55:42'),
(5, 3, 2.2, '2024-01-20', NULL, 'Cash', NULL, '2024-01-20 17:39:30', '2024-01-20 17:39:30'),
(6, 3, 50, '2024-01-20', NULL, 'Cash', NULL, '2024-01-20 17:40:55', '2024-01-20 17:40:55'),
(7, 1, 17000, '2024-01-21', 'Shopping', 'UPI', 'R.O.', '2024-01-22 10:05:30', '2024-01-22 10:05:30');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` float DEFAULT NULL,
  `date` date NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `method` varchar(255) DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `user_id`, `amount`, `date`, `category`, `method`, `remarks`, `created_at`, `updated_at`) VALUES
(11, 2, 4000, '2024-01-10', 'Dummy', 'Cash', NULL, '2024-01-20 17:32:26', '2024-01-20 17:32:26'),
(12, 3, 4.2, '2024-01-20', NULL, 'Cash', NULL, '2024-01-20 17:38:06', '2024-01-20 17:38:06'),
(13, 1, 7000, '2024-01-22', 'Salary', 'Cash', NULL, '2024-01-22 09:52:49', '2024-01-22 09:52:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `session_id` varchar(255) DEFAULT NULL,
  `is_login` tinyint(4) NOT NULL DEFAULT 0,
  `is_verified` tinyint(4) NOT NULL DEFAULT 0,
  `multiple_login` tinyint(4) NOT NULL DEFAULT 0,
  `monthly_budget` int(11) DEFAULT NULL,
  `currency` varchar(10) DEFAULT NULL,
  `notifications` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uid`, `name`, `email`, `mobile`, `pwd`, `status`, `session_id`, `is_login`, `is_verified`, `multiple_login`, `monthly_budget`, `currency`, `notifications`, `created_at`, `updated_at`) VALUES
(1, '0DOqQ4ZkLkXHI-afa62b594c170a47cba04b2cd341498f', 'Vinay', 'vinaywebguy@gmail.com', '7206881088', 'e10adc3949ba59abbe56e057f20f883e', 1, 'xeN5o1oBms', 0, 1, 1, 20000, '₹', 0, '2024-01-19 16:47:39', '2024-01-23 17:37:58'),
(2, 'IPwYnLh6y5mGn-78dcdb77c86c42022ef7ad95f926e0d1', 'Ritu', 'ritu@gmail.com', '9896122012', 'e10adc3949ba59abbe56e057f20f883e', 1, 'hB7DYGUJqu', 0, 1, 0, 50000, '₹', 1, '2024-01-20 16:12:32', '2024-01-22 15:05:04'),
(3, 'xYQ40f4Z95so4-1f9d9a9efc2f523b2f09629444632b5c', 'John', 'john@gmail.com', '64123001', 'e10adc3949ba59abbe56e057f20f883e', 1, 'Ax0XmTNzMa', 0, 1, 0, 60, '$', 1, '2024-01-20 17:34:13', '2024-01-22 10:10:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bb_club`
--
ALTER TABLE `bb_club`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
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
-- AUTO_INCREMENT for table `bb_club`
--
ALTER TABLE `bb_club`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
