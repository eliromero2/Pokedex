DROP TABLE IF EXISTS `pokemon`;

CREATE TABLE `pokemon` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `numero_identificador` int(11) DEFAULT NULL AUTO_INCREMENT,
  `imagen_path` varchar(255) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `tipo` enum('Fuego','Agua','Planta','Eléctrico','Hielo','Tierra','Volador','Psíquico','Lucha','Veneno','Roca','Bicho','Fantasma','Dragón','Siniestro','Acero','Hada') DEFAULT NULL,
  `descripcion` text,
  `habilidad` varchar(255) DEFAULT NULL,
  `altura` double DEFAULT NULL,
  `peso` double DEFAULT NULL,
  `habitad` varchar(255) DEFAULT NULL   
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `pokemon` VALUES (1,1,'imagenes/pikachu.jpg','Pikachu','Eléctrico','                Pikachu almacena una gran cantidad de electricidad en sus mejillas. Estas parecen cargarse eléctricamente durante la noche mientras duerme.\r\n																																					Las mejillas de Pikachu también pueden ser recargadas mediante una descarga eléctrica, como se ha podido observar en algunos episodios del anime.            ','Electricidad estatica',0.4,6,'Bosque'),(2,2,'imagenes/Charmander.jpg','Charmander','Fuego','                Lagartija con fuegito            ','Prender velas',0.4,6,'Chimenea'),(3,NULL,'imagenes/Eevee.jpg','Eevee','Volador','asdasd',NULL,1,1,'Bosque');

