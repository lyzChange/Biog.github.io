# Host: localhost  (Version: 5.5.53)
# Date: 2018-04-26 16:28:29
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "t_user"
#

DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `phoneNumber` varchar(255) DEFAULT NULL,
  `userName` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

#
# Data for table "t_user"
#

/*!40000 ALTER TABLE `t_user` DISABLE KEYS */;
INSERT INTO `t_user` VALUES (1,'15037011302','hhhhhhhh','11111111'),(2,'18838988177','bing_123','1111111'),(3,'','',''),(4,'','',''),(5,'','',''),(6,'13781677177','rrrrrrrr','3333333'),(7,'13781788999','rrrrrrrrr','1111111'),(8,'13781788999','rrrrrrrrr','222222'),(9,'18838988877','hhhhhhh','1111111'),(10,'18838988777','hhhhhhhhh','111111'),(11,'18838988117','ggggggg','111111');
/*!40000 ALTER TABLE `t_user` ENABLE KEYS */;
