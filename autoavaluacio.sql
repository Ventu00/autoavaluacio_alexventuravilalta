CREATE DATABASE  IF NOT EXISTS `autoavaluacio` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `autoavaluacio`;
-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: autoavaluacio
-- ------------------------------------------------------
-- Server version	8.0.34

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
-- Table structure for table `alumnes_has_criteris_avaluacio`
--

DROP TABLE IF EXISTS `alumnes_has_criteris_avaluacio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alumnes_has_criteris_avaluacio` (
  `usuaris_id` int NOT NULL,
  `criteris_avaluacio_id` int NOT NULL,
  `nota` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`usuaris_id`,`criteris_avaluacio_id`),
  KEY `fk_usuaris_has_criteris_avaluacio_criteris_avaluacio1_idx` (`criteris_avaluacio_id`),
  KEY `fk_usuaris_has_criteris_avaluacio_usuaris1_idx` (`usuaris_id`),
  CONSTRAINT `fk_usuaris_has_criteris_avaluacio_criteris_avaluacio1` FOREIGN KEY (`criteris_avaluacio_id`) REFERENCES `criteris_avaluacio` (`id`),
  CONSTRAINT `fk_usuaris_has_criteris_avaluacio_usuaris1` FOREIGN KEY (`usuaris_id`) REFERENCES `usuaris` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumnes_has_criteris_avaluacio`
--

LOCK TABLES `alumnes_has_criteris_avaluacio` WRITE;
/*!40000 ALTER TABLE `alumnes_has_criteris_avaluacio` DISABLE KEYS */;
INSERT INTO `alumnes_has_criteris_avaluacio` VALUES (5,1,0),(5,2,0),(5,3,0),(5,4,0),(5,5,0),(5,6,0),(5,7,0),(5,8,0),(5,9,0),(5,10,0),(5,11,0),(5,12,0),(5,13,0),(5,14,0),(5,15,0),(5,16,0),(5,17,0),(5,18,0),(5,19,0),(5,20,0),(5,21,0),(5,22,0),(5,23,0),(5,24,0),(5,25,0),(5,26,0),(5,27,0),(6,1,0),(6,2,0),(6,3,0),(6,4,0),(6,5,0),(6,6,0),(6,7,0),(6,8,0),(6,9,0),(6,10,0),(6,11,0),(6,12,0),(6,13,0),(6,14,0),(6,15,0),(6,16,0),(6,17,0),(6,18,0),(6,19,0),(6,20,0),(6,21,0),(6,22,0),(6,23,0),(6,24,0),(6,25,0),(6,26,0),(6,27,0),(7,1,0),(7,2,0),(7,3,0),(7,4,0),(7,5,0),(7,6,0),(7,7,0),(7,8,0),(7,9,0),(7,10,0),(7,11,0),(7,12,0),(7,13,0),(7,14,0),(7,15,0),(7,16,0),(7,17,0),(7,18,0),(7,19,0),(7,20,0),(7,21,0),(7,22,0),(7,23,0),(7,24,0),(7,25,0),(7,26,0),(7,27,0),(8,1,0),(8,2,0),(8,3,0),(8,4,0),(8,5,0),(8,6,0),(8,7,0),(8,8,0),(8,9,0),(8,10,0),(8,11,0),(8,12,0),(8,13,0),(8,14,0),(8,15,0),(8,16,0),(8,17,0),(8,18,0),(8,19,0),(8,20,0),(8,21,0),(8,22,0),(8,23,0),(8,24,0),(8,25,0),(8,26,0),(8,27,0),(9,1,0),(9,2,0),(9,3,0),(9,4,0),(9,5,0),(9,6,0),(9,7,0),(9,8,0),(9,9,0),(9,10,0),(9,11,0),(9,12,0),(9,13,0),(9,14,0),(9,15,0),(9,16,0),(9,17,0),(9,18,0),(9,19,0),(9,20,0),(9,21,0),(9,22,0),(9,23,0),(9,24,0),(9,25,0),(9,26,0),(9,27,0),(10,1,0),(10,2,0),(10,3,0),(10,4,0),(10,5,0),(10,6,0),(10,7,0),(10,8,0),(10,9,0),(10,10,0),(10,11,0),(10,12,0),(10,13,0),(10,14,0),(10,15,0),(10,16,0),(10,17,0),(10,18,0),(10,19,0),(10,20,0),(10,21,0),(10,22,0),(10,23,0),(10,24,0),(10,25,0),(10,26,0),(10,27,0),(11,1,0),(11,2,0),(11,3,0),(11,4,0),(11,5,0),(11,6,0),(11,7,0),(11,8,0),(11,9,0),(11,10,0),(11,11,0),(11,12,0),(11,13,0),(11,14,0),(11,15,0),(11,16,0),(11,17,0),(11,18,0),(11,19,0),(11,20,0),(11,21,0),(11,22,0),(11,23,0),(11,24,0),(11,25,0),(11,26,0),(11,27,0),(12,1,0),(12,2,0),(12,3,0),(12,4,0),(12,5,0),(12,6,0),(12,7,0),(12,8,0),(12,9,0),(12,10,0),(12,11,0),(12,12,0),(12,13,0),(12,14,0),(12,15,0),(12,16,0),(12,17,0),(12,18,0),(12,19,0),(12,20,0),(12,21,0),(12,22,0),(12,23,0),(12,24,0),(12,25,0),(12,26,0),(12,27,0),(13,1,0),(13,2,0),(13,3,0),(13,4,0),(13,5,0),(13,6,0),(13,7,0),(13,8,0),(13,9,0),(13,10,0),(13,11,0),(13,12,0),(13,13,0),(13,14,0),(13,15,0),(13,16,0),(13,17,0),(13,18,0),(13,19,0),(13,20,0),(13,21,0),(13,22,0),(13,23,0),(13,24,0),(13,25,0),(13,26,0),(13,27,0),(14,1,0),(14,2,0),(14,3,0),(14,4,0),(14,5,0),(14,6,0),(14,7,0),(14,8,0),(14,9,0),(14,10,0),(14,11,0),(14,12,0),(14,13,0),(14,14,0),(14,15,0),(14,16,0),(14,17,0),(14,18,0),(14,19,0),(14,20,0),(14,21,0),(14,22,0),(14,23,0),(14,24,0),(14,25,0),(14,26,0),(14,27,0),(15,1,0),(15,2,0),(15,3,0),(15,4,0),(15,5,0),(15,6,0),(15,7,0),(15,8,0),(15,9,0),(15,10,0),(15,11,0),(15,12,0),(15,13,0),(15,14,0),(15,15,0),(15,16,0),(15,17,0),(15,18,0),(15,19,0),(15,20,0),(15,21,0),(15,22,0),(15,23,0),(15,24,0),(15,25,0),(15,26,0),(15,27,0),(16,1,0),(16,2,0),(16,3,0),(16,4,0),(16,5,0),(16,6,0),(16,7,0),(16,8,0),(16,9,0),(16,10,0),(16,11,0),(16,12,0),(16,13,0),(16,14,0),(16,15,0),(16,16,0),(16,17,0),(16,18,0),(16,19,0),(16,20,0),(16,21,0),(16,22,0),(16,23,0),(16,24,0),(16,25,0),(16,26,0),(16,27,0),(17,1,0),(17,2,0),(17,3,0),(17,4,0),(17,5,0),(17,6,0),(17,7,0),(17,8,0),(17,9,0),(17,10,0),(17,11,0),(17,12,0),(17,13,0),(17,14,0),(17,15,0),(17,16,0),(17,17,0),(17,18,0),(17,19,0),(17,20,0),(17,21,0),(17,22,0),(17,23,0),(17,24,0),(17,25,0),(17,26,0),(17,27,0),(18,1,0),(18,2,0),(18,3,0),(18,4,0),(18,5,0),(18,6,0),(18,7,0),(18,8,0),(18,9,0),(18,10,0),(18,11,0),(18,12,0),(18,13,0),(18,14,0),(18,15,0),(18,16,0),(18,17,0),(18,18,0),(18,19,0),(18,20,0),(18,21,0),(18,22,0),(18,23,0),(18,24,0),(18,25,0),(18,26,0),(18,27,0),(19,1,0),(19,2,0),(19,3,0),(19,4,0),(19,5,0),(19,6,0),(19,7,0),(19,8,0),(19,9,0),(19,10,0),(19,11,0),(19,12,0),(19,13,0),(19,14,0),(19,15,0),(19,16,0),(19,17,0),(19,18,0),(19,19,0),(19,20,0),(19,21,0),(19,22,0),(19,23,0),(19,24,0),(19,25,0),(19,26,0),(19,27,0),(20,1,0),(20,2,0),(20,3,0),(20,4,0),(20,5,0),(20,6,0),(20,7,0),(20,8,0),(20,9,0),(20,10,0),(20,11,0),(20,12,0),(20,13,0),(20,14,0),(20,15,0),(20,16,0),(20,17,0),(20,18,0),(20,19,0),(20,20,0),(20,21,0),(20,22,0),(20,23,0),(20,24,0),(20,25,0),(20,26,0),(20,27,0),(21,1,0),(21,2,0),(21,3,0),(21,4,0),(21,5,0),(21,6,0),(21,7,0),(21,8,0),(21,9,0),(21,10,0),(21,11,0),(21,12,0),(21,13,0),(21,14,0),(21,15,0),(21,16,0),(21,17,0),(21,18,0),(21,19,0),(21,20,0),(21,21,0),(21,22,0),(21,23,0),(21,24,0),(21,25,0),(21,26,0),(21,27,0),(22,1,0),(22,2,0),(22,3,0),(22,4,0),(22,5,0),(22,6,0),(22,7,0),(22,8,0),(22,9,0),(22,10,0),(22,11,0),(22,12,0),(22,13,0),(22,14,0),(22,15,0),(22,16,0),(22,17,0),(22,18,0),(22,19,0),(22,20,0),(22,21,0),(22,22,0),(22,23,0),(22,24,0),(22,25,0),(22,26,0),(22,27,0),(23,1,0),(23,2,0),(23,3,0),(23,4,0),(23,5,0),(23,6,0),(23,7,0),(23,8,0),(23,9,0),(23,10,0),(23,11,0),(23,12,0),(23,13,0),(23,14,0),(23,15,0),(23,16,0),(23,17,0),(23,18,0),(23,19,0),(23,20,0),(23,21,0),(23,22,0),(23,23,0),(23,24,0),(23,25,0),(23,26,0),(23,27,0),(24,1,0),(24,2,0),(24,3,0),(24,4,0),(24,5,0),(24,6,0),(24,7,0),(24,8,0),(24,9,0),(24,10,0),(24,11,0),(24,12,0),(24,13,0),(24,14,0),(24,15,0),(24,16,0),(24,17,0),(24,18,0),(24,19,0),(24,20,0),(24,21,0),(24,22,0),(24,23,0),(24,24,0),(24,25,0),(24,26,0),(24,27,0),(25,1,0),(25,2,0),(25,3,0),(25,4,0),(25,5,0),(25,6,0),(25,7,0),(25,8,0),(25,9,0),(25,10,0),(25,11,0),(25,12,0),(25,13,0),(25,14,0),(25,15,0),(25,16,0),(25,17,0),(25,18,0),(25,19,0),(25,20,0),(25,21,0),(25,22,0),(25,23,0),(25,24,0),(25,25,0),(25,26,0),(25,27,0),(26,1,0),(26,2,0),(26,3,0),(26,4,0),(26,5,0),(26,6,0),(26,7,0),(26,8,0),(26,9,0),(26,10,0),(26,11,0),(26,12,0),(26,13,0),(26,14,0),(26,15,0),(26,16,0),(26,17,0),(26,18,0),(26,19,0),(26,20,0),(26,21,0),(26,22,0),(26,23,0),(26,24,0),(26,25,0),(26,26,0),(26,27,0),(27,1,0),(27,2,0),(27,3,0),(27,4,0),(27,5,0),(27,6,0),(27,7,0),(27,8,0),(27,9,0),(27,10,0),(27,11,0),(27,12,0),(27,13,0),(27,14,0),(27,15,0),(27,16,0),(27,17,0),(27,18,0),(27,19,0),(27,20,0),(27,21,0),(27,22,0),(27,23,0),(27,24,0),(27,25,0),(27,26,0),(27,27,0),(28,1,0),(28,2,0),(28,3,0),(28,4,0),(28,5,0),(28,6,0),(28,7,0),(28,8,0),(28,9,0),(28,10,0),(28,11,0),(28,12,0),(28,13,0),(28,14,0),(28,15,0),(28,16,0),(28,17,0),(28,18,0),(28,19,0),(28,20,0),(28,21,0),(28,22,0),(28,23,0),(28,24,0),(28,25,0),(28,26,0),(28,27,0),(29,1,0),(29,2,0),(29,3,0),(29,4,0),(29,5,0),(29,6,0),(29,7,0),(29,8,0),(29,9,0),(29,10,0),(29,11,0),(29,12,0),(29,13,0),(29,14,0),(29,15,0),(29,16,0),(29,17,0),(29,18,0),(29,19,0),(29,20,0),(29,21,0),(29,22,0),(29,23,0),(29,24,0),(29,25,0),(29,26,0),(29,27,0),(30,1,0),(30,2,0),(30,3,0),(30,4,0),(30,5,0),(30,6,0),(30,7,0),(30,8,0),(30,9,0),(30,10,0),(30,11,0),(30,12,0),(30,13,0),(30,14,0),(30,15,0),(30,16,0),(30,17,0),(30,18,0),(30,19,0),(30,20,0),(30,21,0),(30,22,0),(30,23,0),(30,24,0),(30,25,0),(30,26,0),(30,27,0),(31,1,0),(31,2,0),(31,3,0),(31,4,0),(31,5,0),(31,6,0),(31,7,0),(31,8,0),(31,9,0),(31,10,0),(31,11,0),(31,12,0),(31,13,0),(31,14,0),(31,15,0),(31,16,0),(31,17,0),(31,18,0),(31,19,0),(31,20,0),(31,21,0),(31,22,0),(31,23,0),(31,24,0),(31,25,0),(31,26,0),(31,27,0),(32,1,0),(32,2,0),(32,3,0),(32,4,0),(32,5,0),(32,6,0),(32,7,0),(32,8,0),(32,9,0),(32,10,0),(32,11,0),(32,12,0),(32,13,0),(32,14,0),(32,15,0),(32,16,0),(32,17,0),(32,18,0),(32,19,0),(32,20,0),(32,21,0),(32,22,0),(32,23,0),(32,24,0),(32,25,0),(32,26,0),(32,27,0),(33,1,0),(33,2,0),(33,3,0),(33,4,0),(33,5,0),(33,6,0),(33,7,0),(33,8,0),(33,9,0),(33,10,0),(33,11,0),(33,12,0),(33,13,0),(33,14,0),(33,15,0),(33,16,0),(33,17,0),(33,18,0),(33,19,0),(33,20,0),(33,21,0),(33,22,0),(33,23,0),(33,24,0),(33,25,0),(33,26,0),(33,27,0),(34,1,0),(34,2,0),(34,3,0),(34,4,0),(34,5,0),(34,6,0),(34,7,0),(34,8,0),(34,9,0),(34,10,0),(34,11,0),(34,12,0),(34,13,0),(34,14,0),(34,15,0),(34,16,0),(34,17,0),(34,18,0),(34,19,0),(34,20,0),(34,21,0),(34,22,0),(34,23,0),(34,24,0),(34,25,0),(34,26,0),(34,27,0),(35,1,0),(35,2,0),(35,3,0),(35,4,0),(35,5,0),(35,6,0),(35,7,0),(35,8,0),(35,9,0),(35,10,0),(35,11,0),(35,12,0),(35,13,0),(35,14,0),(35,15,0),(35,16,0),(35,17,0),(35,18,0),(35,19,0),(35,20,0),(35,21,0),(35,22,0),(35,23,0),(35,24,0),(35,25,0),(35,26,0),(35,27,0),(36,1,0),(36,2,0),(36,3,0),(36,4,0),(36,5,0),(36,6,0),(36,7,0),(36,8,0),(36,9,0),(36,10,0),(36,11,0),(36,12,0),(36,13,0),(36,14,0),(36,15,0),(36,16,0),(36,17,0),(36,18,0),(36,19,0),(36,20,0),(36,21,0),(36,22,0),(36,23,0),(36,24,0),(36,25,0),(36,26,0),(36,27,0),(37,1,0),(37,2,0),(37,3,0),(37,4,0),(37,5,0),(37,6,0),(37,7,0),(37,8,0),(37,9,0),(37,10,0),(37,11,0),(37,12,0),(37,13,0),(37,14,0),(37,15,0),(37,16,0),(37,17,0),(37,18,0),(37,19,0),(37,20,0),(37,21,0),(37,22,0),(37,23,0),(37,24,0),(37,25,0),(37,26,0),(37,27,0),(38,1,0),(38,2,0),(38,3,0),(38,4,0),(38,5,0),(38,6,0),(38,7,0),(38,8,0),(38,9,0),(38,10,0),(38,11,0),(38,12,0),(38,13,0),(38,14,0),(38,15,0),(38,16,0),(38,17,0),(38,18,0),(38,19,0),(38,20,0),(38,21,0),(38,22,0),(38,23,0),(38,24,0),(38,25,0),(38,26,0),(38,27,0),(39,1,0),(39,2,0),(39,3,0),(39,4,0),(39,5,0),(39,6,0),(39,7,0),(39,8,0),(39,9,0),(39,10,0),(39,11,0),(39,12,0),(39,13,0),(39,14,0),(39,15,0),(39,16,0),(39,17,0),(39,18,0),(39,19,0),(39,20,0),(39,21,0),(39,22,0),(39,23,0),(39,24,0),(39,25,0),(39,26,0),(39,27,0),(40,1,0),(40,2,0),(40,3,0),(40,4,0),(40,5,0),(40,6,0),(40,7,0),(40,8,0),(40,9,0),(40,10,0),(40,11,0),(40,12,0),(40,13,0),(40,14,0),(40,15,0),(40,16,0),(40,17,0),(40,18,0),(40,19,0),(40,20,0),(40,21,0),(40,22,0),(40,23,0),(40,24,0),(40,25,0),(40,26,0),(40,27,0),(41,1,0),(41,2,0),(41,3,0),(41,4,0),(41,5,0),(41,6,0),(41,7,0),(41,8,0),(41,9,0),(41,10,0),(41,11,0),(41,12,0),(41,13,0),(41,14,0),(41,15,0),(41,16,0),(41,17,0),(41,18,0),(41,19,0),(41,20,0),(41,21,0),(41,22,0),(41,23,0),(41,24,0),(41,25,0),(41,26,0),(41,27,0),(42,1,0),(42,2,0),(42,3,0),(42,4,0),(42,5,0),(42,6,0),(42,7,0),(42,8,0),(42,9,0),(42,10,0),(42,11,0),(42,12,0),(42,13,0),(42,14,0),(42,15,0),(42,16,0),(42,17,0),(42,18,0),(42,19,0),(42,20,0),(42,21,0),(42,22,0),(42,23,0),(42,24,0),(42,25,0),(42,26,0),(42,27,0),(43,1,0),(43,2,0),(43,3,0),(43,4,0),(43,5,0),(43,6,0),(43,7,0),(43,8,0),(43,9,0),(43,10,0),(43,11,0),(43,12,0),(43,13,0),(43,14,0),(43,15,0),(43,16,0),(43,17,0),(43,18,0),(43,19,0),(43,20,0),(43,21,0),(43,22,0),(43,23,0),(43,24,0),(43,25,0),(43,26,0),(43,27,0),(44,1,0),(44,2,0),(44,3,0),(44,4,0),(44,5,0),(44,6,0),(44,7,0),(44,8,0),(44,9,0),(44,10,0),(44,11,0),(44,12,0),(44,13,0),(44,14,0),(44,15,0),(44,16,0),(44,17,0),(44,18,0),(44,19,0),(44,20,0),(44,21,0),(44,22,0),(44,23,0),(44,24,0),(44,25,0),(44,26,0),(44,27,0),(45,1,0),(45,2,0),(45,3,0),(45,4,0),(45,5,0),(45,6,0),(45,7,0),(45,8,0),(45,9,0),(45,10,0),(45,11,0),(45,12,0),(45,13,0),(45,14,0),(45,15,0),(45,16,0),(45,17,0),(45,18,0),(45,19,0),(45,20,0),(45,21,0),(45,22,0),(45,23,0),(45,24,0),(45,25,0),(45,26,0),(45,27,0),(46,1,0),(46,2,0),(46,3,0),(46,4,0),(46,5,0),(46,6,0),(46,7,0),(46,8,0),(46,9,0),(46,10,0),(46,11,0),(46,12,0),(46,13,0),(46,14,0),(46,15,0),(46,16,0),(46,17,0),(46,18,0),(46,19,0),(46,20,0),(46,21,0),(46,22,0),(46,23,0),(46,24,0),(46,25,0),(46,26,0),(46,27,0),(47,1,0),(47,2,0),(47,3,0),(47,4,0),(47,5,0),(47,6,0),(47,7,0),(47,8,0),(47,9,0),(47,10,0),(47,11,0),(47,12,0),(47,13,0),(47,14,0),(47,15,0),(47,16,0),(47,17,0),(47,18,0),(47,19,0),(47,20,0),(47,21,0),(47,22,0),(47,23,0),(47,24,0),(47,25,0),(47,26,0),(47,27,0);
/*!40000 ALTER TABLE `alumnes_has_criteris_avaluacio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cicles`
--

DROP TABLE IF EXISTS `cicles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cicles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sigles` varchar(10) NOT NULL,
  `descripcio` varchar(45) NOT NULL,
  `actiu` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `sigles_UNIQUE` (`sigles`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cicles`
