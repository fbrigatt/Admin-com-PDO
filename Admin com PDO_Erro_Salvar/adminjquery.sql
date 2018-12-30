/*
Navicat MySQL Data Transfer

Source Server         : xampp
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : adminjquery

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-28 08:33:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `administrador`
-- ----------------------------
DROP TABLE IF EXISTS `administrador`;
CREATE TABLE `administrador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `administrador_nome` varchar(50) NOT NULL,
  `administrador_email` varchar(150) NOT NULL,
  `administrador_login` varchar(25) NOT NULL,
  `administrador_senha` varchar(150) NOT NULL,
  `administrador_nivel` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of administrador
-- ----------------------------
INSERT INTO `administrador` VALUES ('1', 'Rafael Silva', 'email@hotmail.com', 'rafael', 'caf1a3dfb505ffed0d024130f58c5cfa', '1');
