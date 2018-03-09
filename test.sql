/*
Navicat MySQL Data Transfer

Source Server         : 我的电脑
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-03-09 18:15:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `orders`
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `ordersn` varchar(20) NOT NULL DEFAULT '' COMMENT '订单号',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('1', '2', '2303210dagagd');
INSERT INTO `orders` VALUES ('2', '3', 'agadgdagad1561');
INSERT INTO `orders` VALUES ('3', '2', 'dagadgda');

-- ----------------------------
-- Table structure for `phones`
-- ----------------------------
DROP TABLE IF EXISTS `phones`;
CREATE TABLE `phones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `phone` varchar(20) NOT NULL DEFAULT '' COMMENT '手机号',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of phones
-- ----------------------------
INSERT INTO `phones` VALUES ('1', '18627039537', '9');

-- ----------------------------
-- Table structure for `posts`
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户ID',
  `info` varchar(100) NOT NULL DEFAULT '' COMMENT '个人说明',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES ('1', '9', '改变');

-- ----------------------------
-- Table structure for `roles`
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `roles_name` varchar(20) NOT NULL DEFAULT '' COMMENT '用户的角色名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', '大哥大');

-- ----------------------------
-- Table structure for `role_user`
-- ----------------------------
DROP TABLE IF EXISTS `role_user`;
CREATE TABLE `role_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户id',
  `role_id` int(11) NOT NULL COMMENT '角色id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of role_user
-- ----------------------------
INSERT INTO `role_user` VALUES ('1', '2', '1');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `first_name` varchar(20) NOT NULL DEFAULT '' COMMENT '姓',
  `last_name` varchar(20) NOT NULL DEFAULT '' COMMENT '名',
  `name` varchar(20) NOT NULL DEFAULT '' COMMENT '姓名',
  `age` smallint(6) NOT NULL DEFAULT '0' COMMENT '年龄',
  `updated_at` int(11) unsigned NOT NULL COMMENT '更新时间',
  `created_at` int(11) NOT NULL COMMENT '创建时间',
  `test_time` varchar(30) NOT NULL DEFAULT '',
  `created_date` date NOT NULL,
  `phone_id` int(11) unsigned NOT NULL COMMENT '手机号id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='用户';

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('2', 'tong', 'wen', 'shezhiguole', '50', '0', '0', '', '2016-03-01', '0');
INSERT INTO `users` VALUES ('10', 'tong', 'wen', '', '0', '0', '0', '', '2016-03-01', '0');
INSERT INTO `users` VALUES ('11', '', '', 'ceshi', '0', '0', '0', '', '2016-01-03', '0');
INSERT INTO `users` VALUES ('12', '', '', 'name_age', '20', '0', '0', '', '2016-01-03', '0');
INSERT INTO `users` VALUES ('13', '', '', 'ceshi', '0', '0', '0', '', '2016-01-03', '0');
INSERT INTO `users` VALUES ('14', '', '', 'name_age', '20', '0', '0', '', '2016-01-03', '0');
INSERT INTO `users` VALUES ('15', '', '', 'ceshi', '0', '0', '0', '', '2016-01-03', '0');
