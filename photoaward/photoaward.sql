-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 07, 2020 at 04:27 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photoaward`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `upload_id` int(11) NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `upload_id`, `token`, `size`, `created_at`, `updated_at`) VALUES
(4, 1, 15, 'N6Yri7PiNIrLdIPn6iBgMIOf8BuVqRUwkOociugu', NULL, '2019-11-20 12:40:12', '2019-11-20 12:40:12'),
(3, 1, 14, 'N6Yri7PiNIrLdIPn6iBgMIOf8BuVqRUwkOociugu', NULL, '2019-11-20 12:10:39', '2019-11-20 12:10:39'),
(5, 1, 3, 'N6Yri7PiNIrLdIPn6iBgMIOf8BuVqRUwkOociugu', NULL, '2019-11-20 12:48:30', '2019-11-20 12:48:30'),
(6, 1, 2, 'N6Yri7PiNIrLdIPn6iBgMIOf8BuVqRUwkOociugu', NULL, '2019-11-20 12:54:19', '2019-11-20 12:54:19'),
(7, 1, 13, 'N6Yri7PiNIrLdIPn6iBgMIOf8BuVqRUwkOociugu', NULL, '2019-11-20 13:16:18', '2019-11-20 13:16:18'),
(11, 1, 13, 'V0qrHRdd7AoUvGFJUTZvyp7QEMOQI0x1GyLmy2u0', NULL, '2019-12-04 05:26:09', '2019-12-04 05:26:09'),
(10, 1, 15, 'V0qrHRdd7AoUvGFJUTZvyp7QEMOQI0x1GyLmy2u0', NULL, '2019-12-04 04:40:19', '2019-12-04 04:40:19'),
(12, 1, 21, 'yA9XMw935PAzoTMX8LNeaSXuDSdVlnfqBv6eL7XC', NULL, '2019-12-10 07:10:24', '2019-12-10 07:10:24'),
(13, 1, 68, 'ebXy2bzwZckILr5mFWz8t1JR0cFWrewRYd6JqiQS', NULL, '2019-12-13 08:12:11', '2019-12-13 08:12:11'),
(14, 1, 65, 'ebXy2bzwZckILr5mFWz8t1JR0cFWrewRYd6JqiQS', NULL, '2019-12-13 08:24:20', '2019-12-13 08:24:20'),
(15, 1, 69, 'ebXy2bzwZckILr5mFWz8t1JR0cFWrewRYd6JqiQS', NULL, '2019-12-13 08:57:43', '2019-12-13 08:57:43'),
(17, 1, 64, 'lvLZ7dkyxLVMq8hf4eIRHiabT1kKbLPckHG3cDJ5', 350, '2019-12-21 10:51:20', '2019-12-21 10:51:20'),
(18, 1, 74, 'lvLZ7dkyxLVMq8hf4eIRHiabT1kKbLPckHG3cDJ5', 450, '2019-12-21 10:59:53', '2019-12-21 10:59:53'),
(19, 1, 61, 'lvLZ7dkyxLVMq8hf4eIRHiabT1kKbLPckHG3cDJ5', 450, '2019-12-21 11:06:18', '2019-12-21 11:06:18'),
(24, 1, 56, 'lvLZ7dkyxLVMq8hf4eIRHiabT1kKbLPckHG3cDJ5', 450, '2019-12-21 11:27:13', '2019-12-21 11:27:13'),
(21, 1, 41, 'lvLZ7dkyxLVMq8hf4eIRHiabT1kKbLPckHG3cDJ5', 120, '2019-12-21 11:12:37', '2019-12-21 11:12:37'),
(22, 1, 39, 'lvLZ7dkyxLVMq8hf4eIRHiabT1kKbLPckHG3cDJ5', 40, '2019-12-21 11:13:41', '2019-12-21 11:13:41'),
(23, 1, 65, 'lvLZ7dkyxLVMq8hf4eIRHiabT1kKbLPckHG3cDJ5', 450, '2019-12-21 11:14:20', '2019-12-21 11:14:20'),
(26, 1, 38, 'lvLZ7dkyxLVMq8hf4eIRHiabT1kKbLPckHG3cDJ5', 450, '2019-12-21 11:28:45', '2019-12-21 11:28:45'),
(27, 1, 37, 'lvLZ7dkyxLVMq8hf4eIRHiabT1kKbLPckHG3cDJ5', 450, '2019-12-21 11:31:17', '2019-12-21 11:31:17'),
(29, 1, 72, 'c6xTjgu8EGntXgY5Ah2wsTsurIes5AGA3ZRTSfqS', 40, '2019-12-24 11:02:23', '2019-12-24 11:02:23'),
(32, 1, 1, 'c6xTjgu8EGntXgY5Ah2wsTsurIes5AGA3ZRTSfqS', 450, '2019-12-24 11:07:52', '2019-12-24 11:07:52'),
(31, 1, 3, 'c6xTjgu8EGntXgY5Ah2wsTsurIes5AGA3ZRTSfqS', 450, '2019-12-24 11:02:43', '2019-12-24 11:02:43'),
(33, 1, 2, 'c6xTjgu8EGntXgY5Ah2wsTsurIes5AGA3ZRTSfqS', 40, '2019-12-24 11:08:10', '2019-12-24 11:08:10'),
(34, 1, 73, 'hNNyPJ3eXBIMGYVsc2pB5ja8aa7FQmwTNuzREZV1', 40, '2019-12-24 11:31:03', '2019-12-24 11:31:03'),
(35, 1, 74, 'hNNyPJ3eXBIMGYVsc2pB5ja8aa7FQmwTNuzREZV1', 450, '2019-12-24 12:01:09', '2019-12-24 12:01:09'),
(38, 1, 74, 'c0Ew65XmZHVsxGCMvAP3opFuJQFTPBca6EOqCnAF', 40, '2020-01-06 05:39:23', '2020-01-06 05:39:23'),
(37, 1, 25, 'hNNyPJ3eXBIMGYVsc2pB5ja8aa7FQmwTNuzREZV1', 450, '2019-12-24 12:03:17', '2019-12-24 12:03:17'),
(39, 1, 73, 'c0Ew65XmZHVsxGCMvAP3opFuJQFTPBca6EOqCnAF', 40, '2020-01-06 05:44:55', '2020-01-06 05:44:55'),
(40, 1, 68, 'c0Ew65XmZHVsxGCMvAP3opFuJQFTPBca6EOqCnAF', 120, '2020-01-06 05:50:39', '2020-01-06 05:50:39'),
(41, 1, 65, 'c0Ew65XmZHVsxGCMvAP3opFuJQFTPBca6EOqCnAF', 450, '2020-01-06 05:54:56', '2020-01-06 05:54:56'),
(45, 1, 9, 'f9yZ7N0mrlGRrhT6A6Wnb5yzfo18GSlVFOBhlFmW', 450, '2020-06-05 08:46:03', '2020-06-05 08:46:03'),
(46, 1, 70, 'B4DJjxefoYLC4Idjn8jliei9VE4kLDUVZDdWM5T5', 450, '2020-06-10 06:23:25', '2020-06-10 06:23:25'),
(44, 1, 79, 'f9yZ7N0mrlGRrhT6A6Wnb5yzfo18GSlVFOBhlFmW', 120, '2020-06-05 08:09:47', '2020-06-05 08:09:47'),
(47, 1, 70, 'B4DJjxefoYLC4Idjn8jliei9VE4kLDUVZDdWM5T5', 450, '2020-06-10 06:23:26', '2020-06-10 06:23:26'),
(48, 2, 11, 'i6pqfJCmoSPCC9mheOe27xEmCPu6Bpuk1lEDubLU', 450, '2020-07-17 15:23:19', '2020-07-17 15:23:19');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `required` text COLLATE utf8mb4_unicode_ci,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `note`, `required`, `cover`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'PEOPLE', 'Judges are looking for the next new face. Judges will be looking for beauty, emotion, expression and personality. The photographs may be portraits and photos of groups or individuals.', 'Looking for beauty, emotion, expression and personality. The photographs are portraits and photos of groups or individuals.', NULL, 'pic25.jpg', 100, '2020-06-29 10:45:25', '2020-06-29 10:45:25'),
(2, 'THE GREAT OUTDOORS', 'Judges are looking for the best and most creative images of our natural world including animals, plants and landscapes; geological or climatological features, natural phenomenon and conservation.', 'The best and most creative images of our natural world including animals, plants and landscapes; geological or climatological features, natural phenomenon and conservation.', NULL, 'pic41.jpg', 150, '2020-06-29 10:45:25', '2020-06-29 10:45:25'),
(3, 'ARCHITECTURE', 'Judges are looking at how contestants bring out the various dimensions of Bridges, Buildings, Cityscapes, Interiors, Dams, Roads and other transport infrastructure while retaining the original design elements of the work.', 'Various dimensions of Bridges, Buildings, Cityscapes, Interiors, Dams, Roads and other transport infrastructure while retaining the original design elements of the work.', NULL, 'pic45.jpg', 200, '2020-06-29 10:45:25', '2020-06-29 10:45:25'),
(4, 'FOOD', 'Judges are looking for presentation and creativity. Judges will also be looking for the best cooking moments and images that best express how food brings people together. ', 'Best cooking moments and images that best express how food brings people together.', NULL, 'pic56.jpg', 100, '2020-06-29 10:45:25', '2020-06-29 10:45:25'),
(5, 'FASHION', 'Judges are looking for the most captivating and original look and fashion sense. They will look for images that best represents the current and emerging fashion trends including creativity and originality in clothes design, hair and accessories, etc. Judges are looking for style.', 'The most captivating and original look and fashion sense. Images that best represents the current and emerging fashion trends including creativity and originality in clothes design, hair and accessories.', NULL, 'pic22.jpg', 100, '2020-06-29 10:45:25', '2020-06-29 10:45:25'),
(6, 'EXPERIENCE.KE', 'Judges are looking for the most expressive and emotion capturing photos that capture the rich diversity of the Kenyan experience and lifestyle. Judges will look at the best depiction of culture, history, heritage, street culture, art, music, travel, and the club scene; essentially photographs that tell us what it means to be a Kenyan and provide a sense of what it is like to live in this beautiful country.', 'The most expressive and emotion capturing photos that capture the rich diversity of the Kenyan experience and lifestyle. Best depiction of culture, history, heritage, street culture, art, music, travel, and the club scene; essentially photographs that tell us what it means to be a Kenyan and provide a sense of what it is like to live in this beautiful country.', NULL, 'pic47.jpg', 100, '2020-06-29 10:45:25', '2020-06-29 10:45:25'),
(7, 'ALTERED IMAGES', 'Photographs manipulated for artistic purposes by applying digital and/or traditional special effects.', 'Photographs manipulated for artistic purposes by applying digital and/or traditional special effects.', NULL, 'pic53.jpg', 100, '2020-06-29 10:45:25', '2020-06-29 10:45:25'),
(8, 'DOCUMENTARY', '', NULL, NULL, 'pic53.jpg', 100, '2020-06-29 10:45:25', '2020-06-29 10:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `image_pays`
--

DROP TABLE IF EXISTS `image_pays`;
CREATE TABLE IF NOT EXISTS `image_pays` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_images` int(11) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT '0',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unpaid',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_pays`
--

