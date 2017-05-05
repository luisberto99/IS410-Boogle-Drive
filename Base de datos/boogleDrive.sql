-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2017 a las 05:28:46
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `boogledrive`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_amigos`
--

CREATE TABLE `tbl_amigos` (
  `codigo_amistad` int(11) NOT NULL,
  `codigo_usuario` int(11) DEFAULT NULL,
  `codigo_usuario_amigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_amigos`
--

INSERT INTO `tbl_amigos` (`codigo_amistad`, `codigo_usuario`, `codigo_usuario_amigo`) VALUES
(1, 1, 2),
(2, 1, 4),
(3, 1, 5),
(4, 2, 4),
(5, 2, 5),
(6, 3, 7),
(7, 3, 5),
(8, 4, 5),
(9, 5, 7),
(10, 5, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_archivos`
--

CREATE TABLE `tbl_archivos` (
  `codigo_archivo` int(11) NOT NULL,
  `codigo_usuario` int(11) NOT NULL,
  `codigo_tipo_archivo` int(11) NOT NULL,
  `codigo_privacidad` int(11) NOT NULL,
  `nombre_archivo` varchar(100) NOT NULL,
  `tamanio_archivo` varchar(4000) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `archivo` varchar(500) NOT NULL,
  `descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='		';

--
-- Volcado de datos para la tabla `tbl_archivos`
--

INSERT INTO `tbl_archivos` (`codigo_archivo`, `codigo_usuario`, `codigo_tipo_archivo`, `codigo_privacidad`, `nombre_archivo`, `tamanio_archivo`, `fecha_creacion`, `archivo`, `descripcion`) VALUES
(50, 1, 107, 1, '15267577_1267853139927583_6368186621197053490_n.jpg', '329124', '2017-05-05', '../archivos/15267577_1267853139927583_6368186621197053490_n.jpg', ''),
(51, 1, 107, 1, '1366_2000.jpg', '35665', '2017-05-05', '../archivos/1366_2000.jpg', ''),
(52, 1, 107, 1, '1366_2000.jpg', '35665', '2017-05-05', '../archivos/1366_2000.jpg', ''),
(53, 1, 118, 1, 'Imagen1.png', '14311', '2017-05-05', '../archivos/Imagen1.png', ''),
(54, 1, 118, 1, 'Imagen1.png', '14311', '2017-05-05', '../archivos/Imagen1.png', ''),
(55, 1, 118, 1, 'Imagen2.png', '31129', '2017-05-05', '../archivos/Imagen2.png', ''),
(56, 1, 107, 1, 'Cat-Glasses-Wallpaper-HD.jpg', '397494', '2017-05-05', '../archivos/Cat-Glasses-Wallpaper-HD.jpg', ''),
(57, 1, 107, 1, 'abstract-298a.jpg', '106104', '2017-05-05', '../archivos/abstract-298a.jpg', ''),
(58, 1, 118, 1, 'An-Overview-of-the-Work-of-a-Ruby-on-Rails-Developer.png', '219708', '2017-05-05', '../archivos/An-Overview-of-the-Work-of-a-Ruby-on-Rails-Developer.png', ''),
(59, 1, 107, 1, 'Black-Background-Metal-1080P-hd-wallpapers-hd-wallpaper-1920x1080-7-507f977660ef7-4632.jpg', '238823', '2017-05-05', '../archivos/Black-Background-Metal-1080P-hd-wallpapers-hd-wallpaper-1920x1080-7-507f977660ef7-4632.jpg', ''),
(60, 1, 107, 1, '511052.jpg', '374615', '2017-05-05', '../archivos/511052.jpg', ''),
(61, 1, 107, 1, 'Cat-Glasses-Wallpaper-HD.jpg', '397494', '2017-05-05', '../archivos/Cat-Glasses-Wallpaper-HD.jpg', ''),
(62, 1, 107, 1, 'abstract-298a.jpg', '106104', '2017-05-05', '../archivos/abstract-298a.jpg', ''),
(63, 1, 107, 1, 'IMG_20151014_161409.jpg', '936255', '2017-05-05', '../archivos/IMG_20151014_161409.jpg', ''),
(64, 1, 107, 1, 'mosaic-abstract-wallpaper.jpg', '348737', '2017-05-05', '../archivos/mosaic-abstract-wallpaper.jpg', ''),
(65, 1, 331, 1, 'Presupuesto familiar1.xlsx', '55964', '2017-05-05', '../archivos/Presupuesto familiar1.xlsx', ''),
(66, 1, 347, 1, 'porkys.zip', '134058', '2017-05-05', '../archivos/porkys.zip', ''),
(67, 1, 348, 1, 'DropboxInstaller.exe', '690080', '2017-05-05', '../archivos/DropboxInstaller.exe', ''),
(68, 1, 107, 1, '5d0c8712d3acb3480058520067267a5b_large.jpeg', '547440', '2017-05-05', '../archivos/5d0c8712d3acb3480058520067267a5b_large.jpeg', ''),
(69, 1, 347, 1, '.project', '838', '2017-05-05', '../archivos/.project', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_archivos_x_carpetas`
--

CREATE TABLE `tbl_archivos_x_carpetas` (
  `codigo_archivo` int(11) NOT NULL,
  `codigo_carpeta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_archivos_x_carpetas`
--

INSERT INTO `tbl_archivos_x_carpetas` (`codigo_archivo`, `codigo_carpeta`) VALUES
(55, 15),
(56, 9),
(56, 15),
(57, 5),
(57, 7),
(58, 10),
(59, 10),
(60, 10),
(63, 7),
(64, 11),
(65, 7),
(66, 2),
(67, 7),
(69, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_carpetas`
--

CREATE TABLE `tbl_carpetas` (
  `codigo_carpeta` int(11) NOT NULL,
  `codigo_usuario` int(11) NOT NULL,
  `codigo_carpeta_padre` int(11) DEFAULT NULL,
  `codigo_privacidad` int(11) NOT NULL,
  `nombre_carpeta` varchar(200) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `descripcion` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_carpetas`
--

INSERT INTO `tbl_carpetas` (`codigo_carpeta`, `codigo_usuario`, `codigo_carpeta_padre`, `codigo_privacidad`, `nombre_carpeta`, `fecha_creacion`, `descripcion`) VALUES
(1, 1, NULL, 1, 'Diseño', '2017-04-29', NULL),
(2, 1, 1, 1, 'Fuentes', '2017-04-29', NULL),
(3, 1, NULL, 1, 'Medina', '2017-04-29', NULL),
(4, 2, NULL, 1, 'Maria', '2017-04-29', NULL),
(5, 1, NULL, 1, 'Fotos David', '2017-05-03', NULL),
(6, 1, NULL, 1, 'Clase de Poo', '2017-05-03', NULL),
(7, 1, NULL, 1, 'programas', '2017-05-03', NULL),
(8, 1, NULL, 1, 'juegos', '2017-05-03', NULL),
(9, 1, NULL, 1, 'Te amo', '2017-05-04', ''),
(10, 1, NULL, 1, 'Te amo', '2017-05-04', ''),
(11, 1, NULL, 1, 'nueva', '2017-05-04', ''),
(12, 1, NULL, 1, 'Maria', '2017-05-04', ''),
(13, 1, NULL, 1, 'casitas', '2017-05-04', ''),
(14, 1, NULL, 1, 'lkaj', '2017-05-04', ''),
(15, 1, NULL, 1, 'esta si', '2017-05-04', ''),
(16, 1, NULL, 1, 'casita', '2017-05-05', ''),
(17, 1, 10, 1, 'medina', '2017-05-05', ''),
(18, 1, 3, 1, 'carpeta d', '2017-05-05', ''),
(19, 1, 3, 1, 'carpeta a', '2017-05-05', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_facturacion`
--

CREATE TABLE `tbl_facturacion` (
  `codigo_factura` int(11) NOT NULL,
  `codigo_usuario` int(11) NOT NULL,
  `codigo_plan` int(11) NOT NULL,
  `monto` float NOT NULL,
  `descuento` float DEFAULT NULL,
  `fecha_pago` date NOT NULL,
  `fecha_expiracion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_favoritos`
--

CREATE TABLE `tbl_favoritos` (
  `codigo_carpeta` int(11) NOT NULL,
  `codigo_usuario` int(11) NOT NULL,
  `codigo_archivo` int(11) NOT NULL,
  `fecha_registo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_favoritos`
--

INSERT INTO `tbl_favoritos` (`codigo_carpeta`, `codigo_usuario`, `codigo_archivo`, `fecha_registo`) VALUES
(1, 1, 55, '2017-05-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_hist_accesos`
--

CREATE TABLE `tbl_hist_accesos` (
  `codigo_acceso` int(11) NOT NULL,
  `codigo_archivo` int(11) NOT NULL,
  `codigo_usuario` int(11) NOT NULL,
  `direccion_ip` varchar(45) DEFAULT NULL,
  `fecha_acceso` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_hist_shares`
--

CREATE TABLE `tbl_hist_shares` (
  `codigo_carpeta` int(11) NOT NULL,
  `codigo_archivo` int(11) NOT NULL,
  `codigo_usuario` int(11) NOT NULL,
  `fecha_compartido` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_mensaje_chat`
--

CREATE TABLE `tbl_mensaje_chat` (
  `codigo_mensaje` int(11) NOT NULL,
  `codigo_usuario_envia` int(11) NOT NULL,
  `codigo_usuario_recibe` int(11) NOT NULL,
  `mensaje` varchar(1000) NOT NULL,
  `fecha_mensaje` datetime NOT NULL,
  `leido` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pais`
--

CREATE TABLE `tbl_pais` (
  `codigo_pais` int(11) NOT NULL,
  `nombre_pais` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_pais`
--

INSERT INTO `tbl_pais` (`codigo_pais`, `nombre_pais`) VALUES
(1, 'AfganistÃ¡n'),
(2, 'Akrotiri'),
(3, 'Albania'),
(4, 'Alemania'),
(5, 'Andorra'),
(6, 'Angola'),
(7, 'Anguila'),
(8, 'AntÃ¡rtida'),
(9, 'Antigua y Barbuda'),
(10, 'Antillas Neerlandesas'),
(11, 'Arabia SaudÃ­'),
(12, 'Arctic Ocean'),
(13, 'Argelia'),
(14, 'Argentina'),
(15, 'Armenia'),
(16, 'Aruba'),
(17, 'Ashmore and Cartier Islands'),
(18, 'Atlantic Ocean'),
(19, 'Australia'),
(20, 'Austria'),
(21, 'AzerbaiyÃ¡n'),
(22, 'Bahamas'),
(23, 'BahrÃ¡in'),
(24, 'Bangladesh'),
(25, 'Barbados'),
(26, 'BÃ©lgica'),
(27, 'Belice'),
(28, 'BenÃ­n'),
(29, 'Bermudas'),
(30, 'Bielorrusia'),
(31, 'Birmania; Myanmar'),
(32, 'Bolivia'),
(33, 'Bosnia y Hercegovina'),
(34, 'Botsuana'),
(35, 'Brasil'),
(36, 'BrunÃ©i'),
(37, 'Bulgaria'),
(38, 'Burkina Faso'),
(39, 'Burundi'),
(40, 'ButÃ¡n'),
(41, 'Cabo Verde'),
(42, 'Camboya'),
(43, 'CamerÃºn'),
(44, 'CanadÃ¡'),
(45, 'Chad'),
(46, 'Chile'),
(47, 'China'),
(48, 'Chipre'),
(49, 'Clipperton Island'),
(50, 'Colombia'),
(51, 'Comoras'),
(52, 'Congo'),
(53, 'Coral Sea Islands'),
(54, 'Corea del Norte'),
(55, 'Corea del Sur'),
(56, 'Costa de Marfil'),
(57, 'Costa Rica'),
(58, 'Croacia'),
(59, 'Cuba'),
(60, 'Dhekelia'),
(61, 'Dinamarca'),
(62, 'Dominica'),
(63, 'Ecuador'),
(64, 'Egipto'),
(65, 'El Salvador'),
(66, 'El Vaticano'),
(67, 'Emiratos Ãrabes Unidos'),
(68, 'Eritrea'),
(69, 'Eslovaquia'),
(70, 'Eslovenia'),
(71, 'EspaÃ±a'),
(72, 'Estados Unidos'),
(73, 'Estonia'),
(74, 'EtiopÃ­a'),
(75, 'Filipinas'),
(76, 'Finlandia'),
(77, 'Fiyi'),
(78, 'Francia'),
(79, 'GabÃ³n'),
(80, 'Gambia'),
(81, 'Gaza Strip'),
(82, 'Georgia'),
(83, 'Ghana'),
(84, 'Gibraltar'),
(85, 'Granada'),
(86, 'Grecia'),
(87, 'Groenlandia'),
(88, 'Guam'),
(89, 'Guatemala'),
(90, 'Guernsey'),
(91, 'Guinea'),
(92, 'Guinea Ecuatorial'),
(93, 'Guinea-Bissau'),
(94, 'Guyana'),
(95, 'HaitÃ­'),
(96, 'Honduras'),
(97, 'Hong Kong'),
(98, 'HungrÃ­a'),
(99, 'India'),
(100, 'Indian Ocean'),
(101, 'Indonesia'),
(102, 'IrÃ¡n'),
(103, 'Iraq'),
(104, 'Irlanda'),
(105, 'Isla Bouvet'),
(106, 'Isla Christmas'),
(107, 'Isla Norfolk'),
(108, 'Islandia'),
(109, 'Islas CaimÃ¡n'),
(110, 'Islas Cocos'),
(111, 'Islas Cook'),
(112, 'Islas Feroe'),
(113, 'Islas Georgia del Sur y Sandwich del Sur'),
(114, 'Islas Heard y McDonald'),
(115, 'Islas Malvinas'),
(116, 'Islas Marianas del Norte'),
(117, 'Islas Marshall'),
(118, 'Islas Pitcairn'),
(119, 'Islas SalomÃ³n'),
(120, 'Islas Turcas y Caicos'),
(121, 'Islas VÃ­rgenes Americanas'),
(122, 'Islas VÃ­rgenes BritÃ¡nicas'),
(123, 'Israel'),
(124, 'Italia'),
(125, 'Jamaica'),
(126, 'Jan Mayen'),
(127, 'JapÃ³n'),
(128, 'Jersey'),
(129, 'Jordania'),
(130, 'KazajistÃ¡n'),
(131, 'Kenia'),
(132, 'KirguizistÃ¡n'),
(133, 'Kiribati'),
(134, 'Kuwait'),
(135, 'Laos'),
(136, 'Lesoto'),
(137, 'Letonia'),
(138, 'LÃ­bano'),
(139, 'Liberia'),
(140, 'Libia'),
(141, 'Liechtenstein'),
(142, 'Lituania'),
(143, 'Luxemburgo'),
(144, 'Macao'),
(145, 'Macedonia'),
(146, 'Madagascar'),
(147, 'Malasia'),
(148, 'Malaui'),
(149, 'Maldivas'),
(150, 'MalÃ­'),
(151, 'Malta'),
(152, 'Man, Isle of'),
(153, 'Marruecos'),
(154, 'Mauricio'),
(155, 'Mauritania'),
(156, 'Mayotte'),
(157, 'MÃ©xico'),
(158, 'Micronesia'),
(159, 'Moldavia'),
(160, 'MÃ³naco'),
(161, 'Mongolia'),
(162, 'Montenegro'),
(163, 'Montserrat'),
(164, 'Mozambique'),
(165, 'Mundo'),
(166, 'Namibia'),
(167, 'Nauru'),
(168, 'Navassa Island'),
(169, 'Nepal'),
(170, 'Nicaragua'),
(171, 'NÃ­ger'),
(172, 'Nigeria'),
(173, 'Niue'),
(174, 'Noruega'),
(175, 'Nueva Caledonia'),
(176, 'Nueva Zelanda'),
(177, 'OmÃ¡n'),
(178, 'Pacific Ocean'),
(179, 'PaÃ­ses Bajos'),
(180, 'PakistÃ¡n'),
(181, 'Palaos'),
(182, 'PanamÃ¡'),
(183, 'PapÃºa-Nueva Guinea'),
(184, 'Paracel Islands'),
(185, 'Paraguay'),
(186, 'PerÃº'),
(187, 'Polinesia Francesa'),
(188, 'Polonia'),
(189, 'Portugal'),
(190, 'Puerto Rico'),
(191, 'Qatar'),
(192, 'Reino Unido'),
(193, 'RepÃºblica Centroafricana'),
(194, 'RepÃºblica Checa'),
(195, 'RepÃºblica DemocrÃ¡tica del Congo'),
(196, 'RepÃºblica Dominicana'),
(197, 'Ruanda'),
(198, 'Rumania'),
(199, 'Rusia'),
(200, 'SÃ¡hara Occidental'),
(201, 'Samoa'),
(202, 'Samoa Americana'),
(203, 'San CristÃ³bal y Nieves'),
(204, 'San Marino'),
(205, 'San Pedro y MiquelÃ³n'),
(206, 'San Vicente y las Granadinas'),
(207, 'Santa Helena'),
(208, 'Santa LucÃ­a'),
(209, 'Santo TomÃ© y PrÃ­ncipe'),
(210, 'Senegal'),
(211, 'Serbia'),
(212, 'Seychelles'),
(213, 'Sierra Leona'),
(214, 'Singapur'),
(215, 'Siria'),
(216, 'Somalia'),
(217, 'Southern Ocean'),
(218, 'Spratly Islands'),
(219, 'Sri Lanka'),
(220, 'Suazilandia'),
(221, 'SudÃ¡frica'),
(222, 'SudÃ¡n'),
(223, 'Suecia'),
(224, 'Suiza'),
(225, 'Surinam'),
(226, 'Svalbard y Jan Mayen'),
(227, 'Tailandia'),
(228, 'TaiwÃ¡n'),
(229, 'Tanzania'),
(230, 'TayikistÃ¡n'),
(231, 'Territorio BritÃ¡nico del OcÃ©ano Indico'),
(232, 'Territorios Australes Franceses'),
(233, 'Timor Oriental'),
(234, 'Togo'),
(235, 'Tokelau'),
(236, 'Tonga'),
(237, 'Trinidad y Tobago'),
(238, 'TÃºnez'),
(239, 'TurkmenistÃ¡n'),
(240, 'TurquÃ­a'),
(241, 'Tuvalu'),
(242, 'Ucrania'),
(243, 'Uganda'),
(244, 'UniÃ³n Europea'),
(245, 'Uruguay'),
(246, 'UzbekistÃ¡n'),
(247, 'Vanuatu'),
(248, 'Venezuela'),
(249, 'Vietnam'),
(250, 'Wake Island'),
(251, 'Wallis y Futuna'),
(252, 'West Bank'),
(253, 'Yemen'),
(254, 'Yibuti'),
(255, 'Zambia'),
(256, 'Zimbabue');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_papelera_archivos`
--

CREATE TABLE `tbl_papelera_archivos` (
  `codigo_archivo` int(11) NOT NULL,
  `fecha_eliminado` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_papelera_carpetas`
--

CREATE TABLE `tbl_papelera_carpetas` (
  `codigo_carpeta` int(11) NOT NULL,
  `fecha_eliminado` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_permisos`
--

CREATE TABLE `tbl_permisos` (
  `codigo_permiso` int(11) NOT NULL,
  `tipo_permiso` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_permisos`
--

INSERT INTO `tbl_permisos` (`codigo_permiso`, `tipo_permiso`) VALUES
(1, 'lectura'),
(2, 'modificar'),
(3, 'modificaar, eliminar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_permisos_archivos`
--

CREATE TABLE `tbl_permisos_archivos` (
  `codigo_archivo` int(11) NOT NULL,
  `codigo_usuario` int(11) NOT NULL,
  `codigo_permiso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_permisos_carpetas`
--

CREATE TABLE `tbl_permisos_carpetas` (
  `codigo_permiso` int(11) NOT NULL,
  `codigo_usuario` int(11) NOT NULL,
  `codigo_carpeta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_planes`
--

CREATE TABLE `tbl_planes` (
  `codigo_plan` int(11) NOT NULL,
  `nombre_plan` varchar(200) NOT NULL,
  `almacenamiento` int(11) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_planes`
--

INSERT INTO `tbl_planes` (`codigo_plan`, `nombre_plan`, `almacenamiento`, `precio`) VALUES
(1, 'gratuito', 15, 0),
(2, '100 GB', 100, 1.99),
(3, '1 TB', 1000, 9.99),
(4, '2 TB', 2000, 19.99),
(5, '10 TB', 10000, 99.99),
(6, '20 TB', 20, 199.99),
(7, '30 TB', 30000, 299.99);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_preguntas`
--

CREATE TABLE `tbl_preguntas` (
  `codigo_pregunta` int(11) NOT NULL,
  `pregunta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_preguntas`
--

INSERT INTO `tbl_preguntas` (`codigo_pregunta`, `pregunta`) VALUES
(1, 'El nombre de tu primer mascota'),
(2, 'Lugar de nacimento de tu madre'),
(3, 'Equipo deportivo favorito'),
(4, 'El nombre de tu maestra de primer grado'),
(5, 'Nombre de tu tío favorito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_privacidad`
--

CREATE TABLE `tbl_privacidad` (
  `codigo_privacidad` int(11) NOT NULL,
  `tipo_privacidad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_privacidad`
--

INSERT INTO `tbl_privacidad` (`codigo_privacidad`, `tipo_privacidad`) VALUES
(1, 'privado'),
(2, 'publico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_recientes`
--

CREATE TABLE `tbl_recientes` (
  `codigo_usuario` int(11) NOT NULL,
  `codigo_archivo` int(11) NOT NULL,
  `codigo_carpeta` int(11) NOT NULL,
  `fecha_visitado` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_respuestas`
--

CREATE TABLE `tbl_respuestas` (
  `codigo_respuesta` int(11) NOT NULL,
  `codigo_usuario` int(11) NOT NULL,
  `codigo_pregunta` int(11) NOT NULL,
  `respuesta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_respuestas`
--

INSERT INTO `tbl_respuestas` (`codigo_respuesta`, `codigo_usuario`, `codigo_pregunta`, `respuesta`) VALUES
(1, 8, 1, 'carlos'),
(2, 8, 2, 'maria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_archivos`
--

CREATE TABLE `tbl_tipo_archivos` (
  `codigo_tipo_archivo` int(11) NOT NULL,
  `tipo_archivo` varchar(200) NOT NULL,
  `extension` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_tipo_archivos`
--

INSERT INTO `tbl_tipo_archivos` (`codigo_tipo_archivo`, `tipo_archivo`, `extension`) VALUES
(1, 'otro', 'otro'),
(2, 'audio/aif ', 'aif '),
(3, 'audio/aifc', 'aifc'),
(4, 'audio/aiff', 'aiff'),
(5, 'audio/amf ', 'amf '),
(6, 'audio/asf ', 'asf '),
(7, 'audio/au', 'au'),
(8, 'audio/audi', 'audi'),
(9, 'audio/cda', 'cda'),
(10, 'audio/cdda', 'cdda'),
(11, 'audio/far', 'far'),
(12, 'audio/it', 'it'),
(13, 'audio/itz', 'itz'),
(14, 'audio/lwv', 'lwv'),
(15, 'audio/mid', 'mid'),
(16, 'audio/midi', 'midi'),
(17, 'audio/miz', 'miz'),
(18, 'audio/mp1', 'mp1'),
(19, 'audio/mp2', 'mp2'),
(20, 'audio/mp3', 'mp3'),
(21, 'audio/mtm', 'mtm'),
(22, 'audio/ogg', 'ogg'),
(23, 'audio/ogm', 'ogm'),
(24, 'audio/okt', 'okt'),
(25, 'audio/ra', 'ra'),
(26, 'audio/rmi', 'rmi'),
(27, 'audio/snd', 'snd'),
(28, 'audio/stm', 'stm'),
(29, 'audio/stz', 'stz'),
(30, 'audio/ult', 'ult'),
(31, 'audio/voc', 'voc'),
(32, 'audio/wav', 'wav'),
(33, 'audio/wax', 'wax'),
(34, 'audio/wm', 'wm'),
(35, 'audio/wma', 'wma'),
(36, 'audio/wmv', 'wmv'),
(37, 'audio/xm', 'xm'),
(38, 'audio/xmz', 'xmz'),
(39, 'video/asf', 'asf'),
(40, 'video/avi', 'avi'),
(41, 'video/bik', 'bik'),
(42, 'video/div', 'div'),
(43, 'video/divx', 'divx'),
(44, 'video/dvd', 'dvd'),
(45, 'video/ivf', 'ivf'),
(46, 'video/m1v', 'm1v'),
(47, 'video/mov', 'mov'),
(48, 'video/movi', 'movi'),
(49, 'video/mp2v', 'mp2v'),
(50, 'video/mp4', 'mp4'),
(51, 'video/mpa', 'mpa'),
(52, 'video/mpe', 'mpe'),
(53, 'video/mpeg', 'mpeg'),
(54, 'video/mpg', 'mpg'),
(55, 'video/mpv2', 'mpv2'),
(56, 'video/qt', 'qt'),
(57, 'video/qtl', 'qtl'),
(58, 'video/rpm', 'rpm'),
(59, 'video/smk', 'smk'),
(60, 'video/wm', 'wm'),
(61, 'video/wmv', 'wmv'),
(62, 'video/wob', 'wob'),
(63, 'comprimido/ace', 'ace'),
(64, 'comprimido/arj', 'arj'),
(65, 'comprimido/bz ', 'bz '),
(66, 'comprimido/bz2', 'bz2'),
(67, 'comprimido/cab', 'cab'),
(68, 'comprimido/gz ', 'gz '),
(69, 'comprimido/ha ', 'ha '),
(70, 'comprimido/iso', 'iso'),
(71, 'comprimido/lha', 'lha'),
(72, 'comprimido/lzh', 'lzh'),
(73, 'comprimido/r00', 'r00'),
(74, 'comprimido/r01', 'r01'),
(75, 'comprimido/r02', 'r02'),
(76, 'comprimido/r03', 'r03'),
(77, 'comprimido/rar', 'rar'),
(78, 'comprimido/tar', 'tar'),
(79, 'comprimido/tbz', 'tbz'),
(80, 'comprimido/tbz2', 'tbz2'),
(81, 'comprimido/tgz', 'tgz'),
(82, 'comprimido/uu ', 'uu '),
(83, 'comprimido/uue', 'uue'),
(84, 'comprimido/xxe', 'xxe'),
(85, 'comprimido/zip', 'zip'),
(86, 'comprimido/zoo', 'zoo'),
(87, 'image/ais', 'ais'),
(88, 'image/bmp', 'bmp'),
(89, 'image/bw', 'bw'),
(90, 'image/cdr', 'cdr'),
(91, 'image/cdt', 'cdt'),
(92, 'image/cgm', 'cgm'),
(93, 'image/cmx', 'cmx'),
(94, 'image/cpt', 'cpt'),
(95, 'image/dcx', 'dcx'),
(96, 'image/dib', 'dib'),
(97, 'image/emf', 'emf'),
(98, 'image/gbr', 'gbr'),
(99, 'image/gif', 'gif'),
(100, 'image/gih', 'gih'),
(101, 'image/ico', 'ico'),
(102, 'image/iff', 'iff'),
(103, 'image/ilbm', 'ilbm'),
(104, 'image/jfif', 'jfif'),
(105, 'image/jif', 'jif'),
(106, 'image/jpe', 'jpe'),
(107, 'image/jpeg', 'jpeg'),
(108, 'image/jpg', 'jpg'),
(109, 'image/kdc', 'kdc'),
(110, 'image/lbm', 'lbm'),
(111, 'image/mac', 'mac'),
(112, 'image/pat', 'pat'),
(113, 'image/pcd', 'pcd'),
(114, 'image/pct', 'pct'),
(115, 'image/pcx', 'pcx'),
(116, 'image/pic', 'pic'),
(117, 'image/pict', 'pict'),
(118, 'image/png', 'png'),
(119, 'image/pntg', 'pntg'),
(120, 'image/pix', 'pix'),
(121, 'image/psd', 'psd'),
(122, 'image/psp', 'psp'),
(123, 'image/qti', 'qti'),
(124, 'image/qtif', 'qtif'),
(125, 'image/rgb', 'rgb'),
(126, 'image/rgba', 'rgba'),
(127, 'image/rif', 'rif'),
(128, 'image/rle', 'rle'),
(129, 'image/sgi', 'sgi'),
(130, 'image/tga', 'tga'),
(131, 'image/tif', 'tif'),
(132, 'image/tiff', 'tiff'),
(133, 'image/wmf', 'wmf'),
(134, 'image/xcf', 'xcf'),
(135, 'texto/DIC', 'DIC'),
(136, 'texto/DOC', 'DOC'),
(137, 'texto/DIZ', 'DIZ'),
(138, 'texto/DOCHTML', 'DOCHTML'),
(139, 'texto/EXC', 'EXC'),
(140, 'texto/IDX', 'IDX'),
(141, 'texto/LOG', 'LOG'),
(142, 'application/pdf', 'pdf'),
(143, 'texto/RTF', 'RTF'),
(144, 'texto/SCP', 'SCP'),
(145, 'texto/TXT', 'TXT'),
(146, 'texto/WRI', 'WRI'),
(147, 'texto/WTX', 'WTX'),
(148, 'openoffice/sdc', 'sdc'),
(149, 'openoffice/sdd', 'sdd'),
(150, 'openoffice/sds', 'sds'),
(151, 'openoffice/sdw', 'sdw'),
(152, 'openoffice/sfs', 'sfs'),
(153, 'openoffice/sgl', 'sgl'),
(154, 'openoffice/smd', 'smd'),
(155, 'openoffice/smf', 'smf'),
(156, 'openoffice/stc', 'stc'),
(157, 'openoffice/std', 'std'),
(158, 'openoffice/sti', 'sti'),
(159, 'openoffice/stw', 'stw'),
(160, 'openoffice/sxc', 'sxc'),
(161, 'openoffice/sxd', 'sxd'),
(162, 'openoffice/sxg', 'sxg'),
(163, 'openoffice/sxi', 'sxi'),
(164, 'openoffice/sxm', 'sxm'),
(165, 'openoffice/sxw', 'sxw'),
(166, 'openoffice/vor', 'vor'),
(167, 'openoffice/sda', 'sda'),
(168, 'quicktime/qpx', 'qpx'),
(169, 'quicktime/qtp', 'qtp'),
(170, 'quicktime/qts', 'qts'),
(171, 'quicktime/qtx', 'qtx'),
(172, 'quicktime/qup', 'qup'),
(173, 'powerpoint/pot', 'pot'),
(174, 'powerpoint/pothtml', 'pothtml'),
(175, 'powerpoint/ppa', 'ppa'),
(176, 'powerpoint/pps', 'pps'),
(177, 'powerpoint/ppt', 'ppt'),
(178, 'powerpoint/ppthtml', 'ppthtml'),
(179, 'word/dot', 'dot'),
(180, 'word/dothtml', 'dothtml'),
(181, 'word/wbk', 'wbk'),
(182, 'word/wiz', 'wiz'),
(183, 'excel/csv', 'csv'),
(184, 'excel/dif', 'dif'),
(185, 'excel/dqy', 'dqy'),
(186, 'excel/xla', 'xla'),
(187, 'excel/xlb', 'xlb'),
(188, 'excel/xlc', 'xlc'),
(189, 'excel/xld', 'xld'),
(190, 'excel/xlk', 'xlk'),
(191, 'excel/xll', 'xll'),
(192, 'excel/xlm', 'xlm'),
(193, 'excel/xls', 'xls'),
(194, 'excel/xlshtml', 'xlshtml'),
(195, 'excel/xlt', 'xlt'),
(196, 'excel/xlthtml', 'xlthtml'),
(197, 'excel/xlv', 'xlv'),
(198, 'excel/xlw', 'xlw'),
(199, 'mediaplayer/asx', 'asx'),
(200, 'mediaplayer/wmp', 'wmp'),
(201, 'mediaplayer/wms', 'wms'),
(202, 'mediaplayer/wmx', 'wmx'),
(203, 'mediaplayer/wmz', 'wmz'),
(204, 'mediaplayer/wpl', 'wpl'),
(205, 'mediaplayer/wvx', 'wvx'),
(206, 'internet/asp', 'asp'),
(207, 'internet/css', 'css'),
(208, 'internet/hta', 'hta'),
(209, 'internet/htm', 'htm'),
(210, 'internet/htm', 'htm'),
(211, 'internet/httl', 'httl'),
(212, 'internet/js', 'js'),
(213, 'internet/jse', 'jse'),
(214, 'internet/jsp', 'jsp'),
(215, 'internet/mht', 'mht'),
(216, 'internet/mhtml', 'mhtml'),
(217, 'internet/php', 'php'),
(218, 'internet/sht', 'sht'),
(219, 'internet/url', 'url'),
(220, 'internet/xml', 'xml'),
(221, 'internet/xsl', 'xsl'),
(222, 'internet/eml', 'eml'),
(223, 'internet/mbx', 'mbx'),
(224, 'internet/msg', 'msg'),
(225, 'internet/nws', 'nws'),
(226, 'otros/bin', 'bin'),
(227, 'otros/class', 'class'),
(228, 'otros/c', 'c'),
(229, 'otros/cpp', 'cpp'),
(230, 'otros/java', 'java'),
(231, 'otros/m3u', 'm3u'),
(232, 'otros/max', 'max'),
(233, 'otros/spl', 'spl'),
(234, 'otros/swf', 'swf'),
(235, 'otros/vbs', 'vbs'),
(236, 'sistema/386', '386'),
(237, 'sistema/aca', 'aca'),
(238, 'sistema/acg', 'acg'),
(239, 'sistema/acs', 'acs'),
(240, 'sistema/acw', 'acw'),
(241, 'sistema/ani', 'ani'),
(242, 'sistema/bat', 'bat'),
(243, 'sistema/bfc', 'bfc'),
(244, 'sistema/bkf', 'bkf'),
(245, 'sistema/blg', 'blg'),
(246, 'sistema/cat', 'cat'),
(247, 'sistema/cer', 'cer'),
(248, 'sistema/cfg', 'cfg'),
(249, 'sistema/chk', 'chk'),
(250, 'sistema/chm', 'chm'),
(251, 'sistema/clp', 'clp'),
(252, 'sistema/cmd', 'cmd'),
(253, 'sistema/cnf', 'cnf'),
(254, 'sistema/com', 'com'),
(255, 'sistema/cpl', 'cpl'),
(256, 'sistema/crl', 'crl'),
(257, 'sistema/crt', 'crt'),
(258, 'sistema/cur', 'cur'),
(259, 'sistema/dat', 'dat'),
(260, 'sistema/db', 'db'),
(261, 'sistema/der', 'der'),
(262, 'sistema/dll', 'dll'),
(263, 'sistema/drv', 'drv'),
(264, 'sistema/ds', 'ds'),
(265, 'sistema/dsn', 'dsn'),
(266, 'sistema/dun', 'dun'),
(267, 'sistema/exe', 'exe'),
(268, 'sistema/fnd', 'fnd'),
(269, 'sistema/fng', 'fng'),
(270, 'sistema/folder', 'folder'),
(271, 'sistema/fon', 'fon'),
(272, 'sistema/grp', 'grp'),
(273, 'sistema/hlp', 'hlp'),
(274, 'sistema/ht', 'ht'),
(275, 'sistema/inf', 'inf'),
(276, 'sistema/ini', 'ini'),
(277, 'sistema/ins', 'ins'),
(278, 'sistema/isp', 'isp'),
(279, 'sistema/job', 'job'),
(280, 'sistema/key', 'key'),
(281, 'sistema/lnk', 'lnk'),
(282, 'sistema/msc', 'msc'),
(283, 'sistema/msi', 'msi'),
(284, 'sistema/msp', 'msp'),
(285, 'sistema/msstyles', 'msstyles'),
(286, 'sistema/nfo', 'nfo'),
(287, 'sistema/ocx', 'ocx'),
(288, 'sistema/otf', 'otf'),
(289, 'sistema/p7c', 'p7c'),
(290, 'sistema/pfm', 'pfm'),
(291, 'sistema/pif', 'pif'),
(292, 'sistema/pko', 'pko'),
(293, 'sistema/pma', 'pma'),
(294, 'sistema/pmc', 'pmc'),
(295, 'sistema/pml', 'pml'),
(296, 'sistema/pmr', 'pmr'),
(297, 'sistema/pmw', 'pmw'),
(298, 'sistema/pnf', 'pnf'),
(299, 'sistema/psw', 'psw'),
(300, 'sistema/qds', 'qds'),
(301, 'sistema/rdp', 'rdp'),
(302, 'sistema/reg', 'reg'),
(303, 'sistema/scf', 'scf'),
(304, 'sistema/scr', 'scr'),
(305, 'sistema/sct', 'sct'),
(306, 'sistema/shb', 'shb'),
(307, 'sistema/shs', 'shs'),
(308, 'sistema/sys', 'sys'),
(309, 'sistema/theme', 'theme'),
(310, 'sistema/tmp', 'tmp'),
(311, 'sistema/ttc', 'ttc'),
(312, 'sistema/ttf', 'ttf'),
(313, 'sistema/udl', 'udl'),
(314, 'sistema/vxd', 'vxd'),
(315, 'sistema/wab', 'wab'),
(316, 'sistema/wmdb', 'wmdb'),
(317, 'sistema/wme', 'wme'),
(318, 'sistema/wsc', 'wsc'),
(319, 'sistema/wsf', 'wsf'),
(320, 'sistema/wsh', 'wsh'),
(321, 'sistema/zap', 'zap'),
(322, 'application/msword', 'dot'),
(323, 'application/msword', 'doc'),
(324, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'docx'),
(325, 'application/vnd.openxmlformats-officedocument.wordprocessingml.template', 'dotx'),
(326, 'application/vnd.ms-word.document.macroEnabled.12', 'docm'),
(327, 'application/vnd.ms-word.template.macroEnabled.12', 'dotm'),
(328, 'application/vnd.ms-excel', 'xls'),
(329, 'application/vnd.ms-excel', 'xlt'),
(330, 'application/vnd.ms-excel', 'xla'),
(331, 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'xlsx'),
(332, 'application/vnd.openxmlformats-officedocument.spreadsheetml.template', 'xltx'),
(333, 'application/vnd.ms-excel.sheet.macroEnabled.12', 'xlsm'),
(334, 'application/vnd.ms-excel.template.macroEnabled.12', 'xltm'),
(335, 'application/vnd.ms-excel.sheet.binary.macroEnabled.12', 'xlsb'),
(336, 'application/vnd.ms-powerpoint', 'ppt'),
(337, 'application/vnd.ms-powerpoint', 'pot'),
(338, 'application/vnd.ms-powerpoint', 'pps'),
(339, 'application/vnd.ms-powerpoint', 'ppa'),
(340, 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'pptx'),
(341, 'application/vnd.openxmlformats-officedocument.presentationml.template', 'potx'),
(342, 'application/vnd.openxmlformats-officedocument.presentationml.slideshow', 'ppsx'),
(343, 'application/vnd.ms-powerpoint.addin.macroEnabled.12', 'ppam'),
(344, 'application/vnd.ms-powerpoint.presentation.macroEnabled.12', 'pptm'),
(345, 'application/vnd.ms-powerpoint.template.macroEnabled.12', 'potm'),
(346, 'application/vnd.ms-powerpoint.slideshow.macroEnabled.12', 'ppsm'),
(347, 'application/octet-stream', 'zip'),
(348, 'application/x-msdownload', 'exe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `codigo_usuario` int(11) NOT NULL,
  `codigo_plan` int(11) NOT NULL,
  `codigo_lugar_residencia` int(11) NOT NULL,
  `genero` varchar(1) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `alias` varchar(45) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `fotografia` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`codigo_usuario`, `codigo_plan`, `codigo_lugar_residencia`, `genero`, `nombre`, `apellido`, `email`, `fecha_registro`, `fecha_nacimiento`, `alias`, `clave`, `telefono`, `fotografia`) VALUES
(1, 4, 55, 'M', 'David', 'Romero', 'david.medina@gmial.com', '2017-04-29', '1990-01-28', 'david', '598bd2a7584a5a4b780f58decc9d8aa34c9f971d', '9383203', '../imgprofile/Imagen1.png'),
(2, 1, 21, 'F', 'Dulce', 'Medina', 'dulcemedina@gmail.com', '2017-04-29', '1990-04-10', 'dulce', 'asd.456', '4562', NULL),
(3, 2, 89, 'M', 'Miguel', 'Martines', 'miguelmartinez@gmail.com', '2017-04-29', '1998-04-04', 'miguel', 'asd.4es', '947353', NULL),
(4, 3, 204, 'M', 'Pauler', 'Bendek', 'bendekpauler@gmail.com', '2017-04-29', '1096-04-11', 'pauler', 'lkajd', '73658', NULL),
(5, 4, 195, 'M', 'Carlos', 'Castro', 'carlosCastro@gmail.comr', '2017-04-29', '1096-04-11', 'pauler', 'lkajd', NULL, NULL),
(6, 5, 215, 'F', 'Vivian', 'vidal', 'vidalvivian@gmail.com', '2017-04-29', '1983-04-06', 'vivial', 'alkdjd', NULL, NULL),
(7, 6, 184, 'M', 'Jose', 'Medina', 'josemedina@gmail.com', '2017-04-29', '1998-04-04', 'tato', 'lkadlkjadlka', NULL, NULL),
(8, 1, 96, 'M', 'luis', 'medina', 'luisitomedina95@gmail.com', '2017-05-04', '1995-10-20', 'luisberto99', '598bd2a7584a5a4b780f58decc9d8aa34c9f971d', ' 504 32014552', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_versiones`
--

CREATE TABLE `tbl_versiones` (
  `codigo_version` int(11) NOT NULL,
  `codigo_archivo` int(11) NOT NULL,
  `codigo_version_padre` int(11) DEFAULT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  `fecha_modificacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_amigos`
--
ALTER TABLE `tbl_amigos`
  ADD PRIMARY KEY (`codigo_amistad`),
  ADD KEY `codigo_usuario_idx` (`codigo_usuario`),
  ADD KEY `codigo_amigo_idx` (`codigo_usuario_amigo`);

--
-- Indices de la tabla `tbl_archivos`
--
ALTER TABLE `tbl_archivos`
  ADD PRIMARY KEY (`codigo_archivo`),
  ADD KEY `fk_tbl_archivos_tbl_usuarios_idx` (`codigo_usuario`),
  ADD KEY `fk_tbl_archivos_tbl_tipo_archivos1_idx` (`codigo_tipo_archivo`),
  ADD KEY `fk_tbl_archivos_tbl_privacidad1_idx` (`codigo_privacidad`);

--
-- Indices de la tabla `tbl_archivos_x_carpetas`
--
ALTER TABLE `tbl_archivos_x_carpetas`
  ADD PRIMARY KEY (`codigo_archivo`,`codigo_carpeta`),
  ADD KEY `fk_archivos_x_carpetas_tbl_archivos1_idx` (`codigo_archivo`),
  ADD KEY `fk_archivos_x_carpetas_tbl_carpetas1_idx` (`codigo_carpeta`);

--
-- Indices de la tabla `tbl_carpetas`
--
ALTER TABLE `tbl_carpetas`
  ADD PRIMARY KEY (`codigo_carpeta`),
  ADD KEY `fk_tbl_carpetas_tbl_usuarios1_idx` (`codigo_usuario`),
  ADD KEY `fk_tbl_carpetas_tbl_carpetas1_idx` (`codigo_carpeta_padre`),
  ADD KEY `fk_tbl_carpetas_tbl_privacidad1_idx` (`codigo_privacidad`);

--
-- Indices de la tabla `tbl_facturacion`
--
ALTER TABLE `tbl_facturacion`
  ADD PRIMARY KEY (`codigo_factura`),
  ADD KEY `fk_tbl_facturacion_tbl_usuarios1_idx` (`codigo_usuario`),
  ADD KEY `fk_tbl_facturacion_tbl_planes1_idx` (`codigo_plan`);

--
-- Indices de la tabla `tbl_favoritos`
--
ALTER TABLE `tbl_favoritos`
  ADD KEY `fk_tbl_favoritos_tbl_carpetas1_idx` (`codigo_carpeta`),
  ADD KEY `fk_tbl_favoritos_tbl_usuarios1_idx` (`codigo_usuario`),
  ADD KEY `fk_tbl_favoritos_tbl_archivos1_idx` (`codigo_archivo`);

--
-- Indices de la tabla `tbl_hist_accesos`
--
ALTER TABLE `tbl_hist_accesos`
  ADD PRIMARY KEY (`codigo_acceso`),
  ADD KEY `fk_tbl_hist_accesos_tbl_archivos1_idx` (`codigo_archivo`),
  ADD KEY `fk_tbl_hist_accesos_tbl_usuarios1_idx` (`codigo_usuario`);

--
-- Indices de la tabla `tbl_hist_shares`
--
ALTER TABLE `tbl_hist_shares`
  ADD UNIQUE KEY `codigo_carpeta_UNIQUE` (`codigo_carpeta`),
  ADD UNIQUE KEY `codigo_archivo_UNIQUE` (`codigo_archivo`),
  ADD UNIQUE KEY `codigo_usuario_UNIQUE` (`codigo_usuario`),
  ADD KEY `fk_tbl_hist_shares_tbl_carpetas1_idx` (`codigo_carpeta`),
  ADD KEY `fk_tbl_hist_shares_tbl_archivos1_idx` (`codigo_archivo`),
  ADD KEY `fk_tbl_hist_shares_tbl_usuarios1_idx` (`codigo_usuario`);

--
-- Indices de la tabla `tbl_mensaje_chat`
--
ALTER TABLE `tbl_mensaje_chat`
  ADD PRIMARY KEY (`codigo_mensaje`),
  ADD KEY `usuario_envia_idx` (`codigo_usuario_envia`),
  ADD KEY `usuario_chat_recibe_idx` (`codigo_usuario_recibe`);

--
-- Indices de la tabla `tbl_pais`
--
ALTER TABLE `tbl_pais`
  ADD PRIMARY KEY (`codigo_pais`);

--
-- Indices de la tabla `tbl_papelera_archivos`
--
ALTER TABLE `tbl_papelera_archivos`
  ADD PRIMARY KEY (`codigo_archivo`),
  ADD KEY `fk_tbl_papelera_archivos_tbl_archivos1_idx` (`codigo_archivo`);

--
-- Indices de la tabla `tbl_papelera_carpetas`
--
ALTER TABLE `tbl_papelera_carpetas`
  ADD PRIMARY KEY (`codigo_carpeta`),
  ADD KEY `fk_tbl_papelera_carpetas_tbl_carpetas1_idx` (`codigo_carpeta`);

--
-- Indices de la tabla `tbl_permisos`
--
ALTER TABLE `tbl_permisos`
  ADD PRIMARY KEY (`codigo_permiso`);

--
-- Indices de la tabla `tbl_permisos_archivos`
--
ALTER TABLE `tbl_permisos_archivos`
  ADD PRIMARY KEY (`codigo_archivo`,`codigo_usuario`,`codigo_permiso`),
  ADD KEY `fk_table1_tbl_archivos1_idx` (`codigo_archivo`),
  ADD KEY `fk_table1_tbl_usuarios1_idx` (`codigo_usuario`),
  ADD KEY `fk_table1_tbl_permisos1_idx` (`codigo_permiso`);

--
-- Indices de la tabla `tbl_permisos_carpetas`
--
ALTER TABLE `tbl_permisos_carpetas`
  ADD PRIMARY KEY (`codigo_permiso`,`codigo_usuario`,`codigo_carpeta`),
  ADD KEY `fk_tbl_permisos_carpetas_tbl_permisos1_idx` (`codigo_permiso`),
  ADD KEY `fk_tbl_permisos_carpetas_tbl_usuarios1_idx` (`codigo_usuario`),
  ADD KEY `fk_tbl_permisos_carpetas_tbl_carpetas1_idx` (`codigo_carpeta`);

--
-- Indices de la tabla `tbl_planes`
--
ALTER TABLE `tbl_planes`
  ADD PRIMARY KEY (`codigo_plan`);

--
-- Indices de la tabla `tbl_preguntas`
--
ALTER TABLE `tbl_preguntas`
  ADD PRIMARY KEY (`codigo_pregunta`);

--
-- Indices de la tabla `tbl_privacidad`
--
ALTER TABLE `tbl_privacidad`
  ADD PRIMARY KEY (`codigo_privacidad`);

--
-- Indices de la tabla `tbl_recientes`
--
ALTER TABLE `tbl_recientes`
  ADD UNIQUE KEY `codigo_usuario_UNIQUE` (`codigo_usuario`),
  ADD UNIQUE KEY `codigo_archivo_UNIQUE` (`codigo_archivo`),
  ADD UNIQUE KEY `codigo_carpeta_UNIQUE` (`codigo_carpeta`),
  ADD KEY `fk_tbl_recientes_tbl_usuarios1_idx` (`codigo_usuario`),
  ADD KEY `fk_tbl_recientes_tbl_archivos1_idx` (`codigo_archivo`),
  ADD KEY `fk_tbl_recientes_tbl_carpetas1_idx` (`codigo_carpeta`);

--
-- Indices de la tabla `tbl_respuestas`
--
ALTER TABLE `tbl_respuestas`
  ADD PRIMARY KEY (`codigo_respuesta`),
  ADD KEY `codigo_pregunta_idx` (`codigo_pregunta`),
  ADD KEY `codigo_usuario_idx` (`codigo_usuario`);

--
-- Indices de la tabla `tbl_tipo_archivos`
--
ALTER TABLE `tbl_tipo_archivos`
  ADD PRIMARY KEY (`codigo_tipo_archivo`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`codigo_usuario`),
  ADD KEY `fk_tbl_usuarios_tbl_planes1_idx` (`codigo_plan`),
  ADD KEY `codigo_lugar_idx` (`codigo_lugar_residencia`);

--
-- Indices de la tabla `tbl_versiones`
--
ALTER TABLE `tbl_versiones`
  ADD PRIMARY KEY (`codigo_version`),
  ADD KEY `fk_tbl_versiones_tbl_archivos1_idx` (`codigo_archivo`),
  ADD KEY `fk_tbl_versiones_tbl_versiones1_idx` (`codigo_version_padre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_amigos`
--
ALTER TABLE `tbl_amigos`
  MODIFY `codigo_amistad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tbl_archivos`
--
ALTER TABLE `tbl_archivos`
  MODIFY `codigo_archivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT de la tabla `tbl_carpetas`
--
ALTER TABLE `tbl_carpetas`
  MODIFY `codigo_carpeta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `tbl_facturacion`
--
ALTER TABLE `tbl_facturacion`
  MODIFY `codigo_factura` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_mensaje_chat`
--
ALTER TABLE `tbl_mensaje_chat`
  MODIFY `codigo_mensaje` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_pais`
--
ALTER TABLE `tbl_pais`
  MODIFY `codigo_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;
--
-- AUTO_INCREMENT de la tabla `tbl_permisos`
--
ALTER TABLE `tbl_permisos`
  MODIFY `codigo_permiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbl_planes`
--
ALTER TABLE `tbl_planes`
  MODIFY `codigo_plan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `tbl_preguntas`
--
ALTER TABLE `tbl_preguntas`
  MODIFY `codigo_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tbl_privacidad`
--
ALTER TABLE `tbl_privacidad`
  MODIFY `codigo_privacidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_respuestas`
--
ALTER TABLE `tbl_respuestas`
  MODIFY `codigo_respuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_tipo_archivos`
--
ALTER TABLE `tbl_tipo_archivos`
  MODIFY `codigo_tipo_archivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=349;
--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `codigo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `tbl_versiones`
--
ALTER TABLE `tbl_versiones`
  MODIFY `codigo_version` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_amigos`
--
ALTER TABLE `tbl_amigos`
  ADD CONSTRAINT `codigo_amigo` FOREIGN KEY (`codigo_usuario_amigo`) REFERENCES `tbl_usuarios` (`codigo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `codigo_usuario` FOREIGN KEY (`codigo_usuario`) REFERENCES `tbl_usuarios` (`codigo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_archivos`
--
ALTER TABLE `tbl_archivos`
  ADD CONSTRAINT `fk_tbl_archivos_tbl_privacidad1` FOREIGN KEY (`codigo_privacidad`) REFERENCES `tbl_privacidad` (`codigo_privacidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_archivos_tbl_tipo_archivos1` FOREIGN KEY (`codigo_tipo_archivo`) REFERENCES `tbl_tipo_archivos` (`codigo_tipo_archivo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_archivos_tbl_usuarios` FOREIGN KEY (`codigo_usuario`) REFERENCES `tbl_usuarios` (`codigo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_archivos_x_carpetas`
--
ALTER TABLE `tbl_archivos_x_carpetas`
  ADD CONSTRAINT `fk_archivos_x_carpetas_tbl_archivos1` FOREIGN KEY (`codigo_archivo`) REFERENCES `tbl_archivos` (`codigo_archivo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_archivos_x_carpetas_tbl_carpetas1` FOREIGN KEY (`codigo_carpeta`) REFERENCES `tbl_carpetas` (`codigo_carpeta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_carpetas`
--
ALTER TABLE `tbl_carpetas`
  ADD CONSTRAINT `fk_tbl_carpetas_tbl_carpetas1` FOREIGN KEY (`codigo_carpeta_padre`) REFERENCES `tbl_carpetas` (`codigo_carpeta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_carpetas_tbl_privacidad1` FOREIGN KEY (`codigo_privacidad`) REFERENCES `tbl_privacidad` (`codigo_privacidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_carpetas_tbl_usuarios1` FOREIGN KEY (`codigo_usuario`) REFERENCES `tbl_usuarios` (`codigo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_facturacion`
--
ALTER TABLE `tbl_facturacion`
  ADD CONSTRAINT `fk_tbl_facturacion_tbl_planes1` FOREIGN KEY (`codigo_plan`) REFERENCES `tbl_planes` (`codigo_plan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_facturacion_tbl_usuarios1` FOREIGN KEY (`codigo_usuario`) REFERENCES `tbl_usuarios` (`codigo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_favoritos`
--
ALTER TABLE `tbl_favoritos`
  ADD CONSTRAINT `fk_tbl_favoritos_tbl_archivos1` FOREIGN KEY (`codigo_archivo`) REFERENCES `tbl_archivos` (`codigo_archivo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_favoritos_tbl_carpetas1` FOREIGN KEY (`codigo_carpeta`) REFERENCES `tbl_carpetas` (`codigo_carpeta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_favoritos_tbl_usuarios1` FOREIGN KEY (`codigo_usuario`) REFERENCES `tbl_usuarios` (`codigo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_hist_accesos`
--
ALTER TABLE `tbl_hist_accesos`
  ADD CONSTRAINT `fk_tbl_hist_accesos_tbl_archivos1` FOREIGN KEY (`codigo_archivo`) REFERENCES `tbl_archivos` (`codigo_archivo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_hist_accesos_tbl_usuarios1` FOREIGN KEY (`codigo_usuario`) REFERENCES `tbl_usuarios` (`codigo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_hist_shares`
--
ALTER TABLE `tbl_hist_shares`
  ADD CONSTRAINT `fk_tbl_hist_shares_tbl_archivos1` FOREIGN KEY (`codigo_archivo`) REFERENCES `tbl_archivos` (`codigo_archivo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_hist_shares_tbl_carpetas1` FOREIGN KEY (`codigo_carpeta`) REFERENCES `tbl_carpetas` (`codigo_carpeta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_hist_shares_tbl_usuarios1` FOREIGN KEY (`codigo_usuario`) REFERENCES `tbl_usuarios` (`codigo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_mensaje_chat`
--
ALTER TABLE `tbl_mensaje_chat`
  ADD CONSTRAINT `usuario_chat_recibe` FOREIGN KEY (`codigo_usuario_recibe`) REFERENCES `tbl_usuarios` (`codigo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuario_envia_chat` FOREIGN KEY (`codigo_usuario_envia`) REFERENCES `tbl_usuarios` (`codigo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_papelera_archivos`
--
ALTER TABLE `tbl_papelera_archivos`
  ADD CONSTRAINT `fk_tbl_papelera_archivos_tbl_archivos1` FOREIGN KEY (`codigo_archivo`) REFERENCES `tbl_archivos` (`codigo_archivo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_papelera_carpetas`
--
ALTER TABLE `tbl_papelera_carpetas`
  ADD CONSTRAINT `fk_tbl_papelera_carpetas_tbl_carpetas1` FOREIGN KEY (`codigo_carpeta`) REFERENCES `tbl_carpetas` (`codigo_carpeta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_permisos_archivos`
--
ALTER TABLE `tbl_permisos_archivos`
  ADD CONSTRAINT `fk_table1_tbl_archivos1` FOREIGN KEY (`codigo_archivo`) REFERENCES `tbl_archivos` (`codigo_archivo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_table1_tbl_permisos1` FOREIGN KEY (`codigo_permiso`) REFERENCES `tbl_permisos` (`codigo_permiso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_table1_tbl_usuarios1` FOREIGN KEY (`codigo_usuario`) REFERENCES `tbl_usuarios` (`codigo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_permisos_carpetas`
--
ALTER TABLE `tbl_permisos_carpetas`
  ADD CONSTRAINT `fk_tbl_permisos_carpetas_tbl_carpetas1` FOREIGN KEY (`codigo_carpeta`) REFERENCES `tbl_carpetas` (`codigo_carpeta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_permisos_carpetas_tbl_permisos1` FOREIGN KEY (`codigo_permiso`) REFERENCES `tbl_permisos` (`codigo_permiso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_permisos_carpetas_tbl_usuarios1` FOREIGN KEY (`codigo_usuario`) REFERENCES `tbl_usuarios` (`codigo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_recientes`
--
ALTER TABLE `tbl_recientes`
  ADD CONSTRAINT `fk_tbl_recientes_tbl_archivos1` FOREIGN KEY (`codigo_archivo`) REFERENCES `tbl_archivos` (`codigo_archivo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_recientes_tbl_carpetas1` FOREIGN KEY (`codigo_carpeta`) REFERENCES `tbl_carpetas` (`codigo_carpeta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_recientes_tbl_usuarios1` FOREIGN KEY (`codigo_usuario`) REFERENCES `tbl_usuarios` (`codigo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_respuestas`
--
ALTER TABLE `tbl_respuestas`
  ADD CONSTRAINT `codigo_pregunta` FOREIGN KEY (`codigo_pregunta`) REFERENCES `tbl_preguntas` (`codigo_pregunta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `codigo_usuario_respuestas` FOREIGN KEY (`codigo_usuario`) REFERENCES `tbl_usuarios` (`codigo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD CONSTRAINT `codigo_lugar` FOREIGN KEY (`codigo_lugar_residencia`) REFERENCES `tbl_pais` (`codigo_pais`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_usuarios_tbl_planes1` FOREIGN KEY (`codigo_plan`) REFERENCES `tbl_planes` (`codigo_plan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_versiones`
--
ALTER TABLE `tbl_versiones`
  ADD CONSTRAINT `fk_tbl_versiones_tbl_archivos1` FOREIGN KEY (`codigo_archivo`) REFERENCES `tbl_archivos` (`codigo_archivo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_versiones_tbl_versiones1` FOREIGN KEY (`codigo_version_padre`) REFERENCES `tbl_versiones` (`codigo_version`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
