-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: producao
-- ------------------------------------------------------
-- Server version	8.0.18

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
-- Table structure for table `config_cortadeira`
--

DROP TABLE IF EXISTS `config_cortadeira`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `config_cortadeira` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(255) NOT NULL,
  `Medida1` int(11) NOT NULL,
  `Qt1` int(11) NOT NULL,
  `Medida2` int(11) NOT NULL,
  `Qt2` int(11) NOT NULL,
  `Medida3` int(11) NOT NULL,
  `Qt3` int(11) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `config_cortadeira`
--

LOCK TABLES `config_cortadeira` WRITE;
/*!40000 ALTER TABLE `config_cortadeira` DISABLE KEYS */;
INSERT INTO `config_cortadeira` VALUES (1,'4-25/1-60',25,4,60,1,0,0),(9,'1-25/3-40',25,1,40,3,0,0),(8,'4-25/1-40',25,4,40,1,0,0),(7,'1-25/3-40',25,1,40,3,0,0),(10,'1-25/3-40',25,1,40,3,0,0),(11,'4-40',40,4,0,0,0,0),(12,'1-25/2-60',25,1,60,2,0,0),(13,'1-40/2-60',40,1,60,2,0,0),(14,'1-40',40,1,0,0,0,0),(15,'1-40/2-50',40,1,50,2,0,0),(16,'3-40',40,3,0,0,0,0),(17,'2-60',60,2,0,0,0,0),(18,'5-25',25,5,0,0,0,0),(19,'1-40/1-100',40,1,100,1,0,0),(20,'2-40',40,2,0,0,0,0);
/*!40000 ALTER TABLE `config_cortadeira` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-23 16:00:26
