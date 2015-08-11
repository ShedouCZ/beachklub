-- Adminer 4.2.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `coaches`;
CREATE TABLE `coaches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL,
  `desc` text COLLATE utf8_czech_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `ord` int(11) NOT NULL DEFAULT '99999999',
  `gallery_picture_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `coaches` (`id`, `name`, `title`, `desc`, `url`, `ord`, `gallery_picture_id`) VALUES
(1,	'Ondra Michálek',	'Šéftrenér plážového volejbalu v Beachklubu Ládví',	'<p><span style=\"line-height: 1.42857143;\">Narozen 26. 04. 1977.</span><br></p><p>Profesionální volejbalová kariéra:</p><ul><li>15 sezon profesionální hráč volejbalu</li><li>juniorská reprezentace&nbsp;</li><li>2x vicemistr republiky – Aero Odolena Voda, DHL Ostrava&nbsp;</li><li>3x mistr republiky ve volejbale na antuce&nbsp;</li><li>zahraniční angažmá &nbsp;– Slovensko – Bratislava, Rakousko - Tirol Innsbruck, Kypr – Limassol</li></ul><p>Trenérská kvalifikace:</p><ul><li>trenér III. třídy&nbsp;</li><li>volejbalový trenér mládeže VK Benátky nad Jizerou&nbsp;</li><li>masér pro sportovní a rekondiční masáže</li></ul><p>Kontakt: telefon: 605 218 056, e-mail: seftrener@beachklubladvi.cz</p><p>Cena: 400 Kč / 1 hodina trénování</p>',	'img/coaches/ondramichalek.jpg',	1,	73),
(2,	'Jarda Malčík',	'Trenér plážového volejbalu v Beachklubu Ládví',	'<p>Narozen 16. 08. 1970</p><p>Profesionální volejbalová kariéra:</p><ul><li>3. místo v MČR v beachvolejbalu - Brno 2002 se Standou Pochopem</li><li>RH Praha (2x mistr ČR, 1x 2. místo)</li><li>CD Funschal da Madeira (2. místo Taca Portugal, 4. místo 1 Léguas)</li><li>Odolena Voda (2. místo extraliga)</li><li>ATSV Seewalchen (2. Bundesliga)</li><li>PMEZ a PVP: zápasy proti CSKA Moskva, Maaseik, PVS Salzburg, VC Ankara, AZS Czestochowa)</li></ul><p>Trenérská kvalifikace:</p><ul><li>trenér II. třída (rakouská licence) a III. třída (česká licence)</li><li>Volejbalový trenér:</li><li>ATSV Seelwalchen AUT (2. Bundesliga)</li><li>SuperVolley Ennns &nbsp;AUT (1. Bundesliga)</li><li>TJ Praga CZE (2. liga)</li></ul><p>Beachvolejbalový trenér:</p><ul><li>Florian Schnetzer – Helmut Moser U19 AUT (reprezentační team AUT)</li><li>2013 – reprezentační trenér U17,U18 CZE (juniorky)</li><li>2015 – reprezentační trenér U18,U20 CZE (junioři)</li><li>Beachklub Ládví CZE - šéftrenér mládeže, výkonnostní oddíly, reprezentace BKL U10, U12, U15, U17, U20</li></ul><p>Kontakt: telefon: 602 101 126, e-mail: jarda.malca@seznam.cz</p><p>Cena: 400 Kč / 1 hodina trénování</p>',	'',	2,	NULL),
(3,	'Kamil Tuček',	'Trenér plážového volejbalu v Beachklubu Ládví',	'<p>Narozen 17. 12. 1976</p><p>Profesionální volejbalová kariéra:</p><ul><li>4 roky hráč volejbalové extraligy (ŽS BRNO, VK DUKLA LIBEREC,VK KARBO BENÁTKY)</li><li>sedm let první liga (VK KARBO BENÁTKY)</li><li>dlouholetý hráč plážového volejbalu pod ČVS</li></ul><p>Trenérská kvalifikace:</p><ul><li>vystudoval FTVS – specializace volejbal, kondiční trenér</li><li>diplomovaný trenér volejbalu – trenérská I. třída</li><li>asistent trenéra u reprezentace ČR žen. Účast na ME v Polsku.</li><li>hlavní trenér u družstva žen Sokol Nusle – 1. liga žen</li><li>hlavní trenér mládeže USK Praha, PVK Olymp Praha, SK Prosek Praha</li></ul><p>Kontakt: telefon: 604 241 391, e-mail: kamiltucek@seznam.cz</p><p>Cena: 400 Kč / 1 hodina trénování</p>',	'',	3,	NULL),
(4,	'Míra Svoboda',	'Trenér plážového volejbalu v Beachklubu Ládví',	'<p>Narozen 11. 09. 1979</p><p>Profesionální volejbalová kariéra:</p><ul><li>1. místo MČR 2006, 1. místo Řecký okruh 2005 - Korfu, 1. místo Akademické &nbsp;MČR 2002, 2003, celkový vítěz Českého poháru 2002, 2003</li><li>2. místo MČR 2008, 2. místo Řecký okruh 2006 - Nafplio, Mykonos</li><li>3. místo MČR 2004, 2005, 2009, 2012, 3. místo FIVB Satelite 2005 - Itálie</li><li>5. místo CEV Challenger 2004 - Slavkov u Brna</li><li>9. místo ME do 23. let 2001 - Portugalsko, 9. místo FIVB Challenger 2007 - Brno</li><li>15 sezon vrcholového šestkového volejbalu</li><li>zahraniční angažmá: Argentina, Španělsko, Kypr, Rakousko, Holandsko</li><li>juniorská reprezentace - 3. místo ME, 4. místo MS</li></ul><p>Trenérská kvalifikace:</p><ul><li>absolvent FSPS, Pedagogická fakulta MU Brno</li><li>2. trenérská třída</li></ul><p>Kontakt: telefon: 737 417 443, e-mail: mirecsvoboda@seznam.cz</p><p>Cena: 400 Kč / 1 hodina trénování</p>',	'',	4,	NULL),
(5,	'Rosťa Vorálek',	'Trenér výkonnostní mládeže v Beachklubu Ládví',	'<p style=\"border: none; float: none; clear: both; padding: 0px 10px;\">Trenérská kvalifikace:</p><ul><li style=\"border: none; float: none; clear: both; padding: 0px 10px;\">diplomovaný trenér I. třídy ve volejbale&nbsp;</li><li style=\"border: none; float: none; clear: both; padding: 0px 10px;\">držitel II. trenérské třídy FIVB</li><li style=\"border: none; float: none; clear: both; padding: 0px 10px;\">trenér III. třídy v beach volejbalu</li><li style=\"border: none; float: none; clear: both; padding: 0px 10px;\">pedagog na Fakultě tělesné výchovy (katedra sportovních her – oddělení volejbalu)</li></ul><p style=\"border: none; float: none; clear: both; padding: 0px 10px;\">Trenérská činnost:</p><ul><li style=\"border: none; float: none; clear: both; padding: 0px 10px;\">trenér akademického volejbalového výběru Univerzity Karlovy &nbsp;</li><li style=\"border: none; float: none; clear: both; padding: 0px 10px;\">1998 – 2000 druhý trenér reprezentačního družstva kadetek ČR</li><li style=\"border: none; float: none; clear: both; padding: 0px 10px;\">2002 – 2004 druhý trenér reprezentačního družstva kadetek ČR</li><li style=\"border: none; float: none; clear: both; padding: 0px 10px;\">2002 – 2007 trenér družstva PVK Olymp Praha – extraliga (kadetky) &nbsp; &nbsp; &nbsp; &nbsp;</li><li style=\"border: none; float: none; clear: both; padding: 0px 10px;\">2007 - 2008 hlavní trenérem reprezentačního družstva juniorek ČR</li><li style=\"border: none; float: none; clear: both; padding: 0px 10px;\">2009 trenér družstva PVK Olymp – extraliga (kadetky) &nbsp;&nbsp;</li><li style=\"border: none; float: none; clear: both; padding: 0px 10px;\">2013 – 2014 trenér beachvolejbalu</li></ul>',	'',	5,	NULL);

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
(1,	'Slides album',	'',	'',	'slide',	1,	'',	'published',	'2015-07-23 12:29:30',	'2015-07-23 12:29:30'),
(2,	'Tiles album',	'',	'',	'tile',	1,	'',	'published',	'2015-07-24 13:05:14',	'2015-07-24 13:05:14'),
(3,	'Documents album',	'',	'',	'document',	1,	'',	'published',	'2015-07-24 13:05:14',	'2015-07-24 13:05:14'),
(4,	'Coaches album',	'',	'',	'coach',	1,	'',	'published',	'2015-07-24 13:05:14',	'2015-07-24 13:05:14');


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

