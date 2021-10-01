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
-- Table structure for table `service_provider`
--

DROP TABLE IF EXISTS `service_provider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `service_provider` (
  `service_provider_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_business` varchar(80) NOT NULL,
  `business_name` varchar(100) NOT NULL,
  `business_image` varchar(100) NOT NULL,
  `rep_last_name` varchar(80) NOT NULL,
  `rep_first_name` varchar(80) NOT NULL,
  `office_address` varchar(100) NOT NULL,
  `contact_number` varchar(45) NOT NULL,
  `email_address` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`service_provider_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_provider`
--

LOCK TABLES `service_provider` WRITE;
/*!40000 ALTER TABLE `service_provider` DISABLE KEYS */;
INSERT INTO `service_provider` VALUES (1,'Sole Proprietorship','test','polar bear.jpg','last','first','street','129290429','test@test.com','test','2021-09-22 16:14:52','2021-09-22 16:14:52'),(2,'$type_business','$business_name','$business_logo','$rep_last_name','$rep_first_name','$address','$contact_number','$email_address','$password','2021-09-22 16:15:36','2021-09-22 16:15:36'),(3,'Sole Proprietorship','test','polar bear.jpg','last','first','street','129290429','test@test.com','test','2021-09-22 16:32:16','2021-09-22 16:32:16'),(4,'Partnership','name','Unity.png','last','first','street','12345678909','test@mail.com','test','2021-09-22 23:23:16','2021-09-22 23:23:16'),(5,'$type_business','$business_name','$business_logo','$rep_last_name','$rep_first_name','$address','$contact_number','$email_address','$password','2021-09-22 23:23:29','2021-09-22 23:23:29'),(6,'Corporation','business','Unity.png','last','first','address','1029019201','email@e.com','$2y$10$vDdCrW8cYrdrAHrKqWL73.fbfNrAKL8Vks4BfUFbsOZ76EUr1yJq2','2021-09-23 16:52:24','2021-09-23 16:52:24'),(7,'$type_business','$business_name','$business_logo','$rep_last_name','$rep_first_name','$address','$contact_number','$email_address','$password','2021-09-23 16:52:50','2021-09-23 16:52:50'),(8,'$type_business','$business_name','$business_logo','$rep_last_name','$rep_first_name','$address','$contact_number','$email_address','$password','2021-09-23 17:43:52','2021-09-23 17:43:52'),(9,'$type_business','$business_name','$business_logo','$rep_last_name','$rep_first_name','$address','$contact_number','$email_address','$password','2021-09-23 18:01:51','2021-09-23 18:01:51'),(10,'$type_business','$business_name','$business_logo','$rep_last_name','$rep_first_name','$address','$contact_number','$email_address','$password','2021-09-23 18:02:05','2021-09-23 18:02:05'),(11,'Sole Proprietorship','hello','Unity.png','last','first','street','10101001','as@as.com','$2y$10$iaLk272WGezISArwZIBNie2iCKK6gTHIvWjdP8LXv4guOE8YHryUC','2021-09-24 17:54:00','2021-09-24 17:54:00'),(12,'Sole Proprietorship','hello','Unity.png','last','first','street','10101001','as@as.com','$2y$10$CvdBjHwobjebkw6P0Tdo9uAM35Ww.xoT1I7AxoZ95Ke8f6BfcdjPy','2021-09-24 17:54:30','2021-09-24 17:54:30'),(13,'Sole Proprietorship','hello','Unity.png','last','first','street','10101001','as@as.com','$2y$10$.LmjmSQf1dpPaFiNG4jV.upjee.42hNY8F.7HL0XX.xQJGSr4B17K','2021-09-24 17:55:13','2021-09-24 17:55:13'),(14,'Sole Proprietorship','hello','Unity.png','last','first','street','10101001','as@as.com','$2y$10$B7MfQvE/4S7mFmbEhXhBAOaEgQVT7kCrAQ.0nfprID1HqN4o4KRum','2021-09-24 17:55:22','2021-09-24 17:55:22'),(15,'Sole Proprietorship','asd','Unity.png','asd','asd','sadas','23323232323','23@we.co','$2y$10$wxHQxDybX7OmnW9p640gHeeovKvN8eddXEZAAxwlcwk8Yvihxpa.u','2021-09-24 18:01:55','2021-09-24 18:01:55'),(16,'Sole Proprietorship','asd','Unity.png','asd','asd','sadas','23323232323','23@we.co','$2y$10$K7otc83JODXqewDgcel6aezs8QQehkQKJ.i8cplkYkAvKX4lYRFqC','2021-09-24 18:02:22','2021-09-24 18:02:22'),(17,'Sole Proprietorship','asd','Unity.png','asd','asd','sadas','23323232323','23@we.co','$2y$10$YjMGUXaFnPoORbtd1xd.IuHteSjK1liyvm6DgpH3rUBOAZ7RYPW2K','2021-09-24 18:02:30','2021-09-24 18:02:30'),(18,'Sole Proprietorship','asd','Unity.png','asd','asd','sadas','23323232323','23@we.co','$2y$10$ifQWsMIjXdZX3vyfN0T9M.jxk1Y6/aaFIxgdowkoQV6.CDS4Z02/y','2021-09-24 18:02:34','2021-09-24 18:02:34'),(19,'Sole Proprietorship','asd','Unity.png','asd','asd','sadas','23323232323','23@we.co','$2y$10$oxar7uqQk9GKjtOH/Eq9meGRk.7SiwgZlXfSHFdX6/t/j/S2isYAm','2021-09-24 18:02:34','2021-09-24 18:02:34'),(20,'Sole Proprietorship','asd','Unity.png','asd','asd','sadas','23323232323','23@we.co','$2y$10$m6DFkuhali2pd1QI2EBIS.B6jEK9p9Xd1R8myBwoy3QcHsJxahTJW','2021-09-24 18:02:39','2021-09-24 18:02:39'),(21,'Sole Proprietorship','asd','Unity.png','asd','asd','sadas','23323232323','23@we.co','$2y$10$8C2sFcwRH3XJpor0rtyZP./bMMfhCcqpSnntlgg0wxqZ/xyqtyXGe','2021-09-24 18:02:41','2021-09-24 18:02:41'),(22,'Sole Proprietorship','asd','polar bear.jpg','asd','asd','sadas','23323232323','23@we.co','$2y$10$YBdCjs8etXqFOWAlWfChVeulTsGLmFLr6zcRx48akcY87VfEYtvkC','2021-09-24 18:02:55','2021-09-24 18:02:55'),(23,'Corporation','test1123','polar bear.jpg','namr','name','123vaddress','123123123','test@te.co','$2y$10$rgiG5dpTxVuma8fAiAOye.6gHbu3G/QewyzD4tWZgPiLS4V7GQv1W','2021-09-24 18:03:41','2021-09-24 18:03:41'),(24,'','','','','','','','','$2y$10$XrdPxlDtUTqaMubI.x9ACu1E0kLH3n7ueSxEQ3dItENlnUtQsNScy','2021-09-24 18:03:45','2021-09-24 18:03:45'),(25,'','','','','','','','','$2y$10$pKMW1W4i9zQq8uQifJ43Nu3gpb4yTbaufZxmND/7lXuxe2/WkXfJ6','2021-09-24 18:04:03','2021-09-24 18:04:03'),(26,'','','','','','','','','$2y$10$DV.YEKcfpH4xzoWFX1ZrW.RadpKsZWwubCpu1KiJV7X/R9x7LvVSq','2021-09-24 18:04:04','2021-09-24 18:04:04'),(27,'','','','','','','','','$2y$10$9FQla8EeF0nqjKBVbL3zP.u2Nru4JwE6FA6ERGOmKIxXdM2MXqE.y','2021-09-24 18:04:04','2021-09-24 18:04:04'),(28,'','','','','','','','','$2y$10$pgRcQI2COHfg/jl270/rSOL/VUpHuSiOagwiu69HnB5zGzk86V8Qm','2021-09-24 18:04:05','2021-09-24 18:04:05'),(29,'','','','','','','','','$2y$10$/MdyJ9iabuYwpsy39J/sluRmr2tfXtApsoEET8fnhxH6hmWGLw4eS','2021-09-24 18:04:05','2021-09-24 18:04:05'),(30,'','','','','','','','','$2y$10$nx20Wm8YG0lv/97aWBKxAOptJe/eEF.gE2eygKJ6glY23ne7hLGuS','2021-09-24 18:04:06','2021-09-24 18:04:06'),(31,'','','','','','','','','$2y$10$0yk7iUFFeWAXN/ayW3SSt.rz46Y4wlsUyc5XLPiz5JD2LAxfLYqkK','2021-09-24 18:04:06','2021-09-24 18:04:06'),(32,'','','','','','','','','$2y$10$XU2XUGoW2ltHVJDKV7nH2uhUQU/lOoRKdE9PQ.O1OOX7pgrqXa6Wa','2021-09-24 18:04:07','2021-09-24 18:04:07'),(33,'','','','','','','','','$2y$10$mheVmJyuAcHtpOgAQhJWbucnXx79AzvaihaBTjLvbtMOF/e4IZjwm','2021-09-24 18:04:23','2021-09-24 18:04:23'),(34,'','','','','','','','','$2y$10$OGwC9HqG/atf8E9h7ZK3ieYihu526ayWu1wmLCcHZUIjyJauxYTwW','2021-09-24 18:04:28','2021-09-24 18:04:28'),(35,'','','','','','','','','$2y$10$tUOg15cZoaVxspytu2oFr.L88q4myALpCNToNCD3hZdIkCKCBOExy','2021-09-24 18:04:29','2021-09-24 18:04:29'),(36,'','','','','','','','','$2y$10$G8pnX21PeywNoNZr9rLYBeGUCYqvioEPMlEUSdkuNSeVkadD/5syW','2021-09-24 18:04:32','2021-09-24 18:04:32'),(37,'','','','','','','','','$2y$10$K/z4cKtzLle.1cmmxRQKJOrhZ0mX4gXW6RvVLSzxK47IGcl26MJh2','2021-09-24 18:04:34','2021-09-24 18:04:34'),(38,'Sole Proprietorship','Shoe','eeyore.jpg','store','shoe','123 main','1290192019','shoe@shoe.com','$2y$10$gWMAUFA8bCLGqB08QEa3i.qBmyVPMYV8y3F7mulKljmhb5ALs1otu','2021-09-24 18:05:11','2021-09-24 18:05:11'),(39,'Sole Proprietorship','Shoe','eeyore.jpg','store','shoe','123 main','1290192019','shoe@shoe.com','$2y$10$.yn9szeHSeY8uwOJ33pDoukpE.s.AhcTsZxAsgjF5CnXww4SzOHQK','2021-09-24 18:05:30','2021-09-24 18:05:30'),(40,'Sole Proprietorship','Shoe','eeyore.jpg','store','shoe','123 main','1290192019','shoe@shoe.com','$2y$10$Ccudguin9Z7ueyrGptYkZeuq5/LjEazm19eiTN0D6jHfK.U8aCoB2','2021-09-24 18:05:32','2021-09-24 18:05:32'),(41,'Sole Proprietorship','Shoe','eeyore.jpg','store','shoe','123 main','1290192019','shoe@shoe.com','$2y$10$LjhJLPOQQO0cEumaC20AmuQi.WSIiph8Y8IScZ5Fqwut/aH1wQTWa','2021-09-24 18:05:34','2021-09-24 18:05:34'),(42,'Sole Proprietorship','Shoe','eeyore.jpg','store','shoe','123 main','1290192019','shoe@shoe.com','$2y$10$3iXO0aJyFrKrIeeSheXqS.JcUNVCr4us24Sl.Xlu/mfi/VQlZnIbK','2021-09-24 18:05:37','2021-09-24 18:05:37'),(43,'Sole Proprietorship','Shoe','eeyore.jpg','store','shoe','123 main','1290192019','shoe@shoe.com','$2y$10$xx7sZbLI9Oeezod.gtVTJedarcjNkYdc8NWU/TtWZA8OK7/V0wNPi','2021-09-24 18:05:46','2021-09-24 18:05:46'),(44,'Sole Proprietorship','Shoe','eeyore.jpg','store','shoe','123 main','1290192019','shoe@shoe.com','$2y$10$SukrLHsL4q6LJnY/MwdWe.hqJsyrlti.p2muSZAkBHwtA249r2qFi','2021-09-24 18:05:47','2021-09-24 18:05:47'),(45,'Sole Proprietorship','Shoe','eeyore.jpg','store','shoe','123 main','1290192019','shoe@shoe.com','$2y$10$ElXRaDo96O.F7kEpq0U/5eCpnwJHJoLkna3tIBVx1sWI0gqrxkohy','2021-09-24 18:05:54','2021-09-24 18:05:54'),(46,'Sole Proprietorship','Shoe','eeyore.jpg','store','shoe','123 main','1290192019','shoe@shoe.com','$2y$10$EfB7vrPu/oymtkvstWTqU.N1SVVvkW7Nev04NGpLDeoF5Owz/N.re','2021-09-24 18:05:55','2021-09-24 18:05:55'),(47,'Sole Proprietorship','Shoe','eeyore.jpg','store','shoe','123 main','1290192019','shoe@shoe.com','$2y$10$xeFiRT9ScLYZ4xBHOOADOuXaTGO69fhqkFazmH5U.6.j.H6x5Ssiq','2021-09-24 18:05:58','2021-09-24 18:05:58'),(48,'$type_business','$business_name','$business_logo','$rep_last_name','$rep_first_name','$address','$contact_number','$email_address','$password','2021-09-26 17:03:52','2021-09-26 17:03:52'),(49,'Partnership','cream','eeyore.jpg','cream','cream','cream','1920192012901','eeyore@eeyore.com','$2y$10$/0lrRdLuT23TcVowXWsHDuA9oK25yEhi0F6nJoErNvRjHkzvduoC6','2021-09-27 16:38:44','2021-09-27 16:38:44'),(50,'Partnership','cream','eeyore.jpg','cream','cream','cream','1920192012901','yes@yes.com','$2y$10$8.6VZJIbkW2myAdLaycmB.3rpqnOj3hdQ5korkOKUM2TfFdzFVGPe','2021-09-27 16:39:31','2021-09-27 16:39:31'),(51,'Partnership','class','polar bear.jpg','class','class','class','20202020','class@yahoo.com','$2y$10$yXqxjMz68ooyidHUqqXUpOX2VAnAIgAVNz/mHSR2UrvtyLEmGae2.','2021-09-27 16:55:15','2021-09-27 16:55:15');
/*!40000 ALTER TABLE `service_provider` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-01 12:54:57
