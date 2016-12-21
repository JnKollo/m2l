-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 21 Décembre 2016 à 13:03
-- Version du serveur :  5.7.16-0ubuntu0.16.04.1
-- Version de PHP :  7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `m2l`
--

-- --------------------------------------------------------

--
-- Structure de la table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `days_left` int(11) DEFAULT NULL,
  `credits_left` int(11) DEFAULT NULL,
  `is_manager` tinyint(1) DEFAULT NULL,
  `id_team` int(11) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `employee`
--

INSERT INTO `employee` (`id`, `username`, `password`, `email`, `days_left`, `credits_left`, `is_manager`, `id_team`, `is_active`, `last_login`) VALUES
(1, 'papa', 'rl.T1g5bgHjXg', 'papa@gmail.com', 35, 4500, 1, 1, 0, '2016-12-18 06:11:01'),
(2, 'Kennedy', 'PWM56ARN5YC', 'In@tellusimperdietnon.org', 46, 2531, 1, 2, 0, '2017-06-22 14:53:58'),
(3, 'Addison', 'QRX09NDC1CS', 'neque@Curabiturvellectus.edu', 14, 804, 1, 3, 0, '2016-01-24 03:58:29'),
(4, 'Carly', 'ZFN16WHU8AD', 'Integer.vulputate.risus@accumsan.org', 11, 4994, 1, 4, 0, '2016-08-18 23:47:29'),
(5, 'Callie', 'RAT44OHF0RR', 'Nam@ornareFusce.co.uk', 29, 2899, 1, 5, 0, '2017-03-02 14:49:19'),
(6, 'Gray', 'VOR82DPM1WQ', 'Praesent.luctus.Curabitur@quis.co.uk', 2, 419, 1, 6, 0, '2016-02-03 20:42:53'),
(7, 'Charde', 'IDJ25JDJ9LW', 'amet.ornare@malesuadavel.net', 37, 520, 1, 7, 0, '2015-12-25 16:48:02'),
(8, 'Regan', 'LEN50EXQ9YK', 'eu@egetnisidictum.net', 46, 1091, 1, 8, 0, '2016-07-14 16:19:24'),
(9, 'Lacy', 'OZP59NIJ9HW', 'Cras.eget@elitelit.net', 38, 2384, 1, 9, 0, '2017-01-29 17:09:23'),
(10, 'Yvette', 'YOG45WZH1KE', 'ultricies@ipsumDonecsollicitudin.edu', 3, 2032, 1, 10, 0, '2017-07-26 09:55:23'),
(11, 'Randall', 'AOH85RKB3VP', 'egestas.nunc@estMauriseu.edu', 14, 3957, 0, 4, 0, '2016-04-25 23:08:34'),
(12, 'Emmanuel', 'UIJ10COC5QC', 'at@eumetusIn.net', 29, 1678, 0, 5, 0, '2017-03-30 13:46:35'),
(13, 'Abigail', 'TVE62GEN6DD', 'aliquam@urnaNunc.edu', 49, 4413, 0, 2, 0, '2016-08-04 18:36:41'),
(14, 'Roth', 'GFN31FJV1FP', 'egestas.urna.justo@dictumsapien.org', 17, 4095, 0, 3, 0, '2017-02-03 23:52:37'),
(15, 'Morgan', 'OCR09FGB3VB', 'justo.Proin.non@egestas.edu', 30, 27, 0, 3, 0, '2016-02-10 13:29:06'),
(16, 'Graiden', 'ECE36WAO5SM', 'ultrices.a.auctor@sodales.co.uk', 23, 1550, 0, 2, 0, '2017-01-04 01:32:35'),
(17, 'Byron', 'UVY62GKP0PG', 'Etiam.gravida@urnaNullamlobortis.ca', 41, 4336, 0, 9, 0, '2017-05-29 05:48:33'),
(18, 'Edan', 'DCA91CEO4EL', 'tempus@consequat.edu', 53, 1173, 0, 9, 0, '2016-02-22 22:17:43'),
(19, 'Donovan', 'EPG06YGW0IA', 'Vivamus.sit.amet@Sed.net', 57, 3527, 0, 1, 0, '2016-07-16 21:07:34'),
(20, 'Kevin', 'XAS55NMP6ZE', 'vitae@semegetmassa.org', 58, 1693, 0, 6, 0, '2017-07-18 21:29:40'),
(21, 'Audrey', 'TMU49OPB7IF', 'amet.orci.Ut@magnaUt.ca', 52, 2301, 0, 3, 0, '2016-09-06 21:56:02'),
(22, 'Hyacinth', 'AGL98RKO9IS', 'rutrum.magna.Cras@Duiselementumdui.co.uk', 53, 4119, 0, 1, 0, '2017-03-10 19:58:36'),
(23, 'Bernard', 'HKC06CRM4YE', 'elit@mattissemperdui.com', 26, 953, 0, 4, 0, '2016-06-16 22:43:29'),
(24, 'Arden', 'ZFT47TMU3NK', 'semper.tellus.id@ultriciesornare.ca', 1, 128, 0, 4, 0, '2017-07-17 23:55:52'),
(25, 'Yolanda', 'MCE40AVX3LU', 'Donec.feugiat.metus@acfacilisis.org', 30, 1298, 0, 3, 0, '2017-09-07 18:21:04'),
(26, 'Burton', 'XEX19LAY4NF', 'eu.nibh@ligula.edu', 24, 153, 0, 1, 0, '2016-04-06 17:34:16'),
(27, 'Keiko', 'VLM03TSG7AH', 'arcu.eu@antedictumcursus.net', 48, 3918, 0, 4, 0, '2015-12-15 20:43:44'),
(28, 'Dylan', 'OEF01RMA3GT', 'felis.adipiscing@pellentesquemassa.ca', 9, 3717, 0, 1, 0, '2016-09-03 15:40:34'),
(29, 'Denton', 'REI19LLJ2PN', 'tellus.id.nunc@molestie.co.uk', 50, 3471, 0, 7, 0, '2017-03-21 19:32:46'),
(30, 'Boris', 'PPN85XJQ9IH', 'mauris@Donec.net', 34, 4383, 0, 10, 0, '2017-04-09 23:58:12'),
(31, 'Keiko', 'OMQ12BBU8YQ', 'est.arcu@dictumeueleifend.com', 1, 4702, 0, 8, 0, '2017-08-19 03:05:00'),
(32, 'Gavin', 'CWQ17EZH7MJ', 'Class.aptent.taciti@nec.net', 18, 3265, 0, 6, 0, '2017-07-30 17:30:02'),
(33, 'Unity', 'HNR47AAK7WV', 'purus@Pellentesquetincidunt.net', 20, 819, 0, 8, 0, '2017-08-07 11:43:21'),
(34, 'Cruz', 'LSQ13HKT7ER', 'laoreet.posuere@erosnonenim.co.uk', 11, 3584, 0, 8, 0, '2017-04-18 07:59:45'),
(35, 'Phyllis', 'KAH74VXE5YD', 'Sed.nulla@metus.net', 38, 1492, 0, 6, 0, '2016-04-05 05:01:21'),
(36, 'Mira', 'JFE70SLJ2WI', 'dictum@nibhvulputatemauris.ca', 29, 854, 0, 2, 0, '2017-02-13 19:49:00'),
(37, 'Ethan', 'LVA56SDK5BO', 'lorem.luctus.ut@Aliquamornarelibero.org', 27, 3615, 0, 9, 0, '2016-10-23 11:50:00'),
(38, 'Wallace', 'ODY85OOT4LR', 'rhoncus.Nullam.velit@at.co.uk', 30, 4334, 0, 3, 0, '2017-06-10 12:25:01'),
(39, 'Felix', 'ANA11FUN8XM', 'orci@nec.com', 11, 4672, 0, 10, 0, '2016-09-18 04:42:15'),
(40, 'Berk', 'ECU45LAB4JK', 'ipsum.primis.in@maurisa.org', 37, 4760, 0, 6, 0, '2017-07-08 02:03:07'),
(41, 'Reece', 'NZK55DUZ7FP', 'non.hendrerit.id@Nulla.co.uk', 40, 1788, 0, 9, 0, '2016-10-11 23:20:12'),
(42, 'Declan', 'RSB05VKZ8UR', 'eu.arcu@sollicitudin.com', 26, 2459, 0, 2, 0, '2017-07-02 14:27:42'),
(43, 'Felix', 'IVH82JHL7QA', 'lectus.rutrum@adipiscinglacusUt.org', 20, 3517, 0, 4, 0, '2016-07-30 03:40:58'),
(44, 'Aspen', 'AFH44ZEI1AF', 'Donec.felis.orci@lobortisnisi.net', 60, 2153, 0, 8, 0, '2016-05-14 11:55:36'),
(45, 'Kylynn', 'YFP42WMB9OJ', 'imperdiet.ullamcorper.Duis@nislsem.edu', 33, 127, 0, 9, 0, '2017-11-28 18:27:19'),
(46, 'Candice', 'TSK59OTG9CE', 'magna.malesuada@diam.com', 52, 1530, 0, 10, 0, '2016-06-17 07:14:11'),
(47, 'Karen', 'CIB23ARX6OI', 'tincidunt.dui.augue@ut.co.uk', 3, 4359, 0, 9, 0, '2016-10-17 04:24:03'),
(48, 'Avye', 'JPL79XFQ1DG', 'ligula.Nullam@Lorem.org', 40, 3785, 0, 3, 0, '2017-10-10 10:18:39'),
(49, 'Keane', 'BLF40TNG2XO', 'lectus.ante@pede.com', 59, 4825, 0, 1, 0, '2016-08-03 08:20:23'),
(50, 'Alden', 'AIR03QHT5GS', 'tristique@infelisNulla.ca', 52, 2777, 0, 2, 0, '2016-06-01 09:40:20'),
(51, 'Brynne', 'HGP69RBU4PE', 'augue.Sed@nequesed.co.uk', 32, 4901, 0, 4, 0, '2016-11-08 16:55:32'),
(52, 'Larissa', 'PAD96VGD0IT', 'feugiat@Praesent.edu', 52, 578, 0, 3, 0, '2016-04-13 06:58:11'),
(53, 'Graiden', 'OXM89FWG1DX', 'mauris@consectetueradipiscingelit.net', 22, 3044, 0, 4, 0, '2015-12-20 07:20:08'),
(54, 'Libby', 'GBE04VCC7HJ', 'Nulla@lectusconvallisest.co.uk', 13, 1337, 0, 4, 0, '2017-05-04 22:59:22'),
(55, 'Cedric', 'KMU14ZKT4QK', 'vitae@sitametmetus.edu', 27, 2708, 0, 9, 0, '2016-04-24 12:11:39'),
(56, 'Fiona', 'IRL33TNO1NK', 'risus.at.fringilla@Nunccommodoauctor.co.uk', 1, 3366, 0, 7, 0, '2016-11-09 00:03:04'),
(57, 'Shana', 'GNG52ATB4RX', 'nec@leo.edu', 11, 278, 0, 8, 0, '2017-12-04 12:53:46'),
(58, 'Avye', 'IUQ14MCT6VH', 'eu.erat.semper@ametorci.org', 55, 4419, 0, 8, 0, '2017-09-14 15:11:20'),
(59, 'Caesar', 'SQH87DBS9YO', 'Curabitur.dictum@elitelit.edu', 28, 3455, 0, 3, 0, '2017-03-01 16:04:33'),
(60, 'Basil', 'FZV15GTA9MU', 'mauris.sagittis@ac.com', 43, 394, 0, 5, 0, '2017-06-14 14:22:04'),
(61, 'Jade', 'BMN04WSX4OV', 'amet.ante.Vivamus@Aliquamtincidunt.com', 31, 3765, 0, 3, 0, '2015-12-27 17:41:55'),
(62, 'Todd', 'KQR28MDI0NX', 'sed@mattisornarelectus.ca', 42, 3562, 0, 9, 0, '2016-03-23 18:14:07'),
(63, 'Judah', 'VBO20MAE4JV', 'aliquam.adipiscing.lacus@luctus.ca', 53, 1543, 0, 4, 0, '2017-07-20 10:06:13'),
(64, 'Xantha', 'WQO50YJR1MP', 'ut@tortorNunc.net', 49, 897, 0, 4, 0, '2017-10-23 14:06:46'),
(65, 'Brody', 'LOL09VJQ6EV', 'Vivamus.sit@rutrum.com', 44, 2700, 0, 7, 0, '2016-03-23 21:19:42'),
(66, 'Noble', 'DGA37YYW4KC', 'nascetur.ridiculus@molestie.co.uk', 4, 88, 0, 5, 0, '2017-08-13 12:10:29'),
(67, 'Blaze', 'SAA57FVH6FR', 'faucibus.ut@neque.co.uk', 3, 4722, 0, 10, 0, '2016-08-11 21:44:07'),
(68, 'Ahmed', 'KDN17QKE7UU', 'turpis.In@Donectempor.ca', 0, 4626, 0, 2, 0, '2017-05-17 11:10:43'),
(69, 'Salvador', 'SXI25LHH1HD', 'Ut.nec.urna@Donecelementum.edu', 41, 4353, 0, 3, 0, '2017-02-11 11:40:39'),
(70, 'Daryl', 'QAZ94YBS5CE', 'risus@luctusetultrices.org', 43, 1645, 0, 7, 0, '2016-03-07 20:50:57'),
(71, 'Charity', 'FBY10NDV4LE', 'vulputate.posuere.vulputate@ipsumnon.com', 8, 393, 0, 6, 0, '2016-03-14 23:12:40'),
(72, 'Timothy', 'TFO87HHO9ZC', 'dignissim.Maecenas@sem.ca', 17, 3151, 0, 7, 0, '2016-07-09 18:42:13'),
(73, 'Tanner', 'KMU32ZAE9ZF', 'risus.at@elit.com', 33, 3240, 0, 7, 0, '2017-02-23 14:41:36'),
(74, 'Emily', 'PKO48NHJ6AT', 'aliquam.arcu.Aliquam@musProin.org', 9, 2521, 0, 1, 0, '2016-01-08 16:00:57'),
(75, 'Ulysses', 'PTF89KCY2IM', 'cursus.diam@vulputatedui.com', 20, 182, 0, 7, 0, '2016-08-22 03:34:48'),
(76, 'Naida', 'FCU55EGW6JN', 'dolor.sit@loremsit.ca', 27, 79, 0, 7, 0, '2017-05-21 13:25:35'),
(77, 'Tasha', 'TYV69BSQ2VT', 'eu@Etiam.ca', 48, 4716, 0, 5, 0, '2017-06-23 03:52:53'),
(78, 'Alvin', 'GFO87IVQ4FA', 'leo@lacusvestibulumlorem.com', 5, 2096, 0, 1, 0, '2016-12-13 18:45:16'),
(79, 'Raya', 'WXS26IEN6OS', 'at.auctor.ullamcorper@massaVestibulum.org', 43, 2558, 0, 4, 0, '2017-02-08 21:43:40'),
(80, 'Otto', 'OET37IZD5OO', 'eros@felisullamcorper.net', 35, 4774, 0, 7, 0, '2017-01-18 01:22:41'),
(81, 'Aretha', 'RVK13OGZ2TV', 'Maecenas.libero.est@purusactellus.org', 12, 485, 0, 4, 0, '2016-10-21 17:42:35'),
(82, 'Amos', 'DBT26ACX4YY', 'id.erat@nuncid.co.uk', 50, 2162, 0, 3, 0, '2017-04-11 22:57:35'),
(83, 'Raphael', 'JKM35QQA6PD', 'magna.Nam.ligula@orcisem.com', 44, 3826, 0, 7, 0, '2017-04-09 08:17:37'),
(84, 'Adam', 'QRT36CPB6JO', 'sodales@iaculislacuspede.com', 39, 156, 0, 9, 0, '2017-06-20 19:22:43'),
(85, 'Illana', 'MCO38ZUC8AV', 'orci@quis.com', 33, 3558, 0, 7, 0, '2016-09-22 19:56:03'),
(86, 'Ebony', 'GYO85HMH2QT', 'arcu.Vestibulum.ante@dolorDonecfringilla.com', 56, 1303, 0, 6, 0, '2017-11-03 04:07:33'),
(87, 'Randall', 'LYS65RPF9GE', 'libero.mauris@commodoipsumSuspendisse.org', 12, 2122, 0, 5, 0, '2017-06-14 22:07:54'),
(88, 'Lesley', 'MRZ21JNB3PI', 'eget@diamvel.ca', 43, 2157, 0, 1, 0, '2016-05-28 08:11:49'),
(89, 'Luke', 'MNZ24EIQ1IA', 'vel.sapien.imperdiet@odiotristique.com', 29, 4010, 0, 10, 0, '2017-10-13 06:14:43'),
(90, 'Liberty', 'EOH67FVR7WK', 'nonummy.ut.molestie@erat.org', 36, 1350, 0, 9, 0, '2016-12-13 07:15:56'),
(91, 'Dante', 'ANQ06OQH1KY', 'metus.sit@Sed.org', 7, 2539, 0, 8, 0, '2017-07-27 03:32:08'),
(92, 'Frances', 'MKK46IIG1MC', 'at.nisi.Cum@elitEtiam.net', 3, 2133, 0, 2, 0, '2016-04-13 02:47:54'),
(93, 'Piper', 'CSF80JOI2TQ', 'convallis@lacusUt.ca', 46, 3049, 0, 5, 0, '2017-11-03 04:31:32'),
(94, 'Keaton', 'XWU67YFK5IL', 'vel.faucibus.id@magnaa.org', 4, 1530, 0, 4, 0, '2017-04-23 13:29:32'),
(95, 'Erasmus', 'UJY41XKN5FI', 'eu@turpisAliquamadipiscing.net', 5, 4460, 0, 2, 0, '2016-03-21 11:43:40'),
(96, 'Gray', 'CXR96MIL8JP', 'in.cursus@enim.org', 43, 2242, 0, 3, 0, '2015-12-22 04:07:03'),
(97, 'Britanney', 'RGB74NLJ8BP', 'Mauris.magna@ategestasa.edu', 1, 2882, 0, 4, 0, '2017-10-30 08:13:27'),
(98, 'Karina', 'JJC79XMZ8XN', 'fringilla.euismod@Aliquam.com', 28, 694, 0, 6, 0, '2016-10-16 08:50:47'),
(99, 'Bernard', 'NQC88YDQ3PL', 'urna.nec.luctus@Cumsociisnatoque.co.uk', 12, 2760, 0, 10, 0, '2017-04-26 02:28:48'),
(100, 'Cullen', 'UYW36NTW0XU', 'malesuada.Integer.id@Donecnonjusto.edu', 45, 4137, 0, 10, 0, '2017-10-05 20:56:56'),
(101, 'Jin', 'OIK14HRV1DO', 'diam.nunc.ullamcorper@aliquet.ca', 21, 4666, 1, 10, 0, '2016-03-06 21:01:17');

