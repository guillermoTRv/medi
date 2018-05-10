-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-05-2018 a las 19:28:38
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
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `apartados`
--

INSERT INTO `apartados` (`id_apartado`, `id_modulo`, `apartado`, `posicion`) VALUES
(1, 1, 'MÃ©dula Espinal', 2),
(2, 1, 'ClÃ­nica en General', 1),
(6, 3, 'Estomago', 2),
(5, 3, 'Boca', 1),
(7, 4, 'CorazÃ³n', 0),
(8, 12, 'Microbiologia', 0),
(9, 2, 'Endocrino', 0),
(10, 5, 'Respiratorio', 0),
(11, 6, 'Reproductor', 0),
(12, 7, 'Urinario', 0),
(13, 8, 'Hematico', 0),
(14, 9, 'Inmunologia', 0),
(15, 10, 'Tegumentario', 0),
(16, 11, 'Soma', 0);

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ap_clinica`
--

INSERT INTO `ap_clinica` (`id_ap_clinica`, `id_modulo`, `ap_clinica`, `posicion`) VALUES
(1, 1, 'Principios ClÃ­nicos en la NeurologÃ­a', 0);

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id_articulo`, `titulo`, `institucion`, `publicadora`, `autores`, `fecha`, `pais`, `comentario`, `link`) VALUES
(2, 'Vitamina D y remielinizaciÃ³n en la esclerosis mÃºltiple', 'Servicio de NeurologÃ­a, Hospital ClÃ­nico San Carlos, Facultad de Medicina, Universidad Complutense, IdiSSC, Madrid, EspaÃ±a', 'Elevier', 'J. MatÃ­as-GuÃ­u', '08/2016', 'EspaÃ±a', '--', 'http://www.elsevier.es/es-revista-neurologia-295-articulo-vitamina-d-remielinizacion-esclerosis-multiple-S0213485316300652');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material_modulo`
--

DROP TABLE IF EXISTS `material_modulo`;
CREATE TABLE IF NOT EXISTS `material_modulo` (
  `id_materia_mod` int(11) NOT NULL AUTO_INCREMENT,
  `id_modulo` int(11) NOT NULL,
  `material` longtext NOT NULL,
  PRIMARY KEY (`id_materia_mod`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `material_modulo`
--

INSERT INTO `material_modulo` (`id_materia_mod`, `id_modulo`, `material`) VALUES
(1, 1, '<p><img alt=\"\" src=\"http://localhost/medi/imagenes/cefalea_ssp.jpg\" style=\"height:542px; width:430px\" /></p>'),
(2, 2, '<p>SON MECANISMO DE ACCI&Oacute;N DE LA METFORMINA, EXCEPTO:</p><p>A. AUMENTA LA SENSIBILIDAD A LA INSULINA<br />B. MEJORA LA CAPTACI&Oacute;N DE GLUCOSA A NIVEL PERIF&Eacute;RICO<br />C. DISMINUYE LA GLUCOG&Eacute;NESIS A NIVEL HEP&Aacute;TICO<br />D. AUMENTA LA EXCRECI&Oacute;N RENAL DE GLUCOSA -&gt;</p><p>&nbsp;</p><p><img src=\"http://localhost/medi/imagenes/hipotiroidismo_ficha.jpg\" style=\"height:400px; width:400px\" /></p>'),
(3, 3, '--'),
(4, 4, '<p><strong>Sociedad Espa&ntilde;ola&nbsp;de Imagen Cardiaca - Sitio web de tal sociedad, contiene interesantes casos clinicos</strong><br /><span class=\"marker\"><a href=\"https://ecocardio.com/\" target=\"_blank\">https://ecocardio.com/</a></span></p><p>&nbsp;</p><p><img src=\"http://localhost/medi/imagenes/imagen_cora_arterias.jpg\" style=\"height:350px; width:400px\" /></p><p>&nbsp;</p><p><img src=\"http://localhost/medi/imagenes/sistema_renina_ang.jpg\" style=\"height:717px; width:450px\" /></p><p><img src=\"http://localhost/medi/imagenes/triada_taponamiento.jpg\" style=\"height:417px; width:420px\" /></p><p>&nbsp;</p>'),
(5, 5, '<p><img src=\"http://localhost/medi/imagenes/faringitis_strcpcc.jpg\" style=\"height:367px; width:400px\" /></p><p>&nbsp;</p><p><img src=\"http://localhost/medi/imagenes/neumonitis_lupica.jpg\" style=\"height:236px; width:420px\" /></p>'),
(6, 6, '<p><a href=\"https://www.facebook.com/hashtag/uro?source=feed_text\">#URO</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/repaso?source=feed_text\">#REPASO</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/enarm?source=feed_text\">#ENARM</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/casoclinico?source=feed_text\">#CASOCLINICO</a></p><p>&iquest;CU&Aacute;L DE LAS SIGUIENTES MANIOBRAS DIAGN&Oacute;STICAS EST&Aacute; CONTRAINDICADA EN EL C&Aacute;NCER TESTICULAR?</p><p>A. BIOPSIA TESTICULAR<br />B. DISECCI&Oacute;N GANGLIONAR<br />C. ORQUIECTOM&Iacute;A INGUINAL<br />D. QUIMIOTERAPIA</p><p>&nbsp;</p><p><img src=\"http://localhost/medi/imagenes/reactivo_preclampsia.jpg\" style=\"height:300px; width:400px\" /><br />Resp -&gt; B</p><p>La siguiente imagen representa un endometrio desidualizado hipersecretor descrito por la literatura como &quot;Reacci&oacute;n de Arias-Stella&quot;<br />&iquest;Esta imagen es patognomonica de?<br />A. Embarazo&nbsp;<br />B. Embarazo ect&ograve;pico&nbsp;<br />C. Mola<br />D. Aborto</p><p><img src=\"http://localhost/medi/imagenes/imagen_histologia_endometrio.jpg\" style=\"height:177px; width:300px\" /></p><p>resp -&gt; a</p><p><img src=\"http://localhost/medi/imagenes/cancer_endometrial.jpg\" style=\"height:700px; width:450px\" /></p><p>&nbsp;</p><p><img src=\"http://localhost/medi/imagenes/periodos_trabajo_parto.jpg\" style=\"height:317px; width:400px\" /></p><p>&nbsp;</p><p><img src=\"http://localhost/medi/imagenes/pregunta_parto.jpg\" style=\"height:315px; width:420px\" /></p><p>resp -&gt; c</p>'),
(7, 7, '<p><img src=\"http://localhost/medi/imagenes/indicaciones_dialisis.jpg\" style=\"height:315px; width:420px\" /></p>'),
(8, 8, '<p><a href=\"https://www.facebook.com/hashtag/repaso?source=feed_text\">#Repaso</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/genetica?source=feed_text\">#Genetica</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/quizzmed?source=feed_text\">#Quizzmed</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/enarm2018?source=feed_text\">#ENARM2018</a>&nbsp;La trisomia 21 suele asociarse con:</p><p>A. Nefroblastoma<br />B. Meduloblastoma&nbsp;<br />C. Leucemia linfobl&aacute;stica -&gt;<br />D. Tumor c&eacute;lulas germinales<br />E. Osteosarcoma</p>'),
(9, 9, '--'),
(10, 10, '<img src=\"http://localhost/medi/imagenes/32191088_683870745140747_3972822423559995392_n.jpg\">'),
(11, 11, '--'),
(12, 12, '<p><img src=\"http://localhost/medi/imagenes/32169804_684387008422454_4753432454730088448_n.jpg\" style=\"height:300px; width:400px\" /></p><p>&nbsp;</p><p>&nbsp;</p><p><img src=\"http://localhost/medi/imagenes/32105693_684091571785331_4455886474901979136_n.jpg\" style=\"height:328px; width:400px\" /></p><p>&nbsp;</p><p><img src=\"http://localhost/medi/imagenes/exantemas.jpg\" style=\"height:402px; width:450px\" /></p>');

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

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
(11, 'Sistema O.M.A', 'SOMA', 'Principal', 'oma', 11, 3),
(12, 'Mibrobiologia - Infecto', 'Infectologia', 'Principal', 'microbiologia', 12, 4);

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `relacion_articulos`
--

INSERT INTO `relacion_articulos` (`id_relacion`, `id_articulo`, `categoria`, `id_modulo`, `id_apartado`, `id_subapartado`) VALUES
(1, 2, 'anatofisiologia', 1, 2, 9);

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
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subapartados`
--

