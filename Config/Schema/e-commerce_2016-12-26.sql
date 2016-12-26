# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.21)
# Database: e-commerce
# Generation Time: 2016-12-26 19:17:51 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table login_tokens
# ------------------------------------------------------------

CREATE DATABASE `e-commerce`;


DROP TABLE IF EXISTS `login_tokens`;

CREATE TABLE `login_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` char(32) NOT NULL,
  `duration` varchar(32) NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table user_group_permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_group_permissions`;

CREATE TABLE `user_group_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_group_id` int(10) unsigned NOT NULL,
  `controller` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `action` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `allowed` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `user_group_permissions` WRITE;
/*!40000 ALTER TABLE `user_group_permissions` DISABLE KEYS */;

INSERT INTO `user_group_permissions` (`id`, `user_group_id`, `controller`, `action`, `allowed`)
VALUES
	(1,1,'Pages','display',1),
	(2,2,'Pages','display',1),
	(3,3,'Pages','display',1),
	(4,1,'UserGroupPermissions','index',1),
	(5,2,'UserGroupPermissions','index',0),
	(6,3,'UserGroupPermissions','index',0),
	(7,1,'UserGroupPermissions','update',1),
	(8,2,'UserGroupPermissions','update',0),
	(9,3,'UserGroupPermissions','update',0),
	(10,1,'UserGroups','index',1),
	(11,2,'UserGroups','index',0),
	(12,3,'UserGroups','index',0),
	(13,1,'UserGroups','addGroup',1),
	(14,2,'UserGroups','addGroup',0),
	(15,3,'UserGroups','addGroup',0),
	(16,1,'UserGroups','editGroup',1),
	(17,2,'UserGroups','editGroup',0),
	(18,3,'UserGroups','editGroup',0),
	(19,1,'UserGroups','deleteGroup',1),
	(20,2,'UserGroups','deleteGroup',0),
	(21,3,'UserGroups','deleteGroup',0),
	(22,1,'Users','index',1),
	(23,2,'Users','index',0),
	(24,3,'Users','index',0),
	(25,1,'Users','viewUser',1),
	(26,2,'Users','viewUser',0),
	(27,3,'Users','viewUser',0),
	(28,1,'Users','myprofile',1),
	(29,2,'Users','myprofile',1),
	(30,3,'Users','myprofile',0),
	(31,1,'Users','login',1),
	(32,2,'Users','login',1),
	(33,3,'Users','login',1),
	(34,1,'Users','logout',1),
	(35,2,'Users','logout',1),
	(36,3,'Users','logout',1),
	(37,1,'Users','register',1),
	(38,2,'Users','register',1),
	(39,3,'Users','register',1),
	(40,1,'Users','changePassword',1),
	(41,2,'Users','changePassword',1),
	(42,3,'Users','changePassword',0),
	(43,1,'Users','changeUserPassword',1),
	(44,2,'Users','changeUserPassword',0),
	(45,3,'Users','changeUserPassword',0),
	(46,1,'Users','addUser',1),
	(47,2,'Users','addUser',0),
	(48,3,'Users','addUser',0),
	(49,1,'Users','editUser',1),
	(50,2,'Users','editUser',0),
	(51,3,'Users','editUser',0),
	(52,1,'Users','dashboard',1),
	(53,2,'Users','dashboard',1),
	(54,3,'Users','dashboard',0),
	(55,1,'Users','deleteUser',1),
	(56,2,'Users','deleteUser',0),
	(57,3,'Users','deleteUser',0),
	(58,1,'Users','makeActive',1),
	(59,2,'Users','makeActive',0),
	(60,3,'Users','makeActive',0),
	(61,1,'Users','accessDenied',1),
	(62,2,'Users','accessDenied',1),
	(63,3,'Users','accessDenied',1),
	(64,1,'Users','userVerification',1),
	(65,2,'Users','userVerification',1),
	(66,3,'Users','userVerification',1),
	(67,1,'Users','forgotPassword',1),
	(68,2,'Users','forgotPassword',1),
	(69,3,'Users','forgotPassword',1),
	(70,1,'Users','makeActiveInactive',1),
	(71,2,'Users','makeActiveInactive',0),
	(72,3,'Users','makeActiveInactive',0),
	(73,1,'Users','verifyEmail',1),
	(74,2,'Users','verifyEmail',0),
	(75,3,'Users','verifyEmail',0),
	(76,1,'Users','activatePassword',1),
	(77,2,'Users','activatePassword',1),
	(78,3,'Users','activatePassword',1),
	(79,1,'Start','sendMail',1),
	(80,2,'Start','sendMail',1),
	(81,3,'Start','sendMail',1);

/*!40000 ALTER TABLE `user_group_permissions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_groups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_groups`;

CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `alias_name` varchar(100) DEFAULT NULL,
  `allowRegistration` int(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `user_groups` WRITE;
/*!40000 ALTER TABLE `user_groups` DISABLE KEYS */;

INSERT INTO `user_groups` (`id`, `name`, `alias_name`, `allowRegistration`, `created`, `modified`)
VALUES
	(1,'Admin','Admin',0,'2016-03-29 11:38:05','2016-03-29 11:38:05'),
	(2,'User','User',1,'2016-03-29 11:38:05','2016-03-29 11:38:05'),
	(3,'Guest','Guest',0,'2016-03-29 11:38:05','2016-03-29 11:38:05');

/*!40000 ALTER TABLE `user_groups` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_id` int(11) unsigned DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `salt` text,
  `email` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email_verified` int(1) DEFAULT '0',
  `active` int(1) NOT NULL DEFAULT '0',
  `ip_address` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`username`),
  KEY `mail` (`email`),
  KEY `users_FKIndex1` (`user_group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `user_group_id`, `username`, `password`, `salt`, `email`, `first_name`, `last_name`, `email_verified`, `active`, `ip_address`, `created`, `modified`, `phone`)
VALUES
	(1,1,'admin','0f94c944f0effa3f9cb410d61f707ec6','db41b249df196c8cb74d2e4b286f4189','admin@admin.com','Admin','',1,1,'','2016-03-29 11:38:05','2016-07-04 16:01:37',NULL),
	(2,2,'cesarherguetal@gmail.com','77651cd2453ee77c00a48bd4b051f7da','0a366acd55591498b963638c045e0411','cesarherguetal@gmail.com','cesar','hergueta',1,1,NULL,'2016-12-26 13:40:07','2016-12-26 13:40:07',NULL);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
