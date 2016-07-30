-- MySQL dump 10.13  Distrib 5.7.13, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: cyrela_db
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.16-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `sobrenome` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `newsletter` varchar(45) DEFAULT NULL,
  `caricatura` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT  IGNORE INTO `clientes` (`id_cliente`, `nome`, `sobrenome`, `cidade`, `telefone`, `newsletter`, `caricatura`, `email`) VALUES (2,'Lucas','gffhfghf','jhfjhf','8789756465456','sim','5b8085d76408f77e4287cb08299be34e.jpg','hjfjhf'),(3,'Marcelo','asdfasdf','asdfasd','dfasdfasdf','sim','7922a407a2b544426c5a5828faff877c.jpg','asdfasdf'),(4,'Mauro','fasdfasdf','asdfasdf','sdfasdfsadf','sim','adddc033f2710d8cf5304009330820da.jpg','asdfasd'),(5,'João',NULL,NULL,NULL,NULL,'909f0d2802853acc992d6b8a5ce734bb.jpg',NULL),(6,'Guilherme','Sedassari','Ribeirão Preto','16992430621','sim','c357eb064882f63b0cdb9af4d66d4a08.jpg','guilherme@absolutacine.com.br');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enquetes`
--

DROP TABLE IF EXISTS `enquetes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enquetes` (
  `id_enquete` int(11) NOT NULL AUTO_INCREMENT,
  `cliente_id` int(11) DEFAULT NULL,
  `pergunta1` varchar(255) DEFAULT NULL,
  `pergunta2` varchar(255) DEFAULT NULL,
  `pergunta3` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_enquete`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enquetes`
--

LOCK TABLES `enquetes` WRITE;
/*!40000 ALTER TABLE `enquetes` DISABLE KEYS */;
INSERT  IGNORE INTO `enquetes` (`id_enquete`, `cliente_id`, `pergunta1`, `pergunta2`, `pergunta3`) VALUES (1,6,'Zona Sul','02 anos','Zona Norte'),(2,6,'Zona Sul','02 anos','Zona Norte'),(3,6,'Zona Sul','01 ano','Zona Oeste'),(4,6,'Zona Sul','01 ano','Zona Oeste'),(5,6,'Zona Sul','01 ano','Zona Oeste'),(6,6,'Zona Sul','01 ano','Zona Oeste'),(7,6,'Zona Sul','01 ano','Zona Oeste'),(8,6,'Zona Sul','01 ano','Zona Oeste'),(9,6,'Zona Sul','01 ano','Zona Oeste'),(10,6,'Zona Sul','01 ano','Zona Oeste'),(11,6,'Zona Sul','01 ano','Zona Oeste'),(12,6,'Zona Sul','01 ano','Zona Oeste'),(13,2,'Zona Norte','02 anos','Zona Norte'),(14,2,'Zona Norte','02 anos','Zona Norte'),(15,2,'Zona Norte','02 anos','Zona Norte'),(16,2,'Zona Norte','02 anos','Zona Norte'),(17,2,'Zona Norte','02 anos','Zona Norte'),(18,2,'Zona Norte','02 anos','Zona Norte'),(19,2,'Zona Norte','02 anos','Zona Norte'),(20,2,'Zona Sul','01 ano','Zona Oeste'),(21,2,'Zona Oeste','06 meses','Zona Oeste'),(22,2,'Zona Oeste','01 ano','Zona Oeste'),(23,6,'Zona Norte','02 anos','Zona Oeste'),(24,2,'Zona Oeste','01 ano','Zona Norte'),(25,2,'Zona Oeste','01 ano','Zona Norte'),(26,2,'Zona Oeste','01 ano','Zona Norte'),(27,2,'Zona Oeste','01 ano','Zona Norte'),(28,2,'Zona Oeste','01 ano','Zona Norte'),(29,2,'Zona Oeste','01 ano','Zona Norte'),(30,2,'Zona Oeste','01 ano','Zona Norte'),(31,2,'Zona Oeste','01 ano','Zona Norte'),(32,2,'Zona Oeste','01 ano','Zona Norte'),(33,2,'Zona Oeste','01 ano','Zona Norte'),(34,2,'Zona Oeste','01 ano','Zona Norte'),(35,2,'Zona Oeste','01 ano','Zona Norte'),(36,2,'Zona Oeste','01 ano','Zona Norte'),(37,2,'Zona Oeste','01 ano','Zona Norte'),(38,2,'Zona Oeste','01 ano','Zona Norte'),(39,2,'Zona Oeste','01 ano','Zona Norte'),(40,2,'Zona Oeste','01 ano','Zona Norte'),(41,2,'Zona Oeste','01 ano','Zona Norte'),(42,2,'Zona Oeste','01 ano','Zona Norte'),(43,4,'Zona Norte','02 anos','Zona Norte'),(44,4,'Zona Norte','02 anos','Zona Norte'),(45,4,'Zona Norte','02 anos','Zona Norte'),(46,4,'Zona Norte','02 anos','Zona Norte'),(47,4,'Zona Norte','02 anos','Zona Norte'),(48,4,'Zona Norte','02 anos','Zona Norte'),(49,4,'Zona Norte','02 anos','Zona Norte'),(50,4,'Zona Norte','02 anos','Zona Norte'),(51,4,'Zona Norte','02 anos','Zona Norte'),(52,4,'Zona Norte','02 anos','Zona Norte'),(53,4,'Zona Norte','02 anos','Zona Norte'),(54,4,'Zona Norte','02 anos','Zona Norte'),(55,4,'Zona Norte','02 anos','Zona Norte'),(56,2,'Zona Sul','02 anos','Zona Sul'),(57,2,NULL,NULL,NULL),(58,2,'Zona Sul','01 ano','Zona Sul'),(59,3,NULL,NULL,NULL),(60,2,NULL,NULL,NULL),(61,2,NULL,NULL,NULL),(62,2,NULL,NULL,NULL),(63,2,NULL,NULL,NULL),(64,2,'Zona Sul','01 ano','Zona Sul');
/*!40000 ALTER TABLE `enquetes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT  IGNORE INTO `usuarios` (`id_usuario`, `nome`, `senha`) VALUES (1,'admin','123456');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-29 23:18:05
