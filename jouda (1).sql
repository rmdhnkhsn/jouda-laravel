-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2025 at 05:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jouda`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupons` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `returnorder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orders` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `setting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reports` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alluser` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adminuserrole` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(25) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `brand`, `category`, `product`, `slider`, `coupons`, `shipping`, `cancel`, `returnorder`, `review`, `orders`, `blog`, `setting`, `stock`, `reports`, `alluser`, `adminuserrole`, `type`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Superadmin', 'superadmin@gmail.com', '2022-04-09 02:26:43', '$2y$10$SQE.RtCZA0FxI9/FGjb9keYavIy/ymLSP30.35PJjX6OJw3TGLCJC', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 'etaxt24lUZuDQWn6gLEsyxLXB3mChjy9tJmbnIEo1GzrslaeYS6qMXezsG0K', NULL, '202412230725DSC09190.jpg', '2022-04-09 02:26:43', '2024-12-23 00:25:13'),
(2, 'Admin 1', 'admin@gmail.com', NULL, '$2y$10$v3IfY1fOTGNLDeqlwfGSReM5tN3L7K7m0tcIDxIWvouyqkRJUZQ.S', '0895335490295', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, '1', NULL, NULL, NULL, 2, NULL, NULL, '202205121804avatar-1.png', '2022-07-23 20:57:41', '2022-07-23 20:57:41');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_slug`, `brand_image`, `created_at`, `updated_at`) VALUES
(14, 'Jouda', 'jouda', 'upload/brand/1819212789637410.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `category_icon`, `created_at`, `updated_at`) VALUES
(2, 'Pria', 'pria', 'fa fa-male', NULL, NULL),
(7, 'Laki-laki', 'laki-laki', 'fa fa-male', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_discount` int(11) NOT NULL,
  `coupon_validity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_name`, `coupon_discount`, `coupon_validity`, `status`, `created_at`, `updated_at`) VALUES
