-- MySQL dump 10.13  Distrib 5.5.54, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: m2l
-- ------------------------------------------------------
-- Server version	5.5.54-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `days_left` int(11) DEFAULT NULL,
  `credits_left` int(11) DEFAULT NULL,
  `counter_formation_days_by_year` int(11) DEFAULT NULL,
  `manager_status` tinyint(1) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `online` int(1) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES (1,'papa','rl.T1g5bgHjXg','papa@gmail.com','Web/dist/img/user2.jpg',18,3758,NULL,1,1,1,'2016-12-29 19:36:20'),(2,'fiston','rl4nYQV5i.PvA','fiston@gmail.com','Web/dist/img/user1.jpg',31,1954,NULL,0,1,0,'2016-12-29 19:34:45'),(3,'Addison','QRX09NDC1CS','neque@Curabiturvellectus.edu','Web/dist/img/user3.jpg',14,804,NULL,1,3,0,'2016-01-24 03:58:29'),(4,'Carly','ZFN16WHU8AD','Integer.vulputate.risus@accumsan.org','Web/dist/img/user3.jpg',11,4994,NULL,1,4,0,'2016-08-18 23:47:29'),(5,'Callie','RAT44OHF0RR','Nam@ornareFusce.co.uk','Web/dist/img/user3.jpg',29,2899,NULL,1,5,0,'2017-03-02 14:49:19'),(6,'Gray','VOR82DPM1WQ','Praesent.luctus.Curabitur@quis.co.uk','Web/dist/img/user3.jpg',2,419,NULL,1,6,0,'2016-02-03 20:42:53'),(7,'Charde','IDJ25JDJ9LW','amet.ornare@malesuadavel.net','Web/dist/img/user3.jpg',37,520,NULL,1,7,0,'2015-12-25 16:48:02'),(8,'Regan','LEN50EXQ9YK','eu@egetnisidictum.net','Web/dist/img/user3.jpg',46,1091,NULL,1,8,0,'2016-07-14 16:19:24'),(9,'Lacy','OZP59NIJ9HW','Cras.eget@elitelit.net','Web/dist/img/user3.jpg',38,2384,NULL,1,9,0,'2017-01-29 17:09:23'),(10,'Yvette','YOG45WZH1KE','ultricies@ipsumDonecsollicitudin.edu','Web/dist/img/user3.jpg',3,2032,NULL,1,10,0,'2017-07-26 09:55:23'),(11,'Randall','AOH85RKB3VP','egestas.nunc@estMauriseu.edu','Web/dist/img/user3.jpg',14,3957,NULL,0,4,0,'2016-04-25 23:08:34'),(12,'Emmanuel','UIJ10COC5QC','at@eumetusIn.net','Web/dist/img/user3.jpg',29,1678,NULL,0,5,0,'2017-03-30 13:46:35'),(13,'Abigail','TVE62GEN6DD','aliquam@urnaNunc.edu','Web/dist/img/user3.jpg',49,4413,NULL,0,2,0,'2016-08-04 18:36:41'),(14,'Roth','GFN31FJV1FP','egestas.urna.justo@dictumsapien.org','Web/dist/img/user3.jpg',17,4095,NULL,0,3,0,'2017-02-03 23:52:37'),(15,'Morgan','OCR09FGB3VB','justo.Proin.non@egestas.edu','Web/dist/img/user3.jpg',30,27,NULL,0,3,0,'2016-02-10 13:29:06'),(16,'Graiden','ECE36WAO5SM','ultrices.a.auctor@sodales.co.uk','Web/dist/img/user3.jpg',23,1550,NULL,0,2,0,'2017-01-04 01:32:35'),(17,'Byron','UVY62GKP0PG','Etiam.gravida@urnaNullamlobortis.ca','Web/dist/img/user3.jpg',41,4336,NULL,0,9,0,'2017-05-29 05:48:33'),(18,'Edan','DCA91CEO4EL','tempus@consequat.edu','Web/dist/img/user3.jpg',53,1173,NULL,0,9,0,'2016-02-22 22:17:43'),(19,'Donovan','EPG06YGW0IA','Vivamus.sit.amet@Sed.net','Web/dist/img/user3.jpg',57,3527,NULL,0,1,0,'2016-07-16 21:07:34'),(20,'Kevin','XAS55NMP6ZE','vitae@semegetmassa.org','Web/dist/img/user3.jpg',58,1693,NULL,0,6,0,'2017-07-18 21:29:40'),(21,'Audrey','TMU49OPB7IF','amet.orci.Ut@magnaUt.ca','Web/dist/img/user4.jpg',52,2301,NULL,0,3,0,'2016-09-06 21:56:02'),(22,'Hyacinth','AGL98RKO9IS','rutrum.magna.Cras@Duiselementumdui.co.uk','Web/dist/img/user4.jpg',53,4119,NULL,0,1,0,'2017-03-10 19:58:36'),(23,'Bernard','HKC06CRM4YE','elit@mattissemperdui.com','Web/dist/img/user4.jpg',26,953,NULL,0,4,0,'2016-06-16 22:43:29'),(24,'Arden','ZFT47TMU3NK','semper.tellus.id@ultriciesornare.ca','Web/dist/img/user4.jpg',1,128,NULL,0,4,0,'2017-07-17 23:55:52'),(25,'Yolanda','MCE40AVX3LU','Donec.feugiat.metus@acfacilisis.org','Web/dist/img/user4.jpg',30,1298,NULL,0,3,0,'2017-09-07 18:21:04'),(26,'Burton','XEX19LAY4NF','eu.nibh@ligula.edu','Web/dist/img/user4.jpg',24,153,NULL,0,1,0,'2016-04-06 17:34:16'),(27,'Keiko','VLM03TSG7AH','arcu.eu@antedictumcursus.net','Web/dist/img/user4.jpg',48,3918,NULL,0,4,0,'2015-12-15 20:43:44'),(28,'Dylan','OEF01RMA3GT','felis.adipiscing@pellentesquemassa.ca','Web/dist/img/user4.jpg',9,3717,NULL,0,1,0,'2016-09-03 15:40:34'),(29,'Denton','REI19LLJ2PN','tellus.id.nunc@molestie.co.uk','Web/dist/img/user4.jpg',50,3471,NULL,0,7,0,'2017-03-21 19:32:46'),(30,'Boris','PPN85XJQ9IH','mauris@Donec.net','Web/dist/img/user4.jpg',34,4383,NULL,0,10,0,'2017-04-09 23:58:12'),(31,'Keiko','OMQ12BBU8YQ','est.arcu@dictumeueleifend.com','Web/dist/img/user4.jpg',1,4702,NULL,0,8,0,'2017-08-19 03:05:00'),(32,'Gavin','CWQ17EZH7MJ','Class.aptent.taciti@nec.net','Web/dist/img/user4.jpg',18,3265,NULL,0,6,0,'2017-07-30 17:30:02'),(33,'Unity','HNR47AAK7WV','purus@Pellentesquetincidunt.net','Web/dist/img/user4.jpg',20,819,NULL,0,8,0,'2017-08-07 11:43:21'),(34,'Cruz','LSQ13HKT7ER','laoreet.posuere@erosnonenim.co.uk','Web/dist/img/user4.jpg',11,3584,NULL,0,8,0,'2017-04-18 07:59:45'),(35,'Phyllis','KAH74VXE5YD','Sed.nulla@metus.net','Web/dist/img/user4.jpg',38,1492,NULL,0,6,0,'2016-04-05 05:01:21'),(36,'Mira','JFE70SLJ2WI','dictum@nibhvulputatemauris.ca','Web/dist/img/user4.jpg',29,854,NULL,0,2,0,'2017-02-13 19:49:00'),(37,'Ethan','LVA56SDK5BO','lorem.luctus.ut@Aliquamornarelibero.org','Web/dist/img/user4.jpg',27,3615,NULL,0,9,0,'2016-10-23 11:50:00'),(38,'Wallace','ODY85OOT4LR','rhoncus.Nullam.velit@at.co.uk','Web/dist/img/user4.jpg',30,4334,NULL,0,3,0,'2017-06-10 12:25:01'),(39,'Felix','ANA11FUN8XM','orci@nec.com','Web/dist/img/user4.jpg',11,4672,NULL,0,10,0,'2016-09-18 04:42:15'),(40,'Berk','ECU45LAB4JK','ipsum.primis.in@maurisa.org','Web/dist/img/user5.jpg',37,4760,NULL,0,6,0,'2017-07-08 02:03:07'),(41,'Reece','NZK55DUZ7FP','non.hendrerit.id@Nulla.co.uk','Web/dist/img/user5.jpg',40,1788,NULL,0,9,0,'2016-10-11 23:20:12'),(42,'Declan','RSB05VKZ8UR','eu.arcu@sollicitudin.com','Web/dist/img/user5.jpg',26,2459,NULL,0,2,0,'2017-07-02 14:27:42'),(43,'Felix','IVH82JHL7QA','lectus.rutrum@adipiscinglacusUt.org','Web/dist/img/user5.jpg',20,3517,NULL,0,4,0,'2016-07-30 03:40:58'),(44,'Aspen','AFH44ZEI1AF','Donec.felis.orci@lobortisnisi.net','Web/dist/img/user5.jpg',60,2153,NULL,0,8,0,'2016-05-14 11:55:36'),(45,'Kylynn','YFP42WMB9OJ','imperdiet.ullamcorper.Duis@nislsem.edu','Web/dist/img/user5.jpg',33,127,NULL,0,9,0,'2017-11-28 18:27:19'),(46,'Candice','TSK59OTG9CE','magna.malesuada@diam.com','Web/dist/img/user5.jpg',52,1530,NULL,0,10,0,'2016-06-17 07:14:11'),(47,'Karen','CIB23ARX6OI','tincidunt.dui.augue@ut.co.uk','Web/dist/img/user5.jpg',3,4359,NULL,0,9,0,'2016-10-17 04:24:03'),(48,'Avye','JPL79XFQ1DG','ligula.Nullam@Lorem.org','Web/dist/img/user5.jpg',40,3785,NULL,0,3,0,'2017-10-10 10:18:39'),(49,'Keane','BLF40TNG2XO','lectus.ante@pede.com','Web/dist/img/user5.jpg',59,4825,NULL,0,1,0,'2016-08-03 08:20:23'),(50,'Alden','AIR03QHT5GS','tristique@infelisNulla.ca','Web/dist/img/user5.jpg',52,2777,NULL,0,2,0,'2016-06-01 09:40:20'),(51,'Brynne','HGP69RBU4PE','augue.Sed@nequesed.co.uk','Web/dist/img/user5.jpg',32,4901,NULL,0,4,0,'2016-11-08 16:55:32'),(52,'Larissa','PAD96VGD0IT','feugiat@Praesent.edu','Web/dist/img/user5.jpg',52,578,NULL,0,3,0,'2016-04-13 06:58:11'),(53,'Graiden','OXM89FWG1DX','mauris@consectetueradipiscingelit.net','Web/dist/img/user5.jpg',22,3044,NULL,0,4,0,'2015-12-20 07:20:08'),(54,'Libby','GBE04VCC7HJ','Nulla@lectusconvallisest.co.uk','Web/dist/img/user5.jpg',13,1337,NULL,0,4,0,'2017-05-04 22:59:22'),(55,'Cedric','KMU14ZKT4QK','vitae@sitametmetus.edu','Web/dist/img/user5.jpg',27,2708,NULL,0,9,0,'2016-04-24 12:11:39'),(56,'Fiona','IRL33TNO1NK','risus.at.fringilla@Nunccommodoauctor.co.uk','Web/dist/img/user5.jpg',1,3366,NULL,0,7,0,'2016-11-09 00:03:04'),(57,'Shana','GNG52ATB4RX','nec@leo.edu','Web/dist/img/user5.jpg',11,278,NULL,0,8,0,'2017-12-04 12:53:46'),(58,'Avye','IUQ14MCT6VH','eu.erat.semper@ametorci.org','Web/dist/img/user5.jpg',55,4419,NULL,0,8,0,'2017-09-14 15:11:20'),(59,'Caesar','SQH87DBS9YO','Curabitur.dictum@elitelit.edu','Web/dist/img/user5.jpg',28,3455,NULL,0,3,0,'2017-03-01 16:04:33'),(60,'Basil','FZV15GTA9MU','mauris.sagittis@ac.com','Web/dist/img/user5.jpg',43,394,NULL,0,5,0,'2017-06-14 14:22:04'),(61,'Jade','BMN04WSX4OV','amet.ante.Vivamus@Aliquamtincidunt.com','Web/dist/img/user5.jpg',31,3765,NULL,0,3,0,'2015-12-27 17:41:55'),(62,'Todd','KQR28MDI0NX','sed@mattisornarelectus.ca','Web/dist/img/user5.jpg',42,3562,NULL,0,9,0,'2016-03-23 18:14:07'),(63,'Judah','VBO20MAE4JV','aliquam.adipiscing.lacus@luctus.ca','Web/dist/img/user6.jpg',53,1543,NULL,0,4,0,'2017-07-20 10:06:13'),(64,'Xantha','WQO50YJR1MP','ut@tortorNunc.net','Web/dist/img/user6.jpg',49,897,NULL,0,4,0,'2017-10-23 14:06:46'),(65,'Brody','LOL09VJQ6EV','Vivamus.sit@rutrum.com','Web/dist/img/user6.jpg',44,2700,NULL,0,7,0,'2016-03-23 21:19:42'),(66,'Noble','DGA37YYW4KC','nascetur.ridiculus@molestie.co.uk','Web/dist/img/user6.jpg',4,88,NULL,0,5,0,'2017-08-13 12:10:29'),(67,'Blaze','SAA57FVH6FR','faucibus.ut@neque.co.uk','Web/dist/img/user6.jpg',3,4722,NULL,0,10,0,'2016-08-11 21:44:07'),(68,'Ahmed','KDN17QKE7UU','turpis.In@Donectempor.ca','Web/dist/img/user6.jpg',0,4626,NULL,0,2,0,'2017-05-17 11:10:43'),(69,'Salvador','SXI25LHH1HD','Ut.nec.urna@Donecelementum.edu','Web/dist/img/user6.jpg',41,4353,NULL,0,3,0,'2017-02-11 11:40:39'),(70,'Daryl','QAZ94YBS5CE','risus@luctusetultrices.org','Web/dist/img/user6.jpg',43,1645,NULL,0,7,0,'2016-03-07 20:50:57'),(71,'Charity','FBY10NDV4LE','vulputate.posuere.vulputate@ipsumnon.com','Web/dist/img/user6.jpg',8,393,NULL,0,6,0,'2016-03-14 23:12:40'),(72,'Timothy','TFO87HHO9ZC','dignissim.Maecenas@sem.ca','Web/dist/img/user6.jpg',17,3151,NULL,0,7,0,'2016-07-09 18:42:13'),(73,'Tanner','KMU32ZAE9ZF','risus.at@elit.com','Web/dist/img/user6.jpg',33,3240,NULL,0,7,0,'2017-02-23 14:41:36'),(74,'Emily','PKO48NHJ6AT','aliquam.arcu.Aliquam@musProin.org','Web/dist/img/user6.jpg',9,2521,NULL,0,1,0,'2016-01-08 16:00:57'),(75,'Ulysses','PTF89KCY2IM','cursus.diam@vulputatedui.com','Web/dist/img/user6.jpg',20,182,NULL,0,7,0,'2016-08-22 03:34:48'),(76,'Naida','FCU55EGW6JN','dolor.sit@loremsit.ca','Web/dist/img/user6.jpg',27,79,NULL,0,7,0,'2017-05-21 13:25:35'),(77,'Tasha','TYV69BSQ2VT','eu@Etiam.ca','Web/dist/img/user6.jpg',48,4716,NULL,0,5,0,'2017-06-23 03:52:53'),(78,'Alvin','GFO87IVQ4FA','leo@lacusvestibulumlorem.com','Web/dist/img/user6.jpg',5,2096,NULL,0,1,0,'2016-12-13 18:45:16'),(79,'Raya','WXS26IEN6OS','at.auctor.ullamcorper@massaVestibulum.org','Web/dist/img/user6.jpg',43,2558,NULL,0,4,0,'2017-02-08 21:43:40'),(80,'Otto','OET37IZD5OO','eros@felisullamcorper.net','Web/dist/img/user6.jpg',35,4774,NULL,0,7,0,'2017-01-18 01:22:41'),(81,'Aretha','RVK13OGZ2TV','Maecenas.libero.est@purusactellus.org','Web/dist/img/user6.jpg',12,485,NULL,0,4,0,'2016-10-21 17:42:35'),(82,'Amos','DBT26ACX4YY','id.erat@nuncid.co.uk','Web/dist/img/user6.jpg',50,2162,NULL,0,3,0,'2017-04-11 22:57:35'),(83,'Raphael','JKM35QQA6PD','magna.Nam.ligula@orcisem.com','Web/dist/img/user6.jpg',44,3826,NULL,0,7,0,'2017-04-09 08:17:37'),(84,'Adam','QRT36CPB6JO','sodales@iaculislacuspede.com','Web/dist/img/user6.jpg',39,156,NULL,0,9,0,'2017-06-20 19:22:43'),(85,'Illana','MCO38ZUC8AV','orci@quis.com','Web/dist/img/user7.jpg',33,3558,NULL,0,7,0,'2016-09-22 19:56:03'),(86,'Ebony','GYO85HMH2QT','arcu.Vestibulum.ante@dolorDonecfringilla.com','Web/dist/img/user7.jpg',56,1303,NULL,0,6,0,'2017-11-03 04:07:33'),(87,'Randall','LYS65RPF9GE','libero.mauris@commodoipsumSuspendisse.org','Web/dist/img/user7.jpg',12,2122,NULL,0,5,0,'2017-06-14 22:07:54'),(88,'Lesley','MRZ21JNB3PI','eget@diamvel.ca','Web/dist/img/user7.jpg',43,2157,NULL,0,1,0,'2016-05-28 08:11:49'),(89,'Luke','MNZ24EIQ1IA','vel.sapien.imperdiet@odiotristique.com','Web/dist/img/user7.jpg',29,4010,NULL,0,10,0,'2017-10-13 06:14:43'),(90,'Liberty','EOH67FVR7WK','nonummy.ut.molestie@erat.org','Web/dist/img/user7.jpg',36,1350,NULL,0,9,0,'2016-12-13 07:15:56'),(91,'Dante','ANQ06OQH1KY','metus.sit@Sed.org','Web/dist/img/user7.jpg',7,2539,NULL,0,8,0,'2017-07-27 03:32:08'),(92,'Frances','MKK46IIG1MC','at.nisi.Cum@elitEtiam.net','Web/dist/img/user8.jpg',3,2133,NULL,0,2,0,'2016-04-13 02:47:54'),(93,'Piper','CSF80JOI2TQ','convallis@lacusUt.ca','Web/dist/img/user8.jpg',46,3049,NULL,0,5,0,'2017-11-03 04:31:32'),(94,'Keaton','XWU67YFK5IL','vel.faucibus.id@magnaa.org','Web/dist/img/user8.jpg',4,1530,NULL,0,4,0,'2017-04-23 13:29:32'),(95,'Erasmus','UJY41XKN5FI','eu@turpisAliquamadipiscing.net','Web/dist/img/user8.jpg',5,4460,NULL,0,2,0,'2016-03-21 11:43:40'),(96,'Gray','CXR96MIL8JP','in.cursus@enim.org','Web/dist/img/user8.jpg',43,2242,NULL,0,3,0,'2015-12-22 04:07:03'),(97,'Britanney','RGB74NLJ8BP','Mauris.magna@ategestasa.edu','Web/dist/img/user8.jpg',1,2882,NULL,0,4,0,'2017-10-30 08:13:27'),(98,'Karina','JJC79XMZ8XN','fringilla.euismod@Aliquam.com','Web/dist/img/user8.jpg',28,694,NULL,0,6,0,'2016-10-16 08:50:47'),(99,'Bernard','NQC88YDQ3PL','urna.nec.luctus@Cumsociisnatoque.co.uk','Web/dist/img/user8.jpg',12,2760,NULL,0,10,0,'2017-04-26 02:28:48'),(100,'Cullen','UYW36NTW0XU','malesuada.Integer.id@Donecnonjusto.edu','Web/dist/img/user8.jpg',45,4137,NULL,0,10,0,'2017-10-05 20:56:56'),(101,'Jin','OIK14HRV1DO','diam.nunc.ullamcorper@aliquet.ca','Web/dist/img/user8.jpg',21,4666,NULL,1,10,0,'2016-03-06 21:01:17');
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `after_update_employee` AFTER UPDATE ON `employee` FOR EACH ROW UPDATE employee_formation
INNER JOIN formation
ON employee_formation.id_formation = formation.id
SET employee_formation.id_formation_status = 
IF (formation.days <= TIMESTAMPDIFF(DAY, formation.date, CURRENT_TIMESTAMP), 5, employee_formation.id_formation_status)
WHERE employee_formation.id_employee = OLD.id
AND employee_formation.id_formation_status = 1 */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `employee_formation`
--

