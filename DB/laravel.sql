-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2019 at 06:35 PM
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
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `forbills`
--

CREATE TABLE `forbills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_10_26_094832_create_newapk_table', 2),
(4, '2019_10_26_113529_newapk', 3),
(5, '2019_10_26_114145_create_newapk_table', 4),
(6, '2019_10_26_132412_create_newapks_table', 5),
(7, '2019_10_26_132625_create_newapks_table', 6),
(8, '2019_10_27_062818_create_newapks_table', 7),
(9, '2019_10_27_072204_create_newapks_table', 8),
(10, '2019_10_27_164653_create_kottaym_table', 9),
(11, '2019_10_27_164950_create_kottaym_table', 10),
(12, '2019_10_28_081357_create_newapks_table', 11),
(13, '2019_10_28_185406_create_newapks_table', 12),
(14, '2019_10_31_084529_create_taluks_table', 13),
(15, '2019_10_31_084837_create_villages_table', 13),
(16, '2019_10_31_090346_create_panchayaths_table', 13),
(17, '2019_10_31_093439_create_taluks_table', 14),
(18, '2019_10_31_151223_create_taluks_table', 15),
(19, '2019_11_01_054528_create_newapks_table', 16),
(20, '2019_11_01_055440_create_newapks_table', 17),
(21, '2019_11_02_031823_create_newapks_table', 18),
(22, '2019_11_02_080612_create_newapks_table', 19),
(23, '2019_11_02_084613_create_newapks_table', 20),
(24, '2019_11_02_105341_create_newapks_table', 21),
(25, '2019_11_02_105741_create_newapks_table', 22),
(26, '2019_11_02_114903_create_newapks_table', 23),
(27, '2019_11_02_115246_create_newapks_table', 24),
(28, '2019_11_04_152735_create_newapks_table', 25),
(29, '2019_11_04_155110_create_newapks_table', 26),
(30, '2019_11_04_155640_add_isbill_to_newapks', 27),
(31, '2019_11_04_155811_create_forbills_table', 28),
(32, '2019_11_04_161848_create_newapks_table', 28);

-- --------------------------------------------------------

--
-- Table structure for table `newapks`
--

CREATE TABLE `newapks` (
  `ration` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `head` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `housename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taluk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `village` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `panchayath` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nofamily` int(11) DEFAULT NULL,
  `adhar` bigint(20) DEFAULT NULL,
  `account` bigint(20) DEFAULT NULL,
  `ifsc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isbill` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newapks`
--

INSERT INTO `newapks` (`ration`, `name`, `gender`, `age`, `mobile`, `head`, `housename`, `taluk`, `village`, `panchayath`, `nofamily`, `adhar`, `account`, `ifsc`, `isbill`, `created_at`, `updated_at`) VALUES
(1523172830, 'kunjumol', 'female', 41, 9876543210, 'yes', 'thengumpalli', 'ktym', 'arpookara', 'arpookara', 0, 439613486131, 1234567890, 'asdf123456', 0, '2019-11-04 10:52:56', '2019-11-04 10:52:56'),
(1523172860, 'ashwin', 'male', 55, 9876543210, 'no', 'kokilam', 'kottayam', 'nedumkuzhi', 'pampady', 10, 123456789012, 1234567890, 'asdf123456', 0, '2019-11-09 02:38:56', '2019-11-09 07:47:17');

-- --------------------------------------------------------

--
-- Table structure for table `panchayaths`
--

CREATE TABLE `panchayaths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taluks`
--

CREATE TABLE `taluks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kottayam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taluks`
--

INSERT INTO `taluks` (`id`, `kottayam`) VALUES
(1, 'Kottayam');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isadmin` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `isadmin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 1, NULL, '$2y$10$8CgSOByvWHtKjuMgrTaUqO3.A4gU4rxqTUGH.q7XM0tduHMWAAdAq', NULL, '2019-10-25 23:27:28', '2019-10-25 23:27:28'),
(2, 'user', 'user@gmail.com', 0, NULL, '$2y$10$UQXNqoZN6qXwkDhzHpcPr.dSqLb/6ExEl7341OLYdLNYWM37Cle7C', NULL, '2019-10-25 23:45:31', '2019-10-25 23:45:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forbills`
--
ALTER TABLE `forbills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newapks`
--
ALTER TABLE `newapks`
  ADD PRIMARY KEY (`ration`);

--
-- Indexes for table `panchayaths`
--
ALTER TABLE `panchayaths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `taluks`
--
ALTER TABLE `taluks`
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
-- AUTO_INCREMENT for table `forbills`
--
ALTER TABLE `forbills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `panchayaths`
--
ALTER TABLE `panchayaths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taluks`
--
ALTER TABLE `taluks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
