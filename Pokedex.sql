create database pokedex;
use pokedex;

create table pokemon (id INT AUTO_INCREMENT PRIMARY KEY,
    numero_identificador INT,
    imagen_path VARCHAR(255),
    nombre VARCHAR(100),
    tipo ENUM('Fuego', 'Agua', 'Planta', 'Eléctrico', 'Hielo', 'Tierra', 'Volador', 'Psíquico', 'Lucha', 'Veneno', 'Roca', 'Bicho', 'Fantasma', 'Dragón', 'Siniestro', 'Acero', 'Hada'),
    descripcion TEXT,
    habilidad VARCHAR(255),
    altura double,
    peso double, 
    habitad VARCHAR(255)
);

INSERT INTO pokemon (numero_identificador,imagen_path,nombre, tipo,descripcion,habilidad,altura,peso,habitad) VALUES(1,NULL,"Pikachu",'Eléctrico',"Pikachu almacena una gran cantidad de electricidad en sus mejillas. Estas parecen cargarse eléctricamente durante la noche mientras duerme.
																																					Las mejillas de Pikachu también pueden ser recargadas mediante una descarga eléctrica, como se ha podido observar en algunos episodios del anime.","Electricidad estatica", 0.4,6.0,"Bosque");