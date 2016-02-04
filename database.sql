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
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Export de données de la table stock.ci_sessions : ~0 rows (environ)
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;


-- Export de la structure de table stock. country
CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `alpha_2` varchar(2) NOT NULL DEFAULT '',
  `alpha_3` varchar(3) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=250 DEFAULT CHARSET=utf8;

-- Export de données de la table stock.country : ~249 rows (environ)
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
INSERT IGNORE INTO `country` (`id`, `name`, `alpha_2`, `alpha_3`) VALUES
	(1, 'Afghanistan', 'af', 'afg'),
	(2, 'Aland Islands', 'ax', 'ala'),
	(3, 'Albania', 'al', 'alb'),
	(4, 'Algeria', 'dz', 'dza'),
	(5, 'American Samoa', 'as', 'asm'),
	(6, 'Andorra', 'ad', 'and'),
	(7, 'Angola', 'ao', 'ago'),
	(8, 'Anguilla', 'ai', 'aia'),
	(9, 'Antarctica', 'aq', ''),
	(10, 'Antigua and Barbuda', 'ag', 'atg'),
	(11, 'Argentina', 'ar', 'arg'),
	(12, 'Armenia', 'am', 'arm'),
	(13, 'Aruba', 'aw', 'abw'),
	(14, 'Australia', 'au', 'aus'),
	(15, 'Austria', 'at', 'aut'),
	(16, 'Azerbaijan', 'az', 'aze'),
	(17, 'Bahamas', 'bs', 'bhs'),
	(18, 'Bahrain', 'bh', 'bhr'),
	(19, 'Bangladesh', 'bd', 'bgd'),
	(20, 'Barbados', 'bb', 'brb'),
	(21, 'Belarus', 'by', 'blr'),
	(22, 'Belgium', 'be', 'bel'),
	(23, 'Belize', 'bz', 'blz'),
	(24, 'Benin', 'bj', 'ben'),
	(25, 'Bermuda', 'bm', 'bmu'),
	(26, 'Bhutan', 'bt', 'btn'),
	(27, 'Bolivia, Plurinational State of', 'bo', 'bol'),
	(28, 'Bonaire, Sint Eustatius and Saba', 'bq', 'bes'),
	(29, 'Bosnia and Herzegovina', 'ba', 'bih'),
	(30, 'Botswana', 'bw', 'bwa'),
	(31, 'Bouvet Island', 'bv', ''),
	(32, 'Brazil', 'br', 'bra'),
	(33, 'British Indian Ocean Territory', 'io', ''),
	(34, 'Brunei Darussalam', 'bn', 'brn'),
	(35, 'Bulgaria', 'bg', 'bgr'),
	(36, 'Burkina Faso', 'bf', 'bfa'),
	(37, 'Burundi', 'bi', 'bdi'),
	(38, 'Cambodia', 'kh', 'khm'),
	(39, 'Cameroon', 'cm', 'cmr'),
	(40, 'Canada', 'ca', 'can'),
	(41, 'Cape Verde', 'cv', 'cpv'),
	(42, 'Cayman Islands', 'ky', 'cym'),
	(43, 'Central African Republic', 'cf', 'caf'),
	(44, 'Chad', 'td', 'tcd'),
	(45, 'Chile', 'cl', 'chl'),
	(46, 'China', 'cn', 'chn'),
	(47, 'Christmas Island', 'cx', ''),
	(48, 'Cocos (Keeling) Islands', 'cc', ''),
	(49, 'Colombia', 'co', 'col'),
	(50, 'Comoros', 'km', 'com'),
	(51, 'Congo', 'cg', 'cog'),
	(52, 'Congo, The Democratic Republic of the', 'cd', 'cod'),
	(53, 'Cook Islands', 'ck', 'cok'),
	(54, 'Costa Rica', 'cr', 'cri'),
	(55, 'Cote d\'Ivoire', 'ci', 'civ'),
	(56, 'Croatia', 'hr', 'hrv'),
	(57, 'Cuba', 'cu', 'cub'),
	(58, 'Curacao', 'cw', 'cuw'),
	(59, 'Cyprus', 'cy', 'cyp'),
	(60, 'Czech Republic', 'cz', 'cze'),
	(61, 'Denmark', 'dk', 'dnk'),
	(62, 'Djibouti', 'dj', 'dji'),
	(63, 'Dominica', 'dm', 'dma'),
	(64, 'Dominican Republic', 'do', 'dom'),
	(65, 'Ecuador', 'ec', 'ecu'),
	(66, 'Egypt', 'eg', 'egy'),
	(67, 'El Salvador', 'sv', 'slv'),
	(68, 'Equatorial Guinea', 'gq', 'gnq'),
	(69, 'Eritrea', 'er', 'eri'),
	(70, 'Estonia', 'ee', 'est'),
	(71, 'Ethiopia', 'et', 'eth'),
	(72, 'Falkland Islands (Malvinas)', 'fk', 'flk'),
	(73, 'Faroe Islands', 'fo', 'fro'),
	(74, 'Fiji', 'fj', 'fji'),
	(75, 'Finland', 'fi', 'fin'),
	(76, 'France', 'fr', 'fra'),
	(77, 'French Guiana', 'gf', 'guf'),
	(78, 'French Polynesia', 'pf', 'pyf'),
	(79, 'French Southern Territories', 'tf', ''),
	(80, 'Gabon', 'ga', 'gab'),
	(81, 'Gambia', 'gm', 'gmb'),
	(82, 'Georgia', 'ge', 'geo'),
	(83, 'Germany', 'de', 'deu'),
	(84, 'Ghana', 'gh', 'gha'),
	(85, 'Gibraltar', 'gi', 'gib'),
	(86, 'Greece', 'gr', 'grc'),
	(87, 'Greenland', 'gl', 'grl'),
	(88, 'Grenada', 'gd', 'grd'),
	(89, 'Guadeloupe', 'gp', 'glp'),
	(90, 'Guam', 'gu', 'gum'),
	(91, 'Guatemala', 'gt', 'gtm'),
	(92, 'Guernsey', 'gg', 'ggy'),
	(93, 'Guinea', 'gn', 'gin'),
	(94, 'Guinea-Bissau', 'gw', 'gnb'),
	(95, 'Guyana', 'gy', 'guy'),
	(96, 'Haiti', 'ht', 'hti'),
	(97, 'Heard Island and McDonald Islands', 'hm', ''),
	(98, 'Holy See (Vatican City State)', 'va', 'vat'),
	(99, 'Honduras', 'hn', 'hnd'),
	(100, 'Hong Kong', 'hk', 'hkg'),
	(101, 'Hungary', 'hu', 'hun'),
	(102, 'Iceland', 'is', 'isl'),
	(103, 'India', 'in', 'ind'),
	(104, 'Indonesia', 'id', 'idn'),
	(105, 'Iran, Islamic Republic of', 'ir', 'irn'),
	(106, 'Iraq', 'iq', 'irq'),
	(107, 'Ireland', 'ie', 'irl'),
	(108, 'Isle of Man', 'im', 'imn'),
	(109, 'Israel', 'il', 'isr'),
	(110, 'Italy', 'it', 'ita'),
	(111, 'Jamaica', 'jm', 'jam'),
	(112, 'Japan', 'jp', 'jpn'),
	(113, 'Jersey', 'je', 'jey'),
	(114, 'Jordan', 'jo', 'jor'),
	(115, 'Kazakhstan', 'kz', 'kaz'),
	(116, 'Kenya', 'ke', 'ken'),
	(117, 'Kiribati', 'ki', 'kir'),
	(118, 'Korea, Democratic People\'s Republic of', 'kp', 'prk'),
	(119, 'Korea, Republic of', 'kr', 'kor'),
	(120, 'Kuwait', 'kw', 'kwt'),
	(121, 'Kyrgyzstan', 'kg', 'kgz'),
	(122, 'Lao People\'s Democratic Republic', 'la', 'lao'),
	(123, 'Latvia', 'lv', 'lva'),
	(124, 'Lebanon', 'lb', 'lbn'),
	(125, 'Lesotho', 'ls', 'lso'),
	(126, 'Liberia', 'lr', 'lbr'),
	(127, 'Libyan Arab Jamahiriya', 'ly', 'lby'),
	(128, 'Liechtenstein', 'li', 'lie'),
	(129, 'Lithuania', 'lt', 'ltu'),
	(130, 'Luxembourg', 'lu', 'lux'),
	(131, 'Macao', 'mo', 'mac'),
	(132, 'Macedonia, The former Yugoslav Republic of', 'mk', 'mkd'),
	(133, 'Madagascar', 'mg', 'mdg'),
	(134, 'Malawi', 'mw', 'mwi'),
	(135, 'Malaysia', 'my', 'mys'),
	(136, 'Maldives', 'mv', 'mdv'),
	(137, 'Mali', 'ml', 'mli'),
	(138, 'Malta', 'mt', 'mlt'),
	(139, 'Marshall Islands', 'mh', 'mhl'),
	(140, 'Martinique', 'mq', 'mtq'),
	(141, 'Mauritania', 'mr', 'mrt'),
	(142, 'Mauritius', 'mu', 'mus'),
	(143, 'Mayotte', 'yt', 'myt'),
	(144, 'Mexico', 'mx', 'mex'),
	(145, 'Micronesia, Federated States of', 'fm', 'fsm'),
	(146, 'Moldova, Republic of', 'md', 'mda'),
	(147, 'Monaco', 'mc', 'mco'),
	(148, 'Mongolia', 'mn', 'mng'),
	(149, 'Montenegro', 'me', 'mne'),
	(150, 'Montserrat', 'ms', 'msr'),
	(151, 'Morocco', 'ma', 'mar'),
	(152, 'Mozambique', 'mz', 'moz'),
	(153, 'Myanmar', 'mm', 'mmr'),
	(154, 'Namibia', 'na', 'nam'),
	(155, 'Nauru', 'nr', 'nru'),
	(156, 'Nepal', 'np', 'npl'),
	(157, 'Netherlands', 'nl', 'nld'),
	(158, 'New Caledonia', 'nc', 'ncl'),
	(159, 'New Zealand', 'nz', 'nzl'),
	(160, 'Nicaragua', 'ni', 'nic'),
	(161, 'Niger', 'ne', 'ner'),
	(162, 'Nigeria', 'ng', 'nga'),
	(163, 'Niue', 'nu', 'niu'),
	(164, 'Norfolk Island', 'nf', 'nfk'),
	(165, 'Northern Mariana Islands', 'mp', 'mnp'),
	(166, 'Norway', 'no', 'nor'),
	(167, 'Oman', 'om', 'omn'),
	(168, 'Pakistan', 'pk', 'pak'),
	(169, 'Palau', 'pw', 'plw'),
	(170, 'Palestinian Territory, Occupied', 'ps', 'pse'),
	(171, 'Panama', 'pa', 'pan'),
	(172, 'Papua New Guinea', 'pg', 'png'),
	(173, 'Paraguay', 'py', 'pry'),
	(174, 'Peru', 'pe', 'per'),
	(175, 'Philippines', 'ph', 'phl'),
	(176, 'Pitcairn', 'pn', 'pcn'),
	(177, 'Poland', 'pl', 'pol'),
	(178, 'Portugal', 'pt', 'prt'),
	(179, 'Puerto Rico', 'pr', 'pri'),
	(180, 'Qatar', 'qa', 'qat'),
	(181, 'Reunion', 're', 'reu'),
	(182, 'Romania', 'ro', 'rou'),
	(183, 'Russian Federation', 'ru', 'rus'),
	(184, 'Rwanda', 'rw', 'rwa'),
	(185, 'Saint Barthelemy', 'bl', 'blm'),
	(186, 'Saint Helena, Ascension and Tristan Da Cunha', 'sh', 'shn'),
	(187, 'Saint Kitts and Nevis', 'kn', 'kna'),
	(188, 'Saint Lucia', 'lc', 'lca'),
	(189, 'Saint Martin (French Part)', 'mf', 'maf'),
	(190, 'Saint Pierre and Miquelon', 'pm', 'spm'),
	(191, 'Saint Vincent and The Grenadines', 'vc', 'vct'),
	(192, 'Samoa', 'ws', 'wsm'),
	(193, 'San Marino', 'sm', 'smr'),
	(194, 'Sao Tome and Principe', 'st', 'stp'),
	(195, 'Saudi Arabia', 'sa', 'sau'),
	(196, 'Senegal', 'sn', 'sen'),
	(197, 'Serbia', 'rs', 'srb'),
	(198, 'Seychelles', 'sc', 'syc'),
	(199, 'Sierra Leone', 'sl', 'sle'),
	(200, 'Singapore', 'sg', 'sgp'),
	(201, 'Sint Maarten (Dutch Part)', 'sx', 'sxm'),
	(202, 'Slovakia', 'sk', 'svk'),
	(203, 'Slovenia', 'si', 'svn'),
	(204, 'Solomon Islands', 'sb', 'slb'),
	(205, 'Somalia', 'so', 'som'),
	(206, 'South Africa', 'za', 'zaf'),
	(207, 'South Georgia and The South Sandwich Islands', 'gs', ''),
	(208, 'South Sudan', 'ss', 'ssd'),
	(209, 'Spain', 'es', 'esp'),
	(210, 'Sri Lanka', 'lk', 'lka'),
	(211, 'Sudan', 'sd', 'sdn'),
	(212, 'Suriname', 'sr', 'sur'),
	(213, 'Svalbard and Jan Mayen', 'sj', 'sjm'),
	(214, 'Swaziland', 'sz', 'swz'),
	(215, 'Sweden', 'se', 'swe'),
	(216, 'Switzerland', 'ch', 'che'),
	(217, 'Syrian Arab Republic', 'sy', 'syr'),
	(218, 'Taiwan, Province of China', 'tw', ''),
	(219, 'Tajikistan', 'tj', 'tjk'),
	(220, 'Tanzania, United Republic of', 'tz', 'tza'),
	(221, 'Thailand', 'th', 'tha'),
	(222, 'Timor-Leste', 'tl', 'tls'),
	(223, 'Togo', 'tg', 'tgo'),
	(224, 'Tokelau', 'tk', 'tkl'),
	(225, 'Tonga', 'to', 'ton'),
	(226, 'Trinidad and Tobago', 'tt', 'tto'),
	(227, 'Tunisia', 'tn', 'tun'),
	(228, 'Turkey', 'tr', 'tur'),
	(229, 'Turkmenistan', 'tm', 'tkm'),
	(230, 'Turks and Caicos Islands', 'tc', 'tca'),
	(231, 'Tuvalu', 'tv', 'tuv'),
	(232, 'Uganda', 'ug', 'uga'),
	(233, 'Ukraine', 'ua', 'ukr'),
	(234, 'United Arab Emirates', 'ae', 'are'),
	(235, 'United Kingdom', 'gb', 'gbr'),
	(236, 'United States', 'us', 'usa'),
	(237, 'United States Minor Outlying Islands', 'um', ''),
	(238, 'Uruguay', 'uy', 'ury'),
	(239, 'Uzbekistan', 'uz', 'uzb'),
	(240, 'Vanuatu', 'vu', 'vut'),
	(241, 'Venezuela, Bolivarian Republic of', 've', 'ven'),
	(242, 'Viet Nam', 'vn', 'vnm'),
	(243, 'Virgin Islands, British', 'vg', 'vgb'),
	(244, 'Virgin Islands, U.S.', 'vi', 'vir'),
	(245, 'Wallis and Futuna', 'wf', 'wlf'),
	(246, 'Western Sahara', 'eh', 'esh'),
	(247, 'Yemen', 'ye', 'yem'),
	(248, 'Zambia', 'zm', 'zmb'),
	(249, 'Zimbabwe', 'zw', 'zwe');
