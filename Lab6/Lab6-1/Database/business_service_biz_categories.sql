-- MySQL dump 10.13  Distrib 8.0.13, for Win64 (x86_64)
--
-- Host: localhost    Database: business_service
-- ------------------------------------------------------
-- Server version	8.0.13

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `biz_categories`
--

DROP TABLE IF EXISTS `biz_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `biz_categories` (
  `BusinessID` bigint(20) NOT NULL AUTO_INCREMENT,
  `CategoryID` varchar(10) NOT NULL,
  PRIMARY KEY (`BusinessID`,`CategoryID`),
  KEY `FK_CATEGORY` (`CategoryID`),
  CONSTRAINT `FK_BUSINESS` FOREIGN KEY (`BusinessID`) REFERENCES `businesses` (`businessid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_CATEGORY` FOREIGN KEY (`CategoryID`) REFERENCES `categories` (`categoryid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `biz_categories`
--

LOCK TABLES `biz_categories` WRITE;
/*!40000 ALTER TABLE `biz_categories` DISABLE KEYS */;
INSERT INTO `biz_categories` VALUES (1,'AUTO'),(2,'AUTO'),(4,'AUTO'),(11,'AUTO'),(1,'FISH'),(2,'FISH'),(3,'FISH'),(7,'HEALTH'),(8,'HEALTH'),(9,'HEALTH'),(10,'HEALTH'),(7,'SCHOOL'),(8,'SCHOOL'),(9,'SCHOOL'),(10,'SCHOOL'),(11,'SCHOOL'),(4,'SPORTS'),(5,'SPORTS'),(6,'SPORTS');
/*!40000 ALTER TABLE `biz_categories` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-21 14:24:48
