/*
 Navicat Premium Data Transfer

 Source Server         : MYSQL
 Source Server Type    : MySQL
 Source Server Version : 100122
 Source Host           : localhost:3306
 Source Schema         : form

 Target Server Type    : MySQL
 Target Server Version : 100122
 File Encoding         : 65001

 Date: 15/04/2019 17:10:15
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gender` enum('male','female') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `phone_number` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'putut', '$2y$12$JFAyN3IwNm85IW5hc2RhNOib1yn94CnBW1Bztsd34qu', '$2y$12$JFAyN3IwNm85IW5hc2RhNOLryZ7Tyo.FjWg4a7LgDCr', '', '+62822571039');
INSERT INTO `users` VALUES (2, 'andika', '$2y$12$JFAyN3IwNm85IW5hc2RhNO.99ZP08VDM0qoCJIEwFS3', '$2y$12$JFAyN3IwNm85IW5hc2RhNO2jbv2OVArTLET.6SCphPY', '', '082297762592');
INSERT INTO `users` VALUES (3, 'andika', '$2y$12$JFAyN3IwNm85IW5hc2RhNO.99ZP08VDM0qoCJIEwFS3', '$2y$12$JFAyN3IwNm85IW5hc2RhNOLryZ7Tyo.FjWg4a7LgDCr', '', '+62822571039');
INSERT INTO `users` VALUES (4, 'andika', '$2y$12$JFAyN3IwNm85IW5hc2RhNO.99ZP08VDM0qoCJIEwFS3', '$2y$12$JFAyN3IwNm85IW5hc2RhNO2jbv2OVArTLET.6SCphPY', 'male', '08226785412');

SET FOREIGN_KEY_CHECKS = 1;
