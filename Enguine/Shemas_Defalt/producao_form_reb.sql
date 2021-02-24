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
-- Table structure for table `form_reb`
--

DROP TABLE IF EXISTS `form_reb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `form_reb` (
  `Jumb` int(11) NOT NULL,
  `operador` varchar(255) NOT NULL,
  `ajudante` varchar(255) NOT NULL,
  `Dt_Inicial` datetime NOT NULL,
  `Dt_Final` datetime NOT NULL,
  `Tiradas` varchar(255) NOT NULL,
  `M1` int(11) NOT NULL,
  `M2` int(11) NOT NULL,
  `M3` int(11) NOT NULL,
  `M4` int(11) NOT NULL,
  `M5` int(11) NOT NULL,
  `M1_P1` int(11) NOT NULL,
  `M1_P2` int(11) NOT NULL,
  `M1_P3` int(11) NOT NULL,
  `M1_P4` int(11) NOT NULL,
  `M1_P5` int(11) NOT NULL,
  `M2_P1` int(11) NOT NULL,
  `M2_P2` int(11) NOT NULL,
  `M2_P3` int(11) NOT NULL,
  `M2_P4` int(11) NOT NULL,
  `M2_P5` int(11) NOT NULL,
  `M3_P1` int(11) NOT NULL,
  `M3_P2` int(11) NOT NULL,
  `M3_P3` int(11) NOT NULL,
  `M3_P4` int(11) NOT NULL,
  `M3_P5` int(11) NOT NULL,
  `M4_P1` int(11) NOT NULL,
  `M4_P2` int(11) NOT NULL,
  `M4_P3` int(11) NOT NULL,
  `M4_P4` int(11) NOT NULL,
  `M4_P5` int(11) NOT NULL,
  `M5_P1` int(11) NOT NULL,
  `M5_P2` int(11) NOT NULL,
  `M5_P3` int(11) NOT NULL,
  `M5_P4` int(11) NOT NULL,
  `M5_P5` int(11) NOT NULL,
  `operador_mp1` varchar(255) NOT NULL,
  `operador_mp2` varchar(255) NOT NULL,
  `Boc_maq` int(11) NOT NULL,
  `Dif_med` int(11) NOT NULL,
  `Temp_Jumb` int(11) NOT NULL,
  `Temp_vida` int(11) NOT NULL,
  `Tipo` int(11) NOT NULL,
  `Gramatura_P` varchar(255) NOT NULL,
  `Gramatura_M` int(11) NOT NULL,
  `DtIni_VIDA` int(11) NOT NULL,
  `HrIni_vida` int(11) NOT NULL,
  `Md_p1` int(11) NOT NULL,
  `Md_p2` int(11) NOT NULL,
  `Md_p3` int(11) NOT NULL,
  `Md_p4` int(11) NOT NULL,
  `Md_p5` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-23 16:09:09
