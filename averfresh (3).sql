-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2020 at 01:56 PM
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
-- Database: `averfresh`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(7, 'Electronic', 1, 37, NULL, '2020-05-23 10:08:56', '2020-05-23 10:08:56'),
(14, 'Cement', 1, 38, NULL, '2020-05-25 13:34:10', '2020-05-25 13:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customers_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `mobile_no`, `email`, `address`, `image`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Aver Fresh Limited', '+8801732234216', 'averfresh@gmail.com', 'Bugura', '202005231517IMG_20190924_001111.jpg', 1, 37, 37, '2020-05-23 09:16:50', '2020-05-23 09:17:24'),
(2, 'Jamuna Future Park', '+8801913848152', 'jamuna@gmail.com', 'Jamuna Future Park', '20200524023501.jpg', 1, 38, NULL, '2020-05-23 20:35:11', '2020-05-23 20:35:11'),
(3, 'Lalamba', '+88017322344', 'lalamba@gmail.com', 'Uttara Set-7', '20200524023711.jpg', 1, 38, 38, '2020-05-23 20:37:18', '2020-05-23 20:37:35'),
(4, 'Kabab Ghor', '+8801761856556', 'kabab@gmail.com', 'Uttara Set-7', '20200524023811.jpg', 1, 38, NULL, '2020-05-23 20:38:56', '2020-05-23 20:38:56'),
(5, 'Newmarket', '+8801755631487', 'newmarket@gmail.com', 'Newmarket@gmail.com', '20200524024107.jpg', 1, 38, NULL, '2020-05-23 20:41:03', '2020-05-23 20:41:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2014_10_12_000000_create_users_table', 2),
(6, '2020_05_16_032756_create_suppliers_table', 3),
(7, '2020_05_16_054816_create_customers_table', 3),
(8, '2020_05_16_082146_create_units_table', 3),
(9, '2020_05_16_091755_create_categories_table', 3),
(10, '2020_05_16_102357_create_products_table', 3),
(11, '2020_05_16_142554_create_purchases_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `supplier_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `quantity` double NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `supplier_id`, `category_id`, `name`, `unit_id`, `quantity`, `image`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(8, 7, 7, 'Mobile', 6, 10, '202005251940Tulips.jpg', 1, 38, NULL, '2020-05-25 13:40:02', '2020-05-25 13:40:02'),
(9, 8, 14, 'Holcim Cement', 6, 400, '202005251940Chrysanthemum.jpg', 1, 38, 38, '2020-05-25 13:40:44', '2020-05-25 13:40:56'),
(10, 7, 7, 'Laptop', 5, 5, '202005251942Hydrangeas.jpg', 1, 38, NULL, '2020-05-25 13:42:24', '2020-05-25 13:42:24'),
(11, 7, 7, 'Computer', 5, 10, '202005251942Koala.jpg', 1, 38, NULL, '2020-05-25 13:42:51', '2020-05-25 13:42:51'),
(12, 8, 14, 'shah Cement', 6, 400, '202005251943Jellyfish.jpg', 1, 38, NULL, '2020-05-25 13:43:30', '2020-05-25 13:43:30');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE IF NOT EXISTS `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `supplier_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `purchase_no` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buying_qty` double DEFAULT NULL,
  `unit_price` double DEFAULT NULL,
  `buying_price` double DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=Pending,1=Approved',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `suppliers_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `mobile_no`, `email`, `address`, `image`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(7, 'Waton Company in Bd', '+8456123000', 'demo@gmail.com', 'Uttara', '2020052519322.jpg', 1, 38, NULL, '2020-05-25 13:32:06', '2020-05-25 13:32:06'),
(8, 'KSRM Rom', '+84561230000', 'kssrm@gmail.com', 'chitagong', '202005251936Lighthouse.jpg', 1, 38, NULL, '2020-05-25 13:36:59', '2020-05-25 13:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE IF NOT EXISTS `units` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `units_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Kg', 1, 37, NULL, '2020-05-23 09:56:19', '2020-05-23 09:56:19'),
(2, 'Mater', 1, 37, NULL, '2020-05-23 09:56:28', '2020-05-23 09:56:28'),
(3, 'Feet', 1, 37, NULL, '2020-05-23 09:56:39', '2020-05-23 09:56:39'),
(4, 'Coil', 1, 37, NULL, '2020-05-23 09:56:47', '2020-05-23 09:56:47'),
(5, 'Set', 1, 37, NULL, '2020-05-23 09:56:54', '2020-05-23 09:56:54'),
(6, 'Pcs', 1, 37, NULL, '2020-05-23 09:57:02', '2020-05-23 09:57:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `name`, `email`, `mobile`, `address`, `gender`, `email_verified_at`, `password`, `status`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(37, 'Super Admin', 'Md Lutfor Rahman', 'webatozexpert@gmail.com', '+8801958499092', 'Bugura Gabtoli', 'male', NULL, '$2y$10$HJPitHQIF38O7hOew60Ohu9e1K3Dks2oZpOF8KXXlUYy4DBzZBOD6', 1, '202005231322DSC_0095.jpg', NULL, '2020-05-23 04:35:37', '2020-05-30 05:49:50'),
(38, 'Super Admin', 'Raojatul Mariya Saoda', 'saoda2020@gmail.com', '+8801716745845', 'Gabtoli Bogura', 'Female', NULL, '$2y$10$Ua0dqMgZ4NcIQzFvEtNWBOhxQpXW0hcaYrDTMLmAKFQ17ZDJaablm', 1, '202005240212IMG_20190816_201330.jpg', NULL, '2020-05-23 06:17:41', '2020-05-23 20:12:59');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
