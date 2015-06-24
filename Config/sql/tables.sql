-- Adminer 4.2.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `headlines`;
CREATE TABLE `headlines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `created` datetime NOT NULL,
  `desc` text COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `headlines_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;


DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL,
  `date` date NOT NULL,
  `desc` text COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `news` (`id`, `title`, `date`, `desc`) VALUES
(1,	'Test',	'2015-06-23',	'fsafsaf'),
(2,	'Test 2',	'2015-05-16',	'dajhlfdsvcx');

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `desc` text COLLATE utf8_czech_ci NOT NULL,
  `perex` text COLLATE utf8_czech_ci,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;


DROP TABLE IF EXISTS `sliders`;
CREATE TABLE `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `ord` int(11) NOT NULL DEFAULT '9999999',
  `url` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `sliders` (`id`, `name`, `ord`, `url`) VALUES
(1,	'Slide 1',	1,	'/img/slides/slide_1.jpg'),
(2,	'Slide 2',	2,	'/img/slides/slide_2.jpg'),
(3,	'Slide 3',	3,	'/img/slides/slide_3.jpg');

DROP TABLE IF EXISTS `tiles`;
CREATE TABLE `tiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` text COLLATE utf8_czech_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `created` datetime NOT NULL,
  `ord` int(11) NOT NULL DEFAULT '9999999',
  `url` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `tiles` (`id`, `desc`, `title`, `created`, `ord`, `url`) VALUES
(1,	'Test',	'Kempy',	'2015-06-24 09:33:24',	1,	'/img/slides/slide_1.jpg'),
(2,	'Test 2',	'Rezervace Kurtů',	'2015-06-24 09:37:55',	2,	'/img/tile_1.jpg'),
(3,	'Test 3',	'Beachbar',	'2015-06-24 09:38:27',	3,	'/img/tile_2.jpg'),
(4,	'Test 4',	'Firemní akce',	'2015-06-24 09:39:02',	4,	'/img/tile_3.jpg'),
(5,	'Test 5',	'Kroužky',	'2015-06-24 09:39:41',	5,	'/img/tile_4.png'),
(6,	'Test 6',	'Tréninky',	'2015-06-24 09:40:17',	6,	'/img/tile_5.jpg'),
(7,	'Test 7',	'Turnaje',	'2015-06-24 09:40:37',	7,	'/img/tile_6.jpg');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;


-- 2015-06-24 07:45:29