INSERT INTO `image_pays` (`id`, `user_id`, `token`, `account_no`, `total_images`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(8, 1, 'GD9iPSn8ma2pzXha2Gyn8ktRK2PhwTglKctYwxHF', '3041-6440987-1', 1, 100, 'Paid', '2019-11-18 14:36:24', '2019-11-18 14:36:49'),
(9, 1, 'V0qrHRdd7AoUvGFJUTZvyp7QEMOQI0x1GyLmy2u0', '2721-13674717-1', 2, 200, 'Unpaid', '2019-12-04 04:35:06', '2019-12-04 04:35:06'),
(10, 1, 'yA9XMw935PAzoTMX8LNeaSXuDSdVlnfqBv6eL7XC', '16741-1343728-1', 2, 200, 'Unpaid', '2019-12-10 07:04:41', '2019-12-10 07:04:41'),
(11, 1, 'pmdewFvCRJWlvgJJAO004911X2BllY5F5Fbgs1Rc', '16743-9141844-1', 3, 400, 'Unpaid', '2019-12-13 04:29:41', '2019-12-13 04:29:41'),
(12, 1, 'gTtVfKmeQtm3FHPNjT6nr1Ov9L4gQ1hamkU4HBo1', '29111-16815645-1', 3, 400, 'Unpaid', '2019-12-13 04:42:15', '2019-12-13 04:42:15'),
(13, 1, 'Om8uXwSlg1SSnT2YuJiblEsGcjMjE14BvmjF9lXr', '14110-3214657-1', 1, 100, 'Unpaid', '2019-12-13 05:08:17', '2019-12-13 05:08:17'),
(14, 1, 'SJDJAblaaxyfLZfswUSLnTgVoRcH5ucNjxHwLUjX', '6278-6074496-1', 3, 500, 'Unpaid', '2019-12-13 05:22:57', '2019-12-13 05:22:57'),
(15, 1, 'z7hSprsVU3WyPh7Nn5dUDbYccvbKibw2P6v5Oh5k', '23969-883-1', 3, 600, 'Unpaid', '2020-02-17 16:39:26', '2020-02-17 16:39:26'),
(16, 1, 'z7hSprsVU3WyPh7Nn5dUDbYccvbKibw2P6v5Oh5k', '27988-7967-1', 3, 600, 'Unpaid', '2020-02-17 16:42:39', '2020-02-17 16:42:39'),
(17, 1, 'z7hSprsVU3WyPh7Nn5dUDbYccvbKibw2P6v5Oh5k', '20421-6606920-1', 3, 600, 'Unpaid', '2020-02-17 16:45:21', '2020-02-17 16:45:21'),
(18, 1, 'z7hSprsVU3WyPh7Nn5dUDbYccvbKibw2P6v5Oh5k', '28284-49426-1', 3, 600, 'Unpaid', '2020-02-17 16:59:52', '2020-02-17 16:59:52'),
(19, 1, 'z7hSprsVU3WyPh7Nn5dUDbYccvbKibw2P6v5Oh5k', '20418-6675793-1', 3, 600, 'Unpaid', '2020-02-17 17:15:15', '2020-02-17 17:15:15'),
(20, 1, 'z7hSprsVU3WyPh7Nn5dUDbYccvbKibw2P6v5Oh5k', '17654-103109-1', 3, 600, 'Unpaid', '2020-02-17 17:26:26', '2020-02-17 17:26:26'),
(21, 1, 'Hms1xyIc2Qcmj6Lk2nsFby2DjmYx0SWT7jMxkqVn', '24791-9725497-1', 2, 400, 'Unpaid', '2020-03-26 07:55:53', '2020-03-26 07:55:53'),
(22, 1, 'DbTxn4sl1sZAx4JPtNUncZAkHYHZvwgEisJtSLPY', '5737-1714047-1', 2, 400, 'Unpaid', '2020-03-27 06:25:32', '2020-03-27 06:25:32');

-- --------------------------------------------------------

--
-- Table structure for table `judge_ratings`
--

DROP TABLE IF EXISTS `judge_ratings`;
CREATE TABLE IF NOT EXISTS `judge_ratings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `rating_scale_id` int(11) NOT NULL,
  `upload_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rate` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `judge_ratings`
--

INSERT INTO `judge_ratings` (`id`, `rating_scale_id`, `upload_id`, `user_id`, `rate`, `created_at`, `updated_at`) VALUES
(15, 1, 26, 2, 1.5, '2020-03-16 17:05:51', '2020-03-16 17:05:51'),
(14, 4, 25, 2, 2, '2020-03-16 17:04:48', '2020-03-16 17:04:48'),
(13, 3, 25, 2, 2.5, '2020-03-16 17:04:48', '2020-03-16 17:04:48'),
(12, 2, 25, 2, 1.5, '2020-03-16 17:04:48', '2020-03-16 17:04:48'),
(11, 1, 25, 2, 3.5, '2020-03-16 17:04:48', '2020-03-16 17:04:48'),
(16, 2, 26, 2, 3, '2020-03-16 17:05:51', '2020-03-16 17:05:51'),
(17, 3, 26, 2, 2.5, '2020-03-16 17:05:51', '2020-03-16 17:05:51'),
(18, 4, 26, 2, 0.5, '2020-03-16 17:05:51', '2020-03-16 17:05:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_27_073319_create_categories_table', 1),
(4, '2019_09_27_073623_create_uploads_table', 1),
(5, '2019_09_27_075626_create_judge_ratings_table', 1),
(6, '2019_09_27_075803_create_roles_table', 1),
(7, '2019_09_29_171442_create_image_pays_table', 1),
(8, '2019_10_01_055131_create_votes_table', 1),
(9, '2019_10_01_055611_create_payments_table', 1),
(10, '2019_10_01_062055_create_user_role_table', 1),
(11, '2019_10_28_063332_create_variables_table', 2),
(12, '2019_11_06_152506_create_purchases_table', 3),
(13, '2019_11_06_152553_create_carts_table', 3),
(14, '2019_11_16_122402_create_publisheds_table', 4),
(15, '2016_06_01_000001_create_oauth_auth_codes_table', 5),
(16, '2016_06_01_000002_create_oauth_access_tokens_table', 5),
(17, '2016_06_01_000003_create_oauth_refresh_tokens_table', 5),
(18, '2016_06_01_000004_create_oauth_clients_table', 5),
(19, '2016_06_01_000005_create_oauth_personal_access_clients_table', 5),
(20, '2020_02_08_130259_create_rating_scales_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('feec5a4e0635c848aa74724cce0dadb19c017c7e433898829ac45a894d86dc1ca8c14cd52e0aa766', 1, 1, 'MyApp', '[]', 0, '2019-12-03 09:55:30', '2019-12-03 09:55:30', '2020-12-03 12:55:30'),
('0c5ae93d5a17d61649bfe64c31312727258136b807658712ba74f881d9087ce24b9aea1aac85610f', 1, 1, 'MyApp', '[]', 0, '2019-12-03 09:57:11', '2019-12-03 09:57:11', '2020-12-03 12:57:11'),
('4fe8364c62ea3330224ad57402ebdc7b8910d3cc727e849b8b7a25bffc1687c56f2145ea74846828', 1, 1, 'MyApp', '[]', 0, '2019-12-05 04:44:00', '2019-12-05 04:44:00', '2020-12-05 07:44:00'),
('b1f4d1eb8bf0b84f8cb9bbcd9e09cc912c9c444f274578887eeb5c588651aa6d1c8c6b8987621e0a', 1, 1, 'MyApp', '[]', 0, '2019-12-05 05:19:34', '2019-12-05 05:19:34', '2020-12-05 08:19:34'),
('f2205ff9fc6a5a5b1d8b6aff06a8072b3e07224501882542437587ece5961febd9fe549beee6a054', 1, 1, 'MyApp', '[]', 0, '2019-12-05 13:38:11', '2019-12-05 13:38:11', '2020-12-05 16:38:11'),
('6e3a24077ac490941132696ff97bdbc61d535f35745d2b11c3425e17be8dc46e321958c47868a6b7', 1, 1, 'MyApp', '[]', 0, '2019-12-05 14:53:51', '2019-12-05 14:53:51', '2020-12-05 17:53:51'),
('bc4d8fafc5b713df4d07f27da2ec6b66bc0452fbd0e8001a1ec377a91036092bc5db6a33546b4225', 1, 1, 'MyApp', '[]', 0, '2019-12-05 15:02:34', '2019-12-05 15:02:34', '2020-12-05 18:02:34'),
('3ced535c9f371d2ed6e09608de9fb241d1ffc7c1fe97e404d7ad45de62aac66e6b808f96a9c2a6da', 1, 1, 'MyApp', '[]', 0, '2019-12-05 15:04:34', '2019-12-05 15:04:34', '2020-12-05 18:04:34'),
('3a91864077c4d6f25f06a04378429344ca9098ada1a7b099d88c27d7b093e072ef0966282d7adc77', 1, 1, 'MyApp', '[]', 0, '2019-12-05 15:06:23', '2019-12-05 15:06:23', '2020-12-05 18:06:23'),
('9bd0da4cb921674172a0c3a0396baf11945478a04efc74ff5487aab7aaad293ceb76bb531147c525', 1, 1, 'MyApp', '[]', 0, '2019-12-05 15:08:08', '2019-12-05 15:08:08', '2020-12-05 18:08:08'),
('007a9db585bad1f2bdc78ed767f3fc3d85d5551aa567aff49d77f5d8300b2999f2c1411a377e9f70', 1, 1, 'MyApp', '[]', 0, '2019-12-05 15:12:45', '2019-12-05 15:12:45', '2020-12-05 18:12:45'),
('9112c841c2a3094754f9bb77458fc32b1baad8579d7ec02423e1db08f4d09ceef27b418ae81fc676', 1, 1, 'MyApp', '[]', 0, '2019-12-05 15:14:55', '2019-12-05 15:14:55', '2020-12-05 18:14:55'),
('175f5e3d9cf4ea71f972d2eb3a17e82a89552360d2948b2ba5f7e1db1e1020e2d0e94374aaf36339', 1, 1, 'MyApp', '[]', 0, '2019-12-05 15:16:21', '2019-12-05 15:16:21', '2020-12-05 18:16:21'),
('fef707b7457911c2e77dba0c4c08df53ff0bedd0a3ad5390abb084f7fff4b904199b73eaf5bb160f', 1, 1, 'MyApp', '[]', 0, '2019-12-05 15:35:15', '2019-12-05 15:35:15', '2020-12-05 18:35:15'),
('cec981f92f3262c41135bf9044f8523bb8dc3fc8a277e43b675dcf2429902bbf38bb8b29f55ad5a8', 1, 1, 'MyApp', '[]', 0, '2019-12-05 16:18:05', '2019-12-05 16:18:05', '2020-12-05 19:18:05'),
('4cc7faa14475532c6327d456454ce8639b463e37e557a4a0c870eb4ba75510940041164fca8f9e5d', 1, 1, 'MyApp', '[]', 0, '2019-12-06 04:34:54', '2019-12-06 04:34:54', '2020-12-06 07:34:54'),
('a30b441a3c827ad6e170f4e4a3632074a4d705d27a616da30933570886d2ea062fb9bf69dec9f0c5', 1, 1, 'MyApp', '[]', 0, '2019-12-06 05:03:50', '2019-12-06 05:03:50', '2020-12-06 08:03:50'),
('faf5ab98232306452b99412f5b0b73f95c0d14e2c711f629ab688cf6805fe5298757674c8bb7209b', 1, 1, 'MyApp', '[]', 0, '2019-12-06 05:10:07', '2019-12-06 05:10:07', '2020-12-06 08:10:07'),
('c1eaeafce7ddcb3e6188feb1069dbae4bca3c0b99949d8b9144528700a21ca6a3bd28f02416f53be', 1, 1, 'MyApp', '[]', 0, '2019-12-10 10:10:54', '2019-12-10 10:10:54', '2020-12-10 13:10:54'),
('961a22ff54af0ed30b209b6f2eedea05a1be583f4e6543a4362ceedf74509fd6782bf3541b501e1d', 1, 1, 'MyApp', '[]', 0, '2019-12-13 05:10:28', '2019-12-13 05:10:28', '2020-12-13 08:10:28'),
('3196f4fb3d4ff8d703ffd9bc712e784f644fafa24ad8f68c3f37ce5778ec805c6925aa93733fee27', 8, 1, 'MyApp', '[]', 0, '2020-01-27 17:35:01', '2020-01-27 17:35:01', '2021-01-27 20:35:01');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
CREATE TABLE IF NOT EXISTS `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
CREATE TABLE IF NOT EXISTS `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'PICTURE254 Personal Access Client', 'OKVTKQsDlNBbaOTrwULPX48Bo6IENVmwRpG1L2tq', 'http://localhost', 1, 0, 0, '2019-12-03 09:19:10', '2019-12-03 09:19:10'),
(2, NULL, 'PICTURE254 Password Grant Client', 'GQstJU6Ji6tUBoS5ZDO7dVEIbUo3PHi59VLEghrI', 'http://localhost', 0, 1, 0, '2019-12-03 09:19:10', '2019-12-03 09:19:10');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
CREATE TABLE IF NOT EXISTS `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_personal_access_clients_client_id_index` (`client_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-12-03 09:19:10', '2019-12-03 09:19:10');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('abc@abc.com', '$2y$10$P2sbnPaW/ZhPUZWj/xdQC.diRfMbctvrKbY68gMe72dFmd.T.2fze', '2019-12-03 05:53:25'),
('dennis.onkeo81@gmail.com', '$2y$10$BweBnWynZBzmBa2fggB9GuEChooXxalhAAGf/bt316t5M/MApndUa', '2019-12-03 06:32:07');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `phone` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trans_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trans_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `phone`, `trans_no`, `account_no`, `trans_date`, `amount`, `created_at`, `updated_at`) VALUES
(1, '254708552578', 'NJU0LSQGW2', '9826-6839216-1', '20191030162827', 1, '2019-10-30 10:28:28', '2019-10-30 10:28:28'),
(2, '254708552578', 'NJV7METHKF', '12994-8001502-1', '20191031121607', 1, '2019-11-22 09:16:08', '2019-10-31 09:16:08'),
(3, '254708552578', 'NKI62FEZBY', '3041-6440987-1', '20191118173646', 1, '2019-11-18 14:36:49', '2019-11-18 14:36:49'),
(4, '254708552578', 'NKK53WP32F', '30468-201429-1', '20191120154103', 1, '2019-11-20 12:41:05', '2019-11-20 12:41:05'),
(5, '254708552578', 'NKK63WXJSQ', '13879-212957-1', '20191120154915', 1, '2019-11-20 12:49:17', '2019-11-20 12:49:17'),
(6, '254708552578', 'OA636V49S5', '16734-73179815-1', '20200106085126', 1, '2020-01-06 05:51:27', '2020-01-06 05:51:27'),
(7, '254708552578', 'OA626V85C0', '16920-14963636-1', '20200106085601', 1, '2020-01-06 05:56:02', '2020-01-06 05:56:02'),
(8, '254708552578', 'OBH25OM11Y', '28284-49426-1', '20200217200004', 1, '2020-02-17 17:00:36', '2020-02-17 17:00:36'),
(9, 'dfdfdf', 'json_decode($callbackJSONData)->OriginatorConversationID', 'dfdf', '20200106085126', 1, '2020-05-01 16:21:16', '2020-05-01 16:21:16'),
(10, 'dfdfdf', 'json_decode($callbackJSONData)->OriginatorConversationID', 'dfdf', '20200106085126', 1, '2020-05-01 16:21:29', '2020-05-01 16:21:29'),
(11, 'dfdfdf', '12565-5598826-1', 'dfdf', '20200106085126', 1, '2020-05-01 16:22:08', '2020-05-01 16:22:08'),
(12, 'dfdfdf', '254708552578 - DENNIS OMBWORO ONKEO', 'dfdf', '20200106085126', 1, '2020-05-01 16:30:04', '2020-05-01 16:30:04'),
(13, 'dfdfdf', 'ODU5TRVCQF', 'dfdf', '20200106085126', 1, '2020-05-01 16:36:47', '2020-05-01 16:36:47'),
(14, 'dfdfdf', 'ODU5TRVCQF', 'dfdf', '20200106085126', 1, '2020-05-01 16:36:48', '2020-05-01 16:36:48'),
(15, 'dfdfdf', 'ODU5TRVCQF', 'dfdf', '20200106085126', 1, '2020-05-01 16:37:05', '2020-05-01 16:37:05'),
(16, 'dfdfdf', 'ODU5TRVCQF', 'dfdf', '20200106085126', 1, '2020-05-01 16:37:23', '2020-05-01 16:37:23'),
(17, 'dfdfdf', '1', 'dfdf', '20200106085126', 1, '2020-05-01 16:40:15', '2020-05-01 16:40:15');

