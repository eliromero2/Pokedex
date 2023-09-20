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

INSERT INTO `pokemon` VALUES (1,123,'imagenes/pikachu.jpg','Pikachu','Eléctrico','                Pikachu almacena una gran cantidad de electricidad en sus mejillas. Estas parecen cargarse eléctricamente durante la noche mientras duerme.\r\n																																					Las mejillas de Pikachu también pueden ser recargadas mediante una descarga eléctrica, como se ha podido observar en algunos episodios del anime.            ','Electricidad estatica',0.4,6,'Bosque'),(2,4,'imagenes/Charmander.jpg','Charmander','Fuego','                Lagartija con fuegito            ','Prender velas',0.4,6,'Chimenea'),(3,124,'imagenes/Eevee.jpg','Eevee','Fuego','Un perrito copado',NULL,1,1,'Bosque');


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