DROP TABLE IF EXISTS `employee_formation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee_formation` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_formation` int(11) unsigned NOT NULL,
  `id_employee` int(11) unsigned NOT NULL,
  `id_formation_status` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_employee_id` (`id_employee`),
  KEY `fk_formation_id` (`id_formation`),
  KEY `fk_formation_status_id` (`id_formation_status`),
  CONSTRAINT `fk_employee_id` FOREIGN KEY (`id_employee`) REFERENCES `employee` (`id`),
  CONSTRAINT `fk_formation_id` FOREIGN KEY (`id_formation`) REFERENCES `formation` (`id`),
  CONSTRAINT `fk_formation_status_id` FOREIGN KEY (`id_formation_status`) REFERENCES `formation_status` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_formation`
--

LOCK TABLES `employee_formation` WRITE;
/*!40000 ALTER TABLE `employee_formation` DISABLE KEYS */;
INSERT INTO `employee_formation` VALUES (1,25,72,2),(2,8,24,2),(3,21,12,3),(4,5,88,3),(5,18,50,1),(6,23,69,2),(7,20,36,3),(8,10,78,2),(9,2,57,2),(10,7,39,2),(11,23,3,3),(12,23,27,5),(13,7,82,2),(14,22,11,2),(15,20,16,2),(16,18,45,2),(17,12,30,1),(18,18,34,2),(19,24,22,5),(20,17,91,2),(21,2,61,1),(22,27,70,3),(23,7,99,2),(24,13,44,3),(25,4,51,2),(26,15,83,1),(27,19,29,3),(28,25,66,3),(29,20,46,1),(30,18,83,2),(31,15,99,1),(32,15,69,3),(33,25,36,3),(34,14,85,3),(35,1,93,5),(36,20,5,2),(37,2,33,3),(38,15,45,1),(39,5,51,3),(40,29,55,5),(41,16,9,2),(42,22,78,2),(43,12,5,2),(44,19,9,3),(45,16,100,1),(46,18,48,3),(47,26,98,1),(48,12,50,2),(49,29,59,2),(50,9,58,2),(51,6,91,2),(52,3,5,2),(53,30,60,1),(54,7,2,1),(55,20,70,3),(56,23,54,3),(57,27,91,3),(58,2,93,1),(59,6,22,1),(60,24,39,3),(61,26,55,3),(62,22,74,3),(63,16,56,2),(64,8,14,3),(65,11,31,2),(66,12,45,2),(67,23,65,3),(68,25,20,3),(69,12,37,1),(70,10,29,2),(71,1,58,2),(72,5,45,3),(73,8,16,3),(74,6,51,3),(75,17,32,3),(76,12,72,3),(77,21,32,3),(78,26,66,2),(79,1,80,3),(80,24,58,5),(81,9,50,1),(82,29,2,3),(83,4,58,5),(84,11,55,3),(85,20,22,2),(86,1,57,2),(87,26,64,2),(88,16,73,1),(89,18,86,2),(90,22,92,3),(91,13,94,5),(92,12,25,1),(93,3,90,3),(94,19,58,5),(95,12,43,3),(96,18,15,1),(97,6,85,3),(98,5,34,2),(99,9,80,1),(100,28,41,5),(130,1,2,5),(133,4,2,5),(134,30,2,3),(136,18,2,2);
/*!40000 ALTER TABLE `employee_formation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee_team`
--

DROP TABLE IF EXISTS `employee_team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee_team` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `team_id` int(11) unsigned NOT NULL,
  `id_employee` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_employee_id` (`id_employee`),
  KEY `fk_team_id` (`team_id`),
  CONSTRAINT `fk_employee_team_id` FOREIGN KEY (`id_employee`) REFERENCES `employee` (`id`),
  CONSTRAINT `fk_team_id` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_team`
--

LOCK TABLES `employee_team` WRITE;
/*!40000 ALTER TABLE `employee_team` DISABLE KEYS */;
/*!40000 ALTER TABLE `employee_team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formation`
--

DROP TABLE IF EXISTS `formation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formation` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL,
  `duration` int(11) NOT NULL,
  `days` int(11) NOT NULL,
  `credits` int(11) DEFAULT NULL,
  `place` varchar(50) NOT NULL,
  `requirement` text NOT NULL,
  `provider` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formation`
