-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: zando_db
-- ------------------------------------------------------
-- Server version	5.7.17-0ubuntu0.16.04.1

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
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Product 1','PRODUCT123',499.25,'active',1,'https://dummyimage.com/300x400/000/fff.jpg&text=PRODUCT+1','Zando'),(2,'Product 2',NULL,493.25,'active',1,'https://dummyimage.com/300x400/000/fff.jpg&text=PRODUCT+2','adidas'),(3,'Product 3','PRODUCT345',1099.25,'active',1,'https://dummyimage.com/300x400/000/fff.jpg&text=PRODUCT+3','adidas'),(4,'Product 4','PRODUCT456',NULL,'active',1,'https://dummyimage.com/300x400/000/fff.jpg&text=PRODUCT+4','Zando'),(5,'Product 5','PRODUCT567',100.99,'inactive',1,'https://dummyimage.com/300x400/000/fff.jpg&text=PRODUCT+5','Zando'),(6,'Product 6','PRODUCT678',100.99,'active',0,'https://dummyimage.com/300x400/000/fff.jpg&text=PRODUCT+6','Zando'),(7,'Product 7','PRODUCT789',99.00,'active',1,'https://dummyimage.com/300x400/000/fff.jpg&text=PRODUCT+7','Zando'),(8,'Product 8','PRODUCT8910',99.00,'deleted',1,'https://dummyimage.com/300x400/000/fff.jpg&text=PRODUCT+8','Zando'),(9,'Product 9','PRODUCT91011',123.45,'active',1,NULL,'adidas');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-22 16:57:58