-- --------------------------------------------------------

--
-- Table structure for table `publisheds`
--

DROP TABLE IF EXISTS `publisheds`;
CREATE TABLE IF NOT EXISTS `publisheds` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `upload_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publisheds`
--

INSERT INTO `publisheds` (`id`, `user_id`, `upload_id`, `created_at`, `updated_at`) VALUES
(5, 1, 39, '2020-02-08 09:21:40', '2020-02-08 09:21:40'),
(7, 1, 26, '2020-02-13 17:43:07', '2020-02-13 17:43:07'),
(6, 1, 21, '2020-02-08 09:22:57', '2020-02-08 09:22:57'),
(8, 1, 25, '2020-02-13 17:43:09', '2020-02-13 17:43:09');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

DROP TABLE IF EXISTS `purchases`;
CREATE TABLE IF NOT EXISTS `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `accountno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchased` int(11) NOT NULL DEFAULT '0',
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `user_id`, `accountno`, `purchased`, `token`, `created_at`, `updated_at`, `amount`, `cart_id`) VALUES
(7, 1, '30468-201429-1', 1, 'N6Yri7PiNIrLdIPn6iBgMIOf8BuVqRUwkOociugu', '2019-11-20 12:40:48', '2019-11-20 12:41:05', 100, 3),
(6, 1, '30468-201429-1', 1, 'N6Yri7PiNIrLdIPn6iBgMIOf8BuVqRUwkOociugu', '2019-11-20 12:40:48', '2019-11-20 12:41:05', 100, 4),
(8, 1, '13879-212957-1', 1, 'N6Yri7PiNIrLdIPn6iBgMIOf8BuVqRUwkOociugu', '2019-11-20 12:49:01', '2019-11-20 12:49:17', 100, 5),
(9, 1, '6164-474500-1', 0, 'N6Yri7PiNIrLdIPn6iBgMIOf8BuVqRUwkOociugu', '2019-11-20 12:54:33', '2019-11-20 12:54:33', 100, 6),
(10, 1, '6160-500118-1', 0, 'N6Yri7PiNIrLdIPn6iBgMIOf8BuVqRUwkOociugu', '2019-11-20 13:16:30', '2019-11-20 13:16:30', 100, 7),
(11, 1, '2719-13687038-1', 0, 'V0qrHRdd7AoUvGFJUTZvyp7QEMOQI0x1GyLmy2u0', '2019-12-04 04:43:35', '2019-12-04 04:43:35', 100, 10),
(12, 1, '403-18372746-1', 0, 'V0qrHRdd7AoUvGFJUTZvyp7QEMOQI0x1GyLmy2u0', '2019-12-04 05:26:28', '2019-12-04 05:26:28', 100, 11),
(13, 1, '30791-9113367-1', 0, 'yA9XMw935PAzoTMX8LNeaSXuDSdVlnfqBv6eL7XC', '2019-12-10 07:11:42', '2019-12-10 07:11:42', 100, 12),
(14, 1, '29118-40201162-1', 0, 'lvLZ7dkyxLVMq8hf4eIRHiabT1kKbLPckHG3cDJ5', '2019-12-21 11:05:19', '2019-12-21 11:05:19', 100, 17),
(15, 1, '29118-40201162-1', 0, 'lvLZ7dkyxLVMq8hf4eIRHiabT1kKbLPckHG3cDJ5', '2019-12-21 11:05:19', '2019-12-21 11:05:19', 100, 18),
(16, 1, '10567-13430875-1', 0, 'lvLZ7dkyxLVMq8hf4eIRHiabT1kKbLPckHG3cDJ5', '2019-12-21 11:11:36', '2019-12-21 11:11:36', 100, 19),
(17, 1, '16737-33076750-1', 0, 'lvLZ7dkyxLVMq8hf4eIRHiabT1kKbLPckHG3cDJ5', '2019-12-21 11:19:53', '2019-12-21 11:19:53', 100, 21),
(18, 1, '16737-33076750-1', 0, 'lvLZ7dkyxLVMq8hf4eIRHiabT1kKbLPckHG3cDJ5', '2019-12-21 11:19:53', '2019-12-21 11:19:53', 100, 22),
(19, 1, '16737-33076750-1', 0, 'lvLZ7dkyxLVMq8hf4eIRHiabT1kKbLPckHG3cDJ5', '2019-12-21 11:19:53', '2019-12-21 11:19:53', 100, 23),
(20, 1, '16732-33094265-1', 0, 'lvLZ7dkyxLVMq8hf4eIRHiabT1kKbLPckHG3cDJ5', '2019-12-21 11:28:16', '2019-12-21 11:28:16', 100, 24),
(21, 1, '24606-43676-1', 0, 'lvLZ7dkyxLVMq8hf4eIRHiabT1kKbLPckHG3cDJ5', '2019-12-21 11:29:07', '2019-12-21 11:29:07', 100, 26),
(22, 1, '2552-51811-1', 0, 'lvLZ7dkyxLVMq8hf4eIRHiabT1kKbLPckHG3cDJ5', '2019-12-21 11:32:32', '2019-12-21 11:32:32', 100, 27),
(23, 1, '6546-7724639-1', 0, 'c6xTjgu8EGntXgY5Ah2wsTsurIes5AGA3ZRTSfqS', '2019-12-24 11:03:45', '2019-12-24 11:03:45', 100, 29),
(28, 1, '24608-7814683-1', 0, 'hNNyPJ3eXBIMGYVsc2pB5ja8aa7FQmwTNuzREZV1', '2019-12-24 11:36:58', '2019-12-24 11:36:58', 100, 34),
(29, 1, '2554-7830700-1', 0, 'hNNyPJ3eXBIMGYVsc2pB5ja8aa7FQmwTNuzREZV1', '2019-12-24 12:01:26', '2019-12-24 12:01:26', 100, 35),
(39, 1, '16738-41077423-1', 0, 'hNNyPJ3eXBIMGYVsc2pB5ja8aa7FQmwTNuzREZV1', '2019-12-24 12:27:29', '2019-12-24 12:27:29', 100, 37),
(40, 1, '16909-14932303-1', 0, 'c0Ew65XmZHVsxGCMvAP3opFuJQFTPBca6EOqCnAF', '2020-01-06 05:39:51', '2020-01-06 05:39:51', 100, 38),
(41, 1, '16735-73167721-1', 0, 'c0Ew65XmZHVsxGCMvAP3opFuJQFTPBca6EOqCnAF', '2020-01-06 05:45:16', '2020-01-06 05:45:16', 100, 39),
(42, 1, '16734-73179815-1', 1, 'c0Ew65XmZHVsxGCMvAP3opFuJQFTPBca6EOqCnAF', '2020-01-06 05:51:09', '2020-01-06 05:51:27', 100, 40),
(43, 1, '16920-14963636-1', 1, 'c0Ew65XmZHVsxGCMvAP3opFuJQFTPBca6EOqCnAF', '2020-01-06 05:55:27', '2020-01-06 05:56:02', 100, 41);

-- --------------------------------------------------------

--
-- Table structure for table `rating_scales`
--

DROP TABLE IF EXISTS `rating_scales`;
CREATE TABLE IF NOT EXISTS `rating_scales` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rating_scales`
--

