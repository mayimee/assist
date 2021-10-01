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
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(80) NOT NULL,
  `middle_name` varchar(80) NOT NULL,
  `last_name` varchar(80) NOT NULL,
  `birthday` date NOT NULL,
  `contact_number` varchar(45) NOT NULL,
  `email_address` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (1,'test','test','test','2021-09-04','1234567890','test@test.com','test','2021-09-21 14:17:12','2021-09-21 14:17:12'),(2,'test','test','test','2021-09-04','1234567890','test@test.com','test','2021-09-21 14:17:23','2021-09-21 14:17:23'),(3,'test1','test1','test1','2021-09-01','987654321','test@123.com','12345','2021-09-21 14:21:20','2021-09-21 14:21:20'),(4,'test','test','test','2021-09-04','1234567890','test@test.com','test','2021-09-21 14:21:36','2021-09-21 14:21:36'),(5,'test123','test123','test123','2021-09-01','987654321','test12@123.com','test123','2021-09-21 14:22:29','2021-09-21 14:22:29'),(6,'test','test','test','2021-09-04','1234567890','test@test.com','test','2021-09-22 11:28:18','2021-09-22 11:28:18'),(7,'test','test','test','2021-09-04','1234567890','test@test.com','test','2021-09-22 11:42:38','2021-09-22 11:42:38'),(8,'test','test','test','2021-09-04','1234567890','test@test.com','test','2021-09-22 16:12:49','2021-09-22 16:12:49'),(9,'test','test','test','2021-09-04','1234567890','test@test.com','test','2021-09-22 16:15:36','2021-09-22 16:15:36'),(10,'test','test','test','2021-09-04','1234567890','test@test.com','test','2021-09-22 23:23:29','2021-09-22 23:23:29'),(11,'first','middle','last','2011-06-23','123456789','email@email.com','12345','2021-09-23 16:34:09','2021-09-23 16:34:09'),(12,'test','test','test','2021-09-04','1234567890','test@test.com','test','2021-09-23 16:52:50','2021-09-23 16:52:50'),(13,'test1','test1','test1','1881-08-09','18181818181','test1@test.com','$2y$10$RqYNU/27gQUHz1GomdUTvegrcrEANdBfuHZopiqCVuGCCNRumkrhu','2021-09-23 17:43:35','2021-09-23 17:43:35'),(14,'test','test','test','2021-09-04','1234567890','test@test.com','test','2021-09-23 17:43:52','2021-09-23 17:43:52'),(15,'test','test','test','2021-09-04','1234567890','test@test.com','test','2021-09-23 18:01:51','2021-09-23 18:01:51'),(16,'test','test','test','2021-09-04','1234567890','test@test.com','test','2021-09-23 18:02:05','2021-09-23 18:02:05'),(17,'Marielle','P','Gonzalez','1991-08-09','123123123','marielle@yahoo.com','$2y$10$fJ1pAy.V0VWW6Uk58NI.COLOSanegsbp.z9MKJEcTFtWDhmbDBBI.','2021-09-24 00:14:49','2021-09-24 00:14:49'),(18,'Marielle','P','Gonzalez','1991-08-09','09109109109019','mayey@yahoo.com','$2y$10$4qex5ElAKvKtUtOiDpJdEuxStvXLf6I5LKY8e0Hc/TZaK88TmhcYG','2021-09-26 17:03:18','2021-09-26 17:03:18'),(19,'test','test','test','2021-09-04','1234567890','test@test.com','test','2021-09-26 17:03:52','2021-09-26 17:03:52'),(20,'Chelsea','Kate','Gonzalez','2021-09-08','3423412','ckg@gmail.com','$2y$10$xBC7H/EhcWGaSOOH/tuoO.UTDhvpsqXaqH5VLo0H/T18n8Kv7qIdG','2021-09-27 16:47:59','2021-09-27 16:47:59'),(21,'Chelsea','Kate','Gonzalez','2021-09-08','3423412','ckg@gmail.com','$2y$10$YTSelFcLCwmnjuoAWskQMuT8yCw9B1QhepfbUbbb6Gy2AjOIpXtRK','2021-09-27 16:48:38','2021-09-27 16:48:38'),(22,'Chelsea','Kate','Gonzalez','2021-09-08','3423412','ckg12@gmail.com','$2y$10$HJRXlFMp4/4cR9tH7utZHO0ddiSSe8m9XFtImK4MNOmJVUFsaRtdi','2021-09-27 16:48:59','2021-09-27 16:48:59'),(23,'sa','as','as','2021-09-29','1212121','as@as.com','$2y$10$sycZKm53XY2W570xv5OSdOwAuhmJbyAmWp9AZpn8zvmUtcxubOEOK','2021-09-29 01:52:11','2021-09-29 01:52:11'),(24,'customer','customer','customer','1991-06-04','091289298398','cust@cust.com','$2y$10$K3DusXdzb1yNK6tmj31PGej65DpbWZN6YCTKDGRf/HI1cW4XOUHBy','2021-09-29 16:34:47','2021-09-29 16:34:47'),(25,'test','test','test','2006-01-31','1234567','test@test.com','$2y$10$oF6Ow2EW1OAhGf.9aMWryOs/CD/bjkfxOEPYPCl/DBoGBTxbPajA6','2021-09-30 02:13:51','2021-09-30 02:13:51'),(26,'Customer','C','C','2004-02-03','09123232','wel@yahoo.com','$2y$10$S6IcZ.AoSur0FbNqJmpg0e2oZxvxrQ4l.mvAmQbkKJ3UoKGAwgrxq','2021-09-30 15:08:00','2021-09-30 15:08:00');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-01 12:54:58
