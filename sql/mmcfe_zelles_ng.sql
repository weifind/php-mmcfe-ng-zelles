SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE DATABASE IF NOT EXISTS `mmcfe_zelles_ng` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mmcfe_zelles_ng`;


CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `is_anonymous` tinyint(1) NOT NULL DEFAULT '0',
  `no_fees` tinyint(1) NOT NULL DEFAULT '0',
  `username` varchar(40) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL COMMENT 'Assocaited email: used for validating users, and re-setting passwords',
  `loggedIp` varchar(255) DEFAULT NULL,
  `is_locked` tinyint(1) NOT NULL DEFAULT '0',
  `failed_logins` int(5) unsigned DEFAULT '0',
  `sessionTimeoutStamp` int(255) DEFAULT NULL,
  `pin` varchar(255) NOT NULL COMMENT 'four digit pin to allow account changes',
  `api_key` varchar(255) DEFAULT NULL,
  `token` varchar(65) DEFAULT NULL,
  `donate_percent` float DEFAULT '0',
  `ap_threshold` float DEFAULT '0',
  `coin_address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;


CREATE TABLE IF NOT EXISTS `blocks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `height` int(10) unsigned NOT NULL,
  `blockhash` char(65) NOT NULL,
  `confirmations` int(10) NOT NULL,
  `amount` double NOT NULL,
  `difficulty` double NOT NULL,
  `time` int(11) NOT NULL,
  `accounted` tinyint(1) NOT NULL DEFAULT '0',
  `account_id` int(255) unsigned DEFAULT NULL,
  `shares` int(255) unsigned DEFAULT NULL,
  `share_id` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `height` (`height`,`blockhash`),
  KEY `time` (`time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Discovered blocks persisted from Litecoin Service' AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `invitations` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(11) unsigned NOT NULL,
  `email` varchar(50) NOT NULL,
  `token_id` int(11) NOT NULL,
  `is_activated` tinyint(1) NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `monitoring` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `type` varchar(15) NOT NULL,
  `value` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Monitoring events from cronjobs' AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(10) unsigned NOT NULL,
  `header` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;


CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(25) NOT NULL,
  `data` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `account_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `active` (`active`),
  KEY `data` (`data`),
  KEY `account_id` (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `notification_settings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(15) NOT NULL,
  `account_id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `payouts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `account_id` (`account_id`,`completed`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `pool_worker` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `account_id` int(255) NOT NULL,
  `username` char(50) DEFAULT NULL,
  `password` char(255) DEFAULT NULL,
  `monitor` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `account_id` (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;


CREATE TABLE IF NOT EXISTS `settings` (
  `name` varchar(255) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`name`),
  UNIQUE KEY `setting` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `settings` (`name`, `value`) VALUES
('accounts_confirm_email_disabled', '1'),
('acl_block_statistics', '1'),
('acl_pool_statistics', '1'),
('disable_ap', '0'),
('disable_api', '0'),
('disable_invitations', '1'),
('disable_mp', '0'),
('disable_notifications', '1'),
('lock_registration', '0'),
('maintenance', '0'),
('system_motd', ''),
('website_blockexplorer_disabled', '0'),
('website_blockexplorer_url', 'http://explorer.litecoin.net/block/'),
('website_chaininfo_disabled', '0'),
('website_chaininfo_url', 'http://allchains.info'),
('website_email', 'test@example.com'),
('website_mobile_theme', 'zelles'),
('website_name', 'The Mining Pool'),
('website_slogan', 'Patience is a Virtue'),
('website_theme', 'zelles'),
('website_title', 'The Mining Pool');


CREATE TABLE IF NOT EXISTS `shares` (
  `id` bigint(30) NOT NULL AUTO_INCREMENT,
  `rem_host` varchar(255) NOT NULL,
  `username` varchar(120) NOT NULL,
  `our_result` enum('Y','N') NOT NULL,
  `upstream_result` enum('Y','N') DEFAULT NULL,
  `reason` varchar(50) DEFAULT NULL,
  `solution` varchar(257) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `time` (`time`),
  KEY `upstream_result` (`upstream_result`),
  KEY `our_result` (`our_result`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `shares_archive` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `share_id` int(255) unsigned NOT NULL,
  `username` varchar(120) NOT NULL,
  `our_result` enum('Y','N') DEFAULT NULL,
  `upstream_result` enum('Y','N') DEFAULT NULL,
  `block_id` int(10) unsigned NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `share_id` (`share_id`),
  KEY `time` (`time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Archive shares for potential later debugging purposes' AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `statistics_shares` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(10) unsigned NOT NULL,
  `block_id` int(10) unsigned NOT NULL,
  `valid` int(11) NOT NULL,
  `invalid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `account_id` (`account_id`),
  KEY `block_id` (`block_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `token` varchar(65) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `token` (`token`),
  KEY `account_id` (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `token_types` (
  `id` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;


INSERT INTO `token_types` (`id`, `name`) VALUES
(1, 'password_reset'),
(2, 'confirm_email'),
(3, 'invitation');


CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `account_id` int(255) unsigned NOT NULL,
  `type` varchar(25) DEFAULT NULL,
  `coin_address` varchar(255) DEFAULT NULL,
  `amount` double DEFAULT '0',
  `block_id` int(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `archived` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `block_id` (`block_id`),
  KEY `account_id` (`account_id`),
  KEY `type` (`type`),
  KEY `archived` (`archived`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
