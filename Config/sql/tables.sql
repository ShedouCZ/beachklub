-- Adminer 4.1.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

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

INSERT INTO `users` (`id`, `username`, `password`, `mail`, `created`, `modified`) VALUES
(1,	'admin',	'$2a$10$oTInOZNrfJqOdFEjVAb00ugqLRwquceqkt39aam1pY/4m1/py4.nq',	NULL,	'2015-06-24 10:37:25',	'2015-06-24 10:37:25');

DROP TABLE IF EXISTS `coaches`;
CREATE TABLE `coaches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL,
  `desc` text COLLATE utf8_czech_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `ord` int(11) NOT NULL DEFAULT '99999999',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `coaches` (`id`, `name`, `title`, `desc`, `url`, `ord`) VALUES
(1,	'Ondra Michálek',	'Šéftrenér plážového volejbalu v Beachklubu Ládví',	'<p><span style=\"line-height: 1.42857143;\">Narozen 26. 04. 1977.</span><br></p><p>Profesionální volejbalová kariéra:</p><ul><li>15 sezon profesionální hráč volejbalu</li><li>juniorská reprezentace&nbsp;</li><li>2x vicemistr republiky – Aero Odolena Voda, DHL Ostrava&nbsp;</li><li>3x mistr republiky ve volejbale na antuce&nbsp;</li><li>zahraniční angažmá &nbsp;– Slovensko – Bratislava, Rakousko - Tirol Innsbruck, Kypr – Limassol</li></ul><p>Trenérská kvalifikace:</p><ul><li>trenér III. třídy&nbsp;</li><li>volejbalový trenér mládeže VK Benátky nad Jizerou&nbsp;</li><li>masér pro sportovní a rekondiční masáže</li></ul><p>Kontakt: telefon: 605 218 056, e-mail: seftrener@beachklubladvi.cz</p><p>Cena: 400 Kč / 1 hodina trénování</p>',	'img/coaches/ondramichalek.jpg',	1),
(2,	'Jarda Malčík',	'Trenér plážového volejbalu v Beachklubu Ládví',	'<p>Narozen 16. 08. 1970</p><p>Profesionální volejbalová kariéra:</p><ul><li>3. místo v MČR v beachvolejbalu - Brno 2002 se Standou Pochopem</li><li>RH Praha (2x mistr ČR, 1x 2. místo)</li><li>CD Funschal da Madeira (2. místo Taca Portugal, 4. místo 1 Léguas)</li><li>Odolena Voda (2. místo extraliga)</li><li>ATSV Seewalchen (2. Bundesliga)</li><li>PMEZ a PVP: zápasy proti CSKA Moskva, Maaseik, PVS Salzburg, VC Ankara, AZS Czestochowa)</li></ul><p>Trenérská kvalifikace:</p><ul><li>trenér II. třída (rakouská licence) a III. třída (česká licence)</li><li>Volejbalový trenér:</li><li>ATSV Seelwalchen AUT (2. Bundesliga)</li><li>SuperVolley Ennns &nbsp;AUT (1. Bundesliga)</li><li>TJ Praga CZE (2. liga)</li></ul><p>Beachvolejbalový trenér:</p><ul><li>Florian Schnetzer – Helmut Moser U19 AUT (reprezentační team AUT)</li><li>2013 – reprezentační trenér U17,U18 CZE (juniorky)</li><li>2015 – reprezentační trenér U18,U20 CZE (junioři)</li><li>Beachklub Ládví CZE - šéftrenér mládeže, výkonnostní oddíly, reprezentace BKL U10, U12, U15, U17, U20</li></ul><p>Kontakt: telefon: 602 101 126, e-mail: jarda.malca@seznam.cz</p><p>Cena: 400 Kč / 1 hodina trénování</p>',	'',	2),
(3,	'Kamil Tuček',	'Trenér plážového volejbalu v Beachklubu Ládví',	'<p>Narozen 17. 12. 1976</p><p>Profesionální volejbalová kariéra:</p><ul><li>4 roky hráč volejbalové extraligy (ŽS BRNO, VK DUKLA LIBEREC,VK KARBO BENÁTKY)</li><li>sedm let první liga (VK KARBO BENÁTKY)</li><li>dlouholetý hráč plážového volejbalu pod ČVS</li></ul><p>Trenérská kvalifikace:</p><ul><li>vystudoval FTVS – specializace volejbal, kondiční trenér</li><li>diplomovaný trenér volejbalu – trenérská I. třída</li><li>asistent trenéra u reprezentace ČR žen. Účast na ME v Polsku.</li><li>hlavní trenér u družstva žen Sokol Nusle – 1. liga žen</li><li>hlavní trenér mládeže USK Praha, PVK Olymp Praha, SK Prosek Praha</li></ul><p>Kontakt: telefon: 604 241 391, e-mail: kamiltucek@seznam.cz</p><p>Cena: 400 Kč / 1 hodina trénování</p>',	'',	3),
(4,	'Míra Svoboda',	'Trenér plážového volejbalu v Beachklubu Ládví',	'<p>Narozen 11. 09. 1979</p><p>Profesionální volejbalová kariéra:</p><ul><li>1. místo MČR 2006, 1. místo Řecký okruh 2005 - Korfu, 1. místo Akademické &nbsp;MČR 2002, 2003, celkový vítěz Českého poháru 2002, 2003</li><li>2. místo MČR 2008, 2. místo Řecký okruh 2006 - Nafplio, Mykonos</li><li>3. místo MČR 2004, 2005, 2009, 2012, 3. místo FIVB Satelite 2005 - Itálie</li><li>5. místo CEV Challenger 2004 - Slavkov u Brna</li><li>9. místo ME do 23. let 2001 - Portugalsko, 9. místo FIVB Challenger 2007 - Brno</li><li>15 sezon vrcholového šestkového volejbalu</li><li>zahraniční angažmá: Argentina, Španělsko, Kypr, Rakousko, Holandsko</li><li>juniorská reprezentace - 3. místo ME, 4. místo MS</li></ul><p>Trenérská kvalifikace:</p><ul><li>absolvent FSPS, Pedagogická fakulta MU Brno</li><li>2. trenérská třída</li></ul><p>Kontakt: telefon: 737 417 443, e-mail: mirecsvoboda@seznam.cz</p><p>Cena: 400 Kč / 1 hodina trénování</p>',	'',	4),
(5,	'Rosťa Vorálek',	'Trenér výkonnostní mládeže v Beachklubu Ládví',	'<p style=\"border: none; float: none; clear: both; padding: 0px 10px;\">Trenérská kvalifikace:</p><ul><li style=\"border: none; float: none; clear: both; padding: 0px 10px;\">diplomovaný trenér I. třídy ve volejbale&nbsp;</li><li style=\"border: none; float: none; clear: both; padding: 0px 10px;\">držitel II. trenérské třídy FIVB</li><li style=\"border: none; float: none; clear: both; padding: 0px 10px;\">trenér III. třídy v beach volejbalu</li><li style=\"border: none; float: none; clear: both; padding: 0px 10px;\">pedagog na Fakultě tělesné výchovy (katedra sportovních her – oddělení volejbalu)</li></ul><p style=\"border: none; float: none; clear: both; padding: 0px 10px;\">Trenérská činnost:</p><ul><li style=\"border: none; float: none; clear: both; padding: 0px 10px;\">trenér akademického volejbalového výběru Univerzity Karlovy &nbsp;</li><li style=\"border: none; float: none; clear: both; padding: 0px 10px;\">1998 – 2000 druhý trenér reprezentačního družstva kadetek ČR</li><li style=\"border: none; float: none; clear: both; padding: 0px 10px;\">2002 – 2004 druhý trenér reprezentačního družstva kadetek ČR</li><li style=\"border: none; float: none; clear: both; padding: 0px 10px;\">2002 – 2007 trenér družstva PVK Olymp Praha – extraliga (kadetky) &nbsp; &nbsp; &nbsp; &nbsp;</li><li style=\"border: none; float: none; clear: both; padding: 0px 10px;\">2007 - 2008 hlavní trenérem reprezentačního družstva juniorek ČR</li><li style=\"border: none; float: none; clear: both; padding: 0px 10px;\">2009 trenér družstva PVK Olymp – extraliga (kadetky) &nbsp;&nbsp;</li><li style=\"border: none; float: none; clear: both; padding: 0px 10px;\">2013 – 2014 trenér beachvolejbalu</li></ul>',	'',	5);

DROP TABLE IF EXISTS `gallery_albums`;
CREATE TABLE `gallery_albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `default_name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `model` varchar(255) DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `tags` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `gallery_albums` (`id`, `title`, `default_name`, `path`, `model`, `model_id`, `tags`, `status`, `created`, `modified`) VALUES
(1,	'Slides album',	'',	'',	'slide',	1,	'',	'draft',	'2015-07-23 12:29:30',	'2015-07-23 12:29:30');

DROP TABLE IF EXISTS `gallery_pictures`;
CREATE TABLE `gallery_pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `size` bigint(20) NOT NULL,
  `album_id` int(11) NOT NULL,
  `main_id` int(11) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `style` varchar(255) NOT NULL DEFAULT 'full',
  `order` int(11) NOT NULL DEFAULT '9999999',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `folder_id` (`album_id`),
  KEY `main_id` (`main_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

DROP TABLE IF EXISTS `message_recipients`;
CREATE TABLE `message_recipients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `message_recipients` (`id`, `email`) VALUES
(1,	'info@beachklubladvi.cz'),
(2,	'marketing@beachklubladvi.cz'),
(3,	'bar@beachklubladvi.cz'),
(4,	'seftrener@beachklubladvi.cz');

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `desc` text COLLATE utf8_czech_ci NOT NULL,
  `message_recipient_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `message_recipient_id` (`message_recipient_id`),
  CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`message_recipient_id`) REFERENCES `message_recipients` (`id`) ON DELETE CASCADE
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

INSERT INTO `posts` (`id`, `title`, `user_id`, `created`, `desc`, `perex`) VALUES
(1,	'Hledam spoluhrace',	1,	'2015-06-24 11:41:11',	'Hoho!',	''),
(2,	'novej 2',	1,	'2015-07-02 10:08:21',	'gasgr',	'aegas'),
(3,	'dalsi3',	1,	'2015-07-02 10:08:30',	'dalsi3',	'dalsi3');

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `ord` int(11) NOT NULL DEFAULT '9999999',
  `gallery_picture_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gallery_picture_id` (`gallery_picture_id`),
  CONSTRAINT `sliders_ibfk_1` FOREIGN KEY (`gallery_picture_id`) REFERENCES `gallery_pictures` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

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

DROP TABLE IF EXISTS `tournaments`;
CREATE TABLE `tournaments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `datetime` datetime NOT NULL,
  `desc` text COLLATE utf8_czech_ci NOT NULL,
  `perex` text COLLATE utf8_czech_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `tournaments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;



-- 2015-07-24 10:38:49