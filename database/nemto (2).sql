-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2019 at 11:28 AM
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
-- Table structure for table `abstract_submissions`
--

CREATE TABLE `abstract_submissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` enum('Mr','Mrs','Ms','Dr','Er','Prof','Col') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `presentation_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `abstract_info` text COLLATE utf8mb4_unicode_ci,
  `objective` text COLLATE utf8mb4_unicode_ci,
  `method` text COLLATE utf8mb4_unicode_ci,
  `result` text COLLATE utf8mb4_unicode_ci,
  `conclusion` text COLLATE utf8mb4_unicode_ci,
  `question1` text COLLATE utf8mb4_unicode_ci,
  `question2` text COLLATE utf8mb4_unicode_ci,
  `nature` text COLLATE utf8mb4_unicode_ci,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abstract_submissions`
--

INSERT INTO `abstract_submissions` (`id`, `title`, `name`, `company_name`, `presentation_title`, `email`, `mobile`, `address1`, `abstract_info`, `objective`, `method`, `result`, `conclusion`, `question1`, `question2`, `nature`, `status`, `file`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Mr', 'Arden Mckay', 'Sheppard Atkinson Associates', 'Veniam consequatur', 'duwujydip@mailinator.net', '4645652', '98 West Old Boulevard', 'Dolorem explicabo V', 'Eius molestias optio', 'Dolorem sed et atque', 'Nulla praesentium of', 'Magna sed rerum libe', 'Sint adipisicing err', 'Et deleniti et quam', 'Qui nesciunt in ips', 'inactive', NULL, NULL, '2019-07-13 02:23:27', '2019-07-13 02:23:27'),
(2, 'Prof', 'Dustin Santos', 'Powell and Johnston Plc', 'Rerum quia provident', 'puzu@mailinator.com', '456456', '474 White Second Court', 'Cum dolore necessita', 'Commodo quo sequi vo', 'Dolore laudantium t', 'Fuga Ullamco ex mol', 'Atque rerum velit n', 'Id qui do sint sed', 'Provident nisi quia', 'Id qui deserunt sint', 'inactive', '8de60e056796527763f7137eff9f059e.1563007126.jpg', '43c04873c0e13e1a3719aef7a913a4ae.1563007126.jpg', '2019-07-13 02:53:46', '2019-07-13 02:53:46');

-- --------------------------------------------------------

--
-- Table structure for table `business_meetings`
--

CREATE TABLE `business_meetings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prefer_com` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_meetings`
--

INSERT INTO `business_meetings` (`id`, `name`, `company_name`, `website`, `designation`, `tel`, `mobile`, `address`, `details`, `email`, `prefer_com`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Xanthus Pitts', 'Hoffman and Doyle Traders', 'https://www.rog.us', 'Alias quasi sed dolo', '+1 (772) 669-4729', '4545', 'Ipsam labore et in e', 'Reprehenderit ea odi', 'nipuwogijo@mailinator.net', 'Roach Noel LLC', 'inactive', '2019-07-13 03:12:45', '2019-07-13 03:12:45');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', 'AF', NULL, NULL),
(2, 'Åland Islands', 'AX', NULL, NULL),
(3, 'Albania', 'AL', NULL, NULL),
(4, 'Algeria', 'DZ', NULL, NULL),
(5, 'American Samoa', 'AS', NULL, NULL),
(6, 'Andorra', 'AD', NULL, NULL),
(7, 'Angola', 'AO', NULL, NULL),
(8, 'Anguilla', 'AI', NULL, NULL),
(9, 'Antarctica', 'AQ', NULL, NULL),
(10, 'Antigua and Barbuda', 'AG', NULL, NULL),
(11, 'Argentina', 'AR', NULL, NULL),
(12, 'Armenia', 'AM', NULL, NULL),
(13, 'Aruba', 'AW', NULL, NULL),
(14, 'Australia', 'AU', NULL, NULL),
(15, 'Austria', 'AT', NULL, NULL),
(16, 'Azerbaijan', 'AZ', NULL, NULL),
(17, 'Bahamas', 'BS', NULL, NULL),
(18, 'Bahrain', 'BH', NULL, NULL),
(19, 'Bangladesh', 'BD', NULL, NULL),
(20, 'Barbados', 'BB', NULL, NULL),
(21, 'Belarus', 'BY', NULL, NULL),
(22, 'Belgium', 'BE', NULL, NULL),
(23, 'Belize', 'BZ', NULL, NULL),
(24, 'Benin', 'BJ', NULL, NULL),
(25, 'Bermuda', 'BM', NULL, NULL),
(26, 'Bhutan', 'BT', NULL, NULL),
(27, 'Bolivia, Plurinational State of', 'BO', NULL, NULL),
(28, 'Bonaire, Sint Eustatius and Saba', 'BQ', NULL, NULL),
(29, 'Bosnia and Herzegovina', 'BA', NULL, NULL),
(30, 'Botswana', 'BW', NULL, NULL),
(31, 'Bouvet Island', 'BV', NULL, NULL),
(32, 'Brazil', 'BR', NULL, NULL),
(33, 'British Indian Ocean Territory', 'IO', NULL, NULL),
(34, 'Brunei Darussalam', 'BN', NULL, NULL),
(35, 'Bulgaria', 'BG', NULL, NULL),
(36, 'Burkina Faso', 'BF', NULL, NULL),
(37, 'Burundi', 'BI', NULL, NULL),
(38, 'Cambodia', 'KH', NULL, NULL),
(39, 'Cameroon', 'CM', NULL, NULL),
(40, 'Canada', 'CA', NULL, NULL),
(41, 'Cape Verde', 'CV', NULL, NULL),
(42, 'Cayman Islands', 'KY', NULL, NULL),
(43, 'Central African Republic', 'CF', NULL, NULL),
(44, 'Chad', 'TD', NULL, NULL),
(45, 'Chile', 'CL', NULL, NULL),
(46, 'China', 'CN', NULL, NULL),
(47, 'Christmas Island', 'CX', NULL, NULL),
(48, 'Cocos (Keeling) Islands', 'CC', NULL, NULL),
(49, 'Colombia', 'CO', NULL, NULL),
(50, 'Comoros', 'KM', NULL, NULL),
(51, 'Congo', 'CG', NULL, NULL),
(52, 'Congo, the Democratic Republic of the', 'CD', NULL, NULL),
(53, 'Cook Islands', 'CK', NULL, NULL),
(54, 'Costa Rica', 'CR', NULL, NULL),
(55, 'Côte d\'Ivoire', 'CI', NULL, NULL),
(56, 'Croatia', 'HR', NULL, NULL),
(57, 'Cuba', 'CU', NULL, NULL),
(58, 'Curaçao', 'CW', NULL, NULL),
(59, 'Cyprus', 'CY', NULL, NULL),
(60, 'Czech Republic', 'CZ', NULL, NULL),
(61, 'Denmark', 'DK', NULL, NULL),
(62, 'Djibouti', 'DJ', NULL, NULL),
(63, 'Dominica', 'DM', NULL, NULL),
(64, 'Dominican Republic', 'DO', NULL, NULL),
(65, 'Ecuador', 'EC', NULL, NULL),
(66, 'Egypt', 'EG', NULL, NULL),
(67, 'El Salvador', 'SV', NULL, NULL),
(68, 'Equatorial Guinea', 'GQ', NULL, NULL),
(69, 'Eritrea', 'ER', NULL, NULL),
(70, 'Estonia', 'EE', NULL, NULL),
(71, 'Ethiopia', 'ET', NULL, NULL),
(72, 'Falkland Islands (Malvinas)', 'FK', NULL, NULL),
(73, 'Faroe Islands', 'FO', NULL, NULL),
(74, 'Fiji', 'FJ', NULL, NULL),
(75, 'Finland', 'FI', NULL, NULL),
(76, 'France', 'FR', NULL, NULL),
(77, 'French Guiana', 'GF', NULL, NULL),
(78, 'French Polynesia', 'PF', NULL, NULL),
(79, 'French Southern Territories', 'TF', NULL, NULL),
(80, 'Gabon', 'GA', NULL, NULL),
(81, 'Gambia', 'GM', NULL, NULL),
(82, 'Georgia', 'GE', NULL, NULL),
(83, 'Germany', 'DE', NULL, NULL),
(84, 'Ghana', 'GH', NULL, NULL),
(85, 'Gibraltar', 'GI', NULL, NULL),
(86, 'Greece', 'GR', NULL, NULL),
(87, 'Greenland', 'GL', NULL, NULL),
(88, 'Grenada', 'GD', NULL, NULL),
(89, 'Guadeloupe', 'GP', NULL, NULL),
(90, 'Guam', 'GU', NULL, NULL),
(91, 'Guatemala', 'GT', NULL, NULL),
(92, 'Guernsey', 'GG', NULL, NULL),
(93, 'Guinea', 'GN', NULL, NULL),
(94, 'Guinea-Bissau', 'GW', NULL, NULL),
(95, 'Guyana', 'GY', NULL, NULL),
(96, 'Haiti', 'HT', NULL, NULL),
(97, 'Heard Island and McDonald Mcdonald Islands', 'HM', NULL, NULL),
(98, 'Holy See (Vatican City State)', 'VA', NULL, NULL),
(99, 'Honduras', 'HN', NULL, NULL),
(100, 'Hong Kong', 'HK', NULL, NULL),
(101, 'Hungary', 'HU', NULL, NULL),
(102, 'Iceland', 'IS', NULL, NULL),
(103, 'India', 'IN', NULL, NULL),
(104, 'Indonesia', 'ID', NULL, NULL),
(105, 'Iran, Islamic Republic of', 'IR', NULL, NULL),
(106, 'Iraq', 'IQ', NULL, NULL),
(107, 'Ireland', 'IE', NULL, NULL),
(108, 'Isle of Man', 'IM', NULL, NULL),
(109, 'Israel', 'IL', NULL, NULL),
(110, 'Italy', 'IT', NULL, NULL),
(111, 'Jamaica', 'JM', NULL, NULL),
(112, 'Japan', 'JP', NULL, NULL),
(113, 'Jersey', 'JE', NULL, NULL),
(114, 'Jordan', 'JO', NULL, NULL),
(115, 'Kazakhstan', 'KZ', NULL, NULL),
(116, 'Kenya', 'KE', NULL, NULL),
(117, 'Kiribati', 'KI', NULL, NULL),
(118, 'Korea, Democratic People\'s Republic of', 'KP', NULL, NULL),
(119, 'Korea, Republic of', 'KR', NULL, NULL),
(120, 'Kuwait', 'KW', NULL, NULL),
(121, 'Kyrgyzstan', 'KG', NULL, NULL),
(122, 'Lao People\'s Democratic Republic', 'LA', NULL, NULL),
(123, 'Latvia', 'LV', NULL, NULL),
(124, 'Lebanon', 'LB', NULL, NULL),
(125, 'Lesotho', 'LS', NULL, NULL),
(126, 'Liberia', 'LR', NULL, NULL),
(127, 'Libya', 'LY', NULL, NULL),
(128, 'Liechtenstein', 'LI', NULL, NULL),
(129, 'Lithuania', 'LT', NULL, NULL),
(130, 'Luxembourg', 'LU', NULL, NULL),
(131, 'Macao', 'MO', NULL, NULL),
(132, 'Macedonia, the Former Yugoslav Republic of', 'MK', NULL, NULL),
(133, 'Madagascar', 'MG', NULL, NULL),
(134, 'Malawi', 'MW', NULL, NULL),
(135, 'Malaysia', 'MY', NULL, NULL),
(136, 'Maldives', 'MV', NULL, NULL),
(137, 'Mali', 'ML', NULL, NULL),
(138, 'Malta', 'MT', NULL, NULL),
(139, 'Marshall Islands', 'MH', NULL, NULL),
(140, 'Martinique', 'MQ', NULL, NULL),
(141, 'Mauritania', 'MR', NULL, NULL),
(142, 'Mauritius', 'MU', NULL, NULL),
(143, 'Mayotte', 'YT', NULL, NULL),
(144, 'Mexico', 'MX', NULL, NULL),
(145, 'Micronesia, Federated States of', 'FM', NULL, NULL),
(146, 'Moldova, Republic of', 'MD', NULL, NULL),
(147, 'Monaco', 'MC', NULL, NULL),
(148, 'Mongolia', 'MN', NULL, NULL),
(149, 'Montenegro', 'ME', NULL, NULL),
(150, 'Montserrat', 'MS', NULL, NULL),
(151, 'Morocco', 'MA', NULL, NULL),
(152, 'Mozambique', 'MZ', NULL, NULL),
(153, 'Myanmar', 'MM', NULL, NULL),
(154, 'Namibia', 'NA', NULL, NULL),
(155, 'Nauru', 'NR', NULL, NULL),
(156, 'Nepal', 'NP', NULL, NULL),
(157, 'Netherlands', 'NL', NULL, NULL),
(158, 'New Caledonia', 'NC', NULL, NULL),
(159, 'New Zealand', 'NZ', NULL, NULL),
(160, 'Nicaragua', 'NI', NULL, NULL),
(161, 'Niger', 'NE', NULL, NULL),
(162, 'Nigeria', 'NG', NULL, NULL),
(163, 'Niue', 'NU', NULL, NULL),
(164, 'Norfolk Island', 'NF', NULL, NULL),
(165, 'Northern Mariana Islands', 'MP', NULL, NULL),
(166, 'Norway', 'NO', NULL, NULL),
(167, 'Oman', 'OM', NULL, NULL),
(168, 'Pakistan', 'PK', NULL, NULL),
(169, 'Palau', 'PW', NULL, NULL),
(170, 'Palestine, State of', 'PS', NULL, NULL),
(171, 'Panama', 'PA', NULL, NULL),
(172, 'Papua New Guinea', 'PG', NULL, NULL),
(173, 'Paraguay', 'PY', NULL, NULL),
(174, 'Peru', 'PE', NULL, NULL),
(175, 'Philippines', 'PH', NULL, NULL),
(176, 'Pitcairn', 'PN', NULL, NULL),
(177, 'Poland', 'PL', NULL, NULL),
(178, 'Portugal', 'PT', NULL, NULL),
(179, 'Puerto Rico', 'PR', NULL, NULL),
(180, 'Qatar', 'QA', NULL, NULL),
(181, 'Réunion', 'RE', NULL, NULL),
(182, 'Romania', 'RO', NULL, NULL),
(183, 'Russian Federation', 'RU', NULL, NULL),
(184, 'Rwanda', 'RW', NULL, NULL),
(185, 'Saint Barthélemy', 'BL', NULL, NULL),
(186, 'Saint Helena, Ascension and Tristan da Cunha', 'SH', NULL, NULL),
(187, 'Saint Kitts and Nevis', 'KN', NULL, NULL),
(188, 'Saint Lucia', 'LC', NULL, NULL),
(189, 'Saint Martin (French part)', 'MF', NULL, NULL),
(190, 'Saint Pierre and Miquelon', 'PM', NULL, NULL),
(191, 'Saint Vincent and the Grenadines', 'VC', NULL, NULL),
(192, 'Samoa', 'WS', NULL, NULL),
(193, 'San Marino', 'SM', NULL, NULL),
(194, 'Sao Tome and Principe', 'ST', NULL, NULL),
(195, 'Saudi Arabia', 'SA', NULL, NULL),
(196, 'Senegal', 'SN', NULL, NULL),
(197, 'Serbia', 'RS', NULL, NULL),
(198, 'Seychelles', 'SC', NULL, NULL),
(199, 'Sierra Leone', 'SL', NULL, NULL),
(200, 'Singapore', 'SG', NULL, NULL),
(201, 'Sint Maarten (Dutch part)', 'SX', NULL, NULL),
(202, 'Slovakia', 'SK', NULL, NULL),
(203, 'Slovenia', 'SI', NULL, NULL),
(204, 'Solomon Islands', 'SB', NULL, NULL),
(205, 'Somalia', 'SO', NULL, NULL),
(206, 'South Africa', 'ZA', NULL, NULL),
(207, 'South Georgia and the South Sandwich Islands', 'GS', NULL, NULL),
(208, 'South Sudan', 'SS', NULL, NULL),
(209, 'Spain', 'ES', NULL, NULL),
(210, 'Sri Lanka', 'LK', NULL, NULL),
(211, 'Sudan', 'SD', NULL, NULL),
(212, 'Suriname', 'SR', NULL, NULL),
(213, 'Svalbard and Jan Mayen', 'SJ', NULL, NULL),
(214, 'Swaziland', 'SZ', NULL, NULL),
(215, 'Sweden', 'SE', NULL, NULL),
(216, 'Switzerland', 'CH', NULL, NULL),
(217, 'Syrian Arab Republic', 'SY', NULL, NULL),
(218, 'Taiwan', 'TW', NULL, NULL),
(219, 'Tajikistan', 'TJ', NULL, NULL),
(220, 'Tanzania, United Republic of', 'TZ', NULL, NULL),
(221, 'Thailand', 'TH', NULL, NULL),
(222, 'Timor-Leste', 'TL', NULL, NULL),
(223, 'Togo', 'TG', NULL, NULL),
(224, 'Tokelau', 'TK', NULL, NULL),
(225, 'Tonga', 'TO', NULL, NULL),
(226, 'Trinidad and Tobago', 'TT', NULL, NULL),
(227, 'Tunisia', 'TN', NULL, NULL),
(228, 'Turkey', 'TR', NULL, NULL),
(229, 'Turkmenistan', 'TM', NULL, NULL),
(230, 'Turks and Caicos Islands', 'TC', NULL, NULL),
(231, 'Tuvalu', 'TV', NULL, NULL),
(232, 'Uganda', 'UG', NULL, NULL),
(233, 'Ukraine', 'UA', NULL, NULL),
(234, 'United Arab Emirates', 'AE', NULL, NULL),
(235, 'United Kingdom', 'GB', NULL, NULL),
(236, 'United States', 'US', NULL, NULL),
(237, 'United States Minor Outlying Islands', 'UM', NULL, NULL),
(238, 'Uruguay', 'UY', NULL, NULL),
(239, 'Uzbekistan', 'UZ', NULL, NULL),
(240, 'Vanuatu', 'VU', NULL, NULL),
(241, 'Venezuela, Bolivarian Republic of', 'VE', NULL, NULL),
(242, 'Viet Nam', 'VN', NULL, NULL),
(243, 'Virgin Islands, British', 'VG', NULL, NULL),
(244, 'Virgin Islands, U.S.', 'VI', NULL, NULL),
(245, 'Wallis and Futuna', 'WF', NULL, NULL),
(246, 'Western Sahara', 'EH', NULL, NULL),
(247, 'Yemen', 'YE', NULL, NULL),
(248, 'Zambia', 'ZM', NULL, NULL),
(249, 'Zimbabwe', 'ZW', NULL, NULL);

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

--
-- Dumping data for table `exhibitors`
--

INSERT INTO `exhibitors` (`id`, `company_name`, `title`, `f_name`, `l_name`, `designation`, `address1`, `address2`, `country_id`, `state_id`, `district_id`, `city`, `tel`, `mobile`, `email`, `email2`, `website`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ramirez Page Traders', 'Ms', 'Cullen', 'Wood', 'Est mollitia consequ', '999 West First Road', 'Voluptas odio rerum', '1', '2', '40', 'Eum nemo proident s', '+1 (495) 739-5172', '67769', 'razenowi@mailinator.net', 'wywasu@mailinator.com', 'https://www.zahoperakaw.ca', 'inactive', '2019-07-13 02:29:17', '2019-07-13 03:21:26');

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
(11, '2019_07_13_063006_create_diplomatics_table', 4),
(12, '2019_07_13_075755_create_abstracts_table', 5),
(13, '2019_07_13_080443_create_abstract_submissions_table', 6),
(14, '2019_07_13_085137_create_business_meetings_table', 7);

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
(1, 'Province-3', 1, 156, '2019-04-18 23:21:25', '2019-04-24 21:19:09'),
(2, 'Province-4 (Gandaki)', 1, 156, '2019-04-19 00:21:30', '2019-04-24 21:19:18'),
(3, 'Province-1', 1, 156, '2019-04-24 21:19:42', '2019-04-24 21:19:42'),
(4, 'Province-2', 1, 156, '2019-04-24 21:19:54', '2019-04-24 21:19:54'),
(5, 'Province-5', 1, 156, '2019-04-24 21:20:08', '2019-04-24 21:20:08'),
(6, 'Province-6 (Karnali)', 1, 156, '2019-04-24 21:20:24', '2019-04-24 21:20:24'),
(7, 'Province-7 (Sudurpashchim)', 1, 156, '2019-04-24 21:20:40', '2019-04-24 21:39:42');

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
-- Indexes for table `abstract_submissions`
--
ALTER TABLE `abstract_submissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_meetings`
--
ALTER TABLE `business_meetings`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `abstract_submissions`
--
ALTER TABLE `abstract_submissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `business_meetings`
--
ALTER TABLE `business_meetings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `foreign_delegates`
--
ALTER TABLE `foreign_delegates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
