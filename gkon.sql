-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2026 at 07:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gkon`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

CREATE TABLE `bank_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_no` varchar(255) NOT NULL,
  `ifsc_code` varchar(255) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `account_type` varchar(255) NOT NULL DEFAULT 'Current',
  `stamp_duty` decimal(10,2) NOT NULL DEFAULT 0.00,
  `account_scenario` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `invoice_type` enum('GST','NON-GST') NOT NULL DEFAULT 'GST'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bank_details`
--

INSERT INTO `bank_details` (`id`, `bank_name`, `account_no`, `ifsc_code`, `branch_name`, `account_type`, `stamp_duty`, `account_scenario`, `created_at`, `updated_at`, `status`, `invoice_type`) VALUES
(7, 'Union Bank', '70124589678456321', 'YUNO0001234', 'rampura', 'Current', 4.00, 'Hii this is curent acount', '2026-02-02 05:07:08', '2026-02-03 05:05:52', 1, 'GST'),
(8, 'State Bank Of India', '4335654654745', 'SBIO0001234', 'rampura', 'Savings', 4.00, 'kkkkkk', '2026-02-02 05:09:09', '2026-02-03 05:05:53', 1, 'NON-GST');

-- --------------------------------------------------------

--
-- Table structure for table `business_profiles`
--

CREATE TABLE `business_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_email` varchar(255) NOT NULL,
  `company_phone` varchar(255) NOT NULL,
  `gstin` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_profiles`
--

INSERT INTO `business_profiles` (`id`, `company_name`, `company_email`, `company_phone`, `gstin`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Gkon', 'Gkon@gmail.com', '7240726041', '7485452GKON123', 'A91 Rajawas 303704', '2026-02-03 06:11:05', '2026-02-03 23:59:18');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `country_code` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `budget` varchar(255) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `name`, `country_code`, `phone`, `email`, `budget`, `file_path`, `message`, `created_at`, `updated_at`, `is_read`) VALUES
(1, 'Arya yadav', '+91', '7240726041', 'ssssskss@gmail.com', '$500 - $1000', NULL, 'afrwwt', '2026-01-27 00:45:40', '2026-01-31 04:15:37', 1),
(2, 'sunil', '+91', '7796541230', 'sunil.khanhhhhdelwallic@gmail.com', '$500 - $1000', NULL, 'weggrf', '2026-01-27 03:39:28', '2026-01-31 04:15:37', 1),
(3, 'fffff', '+91', '7240726041', 'smms@gmail.com', '$5000 - $10,000', NULL, 'jkhjhuyuyu', '2026-01-28 23:35:49', '2026-01-31 05:45:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `invoice_type` enum('GST','NON-GST') NOT NULL DEFAULT 'GST',
  `invoice_date` date NOT NULL,
  `due_date` date DEFAULT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_phone` varchar(255) NOT NULL,
  `client_email` varchar(255) DEFAULT NULL,
  `client_address` text NOT NULL,
  `client_gstin` varchar(15) DEFAULT NULL,
  `client_pan` varchar(10) DEFAULT NULL,
  `client_state` varchar(255) NOT NULL,
  `client_state_code` varchar(2) NOT NULL,
  `place_of_supply` varchar(255) NOT NULL,
  `reverse_charge` varchar(255) NOT NULL DEFAULT 'No',
  `subtotal` decimal(15,2) NOT NULL DEFAULT 0.00,
  `total_discount` decimal(15,2) NOT NULL DEFAULT 0.00,
  `total_taxable_value` decimal(15,2) NOT NULL DEFAULT 0.00,
  `total_cgst` decimal(15,2) NOT NULL DEFAULT 0.00,
  `total_sgst` decimal(15,2) NOT NULL DEFAULT 0.00,
  `total_igst` decimal(15,2) NOT NULL DEFAULT 0.00,
  `total_gst_amount` decimal(15,2) NOT NULL DEFAULT 0.00,
  `grand_total` decimal(15,2) NOT NULL DEFAULT 0.00,
  `net_payable` decimal(15,2) NOT NULL DEFAULT 0.00,
  `paid_amount` decimal(15,2) NOT NULL DEFAULT 0.00,
  `status` enum('paid','unpaid','partially_paid','cancelled') NOT NULL DEFAULT 'unpaid',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `invoice_no`, `invoice_type`, `invoice_date`, `due_date`, `client_name`, `client_phone`, `client_email`, `client_address`, `client_gstin`, `client_pan`, `client_state`, `client_state_code`, `place_of_supply`, `reverse_charge`, `subtotal`, `total_discount`, `total_taxable_value`, `total_cgst`, `total_sgst`, `total_igst`, `total_gst_amount`, `grand_total`, `net_payable`, `paid_amount`, `status`, `created_at`, `updated_at`) VALUES
