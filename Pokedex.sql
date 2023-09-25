CREATE DATABASE IF NOT EXISTS pokedex;
USE pokedex;

DROP TABLE IF EXISTS `pokemon`;
CREATE TABLE `pokemon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero_identificador` int(11) DEFAULT NULL,
  `imagen_path` varchar(255) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `tipo` enum('Fuego','Agua','Planta','Eléctrico','Hielo','Tierra','Volador','Psíquico','Lucha','Veneno','Roca','Bicho','Fantasma','Dragón','Siniestro','Acero','Hada') DEFAULT NULL,
  `descripcion` text,
  `habilidad` varchar(255) DEFAULT NULL,
  `altura` double DEFAULT NULL,
  `peso` double DEFAULT NULL,
  `habitad` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `pokemon` VALUES (2,4,'imagenes/Charmander.jpg','Charmander','Fuego','                Lagartija con fuegito            ','Prender velas',0.4,6,'Chimenea'),(3,124,'imagenes/Eevee.jpg','Eevee','Agua','                Un perrito copado            ',NULL,1,1,'Bosque'),(8,123,'imagenes/Bulbasaur.jpg.jpg','Tomas Gomez','Fuego','asdasdasd',NULL,1,1,'Bosque');


-- USERS

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(80) NOT NULL,
  `password` varchar(120) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` VALUES (1,'admin','0192023a7bbd73250516f069df18b500'); -- pw: admin123