-- --------------------------------------------------------

--
-- Structure de la table `employee_formation`
--

CREATE TABLE `employee_formation` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_formation` int(11) UNSIGNED NOT NULL,
  `id_employee` int(11) UNSIGNED NOT NULL,
  `id_formation_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `employee_team`
--

CREATE TABLE `employee_team` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_team` int(11) UNSIGNED NOT NULL,
  `id_employee` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL,
  `duration` int(11) NOT NULL,
  `days` int(11) NOT NULL,
  `credits` int(11) DEFAULT NULL,
  `place` varchar(50) NOT NULL,
  `requirement` text NOT NULL,
  `provider` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`id`, `name`, `description`, `date`, `duration`, `days`, `credits`, `place`, `requirement`, `provider`) VALUES
(1, 'Phasellus Ornare Fusce Ltd', 'tempor erat neque non quam. Pellentesque habitant morbi tristique senectus et netus et malesuada', '2017-11-16 15:18:53', 14, 4, 148, 'Patalillo', 'hendrerit consectetuer, cursus et, magna. Praesent', 'Nostra Per Inceptos Corp.'),
(2, 'Odio LLC', 'Curabitur egestas nunc sed libero. Proin sed turpis nec mauris', '2017-10-07 18:20:24', 6, 4, 108, 'Talagante', 'dolor sit amet,', 'Odio Auctor Vitae Incorporated'),
(3, 'Posuere Cubilia Curae; Foundation', 'sit amet ante. Vivamus non', '2017-10-21 16:30:51', 19, 3, 196, 'Gateshead', 'elit, pharetra ut, pharetra sed, hendrerit a,', 'Pharetra Felis Corp.'),
(4, 'Quisque Associates', 'dictum', '2016-12-12 05:05:18', 3, 5, 185, 'Rechnitz', 'Nullam lobortis quam', 'Arcu Industries'),
(5, 'Elit Sed Inc.', 'id enim. Curabitur massa. Vestibulum accumsan neque et nunc. Quisque', '2017-06-16 18:00:58', 6, 3, 89, 'Fontanellato', 'Aenean', 'Fringilla Mi Lacinia PC'),
(6, 'Nulla Eu Neque LLP', 'sociis natoque penatibus et magnis dis parturient', '2017-09-25 01:42:22', 10, 5, 247, 'Ligosullo', 'eros non enim commodo hendrerit. Donec porttitor', 'Velit Egestas Industries'),
(7, 'Aliquam Iaculis Lacus Foundation', 'vel lectus. Cum sociis natoque', '2017-03-01 07:15:34', 19, 4, 107, 'Meldert', 'Nam ligula elit, pretium et, rutrum non,', 'Mauris LLP'),
(8, 'Fusce Mollis Duis Institute', 'diam at pretium aliquet, metus urna convallis erat, eget tincidunt dui augue eu tellus. Phasellus', '2016-03-08 02:33:41', 29, 4, 218, 'Preston', 'nascetur ridiculus', 'Feugiat PC'),
(9, 'Sollicitudin Consulting', 'euismod in, dolor. Fusce feugiat. Lorem ipsum', '2016-01-09 03:03:47', 21, 1, 137, 'Neudörfl', 'sit', 'Lobortis Quam LLC'),
(10, 'Velit Industries', 'at, libero. Morbi accumsan laoreet ipsum. Curabitur consequat, lectus sit', '2017-11-16 03:26:26', 5, 2, 137, 'Torres del Paine', 'orci sem eget massa. Suspendisse eleifend. Cras sed leo.', 'Natoque Penatibus Et Limited'),
(11, 'Ut PC', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices', '2016-07-05 00:54:12', 3, 5, 148, 'Wolfurt', 'pede. Praesent', 'Donec Tempus Institute'),
(12, 'Hendrerit Consectetuer Institute', 'et libero. Proin mi. Aliquam gravida mauris ut mi.', '2015-12-23 07:09:56', 25, 3, 157, 'College', 'nec quam.', 'Purus Incorporated'),
(13, 'Mi Fringilla Incorporated', 'Sed nec metus facilisis lorem tristique aliquet. Phasellus', '2016-03-12 03:50:54', 24, 3, 204, 'Monacilioni', 'pede ac urna. Ut tincidunt', 'Tempor Consulting'),
(14, 'Vel Foundation', 'leo. Cras vehicula aliquet libero. Integer in magna. Phasellus dolor', '2017-01-13 22:06:21', 5, 5, 98, 'Rock Springs', 'Ut sagittis lobortis mauris. Suspendisse aliquet molestie', 'Ultricies Institute'),
(15, 'Integer Mollis Integer Industries', 'nec, cursus a,', '2016-11-14 14:12:30', 19, 1, 90, 'Vinci', 'odio', 'Mauris LLP'),
(16, 'Et Ultrices Ltd', 'vel, vulputate eu, odio. Phasellus at', '2017-03-09 04:40:17', 24, 4, 236, 'Saint-Eug�ne-de-Ladri�re', 'nonummy ipsum', 'Malesuada Fames Ac Corporation'),
(17, 'Rutrum Ltd', 'nec tempus mauris erat', '2017-02-11 18:34:49', 27, 3, 195, 'Futrono', 'Nulla interdum. Curabitur dictum. Phasellus', 'Magna A Company'),
(18, 'Pede Ltd', 'amet, consectetuer adipiscing elit. Etiam laoreet, libero et tristique pellentesque,', '2016-01-11 07:30:14', 29, 2, 127, 'Ghlin', 'est, mollis non,', 'Aliquam Consulting'),
(19, 'Enim Nunc Ut Ltd', 'Morbi non sapien molestie orci tincidunt adipiscing. Mauris', '2016-06-21 12:16:24', 20, 5, 116, 'Waterbury', 'commodo hendrerit. Donec porttitor', 'Dui Nec PC'),
(20, 'Sapien Nunc Pulvinar Institute', 'eleifend non, dapibus rutrum, justo. Praesent luctus.', '2017-06-08 22:24:49', 17, 1, 105, 'Beausejour', 'Aliquam tincidunt, nunc ac', 'Ultricies Ornare Foundation'),
(21, 'Donec Tempus Inc.', 'Aliquam ultrices', '2016-01-29 19:43:31', 24, 1, 201, 'Värnamo', 'non leo.', 'Tortor Institute'),
(22, 'Justo Sit LLC', 'risus varius orci, in consequat enim diam vel arcu. Curabitur ut odio vel est tempor', '2017-08-24 15:48:46', 30, 3, 137, 'Westlock', 'lobortis quam a felis ullamcorper', 'Mauris Id Sapien Ltd'),
(23, 'Donec Porttitor Tellus Foundation', 'iaculis aliquet diam. Sed diam lorem,', '2015-12-24 10:52:01', 25, 5, 59, 'Mount Gambier', 'sollicitudin', 'Hendrerit Incorporated'),
(24, 'Sodales Purus In Consulting', 'magnis dis parturient montes, nascetur ridiculus mus. Donec', '2016-09-01 17:19:18', 16, 5, 193, 'Herstal', 'turpis egestas.', 'Blandit Nam Associates'),
(25, 'Nunc Nulla PC', 'in, hendrerit consectetuer,', '2017-05-13 10:09:31', 24, 2, 221, 'Estevan', 'tempor', 'Magnis Dis Parturient Inc.'),
(26, 'Vel Corp.', 'fermentum fermentum arcu. Vestibulum ante ipsum primis in faucibus orci luctus et', '2017-01-30 07:29:01', 20, 5, 112, 'Canora', 'pede. Cum sociis natoque penatibus et magnis', 'Nulla Institute'),
(27, 'At Consulting', 'nec,', '2017-10-23 06:56:55', 23, 4, 153, 'Thorn', 'eget, venenatis a, magna. Lorem ipsum dolor sit', 'Elementum Sem Vitae LLP'),
(28, 'Ridiculus Mus Ltd', 'risus,', '2016-06-03 06:36:01', 1, 4, 191, 'Burdinne', 'tempus scelerisque, lorem ipsum sodales purus, in molestie tortor', 'Purus Gravida Sagittis LLC'),
(29, 'Ultrices Mauris Ipsum Limited', 'a ultricies adipiscing, enim mi tempor lorem, eget mollis lectus', '2016-05-28 13:04:19', 13, 4, 61, 'Sint-Genesius-Rode', 'metus.', 'Enim Nisl Elementum Incorporated'),
(30, 'Eu Dolor Limited', 'dolor elit, pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet lectus quis massa. Mauris', '2016-01-31 20:32:04', 18, 3, 61, 'Traralgon', 'netus et malesuada fames', 'Duis Corp.');

-- --------------------------------------------------------

--
-- Structure de la table `formation_status`
--

CREATE TABLE `formation_status` (
  `id` int(11) UNSIGNED NOT NULL,
  `state_of_validation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `formation_status`
