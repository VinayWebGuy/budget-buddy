-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2024 at 08:01 AM
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
(1, 1, 'Education', 'education', 1, '2024-01-25 12:22:11', '2024-01-25 12:22:11'),
(2, 1, 'Health', 'health', 1, '2024-01-25 12:22:18', '2024-01-25 12:22:18'),
(3, 1, 'Entertainment', 'entertainment', 1, '2024-01-25 12:22:40', '2024-01-25 12:22:40'),
(4, 1, 'Donation', 'donation', 1, '2024-01-25 12:22:50', '2024-01-25 12:22:50'),
(5, 1, 'Bills', 'bills', 1, '2024-01-25 12:23:18', '2024-01-25 12:23:18'),
(6, 1, 'Recharge', 'recharge', 1, '2024-01-25 12:23:36', '2024-01-25 12:23:36'),
(7, 1, 'Salary', 'salary', 1, '2024-01-25 12:23:42', '2024-01-25 12:23:42'),
(8, 1, 'Painting', 'painting', 1, '2024-01-25 12:24:12', '2024-01-25 12:24:12'),
(9, 1, 'Electricity', 'electricity', 1, '2024-01-25 12:24:19', '2024-01-25 12:24:19'),
(10, 1, 'House Repair', 'house-repair', 1, '2024-01-25 12:24:28', '2024-01-25 12:24:28'),
(11, 1, 'Online Shopping', 'online-shopping', 1, '2024-01-25 12:24:38', '2024-01-25 12:24:38'),
(12, 1, 'Offline Shopping', 'offline-shopping', 1, '2024-01-25 12:24:47', '2024-01-25 12:24:47'),
(13, 1, 'Food', 'food', 1, '2024-01-25 12:24:56', '2024-01-25 12:24:56'),
(14, 1, 'Groceries', 'groceries', 1, '2024-01-25 12:25:04', '2024-01-25 12:25:04'),
(15, 1, 'Rent', 'rent', 1, '2024-01-25 12:25:10', '2024-01-25 12:25:10'),
(16, 1, 'Others', 'others', 1, '2024-01-25 12:25:37', '2024-01-25 12:25:37'),
(17, 1, 'Petrol', 'petrol', 1, '2024-01-25 12:26:20', '2024-01-25 12:26:20'),
(18, 1, 'Travel', 'travel', 1, '2024-01-25 12:26:28', '2024-01-25 12:26:28'),
(19, 1, 'Insurance', 'insurance', 1, '2024-01-25 12:26:38', '2024-01-25 12:26:38'),
(20, 1, 'House Maintenance', 'house-maintenance', 1, '2024-01-25 12:27:27', '2024-01-25 12:27:27'),
(21, 1, 'Paper Work', 'paper-work', 1, '2024-01-25 12:27:34', '2024-01-25 12:27:34'),
(22, 1, 'EMI', 'emi', 1, '2024-01-25 12:28:12', '2024-01-25 12:28:12'),
(23, 1, 'Monthly Installment', 'monthly-installment', 1, '2024-01-25 12:28:24', '2024-01-25 12:28:24'),
(24, 1, 'Investment', 'investment', 1, '2024-01-25 12:28:32', '2024-01-25 12:28:32');

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

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `is_verified` tinyint(4) NOT NULL DEFAULT 1,
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
(1, '1AAH4vBAYm858-afa62b594c170a47cba04b2cd341498f', 'Vinay', 'vinaywebguy@gmail.com', '7206881088', 'e10adc3949ba59abbe56e057f20f883e', 1, 's4JBQllWKT', 0, 1, 0, 40000, '₹', 1, '2024-01-25 12:21:02', '2024-01-25 12:21:53');

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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
