-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           5.5.46-0ubuntu0.14.04.2 - (Ubuntu)
-- SE du serveur:                debian-linux-gnu
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Export de la structure de la base pour stock
CREATE DATABASE IF NOT EXISTS `stock` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `stock`;


-- Export de la structure de table stock. ci_sessions
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Export de données de la table stock.ci_sessions : ~0 rows (environ)
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;


-- Export de la structure de table stock. groups
CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Export de données de la table stock.groups : ~2 rows (environ)
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT IGNORE INTO `groups` (`id`, `name`, `description`) VALUES
	(1, 'admin', 'Administrator'),
	(2, 'members', 'General User');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;


-- Export de la structure de table stock. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `address` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

-- Export de données de la table stock.users : ~3 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT IGNORE INTO `users` (`id`, `ip_address`, `username`, `first_name`, `last_name`, `email`, `password`, `salt`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `company`, `phone`, `dob`, `thumbnail`, `address`) VALUES
	(1, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(2, '', 'OrifInfo2009', NULL, NULL, 'orif@orif.ch', '$2y$10$0O5aAEVZ49ibvaUenDtQxupRDcjNv0TM33csRdAotNFUis6dZume.', 'A776AFD2-FBD1-DCCD-66D4-C1FB45F1CAF5', '6', '22', 4, '12', 1, 4, 1, 'Feugiat Lorem Associates', '0-57-822-26-25', '2016-03-03', NULL, NULL),
	(3, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(4, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(5, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(6, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(7, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(8, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(9, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(10, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(11, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(12, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(13, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(14, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(15, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(16, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(17, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(18, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(19, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(20, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(21, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(22, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(23, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(24, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(25, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(26, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(27, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(28, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(29, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(30, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(31, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(32, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(33, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(34, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(35, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(36, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(37, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(38, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(39, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(40, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(41, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(42, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(43, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(44, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(45, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(46, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(47, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(48, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(49, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(50, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(51, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(52, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(53, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(54, '', 'Test', NULL, NULL, '', '$2y$10$AXkfZR2oRjg7/pcyneybDecXBXEdHKx2DajfD3BFRPJIwbYBEW3Kq', 'DC181FC2-FF07-341F-BE8B-5087FB2AEC1D', '17', '21', 1, '21', 8, 9, 1, 'Magnis Dis Limited', '0-11-484-88-83', '2016-01-27', NULL, NULL),
	(55, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(56, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(57, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(58, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(59, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(60, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(61, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(62, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(63, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(64, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(65, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(66, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(67, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(68, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(69, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(70, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(71, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(72, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(73, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(74, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(75, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(76, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(77, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(78, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(79, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(80, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(81, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(82, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(83, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(84, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(85, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(86, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(87, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(88, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(89, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(90, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(91, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(92, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(93, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(94, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(95, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(96, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(97, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(98, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(99, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL),
	(100, '127.0.0.1', 'administrator', 'Admin', 'istrator', 'admin@admin.com', '$2y$10$g.GVKVz9rmWHZAdR0zYzhuyFX0VGphXZ9c3LibFBJy7Usm9wXT2I.', '0D5D991C-2824-1E2C-EB5B-C4043ECB99C7', '13', '30', 4, '30', 1, 7, 1, 'Augue Institute', '0-79-516-52-25', '2015-05-23', NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Export de la structure de table stock. users_groups
CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Export de données de la table stock.users_groups : ~2 rows (environ)
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT IGNORE INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
	(1, 1, 1),
	(2, 1, 2);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
