-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: 127.0.0.1    Database: csunvb_csu
-- ------------------------------------------------------
-- Server version	5.7.26

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
-- Table structure for table `Logs`
--
USE csunvb_csu;

DROP TABLE IF EXISTS `Logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` date NOT NULL,
  `users_id` int(11) NOT NULL,
  `item_type` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `text` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Logs_users1_idx` (`users_id`),
  CONSTRAINT `fk_Logs_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Logs`
--

LOCK TABLES `Logs` WRITE;
/*!40000 ALTER TABLE `Logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `Logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bases`
--

DROP TABLE IF EXISTS `bases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bases`
--

LOCK TABLES `bases` WRITE;
/*!40000 ALTER TABLE `bases` DISABLE KEYS */;
INSERT INTO `bases` VALUES (5,'La Vallée-de-Joux'),(4,'Payerne'),(3,'Saint-Loup'),(2,'Ste-Croix'),(1,'Yverdon');
/*!40000 ALTER TABLE `bases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `batches`
--

DROP TABLE IF EXISTS `batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `batches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL DEFAULT 'new',
  `drug_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `number_UNIQUE` (`number`),
  KEY `fk_batches_drugs_idx` (`drug_id`),
  CONSTRAINT `fk_batches_drugs` FOREIGN KEY (`drug_id`) REFERENCES `drugs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `batches`
--

LOCK TABLES `batches` WRITE;
/*!40000 ALTER TABLE `batches` DISABLE KEYS */;
INSERT INTO `batches` VALUES (1,'123123','used',1),(2,'654654','new',1),(3,'545654','new',1),(4,'231654','inuse',1),(5,'879645','inuse',1),(6,'231288','used',2),(7,'231355','used',2),(8,'213546','inuse',2),(9,'465465','new',2),(10,'222222','new',2),(11,'555555','used',3),(13,'213215','inuse',3),(14,'789555','new',3);
/*!40000 ALTER TABLE `batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crews`
--

DROP TABLE IF EXISTS `crews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `boss` tinyint(4) NOT NULL DEFAULT '0',
  `day` tinyint(4) NOT NULL DEFAULT '1',
  `guardsheet_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_crews_guardsheets1_idx` (`guardsheet_id`),
  KEY `fk_crews_users1_idx` (`user_id`),
  CONSTRAINT `fk_crews_guardsheets1` FOREIGN KEY (`guardsheet_id`) REFERENCES `guardsheets` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_crews_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crews`
--

LOCK TABLES `crews` WRITE;
/*!40000 ALTER TABLE `crews` DISABLE KEYS */;
INSERT INTO `crews` VALUES (2,0,0,151,23),(3,1,0,151,32),(4,0,1,151,34),(5,1,1,151,43),(6,0,0,152,24),(7,1,0,152,42),(8,0,1,152,35),(9,1,1,152,53),(10,0,0,153,25),(11,1,0,153,52),(12,0,1,153,36),(13,1,1,153,63);
/*!40000 ALTER TABLE `crews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `drugs`
--

DROP TABLE IF EXISTS `drugs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `drugs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drugs`
--

LOCK TABLES `drugs` WRITE;
/*!40000 ALTER TABLE `drugs` DISABLE KEYS */;
INSERT INTO `drugs` VALUES (1,'Fentanyl'),(2,'Morphine'),(3,'Temesta');
/*!40000 ALTER TABLE `drugs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guard_use_nova`
--

DROP TABLE IF EXISTS `guard_use_nova`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guard_use_nova` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nova_id` int(11) NOT NULL,
  `guardsheet_id` int(11) NOT NULL,
  `day` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_novas_has_guardsheets_guardsheets1_idx` (`guardsheet_id`),
  KEY `fk_novas_has_guardsheets_novas1_idx` (`nova_id`),
  CONSTRAINT `fk_novas_has_guardsheets_guardsheets1` FOREIGN KEY (`guardsheet_id`) REFERENCES `guardsheets` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_novas_has_guardsheets_novas1` FOREIGN KEY (`nova_id`) REFERENCES `novas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guard_use_nova`
--

LOCK TABLES `guard_use_nova` WRITE;
/*!40000 ALTER TABLE `guard_use_nova` DISABLE KEYS */;
INSERT INTO `guard_use_nova` VALUES (1,1,151,0),(2,2,151,1),(3,3,152,0),(4,4,152,1),(5,5,153,0),(6,6,153,1);
/*!40000 ALTER TABLE `guard_use_nova` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guardcontents`
--

DROP TABLE IF EXISTS `guardcontents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guardcontents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(45) DEFAULT NULL,
  `guard_line_id` int(11) NOT NULL,
  `guardsheet_id` int(11) NOT NULL,
  `day_check_user_id` int(11) DEFAULT NULL,
  `night_check_user_id` int(11) DEFAULT NULL,
  `carry_on` int(11) NOT NULL DEFAULT '0' COMMENT 'If true, the comment must be transferred on to the next guardsheet when it’s opened',
  PRIMARY KEY (`id`),
  KEY `fk_guard_items_guard_lines1_idx` (`guard_line_id`),
  KEY `fk_guard_items_guardsheets1_idx` (`guardsheet_id`),
  KEY `fk_guard_items_users1_idx` (`day_check_user_id`),
  KEY `fk_guard_items_users2_idx` (`night_check_user_id`),
  CONSTRAINT `fk_guard_items_guard_lines1` FOREIGN KEY (`guard_line_id`) REFERENCES `guardlines` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_guard_items_guardsheets1` FOREIGN KEY (`guardsheet_id`) REFERENCES `guardsheets` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_guard_items_users1` FOREIGN KEY (`day_check_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_guard_items_users2` FOREIGN KEY (`night_check_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guardcontents`
--

LOCK TABLES `guardcontents` WRITE;
/*!40000 ALTER TABLE `guardcontents` DISABLE KEYS */;
INSERT INTO `guardcontents` VALUES (6,'Commentaire',6,151,54,NULL,0),(7,'Commentaire',5,151,54,33,0),(8,'Commentaire',6,151,45,44,0),(9,'Commentaire',7,151,45,55,0),(13,'Commentaire',9,152,34,NULL,0),(14,'Commentaire',8,153,NULL,NULL,0),(15,'Commentaire',9,153,74,34,0),(16,'Commentaire',10,153,NULL,NULL,0),(17,'Commentaire',11,153,24,NULL,0),(18,'Commentaire',12,151,NULL,34,0),(19,NULL,13,153,44,NULL,0),(20,NULL,14,152,5,43,0),(21,NULL,15,151,55,43,0),(22,'Commentaire',16,152,6,24,0),(23,NULL,17,153,NULL,24,0),(24,NULL,18,153,NULL,NULL,0);
/*!40000 ALTER TABLE `guardcontents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guardlines`
--

DROP TABLE IF EXISTS `guardlines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guardlines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(45) NOT NULL,
  `guard_sections_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_guard_lines_guard_sections1_idx` (`guard_sections_id`),
  CONSTRAINT `fk_guard_lines_guard_sections1` FOREIGN KEY (`guard_sections_id`) REFERENCES `guardsections` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guardlines`
--

LOCK TABLES `guardlines` WRITE;
/*!40000 ALTER TABLE `guardlines` DISABLE KEYS */;
INSERT INTO `guardlines` VALUES (1,'Radios',1),(2,'Détecteurs CO',1),(3,'Téléphones',1),(4,'Gt info avisé',1),(5,'Annonce 144',1),(6,'Plein essence',2),(7,'Opérationnel',2),(8,'Rdv garage',2),(9,'Gt vhc avisé',2),(10,'50chf présents',2),(11,'Problèmes d’interventions hors véhicules',2),(12,'Info trafic consulté',3),(13,'Report des infos trafic sur plan de secteur',3),(14,'Accueil étudiant ou stagiaire',3),(15,'Lecture journal de bord ',3),(16,'Problème et responsable Gt avisé',3),(17,'Centrale propre',4),(18,'Tâches du jour effectuées',4),(19,'Dimanche ',4);
/*!40000 ALTER TABLE `guardlines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guardsections`
--

DROP TABLE IF EXISTS `guardsections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guardsections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title_UNIQUE` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guardsections`
--

LOCK TABLES `guardsections` WRITE;
/*!40000 ALTER TABLE `guardsections` DISABLE KEYS */;
INSERT INTO `guardsections` VALUES (1,'Centrale & Tâches'),(2,'Ecrans de communication & Trafic'),(3,'Matériel & Télécom'),(4,'Véhicules & Interventions');
/*!40000 ALTER TABLE `guardsections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guardsheets`
--

DROP TABLE IF EXISTS `guardsheets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guardsheets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `state` varchar(45) NOT NULL,
  `base_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq` (`base_id`,`date`),
  KEY `fk_guardsheets_bases1_idx` (`base_id`),
  CONSTRAINT `fk_guardsheets_bases1` FOREIGN KEY (`base_id`) REFERENCES `bases` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=156 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guardsheets`
--

LOCK TABLES `guardsheets` WRITE;
/*!40000 ALTER TABLE `guardsheets` DISABLE KEYS */;
INSERT INTO `guardsheets` VALUES (151,'2020-10-26 00:00:00','closed',2),(152,'2020-10-27 00:00:00','closed',2),(153,'2020-10-28 00:00:00','open',2),(154,'2020-10-29 00:00:00','empty',2),(155,'2020-10-30 00:00:00','empty',2);
/*!40000 ALTER TABLE `guardsheets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `novachecks`
--

DROP TABLE IF EXISTS `novachecks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `novachecks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) DEFAULT NULL,
  `drug_id` int(11) NOT NULL,
  `nova_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `stupsheet_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_novachecks_drugs1_idx` (`drug_id`),
  KEY `fk_novachecks_novas1_idx` (`nova_id`),
  KEY `fk_novachecks_users1_idx` (`user_id`),
  KEY `fk_novachecks_stupsheets1_idx` (`stupsheet_id`),
  CONSTRAINT `fk_novachecks_drugs1` FOREIGN KEY (`drug_id`) REFERENCES `drugs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_novachecks_novas1` FOREIGN KEY (`nova_id`) REFERENCES `novas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_novachecks_stupsheets1` FOREIGN KEY (`stupsheet_id`) REFERENCES `stupsheets` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_novachecks_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=691 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `novachecks`
--

LOCK TABLES `novachecks` WRITE;
/*!40000 ALTER TABLE `novachecks` DISABLE KEYS */;
INSERT INTO `novachecks` VALUES (673,'2020-10-26 00:00:00',6,6,1,3,11,23),(674,'2020-10-26 00:00:00',6,6,1,5,22,23),(675,'2020-10-26 00:00:00',6,6,2,3,22,23),(676,'2020-10-26 00:00:00',6,6,2,5,33,23),(677,'2020-10-26 00:00:00',6,6,3,3,44,23),(678,'2020-10-26 00:00:00',5,5,3,5,55,23),(679,'2020-10-27 00:00:00',6,6,1,3,66,23),(680,'2020-10-27 00:00:00',6,6,1,5,77,23),(681,'2020-10-27 00:00:00',6,6,2,3,87,23),(682,'2020-10-27 00:00:00',6,5,2,5,76,23),(683,'2020-10-27 00:00:00',6,6,3,3,65,23),(684,'2020-10-27 00:00:00',6,6,3,5,54,23),(685,'2020-10-28 00:00:00',4,NULL,1,3,43,23),(686,'2020-10-28 00:00:00',6,NULL,1,5,3,23),(687,'2020-10-28 00:00:00',6,NULL,2,3,23,23),(688,'2020-10-28 00:00:00',6,NULL,2,5,32,23),(689,'2020-10-28 00:00:00',6,NULL,3,3,21,23),(690,'2020-10-28 00:00:00',6,NULL,3,5,12,23);
/*!40000 ALTER TABLE `novachecks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `novas`
--

DROP TABLE IF EXISTS `novas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `novas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `number_UNIQUE` (`number`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `novas`
--

LOCK TABLES `novas` WRITE;
/*!40000 ALTER TABLE `novas` DISABLE KEYS */;
INSERT INTO `novas` VALUES (1,31),(2,32),(3,33),(4,35),(5,36),(11,43),(6,57),(7,58),(8,75),(9,76),(10,77);
/*!40000 ALTER TABLE `novas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pharmachecks`
--

DROP TABLE IF EXISTS `pharmachecks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pharmachecks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) DEFAULT NULL,
  `batch_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `stupsheet_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pharmachecks_batches1_idx` (`batch_id`),
  KEY `fk_pharmachecks_users1_idx` (`user_id`),
  KEY `fk_pharmachecks_stupsheets1_idx` (`stupsheet_id`),
  CONSTRAINT `fk_pharmachecks_batches1` FOREIGN KEY (`batch_id`) REFERENCES `batches` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pharmachecks_stupsheets1` FOREIGN KEY (`stupsheet_id`) REFERENCES `stupsheets` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pharmachecks_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5159 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pharmachecks`
--

LOCK TABLES `pharmachecks` WRITE;
/*!40000 ALTER TABLE `pharmachecks` DISABLE KEYS */;
INSERT INTO `pharmachecks` VALUES (5150,'2020-10-26 00:00:00',12,11,4,4,23),(5151,'2020-10-26 00:00:00',8,8,8,8,23),(5152,'2020-10-26 00:00:00',6,4,13,13,23),(5153,'2020-10-27 00:00:00',11,11,4,7,23),(5154,'2020-10-27 00:00:00',8,7,8,8,23),(5155,'2020-10-27 00:00:00',4,4,13,2,23),(5156,'2020-10-28 00:00:00',11,NULL,4,7,23),(5157,'2020-10-28 00:00:00',7,NULL,8,66,23),(5158,'2020-10-28 00:00:00',4,NULL,13,4,23);
/*!40000 ALTER TABLE `pharmachecks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `restocks`
--

DROP TABLE IF EXISTS `restocks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `restocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `quantity` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `nova_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_restocks_batches1_idx` (`batch_id`),
  KEY `fk_restocks_novas1_idx` (`nova_id`),
  KEY `fk_restocks_users1_idx` (`user_id`),
  CONSTRAINT `fk_restocks_batches1` FOREIGN KEY (`batch_id`) REFERENCES `batches` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_restocks_novas1` FOREIGN KEY (`nova_id`) REFERENCES `novas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_restocks_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `restocks`
--

LOCK TABLES `restocks` WRITE;
/*!40000 ALTER TABLE `restocks` DISABLE KEYS */;
INSERT INTO `restocks` VALUES (5,'2020-10-26 00:00:00',1,4,5,2),(6,'2020-10-26 00:00:00',2,13,3,3);
/*!40000 ALTER TABLE `restocks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stupsheet_use_batch`
--

DROP TABLE IF EXISTS `stupsheet_use_batch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stupsheet_use_batch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stupsheet_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_use` (`stupsheet_id`,`batch_id`),
  KEY `fk_stupsheet_use_batch_stupsheets1_idx` (`stupsheet_id`),
  KEY `fk_stupsheet_use_batch_batches1_idx` (`batch_id`),
  CONSTRAINT `fk_stupsheet_use_batch_batches1` FOREIGN KEY (`batch_id`) REFERENCES `batches` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_stupsheet_use_batch_stupsheets1` FOREIGN KEY (`stupsheet_id`) REFERENCES `stupsheets` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stupsheet_use_batch`
--

LOCK TABLES `stupsheet_use_batch` WRITE;
/*!40000 ALTER TABLE `stupsheet_use_batch` DISABLE KEYS */;
INSERT INTO `stupsheet_use_batch` VALUES (109,23,4),(110,23,8),(111,23,13);
/*!40000 ALTER TABLE `stupsheet_use_batch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stupsheet_use_nova`
--

DROP TABLE IF EXISTS `stupsheet_use_nova`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stupsheet_use_nova` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stupsheet_id` int(11) NOT NULL,
  `nova_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_use` (`stupsheet_id`,`nova_id`),
  KEY `fk_stupsheet_use_nova_stupsheets1_idx` (`stupsheet_id`),
  KEY `fk_stupsheet_use_nova_novas1_idx` (`nova_id`),
  CONSTRAINT `fk_stupsheet_use_nova_novas1` FOREIGN KEY (`nova_id`) REFERENCES `novas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_stupsheet_use_nova_stupsheets1` FOREIGN KEY (`stupsheet_id`) REFERENCES `stupsheets` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stupsheet_use_nova`
--

LOCK TABLES `stupsheet_use_nova` WRITE;
/*!40000 ALTER TABLE `stupsheet_use_nova` DISABLE KEYS */;
INSERT INTO `stupsheet_use_nova` VALUES (51,23,3),(52,23,5);
/*!40000 ALTER TABLE `stupsheet_use_nova` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stupsheets`
--

DROP TABLE IF EXISTS `stupsheets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stupsheets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `week` int(11) NOT NULL,
  `state` varchar(45) NOT NULL,
  `base_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `STUPSHEETUNIQ` (`week`,`base_id`),
  KEY `fk_stupsheets_bases1_idx` (`base_id`),
  CONSTRAINT `fk_stupsheets_bases1` FOREIGN KEY (`base_id`) REFERENCES `bases` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stupsheets`
--

LOCK TABLES `stupsheets` WRITE;
/*!40000 ALTER TABLE `stupsheets` DISABLE KEYS */;
INSERT INTO `stupsheets` VALUES (23,2044,'open',2);
/*!40000 ALTER TABLE `stupsheets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stupsignatures`
--

DROP TABLE IF EXISTS `stupsignatures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stupsignatures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `day` int(11) NOT NULL,
  `stupsheet_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_stupsignatures_stupsheets1_idx` (`stupsheet_id`),
  KEY `fk_stupsignatures_users1_idx` (`user_id`),
  CONSTRAINT `fk_stupsignatures_stupsheets1` FOREIGN KEY (`stupsheet_id`) REFERENCES `stupsheets` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_stupsignatures_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stupsignatures`
--

LOCK TABLES `stupsignatures` WRITE;
/*!40000 ALTER TABLE `stupsignatures` DISABLE KEYS */;
/*!40000 ALTER TABLE `stupsignatures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `todos`
--

DROP TABLE IF EXISTS `todos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `todos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `todothing_id` int(11) NOT NULL,
  `todosheet_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `value` varchar(45) DEFAULT NULL,
  `done_at` datetime DEFAULT NULL,
  `day_of_week` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_todoitems_todotexts1_idx` (`todothing_id`),
  KEY `fk_todoitems_todosheets1_idx` (`todosheet_id`),
  KEY `fk_todoitems_users1_idx` (`user_id`),
  CONSTRAINT `fk_todoitems_todosheets1` FOREIGN KEY (`todosheet_id`) REFERENCES `todosheets` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_todoitems_todotexts1` FOREIGN KEY (`todothing_id`) REFERENCES `todothings` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_todoitems_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=190 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `todos`
--

LOCK TABLES `todos` WRITE;
/*!40000 ALTER TABLE `todos` DISABLE KEYS */;
INSERT INTO `todos` VALUES (91,34,23,22,NULL,NULL,1),(92,22,23,33,NULL,NULL,1),(93,28,23,22,NULL,NULL,1),(94,23,23,33,NULL,NULL,1),(95,21,23,22,NULL,NULL,1),(96,36,23,33,NULL,NULL,1),(97,31,23,33,NULL,NULL,1),(98,35,23,44,NULL,NULL,1),(99,38,23,33,NULL,NULL,1),(100,24,23,44,NULL,NULL,1),(101,29,23,33,'12',NULL,1),(102,32,23,44,NULL,NULL,1),(103,39,23,33,NULL,NULL,1),(104,34,23,44,NULL,NULL,2),(105,22,23,32,NULL,NULL,2),(106,28,23,32,NULL,NULL,2),(107,23,23,32,NULL,NULL,2),(108,21,23,32,NULL,NULL,2),(109,36,23,32,NULL,NULL,2),(110,31,23,34,NULL,NULL,2),(111,35,23,34,NULL,NULL,2),(112,38,23,34,NULL,NULL,2),(113,24,23,34,NULL,NULL,2),(114,29,23,45,'32',NULL,2),(115,32,23,45,NULL,NULL,2),(116,39,23,45,NULL,NULL,2),(117,34,23,56,NULL,NULL,3),(118,22,23,56,NULL,NULL,3),(119,28,23,56,NULL,NULL,3),(120,23,23,56,NULL,NULL,3),(121,21,23,55,NULL,NULL,3),(122,36,23,33,NULL,NULL,3),(123,31,23,3,NULL,NULL,3),(124,35,23,3,NULL,NULL,3),(125,38,23,3,NULL,NULL,3),(126,24,23,3,NULL,NULL,3),(127,29,23,34,NULL,NULL,3),(128,32,23,4,NULL,NULL,3),(129,39,23,4,NULL,NULL,3),(130,34,23,NULL,NULL,NULL,4),(131,22,23,NULL,NULL,NULL,4),(132,28,23,NULL,NULL,NULL,4),(133,23,23,NULL,NULL,NULL,4),(134,21,23,NULL,NULL,NULL,4),(135,36,23,NULL,NULL,NULL,4),(136,31,23,NULL,NULL,NULL,4),(137,35,23,NULL,NULL,NULL,4),(138,38,23,NULL,NULL,NULL,4),(139,24,23,NULL,NULL,NULL,4),(140,29,23,NULL,NULL,NULL,4),(141,32,23,NULL,NULL,NULL,4),(142,39,23,NULL,NULL,NULL,4),(143,34,23,NULL,NULL,NULL,5),(144,22,23,NULL,NULL,NULL,5),(145,28,23,NULL,NULL,NULL,5),(146,23,23,NULL,NULL,NULL,5),(147,21,23,NULL,NULL,NULL,5),(148,36,23,NULL,NULL,NULL,5),(149,31,23,NULL,NULL,NULL,5),(150,35,23,NULL,NULL,NULL,5),(151,38,23,NULL,NULL,NULL,5),(152,24,23,NULL,NULL,NULL,5),(153,29,23,NULL,NULL,NULL,5),(154,32,23,NULL,NULL,NULL,5),(155,39,23,NULL,NULL,NULL,5),(156,34,23,NULL,NULL,NULL,6),(157,22,23,NULL,NULL,NULL,6),(158,28,23,NULL,NULL,NULL,6),(159,23,23,NULL,NULL,NULL,6),(160,21,23,NULL,NULL,NULL,6),(161,36,23,NULL,NULL,NULL,6),(162,31,23,NULL,NULL,NULL,6),(163,35,23,NULL,NULL,NULL,6),(164,38,23,NULL,NULL,NULL,6),(165,24,23,NULL,NULL,NULL,6),(166,29,23,NULL,NULL,NULL,6),(167,32,23,NULL,NULL,NULL,6),(168,39,23,NULL,NULL,NULL,6),(169,34,23,NULL,NULL,NULL,7),(170,22,23,NULL,NULL,NULL,7),(171,28,23,NULL,NULL,NULL,7),(172,23,23,NULL,NULL,NULL,7),(173,21,23,NULL,NULL,NULL,7),(174,36,23,NULL,NULL,NULL,7),(175,31,23,NULL,NULL,NULL,7),(176,35,23,NULL,NULL,NULL,7),(177,38,23,NULL,NULL,NULL,7),(178,24,23,NULL,NULL,NULL,7),(179,29,23,NULL,NULL,NULL,7),(181,39,23,NULL,NULL,NULL,7),(182,30,23,66,'12',NULL,2),(183,30,23,55,'12',NULL,3),(184,30,23,NULL,NULL,NULL,4),(185,25,23,NULL,NULL,NULL,4),(186,37,23,NULL,NULL,NULL,5),(187,27,23,NULL,NULL,NULL,5),(188,33,23,NULL,NULL,NULL,7),(189,26,23,NULL,NULL,NULL,7);
/*!40000 ALTER TABLE `todos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `todosheets`
--

DROP TABLE IF EXISTS `todosheets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `todosheets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `week` int(11) NOT NULL,
  `state` varchar(45) NOT NULL,
  `base_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_todosheets_bases1_idx` (`base_id`),
  CONSTRAINT `fk_todosheets_bases1` FOREIGN KEY (`base_id`) REFERENCES `bases` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `todosheets`
--

LOCK TABLES `todosheets` WRITE;
/*!40000 ALTER TABLE `todosheets` DISABLE KEYS */;
INSERT INTO `todosheets` VALUES (23,2044,'open',2);
/*!40000 ALTER TABLE `todosheets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `todothings`
--

DROP TABLE IF EXISTS `todothings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `todothings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(200) NOT NULL,
  `daything` tinyint(4) NOT NULL DEFAULT '1',
  `type` int(11) NOT NULL DEFAULT '1' COMMENT '1: done/not done\n2: has a value',
  `display_order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `text_UNIQUE` (`description`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `todothings`
--

LOCK TABLES `todothings` WRITE;
/*!40000 ALTER TABLE `todothings` DISABLE KEYS */;
INSERT INTO `todothings` VALUES (21,'Changer Bac chariot de nettoyage',1,1,5),(22,'Check Ambulance et Communication',1,1,2),(23,'Check bibliothèque',1,1,4),(24,'Check de nuit ',0,1,21),(25,'Commande mat et commande pharma.',1,1,6),(26,'Commande O2',0,1,25),(27,'Contrôle niveau véhicule',1,1,8),(28,'Contrôle stupéfiants + Date perf. Chaudes',1,1,3),(29,'Contrôle stupéfiants Nova .... (Morphine X4, Fentanyl X6)',0,2,22),(30,'Désinfection + Inventaire hebdo Nova ....',1,2,11),(31,'Tâches spécifiques de jour',1,1,13),(32,'Tâches spécifiques de nuit',0,1,23),(33,'Envoi feuille STUP hebdo à gt pharmacie',1,1,9),(34,'Fax 144 Transmission',1,1,1),(35,'Formation',1,1,14),(36,'Nettoyage centrale et garage',1,1,10),(37,'Rangement mat',1,1,7),(38,'Remise locaux ambulances ',1,1,15),(39,'Remise locaux Transmission',0,1,24),(40,'Tâches selon nécessité',1,1,12);
/*!40000 ALTER TABLE `todothings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `initials` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `firstconnect` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `initials_UNIQUE` (`initials`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'John','Doe','JDE','$2y$10$ZplHbYimTZ5P1fQqYiFRwOOfxeivt.gFUvsm9v1cRR.ko72ApkY8y',1,0),(2,'Joseph','Sampson','JSN','$2y$10$SX/gkps4g6rTwMpu5fSqeexdio10Z0ZkP912mO3kyVoshqW6HD/RW',0,0),(3,'Sheila','Compton','SCN','$2y$10$zcR7EZ4s4W4qpuWywd0oTOzFGJ..ja/Ev53HjqYSN6Kpp44pAEoty',0,0),(4,'Karly','Rush','KRH','$2y$10$aAyhXLKF.BwUstquUHBi7.Lj9Zbv7iUXfBfDVM4VJDtjBGQbNrAQ.',0,0),(5,'Orli','Ryan','ORN','$2y$10$zJJgmAQYBl18XKvhhy1hg.TUPezSjzaKVxjjd1qxcd4UB8AG7bqHy',0,0),(6,'Kiayada','Stanley','KSY','$2y$10$8NGiiFMTRSFtDCAXVSPPAekPXQLyF4nBVDQOh2DR9161ykmsAwDei',0,0),(7,'Amaya','Vang','AVG','$2y$10$X0n6SXY9saZbwRq1DmeRludWmC3Qsa932UCUyAPAQ2hT9xrSwzU1a',0,0),(8,'Thane','Vaughan','TVN','$2y$10$rS2olHKZaTb7E.2H8w7bvuYMqFKJ9TDVOxxChN/DNFZkBWpQLldx.',0,0),(9,'Asher','Huff','AHF','$2y$10$zesdDjxZ1dU2HRSercgZj.CIxldRn6ej6cYoiJqq9s/IWesaa0MTO',0,0),(10,'Zenaida','Garrett','ZGT','$2y$10$fVt70g9hpczjQWOlCCw.runvKPaEm.0XjHYwmhERy/hcJBfD/.qGW',0,0),(11,'Yuli','Brewer','YBR','$2y$10$Gax.bJO4.n6rlJ11g6jr5OkFe54rtM2tPx17cOMYYmtCZ0JbxXHs2',0,0),(12,'Natalie','Floyd','NFD','$2y$10$.mZtDG33.MKqrNrANpsgle3GUKu989MrNkZn9W18PN9D34AsQONgS',0,0),(13,'Aquila','Alvarez','AAZ','$2y$10$V2w3HPSpvuK5W/.XVrxxgu/Zo78.nfWHwJj17wwYn1Vc1mj4hI0ae',0,0),(14,'Tamara','Kemp','TKP','$2y$10$98.FP/Z1H4mDlewrIeyMCeBdjrJFajfta6wRFzaKe8mXxu8bme1B.',0,0),(15,'Ariel','Watkins','AWS','$2y$10$okndE69OEIwdGuFn2rXi1eAjEwalK5GcztIyByYi6v2UJOABXn1J2',0,0),(16,'Adrienne','Cook','ACK','$2y$10$xJPb1dqZMsbApQygX4N0Ceap9l4.tO2f.PJ19GIMVCc5VYAiq3dJi',0,0),(17,'Josiah','Rivas','JRS','$2y$10$ZkJ.GSMgApv6pC/BJpMkpOpSOmBalQkj7/lWDgzjF/veunuH53riS',0,0),(18,'Reuben','Kramer','RKR','$2y$10$7ZA5tAYZ6G00BDtuunh9RuCIw0b/vXr8Kr8MlCVnowAD/XKFNwYwS',0,0),(19,'Raja','Ochoa','ROA','$2y$10$6W.hSCVJtZIeL3lDAexTT.9dlMyRz1HAqkjVQnnL3VJT2OG/VenOm',0,0),(20,'Jerome','Whitley','JWY','$2y$10$zF577gKAgzCeirBOs4NI5OV9Mnb5HG86Zeyu6burAk/Pj6EiB/nua',0,0),(21,'Hiroko','Ford','HFD','$2y$10$C5OazZJqbSQncLMS1hfXdOGAsh8o4amDemjgxiQUIIhWCGIvKlm1S',0,0),(22,'Carson','Rollins','CRS','$2y$10$ugjh4gA.f14pP2/5XKlYL.qJrX2o02NJLyjbsEdfDeea.o2nSELOK',0,0),(23,'Amena','Jensen','AJN','$2y$10$apLpXs7tmxnbk4DYCQJpJ.eq4hN00kqhU4f4p8nxUfgs9RlNY9UzC',0,0),(24,'Quail','Webb','QWB','$2y$10$4yD7ADiIB2BiFlKRCwYPI.vhGlsx4OXATe.NC8ZiU1eOZ8tZAnHCS',0,0),(25,'Malachi','Gamble','MGE','$2y$10$WbDps015Ae6kuG2g9mUkb.5L7Yume5SSNW/9Jwfzgkmo/W0adH6cy',0,0),(26,'Caleb','Kemp','CKP','$2y$10$diCZ3jwZO8Aq/gTGQG4W7u3juo.uHVMbJ8yVB9leB3I/0Hk1P8t4S',0,0),(27,'Kellie','Rosario','KRO','$2y$10$4ccAcqq5iJQ7VHvTYCiOJ.RNYlU5.ssk25VCCNfcgP/w36vZU0pPq',0,0),(28,'Rebekah','Hewitt','RHT','$2y$10$8PBDqlTWtjJWQrKnqZaKZu6tctBfAPSW2M4r7UX/MNTGT479pchSG',0,0),(29,'Silas','Roberts','SRS','$2y$10$bIb.z06hV8S7vz31IftUheYtyuhTLEB7gk7HD/BpR4ONwh1RuWCRO',0,0),(30,'Tarik','Fields','TFS','$2y$10$rAz/cCYEU9ncRfxoE5RMEODls.QURqDSAKEcZK8wKj9Huq.ugscwG',0,0),(31,'Shad','Perkins','SPS','$2y$10$/J3WpQ2rhylkmLDVrrv5E.RWCxHt5v.KyJWS6sChmNWR/CuqtYvSS',0,0),(32,'Jaquelyn','Juarez','JJZ','$2y$10$tBzN/a8PGkC.u4qaSxiwH.mySh7RQnVZytWW1KXPWrRj/fQsKZERe',0,0),(33,'Hyacinth','Schultz','HSZ','$2y$10$VM0DeS9eJ/qCmz4eimpzru/HdcYW8T9BNIrhLlpdEsFes/imEacsG',0,0),(34,'Shaine','Atkins','SAS','$2y$10$Lk9Xxhnw59cED/C8qClRM.2KmRfPxqt2YzXeAWoTh1/OLT1o5NIJu',0,0),(35,'Brian','Pickett','BPT','$2y$10$9CniI20tbwgqL7mQID8iYusEojR3l33.IhzhSa.iVOkkXDGJuscoK',0,0),(36,'Sara','Norris','SNS','$2y$10$2bJQYqfaJYe6LecT9CIdMueBt7N8RL/cDB96fF4BX6LxE74YbbP7W',0,0),(37,'Howard','Peterson','HPN','$2y$10$Yhiax67wIHUGrNMfmtg.nu9Os4ktRaSFQ5xIJw.C38W9LMNhFSj/6',0,0),(38,'Melinda','Mccall','MML','$2y$10$lZXRR8ltWU.VXO7zHOvluOgjHHc5Bf/iAWXlfaB25Jf.5veCS1.Mm',0,0),(39,'Kylie','Joseph','KJH','$2y$10$4A3L78s4mYdUKZjCS9x.1OkV1gTHWtDWng7oeaIJSV24IUknEWKtK',0,0),(40,'Ezra','Hayes','EHS','$2y$10$AMMXRhVryglam83PjAQGzuuitKzmoR1vfCMXVGwq2A5XvwRCv9Xwm',0,0),(41,'Shannon','Decker','SDR','$2y$10$.MCW1pgN2CQhgs2Zc/oZIOTkIjZL8tB9IS4H4l7W/Y6Hf9FBghSc.',0,0),(42,'Igor','Vega','IVA','$2y$10$3tuc6jovcwWA3QxCikAocOATPFBNa5Kg4zmj98oQcwOLEH1ejRGue',0,0),(43,'Ruth','Petersen','RPN','$2y$10$r0kJ/nLFyWZ.5VLVZdOP.e0393LaMXavtQWJodizy4tsVlefeCj6e',0,0),(44,'Zena','Price','ZPE','$2y$10$jY5G1cf5gs9IkkxgpoHhiOoukgQsYr9G626pn2Zf0nKTF/gegDSgy',0,0),(45,'George','Lambert','GLT','$2y$10$Ve0jcc9Gsmb2SvPHQWyrMuobbmyikhOR8q/Vp5FpgRI221mj7OvDK',0,0),(46,'Anthony','Cote','ACE','$2y$10$AOyGWTUNiKl84njr/P4IOOM0vefIDhnyDkh6VYA1vIE9Q3fNrl03W',0,0),(47,'Lee','Wilkerson','LWN','$2y$10$o83FB/TI.65v7WUdam0DLe.5.JoqMcAZ6ogsAyGdhHOyruTpf7bMC',0,0),(48,'Ishmael','Martin','IMN','$2y$10$gIvlJ5ibB2hnesbRlPt8qOVzPp3U5P/P6lkoTAfCj7P8avXrFZT6G',0,0),(49,'Wallace','Frye','WFE','$2y$10$xSmdd2pBFk5gwszEpewFsOduaAFzLGuhob2jh2zYyEFAm/kmYpjnm',0,0),(50,'Gillian','Alvarado','GAO','$2y$10$PmmkiJujHW0H8e8Sh.ok.ueQEjI5UcILFhiuBhvuExePVgcY/02K6',0,0),(51,'Simone','Schmidt','SST','$2y$10$MDC2/q8B6eL8np7Wph6L4u9S6ypDZOPPIpY8Q0hNfzzXTyuRHSzbS',0,0),(52,'Evangeline','Richmond','ERD','$2y$10$cwRlr6QRuIEEbJlTQsRJA.oHmRl6v0B67dDaHJZhsAuAIYrEbRd5e',0,0),(53,'Maia','Kidd','MKD','$2y$10$uWny/AdVGGEev18Qc4wp3u9LMvxq23qB5p4G4UeAP6oFCeZHFVkt.',0,0),(54,'Cyrus','Hayden','CHN','$2y$10$4wBfMr4mA3DMta4NvWzyjusVXQpyJPD5bF19ItcDCu6lX8HAYKZDO',0,0),(55,'Irene','Fry','IFY','$2y$10$IeKe1uGU5tSB6WU.5frSZOkF/6PMiUEwC8wZr3baS4XxdE5GtiUOa',0,0),(56,'Josephine','Mullins','JMS','$2y$10$0Z2byOZ.sSgq.Kjy7EuQnOmp1BW63B2AaQjDhAhKP4uJSRbhBL4xG',0,0),(57,'Dakota','Landry','DLY','$2y$10$BqF60sdanDURxwAWCGUGU.ppM0/A0mCN/n1d4CNdUo4OEJPmKmaHK',0,0),(58,'Emily','Estrada','EEA','$2y$10$oIyjrg8L2rvSfdjxGyvGuehCm41hQwjrMuBVdoHiRRKwF.1ZpTbNy',0,0),(59,'Lucy','Mejia','LMA','$2y$10$PsZs9oR66G9OnC568T2PIeN57kvoK2F0/jac/o2OYt9g.ZvNiFze2',0,0),(60,'Flavia','Buck','FBK','$2y$10$uUe5BMbt/MGmHXsdDZp.eeoNCVF8Kprsj0JTcgJRMiv5OPLb8J22q',0,0),(61,'Shana','Malone','SME','$2y$10$w/7IWLmMWuXArrry4sIVy.c3ZHB5B4X4hFCkNCRmQloxPJihWJARa',0,0),(62,'Logan','Ramirez','LRZ','$2y$10$WLt9neBd.mZ/RcGk.vNd9OBhWOLswhw43Pfpq3bO45SH3mUq6ngjy',0,0),(63,'Louis','Ellison','LEN','$2y$10$Hd7N0l0yCfpdKVl9/ndF6.bGruh60lELizQxIRuU7M.S./GJY735.',0,0),(64,'Oleg','Cole','OCE','$2y$10$0/9a7fIEtfgNCotN.5PJIeKC6af5ZLC7UUNlyjP/NLfSd0dLIqhjS',0,0),(65,'MacKensie','Wiley','MWY','$2y$10$oVK0cjHwcK2BZfVnWhm3KuFa5gcMs1EXUm.FxncQBxNjG1P8f8CI.',0,0),(66,'Jamalia','Gilmore','JGE','$2y$10$ct3jE.rXkDHZGP7eoShtBOa2gWXsvI10ardwxYf9.k2zJx34aTMJG',0,0),(67,'Isaac','Steele','ISE','$2y$10$xg2Ppt7.EEPVAZDLqOa71uPJ.KLKkL7M7Nm/a.WNVm17HAjgd934y',0,0),(68,'Gisela','Fuentes','GFS','$2y$10$qllmd1Q9e5GbjWNHaHZVeeRgoaL0azMvWYk07mXMNYRwfNgp1TXSm',0,0),(69,'Ora','Fleming','OFG','$2y$10$Pueqezp5qHchKktAgzgDW.3cUeC/KLTaUy3aOGV8.EKA4EHT1bthS',0,0),(70,'Raphael','Nolan','RNN','$2y$10$O71mq3TU3xsvjLoKkJfV5eTzRgKePxW1I2Nye6igz8YUpy6HlPOqS',0,0),(71,'Emerald','Pena','EPA','$2y$10$vkdLj5K.DnqgntQjNWNlH.SLvNUyUdCRd3cwVdn7zwXg3jJnTvGp.',0,0),(72,'Ingrid','Knapp','IKP','$2y$10$I2QindeSBOedfNqMYDlaHOo91VKtvr.7CVKbHMstKFAoUIsXv.DLy',0,0),(73,'Gannon','Parsons','GPS','$2y$10$5ej6DaoQiBn6oAh8/Ezn2.V4pwMz4Oz7bgE5iy78OKdMnmz3GeYHC',0,0),(74,'Amena','Rios','ARS','$2y$10$HomJ6ZpRKwTiUIPY7Gifz.CxMRFYmDl3cqts2UQ/XaZDJ3WEX3Efe',0,0),(75,'Phillip','Herrera','PHA','$2y$10$ZtEpf5kvx0eyHoz0BRMV1.TN72S4JUQQfpDFakkgzOl512qwo.64i',0,0),(76,'Hyatt','Bell','HBL','$2y$10$7LB032sREOZmRbubJCy70epgJvTQbkf.e4T6CWA1eXKedenuoiRba',0,0),(77,'Audrey','Bishop','ABP','$2y$10$jbXZB8oa9JBF/vUEIY6NDuwdB6fX47kRZfxj86xAt6dQftR73bWWW',0,0),(78,'Amir','Ray','ARY','$2y$10$J7sJunAq7vR2OVTGA9b1RuuGFf8qnk0CnlP70XLq/7DD7FD4IVY2K',0,0),(79,'Michael','Watts','MWS','$2y$10$70eiBh8vxQGO59/0nEJFRurvK.Ne2epUOyeL7F7om5T27ECMYenlO',0,0),(80,'Shana','Holden','SHN','$2y$10$GUlDcl/kq/7itHRlBfWgxun0FjVZdvfB.2wYMoOXep7lsnJCkfEVi',0,0),(81,'Hayley','Howard','HHD','$2y$10$.Er4j/LDWv2qAkgj.b.fVutkekABlI9iNRxFdwldVaBsd3fM6DJ3a',0,0),(82,'Leonard','Tanner','LTR','$2y$10$dJ2z/T9T0j4m7.ax814aGOZFAiLbsh5A9705rx.SLykv08pn2cPZm',0,0),(83,'Basia','Mcclain','BMN','$2y$10$uqCwuAsX1R5o8/fHV1aXa.77K.9trAaJXfAMK/xnYtGgwZnfsLHgq',0,0),(84,'Fiona','Silva','FSA','$2y$10$16CeTrB5J1TSxhJXrzBbFOxo1.i2j0kkU5DUIizhlzGEj93dpiNJu',0,0),(85,'Plato','Forbes','PFS','$2y$10$mh5Vnfi9ZtA0ISk2Q2LuWOmsy8lpRi5PpS.sqDBivSqWv5Kq7FWT6',0,0),(86,'Hilda','Carver','HCR','$2y$10$3ADilSGNdcoafPCd8kYxh.myumWkGCXUBfMbR02QN3rfbuLsOqKNe',0,0),(87,'Irene','Levy','ILY','$2y$10$LTu4a6cBNL4sbDna4xuncOl6jkzwzSlT8z09WH8Gjp0Rnq/VhKUQG',0,0),(88,'Odysseus','Hopper','OHR','$2y$10$ySIidTKWJZiZolsd..STUOjXr1q5T5/NDtwQHLftySwksawt.WqEO',0,0),(89,'Libby','Burch','LBH','$2y$10$T3CynQist.JfbUrs1Rh4ReRAi6li.FacyK.pnAJDi0YdwUWJm7b2W',0,0),(90,'Ayanna','Cherry','ACY','$2y$10$O.pyKVmxlC3wFl5C3pQQYuFjDlmtk4wqSSeh0lk.yqOlbTiKHJ2t.',0,0),(91,'Lysandra','Ayers','LAS','$2y$10$347ai2zEPutummxdjy3aeOUXRq842EYnQUnj3D1kWDu.vj1.2DlSO',0,0),(92,'Wendy','Rush','WRH','$2y$10$k1vzA4ilxwFsMxe1G6HEuOcKLEHzsL7hmv8i0aRUDv1fQ6cvicp7u',0,0),(93,'Alvin','Shepard','ASD','$2y$10$EvRocvnFg5h.VpJuY2hZUeeUuT1dsjrfEHms1fw.XL99GYVszSzyO',0,0),(94,'Donovan','Larsen','DLN','$2y$10$9XI9uBVilONg8TevtysPVOG70hDyXN6MlBS7joUOmt.m7D3ukcw9u',0,0),(95,'Levi','Weber','LWR','$2y$10$QaYKqtIf6kpzRgyWN1IFB.a9mMFusyv1Nh5te4GXud7vqf2A.UgD2',0,0),(96,'Hayley','Santiago','HSO','$2y$10$lc/eUy5NxNt/DQZ.8aQuDeNTcW.nhYixf/TXzokc7v5Q4GOGSe1Fm',0,0),(97,'Leslie','Beard','LBD','$2y$10$.3XluT3N0y01rqyePDuX0u/.ziugp4sK9l4WP/DotISsmPgDSDBlG',0,0),(98,'Raya','Case','RCE','$2y$10$.KuVnnQQlBUwFR80LNNuueExPomsqXN2HrqBK0Me4qjpW0UZg7WKS',0,0),(99,'Charles','Delgado','CDO','$2y$10$sOSeVa9dTrAxMZiRZb5heOU5V/.7u9rgNvvK4aaD7TsHOVq0/Rkje',0,0),(100,'Michelle','Cash','MCH','$2y$10$i0cgyQlhtTl4Gp1eHX1GK.37umWwI9mqWsXHqTQLjFWIyt5e7J6nS',0,0),(101,'Antonio','Casaburi','ACI','$2y$10$glQgNSUGFJTKMK8vCLZK2OqPrbktyjXlHSca2zN7k.gM4ZWZ9l39y',0,0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-14 15:31:27
