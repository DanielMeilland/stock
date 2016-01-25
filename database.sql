DROP TABLE IF EXISTS `groups`;

#
# Table structure for table 'groups'
#

CREATE TABLE `groups` (
  `id`          MEDIUMINT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name`        VARCHAR(20)           NOT NULL,
  `description` VARCHAR(100)          NOT NULL,
  PRIMARY KEY (`id`)
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

#
# Dumping data for table 'groups'
#

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
  (1, 'admin', 'Administrator'),
  (2, 'members', 'General User');


DROP TABLE IF EXISTS `users`;

#
# Table structure for table 'users'
#

CREATE TABLE `users` (
  `id`        INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username`  VARCHAR(100)     NULL,
  `firstname` VARCHAR(50)               DEFAULT NULL,
  `lastname`  VARCHAR(50)               DEFAULT NULL,
  `email`     VARCHAR(100)     NOT NULL,
  `password`  VARCHAR(255)     NOT NULL,
  `company`   VARCHAR(100)              DEFAULT NULL,
  `phone`     VARCHAR(20)               DEFAULT NULL,
  PRIMARY KEY (`id`)
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;


DROP TABLE IF EXISTS `users_groups`;

#
# Table structure for table 'users_groups'
#

CREATE TABLE `users_groups` (
  `id`       INT(11) UNSIGNED      NOT NULL AUTO_INCREMENT,
  `user_id`  INT(11) UNSIGNED      NOT NULL,
  `group_id` MEDIUMINT(8) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `uc_users_groups` UNIQUE (`user_id`, `group_id`),
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES (1, 1, 1), (2, 1, 2);
