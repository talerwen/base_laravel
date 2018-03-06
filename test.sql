/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-03-06 21:37:01
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
INSERT INTO `posts` VALUES ('1', '2', '改变');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='用户';

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '童', '童', '童文', '30', '0', '0', '');
INSERT INTO `users` VALUES ('2', '大', '大', '张三', '20', '20181111', '20180101', '20180101');
INSERT INTO `users` VALUES ('3', '爱的', '啊大哥', '李四', '20', '0', '0', '2018-03-06');
INSERT INTO `users` VALUES ('4', '啊大哥', '爱的', '王五', '40', '0', '20180306', '20180306');
