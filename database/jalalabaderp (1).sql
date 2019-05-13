-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2019 at 06:04 PM
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
-- Database: `jalalabaderp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `emp_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '12341234',
  `role_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `department` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `emp_leave_enjoy` decimal(10,0) DEFAULT NULL,
  `emp_leave_balance` decimal(10,0) DEFAULT NULL,
  `last_leave_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `emp_id`, `name`, `email`, `password`, `role_id`, `status`, `department`, `designation`, `joining_date`, `emp_leave_enjoy`, `emp_leave_balance`, `last_leave_date`, `created_at`, `updated_at`) VALUES
(42, 'HR12', 'Imran', 'hr@jsbl.com', '$2y$10$K.gWM7b1d3seccujBglyAO74FXRVlxgbBJ6vISgu4VzfwcCh9wxZC', '2', 1, NULL, NULL, NULL, '0', '0', '0000-00-00', '2019-04-20 02:52:33', '2019-04-24 14:17:59'),
(44, 'IT09', 'Imam Hossain', 'imam@jsbl.com', '$2y$10$iRT0XMjdSdCvuja5fZNoEOgjAt1fI6sWjDWayX3abIJBXdmG2siOe', '2', 1, NULL, NULL, NULL, '0', '0', '0000-00-00', '2019-04-20 10:04:32', '2019-04-29 12:19:58'),
(49, 'MR15', 'mehedi_b', 'mehedi@jsbl.com', '$2y$10$qiFcEZk/jG10RsUNKgCz9u1ulnWxjomJIXBUTpKpB8HHX9iHgBeWK', '2', 1, NULL, NULL, NULL, '0', '0', '0000-00-00', '2019-04-20 10:26:01', '2019-04-30 12:39:57'),
(50, 'AD002', 'Imran_b', 'imran@jsbl.com', '$2y$10$907tmtCT7G2a.wpzzJDArOxtHuwymftpEyl8HZYzSvjFUxBxVT2uu', '2', 0, NULL, NULL, NULL, '0', '0', '0000-00-00', '2019-04-30 12:19:47', '2019-04-30 12:54:00'),
(56, 'AD001', 'SuperAdmin', 'admin@jsbl.com', '$2y$10$.eKWOtxAPBWG/Ezkd9dH2.lQo.AV4O913eMvfAaI2fPw18miaNP4G', '1', 1, 'Admin', 'Manager', NULL, '5', '4', NULL, '2019-05-02 06:44:59', '2019-05-02 06:51:10');

-- --------------------------------------------------------

--
-- Table structure for table `admin_roles`
--

CREATE TABLE `admin_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_infos`
--

CREATE TABLE `contact_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `emp_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_infos`
--

INSERT INTO `contact_infos` (`id`, `emp_id`, `mobile`, `mobile2`, `email2`, `created_at`, `updated_at`) VALUES
(13, 'MR12', NULL, NULL, NULL, '2019-04-20 02:50:34', '2019-04-20 02:50:34'),
(14, 'HR12', NULL, NULL, NULL, '2019-04-20 02:52:33', '2019-04-20 02:52:33'),
(15, 'DES12', NULL, NULL, NULL, '2019-04-20 02:55:54', '2019-04-20 02:55:54'),
(16, 'IT09', '01726543381', '01833333', 'imam2@jsbl.com', '2019-04-20 10:04:32', '2019-04-20 10:09:04'),
(17, '1212', NULL, NULL, NULL, '2019-04-20 10:20:04', '2019-04-20 10:20:04'),
(18, 'ADM12', NULL, NULL, NULL, '2019-04-20 10:21:20', '2019-04-20 10:21:20'),
(19, 'MR13', NULL, NULL, NULL, '2019-04-20 10:24:26', '2019-04-20 10:24:26'),
(20, 'MR14', NULL, NULL, NULL, '2019-04-20 10:25:09', '2019-04-20 10:25:09'),
(21, 'MR15', NULL, NULL, NULL, '2019-04-20 10:26:02', '2019-04-20 10:26:02'),
(22, 'AD001', NULL, NULL, NULL, '2019-04-30 12:19:47', '2019-04-30 12:19:47'),
(23, 'AD001', NULL, NULL, NULL, '2019-04-30 12:21:28', '2019-04-30 12:21:28'),
(24, 'imam@jsbl.com', NULL, NULL, NULL, '2019-04-30 12:34:34', '2019-04-30 12:34:34'),
(25, '23', NULL, NULL, NULL, '2019-04-30 14:19:05', '2019-04-30 14:19:05'),
(26, '33', NULL, NULL, NULL, '2019-05-02 06:13:58', '2019-05-02 06:13:58'),
(27, 'r', NULL, NULL, NULL, '2019-05-02 06:43:28', '2019-05-02 06:43:28'),
(28, 'admin@jsbl.com', NULL, NULL, NULL, '2019-05-02 06:44:59', '2019-05-02 06:44:59');

-- --------------------------------------------------------

--
-- Table structure for table `image_infos`
--

CREATE TABLE `image_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `emp_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_infos`
--

