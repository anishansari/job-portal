-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2019 at 06:14 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `four`
--

-- --------------------------------------------------------

--
-- Table structure for table `fours`
--

CREATE TABLE `fours` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fours`
--

INSERT INTO `fours` (`id`, `name`, `email`, `password`, `mobile`, `age`, `location`, `resume`, `skills`, `course`, `college`, `created_at`, `updated_at`) VALUES
(1, 'Anish', 'ansarianish4@gmail.com', '123456', 906606705, 20, 'Bangalore', 'a.doc', 'abc', 'BE', 'SaiT', '2019-02-10 07:43:08', '2019-02-10 07:43:08');

-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE `jobpost` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jdesc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skillneed` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experiance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(35, '2014_10_12_000000_create_users_table', 1),
(36, '2014_10_12_100000_create_password_resets_table', 1),
(37, '2019_02_07_050915_create_fours_table', 1),
(38, '2019_02_07_103002_create_jobpost_table', 1),
(39, '2019_02_07_112015_create_tests_table', 1),
(40, '2019_02_10_102543_create_roles_table', 1),
(41, '2019_02_10_103114_update_users_table', 1);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2019-02-10 05:40:36', '2019-02-10 05:40:36'),
(2, 'Company', '2019-02-10 05:40:36', '2019-02-10 05:40:36'),
(3, 'User', '2019-02-10 05:40:36', '2019-02-10 05:40:36');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jdesc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skillneed` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experiance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `jobtitle`, `company`, `jdesc`, `skillneed`, `duration`, `qualification`, `experiance`, `location`, `created_at`, `updated_at`) VALUES
(1, 'Web Developer', 'Microsoft', 'sdfsdfsdfsd', 'java', 3, 'B.E', '4', 'blr', '2019-02-20 10:36:31', '2019-02-20 10:36:31'),
(4, 'Full Stack', 'Sublime', 'dsfsdfsdf', 'PHP', 4, 'Diploma', '3', 'blr', '2019-02-20 10:37:12', '2019-02-20 10:37:12'),
(5, 'VScode', 'Microsoft', 'dfdfgd', 'java', 4, 'MSTER', '3', 'blr', '2019-02-20 10:56:12', '2019-02-20 10:56:12'),
(6, 'Chrome', 'Microsoft', 'detdrter', 'java', 4, 'B.E', '4', 'calc', '2019-02-20 10:56:35', '2019-02-20 10:56:35');

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
  `mobile` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `mobile`, `age`, `location`, `resume`, `skills`, `course`, `college`, `remember_token`, `created_at`, `updated_at`, `role_id`) VALUES
(2, 'Boss', 'admin@admin.com', NULL, '$2y$10$dyBDA0S3hKKCMd0DqJSa6easFv3CcjDaVY59XY/GH28hK3f/1tqi6', 971735213, 22, 'blr', 'C:\\xampp\\tmp\\phpCF93.tmp', 'c++', 'www', 'weqw', 'OlXLEFq5GSN0rVUPaMXEfvrEZ9o7TXkOH75JqBBMeYDcQmkcRfuy0pks1CuZ', '2019-02-10 08:17:08', '2019-02-10 08:17:08', 1),
(3, 'Anish Ansari', 'anishforever78@hotmail.com', NULL, '$2y$10$/azWRVBGEBw7TL9dOHBQFewXAOr156ymD3foyLZcdaINQLv2iJkP6', 906067053, 22, 'blr', 'C:\\xampp\\tmp\\php6A5E.tmp', 'C++', 'www', 'weqw', 't5JW8zEayjpYUlhcR7CSDYfQksZsgw0GGSsoeKAvxlqSfLD3o3aCJmL2QN2e', '2019-02-10 08:25:26', '2019-02-10 08:25:26', 3),
(4, 'Mahesh Sah', 'mahesh.nepal99@outlook.com', NULL, '$2y$10$HQLU9ucL9ij5JJ3NIE0dR.Cvk1/eq/.KVfmfBlTP2b3usuTDmH0k6', 971752113, 22, 'blr', 'C:\\xampp\\tmp\\php4A8F.tmp', 'c', 'www', 'weqw', 'H75EsgZf87117atYHJm55rBEEYFOHRtbhAwtgMlWoCbBkek6ZumAQoc6nfOv', '2019-02-10 08:29:40', '2019-02-10 08:29:40', 1),
(5, 'Surendra Kumar Sahani', 'sahani.surendra@yahoo.com', NULL, '$2y$10$EfxB8dHcRZBG/9lPqf.6Oe9vx9gUtY/M.OkGzPiUbKWrZKNPi7Y1W', 973836294, 34, 'blr', 'C:\\xampp\\tmp\\php3703.tmp', 'c', 'www', 'weqw', 'lUEr6iibdSRemTGccS8oRixpMU5Zx9cWPa8jTZBVVaRXqhcpQNnGUconB4Cv', '2019-02-10 08:30:40', '2019-02-10 08:30:40', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fours`
--
ALTER TABLE `fours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobpost`
--
ALTER TABLE `jobpost`
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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
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
-- AUTO_INCREMENT for table `fours`
--
ALTER TABLE `fours`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobpost`
--
ALTER TABLE `jobpost`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
