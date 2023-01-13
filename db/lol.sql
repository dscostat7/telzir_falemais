/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE lol;

USE lol;

DROP TABLE IF EXISTS `rate`;

-- rate definition

CREATE TABLE `rate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cod_orig` int(3) NOT NULL,
  `name_orig` varchar(100) NOT NULL,
  `cod_dest` int(3) NOT NULL,
  `name_dest` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rate_cod_unique` (`cod_orig`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `rate` WRITE;
/*!40000 ALTER TABLE `rate` DISABLE KEYS */;

INSERT INTO `rate` (`id`, `cod_orig`, `name_orig`, `cod_dest`, `name_dest`, `price`)
VALUES
 (1, 011, 'São Paulo', 016, 'São Paulo', 1.9),
 (2, 016, 'São Paulo', 011, 'São Paulo', 2.9),
 (3, 011, 'São Paulo', 017, 'São Paulo', 1.7);
 (4, 017, 'São Paulo', 011, 'São Paulo', 2.7);
 (5, 011, 'São Paulo', 018, 'São Paulo', 0.9);
 (6, 018, 'São Paulo', 011, 'São Paulo', 1.9);

/*!40000 ALTER TABLE `rate` ENABLE KEYS */;
UNLOCK TABLES;
