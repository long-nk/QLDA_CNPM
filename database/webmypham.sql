-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 05, 2021 lúc 08:30 PM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webmypham`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `Id` bigint(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Log_login` text,
  `Created_at` timestamp NULL DEFAULT NULL,
  `Update_at` timestamp NULL DEFAULT NULL,
  `Class` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `article`
--

CREATE TABLE `article` (
  `Id` bigint(20) NOT NULL,
  `A_Name` varchar(255) NOT NULL,
  `A_Hot` tinyint(4) NOT NULL,
  `A_Active` tinyint(4) NOT NULL,
  `A_Menu_id` bigint(20) NOT NULL,
  `A_View` int(11) NOT NULL,
  `A_Description` mediumtext,
  `A_Avatar` varchar(255) DEFAULT NULL,
  `A_Content` int(11) NOT NULL,
  `Update_at` timestamp NULL DEFAULT NULL,
  `Created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
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
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `Id` bigint(20) NOT NULL,
  `Cmt_name` varchar(255) DEFAULT NULL,
  `Cmt_content` text,
  `Cmt_product_id` bigint(20) NOT NULL,
  `Cmt_user_id` bigint(20) NOT NULL,
  `Cmt_like` int(11) NOT NULL,
  `Cmt_disk_like` int(11) NOT NULL,
  `Update_at` timestamp NULL DEFAULT NULL,
  `Created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `keyword`
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
-- Cấu trúc bảng cho bảng `menu`
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
-- Cấu trúc bảng cho bảng `order`
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
-- Cấu trúc bảng cho bảng `product`
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
-- Cấu trúc bảng cho bảng `slide`
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
-- Cấu trúc bảng cho bảng `transaction`
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
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `Id` bigint(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Nick_name` varchar(255) DEFAULT NULL,
  `Password` varchar(255) NOT NULL,
  `Log_login` text,
  `Created_at` timestamp NULL DEFAULT NULL,
  `Update_at` timestamp NULL DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Count_comment` tinyint(4) NOT NULL,
  `Avatar` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Haves` (`A_Menu_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Belong` (`C_parent_id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Have` (`Cmt_product_id`),
  ADD KEY `Made` (`Cmt_user_id`);

--
-- Chỉ mục cho bảng `keyword`
--
ALTER TABLE `keyword`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Manages` (`Mn_admin_id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `In` (`Od_Product_id`),
  ADD KEY `Create` (`Od_transaction_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `test` (`Pro_admin_id`),
  ADD KEY `Belongs` (`Pro_category_id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Manage` (`Tst_admin_id`),
  ADD KEY `Make` (`Tst_user_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `article`
--
ALTER TABLE `article`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `keyword`
--
ALTER TABLE `keyword`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `transaction`
--
ALTER TABLE `transaction`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `Haves` FOREIGN KEY (`A_Menu_id`) REFERENCES `menu` (`Id`);

--
-- Các ràng buộc cho bảng `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `Belong` FOREIGN KEY (`C_parent_id`) REFERENCES `product` (`Id`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `Have` FOREIGN KEY (`Cmt_product_id`) REFERENCES `product` (`Id`);

--
-- Các ràng buộc cho bảng `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `Manages` FOREIGN KEY (`Mn_admin_id`) REFERENCES `admin` (`Id`);

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `Create` FOREIGN KEY (`Od_transaction_id`) REFERENCES `transaction` (`Id`),
  ADD CONSTRAINT `In` FOREIGN KEY (`Od_Product_id`) REFERENCES `product` (`Id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `Belongs` FOREIGN KEY (`Pro_category_id`) REFERENCES `categories` (`Id`),
  ADD CONSTRAINT `test` FOREIGN KEY (`Pro_admin_id`) REFERENCES `admin` (`Id`);

--
-- Các ràng buộc cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `Make` FOREIGN KEY (`Tst_user_id`) REFERENCES `user` (`Id`),
  ADD CONSTRAINT `Manage` FOREIGN KEY (`Tst_admin_id`) REFERENCES `admin` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