--

INSERT INTO `formation_status` (`id`, `state_of_validation`) VALUES
(1, 'validée'),
(2, 'en cours de validation'),
(3, 'refusée');

-- --------------------------------------------------------

--
-- Structure de la table `team`
--

CREATE TABLE `team` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Index pour les tables exportées
--

--
-- Index pour la table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `employee_formation`
--
ALTER TABLE `employee_formation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_employee_id` (`id_employee`),
  ADD KEY `fk_formation_id` (`id_formation`),
  ADD KEY `fk_formation_status_id` (`id_formation_status`);

--
-- Index pour la table `employee_team`
--
ALTER TABLE `employee_team`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_employee_id` (`id_employee`),
  ADD KEY `fk_team_id` (`id_team`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formation_status`
--
ALTER TABLE `formation_status`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT pour la table `employee_formation`
--
ALTER TABLE `employee_formation`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `employee_team`
--
ALTER TABLE `employee_team`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT pour la table `formation_status`
--
ALTER TABLE `formation_status`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `employee_formation`
--
ALTER TABLE `employee_formation`
  ADD CONSTRAINT `fk_employee_id` FOREIGN KEY (`id_employee`) REFERENCES `employee` (`id`),
  ADD CONSTRAINT `fk_formation_id` FOREIGN KEY (`id_formation`) REFERENCES `formation` (`id`);

--
-- Contraintes pour la table `employee_team`
--
ALTER TABLE `employee_team`
  ADD CONSTRAINT `fk_employee_team_id` FOREIGN KEY (`id_employee`) REFERENCES `employee` (`id`),
  ADD CONSTRAINT `fk_team_id` FOREIGN KEY (`id_team`) REFERENCES `team` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