INSERT INTO `rating_scales` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Creativity', '2020-02-08 11:03:12', '2020-03-18 16:39:53'),
(2, 'Uniqueness', '2020-02-08 11:03:36', '2020-02-08 11:03:36'),
(4, 'Originality', '2020-03-16 16:07:53', '2020-03-16 16:07:53');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin User', '2020-02-12 16:51:55', '2020-02-12 16:51:55'),
(2, 'judge', 'Judge User', '2020-02-12 16:51:55', '2020-02-12 16:51:55'),
(3, 'moderator', 'Publishes images', '2020-02-12 16:51:55', '2020-02-12 16:51:55'),
(4, 'other', 'Like and upload images', '2020-02-12 16:51:55', '2020-02-12 16:51:55');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 11, 2, NULL, NULL),
(4, 12, 3, NULL, NULL),
(5, 13, 3, NULL, NULL),
(6, 14, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

DROP TABLE IF EXISTS `uploads`;
CREATE TABLE IF NOT EXISTS `uploads` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `imagePath` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `track` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `uploaded` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `published` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `user_id`, `imagePath`, `caption`, `imageName`, `name`, `device`, `token`, `track`, `category_id`, `uploaded`, `published`, `created_at`, `updated_at`) VALUES
(79, 1, 'uploads_org/1582371760breakfast-7.jpg', '', '1582371760breakfast-7.jpg', NULL, '', '8W645thyUcWLHLcgYml8QukLfHpQEKKLY10lu6XD', 'Professionals', 13, 'no', 0, '2020-02-22 11:42:40', '2020-02-22 11:42:40'),
(4, 1, 'uploads_org/1573714026pic15.jpg', '', '1573714026pic15.jpg', NULL, '', 'qsIUhT2xfJedSTX4ZPwyXubdu3LLraiP5Gwn4gg0', NULL, 3, 'yes', 0, '2019-11-14 06:47:06', '2020-02-17 17:26:26'),
(5, 1, 'uploads_org/1573714026pic16.jpg', '', '1573714026pic16.jpg', NULL, '', 'qsIUhT2xfJedSTX4ZPwyXubdu3LLraiP5Gwn4gg0', NULL, 3, 'yes', 0, '2019-11-14 06:47:07', '2020-02-17 17:26:26'),
(6, 1, 'uploads_org/1573717461pic16.jpg', '', '1573717461pic16.jpg', NULL, '', 'qsIUhT2xfJedSTX4ZPwyXubdu3LLraiP5Gwn4gg0', NULL, 4, 'yes', 0, '2019-11-14 07:44:21', '2020-02-17 17:26:26'),
(7, 1, 'uploads_org/1573717461pic17.jpg', '', '1573717461pic17.jpg', NULL, '', 'qsIUhT2xfJedSTX4ZPwyXubdu3LLraiP5Gwn4gg0', NULL, 4, 'yes', 0, '2019-11-14 07:44:23', '2020-02-17 17:26:26'),
(8, 1, 'uploads_org/1573736583pic23.jpg', '', '1573736583pic23.jpg', NULL, '', '3sbbwTJMahCrnzm85wsJylxpra6udzaPW02QF8jA', NULL, 1, 'yes', 0, '2019-11-14 13:03:03', '2020-02-17 17:26:26'),
(9, 1, 'uploads_org/1573736584pic12.jpg', '', '1573736584pic12.jpg', NULL, '', '3sbbwTJMahCrnzm85wsJylxpra6udzaPW02QF8jA', NULL, 1, 'yes', 0, '2019-11-14 13:03:05', '2020-02-17 17:26:26'),
(10, 1, 'uploads_org/1574081492pic53.jpg', '', '1574081492pic53.jpg', NULL, '', 'CWK7uSMt8PQMkJWuhyT777n5U1XyE4YFNYMj0BIV', NULL, 2, 'yes', 0, '2019-11-18 12:51:33', '2020-02-17 17:26:26'),
(11, 1, 'uploads_org/1574081494pic54.jpg', '', '1574081494pic54.jpg', NULL, '', 'CWK7uSMt8PQMkJWuhyT777n5U1XyE4YFNYMj0BIV', NULL, 2, 'yes', 0, '2019-11-18 12:51:34', '2020-02-17 17:26:26'),
(12, 1, 'uploads_org/1574081495pic56.jpg', 'Chakula safi kabisa kutoka javare', '1574081495pic56.jpg', 'Chakula', 'Samsung', 'CWK7uSMt8PQMkJWuhyT777n5U1XyE4YFNYMj0BIV', NULL, 2, 'yes', 0, '2019-11-18 12:51:35', '2020-02-17 17:26:26'),
(13, 1, 'uploads_org/1574081496pic57.jpg', 'ddhfdhfh', '1574081496pic57.jpg', 'Pancake Bang', 'hhfdhf', 'CWK7uSMt8PQMkJWuhyT777n5U1XyE4YFNYMj0BIV', NULL, 2, 'yes', 0, '2019-11-18 12:51:37', '2020-02-17 17:26:26'),
(14, 1, 'uploads_org/1574082180pic43.jpg', '', '1574082180pic43.jpg', NULL, '', 'GD9iPSn8ma2pzXha2Gyn8ktRK2PhwTglKctYwxHF', NULL, 4, 'yes', 0, '2019-11-18 13:03:00', '2020-02-17 17:26:26'),
(15, 1, 'uploads_org/1574082181pic56.jpg', '', '1574082181pic56.jpg', NULL, '', 'GD9iPSn8ma2pzXha2Gyn8ktRK2PhwTglKctYwxHF', NULL, 4, 'yes', 0, '2019-11-18 13:03:01', '2020-02-17 17:26:26'),
(16, 1, 'uploads_org/1574082182pic55.jpg', '', '1574082182pic55.jpg', NULL, '', 'GD9iPSn8ma2pzXha2Gyn8ktRK2PhwTglKctYwxHF', NULL, 4, 'yes', 0, '2019-11-18 13:03:03', '2020-02-17 17:26:26'),
(17, 1, 'uploads_org/1575432790pic15.jpg', '', '1575432790pic15.jpg', NULL, '', 'V0qrHRdd7AoUvGFJUTZvyp7QEMOQI0x1GyLmy2u0', NULL, 1, 'yes', 0, '2019-12-04 04:13:11', '2020-02-17 17:26:26'),
(18, 3, 'uploads_org/1575432792pic17_.jpg', '', '1575432792pic17_.jpg', NULL, '', 'V0qrHRdd7AoUvGFJUTZvyp7QEMOQI0x1GyLmy2u0', NULL, 1, 'yes', 0, '2019-12-04 04:13:12', '2020-02-17 17:26:26'),
(19, 1, 'uploads_org/1575433409pic23.jpg', 'xcdv', '1575433409pic23.jpg', NULL, 'sdfdg', 'WDjfT2V53MJkTwtpOdmqfZrE3Lxm5E4ImW7mGa8l', NULL, 2, 'yes', 0, '2019-12-04 04:23:29', '2020-02-17 17:26:26'),
(39, 1, 'uploads_org/1576138110pic18.jpg', '', '1576138110pic18.jpg', NULL, '', 'cJHX0MBPznlcKDdud2ZkRAIj66OhFSEJiODKD1GN', NULL, 12, 'yes', 1, '2019-12-12 08:08:31', '2020-02-17 17:26:26'),
(21, 1, 'uploads_org/1575874911bg-01.jpg', '', '1575874911bg-01.jpg', NULL, '', 'oe1XIfSMKd4FUDecmkO5YQS3IgAr8YLrUV8EgyBe', NULL, 12, 'yes', 1, '2019-12-09 07:01:52', '2020-02-17 17:26:26'),
(22, 1, 'uploads_org/1575881243bg2.jpg', '', '1575881243bg2.jpg', NULL, '', 'cijUDYYzr5bckhn44fC6yGV5BJFahNoWnxihJtyz', NULL, 12, 'yes', 0, '2019-12-09 08:47:23', '2020-02-17 17:26:26'),
(23, 1, 'uploads_org/1575884089pic8.jpg', '', '1575884089pic8.jpg', NULL, '', 'zHGaFWPQwbi7mRFRpLCJFiZOY1v0htqIcnJHpvit', NULL, 13, 'yes', 0, '2019-12-09 09:34:54', '2020-02-17 17:26:26'),
(24, 1, 'uploads_org/1575884095pic17.jpg', '', '1575884095pic17.jpg', NULL, '', 'zHGaFWPQwbi7mRFRpLCJFiZOY1v0htqIcnJHpvit', NULL, 13, 'yes', 0, '2019-12-09 09:34:56', '2020-02-17 17:26:26'),
(25, 1, 'uploads_org/1575961461pic2.jpg', '', '1575961461pic2.jpg', NULL, '', 'yA9XMw935PAzoTMX8LNeaSXuDSdVlnfqBv6eL7XC', NULL, 13, 'yes', 1, '2019-12-10 07:04:22', '2020-02-17 17:26:26'),
(26, 1, 'uploads_org/1575961462pic8.jpg', '', '1575961462pic8.jpg', NULL, '', 'yA9XMw935PAzoTMX8LNeaSXuDSdVlnfqBv6eL7XC', NULL, 13, 'yes', 1, '2019-12-10 07:04:23', '2020-02-17 17:26:26'),
(27, 1, 'uploads_org/1575969397pic15.jpg', '', '1575969397pic15.jpg', NULL, '', 'sLDOB7MxvYHOwHGZMzwj1opx07EWxsUzMHv3PUsf', NULL, 12, 'yes', 0, '2019-12-10 09:16:38', '2020-02-17 17:26:26'),
(28, 1, 'uploads_org/1575970143pic15.jpg', '', '1575970143pic15.jpg', NULL, '', 'NAE5YTJLsOg77p9pSOUgiNOIRenC8xoAJhNstj2P', NULL, 12, 'yes', 0, '2019-12-10 09:29:04', '2020-02-17 17:26:26'),
(29, 1, 'uploads_org/1575970144pic9.jpg', '', '1575970144pic9.jpg', NULL, '', '0puUtojZ7xaLVm8IT0mWRvDMg7NoB1CB9wKTuI46', NULL, 12, 'yes', 0, '2019-12-10 09:29:04', '2020-02-17 17:26:26'),
(30, 1, 'uploads_org/1575970145pic10.jpg', '', '1575970145pic10.jpg', NULL, '', 'tAFreU8ucksxduSSacqKv3FJ2bOTI9eFJu5tvZHo', NULL, 12, 'yes', 0, '2019-12-10 09:29:05', '2020-02-17 17:26:26'),
(31, 1, 'uploads_org/1575970676pic8.jpg', '', '1575970676pic8.jpg', NULL, '', 'SAPrxWAoObhHF2V4CNbVHOqKxYdpEHvMQLs8bBio', NULL, 12, 'yes', 0, '2019-12-10 09:37:56', '2020-02-17 17:26:26'),
(32, 1, 'uploads_org/1575973373pic14.jpg', '', '1575973373pic14.jpg', NULL, '', 'xpaZshPj48WkHPMtniuNelVCpi0BE3I1PKlCEzr3', NULL, 12, 'yes', 0, '2019-12-10 10:22:54', '2020-02-17 17:26:26'),
(33, 1, 'uploads_org/1575973419pic14.jpg', '', '1575973419pic14.jpg', NULL, '', 'EQ8GDuto2hvjbZiDAIBD2eh2vQTCvot3ERaa5724', NULL, 12, 'yes', 0, '2019-12-10 10:23:39', '2020-02-17 17:26:26'),
(34, 1, 'uploads_org/1575977052pic14.jpg', '', '1575977052pic14.jpg', NULL, '', 'lIr6FYcWoJTFpPq0rApvi5EGtZOC467Km6072bLR', NULL, 12, 'yes', 0, '2019-12-10 11:24:13', '2020-02-17 17:26:26'),
(35, 1, 'uploads_org/1575978299pic16.jpg', '', '1575978299pic16.jpg', NULL, '', '6QyT9PmmpkdDaxkNOyWief3CGBF7nrMH67hn5wp1', NULL, 12, 'yes', 0, '2019-12-10 11:44:59', '2020-02-17 17:26:26'),
(36, 1, 'uploads_org/1575979725pic44.jpg', '', '1575979725pic44.jpg', 'Ngamia One', '', 'eYkPh1VF1ew1iSa47hnRWqhr9At0kxK2zeh6wS7d', NULL, 12, 'yes', 0, '2019-12-10 12:08:46', '2020-02-17 17:26:26'),
(37, 1, 'uploads_org/1575980526pic56.jpg', '', '1575980526pic56.jpg', 'grilled chicken', '', '8r3bVKLKBmYZEmDTpqM3piRI8g6WjEALJDwnbnox', NULL, 12, 'yes', 0, '2019-12-10 12:22:06', '2020-02-17 17:26:26'),
(38, 1, 'uploads_org/1576041715pic48.jpg', '', '1576041715pic48.jpg', NULL, '', 'FA45mjYYcEyrJKVgrt3kTjloNXi9G32qH6UgIWQo', NULL, 12, 'yes', 0, '2019-12-11 05:21:56', '2020-02-17 17:26:26'),
(40, 1, 'uploads_org/1576140289pic66.jpg', '', '1576140289pic66.jpg', NULL, '', 'uQnZz14pHX92LIhWDfyp4YCgmv3xj3IcxesgCoHM', NULL, 12, 'yes', 0, '2019-12-12 08:44:49', '2020-02-17 17:26:26'),
(41, 1, 'uploads_org/1576140439pic63.jpg', '', '1576140439pic63.jpg', NULL, '', 'YJd45xemdH879mog0Nrp3OGaeDANAkwLKCF9ro5Z', NULL, 12, 'yes', 0, '2019-12-12 08:47:19', '2020-02-17 17:26:26'),
(42, 1, 'uploads_org/1576141123pic17.jpg', '', '1576141123pic17.jpg', NULL, '', 'dRHYJltiSUJWcsihe2C6ZHgVMjMHIiYLYdEvhiaN', NULL, 12, 'yes', 0, '2019-12-12 08:58:44', '2020-02-17 17:26:26'),
(53, 1, 'uploads_org/1576143714pic11.jpg', '', '1576143714pic11.jpg', NULL, '', 'H9kQp3A0Ygu3O3AKllDSO8zmIOtQPLL1jPMgPJT6', NULL, 12, 'yes', 0, '2019-12-12 09:41:55', '2020-02-17 17:26:26'),
(54, 1, 'uploads_org/1576143716pic12.jpg', '', '1576143716pic12.jpg', NULL, '', 'X7dhXn94gkEbnuWqh1zMYYIzRdc801nV60EjiBum', NULL, 12, 'yes', 0, '2019-12-12 09:41:56', '2020-02-17 17:26:26'),
(55, 1, 'uploads_org/1576143922pic14.jpg', '', '1576143922pic14.jpg', NULL, '', 'LhSPYYROhy70O1oNbZCYEKu2fxlA4XW4HJEXvI8Q', NULL, 12, 'yes', 0, '2019-12-12 09:45:22', '2020-02-17 17:26:26'),
(56, 1, 'uploads_org/1576144210pic9.jpg', '', '1576144210pic9.jpg', NULL, '', 'UgvMX3k3WTKE6NDsGBESOMVayw5b71901ASOkOe6', NULL, 12, 'yes', 0, '2019-12-12 09:50:10', '2020-02-17 17:26:26'),
(57, 1, 'uploads_org/1576145039pic17.jpg', '', '1576145039pic17.jpg', NULL, '', '26AunWG4bMOtUPdhFz723CxcminMRYJSHVxPAf3j', NULL, 12, 'yes', 0, '2019-12-12 10:04:01', '2020-02-17 17:26:26'),
(51, 1, 'uploads_org/1576143192pic9.jpg', '', '1576143192pic9.jpg', NULL, '', '9fgMq6JEXHntZj5VnCouPVM5KRXOPxVSeSNG2ShU', NULL, 12, 'yes', 0, '2019-12-12 09:33:12', '2020-02-17 17:26:26'),
(61, 1, 'uploads_org/1576152908pic9.jpg', '', '1576152908pic9.jpg', NULL, '', 'hFSDppMMY1vr0ANvih1IfU1JKiaKJ3xhEq1Ds9ze', NULL, 12, 'yes', 0, '2019-12-12 12:15:09', '2020-02-17 17:26:26'),
(62, 1, 'uploads_org/1576152910pic16.jpg', '', '1576152910pic16.jpg', NULL, '', 'hFSDppMMY1vr0ANvih1IfU1JKiaKJ3xhEq1Ds9ze', NULL, 12, 'yes', 0, '2019-12-12 12:15:10', '2020-02-17 17:26:26'),
(63, 1, 'uploads_org/1576155309pic15.jpg', '', '1576155309pic15.jpg', 'totos', '', 'XtVMgnFoCWP3froSFaRQtlmTptqMTilaNeoWsNHs', NULL, 12, 'yes', 0, '2019-12-12 12:55:09', '2020-02-17 17:26:26'),
(64, 1, 'uploads_org/1576155311pic14.jpg', '', '1576155311pic14.jpg', NULL, '', '7tagJiIid1F41YtnWVOWJWC80niuUJ2SWf8QzPRA', NULL, 12, 'yes', 0, '2019-12-12 12:55:11', '2020-02-17 17:26:26'),
(65, 1, 'uploads_org/1576155522pic43.jpg', '', '1576155522pic43.jpg', NULL, '', 'K4VAG9qFXi0SmCaa8nRSPu81bETDvGKstgVk8Wrt', NULL, 10, 'yes', 0, '2019-12-12 12:58:42', '2020-02-17 17:26:26'),
(67, 1, 'uploads_org/1576213662pic14.jpg', '', '1576213662pic14.jpg', NULL, '', 'rMfUvdw0q95uI1pFHRNQQIznOMm1G8x9JbwAZcgb', NULL, 12, 'yes', 0, '2019-12-13 05:07:43', '2020-02-17 17:26:26'),
(68, 1, 'uploads_org/1576214100pic10.jpg', 'ndhfgh', '1576214100pic10.jpg', 'Dehwgg', 'hdhfd', 'BBwKzpvSDTiTWFuRGwMoJHkkbHQOJfQJgxwHJifa', NULL, 12, 'yes', 0, '2019-12-13 05:15:00', '2020-02-17 17:26:26'),
(69, 1, 'uploads_org/1576214477pic4.jpg', '', '1576214477pic4.jpg', NULL, '', 'JORzO7Chjss2wJUUoskX9b8bxtC6DFtXKJgIeK2d', NULL, 10, 'yes', 0, '2019-12-13 05:21:17', '2020-02-17 17:26:26'),
(70, 1, 'uploads_org/1576214479pic5.jpg', '', '1576214479pic5.jpg', NULL, '', '5oSX5ngnVOL9dGhPJzAB8tLPWljuItJ33cVZpgPu', NULL, 10, 'yes', 0, '2019-12-13 05:21:19', '2020-02-17 17:26:26'),
(78, 1, 'uploads_org/1582371759breakfast-6.jpg', '', '1582371759breakfast-6.jpg', NULL, '', '8W645thyUcWLHLcgYml8QukLfHpQEKKLY10lu6XD', 'Professionals', 13, 'no', 0, '2020-02-22 11:42:40', '2020-02-22 11:42:40'),
(77, 1, 'uploads_org/1581957496breakfast-7.jpg', '', '1581957496breakfast-7.jpg', NULL, '', 'z7hSprsVU3WyPh7Nn5dUDbYccvbKibw2P6v5Oh5k', 'Professionals', 13, 'yes', 0, '2020-02-17 16:38:16', '2020-02-17 17:26:26'),
(76, 1, 'uploads_org/1581957495breakfast-1.jpg', '', '1581957495breakfast-1.jpg', NULL, '', 'z7hSprsVU3WyPh7Nn5dUDbYccvbKibw2P6v5Oh5k', 'Professionals', 13, 'yes', 0, '2020-02-17 16:38:15', '2020-02-17 17:26:26'),
(75, 1, 'uploads_org/1581957493about.jpg', '', '1581957493about.jpg', NULL, '', 'z7hSprsVU3WyPh7Nn5dUDbYccvbKibw2P6v5Oh5k', 'Professionals', 13, 'yes', 0, '2020-02-17 16:38:14', '2020-02-17 17:26:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `dname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date DEFAULT NULL,
  `county` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ig` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `role_id`, `dname`, `dob`, `county`, `city`, `bio`, `fb`, `tw`, `ig`, `pic`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Denooooooj', '254708552578', 'dennis.onkeo81@gmail.com', 0, 'D Name', '2001-10-01', 'Mombasa', 'dfdf', 'My bio is this', '', '', '', '1584616622102.jpg', NULL, '$2a$08$vKBik5WAxHI.hH2Tm3hZZekkbeUaMDjk2pUiYylPDXX8ceI1rBXbe', NULL, '2019-10-02 01:45:40', '2020-07-08 10:02:18'),
(2, 'egg', '1234', 'dennis.onkeo081@gmail.com', 0, 'dname', NULL, '', '', 'ggghh', '', '', '', '1594999899android-icon1.png', NULL, '$2y$10$aZWc4WWrDP.RbxfitSoizuFVdbwQjQKf3/hsRjloQayreXFmy3rkO', 'cHo2UXU8KStkF8SFsGLJezACnhp5TcFxDiOY5MGMe6r5dXFf4mdz9d8CFvQ8', '2019-10-04 10:41:49', '2020-07-17 15:31:39'),
(3, 'abc bb', '0704125639', 'abcs@abc.com', 0, 'display test', '2001-10-01', 'Kwale', 'jdfjd', 'This is my bio.', 'jdfj', 'jfj', 'jwjer', '1571838463pic32.jpg', NULL, '$2y$10$pTvqGWbMQOWpNxb/Xf2EA.NQl2b6O66ygkpBh0zF6EGgxzk9vHYYK', NULL, '2019-10-04 10:44:33', '2019-10-29 03:21:45'),
(4, 'peter', '25470855257', 'ka@gmail.com', 0, '', NULL, '', '', '', '', '', '', '', NULL, '$2y$10$w/vM8fou4E06wSN5KYOVK.NTTrNq6FAUU.RrGRVAiR0Bnz8GaX4v.', NULL, '2019-10-16 05:26:07', '2019-10-16 05:26:07'),
(7, 'dsgdgsdg', '+254708552578', 'ddd@dh.fdjjf', 0, '', NULL, '', '', '', '', '', '', '', NULL, '$2y$10$nCTi8EKm2OyzYsDgSFfZS.VvMQt3BMgfyW.gDpJ2dYTYkSZxXsEQq', NULL, '2020-01-27 17:32:13', '2020-01-27 17:32:13'),
(8, 'dsgdgsdg', '254708552570', 'ddd@duh.fdjjf', 0, '', NULL, '', '', '', '', '', '', '', NULL, '$2y$10$BpjqFu4GIbCbufGkiHVnNu7Tq8AGGCpm8oGjuWXYrEnCD0WcbIuMW', NULL, '2020-01-27 17:35:00', '2020-01-27 17:35:00'),
(6, 'Some user', '254720099000', 'fsdf@bsd.sdd', 0, '', NULL, '', '', '', '', '', '', '', NULL, '$2y$10$KpLzWIVfe9PjMFpbc.EKAu/goaivUlkGNjNOfV2eujtwMZBXM/.P2', NULL, '2019-11-05 13:53:37', '2019-11-05 13:53:37'),
(5, 'Dennis', '+254708644542', 'dgdg@dshd.dfjd', 0, 'display test', '2001-10-01', 'Kisii', 'sfg', 'You will soon know about me!', 'https://www.facebook.com/fade.kedavra', 'ndsdns', 'kdjcsdhf', '1572007423pic48.jpg', NULL, '$2y$10$qVAfLtSLQnM/7zwVXtFOS.FHSV0q8I05DiFSMK2.NcZdZtx.xm/6G', NULL, '2019-10-25 02:31:04', '2019-10-25 10:35:12'),
(9, 'Test Jury', '254708553567', 'zlv30533@zzrgg.com', NULL, '', NULL, '', '', '', '', '', '', '', NULL, '$2y$10$dZIihYEpPsQhHwK/J275ou6vkcibjY.AOqPGM8uG8IYN8yzf0im0e', NULL, '2020-02-14 16:42:57', '2020-02-14 16:42:57'),
(10, 'Test Jury2', '254708553567', 'zlu94617@zzrgg.com', NULL, '', NULL, '', '', '', '', '', '', '', NULL, '$2y$10$TXwpAq3.ZJS0XdQXjucu2uSarpmdJStRDnrYcPS7cBSZkpBJ/LnW2', NULL, '2020-02-14 16:45:20', '2020-02-14 16:45:20'),
(11, 'Fade The Judge', '254708553567', 'hds56492@eoopy.com', NULL, '', NULL, '', '', '', '', '', '', '', NULL, '$2y$10$N8PDxCgWXu7ccz7uZ8HxNe.D9xR/RlPUdcU/lrkLsPpbKM19Mc7ZW', NULL, '2020-02-14 16:51:27', '2020-02-14 16:51:27'),
(12, 'ggdsgd', '254708553567', 'jhherh@ggdf.dhk', NULL, '', NULL, '', '', '', '', '', '', '', NULL, '$2y$10$O2MQVzv1jsxr0Wa57E9US.T7prBu2x0cHm3lhEv5.xl6Y22sy/C6m', NULL, '2020-03-20 06:30:32', '2020-03-20 06:30:32'),
(13, 'kdsdsjf', '254708553567', 'mfdfh@gsdds.sjdj', NULL, '', NULL, '', '', '', '', '', '', '', NULL, '$2y$10$evviLFfxacQMoEuZRy2hRuYl.N.cMaEd9YnxDa6TMWjPMQzY9rZCy', NULL, '2020-03-20 06:49:57', '2020-03-20 06:49:57'),
(14, 'kdsdsjf', '254708553567', 'mfdfooh@gsdds.sjdj', NULL, '', NULL, '', '', '', '', '', '', '', NULL, '$2y$10$L4OM9d5ykKd8NJB2FlhmeumxSal/yyNrFr.OlK3ULvInwj4gw/Jn2', NULL, '2020-03-20 06:51:23', '2020-03-20 06:51:23');

-- --------------------------------------------------------

--
-- Table structure for table `variables`
--

DROP TABLE IF EXISTS `variables`;
CREATE TABLE IF NOT EXISTS `variables` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

DROP TABLE IF EXISTS `votes`;
CREATE TABLE IF NOT EXISTS `votes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `upload_id` int(11) NOT NULL,
  `liked` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `user_id`, `upload_id`, `liked`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2019-12-18 21:00:00', '2019-12-17 21:00:00'),
(2, 1, 1, 1, NULL, NULL),
(3, 1, 18, 1, '2019-12-04 18:14:54', '2019-12-04 18:14:54'),
(4, 1, 17, 1, '2019-12-04 18:15:00', '2019-12-04 18:15:00'),
(5, 1, 16, 1, '2019-12-04 18:15:03', '2019-12-04 18:15:03'),
(6, 1, 15, 1, '2019-12-04 18:15:08', '2019-12-04 18:15:08'),
(7, 1, 14, 1, '2019-12-04 18:15:11', '2019-12-04 18:15:11'),
(8, 1, 2, 1, '2019-12-04 18:16:09', '2019-12-04 18:16:09'),
(9, 1, 4, 1, '2019-12-05 04:47:17', '2019-12-05 04:47:17'),
(10, 1, 3, 1, '2019-12-06 06:21:12', '2019-12-06 06:21:12'),
(11, 1, 5, 1, '2019-12-06 08:37:14', '2019-12-06 08:37:14'),
(12, 1, 6, 1, '2019-12-06 08:37:34', '2019-12-06 08:37:34'),
(13, 1, 7, 1, '2019-12-06 08:39:51', '2019-12-06 08:39:51'),
(14, 1, 8, 1, '2019-12-06 08:40:16', '2019-12-06 08:40:16'),
(15, 1, 68, 1, '2019-12-13 12:39:09', '2019-12-13 12:39:09'),
(16, 1, 69, 1, '2020-01-18 09:43:50', '2020-01-18 09:43:50'),
(17, 1, 67, 1, '2020-01-18 09:43:54', '2020-01-18 09:43:54'),
(18, 1, 62, 1, '2020-01-18 10:20:53', '2020-01-18 10:20:53'),
(19, 1, 75, 1, '2020-03-13 15:40:16', '2020-03-13 15:40:16'),
(20, 1, 0, 1, '2020-03-13 15:41:02', '2020-03-13 15:41:02'),
(21, 1, 9, 1, '2020-06-05 09:22:03', '2020-06-05 09:22:03'),
(22, 1, 10, 1, '2020-06-05 09:24:06', '2020-06-05 09:24:06'),
(23, 1, 13, 1, '2020-06-05 09:27:04', '2020-06-05 09:27:04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
