CREATE DATABASE `noticias` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci */;

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `encabezado` varchar(45) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `texto` text COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;
