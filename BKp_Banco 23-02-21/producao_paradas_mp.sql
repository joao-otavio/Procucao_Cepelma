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
-- Table structure for table `paradas_mp`
--

DROP TABLE IF EXISTS `paradas_mp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paradas_mp` (
  `Jum` int(50) NOT NULL,
  `Descricao` text NOT NULL,
  `H_Inicial` varchar(50) NOT NULL,
  `H_Final` varchar(50) NOT NULL,
  `Temp_Total` varchar(50) NOT NULL,
  `Tipo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paradas_mp`
--

LOCK TABLES `paradas_mp` WRITE;
/*!40000 ALTER TABLE `paradas_mp` DISABLE KEYS */;
INSERT INTO `paradas_mp` VALUES (2,'LIMPEZA MP PAPEL VOLTOU NO FELTRO','22:05','23:30','01:25',''),(5,'limpeza caixa de vacuo','16:50','19:00','02:10',''),(2,'limpeza MP','22:05','23:30','01:25',''),(3,'Manutenção na bomba','00:45','07:00','06:15',''),(5,'','','','',''),(5,'limpeza nas caixas de vacuo de cima e de baixo','17:30','19:30','',''),(15,'apertar o lado da prensa umida','19:30','21:55','02:25',''),(21,'apertar lado da prensa umida','19:30','21:55','02:25',''),(23,'MP parou para apertar prensa umida lado A ','10:20','11:55','01:35',''),(24,'MP encontrou-se parada para apertar prensa umida lado A, painel das bombas não ligava.','14:00','22:50','08:50',''),(36,'','','','',''),(36,'','','','',''),(36,'MP parou para fazer limpeza da bomba e conferir valvula de gramatura ','15:00','17:50','',''),(36,'MP parou para fazer limpeza da bomba e conferir valvula de gramatura ','15:00','17:50','',''),(39,'MP parou para limpeza da bomba de mistura e tirar gaiola de proteção da bomba ','21:20','07:00','',''),(43,'MP parou por falta de massa','19:25','20:05','00:40',''),(70,'MP parou para trocar bucha do rolamento da prensa umida ','07:46','10:50','03:04',''),(71,'MP parou para apertar mais a apreça das 12.08h as 06.20h do dia 16/01.\r\nMP parou das 07.10h ate as 13.44h do dia 16/01 para limpeza geral \r\n','12:08','06:20','06:12',''),(72,'MP RODOU E PAROU POR FALTA DE AGUA NA BOMBA DE MISTURA ','17:30','06:40','01:10',''),(119,'houve abstrução da tela da hidra sendo necessario o esgotamento da massa ','10:00','15:45','05:45',''),(156,'MP quebrou a ponta do rolinho guia do feltro umido lado A','04:30','09:14','04:44',''),(163,'ROLINHO GUIA QUEBROU LADO A, FOI FEITA LIMPEZA GERAL NA CAIXA DE ENTRADA DA MP E NA CAIXA DO ARREIRO','15:56','22:15','06:19',''),(172,'MP PAROU PARA APERTAR FELTRO DE CIMA.\r\nMP PAROU NOVAMENTE 13;30 ATÉ 15;00 PAPEL TAVA MOLHADO ','07:50','13:19','05:29',''),(190,'ROLETE DO ROLAMENTO SAIU FORA DA CAPA, FOI FEITO ALINHAMETO, APRESENTANDO DESGASTE PELO TRABALHO ANTERIOR DESALINHADO ','10:40','12:20','01:40',''),(227,'CORRENTE DA MP QUEBROU, FOI REALIZADA LIMPEZA NA MP. MP PAROU AS 10HRS PARA VERIFICAÇÃO DO ROLAMENTO LADO C','05:55','09:15','03:20',''),(235,'ROLAMENTO DO LADO C DA MP QUEBROU, TROCOU ROLAMENTO E MANCAL DA PRESA UMIDA L.C ','18:19','23:57','05:38',''),(255,'MP QUEBROU O ROLINHO GUIA DO FELTRO UMIDO ','19:15','02:15','',''),(259,'MP PARADA, FELTRO DOBRANDO LADO C \r\nFOI FEITO ALINHAMENTO DA PRENÇA DA TELA, TROCOU ROLAMENTO LADO A e C, COSTUROU A TELA QUE RASGOU LADO A','07:18','18:03','10:45',''),(260,'MP PARADA PARA COSTURAR TELA L-A ','19:00','21:30','02:30',''),(260,'MP PARADA PARA COSTURAR TELA L-A ','19:00','21:30','02:30',''),(268,'correia da tela da mp caiu','08:12','08:27','00:15',''),(269,'Fazer limpeza da caixa de vacuo ','09:36','12:00','02:24',''),(273,'mp parou para averiguar a bomba de mistura','16:00','16:52','00:52',''),(283,'CORREIA DA TELA DA MP CAIU','05:45','06:00','00:15',''),(292,'MP PARADA PARA TROCAR A TELA E O ROLINHO DO FELTRO ÚMIDO ','14:00','02:00','00:00',''),(316,'MP PAROU PARA SUBSTITUICAO DA SAIDA DE AR DO COMPRENSSOR ','07:20','10:00','02:40',''),(331,'MP PAROU CORREIA DA TELA CAIU','04:20','04:40','00:20',''),(333,'MP PAROU PARA MECHER NA REGUA E NO RASPADOR DA CAIXA DE ENTRADA','07:40','09:34','01:54',''),(354,'MP PAROU PARA TROCAR O ROLINHO MPF 02. MANCAL ROLO FELTRO SUPERIOR. TROCOU TBM O ROLOINHO DO MPF 14 MANCAL ROLO FELTRO INFERIOR.\r\n LIMPEZA NA BOMBA DE MISTURAL.\r\nLIMPEZA NAS CAIXAS DE VACUO.\r\nLIMPEZA NOS FELTROS\r\n','12:15','17:15','05:00',''),(373,'A CALHA DESAGUADORA CAIU EM CIMA DA TELA DA MP E RASGOU ELA ','13:00','01:18','00:18',''),(384,'TELA PEGOU NO SENSOR LADO A','13:16','13:40','00:24',''),(403,'PIQUE DE ENERGIA, O DEPURADOR TRAVOU ','10:40','11:20','00:40',''),(420,'MP PAROU PARA COSTURR A TELA O LADO-A ABRIU.','05:05','09:10','04:05',''),(432,'ALINHAMENTO DO ROLINHO DE TENSÃO DO FELTRO UMIDO, O FELTRO UMIDO COMEÇOU A DOBRAR , FOI FEITA A TROCA DO ROLAMENTO DA BBA DE MISTURA DOS DOIS LADOS POIS TAVA QUEBRADA ','10:29','05:04','06:35',''),(457,'MP PAROU PARA TROCAR CORREIAS DA BOMBA DA PISCINA PEQUENA','04:40','06:30','01:50',''),(465,'','','','',''),(467,'FELTRO DE BAIXO DOBROU ','15:00','15:36','00:36',''),(467,'FELTRO DE BAIXO DOBROU ','15:00','15:36','00:36',''),(467,'FELTRO DE BAIXO DOBROU ','15:00','15:36','00:36',''),(480,'SECADOR ESTAVA CHEIO DE AGUA, PAPEL NAO ESTAVA SECANDO ','08:48','11:00','02:12',''),(521,'MP PAROU PARA LIMPEZA DOS FELTROS','18:44','19:00','00:16',''),(538,'MP PARADA PARA TROCAR A TELA ','14:15','22:40','08:25',''),(546,'MP PAROU PARA LIMPEZA DA BOMBA DE MISTURA ','10:13','11:23','01:10',''),(548,'MP PAROU POR FALTA DE VAPOR E ROLAMENTO DE VACUO QUEBROU ','13:40','17:42','04:02',''),(579,'POLIA DA BOMBA DA PISCININHA QUBROU, FOI FEITO TAMBÉM A TROCA DA POLIA DA PISCINA GRANDE RODANAS.','05:50','15:10','09:20',''),(581,'CORRENTE DE ARROLAMENTO DA PRENSA INFERIOR ARREBENTOU ','17:56','19:25','01:29',''),(582,'LIMPEZA DO ROTOR DA BOMBA DE MISTURA ','20:45','21:10','00:25',''),(592,'CORRENTE DA TRANSMISSÃO DA PRENÇA UMIDA SOLTOU ','08:36','10:10','01:34',''),(596,'','','','',''),(596,'','','','',''),(596,'','','','',''),(596,'','','','',''),(603,'FALTA DE MASSA ','23:25','01:35','10:50',''),(608,'DEPURADOR TRAVOU ','09:03','14:45','05:42',''),(615,'CORREIA DA TRASMISSÃO CAIU.\r\nLIMPEZA NO TANQUE DA BOMBA DE MISTURA.','19:00','19:40','00:40','');
/*!40000 ALTER TABLE `paradas_mp` ENABLE KEYS */;
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
