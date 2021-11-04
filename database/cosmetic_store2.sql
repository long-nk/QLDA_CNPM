
/*drop database if exists `web`;
create database web;
use web;
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Log_login` text DEFAULT NULL,
  `Created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Class` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES ('1', 'admins', 'admins@gmail', '0987654678', '123456', '1', null, null, null, null, null);

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
  `Update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
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
  --  `C_parent_id` bigint(20) NOT NULL,
  `C_Avatar` varchar(255) DEFAULT NULL,
  `C_type` tinyint(4) NOT NULL,
  `C_active` tinyint(4) DEFAULT NULL,
  `C_hot` tinyint(4) NOT NULL,
  `Created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `C_sort` tinyint(4) DEFAULT NULL,
  `C_banner` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
-- KEY `Belong` (`C_parent_id`),
-- CONSTRAINT `Belong` FOREIGN KEY (`C_parent_id`) REFERENCES `product` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` (`Id`, `C_name`, `C_Avatar`, `C_type`, `C_active`, `C_hot`, `Created_at`, `Update_at`, `C_sort`, `C_banner`) VALUES
(1, 'Trang điểm', 'https://cocoshop.vn/assets/shops/2019_07/trangdiem-min_1.png', 1, NULL, 1, NULL, NULL, NULL, NULL),
(2, 'Son Môi', 'https://cocoshop.vn/assets/shops/2020_04/trangdiemmoi.png', 2, NULL, 1, NULL, NULL, NULL, NULL),
(3, 'Chăm sóc da', 'https://cocoshop.vn/assets/shops/2019_07/chamsocda-min_1.png', 3, NULL, 1, NULL, NULL, NULL, NULL),
(4, 'Chăm sóc cơ thể', 'https://cocoshop.vn/assets/shops/2019_07/chamsoccothe-min_1.png', 4, NULL, 1, NULL, NULL, NULL, NULL),
(5, 'Chăm sóc tóc', 'https://cocoshop.vn/assets/shops/2019_07/chamsoctocmin.png', 5, NULL, 1, NULL, NULL, NULL, NULL),
(6, 'Nước hoa', 'https://cocoshop.vn/assets/shops/2019_07/nuoschoa-min.png', 6, NULL, 1, NULL, NULL, NULL, NULL),
(7, 'Sản phẩm khác', 'https://cocoshop.vn/assets/shops/2019_07/spkhac-min_1.png', 7, NULL, 1, NULL, NULL, NULL, NULL);


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
  `Update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
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
  `Created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
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
  `Mn_admins_id` bigint(20) NOT NULL,
  `Mn_avatar` varchar(255) DEFAULT NULL,
  `Mn_banner` varchar(255) DEFAULT NULL,
  `Mn_Description` varchar(255) DEFAULT NULL,
  `Mn_hot` tinyint(4) NOT NULL,
  `Mn_Status` tinyint(4) NOT NULL,
  `Created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`Id`),
  KEY `Manages` (`Mn_admins_id`),
  CONSTRAINT `Manages` FOREIGN KEY (`Mn_admins_id`) REFERENCES `admins` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` (`Id`, `Mn_name`, `Mn_admins_id`, `Mn_avatar`, `Mn_banner`, `Mn_Description`, `Mn_hot`, `Mn_Status`, `Created_at`, `Update_at`) VALUES
(1, 'Tin tức', 1, NULL, NULL, NULL, 1, 1, NULL, NULL),
(2, 'Mẹo vặt', 1, NULL, NULL, NULL, 1, 1, NULL, NULL),
(3, 'Xu hướng', 1, NULL, NULL, NULL, 1, 1, NULL, NULL);
-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `Created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
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
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Pro_name` varchar(255) DEFAULT NULL,
  `Pro_price` int(11) NOT NULL,
  `Pro_content` int(11) NOT NULL,
  `Pro_category_id` int(11) NOT NULL,
  `Created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Pro_admins_id` bigint(20) NOT NULL,
  `Pro_sale` tinyint(4) NOT NULL,
  `Pro_avatar` varchar(255) DEFAULT NULL,
  `Pro_view` int(11) NOT NULL,
  `Pro_hot` tinyint(4) NOT NULL,
  `Pro_active` int(11) NOT NULL,
  `Pro_description` varchar(255) DEFAULT NULL,
  `Pro_number_import` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `test` (`Pro_admins_id`),
  KEY `Belongs` (`Pro_category_id`),
  CONSTRAINT `Belongs` FOREIGN KEY (`Pro_category_id`) REFERENCES `categories` (`Id`),
  CONSTRAINT `test` FOREIGN KEY (`Pro_admins_id`) REFERENCES `admins` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` (`Id`, `Pro_name`, `Pro_price`, `Pro_content`, `Pro_category_id`, `Created_at`, `Update_at`, `Pro_admins_id`, `Pro_sale`, `Pro_avatar`, `Pro_view`, `Pro_hot`, `Pro_active`, `Pro_description`, `Pro_number_import`) VALUES
(1, 'Bảng Phấn Mắt Maybelline New York The City Mini Palette', 288, 1, 1, NULL, NULL, 1, 0, 'https://cocoshop.vn/uploads/shops/2020_12/bang-phan-mat-maybelline-new-york-the-city-mini-palette-12.jpg', 1, 1, 1, 'Bảng Phấn Mắt Maybelline 6 Ô The City Mini Palette là bảng phấn mắt đến từ thương hiệu mỹ phẩm nổi tiếng Maybelline của Mỹ, với 6 ô màu theo nhiều tone màu thời thượng, lâu trôi bền màu từ màu nhũ tới màu lì giúp bạn dễ dàng sáng tạo ra những phong cách t', 9993),
(2, 'Phấn Phủ Trang Điểm Bobbi Brown Soft Sand 11g', 1350, 1, 1, NULL, NULL, 1, 0, 'https://cocoshop.vn/uploads/shops/2020_12/phan-phu-trang-diem-bobbi-brown-5.jpg', 1, 0, 1, 'Finish: mỏng nhẹ, tự nhiên, kiềm dầu cho da.\r\nThiết kế: Vỏ ngoài đen bóng sang trọng cùng dòng chữ của hãng đúng chuẩn thiết kế Bobbi Brown với hộp vuông dễ dàng mang theo trong túi xá', 9999),
(3, 'Chì Kẻ Mày 2 Đầu Silkygirl Perfect Brow Liner & Powder', 159, 1, 1, NULL, NULL, 1, 1, 'https://cocoshop.vn/uploads/shops/2020_11/chi-ke-may-2-dau-silkygirl-perfect-brow-liner-powder.jpg', 1, 1, 1, '- Đầu chì vặn, không cần chuốt. Chất chì êm như kem .\r\n- Đầu bột tán với bột phấn kích thước siêu nhỏ, siêu mịn tạo hiệu ứng màu tự nhiên, nét mày đầy đặn.\r\n- Rất dễ dàng điều khiển và sử dụng.\r\n- Sản phẩm không mùi hương, không gây kích ứng da.  ', 9999),
(4, 'Son Bóng Romand Glasting Water Tint 04 Vintage Ocean', 170, 1, 2, NULL, NULL, 1, 1, 'https://cocoshop.vn/uploads/shops/2021_02/son-bong-romand-glasting-water-tint-04-vintage-ocean.jpg', 1, 1, 1, NULL, 100),
(5, 'Son Dưỡng Môi Rohto Chuyên Biệt Cho Môi Khô, Nứt Nẻ 4.3g', 59, 1, 2, NULL, NULL, 1, 0, 'https://cocoshop.vn/uploads/shops/2020_12/son-duong-moi-rohto.jpg', 1, 1, 1, NULL, 999);

-- ----------------------------
-- Table structure for slide
-- ----------------------------
DROP TABLE IF EXISTS `slide`;
CREATE TABLE `slide` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Sd_title` varchar(255) DEFAULT NULL,
  `Sd_link` int(11) NOT NULL,
  `Sd_image` varchar(255) DEFAULT NULL,
  `Sd_target` tinyint(4) NOT NULL,
  `Sd_active` tinyint(4) NOT NULL,
  `Created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Sd_sort` tinyint(4) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of slide
-- ----------------------------

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
  `Tst_admins_id` bigint(20) NOT NULL,
  `Tst_address` varchar(255) DEFAULT NULL,
  `Tst_note` varchar(255) DEFAULT NULL,
  `Tst_status` tinyint(4) NOT NULL,
  `Created_at` timestamp NULL DEFAULT NULL,
  `Update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `Manage` (`Tst_admins_id`),
  KEY `Make` (`Tst_user_id`),
  CONSTRAINT `Make` FOREIGN KEY (`Tst_user_id`) REFERENCES `users` (`Id`),
  CONSTRAINT `Manage` FOREIGN KEY (`Tst_admins_id`) REFERENCES `admins` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

-- ----------------------------
-- Records of transaction
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Phone` varchar(255) DEFAULT NULL,
  `Status` tinyint(4) DEFAULT NULL,
  `content` text DEFAULT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- ----------------------------
-- Records of users
-- ----------------------------
-- INSERT INTO `users` VALUES ('1', 'admins', 'admins@gmail.com', null, '$2y$10$l9A3RL6zHPI4NkmU5/KVVuakAskdeJS7bXgXYEFgcCR3.NeihVLFK', 'NJKOrAHxEcROZ7szBRdU4yjKDHVaygKlF5sPLM0TeZTNajFtLTIToLf9ZP6J', null, null);
-- ----------------------------


-- Table structure for users_bk
-- ----------------------------
DROP TABLE IF EXISTS `users_bk`;
/*CREATE TABLE `users_bk` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT '',
  `password` varchar(255) NOT NULL,
  `Log_login` text DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Count_comment` tinyint(4) DEFAULT NULL,
  `Avatar` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Status` tinyint(4) DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `create_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users_bk
-- ----------------------------
INSERT INTO `users_bk` VALUES ('1', 'admins', 'admins@gmail.com', 'admins', '$2y$10$ujXZ/myxviCAKxcKe.UR1.4.wTDtvB97WosBoAok.ZUJWaClbMrIa', '1', null, '0', '', '0123456789', '1', null, null);
INSERT INTO `users_bk` VALUES ('2', 'long', 'long@gmail.com', '', '$2y$10$rVsV4454LRWvuRhxWGb8IuOwCm5RVLkLbLk/KOQtL81usBcUAHzs.', null, null, null, null, null, null, null, null);
INSERT INTO `users_bk` VALUES ('3', 'Phat', 'phat@gmail.com', '', '$2y$10$ftxlkRR7Apxja1dbJdAA0.YGfl2kR3QpvXooojpDPq5fJQrKei9My', null, null, null, null, null, null, null, null);
*/
