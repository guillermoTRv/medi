-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 08-05-2018 a las 15:44:45
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `medi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartados`
--

DROP TABLE IF EXISTS `apartados`;
CREATE TABLE IF NOT EXISTS `apartados` (
  `id_apartado` int(11) NOT NULL AUTO_INCREMENT,
  `id_modulo` int(11) NOT NULL,
  `apartado` varchar(140) NOT NULL,
  `posicion` int(11) NOT NULL,
  PRIMARY KEY (`id_apartado`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `apartados`
--

INSERT INTO `apartados` (`id_apartado`, `id_modulo`, `apartado`, `posicion`) VALUES
(1, 1, 'MÃ©dula Espinal', 0),
(2, 1, 'ClÃ­nica en General', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ap_clinica`
--

DROP TABLE IF EXISTS `ap_clinica`;
CREATE TABLE IF NOT EXISTS `ap_clinica` (
  `id_ap_clinica` int(11) NOT NULL AUTO_INCREMENT,
  `id_modulo` int(11) NOT NULL,
  `ap_clinica` varchar(140) NOT NULL,
  `posicion` int(11) NOT NULL,
  PRIMARY KEY (`id_ap_clinica`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ap_clinica`
--

INSERT INTO `ap_clinica` (`id_ap_clinica`, `id_modulo`, `ap_clinica`, `posicion`) VALUES
(1, 1, 'ClÃ­nica en General', 0),
(4, 2, 'ClÃ­nica en General', 1),
(5, 2, 'Meningitis', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ap_farma`
--

DROP TABLE IF EXISTS `ap_farma`;
CREATE TABLE IF NOT EXISTS `ap_farma` (
  `id_ap_farma` int(11) NOT NULL AUTO_INCREMENT,
  `id_modulo` int(11) NOT NULL,
  `ap_farma` varchar(140) NOT NULL,
  `posicion` int(11) NOT NULL,
  PRIMARY KEY (`id_ap_farma`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

DROP TABLE IF EXISTS `articulos`;
CREATE TABLE IF NOT EXISTS `articulos` (
  `id_articulo` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(140) NOT NULL,
  `institucion` varchar(200) NOT NULL,
  `publicadora` varchar(200) NOT NULL,
  `autores` varchar(200) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  `pais` varchar(140) NOT NULL,
  `comentario` varchar(500) DEFAULT NULL,
  `link` varchar(140) DEFAULT NULL,
  PRIMARY KEY (`id_articulo`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id_articulo`, `titulo`, `institucion`, `publicadora`, `autores`, `fecha`, `pais`, `comentario`, `link`) VALUES
(1, 'g1', 'g2', 'g3', 'g4', 'g5', 'g6', 'g7', 'g8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

DROP TABLE IF EXISTS `modulos`;
CREATE TABLE IF NOT EXISTS `modulos` (
  `id_modulo` int(11) NOT NULL AUTO_INCREMENT,
  `modulo` varchar(24) NOT NULL,
  `estudio` varchar(50) NOT NULL,
  `tipo` varchar(12) NOT NULL,
  `getvar` varchar(24) NOT NULL,
  `posicion` int(11) NOT NULL,
  `color` int(11) NOT NULL,
  PRIMARY KEY (`id_modulo`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`id_modulo`, `modulo`, `estudio`, `tipo`, `getvar`, `posicion`, `color`) VALUES
(1, 'Sistema Nervioso', 'Neurologia', 'Principal', 'nervioso', 1, 1),
(2, 'Sistema Endocrino', 'Endocrinologia', 'Principal', 'endocrino', 2, 2),
(3, 'Sistema Digestivo', 'Gastroenterologia', 'Principal', 'digestivo', 3, 3),
(4, 'Sistema Cardiovascular', 'Cardiologia', 'Principal', 'cardiovascular', 4, 4),
(5, 'Sistema Respiratorio', 'Neumologia Rinolaringologia', 'Principal', 'respiratorio', 5, 1),
(6, 'Sistema Reproductor', 'Ginecologia Urologia.Repr', 'Principal', 'reproductor', 6, 2),
(7, 'Sistema Urinario', 'Nefrologia Vias Urinarias', 'Principal', 'urinario', 7, 3),
(8, 'Sistema Hematico', 'Hematologia', 'Principal', 'hematico', 8, 4),
(9, 'Sistema Inmunologico', 'Inmunologia', 'Principal', 'inmunologico', 9, 1),
(10, 'Sistema Tegumentario', 'Dermatologia', 'Principal', 'tegumentario', 10, 2),
(11, 'Sistema O.M.A', 'SOMA', 'Principal', 'oma', 11, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion_articulos`
--

DROP TABLE IF EXISTS `relacion_articulos`;
CREATE TABLE IF NOT EXISTS `relacion_articulos` (
  `id_relacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_articulo` int(11) NOT NULL,
  `categoria` varchar(15) NOT NULL,
  `id_modulo` int(11) NOT NULL,
  `id_apartado` int(11) NOT NULL,
  `id_subapartado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_relacion`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subapartados`
--

DROP TABLE IF EXISTS `subapartados`;
CREATE TABLE IF NOT EXISTS `subapartados` (
  `id_subapartado` int(11) NOT NULL AUTO_INCREMENT,
  `id_apartado` int(11) NOT NULL,
  `subapartado` varchar(100) DEFAULT NULL,
  `recopilador` longtext,
  `presentacion` longtext,
  `temporal` longtext NOT NULL,
  `posicion` int(11) NOT NULL,
  PRIMARY KEY (`id_subapartado`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subapartados`
--

INSERT INTO `subapartados` (`id_subapartado`, `id_apartado`, `subapartado`, `recopilador`, `presentacion`, `temporal`, `posicion`) VALUES
(1, 1, 'Ficha General', '<h3><strong>Ubicacion:</strong></h3><p>&nbsp;</p><h3><strong>Forma:</strong></h3><p>*Casi Cilindrica - Aplanamiento anteroporterior<br />&nbsp;</p><h3><strong>Dimensiones:</strong></h3><p>*42cm - 45cm. Diametro varia de longitud<br />*Adultos: &quot;&quot; - L1/L2<br />*Neonatos: &quot;&quot; - L3/L4<br />*Alargamiento se detiene 4/5 a&ntilde;o</p><h3><strong>Limites:</strong></h3><h3><strong>Medios de Fijacion:</strong></h3><h3><strong>Relaciones:</strong></h3><h3><strong>Medios de Proteccion:</strong></h3><p>&nbsp;</p>', '', '', 1),
(3, 1, 'Funciones', '<p><br />*Respuestas Reflejas Rapidas&nbsp;<br />*Via de comunicacion Encefalo - Cuerpo<br />*100 millones de neuronas</p><p>&nbsp;</p>', '', '', 7),
(4, 1, 'Estructuras de protecciÃ³n - Columna', '', '', '', 3),
(5, 1, 'Estructuras de ProtecciÃ³n - Meninges', '<h3>Cavidad Epidural&nbsp;</h3><p>*Grasa y tejido conectivo&nbsp;</p><h3>Duramadre</h3><p>*Gruesa y dura&nbsp;<br />*Tejido conectivo denso irregular&nbsp;<br />*<strong>Continuidad:&nbsp;</strong>Agujero Magno del hueso occipital - S2.&nbsp;<br /><strong>*Continuidad:&nbsp;</strong>Con el epineuro</p><h3>Espacio Subdural</h3><p>*liquido intersticial</p><h3>Aracnoides</h3><p>*Delgada y avascular&nbsp;<br />*Delgadas fibras colagenas laxas y fibras elasticas</p><h3>Espacio Subaracnoideo</h3><p>*Contiene LCF</p><h3>Piamadre&nbsp;</h3><p>*Fina y transparente<br />*Celulas pavimentosas cuboides<br />*Vascularizada</p><h3>Liamentos Dentados</h3><p>*Engrosamientos de la piamadre<br />*Entre raices anteriores y posteriores<br />*Medios de fijacion</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>', '', '<p><span class=\"marker\">Idea de Material: Hacer un cuadro comparativo de las diferentes capas de las meninges. Celulas, tipo de proteinas, caracteristicas estructurales. Extension. Vascularizacion. etc</span></p>', 4),
(6, 1, 'Aspectos AnatÃ³micos Particulares', '<p><br /><strong>Intumescencia Cervical</strong></p><p>*C4 - T1 -&gt;&nbsp;</p><p><strong>Intumescencia Lumar&nbsp;</strong></p><p>*T9 - T12&nbsp;-&gt;</p><p><strong>Cono medular&nbsp;</strong></p><p>*Termina en L1/L2</p><p><strong>Filum Terminale</strong></p><p><strong>*</strong>Prolongacion de la piamadre - Extension ??&nbsp;<br />*Se fija al coxis&nbsp;</p><p><strong>Cola de Caballo</strong></p><p>&nbsp;</p>', '', '', 2),
(7, 1, 'Nervios y RaÃ­ces', '<p><br />*Raices: Unen cada nervio con un segmento medular.&nbsp;<br />*Raicillas&nbsp;<br />*Raiz Posterior<br />*Ganglio de la raiz posterior<br />*Raiz Ventral</p><p><strong>Nivel medular y nivel de salida de los nervios&nbsp;</strong></p><p>&nbsp;</p>', '', '', 6),
(8, 1, 'DivisiÃ³n SegmentarÃ­a de la MÃ©dula Espinal', '<p><br />*Cada par emerge a intervalos regulares&nbsp;de un segmento espinal a traves de los foramenes intervertrebales&nbsp;<br />&nbsp;</p><p><strong>Division General</strong></p><p>*8.S Cervicales&nbsp; &nbsp; &nbsp; &nbsp; 12.S Toracicos&nbsp; &nbsp; &nbsp; &nbsp;5.S Lumbares<br />&nbsp;5.S Sacros&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1.S&nbsp; Coccigeo</p>', '', '', 5),
(9, 2, 'Neuronas', '<p>Articulo so</p>', '', '<p>Articulo sobre remielinizacion&nbsp;<br />http://www.elsevier.es/es-revista-neurologia-295-articulo-vitamina-d-remielinizacion-esclerosis-multiple-S0213485316300652</p>', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vitacora_subapartado`
--

DROP TABLE IF EXISTS `vitacora_subapartado`;
CREATE TABLE IF NOT EXISTS `vitacora_subapartado` (
  `id_vitacora` int(11) NOT NULL AUTO_INCREMENT,
  `id_subapartado` int(11) NOT NULL,
  `texto_borrador` longtext NOT NULL,
  `texto_limpio` longtext NOT NULL,
  `temporal` longtext NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id_vitacora`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vitacora_subapartado`
--

INSERT INTO `vitacora_subapartado` (`id_vitacora`, `id_subapartado`, `texto_borrador`, `texto_limpio`, `temporal`, `fecha`) VALUES
(1, 8, '<p><br />*Cada par emerge a intervalos regulares&nbsp;de un segmento espinal a traves de los foramenes intervertrebales&nbsp;<br />&nbsp;</p><p><strong>Division General</strong></p><p>*8.S Cervicales&nbsp; &nbsp; &nbsp; &nbsp; 12.S Toracicos&nbsp; &nbsp; &nbsp; &nbsp;5.S Lumbares<br />&nbsp;5.S Sacros&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1.S&nbsp; Coccigeo</p>', '', '', '2018-05-07 16:51:43'),
(2, 7, '<p><br />*Raices: Unen cada nervio con un segmento medular.&nbsp;<br />*Raicillas&nbsp;<br />*Raiz Posterior<br />*Ganglio de la raiz posterior<br />*Raiz Ventral</p><p><strong>Nivel medular y nivel de salida de los nervios&nbsp;</strong></p><p>&nbsp;</p>', '', '', '2018-05-07 16:51:54'),
(3, 3, '<p><br />*Respuestas Reflejas Rapidas&nbsp;<br />*Via de comunicacion Encefalo - Cuerpo<br />*100 millones de neuronas</p><p>&nbsp;</p>', '', '', '2018-05-07 16:52:04'),
(4, 8, '<p><br />*Cada par emerge a intervalos regulares&nbsp;de un segmento espinal a traves de los foramenes intervertrebales&nbsp;<br />&nbsp;</p><p><strong>Division General</strong></p><p>*8.S Cervicales&nbsp; &nbsp; &nbsp; &nbsp; 12.S Toracicos&nbsp; &nbsp; &nbsp; &nbsp;5.S Lumbares<br />&nbsp;5.S Sacros&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1.S&nbsp; Coccigeo</p>', '', '', '2018-05-07 16:52:18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
