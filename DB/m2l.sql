-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 18 Juin 2017 à 12:55
-- Version du serveur: 5.5.55-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `m2l`
--

-- --------------------------------------------------------

--
-- Structure de la table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `days_left` int(11) DEFAULT NULL,
  `credits_left` int(11) DEFAULT NULL,
  `team_id` int(11) unsigned DEFAULT NULL,
  `manager_status` tinyint(1) DEFAULT NULL,
  `online` int(1) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `team_id` (`team_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=102 ;

--
-- Contenu de la table `employee`
--

INSERT INTO `employee` (`id`, `username`, `password`, `email`, `image`, `days_left`, `credits_left`, `team_id`, `manager_status`, `online`, `last_login`) VALUES
(1, 'papa', 'rl.T1g5bgHjXg', 'papa@gmail.com', 'Web/dist/img/user2.jpg', 22, 3758, 1, 1, 1, '2017-06-18 12:31:03'),
(2, 'fiston', 'rl4nYQV5i.PvA', 'fiston@gmail.com', 'Web/dist/img/user1.jpg', 17, 2100, 1, 0, 0, '2017-06-18 12:05:32'),
(3, 'Addison', 'QRX09NDC1CS', 'neque@Curabiturvellectus.edu', 'Web/dist/img/user3.jpg', 26, 804, 4, 1, 0, '2016-01-24 03:58:29'),
(4, 'Carly', 'ZFN16WHU8AD', 'Integer.vulputate.risus@accumsan.org', 'Web/dist/img/user3.jpg', 20, 4994, 4, 1, 0, '2016-08-18 23:47:29'),
(5, 'Callie', 'RAT44OHF0RR', 'Nam@ornareFusce.co.uk', 'Web/dist/img/user3.jpg', 16, 2899, 5, 1, 0, '2017-03-02 14:49:19'),
(6, 'Gray', 'VOR82DPM1WQ', 'Praesent.luctus.Curabitur@quis.co.uk', 'Web/dist/img/user3.jpg', 17, 419, 2, 1, 0, '2016-02-03 20:42:53'),
(7, 'Charde', 'IDJ25JDJ9LW', 'amet.ornare@malesuadavel.net', 'Web/dist/img/user3.jpg', 18, 520, 3, 1, 0, '2015-12-25 16:48:02'),
(8, 'Regan', 'LEN50EXQ9YK', 'eu@egetnisidictum.net', 'Web/dist/img/user3.jpg', 20, 1091, 1, 1, 0, '2016-07-14 16:19:24'),
(9, 'Lacy', 'OZP59NIJ9HW', 'Cras.eget@elitelit.net', 'Web/dist/img/user3.jpg', 31, 2384, 5, 1, 0, '2017-01-29 17:09:23'),
(10, 'Yvette', 'YOG45WZH1KE', 'ultricies@ipsumDonecsollicitudin.edu', 'Web/dist/img/user3.jpg', 27, 2032, 2, 1, 0, '2017-07-26 09:55:23'),
(11, 'Randall', 'AOH85RKB3VP', 'egestas.nunc@estMauriseu.edu', 'Web/dist/img/user3.jpg', 24, 3957, 2, 0, 0, '2016-04-25 23:08:34'),
(12, 'Emmanuel', 'UIJ10COC5QC', 'at@eumetusIn.net', 'Web/dist/img/user3.jpg', 18, 1678, 2, 0, 0, '2017-03-30 13:46:35'),
(13, 'Abigail', 'TVE62GEN6DD', 'aliquam@urnaNunc.edu', 'Web/dist/img/user3.jpg', 32, 4413, 1, 0, 0, '2016-08-04 18:36:41'),
(14, 'Roth', 'GFN31FJV1FP', 'egestas.urna.justo@dictumsapien.org', 'Web/dist/img/user3.jpg', 23, 4095, 3, 0, 0, '2017-02-03 23:52:37'),
(15, 'Morgan', 'OCR09FGB3VB', 'justo.Proin.non@egestas.edu', 'Web/dist/img/user3.jpg', 17, 27, 3, 0, 0, '2016-02-10 13:29:06'),
(16, 'Graiden', 'ECE36WAO5SM', 'ultrices.a.auctor@sodales.co.uk', 'Web/dist/img/user3.jpg', 18, 1550, 1, 0, 0, '2017-01-04 01:32:35'),
(17, 'Byron', 'UVY62GKP0PG', 'Etiam.gravida@urnaNullamlobortis.ca', 'Web/dist/img/user3.jpg', 17, 4336, 4, 0, 0, '2017-05-29 05:48:33'),
(18, 'Edan', 'DCA91CEO4EL', 'tempus@consequat.edu', 'Web/dist/img/user3.jpg', 21, 1173, 1, 0, 0, '2016-02-22 22:17:43'),
(19, 'Donovan', 'EPG06YGW0IA', 'Vivamus.sit.amet@Sed.net', 'Web/dist/img/user3.jpg', 27, 3527, 1, 0, 0, '2016-07-16 21:07:34'),
(20, 'Kevin', 'XAS55NMP6ZE', 'vitae@semegetmassa.org', 'Web/dist/img/user3.jpg', 14, 1693, 3, 0, 0, '2017-07-18 21:29:40'),
(21, 'Audrey', 'TMU49OPB7IF', 'amet.orci.Ut@magnaUt.ca', 'Web/dist/img/user4.jpg', 27, 2301, 3, 0, 0, '2016-09-06 21:56:02'),
(22, 'Hyacinth', 'AGL98RKO9IS', 'rutrum.magna.Cras@Duiselementumdui.co.uk', 'Web/dist/img/user4.jpg', 21, 4014, 2, 0, 0, '2017-03-10 19:58:36'),
(23, 'Bernard', 'HKC06CRM4YE', 'elit@mattissemperdui.com', 'Web/dist/img/user4.jpg', 23, 953, 5, 0, 0, '2016-06-16 22:43:29'),
(24, 'Arden', 'ZFT47TMU3NK', 'semper.tellus.id@ultriciesornare.ca', 'Web/dist/img/user4.jpg', 19, 128, 1, 0, 0, '2017-07-17 23:55:52'),
(25, 'Yolanda', 'MCE40AVX3LU', 'Donec.feugiat.metus@acfacilisis.org', 'Web/dist/img/user4.jpg', 20, 1298, 5, 0, 0, '2017-09-07 18:21:04'),
(26, 'Burton', 'XEX19LAY4NF', 'eu.nibh@ligula.edu', 'Web/dist/img/user4.jpg', 20, 153, 5, 0, 0, '2016-04-06 17:34:16'),
(27, 'Keiko', 'VLM03TSG7AH', 'arcu.eu@antedictumcursus.net', 'Web/dist/img/user4.jpg', 15, 3918, 1, 0, 0, '2015-12-15 20:43:44'),
(28, 'Dylan', 'OEF01RMA3GT', 'felis.adipiscing@pellentesquemassa.ca', 'Web/dist/img/user4.jpg', 23, 3717, 3, 0, 0, '2016-09-03 15:40:34'),
(29, 'Denton', 'REI19LLJ2PN', 'tellus.id.nunc@molestie.co.uk', 'Web/dist/img/user4.jpg', 32, 3471, 1, 0, 0, '2017-03-21 19:32:46'),
(30, 'Boris', 'PPN85XJQ9IH', 'mauris@Donec.net', 'Web/dist/img/user4.jpg', 30, 4383, 1, 0, 0, '2017-04-09 23:58:12'),
(31, 'Keiko', 'OMQ12BBU8YQ', 'est.arcu@dictumeueleifend.com', 'Web/dist/img/user4.jpg', 1, 4702, NULL, 0, 0, '2017-08-19 03:05:00'),
(32, 'Gavin', 'CWQ17EZH7MJ', 'Class.aptent.taciti@nec.net', 'Web/dist/img/user4.jpg', 18, 3265, NULL, 0, 0, '2017-07-30 17:30:02'),
(33, 'Unity', 'HNR47AAK7WV', 'purus@Pellentesquetincidunt.net', 'Web/dist/img/user4.jpg', 20, 819, NULL, 0, 0, '2017-08-07 11:43:21'),
(34, 'Cruz', 'LSQ13HKT7ER', 'laoreet.posuere@erosnonenim.co.uk', 'Web/dist/img/user4.jpg', 11, 3584, NULL, 0, 0, '2017-04-18 07:59:45'),
(35, 'Phyllis', 'KAH74VXE5YD', 'Sed.nulla@metus.net', 'Web/dist/img/user4.jpg', 38, 1492, NULL, 0, 0, '2016-04-05 05:01:21'),
(36, 'Mira', 'JFE70SLJ2WI', 'dictum@nibhvulputatemauris.ca', 'Web/dist/img/user4.jpg', 29, 854, NULL, 0, 0, '2017-02-13 19:49:00'),
(37, 'Ethan', 'LVA56SDK5BO', 'lorem.luctus.ut@Aliquamornarelibero.org', 'Web/dist/img/user4.jpg', 27, 3615, NULL, 0, 0, '2016-10-23 11:50:00'),
(38, 'Wallace', 'ODY85OOT4LR', 'rhoncus.Nullam.velit@at.co.uk', 'Web/dist/img/user4.jpg', 30, 4334, NULL, 0, 0, '2017-06-10 12:25:01'),
(39, 'Felix', 'ANA11FUN8XM', 'orci@nec.com', 'Web/dist/img/user4.jpg', 11, 4672, NULL, 0, 0, '2016-09-18 04:42:15'),
(40, 'Berk', 'ECU45LAB4JK', 'ipsum.primis.in@maurisa.org', 'Web/dist/img/user5.jpg', 37, 4760, NULL, 0, 0, '2017-07-08 02:03:07'),
(41, 'Reece', 'NZK55DUZ7FP', 'non.hendrerit.id@Nulla.co.uk', 'Web/dist/img/user5.jpg', 40, 1788, NULL, 0, 0, '2016-10-11 23:20:12'),
(42, 'Declan', 'RSB05VKZ8UR', 'eu.arcu@sollicitudin.com', 'Web/dist/img/user5.jpg', 26, 2459, NULL, 0, 0, '2017-07-02 14:27:42'),
(43, 'Felix', 'IVH82JHL7QA', 'lectus.rutrum@adipiscinglacusUt.org', 'Web/dist/img/user5.jpg', 20, 3517, NULL, 0, 0, '2016-07-30 03:40:58'),
(44, 'Aspen', 'AFH44ZEI1AF', 'Donec.felis.orci@lobortisnisi.net', 'Web/dist/img/user5.jpg', 60, 2153, NULL, 0, 0, '2016-05-14 11:55:36'),
(45, 'Kylynn', 'YFP42WMB9OJ', 'imperdiet.ullamcorper.Duis@nislsem.edu', 'Web/dist/img/user5.jpg', 33, 127, NULL, 0, 0, '2017-11-28 18:27:19'),
(46, 'Candice', 'TSK59OTG9CE', 'magna.malesuada@diam.com', 'Web/dist/img/user5.jpg', 52, 1530, NULL, 0, 0, '2016-06-17 07:14:11'),
(47, 'Karen', 'CIB23ARX6OI', 'tincidunt.dui.augue@ut.co.uk', 'Web/dist/img/user5.jpg', 3, 4359, NULL, 0, 0, '2016-10-17 04:24:03'),
(48, 'Avye', 'JPL79XFQ1DG', 'ligula.Nullam@Lorem.org', 'Web/dist/img/user5.jpg', 40, 3785, NULL, 0, 0, '2017-10-10 10:18:39'),
(49, 'Keane', 'BLF40TNG2XO', 'lectus.ante@pede.com', 'Web/dist/img/user5.jpg', 59, 4825, NULL, 0, 0, '2016-08-03 08:20:23'),
(50, 'Alden', 'AIR03QHT5GS', 'tristique@infelisNulla.ca', 'Web/dist/img/user5.jpg', 52, 2777, NULL, 0, 0, '2016-06-01 09:40:20'),
(51, 'Brynne', 'HGP69RBU4PE', 'augue.Sed@nequesed.co.uk', 'Web/dist/img/user5.jpg', 32, 4901, NULL, 0, 0, '2016-11-08 16:55:32'),
(52, 'Larissa', 'PAD96VGD0IT', 'feugiat@Praesent.edu', 'Web/dist/img/user5.jpg', 52, 578, NULL, 0, 0, '2016-04-13 06:58:11'),
(53, 'Graiden', 'OXM89FWG1DX', 'mauris@consectetueradipiscingelit.net', 'Web/dist/img/user5.jpg', 22, 3044, NULL, 0, 0, '2015-12-20 07:20:08'),
(54, 'Libby', 'GBE04VCC7HJ', 'Nulla@lectusconvallisest.co.uk', 'Web/dist/img/user5.jpg', 13, 1337, NULL, 0, 0, '2017-05-04 22:59:22'),
(55, 'Cedric', 'KMU14ZKT4QK', 'vitae@sitametmetus.edu', 'Web/dist/img/user5.jpg', 27, 2708, NULL, 0, 0, '2016-04-24 12:11:39'),
(56, 'Fiona', 'IRL33TNO1NK', 'risus.at.fringilla@Nunccommodoauctor.co.uk', 'Web/dist/img/user5.jpg', 1, 3366, NULL, 0, 0, '2016-11-09 00:03:04'),
(57, 'Shana', 'GNG52ATB4RX', 'nec@leo.edu', 'Web/dist/img/user5.jpg', 11, 278, NULL, 0, 0, '2017-12-04 12:53:46'),
(58, 'Avye', 'IUQ14MCT6VH', 'eu.erat.semper@ametorci.org', 'Web/dist/img/user5.jpg', 55, 4419, NULL, 0, 0, '2017-09-14 15:11:20'),
(59, 'Caesar', 'SQH87DBS9YO', 'Curabitur.dictum@elitelit.edu', 'Web/dist/img/user5.jpg', 28, 3455, NULL, 0, 0, '2017-03-01 16:04:33'),
(60, 'Basil', 'FZV15GTA9MU', 'mauris.sagittis@ac.com', 'Web/dist/img/user5.jpg', 43, 394, NULL, 0, 0, '2017-06-14 14:22:04'),
(61, 'Jade', 'BMN04WSX4OV', 'amet.ante.Vivamus@Aliquamtincidunt.com', 'Web/dist/img/user5.jpg', 31, 3765, NULL, 0, 0, '2015-12-27 17:41:55'),
(62, 'Todd', 'KQR28MDI0NX', 'sed@mattisornarelectus.ca', 'Web/dist/img/user5.jpg', 42, 3562, NULL, 0, 0, '2016-03-23 18:14:07'),
(63, 'Judah', 'VBO20MAE4JV', 'aliquam.adipiscing.lacus@luctus.ca', 'Web/dist/img/user6.jpg', 53, 1543, NULL, 0, 0, '2017-07-20 10:06:13'),
(64, 'Xantha', 'WQO50YJR1MP', 'ut@tortorNunc.net', 'Web/dist/img/user6.jpg', 49, 897, NULL, 0, 0, '2017-10-23 14:06:46'),
(65, 'Brody', 'LOL09VJQ6EV', 'Vivamus.sit@rutrum.com', 'Web/dist/img/user6.jpg', 44, 2700, NULL, 0, 0, '2016-03-23 21:19:42'),
(66, 'Noble', 'DGA37YYW4KC', 'nascetur.ridiculus@molestie.co.uk', 'Web/dist/img/user6.jpg', 4, 88, NULL, 0, 0, '2017-08-13 12:10:29'),
(67, 'Blaze', 'SAA57FVH6FR', 'faucibus.ut@neque.co.uk', 'Web/dist/img/user6.jpg', 3, 4722, NULL, 0, 0, '2016-08-11 21:44:07'),
(68, 'Ahmed', 'KDN17QKE7UU', 'turpis.In@Donectempor.ca', 'Web/dist/img/user6.jpg', 0, 4626, NULL, 0, 0, '2017-05-17 11:10:43'),
(69, 'Salvador', 'SXI25LHH1HD', 'Ut.nec.urna@Donecelementum.edu', 'Web/dist/img/user6.jpg', 41, 4353, NULL, 0, 0, '2017-02-11 11:40:39'),
(70, 'Daryl', 'QAZ94YBS5CE', 'risus@luctusetultrices.org', 'Web/dist/img/user6.jpg', 43, 1645, NULL, 0, 0, '2016-03-07 20:50:57'),
(71, 'Charity', 'FBY10NDV4LE', 'vulputate.posuere.vulputate@ipsumnon.com', 'Web/dist/img/user6.jpg', 8, 393, NULL, 0, 0, '2016-03-14 23:12:40'),
(72, 'Timothy', 'TFO87HHO9ZC', 'dignissim.Maecenas@sem.ca', 'Web/dist/img/user6.jpg', 17, 3151, NULL, 0, 0, '2016-07-09 18:42:13'),
(73, 'Tanner', 'KMU32ZAE9ZF', 'risus.at@elit.com', 'Web/dist/img/user6.jpg', 33, 3240, NULL, 0, 0, '2017-02-23 14:41:36'),
(74, 'Emily', 'PKO48NHJ6AT', 'aliquam.arcu.Aliquam@musProin.org', 'Web/dist/img/user6.jpg', 9, 2521, NULL, 0, 0, '2016-01-08 16:00:57'),
(75, 'Ulysses', 'PTF89KCY2IM', 'cursus.diam@vulputatedui.com', 'Web/dist/img/user6.jpg', 20, 182, NULL, 0, 0, '2016-08-22 03:34:48'),
(76, 'Naida', 'FCU55EGW6JN', 'dolor.sit@loremsit.ca', 'Web/dist/img/user6.jpg', 27, 79, NULL, 0, 0, '2017-05-21 13:25:35'),
(77, 'Tasha', 'TYV69BSQ2VT', 'eu@Etiam.ca', 'Web/dist/img/user6.jpg', 48, 4716, NULL, 0, 0, '2017-06-23 03:52:53'),
(78, 'Alvin', 'GFO87IVQ4FA', 'leo@lacusvestibulumlorem.com', 'Web/dist/img/user6.jpg', 0, 1822, NULL, 0, 0, '2016-12-13 18:45:16'),
(79, 'Raya', 'WXS26IEN6OS', 'at.auctor.ullamcorper@massaVestibulum.org', 'Web/dist/img/user6.jpg', 43, 2558, NULL, 0, 0, '2017-02-08 21:43:40'),
(80, 'Otto', 'OET37IZD5OO', 'eros@felisullamcorper.net', 'Web/dist/img/user6.jpg', 35, 4774, NULL, 0, 0, '2017-01-18 01:22:41'),
(81, 'Aretha', 'RVK13OGZ2TV', 'Maecenas.libero.est@purusactellus.org', 'Web/dist/img/user6.jpg', 12, 485, NULL, 0, 0, '2016-10-21 17:42:35'),
(82, 'Amos', 'DBT26ACX4YY', 'id.erat@nuncid.co.uk', 'Web/dist/img/user6.jpg', 50, 2162, NULL, 0, 0, '2017-04-11 22:57:35'),
(83, 'Raphael', 'JKM35QQA6PD', 'magna.Nam.ligula@orcisem.com', 'Web/dist/img/user6.jpg', 44, 3826, NULL, 0, 0, '2017-04-09 08:17:37'),
(84, 'Adam', 'QRT36CPB6JO', 'sodales@iaculislacuspede.com', 'Web/dist/img/user6.jpg', 39, 156, NULL, 0, 0, '2017-06-20 19:22:43'),
(85, 'Illana', 'MCO38ZUC8AV', 'orci@quis.com', 'Web/dist/img/user7.jpg', 33, 3558, NULL, 0, 0, '2016-09-22 19:56:03'),
(86, 'Ebony', 'GYO85HMH2QT', 'arcu.Vestibulum.ante@dolorDonecfringilla.com', 'Web/dist/img/user7.jpg', 56, 1303, NULL, 0, 0, '2017-11-03 04:07:33'),
(87, 'Randall', 'LYS65RPF9GE', 'libero.mauris@commodoipsumSuspendisse.org', 'Web/dist/img/user7.jpg', 12, 2122, NULL, 0, 0, '2017-06-14 22:07:54'),
(88, 'Lesley', 'MRZ21JNB3PI', 'eget@diamvel.ca', 'Web/dist/img/user7.jpg', 43, 2157, NULL, 0, 0, '2016-05-28 08:11:49'),
(89, 'Luke', 'MNZ24EIQ1IA', 'vel.sapien.imperdiet@odiotristique.com', 'Web/dist/img/user7.jpg', 29, 4010, NULL, 0, 0, '2017-10-13 06:14:43'),
(90, 'Liberty', 'EOH67FVR7WK', 'nonummy.ut.molestie@erat.org', 'Web/dist/img/user7.jpg', 36, 1350, NULL, 0, 0, '2016-12-13 07:15:56'),
(91, 'Dante', 'ANQ06OQH1KY', 'metus.sit@Sed.org', 'Web/dist/img/user7.jpg', 7, 2539, NULL, 0, 0, '2017-07-27 03:32:08'),
(92, 'Frances', 'MKK46IIG1MC', 'at.nisi.Cum@elitEtiam.net', 'Web/dist/img/user8.jpg', 3, 2133, NULL, 0, 0, '2016-04-13 02:47:54'),
(93, 'Piper', 'CSF80JOI2TQ', 'convallis@lacusUt.ca', 'Web/dist/img/user8.jpg', 46, 3049, NULL, 0, 0, '2017-11-03 04:31:32'),
(94, 'Keaton', 'XWU67YFK5IL', 'vel.faucibus.id@magnaa.org', 'Web/dist/img/user8.jpg', 4, 1530, NULL, 0, 0, '2017-04-23 13:29:32'),
(95, 'Erasmus', 'UJY41XKN5FI', 'eu@turpisAliquamadipiscing.net', 'Web/dist/img/user8.jpg', 5, 4460, NULL, 0, 0, '2016-03-21 11:43:40'),
(96, 'Gray', 'CXR96MIL8JP', 'in.cursus@enim.org', 'Web/dist/img/user8.jpg', 43, 2242, NULL, 0, 0, '2015-12-22 04:07:03'),
(97, 'Britanney', 'RGB74NLJ8BP', 'Mauris.magna@ategestasa.edu', 'Web/dist/img/user8.jpg', 1, 2882, NULL, 0, 0, '2017-10-30 08:13:27'),
(98, 'Karina', 'JJC79XMZ8XN', 'fringilla.euismod@Aliquam.com', 'Web/dist/img/user8.jpg', 28, 694, NULL, 0, 0, '2016-10-16 08:50:47'),
(99, 'Bernard', 'NQC88YDQ3PL', 'urna.nec.luctus@Cumsociisnatoque.co.uk', 'Web/dist/img/user8.jpg', 12, 2760, NULL, 0, 0, '2017-04-26 02:28:48'),
(100, 'Cullen', 'UYW36NTW0XU', 'malesuada.Integer.id@Donecnonjusto.edu', 'Web/dist/img/user8.jpg', 45, 4137, NULL, 0, 0, '2017-10-05 20:56:56'),
(101, 'Jin', 'OIK14HRV1DO', 'diam.nunc.ullamcorper@aliquet.ca', 'Web/dist/img/user8.jpg', 21, 4666, NULL, 1, 0, '2016-03-06 21:01:17');

--
-- Déclencheurs `employee`
--
DROP TRIGGER IF EXISTS `after_update_employee`;
DELIMITER //
CREATE TRIGGER `after_update_employee` AFTER UPDATE ON `employee`
 FOR EACH ROW UPDATE employee_formation
INNER JOIN formation
ON employee_formation.id_formation = formation.id
SET employee_formation.id_formation_status = 
IF (formation.days <= TIMESTAMPDIFF(DAY, formation.date, CURRENT_TIMESTAMP), 5, employee_formation.id_formation_status)
WHERE employee_formation.id_employee = OLD.id
AND employee_formation.id_formation_status = 1
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `employee_formation`
--

CREATE TABLE IF NOT EXISTS `employee_formation` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_formation` int(11) unsigned NOT NULL,
  `id_employee` int(11) unsigned NOT NULL,
  `id_formation_status` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_employee_id` (`id_employee`),
  KEY `fk_formation_id` (`id_formation`),
  KEY `fk_formation_status_id` (`id_formation_status`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=197 ;

--
-- Contenu de la table `employee_formation`
--

INSERT INTO `employee_formation` (`id`, `id_formation`, `id_employee`, `id_formation_status`) VALUES
(157, 22, 7, 1),
(158, 20, 6, 2),
(159, 1, 29, 3),
(160, 6, 28, 2),
(161, 21, 4, 2),
(162, 28, 19, 1),
(163, 28, 24, 1),
(164, 10, 29, 3),
(165, 9, 3, 3),
(166, 11, 24, 2),
(167, 9, 10, 2),
(168, 13, 8, 3),
(169, 29, 21, 2),
(170, 19, 9, 1),
(171, 29, 19, 3),
(172, 2, 17, 1),
(173, 20, 14, 1),
(174, 22, 4, 2),
(175, 23, 18, 3),
(176, 3, 26, 3),
(177, 6, 12, 1),
(178, 17, 8, 1),
(179, 12, 10, 1),
(180, 21, 30, 1),
(181, 7, 22, 3),
(182, 7, 19, 2),
(183, 11, 23, 1),
(184, 8, 9, 3),
(185, 20, 25, 3),
(186, 18, 21, 1),
(196, 9, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL,
  `duration` int(11) NOT NULL,
  `days` int(11) NOT NULL,
  `credits` int(11) DEFAULT NULL,
  `place` varchar(50) NOT NULL,
  `provider` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`id`, `name`, `description`, `date`, `duration`, `days`, `credits`, `place`, `provider`) VALUES
(1, 'Microsoft Office', 'Formation aux différents outils du pack Microsoft Office', '2017-11-01 08:00:00', 50, 7, 1282, 'Paris', 'Microsoft'),
(2, 'Suites Adobe ', 'Formation aux différents outils de la suite Adobe', '2017-09-07 08:00:00', 70, 9, 1436, 'Lyon', 'Adobe'),
(3, 'Anglais débutant', 'Initiation à l''anglais', '2017-08-29 08:00:00', 60, 4, 800, 'Strasbourg', 'CFA Alsace'),
(4, 'Anglais intermédiaire', 'Cours d''anglais intermédiaire', '2017-10-28 08:00:00', 120, 8, 1000, 'Strasbourg', 'CFA Alsace'),
(5, 'Anglais expert', 'Préparation aux concours TOEIC', '2018-01-01 08:00:00', 180, 12, 1200, 'Strasbourg', 'CFA Alsace'),
(6, 'Allemand débutant', 'Initiation à l''allemand', '2017-08-28 08:00:00', 50, 4, 800, 'Strasbourg', 'CFA Alsace'),
(7, 'Allemand intermédiaire', 'Cours d''allemand intermédiaire', '2017-10-28 08:00:00', 100, 8, 1000, 'Strasbourg', 'CFA Alsace'),
(8, 'Allemand expert', 'Préparation à la certification Deutsch', '2018-01-06 08:00:00', 150, 12, 1200, 'Strasbourg', 'CFA Alsace'),
(9, 'HTML/CSS débutant', 'Initiation au langage HTML et au CSS', '2017-11-07 08:00:00', 20, 2, 1000, 'Strasbourg', 'One Technologie'),
(10, 'HTML/CSS avancé', 'Approfondissement du langage HTML et CSS', '2018-01-01 08:00:00', 50, 5, 1500, 'Strasbourg', 'One Technologie'),
(11, 'PHP/MySQL débutant', 'Initiation aux langages PHP et MySQL', '2017-09-01 08:00:00', 80, 5, 1000, 'Strasbourg', 'Server4U'),
(12, 'PHP/MySQL avancé', 'Approfondissement du langage PHP et MySQL', '2018-02-01 08:00:00', 160, 11, 1500, 'Strasbourg', 'Server4U'),
(13, 'Javascript/NodeJS intermédiaire', 'Initiation au langage Javascript et au Framework Node Js', '2017-11-01 08:00:00', 120, 8, 1500, 'Paris', 'Netbird'),
(14, 'Javascript/NodeJS avancé', 'Approfondissement du langage Javascript et du Framework NodeJS', '2018-03-01 08:00:00', 170, 13, 1700, 'Paris', 'Netbird'),
(15, 'Internet bases', 'Initiation aux bases d''Internet', '2017-07-01 08:00:00', 20, 2, 600, 'Strasbourg', 'DigitalVision'),
(16, 'Réseaux TCP/IP bases', 'Initiation aux réseaux et au modèle TCP/IP', '2017-04-14 08:00:00', 40, 6, 900, 'Rennes', 'Server4U'),
(17, 'Premier Secours', 'Formation aux premiers secours et certifications', '2017-10-01 10:00:00', 15, 3, 300, 'Strasbourg', '2eme régiment de Strasbourg'),
(18, 'CQP Animateur/trice sportif/ve', 'L''animateur de vacances accueille les vacanciers dans des clubs ou des centres de vacances. Il propose aux adultes et aux enfants des activités de loisirs, culturelles, manuelles ou sportives. il conçoit et organise toutes ces activités avec les autres animateurs de la structure où il travaille.', '2017-11-01 08:00:00', 12, 3, 700, 'Strasbourg', 'CREPS Strasbourg'),
(19, 'Enim Nunc Ut Ltd', 'Morbi non sapien molestie orci tincidunt adipiscing. Mauris', '2016-10-25 15:07:56', 20, 6, 1480, 'Waterbury', 'Borland'),
(20, 'Sapien Nunc Pulvinar Institute', 'eleifend non, dapibus rutrum, justo. Praesent luctus.', '2017-01-07 14:16:47', 17, 11, 1017, 'Beausejour', 'Google'),
(21, 'Donec Tempus Inc.', 'Aliquam ultrices', '2016-10-28 19:31:05', 24, 5, 619, 'Värnamo', 'Apple Systems'),
(22, 'Justo Sit LLC', 'risus varius orci, in consequat enim diam vel arcu. Curabitur ut odio vel est tempor', '2016-09-19 16:44:31', 30, 9, 631, 'Westlock', 'Sibelius'),
(23, 'Donec Porttitor Tellus Foundation', 'iaculis aliquet diam. Sed diam lorem,', '2016-10-05 20:31:24', 25, 9, 898, 'Mount Gambier', 'Altavista'),
(24, 'Sodales Purus In Consulting', 'magnis dis parturient montes, nascetur ridiculus mus. Donec', '2016-07-19 13:56:30', 16, 14, 643, 'Herstal', 'Lavasoft'),
(25, 'Nunc Nulla PC', 'in, hendrerit consectetuer,', '2016-08-16 20:22:11', 24, 5, 1573, 'Estevan', 'Lycos'),
(26, 'Vel Corp.', 'fermentum fermentum arcu. Vestibulum ante ipsum primis in faucibus orci luctus et', '2017-02-18 13:32:25', 20, 13, 1361, 'Canora', 'Chami'),
(27, 'At Consulting', 'nec,', '2016-09-07 04:50:43', 23, 16, 672, 'Thorn', 'Cakewalk'),
(28, 'Ridiculus Mus Ltd', 'risus,', '2016-11-26 01:38:26', 1, 9, 1298, 'Burdinne', 'Google'),
(29, 'Ultrices Mauris Ipsum Limited', 'a ultricies adipiscing, enim mi tempor lorem, eget mollis lectus', '2016-09-14 02:12:55', 13, 12, 1160, 'Sint-Genesius-Rode', 'Lycos'),
(30, 'Eu Dolor Limited', 'dolor elit, pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet lectus quis massa. Mauris', '2017-03-05 01:53:43', 18, 16, 1203, 'Traralgon', 'Macromedia');

-- --------------------------------------------------------

--
-- Structure de la table `formation_employee_counter`
--

CREATE TABLE IF NOT EXISTS `formation_employee_counter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_employee` int(11) unsigned NOT NULL,
  `days_accumulated` int(11) NOT NULL DEFAULT '0',
  `credits_accumulated` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_employee` (`id_employee`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Contenu de la table `formation_employee_counter`
--

INSERT INTO `formation_employee_counter` (`id`, `id_employee`, `days_accumulated`, `credits_accumulated`) VALUES
(1, 1, 0, 0),
(2, 2, 0, 0),
(3, 3, 0, 0),
(4, 4, 0, 0),
(5, 5, 0, 0),
(6, 6, 0, 0),
(7, 7, 0, 0),
(8, 8, 0, 0),
(9, 9, 0, 0),
(10, 10, 0, 0),
(11, 11, 0, 0),
(12, 12, 0, 0),
(13, 13, 0, 0),
(14, 14, 0, 0),
(15, 15, 0, 0),
(16, 16, 0, 0),
(17, 17, 0, 0),
(18, 18, 0, 0),
(19, 19, 0, 0),
(20, 20, 0, 0),
(21, 21, 0, 0),
(22, 22, 0, 0),
(23, 23, 0, 0),
(24, 24, 0, 0),
(25, 25, 0, 0),
(26, 26, 0, 0),
(27, 27, 0, 0),
(28, 28, 0, 0),
(29, 29, 0, 0),
(30, 30, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `formation_requirement`
--

CREATE TABLE IF NOT EXISTS `formation_requirement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_formation` int(11) unsigned NOT NULL,
  `id_requirement` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_FormationRequirement` (`id_formation`),
  KEY `id_requirement` (`id_requirement`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=101 ;

--
-- Contenu de la table `formation_requirement`
--

INSERT INTO `formation_requirement` (`id`, `id_formation`, `id_requirement`) VALUES
(1, 26, 19),
(2, 15, 7),
(3, 7, 4),
(4, 9, 6),
(5, 12, 25),
(6, 14, 10),
(7, 18, 8),
(8, 17, 15),
(9, 3, 13),
(10, 24, 20),
(11, 27, 4),
(12, 28, 14),
(13, 9, 26),
(14, 17, 3),
(15, 13, 6),
(16, 16, 1),
(17, 22, 12),
(18, 10, 17),
(19, 9, 30),
(20, 13, 27),
(21, 15, 11),
(22, 19, 12),
(23, 20, 5),
(24, 29, 13),
(25, 7, 1),
(26, 15, 8),
(27, 27, 9),
(28, 9, 2),
(29, 19, 13),
(30, 29, 1),
(31, 28, 8),
(32, 8, 5),
(33, 28, 11),
(34, 20, 13),
(35, 6, 28),
(36, 19, 1),
(37, 6, 6),
(38, 25, 27),
(39, 2, 6),
(40, 14, 2),
(41, 28, 26),
(42, 1, 22),
(43, 22, 20),
(44, 18, 7),
(45, 21, 22),
(46, 30, 1),
(47, 17, 20),
(48, 23, 27),
(49, 25, 28),
(50, 17, 25),
(51, 9, 15),
(52, 28, 16),
(53, 27, 3),
(54, 1, 28),
(55, 23, 18),
(56, 10, 14),
(57, 21, 6),
(58, 16, 1),
(59, 11, 17),
(60, 22, 2),
(61, 13, 6),
(62, 17, 23),
(63, 29, 8),
(64, 17, 5),
(65, 6, 4),
(66, 23, 3),
(67, 16, 4),
(68, 23, 12),
(69, 8, 3),
(70, 29, 29),
(71, 19, 17),
(72, 22, 25),
(73, 24, 7),
(74, 29, 9),
(75, 9, 16),
(76, 10, 16),
(77, 1, 17),
(78, 1, 9),
(79, 19, 19),
(80, 24, 27),
(81, 15, 19),
(82, 12, 12),
(83, 9, 20),
(84, 29, 11),
(85, 11, 2),
(86, 18, 16),
(87, 4, 20),
(88, 29, 14),
(89, 25, 13),
(90, 8, 26),
(91, 25, 14),
(92, 18, 3),
(93, 25, 19),
(94, 28, 2),
(95, 1, 24),
(96, 27, 18),
(97, 3, 3),
(98, 10, 11),
(99, 15, 19),
(100, 2, 18);

-- --------------------------------------------------------

--
-- Structure de la table `formation_status`
--

CREATE TABLE IF NOT EXISTS `formation_status` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `state_of_validation` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `formation_status`
--

INSERT INTO `formation_status` (`id`, `state_of_validation`) VALUES
(1, 'validée'),
(2, 'en cours de validation'),
(3, 'refusée'),
(4, 'disponible'),
(5, 'effectuée');

-- --------------------------------------------------------

--
-- Structure de la table `requirement`
--

CREATE TABLE IF NOT EXISTS `requirement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Contenu de la table `requirement`
--

INSERT INTO `requirement` (`id`, `value`) VALUES
(1, 'Microsoft Office'),
(2, 'Suites Adobe '),
(3, 'Anglais débutant'),
(4, 'Anglais intermédiaire'),
(5, 'Anglais expert'),
(6, 'Allemand débutant'),
(7, 'Allemand intermédiaire'),
(8, 'Allemand expert'),
(9, 'HTML/CSS débutant'),
(10, 'HTML/CSS avancé'),
(11, 'PHP/MySQL débutant'),
(12, 'PHP/MySQL avancé'),
(13, 'Javascript/NodeJS intermédiaire'),
(14, 'Javascript/NodeJS avancé'),
(15, 'Internet bases'),
(16, 'Réseaux TCP/IP bases'),
(17, 'Premier Secours'),
(18, 'CQP Animateur/trice sportif/ve'),
(19, 'Enim Nunc Ut Ltd'),
(20, 'Sapien Nunc Pulvinar Institute'),
(21, 'Donec Tempus Inc.'),
(22, 'Justo Sit LLC'),
(23, 'Donec Porttitor Tellus Foundation'),
(24, 'Sodales Purus In Consulting'),
(25, 'Nunc Nulla PC'),
(26, 'Vel Corp.'),
(27, 'At Consulting'),
(28, 'Ridiculus Mus Ltd'),
(29, 'Ultrices Mauris Ipsum Limited'),
(30, 'Eu Dolor Limited');

-- --------------------------------------------------------

--
-- Structure de la table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `team`
--

INSERT INTO `team` (`id`, `name`) VALUES
(1, 'basket-ball'),
(2, 'football'),
(3, 'tennis'),
(4, 'natation'),
(5, 'handball'),
(6, 'rugby'),
(7, 'escrime'),
(8, 'atléthisme'),
(9, 'volley-ball'),
(10, 'golf');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`);

--
-- Contraintes pour la table `employee_formation`
--
ALTER TABLE `employee_formation`
  ADD CONSTRAINT `fk_employee_id` FOREIGN KEY (`id_employee`) REFERENCES `employee` (`id`),
  ADD CONSTRAINT `fk_formation_id` FOREIGN KEY (`id_formation`) REFERENCES `formation` (`id`),
  ADD CONSTRAINT `fk_formation_status_id` FOREIGN KEY (`id_formation_status`) REFERENCES `formation_status` (`id`);

--
-- Contraintes pour la table `formation_employee_counter`
--
ALTER TABLE `formation_employee_counter`
  ADD CONSTRAINT `formation_employee_counter_ibfk_1` FOREIGN KEY (`id_employee`) REFERENCES `employee` (`id`);

--
-- Contraintes pour la table `formation_requirement`
--
ALTER TABLE `formation_requirement`
  ADD CONSTRAINT `FK_FormationRequirement` FOREIGN KEY (`id_formation`) REFERENCES `formation` (`id`),
  ADD CONSTRAINT `formation_requirement_ibfk_1` FOREIGN KEY (`id_requirement`) REFERENCES `requirement` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