INSERT INTO `gallery_pictures` (`id`, `name`, `path`, `size`, `album_id`, `main_id`, `caption`, `style`, `order`, `created`, `modified`) VALUES
(1,	'slide_1.jpg',	'd19a51af872f77c33b09981695eb1ac9.jpg',	399949,	1,	NULL,	NULL,	'full',	9999999,	'2015-07-27 11:28:45',	'2015-07-27 11:28:45'),
(2,	'medium-slide_1.jpg',	'medium-d19a51af872f77c33b09981695eb1ac9.jpg',	24242,	1,	1,	NULL,	'medium',	9999999,	'2015-07-27 11:28:45',	'2015-07-27 11:28:45'),
(3,	'slide-slide_1.jpg',	'slide-d19a51af872f77c33b09981695eb1ac9.jpg',	191779,	1,	1,	NULL,	'slide',	9999999,	'2015-07-27 11:28:46',	'2015-07-27 11:28:46'),
(4,	'tile-slide_1.jpg',	'tile-d19a51af872f77c33b09981695eb1ac9.jpg',	24128,	1,	1,	NULL,	'tile',	9999999,	'2015-07-27 11:28:46',	'2015-07-27 11:28:46'),
(5,	'slide_2.jpg',	'416ba09342b835f1eb9fa7ba8ddcb008.jpg',	263586,	1,	NULL,	NULL,	'full',	9999999,	'2015-07-27 11:28:57',	'2015-07-27 11:28:57'),
(6,	'medium-slide_2.jpg',	'medium-416ba09342b835f1eb9fa7ba8ddcb008.jpg',	19450,	1,	5,	NULL,	'medium',	9999999,	'2015-07-27 11:28:58',	'2015-07-27 11:28:58'),
(7,	'slide-slide_2.jpg',	'slide-416ba09342b835f1eb9fa7ba8ddcb008.jpg',	126521,	1,	5,	NULL,	'slide',	9999999,	'2015-07-27 11:28:58',	'2015-07-27 11:28:58'),
(8,	'tile-slide_2.jpg',	'tile-416ba09342b835f1eb9fa7ba8ddcb008.jpg',	19493,	1,	5,	NULL,	'tile',	9999999,	'2015-07-27 11:28:59',	'2015-07-27 11:28:59'),
(9,	'slide_3.jpg',	'9d315015e9665ffcb9fadd72a2610b54.jpg',	248765,	1,	NULL,	NULL,	'full',	9999999,	'2015-07-27 11:29:10',	'2015-07-27 11:29:10'),
(10,	'medium-slide_3.jpg',	'medium-9d315015e9665ffcb9fadd72a2610b54.jpg',	13033,	1,	9,	NULL,	'medium',	9999999,	'2015-07-27 11:29:10',	'2015-07-27 11:29:10'),
(11,	'slide-slide_3.jpg',	'slide-9d315015e9665ffcb9fadd72a2610b54.jpg',	108681,	1,	9,	NULL,	'slide',	9999999,	'2015-07-27 11:29:10',	'2015-07-27 11:29:10'),
(12,	'tile-slide_3.jpg',	'tile-9d315015e9665ffcb9fadd72a2610b54.jpg',	15363,	1,	9,	NULL,	'tile',	9999999,	'2015-07-27 11:29:10',	'2015-07-27 11:29:10'),
(13,	'slide_4.jpg',	'e1411f4c7558aa8f0a2a086f2278bf3c.jpg',	435048,	1,	NULL,	NULL,	'full',	9999999,	'2015-07-27 11:29:25',	'2015-07-27 11:29:25'),
(14,	'medium-slide_4.jpg',	'medium-e1411f4c7558aa8f0a2a086f2278bf3c.jpg',	22521,	1,	13,	NULL,	'medium',	9999999,	'2015-07-27 11:29:25',	'2015-07-27 11:29:25'),
(15,	'slide-slide_4.jpg',	'slide-e1411f4c7558aa8f0a2a086f2278bf3c.jpg',	197618,	1,	13,	NULL,	'slide',	9999999,	'2015-07-27 11:29:25',	'2015-07-27 11:29:25'),
(16,	'tile-slide_4.jpg',	'tile-e1411f4c7558aa8f0a2a086f2278bf3c.jpg',	27268,	1,	13,	NULL,	'tile',	9999999,	'2015-07-27 11:29:26',	'2015-07-27 11:29:26'),
(17,	'slide_5.jpg',	'945ec634fbd4eb4da985e02c4aa3acc8.jpg',	510597,	1,	NULL,	NULL,	'full',	9999999,	'2015-07-27 11:29:36',	'2015-07-27 11:29:36'),
(18,	'medium-slide_5.jpg',	'medium-945ec634fbd4eb4da985e02c4aa3acc8.jpg',	27183,	1,	17,	NULL,	'medium',	9999999,	'2015-07-27 11:29:36',	'2015-07-27 11:29:36'),
(19,	'slide-slide_5.jpg',	'slide-945ec634fbd4eb4da985e02c4aa3acc8.jpg',	236408,	1,	17,	NULL,	'slide',	9999999,	'2015-07-27 11:29:37',	'2015-07-27 11:29:37'),
(20,	'tile-slide_5.jpg',	'tile-945ec634fbd4eb4da985e02c4aa3acc8.jpg',	29248,	1,	17,	NULL,	'tile',	9999999,	'2015-07-27 11:29:37',	'2015-07-27 11:29:37'),
(21,	'tile_1.jpg',	'8e08db0a41db078b75f8a42148378b47.jpg',	411491,	2,	NULL,	NULL,	'full',	9999999,	'2015-07-27 11:30:02',	'2015-07-27 11:30:02'),
(22,	'medium-tile_1.jpg',	'medium-8e08db0a41db078b75f8a42148378b47.jpg',	18161,	2,	21,	NULL,	'medium',	9999999,	'2015-07-27 11:30:02',	'2015-07-27 11:30:02'),
(23,	'slide-tile_1.jpg',	'slide-8e08db0a41db078b75f8a42148378b47.jpg',	100857,	2,	21,	NULL,	'slide',	9999999,	'2015-07-27 11:30:02',	'2015-07-27 11:30:02'),
(24,	'tile-tile_1.jpg',	'tile-8e08db0a41db078b75f8a42148378b47.jpg',	19891,	2,	21,	NULL,	'tile',	9999999,	'2015-07-27 11:30:02',	'2015-07-27 11:30:02'),
(25,	'tile_6.jpg',	'd1fe8a0ad90035e9d40b6ecba98ec467.jpg',	288404,	2,	NULL,	NULL,	'full',	9999999,	'2015-07-27 11:30:23',	'2015-07-27 11:30:23'),
(26,	'medium-tile_6.jpg',	'medium-d1fe8a0ad90035e9d40b6ecba98ec467.jpg',	13661,	2,	25,	NULL,	'medium',	9999999,	'2015-07-27 11:30:23',	'2015-07-27 11:30:23'),
(27,	'slide-tile_6.jpg',	'slide-d1fe8a0ad90035e9d40b6ecba98ec467.jpg',	69874,	2,	25,	NULL,	'slide',	9999999,	'2015-07-27 11:30:23',	'2015-07-27 11:30:23'),
(28,	'tile-tile_6.jpg',	'tile-d1fe8a0ad90035e9d40b6ecba98ec467.jpg',	14017,	2,	25,	NULL,	'tile',	9999999,	'2015-07-27 11:30:24',	'2015-07-27 11:30:24'),
(29,	'tile_4.png',	'64938563001ec5b4fcd709f50c246850.jpg',	68231,	2,	NULL,	NULL,	'full',	9999999,	'2015-07-27 11:30:40',	'2015-07-27 11:30:40'),
(30,	'medium-tile_4.png',	'medium-64938563001ec5b4fcd709f50c246850.jpg',	4174,	2,	29,	NULL,	'medium',	9999999,	'2015-07-27 11:30:40',	'2015-07-27 11:30:40'),
(31,	'slide-tile_4.png',	'slide-64938563001ec5b4fcd709f50c246850.jpg',	15882,	2,	29,	NULL,	'slide',	9999999,	'2015-07-27 11:30:41',	'2015-07-27 11:30:41'),
(32,	'tile-tile_4.png',	'tile-64938563001ec5b4fcd709f50c246850.jpg',	3884,	2,	29,	NULL,	'tile',	9999999,	'2015-07-27 11:30:41',	'2015-07-27 11:30:41'),
(33,	'tile_3.jpg',	'd063eb081bde3c2b1b558fafefea15de.jpg',	186143,	2,	NULL,	NULL,	'full',	9999999,	'2015-07-27 11:30:57',	'2015-07-27 11:30:57'),
(34,	'medium-tile_3.jpg',	'medium-d063eb081bde3c2b1b558fafefea15de.jpg',	9635,	2,	33,	NULL,	'medium',	9999999,	'2015-07-27 11:30:57',	'2015-07-27 11:30:57'),
(35,	'slide-tile_3.jpg',	'slide-d063eb081bde3c2b1b558fafefea15de.jpg',	44573,	2,	33,	NULL,	'slide',	9999999,	'2015-07-27 11:30:57',	'2015-07-27 11:30:57'),
(36,	'tile-tile_3.jpg',	'tile-d063eb081bde3c2b1b558fafefea15de.jpg',	9545,	2,	33,	NULL,	'tile',	9999999,	'2015-07-27 11:30:58',	'2015-07-27 11:30:58'),
(37,	'slide1.jpg',	'78d76d0056e71d7b032555189d88f142.jpg',	438160,	2,	NULL,	NULL,	'full',	9999999,	'2015-07-27 11:31:25',	'2015-07-27 11:31:25'),
(38,	'medium-slide1.jpg',	'medium-78d76d0056e71d7b032555189d88f142.jpg',	8703,	2,	37,	NULL,	'medium',	9999999,	'2015-07-27 11:31:25',	'2015-07-27 11:31:25'),
(39,	'slide-slide1.jpg',	'slide-78d76d0056e71d7b032555189d88f142.jpg',	87586,	2,	37,	NULL,	'slide',	9999999,	'2015-07-27 11:31:25',	'2015-07-27 11:31:25'),
(40,	'tile-slide1.jpg',	'tile-78d76d0056e71d7b032555189d88f142.jpg',	11139,	2,	37,	NULL,	'tile',	9999999,	'2015-07-27 11:31:25',	'2015-07-27 11:31:25'),
(41,	'slide4.jpg',	'8816964471f2c638853b55e1b62b04f7.jpg',	583034,	2,	NULL,	NULL,	'full',	9999999,	'2015-07-27 11:31:39',	'2015-07-27 11:31:39'),
(42,	'medium-slide4.jpg',	'medium-8816964471f2c638853b55e1b62b04f7.jpg',	16075,	2,	41,	NULL,	'medium',	9999999,	'2015-07-27 11:31:39',	'2015-07-27 11:31:39'),
(43,	'slide-slide4.jpg',	'slide-8816964471f2c638853b55e1b62b04f7.jpg',	111964,	2,	41,	NULL,	'slide',	9999999,	'2015-07-27 11:31:39',	'2015-07-27 11:31:39'),
(44,	'tile-slide4.jpg',	'tile-8816964471f2c638853b55e1b62b04f7.jpg',	15414,	2,	41,	NULL,	'tile',	9999999,	'2015-07-27 11:31:39',	'2015-07-27 11:31:39'),
(45,	'tile_5.jpg',	'7258a3f60958230503c2ba608b4f6ce2.jpg',	267979,	2,	NULL,	NULL,	'full',	9999999,	'2015-07-27 11:32:00',	'2015-07-27 11:32:00'),
(46,	'medium-tile_5.jpg',	'medium-7258a3f60958230503c2ba608b4f6ce2.jpg',	13511,	2,	45,	NULL,	'medium',	9999999,	'2015-07-27 11:32:00',	'2015-07-27 11:32:00'),
(47,	'slide-tile_5.jpg',	'slide-7258a3f60958230503c2ba608b4f6ce2.jpg',	67897,	2,	45,	NULL,	'slide',	9999999,	'2015-07-27 11:32:00',	'2015-07-27 11:32:00'),
(48,	'tile-tile_5.jpg',	'tile-7258a3f60958230503c2ba608b4f6ce2.jpg',	14664,	2,	45,	NULL,	'tile',	9999999,	'2015-07-27 11:32:00',	'2015-07-27 11:32:00'),
(49,	'tile_2.jpg',	'f77631627db11919924ab2c85db01d38.jpg',	293231,	2,	NULL,	NULL,	'full',	9999999,	'2015-07-27 11:32:17',	'2015-07-27 11:32:17'),
(50,	'medium-tile_2.jpg',	'medium-f77631627db11919924ab2c85db01d38.jpg',	11268,	2,	49,	NULL,	'medium',	9999999,	'2015-07-27 11:32:17',	'2015-07-27 11:32:17'),
(51,	'slide-tile_2.jpg',	'slide-f77631627db11919924ab2c85db01d38.jpg',	69481,	2,	49,	NULL,	'slide',	9999999,	'2015-07-27 11:32:17',	'2015-07-27 11:32:17'),
(52,	'tile-tile_2.jpg',	'tile-f77631627db11919924ab2c85db01d38.jpg',	13241,	2,	49,	NULL,	'tile',	9999999,	'2015-07-27 11:32:18',	'2015-07-27 11:32:18'),
(53,	'slide3.jpg',	'27932e5b110f50a47b33068383f24314.jpg',	289474,	2,	NULL,	NULL,	'full',	9999999,	'2015-07-27 11:32:50',	'2015-07-27 11:32:50'),
(54,	'medium-slide3.jpg',	'medium-27932e5b110f50a47b33068383f24314.jpg',	11750,	2,	53,	NULL,	'medium',	9999999,	'2015-07-27 11:32:50',	'2015-07-27 11:32:50'),
(55,	'slide-slide3.jpg',	'slide-27932e5b110f50a47b33068383f24314.jpg',	58396,	2,	53,	NULL,	'slide',	9999999,	'2015-07-27 11:32:50',	'2015-07-27 11:32:50'),
(56,	'tile-slide3.jpg',	'tile-27932e5b110f50a47b33068383f24314.jpg',	11882,	2,	53,	NULL,	'tile',	9999999,	'2015-07-27 11:32:50',	'2015-07-27 11:32:50');

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
  KEY `gallery_picture_id` (`gallery_picture_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `sliders` (`id`, `name`, `ord`, `gallery_picture_id`) VALUES
(1,	'Slide 1',	9999999,	1),
(2,	'Slide 2',	9999999,	5),
(3,	'Slide 3',	9999999,	9),
(4,	'Slide 4',	9999999,	13),
(5,	'Slide 5',	9999999,	17);


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
(1,	'admin',	'$2a$10$oTInOZNrfJqOdFEjVAb00ugqLRwquceqkt39aam1pY/4m1/py4.nq',	NULL,	'2015-06-24 10:37:25',	'2015-06-24 10:37:25'),
(2,	'veronika',	'$2a$10$v1cjUd5kGH0X7UE.O8pStOzUTOuGwct1dOEY01NI2A14t4s9cMSSe',	NULL,	'2015-08-05 23:41:33',	'2015-08-05 23:41:33');

DROP TABLE IF EXISTS `documents`;
CREATE TABLE `documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `content` text COLLATE utf8_czech_ci,
  `perex` text COLLATE utf8_czech_ci,
  `user_id` int(11) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `ord` int(11) NOT NULL DEFAULT '99999',
  `slug` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `documents` (`id`, `title`, `content`, `perex`, `user_id`, `published`, `ord`, `slug`) VALUES
(1,	'Kontakty',	'<h1>Kontakty / Contacts</h1>	<p>Jiří Turek: jiriturekk@gmail.com, +420 775 229 856</p>	<p>Represented by PavleyeArtistManagementandProduction: jozef@pavleye.com, +420 731 151 121</p>',	NULL,	0,	1,	99999,	'');

DROP TABLE IF EXISTS `tiles`;
CREATE TABLE `tiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `ord` int(11) NOT NULL DEFAULT '9999999',
  `gallery_picture_id` int(11) DEFAULT NULL,
  `document_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `tiles` (`id`, `title`, `ord`, `gallery_picture_id`, `document_id`) VALUES
(1,	'Rezervace Kurtů',	9999999,	21,	NULL),
(2,	'Turnaje',	9999999,	25,	NULL),
(3,	'Kroužky',	9999999,	29,	NULL),
(4,	'Tréninky',	9999999,	33,	NULL),
(5,	'Beachkempy v Čechách',	9999999,	37,	NULL),
(6,	'Beachkempy v Itálii',	9999999,	41,	NULL),
(7,	'Firemní akce',	9999999,	45,	NULL),
(8,	'Beachbar',	9999999,	49,	NULL),
(9,	'Členství v klubu',	9999999,	53,	NULL);

-- 2015-07-27 09:39:34
