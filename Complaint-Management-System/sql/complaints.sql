-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2019 at 08:37 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complaints`
--

-- --------------------------------------------------------

--
-- Table structure for table `comps`
--

CREATE TABLE `comps` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comps`
--

INSERT INTO `comps` (`id`, `name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_24_121454_create_comps_table', 1),
(4, '2018_10_24_125809_create_registers_table', 2),
(5, '2018_10_24_131925_create_regis_table', 3),
(6, '2018_10_25_061147_create_replies_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `id` int(10) UNSIGNED NOT NULL,
  `random` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`id`, `random`, `subject`, `description`, `date`, `created_at`, `updated_at`) VALUES
(10, '1776546523', 'bifjcm', 'olmdc,', '2018-10-25', NULL, NULL),
(13, '308653646', 'abik', 'mkdpo', '2018-10-25', NULL, NULL),
(19, '387040270', 'Offer Letter', 'bfdbdbfbfd\r\nfdbfdb\r\ndff\r\nb', '2018-10-25', NULL, NULL),
(20, '1842159245', 'abc', 'gfdgdfdff\r\ng\r\ngdf\r\ngfd', '2018-10-25', NULL, NULL),
(21, '192143624', 'Offer Letter', 'jgyvhnb', '2018-11-13', NULL, NULL),
(22, '1974160610', 'Offer Letter', 'fdsvfds', '2018-11-15', NULL, NULL),
(23, '843381934', 'Offer Letter', 'dsvwd', '2018-11-20', NULL, NULL),
(24, '2060706782', 'Offer Letter', 'fdsfs', '2018-11-20', NULL, NULL),
(26, '88722955', 'Offer Letter', 'fdsffsd', '2018-11-23', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(10) UNSIGNED NOT NULL,
  `random` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reply` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `random`, `date`, `subject`, `description`, `reply`, `created_at`, `updated_at`) VALUES
(15, '2134032066', '2018-10-25', 'Offer Letter', 'dvvfdvdffdvfddfb\r\nfbfd\r\nbddf', 'psmdso', NULL, NULL),
(16, '117283445', '2018-10-25', 'xbdvbf', 'fdbdfbfbdfbfdb', 'reply by sahil', NULL, NULL),
(17, '764660378', '2018-10-25', 'abik', 'mkdpo', 'reply by', NULL, NULL),
(18, '1651382436', '2018-10-25', 'Offer Letter', 'dvvfdvdffdvfddfb\r\nfbfd\r\nbddf', 'gfdgfdg', NULL, NULL),
(19, '69232253', '2018-10-25', 'Offer Letter', 'dvvfdvdffdvfddfb\r\nfbfd\r\nbddf', 'dfgdfgfdgd', NULL, NULL),
(20, '96449875', '2018-10-25', 'grfgfdgdgfdgdfg', 'bdfvdfbdfbdgbbdf', 'reply by tamatya', NULL, NULL),
(21, '1739460662', '2018-10-25', 'gfdgdfgdf', 'gfdfgfgfdgfdgdgfgdfbgdgdfgfd', 'reply by pooja', NULL, NULL),
(22, '1639733815', '2018-10-26', 'Offer Letter', 'fffdfdsfsds dfdsf ffds dsf fsdf df  fdf dsfdfd', 'fdsfsffd\r\nfdsfds fdsd sfds dsds sd s d', NULL, NULL),
(23, '714929977', '2018-10-26', 'Offer Letter', 'dsfdsf sdfs sdf ssddsfdsfsd dds dsdsfs d', 'xddvdfdfdfdfddfd fdsf g', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comps`
--
ALTER TABLE `comps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `regis`
--
ALTER TABLE `regis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comps`
--
ALTER TABLE `comps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `regis`
--
ALTER TABLE `regis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
