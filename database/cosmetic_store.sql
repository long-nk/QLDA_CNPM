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
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Pro_name` varchar(255) DEFAULT NULL,
  `Pro_price` int(11) NOT NULL,
  `Pro_content` int(11) NOT NULL,
  `Pro_C_id` int(11) NOT NULL,
  `Created_at` timestamp NULL DEFAULT NULL,
  `Update_at` timestamp NULL DEFAULT NULL,
  `Pro_admin_id` bigint(20) NOT NULL,
  `Pro_sale` tinyint(4) NOT NULL,
  `Pro_avatar` varchar(255) DEFAULT NULL,
  `Pro_view` int(11) NOT NULL,
  `Pro_hot` tinyint(4) NOT NULL,
  `Pro_active` int(11) NOT NULL,
  `Pro_description` varchar(255) DEFAULT NULL,
  `Pro_number_import` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `test` (`Pro_admin_id`),
  KEY `Belongs` (`Pro_C_id`),
  CONSTRAINT `Belongs` FOREIGN KEY (`Pro_C_id`) REFERENCES `categories` (`Id`),
  CONSTRAINT `test` FOREIGN KEY (`Pro_admin_id`) REFERENCES `admin` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------

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
  `Created_at` timestamp NULL DEFAULT NULL,
  `Update_at` timestamp NULL DEFAULT NULL,
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
  `Tst_admin_id` bigint(20) NOT NULL,
  `Tst_address` varchar(255) DEFAULT NULL,
  `Tst_note` varchar(255) DEFAULT NULL,
  `Tst_status` tinyint(4) NOT NULL,
  `Created_at` timestamp NULL DEFAULT NULL,
  `Update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `Manage` (`Tst_admin_id`),
  KEY `Make` (`Tst_user_id`),
  CONSTRAINT `Make` FOREIGN KEY (`Tst_user_id`) REFERENCES `users` (`Id`),
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
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT '',
  `password` varchar(255) NOT NULL,
  `Log_login` text DEFAULT NULL,
  `Created_at` timestamp NULL DEFAULT NULL,
  `Update_at` timestamp NULL DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Count_comment` tinyint(4) DEFAULT NULL,
  `Avatar` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Cmt_user_id` (`Id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', 'admin@gmail.com', 'admin', '$2y$10$ujXZ/myxviCAKxcKe.UR1.4.wTDtvB97WosBoAok.ZUJWaClbMrIa', '1', null, null, null, '0', '', '0123456789', '1');
INSERT INTO `users` VALUES ('2', 'long', 'long@gmail.com', '', '$2y$10$rVsV4454LRWvuRhxWGb8IuOwCm5RVLkLbLk/KOQtL81usBcUAHzs.', null, null, null, null, null, null, null, null);
