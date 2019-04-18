-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 12:27 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `green_hut`
--

-- --------------------------------------------------------

--
-- Table structure for table `manufacture`
--

CREATE TABLE `manufacture` (
  `manufacture_id` int(10) UNSIGNED NOT NULL,
  `manufacture_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacture_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufacture`
--

INSERT INTO `manufacture` (`manufacture_id`, `manufacture_name`, `manufacture_description`, `created_at`, `updated_at`) VALUES
(1, 'Barisal Nursery', 'Barisal', NULL, NULL),
(2, 'Faridpur Nursery', 'Faridpur Nursery', NULL, NULL),
(3, 'Nishis firm', 'Nishis firm', NULL, NULL),
(4, 'Rahims terres firm', 'Rahims terres firm', NULL, NULL);

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
(1, '2018_09_15_121143_create_tbl_category_table', 1),
(2, '2018_09_15_121318_create_manufacture_table', 1),
(3, '2018_09_15_121347_create_tbl_products_table', 1),
(4, '2018_09_15_121413_create_tbl_slider_table', 1),
(5, '2018_09_15_130721_create_tbl_admin_tabel', 1),
(6, '2018_09_23_230123_create_tbl_products_table', 2),
(7, '2018_09_24_124740_create_tbl_top_product_table', 3),
(8, '2018_09_24_142126_create_tbl_top_manufacture_table', 4),
(9, '2018_09_24_143035_create_tbl_top_manufacture_table', 5),
(10, '2018_09_26_192458_create_tbl_customer_table', 6),
(11, '2018_09_26_203628_create_tbl_order_table', 7),
(12, '2018_09_26_204423_create_tbl_delivery_table', 8),
(13, '2018_09_27_153751_create_tbl_sub_category_table', 9),
(14, '2018_09_27_165724_create_tbl_products_table', 10),
(15, '2018_09_28_095559_create_tbl_order_detail_table', 11),
(16, '2018_09_28_171404_create_tbl_date_table', 12),
(17, '2018_10_11_171233_create_tbl_order_tabel', 13),
(18, '2018_10_11_205651_create_users_table', 14),
(19, '2018_10_11_205815_create_password_resets_table', 14),
(20, '2018_10_13_192849_create_tbl_delivery_table', 15),
(21, '2018_10_13_200733_create_tbl_delivery_table', 16),
(22, '2019_04_13_151847_create_tbl_products_table', 17),
(23, '2019_04_14_081604_create_tbl_products_table', 18),
(24, '2019_04_14_092127_create_tbl_order_table', 19),
(25, '2019_04_14_105413_create_tbl_order_table', 20),
(26, '2019_04_14_110658_create_tbl_order_table', 21),
(27, '2019_04_14_112601_create_tests_table', 22),
(28, '2019_04_14_163944_create_sell_reports_table', 23),
(29, '2019_04_14_171301_create_tbl_sells_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'nusrat5911@gmail.com', '123456', 'Nishi', '01882405636', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `created_at`, `updated_at`) VALUES
(1, 'Fruit', 'Fruit', NULL, NULL),
(2, 'Vegitable', 'Veg', NULL, NULL),
(3, 'Tree', 'tree', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `created_at`, `updated_at`) VALUES
(40, 'Nusrat Jahan Nishi', 'nusrat5911@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL),
(41, 'Jahan Nishi', 'jahan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_delivery`
--

CREATE TABLE `tbl_delivery` (
  `delivery_id` int(10) UNSIGNED NOT NULL,
  `delivery_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_account` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart_total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_delivery`
--

INSERT INTO `tbl_delivery` (`delivery_id`, `delivery_name`, `delivery_phone`, `delivery_city`, `delivery_address`, `payment_method`, `payment_account`, `cart_total`, `created_at`, `updated_at`) VALUES
(60, 'Farhana Luna', '0179129999', 'Khulna', 'Khulna 45/a, house no. 34, 3rd flor', 'rocket', '019908379349', '100.00', NULL, NULL),
(61, 'Biprokash  Mondol', '0179129999', 'Barisal', 'Rupatali housing, Saiad mention, 2nd flor', 'bkash', '019908379348', '65.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `order_total` int(11) NOT NULL,
  `order_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `order_total`, `order_date`, `delivery_id`, `customer_id`, `created_at`, `updated_at`) VALUES
(29, 100, '14-04-2019', '60', '41', NULL, NULL),
(30, 65, '14-04-2019', '61', '41', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `order_detail_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`order_detail_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `total`, `created_at`, `updated_at`) VALUES
(58, 28, 15, 'Jamrul', '250', '2', '500', NULL, NULL),
(59, 29, 15, 'Jamrul', '50', '1', '50', NULL, NULL),
(60, 29, 16, 'Capsicum', '25', '2', '50', NULL, NULL),
(61, 30, 16, 'Capsicum', '25', '1', '25', NULL, NULL),
(62, 30, 17, 'Pumpkin', '20', '2', '40', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `manufacture_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_purchase_cost` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_stock` int(11) NOT NULL,
  `product_current_stock` int(11) NOT NULL,
  `product_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `category_id`, `sub_category_id`, `manufacture_id`, `product_name`, `product_description`, `product_unit`, `product_purchase_cost`, `product_price`, `product_stock`, `product_current_stock`, `product_image`, `created_at`, `updated_at`) VALUES
(15, 1, 1, 1, 'Jamrul', 'Jamrul', 'Busket', 30, 50, 50, 49, 'image/wWypyweXOTSlkIF10sE8mnq0vAscAW.jpg', NULL, NULL),
(16, 1, 1, 1, 'Capsicum', 'Capcicum', 'Kg', 15, 25, 55, 52, 'image/jwqpb6vHpRy9tZxmLga0cuSxgpwLXg.jpg', NULL, NULL),
(17, 2, 16, 2, 'Pumpkin', 'Pumpkin', 'Piece', 10, 20, 15, 13, 'image/iH9be0QawvpNIpQfEXKmrAmiqmqR8s.jpg', NULL, NULL),
(18, 1, 17, 1, 'Boroi', 'Boroi', 'Kg', 20, 30, 30, 30, 'image/A6Cj6WuZy4xXJtXNJ4RdiqnjhyVElR.jpg', NULL, NULL),
(19, 1, 17, 1, 'Tamarind', 'Tamarind', 'Dozen', 10, 20, 40, 40, 'image/AeEwF6rmmkKuHnZju85DAtoJIf0v9y.jpg', NULL, NULL),
(20, 2, 16, 1, 'Bringal', 'Bringal', 'Kg', 10, 30, 50, 50, 'image/zVHeY8dkRpGg1kyAeJtzNGMRAQlfyK.jpg', NULL, NULL),
(21, 2, 16, 4, 'Cauli Flower', 'Cuali Flower', 'Kg', 10, 25, 20, 20, 'image/kMGw2bESXI31Hp0ARrjb8dBXSY3ToN.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sells`
--

CREATE TABLE `tbl_sells` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date_month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_sells`
--

INSERT INTO `tbl_sells` (`id`, `order_date`, `order_date_month`, `order_total`, `created_at`, `updated_at`) VALUES
(25, '14-04-2019', '04-2019', 100, NULL, NULL),
(26, '14-04-2019', '04-2019', 65, NULL, NULL),
(29, '16-11-2019', '11-2019', 200, NULL, NULL),
(31, '23-12-2019', '12-2019', 180, NULL, NULL),
(32, '27-10-2019', '10-2019', 500, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(10) UNSIGNED NOT NULL,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_image`, `created_at`, `updated_at`) VALUES
(3, 'slider/krHM0VSqCF8UztLdHlYn1RqC4nqcYo.jpg', NULL, NULL),
(6, 'slider/Xk29ai86cvE8Uu977zsNpFuTR391eI.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_category`
--

CREATE TABLE `tbl_sub_category` (
  `sub_category_id` int(10) UNSIGNED NOT NULL,
  `sub_category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_sub_category`
--

INSERT INTO `tbl_sub_category` (`sub_category_id`, `sub_category_name`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Dry fruit', '1', NULL, NULL),
(3, 'Lenties', '2', NULL, NULL),
(5, 'Salad vegitable', '2', NULL, NULL),
(7, 'Bonshai', '3', NULL, NULL),
(8, 'Tub flower tree', '3', NULL, NULL),
(9, 'Tub vegetable plant', '3', NULL, NULL),
(10, 'Tub fruit tree', '3', NULL, NULL),
(11, 'Sweet fruit', '1', NULL, NULL),
(13, 'Berry', '1', NULL, NULL),
(14, 'Seasonal fruit', '1', NULL, NULL),
(16, 'All purpose vegetable', '2', NULL, NULL),
(17, 'Sour fruit', '1', NULL, NULL),
(18, 'Deshi fruit', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_top_manufacture`
--

CREATE TABLE `tbl_top_manufacture` (
  `top_manufacture_id` int(10) UNSIGNED NOT NULL,
  `top_manufacture_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `top_manufacture_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `top_manufacture_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `top_manufacture_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `top_manufacture_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_top_manufacture`
--

INSERT INTO `tbl_top_manufacture` (`top_manufacture_id`, `top_manufacture_name`, `top_manufacture_city`, `top_manufacture_address`, `top_manufacture_phone`, `top_manufacture_image`, `created_at`, `updated_at`) VALUES
(3, 'Rupatali Nursery', 'Barisal', 'Kathaltola, patuakhali road', '01882405636', 'image/Qx1VC2arEfKX1wCymX7ce5PUa88t8W.jpg', NULL, NULL),
(4, 'Faridpur Nursery', 'Faridpur', 'Goalchamot road', '01882405636', 'image/HLw6xqA0O37AZq0zMrvk2Ej7Gt4JVr.jpg', NULL, NULL),
(5, 'Karims firm', 'Faridpur', '45/A Alipur', '01882405636', 'image/IKdNYCGs0NNDRo6GNQ5769YHrMrGrb.jpg', NULL, NULL),
(6, 'Fahmidas garden', 'Barisal', 'Rupalati, patuakhali road', '01882405636', 'image/J8L9ZDcLJdFyd0mhdt7sOKnWQ2iheN.jpg', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacture`
--
ALTER TABLE `manufacture`
  ADD PRIMARY KEY (`manufacture_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_delivery`
--
ALTER TABLE `tbl_delivery`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_sells`
--
ALTER TABLE `tbl_sells`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `tbl_sub_category`
--
ALTER TABLE `tbl_sub_category`
  ADD PRIMARY KEY (`sub_category_id`);

--
-- Indexes for table `tbl_top_manufacture`
--
ALTER TABLE `tbl_top_manufacture`
  ADD PRIMARY KEY (`top_manufacture_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacture`
--
ALTER TABLE `manufacture`
  MODIFY `manufacture_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_delivery`
--
ALTER TABLE `tbl_delivery`
  MODIFY `delivery_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `order_detail_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_sells`
--
ALTER TABLE `tbl_sells`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_sub_category`
--
ALTER TABLE `tbl_sub_category`
  MODIFY `sub_category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_top_manufacture`
--
ALTER TABLE `tbl_top_manufacture`
  MODIFY `top_manufacture_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