INSERT INTO `image_infos` (`id`, `emp_id`, `image`, `created_at`, `updated_at`) VALUES
(4, 'MR15', 'public/a7BsFDzTpPZOmbtAP7uyMDNnJ2dVgF2KHYS12qXH.png', '2019-04-20 10:26:02', '2019-04-20 10:30:54'),
(7, NULL, 'public/employee/jgo2NnouEHQmOFLDsVMc.png', NULL, NULL),
(8, 'AD001', NULL, '2019-04-30 12:19:47', '2019-04-30 12:19:47'),
(9, 'AD001', NULL, '2019-04-30 12:21:28', '2019-04-30 12:21:28'),
(10, 'imam@jsbl.com', NULL, '2019-04-30 12:34:34', '2019-04-30 12:34:34'),
(11, '23', NULL, '2019-04-30 14:19:05', '2019-04-30 14:19:05'),
(12, '33', NULL, '2019-05-02 06:13:58', '2019-05-02 06:13:58'),
(13, 'r', NULL, '2019-05-02 06:43:28', '2019-05-02 06:43:28'),
(14, 'admin@jsbl.com', NULL, '2019-05-02 06:44:59', '2019-05-02 06:44:59');

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
(24, '2014_10_12_000000_create_users_table', 1),
(25, '2014_10_12_100000_create_password_resets_table', 1),
(26, '2019_03_30_025627_create_posts_table', 1),
(27, '2019_03_31_044338_create_personal_infos_table', 1),
(28, '2019_04_01_070912_add_category_id_to_posts', 1),
(29, '2019_04_01_072238_remove_category_id_to_posts', 2),
(30, '2019_04_01_072318_remove_category_id_to_posts', 3),
(31, '2019_04_01_072410_remove_category_id_from_posts', 4),
(32, '2019_04_02_043244_create_contact_infos_table', 5),
(33, '2019_04_02_054508_create_profile_images_table', 5),
(34, '2019_04_02_062306_create_image_infos_table', 5),
(35, '2019_04_04_060245_create_admins_table', 6),
(36, '2019_04_04_060444_create_roles_table', 6),
(37, '2019_04_04_060556_create_admin_roles_table', 6);

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
-- Table structure for table `personal_infos`
--

CREATE TABLE `personal_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `emp_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_you` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_infos`
--

INSERT INTO `personal_infos` (`id`, `emp_id`, `fname`, `lname`, `father_name`, `mother_name`, `gender`, `dob`, `marital_status`, `blood`, `religion`, `nationality`, `nid`, `about_you`, `created_at`, `updated_at`) VALUES
(23, 'MR12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-20 02:50:34', '2019-04-20 02:50:34'),
(24, 'HR12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-20 02:52:33', '2019-04-20 02:52:33'),
(25, 'DES12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-20 02:55:54', '2019-04-20 02:55:54'),
(26, 'IT09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-20 10:04:32', '2019-04-20 10:04:32'),
(27, '1212', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-20 10:20:04', '2019-04-20 10:20:04'),
(28, 'ADM12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-20 10:21:20', '2019-04-20 10:21:20'),
(29, 'MR13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-20 10:24:26', '2019-04-20 10:24:26'),
(30, 'MR14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-20 10:25:09', '2019-04-20 10:25:09'),
(31, 'MR15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-20 10:26:01', '2019-04-20 10:26:01'),
(32, 'AD001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-30 12:19:47', '2019-04-30 12:19:47'),
(33, 'AD001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-30 12:21:28', '2019-04-30 12:21:28'),
(34, 'imam@jsbl.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-30 12:34:34', '2019-04-30 12:34:34'),
(35, '23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-30 14:19:05', '2019-04-30 14:19:05'),
(36, '33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-02 06:13:58', '2019-05-02 06:13:58'),
(37, 'r', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-02 06:43:28', '2019-05-02 06:43:28'),
(38, 'admin@jsbl.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-02 06:44:59', '2019-05-02 06:44:59');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_sub_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_sub_title`, `post_content`, `created_at`, `updated_at`, `category_id`) VALUES
(1, 'First Post Title', 'Second Post Sub Title', 'wqer', '2019-04-03 12:24:21', '2019-04-03 12:24:21', NULL),
(3, 'gg', 'gg', 'gg', '2019-04-03 12:24:41', '2019-04-03 12:24:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2019-04-21 14:42:26', '2019-04-30 13:53:17'),
(2, 'Employee', '2019-04-21 14:45:03', '2019-04-30 13:53:25'),
(6, 'Department Head', '2019-04-30 14:14:25', '2019-04-30 14:14:46');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Rayhan SUST', 'rayhansshhh@jsbl.com', NULL, '$2y$10$R7CyppSp0FiuyY3/MgPMtexkdMWKXxKYS78bxD69yKNtBWboaB6a6', 'm7mPIbqtckUuBgwS0mo3zN0hjBHAatg4h8DFuN6HZSxKjslmmV6C6buCtPkl', '2019-04-18 12:42:05', '2019-04-18 15:27:21'),
(3, 'imamjsbl', 'imam@jsbl.com', NULL, '$2y$10$usSFKQtFLCDWTGV4FUf6I.m7ip5uzgxk3TfCwOtkGjd2M4zjWlHcK', '6ICcOCi1glDTwmfZ9J5OOsTjQ4MKm5gUNxZT6sIKlNs5Gm95t5BHD3N28Eph', '2019-04-20 13:01:31', '2019-04-20 13:01:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_roles`
--
ALTER TABLE `admin_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_infos`
--
ALTER TABLE `contact_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_infos`
--
ALTER TABLE `image_infos`
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
-- Indexes for table `personal_infos`
--
ALTER TABLE `personal_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `admin_roles`
--
ALTER TABLE `admin_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_infos`
--
ALTER TABLE `contact_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `image_infos`
--
ALTER TABLE `image_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `personal_infos`
--
ALTER TABLE `personal_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