INSERT INTO `subapartados` (`id_subapartado`, `id_apartado`, `subapartado`, `recopilador`, `presentacion`, `temporal`, `posicion`) VALUES
(1, 1, 'Ficha General', '<h3><strong>Ubicacion:</strong></h3><p>snell * Canal vertebral 3/4 superiores<br />waxman * 2/3 superiores canal vertebral adultos<br />&nbsp;</p><h3><strong>Forma:</strong></h3><p>*Casi Cilindrica - Aplanamiento anteroporterior<br />&nbsp;</p><h3><strong>Dimensiones:</strong></h3><p>*42cm - 45cm. Diametro varia de longitud<br />*Alargamiento se detiene 4/5 a&ntilde;o</p><h3><strong>Limites:</strong></h3><p>Snell * Foramen magno del hueso occipital<br />*Adultos: &quot;&quot; - L1/L2<br />*Neonatos: &quot;&quot; - L3/L4</p><h3><strong>Medios de Fijacion:</strong></h3><h3><strong>Relaciones:</strong></h3><h3><strong>Medios de Proteccion:</strong></h3><p>&nbsp;</p>', '', '', 1),
(3, 1, 'Funciones', '<p><br />*Respuestas Reflejas Rapidas&nbsp;<br />*Via de comunicacion Encefalo - Cuerpo<br />Snell * Cause de informacion Encefalo - Cuerpo<br />*100 millones de neuronas</p><p>&nbsp;</p>', '', '', 7),
(4, 1, 'Estructuras de protecciÃ³n - Columna', '', '', '', 3),
(5, 1, 'Estructuras de ProtecciÃ³n - Meninges', '<h3>Cavidad Epidural&nbsp;</h3><p>*Grasa y tejido conectivo&nbsp;</p><h3>Duramadre</h3><p>*Gruesa y dura&nbsp;<br />*Tejido conectivo denso irregular&nbsp;<br />*<strong>Continuidad:&nbsp;</strong>Agujero Magno del hueso occipital - S2.&nbsp;<br /><strong>*Continuidad:&nbsp;</strong>Con el epineuro</p><h3>Espacio Subdural</h3><p>*liquido intersticial</p><h3>Aracnoides</h3><p>*Delgada y avascular&nbsp;<br />*Delgadas fibras colagenas laxas y fibras elasticas</p><h3>Espacio Subaracnoideo</h3><p>*Contiene LCF</p><h3>Piamadre&nbsp;</h3><p>*Fina y transparente<br />*Celulas pavimentosas cuboides<br />*Vascularizada</p><h3>Liamentos Dentados</h3><p>*Engrosamientos de la piamadre<br />*Entre raices anteriores y posteriores<br />*Medio&nbsp;de fijacion</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>', '', '<p><span class=\"marker\">Idea de Material: Hacer un cuadro comparativo de las diferentes capas de las meninges. Celulas, tipo de proteinas, caracteristicas estructurales. Extension. Vascularizacion. etc</span></p>', 4),
(6, 1, 'Aspectos AnatÃ³micos Particulares', '<p><br /><strong>Intumescencia Cervical</strong></p><p>*C4 - T1 -&gt; Plexo Braquial</p><p><strong>Intumescencia Lumar&nbsp;</strong></p><p>*T9 - T12&nbsp;-&gt; Plexo lumbosacro<br />wax * Se afina y forma el cono medular<br />wax * Las intumescencias presentan un alto numero de NMI</p><p><strong>Cono medular&nbsp;</strong></p><p>*Termina en L1/L2<br />Snell * Desciende de aqui el filum terminale</p><p><strong>Filum Terminale</strong></p><p><strong>*</strong>Prolongacion de la piamadre - Extension ??&nbsp;<br />*Se fija al coxis&nbsp;<br />Wax * Se adhiere al saco dural distal<br />Wax * Piamadre, fibras gliales, con frecuencia una vena</p><p><strong>Cola de Caballo</strong></p><p><strong>Fisura media anterior&nbsp;</strong></p><p>wax * Pliegue de pia y vasos sanguineos</p><p><strong>Surco medio posterior</strong></p><p>&nbsp;</p>', '', '<p>Articulo donde encontre la imagen de la medula -&gt;&nbsp;http://www.elsevier.es/es-revista-revista-espanola-medicina-legal-285-articulo-autopsia-del-raquis-S0377473209700161</p><p><img src=\"http://www.elsevier.es/ficheros/publicaciones/03774732/0000003500000002/v1_201305061035/S0377473209700161/v1_201305061035/es/main.assets/gr5.jpeg\" style=\"width:500px\" /></p><p>&nbsp;</p><p>&nbsp;</p><img src = \"https://image.slidesharecdn.com/tomas-englermedula4704/95/tomas-englermedula-5-728.jpg?cb=1181201162\"><p><img src=\"http://userscontent2.emaze.com/images/d63b5223-9ed0-4b92-b14d-f635c2fbd656/Slide20_Pic1_636313400065688467.png\" /></p><p>&nbsp;</p>', 2),
(7, 1, 'Nervios y RaÃ­ces', '<p><br />*Raices: Unen cada nervio con un segmento medular.&nbsp;<br />*Raicillas&nbsp;<br />*Raiz Posterior<br />*Ganglio de la raiz posterior<br />*Raiz Ventral</p><p><strong>Nivel medular y nivel de salida de los nervios&nbsp;</strong></p><p>&nbsp;</p>', '', '', 6),
(8, 1, 'DivisiÃ³n SegmentarÃ­a de la MÃ©dula Espinal', '<p><br />tort *Cada par emerge a intervalos regulares&nbsp;de un segmento espinal a traves de los foramenes intervertrebales&nbsp;<br />&nbsp;</p><p><strong>Division General</strong></p><p>tort *8.S Cervicales&nbsp; &nbsp; &nbsp; &nbsp; 12.S Toracicos&nbsp; &nbsp; &nbsp; &nbsp;5.S Lumbares<br />&nbsp; &nbsp; &nbsp; &nbsp; 5.S Sacros&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1.S&nbsp; Coccigeo</p>', '', '', 5),
(9, 2, 'Neuronas', '<p>Articulo so</p>', '', '<p>Articulo sobre remielinizacion&nbsp;<br />http://www.elsevier.es/es-revista-neurologia-295-articulo-vitamina-d-remielinizacion-esclerosis-multiple-S0213485316300652</p>', 0),
(10, 1, 'Aspectos Clinicos', '<p>Waxman -&gt; pp 43</p><p>*Anancefalia -&gt; Incompatible con la vida</p><p><img src=\"https://embarazoactual.com/wp-content/uploads/2015/04/anencefalia.gif\" /></p><p><br />*Espina Bifida -&gt; Cierre caudal inadecuado del tubo neural</p><p><img src=\"https://columnavertebral.net/wp-content/uploads/2016/05/espina-bifida.jpg\" /></p><p>&nbsp;</p><p>* Meningocele y Mielomeningocele</p><p><img src=\"https://www.sciencephoto.com/image/778126/530wm/C0305733-Spina_Bifida%2C_Illustration-SPL.jpg\" /></p><p>&nbsp;</p>', '', '', 10),
(11, 1, 'Funciones Motoras y reflejos medulares', '<p><strong>Organizacion de la medula espinal para las funciones motoras</strong></p><p>* Fibra sensitiva -&gt; Motoneruona<br />* Fibra sensitiva -&gt; Interneurona -&gt; Subir o bajar etc&nbsp;<br />* Muchas maneras de formar circuitos</p><p><strong>Motoneuronas anteriores&nbsp;</strong></p><p>&nbsp;</p><p>&nbsp;</p>', '', '', 9),
(12, 3, 'Cuerpo', '', '', '', 0),
(14, 5, 'SecreciÃ³n Salival', '<p><strong>Produccion</strong></p><p>*Glandulas Parotida, submandibular y sublingual.<br />*Produccion 1000 - 1500 ml/ dia&nbsp;</p><p><strong>Componentes</strong></p><p>*Amilasa - IgA - Lizosima - Mucinas<br />*Los componentes difieren seun la glandula</p><p><strong>Funciones&nbsp;</strong></p><p><strong>*</strong>Lubricar bolo alimentacion&nbsp;<br />*Neutralizar secreciones acidas que refluyan al esofago<br />*Facilita la deglucion<br />*Mantiene humeda y limpia la boca<br />*Solvente para las moleculas que estimulan papilas gustativas<br />*Ayuda al habla<br />*Accion Antimicrobiana<br /><span class=\"marker\">Xerostomia</span><br />&nbsp;</p><p><strong>Caracteristicas</strong></p><p><strong>*</strong>Hipotonica con respecto al plasma<br />*Alcalina</p><p><strong>Secrecion</strong></p><p>*Estimulo -&gt; Dilatacion vasos -&gt; Mayor produccion y secrecion -&gt; Reabsorcion Na/Cl Secrecion K/Bicarbonato&nbsp;<br />*Conductos -&gt; Impermeables&nbsp;</p><p>*Mayor control parasimpatico&nbsp;</p><p>&nbsp;</p><p><img src=\"http://localhost/medi/imagenes/controlsalival.png\" /></p>', '', '', 0),
(15, 6, 'SecreciÃ³n GÃ¡strica', '<p>*Cardias y Region Pilorica -&gt; Secrecion de moco<br />*Cuerpo del estomago -&gt; Celulas parietales y celulas principales&nbsp;</p><p>*Celulas mucosas -&gt; Moco y HCO3<br />*Modelo o imagen glandular -&gt; Me pone en duda lo de arriba<br />*Fosa gastrica ??&nbsp;</p><p><strong>Origen y Regulacion de las secreciones gastricas</strong><br />&nbsp;</p>', '', '', 0);

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