(1, 'PROMO33', 20, '2023-03-31', 1, '2022-03-13 00:44:06', NULL),
(2, 'AKHIRBULAN', 30, '2022-02-29', 1, '2022-03-13 00:44:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_02_02_203839_create_sessions_table', 1),
(7, '2021_02_02_212221_create_admins_table', 1),
(8, '2021_02_09_054528_create_brands_table', 1),
(9, '2021_02_09_111701_create_categories_table', 1),
(10, '2021_02_09_121910_create_sub_categories_table', 1),
(11, '2021_02_16_183944_create_sub_sub_categories_table', 1),
(12, '2021_02_16_204006_create_products_table', 1),
(13, '2021_02_16_205349_create_multi_imgs_table', 1),
(14, '2021_02_20_204829_create_sliders_table', 1),
(15, '2021_03_02_194613_create_wishlists_table', 1),
(16, '2021_03_03_211157_create_coupons_table', 1),
(17, '2021_03_03_222308_create_ship_divisions_table', 1),
(18, '2021_03_09_183956_create_ship_districts_table', 1),
(19, '2021_03_09_194733_create_ship_states_table', 1),
(20, '2021_03_14_203654_create_orders_table', 1),
(21, '2021_03_14_203901_create_order_items_table', 1),
(22, '2021_03_24_183649_create_blog_post_categories_table', 1),
(23, '2021_03_24_194838_create_blog_posts_table', 1),
(24, '2021_03_24_223430_create_site_settings_table', 1),
(25, '2021_03_26_194141_create_seos_table', 1),
(26, '2021_03_27_192140_create_reviews_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `multi_imgs`
--

CREATE TABLE `multi_imgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `photo_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_imgs`
--

INSERT INTO `multi_imgs` (`id`, `product_id`, `photo_name`, `created_at`, `updated_at`) VALUES
(15, 4, 'upload/products/multi-image/1726989408326515.png', '2022-03-11 00:57:24', NULL),
(16, 4, 'upload/products/multi-image/1726989409182332.png', '2022-03-11 00:57:24', NULL),
(17, 4, 'upload/products/multi-image/1726989409990600.png', '2022-03-11 00:57:25', NULL),
(18, 4, 'upload/products/multi-image/1726989410633969.webp', '2022-03-11 00:57:26', NULL),
(49, 4, 'upload/products/multi-image/1727166912993530.png', '2022-03-12 23:58:45', NULL),
(50, 4, 'upload/products/multi-image/1727166913327019.png', '2022-03-12 23:58:45', NULL),
(51, 4, 'upload/products/multi-image/1727166913658152.png', '2022-03-12 23:58:48', NULL),
(52, 4, 'upload/products/multi-image/1727166916562563.png', '2022-03-12 23:58:51', NULL),
(58, 6, 'upload/products/multi-image/1727171133061607.png', '2022-03-13 01:06:02', NULL),
(59, 6, 'upload/products/multi-image/1727171146235745.png', '2022-03-13 01:06:17', NULL),
(60, 6, 'upload/products/multi-image/1727171161780273.png', '2022-03-13 01:06:17', NULL),
(61, 6, 'upload/products/multi-image/1727171162137962.png', '2022-03-13 01:06:17', NULL),
(62, 6, 'upload/products/multi-image/1727171162469730.png', '2022-03-13 01:06:18', NULL),
(87, 13, 'upload/products/multi-image/1820138502402926.jpg', '2025-01-02 05:02:22', NULL),
(88, 13, 'upload/products/multi-image/1820138502584560.jpg', '2025-01-02 05:02:22', NULL),
(89, 13, 'upload/products/multi-image/1820138502762636.jpg', '2025-01-02 05:02:22', NULL),
(90, 13, 'upload/products/multi-image/1820138502940448.jpg', '2025-01-02 05:02:22', NULL),
(91, 13, 'upload/products/multi-image/1820138503126906.jpg', '2025-01-02 05:02:22', NULL),
(92, 13, 'upload/products/multi-image/1820138503312895.jpg', '2025-01-02 05:02:23', NULL),
(93, 13, 'upload/products/multi-image/1820138503553030.jpg', '2025-01-02 05:02:23', NULL),
(94, 13, 'upload/products/multi-image/1820138503738806.jpg', '2025-01-02 05:02:23', NULL),
(95, 13, 'upload/products/multi-image/1820138503924322.jpg', '2025-01-02 05:02:23', NULL),
(96, 13, 'upload/products/multi-image/1820138504101894.jpg', '2025-01-02 05:02:23', NULL),
(97, 13, 'upload/products/multi-image/1820138504280447.jpg', '2025-01-02 05:02:24', NULL),
(98, 14, 'upload/products/multi-image/1820142943822991.jpg', '2025-01-02 06:12:57', NULL),
(99, 14, 'upload/products/multi-image/1820142944005315.jpg', '2025-01-02 06:12:58', NULL),
(100, 14, 'upload/products/multi-image/1820142944231789.jpg', '2025-01-02 06:12:58', NULL),
(101, 14, 'upload/products/multi-image/1820142944408964.jpg', '2025-01-02 06:12:58', NULL),
(102, 14, 'upload/products/multi-image/1820142944593389.jpg', '2025-01-02 06:12:58', NULL),
(103, 14, 'upload/products/multi-image/1820142944781415.jpg', '2025-01-02 06:12:58', NULL),
(104, 14, 'upload/products/multi-image/1820142944974881.jpg', '2025-01-02 06:12:59', NULL),
(105, 14, 'upload/products/multi-image/1820142945212451.jpg', '2025-01-02 06:12:59', NULL),
(106, 15, 'upload/products/multi-image/1820143527667991.jpg', '2025-01-02 06:22:14', NULL),
(107, 15, 'upload/products/multi-image/1820143527850122.jpg', '2025-01-02 06:22:14', NULL),
(108, 15, 'upload/products/multi-image/1820143528033507.jpg', '2025-01-02 06:22:15', NULL),
(109, 15, 'upload/products/multi-image/1820143528260847.jpg', '2025-01-02 06:22:15', NULL),
(110, 15, 'upload/products/multi-image/1820143528438806.jpg', '2025-01-02 06:22:15', NULL),
(111, 15, 'upload/products/multi-image/1820143528615013.jpg', '2025-01-02 06:22:15', NULL),
(112, 15, 'upload/products/multi-image/1820143528798019.jpg', '2025-01-02 06:22:15', NULL),
(113, 15, 'upload/products/multi-image/1820143528984730.jpg', '2025-01-02 06:22:15', NULL),
(114, 15, 'upload/products/multi-image/1820143529167120.jpg', '2025-01-02 06:22:16', NULL),
(115, 16, 'upload/products/multi-image/1820145331130115.jpg', '2025-01-02 06:50:54', NULL),
(116, 16, 'upload/products/multi-image/1820145331306638.jpg', '2025-01-02 06:50:54', NULL),
(117, 16, 'upload/products/multi-image/1820145331484734.jpg', '2025-01-02 06:50:54', NULL),
(118, 16, 'upload/products/multi-image/1820145331663746.jpg', '2025-01-02 06:50:55', NULL),
(119, 16, 'upload/products/multi-image/1820145331888858.jpg', '2025-01-02 06:50:55', NULL),
(120, 16, 'upload/products/multi-image/1820145332066290.jpg', '2025-01-02 06:50:55', NULL),
(121, 16, 'upload/products/multi-image/1820145332242959.jpg', '2025-01-02 06:50:55', NULL),
(122, 16, 'upload/products/multi-image/1820145332419134.jpg', '2025-01-02 06:50:55', NULL),
(123, 16, 'upload/products/multi-image/1820145332603044.jpg', '2025-01-02 06:50:56', NULL),
(124, 16, 'upload/products/multi-image/1820145332838905.jpg', '2025-01-02 06:50:56', NULL),
(125, 16, 'upload/products/multi-image/1820145333026823.jpg', '2025-01-02 06:50:56', NULL),
(126, 16, 'upload/products/multi-image/1820145333209086.jpg', '2025-01-02 06:50:56', NULL),
(127, 16, 'upload/products/multi-image/1820145333390241.jpg', '2025-01-02 06:50:56', NULL),
(128, 16, 'upload/products/multi-image/1820145333575075.jpg', '2025-01-02 06:50:56', NULL),
(129, 17, 'upload/products/multi-image/1820145935106066.jpg', '2025-01-02 07:00:30', NULL),
(130, 17, 'upload/products/multi-image/1820145935289993.jpg', '2025-01-02 07:00:30', NULL),
(131, 17, 'upload/products/multi-image/1820145935470496.jpg', '2025-01-02 07:00:30', NULL),
(132, 17, 'upload/products/multi-image/1820145935651994.jpg', '2025-01-02 07:00:31', NULL),
(133, 17, 'upload/products/multi-image/1820145935880472.jpg', '2025-01-02 07:00:31', NULL),
(134, 17, 'upload/products/multi-image/1820145936058415.jpg', '2025-01-02 07:00:31', NULL),
(135, 17, 'upload/products/multi-image/1820145936249471.jpg', '2025-01-02 07:00:31', NULL),
(136, 17, 'upload/products/multi-image/1820145936437611.jpg', '2025-01-02 07:00:31', NULL),
(137, 17, 'upload/products/multi-image/1820145936630501.jpg', '2025-01-02 07:00:32', NULL),
(138, 18, 'upload/products/multi-image/1820146188351441.jpg', '2025-01-02 07:04:32', NULL),
(139, 18, 'upload/products/multi-image/1820146188585741.jpg', '2025-01-02 07:04:32', NULL),
(140, 18, 'upload/products/multi-image/1820146188765333.jpg', '2025-01-02 07:04:32', NULL),
(141, 18, 'upload/products/multi-image/1820146188965332.jpg', '2025-01-02 07:04:32', NULL),
(142, 18, 'upload/products/multi-image/1820146189166856.jpg', '2025-01-02 07:04:32', NULL),
(143, 18, 'upload/products/multi-image/1820146189345291.jpg', '2025-01-02 07:04:33', NULL),
(144, 18, 'upload/products/multi-image/1820146189574578.jpg', '2025-01-02 07:04:33', NULL),
(145, 18, 'upload/products/multi-image/1820146189750670.jpg', '2025-01-02 07:04:33', NULL),
(146, 18, 'upload/products/multi-image/1820146189927636.jpg', '2025-01-02 07:04:33', NULL),
(147, 18, 'upload/products/multi-image/1820146190107756.jpg', '2025-01-02 07:04:33', NULL),
(148, 18, 'upload/products/multi-image/1820146190285801.jpg', '2025-01-02 07:04:33', NULL),
(149, 18, 'upload/products/multi-image/1820146190465547.jpg', '2025-01-02 07:04:34', NULL),
(150, 18, 'upload/products/multi-image/1820146190696973.jpg', '2025-01-02 07:04:34', NULL),
(151, 18, 'upload/products/multi-image/1820146190882447.jpg', '2025-01-02 07:04:34', NULL),
(152, 18, 'upload/products/multi-image/1820146191074369.jpg', '2025-01-02 07:04:34', NULL),
(153, 18, 'upload/products/multi-image/1820146191263410.jpg', '2025-01-02 07:04:34', NULL),
(154, 18, 'upload/products/multi-image/1820146191447648.jpg', '2025-01-02 07:04:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` int(11) DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bukti_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kurir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmed_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processing_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picked_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipped_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivered_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancel_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancel_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancel_reason` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `division_id`, `district_id`, `state_id`, `name`, `email`, `phone`, `post_code`, `address`, `payment_type`, `payment_method`, `transaction_id`, `currency`, `amount`, `order_number`, `bukti_pembayaran`, `invoice_no`, `kurir`, `resi`, `order_date`, `order_month`, `order_year`, `confirmed_date`, `processing_date`, `picked_date`, `shipped_date`, `delivered_date`, `cancel_date`, `cancel_order`, `cancel_reason`, `return_date`, `return_order`, `return_reason`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 2, 4, 'User', 'user@gmail.com', '081563977109', 40972, 'Kp. Cibodas Rt 01 / Rw 16 Desa Cibodas', 'card_1KyekKCN92UgdufCK6TpFZQz', 'Stripe', 'txn_3KyekOCN92UgdufC03IbTlED', 'usd', 256000, '627d33be147ef', NULL, 'ESZ90863831', 'JNE', '12345678', '12 May 2022', 'May', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'selesai', '2022-05-12 09:20:20', '2022-05-12 09:38:05'),
(2, 6, 1, 1, 2, 'User', 'user@gmail.com', '081563977109', 40972, 'Kp. Cibodas Rt 01 / Rw 16 Desa Cibodas', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Rp', 400000, '86129307', NULL, 'ESZ92823617', 'JNT', '12345678', '12 May 2022', 'May', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12 May 2022', '2', 'Sepatunya kurang satu', 'selesai', '2022-05-12 10:16:08', '2022-05-12 10:23:37'),
(3, 6, 1, 1, 2, 'Iceu', 'user@gmail.com', '081563977109', 40973, 'Kp. Pasir Luhur Rt 01 / Rw 16', 'Transfer Bank Manual', 'Transfer Bank Manual', NULL, 'Rp', 184000, '15556661', 'upload/orders/1732641739611373.jpg', 'ESZ66673377', 'Sicepat Express', '12345678', '12 May 2022', 'May', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'selesai', '2022-05-12 10:18:49', '2022-05-12 10:21:49'),
(4, 7, 1, 1, 2, 'Salsa Nur Maulani', 'salsa@gmail.com', '0895335490295', 40973, 'Kp. Pasir Handap Rt 01 / Rw 16', 'card_1KygeKCN92UgdufC973V9YyQ', 'Stripe', 'txn_3KygeMCN92UgdufC01MhxURB', 'usd', 104000, '627d505121eb0', NULL, 'ESZ46378392', 'JNT', '12345678', '12 May 2022', 'May', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ditunda', '2022-05-12 11:22:11', NULL),
(5, 7, 1, 1, 2, 'Salsa Nur Maulani', 'salsa@gmail.com', '0895335490295', 40973, 'Kp. Pasir Handap Rt 01 / Rw 16', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Rp', 280000, '88881899', NULL, 'ESZ58367832', 'Anteraja', '998765432', '12 May 2022', 'May', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dalam perjalanan', '2022-05-20 16:53:39', '2022-05-20 17:14:30'),
(6, 7, 1, 2, 4, 'Salsa Nur Maulani', 'salsa@gmail.com', '0895335490295', 40973, 'Kp. Pasir Handap Rt 01 / Rw 16', 'Transfer Bank Manual', 'Transfer Bank Manual', NULL, 'Rp', 160000, '48117199', 'upload/orders/1732645889136445.jpg', 'ESZ71658085', 'JNE', '12345678', '12 May 2022', 'May', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'selesai', '2022-05-12 11:24:45', '2022-05-20 14:49:13'),
(10, 6, 1, 1, 2, 'User', 'user@gmail.com', '081563977109', 40972, 'Kp. Cibodas Rt 01 / Rw 16 Desa Cibodas', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Rp', 400000, '55582481', NULL, 'ESZ81988075', NULL, NULL, '24 July 2022', 'July', '2022', NULL, NULL, NULL, NULL, NULL, '24 July 2022', '2', 'wraevererbtb', NULL, NULL, NULL, 'cancel', '2022-07-23 20:42:58', '2022-07-23 20:52:22'),
(11, 8, 1, 1, 2, 'Rian Adrian', 'rianaadrian0598@gmail.com', '082117462475', 40294, 'Cluster Rancamanyar A12, Rancamanyar, Baleendah, Bandung Regency, West Java 40375', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Rp', 200000, '69934948', NULL, 'ESZ34126151', NULL, NULL, '23 December 2024', 'December', '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dikemas', '2024-12-23 01:13:20', '2024-12-23 01:18:07'),
(12, 9, 1, 1, 2, 'Aldi rizki nuari', 'aldirizkinuari@gmail.com', '085345679510', 444444, 'bdg', 'Transfer Bank Manual', 'Transfer Bank Manual', NULL, 'Rp', 400000, '55288582', 'upload/orders/1819231930907727.png', 'ESZ24808684', NULL, NULL, '23 December 2024', 'December', '2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ditunda', '2024-12-23 04:52:48', NULL),
(13, 10, 1, 2, 5, 'Rian Adrian', 'admin@admin.com', '082117462475', 40294, 'jl.cicukang no 54 rt1 rw9 arcamanik bandung', 'Transfer Bank Manual', 'Transfer Bank Manual', NULL, 'Rp', 550000, '54615368', 'upload/orders/1820152946498296.png', 'ESZ69929474', NULL, NULL, '02 January 2025', 'January', '2025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ditunda', '2025-01-02 08:51:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `color`, `size`, `qty`, `weight`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 9, 'hitam', '36', '1', '500', 120000.00, '2022-05-12 09:20:26', NULL),
(2, 1, 7, 'hitam', '32', '2', '200', 100000.00, '2022-05-12 09:20:26', NULL),
(3, 2, 5, 'hitam', '36', '2', '500', 200000.00, '2022-05-12 10:16:08', NULL),
(4, 3, 3, 'hitam', '36', '1', '200', 230000.00, '2022-05-12 10:18:55', NULL),
(5, 4, 8, 'hitam', '36', '1', '400', 130000.00, '2022-05-12 11:22:17', NULL),
(6, 5, 6, 'kuning', '36', '1', '500', 280000.00, '2022-05-12 11:23:20', NULL),
(7, 6, 1, 'hitam', '36', '1', '200', 200000.00, '2022-05-12 11:24:49', NULL),
(9, 10, 1, 'hitam', '36', '2', '200', 200000.00, '2022-07-23 20:42:59', NULL),
(10, 11, 12, 'Hitam', 'XL', '1', '300', 200000.00, '2024-12-23 01:13:20', NULL),
(11, 12, 12, 'Hitam', 'XL', '2', '300', 200000.00, '2024-12-23 04:52:52', NULL),
(12, 13, 16, 'Hitam', 'XL', '1', '450', 550000.00, '2025-01-02 08:52:05', NULL);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_short_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_long_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_thambnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_promo` int(11) DEFAULT NULL,
  `new_product` int(11) DEFAULT NULL,
  `new_arrival` int(11) DEFAULT NULL,
  `best_seller` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_id`, `category_id`, `subcategory_id`, `subsubcategory_id`, `product_name`, `product_slug`, `product_code`, `product_qty`, `product_weight`, `product_tags`, `product_size`, `product_color`, `product_price`, `product_discount`, `product_short_desc`, `product_long_desc`, `product_thambnail`, `product_promo`, `new_product`, `new_arrival`, `best_seller`, `status`, `created_at`, `updated_at`) VALUES
(13, 14, 2, 21, 29, 'JA\'FAR SERIES', 'ja\'far-series', '01022025', '100', '450', 'Ja\'far Series.', 'S,M,L,XL,XXL', 'hitam,biru', '550000', NULL, 'Ja\'far Series.', '<p><strong>JA&#39;FAR SERIES CERDAS, PERCAYA DIRI &amp; BERWIBAWA.</strong></p>', 'upload/products/thambnail/1820143045040976.PNG', 1, 1, 1, NULL, 1, '2025-01-02 05:02:22', '2025-01-02 06:14:35'),
(14, 14, 2, 22, 30, 'HUDZAIFAH SERIES', 'hudzaifah-series', '01022025', '100', '450', 'Hudzaifah', 'S ,M,L,XL,XXL', 'hitam,biru', '550000', NULL, 'Integritas Tinggi & Frendly.', '<p><strong>HUDZAIFAH SERIES </strong>Integritas Tinggi &amp; Frendly.</p>', 'upload/products/thambnail/1820142943099737.PNG', NULL, 1, 1, 1, 1, '2025-01-02 06:23:27', '2025-01-02 06:23:27'),
(15, 14, 2, 23, 31, 'UMAR SERIES', 'umar-series', '01022025', '100', '450', 'Umar Series', 'S,M,L,XL,XXL', 'hitam,biru', '550000', NULL, 'Berwibawa, Powerfull & Sedehana.', '<p><strong>UMAR SERIES </strong>BERWIBAWA, POWERFULL &amp; SEDERHANA.</p>', 'upload/products/thambnail/1820143526889838.PNG', 1, 1, 1, NULL, 1, '2025-01-02 06:22:14', NULL),
(16, 14, 2, 27, 35, 'UBAIDAH SERIES', 'ubaidah-series', '01022025', '100', '450', 'Ubaidah Series.', 'S,M,L,XL,XXL', 'hitam,biru', '550000', NULL, 'Cerdas, Inovatif & Optimis.', '<p><strong>UBAIDAH SERIES</strong> CERDAS, INOVATIF &amp; OPTIMIS</p>', 'upload/products/thambnail/1820145330425712.PNG', NULL, 1, 1, NULL, 1, '2025-01-02 06:50:54', NULL),
(17, 14, 2, 28, 36, 'SALMAN SERIES', 'salman-series', '01022025', '100', '450', 'SALMAN SERIES.', 'S,M,L,XL,XXL', 'hitam,biru', '550000', NULL, 'Hangat, Cerdas & Kreatif.', '<p><strong>SALMAN SERIES</strong> HANGAT, CERDAS &amp; KREATIF</p>', 'upload/products/thambnail/1820145934381462.PNG', NULL, 1, 1, NULL, 1, '2025-01-02 07:00:30', NULL),
(18, 14, 2, 29, 37, 'NU\'AIMAN SERIES', 'nu\'aiman-series', '01022025', '100', '450', 'Nu\'aiman Series.', 'S,M,L,XL,XXL', 'hitam,biru', '550000', NULL, 'Ceria, Humanis & Santai.', '<p><strong>NU&#39;AIMAN SERIES</strong> CERIA, HUMANIS &amp; SANTAI.</p>', 'upload/products/thambnail/1820146187739655.PNG', NULL, 1, 1, NULL, 1, '2025-01-02 07:04:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `meta_title`, `meta_author`, `meta_keyword`, `meta_description`, `google_analytics`, `created_at`, `updated_at`) VALUES
(1, 'Jouda|Official', 'Jouda', 'Jouda|store', 'Jouda|Official|Store', 'Jouda', NULL, '2024-12-22 23:40:36');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('14WQT0662BNXx3m5KuiP1uHjVTtHUYMSgAURDboA', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaENyMXRaWGM1Nkd2SjVGdFJtTXlnbFBHTUFrNnpJMHVKZmpXbWJRdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735917192),
('6fJxMTNT6chtGk188R0zcgOxKcmE1Uga2DF66CRU', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicG5yOU1TVzBTeFgyeG1hZlkzWVJaNFhKTGtUQlFmRkpkVzRZbTFsUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735917957),
('B6kS631hQasy0xRe4a46WAdK421yV4Xkskau1lQZ', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWTRuZnlLNld1OHFZak9KMjRYcHQzd2tZUVhGa0xDUW5Wb1owcTFsNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735917764),
('bIbSV1tdSRAiW0hWSF9oU91LEqOLxqaCbJJGDQQ7', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidDF4QWVMV3M1RGlIdVZ0cTE2aHJrMUNObUNaaU5vSm9oYXdCWVhISyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735916041),
('cIO4zri4aSqWwWCF3aiamvGOHAGd5VTQDUK8QlIK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRnM1eGNUS2x1S1VHTmcwZG5aYmpJUFIxRVJhaWNIbExJV3VMQmdjTCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fX0=', 1735921465),
('ctgbT9gTOffd28syHXBCHBBu9CO5kOCNgfYnx2Bx', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib0RGMDRjOFRrdGZCNnFBNDg2OWRydEUyRGg1TXI2aWdyZ1c0cmQ2RyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735919978),
('Fo8vonMr8w51nRR829eFUdPj88nowGGPxarDm2hE', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSmc5QUF2bFlCNHRkM0JVUDdlb240MFo5em94TEp5YlZKQ1JWZXhVYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735917845),
('GdI1qVJXXY6BXhqG959F1fgukxPh7S8wINIYymmk', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoielI0dWNkSEIwNUJPUWlKWjJZbHZ0am12UmdiTFkxdktyZG45aHlJcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735917986),
('h3InNtacil7C5MRcK8tFmCKGArTmMTTbFkyZZ4PL', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid2tkdDBjSXl3OXg2SDZSWklKejkya1V5Q0U4eXA2M0t2cGc4cnVJRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735917901),
('JTnRC4S16vKw88MGpmZjFiJwOojQXiKDgnyix9d8', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNDJCWllOZzExYWNsNjRIZ091RGlhaEZUeGFPNllYUXk5Q1ZXN2FwbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735916979),
('K47vnHZmIMjEWH9ncKQsHnV2g7D7CzQqYsiNJjUs', NULL, '192.168.236.52', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOWZkdTFNUVlNNGJXWEtsUUhCanM3UmVqV0Z2RWJPYUNPaVNuRmxrZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xOTIuMTY4LjIzNi41Mjo5MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1735917139),
('LfN6j0onMx5s9gQSvrPu4bx2VtIFIQ6aZyZE7UpC', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTm5CUkVRUEQwMHY5NWFyVkFwTHJVR3BoS2pEN0lsWkxVM3V6eWtaViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735917653),
('M1UtF6auDVunPfunRwfYdEld0Y8LR0mcmSbUnSa3', 8, '192.168.2.52', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiMFI4bE91VktFaVpWRUVFRGg4QzVzdmg2bUNtMkZ1dGxLZkZRanlHaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly8xOTIuMTY4LjIuNTI6OTAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo4O3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkNVZGZEZVSmg3a2hMNktHTEpSNEdaLjlPT3c4QVkyTVhpT01oemt6dVR0MGUvMnVseVNaRHUiO3M6NDoiY2FydCI7YToxOntzOjc6ImRlZmF1bHQiO086Mjk6IklsbHVtaW5hdGVcU3VwcG9ydFxDb2xsZWN0aW9uIjoyOntzOjg6IgAqAGl0ZW1zIjthOjE6e3M6MzI6IjUzOGRhZDI3NWY1MGIwZmRlMDI5M2NjNTY0OTFmOTEyIjtPOjMyOiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbSI6MTE6e3M6NToicm93SWQiO3M6MzI6IjUzOGRhZDI3NWY1MGIwZmRlMDI5M2NjNTY0OTFmOTEyIjtzOjI6ImlkIjtzOjI6IjE4IjtzOjM6InF0eSI7aToyO3M6NDoibmFtZSI7czoxNToiTlUnQUlNQU4gU0VSSUVTIjtzOjU6InByaWNlIjtkOjU1MDAwMDtzOjY6IndlaWdodCI7ZDo0NTA7czo3OiJvcHRpb25zIjtPOjM5OiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbU9wdGlvbnMiOjI6e3M6ODoiACoAaXRlbXMiO2E6Mzp7czo1OiJpbWFnZSI7czo0NjoidXBsb2FkL3Byb2R1Y3RzL3RoYW1ibmFpbC8xODIwMTQ2MTg3NzM5NjU1LlBORyI7czo1OiJjb2xvciI7czo1OiJoaXRhbSI7czo0OiJzaXplIjtzOjE6IlMiO31zOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7fXM6NzoidGF4UmF0ZSI7aTowO3M6NDk6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQBhc3NvY2lhdGVkTW9kZWwiO047czo0NjoiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAGRpc2NvdW50UmF0ZSI7aTowO3M6ODoiaW5zdGFuY2UiO3M6NzoiZGVmYXVsdCI7fX1zOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7fX19', 1735921792),
('m4Ftz1BAmA2btOFQPgiwIqR1IeS0Bef3eWE7XnkU', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ0VPd25FbExnZ2xDMnJiWXc0RkpyaUw1TEwxYmVVZkNPT1lJa3NPbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735917728),
('maE74M6MSVOGeYRqJF066a4byml88Ihw2TMRTL3I', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT0NLamdHYkdUT3JaWTJrNEZvemRuQXJocjVzQWZhS0lQdVd4WFZCaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735917923),
('MNe4VX5L7JWrhwEeefMZMGebWbwi93FnRA8BtSoT', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidGhLRWJzekxyNTNCM2dYOG1Kb1Y4YU9hcXY1MVFta1RhdXRIaUt4NyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735918698),
('n5VKe8gRU9ogFVhDqnYaONShRmruDNJ3PcTVItJh', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicVNCUmxTeEJVVHhwclJPQk9QNGJuUGt6bDZ2QUp0RU9GcU5KNzM3UyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735918006),
('P2ef34UU703qeSoBxhtgpCvNBgYmI9k2mgBuUEFo', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWmRmUVNodDBNaUNONVNjWEtuaXFLNDVveGlNRjByVE1pUEtoU1hsYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735918674),
('SaZuuqLHFE3dWKttYCkcemonLCckZ321Y1XZjJIO', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQXo5ek1WZmdWWUJXa2YyM2hGYXluTmZWRnV1S0xCU0xyMnlFNUlwZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735917826),
('SiasQy4Gc9OZVchnYosR2WuAl8Td2fwfrCE9RUz6', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRmxzY3o3QVpka1JvbmpQdmRmMXh4ckw5N1E2dWhiVXRCeGFJQ1hXeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735917157),
('td21zqrOoXEWwk6ly7oLpYW2R2SzYJ5jYyCDGm5G', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMGg4UXo3dW9zRXdmUEU4Vk4xdW51dVNxMjNJSWV4QnFwQmpDU0hvRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735917783),
('TO5CrYiSL8TFioVkMKfGhzD2caAiLyJ1BdXoFLQK', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMktJV2hXZmdHVFFzRTdzSWdlQ3puSnZmUzJIcFNUVU53Tmszdk1BUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735918729),
('Ulgo2o4GrORXJTtXR0Ya9FwcJl4rJHamjXSSRrO4', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibEx3dzViWENVMFFUV2ZMdXVCa2M3cUJueGhxOE9IOWxEaDd6SWtxUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735917552),
('uUrgNeTtBNjLBoJIcxdM0whvcRfEVNkPgxjsQkqB', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOHNWTnZacXRPVm9vUW8yZVVLRmNJa3JkbWZIajRKYklvM3A5ekNLMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735919036),
('vhyRkSR06L1LXWqJM1DoT3DBGukhpu8By6XbS8V3', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYjNKbENYZGdFSTVmcW8wY2x3Z3l2WjRoZjBEN0szYjVWWGJrUjhLZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735917127),
('w2EW8KtA6lBLIogjKufaVFMPyQO2X0sJH7q0up2Z', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNFJrZVpOU1Q4MWJLa1A3Mkc1dGo2UXNXbzdUaGNRVjZZVmRVTFc4RiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735917672),
('wKtK88GiWip6ccbw0ZrlALDiXS8zfQKS0biaVSM6', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQkZVc3hUalVSRkZUYzJabXc2eThtQ0tKQnBSeVNCNjlCQTZRa2JWNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735917004),
('WZyTCaFFIVsSgfe8qame4R4IrPZVGKH0G4tAkQuf', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTjg3Nm5iY2dBbUt4WDU4Mm5JSWFxRlo4cHFqd0NsRW8zNFRnd3NQQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735917815),
('Z0LVC8pMCyE4vLK7ARCFmtxZXeBnt7RBbBLQB55e', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY3NJTmh4cVVCZ2daaWlwTU1hSGVFZjUxWjB3QVlUSTBiaVBiOUxPRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735917896),
('z0otJfYDrsw9CPZ5astjBFId36Mc2QSHw2yJ4bpc', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaXRKR3RmWTY5Y3ozSDRKSnhQVHhBcktmdmdkTDZrTU54bkRRQjZ2cyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735918209),
('za8P7FM7VeW879ExuU4mZtFK1mDBGODDiw26jLqL', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVjN5M2NYNUxRVDlRQ2dETkpseG40SWNqNVlkaGNXZGs1ZWZnVXNXeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735917020),
('zjMyrF5I1FZkwsyduCDyHrULyZG9z6j7fKUMawrg', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieGh4STNXekV6TmNZNHVpT3RMRkhnWHYzTVBJWkxrVWRqajN0aTNkSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1735916993);

-- --------------------------------------------------------

--
-- Table structure for table `ship_districts`
--

CREATE TABLE `ship_districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_districts`
--

INSERT INTO `ship_districts` (`id`, `division_id`, `district_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kabupaten Bandung', '2022-03-13 01:50:49', NULL),
(2, 1, 'Kota Bandung', '2025-01-02 00:12:08', '2025-01-02 00:12:08'),
(3, 2, 'Madura', '2022-05-11 01:36:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ship_divisions`
--

CREATE TABLE `ship_divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_divisions`
--

INSERT INTO `ship_divisions` (`id`, `division_name`, `created_at`, `updated_at`) VALUES
(1, 'Jawa Barat', '2022-05-12 01:10:59', '2022-05-12 01:10:59'),
(2, 'Jawa Timur', '2022-05-11 01:36:38', NULL),
(3, 'DKI Jakarta', '2022-05-12 01:10:26', NULL),
(4, 'Aceh', '2024-12-23 01:03:24', NULL),
(5, 'Kalimantan', '2024-12-23 01:03:38', NULL),
(6, 'Jawa Tengah', '2024-12-23 01:03:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ship_states`
--

CREATE TABLE `ship_states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_states`
--

INSERT INTO `ship_states` (`id`, `division_id`, `district_id`, `state_name`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'Ciwidey', '2022-03-13 01:51:18', NULL),
(4, 1, 2, 'Pasirjambu', '2022-05-12 02:24:30', NULL),
(5, 1, 2, 'Arcamanik', '2024-12-23 01:01:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `logo`, `description`, `phone_one`, `phone_two`, `email`, `company_name`, `company_address`, `facebook`, `twitter`, `linkedin`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'upload/logo/1820149648635854.webp', 'JOUDA|OFFICIAL|STORE\r\n adalah sebuah perusahaan yang bergerak di bidang jual beli secara online maupun offline dengan mengamalkan Sunnah to Jannah.', '+628788877289', '+6285345679510', 'Jouda.official@gmail.com', 'JOUDA', 'Cluster Rancamanyar A12, Rancamanyar, Baleendah, Bandung Regency, West Java 40375', 'joudaofficialstore', 'joudaofficialstore', 'joudaofficialstore', 'joudaofficialstore', NULL, '2025-01-02 07:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_img`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(6, 'upload/slider/1820148260185107.PNG', '.', '.', 1, NULL, '2025-01-02 07:37:28'),
(7, 'upload/slider/1820137051632241.jpg', '.', 'Ammar ma\'ruf nahimunkar', 1, NULL, '2025-01-02 04:39:18'),
(8, 'upload/slider/1820148661321406.PNG', '.', '.', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name`, `subcategory_slug`, `created_at`, `updated_at`) VALUES
(15, 2, 'Sunnah', 'sunnah', NULL, NULL),
(16, 7, 'Ja\'far Series', 'ja\'far-series', NULL, '2025-01-02 04:28:25'),
(17, 2, 'Ja\'far Series', 'ja\'far-series', NULL, NULL),
(18, 7, 'Catalog 1', 'catalog-1', NULL, NULL),
(19, 7, 'Catalog 2', 'catalog-2', NULL, NULL),
(20, 7, 'Catalog 3', 'catalog-3', NULL, NULL),
(21, 2, 'Catalog 1', 'catalog-1', NULL, NULL),
(22, 2, 'Catalog 2', 'catalog-2', NULL, NULL),
(23, 2, 'Catalog 3', 'catalog-3', NULL, NULL),
(24, 7, 'Catalog 4', 'catalog-4', NULL, NULL),
(25, 7, 'Catalog 5', 'catalog-5', NULL, NULL),
(26, 7, 'Catalog 6', 'catalog-6', NULL, NULL),
(27, 2, 'Catalog 4', 'catalog-4', NULL, NULL),
(28, 2, 'Catalog 5', 'catalog-5', NULL, NULL),
(29, 2, 'Catalog 6', 'catalog-6', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_categories`
--

CREATE TABLE `sub_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_sub_categories`
--

INSERT INTO `sub_sub_categories` (`id`, `category_id`, `subcategory_id`, `subsubcategory_name`, `subsubcategory_slug`, `created_at`, `updated_at`) VALUES
(23, 2, 15, 'Gamis Pria Dewasa', 'gamis-pria-dewasa', NULL, NULL),
(24, 7, 16, 'Ja\'far Series', 'ja\'far-series', NULL, '2025-01-02 03:18:21'),
(25, 7, 16, 'Hudzaifah', 'hudzaifah', NULL, NULL),
(26, 7, 18, 'Ja\'far Series', 'ja\'far-series', NULL, NULL),
(27, 7, 19, 'Hudzaifah', 'hudzaifah', NULL, NULL),
(28, 7, 20, 'Umar', 'umar', NULL, NULL),
(29, 2, 21, 'Ja\'far Series', 'ja\'far-series', NULL, NULL),
(30, 2, 22, 'Hudzaifah', 'hudzaifah', NULL, NULL),
(31, 2, 23, 'Umar', 'umar', NULL, NULL),
(32, 7, 24, 'Ubaidah', 'ubaidah', NULL, NULL),
(33, 7, 25, 'Salman', 'salman', NULL, NULL),
(34, 7, 26, 'Nu\'aiman', 'nu\'aiman', NULL, NULL),
(35, 2, 27, 'Ubaidah', 'ubaidah', NULL, '2025-01-02 06:46:24'),
(36, 2, 28, 'Salman', 'salman', NULL, '2025-01-02 06:56:36'),
(37, 2, 29, 'Nu\'aiman', 'nu\'aiman', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_seen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `post_code`, `address`, `last_seen`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(8, 'Rian Adrian', 'rianaadrian0598@gmail.com', '082117462475', NULL, NULL, '2025-01-03 16:29:51', NULL, '$2y$10$5VFdFUJh7khL6KGLJR4GZ.9OOw8AY2MXiOMhzkzuTt0e/2ulySZDu', NULL, NULL, NULL, NULL, NULL, '2024-12-23 00:56:21', '2025-01-03 09:29:51'),
(9, 'Aldi rizki nuari', 'aldirizkinuari@gmail.com', '085345679510', NULL, NULL, '2024-12-23 12:20:32', NULL, '$2y$10$TeVsL49xSfxDFwSRIme3geApB6Aojcvsq.Pe4S4Yh244yvTr72PNa', NULL, NULL, NULL, NULL, NULL, '2024-12-23 04:42:04', '2024-12-23 05:20:32'),
(10, 'Rian Adrian', 'admin@admin.com', '082117462475', NULL, NULL, '2025-01-02 15:59:35', NULL, '$2y$10$4BUONrNYyvM0Maq/CdTKKe/uT9V/pcQc.lxvD8sAJ49P1iryRYOMa', NULL, NULL, NULL, NULL, '202501020702Png jouda .png', '2025-01-02 00:02:01', '2025-01-02 08:59:35');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(3, 1, 9, '2022-05-09 21:40:04', NULL),
(4, 1, 8, '2022-05-09 21:49:58', NULL),
(5, 1, 5, '2022-05-09 22:12:17', NULL),
(8, 8, 18, '2025-01-03 08:47:28', NULL),
(9, 8, 17, '2025-01-03 08:47:30', NULL),
(10, 8, 16, '2025-01-03 08:47:32', NULL);

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
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multi_imgs`
--
ALTER TABLE `multi_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `ship_districts`
--
ALTER TABLE `ship_districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_divisions`
--
ALTER TABLE `ship_divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_states`
--
ALTER TABLE `ship_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `multi_imgs`
--
ALTER TABLE `multi_imgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ship_districts`
--
ALTER TABLE `ship_districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ship_divisions`
--
ALTER TABLE `ship_divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ship_states`
--
ALTER TABLE `ship_states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
