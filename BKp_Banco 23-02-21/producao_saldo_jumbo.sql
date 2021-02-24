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
-- Table structure for table `saldo_jumbo`
--

DROP TABLE IF EXISTS `saldo_jumbo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `saldo_jumbo` (
  `jumbo` int(11) DEFAULT NULL,
  `peso` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `saldo_jumbo`
--

LOCK TABLES `saldo_jumbo` WRITE;
/*!40000 ALTER TABLE `saldo_jumbo` DISABLE KEYS */;
INSERT INTO `saldo_jumbo` VALUES (30,0),(36,0),(41,0),(42,0),(34,0),(31,0),(38,0),(39,0),(45,0),(46,53),(48,0),(44,0),(40,0),(47,0),(43,0),(35,0),(17,0),(37,0),(69,148),(0,155),(70,0),(24,0),(79,-14),(80,0),(74,0),(103,0),(76,0),(77,0),(78,0),(75,0),(101,0),(115,0),(118,0),(117,-23),(114,-67),(116,0),(120,0),(133,-6),(73,0),(119,0),(121,0),(134,0),(122,52),(136,0),(139,0),(138,0),(140,0),(158,0),(137,0),(135,0),(157,0),(141,0),(159,0),(162,0),(160,0),(161,0),(156,0),(173,0),(176,0),(172,309),(177,0),(189,0),(192,422),(174,0),(175,0),(191,0),(193,0),(178,392),(190,0),(207,0),(229,0),(232,0),(148,0),(226,0),(205,0),(231,0),(230,0),(244,0),(228,0),(227,0),(247,0),(221,0),(246,0),(248,0),(245,0),(242,0),(243,0),(241,0),(260,0),(268,0),(261,67),(269,190),(270,0),(271,0),(272,0),(274,433),(281,0),(273,444),(288,196),(289,0),(287,0),(284,244),(290,0),(291,332),(283,261),(184,0),(282,0),(502,0),(292,0),(293,0),(331,204),(330,106),(307,0),(327,0),(328,0),(306,0),(329,0),(326,0),(352,0),(350,0),(353,0),(354,0),(336,0),(355,0),(332,0),(356,0),(367,0),(370,0),(366,0),(369,0),(365,0),(371,0),(368,276),(361,413),(68,0),(464,0),(436,0),(455,0),(456,0),(463,0),(433,0),(435,0),(437,0),(434,0),(393,0),(420,166),(454,0),(400,0),(432,0),(422,0),(396,0),(421,0),(424,0),(419,0),(423,0),(399,0),(418,0),(372,0),(417,0),(382,0),(394,0),(373,0),(397,0),(374,0),(395,0),(378,0),(398,0),(380,0),(381,0),(379,0),(377,0),(376,0),(351,353),(375,0),(507,0),(484,0),(473,0),(470,0),(467,0),(476,298),(475,0),(472,171),(466,0),(469,90),(471,0),(477,0),(474,0),(480,0),(483,0),(481,0),(505,363),(506,0),(509,0),(504,0),(461,123),(468,0),(501,0),(503,195),(495,0),(497,0),(498,0),(479,0),(491,0),(482,0),(482,0),(499,0),(496,180),(485,0),(500,0),(490,0),(552,0),(550,0),(553,0),(586,0),(555,0),(493,0),(551,333),(494,0),(554,153),(558,0),(584,0),(585,0),(593,0),(589,0),(557,0),(556,0),(594,0),(588,0),(582,397),(590,0),(581,357),(392,-23),(592,0),(591,152),(57,0),(56,0),(55,0),(54,0),(53,0),(52,0),(51,0),(50,0),(49,0),(67,0),(66,0),(65,0),(64,0),(63,0),(62,0),(61,0),(60,0),(59,0),(58,0),(90,0),(89,0),(88,0),(87,0),(86,0),(85,0),(84,0),(83,0),(82,0),(81,0),(100,0),(99,0),(98,0),(97,0),(96,0),(95,0),(94,0),(93,0),(92,0),(91,0),(113,0),(112,0),(111,0),(110,0),(109,0),(108,0),(107,0),(106,0),(105,0),(104,0),(132,0),(131,0),(130,0),(129,0),(128,0),(127,0),(126,0),(125,0),(124,0),(123,0),(146,0),(145,0),(144,0),(143,0),(142,0),(333,0),(155,0),(154,0),(153,0),(152,0),(151,0),(150,0),(149,0),(147,0);
/*!40000 ALTER TABLE `saldo_jumbo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-23 16:00:25
