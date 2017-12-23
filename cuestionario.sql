-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-12-2017 a las 21:06:57
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cuestionario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_preguntas`
--

CREATE TABLE `wp_preguntas` (
  `id` int(11) NOT NULL,
  `enunciado` varchar(500) NOT NULL,
  `respuesta1` varchar(100) NOT NULL,
  `respuesta2` varchar(100) NOT NULL,
  `respuesta3` varchar(100) NOT NULL,
  `imagen` varchar(20) NOT NULL,
  `dificultad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `wp_preguntas`
--

INSERT INTO `wp_preguntas` (`id`, `enunciado`, `respuesta1`, `respuesta2`, `respuesta3`, `imagen`, `dificultad`) VALUES
(0, 'Antes del actual teatro Apolo ocupando el mismo solar, existía un inmueble destinado a la representación de la obras teatrales, que fue demolido y construido el actual teatro. ¿Cómo se le llamaba al citado edificio?', 'Teatro Calderón ', 'Teatro del príncipe', 'Teatro Principal', 'sin.jpg', 'dificil'),
(1, 'No hay mucha constancia de cuando fue la inauguración del más antiguo de los teatros de la ciudad, el teatro Apolo, pero se cree que la primera representación fue realizada:', 'Agosto 1882  ', 'Agosto 1883', 'Agosto 1885', 'sin.jpg', 'dificil'),
(2, 'El auge de la minería y exportación de uva, en Almería conlleva un aumento demográfico significativo durante mediados del siglo XIX, esto se traduce en la ampliación y aparición de diversos barrios, conocidos como:', 'Ensanches obreros', 'Ensanches burgueses', 'Barrios reales', 'sin.jpg', 'dificil'),
(3, '¿Durante que años estuvo asentada la burguesía francesa en  Almería?', '1810 hasta 1812', '1850 hasta 1860', '1810 hasta 1811', 'sin.jpg', 'normal'),
(4, 'Almería empezó una gran exportación de minerales ¿Cuál era la vía principal de exportación?', 'Vía marítima   ', 'Vía terrestre ', 'Vía aérea', 'sin.jpg', 'facil'),
(5, 'Almería exportaba  gran variedad de materias primas ¿Cuáles eran las mas importantes?', 'El esparto, la barrilla y el plomo', 'El esparto, mercurio y acero', 'Carbón, arcilla y piedra', 'sin.jpg', 'normal'),
(6, 'En Almería, después de la guerra civil queda aislada, para distraer a la gente se abrió un teatro ¿Cómo se llamaba el teatro?', 'Teatro de las comedias ', 'Teatro Cervantes', 'Teatro Apolo', 'sin.jpg', 'dificil'),
(7, 'En 1826, Almería empieza a salir de recesión y la población crece.¿Cuantos habitantes había en esa época?', '18.930', '20.000', '15.030', 'sin.jpg', 'normal'),
(8, 'El arquitecto Enrique López Rull, fue el encargado de llevar a cabo las infraestructuras necesarias para dotar a la ciudad de agua potable. ¿En qué año se realizaron tales obras?', '1871 ', '1860', '1850', 'sin.jpg', 'facil'),
(9, 'Almería fue azotada por una gran epidemia durante el siglo XIX ¿De que epidemia se trata?', 'Cólera', 'Gripe española', 'Fiebre amarilla', 'sin.jpg', 'normal'),
(10, 'Gracias a las explotaciones mineras y exportación del mineral extraído hubo varias personas que amasaron gran fortuna, siendo el más destacado:', 'Ramón Orozco ', 'García Montoro', 'González llana', 'sin.jpg', 'facil'),
(11, '¿Quien fue el diseñador de mercado central de Almería?', 'Antonio Martínez Pérez', 'Trinidad Cuartara', 'Enrique López Rull', 'sin.jpg', 'normal'),
(12, '¿Qué evento significativo  se realizo por primera  vez en agosto de 1807 y que se sigue\nproduciéndose periódicamente hasta nuestros días ?', 'Feria de la ciudad', 'Feria hortofrutícola', 'Exposición de Aceite', 'sin.jpg', 'normal'),
(13, '¿A quien se debe el monumento a los mártires de la libertad \"Pingurucho a los coloraos\" original?', 'Enrique López Rull', 'Enrique Rull López', 'Enrique Ru López', 'sin.jpg', 'normal'),
(14, '¿Cuál es el periodo de mayor crecimiento de nuestra capital?', '1887 y 1897', '1888 y 1890', '1865 y 1870', 'sin.jpg', 'dificil'),
(15, 'Un personaje de gran peso social en la Almería de siglo XIX  ¿De quién se trata?', 'Ramón Orozco  ', 'Enrique López Rull', 'Trinidad Cuartara', 'ramon.jpg', 'normal'),
(16, 'En el siglo XIX, Almería rendía tributo los Mártires de la Libertad, construyendo el monumento que aparece en la fotografía conocido popularmente como el “pingurucho” ¿Dónde se encuentra en la actualidad?', 'Plaza Vieja ', 'Puerta purchena', 'Avda fedirco garcia lorca', 'pingurucho.jpg', 'facil'),
(17, 'En 1890 Trinidad Cuartara,arquitecto municipal, diseña el edificio de la foto. ¿Podrias decirme de que edificio se trata?', 'Mercado de abastos ', 'Mercado de la Plaza', 'Alhóndiga central', 'mercado.jpg', 'facil'),
(18, 'En el siglo XIX, Trinidad Cuartara, diseño el mercado de abastos, con los ensanches que sufre la ciudad en la segunda mitad del siglo XIX el mercado de abastos se reubica a la situación que actualmente tiene.\r\n¿Podrías decirme cuál era su ubicación inicialmente proyectada?\r\n', 'En el centro del casco antiguo ', 'En el paseo', 'Calle Obispo Orbera', 'sin.jpg', 'dificil'),
(19, 'En la foto podemos ver a una personalidad distinguida de la época, socio de don Ramón Orozco en algunas de sus empresas mineras y participante en la vida política de la capital  ¿Podrías decirme de quien se trata?', 'Antonio Abellan Panuela  ', 'Enrique lopez Rull', 'Trinidad Coartara', 'sin.jpg', 'facil'),
(20, 'El actual palacio episcopal inició su construcción en 1894 bajo la prelatura del obispo Santos Zárate y Martínez. Se inauguró en 1896, si bien los trabajos se prolongaron durante tres años más. Trinidad Cuartara fue uno de los  dos autores del proyecto ¿Podrías decirme quien fue el otro?', 'Enrique lopez Rull ', 'Enrique Rull Lopez', 'Enrique Lopez Lopez', 'sin.jpg', 'dificil'),
(21, 'En 1860 Almería tuvo un ilustre y conocido alcalde, persona bastante significada en la segunda mitad del siglo XIX. ¿De quién se trata?', 'Francisco Jover y Tovar  ', 'Francisco Martínez  ', 'Francisco Tovar', 'sin.jpg', 'dificil'),
(22, '¿Dónde localizarías la plaza que aparece en la fotografía?', 'Plaza de San Pedro  ', 'Plaza de las Flores ', 'Plaza Circular', 'plaza.jpg', 'facil'),
(23, 'Este es el aspecto de la Calle Gran Capitán después de la gran inundación en el año…', '1891 ', '1881', '1871', 'calle.jpg', 'facil'),
(24, 'No sé de qué nos suena este arco, estará en', 'En la Alcazaba', 'En el puerto', 'El cerro de San Cristóbal', 'arco.jpg', 'facil'),
(25, 'Qué curiosa la muralla almorávide con un milenio de antigüedad que baja por esta calle tan genuina de la ciudad, la localizarías en la…', 'Calle Antonio Vico', 'Calle Real', 'Calle de la Reina', 'vico.jpg', 'facil'),
(26, 'La verdad es que este edificio me suena mucho, ¿me podrías ayudar?. No sé si se trata de…', 'La Compañía de María', 'El Palacio Episcopal en la plaza de la Catedral', 'El convento de Santo Domingo hoy Escuela de Artes', 'maria.jpg', 'facil'),
(27, 'Qué curioso como vestían las personas en el siglo XIX, estas concretamente fueron a hacerse una foto en una calle de Almería decidieron hacerse una foto, podrías averiguar ¿en qué calle se la hicieron? presta atención', 'Paseo de Almería', 'Paseo de San Luis ', 'Paseo de Medinaceli', 'cartel.jpg', 'facil'),
(28, '¿Sabrías decirnos en qué año el actual paseo de Almería, puede lucir luz artificial?', '1892', '1867', '1899', 'sin.jpg', 'normal'),
(29, 'Me han comentado que en un momento de la historia del Paseo de Almería se le llamo Paseo del Príncipe. ¿Sabrías decirnos en honor de quién o por qué se le puedo llamar así?', 'Alfonso XIII ', 'Alfonso XII', 'Por su majestuosidad', 'sin.jpg', 'dificil'),
(30, 'Hay un edificio de Almería de 1884 que en su interior destaca un hermoso patio de luces, actual sede de exposiciones, congresos y actos oficiales de la vida política almeriense. Juan Lirola vivió en él. ¿Sabes de qué edificio se trata?', 'La Diputación Provincial  ', 'El círculo mercantil', 'El cortijo Fischer', 'sin.jpg', 'normal'),
(31, '¿Qué quién era Juan Lirola (1829-1894)? Pues fue un____________ que promovió la feria y fiestas patronales, el fomento de las infraestructuras de transporte de la capital, y el que impulsó a Almería en su despegue económico.', 'Alcalde de Almería', 'Médico reputado de la capital', 'Capitán de navío', 'sin.jpg', 'normal'),
(32, '¿Sabrías decirnos qué iglesia es la que aparece en la fotografía construida en 1893?', 'San Roque', 'San Sebastián', 'San Pedro', 'roque.jpg', 'facil'),
(33, 'El ingenio: Sólo se conserva la fachada de lo que fue la antigua fábrica de…, datada en 1885. Construida a modo de arco de triunfo al estilo de la arquitectura industrial.', 'Azúcar', 'Aceite', 'Cereales', 'fabrica.jpg', 'facil'),
(34, 'Monumento a los Mártires de la Libertad: Situado en el centro de la Plaza Vieja, se le conoce tradicionalmente como Monumento a los Coloraos o Pingurucho que conmemora a las veinticuatro personas que llegaron a Almería para proclamar la libertad en contra del absolutismo de Fernando VII; sus propósitos se vieron frustrados puesto que fueron hechos presos y fusilados. ¿Sabrías decirnos por qué se les llamó los coloraos?', 'porque era el color de su casaca', 'porque eran de Gachas Colorás', 'porque llegaron a Almería provenientes de Murcia, donde hay mucho pimentón', 'sin.jpg', 'normal'),
(35, 'El _____________ es el mejor ejemplo de palacio burgués, fechado en 1888. Fue casa de Don Emilio Pérez Ibañez. Fue reformado para acoger el casino de la ciudad. Destacar el salón musulmán y la sala de baile, de clara influencia francesa.', 'Casino Cultural', 'Teatro Cervantés', 'El ayuntamiento', 'teatro.jpg', 'facil'),
(36, 'Y hablando de Emilio Pérez  (Almería, 1849-1903) que era__________________. Diputado a cortes por Almería. En 1870 abrió su bufete de abogado y creó en Almería una famosa Academia.', 'Político y abogado ', 'Médico', 'Historiador', 'sin.jpg', 'dificil'),
(37, 'La Estatua de la Caridad Universal fue la primera estatua con la que contó la ciudad de Almería. Fue erigida en recuerdo de las víctimas de las inundaciones sufridas por la ciudad el 11 de septiembre de 1891 donde fallecieron unas veinte personas, incluidas cuatro niños. Muestra una mujer abrazada a sus dos hijos. ___________________mandó encauzar la Rambla, construir el barrio de la caridad y damnificar a los afectados. Toda España se hizo eco y colaboró económicamente.', 'Reina Regente María Cristina', 'Ramón Orozco', 'Francisco Villaespesa', 'cristina.jpg', 'facil'),
(38, 'En octubre de 1862, _______________ visita Almería. Era la primera visita real que vivió la ciudad después del paso de los Reyes Católicos. La acompañaba uno de sus hijos quien luego sería Rey. Visitó la diputación, la catedral y la iglesia de la Virgen del Mar cuyo manto fue regalado esa tarde.', 'Isabel II', 'Alfonso XIII', 'Francisco de Asís', 'isabel.jpg', 'facil'),
(39, 'Francisco Aquino Cabrera, más conocido como Paco Aquino, fue un _______________ español nacido en la ciudad de Almería (España) en 1868. Perteneció a una generación de almerienses de gran éxito a nivel nacional', 'Poeta', 'Político', 'Obispo de Almería', 'sin.jpg', 'dificil'),
(40, 'La actual Escuela de Artes, fue el primer Instituto de Segunda Enseñanza. Su apertura tuvo lugar en el curso 1845/1846. Cuando se construyó el Instituto, el claustro del convento de los Dominicos quedó insertado en su interior embelleciendo artísticamente la construcción. ¿Sabrías decirnos quién remodeló el edificio en 1889?', 'Trinidad Cuartara ', 'Guillermo Langue', 'Enrique Lopez Rull', 'instituto.jpg', 'facil'),
(41, '¿A quién pertenece esta estatua? \r\n__________________, Catedrático de Metafísica y político español, que ocupó en 1873, durante mes y medio, la presidencia de la República española. Nació en Alhama la Seca (Almería), el 10 de abril de 1837. Estudió el bachillerato en el Instituto de Segunda Enseñanza de Almería (fundado en 1845, perteneció Salmerón a la primera promoción del Instituto que hoy lleva su nombre).', 'Nicolas Salmerón ', 'Francisco Villaespesa', 'Alcalde Muñoz', 'nicolas.jpg', 'facil'),
(42, 'La revolución industrial no triunfó en Almería en la primera mitad del siglo XIX,pero si hubo un desarrollo industrial muy temprano relacionado con la minería,sabrías cual fue el primer mineral explotado?', 'Plomo ', 'Hierro', 'Oro', 'sin.jpg', 'normal'),
(43, 'El esparto fue uno de los recursos más importantes para el sustento de las familias, llamadas entonces, curiosamente “clases menesterosas”, sin embargo a lo largo del siglo hubo cambios:', 'se exportaba en bruto ', 'se manufacturaba', 'se dejó de exportar', 'sin.jpg', 'dificil'),
(44, 'El puerto de Almería se convertía en otoño en un hervidero de barcos cargando barriles de uvas, se expansionó mucho su mercado a finales del siglo XIX, pero ¿de dónde procedía?', 'Ohanes ', 'Alhama', 'Terque', 'sin.jpg', 'dificil'),
(45, 'En el corazón del casco viejo, muy cerca de la Catedral, hay una plaza que es un remanso de paz. Cambió de nombre cuatro veces, ¿sabes cuál es?', 'Plaza de Bendicho ', 'Plaza Vieja', 'Plaza de San Pedro', 'sin.jpg', 'normal'),
(46, 'La incomunicación será uno de los problemas básicos de Almería durante todo el siglo y el mar era la única esperanza de unas comunicaciones mínimamente fluídas, la construcción del puerto era vital, por eso hay días que forman parte de la historia de los pueblos, cuándo se colocó la primera piedra?', '1847 ', '1843', '1840', 'sin.jpg', 'dificil'),
(47, 'Desde siempre la Plaza Vieja ha sido un lugar entrañable para la ciudad, y en el centro se sitúa una columna de mármol, llamada popularmente “pingurucho de los coloraos. Es el recuerdo de unos liberales románicos que desembarcaron en Almería y fueron perseguidos y fusilados. ¿Contra qué monarca se realizó el levantamiento liberal?', 'Fernando VII ', 'Isabel II', 'CarlosIV', 'sin.jpg', 'dificil'),
(48, 'El suceso de los “coloraos “simboliza la transformación española ocurrida en el siglo XIX, el paso de una monarquía sin libertades a un régimen parlamentario y burgués. ¿Sabes qué día se conmemora en la actualidad?', '24 de Agosto ', '20 de Agosto', '25 de Junio', 'sin.jpg', 'normal'),
(49, 'El lugar que hoy ocupa la plaza de San Pedro, formaba parte del convento de San Francisco, expropiado a la Iglesia tras la desamortización. Solo quedó en pie la Iglesia porque el resto se urbanizó. ¿Sabrías decir de qué estilo arquitectónico es?', 'Barroco ', 'Neoclásico', 'Historicista', 'sin.jpg', 'normal'),
(50, 'La Iglesia de San Pedro es junto con el Claustro de la Catedral de Almería proyectos de un mismo arquitecto, aunque por los efectos de luz y sombra y la combinación de cantería y ladrillo, se podría relacionar con otro arquitecto. ¿Sabes de quién se trata?', 'Juan Antonio Munar ', 'Trinidad Cuartara', 'Juan de Villanueva', 'sin.jpg', 'dificil'),
(51, '¿Qué Cartógrafo levanto el primer plano cientifico de Almería?', 'Joaquin Pérez de Rozas  ', 'Juan Pérez de Rozas', 'Trinidad Cuartara', 'sin.jpg', 'facil');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `wp_preguntas`
--
ALTER TABLE `wp_preguntas`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
