-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 03:47 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webmypham`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` bigint(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Log_login` text DEFAULT NULL,
  `Created_at` timestamp NULL DEFAULT NULL,
  `Update_at` timestamp NULL DEFAULT NULL,
  `Class` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Name`, `Email`, `Phone`, `Password`, `Log_login`, `Created_at`, `Update_at`, `Class`, `Address`, `Avatar`) VALUES
(1, 'admin', 'admin@gmail', '0987654678', '123456', '1', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `Id` bigint(20) NOT NULL,
  `A_Name` varchar(255) NOT NULL,
  `A_Hot` tinyint(4) NOT NULL,
  `A_Active` tinyint(4) NOT NULL,
  `A_Menu_id` bigint(20) NOT NULL,
  `A_View` int(11) NOT NULL,
  `A_Description` mediumtext DEFAULT NULL,
  `A_Avatar` varchar(255) DEFAULT NULL,
  `A_Content` int(11) NOT NULL,
  `Update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Id` int(11) NOT NULL,
  `C_name` varchar(255) NOT NULL,
  `C_Avatar` varchar(255) DEFAULT NULL,
  `C_type` tinyint(4) NOT NULL,
  `C_active` tinyint(4) DEFAULT NULL,
  `C_hot` tinyint(4) NOT NULL,
  `Created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `C_sort` tinyint(4) DEFAULT NULL,
  `C_banner` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Id`, `C_name`, `C_Avatar`, `C_type`, `C_active`, `C_hot`, `Created_at`, `Update_at`, `C_sort`, `C_banner`) VALUES
(1, 'Trang điểm', 'https://cocoshop.vn/assets/shops/2019_07/trangdiem-min_1.png', 1, NULL, 1, NULL, NULL, NULL, NULL),
(2, 'Son Môi', 'https://cocoshop.vn/assets/shops/2020_04/trangdiemmoi.png', 2, NULL, 1, NULL, NULL, NULL, NULL),
(3, 'Chăm sóc da', 'https://cocoshop.vn/assets/shops/2019_07/chamsocda-min_1.png', 3, NULL, 1, NULL, NULL, NULL, NULL),
(4, 'Chăm sóc cơ thể', 'https://cocoshop.vn/assets/shops/2019_07/chamsoccothe-min_1.png', 4, NULL, 1, NULL, NULL, NULL, NULL),
(5, 'Chăm sóc tóc', 'https://cocoshop.vn/assets/shops/2019_07/chamsoctocmin.png', 5, NULL, 1, NULL, NULL, NULL, NULL),
(6, 'Nước hoa', 'https://cocoshop.vn/assets/shops/2019_07/nuoschoa-min.png', 6, NULL, 1, NULL, NULL, NULL, NULL),
(7, 'Sản phẩm khác', 'https://cocoshop.vn/assets/shops/2019_07/spkhac-min_1.png', 7, NULL, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `keyword`
--

CREATE TABLE `keyword` (
  `Id` int(11) NOT NULL,
  `K_name` varchar(255) NOT NULL,
  `K_description` varchar(255) DEFAULT NULL,
  `K_hot` tinyint(4) NOT NULL,
  `Created_at` timestamp NULL DEFAULT NULL,
  `Update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `Id` bigint(20) NOT NULL,
  `Mn_name` varchar(255) NOT NULL,
  `Mn_admin_id` bigint(20) NOT NULL,
  `Mn_avatar` varchar(255) DEFAULT NULL,
  `Mn_banner` varchar(255) DEFAULT NULL,
  `Mn_Description` varchar(255) DEFAULT NULL,
  `Mn_hot` tinyint(4) NOT NULL,
  `Mn_Status` tinyint(4) NOT NULL,
  `Created_at` timestamp NULL DEFAULT NULL,
  `Update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `Id` bigint(20) NOT NULL,
  `Od_transaction_id` bigint(20) NOT NULL,
  `Od_Product_id` bigint(20) NOT NULL,
  `Od_Sale` int(11) NOT NULL,
  `Od_qty` tinyint(4) NOT NULL,
  `Od_price` int(11) NOT NULL,
  `Created_at` timestamp NULL DEFAULT NULL,
  `Update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('nguyenhuuluan17@gmail.com', 'rQkliwf171suISvVT1uZbEw98AarD6', '2021-11-10 02:00:36');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` bigint(20) NOT NULL,
  `Pro_name` varchar(255) DEFAULT NULL,
  `Pro_price` int(11) NOT NULL,
  `Pro_content` int(11) NOT NULL,
  `Pro_category_id` int(11) NOT NULL,
  `Created_at` timestamp NULL DEFAULT NULL,
  `Update_at` timestamp NULL DEFAULT NULL,
  `Pro_admin_id` bigint(20) NOT NULL,
  `Pro_sale` tinyint(4) NOT NULL,
  `Pro_avatar` varchar(255) DEFAULT NULL,
  `Pro_view` int(11) NOT NULL,
  `Pro_hot` tinyint(4) NOT NULL,
  `Pro_active` int(11) NOT NULL,
  `Pro_description` varchar(255) DEFAULT NULL,
  `Pro_number_import` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `Pro_name`, `Pro_price`, `Pro_content`, `Pro_category_id`, `Created_at`, `Update_at`, `Pro_admin_id`, `Pro_sale`, `Pro_avatar`, `Pro_view`, `Pro_hot`, `Pro_active`, `Pro_description`, `Pro_number_import`) VALUES
(1, 'Bảng Phấn Mắt Maybelline New York The City Mini Palette', 288, 1, 1, NULL, NULL, 1, 0, 'https://cocoshop.vn/uploads/shops/2020_12/bang-phan-mat-maybelline-new-york-the-city-mini-palette-12.jpg', 1, 1, 1, 'Bảng Phấn Mắt Maybelline 6 Ô The City Mini Palette là bảng phấn mắt đến từ thương hiệu mỹ phẩm nổi tiếng Maybelline của Mỹ, với 6 ô màu theo nhiều tone màu thời thượng, lâu trôi bền màu từ màu nhũ tới màu lì giúp bạn dễ dàng sáng tạo ra những phong cách t', 9993),
(2, 'Phấn Phủ Trang Điểm Bobbi Brown Soft Sand 11g', 1350, 1, 1, NULL, NULL, 1, 0, 'https://cocoshop.vn/uploads/shops/2020_12/phan-phu-trang-diem-bobbi-brown-5.jpg', 1, 0, 1, 'Finish: mỏng nhẹ, tự nhiên, kiềm dầu cho da.\r\nThiết kế: Vỏ ngoài đen bóng sang trọng cùng dòng chữ của hãng đúng chuẩn thiết kế Bobbi Brown với hộp vuông dễ dàng mang theo trong túi xá', 9999),
(3, 'Chì Kẻ Mày 2 Đầu Silkygirl Perfect Brow Liner & Powder', 159, 1, 1, NULL, NULL, 1, 1, 'https://cocoshop.vn/uploads/shops/2020_11/chi-ke-may-2-dau-silkygirl-perfect-brow-liner-powder.jpg', 1, 1, 1, '- Đầu chì vặn, không cần chuốt. Chất chì êm như kem .\r\n- Đầu bột tán với bột phấn kích thước siêu nhỏ, siêu mịn tạo hiệu ứng màu tự nhiên, nét mày đầy đặn.\r\n- Rất dễ dàng điều khiển và sử dụng.\r\n- Sản phẩm không mùi hương, không gây kích ứng da.  ', 9999),
(4, 'Son Bóng Romand Glasting Water Tint 04 Vintage Ocean', 170, 1, 2, NULL, NULL, 1, 1, 'https://cocoshop.vn/uploads/shops/2021_02/son-bong-romand-glasting-water-tint-04-vintage-ocean.jpg', 1, 1, 1, NULL, 100),
(5, 'Son Dưỡng Môi Rohto Chuyên Biệt Cho Môi Khô, Nứt Nẻ 4.3g', 59, 1, 2, NULL, NULL, 1, 0, 'https://cocoshop.vn/uploads/shops/2020_12/son-duong-moi-rohto.jpg', 1, 1, 1, NULL, 999);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `Id` bigint(20) NOT NULL,
  `Sd_title` varchar(255) DEFAULT NULL,
  `Sd_link` int(11) DEFAULT NULL,
  `Sd_image` varchar(255) DEFAULT NULL,
  `Sd_target` tinyint(4) DEFAULT NULL,
  `Sd_active` tinyint(4) DEFAULT NULL,
  `Created_at` timestamp NULL DEFAULT NULL,
  `Update_at` timestamp NULL DEFAULT NULL,
  `Sd_sort` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`Id`, `Sd_title`, `Sd_link`, `Sd_image`, `Sd_target`, `Sd_active`, `Created_at`, `Update_at`, `Sd_sort`) VALUES
