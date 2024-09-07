-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2024 at 06:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talentloom`
--

-- --------------------------------------------------------

--
-- Table structure for table `ch_favorites`
--

CREATE TABLE `ch_favorites` (
  `id` char(36) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `favorite_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ch_favorites`
--

INSERT INTO `ch_favorites` (`id`, `user_id`, `favorite_id`, `created_at`, `updated_at`) VALUES
('84c58b7e-e196-48ec-8a68-cbdd588e0c27', 1, 2, '2024-07-20 03:58:06', '2024-07-20 03:58:06'),
('d0584b45-8c57-49e5-b2fe-462ca820cd75', 1, 4, '2024-07-20 03:58:09', '2024-07-20 03:58:09'),
('db53de30-a7b6-438a-9551-a41e7724efc0', 1, 8, '2024-07-20 03:58:02', '2024-07-20 03:58:02');

-- --------------------------------------------------------

--
-- Table structure for table `ch_messages`
--

CREATE TABLE `ch_messages` (
  `id` char(36) NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ch_messages`
--

INSERT INTO `ch_messages` (`id`, `from_id`, `to_id`, `body`, `attachment`, `seen`, `created_at`, `updated_at`) VALUES
('0c0d7f40-7eea-48f8-bf25-c49400901c24', 1, 2, 'Hi', NULL, 1, '2024-07-20 03:36:16', '2024-07-22 10:36:59'),
('258794f5-afcd-42b7-bee4-17a2f42997c5', 1, 4, 'Hi', NULL, 0, '2024-07-20 03:36:50', '2024-07-20 03:36:50'),
('2fec9d7a-0797-4b5a-bc21-660ac677f85d', 2, 1, 'Lol, pele', NULL, 1, '2024-07-22 10:37:50', '2024-07-22 10:37:59'),
('35134bcf-3784-4887-a45b-851246e12dca', 1, 2, 'Radarad', NULL, 0, '2024-07-22 10:48:36', '2024-07-22 10:48:36'),
('3842782e-3c63-4b0e-8ee8-bd4b9f22daa7', 1, 8, 'Hi baby', NULL, 0, '2024-07-20 03:57:56', '2024-07-20 03:57:56'),
('57a411a6-0fff-4709-80d1-644064994647', 1, 2, 'Good morning', NULL, 0, '2024-07-23 03:40:43', '2024-07-23 03:40:43'),
('5e241c85-7531-4aab-8063-d5383fddd0b0', 9, 2, 'hi', NULL, 0, '2024-08-31 15:57:20', '2024-08-31 15:57:20'),
('618fc925-7f2a-4d23-8220-786dac96d635', 1, 2, '', '{\"new_name\":\"a51564e4-6cee-4970-9ae1-cdc460ed944f.jpg\",\"old_name\":\"cbt_roles_permission.jpg\"}', 1, '2024-07-20 03:56:47', '2024-07-22 10:36:59'),
('7b21175e-b78d-445c-afef-dea716ea4d89', 1, 2, 'Show me pepper', NULL, 1, '2024-07-22 10:37:44', '2024-07-22 10:37:45'),
('8a4e2d57-18c6-4028-9a69-21da8c9b8a0a', 2, 1, 'See fine daddy', NULL, 1, '2024-07-22 10:37:21', '2024-07-22 10:37:22'),
('8c2f0830-f14f-499c-b0db-e568998242ce', 2, 1, 'I cooked sweet fried rice for you inugo', NULL, 1, '2024-07-22 10:38:01', '2024-07-22 10:38:02'),
('901de9d6-88ed-46ee-a3b1-82425cda1543', 2, 1, 'FM the troubleshooter', NULL, 1, '2024-07-22 10:37:09', '2024-07-22 10:37:10'),
('cfa30176-ae6d-4d02-9361-fbf212dbd46c', 2, 1, 'FM FM international', NULL, 1, '2024-07-22 10:37:40', '2024-07-22 10:37:41'),
('df3f75ba-3c4b-426f-9679-4e3ffd275f22', 1, 2, '🤣😂', NULL, 0, '2024-07-30 00:44:46', '2024-07-30 00:44:46'),
('ede3d453-929f-4851-bca7-6605d5c332ed', 1, 2, 'How have you been', NULL, 1, '2024-07-20 03:36:22', '2024-07-22 10:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_code` varchar(255) NOT NULL,
  `dialing_code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `dialing_code`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', '+93', NULL, NULL),
(2, 'Albania', '+355', NULL, NULL),
(3, 'Algeria', '+213', NULL, NULL),
(4, 'American Samoa', '+1-684', NULL, NULL),
(5, 'Andorra', '+376', NULL, NULL),
(6, 'Angola', '+244', NULL, NULL),
(7, 'Anguilla', '+1-264', NULL, NULL),
(8, 'Antarctica', '+672', NULL, NULL),
(9, 'Antigua and Barbuda', '+1-268', NULL, NULL),
(10, 'Argentina', '+54', NULL, NULL),
(11, 'Armenia', '+374', NULL, NULL),
(12, 'Aruba', '+297', NULL, NULL),
(13, 'Australia', '+61', NULL, NULL),
(14, 'Austria', '+43', NULL, NULL),
(15, 'Azerbaijan', '+994', NULL, NULL),
(16, 'Bahamas', '+1-242', NULL, NULL),
(17, 'Bahrain', '+973', NULL, NULL),
(18, 'Bangladesh', '+880', NULL, NULL),
(19, 'Barbados', '+1-246', NULL, NULL),
(20, 'Belarus', '+375', NULL, NULL),
(21, 'Belgium', '+32', NULL, NULL),
(22, 'Belize', '+501', NULL, NULL),
(23, 'Benin', '+229', NULL, NULL),
(24, 'Bermuda', '+1-441', NULL, NULL),
(25, 'Bhutan', '+975', NULL, NULL),
(26, 'Bolivia', '+591', NULL, NULL),
(27, 'Bosnia and Herzegovina', '+387', NULL, NULL),
(28, 'Botswana', '+267', NULL, NULL),
(29, 'Brazil', '+55', NULL, NULL),
(30, 'British Indian Ocean Territory', '+246', NULL, NULL),
(31, 'British Virgin Islands', '+1-284', NULL, NULL),
(32, 'Brunei', '+673', NULL, NULL),
(33, 'Bulgaria', '+359', NULL, NULL),
(34, 'Burkina Faso', '+226', NULL, NULL),
(35, 'Burundi', '+257', NULL, NULL),
(36, 'Cambodia', '+855', NULL, NULL),
(37, 'Cameroon', '+237', NULL, NULL),
(38, 'Canada', '+1', NULL, NULL),
(39, 'Cape Verde', '+238', NULL, NULL),
(40, 'Cayman Islands', '+1-345', NULL, NULL),
(41, 'Central African Republic', '+236', NULL, NULL),
(42, 'Chad', '+235', NULL, NULL),
(43, 'Chile', '+56', NULL, NULL),
(44, 'China', '+86', NULL, NULL),
(45, 'Christmas Island', '+61', NULL, NULL),
(46, 'Cocos Islands', '+61', NULL, NULL),
(47, 'Colombia', '+57', NULL, NULL),
(48, 'Comoros', '+269', NULL, NULL),
(49, 'Cook Islands', '+682', NULL, NULL),
(50, 'Costa Rica', '+506', NULL, NULL),
(51, 'Croatia', '+385', NULL, NULL),
(52, 'Cuba', '+53', NULL, NULL),
(53, 'Curacao', '+599', NULL, NULL),
(54, 'Cyprus', '+357', NULL, NULL),
(55, 'Czech Republic', '+420', NULL, NULL),
(56, 'Democratic Republic of the Congo', '+243', NULL, NULL),
(57, 'Denmark', '+45', NULL, NULL),
(58, 'Djibouti', '+253', NULL, NULL),
(59, 'Dominica', '+1-767', NULL, NULL),
(60, 'Dominican Republic', '+1-809, +1-829, +1-849', NULL, NULL),
(61, 'East Timor', '+670', NULL, NULL),
(62, 'Ecuador', '+593', NULL, NULL),
(63, 'Egypt', '+20', NULL, NULL),
(64, 'El Salvador', '+503', NULL, NULL),
(65, 'Equatorial Guinea', '+240', NULL, NULL),
(66, 'Eritrea', '+291', NULL, NULL),
(67, 'Estonia', '+372', NULL, NULL),
(68, 'Ethiopia', '+251', NULL, NULL),
(69, 'Falkland Islands', '+500', NULL, NULL),
(70, 'Faroe Islands', '+298', NULL, NULL),
(71, 'Fiji', '+679', NULL, NULL),
(72, 'Finland', '+358', NULL, NULL),
(73, 'France', '+33', NULL, NULL),
(74, 'French Polynesia', '+689', NULL, NULL),
(75, 'Gabon', '+241', NULL, NULL),
(76, 'Gambia', '+220', NULL, NULL),
(77, 'Georgia', '+995', NULL, NULL),
(78, 'Germany', '+49', NULL, NULL),
(79, 'Ghana', '+233', NULL, NULL),
(80, 'Gibraltar', '+350', NULL, NULL),
(81, 'Greece', '+30', NULL, NULL),
(82, 'Greenland', '+299', NULL, NULL),
(83, 'Grenada', '+1-473', NULL, NULL),
(84, 'Guam', '+1-671', NULL, NULL),
(85, 'Guatemala', '+502', NULL, NULL),
(86, 'Guernsey', '+44-1481', NULL, NULL),
(87, 'Guinea', '+224', NULL, NULL),
(88, 'Guinea-Bissau', '+245', NULL, NULL),
(89, 'Guyana', '+592', NULL, NULL),
(90, 'Haiti', '+509', NULL, NULL),
(91, 'Honduras', '+504', NULL, NULL),
(92, 'Hong Kong', '+852', NULL, NULL),
(93, 'Hungary', '+36', NULL, NULL),
(94, 'Iceland', '+354', NULL, NULL),
(95, 'India', '+91', NULL, NULL),
(96, 'Indonesia', '+62', NULL, NULL),
(97, 'Iran', '+98', NULL, NULL),
(98, 'Iraq', '+964', NULL, NULL),
(99, 'Ireland', '+353', NULL, NULL),
(100, 'Isle of Man', '+44-1624', NULL, NULL),
(101, 'Israel', '+972', NULL, NULL),
(102, 'Italy', '+39', NULL, NULL),
(103, 'Ivory Coast', '+225', NULL, NULL),
(104, 'Jamaica', '+1-876', NULL, NULL),
(105, 'Japan', '+81', NULL, NULL),
(106, 'Jersey', '+44-1534', NULL, NULL),
(107, 'Jordan', '+962', NULL, NULL),
(108, 'Kazakhstan', '+7', NULL, NULL),
(109, 'Kenya', '+254', NULL, NULL),
(110, 'Kiribati', '+686', NULL, NULL),
(111, 'Kosovo', '+383', NULL, NULL),
(112, 'Kuwait', '+965', NULL, NULL),
(113, 'Kyrgyzstan', '+996', NULL, NULL),
(114, 'Laos', '+856', NULL, NULL),
(115, 'Latvia', '+371', NULL, NULL),
(116, 'Lebanon', '+961', NULL, NULL),
(117, 'Lesotho', '+266', NULL, NULL),
(118, 'Liberia', '+231', NULL, NULL),
(119, 'Libya', '+218', NULL, NULL),
(120, 'Liechtenstein', '+423', NULL, NULL),
(121, 'Lithuania', '+370', NULL, NULL),
(122, 'Luxembourg', '+352', NULL, NULL),
(123, 'Macau', '+853', NULL, NULL),
(124, 'Macedonia', '+389', NULL, NULL),
(125, 'Madagascar', '+261', NULL, NULL),
(126, 'Malawi', '+265', NULL, NULL),
(127, 'Malaysia', '+60', NULL, NULL),
(128, 'Maldives', '+960', NULL, NULL),
(129, 'Mali', '+223', NULL, NULL),
(130, 'Malta', '+356', NULL, NULL),
(131, 'Marshall Islands', '+692', NULL, NULL),
(132, 'Mauritania', '+222', NULL, NULL),
(133, 'Mauritius', '+230', NULL, NULL),
(134, 'Mayotte', '+262', NULL, NULL),
(135, 'Mexico', '+52', NULL, NULL),
(136, 'Micronesia', '+691', NULL, NULL),
(137, 'Moldova', '+373', NULL, NULL),
(138, 'Monaco', '+377', NULL, NULL),
(139, 'Mongolia', '+976', NULL, NULL),
(140, 'Montenegro', '+382', NULL, NULL),
(141, 'Montserrat', '+1-664', NULL, NULL),
(142, 'Morocco', '+212', NULL, NULL),
(143, 'Mozambique', '+258', NULL, NULL),
(144, 'Myanmar', '+95', NULL, NULL),
(145, 'Namibia', '+264', NULL, NULL),
(146, 'Nauru', '+674', NULL, NULL),
(147, 'Nepal', '+977', NULL, NULL),
(148, 'Netherlands', '+31', NULL, NULL),
(149, 'Netherlands Antilles', '+599', NULL, NULL),
(150, 'New Caledonia', '+687', NULL, NULL),
(151, 'New Zealand', '+64', NULL, NULL),
(152, 'Nicaragua', '+505', NULL, NULL),
(153, 'Niger', '+227', NULL, NULL),
(154, 'Nigeria', '+234', NULL, NULL),
(155, 'Niue', '+683', NULL, NULL),
(156, 'North Korea', '+850', NULL, NULL),
(157, 'Northern Mariana Islands', '+1-670', NULL, NULL),
(158, 'Norway', '+47', NULL, NULL),
(159, 'Oman', '+968', NULL, NULL),
(160, 'Pakistan', '+92', NULL, NULL),
(161, 'Palau', '+680', NULL, NULL),
(162, 'Palestine', '+970', NULL, NULL),
(163, 'Panama', '+507', NULL, NULL),
(164, 'Papua New Guinea', '+675', NULL, NULL),
(165, 'Paraguay', '+595', NULL, NULL),
(166, 'Peru', '+51', NULL, NULL),
(167, 'Philippines', '+63', NULL, NULL),
(168, 'Pitcairn', '+64', NULL, NULL),
(169, 'Poland', '+48', NULL, NULL),
(170, 'Portugal', '+351', NULL, NULL),
(171, 'Puerto Rico', '+1-787, +1-939', NULL, NULL),
(172, 'Qatar', '+974', NULL, NULL),
(173, 'Republic of the Congo', '+242', NULL, NULL),
(174, 'Reunion', '+262', NULL, NULL),
(175, 'Romania', '+40', NULL, NULL),
(176, 'Russia', '+7', NULL, NULL),
(177, 'Rwanda', '+250', NULL, NULL),
(178, 'Saint Barthelemy', '+590', NULL, NULL),
(179, 'Saint Helena', '+290', NULL, NULL),
(180, 'Saint Kitts and Nevis', '+1-869', NULL, NULL),
(181, 'Saint Lucia', '+1-758', NULL, NULL),
(182, 'Saint Martin', '+590', NULL, NULL),
(183, 'Saint Pierre and Miquelon', '+508', NULL, NULL),
(184, 'Saint Vincent and the Grenadines', '+1-784', NULL, NULL),
(185, 'Samoa', '+685', NULL, NULL),
(186, 'San Marino', '+378', NULL, NULL),
(187, 'Sao Tome and Principe', '+239', NULL, NULL),
(188, 'Saudi Arabia', '+966', NULL, NULL),
(189, 'Senegal', '+221', NULL, NULL),
(190, 'Serbia', '+381', NULL, NULL),
(191, 'Seychelles', '+248', NULL, NULL),
(192, 'Sierra Leone', '+232', NULL, NULL),
(193, 'Singapore', '+65', NULL, NULL),
(194, 'Sint Maarten', '+1-721', NULL, NULL),
(195, 'Slovakia', '+421', NULL, NULL),
(196, 'Slovenia', '+386', NULL, NULL),
(197, 'Solomon Islands', '+677', NULL, NULL),
(198, 'Somalia', '+252', NULL, NULL),
(199, 'South Africa', '+27', NULL, NULL),
(200, 'South Korea', '+82', NULL, NULL),
(201, 'South Sudan', '+211', NULL, NULL),
(202, 'Spain', '+34', NULL, NULL),
(203, 'Sri Lanka', '+94', NULL, NULL),
(204, 'Sudan', '+249', NULL, NULL),
(205, 'Suriname', '+597', NULL, NULL),
(206, 'Svalbard and Jan Mayen', '+47', NULL, NULL),
(207, 'Swaziland', '+268', NULL, NULL),
(208, 'Sweden', '+46', NULL, NULL),
(209, 'Switzerland', '+41', NULL, NULL),
(210, 'Syria', '+963', NULL, NULL),
(211, 'Taiwan', '+886', NULL, NULL),
(212, 'Tajikistan', '+992', NULL, NULL),
(213, 'Tanzania', '+255', NULL, NULL),
(214, 'Thailand', '+66', NULL, NULL),
(215, 'Togo', '+228', NULL, NULL),
(216, 'Tokelau', '+690', NULL, NULL),
(217, 'Tonga', '+676', NULL, NULL),
(218, 'Trinidad and Tobago', '+1-868', NULL, NULL),
(219, 'Tunisia', '+216', NULL, NULL),
(220, 'Turkey', '+90', NULL, NULL),
(221, 'Turkmenistan', '+993', NULL, NULL),
(222, 'Turks and Caicos Islands', '+1-649', NULL, NULL),
(223, 'Tuvalu', '+688', NULL, NULL),
(224, 'U.S. Virgin Islands', '+1-340', NULL, NULL),
(225, 'Uganda', '+256', NULL, NULL),
(226, 'Ukraine', '+380', NULL, NULL),
(227, 'United Arab Emirates', '+971', NULL, NULL),
(228, 'United Kingdom', '+44', NULL, NULL),
(229, 'United States', '+1', NULL, NULL),
(230, 'Uruguay', '+598', NULL, NULL),
(231, 'Uzbekistan', '+998', NULL, NULL),
(232, 'Vanuatu', '+678', NULL, NULL),
(233, 'Vatican', '+379', NULL, NULL),
(234, 'Venezuela', '+58', NULL, NULL),
(235, 'Vietnam', '+84', NULL, NULL),
(236, 'Wallis and Futuna', '+681', NULL, NULL),
(237, 'Western Sahara', '+212', NULL, NULL),
(238, 'Yemen', '+967', NULL, NULL),
(239, 'Zambia', '+260', NULL, NULL),
(240, 'Zimbabwe', '+263', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_logins`
--

CREATE TABLE `failed_logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `failed_logins`
--

INSERT INTO `failed_logins` (`id`, `ip_address`, `email`, `created_at`, `updated_at`) VALUES
(1, '127.0.0.1', 'phemanuel@yahoo.com', '2023-12-15 07:40:28', '2023-12-15 07:40:28'),
(2, '127.0.0.1', 'maxwell@gmail.com', '2023-12-15 07:41:08', '2023-12-15 07:41:08'),
(3, '129.205.113.187', 'miracle.kingsbranding@gmail.com', '2023-12-28 14:41:33', '2023-12-28 14:41:33'),
(4, '129.205.113.172', 'emmakinyooye@gmail.com', '2024-07-04 13:53:09', '2024-07-04 13:53:09'),
(5, '127.0.0.1', 'emmakinyooye@gmail.com', '2024-07-18 06:08:08', '2024-07-18 06:08:08'),
(6, '127.0.0.1', 'emmakinyooye@gmail.com', '2024-07-19 01:30:49', '2024-07-19 01:30:49'),
(7, '129.205.113.171', 'miracle.kingsbranding@gmail.com', '2024-07-19 10:56:47', '2024-07-19 10:56:47'),
(8, '129.205.113.171', 'miracle.kingsbranding@gmail.com', '2024-07-19 10:56:54', '2024-07-19 10:56:54'),
(9, '129.205.113.171', 'miracle.kingsbranding@gmail.com', '2024-07-19 10:57:05', '2024-07-19 10:57:05'),
(10, '129.205.113.171', 'miracle.kingsbranding@gmail.com', '2024-07-19 10:58:05', '2024-07-19 10:58:05'),
(11, '197.210.8.206', 'kingsbrandingconsult@gmail.com', '2024-08-10 16:30:47', '2024-08-10 16:30:47');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` char(36) NOT NULL,
  `owner_type` varchar(255) NOT NULL,
  `owner_id` bigint(20) UNSIGNED NOT NULL,
  `party_type` varchar(255) NOT NULL,
  `party_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_applies`
--

CREATE TABLE `job_applies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `apply_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_applies`
--

INSERT INTO `job_applies` (`id`, `job_id`, `user_id`, `apply_type`, `created_at`, `updated_at`) VALUES
(1, 6, '1', 'Job-Application', '2024-08-17 19:40:56', '2024-08-17 19:40:56');

-- --------------------------------------------------------

--
-- Table structure for table `job_locations`
--

CREATE TABLE `job_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_location` varchar(255) NOT NULL,
  `location_count` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_locations`
--

INSERT INTO `job_locations` (`id`, `job_location`, `location_count`, `created_at`, `updated_at`) VALUES
(6, 'Ikeja', 2, '2024-08-11 11:24:19', '2024-08-11 11:42:02'),
(7, 'Remote', 7, '2024-08-11 11:33:59', '2024-08-11 11:42:46'),
(8, 'Osapa London, Lekki', 4, '2024-08-12 10:30:51', '2024-08-12 10:36:49'),
(9, 'Lagos', 2, '2024-08-12 10:41:21', '2024-08-12 10:42:02'),
(10, 'Nigeria', 1, '2024-08-12 10:45:10', '2024-08-12 10:45:10'),
(11, 'Gwarimpa Estate, Abuja (FCT)', 1, '2024-08-12 10:48:00', '2024-08-12 10:48:00'),
(12, 'Ibadan', 2, '2024-08-17 21:13:24', '2024-08-17 21:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `job_views`
--

CREATE TABLE `job_views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `view_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_views`
--

INSERT INTO `job_views` (`id`, `job_id`, `user_id`, `view_type`, `created_at`, `updated_at`) VALUES
(1, 1, '9', 'Job-View', '2024-08-11 11:04:08', '2024-08-11 11:04:08'),
(2, 4, '9', 'Job-View', '2024-08-11 11:48:04', '2024-08-11 11:48:04'),
(3, 9, '1', 'Job-View', '2024-08-13 03:24:44', '2024-08-13 03:24:44'),
(4, 6, '1', 'Job-View', '2024-08-13 03:35:44', '2024-08-13 03:35:44'),
(5, 8, '1', 'Job-View', '2024-08-13 03:36:00', '2024-08-13 03:36:00'),
(6, 7, '1', 'Job-View', '2024-08-17 18:55:40', '2024-08-17 18:55:40'),
(7, 11, '9', 'Job-View', '2024-08-17 21:43:56', '2024-08-17 21:43:56'),
(8, 8, '9', 'Job-View', '2024-08-17 22:49:10', '2024-08-17 22:49:10');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `thread_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_12_202202_create_user_skills_table', 1),
(6, '2023_10_16_210239_create_user_roles_table', 1),
(7, '2023_10_17_224227_create_user_experiences_table', 1),
(8, '2023_10_18_143740_user_education', 1),
(9, '2023_10_20_211718_create_user_services_table', 1),
(10, '2023_10_23_093958_create_user_portfolios_table', 1),
(11, '2023_10_23_101035_create_countries', 1),
(12, '2023_10_24_172008_add_login_attempts_to_users_table', 1),
(13, '2023_10_24_190839_create_failed_logins_table', 1),
(14, '2023_11_03_175527_add_user_category_to_users_table', 1),
(15, '2023_11_08_123018_create_user_category', 1),
(16, '2023_11_12_212828_create_post_jobs', 1),
(17, '2023_11_12_213816_create_job_locations_table', 1),
(18, '2023_11_20_161857_create_post_upskills_table', 2),
(19, '2023_11_22_235726_create_job_applies_table', 3),
(20, '2023_12_13_184616_create_user_messages_table', 4),
(21, '2017_11_08_063801_create_threads_table', 5),
(22, '2017_11_08_063907_create_messages_table', 5),
(23, '2017_11_08_063923_create_participants_table', 5),
(24, '2017_11_08_063956_add_softdeletes_to_participants_table', 5),
(25, '2017_11_08_064015_add_softdeletes_to_threads_table', 5),
(26, '2017_11_08_064031_add_softdeletes_to_messages_table', 5),
(27, '2019_09_18_210948_move_starred_column_from_threads_table_to_participants_table', 5),
(28, '2019_10_01_000022_create_friends_table', 5),
(29, '2019_10_01_000023_create_pending_friends_table', 5),
(30, '2019_10_01_000024_create_user_threads_table', 5),
(31, '2024_07_17_215355_add_is_read_to_threads_table', 6),
(32, '2024_07_19_999999_add_active_status_to_users', 7),
(33, '2024_07_19_999999_add_avatar_to_users', 7),
(34, '2024_07_19_999999_add_dark_mode_to_users', 7),
(35, '2024_07_19_999999_add_messenger_color_to_users', 7),
(36, '2024_07_19_999999_create_chatify_favorites_table', 7),
(37, '2024_07_19_999999_create_chatify_messages_table', 7),
(38, '2024_07_23_190821_add_verify_job_to_post_job_table', 8),
(39, '2024_07_23_191453_add_verify_upskill_to_post_upskills_table', 8),
(40, '2024_08_05_211451_add_user_type_status_to_users_table', 9),
(41, '2024_08_08_193314_create_job_views_table', 10),
(42, '2024_08_11_133735_add_application_type_to_post_jobs_table', 11),
(43, '2024_08_11_133834_add_application_type_to_post_upskills_table', 11),
(44, '2024_08_11_183834_add_application_deadline_to_post_jobs_table', 12),
(45, '2024_08_11_183931_add_application_deadline_to_post_upskills_table', 12),
(46, '2024_08_17_125831_add_job_url_to_post_jobs_table', 13),
(47, '2024_08_17_132512_add_upskill_url_to_post_upskills_table', 14),
(48, '2024_08_22_191503_create_user_templates_table', 15),
(49, '2024_08_22_191503_create_user_themes_table', 16),
(50, '2024_08_23_093226_add_cover_picture_to_users_table', 16),
(51, '2024_08_23_094051_create_themes_table', 16),
(52, '2024_09_04_120047_create_user_resources_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` int(10) UNSIGNED NOT NULL,
  `thread_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `last_read` timestamp NULL DEFAULT NULL,
  `starred` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('kingsbrandingconsult@gmail.com', '$2y$10$W56FZfWZoVte8kmohwLWCuvtO.3PuxDACJwmdv9HWqdSUbUA4EdX.', '2024-08-11 02:28:27'),
('phemanuel@yahoo.com', '$2y$10$PyuGG9G0MpgGNer23zTWseCkGmbLc05CmGYb0O0KQdZiUtfhnbus.', '2024-08-11 09:29:52');

-- --------------------------------------------------------

--
-- Table structure for table `pending_friends`
--

CREATE TABLE `pending_friends` (
  `id` char(36) NOT NULL,
  `sender_type` varchar(255) NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `recipient_type` varchar(255) NOT NULL,
  `recipient_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_jobs`
--

CREATE TABLE `post_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_logo` varchar(255) NOT NULL,
  `job_name` varchar(255) NOT NULL,
  `job_description` text NOT NULL,
  `job_status` varchar(255) NOT NULL,
  `job_category` varchar(255) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `job_payment` varchar(255) NOT NULL,
  `job_payment_method` varchar(255) DEFAULT NULL,
  `job_link` varchar(255) DEFAULT NULL,
  `job_location` varchar(255) NOT NULL,
  `no_of_views` int(11) DEFAULT NULL,
  `job_apply` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `verify_job` int(11) NOT NULL,
  `application_type` varchar(255) NOT NULL,
  `application_deadline` date DEFAULT NULL,
  `job_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_jobs`
--

INSERT INTO `post_jobs` (`id`, `user_id`, `company_name`, `company_logo`, `job_name`, `job_description`, `job_status`, `job_category`, `job_type`, `job_payment`, `job_payment_method`, `job_link`, `job_location`, `no_of_views`, `job_apply`, `created_at`, `updated_at`, `verify_job`, `application_type`, `application_deadline`, `job_url`) VALUES
(1, 9, 'Wattana Solutions', 'company_logo/Wattana Solutions_566b8a794e1912.jpg', 'Social Medial Manager', '<p><br />\r\n3-4 years experience in content development, Copywriting, post scheduling and community management&nbsp;</p>\r\n\r\n<p>Salary range is 400k-500k monthly&nbsp;</p>\r\n\r\n<p>Please you must be hardworking</p>\r\n\r\n<p><strong>Send CV to: Info@wattanasolutions.com</strong></p>', 'Open', 'Design and Creative', 'Full Time', '400k-500k Monthly', NULL, 'Info@wattanasolutions.com', 'Remote', 1, 0, '2024-08-11 10:59:16', '2024-08-11 11:41:21', 1, 'Send to Mail', '2024-08-31', NULL),
(2, 9, 'NETFLIX', 'company_logo/NETFLIX_566b8aca3128bd.png', 'NETFLIX SOCIALS TEAM', '<p>Looking for creative minds who have 3-4 years of experience in social media.&nbsp;</p>\r\n\r\n<p>What you&#39;ll do:</p>\r\n\r\n<p>&bull;⁠ ⁠Cook up creative strategies<br />\r\n&bull;⁠ ⁠Execute &#39;em like a boss</p>\r\n\r\n<p>Think you&#39;re the one? Shoot your resume over to <strong>people@eo2exp.com</strong></p>', 'Open', 'Design and Creative', 'Remote', 'Not Specified', NULL, 'people@eo2exp.com', 'Remote', 0, 0, '2024-08-11 11:20:51', '2024-08-11 11:34:41', 1, 'Send to Mail', '2024-08-31', NULL),
(3, 9, 'Digital Pioneer Marketing Agency', 'company_logo/Digital Pioneer Marketing Agency_566b8ad73a12f1.jpg', 'Full Stack Developer', '<p>Remote, FT</p>\r\n\r\n<p>Stacks: React JS,Node JS.<br />\r\n7 years experience in the fintech/finance industry.</p>\r\n\r\n<p>CV to: ogidanjamal@gmail.com using the job title as the subject of the mail</p>', 'Open', 'Development and Programming', 'Full Time', 'N2M Monthly (negotiable)', NULL, 'ogidanjamal@gmail.com', 'Ikeja', 0, 0, '2024-08-11 11:24:19', '2024-08-11 11:42:02', 1, 'Send to Mail', '2024-08-31', NULL),
(4, 9, 'Fortech Net', 'company_logo/blank.jpg', 'Content Writer', '<p>Salary: 60k Naira Monthly</p>\r\n\r\n<p>Responsibilities<br />\r\nWrite SEO-enabled blog posts<br />\r\nCreate SEO-enabled content for LinkedIn &amp; Instagram posts</p>\r\n\r\n<p>Requirements:<br />\r\n6months of experience<br />\r\nBeginner - Intermediate&nbsp;</p>\r\n\r\n<p>Send CV to fortechnet4u@yahoo.com</p>', 'Open', 'Design and Creative', 'Full Time', '60k Naira Monthly', NULL, 'fortechnet4u@yahoo.com', 'Remote', 1, 0, '2024-08-11 11:27:45', '2024-08-11 11:48:04', 1, 'Send to Mail', '2024-08-31', NULL),
(5, 9, 'Risk Labs', 'company_logo/Risk Labs_566b8b10ad7359.png', 'Data engineering lead', '<p>Fully remote</p>\r\n\r\n<p>Salary up to $120k-$190k/year (stablecoins or Fiat)</p>\r\n\r\n<p><br />\r\n<a href=\"http://Fully remote  Salary up to $120k-$190k/year (stablecoins or Fiat)   https://jobs.lever.co/risklabs/dad53280-f1c2-43c9-9ad4-e20116fc2ae5?lever-origin=applied&amp;lever-source%5B%5D=remotejobshg\">https://jobs.lever.co/risklabs/dad53280-f1c2-43c9-9ad4-e20116fc2ae5?lever-origin=applied&amp;lever-source%5B%5D=remotejobshg</a></p>', 'Open', 'Development and Programming', 'Full Time', '$120k-$190k/year (stablecoins or Fiat)', NULL, 'https://jobs.lever.co/risklabs/dad53280-f1c2-43c9-9ad4-e20116fc2ae5?lever-origin=applied&lever-source%5B%5D=remotejobshg', 'Remote', 0, 0, '2024-08-11 11:39:38', '2024-08-11 11:42:46', 1, 'Application Link', '2024-08-31', NULL),
(6, 9, 'Glaycia Beauty', 'company_logo/blank.jpg', 'Social media content creator', '<p>If you have a passion for storytelling through video and possess creative editing skills, send your cv, cover letter and portfolio to <a href=\"mailto:glayciabeauty@gmail.com\" target=\"_blank\">glayciabeauty@gmail.com</a></p>', 'Open', 'Design and Creative', 'Hybrid', '250,000 naira monthly', NULL, 'glayciabeauty@gmail.com', 'Osapa London, Lekki', 4, 2, '2024-08-12 10:30:51', '2024-08-31 15:52:31', 1, 'Send to Mail', '2024-08-23', NULL),
(7, 9, 'EY', 'company_logo/blank.jpg', 'Experienced Auditor (6 Months Contract)', '<p>&middot; Direct field work, inform supervisors of the audit engagement status and manage assurance staff performance</p>\r\n\r\n<p>&middot; Demonstrate a thorough understanding of complex accounting and auditing concepts and apply them to client situations</p>\r\n\r\n<p>&middot; Develop people through effectively delegating audit tasks and providing guidance to assurance staff</p>\r\n\r\n<p>&middot; Provide performance feedback, training and performance reviews for assurance staff</p>\r\n\r\n<p>&middot; Contribute ideas/opinions to the assurance teams and listen/respond to other assurance team members&#39; views</p>\r\n\r\n<p>&middot; Foster an efficient, innovative and team-oriented work environment</p>\r\n\r\n<p>&middot; Use technology to continually learn, share knowledge with assurance team members and enhance service delivery</p>\r\n\r\n<p>&middot; Develop an understanding of the firms&#39; service lines and actively seek/encourage assurance team members to contribute ideas and identify opportunities to apply the firm&#39;s services</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Qualifications</p>\r\n\r\n<p>&middot; A degree in Accounting, Finance, or related field</p>\r\n\r\n<p>&middot; A minimum of 3 years of related work experience</p>\r\n\r\n<p>&middot; Preferably a chartered accountant</p>\r\n\r\n<p>&middot; Excellent project management skills</p>\r\n\r\n<p>&middot; Good written and verbal communication skills</p>\r\n\r\n<p>&middot; Dedication to teamwork and leadership</p>\r\n\r\n<p>Equal Employment Opportunity Information</p>\r\n\r\n<p>EY is committed to inclusiveness, equity and accessibility. We encourage all qualified candidates to apply.</p>', 'Open', 'Finance', 'Full Time', 'Not Specified (Monthly)', NULL, 'https://app.gignow.com/ey/job_postings/99cbf5f58c7742ffb79475705996ec47/apply', 'Lagos', 1, 0, '2024-08-12 10:41:21', '2024-08-17 18:58:16', 1, 'Application Link', '2024-08-16', NULL),
(8, 9, 'Talent Impact Oil & Gas', 'company_logo/blank.jpg', 'Graduate Trainee (GT) Recruitment', '<p>The candidate must:<br />\r\n&bull;Be an engineering or core science (medical &amp; nursing inclusive) graduate from a reputable university with a minimum of a Second Class Upper (2.1).<br />\r\n&bull;Be very smart and posses observable leadership traits<br />\r\n&bull;Be under 26 years of age.<br />\r\n&bull;Have completed NYSC within the last 2 years.<br />\r\n&bull;Willing to work in any location<br />\r\n<br />\r\n&nbsp;</p>', 'Open', 'Human Resources', 'Full Time', 'Not Specified', NULL, 'https://docs.google.com/forms/d/e/1FAIpQLSfGYhzGN10OoEG9-e4bkMIQgVGnjPM00y_trlHoTIgDtXBR5g/viewform', 'Nigeria', 2, 0, '2024-08-12 10:45:10', '2024-08-17 22:49:10', 1, 'Application Link', '2024-08-17', NULL),
(9, 9, 'Unknown', 'company_logo/blank.jpg', 'Maths or Literacy Educator', '<p>Responsibilities<br />\r\n&bull; With direction from the Head of Department and within the context of the school&#39;s curriculum and schemes of work, plan and prepare effective lessons.<br />\r\n<br />\r\n&bull; Teach engaging and effective lessons that motivate, inspire and improve pupil attainment.<br />\r\n<br />\r\n&bull; Ensure students acquire and consolidate knowledge, skills and understanding appropriate to the subject taught.<br />\r\n<br />\r\n&bull; Ensure that all students achieve at least at chronological age level or, if well below level, make significant and continuing progress towards achieving at chronological age level.<br />\r\n<br />\r\n&bull; Direct and supervise support staff assigned to lessons and when required participate in related recruitment and selection activities.<br />\r\n<br />\r\n&bull; Organise trips and visits to enhance the learning experience of all students.<br />\r\n<br />\r\nRequirements<br />\r\n&bull; Candidates should possess B.Ed. with at least 2 years work experience.</p>', 'Open', 'Education', 'Full Time', 'Not Specified', NULL, 'bservice.jlla@gmail.com', 'Gwarimpa Estate, Abuja (FCT)', 1, 0, '2024-08-12 10:48:00', '2024-08-13 03:24:44', 1, 'Send to Mail', '2024-08-17', NULL),
(11, 9, 'EXPY FOUNDATION', 'company_logo/EXPY FOUNDATION_566c0b053b819f.jpg', 'Community Mnager', '<p>We are looking for a dynamic and experienced Community Manager to join our team. The ideal candidate will be responsible for building, growing, and managing our online community, engaging with our audience, and fostering a positive and active community environment.</p>\r\n\r\n<p><strong>Responsibilities:</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Community Engagement:</strong></p>\r\n\r\n	<ul>\r\n		<li>Foster and maintain relationships with community members.</li>\r\n		<li>Respond to comments, questions, and inquiries promptly and professionally.</li>\r\n		<li>Encourage discussions and interactions within the community.</li>\r\n		<li>Monitor community feedback and address issues proactively.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Content Creation:</strong></p>\r\n\r\n	<ul>\r\n		<li>Develop and share engaging content to drive community interaction.</li>\r\n		<li>Create and manage content calendars.</li>\r\n		<li>Organize and host events such as webinars, Q&amp;A sessions, and live chats.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Social Media Management:</strong></p>\r\n\r\n	<ul>\r\n		<li>Manage and grow social media presence across various platforms.</li>\r\n		<li>Develop social media strategies to increase engagement and reach.</li>\r\n		<li>Analyze and report on social media metrics.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Brand Advocacy:</strong></p>\r\n\r\n	<ul>\r\n		<li>Represent the brand in a positive and professional manner.</li>\r\n		<li>Identify and engage with brand advocates and influencers.</li>\r\n		<li>Promote brand initiatives and campaigns within the community.</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><strong>Moderation:</strong></p>\r\n\r\n	<ul>\r\n		<li>Enforce community guidelines and policies.</li>\r\n		<li>Monitor discussions to ensure a respectful and inclusive environment.</li>\r\n		<li>Address and resolve conflicts or issues within the community.</li>\r\n	</ul>\r\n	</li>\r\n</ul>', 'Open', 'Customer Service', 'Full Time', '$50-$100', NULL, 'info@expy.com.ng', 'Ibadan', 1, 0, '2024-08-17 21:14:43', '2024-08-17 21:43:56', 0, 'Send to Mail', '2024-08-31', 'tCccPCqQ8P6apMpbmTBCOFqx8aUY3pjB');

-- --------------------------------------------------------

--
-- Table structure for table `post_upskills`
--

CREATE TABLE `post_upskills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_logo` varchar(255) NOT NULL,
  `upskill_name` varchar(255) NOT NULL,
  `upskill_description` text NOT NULL,
  `upskill_status` varchar(255) NOT NULL,
  `upskill_category` varchar(255) NOT NULL,
  `upskill_link` varchar(255) DEFAULT NULL,
  `no_of_views` int(11) DEFAULT NULL,
  `upskill_apply` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `verify_upskill` int(11) NOT NULL,
  `application_type` varchar(255) NOT NULL,
  `application_deadline` date DEFAULT NULL,
  `upskill_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_upskills`
--

INSERT INTO `post_upskills` (`id`, `user_id`, `company_name`, `company_logo`, `upskill_name`, `upskill_description`, `upskill_status`, `upskill_category`, `upskill_link`, `no_of_views`, `upskill_apply`, `created_at`, `updated_at`, `verify_upskill`, `application_type`, `application_deadline`, `upskill_url`) VALUES
(1, 9, 'N/a', 'company_logo/blank.jpg', 'Graphic Design', '<h3><strong>Master Logo Design with Photoshop Illustrator Zero to Pro</strong></h3>\r\n\r\n<h3>What you&#39;ll learn</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Understand the principles of effective logo design</p>\r\n	</li>\r\n	<li>\r\n	<p>Learn about different logo types</p>\r\n	</li>\r\n	<li>\r\n	<p>Explore the Photoshop and Illustrator interface and workspace</p>\r\n	</li>\r\n	<li>\r\n	<p>Learn image manipulation techniques for logo design</p>\r\n	</li>\r\n	<li>\r\n	<p>Learn to create complex shapes and illustrations for logos</p>\r\n	</li>\r\n	<li>\r\n	<p>Create stunning visual effects and treatments for logos</p>\r\n	</li>\r\n	<li>\r\n	<p>Develop advanced techniques for logo refinement and finishing</p>\r\n	</li>\r\n</ul>', 'Open', 'Design and Creative', 'https://www.udemy.com/course/master-logo-design-with-photoshop-illustrator-zero-to-pro/?couponCode=3C32EB1F05CA10FDFD77', 0, 0, '2024-08-21 10:57:16', '2024-08-21 11:19:23', 1, 'Application Link', '2024-08-31', 'RU2fMd3HAADvcfOG0gdwc0louivFzCMi'),
(2, 9, 'N/a', 'company_logo/blank.jpg', 'Financial Analytics', '<h3><strong>Financial Analytics: Financial Analysis with Excel &amp; Tableau</strong></h3>\r\n\r\n<h3><strong>What you&#39;ll learn</strong></h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Master advanced functions and formulas in MS Excel for financial data analysis.</p>\r\n	</li>\r\n	<li>\r\n	<p>Explore techniques to manipulate and cleanse financial data effectively using Excel.</p>\r\n	</li>\r\n	<li>\r\n	<p>Discover how to create dynamic financial models and perform accurate financial forecasting.</p>\r\n	</li>\r\n	<li>\r\n	<p>Develop expertise in using Tableau to visualize financial data and build interactive dashboards.</p>\r\n	</li>\r\n	<li>\r\n	<p>Create visually compelling charts, graphs, and visualizations for financial analysis in Tableau.</p>\r\n	</li>\r\n	<li>\r\n	<p>Analyze financial statements and perform ratio analysis to evaluate financial performance.</p>\r\n	</li>\r\n	<li>\r\n	<p>Apply your skills to real-world financial scenarios and case studies, making data-driven decisions.</p>\r\n	</li>\r\n	<li>\r\n	<p>Enhance your ability to communicate financial insights through effective data visualization.</p>\r\n	</li>\r\n</ul>', 'Open', 'Finance', 'https://www.udemy.com/course/financial-analytics-excel-tableau/?couponCode=SKILLS4SALEA', 0, 0, '2024-08-21 11:09:43', '2024-08-21 11:19:20', 1, 'Application Link', '2024-08-21', '6VxrmFdxcxrH9kRXocVCdKIN6RJen6Zi'),
(3, 9, 'N/a', 'company_logo/blank.jpg', 'Essential Photoshop', '<h3><strong>Essential Photoshop Course Beginner to Intermediate</strong></h3>\r\n\r\n<h3><strong>What you&#39;ll learn</strong></h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Function, Tools, Interface</p>\r\n	</li>\r\n	<li>\r\n	<p>Colors and Adjustments</p>\r\n	</li>\r\n	<li>\r\n	<p>Text Style</p>\r\n	</li>\r\n	<li>\r\n	<p>Content Aware</p>\r\n	</li>\r\n	<li>\r\n	<p>Blur</p>\r\n	</li>\r\n	<li>\r\n	<p>Retouch</p>\r\n	</li>\r\n	<li>\r\n	<p>Spot Fixing</p>\r\n	</li>\r\n</ul>', 'Open', 'Design and Creative', 'https://www.udemy.com/course/adobe-graphics-design-video-editing/?couponCode=8E402872133C2EDC1C51', 0, 0, '2024-08-21 11:11:32', '2024-08-21 11:19:18', 1, 'Application Link', '2024-08-21', '9rR7eKDzTrPnN5zE0JFLUVCvx25n39Sf'),
(4, 9, 'N/a', 'company_logo/blank.jpg', 'PHP Master Class', '<h3><strong>PHP Master Class - The Complete PHP Developer Course</strong></h3>\r\n\r\n<h3><strong>What you&#39;ll learn</strong></h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>PHP for Beginners course with step-by-step lessons</p>\r\n	</li>\r\n	<li>\r\n	<p>Use loops to simplify processes</p>\r\n	</li>\r\n	<li>\r\n	<p>To learn the basics of PHP programming</p>\r\n	</li>\r\n	<li>\r\n	<p>PHP internal functions and create your own</p>\r\n	</li>\r\n	<li>\r\n	<p>Demonstrate understanding of PHP programming</p>\r\n	</li>\r\n	<li>\r\n	<p>Create, read, update and delete sessions and cookies</p>\r\n	</li>\r\n	<li>\r\n	<p>To learn intermediate and advanced PHP programming</p>\r\n	</li>\r\n</ul>', 'Open', 'Development and Programming', 'https://www.udemy.com/course/php-master-class-the-complete-php-developer-course/?couponCode=F3261D4D4074ACCD633B', 2, 0, '2024-08-21 11:12:47', '2024-08-31 15:54:00', 1, 'Application Link', '2024-08-21', 'BO5PPqFDu0D2UXsij857kG2U8RUp23UW'),
(5, 9, 'N/a', 'company_logo/blank.jpg', 'Machine Learning', '<h3><strong>Machine Learning - Fundamental of Python Machine Learning</strong></h3>\r\n\r\n<h3><strong>What you&#39;ll learn</strong></h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>The Machine Learning Process</p>\r\n	</li>\r\n	<li>\r\n	<p>Standard Deviation</p>\r\n	</li>\r\n	<li>\r\n	<p>Linear Regression</p>\r\n	</li>\r\n	<li>\r\n	<p>Polynomial Regression</p>\r\n	</li>\r\n	<li>\r\n	<p>Multiple Regression</p>\r\n	</li>\r\n	<li>\r\n	<p>Hierarchical Clustering</p>\r\n	</li>\r\n	<li>\r\n	<p>Logistic Regression</p>\r\n	</li>\r\n	<li>\r\n	<p>Bootstrap Aggregation</p>\r\n	</li>\r\n	<li>\r\n	<p>Cross Validation</p>\r\n	</li>\r\n</ul>', 'Open', 'Development and Programming', 'https://www.udemy.com/course/machine-learning-fundamental-of-python-machine-learning/?couponCode=E5BF0881F8F4EAF3B0BE', 0, 0, '2024-08-21 11:14:17', '2024-08-21 11:19:12', 1, 'Application Link', '2024-08-21', 'kmJJTd2jAH5ovzJl7FtCzCW7m8PpSoqp'),
(6, 9, 'N/a', 'company_logo/blank.jpg', 'SEO Fundamentals', '<h3><strong>SEO Fundamentals for Beginners Level</strong></h3>\r\n\r\n<h3><strong>What you will learn</strong></h3>\r\n\r\n<p>You will learn the basic html code for SEO</p>\r\n\r\n<p>you will learn how title and meta tag will work in SEO</p>\r\n\r\n<p>You will learn about what is on page and off page SEO</p>\r\n\r\n<p>you will learn how to make SEO with blogs</p>\r\n\r\n<p>you will learn how to work offline with original html website templates</p>\r\n\r\n<p>you will learn what AI tools we can use for content writing</p>\r\n\r\n<p>you will learn how much character need in title and meta tag</p>', 'Open', 'Sales and Marketing', 'https://www.udemy.com/course/seo-fundamentals-for-beginners-level-course-online-udemy/', 0, 0, '2024-08-21 11:16:06', '2024-08-21 11:50:12', 1, 'Application Link', '2024-08-21', 'bZWDCDV6VD1kAGAqthOLfJG1Qj63zMOH');

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `theme` varchar(255) NOT NULL,
  `theme_path` varchar(255) NOT NULL,
  `theme_path_edit` varchar(255) NOT NULL,
  `theme_picture` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `theme`, `theme_path`, `theme_path_edit`, `theme_picture`, `created_at`, `updated_at`) VALUES
(1, 'TalentLoom-Urban', 'portfolio.urban', 'portfolio.urban-edit', 'templates/urban/img/urban.png', '2024-08-23 09:43:23', '2024-08-23 09:43:23'),
(2, 'TalentLoom-Classic', 'portfolio.classic', 'portfolio.classic-edit', 'templates/classic/assets/img/classic.png', '2024-08-23 09:43:23', '2024-08-23 09:43:23'),
(3, 'TalentLoom-Sleek', 'portfolio.sleek', 'portfolio.sleek-edit', 'templates/sleek/assets/img/sleek.png', '2024-08-23 09:43:23', '2024-08-23 09:43:23');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL COMMENT 'Unique slug for social media sharing. MD5 hashed string',
  `max_participants` int(11) DEFAULT NULL COMMENT 'Max number of participants allowed',
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL COMMENT 'Profile picture for the conversation',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_category` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `user_roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`user_roles`)),
  `user_roles_major` varchar(255) DEFAULT NULL,
  `user_about` text DEFAULT NULL,
  `user_facebook` varchar(255) DEFAULT NULL,
  `user_twitter` varchar(255) DEFAULT NULL,
  `user_linkedin` varchar(255) DEFAULT NULL,
  `user_instagram` varchar(255) DEFAULT NULL,
  `country_code` varchar(10) DEFAULT NULL,
  `user_phone` varchar(255) DEFAULT NULL,
  `user_picture` varchar(255) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `user_url` varchar(255) DEFAULT NULL,
  `email_verified_status` int(11) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_name_link` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `login_attempts` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_type` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 0,
  `avatar` varchar(255) NOT NULL DEFAULT 'avatar.png',
  `dark_mode` tinyint(1) NOT NULL DEFAULT 0,
  `messenger_color` varchar(255) DEFAULT NULL,
  `user_type_status` enum('Superadmin','Admin','User') NOT NULL,
  `cover_picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_category`, `name`, `full_name`, `email`, `email_verified_at`, `password`, `user_roles`, `user_roles_major`, `user_about`, `user_facebook`, `user_twitter`, `user_linkedin`, `user_instagram`, `country_code`, `user_phone`, `user_picture`, `profile_picture`, `user_url`, `email_verified_status`, `user_name`, `user_name_link`, `remember_token`, `created_at`, `updated_at`, `login_attempts`, `user_type`, `active_status`, `avatar`, `dark_mode`, `messenger_color`, `user_type_status`, `cover_picture`) VALUES
(1, 'Sales and Marketing', 'AKINYOOYE AKINFEMI', 'AKINYOOYE AKINFEMI', 'emmakinyooye@gmail.com', '2023-10-23 02:28:56', '$2y$10$xqR6d8Opxa.8tGv9nMIdCe9q2cU8dshxBe8uxHWO86BsY2yUriY.C', '\"Community Manager,Life Coach,Product Designer,Web Developer,Backend Developer,Frontend Developer\"', 'Backend Developer', '<p>Meet Femi Akinyooye, a logical full stack web developer, business consultant and tech clarity coach.</p>\r\n\r\n<p>He&#39;s the COO and co-founder of <a href=\"https://web.facebook.com/kingsbconsult?__cft__[0]=AZVML-wkEI7239xVir56fnMp1tYFRrx0J7wODGSe3W1363DKvrWCKX8HIZ5g-pl-qsGNmIGP2D8IM6xOR4IcpANGo8vQm-tcQWrS8Sbb-ucvF4algFnbWupKEyjlUjRJebfYx3O-73qVvYbsNVL-ZA0qTXofyf_2QJEAHA9ufRJndA&amp;__tn__=-]K-R\">Kings Branding Consult</a> Ltd, a startup that offers professional branding services to businesses, specializing in Marketing, Branding, and Digital literacy. Femi is also the CEO of <a href=\"https://web.facebook.com/profile.php?id=100083036147077&amp;__cft__[0]=AZVML-wkEI7239xVir56fnMp1tYFRrx0J7wODGSe3W1363DKvrWCKX8HIZ5g-pl-qsGNmIGP2D8IM6xOR4IcpANGo8vQm-tcQWrS8Sbb-ucvF4algFnbWupKEyjlUjRJebfYx3O-73qVvYbsNVL-ZA0qTXofyf_2QJEAHA9ufRJndA&amp;__tn__=-]K-R\">Emmanex I.T Consult</a>.</p>\r\n\r\n<p>Femi has a track record of consistency and has developed so many websites and web applications for reputable brands and organizations using the PHP programming language. His passion for web development and programming is evident in the quality of work he delivers to clients.</p>', 'https://www.facebook.com/akinyooye.emmanuel', NULL, 'https://linkedin.com/in/femi-akinyooye', 'https://instgram.com/techwithfemi', '+234', '7032689329', 'profile_pictures/femi-akinyooye_user_picture_1721656751.jpg', 'profile_pictures/femi-akinyooye_profile_picture_1721656751.jpg', 'https://talentloom.kingsconsult.com.ng/femi-akinyooye', 1, 'Femi Akinyooye', 'femi-akinyooye', 'dJqW8k3RSZj7WbpBE9so1xFpBf4u5jc97oJ26fIEqkmXFas0bgy4tOyRVhpo', '2023-10-23 02:15:40', '2024-08-26 15:07:14', 0, 'Freelancer', 1, 'femi-akinyooye_user_picture_1721656751.jpg', 0, '#2180f3', 'User', 'profile_pictures/femi-akinyooye_cover_picture_1724659632.jpg'),
(2, NULL, 'Miracle Peters', 'Miracle Peters', 'miracle.kingsbranding@gmail.com', '2023-10-23 12:04:17', '$2y$10$uA65K1Wtf/PFFnrZztbIQOhFEPgHrJ.YB5YcCMfDQkv07b0QXD74W', '\"Researcher,Content Creator,Social Media Manager,Content Marketer,Virtual Assistant\"', 'Digital Marketer', NULL, NULL, NULL, 'www.linkedin.com/in/creativemiracle', 'https://instagram.com/the_socialmedia_goddess', '+234', '08104196102', 'profile_pictures/mediagoddess-2_user_picture_1721657164.jpg', 'profile_pictures/mediagoddess-2_profile_picture_1721657164.jpg', 'https://talentloom.kingsconsult.com.ng/mediagoddess-2', 1, 'mediagoddess', 'mediagoddess-2', 'dATinXaeS3sfJgAZQKQ8LSMrZOCNZOK7YQ6EjZ0r5nd3skRcnP7GeEeQ8n6E', '2023-10-23 12:02:53', '2024-07-22 13:11:38', 0, 'Freelancer', 0, 'mediagoddess-2_user_picture_1721657164.jpg', 0, NULL, 'User', NULL),
(3, 'n/a', 'Emmanex IT Consult', 'Emmanex IT Consult', 'emmanexitconsult@gmail.com', NULL, '$2y$10$oUzTT98hqHulDpByXP9lau2KD2j3imJLDNaHVN8NV/7AF.ZE1Sqjm', '\"Design and Creative,Customer Service,Development and Programming\"', '', '<p>Emmanex IT Consult, your trusted partner in comprehensive technology solutions. At Emmanex, we seamlessly blend expertise and innovation to offer a spectrum of services, making us a one-stop destination for all your technology needs.</p>\r\n\r\n<p><strong>Web Development, Hardware Sales and Installation,&nbsp;IT Consultancy,&nbsp;Computer Engineering.</strong></p>\r\n\r\n<p>At Emmanex IT Consult, we take pride in our commitment to excellence, customer satisfaction, and staying at the forefront of technological advancements. Join hands with us, and let&#39;s embark on a journey of technological empowerment, where your success is our priority.</p>', 'https://facebook.com/emmanex-it-consult', 'https://twitter.com/emmanex-it-consult', 'https://linkedin.com/emmanex-it-consult', 'https://instgram.com/emmanex-it-consult', '+234', '8034271855', 'profile_pictures/blank.jpg', NULL, 'https://talentloom.kingsconsult.com.ng/emmanex-it-consult', 1, 'Emmanex IT Consult', 'emmanex-it-consult', 'CYEqKpVLYHxEurTiTXRq2g1ijiHMdvT21dICpf9b2zXlQXYEK6nulQ7Ydwlk', '2023-11-19 06:26:56', '2023-11-19 06:39:44', 0, 'Organization', 0, 'blank.jpg', 0, NULL, 'User', NULL),
(4, NULL, 'AKINYOOYE MAXWELL', 'AKINYOOYE MAXWELL', 'maxwell@gmail.com', NULL, '$2y$10$o/y6hrPvdqhLKYSH1m9XT.bmjltauTEpTekvVAhvzkYSDw16q.oAy', '\"Photographer,Public Speaker\"', 'Web Developer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'profile_pictures/maxwell-akinyooye_user_picture.jpg', 'profile_pictures/maxwell-akinyooye_profile_picture.jpg', 'https://talentloom.kingsconsult.com.ng/maxwell-akinyooye', 1, 'Maxwell Akinyooye', 'maxwell-akinyooye', 'HEs6KV9Wt4SU1nNgbTDIYowDXx6nMgZE6xEGxfVj1QtMCNNTs8M2LJHA1nxk', '2023-12-01 04:38:31', '2023-12-15 07:41:17', 0, 'Freelancer', 0, 'maxwell-akinyooye_user_picture.jpg', 0, NULL, 'User', NULL),
(8, 'Finance', 'AKINYOOYE TEMILOLUWA', 'AKINYOOYE TEMILOLUWA', 'phemanuel@gmail.com', '2023-12-12 05:16:56', '$2y$10$fRjpSsK1aFjnRa.ld/j3t.4PsBgrPuQGUYcziY.nrUvrhtaUPkthq', NULL, 'Life Coach', NULL, NULL, NULL, NULL, NULL, '+234', '8053607789', 'profile_pictures/akinyooye-temiloluwa_user_picture.jpg', 'profile_pictures/akinyooye-temiloluwa_profile_picture.jpg', 'https://talentloom.kingsconsult.com.ng/akinyooye-temiloluwa', 1, 'AKINYOOYE TEMILOLUWA', 'akinyooye-temiloluwa', '3VbfZ5i4NggkOLdE9c2oV0IgluME2XWKQO1LziqPehK8tQCktOLl7Oh27KsK', '2023-12-12 05:14:15', '2023-12-16 02:32:30', 0, 'Freelancer', 0, 'akinyooye-temiloluwa_user_picture.jpg', 0, NULL, 'User', NULL),
(9, 'n/a', 'Kings Branding Consult Ltd', 'Kings Branding Consult Ltd', 'kingsbrandingconsult@gmail.com', '2024-07-23 10:53:00', '$2y$10$U0mgSXCFHAOH0FvnEGcNAOOwt0IhcXf04Yt6KLmcl1PsBWsfA8Tzu', '\"Design and Creative,Development and Programming,Education\"', NULL, '<p>Kings Branding Consult Ltd is a leading branding and marketing company that emphasis on building and enhancing brand journey irrespective of size and location.</p>', NULL, NULL, NULL, 'http://www.instagram.com/kingsbrandingconsult', '+234', '8076333293', 'profile_pictures/kings-branding-consult_user_picture_1721736335.jpg', 'profile_pictures/kings-branding-consult_profile_picture_1721736335.jpg', 'https://talentloom.kingsconsult.com.ng/kings-branding-consult', 1, 'KINGS BRANDING CONSULT', 'kings-branding-consult', 'ceCJfi86GYUs82m1PJ7KyyA0L55yRVa2YRjBcKgmPyGUMTIpTMXagR0Cujkm', '2024-07-23 10:52:31', '2024-08-31 15:42:33', 0, 'Organization', 0, 'kings-branding-consult_user_picture_1721736936.png', 0, NULL, 'Superadmin', NULL),
(10, 'Design and Creative', 'Désirée Chinecherem Azubike', 'Désirée Chinecherem Azubike', 'desiree.nech@gmail.com', '2024-08-07 11:08:44', '$2y$10$LjLv3eRuX8T/TueGsfCih.nMMEKg8GY6pNBTdmFbTZkwjvZC6Cs06', '\"Social Media Manager\"', 'Virtual Assistant', NULL, 'https://www.facebook.com/profile.php?id=61563716610983&mibextid=ZbWKwL', NULL, NULL, 'https://www.instagram.com/yoursocialmediaguardian?igsh=ZHJ5azRhajVnM3I2', '+234', '8165278783', 'profile_pictures/blank.jpg', 'profile_pictures/blank.jpg', 'https://talentloom.kingsconsult.com.ng/désirée-chinecherem', 1, 'Désirée Chinecherem', 'désirée-chinecherem', 'aQY2MQBB2sOHWK61p8fcP5WqRC5OFfs73JLe7rdD', '2024-08-07 11:08:17', '2024-08-07 11:23:45', 0, 'Freelancer', 0, 'blank.jpg', 0, NULL, 'User', NULL),
(11, NULL, 'Mmesoma Anereobi', 'Mmesoma Anereobi', 'manereobi@gmail.com', '2024-08-08 18:14:06', '$2y$10$SeYGYEDadzbeMgJoMQFkzuaFj2erSN0.wD1Gv453h1Pbfk3/9TvoC', '\"Community Manager\"', 'Social Media Manager', '<p>I am Mmesoma Anereobi, a dedicated and creative Social Media Manager&nbsp;committed to propelling businesses towards unparalleled success in the ever-evolving landscape of online presence.&nbsp;</p>\r\n\r\n<p>My strength lies in my creativity, ability to think outside the box and take up leadership in the face of issues.</p>\r\n\r\n<p>I specialize in crafting tailored strategies that resonate with audiences, ignite engagement, and drive impactful results. Through thorough analysis and strategic planning, I empower brands to not just exist but thrive in the digital space.</p>\r\n\r\n<p>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', NULL, NULL, 'https://www.linkedin.com/in/anereobimmesoma', NULL, '+234', '07038124886', 'profile_pictures/mmesoa-2_user_picture_1723233500.png', 'profile_pictures/mmesoa-2_profile_picture_1723233500.png', 'https://talentloom.kingsconsult.com.ng/mmesoa-2', 1, 'MmesoA', 'mmesoa-2', 'QyehXFWPxBtlxY7cGlF3s7lwxDyJ9P3k5NuxnyeS', '2024-08-08 18:13:41', '2024-08-09 20:01:59', 0, 'Freelancer', 0, 'mmesoa-2_user_picture_1723233500.png', 0, NULL, 'User', NULL),
(13, NULL, 'Test User', 'Test User', 'phemanuel@yahoo.com', '2024-08-31 14:27:12', '$2y$10$bog666t7Dcg541yvGTfqc.i9mqV/SRVtJZDAt30kwtiaGM/fmQdSG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'profile_pictures/blank.jpg', 'profile_pictures/blank.jpg', 'https://talentloom.kingsconsult.com.ng/testuser', 1, 'TestUser', 'testuser', 'ST6oSF5TBXa7LSyek1EhlpLcQmQPEojDdlIk5mrm', '2024-08-31 14:24:45', '2024-08-31 14:27:12', 0, 'Freelancer', 0, 'avatar.png', 0, NULL, 'User', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_category`
--

CREATE TABLE `user_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_category`
--

INSERT INTO `user_category` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Sales and Marketing', NULL, NULL),
(2, 'Design and Creative', NULL, NULL),
(3, 'Customer Service', NULL, NULL),
(4, 'Nonprofit and Volunteer', NULL, NULL),
(5, 'Finance', NULL, NULL),
(6, 'Development and Programming', NULL, NULL),
(7, 'Human Resources', NULL, NULL),
(8, 'Transportation and Logistics', NULL, NULL),
(9, 'Education', NULL, NULL),
(10, 'Healthcare', NULL, NULL),
(11, 'Others', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_education`
--

CREATE TABLE `user_education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `college_year` varchar(255) NOT NULL,
  `college_qualification` varchar(255) NOT NULL,
  `college_certificate` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_education`
--

INSERT INTO `user_education` (`id`, `user_id`, `college_name`, `college_year`, `college_qualification`, `college_certificate`, `created_at`, `updated_at`) VALUES
(1, 1, 'THE POLYTECHNIC IBADAN', '2008', 'BSC COMPUTER SCIENCE', 'certificates/Femi Akinyooye_2008_BSCC_THEP.pdf', '2023-10-23 02:55:30', '2023-10-23 02:55:30'),
(2, 1, 'UDACITY', '2021', 'FULL STACK WEB DEVELOPER', 'certificates/Femi Akinyooye_2021_FULL_UDACI.pdf', '2023-10-23 02:55:46', '2023-10-23 02:55:46'),
(3, 1, 'STORM SOFTWARE', '2010', 'DIPLOMA IN WEB DESIGN', 'certificates/Femi Akinyooye_2010_DIPLO_STORM.pdf', '2023-10-23 02:59:50', '2023-10-23 02:59:50'),
(4, 2, 'Ball State University, USA', '2027', 'B.A Business Administration', NULL, '2023-10-23 13:47:20', '2023-10-23 13:47:20'),
(5, 2, 'Digital Marketing &E-commerce', '2022', 'Google', 'certificates/mediagoddess_2022_Googl_Digit.pdf', '2023-10-23 13:48:23', '2023-10-23 13:48:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_experiences`
--

CREATE TABLE `user_experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_company` varchar(255) NOT NULL,
  `company_year` varchar(255) NOT NULL,
  `user_company_role` varchar(255) NOT NULL,
  `user_about_role` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_experiences`
--

INSERT INTO `user_experiences` (`id`, `user_id`, `user_company`, `company_year`, `user_company_role`, `user_about_role`, `created_at`, `updated_at`) VALUES
(1, 1, 'Storm Software IT Services', '2011', 'Software Developer', '<p>I develop, analyze and test web and stand-alone applucations.</p>', '2023-10-23 03:01:37', '2023-10-23 03:01:37'),
(2, 1, 'Oyo State College of Health Science and Technology', '2021', 'Backend Web Developer', '<p>I develop, test and deploy web and stand-alone applications.</p>', '2023-10-23 03:02:11', '2023-10-23 03:02:11'),
(3, 2, 'Kings Branding Consult', '2020', 'CEO', '<ul>\r\n	<li>Managed and cordinated all business activities.</li>\r\n	<li>Worked with the COO to effectively run business operations</li>\r\n</ul>', '2023-10-23 13:50:36', '2023-10-23 13:50:36'),
(4, 11, 'Sfeoo', '2022', 'Social media manager', '<p>▪︎ Created content that&nbsp;connected with audience.</p>\r\n\r\n<p>▪︎ Updated with trends that aligned with brand goals</p>\r\n\r\n<p>▪︎ Collaborated with Team to plan contents.</p>\r\n\r\n<p>&nbsp;</p>', '2024-08-09 19:10:26', '2024-08-09 19:10:26'),
(5, 11, 'TIBA - The Iconic Brand Africa', '2024', 'Social media manager | Community Manager', '<p>▪︎ I created content calendar for the organisation&nbsp;</p>\r\n\r\n<p>▪︎ I took up a leadership position as a compliance to ensure the smooth running of the Team</p>\r\n\r\n<p>▪︎ Created catchy designs using canva and AI models</p>', '2024-08-09 19:16:58', '2024-08-09 19:16:58'),
(6, 11, 'ALX - Waga Simulation company', '2024', 'Social media manager', '<p>▪︎ Worked as Social media manager in ALX Waga Simulation company in ALXAICE essential course offered by ALX.</p>\r\n\r\n<p>▪︎ I applied edge-cutting technology to help tasks as a social media manager easier.</p>', '2024-08-09 19:19:17', '2024-08-09 19:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE `user_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_email` varchar(255) NOT NULL,
  `to_user_email` varchar(255) NOT NULL,
  `from_user_fullname` varchar(255) NOT NULL,
  `to_user_fullname` varchar(255) NOT NULL,
  `from_user_type` varchar(255) NOT NULL,
  `to_user_type` varchar(255) NOT NULL,
  `from_user_picture` varchar(255) NOT NULL,
  `to_user_picture` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `message_type` varchar(255) NOT NULL,
  `message_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_messages`
--

INSERT INTO `user_messages` (`id`, `from_user_id`, `to_user_id`, `from_user_email`, `to_user_email`, `from_user_fullname`, `to_user_fullname`, `from_user_type`, `to_user_type`, `from_user_picture`, `to_user_picture`, `message`, `message_type`, `message_status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'emmakinyooye@gmail.com', 'miracle.kingsbranding@gmail.com', 'AKINYOOYE AKINFEMI', 'Miracle Peters', 'Freelancer', 'Freelancer', 'profile_pictures/femi-akinyooye_user_picture.jpg', 'profile_pictures/mediagoddess-2_user_picture.jpg', '<p>Good morning Miracle,</p>\r\n\r\n<p>I m Femi Akinyooye, a web developer, I would love to work with you, you can find my portfolio with the link below.</p>\r\n\r\n<p>https://meet-me.kingsconsult.com.ng/FemiAkinyooye</p>', 'Direct Message', 'Read', '2023-12-15 06:29:47', '2023-12-16 02:15:07'),
(2, 1, 2, 'emmakinyooye@gmail.com', 'miracle.kingsbranding@gmail.com', 'AKINYOOYE AKINFEMI', 'Miracle Peters', 'Freelancer', 'Freelancer', 'profile_pictures/femi-akinyooye_user_picture.jpg', 'profile_pictures/mediagoddess-2_user_picture.jpg', '<p>Good evening Miracle,</p>\r\n\r\n<p>I have not heard from you.</p>\r\n\r\n<p>Regards.</p>', 'Direct Message', 'Read', '2023-12-15 06:30:36', '2023-12-16 02:15:07'),
(3, 4, 2, 'maxwell@gmail.com', 'miracle.kingsbranding@gmail.com', 'AKINYOOYE MAXWELL', 'Miracle Peters', 'Freelancer', 'Freelancer', 'profile_pictures/maxwell-akinyooye_user_picture.jpg', 'profile_pictures/mediagoddess-2_user_picture.jpg', '<p>Good morning Miracle,</p>\r\n\r\n<p>I m Maxwell Akinyooye, a web developer, I would love to work with you, you can find my portfolio with the link below.</p>\r\n\r\n<p>https://meet-me.kingsconsult.com.ng/MaxwellAkinyooye</p>', 'Direct Message', 'Read', '2023-12-15 07:41:52', '2023-12-16 02:12:06'),
(4, 2, 4, 'miracle.kingsbranding@gmail.com', 'maxwell@gmail.com', 'Miracle Peters', 'AKINYOOYE MAXWELL', 'Freelancer', 'Freelancer', 'profile_pictures/mediagoddess-2_user_picture.jpg', 'profile_pictures/maxwell-akinyooye_user_picture.jpg', '<p>Hi Maxwell,&nbsp;</p>\r\n\r\n<p>I&nbsp; have checked your profile, and it looks promising, let&#39;s connect asap, i would love to work on some lovely projects with you.</p>\r\n\r\n<p>Regards.</p>', 'Direct Message', 'Read', '2023-12-15 08:12:54', '2023-12-16 03:13:52'),
(5, 2, 4, 'miracle.kingsbranding@gmail.com', 'maxwell@gmail.com', 'Miracle Peters', 'AKINYOOYE MAXWELL', 'Freelancer', 'Freelancer', 'profile_pictures/mediagoddess-2_user_picture.jpg', 'profile_pictures/maxwell-akinyooye_user_picture.jpg', '<p>Hi Maxwell,&nbsp;</p>\r\n\r\n<p>i Have not heard from you, i will be starting the project next week, and i need to know your stand. Please get back to me asap.</p>\r\n\r\n<p>Regards.</p>', 'Direct Message', 'Read', '2023-12-15 08:28:45', '2023-12-16 03:13:52'),
(6, 2, 1, 'miracle.kingsbranding@gmail.com', 'emmakinyooye@gmail.com', 'Miracle Peters', 'AKINYOOYE AKINFEMI', 'Freelancer', 'Freelancer', 'profile_pictures/mediagoddess-2_user_picture.jpg', 'profile_pictures/femi-akinyooye_user_picture.jpg', '<p>Hi Femi,</p>\r\n\r\n<p>I have checked you out, and you have a very nice portfolio, i will contact you as soon as i have a project we can work on together.</p>\r\n\r\n<p>Regards.</p>', 'Direct Message', 'Read', '2023-12-16 01:57:01', '2023-12-16 03:13:21'),
(7, 8, 2, 'phemanuel@yahoo.com', 'miracle.kingsbranding@gmail.com', 'AKINYOOYE TEMILOLUWA', 'Miracle Peters', 'Freelancer', 'Freelancer', 'profile_pictures/akinyooye-temiloluwa_user_picture.jpg', 'profile_pictures/mediagoddess-2_user_picture.jpg', '<p>Good morning Miracle,</p>\r\n\r\n<p>I would want to connect with you.</p>\r\n\r\n<p>Regards.</p>', 'Direct Message', 'Read', '2023-12-16 02:34:39', '2023-12-16 02:47:10'),
(8, 2, 8, 'miracle.kingsbranding@gmail.com', 'phemanuel@yahoo.com', 'Miracle Peters', 'AKINYOOYE TEMILOLUWA', 'Freelancer', 'Freelancer', 'profile_pictures/mediagoddess-2_user_picture.jpg', 'profile_pictures/akinyooye-temiloluwa_user_picture.jpg', '<p>Good day Temi,</p>\r\n\r\n<p>I would love to connect with you too.</p>\r\n\r\n<p>Regards.</p>', 'Direct Message', 'Read', '2023-12-16 02:47:45', '2023-12-16 02:48:20'),
(11, 4, 2, 'maxwell@gmail.com', 'miracle.kingsbranding@gmail.com', 'AKINYOOYE MAXWELL', 'Miracle Peters', 'Freelancer', 'Freelancer', 'profile_pictures/maxwell-akinyooye_user_picture.jpg', 'profile_pictures/mediagoddess-2_user_picture.jpg', '<p>Hi Miracle,</p>\r\n\r\n<p>I am so sorry not to have responded earlier, something urgent came up, but i am done with it now, i am much avavilable for the project.</p>\r\n\r\n<p>You can share the project scope, so i know here i come in.</p>\r\n\r\n<p>Regards.</p>', 'Direct Message', 'Read', '2023-12-16 03:28:55', '2023-12-16 03:31:36'),
(12, 4, 2, 'maxwell@gmail.com', 'miracle.kingsbranding@gmail.com', 'AKINYOOYE MAXWELL', 'Miracle Peters', 'Freelancer', 'Freelancer', 'profile_pictures/maxwell-akinyooye_user_picture.jpg', 'profile_pictures/mediagoddess-2_user_picture.jpg', '<p>Hi Miracle,&nbsp;</p>\r\n\r\n<p>I am still expecting your response.</p>\r\n\r\n<p>Thank you.</p>', 'Direct Message', 'Read', '2023-12-16 03:29:39', '2023-12-16 03:31:36'),
(13, 2, 4, 'miracle.kingsbranding@gmail.com', 'maxwell@gmail.com', 'Miracle Peters', 'AKINYOOYE MAXWELL', 'Freelancer', 'Freelancer', 'profile_pictures/mediagoddess-2_user_picture.jpg', 'profile_pictures/maxwell-akinyooye_user_picture.jpg', '<p>Hi Femi,&nbsp;</p>\r\n\r\n<p>i have sent the project scope to your email, kindly go through thoroughly and get back asap.</p>\r\n\r\n<p>Regards.</p>', 'Direct Message', 'Read', '2023-12-16 03:34:17', '2023-12-16 03:42:18'),
(14, 4, 2, 'maxwell@gmail.com', 'miracle.kingsbranding@gmail.com', 'AKINYOOYE MAXWELL', 'Miracle Peters', 'Freelancer', 'Freelancer', 'profile_pictures/maxwell-akinyooye_user_picture.jpg', 'profile_pictures/mediagoddess-2_user_picture.jpg', '<p>Hi Miracle,</p>\r\n\r\n<p>I have gone through the project scope and it is very lovely, can we have a meeting on zoom to further agree on the mode of execution.</p>', 'Direct Message', 'Read', '2023-12-16 03:46:39', '2023-12-16 03:47:31'),
(15, 2, 1, 'miracle.kingsbranding@gmail.com', 'emmakinyooye@gmail.com', 'Miracle Peters', 'AKINYOOYE AKINFEMI', 'Freelancer', 'Freelancer', 'profile_pictures/mediagoddess-2_user_picture.jpg', 'profile_pictures/femi-akinyooye_user_picture.jpg', '<p>Hello there,</p>\r\n\r\n<p>Have you eaten today?</p>', 'Direct Message', 'Read', '2024-01-29 08:27:19', '2024-01-29 08:27:34'),
(16, 1, 2, 'emmakinyooye@gmail.com', 'miracle.kingsbranding@gmail.com', 'AKINYOOYE AKINFEMI', 'Miracle Peters', 'Freelancer', 'Freelancer', 'profile_pictures/femi-akinyooye_user_picture.jpg', 'profile_pictures/mediagoddess-2_user_picture.jpg', '<p>Ogbanje woman.</p>', 'Direct Message', 'Read', '2024-01-29 08:28:04', '2024-07-17 02:15:06'),
(17, 1, 8, 'emmakinyooye@gmail.com', 'phemanuel@yahoo.com', 'AKINYOOYE AKINFEMI', 'AKINYOOYE TEMILOLUWA', 'Freelancer', 'Freelancer', 'profile_pictures/femi-akinyooye_user_picture.jpg', 'profile_pictures/akinyooye-temiloluwa_user_picture.jpg', '<p>Hi Temiloluwa</p>', 'Direct Message', 'Unread', '2024-06-30 00:08:35', '2024-06-30 00:08:35'),
(18, 1, 2, 'emmakinyooye@gmail.com', 'miracle.kingsbranding@gmail.com', 'AKINYOOYE AKINFEMI', 'Miracle Peters', 'Freelancer', 'Freelancer', 'profile_pictures/femi-akinyooye_user_picture.jpg', 'profile_pictures/mediagoddess-2_user_picture.jpg', '<p>How hve you been</p>', 'Direct Message', 'Read', '2024-07-18 06:09:53', '2024-07-18 06:10:31'),
(19, 2, 1, 'miracle.kingsbranding@gmail.com', 'emmakinyooye@gmail.com', 'Miracle Peters', 'AKINYOOYE AKINFEMI', 'Freelancer', 'Freelancer', 'profile_pictures/mediagoddess-2_user_picture.jpg', 'profile_pictures/femi-akinyooye_user_picture.jpg', '<p>I am fine Femi, about the Digital Skill Project, will get in touch soon.</p>', 'Direct Message', 'Read', '2024-07-18 06:11:28', '2024-07-19 01:49:33'),
(20, 1, 2, 'emmakinyooye@gmail.com', 'miracle.kingsbranding@gmail.com', 'AKINYOOYE AKINFEMI', 'Miracle Peters', 'Freelancer', 'Freelancer', 'profile_pictures/femi-akinyooye_user_picture.jpg', 'profile_pictures/mediagoddess-2_user_picture.jpg', '<p>Hi</p>', 'Direct Message', 'Unread', '2024-07-19 01:55:43', '2024-07-19 01:55:43');

-- --------------------------------------------------------

--
-- Table structure for table `user_portfolios`
--

CREATE TABLE `user_portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `file_description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_portfolios`
--

INSERT INTO `user_portfolios` (`id`, `user_id`, `file_name`, `file_type`, `file_url`, `file_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'KBC WEBSITE DEVELOPMENT', 'Image', 'portfolio/image/Femi Akinyooye_65367af1462ac_65367.jpg', 'KBC WEBSITE DEVELOPMENT', '2023-10-23 20:25:18', '2023-10-23 21:32:48'),
(2, 1, 'NYFEW WEBSITE', 'Image', 'portfolio/image/Femi Akinyooye_6536748381f5b_65367.jpg', 'NYFEW WEBSITE', '2023-10-23 20:26:27', '2023-10-23 21:33:54'),
(3, 1, 'KBC LMS', 'Image', 'portfolio/image/Femi Akinyooye_653674b63e3f0_65367.jpg', 'KBC LMS', '2023-10-23 20:27:18', '2023-10-23 20:27:18'),
(4, 1, 'KBC CONTENT CALENDAR', 'Document', 'portfolio/document/Femi Akinyooye_653674d8f29c9_65367.pdf', 'KBC CONTENT CALENDAR', '2023-10-23 20:27:53', '2023-10-23 21:32:12'),
(5, 1, 'NYFEW BRAND STRATEGY', 'Document', 'portfolio/document/Femi Akinyooye_6536830676680_65368.pdf', 'NYFEW BRAND STRATEGY', '2023-10-23 21:28:22', '2023-10-23 21:28:22'),
(6, 2, 'KBC Digital Skills Workshop', 'Image', 'portfolio/image/mediagoddess_65368966104d4_65368.png', 'I oversaw the creative plots for this project', '2023-10-23 13:55:34', '2023-10-23 13:55:34'),
(7, 1, 'TalentLoom', 'Image', 'portfolio/image/Femi Akinyooye_658d7a98663a5_658d7.jpg', 'Connecting Freelancers and Employers.', '2023-12-28 13:39:36', '2023-12-28 13:39:36'),
(8, 11, 'Content calendar creation for TIBA', 'Image', 'portfolio/image/MmesoA_66b67a8dcf24d_66b67.jpg', 'I created a content calendar for a client to aid the brand\'s social media goals and strategy.', '2024-08-09 19:22:37', '2024-08-09 19:22:37'),
(9, 11, 'Social media audit for Pamela L', 'Document', 'portfolio/document/MmesoA_66b67cc3696b9_66b67.pdf', 'A social media audit to analyse the online presence of a client which will help profer a solution', '2024-08-09 19:32:03', '2024-08-09 19:32:03'),
(10, 11, 'Social media audit for King\'s Branding Consult and recommendations.', 'Document', 'portfolio/document/MmesoA_66b67f0d69510_66b67.PDF', 'I conducted a thorough analysis for a client and including a content calendar creation for them', '2024-08-09 19:41:49', '2024-08-09 19:41:49'),
(11, 11, 'Page revamp and optimization', 'Image', 'portfolio/image/MmesoA_66b67ffad2e4a_66b67.jpg', 'Revamped a retouched a fashion page', '2024-08-09 19:45:46', '2024-08-09 19:45:46'),
(12, 11, 'Content creation', 'Image', 'portfolio/image/MmesoA_66b6808976f9c_66b68.jpg', 'Wrote and created post on calendar creation and content strategy', '2024-08-09 19:48:09', '2024-08-09 19:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `user_resources`
--

CREATE TABLE `user_resources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `resource_type` enum('video','pdf','ebook','article','template','tool','cheat_sheet','checklist','quiz') NOT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `skill_set` varchar(255) DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `access_level` enum('free','paid','premium') NOT NULL DEFAULT 'free',
  `views_count` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `downloads_count` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_active` enum('Active','Inactive') NOT NULL,
  `uploaded_by` int(11) NOT NULL,
  `file_size` bigint(20) UNSIGNED DEFAULT NULL,
  `license_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_resources`
--

INSERT INTO `user_resources` (`id`, `title`, `description`, `resource_type`, `file_path`, `url`, `thumbnail`, `author`, `skill_set`, `tags`, `access_level`, `views_count`, `downloads_count`, `is_active`, `uploaded_by`, `file_size`, `license_type`, `created_at`, `updated_at`) VALUES
(1, 'Blockchain Career Guide', 'Blockchain Career Guide will give you insights into the most trending technologies, the top hiring companies, the skills required to jumpstart your career in Blockchain, and offers you a personalized roadmap to becoming a successful Blockchain Developer.', 'ebook', 'resources/documents/G5G9dLPsavc9mHrYOHbI3XdIW6LX5p5qG0s8IN9w.pdf', NULL, NULL, 'Nikita Duggal', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, 5667300, NULL, '2024-09-04 22:19:32', '2024-09-04 22:19:32'),
(2, 'Top Front End and Back End Programming Languages', 'This ebook will help you understand the top 8 programming languages, the ones in demand, features, pros and cons, benefits, and potential of learning one', 'ebook', 'resources/documents/Ra1PmZn8P8bWZllO40nNgC9nt1xAJ2VNJYrdE50d.pdf', NULL, NULL, 'Nikita Duggal', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, 2252692, NULL, '2024-09-04 22:29:15', '2024-09-04 22:29:15'),
(3, 'Skills and Certification for Mobile App Development', 'Mobile App Development Skills Guide helps you to take the first step towards a successful career in this exciting field.', 'ebook', 'resources/documents/gvCubSe4l2o5UAGpCFmBZVYujxuBggtlMnx5JB6S.pdf', NULL, NULL, 'Admin', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, 2346408, NULL, '2024-09-04 22:31:56', '2024-09-04 22:31:56'),
(4, 'SEO for Video', 'This eBook, will show you tips on how you can leverage SEO for video.', 'ebook', 'resources/documents/oOeM1g88kslgVN3w8aQsPtvEx8OMCJzFExsdVRvf.pdf', NULL, NULL, 'Admin', 'Sales and Marketing', NULL, 'free', 0, 0, 'Active', 9, 1538553, NULL, '2024-09-04 22:41:11', '2024-09-04 22:41:11'),
(5, 'Stages of Thinking', 'Breaking down the Three Stages of Design Thinking.', 'ebook', 'resources/documents/tskjOkK32mabW6pPrGNDUhjHB6xmze26YSm1y9F0.pdf', NULL, NULL, 'Admin', 'Design and Creative', NULL, 'free', 0, 0, 'Active', 9, 47575, NULL, '2024-09-04 22:48:10', '2024-09-06 22:47:28'),
(6, 'How To Become A Social Media Manager - Beginners Guide', 'Ready to be a social media manager but not sure how to get started.', 'video', NULL, 'https://youtu.be/y-n1RUbYq6Q', NULL, 'Flick', 'Design and Creative', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-04 23:06:55', '2024-09-04 23:06:55'),
(7, 'What Does a Social Media Manager ACTUALLY Do', 'If you\'re a beginner social media manager or you\'re wanting to learn how to start a social media marketing agency, then this video is for you', 'video', NULL, 'https://youtu.be/WP4e6BeTa08', NULL, 'Milou Pietersz', 'Design and Creative', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-04 23:14:33', '2024-09-04 23:14:33'),
(8, 'Introduction To Software Development Life Cycle', 'Operations such as developing, deploying, and maintaining software.', 'video', NULL, 'https://youtu.be/Fi3_BjVzpqk', NULL, 'Simplilearn', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-04 23:17:23', '2024-09-04 23:17:23'),
(9, 'Best IDE for Programming in 2023', 'This tutorial gives an idea for every programmer on the Top 8 Programming IDE You Should Know to develop web applications, run and test the code, and helps to build projects.', 'video', NULL, 'https://youtu.be/b2woWajmV5w', NULL, 'Simplilearn', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-04 23:19:13', '2024-09-04 23:19:13'),
(10, 'Choosing The Best Affiliate Programme for You', 'Affiliate marketing has evolved into a highly profitable avenue for both individuals and businesses', 'article', NULL, 'https://alison.com/blog/choosing-the-best-affiliate-programme-for-you', NULL, 'Alison', 'Sales and Marketing', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-04 23:23:50', '2024-09-04 23:23:50'),
(11, 'Maximising Success with Email Marketing: A Guide for Affiliate Marketers', 'Affiliate marketing is one of the leading strategies that businesses and individuals, social media influencers, and ordinary citizens use to monetise their online following and presence.', 'article', NULL, 'https://alison.com/blog/maximising-success-with-email-marketing-a-guide-for-affiliate-marketers', NULL, 'Alison', 'Sales and Marketing', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-04 23:26:37', '2024-09-04 23:26:37'),
(12, 'Resume - Social Media Marketing Analyst', 'Social Media Marketing Analyst', 'template', 'resources/documents/GWVk7BsTyGPr8bumhO7RluyslJGQsfOHaMjGejTz.pdf', NULL, NULL, 'Admin', 'Sales and Marketing', NULL, 'free', 0, 0, 'Active', 9, 35891, NULL, '2024-09-06 00:11:46', '2024-09-06 00:11:46'),
(13, 'Resume - Brand Marketing Manager', 'Brand Marketing Manager', 'template', 'resources/documents/3wEXT3hzLnujlV5t6T3KEIztkNlqfDQnADD0aLWz.pdf', NULL, NULL, 'Admin', 'Sales and Marketing', NULL, 'free', 0, 0, 'Active', 9, 39267, NULL, '2024-09-06 00:16:59', '2024-09-06 00:16:59'),
(14, 'Resume - Social Media Strategist', 'Social Media Strategist', 'template', 'resources/documents/Dv9VGFNQsOiKAYlRuRp4hSPsOQOInl5Ri05G8vmq.pdf', NULL, NULL, 'Admin', 'Design and Creative', NULL, 'free', 0, 0, 'Active', 9, 69762, NULL, '2024-09-06 00:19:34', '2024-09-06 00:19:34'),
(15, 'Resume - Social Media Marketing Manager', 'Social Media Marketing Manager', 'template', 'resources/documents/BYrTr8JvokpWCZPMx4egyErb5Sk29uO41N0776jk.pdf', NULL, NULL, 'Admin', 'Sales and Marketing', NULL, 'free', 0, 0, 'Active', 9, 42473, NULL, '2024-09-06 00:20:26', '2024-09-06 00:20:26'),
(16, 'Resume -  Freelance Social Media Manager', 'Freelance Social Media Manager', 'template', 'resources/documents/b80ITeKKl8k4EbgbMkjrspDe4CDdUI7OJ1NIl5Mh.pdf', NULL, NULL, 'Admin', 'Design and Creative', NULL, 'free', 0, 0, 'Active', 9, 35373, NULL, '2024-09-06 00:21:09', '2024-09-06 00:21:09'),
(17, 'Resume - Social Media Coordinator', 'Social Media Coordinator', 'template', 'resources/documents/4VFZKh9esfo2LAZBYIIwzDUHGUjFngfV4HKmnA4Y.pdf', NULL, NULL, 'Admin', 'Design and Creative', NULL, 'free', 0, 0, 'Active', 9, 40958, NULL, '2024-09-06 00:21:56', '2024-09-06 00:21:56'),
(18, 'Resume - Entry Level Social Media Manager', 'Entry Level Social Media Manager', 'template', 'resources/documents/blSvz4qIRjBSfAsH5cNjRdrIlPbg84Xwxmvjl0TU.pdf', NULL, NULL, 'Admin', 'Design and Creative', NULL, 'free', 0, 0, 'Active', 9, 38336, NULL, '2024-09-06 00:22:53', '2024-09-06 00:22:53'),
(19, 'Resume - Social Media Assistant', 'Social Media Assistant', 'template', 'resources/documents/mgxdytDJB58oZFBwIyBArRNYJ5CKOus2XFcr9J7g.pdf', NULL, NULL, 'Admin', 'Design and Creative', NULL, 'free', 0, 0, 'Active', 9, 63335, NULL, '2024-09-06 00:23:52', '2024-09-06 00:23:52'),
(20, 'Resume - Junior UI-UX Designer', 'Junior UI-UX Designer', 'template', 'resources/documents/jAf58tzmYEG8458P3RzGwc9aaoMskKYUBw6LA7rM.pdf', NULL, NULL, 'Admin', 'Design and Creative', NULL, 'free', 0, 0, 'Active', 9, 125057, NULL, '2024-09-06 00:39:51', '2024-09-06 00:39:51'),
(21, 'Resume - Senior Backend Developer', 'Senior Backend Developer', 'template', 'resources/documents/TLEZArEc6MgLfYzkWkL3Zz1Oh534hcuuBax9zYIA.pdf', NULL, NULL, 'Admin', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, 211797, NULL, '2024-09-06 00:47:44', '2024-09-06 00:47:44'),
(22, 'Resume - Senior Backend Developer-1', 'Senior Backend Developer-1', 'template', 'resources/documents/V0c2N6QNxuVxS6BFTzwqRMEfeZ7RoW1jqJYS0Qlh.pdf', NULL, NULL, 'Admin', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, 147072, NULL, '2024-09-06 00:48:10', '2024-09-06 00:48:10'),
(23, 'Resume - Senior Backend Developer-2', 'Senior Backend Developer-2', 'template', 'resources/documents/gqgrqfkemOxXI3tnRJUIkypKWScrnqRU4nttvB0v.pdf', NULL, NULL, 'Admin', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, 193078, NULL, '2024-09-06 00:48:38', '2024-09-06 00:48:38'),
(24, 'Resume - Senior UI-UX Designer', 'Senior UI-UX Designer', 'template', 'resources/documents/M4wEWZTKmhffmjJC4Lc6qGFq5TokMJ0s7Otm8nck.pdf', NULL, NULL, 'Admin', 'Design and Creative', NULL, 'free', 0, 0, 'Active', 9, 100929, NULL, '2024-09-06 00:49:20', '2024-09-06 00:49:20'),
(25, 'Resume - Entry Level Software Engineer', 'Entry Level Software Engineer', 'template', 'resources/documents/FVz2KAhQ2xJ4Rq7uXIvYL7IQYYh6JNX0MmalXzui.pdf', NULL, NULL, 'Admin', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, 108597, NULL, '2024-09-06 00:51:22', '2024-09-06 00:51:22'),
(26, 'Resume - Senior Software Engineer', 'Senior Software Engineer', 'template', 'resources/documents/L5PerwjkAR3hlGDRtFi0F3lISP0BD3zIaaVBehXu.pdf', NULL, NULL, 'Admin', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, 213642, NULL, '2024-09-06 00:51:56', '2024-09-06 00:51:56'),
(27, 'Resume - Software Engineer Intern', 'Software Engineer Intern', 'template', 'resources/documents/8ogPjud2LbVsQ8HiH54rXkz65VEeQ7Jl9gRKsBIs.pdf', NULL, NULL, 'Admin', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, 214707, NULL, '2024-09-06 00:52:32', '2024-09-06 00:52:32'),
(28, 'Resume - Junior Software Engineer', 'Junior Software Engineer', 'template', 'resources/documents/ssqi586GivwrNwWXHafxY5hkKR9gGXMvZMSXaEJv.pdf', NULL, NULL, 'Admin', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, 161302, NULL, '2024-09-06 00:53:08', '2024-09-06 00:53:08'),
(29, 'Resume - UI Designer', 'UI Designer', 'template', 'resources/documents/OWfGctc4OqY9gLrt0TjXpx8LlQN5VEbX6p2ZzCMb.pdf', NULL, NULL, 'Admin', 'Design and Creative', NULL, 'free', 0, 0, 'Active', 9, 178457, NULL, '2024-09-06 00:53:50', '2024-09-06 00:53:50'),
(30, 'Resume - UI-UX Designer', 'UI-UX Designer', 'template', 'resources/documents/0BzfI9hTqV9ce8mMETEJijJjDELlxNPgIYNebgTM.pdf', NULL, NULL, 'Admin', 'Design and Creative', NULL, 'free', 0, 0, 'Active', 9, 151052, NULL, '2024-09-06 00:54:21', '2024-09-06 00:54:21'),
(31, 'Monday.com', 'Streamline workflows and gain clear visibility across teams to make strategic decisions with confidence.', 'tool', NULL, 'https://monday.com/', NULL, 'Admin', 'Design and Creative', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-06 01:02:52', '2024-09-06 01:02:52'),
(32, 'Notion', 'In Notion, work feels better (and gets done faster). With a little help from AI.', 'tool', NULL, 'https://www.notion.so/', NULL, 'Admin', 'Design and Creative', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-06 01:06:01', '2024-09-06 01:06:01'),
(33, 'Clickup', 'Get everyone working in a single platform designed to manage any type of work.', 'tool', NULL, 'https://clickup.com/', NULL, 'Admin', 'Sales and Marketing', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-06 01:07:22', '2024-09-06 01:07:22'),
(34, 'Clickup', 'https://clickup.com/', 'tool', NULL, 'https://clickup.com/', NULL, 'Admin', 'Design and Creative', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-06 01:08:13', '2024-09-06 01:08:13'),
(35, 'Hootsuite', 'Schedule posts on Facebook, Instagram and beyond, get more followers, and manage all your social in 1 dashboard. We’ll help you go further, faster—no matter your team’s size.', 'tool', NULL, 'https://www.hootsuite.com/', NULL, 'Admin', 'Sales and Marketing', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-06 01:09:33', '2024-09-06 01:09:33'),
(36, 'Buffer', 'Buffer helps you build an audience organically. We’re a values-driven company that provides affordable, intuitive marketing tools for ambitious people and teams.', 'tool', NULL, 'https://buffer.com/', NULL, 'Admin', 'Sales and Marketing', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-06 01:10:36', '2024-09-06 01:10:36'),
(37, 'Later', 'Crush your social goals faster with Later Social™. Automate daily social tasks and turn followers into customers with Link in Bio — all in one app.', 'tool', NULL, 'https://later.com/', NULL, 'Admin', 'Sales and Marketing', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-06 01:11:40', '2024-09-06 01:11:40'),
(38, 'Canva', 'Creative Designs', 'tool', NULL, 'https://www.canva.com/', NULL, 'Admin', 'Design and Creative', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-06 01:12:40', '2024-09-06 01:12:40'),
(39, 'GitHub', 'The world’s leading AI-powered developer platform.', 'tool', NULL, 'https://github.com/', NULL, 'Admin', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-06 01:14:23', '2024-09-06 01:14:23'),
(40, 'Visual Studio Code', 'Code Editing Redefined.', 'tool', NULL, 'https://code.visualstudio.com/', NULL, 'Admin', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-06 01:15:40', '2024-09-06 01:15:40'),
(41, 'Clickup', 'ClickUp has emerged as a versatile project management tool, seamlessly integrating into the development process.', 'tool', NULL, 'https://clickup.com/', NULL, 'Admin', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-06 01:17:40', '2024-09-06 01:17:40'),
(42, 'IntelliJ IDEA', 'IntelliJ IDEA is a leading IDE for Java developers, known for its intelligent code assistance and support for various frameworks.', 'tool', NULL, 'https://www.jetbrains.com/idea/', NULL, 'Admin', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-06 01:22:52', '2024-09-06 01:22:52'),
(43, 'Html and Css', 'Html and Css', 'cheat_sheet', NULL, 'https://www.codecademy.com/resources/cheatsheets/language/html-css', NULL, 'Code Academy', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-06 01:24:31', '2024-09-06 01:24:31'),
(44, 'Python', 'Python', 'cheat_sheet', NULL, 'https://www.codecademy.com/resources/cheatsheets/language/python', NULL, 'Code Academy', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-06 02:14:05', '2024-09-06 02:14:05'),
(45, 'Javascript', 'Javascript', 'cheat_sheet', NULL, 'https://www.codecademy.com/resources/cheatsheets/language/javascript', NULL, 'Code Academy', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-06 02:15:48', '2024-09-06 02:15:48'),
(46, 'Java', 'Java', 'cheat_sheet', NULL, 'https://www.codecademy.com/resources/cheatsheets/language/java', NULL, 'Code Academy', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-06 02:17:16', '2024-09-06 02:17:16'),
(47, 'SQL', 'SQL', 'cheat_sheet', NULL, 'https://www.codecademy.com/resources/cheatsheets/language/sql', NULL, 'Code Academy', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-06 02:21:19', '2024-09-06 02:21:19'),
(48, 'Bash/Shell', 'Bash/Shell', 'cheat_sheet', NULL, 'https://www.codecademy.com/resources/cheatsheets/language/bash', NULL, 'Code Academy', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-06 02:22:55', '2024-09-06 02:22:55'),
(49, 'Ruby', 'Ruby', 'cheat_sheet', NULL, 'https://www.codecademy.com/resources/cheatsheets/language/ruby', NULL, 'Code Academy', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-06 02:23:21', '2024-09-06 02:23:21'),
(50, 'C++', 'C++', 'cheat_sheet', NULL, 'https://www.codecademy.com/resources/cheatsheets/language/c-plus-plus', NULL, 'Code Academy', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-06 02:23:48', '2024-09-06 02:23:48'),
(51, 'C#', 'C#', 'cheat_sheet', NULL, 'https://www.codecademy.com/resources/cheatsheets/language/c-sharp', NULL, 'Code Academy', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-06 02:25:26', '2024-09-06 02:25:26'),
(52, 'PHP', 'PHP', 'cheat_sheet', NULL, 'https://www.codecademy.com/resources/cheatsheets/language/php', NULL, 'Code Academy', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-06 02:27:03', '2024-09-06 02:27:03'),
(53, 'Go', 'Go', 'cheat_sheet', NULL, 'https://www.codecademy.com/resources/cheatsheets/language/go', NULL, 'Code Academy', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-06 02:27:48', '2024-09-06 02:27:48'),
(54, 'Swift', 'Swift', 'cheat_sheet', NULL, 'https://www.codecademy.com/resources/cheatsheets/language/swift', NULL, 'Code Academy', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-06 02:28:21', '2024-09-06 02:28:21'),
(55, 'Kotlin', 'Kotlin', 'cheat_sheet', NULL, 'https://www.codecademy.com/resources/cheatsheets/language/kotlin', NULL, 'Code Academy', 'Development and Programming', NULL, 'free', 0, 0, 'Active', 9, NULL, NULL, '2024-09-06 02:28:45', '2024-09-06 02:28:45'),
(56, 'Ultimate Guide to Digital Marketing', 'Ultimate Guide to Digital Marketing', 'cheat_sheet', 'resources/documents/35IooFiq6NAAuzu7tMw8rc9U52X0SXydQJlsSjvn.pdf', NULL, NULL, 'Admin', 'Sales and Marketing', NULL, 'free', 0, 0, 'Active', 9, 25854568, NULL, '2024-09-06 02:35:17', '2024-09-06 02:35:17'),
(57, 'Digital Marketing Cheat Sheet', 'Digital Marketing Cheat Sheet', 'cheat_sheet', 'resources/documents/badbIYAW1dMVwt58wLn05Q2xfOWGG0wI2xXB7F76.pdf', NULL, NULL, 'Admin', 'Sales and Marketing', NULL, 'free', 0, 0, 'Active', 9, 48789, NULL, '2024-09-06 02:37:03', '2024-09-06 02:37:03'),
(58, 'Social Media Marketing', 'Social Media Marketing', 'cheat_sheet', 'resources/documents/5hscF6b2tzl7ea1DMsYsfSYXpDkvItoqWJfEZ36B.pdf', NULL, NULL, 'Admin', 'Sales and Marketing', NULL, 'free', 0, 0, 'Active', 9, 60009, NULL, '2024-09-06 02:37:42', '2024-09-06 02:37:42'),
(59, 'Social Media Marketing 1', 'Social Media Marketing 1', 'cheat_sheet', 'resources/documents/5eH8qfxTviRy5PXNalfvzMg592DxQsLixH2O1xqf.pdf', NULL, NULL, 'Admin', 'Sales and Marketing', NULL, 'free', 0, 0, 'Active', 9, 3020156, NULL, '2024-09-06 02:38:23', '2024-09-06 02:38:23'),
(60, 'Social Media Cheat Sheet', 'Social Media Cheat Sheet', 'cheat_sheet', 'resources/documents/gLSZcG60R92Z2i4ttzWdBs1yE6fKt4WBNnJUngo9.pdf', NULL, NULL, 'Admin', 'Design and Creative', NULL, 'free', 0, 0, 'Active', 9, 797332, NULL, '2024-09-06 02:40:11', '2024-09-06 02:40:11'),
(61, 'Digital Experience', 'Digital Experience', 'cheat_sheet', 'resources/documents/f3DepLL4ssO51i5KRTDPvKTfmAEtO8XA508rs1jz.pdf', NULL, NULL, 'Admin', 'Sales and Marketing', NULL, 'free', 0, 0, 'Active', 9, 185342, NULL, '2024-09-06 02:40:41', '2024-09-06 02:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_roles` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `user_roles`, `created_at`, `updated_at`) VALUES
(1, 'Blogger', NULL, NULL),
(2, 'Influencer', NULL, NULL),
(3, 'Model', NULL, NULL),
(4, 'Researcher', NULL, NULL),
(5, 'Photographer', NULL, NULL),
(6, 'Content Creator', NULL, NULL),
(7, 'Social Media Manager', NULL, NULL),
(8, 'Videographer', NULL, NULL),
(9, 'Illustrator', NULL, NULL),
(10, 'Graphic Designer', NULL, NULL),
(11, 'Story Telling', NULL, NULL),
(12, 'Public Speaker', NULL, NULL),
(13, 'Content Marketer', NULL, NULL),
(14, 'Influencer Marketer', NULL, NULL),
(15, 'Music Creator', NULL, NULL),
(16, 'Business Owner', NULL, NULL),
(17, 'Entrepreneur', NULL, NULL),
(18, 'Community Manager', NULL, NULL),
(19, 'Virtual Assistant', NULL, NULL),
(20, 'Life Coach', NULL, NULL),
(21, 'Brand Strategist', NULL, NULL),
(22, 'Artist', NULL, NULL),
(23, 'Youtuber', NULL, NULL),
(24, 'Fashion Designer', NULL, NULL),
(25, 'Data Analyst', NULL, NULL),
(26, 'Data Scientist', NULL, NULL),
(27, 'Product Manager', NULL, NULL),
(28, 'Product Designer', NULL, NULL),
(29, 'Digital Marketer', NULL, NULL),
(30, 'Web Developer', NULL, NULL),
(31, 'Software Developer', NULL, NULL),
(32, 'Backend Developer', NULL, NULL),
(33, 'Frontend Developer', NULL, NULL),
(34, 'Lead Generator', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_services`
--

CREATE TABLE `user_services` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_service` varchar(255) NOT NULL,
  `user_service_description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_services`
--

INSERT INTO `user_services` (`id`, `user_id`, `user_service`, `user_service_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Web Development', '<p>I develop user-friendly inteface for your business and organization.</p>\r\n\r\n<p>I bring your ideas to reality.</p>', '2023-10-23 03:38:36', '2023-10-25 00:11:30'),
(2, 1, 'Restful API', '<p>We develop secured API for interaction with frontend applications.</p>', '2023-10-23 03:39:33', '2023-10-23 18:37:35'),
(3, 1, 'Clarity Coach', '<p>I help freelancer get clarity on how to make good use of thier skills.</p>', '2023-10-23 16:13:35', '2023-10-23 16:13:35'),
(4, 1, 'Business Consultant', '<p>I help prospective and existing business owners leverage on tech to grow their business.</p>', '2023-10-23 16:20:29', '2023-10-23 16:20:29'),
(5, 2, 'Social Media Management', '<p>As your social media manager, I will bring your <strong>socials to life</strong> with my unique expertise.</p>', '2023-10-23 13:44:13', '2023-10-23 13:44:13'),
(6, 2, 'Content Writing', '<p>Want well structured written contents? I&#39;m the Ninja to make that happen!</p>', '2023-10-23 13:45:07', '2023-10-23 13:45:07'),
(7, 11, 'Social media management', '<p>Are you looking to bring your brand or business online and still save time? Let&#39;s work together to make your journey seamless!</p>', '2024-08-09 19:58:05', '2024-08-09 19:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `user_skills`
--

CREATE TABLE `user_skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_skill` varchar(255) NOT NULL,
  `user_skill_level` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_skills`
--

INSERT INTO `user_skills` (`id`, `user_id`, `user_skill`, `user_skill_level`, `created_at`, `updated_at`) VALUES
(1, 1, 'Html Markup', '75', '2023-10-23 02:54:17', '2023-10-23 15:30:21'),
(2, 1, 'Javscript', '60', '2023-10-23 02:54:26', '2023-10-23 02:54:26'),
(3, 1, 'PHP', '80', '2023-10-23 02:54:33', '2023-10-23 02:54:33'),
(4, 1, 'Laravel', '60', '2023-10-23 02:54:44', '2023-10-23 02:54:44'),
(5, 1, 'ClickUp', '60', '2023-10-23 02:54:53', '2023-10-23 02:54:53'),
(6, 1, 'Team Work', '85', '2023-10-23 21:52:17', '2023-10-23 21:52:17'),
(7, 2, 'Content Writing', '99', '2023-10-23 13:40:52', '2023-10-23 13:40:52'),
(8, 2, 'Canva', '85', '2023-10-23 13:41:02', '2023-10-23 13:41:02'),
(9, 2, 'Social Media Management', '97', '2023-10-23 13:41:16', '2023-10-23 13:41:16'),
(10, 2, 'Analytics', '80', '2023-10-23 13:41:27', '2023-10-23 13:41:27'),
(11, 2, 'Web Development', '95', '2023-10-23 13:41:40', '2023-10-23 13:41:40'),
(13, 11, 'Content creation', '100', '2024-08-09 19:04:09', '2024-08-09 19:04:09'),
(14, 11, 'Content calendar creation', '100', '2024-08-09 19:04:31', '2024-08-09 19:04:31'),
(15, 11, 'Social media audit', '100', '2024-08-09 19:04:48', '2024-08-09 19:04:48'),
(16, 11, 'Social media optimisation', '100', '2024-08-09 19:05:15', '2024-08-09 19:05:15'),
(17, 11, 'Canva', '100', '2024-08-09 19:05:26', '2024-08-09 19:05:26'),
(18, 11, 'Analytics', '100', '2024-08-09 19:05:50', '2024-08-09 19:05:50'),
(19, 11, 'Account set up', '100', '2024-08-09 19:06:15', '2024-08-09 19:06:15'),
(20, 1, 'AJAX', '100', '2024-08-10 14:26:08', '2024-08-10 14:26:08'),
(21, 1, 'CANVA', '100', '2024-08-10 14:52:28', '2024-08-10 14:52:28');

-- --------------------------------------------------------

--
-- Table structure for table `user_themes`
--

CREATE TABLE `user_themes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `theme_path` varchar(255) NOT NULL,
  `theme_path_edit` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_themes`
--

INSERT INTO `user_themes` (`id`, `user_id`, `theme`, `theme_path`, `theme_path_edit`, `created_at`, `updated_at`) VALUES
(1, 1, 'TalentLoom-Sleek', 'portfolio.sleek', 'portfolio.sleek-edit', '2024-08-23 20:00:13', '2024-08-28 15:03:28');

-- --------------------------------------------------------

--
-- Table structure for table `user_threads`
--

CREATE TABLE `user_threads` (
  `id` char(36) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 1,
  `subject` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `add_participants` tinyint(1) NOT NULL DEFAULT 0,
  `invitations` tinyint(1) NOT NULL DEFAULT 0,
  `calling` tinyint(1) NOT NULL DEFAULT 1,
  `messaging` tinyint(1) NOT NULL DEFAULT 1,
  `knocks` tinyint(1) NOT NULL DEFAULT 1,
  `chat_bots` tinyint(1) NOT NULL DEFAULT 0,
  `lockout` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ch_favorites`
--
ALTER TABLE `ch_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_messages`
--
ALTER TABLE `ch_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `failed_logins`
--
ALTER TABLE `failed_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`),
  ADD KEY `friends_owner_type_owner_id_index` (`owner_type`,`owner_id`),
  ADD KEY `friends_party_type_party_id_index` (`party_type`,`party_id`);

--
-- Indexes for table `job_applies`
--
ALTER TABLE `job_applies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_locations`
--
ALTER TABLE `job_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_views`
--
ALTER TABLE `job_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pending_friends`
--
ALTER TABLE `pending_friends`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pending_friends_sender_type_sender_id_index` (`sender_type`,`sender_id`),
  ADD KEY `pending_friends_recipient_type_recipient_id_index` (`recipient_type`,`recipient_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `post_jobs`
--
ALTER TABLE `post_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_upskills`
--
ALTER TABLE `post_upskills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_user_facebook_unique` (`user_facebook`),
  ADD UNIQUE KEY `users_user_twitter_unique` (`user_twitter`),
  ADD UNIQUE KEY `users_user_linkedin_unique` (`user_linkedin`),
  ADD UNIQUE KEY `users_user_instagram_unique` (`user_instagram`),
  ADD UNIQUE KEY `users_user_phone_unique` (`user_phone`),
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`),
  ADD UNIQUE KEY `users_user_name_link_unique` (`user_name_link`);

--
-- Indexes for table `user_category`
--
ALTER TABLE `user_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_education`
--
ALTER TABLE `user_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_experiences`
--
ALTER TABLE `user_experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_messages`
--
ALTER TABLE `user_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_portfolios`
--
ALTER TABLE `user_portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_resources`
--
ALTER TABLE `user_resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_services`
--
ALTER TABLE `user_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_skills`
--
ALTER TABLE `user_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_themes`
--
ALTER TABLE `user_themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_threads`
--
ALTER TABLE `user_threads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_logins`
--
ALTER TABLE `failed_logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `job_applies`
--
ALTER TABLE `job_applies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_locations`
--
ALTER TABLE `job_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `job_views`
--
ALTER TABLE `job_views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_jobs`
--
ALTER TABLE `post_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `post_upskills`
--
ALTER TABLE `post_upskills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_category`
--
ALTER TABLE `user_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_resources`
--
ALTER TABLE `user_resources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `user_themes`
--
ALTER TABLE `user_themes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
