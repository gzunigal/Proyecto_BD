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
-- Table structure for table `abilities`
--

CREATE TABLE `abilities` (
  `ability_id` int(11) NOT NULL,
  `nombre_habilidad` varchar(100) NOT NULL,
  `descripcion_actividad` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `abilities`
--

INSERT INTO `abilities` (`ability_id`, `nombre_habilidad`, `descripcion_actividad`) VALUES
(0, 'Cavar', 'Se cava mas rapido con una super pala'),
(1, 'Picar', 'Pica mas rapido la tierra con un super pico'),
(2, 'Recoger basura', 'Se puede recoger la basura mas rapido, con una super aspiradora'),
(3, 'Hablamiento', 'Puede dar charlas con gran poder de convencimiento'),
(4, 'Barrer', 'Puede barrer con más agileza'),
(5, 'Trapear', 'Puede trapear con más rapidez');


-- --------------------------------------------------------

--
-- Table structure for table `communes`
--

CREATE TABLE `communes` (
  `commune_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `nombre_comuna` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `communes`
--

INSERT INTO `communes` (`commune_id`, `region_id`, `nombre_comuna`) VALUES
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
-- Table structure for table `docs`
--

CREATE TABLE `docs` (
  `doc_id` int(11) NOT NULL,
  `nombre_doc` varchar(100) NOT NULL,
  `url_doc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `docs`
--

INSERT INTO `docs` (`doc_id`, `nombre_doc`, `url_doc`) VALUES
(0, 'Documento 0', 'www.asd.com/doc0'),
(1, 'Documento 1', 'www.asd.com/doc1'),
(2, 'Documento 2', 'www.asd.com/doc2');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `email` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`email`, `user_id`) VALUES
('gonzalo.estay@usach.cl', 1),
('julio.vasquez@usach.cl', 2),
('dwdew@fefre.cl', 102),
('dwdew@fefre.com', 106),
('correo@correo.cl', 108),
('correo2@correo2.cl', 109),
('correo3@correo3.cl', 110);

-- --------------------------------------------------------

--
-- Table structure for table `emergencies`
--

CREATE TABLE `emergencies` (
  `emergency_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `commune_id` int(11) DEFAULT NULL,
  `nombre_emergencia` varchar(20) NOT NULL,
  `fecha_emergencia` datetime NOT NULL,
  `gravedad_emergencia` int(11) NOT NULL,
  `estado_emergencia` int(11) NOT NULL,
  `descripcion_emergencia` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emergencies`
--

INSERT INTO `emergencies` (`emergency_id`, `user_id`, `commune_id`, `nombre_emergencia`, `fecha_emergencia`, `gravedad_emergencia`, `estado_emergencia`, `descripcion_emergencia`) VALUES
(1, 110, 2, 'Terremoto en Iquique', '2020-01-23 10:18:39', 3, 1, 'Terremoto grado 7.\r\nMultiples derrumbes.\r\nEs necesario reconstruir varios edificios de la zona afectada.'),
(3, 108, 2, 'Incendio en Iquique', '2017-06-23 12:06:49', 1, 1, 'Incendio afecta tres cuadras de la comuna.\r\nEs necesario realizar una limpieza en el área y reconstruir viviendas.'),
(4, 109, 7, 'Derrumbe en Cañete', '2016-11-01 00:00:00', 3, 1, 'Derrumbe en la comuna de Cañete.\r\nAlgunas viviendas se ven afectadas, por lo que se necesita una limpieza en el área y ayuda a las familias afectadas.'),
(8, 2, 67, 'Inundación en Arica', '0001-02-01 00:00:00', 1, 2, 'Comuna de Arica afectada por inundación.\r\nUn gran número de viviendas se ha visto afectada por esta catástrofe. Se necesitan voluntarios para limpiar, reconstruir y ayudar familias.');

-- --------------------------------------------------------

--
-- Table structure for table `docs_tasks`
--

CREATE TABLE `docs_tasks` (
  `doc_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `contenido` text NOT NULL,
  `fecha` datetime NOT NULL,
  `asunto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `missions`
--

CREATE TABLE `missions` (
  `mission_id` int(11) NOT NULL,
  `emergency_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nombre_mision` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `missions`
--

INSERT INTO `missions` (`mission_id`, `emergency_id`, `user_id`, `nombre_mision`) VALUES
(2, 1, 3, 'Limpieza del área'),
(3, 1, 1, 'Ayuda a damnificados'),
(4, 3, 102, 'Limpieza del área'),
(5, 8, 106, 'Construcción de viviendas');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notification_id` int(11) NOT NULL,
  `url` text,
  `contenido` text NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notification_id`, `url`, `contenido`, `fecha`) VALUES
(0, 'https://www.jaidefinichon.com/', 'Buenos videos :D', '0001-01-01 00:00:00'),
(1, 'https://www.google.cl/', 'Toda la wea que te imagines', '1701-10-27 05:40:26'),
(2, 'https://www.youtube.com/', 'Videos de todo tipo, especialmente muchos de gatitos', '0973-06-14 03:43:12'),
(8, '', 'Se necesita un encargado de mision', '2016-11-03 18:34:17'),
(9, '', 'Se necesita un encargado de mision', '2016-11-03 19:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `phone_numbers`
--

CREATE TABLE `phone_numbers` (
  `phone` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phone_numbers`
--

INSERT INTO `phone_numbers` (`phone`, `user_id`) VALUES
(0, 2),
(11111111, 102),
(88888888, 106),
(12345678, 108),
(45612378, 109),
(45213375, 110);

-- --------------------------------------------------------

--
-- Table structure for table `tasks_users`
--

CREATE TABLE `tasks_users` (
  `task_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `valoracion` int(11) NOT NULL,
  `comentario_eval` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `messages_users`
--

CREATE TABLE `messages_users` (
  `message_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notifications_users`
--

CREATE TABLE `notifications_users` (
  `user_id` int(11) NOT NULL,
  `notification_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notifications_users`
--

INSERT INTO `notifications_users` (`user_id`, `notification_id`) VALUES
(2, 0),
(2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `region_id` int(11) NOT NULL,
  `nombre_region` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`region_id`, `nombre_region`) VALUES
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
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `request_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nombre_solicitud` varchar(100) DEFAULT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



--
-- Table structure for table `abilities_tasks`
--

CREATE TABLE `abilities_tasks` (
  `ability_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `nivel_requerido` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int(11) NOT NULL,
  `mission_id` int(11) NOT NULL,
  `nombre_tarea` varchar(100) DEFAULT NULL,
  `descripcion_tarea` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`task_id`, `mission_id`, `nombre_tarea`, `descripcion_tarea`) VALUES
(1, 2, 'Remover escombros', 'Se deben remover todos los escombros del área que representen un riesgo para la población del área o que obstruyan la reconstrucción de la zona afectada.'),
(2, 3, 'Repartir alimentos', 'Se debe entregar una caja de alimentos por familia la que ha sido preparada previamente.'),
(3, 4, 'Remover escombros', 'Se deben remover todos los escombros del área que representen un riesgo para la población del área o que obstruyan la reconstrucción de la zona afectada.'),
(4, 5, 'Estabilizar el terreno', 'Se debe nivelar el suelo de manera que posteriormente se pueda construir el radier de la casa.');


-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE `problems` (
  `problem_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `descripcion_problema` text,
  `gravedad_problema` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `abilities_users`
--

CREATE TABLE `abilities_users` (
  `user_id` int(11) NOT NULL,
  `ability_id` int(11) NOT NULL,
  `nivel_requerido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `abilities_users`
--

INSERT INTO `abilities_users` (`user_id`, `ability_id`, `nivel_requerido`) VALUES
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `commune_id` int(11) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `disponibilidad` tinyint(1) NOT NULL,
  `ADMIN` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `commune_id`, `nombre_usuario`, `password`, `disponibilidad`, `ADMIN`) VALUES
(1, 2, 'Ichigo', 'ichigo', 2, 0),
(2, 1, 'Richard', 'richard', 0, 1),
(3, 7, 'shrek', 'getouttamyswamp', 1, 0),
(102, 10, 'Elber Gon Freecs', 'prntscr', 1, 0),
(106, 11, 'Elber Gon', 'lalalele', 1, 1),
(108, 328, 'Arturo Prat', 'pass123', 1, 1),
(109, 201, 'Michael Jackson', '123asd', 1, 1),
(110, 13, 'Steve Jobs', 'passtest', 1, 1);


--
-- Indexes for dumped tables
--

--
-- Indexes for table `abilities`
--
ALTER TABLE `abilities`
  ADD PRIMARY KEY (`ability_id`);

--
-- Indexes for table `communes`
--
ALTER TABLE `communes`
  ADD PRIMARY KEY (`commune_id`),
  ADD KEY `FK_RELATIONSHIP_12` (`region_id`);

--
-- Indexes for table `docs`
--
ALTER TABLE `docs`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`email`),
  ADD KEY `FK_POSEE2` (`user_id`);

--
-- Indexes for table `emergencies`
--
ALTER TABLE `emergencies`
  ADD PRIMARY KEY (`emergency_id`),
  ADD KEY `FK_UBICADO` (`commune_id`),
  ADD KEY `FK_SE_ENCARGA__ENCARGADO_DE_EMERGENCIA_` (`user_id`);

--
-- Indexes for table `GENERA`
--
ALTER TABLE `docs_tasks`
  ADD PRIMARY KEY (`doc_id`,`task_id`),
  ADD KEY `FK_GENERA2` (`task_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `FK_RELATIONSHIP_19` (`user_id`);

--
-- Indexes for table `missions`
--
ALTER TABLE `missions`
  ADD PRIMARY KEY (`mission_id`),
  ADD KEY `FK_RELATIONSHIP_1` (`emergency_id`),
  ADD KEY `FK_TRABAJAN` (`user_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `phone_numbers`
--
ALTER TABLE `phone_numbers`
  ADD PRIMARY KEY (`phone`),
  ADD KEY `FK_POSEE` (`user_id`);

--
-- Indexes for table `tasks_users`
--
ALTER TABLE `tasks_users`
  ADD KEY `FK_RELATIONSHIP_22` (`task_id`),
  ADD KEY `FK_RELATIONSHIP_23` (`user_id`);

--
-- Indexes for table `RECIBE`
--
ALTER TABLE `messages_users`
  ADD PRIMARY KEY (`message_id`,`user_id`),
  ADD KEY `FK_RELATIONSHIP_21` (`user_id`);

--
-- Indexes for table `notifications_users`
--
ALTER TABLE `notifications_users`
  ADD PRIMARY KEY (`user_id`,`notification_id`),
  ADD KEY `FK_notifications_users2` (`notification_id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`region_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `FK_RECIBE` (`user_id`),
  ADD KEY `FK_RELATIONSHIP_8` (`task_id`);

--
-- Indexes for table `abilities_tasks`
--
ALTER TABLE `abilities_tasks`
  ADD PRIMARY KEY (`ability_id`,`task_id`),
  ADD KEY `FK_RELATIONSHIP_5` (`task_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `FK_abilities_users` (`mission_id`);

--
-- Indexes for table `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`problem_id`),
  ADD KEY `FK_SURGE` (`task_id`);

--
-- Indexes for table `abilities_users`
--
ALTER TABLE `abilities_users`
  ADD PRIMARY KEY (`user_id`,`ability_id`),
  ADD KEY `FK_RELATIONSHIP_6` (`ability_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `FK_RELATIONSHIP_7` (`commune_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abilities`
--
ALTER TABLE `abilities`
  MODIFY `ability_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `communes`
--
ALTER TABLE `communes`
  MODIFY `commune_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=350;
--
-- AUTO_INCREMENT for table `docs`
--
ALTER TABLE `docs`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `emergencies`
--
ALTER TABLE `emergencies`
  MODIFY `emergency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `missions`
--
ALTER TABLE `missions`
  MODIFY `mission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `problems`
--
ALTER TABLE `problems`
  MODIFY `problem_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `communes`
--
ALTER TABLE `communes`
  ADD CONSTRAINT `FK_RELATIONSHIP_12` FOREIGN KEY (`region_id`) REFERENCES `regions` (`region_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `emails`
--
ALTER TABLE `emails`
  ADD CONSTRAINT `FK_POSEE2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `emergencies`
--
ALTER TABLE `emergencies`
  ADD CONSTRAINT `FK_SE_ENCARGA__ENCARGADO_DE_EMERGENCIA_` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_UBICADO` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`commune_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `GENERA`
--
ALTER TABLE `docs_tasks`
  ADD CONSTRAINT `FK_GENERA` FOREIGN KEY (`doc_id`) REFERENCES `docs` (`doc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_GENERA2` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`task_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `missions`
--
ALTER TABLE `missions`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`emergency_id`) REFERENCES `emergencies` (`emergency_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TRABAJAN` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phone_numbers`
--
ALTER TABLE `phone_numbers`
  ADD CONSTRAINT `FK_POSEE` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tasks_users`
--
ALTER TABLE `tasks_users`
  ADD CONSTRAINT `FK_RELATIONSHIP_22` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`task_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_RELATIONSHIP_23` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `RECIBE`
--
ALTER TABLE `messages_users`
  ADD CONSTRAINT `FK_RELATIONSHIP_20` FOREIGN KEY (`message_id`) REFERENCES `messages` (`message_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_RELATIONSHIP_21` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notifications_users`
--
ALTER TABLE `notifications_users`
  ADD CONSTRAINT `FK_notifications_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_notifications_users2` FOREIGN KEY (`notification_id`) REFERENCES `notifications` (`notification_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `FK_RECIBE` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_RELATIONSHIP_8` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`task_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `abilities_tasks`
--
ALTER TABLE `abilities_tasks`
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`ability_id`) REFERENCES `abilities` (`ability_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`task_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `FK_abilities_users` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`mission_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `problems`
--
ALTER TABLE `problems`
  ADD CONSTRAINT `FK_SURGE` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`task_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `abilities_users`
--
ALTER TABLE `abilities_users`
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`ability_id`) REFERENCES `abilities` (`ability_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_RELATIONSHIP_7` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`commune_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
