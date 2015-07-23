-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: greencommerce
-- ------------------------------------------------------
-- Server version	5.5.41-log

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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `image_1` blob,
  `image_2` blob,
  `image_3` blob,
  `short_description` varchar(255) DEFAULT NULL,
  `live` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=279 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Blue Dream',NULL,NULL,NULL,'get littttt',1),(2,'Pineapple Express',NULL,NULL,NULL,'straight fire',1),(4,'Blue Mystic',NULL,NULL,NULL,'Blueberyy Yum Yum is a hybrid strain whose popularity was ushered...',1),(5,'Blue Diesel',NULL,NULL,NULL,'Blue God, bred by Jordan of the Islands in Canada, is a powerful...',1),(6,'Blue Afghani',NULL,NULL,NULL,'Purple Trainwreck is a true powerhouse that combines Grandaddy Purple with Trainwreck.',1),(7,'Blue Ivy',NULL,NULL,NULL,NULL,NULL),(8,'Blue Velvet',NULL,NULL,NULL,NULL,NULL),(9,'Blue Knight',NULL,NULL,NULL,NULL,NULL),(10,'Blueberry Headband',NULL,NULL,NULL,NULL,NULL),(11,'Blue Train',NULL,NULL,NULL,NULL,NULL),(12,'Blue Wreck',NULL,NULL,NULL,NULL,NULL),(13,'Blue Hash',NULL,NULL,NULL,NULL,NULL),(14,'Blue Alien',NULL,NULL,NULL,NULL,NULL),(15,'Blue Cookies',NULL,NULL,NULL,NULL,NULL),(16,'Blueberry',NULL,NULL,NULL,NULL,NULL),(17,'Blueberry Yum Yum',NULL,NULL,NULL,NULL,NULL),(18,'Blueberry Cheesecake',NULL,NULL,NULL,NULL,NULL),(19,'Blue Heron',NULL,NULL,NULL,NULL,NULL),(20,'Blues',NULL,NULL,NULL,NULL,NULL),(21,'Blue Diamond',NULL,NULL,NULL,NULL,NULL),(22,'Blue Kripple',NULL,NULL,NULL,NULL,NULL),(23,'Blue Dragon',NULL,NULL,NULL,NULL,NULL),(24,'Blue Crack',NULL,NULL,NULL,NULL,NULL),(25,'Blue Magoo',NULL,NULL,NULL,NULL,NULL),(26,'Disney Blue',NULL,NULL,NULL,NULL,NULL),(27,'Blue Monster',NULL,NULL,NULL,NULL,NULL),(28,'Blue Kush',NULL,NULL,NULL,NULL,NULL),(30,'Blue OG',NULL,NULL,NULL,NULL,NULL),(31,'Blue Goo',NULL,NULL,NULL,NULL,NULL),(32,'Blue Lights',NULL,NULL,NULL,NULL,NULL),(33,'Alpine Blue',NULL,NULL,NULL,NULL,NULL),(34,'Blue Magic',NULL,NULL,NULL,NULL,NULL),(35,'Blue God',NULL,NULL,NULL,NULL,NULL),(36,'Blue Persuasion',NULL,NULL,NULL,NULL,NULL),(37,'Alpha Blue',NULL,NULL,NULL,NULL,NULL),(38,'Blue Satellite',NULL,NULL,NULL,NULL,NULL),(39,'Blue Blood',NULL,NULL,NULL,NULL,NULL),(40,'Strawberry Blue',NULL,NULL,NULL,NULL,NULL),(41,'Blue Moonshine',NULL,NULL,NULL,NULL,NULL),(42,'Blue Hawaiian',NULL,NULL,NULL,NULL,NULL),(43,'Blue Cheese',NULL,NULL,NULL,NULL,NULL),(44,'Blue Frost',NULL,NULL,NULL,NULL,NULL),(45,'Blue Rhino',NULL,NULL,NULL,NULL,NULL),(46,'Blue Bayou',NULL,NULL,NULL,NULL,NULL),(47,'Blue Boy',NULL,NULL,NULL,NULL,NULL),(48,'Seattle Blue',NULL,NULL,NULL,NULL,NULL),(49,'Blue Widow',NULL,NULL,NULL,NULL,NULL),(50,'Blue Bastard',NULL,NULL,NULL,NULL,NULL),(51,'Blue Dynamite',NULL,NULL,NULL,NULL,NULL),(52,'Blue Dot',NULL,NULL,NULL,NULL,NULL),(53,'Blue Haze',NULL,NULL,NULL,NULL,NULL),(54,'Crimea Blue',NULL,NULL,NULL,NULL,NULL),(55,'Blue Venom',NULL,NULL,NULL,NULL,NULL),(56,'Blueberry Skunk',NULL,NULL,NULL,NULL,NULL),(57,'Blueberry Lambsbread',NULL,NULL,NULL,NULL,NULL),(58,'Blue Moon Rocks',NULL,NULL,NULL,NULL,NULL),(59,'Super Blue Dream',NULL,NULL,NULL,NULL,NULL),(60,'Bhang Seattle Blue',NULL,NULL,NULL,NULL,NULL),(61,'Bhang Blue Diesel',NULL,NULL,NULL,NULL,NULL),(62,'Sour Diesel',NULL,NULL,NULL,NULL,NULL),(63,'OG Kush',NULL,NULL,NULL,NULL,NULL),(64,'Green Crack',NULL,NULL,NULL,NULL,NULL),(65,'Girl Scout Cookies',NULL,NULL,NULL,NULL,NULL),(66,'Granddaddy Purple',NULL,NULL,NULL,NULL,NULL),(67,'White Widow',NULL,NULL,NULL,NULL,NULL),(68,'Jack Herer',NULL,NULL,NULL,NULL,NULL),(69,'Bubba Kush',NULL,NULL,NULL,NULL,NULL),(70,'AK-47',NULL,NULL,NULL,NULL,NULL),(71,'Trainwreck',NULL,NULL,NULL,NULL,NULL),(72,'Northern Lights',NULL,NULL,NULL,NULL,NULL),(73,'Blue Cheese',NULL,NULL,NULL,NULL,NULL),(74,'Headband',NULL,NULL,NULL,NULL,NULL),(75,'Pineapple Express',NULL,NULL,NULL,NULL,NULL),(76,'Purple Kush',NULL,NULL,NULL,NULL,NULL),(77,'Alaskan Thunder Fuck',NULL,NULL,NULL,NULL,NULL),(78,'Chemdawg',NULL,NULL,NULL,NULL,NULL),(79,'Durban Poison',NULL,NULL,NULL,NULL,NULL),(80,'Super Silver Haze',NULL,NULL,NULL,NULL,NULL),(81,'Lemon Haze',NULL,NULL,NULL,NULL,NULL),(82,'Blackberry Kush',NULL,NULL,NULL,NULL,NULL),(83,'Strawberry Cough',NULL,NULL,NULL,NULL,NULL),(84,'Grape Ape',NULL,NULL,NULL,NULL,NULL),(85,'Cheese',NULL,NULL,NULL,NULL,NULL),(86,'Master Kush',NULL,NULL,NULL,NULL,NULL),(87,'Super Lemon Haze',NULL,NULL,NULL,NULL,NULL),(88,'Afghan Kush',NULL,NULL,NULL,NULL,NULL),(89,'Maui Waui',NULL,NULL,NULL,NULL,NULL),(90,'White Rhino',NULL,NULL,NULL,NULL,NULL),(91,'LA Confidential',NULL,NULL,NULL,NULL,NULL),(92,'Chocolope',NULL,NULL,NULL,NULL,NULL),(93,'Cherry Pie',NULL,NULL,NULL,NULL,NULL),(94,'Amnesia Haze',NULL,NULL,NULL,NULL,NULL),(95,'Skywalker',NULL,NULL,NULL,NULL,NULL),(96,'Purple Urkle',NULL,NULL,NULL,NULL,NULL),(97,'God\'s Gift',NULL,NULL,NULL,NULL,NULL),(98,'Lemon Kush',NULL,NULL,NULL,NULL,NULL),(99,'G13',NULL,NULL,NULL,NULL,NULL),(100,'Purple Haze',NULL,NULL,NULL,NULL,NULL),(101,'Skywalker OG',NULL,NULL,NULL,NULL,NULL),(102,'Death Star',NULL,NULL,NULL,NULL,NULL),(103,'Bubble Gum',NULL,NULL,NULL,NULL,NULL),(104,'$100 OG',NULL,NULL,NULL,NULL,NULL),(105,'Tahoe OG Kush',NULL,NULL,NULL,NULL,NULL),(106,'NYC Diesel',NULL,NULL,NULL,NULL,NULL),(107,'Mango Kush',NULL,NULL,NULL,NULL,NULL),(108,'Hindu Kush',NULL,NULL,NULL,NULL,NULL),(109,'Cinderella 99',NULL,NULL,NULL,NULL,NULL),(110,'Agent Orange',NULL,NULL,NULL,NULL,NULL),(111,'Banana Kush',NULL,NULL,NULL,NULL,NULL),(112,'Romulan',NULL,NULL,NULL,NULL,NULL),(113,'Dutch Treat',NULL,NULL,NULL,NULL,NULL),(114,'Golden Goat',NULL,NULL,NULL,NULL,NULL),(115,'Mr. Nice',NULL,NULL,NULL,NULL,NULL),(116,'Fire OG',NULL,NULL,NULL,NULL,NULL),(117,'Harlequin',NULL,NULL,NULL,NULL,NULL),(118,'Afgoo',NULL,NULL,NULL,NULL,NULL),(119,'Lamb\'s Bread',NULL,NULL,NULL,NULL,NULL),(120,'Cotton Candy Kush',NULL,NULL,NULL,NULL,NULL),(121,'Berry White',NULL,NULL,NULL,NULL,NULL),(122,'LSD',NULL,NULL,NULL,NULL,NULL),(123,'Tangerine Dream',NULL,NULL,NULL,NULL,NULL),(124,'Gorilla Glue #4',NULL,NULL,NULL,NULL,NULL),(125,'Orange Kush',NULL,NULL,NULL,NULL,NULL),(126,'Silver Haze',NULL,NULL,NULL,NULL,NULL),(127,'Pineapple Kush',NULL,NULL,NULL,NULL,NULL),(128,'Lemon Skunk',NULL,NULL,NULL,NULL,NULL),(129,'XJ-13',NULL,NULL,NULL,NULL,NULL),(130,'Lavendar',NULL,NULL,NULL,NULL,NULL),(131,'Island Sweet Skunk',NULL,NULL,NULL,NULL,NULL),(132,'White Russian',NULL,NULL,NULL,NULL,NULL),(133,'Purple Diesel',NULL,NULL,NULL,NULL,NULL),(134,'Sensi Star',NULL,NULL,NULL,NULL,NULL),(135,'Chernobyl',NULL,NULL,NULL,NULL,NULL),(136,'Jilybean',NULL,NULL,NULL,NULL,NULL),(137,'Cinex',NULL,NULL,NULL,NULL,NULL),(138,'Juicy Fruit',NULL,NULL,NULL,NULL,NULL),(139,'Platinum Girl Scout Cookies',NULL,NULL,NULL,NULL,NULL),(140,'Blackberry',NULL,NULL,NULL,NULL,NULL),(141,'Snowcap',NULL,NULL,NULL,NULL,NULL),(142,'Sour OG',NULL,NULL,NULL,NULL,NULL),(143,'Alien OG',NULL,NULL,NULL,NULL,NULL),(144,'Sweet Tooth',NULL,NULL,NULL,NULL,NULL),(145,'Platinum OG',NULL,NULL,NULL,NULL,NULL),(146,'Fruity Pebbles',NULL,NULL,NULL,NULL,NULL),(147,'Cannaatonic',NULL,NULL,NULL,NULL,NULL),(148,'Purple Trainwreck',NULL,NULL,NULL,NULL,NULL),(149,'Casey Jones',NULL,NULL,NULL,NULL,NULL),(150,'Platinum Kush',NULL,NULL,NULL,NULL,NULL),(151,'Larry OG',NULL,NULL,NULL,NULL,NULL),(152,'Sour Kush',NULL,NULL,NULL,NULL,NULL),(153,'Flo',NULL,NULL,NULL,NULL,NULL),(154,'Critical Mass',NULL,NULL,NULL,NULL,NULL),(155,'Pineapple',NULL,NULL,NULL,NULL,NULL),(156,'Mango',NULL,NULL,NULL,NULL,NULL),(157,'Kosher Kush',NULL,NULL,NULL,NULL,NULL),(158,'Kandy Kush',NULL,NULL,NULL,NULL,NULL),(159,'UK Cheese',NULL,NULL,NULL,NULL,NULL),(160,'Grapefruit',NULL,NULL,NULL,NULL,NULL),(161,'Skunk #1',NULL,NULL,NULL,NULL,NULL),(162,'Lemon Diesel',NULL,NULL,NULL,NULL,NULL),(163,'Bruce Banner',NULL,NULL,NULL,NULL,NULL),(164,'J1',NULL,NULL,NULL,NULL,NULL),(165,'Super Skunk',NULL,NULL,NULL,NULL,NULL),(166,'Super Sour Diesel',NULL,NULL,NULL,NULL,NULL),(167,'Deadhead OG',NULL,NULL,NULL,NULL,NULL),(168,'Permafrost',NULL,NULL,NULL,NULL,NULL),(169,'Orange Crush',NULL,NULL,NULL,NULL,NULL),(170,'Space Queen',NULL,NULL,NULL,NULL,NULL),(171,'Jack The Ripper',NULL,NULL,NULL,NULL,NULL),(172,'White Fire OG',NULL,NULL,NULL,NULL,NULL),(173,'Obama Kush',NULL,NULL,NULL,NULL,NULL),(174,'Afghani',NULL,NULL,NULL,NULL,NULL),(175,'Vanilla Kush',NULL,NULL,NULL,NULL,NULL),(176,'Holy Grail Kush',NULL,NULL,NULL,NULL,NULL),(177,'Blue Widow',NULL,NULL,NULL,NULL,NULL),(178,'Jack Frost',NULL,NULL,NULL,NULL,NULL),(179,'Thin Mint Girl Scout Cookies',NULL,NULL,NULL,NULL,NULL),(180,'Pre-98 Bubba Kush',NULL,NULL,NULL,NULL,NULL),(181,'MK Ultra',NULL,NULL,NULL,NULL,NULL),(182,'Moby Dick',NULL,NULL,NULL,NULL,NULL),(183,'Animal Cookies',NULL,NULL,NULL,NULL,NULL),(184,'Amnesia',NULL,NULL,NULL,NULL,NULL),(185,'Haze',NULL,NULL,NULL,NULL,NULL),(186,'Acapulco Gold',NULL,NULL,NULL,NULL,NULL),(187,'Strawberry Kush',NULL,NULL,NULL,NULL,NULL),(188,'Platinum Bubba Kush',NULL,NULL,NULL,NULL,NULL),(189,'King Lous XIII',NULL,NULL,NULL,NULL,NULL),(190,'Herijuana',NULL,NULL,NULL,NULL,NULL),(191,'Cherry Kush',NULL,NULL,NULL,NULL,NULL),(192,'Ghost Train Haze',NULL,NULL,NULL,NULL,NULL),(193,'God Bud',NULL,NULL,NULL,NULL,NULL),(194,'Great White Shark',NULL,NULL,NULL,NULL,NULL),(195,'707 Headband',NULL,NULL,NULL,NULL,NULL),(196,'Ogre',NULL,NULL,NULL,NULL,NULL),(197,'Pure Kush',NULL,NULL,NULL,NULL,NULL),(198,'Grape God',NULL,NULL,NULL,NULL,NULL),(199,'SAGE',NULL,NULL,NULL,NULL,NULL),(200,'Pink Kush',NULL,NULL,NULL,NULL,NULL),(201,'Cat Piss',NULL,NULL,NULL,NULL,NULL),(202,'King\'s Kush',NULL,NULL,NULL,NULL,NULL),(203,'Rasberry Kush',NULL,NULL,NULL,NULL,NULL),(204,'Kali Mist',NULL,NULL,NULL,NULL,NULL),(205,'Kryptonite',NULL,NULL,NULL,NULL,NULL),(206,'Big Bud',NULL,NULL,NULL,NULL,NULL),(207,'Vortex',NULL,NULL,NULL,NULL,NULL),(208,'Power Plant',NULL,NULL,NULL,NULL,NULL),(209,'Purple OG Kush',NULL,NULL,NULL,NULL,NULL),(210,'Chemdawg 4',NULL,NULL,NULL,NULL,NULL),(211,'Red Dragon',NULL,NULL,NULL,NULL,NULL),(212,'Ice',NULL,NULL,NULL,NULL,NULL),(213,'Big Buddha Cheese',NULL,NULL,NULL,NULL,NULL),(214,'Critical Kush',NULL,NULL,NULL,NULL,NULL),(215,'Candyland',NULL,NULL,NULL,NULL,NULL),(216,'Khalifa Kush',NULL,NULL,NULL,NULL,NULL),(217,'California Orange',NULL,NULL,NULL,NULL,NULL),(218,'Blueberry Diesel',NULL,NULL,NULL,NULL,NULL),(219,'Lemon OG Kush',NULL,NULL,NULL,NULL,NULL),(220,'True OG',NULL,NULL,NULL,NULL,NULL),(221,'Ace of Spades',NULL,NULL,NULL,NULL,NULL),(222,'Ghost OG',NULL,NULL,NULL,NULL,NULL),(223,'A-10',NULL,NULL,NULL,NULL,NULL),(224,'Blackwater',NULL,NULL,NULL,NULL,NULL),(225,'Purple Sour Diesel',NULL,NULL,NULL,NULL,NULL),(226,'Strawberry Diesel',NULL,NULL,NULL,NULL,NULL),(227,'Black Domina',NULL,NULL,NULL,NULL,NULL),(228,'Mendocino Purps',NULL,NULL,NULL,NULL,NULL),(229,'Diamond OG',NULL,NULL,NULL,NULL,NULL),(230,'Querkle',NULL,NULL,NULL,NULL,NULL),(231,'Shishkaberry',NULL,NULL,NULL,NULL,NULL),(232,'Black Widow',NULL,NULL,NULL,NULL,NULL),(233,'Cheese Quake',NULL,NULL,NULL,NULL,NULL),(234,'Pure Power Plant',NULL,NULL,NULL,NULL,NULL),(235,'Diablo',NULL,NULL,NULL,NULL,NULL),(236,'Dream Queen',NULL,NULL,NULL,NULL,NULL),(237,'Jean Guy',NULL,NULL,NULL,NULL,NULL),(238,'Presidential OG',NULL,NULL,NULL,NULL,NULL),(239,'Tangie',NULL,NULL,NULL,NULL,NULL),(240,'Jack Flash',NULL,NULL,NULL,NULL,NULL),(241,'Banana Og',NULL,NULL,NULL,NULL,NULL),(242,'The White',NULL,NULL,NULL,NULL,NULL),(243,'Fucking Incredible',NULL,NULL,NULL,NULL,NULL),(244,'Orange Bud',NULL,NULL,NULL,NULL,NULL),(245,'Nebula',NULL,NULL,NULL,NULL,NULL),(246,'Dj Short Blueberry',NULL,NULL,NULL,NULL,NULL),(247,'Willy\'s WOnder',NULL,NULL,NULL,NULL,NULL),(248,'Cannalope Haze',NULL,NULL,NULL,NULL,NULL),(249,'Chocolate Kush',NULL,NULL,NULL,NULL,NULL),(250,'3 Kings',NULL,NULL,NULL,NULL,NULL),(251,'Afghooey',NULL,NULL,NULL,NULL,NULL),(252,'Afgooey',NULL,NULL,NULL,NULL,NULL),(253,'ACDC',NULL,NULL,NULL,NULL,NULL),(254,'Sage N Sour',NULL,NULL,NULL,NULL,NULL),(255,'Purple Dream',NULL,NULL,NULL,NULL,NULL),(256,'Trinity',NULL,NULL,NULL,NULL,NULL),(257,'M-39',NULL,NULL,NULL,NULL,NULL),(258,'Black Diamond',NULL,NULL,NULL,NULL,NULL),(259,'Hawaiian Snow',NULL,NULL,NULL,NULL,NULL),(260,'Candy Jack',NULL,NULL,NULL,NULL,NULL),(261,'Bubba OG',NULL,NULL,NULL,NULL,NULL),(262,'Sunset Sherbet',NULL,NULL,NULL,NULL,NULL),(263,'Yoda OG',NULL,NULL,NULL,NULL,NULL),(264,'White Berry',NULL,NULL,NULL,NULL,NULL),(265,'Pineapple Trainwreck',NULL,NULL,NULL,NULL,NULL),(266,'Cali Kush',NULL,NULL,NULL,NULL,NULL),(267,'Green Queen',NULL,NULL,NULL,NULL,NULL),(269,'Bubblegum Kush',NULL,NULL,NULL,NULL,NULL),(270,'Pot Of Gold',NULL,NULL,NULL,NULL,NULL),(271,'Plush Berry',NULL,NULL,NULL,NULL,NULL),(272,'Grapefruit Kush',NULL,NULL,NULL,NULL,NULL),(273,'Tangerine Kush',NULL,NULL,NULL,NULL,NULL),(274,'Pineapple Chunk',NULL,NULL,NULL,NULL,NULL),(275,'Green Ribbon',NULL,NULL,NULL,NULL,NULL),(276,'G13 Haze',NULL,NULL,NULL,NULL,NULL),(277,'AK-48',NULL,NULL,NULL,NULL,NULL),(278,'Stella Blue',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-23 12:12:14
