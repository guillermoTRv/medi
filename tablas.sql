CREATE TABLE modulos(
	id_modulo INT NOT NULL AUTO_INCREMENT,
	modulo varchar(24) NOT NULL,
	estudio varchar(50) NOT NULL,
	tipo varchar(12) NOT NULL,
	getvar varchar(24) NOT NULL,
	posicion INT NOT NULL,
	primary key(id_modulo)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE apartados(
	id_apartado INT NOT NULL AUTO_INCREMENT,
	id_modulo INT NOT NULL,
	apartado varchar(140) NOT NULL,
	posicion int NOT NULL,
	primary key(id_apartado)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE subapartados(
	id_subapartado INT NOT NULL AUTO_INCREMENT,
	id_apartado INT NOT NULL,
	subapartado varchar(100),
	texto_borrador LONGTEXT NOT NULL,
	texto_limpio LONGTEXT NOT NULL,
	posicion INT NOT NULL,
	primary key(id_subapartado)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;



CREATE TABLE ap_clinica(
	id_ap_clinica INT NOT NULL AUTO_INCREMENT,
	id_modulo INT NOT NULL,
	ap_clinica varchar(140) NOT NULL,
	posicion int NOT NULL,
	primary key(id_apartado)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE ap_farma(
	id_ap_farma INT NOT NULL AUTO_INCREMENT,
	id_modulo INT NOT NULL,
	ap_farma varchar(140) NOT NULL,
	posicion int NOT NULL,
	primary key(id_apartado)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE vitacora_subapartado(
	id_vitacora INT NOT NULL AUTO_INCREMENT,
	id_subapartado INT NOT NULL,
	texto_borrador LONGTEXT NOT NULL,
	texto_limpio LONGTEXT NOT NULL,
	fecha datetime NOT NULL,
	primary key(id_vitacora)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE articulos(
	id_articulo INT NOT NULL AUTO_INCREMENT,
	/*categoria varchar(15) NOT NULL,
	id_modulo int NOT NULL,
	id_apartado int NOT NULL,
	id_subapartado int,*/
	titulo varchar(140) NOT NULL,
	institucion varchar(200) NOT NULL,
	publicadora varchar(200) NOT NULL,
	autores varchar(200) NOT NULL
	fecha varchar(30) NOT NULL,
	pais varchar(140) NOT NULL,
	comentario varchar(500),
	link varchar(140),
	primary key(id_articulo)
)

CREATE TABLE relacion_articulos(
	id_relacion INT NOT NULL AUTO_INCREMENT,
	id_articulo INT NOT NULL,
	categoria varchar(15) NOT NULL,
	id_modulo int NOT NULL,
	id_apartado int NOT NULL,
	id_subapartado int,
	primary key(id_relacion)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE clinicas(
	id_clinica INT NOT NULL AUTO_INCREMENT,
	id_modulo INT NOT NULL,
	id_apartado INT NOT NULL,
	/*id_subapartado INT,*/
	titulo varchar(140) NOT NULL,
	recopilador LONGTEXT NOT NULL,
	presentacion LONGTEXT NOT NULL,
	guia_uno LONGTEXT NOT NULL,
	guia_dos LONGTEXT NOT NULL,
	fecha_registro datetime NOT NULL,
	primary key(id_clinica)
)ENGINE=MyISAM DEFAULT CHARSET=latin1; 

CREATE TABLE rel_clinicas_af(
	id_relacion INT NOT NULL AUTO_INCREMENT,
	id_clinica INT NOT NULL,
	id_modulo INT NOT NULL,
	id_apartado INT NOT NULL,
	id_subapartado INT NOT NULL,
	fecha_registro datetime NOT NULL,
	primary key(id_relacion)
)ENGINE=MyISAM DEFAULT CHARSET=latin1; 

CREATE TABLE rel_clinica_sistemas(
	id_relacion INT NOT NULL AUTO_INCREMENT,
	id_clinica INT NOT NULL,
	id_modulo INT NOT NULL
	primary key(id_relacion)
)ENGINE=MyISAM DEFAULT CHARSET=latin1; 

CREATE TABLE material_subapartados(
	id_material_sub INT NOT NULL AUTO_INCREMENT,
	id_subapartado INT NOT NULL,
	interrogantes LONGTEXT NOT NULL,
	reactivos LONGTEXT NOT NULL,
	casos_clinicos_xt LONGTEXT NOT NULL,
	casos_clinicos_img LONGTEXT NOT NULL,
	bibliografia LONGTEXT NOT NULL,
	notas_clinicas LONGTEXT NOT NULL,
	notas_trabajo LONGTEXT NOT NULL,

)ENGINE=MyISAM DEFAULT CHARSET=latin1; 

CREATE TABLE material_modulo(
	id_materia_mod INT NOT NULL AUTO_INCREMENT,
	id_modulo INT NOT NULL,
	texto LONGTEXT NOT NULL,
	primary key(id_materia_mod)
)ENGINE=MyISAM DEFAULT CHARSET=latin1; 