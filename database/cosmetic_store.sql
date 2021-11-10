/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : cosmetic_store

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-11-03 12:40:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Log_login` text DEFAULT NULL,
  `Created_at` timestamp NULL DEFAULT NULL,
  `Update_at` timestamp NULL DEFAULT NULL,
  `Class` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', 'admin@gmail', '0987654678', '123456', '1', null, null, null, null, null);

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `A_Name` varchar(255) NOT NULL,
  `A_Hot` tinyint(4) NOT NULL,
  `A_Active` tinyint(4) NOT NULL,
  `A_Menu_id` bigint(20) NOT NULL,
  `A_View` int(11) NOT NULL,
  `A_Description` mediumtext DEFAULT NULL,
  `A_Avatar` varchar(255) DEFAULT NULL,
  `A_Content` int(11) NOT NULL,
  `Update_at` timestamp NULL DEFAULT NULL,
  `Created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `Haves` (`A_Menu_id`),
  CONSTRAINT `Haves` FOREIGN KEY (`A_Menu_id`) REFERENCES `menu` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `C_name` varchar(255) NOT NULL,
  `C_parent_id` bigint(20) NOT NULL,
  `C_Avatar` varchar(255) DEFAULT NULL,
  `C_type` tinyint(4) NOT NULL,
  `C_active` tinyint(4) DEFAULT NULL,
  `C_hot` tinyint(4) NOT NULL,
  `Created_at` timestamp NULL DEFAULT NULL,
  `Update_at` timestamp NULL DEFAULT NULL,
  `C_sort` tinyint(4) DEFAULT NULL,
  `C_banner` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `Belong` (`C_parent_id`),
  CONSTRAINT `Belong` FOREIGN KEY (`C_parent_id`) REFERENCES `product` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'Trang điểm', 'https://cocoshop.vn/assets/shops/2019_07/trangdiem-min_1.png', '1', '1', '1', '2021-11-04 18:19:49', '2021-11-04 18:19:49', null, null);
INSERT INTO `categories` VALUES ('2', 'Son Môi', 'https://cocoshop.vn/assets/shops/2020_04/trangdiemmoi.png', '2', '1', '1', '2021-11-04 18:19:51', '2021-11-04 18:19:51', null, null);
INSERT INTO `categories` VALUES ('3', 'Chăm sóc da', 'https://cocoshop.vn/assets/shops/2019_07/chamsocda-min_1.png', '3', '1', '1', '2021-11-04 18:19:53', '2021-11-04 18:19:53', null, null);
INSERT INTO `categories` VALUES ('4', 'Chăm sóc cơ thể', 'https://cocoshop.vn/assets/shops/2019_07/chamsoccothe-min_1.png', '4', '1', '1', '2021-11-04 18:19:55', '2021-11-04 18:19:55', null, null);
INSERT INTO `categories` VALUES ('5', 'Chăm sóc tóc', 'https://cocoshop.vn/assets/shops/2019_07/chamsoctocmin.png', '5', '1', '1', '2021-11-04 18:19:57', '2021-11-04 18:19:57', null, null);
INSERT INTO `categories` VALUES ('6', 'Nước hoa', 'https://cocoshop.vn/assets/shops/2019_07/nuoschoa-min.png', '6', '1', '1', '2021-11-04 18:19:59', '2021-11-04 18:19:59', null, null);

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Cmt_name` varchar(255) DEFAULT NULL,
  `Cmt_content` text DEFAULT NULL,
  `Cmt_product_id` bigint(20) NOT NULL,
  `Cmt_user_id` bigint(20) NOT NULL,
  `Cmt_like` int(11) NOT NULL,
  `Cmt_disk_like` int(11) NOT NULL,
  `Update_at` timestamp NULL DEFAULT NULL,
  `Created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `Have` (`Cmt_product_id`),
  KEY `Made` (`Cmt_user_id`),
  CONSTRAINT `Have` FOREIGN KEY (`Cmt_product_id`) REFERENCES `product` (`Id`),
  CONSTRAINT `Made` FOREIGN KEY (`Cmt_user_id`) REFERENCES `users` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------

