#
# PROCRASTINATOR - STOP WASTING TIME
#
# this file create the SQL tables and relations
# needed for the correct function of the program
#
# Tested only on MySQL
#


#
#
# Tables for login and users related
#
#

DROP TABLE IF EXISTS `groups`;

#
# Table structure for table 'groups'
#

CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table 'groups'
#

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
     (1,'admin','Administrator'),
     (2,'members','General User');



DROP TABLE IF EXISTS `users`;

#
# Table structure for table 'users'
#

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


#
# Dumping data for table 'users'
#

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
     ('1','127.0.0.1','administrator','$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36','','admin@admin.com','',NULL,'1268889823','1268889823','1', 'Admin','istrator','ADMIN','0');


DROP TABLE IF EXISTS `users_groups`;

#
# Table structure for table 'users_groups'
#

CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `uc_users_groups` UNIQUE (`user_id`, `group_id`),
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
     (1,1,1),
     (2,1,2);


DROP TABLE IF EXISTS `login_attempts`;

#
# Table structure for table 'login_attempts'
#

CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
#
# Tables for procrastinator  things
#
#

DROP TABLE IF EXISTS `tabs`;

#
# Table structure for table 'Tabs'
#

CREATE TABLE `tabs` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`name` varchar(15) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table 'Tabs'
#

INSERT INTO `tabs` (`id`, `name`) VALUES
     (1,'General');

DROP TABLE IF EXISTS `tasks`;

#
# Table structure for table 'Tasks'
#

CREATE TABLE `tasks` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`user_id` int(11) unsigned NOT NULL,
	`task` varchar(500) NOT NULL,
	`tab_id` int(11) unsigned NOT NULL DEFAULT '1',
	`status` tinyint(1) unsigned NOT NULL DEFAULT '0',
	`date` datetime NOT NULL,
	`colour` char(6) NOT NULL DEFAULT 'FFFFFF',
	`h_remaining` int(5) unsigned DEFAULT NULL,
	PRIMARY KEY (`id`),
	KEY `fk_tasks_user_id` (`user_id`),
	KEY `fk_tasks_tab_id` (`tab_id`),
	CONSTRAINT `fk_tasks_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
	CONSTRAINT `fk_tasks_tab_id` FOREIGN KEY (`tab_id`) REFERENCES `tabs` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `completed_tasks`;

#
# Table structure for table 'completed_tasks'
#

CREATE TABLE `completed_tasks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `task_id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_completed_tasks_task_id` (`task_id`),
  KEY `fk_completed_tasks_user_id` (`user_id`),
  CONSTRAINT `uc_completed_tasks` UNIQUE (`task_id`, `user_id`),
  CONSTRAINT `fk_completed_tasks_task_id` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_completed_tasks_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


