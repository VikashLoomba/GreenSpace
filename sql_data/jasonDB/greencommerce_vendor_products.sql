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
-- Table structure for table `vendor_products`
--

DROP TABLE IF EXISTS `vendor_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendor_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stock` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `price_gm` float DEFAULT NULL,
  `product_rating` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_vendor_products_products1_idx` (`product_id`),
  KEY `fk_vendor_products_vendors1_idx` (`vendor_id`),
  CONSTRAINT `fk_vendor_products_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_vendor_products_vendors1` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendor_products`
--

LOCK TABLES `vendor_products` WRITE;
/*!40000 ALTER TABLE `vendor_products` DISABLE KEYS */;
INSERT INTO `vendor_products` VALUES (27,300,1,1,'grams',10,NULL),(28,300,1,1,'eighth',9,NULL),(29,300,1,1,'quarter',7,NULL),(30,300,1,1,'half-ounce',6,NULL),(31,300,1,1,'ounce',5,NULL),(32,500,2,1,'grams',22,NULL),(43,500,2,1,'eighth',15,NULL),(44,500,2,1,'quarter',14,NULL),(45,500,2,1,'half-ounce',12,NULL),(46,500,2,1,'ounce',10,NULL),(52,100,4,1,'grams',900,NULL),(53,100,4,1,'eighth',800,NULL),(54,100,4,1,'quarter',700,NULL),(55,100,4,1,'half-ounce',600,NULL),(56,100,4,1,'ounce',500,NULL),(57,300,5,1,'gram',20,NULL),(58,300,5,1,'eigth',17,NULL),(59,300,5,1,'quarter',15,NULL),(60,300,5,1,'half-ounce',13,NULL),(61,300,5,1,'ounce',12,NULL),(62,200,6,1,'gram',1000,NULL),(63,200,6,1,'eigth',900,NULL),(64,200,6,1,'quarter',800,NULL),(65,200,6,1,'half-ounce',700,NULL),(66,200,6,1,'ounce',600,NULL);
/*!40000 ALTER TABLE `vendor_products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-23 12:04:11