/*!40000 ALTER TABLE `country` ENABLE KEYS */;


-- Export de la structure de table stock. department
CREATE TABLE IF NOT EXISTS `department` (
  `department_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Export de données de la table stock.department : ~3 rows (environ)
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT IGNORE INTO `department` (`department_id`, `name`) VALUES
	(1, 'Observation'),
	(2, 'Formation'),
	(3, 'Autre');
/*!40000 ALTER TABLE `department` ENABLE KEYS */;


-- Export de la structure de table stock. groups
CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Export de données de la table stock.groups : ~7 rows (environ)
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT IGNORE INTO `groups` (`id`, `name`, `description`) VALUES
	(1, 'admin 1', 'Administrator test'),
	(2, 'members', 'General User'),
	(3, 'asdff', ''),
	(4, 'Démo', ''),
	(5, 'asdfffgdg', 'dfasgfsdfg'),
	(6, 'admin', ''),
	(7, '64457437', '');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;


-- Export de la structure de table stock. item
CREATE TABLE IF NOT EXISTS `item` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` text,
  `supplier_id` int(11) DEFAULT NULL,
  `supplier_ref` varchar(45) DEFAULT NULL,
  `buying_price` float DEFAULT NULL,
  `buying_date` date DEFAULT NULL,
  `warranty_duration` int(11) DEFAULT NULL,
  `file_number` varchar(45) DEFAULT NULL,
  `serial_number` varchar(45) DEFAULT NULL,
  `remarks` text,
  `image` varchar(256) DEFAULT NULL,
  `created_by_user_id` int(11) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `modified_by_user_id` int(11) DEFAULT NULL,
  `modified_date` date DEFAULT NULL,
  `control_by_user_id` int(11) DEFAULT NULL,
  `control_date` date DEFAULT NULL,
  `stocking_place_id` int(11) DEFAULT NULL,
  `item_state_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_id`),
  KEY `fk_created_by_user_id_idx` (`created_by_user_id`),
  KEY `fk_stocking_place_id_idx` (`stocking_place_id`),
  KEY `fk_modified_by_user_id_idx` (`modified_by_user_id`),
  KEY `fk_item_state_id_idx` (`item_state_id`),
  KEY `fk_supplier_id_idx` (`supplier_id`),
  KEY `fk_control_by_user_id_idx` (`control_by_user_id`),
  CONSTRAINT `fk_control_by_user_id` FOREIGN KEY (`control_by_user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_created_by_user_id` FOREIGN KEY (`created_by_user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_item_state_id` FOREIGN KEY (`item_state_id`) REFERENCES `item_state` (`item_state_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_modified_by_user_id` FOREIGN KEY (`modified_by_user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_stocking_place_id` FOREIGN KEY (`stocking_place_id`) REFERENCES `stocking_place` (`stocking_place_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_supplier_id` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

-- Export de données de la table stock.item : ~13 rows (environ)
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT IGNORE INTO `item` (`item_id`, `name`, `description`, `supplier_id`, `supplier_ref`, `buying_price`, `buying_date`, `warranty_duration`, `file_number`, `serial_number`, `remarks`, `image`, `created_by_user_id`, `created_date`, `modified_by_user_id`, `modified_date`, `control_by_user_id`, `control_date`, `stocking_place_id`, `item_state_id`) VALUES
	(15, 'Souris Logitech233', 'PWNED', 3, NULL, NULL, NULL, NULL, NULL, '', 'pas de notekk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL),
	(16, 'Switch netlink D-500', '100 mbps', 2, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL),
	(20, '000000', 'rwqt34tzerzbhgfhfh', 2, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL),
	(21, 'erqwrt4', 'ewfweihjguiorf', 1, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
	(22, 'Souris Logitech', 'fwerweqtrwe', 3, NULL, NULL, NULL, NULL, NULL, '', 'gwefrew', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
	(56, 'Démo', '', 1, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
	(57, 'dsad', '', 1, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
	(58, 'efwef', '', 1, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
	(59, '4sfad5g5f54sdgf', '', 2, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL),
	(60, 'retztre', '', 1, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL),
	(61, 'gjdghejkghtrh', '', 1, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL),
	(62, '90859012345hjnfdsgdfg', '', 3, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL),
	(63, 'dfhtrhtrjh', '', 1, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL);
/*!40000 ALTER TABLE `item` ENABLE KEYS */;


-- Export de la structure de table stock. item_state
CREATE TABLE IF NOT EXISTS `item_state` (
  `item_state_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`item_state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Export de données de la table stock.item_state : ~4 rows (environ)
/*!40000 ALTER TABLE `item_state` DISABLE KEYS */;
INSERT IGNORE INTO `item_state` (`item_state_id`, `name`) VALUES
	(1, 'En stock'),
	(2, 'Vendu'),
	(3, 'Deffecteux'),
	(4, 'Débarrassé');
/*!40000 ALTER TABLE `item_state` ENABLE KEYS */;


-- Export de la structure de table stock. item_tag
CREATE TABLE IF NOT EXISTS `item_tag` (
  `item_tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`item_tag_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Export de données de la table stock.item_tag : ~8 rows (environ)
/*!40000 ALTER TABLE `item_tag` DISABLE KEYS */;
INSERT IGNORE INTO `item_tag` (`item_tag_id`, `name`) VALUES
	(1, 'Ordinateur'),
	(2, 'Souris'),
	(3, 'Clavier'),
	(4, 'Lecteur'),
	(5, 'Périphérique de saisie'),
	(6, 'Imprimante'),
	(7, 'Scanner'),
	(8, 'Ecran');
/*!40000 ALTER TABLE `item_tag` ENABLE KEYS */;


-- Export de la structure de table stock. item_tag_link
CREATE TABLE IF NOT EXISTS `item_tag_link` (
  `item_tag_link_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `item_tag_id` int(11) NOT NULL,
  PRIMARY KEY (`item_tag_link_id`),
  KEY `fk_item_id_lnk_idx` (`item_id`),
  KEY `fk_item_tag_id_idx` (`item_tag_id`),
  CONSTRAINT `fk_item_lnk_id` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_item_tag_id` FOREIGN KEY (`item_tag_id`) REFERENCES `item_tag` (`item_tag_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Export de données de la table stock.item_tag_link : ~0 rows (environ)
/*!40000 ALTER TABLE `item_tag_link` DISABLE KEYS */;
/*!40000 ALTER TABLE `item_tag_link` ENABLE KEYS */;


-- Export de la structure de table stock. loan
CREATE TABLE IF NOT EXISTS `loan` (
  `loan_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `item_localisation` varchar(45) DEFAULT NULL,
  `remarks` text,
  `return_delay` date DEFAULT NULL,
  `real_return_date` date DEFAULT NULL,
  `item_id` int(11) NOT NULL,
  `loan_by_user_id` int(11) NOT NULL,
  `loan_to_user_id` int(11) NOT NULL,
  PRIMARY KEY (`loan_id`),
  KEY `fk_item_id_idx` (`item_id`),
  KEY `fk_loan_by_user_id_idx` (`loan_by_user_id`),
  KEY `fk_loan_to_user_id_idx` (`loan_to_user_id`),
  CONSTRAINT `fk_item_id` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_loan_by_user_id` FOREIGN KEY (`loan_by_user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_loan_to_user_id` FOREIGN KEY (`loan_to_user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Export de données de la table stock.loan : ~0 rows (environ)
/*!40000 ALTER TABLE `loan` DISABLE KEYS */;
/*!40000 ALTER TABLE `loan` ENABLE KEYS */;


-- Export de la structure de table stock. login_attempts
CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Export de données de la table stock.login_attempts : ~0 rows (environ)
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;


-- Export de la structure de table stock. stocking_place
CREATE TABLE IF NOT EXISTS `stocking_place` (
  `stocking_place_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `short` varchar(45) NOT NULL,
  PRIMARY KEY (`stocking_place_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Export de données de la table stock.stocking_place : ~3 rows (environ)
/*!40000 ALTER TABLE `stocking_place` DISABLE KEYS */;
INSERT IGNORE INTO `stocking_place` (`stocking_place_id`, `name`, `short`) VALUES
	(1, 'Salle Info', 'INFO'),
	(2, 'Atelier1', 'AT01'),
	(3, 'Atelier2', 'AT02');
/*!40000 ALTER TABLE `stocking_place` ENABLE KEYS */;


-- Export de la structure de table stock. supplier
CREATE TABLE IF NOT EXISTS `supplier` (
  `supplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `address_line1` varchar(256) DEFAULT NULL,
  `address_line2` varchar(256) DEFAULT NULL,
  `zip` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `tel` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`supplier_id`),
  KEY `country_id` (`country_id`),
  CONSTRAINT `FK_country_id` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Export de données de la table stock.supplier : ~5 rows (environ)
/*!40000 ALTER TABLE `supplier` DISABLE KEYS */;
INSERT IGNORE INTO `supplier` (`supplier_id`, `name`, `address_line1`, `address_line2`, `zip`, `city`, `country`, `tel`, `email`, `country_id`) VALUES
	(1, 'Digitec', 'addr11', 'addr21', 'z1', 'c1', 'cy1', 't1', '', 7),
	(2, 'STEG', 'addr12', 'addr21', 'z2', 'c2', 'cy2', 't2', 'e2', NULL),
	(3, '1000ordi', 'addr13', 'addr22', 'z3', 'c3', 'cy2', 't3', 'e3', NULL),
	(4, 'Autre', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(8, 'tr', 'erewgdf', '', '', '', '', '', '', NULL);
/*!40000 ALTER TABLE `supplier` ENABLE KEYS */;


-- Export de la structure de table stock. user
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `initials` varchar(45) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `user_type_id` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `user_state_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `fk_department_id_idx` (`department_id`),
  KEY `fk_user_type_id_idx` (`user_type_id`),
  KEY `fk_user_state_id_idx` (`user_state_id`),
  CONSTRAINT `fk_department_id` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_state_id` FOREIGN KEY (`user_state_id`) REFERENCES `user_state` (`user_state_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_type_id` FOREIGN KEY (`user_type_id`) REFERENCES `user_type` (`user_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Export de données de la table stock.user : ~5 rows (environ)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT IGNORE INTO `user` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email`, `initials`, `created_on`, `company`, `phone`, `active`, `user_type_id`, `department_id`, `user_state_id`) VALUES
	(5, 'netsky', '', '', '', '', 'JM', 0, NULL, '', 1, 2, 1, 1),
	(11, 'netsky67633', '123456789', '123456789', '', '', '', 0, NULL, NULL, 1, 1, 3, 2),
	(12, 'netsky3', '', '', '', '', '', 0, NULL, '', 1, 3, 1, 1),
	(14, 'OrifInfo2009', '$2y$11$.5oBQQJXdY7Ixv6ETT5DaOWa5Z88VnoifkHHUNGOLJMkcunm0gD8S', 'OrifInfo2009', 'OrifInfo2009', 'n3tsky@me.com', '', 0, NULL, '', NULL, 1, 3, 2),
	(15, 'admindfgdfgh', 'test@test.com', '', '', 'test@test.com', '', 0, NULL, '', NULL, 1, 1, 1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;


-- Export de la structure de table stock. user_groups
CREATE TABLE IF NOT EXISTS `user_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Export de données de la table stock.user_groups : ~4 rows (environ)
/*!40000 ALTER TABLE `user_groups` DISABLE KEYS */;
INSERT IGNORE INTO `user_groups` (`id`, `user_id`, `group_id`) VALUES
	(4, 1, 1),
	(5, 1, 2),
	(3, 2, 2),
	(6, 3, 2);
/*!40000 ALTER TABLE `user_groups` ENABLE KEYS */;


-- Export de la structure de table stock. user_state
CREATE TABLE IF NOT EXISTS `user_state` (
  `user_state_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`user_state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Export de données de la table stock.user_state : ~4 rows (environ)
/*!40000 ALTER TABLE `user_state` DISABLE KEYS */;
INSERT IGNORE INTO `user_state` (`user_state_id`, `name`) VALUES
	(1, 'Inactif'),
	(2, 'Actif'),
	(3, 'Fin de stage'),
	(4, 'Autre');
/*!40000 ALTER TABLE `user_state` ENABLE KEYS */;


-- Export de la structure de table stock. user_type
CREATE TABLE IF NOT EXISTS `user_type` (
  `user_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `access_level` int(11) NOT NULL,
  PRIMARY KEY (`user_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Export de données de la table stock.user_type : ~6 rows (environ)
/*!40000 ALTER TABLE `user_type` DISABLE KEYS */;
INSERT IGNORE INTO `user_type` (`user_type_id`, `name`, `access_level`) VALUES
	(1, 'Invité', 0),
	(2, 'Observation', 0),
	(3, 'Formation', 5),
	(4, 'MSP', 10),
	(5, 'Administrateur', 10),
	(6, 'Autre', 0);
/*!40000 ALTER TABLE `user_type` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
