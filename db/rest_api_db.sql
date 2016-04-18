/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : rest_api_db

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-04-18 18:01:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tasks
-- ----------------------------
DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `task_name` varchar(255) NOT NULL,
  `task_desc` mediumtext,
  `task_priority` int(2) NOT NULL,
  `task_completed` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tasks
-- ----------------------------
INSERT INTO `tasks` VALUES ('10', 'Vestibulum ac ', 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.', '5', null);
INSERT INTO `tasks` VALUES ('12', '123', '456 de 789', '2', null);
INSERT INTO `tasks` VALUES ('18', 'Some text', 'Vivamus suscipit tortor eget felis porttitor volutpat.', '10', null);
INSERT INTO `tasks` VALUES ('19', 'Foo bar', 'Donec sollicitudin molestie malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.', '4', null);
INSERT INTO `tasks` VALUES ('21', 'Sed utyii', 'Sed porttitor lectus nibh.', '1', null);