(10, 'Banner 1', NULL, 'images/banners/nula_cosmetic_banners_1636002909.jpg', NULL, 1, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `Id` bigint(20) NOT NULL,
  `Tst_user_id` bigint(20) NOT NULL,
  `Tst_total_money` int(11) NOT NULL,
  `Tst_name` varchar(255) DEFAULT NULL,
  `Tst_email` varchar(255) DEFAULT NULL,
  `Tst_phone` varchar(255) DEFAULT NULL,
  `Tst_admin_id` bigint(20) NOT NULL,
  `Tst_address` varchar(255) DEFAULT NULL,
  `Tst_note` varchar(255) DEFAULT NULL,
  `Tst_status` tinyint(4) NOT NULL,
  `Created_at` timestamp NULL DEFAULT NULL,
  `Update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `provider` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `content`, `status`, `provider`, `provider_id`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$xPoKv697T/9v.7jw6ileaO/WNoYY2JMHBw27yMIDj2O0sjv8nDY02', 'DEZr0W2d7JG4C4b7XrrRkQGvMhi9yRPEdtdCvWX0l1A32wMCxBqNfDtT07Bp', NULL, NULL, '0967853358', NULL, NULL, NULL, NULL),
(2, 'Nhung', 'Nhung@gmail.com', NULL, '$2y$10$WGl5ESnsjFoL2yWBNsSDd.VYiBPlr70R50xeCXR7z60DAdsSGdPNW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Haves` (`A_Menu_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `keyword`
--
ALTER TABLE `keyword`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Manages` (`Mn_admin_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `In` (`Od_Product_id`),
  ADD KEY `Create` (`Od_transaction_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `test` (`Pro_admin_id`),
  ADD KEY `Belongs` (`Pro_category_id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Manage` (`Tst_admin_id`),
  ADD KEY `Make` (`Tst_user_id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `keyword`
--
ALTER TABLE `keyword`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `Haves` FOREIGN KEY (`A_Menu_id`) REFERENCES `menu` (`Id`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `Manages` FOREIGN KEY (`Mn_admin_id`) REFERENCES `admin` (`Id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `Create` FOREIGN KEY (`Od_transaction_id`) REFERENCES `transaction` (`Id`),
  ADD CONSTRAINT `In` FOREIGN KEY (`Od_Product_id`) REFERENCES `product` (`Id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `Belongs` FOREIGN KEY (`Pro_category_id`) REFERENCES `categories` (`Id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `Manage` FOREIGN KEY (`Tst_admin_id`) REFERENCES `admin` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
