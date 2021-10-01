-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: assist
-- ------------------------------------------------------
-- Server version	5.7.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'Samsung','Samsung Galaxy 10',152.00,'./assets/products/1.png','2020-03-28 11:08:57'),(2,'Redmi','Redmi Note 7',122.00,'./assets/products/2.png','2020-03-28 11:08:57'),(3,'Redmi','Redmi Note 6',122.00,'./assets/products/3.png','2020-03-28 11:08:57'),(4,'Redmi','Redmi Note 5',122.00,'./assets/products/4.png','2020-03-28 11:08:57'),(5,'Redmi','Redmi Note 4',122.00,'./assets/products/5.png','2020-03-28 11:08:57'),(6,'Redmi','Redmi Note 8',122.00,'./assets/products/6.png','2020-03-28 11:08:57'),(7,'Redmi','Redmi Note 9',122.00,'./assets/products/8.png','2020-03-28 11:08:57'),(8,'Redmi','Redmi Note',122.00,'./assets/products/10.png','2020-03-28 11:08:57'),(9,'Samsung','Samsung Galaxy S6',152.00,'./assets/products/11.png','2020-03-28 11:08:57'),(10,'Samsung','Samsung Galaxy S7',152.00,'./assets/products/12.png','2020-03-28 11:08:57'),(11,'Apple','Apple iPhone 5',152.00,'./assets/products/13.png','2020-03-28 11:08:57'),(12,'Apple','Apple iPhone 6',152.00,'./assets/products/14.png','2020-03-28 11:08:57'),(13,'Apple','Apple iPhone 7',152.00,'./assets/products/15.png','2020-03-28 11:08:57');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-01 12:54:55
