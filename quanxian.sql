/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50536
Source Host           : localhost:3306
Source Database       : mowei

Target Server Type    : MYSQL
Target Server Version : 50536
File Encoding         : 65001

Date: 2016-09-20 17:32:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tp_adminment_permission_relation`
-- ----------------------------
DROP TABLE IF EXISTS `tp_adminment_permission_relation`;
CREATE TABLE `tp_adminment_permission_relation` (
  `id` int(11) NOT NULL,
  `am_id` int(11) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_adminment_permission_relation
-- ----------------------------

-- ----------------------------
-- Table structure for `tp_admin_group_relation`
-- ----------------------------
DROP TABLE IF EXISTS `tp_admin_group_relation`;
CREATE TABLE `tp_admin_group_relation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) DEFAULT NULL,
  `g_id` int(11) DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_admin_group_relation
-- ----------------------------

-- ----------------------------
-- Table structure for `tp_admin_menu_relation`
-- ----------------------------
DROP TABLE IF EXISTS `tp_admin_menu_relation`;
CREATE TABLE `tp_admin_menu_relation` (
  `am_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) DEFAULT NULL,
  `m_id` int(11) DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `type` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`am_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_admin_menu_relation
-- ----------------------------

-- ----------------------------
-- Table structure for `tp_user_admin`
-- ----------------------------
DROP TABLE IF EXISTS `tp_user_admin`;
CREATE TABLE `tp_user_admin` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `time` int(11) DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `user_name` char(20) DEFAULT NULL,
  `password` char(64) DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_user_admin
-- ----------------------------

-- ----------------------------
-- Table structure for `tp_user_group`
-- ----------------------------
DROP TABLE IF EXISTS `tp_user_group`;
CREATE TABLE `tp_user_group` (
  `g_id` int(11) NOT NULL AUTO_INCREMENT,
  `g_name` varchar(50) DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`g_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_user_group
-- ----------------------------

-- ----------------------------
-- Table structure for `tp_user_meny`
-- ----------------------------
DROP TABLE IF EXISTS `tp_user_meny`;
CREATE TABLE `tp_user_meny` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `parentmid` int(11) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  `is_delete` tinyint(4) NOT NULL DEFAULT '0',
  `menu_name` varchar(100) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_user_meny
-- ----------------------------

-- ----------------------------
-- Table structure for `tp_user_permission`
-- ----------------------------
DROP TABLE IF EXISTS `tp_user_permission`;
CREATE TABLE `tp_user_permission` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(50) DEFAULT NULL,
  `desc` varchar(200) DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_user_permission
-- ----------------------------