--

LOCK TABLES `formation` WRITE;
/*!40000 ALTER TABLE `formation` DISABLE KEYS */;
INSERT INTO `formation` VALUES (1,'Phasellus Ornare Fusce Ltd','tempor erat neque non quam. Pellentesque habitant morbi tristique senectus et netus et malesuada','2016-09-15 18:45:34',14,4,148,'Patalillo','hendrerit consectetuer, cursus et, magna. Praesent','Nostra Per Inceptos Corp.'),(2,'Odio LLC','Curabitur egestas nunc sed libero. Proin sed turpis nec mauris','2017-06-07 21:50:36',6,4,108,'Talagante','dolor sit amet,','Odio Auctor Vitae Incorporated'),(3,'Posuere Cubilia Curae; Foundation','sit amet ante. Vivamus non','2017-06-29 17:06:10',19,3,196,'Gateshead','elit, pharetra ut, pharetra sed, hendrerit a,','Pharetra Felis Corp.'),(4,'Quisque Associates','dictum','2016-08-30 01:04:29',3,5,185,'Rechnitz','Nullam lobortis quam','Arcu Industries'),(5,'Elit Sed Inc.','id enim. Curabitur massa. Vestibulum accumsan neque et nunc. Quisque','2017-05-18 21:32:13',6,3,89,'Fontanellato','Aenean','Fringilla Mi Lacinia PC'),(6,'Nulla Eu Neque LLP','sociis natoque penatibus et magnis dis parturient','2017-05-10 11:48:05',10,5,247,'Ligosullo','eros non enim commodo hendrerit. Donec porttitor','Velit Egestas Industries'),(7,'Aliquam Iaculis Lacus Foundation','vel lectus. Cum sociis natoque','2017-03-22 11:35:57',19,4,107,'Meldert','Nam ligula elit, pretium et, rutrum non,','Mauris LLP'),(8,'Fusce Mollis Duis Institute','diam at pretium aliquet, metus urna convallis erat, eget tincidunt dui augue eu tellus. Phasellus','2017-05-06 03:49:18',29,4,218,'Preston','nascetur ridiculus','Feugiat PC'),(9,'Sollicitudin Consulting','euismod in, dolor. Fusce feugiat. Lorem ipsum','2017-05-07 14:58:10',21,1,137,'Neudörfl','sit','Lobortis Quam LLC'),(10,'Velit Industries','at, libero. Morbi accumsan laoreet ipsum. Curabitur consequat, lectus sit','2016-09-26 21:36:58',5,2,137,'Torres del Paine','orci sem eget massa. Suspendisse eleifend. Cras sed leo.','Natoque Penatibus Et Limited'),(11,'Ut PC','Vestibulum ante ipsum primis in faucibus orci luctus et ultrices','2016-12-10 13:06:16',3,5,148,'Wolfurt','pede. Praesent','Donec Tempus Institute'),(12,'Hendrerit Consectetuer Institute','et libero. Proin mi. Aliquam gravida mauris ut mi.','2017-03-22 18:02:10',25,3,157,'College','nec quam.','Purus Incorporated'),(13,'Mi Fringilla Incorporated','Sed nec metus facilisis lorem tristique aliquet. Phasellus','2016-10-18 20:52:20',24,3,204,'Monacilioni','pede ac urna. Ut tincidunt','Tempor Consulting'),(14,'Vel Foundation','leo. Cras vehicula aliquet libero. Integer in magna. Phasellus dolor','2016-12-18 17:42:21',5,5,98,'Rock Springs','Ut sagittis lobortis mauris. Suspendisse aliquet molestie','Ultricies Institute'),(15,'Integer Mollis Integer Industries','nec, cursus a,','2017-06-11 15:08:17',19,1,90,'Vinci','odio','Mauris LLP'),(16,'Et Ultrices Ltd','vel, vulputate eu, odio. Phasellus at','2017-04-14 12:42:32',24,4,236,'Saint-Eug�ne-de-Ladri�re','nonummy ipsum','Malesuada Fames Ac Corporation'),(17,'Rutrum Ltd','nec tempus mauris erat','2016-08-30 10:34:10',27,3,195,'Futrono','Nulla interdum. Curabitur dictum. Phasellus','Magna A Company'),(18,'Pede Ltd','amet, consectetuer adipiscing elit. Etiam laoreet, libero et tristique pellentesque,','2017-04-22 04:28:34',29,2,127,'Ghlin','est, mollis non,','Aliquam Consulting'),(19,'Enim Nunc Ut Ltd','Morbi non sapien molestie orci tincidunt adipiscing. Mauris','2016-10-25 15:07:56',20,5,116,'Waterbury','commodo hendrerit. Donec porttitor','Dui Nec PC'),(20,'Sapien Nunc Pulvinar Institute','eleifend non, dapibus rutrum, justo. Praesent luctus.','2017-01-07 14:16:47',17,1,105,'Beausejour','Aliquam tincidunt, nunc ac','Ultricies Ornare Foundation'),(21,'Donec Tempus Inc.','Aliquam ultrices','2016-10-28 19:31:05',24,1,201,'Värnamo','non leo.','Tortor Institute'),(22,'Justo Sit LLC','risus varius orci, in consequat enim diam vel arcu. Curabitur ut odio vel est tempor','2016-09-19 16:44:31',30,3,137,'Westlock','lobortis quam a felis ullamcorper','Mauris Id Sapien Ltd'),(23,'Donec Porttitor Tellus Foundation','iaculis aliquet diam. Sed diam lorem,','2016-10-05 20:31:24',25,5,59,'Mount Gambier','sollicitudin','Hendrerit Incorporated'),(24,'Sodales Purus In Consulting','magnis dis parturient montes, nascetur ridiculus mus. Donec','2016-07-19 13:56:30',16,5,193,'Herstal','turpis egestas.','Blandit Nam Associates'),(25,'Nunc Nulla PC','in, hendrerit consectetuer,','2016-08-16 20:22:11',24,2,221,'Estevan','tempor','Magnis Dis Parturient Inc.'),(26,'Vel Corp.','fermentum fermentum arcu. Vestibulum ante ipsum primis in faucibus orci luctus et','2017-02-18 13:32:25',20,5,112,'Canora','pede. Cum sociis natoque penatibus et magnis','Nulla Institute'),(27,'At Consulting','nec,','2016-09-07 04:50:43',23,4,153,'Thorn','eget, venenatis a, magna. Lorem ipsum dolor sit','Elementum Sem Vitae LLP'),(28,'Ridiculus Mus Ltd','risus,','2016-11-26 01:38:26',1,4,191,'Burdinne','tempus scelerisque, lorem ipsum sodales purus, in molestie tortor','Purus Gravida Sagittis LLC'),(29,'Ultrices Mauris Ipsum Limited','a ultricies adipiscing, enim mi tempor lorem, eget mollis lectus','2016-09-14 02:12:55',13,4,61,'Sint-Genesius-Rode','metus.','Enim Nisl Elementum Incorporated'),(30,'Eu Dolor Limited','dolor elit, pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet lectus quis massa. Mauris','2017-03-05 01:53:43',18,3,61,'Traralgon','netus et malesuada fames','Duis Corp.');
/*!40000 ALTER TABLE `formation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formation_status`
--

DROP TABLE IF EXISTS `formation_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formation_status` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `state_of_validation` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formation_status`
--

LOCK TABLES `formation_status` WRITE;
/*!40000 ALTER TABLE `formation_status` DISABLE KEYS */;
INSERT INTO `formation_status` VALUES (1,'validée'),(2,'en cours de validation'),(3,'refusée'),(4,'disponible'),(5,'effectuée');
/*!40000 ALTER TABLE `formation_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
INSERT INTO `team` VALUES (1,'basket-ball'),(2,'football'),(3,'tennis'),(4,'natation'),(5,'handball'),(6,'rugby'),(7,'escrime'),(8,'atléthisme'),(9,'volley-ball'),(10,'golf');
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-02 23:05:23
