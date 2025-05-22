-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2025 at 03:15 PM
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
-- Database: `terasmu`
--

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
-- Table structure for table `furnitur`
--

CREATE TABLE `furnitur` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `original_price` decimal(15,2) DEFAULT NULL,
  `label` enum('Terlaku','Baru','Diskon','Terbatas') DEFAULT NULL,
  `rating` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `rating_count` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `image_path` varchar(255) DEFAULT NULL,
  `is_available` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `furnitur`
--

INSERT INTO `furnitur` (`id`, `name`, `category`, `price`, `original_price`, `label`, `rating`, `rating_count`, `image_path`, `is_available`, `created_at`, `updated_at`) VALUES
(1, 'Tempat Tidur Minimalis', 'Tempat Tidur', 3868228.00, NULL, NULL, 2, 83, 'images/tempat tidur_minimalis_1.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(2, 'Nakas Minimalis', 'Nakas', 2808399.00, 3058488.00, 'Baru', 5, 98, 'images/nakas_minimalis_2.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(3, 'Meja Belajar Jepang', 'Meja Belajar', 4921007.00, 6036930.00, NULL, 1, 170, 'images/meja belajar_jepang_3.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(4, 'Buffet Industri', 'Buffet', 4180691.00, NULL, 'Terlaku', 3, 67, 'images/buffet_industri_4.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(5, 'Nakas Klasik', 'Nakas', 3114812.00, NULL, 'Baru', 4, 11, 'images/nakas_klasik_5.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(6, 'Rak Klasik', 'Rak', 4356321.00, 5154023.00, NULL, 3, 143, 'images/rak_klasik_6.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(7, 'Kabinet Modern', 'Kabinet', 4552638.00, 5564687.00, 'Diskon', 2, 113, 'images/kabinet_modern_7.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(8, 'Tempat Tidur Klasik', 'Tempat Tidur', 3245248.00, NULL, 'Diskon', 2, 157, 'images/tempat tidur_klasik_8.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(9, 'Buffet Industri', 'Buffet', 3128400.00, NULL, 'Baru', 4, 93, 'images/buffet_industri_9.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(10, 'Meja Skandinavia', 'Meja', 2488252.00, NULL, NULL, 1, 17, 'images/meja_skandinavia_10.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(11, 'Buffet Besi', 'Buffet', 3227692.00, 4728606.00, NULL, 2, 37, 'images/buffet_besi_11.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(12, 'Sofa Kayu', 'Sofa', 2814365.00, NULL, 'Terlaku', 2, 47, 'images/sofa_kayu_12.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(13, 'Kursi Makan Jepang', 'Kursi Makan', 4550043.00, NULL, 'Baru', 4, 149, 'images/kursi makan_jepang_13.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(14, 'Meja Kerja Minimalis', 'Meja Kerja', 3442898.00, 4979497.00, 'Terbatas', 1, 142, 'images/meja kerja_minimalis_14.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(15, 'Kabinet Kontemporer', 'Kabinet', 4709309.00, NULL, 'Terbatas', 3, 25, 'images/kabinet_kontemporer_15.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(16, 'Meja Rias Modern', 'Meja Rias', 1056159.00, NULL, 'Baru', 5, 35, 'images/meja rias_modern_16.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(17, 'Laci Minimalis', 'Laci', 3887756.00, 5707885.00, 'Baru', 4, 87, 'images/laci_minimalis_17.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(18, 'Kursi Makan Besi', 'Kursi Makan', 1771913.00, 2565082.00, 'Diskon', 4, 68, 'images/kursi makan_besi_18.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(19, 'Meja Lipat Kontemporer', 'Meja Lipat', 3240364.00, NULL, 'Terbatas', 5, 66, 'images/meja lipat_kontemporer_19.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(20, 'Meja Lipat Besi', 'Meja Lipat', 1777810.00, 3186126.00, 'Terbatas', 1, 198, 'images/meja lipat_besi_20.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(21, 'Nakas Rotan', 'Nakas', 2361233.00, 2715117.00, 'Terbatas', 2, 155, 'images/nakas_rotan_21.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(22, 'Rak Jepang', 'Rak', 2138953.00, 3791466.00, 'Diskon', 5, 166, 'images/rak_jepang_22.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(23, 'Lemari Klasik', 'Lemari', 4528314.00, 5659538.00, 'Baru', 1, 67, 'images/lemari_klasik_23.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(24, 'Kursi Rotan', 'Kursi', 1582740.00, NULL, NULL, 1, 80, 'images/kursi_rotan_24.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(25, 'Lemari Dapur Rotan', 'Lemari Dapur', 3532925.00, 4418125.00, 'Diskon', 5, 193, 'images/lemari dapur_rotan_25.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(26, 'Rak Sepatu Modern', 'Rak Sepatu', 2258202.00, 2667044.00, 'Terlaku', 5, 191, 'images/rak sepatu_modern_26.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(27, 'Kursi Kayu', 'Kursi', 2997479.00, 3687274.00, 'Terbatas', 4, 43, 'images/kursi_kayu_27.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(28, 'Kabinet Kayu', 'Kabinet', 4573660.00, 6236003.00, NULL, 3, 83, 'images/kabinet_kayu_28.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(29, 'Kursi Makan Minimalis', 'Kursi Makan', 2084848.00, NULL, 'Baru', 4, 140, 'images/kursi makan_minimalis_29.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(30, 'Rak Sepatu Skandinavia', 'Rak Sepatu', 2482597.00, 3157088.00, 'Terbatas', 1, 14, 'images/rak sepatu_skandinavia_30.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(31, 'Rak Sepatu Besi', 'Rak Sepatu', 3471591.00, 5250935.00, 'Diskon', 2, 80, 'images/rak sepatu_besi_31.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(32, 'Nakas Jepan', 'Nakas', 1441561.00, 2283134.00, 'Diskon', 3, 94, 'images/nakas_jepang_32.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(33, 'Tempat Tidur Rotan', 'Tempat Tidur', 1889127.00, NULL, NULL, 2, 163, 'images/tempat tidur_rotan_33.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(34, 'Kursi Santai Rotan', 'Kursi Santai', 3772397.00, 3915871.00, 'Diskon', 1, 20, 'images/kursi santai_rotan_34.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(35, 'Tempat Tidur Skandinavia', 'Tempat Tidur', 3647553.00, 4308605.00, 'Baru', 5, 45, 'images/tempat tidur_skandinavia_35.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(36, 'Kursi Makan Skandinavia', 'Kursi Makan', 2590611.00, 2657547.00, NULL, 4, 98, 'images/kursi makan_skandinavia_36.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(37, 'Bangku Klasik', 'Bangku', 4910625.00, 5663963.00, 'Diskon', 5, 70, 'images/bangku_klasik_37.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(38, 'Rak Sepatu Industri', 'Rak Sepatu', 3399138.00, NULL, 'Baru', 2, 99, 'images/rak sepatu_industri_38.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(39, 'Meja Lipat Jepang', 'Meja Lipat', 4061229.00, NULL, 'Diskon', 4, 171, 'images/meja lipat_jepang_39.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(40, 'Sofa Skandinavia', 'Sofa', 2192992.00, NULL, 'Baru', 1, 147, 'images/sofa_skandinavia_40.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(41, 'Tempat Tidur Besi', 'Tempat Tidur', 4272114.00, 5217149.00, 'Baru', 3, 58, 'images/tempat tidur_besi_41.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(42, 'Laci Minimalis', 'Laci', 1777955.00, NULL, 'Baru', 3, 113, 'images/laci_minimalis_42.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(43, 'Meja Sudut Minimalis', 'Meja Sudut', 1955374.00, 3227695.00, 'Diskon', 4, 105, 'images/meja sudut_minimalis_43.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(44, 'Kabinet Besi', 'Kabinet', 2836041.00, NULL, 'Baru', 5, 200, 'images/kabinet_besi_44.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(45, 'Kursi Santai Kayu', 'Kursi Santai', 2243993.00, 2407766.00, 'Terlaku', 1, 197, 'images/kursi santai_kayu_45.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(46, 'Meja Sudut Industri', 'Meja Sudut', 1932033.00, 3883128.00, 'Baru', 2, 132, 'images/meja sudut_industri_46.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(47, 'Meja Rias Klasik', 'Meja Rias', 2727335.00, 4677379.00, NULL, 4, 141, 'images/meja rias_klasik_47.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(48, 'Rak Klasik', 'Rak', 2847577.00, 4143152.00, 'Baru', 2, 101, 'images/rak_klasik_48.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(49, 'Bangku Kayu', 'Bangku', 2106225.00, 3455707.00, NULL, 3, 142, 'images/bangku_kayu_49.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(50, 'Nakas Jepang', 'Nakas', 1928504.00, NULL, 'Diskon', 3, 5, 'images/nakas_jepang_50.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(51, 'Tempat Tidur Minimalis', 'Tempat Tidur', 3868228.00, NULL, NULL, 2, 83, 'images/tempat tidur_minimalis_1.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(52, 'Nakas Minimalis', 'Nakas', 2808399.00, 3058488.00, 'Baru', 5, 98, 'images/nakas_minimalis_2.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(53, 'Meja Belajar Jepang', 'Meja Belajar', 4921007.00, 6036930.00, NULL, 1, 170, 'images/meja belajar_jepang_3.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(54, 'Buffet Industri', 'Buffet', 4180691.00, NULL, 'Terlaku', 3, 67, 'images/buffet_industri_4.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(55, 'Nakas Klasik', 'Nakas', 3114812.00, NULL, 'Baru', 4, 11, 'images/nakas_klasik_5.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(56, 'Rak Klasik', 'Rak', 4356321.00, 5154023.00, NULL, 3, 143, 'images/rak_klasik_6.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(57, 'Kabinet Modern', 'Kabinet', 4552638.00, 5564687.00, 'Diskon', 2, 113, 'images/kabinet_modern_7.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(58, 'Tempat Tidur Klasik', 'Tempat Tidur', 3245248.00, NULL, 'Diskon', 2, 157, 'images/tempat tidur_klasik_8.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(59, 'Buffet Industri', 'Buffet', 3128400.00, NULL, 'Baru', 4, 93, 'images/buffet_industri_9.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(60, 'Meja Skandinavia', 'Meja', 2488252.00, NULL, NULL, 1, 17, 'images/meja_skandinavia_10.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(61, 'Buffet Besi', 'Buffet', 3227692.00, 4728606.00, NULL, 2, 37, 'images/buffet_besi_11.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(62, 'Sofa Kayu', 'Sofa', 2814365.00, NULL, 'Terlaku', 2, 47, 'images/sofa_kayu_12.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(63, 'Kursi Makan Jepang', 'Kursi Makan', 4550043.00, NULL, 'Baru', 4, 149, 'images/kursi makan_jepang_13.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(64, 'Meja Kerja Minimalis', 'Meja Kerja', 3442898.00, 4979497.00, 'Terbatas', 1, 142, 'images/meja kerja_minimalis_14.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(65, 'Kabinet Kontemporer', 'Kabinet', 4709309.00, NULL, 'Terbatas', 3, 25, 'images/kabinet_kontemporer_15.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(66, 'Meja Rias Modern', 'Meja Rias', 1056159.00, NULL, 'Baru', 5, 35, 'images/meja rias_modern_16.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(67, 'Laci Minimalis', 'Laci', 3887756.00, 5707885.00, 'Baru', 4, 87, 'images/laci_minimalis_17.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(68, 'Kursi Makan Besi', 'Kursi Makan', 1771913.00, 2565082.00, 'Diskon', 4, 68, 'images/kursi makan_besi_18.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(69, 'Meja Lipat Kontemporer', 'Meja Lipat', 3240364.00, NULL, 'Terbatas', 5, 66, 'images/meja lipat_kontemporer_19.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(70, 'Meja Lipat Besi', 'Meja Lipat', 1777810.00, 3186126.00, 'Terbatas', 1, 198, 'images/meja lipat_besi_20.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(71, 'Nakas Rotan', 'Nakas', 2361233.00, 2715117.00, 'Terbatas', 2, 155, 'images/nakas_rotan_21.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(72, 'Rak Jepang', 'Rak', 2138953.00, 3791466.00, 'Diskon', 5, 166, 'images/rak_jepang_22.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(73, 'Lemari Klasik', 'Lemari', 4528314.00, 5659538.00, 'Baru', 1, 67, 'images/lemari_klasik_23.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(74, 'Kursi Rotan', 'Kursi', 1582740.00, NULL, NULL, 1, 80, 'images/kursi_rotan_24.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(75, 'Lemari Dapur Rotan', 'Lemari Dapur', 3532925.00, 4418125.00, 'Diskon', 5, 193, 'images/lemari dapur_rotan_25.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(76, 'Rak Sepatu Modern', 'Rak Sepatu', 2258202.00, 2667044.00, 'Terlaku', 5, 191, 'images/rak sepatu_modern_26.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(77, 'Kursi Kayu', 'Kursi', 2997479.00, 3687274.00, 'Terbatas', 4, 43, 'images/kursi_kayu_27.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(78, 'Kabinet Kayu', 'Kabinet', 4573660.00, 6236003.00, NULL, 3, 83, 'images/kabinet_kayu_28.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(79, 'Kursi Makan Minimalis', 'Kursi Makan', 2084848.00, NULL, 'Baru', 4, 140, 'images/kursi makan_minimalis_29.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(80, 'Rak Sepatu Skandinavia', 'Rak Sepatu', 2482597.00, 3157088.00, 'Terbatas', 1, 14, 'images/rak sepatu_skandinavia_30.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(81, 'Rak Sepatu Besi', 'Rak Sepatu', 3471591.00, 5250935.00, 'Diskon', 2, 80, 'images/rak sepatu_besi_31.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(82, 'Nakas Jepan', 'Nakas', 1441561.00, 2283134.00, 'Diskon', 3, 94, 'images/nakas_jepang_32.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(83, 'Tempat Tidur Rotan', 'Tempat Tidur', 1889127.00, NULL, NULL, 2, 163, 'images/tempat tidur_rotan_33.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(84, 'Kursi Santai Rotan', 'Kursi Santai', 3772397.00, 3915871.00, 'Diskon', 1, 20, 'images/kursi santai_rotan_34.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(85, 'Tempat Tidur Skandinavia', 'Tempat Tidur', 3647553.00, 4308605.00, 'Baru', 5, 45, 'images/tempat tidur_skandinavia_35.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(86, 'Kursi Makan Skandinavia', 'Kursi Makan', 2590611.00, 2657547.00, NULL, 4, 98, 'images/kursi makan_skandinavia_36.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(87, 'Bangku Klasik', 'Bangku', 4910625.00, 5663963.00, 'Diskon', 5, 70, 'images/bangku_klasik_37.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(88, 'Rak Sepatu Industri', 'Rak Sepatu', 3399138.00, NULL, 'Baru', 2, 99, 'images/rak sepatu_industri_38.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(89, 'Meja Lipat Jepang', 'Meja Lipat', 4061229.00, NULL, 'Diskon', 4, 171, 'images/meja lipat_jepang_39.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(90, 'Sofa Skandinavia', 'Sofa', 2192992.00, NULL, 'Baru', 1, 147, 'images/sofa_skandinavia_40.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(91, 'Tempat Tidur Besi', 'Tempat Tidur', 4272114.00, 5217149.00, 'Baru', 3, 58, 'images/tempat tidur_besi_41.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(92, 'Laci Minimalis', 'Laci', 1777955.00, NULL, 'Baru', 3, 113, 'images/laci_minimalis_42.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(93, 'Meja Sudut Minimalis', 'Meja Sudut', 1955374.00, 3227695.00, 'Diskon', 4, 105, 'images/meja sudut_minimalis_43.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(94, 'Kabinet Besi', 'Kabinet', 2836041.00, NULL, 'Baru', 5, 200, 'images/kabinet_besi_44.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(95, 'Kursi Santai Kayu', 'Kursi Santai', 2243993.00, 2407766.00, 'Terlaku', 1, 197, 'images/kursi santai_kayu_45.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(96, 'Meja Sudut Industri', 'Meja Sudut', 1932033.00, 3883128.00, 'Baru', 2, 132, 'images/meja sudut_industri_46.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(97, 'Meja Rias Klasik', 'Meja Rias', 2727335.00, 4677379.00, NULL, 4, 141, 'images/meja rias_klasik_47.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(98, 'Rak Klasik', 'Rak', 2847577.00, 4143152.00, 'Baru', 2, 101, 'images/rak_klasik_48.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(99, 'Bangku Kayu', 'Bangku', 2106225.00, 3455707.00, NULL, 3, 142, 'images/bangku_kayu_49.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(100, 'Nakas Jepang', 'Nakas', 1928504.00, NULL, 'Diskon', 3, 5, 'images/nakas_jepang_50.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(101, 'Tempat Tidur Minimalis', 'Tempat Tidur', 3868228.00, NULL, NULL, 2, 83, 'images/tempat tidur_minimalis_1.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(102, 'Nakas Minimalis', 'Nakas', 2808399.00, 3058488.00, 'Baru', 5, 98, 'images/nakas_minimalis_2.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(103, 'Meja Belajar Jepang', 'Meja Belajar', 4921007.00, 6036930.00, NULL, 1, 170, 'images/meja belajar_jepang_3.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(104, 'Buffet Industri', 'Buffet', 4180691.00, NULL, 'Terlaku', 3, 67, 'images/buffet_industri_4.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(105, 'Nakas Klasik', 'Nakas', 3114812.00, NULL, 'Baru', 4, 11, 'images/nakas_klasik_5.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(106, 'Rak Klasik', 'Rak', 4356321.00, 5154023.00, NULL, 3, 143, 'images/rak_klasik_6.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(107, 'Kabinet Modern', 'Kabinet', 4552638.00, 5564687.00, 'Diskon', 2, 113, 'images/kabinet_modern_7.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(108, 'Tempat Tidur Klasik', 'Tempat Tidur', 3245248.00, NULL, 'Diskon', 2, 157, 'images/tempat tidur_klasik_8.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(109, 'Buffet Industri', 'Buffet', 3128400.00, NULL, 'Baru', 4, 93, 'images/buffet_industri_9.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(110, 'Meja Skandinavia', 'Meja', 2488252.00, NULL, NULL, 1, 17, 'images/meja_skandinavia_10.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(111, 'Buffet Besi', 'Buffet', 3227692.00, 4728606.00, NULL, 2, 37, 'images/buffet_besi_11.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(112, 'Sofa Kayu', 'Sofa', 2814365.00, NULL, 'Terlaku', 2, 47, 'images/sofa_kayu_12.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(113, 'Kursi Makan Jepang', 'Kursi Makan', 4550043.00, NULL, 'Baru', 4, 149, 'images/kursi makan_jepang_13.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(114, 'Meja Kerja Minimalis', 'Meja Kerja', 3442898.00, 4979497.00, 'Terbatas', 1, 142, 'images/meja kerja_minimalis_14.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(115, 'Kabinet Kontemporer', 'Kabinet', 4709309.00, NULL, 'Terbatas', 3, 25, 'images/kabinet_kontemporer_15.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(116, 'Meja Rias Modern', 'Meja Rias', 1056159.00, NULL, 'Baru', 5, 35, 'images/meja rias_modern_16.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(117, 'Laci Minimalis', 'Laci', 3887756.00, 5707885.00, 'Baru', 4, 87, 'images/laci_minimalis_17.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(118, 'Kursi Makan Besi', 'Kursi Makan', 1771913.00, 2565082.00, 'Diskon', 4, 68, 'images/kursi makan_besi_18.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(119, 'Meja Lipat Kontemporer', 'Meja Lipat', 3240364.00, NULL, 'Terbatas', 5, 66, 'images/meja lipat_kontemporer_19.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(120, 'Meja Lipat Besi', 'Meja Lipat', 1777810.00, 3186126.00, 'Terbatas', 1, 198, 'images/meja lipat_besi_20.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(121, 'Nakas Rotan', 'Nakas', 2361233.00, 2715117.00, 'Terbatas', 2, 155, 'images/nakas_rotan_21.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(122, 'Rak Jepang', 'Rak', 2138953.00, 3791466.00, 'Diskon', 5, 166, 'images/rak_jepang_22.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(123, 'Lemari Klasik', 'Lemari', 4528314.00, 5659538.00, 'Baru', 1, 67, 'images/lemari_klasik_23.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(124, 'Kursi Rotan', 'Kursi', 1582740.00, NULL, NULL, 1, 80, 'images/kursi_rotan_24.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(125, 'Lemari Dapur Rotan', 'Lemari Dapur', 3532925.00, 4418125.00, 'Diskon', 5, 193, 'images/lemari dapur_rotan_25.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(126, 'Rak Sepatu Modern', 'Rak Sepatu', 2258202.00, 2667044.00, 'Terlaku', 5, 191, 'images/rak sepatu_modern_26.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(127, 'Kursi Kayu', 'Kursi', 2997479.00, 3687274.00, 'Terbatas', 4, 43, 'images/kursi_kayu_27.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(128, 'Kabinet Kayu', 'Kabinet', 4573660.00, 6236003.00, NULL, 3, 83, 'images/kabinet_kayu_28.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(129, 'Kursi Makan Minimalis', 'Kursi Makan', 2084848.00, NULL, 'Baru', 4, 140, 'images/kursi makan_minimalis_29.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(130, 'Rak Sepatu Skandinavia', 'Rak Sepatu', 2482597.00, 3157088.00, 'Terbatas', 1, 14, 'images/rak sepatu_skandinavia_30.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(131, 'Rak Sepatu Besi', 'Rak Sepatu', 3471591.00, 5250935.00, 'Diskon', 2, 80, 'images/rak sepatu_besi_31.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(132, 'Nakas Jepan', 'Nakas', 1441561.00, 2283134.00, 'Diskon', 3, 94, 'images/nakas_jepang_32.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(133, 'Tempat Tidur Rotan', 'Tempat Tidur', 1889127.00, NULL, NULL, 2, 163, 'images/tempat tidur_rotan_33.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(134, 'Kursi Santai Rotan', 'Kursi Santai', 3772397.00, 3915871.00, 'Diskon', 1, 20, 'images/kursi santai_rotan_34.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(135, 'Tempat Tidur Skandinavia', 'Tempat Tidur', 3647553.00, 4308605.00, 'Baru', 5, 45, 'images/tempat tidur_skandinavia_35.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(136, 'Kursi Makan Skandinavia', 'Kursi Makan', 2590611.00, 2657547.00, NULL, 4, 98, 'images/kursi makan_skandinavia_36.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(137, 'Bangku Klasik', 'Bangku', 4910625.00, 5663963.00, 'Diskon', 5, 70, 'images/bangku_klasik_37.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(138, 'Rak Sepatu Industri', 'Rak Sepatu', 3399138.00, NULL, 'Baru', 2, 99, 'images/rak sepatu_industri_38.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(139, 'Meja Lipat Jepang', 'Meja Lipat', 4061229.00, NULL, 'Diskon', 4, 171, 'images/meja lipat_jepang_39.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(140, 'Sofa Skandinavia', 'Sofa', 2192992.00, NULL, 'Baru', 1, 147, 'images/sofa_skandinavia_40.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(141, 'Tempat Tidur Besi', 'Tempat Tidur', 4272114.00, 5217149.00, 'Baru', 3, 58, 'images/tempat tidur_besi_41.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(142, 'Laci Minimalis', 'Laci', 1777955.00, NULL, 'Baru', 3, 113, 'images/laci_minimalis_42.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(143, 'Meja Sudut Minimalis', 'Meja Sudut', 1955374.00, 3227695.00, 'Diskon', 4, 105, 'images/meja sudut_minimalis_43.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(144, 'Kabinet Besi', 'Kabinet', 2836041.00, NULL, 'Baru', 5, 200, 'images/kabinet_besi_44.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(145, 'Kursi Santai Kayu', 'Kursi Santai', 2243993.00, 2407766.00, 'Terlaku', 1, 197, 'images/kursi santai_kayu_45.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(146, 'Meja Sudut Industri', 'Meja Sudut', 1932033.00, 3883128.00, 'Baru', 2, 132, 'images/meja sudut_industri_46.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(147, 'Meja Rias Klasik', 'Meja Rias', 2727335.00, 4677379.00, NULL, 4, 141, 'images/meja rias_klasik_47.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(148, 'Rak Klasik', 'Rak', 2847577.00, 4143152.00, 'Baru', 2, 101, 'images/rak_klasik_48.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(149, 'Bangku Kayu', 'Bangku', 2106225.00, 3455707.00, NULL, 3, 142, 'images/bangku_kayu_49.jpg', 1, '2025-05-14 18:22:04', '2025-05-14 18:22:04'),
(150, 'Nakas Jepang', 'Nakas', 1928504.00, NULL, 'Diskon', 3, 5, 'images/nakas_jepang_50.jpg', 0, '2025-05-14 18:22:04', '2025-05-14 18:22:04');

-- --------------------------------------------------------

--
-- Table structure for table `furnitur_details`
--

CREATE TABLE `furnitur_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `furnitur_id` bigint(20) UNSIGNED NOT NULL,
  `full_description` longtext DEFAULT NULL,
  `specifications` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`specifications`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `furnitur_details`
--

INSERT INTO `furnitur_details` (`id`, `furnitur_id`, `full_description`, `specifications`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tempat Tidur Minimalis dengan desain modern yang elegan, terbuat dari kayu berkualitas tinggi yang tahan lama dan nyaman untuk istirahat Anda.', '{\"Material\":\"Kayu Mahoni\",\"Dimensions\":\"200cm x 160cm x 40cm\",\"Weight\":\"40kg\",\"Finish\":\"Lacquer\",\"Color\":\"Coklat Muda\"}', '2025-05-14 19:05:35', '2025-05-14 19:05:35'),
(2, 2, 'Nakas Minimalis dengan desain simple dan fungsional, dilengkapi dengan dua laci untuk menyimpan barang-barang kecil Anda dengan rapi.', '{\"Material\":\"Kayu Jati\",\"Dimensions\":\"50cm x 40cm x 60cm\",\"Weight\":\"15kg\",\"Color\":\"Coklat Tua\",\"Drawers\":2}', '2025-05-14 19:05:35', '2025-05-14 19:05:35'),
(3, 3, 'Meja Belajar Jepang yang ergonomis dengan ruang penyimpanan praktis, cocok untuk menciptakan suasana belajar yang nyaman.', '{\"Material\":\"Kayu Pinus\",\"Dimensions\":\"120cm x 60cm x 75cm\",\"Weight\":\"25kg\",\"Color\":\"Natural Wood\",\"Features\":\"Ruang penyimpanan di bawah meja\"}', '2025-05-14 19:05:35', '2025-05-14 19:05:35'),
(4, 4, 'Buffet Industri dengan perpaduan besi dan kayu reklamasi yang kokoh dan stylish, ideal untuk ruang dengan tema industrial.', '{\"Material\":\"Besi dan Kayu Reklamasi\",\"Dimensions\":\"150cm x 45cm x 80cm\",\"Weight\":\"55kg\",\"Color\":\"Hitam dan Coklat\",\"Storage\":\"3 laci dan 2 rak\"}', '2025-05-14 19:05:35', '2025-05-14 19:05:35'),
(5, 5, 'Nakas Klasik dengan desain tradisional, memberikan sentuhan elegan dan kehangatan di kamar tidur Anda.', '{\"Material\":\"Kayu Mahoni\",\"Dimensions\":\"55cm x 45cm x 65cm\",\"Weight\":\"18kg\",\"Color\":\"Coklat Gelap\",\"Drawers\":3}', '2025-05-14 19:05:35', '2025-05-14 19:05:35'),
(6, 6, 'Rak Klasik yang kuat dan tahan lama, cocok untuk menyimpan buku dan barang dekorasi dengan gaya elegan.', '{\"Material\":\"Kayu Mahoni\",\"Dimensions\":\"180cm x 60cm x 30cm\",\"Weight\":\"30kg\",\"Color\":\"Coklat Tua\",\"Shelves\":5}', '2025-05-14 19:05:35', '2025-05-14 19:05:35'),
(7, 7, 'Kabinet Modern dengan desain minimalis dan fungsional, memberikan solusi penyimpanan yang praktis dan estetis.', '{\"Material\":\"Kayu MDF\",\"Dimensions\":\"120cm x 40cm x 80cm\",\"Weight\":\"25kg\",\"Color\":\"Putih\",\"Doors\":2}', '2025-05-14 19:05:35', '2025-05-14 19:05:35'),
(8, 8, 'Tempat Tidur Klasik dengan bahan berkualitas, memberikan kenyamanan maksimal dan tampilan elegan di kamar Anda.', '{\"Material\":\"Kayu Jati\",\"Dimensions\":\"200cm x 160cm x 40cm\",\"Weight\":\"45kg\",\"Color\":\"Coklat Tua\",\"Finish\":\"Polish\"}', '2025-05-14 19:05:35', '2025-05-14 19:05:35'),
(9, 9, 'Buffet Industri dengan desain yang kuat dan kokoh, sempurna untuk penyimpanan tambahan di ruang makan Anda.', '{\"Material\":\"Besi dan Kayu\",\"Dimensions\":\"140cm x 45cm x 75cm\",\"Weight\":\"50kg\",\"Color\":\"Hitam\",\"Drawers\":4}', '2025-05-14 19:05:35', '2025-05-14 19:05:35'),
(10, 10, 'Meja Skandinavia dengan desain minimalis dan fungsional, cocok untuk ruang kerja yang nyaman dan terang.', '{\"Material\":\"Kayu Pinus\",\"Dimensions\":\"120cm x 60cm x 75cm\",\"Weight\":\"22kg\",\"Color\":\"Putih\",\"Finish\":\"Matte\"}', '2025-05-14 19:05:35', '2025-05-14 19:05:35'),
(11, 11, 'Buffet Besi dengan desain industrial kuat dan tahan lama, ideal untuk kebutuhan penyimpanan yang stylish dan fungsional.', '{\"Material\":\"Besi\",\"Dimensions\":\"130cm x 45cm x 80cm\",\"Weight\":\"60kg\",\"Color\":\"Hitam Matte\",\"Storage\":\"3 laci dan rak\"}', '2025-05-14 19:05:35', '2025-05-14 19:05:35'),
(12, 12, 'Sofa Kayu dengan desain sederhana dan nyaman, cocok untuk ruang tamu dengan suasana hangat dan alami.', '{\"Material\":\"Kayu Jati dan Kain\",\"Dimensions\":\"180cm x 80cm x 75cm\",\"Weight\":\"40kg\",\"Color\":\"Coklat dan Beige\"}', '2025-05-14 19:05:35', '2025-05-14 19:05:35'),
(13, 13, 'Kursi Makan Jepang dengan desain ergonomis, terbuat dari kayu berkualitas, nyaman dan tahan lama untuk penggunaan sehari-hari.', '{\"Material\":\"Kayu Pinus\",\"Dimensions\":\"45cm x 45cm x 90cm\",\"Weight\":\"10kg\",\"Color\":\"Natural Wood\"}', '2025-05-14 19:05:35', '2025-05-14 19:05:35'),
(14, 14, 'Meja Kerja Minimalis dengan desain simpel dan modern, memberikan kenyamanan saat bekerja atau belajar di rumah.', '{\"Material\":\"Kayu MDF\",\"Dimensions\":\"140cm x 70cm x 75cm\",\"Weight\":\"30kg\",\"Color\":\"Putih\",\"Features\":\"Rak bawah meja\"}', '2025-05-14 19:05:35', '2025-05-14 19:05:35'),
(15, 15, 'Kabinet Kontemporer dengan desain stylish dan fungsional, menyediakan ruang penyimpanan yang luas dan rapi.', '{\"Material\":\"Kayu MDF\",\"Dimensions\":\"130cm x 45cm x 85cm\",\"Weight\":\"28kg\",\"Color\":\"Abu-abu\",\"Doors\":2}', '2025-05-14 19:05:35', '2025-05-14 19:05:35'),
(16, 16, 'Meja Rias Modern dengan desain elegan dan fungsional, dilengkapi dengan cermin besar dan beberapa laci penyimpanan.', '{\"Material\":\"Kayu dan Kaca\",\"Dimensions\":\"100cm x 50cm x 75cm\",\"Weight\":\"20kg\",\"Color\":\"Putih dan Coklat\",\"Drawers\":3}', '2025-05-14 19:05:35', '2025-05-14 19:05:35'),
(17, 17, 'Laci Minimalis dengan desain modern dan ruang penyimpanan yang cukup luas, cocok untuk berbagai kebutuhan di rumah Anda.', '{\"Material\":\"Kayu MDF\",\"Dimensions\":\"80cm x 40cm x 60cm\",\"Weight\":\"15kg\",\"Color\":\"Putih\",\"Drawers\":4}', '2025-05-14 19:05:35', '2025-05-14 19:05:35'),
(18, 18, 'Kursi Makan Besi dengan desain kuat dan tahan lama, memberikan sentuhan industrial di ruang makan Anda.', '{\"Material\":\"Besi dan Kayu\",\"Dimensions\":\"45cm x 45cm x 90cm\",\"Weight\":\"12kg\",\"Color\":\"Hitam dan Coklat\"}', '2025-05-14 19:05:35', '2025-05-14 19:05:35'),
(19, 19, 'Meja Lipat Kontemporer yang praktis dengan desain minimalis, mudah disimpan dan cocok untuk ruang terbatas.', '{\"Material\":\"Kayu MDF\",\"Dimensions\":\"120cm x 60cm x 75cm\",\"Weight\":\"20kg\",\"Color\":\"Putih\",\"Features\":\"Mudah dilipat dan dipindahkan\"}', '2025-05-14 19:05:35', '2025-05-14 19:05:35'),
(20, 20, 'Meja Lipat Besi yang kuat dan tahan lama, memberikan solusi praktis untuk ruang kerja atau belajar Anda.', '{\"Material\":\"Besi dan Kayu\",\"Dimensions\":\"120cm x 60cm x 75cm\",\"Weight\":\"25kg\",\"Color\":\"Hitam\",\"Features\":\"Mekanisme lipat yang mudah digunakan\"}', '2025-05-14 19:05:35', '2025-05-14 19:05:35'),
(21, 21, 'Nakas Rotan yang ringan dan stylish, memberikan nuansa alami dan segar di kamar tidur Anda.', '{\"Material\":\"Rotan\",\"Dimensions\":\"50cm x 40cm x 60cm\",\"Weight\":\"10kg\",\"Color\":\"Coklat Muda\",\"Drawers\":2}', '2025-05-14 19:05:35', '2025-05-14 19:05:35'),
(22, 22, 'Rak Jepang yang simpel dan elegan, cocok untuk penyimpanan buku dan dekorasi dengan gaya minimalis.', '{\"Material\":\"Kayu Pinus\",\"Dimensions\":\"150cm x 60cm x 30cm\",\"Weight\":\"25kg\",\"Color\":\"Natural Wood\",\"Shelves\":4}', '2025-05-14 19:05:35', '2025-05-14 19:05:35'),
(23, 23, 'Lemari Klasik yang luas dan elegan, cocok untuk menyimpan pakaian dan barang-barang pribadi Anda dengan rapi.', '{\"Material\":\"Kayu Mahoni\",\"Dimensions\":\"180cm x 60cm x 200cm\",\"Weight\":\"60kg\",\"Color\":\"Coklat Gelap\",\"Doors\":3}', '2025-05-14 19:05:35', '2025-05-14 19:05:35'),
(24, 24, 'Kursi Rotan dengan desain ergonomis dan ringan, memberikan kenyamanan dan nuansa alami di ruang makan Anda.', '{\"Material\":\"Rotan\",\"Dimensions\":\"45cm x 45cm x 90cm\",\"Weight\":\"8kg\",\"Color\":\"Coklat Muda\"}', '2025-05-14 19:05:35', '2025-05-14 19:05:35'),
(25, 25, 'Lemari Dapur Rotan dengan desain modern dan praktis, cocok untuk menyimpan peralatan dapur dan bahan makanan.', '{\"Material\":\"Rotan dan Kayu\",\"Dimensions\":\"120cm x 60cm x 150cm\",\"Weight\":\"35kg\",\"Color\":\"Coklat\",\"Shelves\":5,\"Doors\":2}', '2025-05-14 19:05:35', '2025-05-14 19:05:35');

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
(4, '2025_05_09_014300_create_furnitur_table', 1),
(5, '2025_05_09_020854_create_detail_table', 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `furnitur`
--
ALTER TABLE `furnitur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furnitur_details`
--
ALTER TABLE `furnitur_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_furnitur` (`furnitur_id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `furnitur`
--
ALTER TABLE `furnitur`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `furnitur_details`
--
ALTER TABLE `furnitur_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `furnitur_details`
--
ALTER TABLE `furnitur_details`
  ADD CONSTRAINT `fk_furnitur` FOREIGN KEY (`furnitur_id`) REFERENCES `furnitur` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