(12, 'INV-20260130-6122', 'GST', '2026-01-30', '2026-02-06', 'sunil kumar', '8619269508', 'ss@gmail.com', 'JAIPUR', '1234534324', 'ryr6767hr', 'Rajasthan', '01', '01', 'No', 22242.00, 1232.00, 21010.00, 1890.90, 1890.90, 0.00, 3781.80, 24791.80, 24791.80, 0.00, 'unpaid', '2026-01-30 03:57:48', '2026-01-30 03:57:48'),
(33, 'INV-20260202-1573', 'GST', '2026-02-02', '2026-02-09', 'Avika', '9887155147', 'Avika@gmail.com', 'rampura jaipur 303704', '748546f78f4', NULL, 'Rajasthan', '15', '15', 'No', 111637.00, 1651.00, 109986.00, 15035.34, 15035.34, 0.00, 30070.68, 140056.68, 140056.68, 0.00, 'unpaid', '2026-02-02 05:03:52', '2026-02-02 05:03:52'),
(38, 'INV-20260203-1280', 'GST', '2026-02-03', '2026-02-10', 'Avika', '9887155147', 'Avika@gmail.com', 'rampura jaipur 303704', '748546f78f4', NULL, 'shyty', '01', '01', 'No', 4100.00, 10.00, 4090.00, 245.40, 245.40, 0.00, 490.80, 4580.80, 4580.80, 0.00, 'unpaid', '2026-02-03 01:36:32', '2026-02-03 01:36:32'),
(44, 'INV-20260203-8991', 'GST', '2026-02-03', '2026-02-10', 'sunil kumar', '8619269508', 'ss@gmail.com', 'JAIPUR', '1234534324', 'ryr6767hr', 'Rajasthan', '01', '01', 'No', 10000.00, 1000.00, 9000.00, 810.00, 810.00, 0.00, 1620.00, 10620.00, 10620.00, 0.00, 'unpaid', '2026-02-03 01:56:40', '2026-02-03 01:56:40'),
(45, 'INV-20260203-4113', 'GST', '2026-02-03', '2026-02-10', 'sunil kumar', '1478523690', 'ssses@gmail.com', 'jaipur 97845', 'HG4376UHJNK', 'KJDHK876', 'rajaa', '16', '16', 'No', 11000.00, 1012.00, 9988.00, 1348.92, 1348.92, 0.00, 2697.84, 12685.84, 12685.84, 0.00, 'unpaid', '2026-02-03 01:59:12', '2026-02-03 01:59:12'),
(46, 'INV-20260203-9833', 'NON-GST', '2026-02-03', '2026-02-10', 'Arya yadav', '7240726041', 'jhge@gmail.com', 'Siker', NULL, 'ryr6767hr', 'Rajasthan', '14', '14', 'No', 4477.00, 332.00, 4145.00, 0.00, 0.00, 0.00, 0.00, 4145.00, 4145.00, 0.00, 'unpaid', '2026-02-03 01:59:58', '2026-02-03 01:59:58'),
(48, 'INV-20260203-5967', 'GST', '2026-02-03', '2026-02-10', 'Avika', '9887155147', 'Avika@gmail.com', 'rampura jaipur 303704', '748546f78f4', NULL, 'shyty', '01', '01', 'No', 18540.00, 78.00, 18462.00, 0.00, 0.00, 0.00, 0.00, 18462.00, 18462.00, 0.00, 'unpaid', '2026-02-03 02:54:34', '2026-02-03 02:54:34'),
(49, 'INV-20260203-3650', 'GST', '2026-02-03', '2026-02-10', 'sunil kumar', '8619269508', 'ss@gmail.com', 'JAIPUR', '1234534324', 'ryr6767hr', 'Rajasthan', '01', '01', 'No', 140650.00, 5342.00, 135308.00, 16310.61, 16310.61, 0.00, 32621.22, 167929.22, 167929.22, 0.00, 'unpaid', '2026-02-03 03:06:41', '2026-02-03 03:06:41'),
(50, 'INV-20260204-5509', 'GST', '2026-02-04', '2026-02-11', 'Arya yadav', '8619269508', 'jhg@gmail.com', 'Siker', 'g567654hgd', 'ryr6767hr', 'Rajasthan', '01', '01', 'No', 1000.00, 100.00, 900.00, 126.00, 126.00, 0.00, 252.00, 1152.00, 1152.00, 0.00, 'unpaid', '2026-02-04 02:21:39', '2026-02-04 02:21:39'),
(51, 'INV-20260204-8382', 'GST', '2026-02-04', '2026-02-11', 'Avika', '9887155147', 'Avika@gmail.com', 'rampura jaipur 303704', '748546f78f4', NULL, 'shyty', '01', '01', 'No', 39556647.00, 10159.00, 39546488.00, 5536508.32, 5536508.32, 0.00, 11073016.64, 50619504.64, 50619504.64, 0.00, 'unpaid', '2026-02-04 02:27:26', '2026-02-04 02:27:26'),
(52, 'INV-20260204-3651', 'GST', '2026-02-04', '2026-02-11', 'Avika', '9887155147', 'Avika@gmail.com', 'rampura jaipur 303704', '748546f78f4', NULL, 'shyty', '01', '01', 'No', 324989.00, 2876.00, 322113.00, 26490.74, 26490.74, 0.00, 52981.48, 375094.48, 375094.48, 375094.48, 'unpaid', '2026-02-04 04:02:15', '2026-02-04 04:02:15'),
(54, 'INV-20260204-2073', 'GST', '2026-02-04', '2026-02-11', 'Avika', '9887155147', 'Avika@gmail.com', 'rampura jaipur 303704', '748546f78f4', NULL, 'shyty', '01', '01', 'No', 1000.00, 10.00, 990.00, 89.10, 89.10, 0.00, 178.20, 1168.20, 1168.20, 0.00, 'unpaid', '2026-02-04 04:18:25', '2026-02-04 04:18:25'),
(55, 'INV-20260204-5134', 'GST', '2026-02-04', '2026-02-11', 'Avika', '9887155147', 'Avika@gmail.com', 'rampura jaipur 303704', '748546f78f4', NULL, 'shyty', '01', '01', 'No', 100.00, 25.00, 75.00, 10.50, 10.50, 0.00, 21.00, 96.00, 96.00, 96.00, 'unpaid', '2026-02-04 05:58:36', '2026-02-04 05:58:36'),
(56, 'INV-20260223-9603', 'GST', '2026-02-23', '2026-03-02', 'Arya yadav', '7240726041', 'jhge@gmail.com', 'Siker', 'g567654hgd', 'ryr6767hr', 'Rajasthan', '14', '14', 'No', 10000.00, 1455.00, 8545.00, 769.05, 769.05, 0.00, 1538.10, 10083.10, 10083.10, 10083.00, 'unpaid', '2026-02-23 01:16:34', '2026-02-23 01:16:34'),
(57, 'INV-20260223-5549', 'NON-GST', '2026-02-23', '2026-03-02', 'Avika', '9887155147', 'Avika@gmail.com', 'rampura jaipur 303704', '748546f78f4', NULL, 'shyty', '01', '01', 'No', 2759609.00, 23337.00, 2736272.00, 0.00, 0.00, 0.00, 0.00, 2736272.00, 2736272.00, 2736272.00, 'unpaid', '2026-02-23 01:18:59', '2026-02-23 01:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_items`
--

CREATE TABLE `invoice_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL,
  `hsn_sac_code` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL DEFAULT 'NOS',
  `quantity` int(11) NOT NULL DEFAULT 1,
  `unit_price` decimal(15,2) NOT NULL,
  `discount_per_item` decimal(15,2) NOT NULL DEFAULT 0.00,
  `taxable_value` decimal(15,2) NOT NULL,
  `gst_rate` decimal(5,2) NOT NULL,
  `gst_amount` decimal(10,2) DEFAULT NULL,
  `sgst_amount` decimal(15,2) DEFAULT NULL,
  `igst_amount` decimal(15,2) NOT NULL DEFAULT 0.00,
  `total_item_amount` decimal(15,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice_items`
--

INSERT INTO `invoice_items` (`id`, `invoice_id`, `description`, `hsn_sac_code`, `unit`, `quantity`, `unit_price`, `discount_per_item`, `taxable_value`, `gst_rate`, `gst_amount`, `sgst_amount`, `igst_amount`, `total_item_amount`, `created_at`, `updated_at`) VALUES
(14, 33, 'aaa', 'null', 'NOS', 1, 104152.00, 1420.00, 102732.00, 28.00, 28764.96, NULL, 0.00, 131496.96, '2026-02-02 05:03:52', '2026-02-02 05:03:52'),
(15, 33, 'bbb', 'null', 'NOS', 1, 7485.00, 231.00, 7254.00, 18.00, 1305.72, NULL, 0.00, 8559.72, '2026-02-02 05:03:52', '2026-02-02 05:03:52'),
(16, 38, 'aa', 'null', 'NOS', 1, 4100.00, 10.00, 4090.00, 12.00, 490.80, NULL, 0.00, 4580.80, '2026-02-03 01:36:32', '2026-02-03 01:36:32'),
(21, 44, 'aa', 'null', 'NOS', 1, 10000.00, 1000.00, 9000.00, 18.00, 1620.00, NULL, 0.00, 10620.00, '2026-02-03 01:56:40', '2026-02-03 01:56:40'),
(22, 45, 'ff', 'null', 'NOS', 1, 10000.00, 1000.00, 9000.00, 28.00, 2520.00, NULL, 0.00, 11520.00, '2026-02-03 01:59:12', '2026-02-03 01:59:12'),
(23, 45, 'ffff', 'null', 'NOS', 1, 1000.00, 12.00, 988.00, 18.00, 177.84, NULL, 0.00, 1165.84, '2026-02-03 01:59:12', '2026-02-03 01:59:12'),
(24, 46, 'aa', 'null', 'NOS', 1, 1233.00, 11.00, 1222.00, 0.00, 0.00, NULL, 0.00, 1222.00, '2026-02-03 01:59:58', '2026-02-03 01:59:58'),
(25, 46, 'rr', 'null', 'NOS', 1, 3244.00, 321.00, 2923.00, 0.00, 0.00, NULL, 0.00, 2923.00, '2026-02-03 01:59:58', '2026-02-03 01:59:58'),
(26, 48, 'gg', 'null', 'NOS', 12, 1545.00, 78.00, 18462.00, 0.00, 0.00, NULL, 0.00, 18462.00, '2026-02-03 02:54:34', '2026-02-03 02:54:34'),
(27, 49, 'aaa', 'null', 'NOS', 2, 23456.00, 4233.00, 42679.00, 18.00, 7682.22, NULL, 0.00, 50361.22, '2026-02-03 03:06:41', '2026-02-03 03:06:41'),
(28, 49, 'bbb', 'null', 'NOS', 2, 3333.00, 434.00, 6232.00, 12.00, 747.84, NULL, 0.00, 6979.84, '2026-02-03 03:06:41', '2026-02-03 03:06:41'),
(29, 49, 'gg', 'null', 'NOS', 2, 43536.00, 675.00, 86397.00, 28.00, 24191.16, NULL, 0.00, 110588.16, '2026-02-03 03:06:41', '2026-02-03 03:06:41'),
(30, 50, 'aaa', 'null', 'NOS', 1, 1000.00, 100.00, 900.00, 28.00, 252.00, NULL, 0.00, 1152.00, '2026-02-04 02:21:39', '2026-02-04 02:21:39'),
(31, 51, 'aa', 'null', 'NOS', 5, 18987.00, 2314.00, 92621.00, 28.00, 25933.88, NULL, 0.00, 118554.88, '2026-02-04 02:27:26', '2026-02-04 02:27:26'),
(32, 51, 'bbb', 'null', 'NOS', 4, 9865428.00, 7845.00, 39453867.00, 28.00, 11047082.76, NULL, 0.00, 50500949.76, '2026-02-04 02:27:26', '2026-02-04 02:27:26'),
(33, 52, 'aa', 'null', 'NOS', 1, 1000.00, 100.00, 900.00, 18.00, 162.00, NULL, 0.00, 1062.00, '2026-02-04 04:02:15', '2026-02-04 04:02:15'),
(34, 52, 'bb', 'null', 'NOS', 1, 4563.00, 85.00, 4478.00, 18.00, 806.04, NULL, 0.00, 5284.04, '2026-02-04 04:02:15', '2026-02-04 04:02:15'),
(35, 52, 'cc', 'null', 'NOS', 1, 2587.00, 589.00, 1998.00, 18.00, 359.64, NULL, 0.00, 2357.64, '2026-02-04 04:02:15', '2026-02-04 04:02:15'),
(36, 52, 'dd', 'null', 'NOS', 1, 9685.00, 246.00, 9439.00, 18.00, 1699.02, NULL, 0.00, 11138.02, '2026-02-04 04:02:15', '2026-02-04 04:02:15'),
(37, 52, 'ee', 'null', 'NOS', 3, 35416.00, 892.00, 105356.00, 12.00, 12642.72, NULL, 0.00, 117998.72, '2026-02-04 04:02:15', '2026-02-04 04:02:15'),
(38, 52, 'ff', 'null', 'NOS', 2, 6985.00, 745.00, 13225.00, 28.00, 3703.00, NULL, 0.00, 16928.00, '2026-02-04 04:02:15', '2026-02-04 04:02:15'),
(39, 52, 'gg', 'null', 'NOS', 1, 7812.00, 99.00, 7713.00, 18.00, 1388.34, NULL, 0.00, 9101.34, '2026-02-04 04:02:15', '2026-02-04 04:02:15'),
(40, 52, 'hh', 'null', 'NOS', 2, 89562.00, 120.00, 179004.00, 18.00, 32220.72, NULL, 0.00, 211224.72, '2026-02-04 04:02:15', '2026-02-04 04:02:15'),
(41, 54, 'Bhai, bank details ko \"Super Compact\" karne ke liye maine uska font size aur chhota kar diya hai aur columns ko adjust kiya hai taaki wo kam se kam vertical space le.', 'null', 'NOS', 1, 1000.00, 10.00, 990.00, 18.00, 178.20, NULL, 0.00, 1168.20, '2026-02-04 04:18:25', '2026-02-04 04:18:25'),
(42, 55, 'aaa', 'null', 'NOS', 1, 100.00, 25.00, 75.00, 28.00, 21.00, NULL, 0.00, 96.00, '2026-02-04 05:58:36', '2026-02-04 05:58:36'),
(43, 56, 'aa', 'null', 'NOS', 1, 10000.00, 1455.00, 8545.00, 18.00, 1538.10, NULL, 0.00, 10083.10, '2026-02-23 01:16:34', '2026-02-23 01:16:34'),
(44, 57, 'aa', 'null', 'NOS', 1, 1452.00, 146.00, 1306.00, 0.00, 0.00, NULL, 0.00, 1306.00, '2026-02-23 01:18:59', '2026-02-23 01:18:59'),
(45, 57, 'bb', 'null', 'NOS', 3, 12345.00, 894.00, 36141.00, 0.00, 0.00, NULL, 0.00, 36141.00, '2026-02-23 01:18:59', '2026-02-23 01:18:59'),
(46, 57, 'cc', 'null', 'NOS', 3, 79456.00, 3468.00, 234900.00, 0.00, 0.00, NULL, 0.00, 234900.00, '2026-02-23 01:18:59', '2026-02-23 01:18:59'),
(47, 57, 'dd', 'null', 'NOS', 1, 7845.00, 7894.00, -49.00, 0.00, 0.00, NULL, 0.00, -49.00, '2026-02-23 01:18:59', '2026-02-23 01:18:59'),
(48, 57, 'ee', 'null', 'NOS', 1, 98465.00, 7458.00, 91007.00, 0.00, 0.00, NULL, 0.00, 91007.00, '2026-02-23 01:18:59', '2026-02-23 01:18:59'),
(49, 57, 'ff', 'null', 'NOS', 3, 745896.00, 946.00, 2236742.00, 0.00, 0.00, NULL, 0.00, 2236742.00, '2026-02-23 01:18:59', '2026-02-23 01:18:59'),
(50, 57, 'gg', 'null', 'NOS', 4, 34689.00, 2531.00, 136225.00, 0.00, 0.00, NULL, 0.00, 136225.00, '2026-02-23 01:18:59', '2026-02-23 01:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_01_20_102828_create_inquiries_table', 1),
(5, '2026_01_20_110110_add_status_to_inquiries', 2),
(6, '2026_01_20_111225_add_role_to_users_table', 3),
(7, '2026_01_22_065449_schedule_demo_table', 4),
(30, '2026_01_26_073753_invoices_table', 5),
(31, '2026_01_26_074056_invoice_items_table', 5),
(32, '2026_01_26_074154_business_profiles_table', 5),
(33, '2026_01_29_100751_create_bank_details_table', 5),
(34, '2026_02_02_054216_add_status_to_bank_details_table', 6),
(35, '2026_02_02_055747_add_columns_to_bank_details', 7),
(36, '2026_02_04_063053_add_phone_to_users_table', 8),
(37, '2026_02_04_073233_add_status_to_users_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule_demo`
--

CREATE TABLE `schedule_demo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `project` varchar(255) NOT NULL,
  `demo_date` date NOT NULL,
  `demo_time` time NOT NULL,
  `description` text DEFAULT NULL,
  `is_attended` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedule_demo`
--

INSERT INTO `schedule_demo` (`id`, `name`, `email`, `phone`, `project`, `demo_date`, `demo_time`, `description`, `is_attended`, `created_at`, `updated_at`) VALUES
(1, 'Arya yadavhhhh', 'ss@gmail.com', '+917240726041', 'CRM System', '2026-01-07', '15:23:00', 'gfhfggy', 0, '2026-01-22 03:23:12', '2026-01-22 03:23:12'),
(2, 'kjssfg', 'ss@gmail.com', '1234567890', 'E-Commerce', '2026-01-07', '00:11:00', 'xxsdgffggdsfgdsgdg', 0, '2026-01-26 00:10:10', '2026-01-26 00:10:10'),
(3, 'Arya yadav', 'sssssss@gmail.com', '+917240726041', 'CRM System', '2026-01-01', '10:38:00', 'njkhguuhi', 0, '2026-01-28 23:39:15', '2026-01-28 23:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('cNLR3SOMtMCFLUxX1HIWvDBXV8nYs18oZEtC7ZJP', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibm9KSm9TV05aSHoxTjgwRXFxOHNHd0Qwb2hPa3hBV1VqbmQ1WEFlbiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO3M6NToicm91dGUiO3M6MTU6ImFkbWluLmRhc2hib2FyZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1771829424),
('m4gSpoLibqL3xAHN3ar5Po9QMFE2a23cBUFbLQG5', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSVRLN3pBcEdqWm1adVVDTnMyY0Q4VkZURDlqOFVYaVRxVGRqVEF3MCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czoxNDoiZnJvbnRlbmQuaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1771828939);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Gkon Admin', 'admin@gkon.com', '9876543210', NULL, '$2y$12$8WMmheKHNJQKOjsaqYJxiueTWuDfwFn/OeYr3InToTJRqH8.wo/gS', 1, NULL, '2026-02-04 00:42:30', '2026-02-04 01:02:24', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_profiles`
--
ALTER TABLE `business_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `invoices_invoice_no_unique` (`invoice_no`);

--
-- Indexes for table `invoice_items`
--
ALTER TABLE `invoice_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_items_invoice_id_foreign` (`invoice_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `schedule_demo`
--
ALTER TABLE `schedule_demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank_details`
--
ALTER TABLE `bank_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `business_profiles`
--
ALTER TABLE `business_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `invoice_items`
--
ALTER TABLE `invoice_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `schedule_demo`
--
ALTER TABLE `schedule_demo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoice_items`
--
ALTER TABLE `invoice_items`
  ADD CONSTRAINT `invoice_items_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
