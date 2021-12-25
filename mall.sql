/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 50734
 Source Host           : localhost:3306
 Source Schema         : mall

 Target Server Type    : MySQL
 Target Server Version : 50734
 File Encoding         : 65001

 Date: 25/12/2021 20:58:12
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `name` varchar(255) NOT NULL COMMENT '商品名称',
  `pic` varchar(1024) NOT NULL COMMENT '图片地址',
  `price` decimal(10,2) NOT NULL COMMENT '价格',
  `status` int(11) NOT NULL COMMENT '商品状态，1新增，2已上架，3已下架',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
BEGIN;
INSERT INTO `product` VALUES (2, '香辣鸡排+冰红茶气泡水', 'https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fimg.jj20.com%2Fup%2Fallimg%2Ftp05%2F19100122420C335-0-lp.jpg&refer=http%3A%2F%2Fimg.jj20.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1642448167&t=c43e67c9af5ffb024cda4cca472a82ff', 12.00, 3);
INSERT INTO `product` VALUES (3, '甘梅鸡排+冰红茶气泡水', 'https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fimg.jj20.com%2Fup%2Fallimg%2Ftp05%2F1Z92R1392462X-0-lp.jpg&refer=http%3A%2F%2Fimg.jj20.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1642448167&t=11f8e26c1638503b90db5dbeb570a464', 13.00, 3);
INSERT INTO `product` VALUES (4, '藤椒鸡排+冰红茶气泡水', 'https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fimg.jj20.com%2Fup%2Fallimg%2Ftp01%2F1ZZQ20QJS6-0-lp.jpg&refer=http%3A%2F%2Fimg.jj20.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1642448167&t=c2975b7239e11c01578f2930b27d8681', 14.00, 3);
INSERT INTO `product` VALUES (5, '正新小鸡肉串', 'https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fimg.jj20.com%2Fup%2Fallimg%2Ftp03%2F1Z921134I12011-0-lp.jpg&refer=http%3A%2F%2Fimg.jj20.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1642448167&t=828511300ea31f30d6ec8230a2f8b222', 15.00, 1);
INSERT INTO `product` VALUES (6, '鸡蛋手抓饼', 'https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fimg.jj20.com%2Fup%2Fallimg%2Ftp05%2F1Z9292320153V8-0-lp.jpg&refer=http%3A%2F%2Fimg.jj20.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1642448167&t=1ae6c36b3ff2a0864fc8b17149ad8689', 16.00, 3);
INSERT INTO `product` VALUES (7, '一口肠', 'https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fimg.jj20.com%2Fup%2Fallimg%2Ftp05%2F19100215450462F-0-lp.jpg&refer=http%3A%2F%2Fimg.jj20.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1642448167&t=0152906030771f2e935f7fcdc2d277e6', 17.00, 2);
INSERT INTO `product` VALUES (8, '鸡肉串', 'https://gimg2.baidu.com/image_search/src=http%3A%2F%2Ffile06.16sucai.com%2F2016%2F0531%2F40fae16cf686999482d8ab01af629453.jpg&refer=http%3A%2F%2Ffile06.16sucai.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1642448167&t=fd21f0d2efe6a49ae6d98f27eb02159e', 8.00, 2);
INSERT INTO `product` VALUES (9, '孜香锁骨', 'https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fimg.jj20.com%2Fup%2Fallimg%2Ftp02%2F1Z91G402051057-0-lp.jpg&refer=http%3A%2F%2Fimg.jj20.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1642448167&t=dfe83f9817a2bbbb9044fd0f3012c15a', 19.00, 3);
INSERT INTO `product` VALUES (10, '寒露一键排版1', 'sss1', 2.01, 2);
INSERT INTO `product` VALUES (12, '1', '1', 11.00, 2);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
