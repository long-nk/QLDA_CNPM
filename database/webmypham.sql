-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2021 at 03:48 PM
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
  `Update_at` timestamp NULL DEFAULT NULL,
  `Created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Id` int(11) NOT NULL,
  `C_name` varchar(255) NOT NULL,
  `C_parent_id` bigint(20) NOT NULL,
  `C_Avatar` varchar(255) DEFAULT NULL,
  `C_type` tinyint(4) NOT NULL,
  `C_active` tinyint(4) DEFAULT NULL,
  `C_hot` tinyint(4) NOT NULL,
  `Created_at` timestamp NULL DEFAULT NULL,
  `Update_at` timestamp NULL DEFAULT NULL,
  `C_sort` tinyint(4) DEFAULT NULL,
  `C_banner` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `Id` bigint(20) NOT NULL,
  `Cmt_name` varchar(255) DEFAULT NULL,
  `Cmt_content` text DEFAULT NULL,
  `Cmt_product_id` bigint(20) NOT NULL,
  `Cmt_user_id` bigint(20) NOT NULL,
  `Cmt_like` int(11) NOT NULL,
  `Cmt_disk_like` int(11) NOT NULL,
  `Update_at` timestamp NULL DEFAULT NULL,
  `Created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `Id` bigint(20) NOT NULL,
  `Sd_title` varchar(255) DEFAULT NULL,
  `Sd_link` int(11) NOT NULL,
  `Sd_image` varchar(255) DEFAULT NULL,
  `Sd_target` tinyint(4) NOT NULL,
  `Sd_active` tinyint(4) NOT NULL,
  `Created_at` timestamp NULL DEFAULT NULL,
  `Update_at` timestamp NULL DEFAULT NULL,
  `Sd_sort` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` bigint(20) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `provider` text DEFAULT NULL,
  `provider_id` text DEFAULT NULL,
  `remember_token` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `First_Name`, `email`, `password`, `Phone`, `Last_Name`, `provider`, `provider_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Luân', 'luan@gmail.com', '$2y$10$TDDYolR68ZTPWflpoi6h6..I6g/v4u.KGnz5IfLwolWSphzjiBaOe', '0898103236', 'Nguyễn', NULL, NULL, 'ypMWr3prUQ1WIEayVYNtAIyAm9OEvumA0IUodYvQSp9wbA3BnFY2DD7fHc9M', '2021-10-31 13:30:52', '2021-11-01 08:15:26'),
(2, 'Luân', 'dolienkhoa191200@gmail.com', '', '', 'Nguyễn', 'facebook', '3084419061802284', 'EAAPZAoZBWjY9QBAPmNIB04AZAvq87oUfeK1ovXiPe320wijBe3zEh9KmNhoIHO1PVbJ0cr7yDPpXDb9IZAlepFzmscZAqhKL3zyIDM4yKxnu2OcaX3gCZC7DZB6pRHdHW2wqJZBNZCmyiErkmEU4Rw3kZB8tsDNzQ5xEYzxMKHLDuIUXOgR3S3KS1wXs3fW8CubnC27wFFfnSo7I0RgKdUXQLq1I131ArNn7BvgbahfJZCXKgZDZD', '2021-10-31 15:14:48', '2021-10-31 22:15:05'),
(3, 'Luân', 'nguyenhuuluan17@gmail.com', '', '', 'Nguyễn', 'google', '107506599858220795529', 'F6ZCBMhBzyUtOkACIadNENnvZ19XvVGaQhC7DoNxS9DTYsQw36kVdvh2ooM9', '2021-10-31 18:25:18', '2021-11-01 08:25:55');

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
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Belong` (`C_parent_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Have` (`Cmt_product_id`),
  ADD KEY `Made` (`Cmt_user_id`);

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
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `In` (`Od_Product_id`),
  ADD KEY `Create` (`Od_transaction_id`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `Haves` FOREIGN KEY (`A_Menu_id`) REFERENCES `menu` (`Id`);

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `Belong` FOREIGN KEY (`C_parent_id`) REFERENCES `product` (`Id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `Have` FOREIGN KEY (`Cmt_product_id`) REFERENCES `product` (`Id`);

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
  ADD CONSTRAINT `Belongs` FOREIGN KEY (`Pro_category_id`) REFERENCES `categories` (`Id`),
  ADD CONSTRAINT `test` FOREIGN KEY (`Pro_admin_id`) REFERENCES `admin` (`Id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `Make` FOREIGN KEY (`Tst_user_id`) REFERENCES `user` (`Id`),
  ADD CONSTRAINT `Manage` FOREIGN KEY (`Tst_admin_id`) REFERENCES `admin` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
