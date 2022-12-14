CREATE TABLE `criticas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `id_pelicula` int(11) DEFAULT NULL,
  `nota` decimal(6,2) DEFAULT NULL,
  `texto` text COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_criticas_2_idx` (`id_usuario`),
  KEY `fk_criticas_1_idx` (`id_pelicula`),
  CONSTRAINT `fk_criticas_1` FOREIGN KEY (`id_pelicula`) REFERENCES `peliculas` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_criticas_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;


CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `sinopsis` text COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `cartel` varchar(145) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `notaImdb` decimal(6,2) DEFAULT NULL,
  `director` varchar(45) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;


CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nick` varchar(45) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `password` varchar(45) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;