-- ----------------------------
-- Table structure for keyword
-- ----------------------------
DROP TABLE IF EXISTS `keyword`;
CREATE TABLE `keyword` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `K_name` varchar(255) NOT NULL,
  `K_description` varchar(255) DEFAULT NULL,
  `K_hot` tinyint(4) NOT NULL,
  `Created_at` timestamp NULL DEFAULT NULL,
  `Update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of keyword
-- ----------------------------

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Mn_name` varchar(255) NOT NULL,
  `Mn_admin_id` bigint(20) NOT NULL,
  `Mn_avatar` varchar(255) DEFAULT NULL,
  `Mn_banner` varchar(255) DEFAULT NULL,
  `Mn_Description` varchar(255) DEFAULT NULL,
  `Mn_hot` tinyint(4) NOT NULL,
  `Mn_Status` tinyint(4) NOT NULL,
  `Created_at` timestamp NULL DEFAULT NULL,
  `Update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `Manages` (`Mn_admin_id`),
  CONSTRAINT `Manages` FOREIGN KEY (`Mn_admin_id`) REFERENCES `admin` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2019_08_19_000000_create_failed_jobs_table', '1');

-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Od_transaction_id` bigint(20) NOT NULL,
  `Od_Product_id` bigint(20) NOT NULL,
  `Od_Sale` int(11) NOT NULL,
  `Od_qty` tinyint(4) NOT NULL,
  `Od_price` int(11) NOT NULL,
  `Created_at` timestamp NULL DEFAULT NULL,
  `Update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `In` (`Od_Product_id`),
  KEY `Create` (`Od_transaction_id`),
  CONSTRAINT `Create` FOREIGN KEY (`Od_transaction_id`) REFERENCES `transaction` (`Id`),
  CONSTRAINT `In` FOREIGN KEY (`Od_Product_id`) REFERENCES `product` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order
-- ----------------------------

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Pro_name` varchar(255) DEFAULT NULL,
  `Pro_price` int(11) NOT NULL,
  `Pro_content` int(11) DEFAULT NULL,
  `Pro_category_id` int(11) NOT NULL,
  `Created_at` timestamp NULL DEFAULT NULL,
  `Update_at` timestamp NULL DEFAULT NULL,
  `Pro_admin_id` bigint(20) DEFAULT NULL,
  `Pro_sale` tinyint(4) DEFAULT NULL,
  `Pro_avatar` varchar(255) DEFAULT NULL,
  `Pro_view` int(11) DEFAULT NULL,
  `Pro_hot` tinyint(4) DEFAULT NULL,
  `Pro_active` int(11) DEFAULT NULL,
  `Pro_description` text DEFAULT NULL,
  `Pro_number_import` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `test` (`Pro_admin_id`),
  KEY `Belongs` (`Pro_category_id`),
  CONSTRAINT `Belongs` FOREIGN KEY (`Pro_category_id`) REFERENCES `categories` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('1', 'Bảng Phấn Mắt Maybelline New York The City Mini Palette', '288', '1', '1', null, null, '1', '0', 'images/uploads/products/nula_cosmetic_product_1636161641.jpg', '1', '1', '1', 'Bảng Phấn Mắt Maybelline 6 Ô The City Mini Palette là bảng phấn mắt đến từ thương hiệu mỹ phẩm nổi tiếng Maybelline của Mỹ, với 6 ô màu theo nhiều tone màu thời thượng, lâu trôi bền màu từ màu nhũ tới màu lì giúp bạn dễ dàng sáng tạo ra những phong cách t', '9993');
