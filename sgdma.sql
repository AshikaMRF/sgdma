-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2016 at 06:19 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sgdma`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `activity_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `outcome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sales_person_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `date`, `activity_type`, `outcome`, `sales_person_name`, `created_at`, `updated_at`, `customer_name`, `remember_token`, `_token`) VALUES
(6, '2016-05-19 18:30:00', 'message-u', '89', 'hidden67', '2016-05-19 09:42:33', '2016-05-19 09:42:33', '56-old-updated', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `contact_no`, `created_at`, `updated_at`, `customer_name`) VALUES
(1, 'tesw-updated', 'a2@gmail.com', '7888', '2016-05-19 11:49:15', '2016-05-19 11:49:15', '56-old-updated');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `br_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `company_name`, `br_no`, `created_at`, `updated_at`, `company_address`, `company_website`, `customer_name`) VALUES
(11, 'rt', '78566666', '2016-05-18 05:25:29', '2016-05-19 08:22:11', '8ub', 'v.com', '56-old-updated'),
(12, 'u', '65', '2016-05-18 05:29:12', '2016-05-18 08:59:18', '7', 'g.com', 'test5-updated'),
(13, '7', '1234', '2016-05-19 11:20:59', '2016-05-19 11:21:14', '1234,colombo8', 't.com', 'test5ppppp'),
(14, 'abc', '78', '2016-05-19 22:48:58', '2016-05-19 22:48:58', '123,colombo', 'www.abc.com', 'cus1');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_05_17_130054_create_customer_table', 1),
('2016_05_17_150632_create_contact_table', 2),
('2016_05_17_151949_create_activity_table', 3),
('2016_05_18_073312_modify_column', 4),
('2016_05_18_073941_add_column', 5),
('2016_05_18_074601_modify_column1', 6),
('2016_05_18_074659_add_column1', 7),
('2016_05_18_090546_add_column2', 8),
('2016_05_19_150359_add_column_activity', 9),
('2016_05_19_153240_add_column_activity1', 10),
('2016_05_19_153436_add_column_activity2', 11),
('2016_05_19_170030_add_column_contact1', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ashika', 'ashikamrf71@gmail.com', '$2y$10$s9Y5B35TEPVCcna5WNJBGO9dt0zG9iKwV.bEryhFD4zg5vrt8dLqK', 'YI2d8D1rRjQxsP9fa91fHVTxV0AvMsObRlApOHjwH1J6DBXt8EQmpI0viHEM', '2016-05-18 05:12:41', '2016-05-18 05:19:57');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