--

LOCK TABLES `cicles` WRITE;
/*!40000 ALTER TABLE `cicles` DISABLE KEYS */;
INSERT INTO `cicles` VALUES (1,'DAW','Desenvolupament Aplicacions Web',1),(2,'DAM','Desenvolupament Aplicacions Multiplataforma',1),(3,'SMIX','Sistemes Monousuari I en Xarxa',1);
/*!40000 ALTER TABLE `cicles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `criteris_avaluacio`
--

DROP TABLE IF EXISTS `criteris_avaluacio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `criteris_avaluacio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ordre` int NOT NULL,
  `descripcio` varchar(256) NOT NULL,
  `actiu` tinyint NOT NULL DEFAULT '1',
  `resultats_aprenentatge_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_criteris_avaluacio_resultats_aprenentatge1_idx` (`resultats_aprenentatge_id`),
  CONSTRAINT `fk_criteris_avaluacio_resultats_aprenentatge1` FOREIGN KEY (`resultats_aprenentatge_id`) REFERENCES `resultats_aprenentatge` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `criteris_avaluacio`
--

LOCK TABLES `criteris_avaluacio` WRITE;
/*!40000 ALTER TABLE `criteris_avaluacio` DISABLE KEYS */;
INSERT INTO `criteris_avaluacio` VALUES (1,1,'Diferenciar l\'execució de codi al servidor i al client web, i les diferents arquitectures d\'entorn servidor.',1,1),(2,2,'Identificar els principals llenguatges i tecnologies relacionats amb la programació web en entorn servidor',1,1),(3,3,'Reconeixer i avaluar les eines de programació en entorn servidor.',1,1),(4,1,'Utilitzar etiquetes per incloure llenguatge de servidor a l\'HTML.',1,2),(5,2,'Escriure sentències simples en el llenguatge de servidor i comprovar els efectes en el document resultant.',1,2),(6,3,'Utilitzar els diferents tipus de variables i operadors disponibles en el llenguatge de servidor, identificant els àmbits d\'utilització de les variables.',1,2),(7,1,'Utilitzar mecanismes de decisió i bucles en la creació de blocs de sentències, i verificar el seu funcionament.',1,3),(8,2,'Utilitzar arrays per emmagatzemar i recuperar conjunts de dades.',1,3),(9,3,'Crear i utilitzar funcions.',1,3),(10,1,'Utilitzar formularis per a interactuar amb l’usuari. Aplicar framework de disseny. I recuperar i tractar la informació introduïda.',1,4),(11,2,'Utilitzar sessions i/o cookies per emmagatzemar informació en el client web i per recuperar el seu contingut.',1,4),(12,3,'Escriure aplicacions que integrin mecanismes d\'autenticació d\'usuaris.',1,4),(13,1,'Identificar i aplicar els paràmetres relatius a la configuració de l\'aplicació web i les rutes d\'aquesta.',1,5),(14,2,'Utilitzar formularis generats de manera dinàmica per respondre als esdeveniments de l’aplicació web, amb vistes.',1,5),(15,3,'Escriure aplicacions web amb manteniment d’estat i separació de la lògica de negoci, utilitzant controladors.',1,5),(16,1,'Crear aplicacions que estableixin connexions amb bases de dades, sense framework i amb framework.',1,6),(17,2,'Recuperar informació emmagatzemada en bases de dades i publico en aplicacions web la informació recuperada. Sense un ORM i amb un ORM.',1,6),(18,3,'Crear aplicacions web que permetin l\'actualització i l\'eliminació d’informació disponible en una base de dades. Sense ORM i amb un ORM.',1,6),(19,1,'Identificar els avantatges d’utilitzar serveis web per a proporcionar accés a funcionalitats incorporades a la lògica de negoci d\'una aplicació.',1,7),(20,2,'Programar un servei web i verficar el seu funcionament.',1,7),(21,3,'Crear documentació de descripció del servei web.',1,7),(22,1,'Utilitzar framework de client per treballar amb formularis.',1,8),(23,2,'Programar crides a serveis web amb framework de client per obtenir dades i crear pàgines dinàmiques.',1,8),(24,3,'Programar crides a serveis web amb framework de client per inserir, modificar i esborrar dades.',1,8),(25,1,'Crear una aplicació web que recuperi i processi dipòsits d’informació ja existents.',1,9),(26,2,'Utilitzar llibreries de codi per incorporar funcionalitats específiques a una aplicació web.',1,9),(27,3,'Programar serveis i aplicacions web utilitzant com a base informació i codi generats per tercers',1,9);
/*!40000 ALTER TABLE `criteris_avaluacio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `moduls`
--

DROP TABLE IF EXISTS `moduls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `moduls` (
  `id` int NOT NULL AUTO_INCREMENT,
  `codi` varchar(10) NOT NULL,
  `sigles` varchar(10) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `actiu` tinyint NOT NULL DEFAULT '1',
  `cicles_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_moduls_cicles_idx` (`cicles_id`),
  CONSTRAINT `fk_moduls_cicles` FOREIGN KEY (`cicles_id`) REFERENCES `cicles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `moduls`
--

LOCK TABLES `moduls` WRITE;
/*!40000 ALTER TABLE `moduls` DISABLE KEYS */;
INSERT INTO `moduls` VALUES (1,'M01','SI','Sistemes Informàtics',1,1),(2,'M02','BD','Bases de Dades',1,1),(3,'M03','PROG','Programació',1,1),(4,'M04','LM','Llenguatge de Marques',1,1),(5,'M05','ED','Entorns de Desenvolupament',1,1),(6,'M06','DWEC','Desenvolupament Web Entorn Client',1,1),(7,'M07','DWES','Desenvolupament Web Entorn Servidor',1,1),(8,'M08','DAW','Desenvolupament Aplicacions Web',1,1),(9,'M09','DIW','Disseny Interfícies Web',1,1),(10,'M10','FOL','Formació i Orientació Laboral',1,1),(11,'M11','EIE','Empresa i Iniciativa Emprenedora',1,1),(12,'M12','PROJ','Projecte DAW',1,1),(13,'M01','SI','Sistemes Informàtics',1,2),(14,'M02','BD','Bases de Dades',1,2),(15,'M03','PROG','Programació',1,2),(16,'M04','LM','Llenguatge de Marques',1,2),(17,'M05','ED','Entorns de Desenvolupament',1,2),(18,'M06','AD','Accés a Dades',1,2),(19,'M07','DI','Disseny Interfícies',1,2),(20,'M08','PMDM','Programació Multimèdia i Dispositius Mòbils',1,2),(21,'M09','PSP','Programació de Sistemes i Processos',1,2),(22,'M10','SGE','Sistemes Gestors Empresarials',1,2),(23,'M11','FOL','Formació i Orientació Laboral',1,2),(24,'M12','EIE','Empresa i Iniciativa Emprenedora',1,2),(25,'M13','PROJ','Projecte DAM',1,2);
/*!40000 ALTER TABLE `moduls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resultats_aprenentatge`
--

DROP TABLE IF EXISTS `resultats_aprenentatge`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `resultats_aprenentatge` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ordre` int NOT NULL,
  `descripcio` varchar(256) NOT NULL,
  `actiu` tinyint NOT NULL DEFAULT '1',
  `moduls_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_resultats_aprenentatge_moduls1_idx` (`moduls_id`),
  CONSTRAINT `fk_resultats_aprenentatge_moduls1` FOREIGN KEY (`moduls_id`) REFERENCES `moduls` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resultats_aprenentatge`
--

LOCK TABLES `resultats_aprenentatge` WRITE;
/*!40000 ALTER TABLE `resultats_aprenentatge` DISABLE KEYS */;
INSERT INTO `resultats_aprenentatge` VALUES (1,1,'Entendre arquitectura client/servidor i coneixer el principals llenguatgs i eines de programació en entorn servidor.',1,7),(2,2,'Escriure sentències bàsiques de llenguatge de sevidor integrat amb el codi de llenguatges de marques.',1,7),(3,3,'Escriure blocs d\'instruccions de llenguatge de servidor i utilitzar diferents estructures de programació.',1,7),(4,4,'Desenvolupar aplicacions web amb formularis per interactuar amb l\'usuari.',1,7),(5,5,'Desenvolupa aplicacions web separant el front-end del codi del back-end.',1,7),(6,6,'Desenvolupar aplicacions que accedeixen a Bases de Dades.',1,7),(7,7,'Desenvolupar serveis web/APIs',1,7),(8,8,'Generar pàgines web dinàmiques cridant a APIs/Web services',1,7),(9,9,'Generar aplicacions amb diversos dipòsit ja existents.',1,7);
/*!40000 ALTER TABLE `resultats_aprenentatge` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rubriques`
--

DROP TABLE IF EXISTS `rubriques`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rubriques` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nivell` int NOT NULL,
  `descripcio` varchar(256) NOT NULL,
  `actiu` tinyint NOT NULL DEFAULT '1',
  `criteris_avaluacio_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_rubriques_criteris_avaluacio1_idx` (`criteris_avaluacio_id`),
  CONSTRAINT `fk_rubriques_criteris_avaluacio1` FOREIGN KEY (`criteris_avaluacio_id`) REFERENCES `criteris_avaluacio` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rubriques`
--

LOCK TABLES `rubriques` WRITE;
/*!40000 ALTER TABLE `rubriques` DISABLE KEYS */;
INSERT INTO `rubriques` VALUES (1,1,'Entenc la diferència entre l\'execució de codi a un servidor i a un client web.ber',1,1),(2,2,'A més, conec les problemàtiques que poden sorgir a l\'hora d\'executar codi en una o altra banda.',1,1),(3,3,'A més, donada una funcionalitat, Soc capaç de saber si s\'ha d\'implementar el codi al servidor o al client web.',1,1),(4,1,'Conec diferents llenguatges que permeten treballar en entorn servidor.',1,2),(5,2,'A més, conec els seus avantatges i els seus inconvenients.',1,2),(6,3,'A més, puc comparar entre ells i saber triar quin seria el millor llenguatge depenent les necessitats.',1,2),(7,1,'Conec diferents eines / entorns de programació que em permetrien treballar en entorn servidor.',1,3),(8,2,'A més, sé fer servir amb solvència l\'eina principal de programació que fem servir a classe, incloent l\'incorporació de plugins per expandir les possibilitats de l\'eina.',1,3),(9,3,'A més, Soc capaç de personalitzar al meu gust l\'entorn, adaptant-lo a les meves necessitats i millorant així la meva productivitat.',1,3),(10,1,'Soc capaç d\'incloure codi PHP dins d\'un HTML.',1,4),(11,2,'A més, Soc capaç de combinar amb solvència diferents sentències de codi PHP en diferents punts del meu HTML.',1,4),(12,3,'A més, Soc capaç d\'importar sentències PHP escrites en un document diferent a l\'actual.',1,4),(13,1,'Soc capaç d\'executar la meva aplicació web per veure el resultat de la meva sentència PHP.',1,5),(14,2,'A més, Soc capaç de reconèixer si hi ha hagut un error en el resultat i identificar-lo.',1,5),(15,3,'A més, Soc capaç d\'escriure sentències simples depenent les necessitats de l\'aplicació',1,5),(16,1,'Conec l\'existència de diferents tipus de variables i operadors.',1,6),(17,2,'A més, Soc capaç de decidir el tipus i operador idonis per a una determinada casuística.',1,6),(18,3,'A més, Soc conscient de l\'àmbit d\'utilització de les variables en funció d\'on hagin estat creades.',1,6),(19,1,'Soc capaç d\'entendre i interpretar mecanismes de decisió i bucles en programes existents.',1,7),(20,2,'A més, Soc capaç de fer servir mecanismes de decisió i bucles als meus propis programes. Puc adaptar codi donat per resoldre el meu propi problema.',1,7),(21,3,'A més, Soc capaç de detectar la necessitat de fer servir mecanismes de decisió i bucles als meus propis programes a partir d\'un problema donat. Puc fer combinacions per resoldre problemes nous i puc defensar de manera raonada les meves solucions.',1,7),(22,1,'Soc capaç de crear arrays clàssics, afegir-ne dades i recuperar-les.',1,8),(23,2,'A més, Soc capaç de crear arrays asSociatius, afegir-hi dades i recuperar-les de diferents maneres.',1,8),(24,3,'A més, Soc capaç de decidir quins tipus d\'arrays necesito utilitzar a la meva aplicació web i estructurar els meus conjunts de dades de manera òptima. Puc defensar de manera raonada les decisions preses en aquest sentit.',1,8),(25,1,'Soc capaç d\'executar funcions ja existents a l\'aplicació web i/o aquelles pròpies del llenguatge.',1,9),(26,2,'A més, Soc capaç de crear  i executar les meves pròpies funcions.',1,9),(27,3,'A més, Soc capaç d\'organitzar correctament el meu codi en diferents funcions i encadenar l\'execució de les mateixes en cas necessari.',1,9),(28,1,'Soc capaç de crear formularis web per a les necessitats de les meves aplicacions.',1,10),(29,2,'A més, Soc capaç d\'utilizar un framework de disseny per maquetar els formularis.',1,10),(30,3,'A més se tractar i recuparar la informació introduïda.',1,10),(31,1,'Soc capaç de crear una variable de sessió i una cookie, i recuperar aquesta informació en diferents punts de l\'aplicació. I identificar si existeix i actuar en conseqüència.',1,11),(32,2,'A més, també sé modificar i esborrar la informació d\'una sessió i d\'una cookie.',1,11),(33,3,'A més, Soc capaç d\'identificar quina informació s\'ha de guarda a una sessió i  a una cookie i utilizar-la en els llocs adients, depenent de l\'aplicació',1,11),(34,1,'Soc capaç d\'integrar mecanismes d\'autenticació d\'usuaris, seguint pautes.',1,12),(35,2,'Soc capaç d\'integrar mecanismes d\'autenticació d\'usuaris, des de zero, sense seguir pautes.',1,12),(36,3,'Soc capaç de pensar quins són els mecanismes d\'autenticació d\'usuaris, a les meves aplicacions a partir d\'un problema donat.',1,12),(37,1,'SaSoc capaç de trobar la configuració i les rutes d\'una aplicació Laravel i entendre programar configuracions i rutes. seguint pautes.ber',1,13),(38,2,'A més, Soc capaç de crear i modificar tant la configuració com les rutes.',1,13),(39,3,'A més, Soc capaç de saber quines rutes i quina configuració han de tenir les meves aplicacions.',1,13),(40,1,'Soc capaç de trobar les vistes a l\'estructura del Laravel i de programar una visat seguint pautes.',1,14),(41,2,'A més, Soc capaç de crear i modificar vistes amb pautes donades.',1,14),(42,3,'A més Soc capaç de crear le meves vistes depenent de les necessitats de la meva aplicació.',1,14),(43,1,'Soc capaç de trobar els controladors a l\'estructura del Laravel i de programar una visat seguint pautes.',1,15),(44,2,'A més, Soc capaç de crear i modificar controladors amb pautes donades.',1,15),(45,3,'A més Soc capaç de crear els meus controladors depenent de les necessitats de la meva aplicació.',1,15),(46,1,'Soc capaç d\'establir la connexió amb la base de dades amb PDO i amb el framework Laravel, seguint pautes donades.',1,16),(47,2,'A més, Soc capaç de crear una base de dades donada en MySQL i establir la connexió amb aquesta amb PHP PDO i amb  framework Laravel.',1,16),(48,3,'A més, Soc capaç de pensar la meva propia base de dades en MySQL i establir la connexió amb aquesta amb PHP PDO i amb el framework Laravel.',1,16),(49,1,'Soc capaç de recuperar informació de la base de dades i publicar-la en aplicacions web seguint pautes donades, amb PHP PDO i amb Eloquent.',1,17),(50,2,'A més, Soc capaç de recuperar informació de la base de dades i publicar-la en les meves aplicacions web. Puc adaptar codi donat per resoldre el meu propi problema.',1,17),(51,3,'A més, Soc capaç de detectar  la necessitat de mostrar dades que s\'han de recuperar de la base de dades als meus propis programes a partir d\'un problema donat.',1,17),(52,1,'Soc capaç d\'actualitzar i eliminar informació de la base de dades seguint pautes donades, amb PHP PDO i amb Eloquent.',1,18),(53,2,'A més, Soc capaç actualitzar i esborrar de la base de dades en les meves aplicacions web. Puc adaptar codi donat per resoldre el meu propi problema.',1,18),(54,3,'A més, Soc capaç de detectar  la necessitat d\'actualitzar i eliminar informació de la base de dades als meus propis programes a partir d\'un problema donat.',1,18),(55,1,'Conec que és un servei web i per a que serveix.',1,19),(56,2,'A més, identifico els avantatges dels serveis web per a proporcionar funcionalitats a les aplicacions.',1,19),(57,3,'A més, conec les tecnologíes amb les quals programar els serveis web.',1,19),(58,1,'Soc capaç de programar un servei web seguint pautes donades, i verifico el seu funcionament.',1,20),(59,2,'Soc capaç de programar un servei web des de zero, sense pautes, i verifico el seu funcionament.',1,20),(60,3,'Soc capaç de detectar i programar els serveis webs necessaris de les meves aplicacions web a partir d\'un problema donat.',1,20),(61,1,'Conec com es creen comentaris en els serveis web, i genero la documentació, seguint pautes donades.',1,21),(62,2,'Soc capaç de generar documentació de serveis web des de zero, sense seguir pautes.',1,21),(63,3,'Soc capaç de detectar la necessitat de documentació dels serveis web de les meves aplicacions web a partir d\'un problema donat.',1,21),(64,1,'Soc capaç de programar formularis amb framework de servidor, seguint pautes donades i verificar el seu funcionament.',1,22),(65,2,'A més, Soc capaç de programar un nou formulari amb framework de client,des de zero, sense pautes.',1,22),(66,3,'A més, Soc capaç de programar els formularis necessaris de les meves aplicacions web a partir d\'un problema donat, amb un framework de client.',1,22),(67,1,'Soc capaç de programar amb framework client crides per l\'obtenció de dades seguint pautes i mostrar les dades per verificar el seu funcionament.',1,23),(68,2,'A més, Soc capaç de programar amb framework de client crides per l\'obtenció de dades, des de zero, sense pautes.',1,23),(69,3,'A més, Soc capaç de programar crides per l\'obtenció de dades de les meves aplicacions amb framework de client, a partir d\'un problema donat.',1,23),(70,1,'Soc capaç de programar amb framework client crides per inserir, modificar i esborrar dades dades seguint pautes i verificar el seu funcionament.',1,24),(71,2,'A més, Soc capaç de programar amb framework de client crides per inserir, modificar i esborrar dades, des de zero, sense pautes.',1,24),(72,3,'A més, Soc capaç de programar crides per inserir, modificar i esborrar dades de les meves aplicacions amb framework de client, a partir d\'un problema donat.',1,24),(73,1,'Soc capaç de recuperar i procesar dades de dipòsits existents, seguint pautes.',1,25),(74,2,'Soc capaç de recuperar i procesar dades de dipòsits existents, des de zero, sense seguir pautes.',1,25),(75,3,'Soc capaç de recuperar i procesar dades de dipòsits existents, a le meves aplicacions, a partir d\'un problema donat.',1,25),(76,1,'Soc capaç d\'incorporar funcionalitats específiques, seguin pautes.',1,26),(77,2,'Soc capaç d\'incorporar funcionalitats específiques, des de zero, sense pautes.',1,26),(78,3,'Soc capaç d\'analitzar i veure les necesitats d\'utilitzar llibreries de codi en les meves aplicacions a partir d\'un problema donat.',1,26),(79,1,'Soc capaç de programar serveis i aplicacions web utlitizant informació i codi generat per tercers, seguint pautes.',1,27),(80,2,'Soc capaç de programar serveis i aplicacions web utlitizant informació i codi generat per tercers, des de zero, sense seguir pautes.',1,27),(81,3,'Soc capaç d\'analitzar i veure les necesitats d\'utilitzar informació i codi generat per tercers en les meves aplicacions a partir d\'un problema donat.',1,27);
/*!40000 ALTER TABLE `rubriques` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipus_usuaris`
--

DROP TABLE IF EXISTS `tipus_usuaris`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipus_usuaris` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipus` varchar(45) NOT NULL,
  `actiu` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipus_usuaris`
--

LOCK TABLES `tipus_usuaris` WRITE;
/*!40000 ALTER TABLE `tipus_usuaris` DISABLE KEYS */;
INSERT INTO `tipus_usuaris` VALUES (1,'Administrador',1),(2,'Professor',1),(3,'Alumne',1);
/*!40000 ALTER TABLE `tipus_usuaris` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuaris`
--

DROP TABLE IF EXISTS `usuaris`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuaris` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom_usuari` varchar(45) NOT NULL,
  `contrasenya` varchar(256) NOT NULL,
  `correu` varchar(45) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `cognom` varchar(45) NOT NULL,
  `actiu` tinyint NOT NULL DEFAULT '1',
  `tipus_usuaris_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nom_usuari_UNIQUE` (`nom_usuari`),
  UNIQUE KEY `correu_UNIQUE` (`correu`),
  KEY `fk_usuaris_tipus_usuaris1_idx` (`tipus_usuaris_id`),
  CONSTRAINT `fk_usuaris_tipus_usuaris1` FOREIGN KEY (`tipus_usuaris_id`) REFERENCES `tipus_usuaris` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuaris`
--

LOCK TABLES `usuaris` WRITE;
/*!40000 ALTER TABLE `usuaris` DISABLE KEYS */;
INSERT INTO `usuaris` VALUES (1,'admin','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','admin@politecnics.barcelona','Administrador','Politècnics',1,1),(2,'ffernandez','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','ffernandez@politecnics.barcelona','Francisco','Fernández',1,2),(3,'adomingo','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','adomingo@politecnics.barcelona','Antonio','Domingo',1,2),(4,'rquerol','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','rquerol@politecnics.barcelona','Rebeca','Querol',1,2),(5,'ealbujac','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','ealbujac2223@politecnics.barcelona','EVIAM GABRIEL','ALBUJA',1,3),(6,'gcastanom','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','gcastanom2021@cepnet.net','GUILLEM','CASTAÑO',1,3),(7,'jchen','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','jchen2223@politecnics.barcelona','CHEN','JIAJIE',1,3),(8,'jdasilvao','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','jdasilvao2223@politecnics.barcelona','JEAN PAUL MANUEL','DA SILVA',1,3),(9,'ddiaz','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','ddiazt2122@politecnics.barcelona','DESIRÉE','DÍAZ',1,3),(10,'oespejo','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','oespejol2122@politecnics.barcelona','ORIOL','ESPEJO',1,3),(11,'fgarciaa','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','fgarciaa2223@politecnics.barcelona','FRANCISCO','GARCÍA',1,3),(12,'agarciar','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','agarciar2324@politecnics.barcelona','ALEJANDRO','GARCÍA',1,3),(13,'rghenema','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','rghenema2122@politecnics.barcelona','RACHID','GHENEM',1,3),(14,'ijovanovicht','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','ijovanovicht2122@politecnics.barcelona','IVÁN','JOVANOVICH',1,3),(15,'mleivat','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','mleivat2122@politecnics.barcelona','MARIO','LEIVA',1,3),(16,'jmarquezu','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','jmarquezu2223@politecnics.barcelona','JOEL DAVID','MÁRQUEZ',1,3),(17,'imartinezl','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','imartinezl2223@politecnics.barcelona','IVÁN','MARTÍNEZ',1,3),(18,'dnerizb','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','dnerizb2223@politecnics.barcelona','DAVID','NÉRIZ',1,3),(19,'rortim','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','rortim2223@politecnics.barcelona','ROGER','ORTÍ',1,3),(20,'frendont','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','frendont2223@politecnics.barcelona','FILIP','RENDÓN',1,3),(21,'jjoaquinr','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','jjoaquinr2122@politecnics.barcelona','JOAQUÍN','RIQUELME',1,3),(22,'rruizdelafuentec','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','rruizdelafuentec2223@politecnics.barcelona','RAÚL','RUIZ',1,3),(23,'aventurac','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','aventurac2122@politecnics.barcelona','ARNAU','VENTURA',1,3),(24,'aventurav','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','aventurav2223@politecnics.barcelona','ÀLEX','VENTURA',1,3),(25,'aalbaladejog','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','aalbaladejog2122@politecnics.barcelona','Àlex','Albadalejo',1,3),(26,'oarriazag','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','oarriazag2223@politecnics.barcelona','Oscar Armando','Arriaza',1,3),(27,'mcarvajals','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','mcarvajals2122@politecnics.barcelona','Marcelo Alejandro','Carvajal',1,3),(28,'acorresp','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','acorresp2223@politecnics.barcelona','Aleix','Corres',1,3),(29,'pcrespoh','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','pcrespoh2122@politecnics.barcelona','Pol','Crespo',1,3),(30,'jdiazn','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','jdiazn2223@politecnics.barcelona','Javier','Díaz',1,3),(31,'aescobalesg','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','aescobalesg2122@politecnics.barcelona','Alexis','Escobales',1,3),(32,'bgarciab','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','bgarciab2021@cepnet.net','Borja','García',1,3),(33,'jogomeza','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','jogomeza2223@politecnics.barcelona','Jordi Alejandro','Gómez',1,3),(34,'plopezp','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','plopezp2223@politecnics.barcelona','Pedro Manuel','López',1,3),(35,'emartorellv','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','emartorellv2223@politecnics.barcelona','Enric','Martorell',1,3),(36,'mmolinab','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','mmolinab2122@politecnics.barcelona','Mario','Molina',1,3),(37,'mmontecinom','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','mmontecinom2223@politecnics.barcelona','Malena','Montecino',1,3),(38,'mplateror','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','mplateror2324@politecnics.barcelona','Marc','Platero',1,3),(39,'mponsc','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','mponsc2223@politecnics.barcelona','Marc','Pons',1,3),(40,'jquispem','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','jquispem2223@politecnics.barcelona','Josue','Quispe',1,3),(41,'ariverom','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','ariverom2223@politecnics.barcelona','Àlex','Rivero',1,3),(42,'rruizn','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','rruizn2122@politecnics.barcelona','Raul','Ruíz',1,3),(43,'iruiza','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','iruiz-caleroa2223@politecnics.barcelona','Isaac','Ruíz-Calero',1,3),(44,'dsolar','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','dsolar2122@politecnics.barcelona','David','Solà',1,3),(45,'jvickeryp','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','jvickeryp2223@politecnics.barcelona','Jack Hugo','Vickery',1,3),(46,'aeliasv','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','aeliasv37@cepnet.net','Adriana Pamela','Elías',1,3),(47,'pgarciap','$2y$12$HIER/b/vkJuPw6XDlUN.e.K6OfjiwfHLnr8I5SElHS0wujmEnxO1O','pgarciap2324@politecnics.barcelona','Pol','García',1,3);
/*!40000 ALTER TABLE `usuaris` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuaris_has_moduls`
--

DROP TABLE IF EXISTS `usuaris_has_moduls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuaris_has_moduls` (
  `usuaris_id` int NOT NULL,
  `moduls_id` int NOT NULL,
  PRIMARY KEY (`usuaris_id`,`moduls_id`),
  KEY `fk_usuaris_has_moduls_moduls1_idx` (`moduls_id`),
  KEY `fk_usuaris_has_moduls_usuaris1_idx` (`usuaris_id`),
  CONSTRAINT `fk_usuaris_has_moduls_moduls1` FOREIGN KEY (`moduls_id`) REFERENCES `moduls` (`id`),
  CONSTRAINT `fk_usuaris_has_moduls_usuaris1` FOREIGN KEY (`usuaris_id`) REFERENCES `usuaris` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuaris_has_moduls`
--

LOCK TABLES `usuaris_has_moduls` WRITE;
/*!40000 ALTER TABLE `usuaris_has_moduls` DISABLE KEYS */;
INSERT INTO `usuaris_has_moduls` VALUES (2,7),(4,7),(5,7),(6,7),(7,7),(8,7),(9,7),(10,7),(11,7),(12,7),(13,7),(14,7),(15,7),(16,7),(17,7),(18,7),(19,7),(20,7),(21,7),(22,7),(23,7),(24,7),(25,7),(26,7),(27,7),(28,7),(29,7),(30,7),(31,7),(32,7),(33,7),(34,7),(35,7),(36,7),(37,7),(38,7),(39,7),(40,7),(41,7),(42,7),(43,7),(44,7),(45,7),(46,7),(47,7),(3,9);
/*!40000 ALTER TABLE `usuaris_has_moduls` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-23 14:58:32
