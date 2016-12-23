-- MySQL dump 10.13  Distrib 5.7.13, for osx10.11 (x86_64)
--
-- Host: localhost    Database: m2l
-- ------------------------------------------------------
-- Server version	5.7.13

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
  `days_left` int(11) DEFAULT NULL,
  `credits_left` int(11) DEFAULT NULL,
  `is_manager` tinyint(1) DEFAULT NULL,
  `id_team` int(11) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES (1,'papa','rl.T1g5bgHjXg','papa@gmail.com',35,4500,1,1,0,'2016-12-18 06:11:01'),(2,'Kennedy','PWM56ARN5YC','In@tellusimperdietnon.org',46,2531,1,2,0,'2017-06-22 14:53:58'),(3,'Addison','QRX09NDC1CS','neque@Curabiturvellectus.edu',14,804,1,3,0,'2016-01-24 03:58:29'),(4,'Carly','ZFN16WHU8AD','Integer.vulputate.risus@accumsan.org',11,4994,1,4,0,'2016-08-18 23:47:29'),(5,'Callie','RAT44OHF0RR','Nam@ornareFusce.co.uk',29,2899,1,5,0,'2017-03-02 14:49:19'),(6,'Gray','VOR82DPM1WQ','Praesent.luctus.Curabitur@quis.co.uk',2,419,1,6,0,'2016-02-03 20:42:53'),(7,'Charde','IDJ25JDJ9LW','amet.ornare@malesuadavel.net',37,520,1,7,0,'2015-12-25 16:48:02'),(8,'Regan','LEN50EXQ9YK','eu@egetnisidictum.net',46,1091,1,8,0,'2016-07-14 16:19:24'),(9,'Lacy','OZP59NIJ9HW','Cras.eget@elitelit.net',38,2384,1,9,0,'2017-01-29 17:09:23'),(10,'Yvette','YOG45WZH1KE','ultricies@ipsumDonecsollicitudin.edu',3,2032,1,10,0,'2017-07-26 09:55:23'),(11,'Randall','AOH85RKB3VP','egestas.nunc@estMauriseu.edu',14,3957,0,4,0,'2016-04-25 23:08:34'),(12,'Emmanuel','UIJ10COC5QC','at@eumetusIn.net',29,1678,0,5,0,'2017-03-30 13:46:35'),(13,'Abigail','TVE62GEN6DD','aliquam@urnaNunc.edu',49,4413,0,2,0,'2016-08-04 18:36:41'),(14,'Roth','GFN31FJV1FP','egestas.urna.justo@dictumsapien.org',17,4095,0,3,0,'2017-02-03 23:52:37'),(15,'Morgan','OCR09FGB3VB','justo.Proin.non@egestas.edu',30,27,0,3,0,'2016-02-10 13:29:06'),(16,'Graiden','ECE36WAO5SM','ultrices.a.auctor@sodales.co.uk',23,1550,0,2,0,'2017-01-04 01:32:35'),(17,'Byron','UVY62GKP0PG','Etiam.gravida@urnaNullamlobortis.ca',41,4336,0,9,0,'2017-05-29 05:48:33'),(18,'Edan','DCA91CEO4EL','tempus@consequat.edu',53,1173,0,9,0,'2016-02-22 22:17:43'),(19,'Donovan','EPG06YGW0IA','Vivamus.sit.amet@Sed.net',57,3527,0,1,0,'2016-07-16 21:07:34'),(20,'Kevin','XAS55NMP6ZE','vitae@semegetmassa.org',58,1693,0,6,0,'2017-07-18 21:29:40'),(21,'Audrey','TMU49OPB7IF','amet.orci.Ut@magnaUt.ca',52,2301,0,3,0,'2016-09-06 21:56:02'),(22,'Hyacinth','AGL98RKO9IS','rutrum.magna.Cras@Duiselementumdui.co.uk',53,4119,0,1,0,'2017-03-10 19:58:36'),(23,'Bernard','HKC06CRM4YE','elit@mattissemperdui.com',26,953,0,4,0,'2016-06-16 22:43:29'),(24,'Arden','ZFT47TMU3NK','semper.tellus.id@ultriciesornare.ca',1,128,0,4,0,'2017-07-17 23:55:52'),(25,'Yolanda','MCE40AVX3LU','Donec.feugiat.metus@acfacilisis.org',30,1298,0,3,0,'2017-09-07 18:21:04'),(26,'Burton','XEX19LAY4NF','eu.nibh@ligula.edu',24,153,0,1,0,'2016-04-06 17:34:16'),(27,'Keiko','VLM03TSG7AH','arcu.eu@antedictumcursus.net',48,3918,0,4,0,'2015-12-15 20:43:44'),(28,'Dylan','OEF01RMA3GT','felis.adipiscing@pellentesquemassa.ca',9,3717,0,1,0,'2016-09-03 15:40:34'),(29,'Denton','REI19LLJ2PN','tellus.id.nunc@molestie.co.uk',50,3471,0,7,0,'2017-03-21 19:32:46'),(30,'Boris','PPN85XJQ9IH','mauris@Donec.net',34,4383,0,10,0,'2017-04-09 23:58:12'),(31,'Keiko','OMQ12BBU8YQ','est.arcu@dictumeueleifend.com',1,4702,0,8,0,'2017-08-19 03:05:00'),(32,'Gavin','CWQ17EZH7MJ','Class.aptent.taciti@nec.net',18,3265,0,6,0,'2017-07-30 17:30:02'),(33,'Unity','HNR47AAK7WV','purus@Pellentesquetincidunt.net',20,819,0,8,0,'2017-08-07 11:43:21'),(34,'Cruz','LSQ13HKT7ER','laoreet.posuere@erosnonenim.co.uk',11,3584,0,8,0,'2017-04-18 07:59:45'),(35,'Phyllis','KAH74VXE5YD','Sed.nulla@metus.net',38,1492,0,6,0,'2016-04-05 05:01:21'),(36,'Mira','JFE70SLJ2WI','dictum@nibhvulputatemauris.ca',29,854,0,2,0,'2017-02-13 19:49:00'),(37,'Ethan','LVA56SDK5BO','lorem.luctus.ut@Aliquamornarelibero.org',27,3615,0,9,0,'2016-10-23 11:50:00'),(38,'Wallace','ODY85OOT4LR','rhoncus.Nullam.velit@at.co.uk',30,4334,0,3,0,'2017-06-10 12:25:01'),(39,'Felix','ANA11FUN8XM','orci@nec.com',11,4672,0,10,0,'2016-09-18 04:42:15'),(40,'Berk','ECU45LAB4JK','ipsum.primis.in@maurisa.org',37,4760,0,6,0,'2017-07-08 02:03:07'),(41,'Reece','NZK55DUZ7FP','non.hendrerit.id@Nulla.co.uk',40,1788,0,9,0,'2016-10-11 23:20:12'),(42,'Declan','RSB05VKZ8UR','eu.arcu@sollicitudin.com',26,2459,0,2,0,'2017-07-02 14:27:42'),(43,'Felix','IVH82JHL7QA','lectus.rutrum@adipiscinglacusUt.org',20,3517,0,4,0,'2016-07-30 03:40:58'),(44,'Aspen','AFH44ZEI1AF','Donec.felis.orci@lobortisnisi.net',60,2153,0,8,0,'2016-05-14 11:55:36'),(45,'Kylynn','YFP42WMB9OJ','imperdiet.ullamcorper.Duis@nislsem.edu',33,127,0,9,0,'2017-11-28 18:27:19'),(46,'Candice','TSK59OTG9CE','magna.malesuada@diam.com',52,1530,0,10,0,'2016-06-17 07:14:11'),(47,'Karen','CIB23ARX6OI','tincidunt.dui.augue@ut.co.uk',3,4359,0,9,0,'2016-10-17 04:24:03'),(48,'Avye','JPL79XFQ1DG','ligula.Nullam@Lorem.org',40,3785,0,3,0,'2017-10-10 10:18:39'),(49,'Keane','BLF40TNG2XO','lectus.ante@pede.com',59,4825,0,1,0,'2016-08-03 08:20:23'),(50,'Alden','AIR03QHT5GS','tristique@infelisNulla.ca',52,2777,0,2,0,'2016-06-01 09:40:20'),(51,'Brynne','HGP69RBU4PE','augue.Sed@nequesed.co.uk',32,4901,0,4,0,'2016-11-08 16:55:32'),(52,'Larissa','PAD96VGD0IT','feugiat@Praesent.edu',52,578,0,3,0,'2016-04-13 06:58:11'),(53,'Graiden','OXM89FWG1DX','mauris@consectetueradipiscingelit.net',22,3044,0,4,0,'2015-12-20 07:20:08'),(54,'Libby','GBE04VCC7HJ','Nulla@lectusconvallisest.co.uk',13,1337,0,4,0,'2017-05-04 22:59:22'),(55,'Cedric','KMU14ZKT4QK','vitae@sitametmetus.edu',27,2708,0,9,0,'2016-04-24 12:11:39'),(56,'Fiona','IRL33TNO1NK','risus.at.fringilla@Nunccommodoauctor.co.uk',1,3366,0,7,0,'2016-11-09 00:03:04'),(57,'Shana','GNG52ATB4RX','nec@leo.edu',11,278,0,8,0,'2017-12-04 12:53:46'),(58,'Avye','IUQ14MCT6VH','eu.erat.semper@ametorci.org',55,4419,0,8,0,'2017-09-14 15:11:20'),(59,'Caesar','SQH87DBS9YO','Curabitur.dictum@elitelit.edu',28,3455,0,3,0,'2017-03-01 16:04:33'),(60,'Basil','FZV15GTA9MU','mauris.sagittis@ac.com',43,394,0,5,0,'2017-06-14 14:22:04'),(61,'Jade','BMN04WSX4OV','amet.ante.Vivamus@Aliquamtincidunt.com',31,3765,0,3,0,'2015-12-27 17:41:55'),(62,'Todd','KQR28MDI0NX','sed@mattisornarelectus.ca',42,3562,0,9,0,'2016-03-23 18:14:07'),(63,'Judah','VBO20MAE4JV','aliquam.adipiscing.lacus@luctus.ca',53,1543,0,4,0,'2017-07-20 10:06:13'),(64,'Xantha','WQO50YJR1MP','ut@tortorNunc.net',49,897,0,4,0,'2017-10-23 14:06:46'),(65,'Brody','LOL09VJQ6EV','Vivamus.sit@rutrum.com',44,2700,0,7,0,'2016-03-23 21:19:42'),(66,'Noble','DGA37YYW4KC','nascetur.ridiculus@molestie.co.uk',4,88,0,5,0,'2017-08-13 12:10:29'),(67,'Blaze','SAA57FVH6FR','faucibus.ut@neque.co.uk',3,4722,0,10,0,'2016-08-11 21:44:07'),(68,'Ahmed','KDN17QKE7UU','turpis.In@Donectempor.ca',0,4626,0,2,0,'2017-05-17 11:10:43'),(69,'Salvador','SXI25LHH1HD','Ut.nec.urna@Donecelementum.edu',41,4353,0,3,0,'2017-02-11 11:40:39'),(70,'Daryl','QAZ94YBS5CE','risus@luctusetultrices.org',43,1645,0,7,0,'2016-03-07 20:50:57'),(71,'Charity','FBY10NDV4LE','vulputate.posuere.vulputate@ipsumnon.com',8,393,0,6,0,'2016-03-14 23:12:40'),(72,'Timothy','TFO87HHO9ZC','dignissim.Maecenas@sem.ca',17,3151,0,7,0,'2016-07-09 18:42:13'),(73,'Tanner','KMU32ZAE9ZF','risus.at@elit.com',33,3240,0,7,0,'2017-02-23 14:41:36'),(74,'Emily','PKO48NHJ6AT','aliquam.arcu.Aliquam@musProin.org',9,2521,0,1,0,'2016-01-08 16:00:57'),(75,'Ulysses','PTF89KCY2IM','cursus.diam@vulputatedui.com',20,182,0,7,0,'2016-08-22 03:34:48'),(76,'Naida','FCU55EGW6JN','dolor.sit@loremsit.ca',27,79,0,7,0,'2017-05-21 13:25:35'),(77,'Tasha','TYV69BSQ2VT','eu@Etiam.ca',48,4716,0,5,0,'2017-06-23 03:52:53'),(78,'Alvin','GFO87IVQ4FA','leo@lacusvestibulumlorem.com',5,2096,0,1,0,'2016-12-13 18:45:16'),(79,'Raya','WXS26IEN6OS','at.auctor.ullamcorper@massaVestibulum.org',43,2558,0,4,0,'2017-02-08 21:43:40'),(80,'Otto','OET37IZD5OO','eros@felisullamcorper.net',35,4774,0,7,0,'2017-01-18 01:22:41'),(81,'Aretha','RVK13OGZ2TV','Maecenas.libero.est@purusactellus.org',12,485,0,4,0,'2016-10-21 17:42:35'),(82,'Amos','DBT26ACX4YY','id.erat@nuncid.co.uk',50,2162,0,3,0,'2017-04-11 22:57:35'),(83,'Raphael','JKM35QQA6PD','magna.Nam.ligula@orcisem.com',44,3826,0,7,0,'2017-04-09 08:17:37'),(84,'Adam','QRT36CPB6JO','sodales@iaculislacuspede.com',39,156,0,9,0,'2017-06-20 19:22:43'),(85,'Illana','MCO38ZUC8AV','orci@quis.com',33,3558,0,7,0,'2016-09-22 19:56:03'),(86,'Ebony','GYO85HMH2QT','arcu.Vestibulum.ante@dolorDonecfringilla.com',56,1303,0,6,0,'2017-11-03 04:07:33'),(87,'Randall','LYS65RPF9GE','libero.mauris@commodoipsumSuspendisse.org',12,2122,0,5,0,'2017-06-14 22:07:54'),(88,'Lesley','MRZ21JNB3PI','eget@diamvel.ca',43,2157,0,1,0,'2016-05-28 08:11:49'),(89,'Luke','MNZ24EIQ1IA','vel.sapien.imperdiet@odiotristique.com',29,4010,0,10,0,'2017-10-13 06:14:43'),(90,'Liberty','EOH67FVR7WK','nonummy.ut.molestie@erat.org',36,1350,0,9,0,'2016-12-13 07:15:56'),(91,'Dante','ANQ06OQH1KY','metus.sit@Sed.org',7,2539,0,8,0,'2017-07-27 03:32:08'),(92,'Frances','MKK46IIG1MC','at.nisi.Cum@elitEtiam.net',3,2133,0,2,0,'2016-04-13 02:47:54'),(93,'Piper','CSF80JOI2TQ','convallis@lacusUt.ca',46,3049,0,5,0,'2017-11-03 04:31:32'),(94,'Keaton','XWU67YFK5IL','vel.faucibus.id@magnaa.org',4,1530,0,4,0,'2017-04-23 13:29:32'),(95,'Erasmus','UJY41XKN5FI','eu@turpisAliquamadipiscing.net',5,4460,0,2,0,'2016-03-21 11:43:40'),(96,'Gray','CXR96MIL8JP','in.cursus@enim.org',43,2242,0,3,0,'2015-12-22 04:07:03'),(97,'Britanney','RGB74NLJ8BP','Mauris.magna@ategestasa.edu',1,2882,0,4,0,'2017-10-30 08:13:27'),(98,'Karina','JJC79XMZ8XN','fringilla.euismod@Aliquam.com',28,694,0,6,0,'2016-10-16 08:50:47'),(99,'Bernard','NQC88YDQ3PL','urna.nec.luctus@Cumsociisnatoque.co.uk',12,2760,0,10,0,'2017-04-26 02:28:48'),(100,'Cullen','UYW36NTW0XU','malesuada.Integer.id@Donecnonjusto.edu',45,4137,0,10,0,'2017-10-05 20:56:56'),(101,'Jin','OIK14HRV1DO','diam.nunc.ullamcorper@aliquet.ca',21,4666,1,10,0,'2016-03-06 21:01:17');
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

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
  `id_formation_status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_employee_id` (`id_employee`),
  KEY `fk_formation_id` (`id_formation`),
  KEY `fk_formation_status_id` (`id_formation_status`),
  CONSTRAINT `fk_employee_id` FOREIGN KEY (`id_employee`) REFERENCES `employee` (`id`),
  CONSTRAINT `fk_formation_id` FOREIGN KEY (`id_formation`) REFERENCES `formation` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_formation`
--

LOCK TABLES `employee_formation` WRITE;
/*!40000 ALTER TABLE `employee_formation` DISABLE KEYS */;
INSERT INTO `employee_formation` VALUES (1,2,30,1),(2,11,93,2),(3,3,78,1),(4,11,4,3),(5,21,32,3),(6,6,67,3),(7,19,44,1),(8,15,70,1),(9,23,69,3),(10,24,49,3),(11,13,34,2),(12,20,41,3),(13,6,32,2),(14,30,13,3),(15,27,12,1),(16,24,88,1),(17,4,84,2),(18,14,30,3),(19,29,28,2),(20,22,54,1),(21,14,26,2),(22,30,16,3),(23,20,90,2),(24,25,1,1),(25,30,35,1),(26,11,6,1),(27,12,51,1),(28,14,16,3),(29,14,73,3),(30,16,73,1),(31,7,96,3),(32,29,43,1),(33,8,30,3),(34,22,97,2),(35,14,5,1),(36,28,46,3),(37,1,88,3),(38,27,71,1),(39,10,95,2),(40,7,39,1),(41,12,51,1),(42,25,9,3),(43,22,4,3),(44,5,55,1),(45,10,89,1),(46,6,73,2),(47,1,46,2),(48,21,82,2),(49,27,93,3),(50,14,49,1),(51,28,59,3),(52,6,67,3),(53,19,95,2),(54,23,22,1),(55,17,40,1),(56,26,21,2),(57,18,75,3),(58,6,15,2),(59,26,33,3),(60,8,63,2),(61,13,58,2),(62,20,38,3),(63,24,88,1),(64,11,76,3),(65,1,77,3),(66,17,38,3),(67,11,14,3),(68,29,56,2),(69,25,68,2),(70,29,33,1),(71,1,7,3),(72,21,65,2),(73,14,3,3),(74,21,100,1),(75,9,101,2),(76,17,68,1),(77,12,64,2),(78,3,13,3),(79,29,93,1),(80,25,66,1),(81,7,45,2),(82,23,96,1),(83,9,33,2),(84,21,34,2),(85,15,46,2),(86,2,7,3),(87,8,67,1),(88,12,43,3),(89,10,69,3),(90,16,100,3),(91,18,21,2),(92,30,53,2),(93,8,47,2),(94,28,44,1),(95,25,10,1),(96,8,23,1),(97,4,10,3),(98,30,101,3),(99,7,39,1),(100,22,66,3);
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
  `id_team` int(11) unsigned NOT NULL,
  `id_employee` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_employee_id` (`id_employee`),
  KEY `fk_team_id` (`id_team`),
  CONSTRAINT `fk_employee_team_id` FOREIGN KEY (`id_employee`) REFERENCES `employee` (`id`),
  CONSTRAINT `fk_team_id` FOREIGN KEY (`id_team`) REFERENCES `team` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_team`
--

LOCK TABLES `employee_team` WRITE;
/*!40000 ALTER TABLE `employee_team` DISABLE KEYS */;
INSERT INTO `employee_team` VALUES (1,7,100),(2,2,38),(3,5,84),(4,10,60),(5,10,80),(6,6,43),(7,10,16),(8,9,44),(9,9,86),(10,10,21),(11,5,64),(12,9,51),(13,5,39),(14,1,23),(15,6,34),(16,6,35),(17,8,87),(18,6,75),(19,6,9),(20,4,11),(21,3,91),(22,9,47),(23,8,21),(24,9,92),(25,9,61),(26,3,53),(27,2,46),(28,3,93),(29,9,36),(30,6,101),(31,7,72),(32,7,10),(33,4,32),(34,8,50),(35,8,67),(36,5,85),(37,3,43),(38,10,12),(39,3,61),(40,7,19),(41,8,64),(42,3,82),(43,2,70),(44,2,80),(45,9,58),(46,3,38),(47,3,1),(48,7,30),(49,3,19),(50,9,86),(51,8,101),(52,1,68),(53,8,28),(54,1,73),(55,3,86),(56,9,57),(57,8,101),(58,2,42),(59,9,7),(60,8,71),(61,3,19),(62,10,84),(63,6,11),(64,2,54),(65,1,93),(66,4,22),(67,6,98),(68,2,60),(69,7,65),(70,5,66),(71,7,88),(72,5,31),(73,9,51),(74,3,28),(75,2,39),(76,5,25),(77,4,29),(78,4,63),(79,2,87),(80,1,87),(81,3,69),(82,9,31),(83,9,39),(84,1,22),(85,5,20),(86,4,87),(87,5,11),(88,7,5),(89,2,16),(90,6,25),(91,7,48),(92,10,39),(93,2,6),(94,5,5),(95,4,71),(96,2,22),(97,10,73),(98,5,45),(99,4,70),(100,4,65);
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
INSERT INTO `formation` VALUES (1,'Phasellus Ornare Fusce Ltd','tempor erat neque non quam. Pellentesque habitant morbi tristique senectus et netus et malesuada','2017-11-16 15:18:53',14,4,148,'Patalillo','hendrerit consectetuer, cursus et, magna. Praesent','Nostra Per Inceptos Corp.'),(2,'Odio LLC','Curabitur egestas nunc sed libero. Proin sed turpis nec mauris','2017-10-07 18:20:24',6,4,108,'Talagante','dolor sit amet,','Odio Auctor Vitae Incorporated'),(3,'Posuere Cubilia Curae; Foundation','sit amet ante. Vivamus non','2017-10-21 16:30:51',19,3,196,'Gateshead','elit, pharetra ut, pharetra sed, hendrerit a,','Pharetra Felis Corp.'),(4,'Quisque Associates','dictum','2016-12-12 05:05:18',3,5,185,'Rechnitz','Nullam lobortis quam','Arcu Industries'),(5,'Elit Sed Inc.','id enim. Curabitur massa. Vestibulum accumsan neque et nunc. Quisque','2017-06-16 18:00:58',6,3,89,'Fontanellato','Aenean','Fringilla Mi Lacinia PC'),(6,'Nulla Eu Neque LLP','sociis natoque penatibus et magnis dis parturient','2017-09-25 01:42:22',10,5,247,'Ligosullo','eros non enim commodo hendrerit. Donec porttitor','Velit Egestas Industries'),(7,'Aliquam Iaculis Lacus Foundation','vel lectus. Cum sociis natoque','2017-03-01 07:15:34',19,4,107,'Meldert','Nam ligula elit, pretium et, rutrum non,','Mauris LLP'),(8,'Fusce Mollis Duis Institute','diam at pretium aliquet, metus urna convallis erat, eget tincidunt dui augue eu tellus. Phasellus','2016-03-08 02:33:41',29,4,218,'Preston','nascetur ridiculus','Feugiat PC'),(9,'Sollicitudin Consulting','euismod in, dolor. Fusce feugiat. Lorem ipsum','2016-01-09 03:03:47',21,1,137,'Neudörfl','sit','Lobortis Quam LLC'),(10,'Velit Industries','at, libero. Morbi accumsan laoreet ipsum. Curabitur consequat, lectus sit','2017-11-16 03:26:26',5,2,137,'Torres del Paine','orci sem eget massa. Suspendisse eleifend. Cras sed leo.','Natoque Penatibus Et Limited'),(11,'Ut PC','Vestibulum ante ipsum primis in faucibus orci luctus et ultrices','2016-07-05 00:54:12',3,5,148,'Wolfurt','pede. Praesent','Donec Tempus Institute'),(12,'Hendrerit Consectetuer Institute','et libero. Proin mi. Aliquam gravida mauris ut mi.','2015-12-23 07:09:56',25,3,157,'College','nec quam.','Purus Incorporated'),(13,'Mi Fringilla Incorporated','Sed nec metus facilisis lorem tristique aliquet. Phasellus','2016-03-12 03:50:54',24,3,204,'Monacilioni','pede ac urna. Ut tincidunt','Tempor Consulting'),(14,'Vel Foundation','leo. Cras vehicula aliquet libero. Integer in magna. Phasellus dolor','2017-01-13 22:06:21',5,5,98,'Rock Springs','Ut sagittis lobortis mauris. Suspendisse aliquet molestie','Ultricies Institute'),(15,'Integer Mollis Integer Industries','nec, cursus a,','2016-11-14 14:12:30',19,1,90,'Vinci','odio','Mauris LLP'),(16,'Et Ultrices Ltd','vel, vulputate eu, odio. Phasellus at','2017-03-09 04:40:17',24,4,236,'Saint-Eug�ne-de-Ladri�re','nonummy ipsum','Malesuada Fames Ac Corporation'),(17,'Rutrum Ltd','nec tempus mauris erat','2017-02-11 18:34:49',27,3,195,'Futrono','Nulla interdum. Curabitur dictum. Phasellus','Magna A Company'),(18,'Pede Ltd','amet, consectetuer adipiscing elit. Etiam laoreet, libero et tristique pellentesque,','2016-01-11 07:30:14',29,2,127,'Ghlin','est, mollis non,','Aliquam Consulting'),(19,'Enim Nunc Ut Ltd','Morbi non sapien molestie orci tincidunt adipiscing. Mauris','2016-06-21 12:16:24',20,5,116,'Waterbury','commodo hendrerit. Donec porttitor','Dui Nec PC'),(20,'Sapien Nunc Pulvinar Institute','eleifend non, dapibus rutrum, justo. Praesent luctus.','2017-06-08 22:24:49',17,1,105,'Beausejour','Aliquam tincidunt, nunc ac','Ultricies Ornare Foundation'),(21,'Donec Tempus Inc.','Aliquam ultrices','2016-01-29 19:43:31',24,1,201,'Värnamo','non leo.','Tortor Institute'),(22,'Justo Sit LLC','risus varius orci, in consequat enim diam vel arcu. Curabitur ut odio vel est tempor','2017-08-24 15:48:46',30,3,137,'Westlock','lobortis quam a felis ullamcorper','Mauris Id Sapien Ltd'),(23,'Donec Porttitor Tellus Foundation','iaculis aliquet diam. Sed diam lorem,','2015-12-24 10:52:01',25,5,59,'Mount Gambier','sollicitudin','Hendrerit Incorporated'),(24,'Sodales Purus In Consulting','magnis dis parturient montes, nascetur ridiculus mus. Donec','2016-09-01 17:19:18',16,5,193,'Herstal','turpis egestas.','Blandit Nam Associates'),(25,'Nunc Nulla PC','in, hendrerit consectetuer,','2017-05-13 10:09:31',24,2,221,'Estevan','tempor','Magnis Dis Parturient Inc.'),(26,'Vel Corp.','fermentum fermentum arcu. Vestibulum ante ipsum primis in faucibus orci luctus et','2017-01-30 07:29:01',20,5,112,'Canora','pede. Cum sociis natoque penatibus et magnis','Nulla Institute'),(27,'At Consulting','nec,','2017-10-23 06:56:55',23,4,153,'Thorn','eget, venenatis a, magna. Lorem ipsum dolor sit','Elementum Sem Vitae LLP'),(28,'Ridiculus Mus Ltd','risus,','2016-06-03 06:36:01',1,4,191,'Burdinne','tempus scelerisque, lorem ipsum sodales purus, in molestie tortor','Purus Gravida Sagittis LLC'),(29,'Ultrices Mauris Ipsum Limited','a ultricies adipiscing, enim mi tempor lorem, eget mollis lectus','2016-05-28 13:04:19',13,4,61,'Sint-Genesius-Rode','metus.','Enim Nisl Elementum Incorporated'),(30,'Eu Dolor Limited','dolor elit, pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet lectus quis massa. Mauris','2016-01-31 20:32:04',18,3,61,'Traralgon','netus et malesuada fames','Duis Corp.');
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formation_status`
--

LOCK TABLES `formation_status` WRITE;
/*!40000 ALTER TABLE `formation_status` DISABLE KEYS */;
INSERT INTO `formation_status` VALUES (1,'validée'),(2,'en cours de validation'),(3,'refusée');
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

-- Dump completed on 2016-12-23 15:47:36
