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
-- Table structure for table `rebobinadeira`
--

DROP TABLE IF EXISTS `rebobinadeira`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rebobinadeira` (
  `lote` int(11) NOT NULL AUTO_INCREMENT,
  `Equipamento` varchar(255) NOT NULL,
  `Operador` varchar(255) NOT NULL,
  `Ajudante` varchar(255) NOT NULL,
  `jumb` int(11) NOT NULL,
  `D_in` varchar(255) NOT NULL,
  `H_in` varchar(255) NOT NULL,
  `D_fn` varchar(255) NOT NULL,
  `H_fn` varchar(255) NOT NULL,
  `Padrao` varchar(255) NOT NULL,
  `MySelectConf` varchar(255) NOT NULL,
  `Refug` int(11) NOT NULL,
  `Mp_1` int(11) NOT NULL,
  `Mp_2` int(11) NOT NULL,
  `Mp_3` int(11) NOT NULL,
  `Mp_4` int(11) NOT NULL,
  `Mp_5` int(11) NOT NULL,
  `Cp_1` int(11) NOT NULL,
  `Cp_2` int(11) NOT NULL,
  `Cp_3` int(11) NOT NULL,
  `Cp_4` int(11) NOT NULL,
  `Cp_5` int(11) NOT NULL,
  `PesTotal` int(11) NOT NULL,
  `PesPonta` int(11) NOT NULL,
  `PesSegregado` int(11) NOT NULL,
  `PesRefugo` int(11) NOT NULL,
  `PesAcabado` int(11) NOT NULL,
  `Md_1` int(11) NOT NULL,
  `Md_2` int(11) NOT NULL,
  `Md_3` int(11) NOT NULL,
  `Md_4` int(11) NOT NULL,
  `Md_5` int(11) NOT NULL,
  `Qt_1` int(11) NOT NULL,
  `Qt_2` int(11) NOT NULL,
  `Qt_3` int(11) NOT NULL,
  `Qt_4` int(11) NOT NULL,
  `Qt_5` int(11) NOT NULL,
  `M1_p1` int(11) NOT NULL,
  `M1_p2` int(11) NOT NULL,
  `M1_p3` int(11) NOT NULL,
  `M1_p4` int(11) NOT NULL,
  `M1_p5` int(11) NOT NULL,
  `M2_p1` int(11) NOT NULL,
  `M2_p2` int(11) NOT NULL,
  `M2_p3` int(11) NOT NULL,
  `M2_p4` int(11) NOT NULL,
  `M2_p5` int(11) NOT NULL,
  `M3_p1` int(11) NOT NULL,
  `M3_p2` int(11) NOT NULL,
  `M3_p3` int(11) NOT NULL,
  `M3_p4` int(11) NOT NULL,
  `M3_p5` int(11) NOT NULL,
  `M4_p1` int(11) NOT NULL,
  `M4_p2` int(11) NOT NULL,
  `M4_p3` int(11) NOT NULL,
  `M4_p4` int(11) NOT NULL,
  `M4_p5` int(11) NOT NULL,
  `M5_p1` int(11) NOT NULL,
  `M5_p2` int(11) NOT NULL,
  `M5_p3` int(11) NOT NULL,
  `M5_p4` int(11) NOT NULL,
  `M5_p5` int(11) NOT NULL,
  `PesUnit_1` int(11) NOT NULL,
  `PesUnit_2` int(11) NOT NULL,
  `PesUnit_3` int(11) NOT NULL,
  `PesUnit_4` int(11) NOT NULL,
  `PesUnit_5` int(11) NOT NULL,
  `QunatUnit_1` int(11) NOT NULL,
  `QunatUnit_2` int(11) NOT NULL,
  `QunatUnit_3` int(11) NOT NULL,
  `QunatUnit_4` int(11) NOT NULL,
  `QunatUnit_5` int(11) NOT NULL,
  `Boca` int(11) NOT NULL,
  `Dif_med` int(11) NOT NULL,
  `TempJumb` varchar(255) NOT NULL,
  `Gramatura` varchar(255) NOT NULL,
  `Calc` varchar(255) NOT NULL,
  `Op1` varchar(255) NOT NULL,
  `Op2` varchar(255) NOT NULL,
  `DtIni_VIDA` varchar(255) NOT NULL,
  `HrIni_vida` varchar(255) NOT NULL,
  `HrIni_Esp` varchar(255) NOT NULL,
  `PesJUmb_get` int(11) NOT NULL,
  `TempVida` varchar(255) NOT NULL,
  `TempEspera` varchar(255) NOT NULL,
  `Tp_Fabric` varchar(255) DEFAULT NULL,
  `chave` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`lote`)
) ENGINE=MyISAM AUTO_INCREMENT=337 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-23 16:09:10
