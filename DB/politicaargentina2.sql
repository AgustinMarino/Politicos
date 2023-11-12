-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2023 a las 05:39:06
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `politicaargentina2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidospoliticos`
--

CREATE TABLE `partidospoliticos` (
  `id_partido` int(255) NOT NULL,
  `nombre_partido` varchar(255) NOT NULL,
  `ideologia` varchar(255) NOT NULL,
  `aniofundacion` year(4) NOT NULL,
  `lideractual` varchar(255) NOT NULL,
  `sedecentral` varchar(255) NOT NULL,
  `sitioweb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `partidospoliticos`
--

INSERT INTO `partidospoliticos` (`id_partido`, `nombre_partido`, `ideologia`, `aniofundacion`, `lideractual`, `sedecentral`, `sitioweb`) VALUES
(1, 'Movimiento de Integración y Desarrollo', 'Desarrollista', 1964, 'Juan Pablo Carrique', 'Ayacucho 49, Ciudad de Buenos Aires', 'www.mid.org.ar'),
(2, 'Partido Justicialista', 'Peronismo, Populismo', 1946, 'Alberto Fernández', 'Matheu 130, Ciudad de Buenos Aires', 'www.pj.org.ar'),
(3, 'Unión Cívica Radical', 'Radicalismo, Socioliberalismo, Socialdemocracia', 0000, 'Gerardo Morales', 'Adolfo Alsina 1786, Ciudad de Buenos Aires', 'www.ucr.org.ar'),
(4, 'Partido Demócrata Cristiano', 'Democracia Cristiana, Humanismo, Provida, Conservadurismo Social', 1954, 'Nancy Alberione', 'Combate de los Pozos 1055, Ciudad de Buenos Aires', 'www.democraciacristiana.com.ar'),
(5, 'Partido Intransigente', 'Desarrollismo, Socialismo democrático, Nacionalismo de izquierda, Progresismo, Yrigoyenismo', 1972, 'Daniel Galdeano', 'Riobamba 482, Buenos Aires', 'www.pi.org.ar'),
(6, 'Partido Demócrata Progresista', 'Liberalismo, Progresismo', 1914, 'Oscar Moscariello', 'Entre Ríos 1443, Rosario, Santa Fe', 'www.partidodemocrataprogresista.com'),
(7, 'Partido Comunista', 'Comunismo', 1918, 'Mario Alderete', 'Av. Entre Ríos 1039, Buenos Aires', 'www.pca.org.ar'),
(8, 'Partido Conservador Popular', 'Conservadurismo', 1956, 'Marco Aurelio Michelli', 'Ciudad de Buenos Aires', 'https://www.facebook.com/PartidoConservadorPopular/'),
(9, 'Unión Popular Federal', 'Peronismo Federal, Neoperonismo, Conservadurismo', 1955, 'Graciela Devita', 'Florida 878, Ciudad de Buenos Aires', 'www.partidounionpopular.org'),
(10, 'Partido UNIR Argentina', 'Nacionalismo, Conservadurismo', 1982, 'Alberto Asseff', 'Humberto 1º 2087, Ciudad de Buenos Aires', 'www.unirargentina.org'),
(11, 'Movimiento Socialista de los Trabajadores', 'Trotskismo, Morenismo, Feminismo, Ecosocialismo, Anticapitalismo', 1992, 'Alejandro Bodart', 'Perú 439, Buenos Aires', 'www.mst.org.ar'),
(12, 'Movimiento Libres del Sur', 'Socialismo democratico, Socialdemocracia, Nacionalismo de izquierda, Progresismo, Latinoamericanismo', 2006, 'Humberto Tumini', 'Ciudad de Buenos Aires', 'libresdelsur.org.ar'),
(13, 'Partido Frente Grande', 'Peronismo, Progresismo, Socialdemocracia', 1993, 'Mario secco', 'Av. de Mayo 1480 2º D, Buenos Aires', 'www.frentegrande.org'),
(14, 'Coalición Cívica - Afirmación para una República Igualitaria (ARI)', 'Socioliberalismo, Progresismo, Liberalismo, Desarrollismo', 2002, 'Maximiliano Ferraro', 'Vicente López 1649, Ciudad de Buenos Aires', 'www.coalicioncivicaari.org.ar'),
(15, 'Partido Socialista', 'Socialdemocracia, Progresismo, Socialismo democratico, Reformismo', 0000, 'Mónica Fein', 'Av. Entre Ríos 1018, Ciudad de Buenos Aires', 'www.partidosocialista.org.ar'),
(16, 'Partido de la Victoria', 'Kirchnerismo', 2003, 'Cristina Fernández de Kirchner', 'Buenos Aires', 'www.partidodelavictoria.com.ar'),
(17, 'Izquierda por una Opción Socialista', 'Trotskismo, Morenismo', 2006, 'Juan Carlos Giordano', 'México 1230, Buenos Aires', 'www.izquierdasocialista.org.ar'),
(18, 'PRO - Propuesta Republicana', 'Republicanismo, Neoliberalismo, Liberalismo, Conservadurismo, Macrismo', 2005, 'Mauricio Macri', 'Balcarce 412, Ciudad Autónoma de Buenos Aires', 'www.pro.com.ar'),
(19, 'Partido Unión Celeste y Blanco', 'Conservadurismo Social, Peronismo Federal', 1987, 'Carlos Fabián Luayza Troncoso1', 'La Plata, Buenos Aires', 'www.unioncelesteyblanco.com'),
(20, 'Kolina', 'Kirchnerismo', 2010, 'Carlos Castagneto', 'Buenos Aires', 'www.kolina.org.ar'),
(21, 'Partido Solidario', 'Cooperativismo, Socialismo', 2007, 'Carlos Heller', 'Av. Presidente Julio Argentino Roca 637 Piso 1º, Ciudad de Buenos Aires', 'www.partidosolidario.org.ar'),
(22, 'GEN', 'Socialdemocracia, Progresismo', 2007, 'Margarita Stolbizer', 'Perón 1509 Piso 8. Ciudad de Buenos Aires', 'www.partidogen.org.ar'),
(23, 'Partido de Trabajadores por el Socialismo', 'Trotskismo, Feminismo, Marxista', 1988, 'Nicolás del Caño', 'La Rioja 853, Buenos Aires', 'pts.org.ar'),
(24, 'Partido del Obrero', 'Trotskismo', 1964, 'Gabriel Solano', 'Bartolomé Mitre 2162, Buenos Aires', 'www.po.org.ar'),
(25, 'Instrumento Electoral por la Unidad Popular', 'Nacionalismo de Izquierda, Progresismo, Democracia participativa, Socialismo del siglo XXI, Latinoamericanismo', 2010, 'Claudio Lozano', 'Avenida Entre Ríos 902, Ciudad Autónoma de Buenos Aires', 'unidadpopular.org.ar'),
(26, 'Nuevo Encuentro por la Democracia y la Equidad', 'Kirchnerismo, Progresismo, Socialdemocracia', 2004, 'Martín Sabbatella', 'Buenos Aires', 'www.nuevoencuentro.org.ar'),
(27, 'Partido del Trabajo y del Pueblo', 'Comunismo, Marxismo- Leninismo, Maoísmo, Democracia popular, Antirrevisionismo, Antiimperialismo, Anticapitalismo', 1968, 'Juan Carlos Alderete', 'Pichincha 165, Buenos Aires', 'www.pcr.org.ar'),
(28, 'Partido de la Concertación Forja', 'Radicalismo K, Kirchnerismo, Socialdemocracia, Socioliberalismo', 2008, 'Gustavo López', 'Av. Estado Israel 4622, Buenos Aires', 'forja.org'),
(29, 'Partido de la Cultura la Educación y el Trabajo', 'Peronismo, Sindicalismo', 2013, 'Jorge Antonio Guaymás', 'Av. Julio A. Roca 751, Ciudad de Buenos Aires', '-'),
(30, 'Partido Fe', 'Peronismo', 2013, 'Cecilio Salazar', '-', 'www.partidofe.org'),
(31, 'Partido Tercera Posición P3P', 'Tercera Posición, Peronismo Federal, Tercera Vía', 2015, 'Graciela Camaño', 'Cerrito 866, Ciudad de Buenos Aires', 'www.facebook.com/partido.tercera.posicion'),
(32, 'Partido Renovador Federal', 'Peronismo Federal', 1974, 'José Videla Sáenz', 'San Miguel, Buenos Aires', '-'),
(33, 'Movimiento Político, Social y Cultural Proyecto Sur', 'Progresismo, Ecología Política, Socialismo', 2007, 'Juan Massini', 'Buenos Aires', 'www.proyecto-sur.com.ar'),
(34, 'Partido del Trabajo y la Equidad', 'Albertismo, Progresismo, Socialdemocracia', 2012, 'Fernanda Gil Lozano', 'Av. de Mayo 962, Buenos Aires', 'www.facebook.com/ParteOK/'),
(35, 'Frente Renovador', 'Peronismo Federal', 2013, 'Sergio Massa', 'Ciudad de Buenos Aires', 'www.facebook.com/frenterenovador/'),
(36, 'Unite por la Libertad y la Dignidad', 'Neoliberalismo, Conservadurismo, Atrapalotodo', 2019, 'Ana Beatriz Brouwer', 'Ciudad de Buenos Aires', 'http://www.unite.ar/'),
(37, 'Compromiso Federal', 'Peronismo', 2015, 'Alberto Jose Rodriguez Saá', 'San Luis', 'twitter.com/compromisofed'),
(38, 'Partido Demócrata', 'Conservadurismo, Liberalismo Economico, Nacionalismo Argentino', 1931, 'Carlos Balter', 'CABA', 'partidodemocrata.org.ar'),
(39, 'Movimiento Izquierda Juventud Dignidad', 'Estatismo', 2021, 'Raul Castells', 'Ciudad de Buenos Aires', 'www.facebook.com/MIJD2021'),
(40, 'Partido Autonomista', 'Conservadurismo, Liberalismo Economico, Autonomismo Regional, Patriotismo, Desarrollismo', 2018, 'Pocho Romero Feris', '-', 'https://twitter.com/i/flow/login?redirect_after_login=%2FAutonomistasORG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `politicos`
--

CREATE TABLE `politicos` (
  `politico_id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `educacion` varchar(255) NOT NULL,
  `biografia` longtext NOT NULL,
  `imagen` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `politicos`
--

INSERT INTO `politicos` (`politico_id`, `nombre`, `apellido`, `cargo`, `fecha_nacimiento`, `educacion`, `biografia`, `imagen`) VALUES
(1, 'Juan Carlos', 'Alderete', 'Político y Diputado', '1952-09-19', '-', 'A la edad de 15 años llegó solo y sin dinero a Buenos Aires, con la esperanza de emprender una carrera de futbolista y conseguir dinero para viajar a Cuba atraído por las ideas de la Revolución cubana. Consiguió su primer trabajo en el barrio de La Paternal de lavacopas en un restaurante.', 0x68747470733a2f2f75706c6f61642e77696b696d656469612e6f72672f77696b6970656469612f636f6d6d6f6e732f7468756d622f622f62612f4a6f726e6164615f4e6163696f6e616c5f636f6e7472615f6c615f506f6272657a615f2d5f4a75616e5f4361726c6f735f416c6465726574655f2d5f436f727269656e74655f436c6173697374615f795f436f6d6261746976612e6a70672f32323070782d4a6f726e6164615f4e6163696f6e616c5f636f6e7472615f6c615f506f6272657a615f2d5f4a75616e5f4361726c6f735f416c6465726574655f2d5f436f727269656e74655f436c6173697374615f795f436f6d6261746976612e6a7067),
(2, 'Gustavo', 'López', 'Político, Abogado, Periodista, Profesor', '1957-02-08', 'Abogado Especializado en Orientación Administrativo', 'Gustavo Fernando López (Buenos Aires, 8 de febrero de 1957) es un político, abogado y periodista argentino, perteneciente al radicalismo. Hasta 2003 perteneció a la Unión Cívica Radical y desde esa fecha fundó el Partido de la Concertación FORJA, integrante del Frente para la Victoria.', 0x68747470733a2f2f75706c6f61642e77696b696d656469612e6f72672f77696b6970656469612f636f6d6d6f6e732f7468756d622f362f36322f3637385f2d5f4775737461766f5f4c6f70657a2e6a70672f32323070782d3637385f2d5f4775737461766f5f4c6f70657a2e6a7067),
(3, 'Jorge Antonio', 'Guaymás', 'Diputado, Concejal', '1959-10-17', '-', 'Jorge Antonio Guaymás (n. Salta, 17 de octubre de 1959) es un dirigente sindical y político argentino que supo desempeñarse como concejal durante cuatro años y diputado provincial de la Provincia de Salta durante diez años. Actualmente es Jefe de la Agencia Territorial Salta del Ministerio de Trabajo, Empleo y Seguridad Social de la Nación.', 0x68747470733a2f2f75732e63646e2e656c74726962756e6f2e636f6d2f3039323032312f313633313233323336333935382e6a70673f2663773d373230),
(4, 'Cecilio', 'Salazar', 'Político, dirigente', '1954-12-09', '-', 'Cecilio Salazar, apellido materno Cáceres, (San Pedro; 9 de diciembre de 1954) es un sindicalista y político argentino, que ocupó el cargo de Intendente del Partido de San Pedro hasta 9 de diciembre de 2021 por el frente electoral Cambiemos, electo el 25 de octubre de 2015 con el 52,56% de los votos. Asumió el 9 de diciembre de 2015.', 0x68747470733a2f2f656e637279707465642d74626e302e677374617469632e636f6d2f696d616765733f713d74626e3a414e64394763536848336543415956643873446d427166765a556a366d4b3848544152694f2d49583336424754414261704451665a336a5839793634744433445468506567364376776b5926757371703d434155),
(5, 'Graciela', 'Camaño', 'Abogada', '1953-04-25', 'Universidad de Morón', 'Graciela Camaño (Presidencia Roque Sáenz Peña, 25 de abril de 1953)es una abogada y política argentina, especialista en Derecho Ambiental. Ocupa el cargo de diputada nacional por la provincia de Buenos Aires, dentro del bloque Interbloque Federal en conjunto con Hacemos por Nuestro País. Durante el gobierno de Eduardo Duhalde fue Ministra de Trabajo.', 0x68747470733a2f2f75706c6f61642e77696b696d656469612e6f72672f77696b6970656469612f636f6d6d6f6e732f7468756d622f662f66392f4465626174655f64655f6c615f6c65795f64655f456d657267656e6369615f416c696d656e74617269615f656e5f446970757461646f735f32312e6a70672f34353070782d4465626174655f64655f6c615f6c65795f64655f456d657267656e6369615f416c696d656e74617269615f656e5f446970757461646f735f32312e6a7067),
(6, 'Fernanda Gil', 'Lozano', 'Diputada, Parlamentaria', '1958-05-25', 'Universidad de Buenos Aires', 'Claudia Fernanda Gil Lozano (Buenos Aires, 25 de mayo de 1958) es una historiadora, profesora universitaria y política argentina, que se desempeñó como diputada nacional por la Ciudad Autónoma de Buenos Aires, entre 2007 y 2011, y como parlamentaria del Mercosur por Argentina entre 2015 y 2019.', 0x68747470733a2f2f75706c6f61642e77696b696d656469612e6f72672f77696b6970656469612f636f6d6d6f6e732f7468756d622f632f63352f4665726e616e64615f47696c5f4c6f7a616e6f2532435f6469726563746f72615f64656c5f43495044482e6a70672f32323070782d4665726e616e64615f47696c5f4c6f7a616e6f2532435f6469726563746f72615f64656c5f43495044482e6a7067),
(7, 'Sergio', 'Massa', 'Funcionario Público, Abogado', '1972-04-28', 'Universidad de Belgrano', 'Sergio Tomás Massa (San Martín, Buenos Aires; 28 de abril de 1972) es un abogado y político argentino, miembro de Unión por la Patria, anteriormente denominada Frente de Todos, actual coalición política de tendencia peronista y progresista gobernante en Argentina desde 2019. Fue miembro y presidente de la Cámara de Diputados de la Nación desde 2019 hasta 2022.', 0x68747470733a2f2f75706c6f61642e77696b696d656469612e6f72672f77696b6970656469612f636f6d6d6f6e732f7468756d622f632f63612f53657267696f5f4d617373615f25323834393631393630323332312532395f25323863726f707065642532392e6a70672f32323070782d53657267696f5f4d617373615f25323834393631393630323332312532395f25323863726f707065642532392e6a7067),
(8, 'Alberto Jose', 'Rodriguez Saá', 'Abogado, Profesor de pintura plástica', '1949-08-21', 'Universidad de Buenos Aires, Universidad de Salamanca, España', 'Alberto José Rodríguez Saá (San Luis, 21 de agosto de 1949) es un abogado y político argentino que actualmente se desempeña como gobernador de la provincia de San Luis, cargo que ocupa desde 2015 y ocupó con anterioridad desde 2003 hasta 2011. En 2010 fue declarado desde Ginebra como «embajador mundial por la Paz». Fue candidato por la Alianza Compromiso Federal para presidente en 2007 y 2011.', 0x68747470733a2f2f75706c6f61642e77696b696d656469612e6f72672f77696b6970656469612f636f6d6d6f6e732f7468756d622f302f30392f416c626572746f5f526f64722543332541446775657a5f53612543332541315f25323863726f707065642532392e6a70672f32323070782d416c626572746f5f526f64722543332541446775657a5f53612543332541315f25323863726f707065642532392e6a7067),
(9, 'Raúl', 'Castells', 'Farmacéutico, dirigente social, político', '1953-12-12', '-', 'Raúl Castells (Rosario, 12 de diciembre de 1953) es un dirigente social y político argentino. Además, lidera el Movimiento Izquierda Juventud Dignidad (MIJD), uno de los principales grupos del llamado «movimiento piquetero».', 0x68747470733a2f2f75706c6f61642e77696b696d656469612e6f72672f77696b6970656469612f636f6d6d6f6e732f7468756d622f622f62662f52612543332542416c5f416e25433325414462616c5f43617374656c6c732e6a70672f32323070782d52612543332542416c5f416e25433325414462616c5f43617374656c6c732e6a7067),
(10, 'José Antonio', 'Romero Feris', 'Abogado', '1941-02-25', 'Universidad Nacional del Nordeste', 'José Antonio Romero Feris (Corrientes, 25 de febrero de 1941), conocido como “Pocho” Romero Feris, es un abogado político y presentador argentino. Diputado Provincial en 1965 y Presidente de la Cámara de Diputados de la Provincia de Corrientes. Ejerció el mandato de gobernador de Corrientes entre 1983 y 1987. Seguidamente fue Senador Nacional, hasta 2001, y en 2019 fue precandidato a la presidencia de la Nación.', 0x68747470733a2f2f75706c6f61642e77696b696d656469612e6f72672f77696b6970656469612f636f6d6d6f6e732f652f65302f4a6f732543332541395f416e746f6e696f5f526f6d65726f5f46657269732e706e67);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `partidospoliticos`
--
ALTER TABLE `partidospoliticos`
  ADD PRIMARY KEY (`id_partido`);

--
-- Indices de la tabla `politicos`
--
ALTER TABLE `politicos`
  ADD PRIMARY KEY (`politico_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `partidospoliticos`
--
ALTER TABLE `partidospoliticos`
  MODIFY `id_partido` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `politicos`
--
ALTER TABLE `politicos`
  MODIFY `politico_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
