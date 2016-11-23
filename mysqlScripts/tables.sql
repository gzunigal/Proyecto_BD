-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2016 at 12:55 AM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbd_bd_2.0`
--


DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ABILITIES`
--

CREATE TABLE `ABILITIES` (
  `ID_ABILITY` int(11) NOT NULL,
  `NOMBRE_HABILIDAD` varchar(100) NOT NULL,
  `DESCRIPCION_HABILIDAD` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ABILITIES`
--

INSERT INTO `ABILITIES` (`ID_ABILITY`, `NOMBRE_HABILIDAD`, `DESCRIPCION_HABILIDAD`) VALUES
(0, 'Cavar', 'Se cava mas rapido con una super pala'),
(1, 'Picar', 'Pica mas rapido la tierra con un super pico'),
(2, 'Recoger basura', 'Se puede recoger la basura mas rapido, con una super aspiradora'),
(3, 'Hablamiento', 'Puede dar charlas con gran poder de convencimiento'),
(4, 'Barrer', 'Puede barrer con más agileza'),
(5, 'Trapear', 'Puede trapear con más rapidez');

-- --------------------------------------------------------

--
-- Stand-in structure for view `ADMINS`
--
CREATE TABLE `ADMINS` (
`id_user` int(11)
,`nombre_usuario` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `AGV_VALORATION`
--
CREATE TABLE `AGV_VALORATION` (
`id_user` int(11)
,`nombre_usuario` varchar(100)
,`promedio` decimal(14,4)
,`nro_tasks` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `AVAILABLE_USERS`
--
CREATE TABLE `AVAILABLE_USERS` (
`ID_USER` int(11)
,`NOMBRE_USUARIO` varchar(100)
,`ID_ABILITY` int(11)
,`NIVEL_ABILITY` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `COMMUNES`
--

CREATE TABLE `COMMUNES` (
  `ID_COMMUNE` int(11) NOT NULL,
  `ID_REGION` int(11) NOT NULL,
  `NOMBRE_COMUNA` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `COMMUNES`
--

INSERT INTO `COMMUNES` (`ID_COMMUNE`, `ID_REGION`, `NOMBRE_COMUNA`) VALUES
(1, 14, 'ARICA'),
(2, 0, 'IQUIQUE'),
(3, 0, 'HUARA'),
(4, 0, 'PICA'),
(5, 0, 'POZO ALMONTE'),
(6, 1, 'TOCOPILLA'),
(7, 1, 'ANTOFAGASTA'),
(8, 1, 'MEJILLONES'),
(9, 1, 'TALTAL'),
(10, 1, 'CALAMA'),
(11, 2, 'CHAÑARAL'),
(12, 2, 'DIEGO DE ALMAGRO'),
(13, 2, 'COPIAPO'),
(14, 2, 'CALDERA'),
(15, 2, 'TIERRA AMARILLA'),
(16, 2, 'VALLENAR'),
(17, 2, 'FREIRINA'),
(18, 2, 'HUASCO'),
(19, 3, 'LA SERENA'),
(20, 3, 'LA HIGUERA'),
(21, 3, 'COQUIMBO'),
(22, 3, 'ANDACOLLO'),
(23, 3, 'VICUÑA'),
(24, 3, 'PAIHUANO'),
(25, 3, 'OVALLE'),
(26, 3, 'MONTE PATRIA'),
(27, 3, 'PUNITAQUI'),
(28, 3, 'RIO HURTADO'),
(29, 3, 'COMBARBALA'),
(30, 3, 'ILLAPEL'),
(31, 3, 'CANELA'),
(32, 3, 'SALAMANCA'),
(33, 3, 'LOS VILOS'),
(34, 4, 'VALPARAISO'),
(35, 4, 'QUINTERO'),
(36, 4, 'PUCHUNCAVI'),
(37, 4, 'VIÑA DEL MAR'),
(38, 4, 'QUILPUE'),
(39, 4, 'VILLA ALEMANA'),
(40, 4, 'CASABLANCA'),
(41, 4, 'ISLA DE PASCUA'),
(42, 4, 'SAN ANTONIO'),
(43, 4, 'SANTO DOMINGO'),
(44, 4, 'ALGARROBO'),
(45, 4, 'EL QUISCO'),
(46, 4, 'CARTAGENA'),
(47, 4, 'EL TABO'),
(48, 4, 'QUILLOTA'),
(49, 4, 'LA CRUZ'),
(50, 4, 'LA CALERA'),
(51, 4, 'HIJUELAS'),
(52, 4, 'NOGALES'),
(53, 4, 'LIMACHE'),
(54, 4, 'OLMUE'),
(55, 4, 'PETORCA'),
(56, 4, 'CABILDO'),
(57, 4, 'PAPUDO'),
(58, 4, 'ZAPALLAR'),
(59, 4, 'LA LIGUA'),
(60, 4, 'SAN FELIPE'),
(61, 4, 'PUTAENDO'),
(62, 4, 'PANQUEHUE'),
(63, 4, 'CATEMU'),
(64, 4, 'SANTA MARIA'),
(65, 4, 'LLAY LLAY'),
(66, 4, 'LOS ANDES'),
(67, 4, 'CALLE LARGA'),
(68, 4, 'RINCONADA'),
(69, 4, 'SAN ESTEBAN'),
(70, 12, 'SANTIAGO CENTRO'),
(71, 12, 'LAS CONDES'),
(72, 12, 'PROVIDENCIA'),
(73, 12, 'SANTIAGO OESTE'),
(75, 12, 'CONCHALI'),
(76, 12, 'COLINA'),
(77, 12, 'RENCA'),
(78, 12, 'LAMPA'),
(79, 12, 'QUILICURA'),
(80, 12, 'TIL-TIL'),
(81, 12, 'QUINTA NORMAL'),
(82, 12, 'PUDAHUEL'),
(83, 12, 'CURACAVI'),
(84, 12, 'SANTIAGO SUR'),
(85, 12, 'PEÑAFLOR'),
(86, 12, 'TALAGANTE'),
(87, 12, 'ISLA DE MAIPO'),
(88, 12, 'MELIPILLA'),
(89, 12, 'EL MONTE'),
(90, 12, 'MARIA PINTO'),
(91, 12, 'ÑUÑOA'),
(92, 12, 'LA REINA'),
(93, 12, 'LA FLORIDA'),
(94, 12, 'MAIPU'),
(95, 12, 'SAN MIGUEL'),
(96, 12, 'LA CISTERNA'),
(97, 12, 'LA GRANJA'),
(98, 12, 'SAN BERNARDO'),
(99, 12, 'CALERA DE TANGO'),
(100, 12, 'PUENTE ALTO'),
(101, 12, 'PIRQUE'),
(102, 12, 'SAN JOSE DE MAIPO'),
(103, 12, 'BUIN'),
(104, 12, 'PAINE'),
(105, 5, 'RANCAGUA'),
(106, 5, 'MACHALI'),
(107, 5, 'GRANEROS'),
(108, 12, 'SAN PEDRO'),
(109, 12, 'ALHUE'),
(110, 5, 'CODEGUA'),
(111, 5, 'SAN FRANCISCO DE MOSTAZAL'),
(112, 5, 'DOÑIHUE'),
(113, 5, 'COLTAUCO'),
(114, 5, 'COINCO'),
(115, 5, 'PEUMO'),
(116, 5, 'LAS CABRAS'),
(117, 5, 'SAN VICENTE'),
(118, 5, 'PICHIDEGUA'),
(119, 5, 'REQUINOA'),
(120, 5, 'OLIVAR'),
(121, 5, 'RENGO'),
(122, 5, 'MALLOA'),
(123, 5, 'QUINTA DE TILCOCO'),
(124, 5, 'SAN FERNANDO'),
(125, 5, 'CHIMBARONGO'),
(126, 5, 'NANCAGUA'),
(127, 5, 'PLACILLA'),
(128, 5, 'SANTA CRUZ'),
(129, 5, 'LOLOL'),
(130, 5, 'PALMILLA'),
(131, 5, 'PERALILLO'),
(132, 5, 'CHEPICA'),
(133, 5, 'PAREDONES'),
(134, 5, 'MARCHIGUE'),
(135, 5, 'PUMANQUE'),
(136, 5, 'LITUECHE'),
(137, 5, 'PICHILEMU'),
(138, 5, 'NAVIDAD'),
(139, 5, 'LA ESTRELLA'),
(140, 6, 'CURICO'),
(141, 6, 'ROMERAL'),
(142, 6, 'TENO'),
(143, 6, 'RAUCO'),
(144, 6, 'HUALAÑE'),
(145, 6, 'LICANTEN'),
(146, 6, 'VICHUQUEN'),
(147, 6, 'MOLINA'),
(148, 6, 'SAGRADA FAMILIA'),
(149, 6, 'RIO CLARO'),
(150, 6, 'TALCA'),
(151, 6, 'SAN CLEMENTE'),
(152, 6, 'PELARCO'),
(153, 6, 'PENCAHUE'),
(154, 6, 'MAULE'),
(155, 6, 'CUREPTO'),
(156, 6, 'SAN JAVIER'),
(157, 6, 'CONSTITUCION'),
(158, 6, 'EMPEDRADO'),
(159, 6, 'LINARES'),
(160, 6, 'YERBAS BUENAS'),
(161, 6, 'COLBUN'),
(162, 6, 'LONGAVI'),
(163, 6, 'VILLA ALEGRE'),
(164, 6, 'PARRAL'),
(165, 6, 'RETIRO'),
(166, 6, 'CAUQUENES'),
(167, 6, 'CHANCO'),
(168, 7, 'CHILLAN'),
(169, 7, 'PINTO'),
(170, 7, 'COIHUECO'),
(171, 7, 'PORTEZUELO'),
(172, 7, 'QUIRIHUE'),
(173, 7, 'TREHUACO'),
(174, 7, 'NINHUE'),
(175, 7, 'COBQUECURA'),
(176, 7, 'SAN CARLOS'),
(177, 7, 'SAN GREGORIO DE ÑIQUEN'),
(178, 7, 'SAN FABIAN'),
(179, 7, 'SAN NICOLAS'),
(180, 7, 'BULNES'),
(181, 7, 'SAN IGNACIO'),
(182, 7, 'QUILLON'),
(183, 7, 'YUNGAY'),
(184, 7, 'PEMUCO'),
(185, 7, 'EL CARMEN'),
(186, 7, 'COELEMU'),
(187, 7, 'RANQUIL'),
(188, 7, 'CONCEPCION'),
(189, 7, 'TALCAHUANO'),
(190, 7, 'TOME'),
(191, 7, 'PENCO'),
(192, 7, 'HUALQUI'),
(193, 7, 'FLORIDA'),
(194, 7, 'CORONEL'),
(195, 7, 'LOTA'),
(196, 7, 'SANTA JUANA'),
(197, 7, 'CURANILAHUE'),
(198, 7, 'ARAUCO'),
(199, 7, 'LEBU'),
(200, 7, 'LOS ALAMOS'),
(201, 7, 'CAÑETE'),
(202, 7, 'CONTULMO'),
(203, 7, 'TIRUA'),
(204, 7, 'LOS ANGELES'),
(205, 7, 'SANTA BARBARA'),
(206, 7, 'QUILLECO'),
(207, 7, 'YUMBEL'),
(208, 7, 'CABRERO'),
(209, 7, 'TUCAPEL'),
(210, 7, 'LAJA'),
(211, 7, 'SAN ROSENDO'),
(212, 7, 'NACIMIENTO'),
(213, 7, 'NEGRETE'),
(214, 7, 'MULCHEN'),
(215, 7, 'QUILACO'),
(216, 8, 'ANGOL'),
(217, 8, 'PUREN'),
(218, 8, 'LOS SAUCES'),
(219, 8, 'RENAICO'),
(220, 8, 'COLLIPULLI'),
(221, 8, 'ERCILLA'),
(222, 8, 'TRAIGUEN'),
(223, 8, 'LUMACO'),
(224, 8, 'VICTORIA'),
(225, 8, 'CURACAUTIN'),
(226, 8, 'LONQUIMAY'),
(227, 8, 'TEMUCO'),
(228, 8, 'VILCUN'),
(229, 8, 'FREIRE'),
(230, 8, 'CUNCO'),
(231, 8, 'LAUTARO'),
(232, 8, 'GALVARINO'),
(233, 8, 'PERQUENCO'),
(234, 8, 'NUEVA IMPERIAL'),
(235, 8, 'CARAHUE'),
(236, 8, 'PUERTO SAAVEDRA'),
(237, 8, 'PITRUFQUEN'),
(238, 8, 'GORBEA'),
(239, 8, 'TOLTEN'),
(240, 8, 'LONCOCHE'),
(241, 8, 'VILLARRICA'),
(242, 8, 'PUCON'),
(243, 13, 'VALDIVIA'),
(244, 13, 'CORRAL'),
(245, 13, 'MARIQUINA'),
(246, 13, 'MAFIL'),
(247, 13, 'LOS LAGOS'),
(248, 13, 'FUTRONO'),
(249, 13, 'LANCO'),
(250, 13, 'PANGUIPULLI'),
(251, 13, 'LA UNION'),
(252, 13, 'PAILLACO'),
(253, 13, 'RIO BUENO'),
(254, 13, 'LAGO RANCO'),
(255, 9, 'OSORNO'),
(256, 9, 'PUYEHUE'),
(257, 9, 'SAN PABLO'),
(258, 9, 'PUERTO OCTAY'),
(259, 9, 'RIO NEGRO'),
(260, 9, 'PURRANQUE'),
(261, 9, 'PUERTO MONTT'),
(262, 9, 'COCHAMO'),
(263, 9, 'MAULLIN'),
(264, 9, 'LOS MUERMOS'),
(265, 9, 'CALBUCO'),
(266, 9, 'PUERTO VARAS'),
(267, 9, 'LLANQUIHUE'),
(268, 9, 'FRESIA'),
(269, 9, 'FRUTILLAR'),
(270, 9, 'CASTRO'),
(271, 9, 'CHONCHI'),
(272, 9, 'QUEILEN'),
(273, 9, 'QUELLON'),
(274, 9, 'PUQUELDON'),
(275, 9, 'QUINCHAO'),
(276, 9, 'CURACO DE VELEZ'),
(277, 9, 'ANCUD'),
(278, 9, 'QUEMCHI'),
(279, 9, 'DALCAHUE'),
(280, 9, 'CHAITEN'),
(281, 9, 'FUTALEUFU'),
(282, 9, 'PALENA'),
(284, 10, 'COYHAIQUE'),
(285, 10, 'AYSEN'),
(286, 10, 'CISNES'),
(287, 10, 'CHILE CHICO'),
(288, 10, 'RIO IBAÑEZ'),
(289, 10, 'COCHRANE'),
(290, 11, 'PUNTA ARENAS'),
(291, 11, 'PUERTO NATALES'),
(292, 11, 'PORVENIR'),
(293, 14, 'GENERAL LAGOS'),
(294, 14, 'PUTRE'),
(295, 14, 'CAMARONES'),
(296, 0, 'CAMINA'),
(297, 0, 'COLCHANE'),
(298, 1, 'MARIA ELENA'),
(299, 1, 'SIERRA GORDA'),
(300, 1, 'OLLAGÜE'),
(301, 1, 'SAN PEDRO DE ATACAMA'),
(302, 2, 'ALTO DEL CARMEN'),
(303, 7, 'ANTUCO'),
(304, 8, 'MELIPEUCO'),
(305, 8, 'CURARREHUE'),
(306, 8, 'TEODORO SCHMIDT'),
(307, 9, 'SAN JUAN DE LA COSTA'),
(308, 9, 'HUALAIHUE'),
(309, 10, 'GUAITECAS'),
(310, 10, 'O´HIGGINS'),
(311, 10, 'TORTEL'),
(312, 10, 'LAGO VERDE'),
(313, 11, 'TORRES DEL PAINE'),
(314, 11, 'RIO VERDE'),
(315, 11, 'SAN GREGORIO'),
(316, 11, 'LAGUNA BLANCA'),
(317, 11, 'PRIMAVERA'),
(318, 11, 'TIMAUKEL'),
(319, 11, 'NAVARINO'),
(320, 6, 'PELLUHUE'),
(321, 4, 'JUAN FERNANDEZ'),
(322, 12, 'PEÑALOLEN'),
(323, 12, 'MACUL'),
(324, 12, 'CERRO NAVIA'),
(325, 12, 'LO PRADO'),
(326, 12, 'SAN RAMON'),
(327, 12, 'LA PINTANA'),
(328, 12, 'ESTACION CENTRAL'),
(329, 12, 'RECOLETA'),
(330, 12, 'INDEPENDENCIA'),
(331, 12, 'VITACURA'),
(332, 12, 'LO BARNECHEA'),
(333, 12, 'CERRILLOS'),
(334, 12, 'HUECHURABA'),
(335, 12, 'SAN JOAQUIN'),
(336, 12, 'PEDRO AGUIRRE CERDA'),
(337, 12, 'LO ESPEJO'),
(338, 12, 'EL BOSQUE'),
(339, 12, 'PADRE HURTADO'),
(340, 4, 'CONCON'),
(341, 6, 'SAN RAFAEL'),
(342, 7, 'CHILLAN VIEJO'),
(343, 7, 'SAN PEDRO DE LA PAZ'),
(344, 7, 'CHIGUAYANTE'),
(345, 8, 'PADRE LAS CASAS');

-- --------------------------------------------------------

--
-- Table structure for table `DOCUMENTATIONS`
--

CREATE TABLE `DOCUMENTATIONS` (
  `ID_DOC` int(11) NOT NULL,
  `NOMBRE_DOC` varchar(100) NOT NULL,
  `URL_DOC` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DOCUMENTATIONS`
--

INSERT INTO `DOCUMENTATIONS` (`ID_DOC`, `NOMBRE_DOC`, `URL_DOC`) VALUES
(0, 'Documento 0', 'www.asd.com/doc0'),
(1, 'Documento 1', 'www.asd.com/doc1'),
(2, 'Documento 2', 'www.asd.com/doc2');

-- --------------------------------------------------------

--
-- Table structure for table `EMAILS`
--

CREATE TABLE `EMAILS` (
  `EMAIL` varchar(100) NOT NULL,
  `ID_USER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `EMAILS`
--

INSERT INTO `EMAILS` (`EMAIL`, `ID_USER`) VALUES
('gonzalo.estay@usach.cl', 1),
('julio.vasquez@usach.cl', 2),
('dwdew@fefre.cl', 102),
('dwdew@fefre.com', 106),
('correo@correo.cl', 108),
('correo2@correo2.cl', 109),
('correo3@correo3.cl', 110);

-- --------------------------------------------------------

--
-- Table structure for table `EMERGENCIES`
--

CREATE TABLE `EMERGENCIES` (
  `ID_EMERGENCY` int(11) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `ID_COMMUNE` int(11) DEFAULT NULL,
  `NOMBRE` varchar(20) NOT NULL,
  `FECHA_EMERGENCIA` datetime NOT NULL,
  `GRAVEDAD` int(11) NOT NULL,
  `ESTADO_EMERGENCIA` int(11) NOT NULL,
  `DESCRIPCION_EMERGENCIA` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `EMERGENCIES`
--

INSERT INTO `EMERGENCIES` (`ID_EMERGENCY`, `ID_USER`, `ID_COMMUNE`, `NOMBRE`, `FECHA_EMERGENCIA`, `GRAVEDAD`, `ESTADO_EMERGENCIA`, `DESCRIPCION_EMERGENCIA`) VALUES
(1, 110, 2, 'Terremoto en Iquique', '2020-01-23 10:18:39', 3, 1, 'Terremoto grado 7.\r\nMultiples derrumbes.\r\nEs necesario reconstruir varios edificios de la zona afectada.'),
(3, 108, 2, 'Incendio en Iquique', '2017-06-23 12:06:49', 1, 1, 'Incendio afecta tres cuadras de la comuna.\r\nEs necesario realizar una limpieza en el área y reconstruir viviendas.'),
(4, 109, 7, 'Derrumbe en Cañete', '2016-11-01 00:00:00', 3, 1, 'Derrumbe en la comuna de Cañete.\r\nAlgunas viviendas se ven afectadas, por lo que se necesita una limpieza en el área y ayuda a las familias afectadas.'),
(8, 2, 67, 'Inundación en Arica', '0001-02-01 00:00:00', 1, 2, 'Comuna de Arica afectada por inundación.\r\nUn gran número de viviendas se ha visto afectada por esta catástrofe. Se necesitan voluntarios para limpiar, reconstruir y ayudar familias.');

-- --------------------------------------------------------

--
-- Stand-in structure for view `ENCARGADOS_MISSION`
--
CREATE TABLE `ENCARGADOS_MISSION` (
`id_emergency` int(11)
,`nombre` varchar(20)
,`id_user` int(11)
,`nombre_usuario` varchar(100)
,`id_mission` int(11)
,`nombre_mision` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `ENCARGADO_EMERGENCIA`
--
CREATE TABLE `ENCARGADO_EMERGENCIA` (
`id_user` int(11)
,`nombre_usuario` varchar(100)
,`id_emergency` int(11)
,`nombre` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `GENERA`
--

CREATE TABLE `GENERA` (
  `ID_DOC` int(11) NOT NULL,
  `ID_TASK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `MESSAGES`
--

CREATE TABLE `MESSAGES` (
  `ID_MESSAGE` int(11) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `CONTENIDO` text NOT NULL,
  `FECHA` datetime NOT NULL,
  `ASUNTO` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `MISSIONS`
--

CREATE TABLE `MISSIONS` (
  `ID_MISSION` int(11) NOT NULL,
  `ID_EMERGENCY` int(11) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `NOMBRE_MISION` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MISSIONS`
--

INSERT INTO `MISSIONS` (`ID_MISSION`, `ID_EMERGENCY`, `ID_USER`, `NOMBRE_MISION`) VALUES
(2, 1, 3, 'Limpieza del área'),
(3, 1, 1, 'Ayuda a damnificados'),
(4, 3, 102, 'Limpieza del área'),
(5, 8, 106, 'Construcción de viviendas');

-- --------------------------------------------------------

--
-- Table structure for table `NOTIFICATIONS`
--

CREATE TABLE `NOTIFICATIONS` (
  `ID_NOTIFICATION` int(11) NOT NULL,
  `URL` text,
  `CONTENIDO` text NOT NULL,
  `FECHA` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `NOTIFICATIONS`
--

INSERT INTO `NOTIFICATIONS` (`ID_NOTIFICATION`, `URL`, `CONTENIDO`, `FECHA`) VALUES
(0, 'https://www.jaidefinichon.com/', 'Buenos videos :D', '0001-01-01 00:00:00'),
(1, 'https://www.google.cl/', 'Toda la wea que te imagines', '1701-10-27 05:40:26'),
(2, 'https://www.youtube.com/', 'Videos de todo tipo, especialmente muchos de gatitos', '0973-06-14 03:43:12'),
(8, '', 'Se necesita un encargado de mision', '2016-11-03 18:34:17'),
(9, '', 'Se necesita un encargado de mision', '2016-11-03 19:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `PHONE_NUMBERS`
--

CREATE TABLE `PHONE_NUMBERS` (
  `PHONE` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PHONE_NUMBERS`
--

INSERT INTO `PHONE_NUMBERS` (`PHONE`, `ID_USER`) VALUES
(0, 2),
(11111111, 102),
(88888888, 106),
(12345678, 108),
(45612378, 109),
(45213375, 110);

-- --------------------------------------------------------

--
-- Table structure for table `REALIZA`
--

CREATE TABLE `REALIZA` (
  `ID_EVALUATION` int(11) NOT NULL,
  `ID_TASK` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `VALORACION` int(11) NOT NULL,
  `COMENTARIO_EVAL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `RECIBE`
--

CREATE TABLE `RECIBE` (
  `ID_MESSAGE` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `RECIBE_NOTIFICACION`
--

CREATE TABLE `RECIBE_NOTIFICACION` (
  `ID_USER` int(11) NOT NULL,
  `ID_NOTIFICATION` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `RECIBE_NOTIFICACION`
--

INSERT INTO `RECIBE_NOTIFICACION` (`ID_USER`, `ID_NOTIFICATION`) VALUES
(2, 0),
(2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `REGIONS`
--

CREATE TABLE `REGIONS` (
  `ID_REGION` int(11) NOT NULL,
  `NOMBRE_REGION` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `REGIONS`
--

INSERT INTO `REGIONS` (`ID_REGION`, `NOMBRE_REGION`) VALUES
(0, 'Arica y parinacota'),
(1, 'Tarapacá'),
(2, 'Antofagasta'),
(3, 'Atacama'),
(4, 'Coquimbo'),
(5, 'Valparaiso'),
(6, 'Metropolitana de Santiago'),
(7, 'Libertador General Bernardo O\'Higgins'),
(8, 'Maule'),
(9, 'Biobio'),
(10, 'La araucania'),
(11, 'Los Ríos'),
(12, 'Los Lagos'),
(13, 'Aisén del General Carlos Ibáñez del Campo'),
(14, 'Magallanes y de la antárttica Chilena');

-- --------------------------------------------------------

--
-- Stand-in structure for view `REGION_COMMUNE_EMERGENCY_HISTORY`
--
CREATE TABLE `REGION_COMMUNE_EMERGENCY_HISTORY` (
`ID_REGION` int(11)
,`NOMBRE_REGION` varchar(100)
,`ID_COMMUNE` int(11)
,`NOMBRE_COMUNA` varchar(100)
,`nombre` varchar(20)
,`estado_emergencia` int(11)
,`fecha_emergencia` datetime
);

-- --------------------------------------------------------

--
-- Table structure for table `REQUESTS`
--

CREATE TABLE `REQUESTS` (
  `ID_APPLICATION` int(11) NOT NULL,
  `ID_TASK` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `NOMBRE_SOLICITUD` varchar(100) DEFAULT NULL,
  `ESTADO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `REQUESTS`
--
DELIMITER $$
CREATE TRIGGER `notificacion_request` AFTER INSERT ON `REQUESTS` FOR EACH ROW BEGIN 

SET @id_user_2 = (SELECT NEW.id_user);
SET @cont_notif = (SELECT NEW.nombre_solicitud);

INSERT INTO NOTIFICATIONS(URL, CONTENIDO, FECHA)
SELECT '', @cont_notif, NOW();

SET @id_notificacion_2 = 
( SELECT ID_NOTIFICATION 
FROM NOTIFICATIONS
ORDER BY ID_NOTIFICATION DESC 
LIMIT 1);

INSERT INTO RECIBE_NOTIFICACION(ID_USER, ID_NOTIFICATION)
SELECT @id_user_2, @id_notificacion_2;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `REQUIERE`
--

CREATE TABLE `REQUIERE` (
  `ID_ABILITY` int(11) NOT NULL,
  `ID_TASK` int(11) NOT NULL,
  `nivel_ability` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TASKS`
--

CREATE TABLE `TASKS` (
  `ID_TASK` int(11) NOT NULL,
  `ID_MISSION` int(11) NOT NULL,
  `NOMBRE_TAREA` varchar(100) DEFAULT NULL,
  `DESCRIPCION_TAREA` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TASKS`
--

INSERT INTO `TASKS` (`ID_TASK`, `ID_MISSION`, `NOMBRE_TAREA`, `DESCRIPCION_TAREA`) VALUES
(1, 2, 'Remover escombros', 'Se deben remover todos los escombros del área que representen un riesgo para la población del área o que obstruyan la reconstrucción de la zona afectada.'),
(2, 3, 'Repartir alimentos', 'Se debe entregar una caja de alimentos por familia la que ha sido preparada previamente.'),
(3, 4, 'Remover escombros', 'Se deben remover todos los escombros del área que representen un riesgo para la población del área o que obstruyan la reconstrucción de la zona afectada.'),
(4, 5, 'Estabilizar el terreno', 'Se debe nivelar el suelo de manera que posteriormente se pueda construir el radier de la casa.');

-- --------------------------------------------------------

--
-- Stand-in structure for view `TASK_DOC_VIEW`
--
CREATE TABLE `TASK_DOC_VIEW` (
`ID_TASK` int(11)
,`id_doc` int(11)
,`nombre_doc` varchar(100)
,`url_doc` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `TASK_PROBLEMS`
--

CREATE TABLE `TASK_PROBLEMS` (
  `ID_PROBLEM` int(11) NOT NULL,
  `ID_TASK` int(11) NOT NULL,
  `PROBLEM_DESCRIPTION` text,
  `PROBLEM_GRAVITY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TIENE`
--

CREATE TABLE `TIENE` (
  `ID_USER` int(11) NOT NULL,
  `ID_ABILITY` int(11) NOT NULL,
  `NIVEL_ABILITY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TIENE`
--

INSERT INTO `TIENE` (`ID_USER`, `ID_ABILITY`, `NIVEL_ABILITY`) VALUES
(1, 3, 2),
(2, 1, 0),
(3, 3, 3),
(3, 5, 5),
(102, 1, 5),
(106, 2, 4),
(108, 3, 4),
(109, 4, 1),
(110, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `USERS`
--

CREATE TABLE `USERS` (
  `ID_USER` int(11) NOT NULL,
  `ID_COMMUNE` int(11) NOT NULL,
  `NOMBRE_USUARIO` varchar(100) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `DISPONIBILIDAD` tinyint(1) NOT NULL,
  `ADMIN` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `USERS`
--

INSERT INTO `USERS` (`ID_USER`, `ID_COMMUNE`, `NOMBRE_USUARIO`, `PASSWORD`, `DISPONIBILIDAD`, `ADMIN`) VALUES
(1, 2, 'Ichigo', 'ichigo', 2, 0),
(2, 1, 'Richard', 'richard', 0, 1),
(3, 7, 'shrek', 'getouttamyswamp', 1, 0),
(102, 10, 'Elber Gon Freecs', 'prntscr', 1, 0),
(106, 11, 'Elber Gon', 'lalalele', 1, 1),
(108, 328, 'Arturo Prat', 'pass123', 1, 1),
(109, 201, 'Michael Jackson', '123asd', 1, 1),
(110, 13, 'Steve Jobs', 'passtest', 1, 1);

--
-- Triggers `USERS`
--
DELIMITER $$
CREATE TRIGGER `notificacion_delete_user` BEFORE DELETE ON `USERS` FOR EACH ROW BEGIN

IF OLD.ADMIN=1 THEN

SET @bool = 
(SELECT COUNT(*)
FROM ENCARGADO_EMERGENCIA
WHERE ENCARGADO_EMERGENCIA.id_user=OLD.id_user);

IF @bool>0 THEN

INSERT INTO NOTIFICATIONS(URL, CONTENIDO, FECHA) 
SELECT '', 'Se necesita un administrador de emergencia', NOW();

SET @id_notificacion_2 = 
( SELECT ID_NOTIFICATION 
FROM NOTIFICATIONS
ORDER BY ID_NOTIFICATION DESC 
LIMIT 1);

INSERT INTO RECIBE_NOTIFICACION(ID_USER, ID_NOTIFICATION) SELECT ID_USER, @id_notificacion_2 FROM ADMINS;

END IF;

ELSE 

SET @bool = 
(SELECT COUNT(*)
FROM ENCARGADOS_MISSION
WHERE ENCARGADOS_MISSION.id_user=OLD.id_user);

IF @bool>0 THEN

INSERT INTO NOTIFICATIONS(URL, CONTENIDO, FECHA) 
SELECT '', 'Se necesita un encargado de mision', NOW();

SET @id_notificacion_2 = 
( SELECT ID_NOTIFICATION 
FROM NOTIFICATIONS
ORDER BY ID_NOTIFICATION DESC 
LIMIT 1);

INSERT INTO RECIBE_NOTIFICACION(ID_USER, ID_NOTIFICATION) SELECT DISTINCT(ID_USER), @id_notificacion_2 FROM ENCARGADOS_MISSION;

END IF;

END IF;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `USER_MISSION_HISTORY`
--
CREATE TABLE `USER_MISSION_HISTORY` (
`ID_USER` int(11)
,`nombre_usuario` varchar(100)
,`nombre_mision` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `ADMINS`
--
DROP TABLE IF EXISTS `ADMINS`;

CREATE ALGORITHM=UNDEFINED DEFINER=`gerardo`@`%` SQL SECURITY DEFINER VIEW `ADMINS`  AS  select `USERS`.`ID_USER` AS `id_user`,`USERS`.`NOMBRE_USUARIO` AS `nombre_usuario` from `USERS` where (`USERS`.`ADMIN` = 1) ;

-- --------------------------------------------------------

--
-- Structure for view `AGV_VALORATION`
--
DROP TABLE IF EXISTS `AGV_VALORATION`;

CREATE ALGORITHM=UNDEFINED DEFINER=`gerardo`@`%` SQL SECURITY DEFINER VIEW `AGV_VALORATION`  AS  select `USERS`.`ID_USER` AS `id_user`,`USERS`.`NOMBRE_USUARIO` AS `nombre_usuario`,`PROM_TABLE`.`PROMEDIO` AS `promedio`,`PROM_TABLE`.`NRO_TASKs` AS `nro_tasks` from (`USERS` join (select `REALIZA`.`ID_USER` AS `id_user`,avg(`REALIZA`.`VALORACION`) AS `PROMEDIO`,count(0) AS `NRO_TASKs` from `REALIZA` group by `REALIZA`.`ID_USER`) `PROM_TABLE` on((`USERS`.`ID_USER` = `PROM_TABLE`.`id_user`))) order by `PROM_TABLE`.`PROMEDIO` desc ;

-- --------------------------------------------------------

--
-- Structure for view `AVAILABLE_USERS`
--
DROP TABLE IF EXISTS `AVAILABLE_USERS`;

CREATE ALGORITHM=UNDEFINED DEFINER=`gonzalo`@`%` SQL SECURITY DEFINER VIEW `AVAILABLE_USERS`  AS  select `USERS`.`ID_USER` AS `ID_USER`,`USERS`.`NOMBRE_USUARIO` AS `NOMBRE_USUARIO`,`TIENE`.`ID_ABILITY` AS `ID_ABILITY`,`TIENE`.`NIVEL_ABILITY` AS `NIVEL_ABILITY` from (`USERS` join `TIENE`) where ((`USERS`.`DISPONIBILIDAD` = 1) and (`TIENE`.`ID_USER` = `USERS`.`ID_USER`)) ;

-- --------------------------------------------------------

--
-- Structure for view `ENCARGADOS_MISSION`
--
DROP TABLE IF EXISTS `ENCARGADOS_MISSION`;

CREATE ALGORITHM=UNDEFINED DEFINER=`gerardo`@`%` SQL SECURITY DEFINER VIEW `ENCARGADOS_MISSION`  AS  select `MISSIONS`.`ID_EMERGENCY` AS `id_emergency`,`EMERGENCIES`.`NOMBRE` AS `nombre`,`MISSIONS`.`ID_USER` AS `id_user`,`USERS`.`NOMBRE_USUARIO` AS `nombre_usuario`,`MISSIONS`.`ID_MISSION` AS `id_mission`,`MISSIONS`.`NOMBRE_MISION` AS `nombre_mision` from ((`USERS` join `MISSIONS` on((`USERS`.`ID_USER` = `MISSIONS`.`ID_USER`))) join `EMERGENCIES` on((`MISSIONS`.`ID_EMERGENCY` = `EMERGENCIES`.`ID_EMERGENCY`))) order by `MISSIONS`.`ID_EMERGENCY`,`MISSIONS`.`ID_USER`,`MISSIONS`.`ID_MISSION` ;

-- --------------------------------------------------------

--
-- Structure for view `ENCARGADO_EMERGENCIA`
--
DROP TABLE IF EXISTS `ENCARGADO_EMERGENCIA`;

CREATE ALGORITHM=UNDEFINED DEFINER=`gerardo`@`%` SQL SECURITY DEFINER VIEW `ENCARGADO_EMERGENCIA`  AS  select `USERS`.`ID_USER` AS `id_user`,`USERS`.`NOMBRE_USUARIO` AS `nombre_usuario`,`EMERGENCIES`.`ID_EMERGENCY` AS `id_emergency`,`EMERGENCIES`.`NOMBRE` AS `nombre` from (`USERS` join `EMERGENCIES` on((`USERS`.`ID_USER` = `EMERGENCIES`.`ID_USER`))) order by `USERS`.`ID_USER` ;

-- --------------------------------------------------------

--
-- Structure for view `REGION_COMMUNE_EMERGENCY_HISTORY`
--
DROP TABLE IF EXISTS `REGION_COMMUNE_EMERGENCY_HISTORY`;

CREATE ALGORITHM=UNDEFINED DEFINER=`gerardo`@`%` SQL SECURITY DEFINER VIEW `REGION_COMMUNE_EMERGENCY_HISTORY`  AS  select `REGIONS`.`ID_REGION` AS `ID_REGION`,`REGIONS`.`NOMBRE_REGION` AS `NOMBRE_REGION`,`COMMUNES`.`ID_COMMUNE` AS `ID_COMMUNE`,`COMMUNES`.`NOMBRE_COMUNA` AS `NOMBRE_COMUNA`,`EMERGENCIES`.`NOMBRE` AS `nombre`,`EMERGENCIES`.`ESTADO_EMERGENCIA` AS `estado_emergencia`,`EMERGENCIES`.`FECHA_EMERGENCIA` AS `fecha_emergencia` from ((`REGIONS` join `COMMUNES` on((`REGIONS`.`ID_REGION` = `COMMUNES`.`ID_REGION`))) join `EMERGENCIES` on((`COMMUNES`.`ID_COMMUNE` = `EMERGENCIES`.`ID_COMMUNE`))) order by `REGIONS`.`ID_REGION`,`COMMUNES`.`ID_COMMUNE`,`EMERGENCIES`.`FECHA_EMERGENCIA` desc ;

-- --------------------------------------------------------

--
-- Structure for view `TASK_DOC_VIEW`
--
DROP TABLE IF EXISTS `TASK_DOC_VIEW`;

CREATE ALGORITHM=UNDEFINED DEFINER=`gerardo`@`%` SQL SECURITY DEFINER VIEW `TASK_DOC_VIEW`  AS  select `GENERA`.`ID_TASK` AS `ID_TASK`,`DOCUMENTATIONS`.`ID_DOC` AS `id_doc`,`DOCUMENTATIONS`.`NOMBRE_DOC` AS `nombre_doc`,`DOCUMENTATIONS`.`URL_DOC` AS `url_doc` from (`DOCUMENTATIONS` join `GENERA` on((`DOCUMENTATIONS`.`ID_DOC` = `GENERA`.`ID_DOC`))) order by `GENERA`.`ID_TASK`,`DOCUMENTATIONS`.`NOMBRE_DOC` ;

-- --------------------------------------------------------

--
-- Structure for view `USER_MISSION_HISTORY`
--
DROP TABLE IF EXISTS `USER_MISSION_HISTORY`;

CREATE ALGORITHM=UNDEFINED DEFINER=`gerardo`@`%` SQL SECURITY DEFINER VIEW `USER_MISSION_HISTORY`  AS  select `USERS`.`ID_USER` AS `ID_USER`,`USERS`.`NOMBRE_USUARIO` AS `nombre_usuario`,`MISSIONS`.`NOMBRE_MISION` AS `nombre_mision` from (((`REALIZA` join `USERS` on((`REALIZA`.`ID_USER` = `USERS`.`ID_USER`))) join `TASKS` on((`REALIZA`.`ID_TASK` = `TASKS`.`ID_TASK`))) join `MISSIONS` on((`TASKS`.`ID_MISSION` = `MISSIONS`.`ID_MISSION`))) order by `USERS`.`ID_USER`,`TASKS`.`ID_TASK` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ABILITIES`
--
ALTER TABLE `ABILITIES`
  ADD PRIMARY KEY (`ID_ABILITY`);

--
-- Indexes for table `COMMUNES`
--
ALTER TABLE `COMMUNES`
  ADD PRIMARY KEY (`ID_COMMUNE`),
  ADD KEY `FK_RELATIONSHIP_12` (`ID_REGION`);

--
-- Indexes for table `DOCUMENTATIONS`
--
ALTER TABLE `DOCUMENTATIONS`
  ADD PRIMARY KEY (`ID_DOC`);

--
-- Indexes for table `EMAILS`
--
ALTER TABLE `EMAILS`
  ADD PRIMARY KEY (`EMAIL`),
  ADD KEY `FK_POSEE2` (`ID_USER`);

--
-- Indexes for table `EMERGENCIES`
--
ALTER TABLE `EMERGENCIES`
  ADD PRIMARY KEY (`ID_EMERGENCY`),
  ADD KEY `FK_UBICADO` (`ID_COMMUNE`),
  ADD KEY `FK_SE_ENCARGA__ENCARGADO_DE_EMERGENCIA_` (`ID_USER`);

--
-- Indexes for table `GENERA`
--
ALTER TABLE `GENERA`
  ADD PRIMARY KEY (`ID_DOC`,`ID_TASK`),
  ADD KEY `FK_GENERA2` (`ID_TASK`);

--
-- Indexes for table `MESSAGES`
--
ALTER TABLE `MESSAGES`
  ADD PRIMARY KEY (`ID_MESSAGE`),
  ADD KEY `FK_RELATIONSHIP_19` (`ID_USER`);

--
-- Indexes for table `MISSIONS`
--
ALTER TABLE `MISSIONS`
  ADD PRIMARY KEY (`ID_MISSION`),
  ADD KEY `FK_RELATIONSHIP_1` (`ID_EMERGENCY`),
  ADD KEY `FK_TRABAJAN` (`ID_USER`);

--
-- Indexes for table `NOTIFICATIONS`
--
ALTER TABLE `NOTIFICATIONS`
  ADD PRIMARY KEY (`ID_NOTIFICATION`);

--
-- Indexes for table `PHONE_NUMBERS`
--
ALTER TABLE `PHONE_NUMBERS`
  ADD PRIMARY KEY (`PHONE`),
  ADD KEY `FK_POSEE` (`ID_USER`);

--
-- Indexes for table `REALIZA`
--
ALTER TABLE `REALIZA`
  ADD PRIMARY KEY (`ID_EVALUATION`),
  ADD KEY `FK_RELATIONSHIP_22` (`ID_TASK`),
  ADD KEY `FK_RELATIONSHIP_23` (`ID_USER`);

--
-- Indexes for table `RECIBE`
--
ALTER TABLE `RECIBE`
  ADD PRIMARY KEY (`ID_MESSAGE`,`ID_USER`),
  ADD KEY `FK_RELATIONSHIP_21` (`ID_USER`);

--
-- Indexes for table `RECIBE_NOTIFICACION`
--
ALTER TABLE `RECIBE_NOTIFICACION`
  ADD PRIMARY KEY (`ID_USER`,`ID_NOTIFICATION`),
  ADD KEY `FK_RECIBE_NOTIFICACION2` (`ID_NOTIFICATION`);

--
-- Indexes for table `REGIONS`
--
ALTER TABLE `REGIONS`
  ADD PRIMARY KEY (`ID_REGION`);

--
-- Indexes for table `REQUESTS`
--
ALTER TABLE `REQUESTS`
  ADD PRIMARY KEY (`ID_APPLICATION`),
  ADD KEY `FK_RECIBE` (`ID_USER`),
  ADD KEY `FK_RELATIONSHIP_8` (`ID_TASK`);

--
-- Indexes for table `REQUIERE`
--
ALTER TABLE `REQUIERE`
  ADD PRIMARY KEY (`ID_ABILITY`,`ID_TASK`),
  ADD KEY `FK_RELATIONSHIP_5` (`ID_TASK`);

--
-- Indexes for table `TASKS`
--
ALTER TABLE `TASKS`
  ADD PRIMARY KEY (`ID_TASK`),
  ADD KEY `FK_TIENE` (`ID_MISSION`);

--
-- Indexes for table `TASK_PROBLEMS`
--
ALTER TABLE `TASK_PROBLEMS`
  ADD PRIMARY KEY (`ID_PROBLEM`),
  ADD KEY `FK_SURGE` (`ID_TASK`);

--
-- Indexes for table `TIENE`
--
ALTER TABLE `TIENE`
  ADD PRIMARY KEY (`ID_USER`,`ID_ABILITY`),
  ADD KEY `FK_RELATIONSHIP_6` (`ID_ABILITY`);

--
-- Indexes for table `USERS`
--
ALTER TABLE `USERS`
  ADD PRIMARY KEY (`ID_USER`),
  ADD KEY `FK_RELATIONSHIP_7` (`ID_COMMUNE`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ABILITIES`
--
ALTER TABLE `ABILITIES`
  MODIFY `ID_ABILITY` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `COMMUNES`
--
ALTER TABLE `COMMUNES`
  MODIFY `ID_COMMUNE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=350;
--
-- AUTO_INCREMENT for table `DOCUMENTATIONS`
--
ALTER TABLE `DOCUMENTATIONS`
  MODIFY `ID_DOC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `EMERGENCIES`
--
ALTER TABLE `EMERGENCIES`
  MODIFY `ID_EMERGENCY` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `MESSAGES`
--
ALTER TABLE `MESSAGES`
  MODIFY `ID_MESSAGE` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `MISSIONS`
--
ALTER TABLE `MISSIONS`
  MODIFY `ID_MISSION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `NOTIFICATIONS`
--
ALTER TABLE `NOTIFICATIONS`
  MODIFY `ID_NOTIFICATION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `REALIZA`
--
ALTER TABLE `REALIZA`
  MODIFY `ID_EVALUATION` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `REGIONS`
--
ALTER TABLE `REGIONS`
  MODIFY `ID_REGION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `REQUESTS`
--
ALTER TABLE `REQUESTS`
  MODIFY `ID_APPLICATION` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `TASKS`
--
ALTER TABLE `TASKS`
  MODIFY `ID_TASK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `TASK_PROBLEMS`
--
ALTER TABLE `TASK_PROBLEMS`
  MODIFY `ID_PROBLEM` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `USERS`
--
ALTER TABLE `USERS`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `COMMUNES`
--
ALTER TABLE `COMMUNES`
  ADD CONSTRAINT `FK_RELATIONSHIP_12` FOREIGN KEY (`ID_REGION`) REFERENCES `REGIONS` (`ID_REGION`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `EMAILS`
--
ALTER TABLE `EMAILS`
  ADD CONSTRAINT `FK_POSEE2` FOREIGN KEY (`ID_USER`) REFERENCES `USERS` (`ID_USER`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `EMERGENCIES`
--
ALTER TABLE `EMERGENCIES`
  ADD CONSTRAINT `FK_SE_ENCARGA__ENCARGADO_DE_EMERGENCIA_` FOREIGN KEY (`ID_USER`) REFERENCES `USERS` (`ID_USER`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_UBICADO` FOREIGN KEY (`ID_COMMUNE`) REFERENCES `COMMUNES` (`ID_COMMUNE`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `GENERA`
--
ALTER TABLE `GENERA`
  ADD CONSTRAINT `FK_GENERA` FOREIGN KEY (`ID_DOC`) REFERENCES `DOCUMENTATIONS` (`ID_DOC`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_GENERA2` FOREIGN KEY (`ID_TASK`) REFERENCES `TASKS` (`ID_TASK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `MISSIONS`
--
ALTER TABLE `MISSIONS`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`ID_EMERGENCY`) REFERENCES `EMERGENCIES` (`ID_EMERGENCY`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TRABAJAN` FOREIGN KEY (`ID_USER`) REFERENCES `USERS` (`ID_USER`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `PHONE_NUMBERS`
--
ALTER TABLE `PHONE_NUMBERS`
  ADD CONSTRAINT `FK_POSEE` FOREIGN KEY (`ID_USER`) REFERENCES `USERS` (`ID_USER`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `REALIZA`
--
ALTER TABLE `REALIZA`
  ADD CONSTRAINT `FK_RELATIONSHIP_22` FOREIGN KEY (`ID_TASK`) REFERENCES `TASKS` (`ID_TASK`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_RELATIONSHIP_23` FOREIGN KEY (`ID_USER`) REFERENCES `USERS` (`ID_USER`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `RECIBE`
--
ALTER TABLE `RECIBE`
  ADD CONSTRAINT `FK_RELATIONSHIP_20` FOREIGN KEY (`ID_MESSAGE`) REFERENCES `MESSAGES` (`ID_MESSAGE`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_RELATIONSHIP_21` FOREIGN KEY (`ID_USER`) REFERENCES `USERS` (`ID_USER`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `RECIBE_NOTIFICACION`
--
ALTER TABLE `RECIBE_NOTIFICACION`
  ADD CONSTRAINT `FK_RECIBE_NOTIFICACION` FOREIGN KEY (`ID_USER`) REFERENCES `USERS` (`ID_USER`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_RECIBE_NOTIFICACION2` FOREIGN KEY (`ID_NOTIFICATION`) REFERENCES `NOTIFICATIONS` (`ID_NOTIFICATION`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `REQUESTS`
--
ALTER TABLE `REQUESTS`
  ADD CONSTRAINT `FK_RECIBE` FOREIGN KEY (`ID_USER`) REFERENCES `USERS` (`ID_USER`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_RELATIONSHIP_8` FOREIGN KEY (`ID_TASK`) REFERENCES `TASKS` (`ID_TASK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `REQUIERE`
--
ALTER TABLE `REQUIERE`
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`ID_ABILITY`) REFERENCES `ABILITIES` (`ID_ABILITY`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`ID_TASK`) REFERENCES `TASKS` (`ID_TASK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `TASKS`
--
ALTER TABLE `TASKS`
  ADD CONSTRAINT `FK_TIENE` FOREIGN KEY (`ID_MISSION`) REFERENCES `MISSIONS` (`ID_MISSION`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `TASK_PROBLEMS`
--
ALTER TABLE `TASK_PROBLEMS`
  ADD CONSTRAINT `FK_SURGE` FOREIGN KEY (`ID_TASK`) REFERENCES `TASKS` (`ID_TASK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `TIENE`
--
ALTER TABLE `TIENE`
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`ID_USER`) REFERENCES `USERS` (`ID_USER`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`ID_ABILITY`) REFERENCES `ABILITIES` (`ID_ABILITY`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `USERS`
--
ALTER TABLE `USERS`
  ADD CONSTRAINT `FK_RELATIONSHIP_7` FOREIGN KEY (`ID_COMMUNE`) REFERENCES `COMMUNES` (`ID_COMMUNE`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
