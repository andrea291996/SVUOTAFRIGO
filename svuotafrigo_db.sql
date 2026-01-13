-- MySQL dump 10.13  Distrib 8.0.43, for macos10.15 (x86_64)
--
-- Host: localhost    Database: SVUOTAFRIGO
-- ------------------------------------------------------
-- Server version	8.0.43

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ingredienti`
--

DROP TABLE IF EXISTS `ingredienti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ingredienti` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingredienti`
--

LOCK TABLES `ingredienti` WRITE;
/*!40000 ALTER TABLE `ingredienti` DISABLE KEYS */;
INSERT INTO `ingredienti` VALUES (10,'Ceci'),(11,'Farina di riso'),(5,'Guanciale'),(9,'Latte di Cocco'),(12,'Melanzane'),(1,'Pasta'),(4,'Pecorino'),(2,'Pomodoro'),(7,'Riso'),(3,'Uova'),(8,'Zafferano'),(6,'Zucchine');
/*!40000 ALTER TABLE `ingredienti` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ricette`
--

DROP TABLE IF EXISTS `ricette`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ricette` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titolo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `procedimento` text COLLATE utf8mb4_general_ci NOT NULL,
  `tipologia` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dieta_musulmana` tinyint(1) DEFAULT '0',
  `dieta_ebraica` tinyint(1) DEFAULT '0',
  `vegetariana` tinyint(1) DEFAULT '0',
  `vegana` tinyint(1) DEFAULT '0',
  `senza_glutine` tinyint(1) DEFAULT '0',
  `senza_lattosio` tinyint(1) DEFAULT '0',
  `senza_crostacei` tinyint(1) DEFAULT '1',
  `senza_frutta_secca` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ricette`
--

LOCK TABLES `ricette` WRITE;
/*!40000 ALTER TABLE `ricette` DISABLE KEYS */;
INSERT INTO `ricette` VALUES (1,'Pasta al Pomodoro','Soffriggere il pomodoro e condire la pasta.','Primo',0,0,1,1,0,1,1,1),(2,'Carbonara','Mescolare uova e pecorino, aggiungere guanciale croccante.','Primo',0,0,0,0,0,0,1,1),(3,'Risotto allo Zafferano','Tostare il riso e aggiungere brodo e zafferano.','Primo',0,0,1,0,1,0,1,1),(4,'Hummus di Ceci','Frullare i ceci con olio e limone.','Antipasto',0,0,1,1,1,1,1,1),(5,'Zucchine saltate','Tagliare le zucchine e saltarle in padella.','Contorno',0,0,1,1,1,1,1,1);
/*!40000 ALTER TABLE `ricette` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ricette_ingredienti`
--

DROP TABLE IF EXISTS `ricette_ingredienti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ricette_ingredienti` (
  `id_ricetta` int NOT NULL,
  `id_ingrediente` int NOT NULL,
  PRIMARY KEY (`id_ricetta`,`id_ingrediente`),
  KEY `id_ingrediente` (`id_ingrediente`),
  CONSTRAINT `ricette_ingredienti_ibfk_1` FOREIGN KEY (`id_ricetta`) REFERENCES `ricette` (`id`) ON DELETE CASCADE,
  CONSTRAINT `ricette_ingredienti_ibfk_2` FOREIGN KEY (`id_ingrediente`) REFERENCES `ingredienti` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ricette_ingredienti`
--

LOCK TABLES `ricette_ingredienti` WRITE;
/*!40000 ALTER TABLE `ricette_ingredienti` DISABLE KEYS */;
INSERT INTO `ricette_ingredienti` VALUES (1,1),(2,1),(1,2),(2,3),(2,4),(2,5),(5,6),(3,7),(3,8),(4,10);
/*!40000 ALTER TABLE `ricette_ingredienti` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-01-12  8:57:04
