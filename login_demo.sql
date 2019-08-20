-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `login_demo`;
CREATE TABLE `login_demo` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `username` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `md5` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `data` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

INSERT INTO `login_demo` (`id`, `username`, `password`, `md5`, `data`) VALUES
(8,	'W',	'12345',	'63c3b705c9fb2f919ba6ceee72dc10b0',	'on'),
(7,	'Q',	'123456',	'Q123456',	'on');

-- 2019-08-20 03:16:18