INSERT INTO `product` VALUES ('2', 'Phấn Phủ Trang Điểm Bobbi Brown Soft Sand 11g', '1350', '1', '1', null, null, '1', '0', 'images/uploads/products/nula_cosmetic_product_1636161885.jpg', '1', '1', '1', '<p>Finish: mỏng nhẹ, tự nhi&ecirc;n, kiềm dầu cho da. Thiết kế: Vỏ ngo&agrave;i đen b&oacute;ng sang trọng c&ugrave;ng d&ograve;ng chữ của h&atilde;ng đ&uacute;ng chuẩn thiết kế Bobbi Brown với hộp vu&ocirc;ng dễ d&agrave;ng mang theo trong t&uacute;i x&aacute;ch</p>', '9999');
INSERT INTO `product` VALUES ('3', 'Chì Kẻ Mày 2 Đầu Silkygirl Perfect Brow Liner & Powder', '159', '1', '2', null, null, '1', '1', 'images/uploads/products/nula_cosmetic_product_1636161616.jpg', '1', '2', '1', '- Đầu chì vặn, không cần chuốt. Chất chì êm như kem .\r\n- Đầu bột tán với bột phấn kích thước siêu nhỏ, siêu mịn tạo hiệu ứng màu tự nhiên, nét mày đầy đặn.\r\n- Rất dễ dàng điều khiển và sử dụng.\r\n- Sản phẩm không mùi hương, không gây kích ứng da.', '9999');
INSERT INTO `product` VALUES ('4', 'Son Bóng Romand Glasting Water Tint 04 Vintage Ocean', '170', '1', '1', null, null, '1', '1', 'images/uploads/products/nula_cosmetic_product_1636161584.jpg', '1', '1', '1', 'Son bóng', '100');
INSERT INTO `product` VALUES ('5', 'Son Dưỡng Môi Rohto Chuyên Biệt Cho Môi Khô, Nứt Nẻ 4.3g', '59', '1', '2', null, null, '1', '0', 'images/uploads/products/nula_cosmetic_product_1636161561.jpg', '1', '1', '1', '<p>test sản phẩm</p>', '999');

-- ----------------------------
-- Table structure for slide
-- ----------------------------
DROP TABLE IF EXISTS `slide`;
CREATE TABLE `slide` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Sd_title` varchar(255) DEFAULT NULL,
  `Sd_link` int(11) DEFAULT NULL,
  `Sd_image` varchar(255) DEFAULT NULL,
  `Sd_target` tinyint(4) DEFAULT NULL,
  `Sd_active` tinyint(4) DEFAULT NULL,
  `Created_at` timestamp NULL DEFAULT NULL,
  `Update_at` timestamp NULL DEFAULT NULL,
  `Sd_sort` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of slide
-- ----------------------------
INSERT INTO `slide` VALUES ('10', 'Banner 1', null, 'images/banners/nula_cosmetic_banners_1636078945.jpg', null, '1', null, null, '1');
INSERT INTO `slide` VALUES ('11', 'Banner 2', null, 'images/banners/nula_cosmetic_banners_1636036448.jpg', null, '1', null, null, '2');

-- ----------------------------
-- Table structure for transaction
-- ----------------------------
DROP TABLE IF EXISTS `transaction`;
CREATE TABLE `transaction` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
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
  `Update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `Manage` (`Tst_admin_id`),
  KEY `Make` (`Tst_user_id`),
  CONSTRAINT `Manage` FOREIGN KEY (`Tst_admin_id`) REFERENCES `admin` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of transaction
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Admin', 'admin@gmail.com', null, '$2y$10$pCGPuQtvaOPiUhCz0NAvouHNcTMuhkFI2N4HI7X89MgkVRXipH2xq', 'B0R1YQTPkQ5hUXWOsGavK1Ghf00fLrgYWRFyttVXvikb0MZ7x5Wn7HUbnPmD', null, '2021-11-06 02:47:50', '0967853358', null, '1');
INSERT INTO `users` VALUES ('4', 'Long', 'long@gmail.com', null, '$2y$10$j.M4CQt1/3C/fcj6Xa/Dgux8AsSilDftwx3ZdsE0C7HPvVtI0C0cq', null, null, null, '0838419094', null, null);
