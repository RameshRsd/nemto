-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2019 at 08:46 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nemto`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Nepal', 1, '2019-04-18 23:21:25', '2019-04-18 23:21:25'),
(2, 'India', 1, '2019-04-19 00:22:01', '2019-04-19 00:22:01');

-- --------------------------------------------------------

--
-- Table structure for table `delegates`
--

CREATE TABLE `delegates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` enum('Mr','Mrs','Ms','Dr','Er','Prof','Col') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delegates`
--

INSERT INTO `delegates` (`id`, `title`, `company_name`, `f_name`, `l_name`, `designation`, `address1`, `address2`, `country_id`, `state_id`, `district_id`, `city`, `tel`, `mobile`, `email`, `email2`, `website`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mrs', 'Miles Pitts Traders', 'Marny', 'Scott', 'Alias deserunt aliqu', '88 West Second Parkway', 'Soluta asperiores te', '1', '2', '39', 'Facere ullamco sit', '+1 (738) 181-5072', '4564472', 'gifyc@mailinator.com', 'nakovyk@mailinator.com', 'https://www.buqivytyvohur.net', 'active', '2019-07-12 22:35:23', '2019-07-12 22:35:23');

-- --------------------------------------------------------

--
-- Table structure for table `diplomatics`
--

CREATE TABLE `diplomatics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` enum('Mr','Mrs','Ms','Dr','Er','Prof','Col') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diplomatics`
--

INSERT INTO `diplomatics` (`id`, `title`, `company_name`, `f_name`, `l_name`, `designation`, `address1`, `address2`, `country_id`, `state_id`, `district_id`, `city`, `tel`, `mobile`, `email`, `email2`, `website`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Prof', 'Schneider Burgess Traders', 'Haviva', 'Sawyer', 'Deserunt dicta assum', '59 West Green Milton Extension', 'Corrupti architecto', '1', '2', '4', 'Rerum velit voluptat', '+1 (649) 649-8285', '5445', 'fatakufeby@mailinator.com', 'lobi@mailinator.net', 'https://www.zigor.com.au', 'active', '2019-07-13 00:50:53', '2019-07-13 00:50:53');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `state_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Kathmandu', 1, 1, '2019-04-18 23:21:25', '2019-04-18 23:21:25'),
(2, 'Bhaktapur', 1, 1, '2019-04-18 23:37:43', '2019-04-18 23:37:43'),
(3, 'Lalitpur', 1, 1, '2019-04-18 23:37:49', '2019-04-18 23:37:49'),
(4, 'Kaski', 2, 1, '2019-04-19 00:21:39', '2019-04-19 00:21:39'),
(5, 'Tanahun', 2, 1, '2019-04-19 00:21:45', '2019-04-19 00:21:45'),
(6, 'Nuwakot', 1, 1, '2019-04-19 02:26:47', '2019-04-19 02:26:47'),
(7, 'Bhojpur', 3, 1, '2019-04-24 21:21:25', '2019-04-24 21:21:25'),
(8, 'Dhankuta', 3, 1, '2019-04-24 21:21:34', '2019-04-24 21:21:34'),
(9, 'Ilam', 3, 1, '2019-04-24 21:21:43', '2019-04-24 21:21:43'),
(10, 'Jhapa', 3, 1, '2019-04-24 21:21:48', '2019-04-24 21:21:48'),
(11, 'Khotang', 3, 1, '2019-04-24 21:21:56', '2019-04-24 21:21:56'),
(12, 'Morang', 3, 1, '2019-04-24 21:22:01', '2019-04-24 21:22:01'),
(13, 'Okhaldhunga', 3, 1, '2019-04-24 21:22:10', '2019-04-24 21:22:24'),
(14, 'Panchthar', 3, 1, '2019-04-24 21:22:35', '2019-04-24 21:22:35'),
(15, 'Sankhuwasabha', 3, 1, '2019-04-24 21:22:41', '2019-04-24 21:22:41'),
(16, 'Sunsari', 3, 1, '2019-04-24 21:22:50', '2019-04-24 21:22:50'),
(17, 'Taplejung', 3, 1, '2019-04-24 21:22:56', '2019-04-24 21:22:56'),
(18, 'Terhathum', 3, 1, '2019-04-24 21:23:07', '2019-04-24 21:23:07'),
(19, 'Udaypur', 3, 1, '2019-04-24 21:23:15', '2019-04-24 21:23:15'),
(20, 'Saptari', 4, 1, '2019-04-24 21:24:34', '2019-04-24 21:24:34'),
(21, 'Parsa', 4, 1, '2019-04-24 21:24:43', '2019-04-24 21:24:43'),
(22, 'Sarlahi', 4, 1, '2019-04-24 21:24:52', '2019-04-24 21:24:52'),
(23, 'Bara', 4, 1, '2019-04-24 21:24:57', '2019-04-24 21:24:57'),
(24, 'Siraha', 4, 1, '2019-04-24 21:25:05', '2019-04-24 21:25:05'),
(25, 'Dhanusha', 4, 1, '2019-04-24 21:25:13', '2019-04-24 21:25:13'),
(26, 'Rautahat', 4, 1, '2019-04-24 21:25:21', '2019-04-24 21:25:21'),
(27, 'Mahottari', 4, 1, '2019-04-24 21:25:30', '2019-04-24 21:25:30'),
(28, 'Chitwan', 1, 1, '2019-04-24 21:26:07', '2019-04-24 21:26:07'),
(29, 'Dhading', 1, 1, '2019-04-24 21:26:16', '2019-04-24 21:26:16'),
(30, 'Dolakha', 1, 1, '2019-04-24 21:26:22', '2019-04-24 21:26:22'),
(31, 'Kavrepalanchok', 1, 1, '2019-04-24 21:26:35', '2019-04-24 21:26:35'),
(32, 'Makwanpur', 1, 1, '2019-04-24 21:26:44', '2019-04-24 21:26:44'),
(33, 'Ramechhap', 1, 1, '2019-04-24 21:26:56', '2019-04-24 21:26:56'),
(34, 'Rasuwa', 1, 1, '2019-04-24 21:27:02', '2019-04-24 21:27:02'),
(35, 'Sindhuli', 1, 1, '2019-04-24 21:27:19', '2019-04-24 21:27:19'),
(36, 'Sindhupalchowk', 1, 1, '2019-04-24 21:27:26', '2019-04-24 21:27:26'),
(37, 'Baglung', 2, 1, '2019-04-24 21:27:58', '2019-04-24 21:27:58'),
(38, 'Gorkha', 2, 1, '2019-04-24 21:28:06', '2019-04-24 21:28:06'),
(39, 'Lamjung', 2, 1, '2019-04-24 21:28:13', '2019-04-24 21:28:13'),
(40, 'Manang', 2, 1, '2019-04-24 21:28:37', '2019-04-24 21:28:37'),
(41, 'Mustang', 2, 1, '2019-04-24 21:28:45', '2019-04-24 21:28:45'),
(42, 'Myagdi', 2, 1, '2019-04-24 21:29:04', '2019-04-24 21:29:04'),
(43, 'Nawalpur', 2, 1, '2019-04-24 21:29:10', '2019-04-24 21:29:10'),
(44, 'Parbat', 2, 1, '2019-04-24 21:29:19', '2019-04-24 21:29:19'),
(45, 'Syangja', 2, 1, '2019-04-24 21:29:26', '2019-04-24 21:29:26'),
(46, 'Arghakhanchi', 5, 1, '2019-04-24 21:30:01', '2019-04-24 21:30:01'),
(47, 'Banke', 5, 1, '2019-04-24 21:30:08', '2019-04-24 21:30:08'),
(48, 'Bardiya', 5, 1, '2019-04-24 21:30:16', '2019-04-24 21:30:16'),
(49, 'Dang', 5, 1, '2019-04-24 21:30:26', '2019-04-24 21:30:26'),
(50, 'Eastern Rukum', 5, 1, '2019-04-24 21:30:37', '2019-04-24 21:30:37'),
(51, 'Gulmi', 5, 1, '2019-04-24 21:30:45', '2019-04-24 21:30:45'),
(52, 'Kapilvastu', 5, 1, '2019-04-24 21:30:53', '2019-04-24 21:30:53'),
(53, 'Parasi', 5, 1, '2019-04-24 21:31:03', '2019-04-24 21:31:03'),
(54, 'Palpa', 5, 1, '2019-04-24 21:31:12', '2019-04-24 21:31:12'),
(55, 'Pyuthan', 5, 1, '2019-04-24 21:31:20', '2019-04-24 21:31:20'),
(56, 'Rolpa', 5, 1, '2019-04-24 21:31:28', '2019-04-24 21:31:28'),
(57, 'Rupandehi', 5, 1, '2019-04-24 21:31:38', '2019-04-24 21:31:38'),
(58, 'Dailekh', 6, 1, '2019-04-24 21:32:18', '2019-04-24 21:32:18'),
(59, 'Dolpa', 6, 1, '2019-04-24 21:32:29', '2019-04-24 21:32:29'),
(60, 'Dumla', 6, 1, '2019-04-24 21:32:59', '2019-04-24 21:32:59'),
(61, 'Jajarkot', 6, 1, '2019-04-24 21:33:57', '2019-04-24 21:33:57'),
(62, 'Jumla', 6, 1, '2019-04-24 21:34:04', '2019-04-24 21:34:04'),
(63, 'Kalikot', 6, 1, '2019-04-24 21:34:13', '2019-04-24 21:34:13'),
(64, 'Mugu', 6, 1, '2019-04-24 21:34:20', '2019-04-24 21:34:20'),
(65, 'Salyan', 6, 1, '2019-04-24 21:34:45', '2019-04-24 21:34:45'),
(66, 'Surkhet', 6, 1, '2019-04-24 21:34:52', '2019-04-24 21:34:52'),
(67, 'Western Rukum', 6, 1, '2019-04-24 21:35:05', '2019-04-24 21:35:05'),
(68, 'Achham', 7, 1, '2019-04-24 21:35:42', '2019-04-24 21:35:42'),
(69, 'Baitadi', 7, 1, '2019-04-24 21:35:50', '2019-04-24 21:35:50'),
(70, 'Bajhang', 7, 1, '2019-04-24 21:35:55', '2019-04-24 21:35:55'),
(71, 'Bajura', 7, 1, '2019-04-24 21:36:08', '2019-04-24 21:36:08'),
(72, 'Dadeldhura', 7, 1, '2019-04-24 21:36:16', '2019-04-24 21:36:16'),
(73, 'Darchula', 7, 1, '2019-04-24 21:36:24', '2019-04-24 21:36:24'),
(74, 'Doti', 7, 1, '2019-04-24 21:36:29', '2019-04-24 21:36:29'),
(75, 'Kailali', 7, 1, '2019-04-24 21:36:39', '2019-04-24 21:36:39'),
(76, 'Kanchanpur', 7, 1, '2019-04-24 21:36:44', '2019-04-24 21:36:44'),
(77, 'Solukhumbu', 3, 1, '2019-04-24 21:38:12', '2019-04-24 21:38:12'),
(78, 'Outside Valley', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exhibitors`
--

CREATE TABLE `exhibitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` enum('Mr','Mrs','Ms','Dr','Er','Prof','Col') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foreign_delegates`
--

CREATE TABLE `foreign_delegates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `register` enum('Yes','No') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attend` enum('Yes','No') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('Male','Female','Others') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` enum('Mr','Mrs','Ms','Dr','Er','Prof','Col') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recommended_id` int(11) DEFAULT NULL,
  `recommended_other` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation_id` int(11) DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foreign_delegates`
--

INSERT INTO `foreign_delegates` (`id`, `register`, `attend`, `gender`, `title`, `f_name`, `l_name`, `recommended_id`, `recommended_other`, `occupation_id`, `company_name`, `designation`, `address1`, `address2`, `country_id`, `state_id`, `district_id`, `city`, `tel1`, `tel2`, `mobile1`, `mobile2`, `email`, `website`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Yes', 'No', 'Male', 'Er', 'Melton', 'Melton', 3, 'NA', 1, 'Padilla and Weiss Inc', 'Nisi quos sit quia v', '205 North Milton Lane', 'Dolorem magnam delen', '1', '2', '4', 'Optio sapiente quas', '+1 (185) 219-7469', '8768', '797889', '676', 'legojicub@mailinator.net', 'https://www.muhysuzedepygyx.org', 'Enim non ut consecte', 'active', '2019-07-13 00:16:19', '2019-07-13 00:16:19'),
(2, 'Yes', 'No', 'Others', 'Mrs', 'Nerea', 'Lynch', 2, NULL, 12, 'Bruce Dickerson Traders', 'Suscipit explicabo', '22 East Clarendon Street', 'Dolorem aut in ipsam', '1', '2', '4', 'Quia velit quia natu', '+1 (203) 373-2205', 'Ducimus quia exerci', '968', 'Do quaerat itaque al', 'manuly@mailinator.net', 'https://www.nutyqyvoki.cm', 'Et beatae repudianda', 'active', '2019-07-13 00:17:11', '2019-07-13 00:17:11');

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
(3, '2019_07_12_080810_create_exhibitors_table', 1),
(4, '2019_07_12_081423_create_delegates_table', 1),
(5, '2019_07_12_082725_create_countries_table', 1),
(6, '2019_07_12_082813_create_states_table', 1),
(7, '2019_07_12_082838_create_districts_table', 1),
(8, '2019_07_13_043511_create_recommended_table', 2),
(9, '2019_07_13_043537_create_occupations_table', 2),
(10, '2019_07_13_053241_create_foreign_delegates_table', 3),
(11, '2019_07_13_063006_create_diplomatics_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `occupations`
--

CREATE TABLE `occupations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `occupations`
--

INSERT INTO `occupations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'CEO of the leading Hospital', '2019-07-12 23:44:47', '2019-07-12 23:44:47'),
(2, 'Head of Government Hospital', '2019-07-12 23:44:47', '2019-07-12 23:44:47'),
(3, 'President/Secretary of Medical Association', '2019-07-12 23:44:47', '2019-07-12 23:44:47'),
(4, 'Senior Officers from Health Ministry', '2019-07-12 23:44:48', '2019-07-12 23:44:48'),
(5, 'Senior Officers from Health Insurance Company', '2019-07-12 23:44:48', '2019-07-12 23:44:48'),
(6, 'Medical Travel Facilitator', '2019-07-12 23:44:48', '2019-07-12 23:44:48'),
(7, 'Medical Directors', '2019-07-12 23:44:48', '2019-07-12 23:44:48'),
(8, 'Medical Officers', '2019-07-12 23:44:48', '2019-07-12 23:44:48'),
(9, 'Paramedical Officers', '2019-07-12 23:44:48', '2019-07-12 23:44:48'),
(10, 'Medical Trade Journalist', '2019-07-12 23:44:48', '2019-07-12 23:44:48'),
(11, 'Medical Devices & Technology Dealer/Importer', '2019-07-12 23:44:48', '2019-07-12 23:44:48'),
(12, 'Healthcare Enterprenures & Investors', '2019-07-12 23:44:48', '2019-07-12 23:44:48'),
(13, 'Others', '2019-07-12 23:44:48', '2019-07-12 23:44:48');

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
-- Table structure for table `recommended`
--

CREATE TABLE `recommended` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recommended`
--

INSERT INTO `recommended` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Nepalese Mission in Your Country', '2019-07-13 00:04:13', '2019-07-13 00:04:13'),
(2, 'Your Country Mission in Nepal', '2019-07-13 00:04:13', '2019-07-13 00:04:13'),
(3, 'Others (Please Specify)', '2019-07-13 00:04:13', '2019-07-13 00:04:13'),
(4, 'None', '2019-07-13 00:04:13', '2019-07-13 00:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `user_id`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Province-3', 1, 1, '2019-04-18 23:21:25', '2019-04-24 21:19:09'),
(2, 'Province-4 (Gandaki)', 1, 1, '2019-04-19 00:21:30', '2019-04-24 21:19:18'),
(3, 'Province-1', 1, 1, '2019-04-24 21:19:42', '2019-04-24 21:19:42'),
(4, 'Province-2', 1, 1, '2019-04-24 21:19:54', '2019-04-24 21:19:54'),
(5, 'Province-5', 1, 1, '2019-04-24 21:20:08', '2019-04-24 21:20:08'),
(6, 'Province-6 (Karnali)', 1, 1, '2019-04-24 21:20:24', '2019-04-24 21:20:24'),
(7, 'Province-7 (Sudurpashchim)', 1, 1, '2019-04-24 21:20:40', '2019-04-24 21:39:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('admin','guest') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$zWzAp4tROHes/X3IMGAXju6GqvXTVcjUyu4z8twG0/xj7SHZ2nc4.', 'admin', 'active', NULL, '2019-07-12 22:25:33', '2019-07-12 22:25:33'),
(2, 'Guest', 'guest@gmail.com', NULL, '$2y$10$jh8.en43EJwJ950qVaQZOeIX2UfdxHbgqfz0GD8E0kO8kebuvQcOe', 'guest', 'active', NULL, '2019-07-12 22:25:33', '2019-07-12 22:25:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delegates`
--
ALTER TABLE `delegates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diplomatics`
--
ALTER TABLE `diplomatics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exhibitors`
--
ALTER TABLE `exhibitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foreign_delegates`
--
ALTER TABLE `foreign_delegates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `occupations`
--
ALTER TABLE `occupations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `recommended`
--
ALTER TABLE `recommended`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
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
-- AUTO_INCREMENT for table `delegates`
--
ALTER TABLE `delegates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `diplomatics`
--
ALTER TABLE `diplomatics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exhibitors`
--
ALTER TABLE `exhibitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foreign_delegates`
--
ALTER TABLE `foreign_delegates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `occupations`
--
ALTER TABLE `occupations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `recommended`
--
ALTER TABLE `recommended`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
