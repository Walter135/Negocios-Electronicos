-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Sep 18, 2020 at 04:24 AM
-- Server version: 5.7.24-log
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ritsolution`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `editado` datetime NOT NULL,
  `nivel` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_admin`, `usuario`, `nombre`, `password`, `editado`, `nivel`) VALUES
(16, 'Walter135', 'Walter Rivas', '$2y$12$RameZtOudl7nvwCHtXSJR./eogjehQNB.GjV1DWHjPI4Rm66utPMq', '1900-01-01 00:00:00', 1),
(43, 'Admin', 'Admin', '$2y$12$AxledqXLoinHvOUA0YypAeWbvxkeeWFtFVgEUjn1QG7CKRaEB31p.', '1900-01-01 00:00:00', 0),
(44, 'Admin1', 'Admin1', '$2y$12$k.0Q7DU1qNCb/ISWIfxUj.kjF7vAPxsObcT4OdodYErS/Sds5f.Oy', '1900-01-01 00:00:00', 0),
(45, 'Admin2', 'Admin2', '$2y$12$B8DOaHtidYHaWgZ//xCJceZQ.FEAw3foi.qBKgKsPWJlNvrkDrxpS', '1900-01-01 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `articulos`
--

CREATE TABLE `articulos` (
  `id` int(3) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Precio` int(3) NOT NULL,
  `url_image` varchar(40) NOT NULL,
  `Descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articulos`
--

INSERT INTO `articulos` (`id`, `Nombre`, `Precio`, `url_image`, `Descripcion`) VALUES
(1, 'Placa Madre', 350, 'Asrock.jpg', 'Son el elemento central de cualquier PC. No suele haber grandes diferencias de calidad entre ellas a igualdad de precio y, si bien pueden variar en el chipset que implementan para realizar el control de los distintos elementos, ese chipset viene especificado por las compañías de procesadores.');

-- --------------------------------------------------------

--
-- Table structure for table `carrito`
--

CREATE TABLE `carrito` (
  `id` int(3) NOT NULL,
  `idUsuario` int(3) NOT NULL,
  `idArticulo` int(3) NOT NULL,
  `Cantidad` int(3) NOT NULL,
  `Comprado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carrito`
--

INSERT INTO `carrito` (`id`, `idUsuario`, `idArticulo`, `Cantidad`, `Comprado`) VALUES
(1, 1, 1, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `ID_CATEGORIA` int(11) NOT NULL,
  `DESCRIPCION` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`ID_CATEGORIA`, `DESCRIPCION`) VALUES
(1, 'LAPTOP'),
(2, 'DESKTOP'),
(3, 'IMPRESORA'),
(4, 'MONITOR'),
(5, 'DISCO DURO'),
(6, 'PLACA MADRE'),
(7, 'MEMORIA RAM'),
(8, 'PERIFERICOS');

-- --------------------------------------------------------

--
-- Table structure for table `categoria_evento`
--

CREATE TABLE `categoria_evento` (
  `id_categoria` tinyint(10) NOT NULL,
  `cat_evento` varchar(50) NOT NULL,
  `icono` varchar(30) NOT NULL,
  `editado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categoria_evento`
--

INSERT INTO `categoria_evento` (`id_categoria`, `cat_evento`, `icono`, `editado`) VALUES
(1, 'Seminarios', 'fa-university', '1900-01-01 00:00:00'),
(2, 'Conferencias', 'fa-comment', '1900-01-01 00:00:00'),
(3, 'Talleres', 'fa-code', '1900-01-01 00:00:00'),
(5, 'Auditoria', 'fas fa-comments', '2019-05-05 18:43:32'),
(6, 'Hora', 'fas fa-hourglass', '2019-05-05 18:51:16');

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
--

CREATE TABLE `eventos` (
  `evento_id` tinyint(10) NOT NULL,
  `nombre_evento` varchar(80) NOT NULL,
  `fecha_evento` date NOT NULL,
  `hora_evento` time NOT NULL,
  `id_cat_evento` tinyint(10) NOT NULL,
  `id_inv` tinyint(4) NOT NULL,
  `clave` varchar(10) DEFAULT NULL,
  `editado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eventos`
--

INSERT INTO `eventos` (`evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `id_cat_evento`, `id_inv`, `clave`, `editado`) VALUES
(1, 'Responsive Web Design', '2016-12-11', '10:00:00', 3, 1, 'taller_01', '1900-01-01 00:00:00'),
(2, 'Flexbox', '2016-12-09', '12:00:00', 3, 2, 'taller_02', '1900-01-01 00:00:00'),
(3, 'HTML5 y CSS3', '2016-12-09', '14:00:00', 3, 3, 'taller_03', '1900-01-01 00:00:00'),
(4, 'Drupal', '2016-12-09', '17:00:00', 3, 4, 'taller_04', '1900-01-01 00:00:00'),
(5, 'WordPress', '2016-12-09', '19:00:00', 3, 5, 'taller_05', '1900-01-01 00:00:00'),
(6, 'Como ser freelancer', '2016-12-09', '10:00:00', 2, 6, 'conf_01', '1900-01-01 00:00:00'),
(7, 'Tecnologías del Futuro', '2016-12-09', '17:00:00', 2, 1, 'conf_02', '1900-01-01 00:00:00'),
(8, 'Seguridad en la Web', '2016-12-09', '19:00:00', 2, 2, 'conf_03', '1900-01-01 00:00:00'),
(9, 'Diseño UI y UX para móviles', '2016-12-09', '10:00:00', 1, 6, 'sem_01', '1900-01-01 00:00:00'),
(11, 'PHP y MySQL', '2016-12-10', '12:00:00', 3, 2, 'taller_07', '1900-01-01 00:00:00'),
(12, 'JavaScript Avanzado', '2016-12-10', '14:00:00', 3, 3, 'taller_08', '1900-01-01 00:00:00'),
(13, 'SEO en Google', '2016-12-10', '17:00:00', 3, 4, 'taller_09', '1900-01-01 00:00:00'),
(14, 'De Photoshop a HTML5 y CSS3', '2016-12-10', '19:00:00', 3, 5, 'taller_10', '1900-01-01 00:00:00'),
(15, 'PHP Intermedio y Avanzado', '2016-12-10', '21:00:00', 3, 6, 'taller_11', '1900-01-01 00:00:00'),
(16, 'Como crear una tienda online que venda millones en pocos días', '2016-12-10', '10:00:00', 2, 6, 'conf_04', '1900-01-01 00:00:00'),
(17, 'Los mejores lugares para encontrar trabajo', '2016-12-10', '17:00:00', 2, 1, 'conf_05', '1900-01-01 00:00:00'),
(18, 'Pasos para crear un negocio rentable ', '2016-12-10', '19:00:00', 2, 2, 'conf_06', '1900-01-01 00:00:00'),
(19, 'Aprende a Programar en una mañana', '2016-12-10', '10:00:00', 1, 3, 'sem_02', '1900-01-01 00:00:00'),
(20, 'Diseño UI y UX para móviles', '2016-12-10', '17:00:00', 1, 5, 'sem_03', '1900-01-01 00:00:00'),
(21, 'Laravel', '2016-12-11', '10:00:00', 3, 1, 'taller_12', '1900-01-01 00:00:00'),
(22, 'Crea tu propia API', '2016-12-11', '12:00:00', 3, 2, 'taller_13', '1900-01-01 00:00:00'),
(23, 'JavaScript y jQuery', '2016-12-11', '14:00:00', 3, 3, 'taller_14', '1900-01-01 00:00:00'),
(24, 'Creando Plantillas para WordPress', '2016-12-11', '17:00:00', 3, 4, 'taller_15', '1900-01-01 00:00:00'),
(25, 'Tiendas Virtuales en Magento', '2016-12-11', '19:00:00', 3, 5, 'taller_16', '1900-01-01 00:00:00'),
(26, 'Como hacer Marketing en línea', '2016-12-11', '10:00:00', 2, 6, 'conf_07', '1900-01-01 00:00:00'),
(27, '¿Con que lenguaje debo empezar?', '2016-12-11', '17:00:00', 2, 2, 'conf_08', '1900-01-01 00:00:00'),
(28, 'Frameworks y librerias Open Source', '2016-12-11', '19:00:00', 2, 3, 'conf_09', '1900-01-01 00:00:00'),
(29, 'Creando una App en Android en una mañana', '2016-12-11', '10:00:00', 1, 4, 'sem_04', '1900-01-01 00:00:00'),
(30, 'Creando una App en iOS en una tarde', '2016-12-11', '17:00:00', 1, 1, 'sem_05', '1900-01-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `invitados`
--

CREATE TABLE `invitados` (
  `invitado_id` tinyint(4) NOT NULL,
  `nombre_invitado` varchar(30) NOT NULL,
  `apellido_invitado` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `url` varchar(50) NOT NULL,
  `editado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invitados`
--

INSERT INTO `invitados` (`invitado_id`, `nombre_invitado`, `apellido_invitado`, `descripcion`, `url`, `editado`) VALUES
(1, 'Rafael', 'Bautista', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aperiam delectus dolore error facilis fugiat harum itaque iusto labore maxime molestias nihil nisi odio odit omnis, porro, quae recusandae totam!', 'invitado1.jpg', '1900-01-01 00:00:00'),
(2, 'Shari', 'Herrera', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aperiam delectus dolore error facilis fugiat harum itaque iusto labore maxime molestias nihil nisi odio odit omnis, porro, quae recusandae totam!', 'invitado2.jpg', '1900-01-01 00:00:00'),
(3, 'Gregorio', 'Sanchez', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aperiam delectus dolore error facilis fugiat harum itaque iusto labore maxime molestias nihil nisi odio odit omnis, porro, quae recusandae totam!', 'invitado3.jpg', '1900-01-01 00:00:00'),
(4, 'Susana', 'Rivera', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aperiam delectus dolore error facilis fugiat harum itaque iusto labore maxime molestias nihil nisi odio odit omnis, porro, quae recusandae totam!', 'invitado4.jpg', '1900-01-01 00:00:00'),
(5, 'Harold', 'Garcia', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aperiam delectus dolore error facilis fugiat harum itaque iusto labore maxime molestias nihil nisi odio odit omnis, porro, quae recusandae totam!', 'invitado5.jpg', '1900-01-01 00:00:00'),
(6, 'Susan', 'Sanchez', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aperiam delectus dolore error facilis fugiat harum itaque iusto labore maxime molestias nihil nisi odio odit omnis, porro, quae recusandae totam!', 'invitado6.jpg', '1900-01-01 00:00:00'),
(10, 'Winie', 'Pooh', 'AWaaaaaaaaaaaaaanta', 'awanta.jpg', '2019-05-08 15:16:24');

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `ID_PRODUCTO` int(11) NOT NULL,
  `MARCA` varchar(20) NOT NULL,
  `MODELO` varchar(50) NOT NULL,
  `DESC_REDUCIDA` varchar(200) NOT NULL,
  `DESC_AMPLIADA` varchar(500) NOT NULL,
  `STOCK` int(11) NOT NULL,
  `PRECIO` decimal(6,2) NOT NULL,
  `IMAGEN` varchar(40) NOT NULL,
  `ID_CATEGORIA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`ID_PRODUCTO`, `MARCA`, `MODELO`, `DESC_REDUCIDA`, `DESC_AMPLIADA`, `STOCK`, `PRECIO`, `IMAGEN`, `ID_CATEGORIA`) VALUES
(1, 'LENOVO', 'IdeaPad S340', 'Laptop 14\" IdeaPad S340 Core i5 10ma Gen 8GB 256GB SSD', 'Laptop 14\" IdeaPad S340 Core i5 10ma Gen 8GB 256GB SSD', 2, '2299.00', 'laptopid1.jpg', 1),
(2, 'HP', '15-DK0001LA', 'Laptop Gamer 15.6\" Core i5-9300H 8GB RAM 1TB+ 3GB Nvidia GeForce GTX 1050 - Pantalla Full HD', 'Laptop Gamer 15.6\" Core i5-9300H 8GB RAM 1TB+ 3GB Nvidia GeForce GTX 1050 - Pantalla Full HD', 1, '3299.00', 'laptopid2.jpg', 1),
(3, 'LENOVO', 'IdeaPad S145', 'Laptop 14\" Ryzen 3 4GB RAM 128GB SSD', 'Laptop 14\" Ryzen 3 4GB RAM 128GB SSD', 3, '1499.00', 'laptopid3.jpg', 1),
(4, 'ASUS', 'X512JP-BQ344T', 'Laptop VivoBook 15\" X512JP Core i7-1065G7 512GB SSD 12GB RAM + OPT 2GB Video MX250', 'Laptop VivoBook 15\" X512JP Core i7-1065G7 512GB SSD 12GB RAM + OPT 2GB Video MX250', 1, '3899.00', 'laptopid4.jpg', 1),
(5, 'HP', 'ProDesk 400 G5', 'ProDesk 400 G5 SFF core i3 4GB 1TB W10pro', 'ProDesk 400 G5 SFF core i3 4GB 1TB W10pro', 2, '1549.00', 'pcid5.jpg', 2),
(6, 'HP', 'Smart Tank 615', 'Impresora Multifuncional Smart Tank 615 Wifi', 'Impresora Multifuncional Smart Tank 615 Wifi', 1, '899.00', 'impresoraid6.jpg', 3),
(7, 'BROTHER', 'MFC-T910DW', 'Impresora Multifuncional MFC-T910DW Negro', 'Impresora Multifuncional MFC-T910DW Negro', 3, '1199.00', 'impresoraid7.jpg', 3),
(8, 'AOC', 'C27G2', 'Monitor AOC C27G2 Curvo Gaming 27\"', 'Monitor AOC C27G2 Curvo Gaming 27\"', 1, '1299.00', 'monitorid8.jpg', 4),
(9, 'AOC', 'E2070SWHN', 'Monitor AOC E2070SWHN, 19.5\", HD, HDM, VGA', 'Monitor AOC E2070SWHN, 19.5\", HD, HDM, VGA', 4, '319.00', 'monitorid9.jpg', 4),
(10, 'AOC', '22B2H', 'Monitor AOC 22B2H 21.5\"', 'Monitor AOC 22B2H 21.5\"', 1, '569.00', 'monitorid10.jpg', 4),
(11, 'LG', '19M38A', 'Monitor 18.5\" 19M38A 1366 x 768 VGA', 'Monitor 18.5\" 19M38A 1366 x 768 VGA', 5, '350.00', 'monitorid11.jpg', 4),
(12, 'AOC', 'E2270SWHN', 'Monitor AOC E2270SWHN, 21.5\",FHD, HDMI,VGA', 'Monitor AOC E2270SWHN, 21.5\",FHD, HDMI,VGA', 2, '339.00', 'monitorid12.jpg', 4),
(13, 'LG', '20MK400H-B', 'Monitor 19.5\" 20MK400H-B 1366 x 768 VGA/HDMI', 'Monitor 19.5\" 20MK400H-B 1366 x 768 VGA/HDMI', 2, '419.00', 'monitorid13.jpg', 4),
(14, 'TOSHIBA', 'HDTB420 XK3AA', 'Disco Duro Toshiba Capacidad 2TB Canvio Basics - Negro', 'Disco Duro Toshiba Capacidad 2TB Canvio Basics - Negro', 6, '409.00', 'discoduroid14.jpg', 5),
(15, 'KINGSTON', 'A400', 'Disco Duro Sólido A400 240GB 2.5\" SATA', 'Disco Duro Sólido A400 240GB 2.5\" SATA', 2, '169.00', 'discoduroid15.jpg', 5),
(16, 'ASUS', 'X570 PLUS', 'MAINBOARD ASUS TUF GAMING X570 PLUS WIFI AM4 (90MB1170-M0AAY0)', 'MAINBOARD ASUS TUF GAMING X570 PLUS WIFI AM4 (90MB1170-M0AAY0)', 8, '889.00', 'placamadreid16.jpg', 6),
(17, 'MSI', 'B450M PRO-VDH-MAX', 'MAINBOARD MSI B450M PRO-VDH-MAX (911-7A38-049) AM4', 'MAINBOARD MSI B450M PRO-VDH-MAX (911-7A38-049) AM4', 3, '400.00', 'placamadreid17.jpg', 6),
(18, 'GIGABYTE', 'A520M H', 'MAINBOARD GIGABYTE (A520M-H) AM4', 'MAINBOARD GIGABYTE (A520M-H) AM4', 10, '347.00', 'placamadreid18.jpg', 6),
(19, 'HP', 'V2', 'MEMORIA RAM HP V2 8GB 2666MHZ DDR4 (7EH55AA-ABM)', 'MEMORIA RAM HP V2 8GB 2666MHZ DDR4 (7EH55AA-ABM)', 6, '143.00', 'memoriaid19.jpg', 7),
(20, 'CRUCIAL', 'CT16G4DFD8266', 'MEMORIA RAM CRUCIAL 16GB DDR4 2666MHZ (CT16G4DFD8266)', 'MEMORIA RAM CRUCIAL 16GB DDR4 2666MHZ (CT16G4DFD8266)', 3, '276.00', 'memoriaid20.jpg', 7),
(21, 'LOGITECH', 'G203', 'Mouse Gamer G203 Lightsync 8000 DPI', 'Mouse Gamer G203 Lightsync 8000 DPI', 5, '129.00', 'perifericoid21.jpg', 8),
(22, 'LENOVO', 'K200', 'Teclado Gamer Legion K200 para juegos con retroiluminación GX30P93889', 'Teclado Gamer Legion K200 para juegos con retroiluminación GX30P93889', 11, '309.00', 'perifericoid22.jpg', 8),
(23, 'XIAOMI', 'CMSXJ22A', 'Webcam Usb Imi Plug Play By Xioami', 'Webcam Usb Imi Plug Play By Xioami', 3, '179.00', 'perifericoid23.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `regalos`
--

CREATE TABLE `regalos` (
  `ID_regalo` int(11) NOT NULL,
  `nombre_regalo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `regalos`
--

INSERT INTO `regalos` (`ID_regalo`, `nombre_regalo`) VALUES
(1, 'Pulsera'),
(2, 'Etiquetas'),
(3, 'Plumas');

-- --------------------------------------------------------

--
-- Table structure for table `registrados`
--

CREATE TABLE `registrados` (
  `ID_Registrado` bigint(20) UNSIGNED NOT NULL,
  `nombre_registrado` varchar(50) NOT NULL,
  `apellido_registrado` varchar(50) NOT NULL,
  `email_registrado` varchar(100) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `pases_articulos` longtext NOT NULL,
  `talleres_registrados` longtext NOT NULL,
  `regalo` int(11) NOT NULL,
  `total_pagado` varchar(50) NOT NULL,
  `pagado` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registrados`
--

INSERT INTO `registrados` (`ID_Registrado`, `nombre_registrado`, `apellido_registrado`, `email_registrado`, `fecha_registro`, `pases_articulos`, `talleres_registrados`, `regalo`, `total_pagado`, `pagado`) VALUES
(1, 'Walter', 'Rivas', 'walter_stone@hotmail.es', '2019-03-21 20:20:00', '{\"un_dia\":1,\"pase_completo\":2,\"pase_2dias\":3,\"camisas\":4,\"etiquetas\":5}', '{\"eventos\":[\"conf_03\",\"taller_08\",\"taller_09\",\"sem_03\",\"taller_14\",\"conf_08\"]}', 2, '312.2', 0),
(2, 'Walter', 'Rivas', 'walter_stone@hotmail.es', '2019-04-11 18:04:00', '{\"un_dia\":1,\"pase_completo\":1,\"pase_2dias\":1,\"camisas\":1,\"etiquetas\":1}', '{\"eventos\":[\"taller_03\",\"conf_02\",\"conf_03\"]}', 2, '41.3', 0),
(3, 'Walter', 'Rivas', 'walter_stone@hotmail.es', '2019-03-21 20:20:00', '{\"un_dia\":1,\"pase_completo\":1,\"pase_2dias\":1,\"camisas\":1,\"etiquetas\":1}', '{\"eventos\":[\"taller_03\",\"conf_02\",\"conf_03\"]}', 2, '41.3', 0),
(4, 'Walter', 'Rivas', 'walter_stone@hotmail.es', '2019-03-21 20:20:00', '{\"un_dia\":1,\"pase_completo\":1,\"pase_2dias\":1,\"camisas\":1,\"etiquetas\":1}', '{\"eventos\":[\"taller_03\",\"conf_02\",\"conf_03\"]}', 2, '41.3', 0),
(19, 'Yo', '', '', '2019-03-21 20:20:00', '{\"un_dia\":1,\"pase_completo\":1,\"pase_2dias\":1,\"camisas\":1,\"etiquetas\":1}', '{\"eventos\":[\"taller_04\",\"conf_03\",\"taller_09\",\"taller_10\"]}', 2, '91.3', 1),
(20, 'Willy', 'Wonka    ', 'cuenta_feik@gmail.com', '2019-05-11 20:50:15', '{\"un_dia\":1,\"pase_completo\":1,\"pase_2dias\":1,\"camisas\":1,\"etiquetas\":3}', '{\"eventos\":[\"taller_03\",\"taller_08\",\"conf_05\",\"taller_15\",\"conf_09\"]}', 3, '155.3', 1),
(25, 'uwu', 'aea', 'cuenta_feik@gmail.com', '2019-03-21 20:20:00', '{\"un_dia\":{\"cantidad\":\"4\"},\"pase_completo\":{\"cantidad\":\"2\"},\"pase_2dias\":{\"cantidad\":\"3\"},\"camisas\":2,\"etiquetas\":4}', '{\"eventos\":[\"9\",\"7\"]}', 1, '56.6', 1),
(26, 'aea2.0', 'gaaaa', 'cuenta_feikx2@gmail.com', '2019-05-11 20:50:15', '{\"un_dia\":{\"cantidad\":\"1\"},\"pase_completo\":{\"cantidad\":\"0\"},\"pase_2dias\":{\"cantidad\":\"0\"},\"camisas\":1}', '{\"eventos\":[\"9\",\"4\",\"5\"]}', 1, '39.3', 1),
(27, 'Walter', 'Rivas', 'walter.13569@gmail.com', '2019-05-11 20:50:15', '{\"un_dia\":{\"cantidad\":\"1\"},\"pase_completo\":{\"cantidad\":\"1\"},\"pase_2dias\":{\"cantidad\":\"0\"},\"camisas\":1,\"etiquetas\":1}', '{\"eventos\":[\"7\",\"8\",\"12\",\"14\",\"30\",\"26\"]}', 1, '91.3', 1),
(28, '', '', '', '2020-06-19 18:58:48', '{\"un_dia\":{\"cantidad\":\"\"},\"pase_completo\":{\"cantidad\":\"\"},\"pase_2dias\":{\"cantidad\":\"\"},\"camisas\":1,\"etiquetas\":2}', '[]', 2, '13.3', 0),
(29, 'Walter', 'Rivas', 'walter.13569@gmail.com', '2020-06-27 02:25:58', '{\"un_dia\":{\"cantidad\":\"1\"},\"pase_completo\":{\"cantidad\":\"2\"},\"pase_2dias\":{\"cantidad\":\"1\"},\"camisas\":1,\"etiquetas\":1}', '[]', 2, '186.3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(3) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `celular` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `correo`, `celular`) VALUES
(1, 'Walter Antonio', 'Rivas Paucar', 'walter.rivas2@unmsm.edu.pe', '937202681');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indexes for table `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idArticulo` (`idArticulo`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID_CATEGORIA`);

--
-- Indexes for table `categoria_evento`
--
ALTER TABLE `categoria_evento`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`evento_id`),
  ADD KEY `id_cat_evento` (`id_cat_evento`),
  ADD KEY `id_inv` (`id_inv`);

--
-- Indexes for table `invitados`
--
ALTER TABLE `invitados`
  ADD PRIMARY KEY (`invitado_id`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ID_PRODUCTO`),
  ADD KEY `FK_PRODUCTO_CATEGORIA` (`ID_CATEGORIA`);

--
-- Indexes for table `regalos`
--
ALTER TABLE `regalos`
  ADD PRIMARY KEY (`ID_regalo`);

--
-- Indexes for table `registrados`
--
ALTER TABLE `registrados`
  ADD PRIMARY KEY (`ID_Registrado`),
  ADD KEY `regalo` (`regalo`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categoria_evento`
--
ALTER TABLE `categoria_evento`
  MODIFY `id_categoria` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `evento_id` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `invitados`
--
ALTER TABLE `invitados`
  MODIFY `invitado_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `regalos`
--
ALTER TABLE `regalos`
  MODIFY `ID_regalo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registrados`
--
ALTER TABLE `registrados`
  MODIFY `ID_Registrado` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`idArticulo`) REFERENCES `articulos` (`id`),
  ADD CONSTRAINT `carrito_ibfk_3` FOREIGN KEY (`idUsuario`) REFERENCES `producto` (`ID_PRODUCTO`),
  ADD CONSTRAINT `carrito_ibfk_4` FOREIGN KEY (`idArticulo`) REFERENCES `producto` (`ID_PRODUCTO`);

--
-- Constraints for table `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`id_cat_evento`) REFERENCES `categoria_evento` (`id_categoria`),
  ADD CONSTRAINT `eventos_ibfk_2` FOREIGN KEY (`id_inv`) REFERENCES `invitados` (`invitado_id`);

--
-- Constraints for table `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `FK_PRODUCTO_CATEGORIA` FOREIGN KEY (`ID_CATEGORIA`) REFERENCES `categoria` (`ID_CATEGORIA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `registrados`
--
ALTER TABLE `registrados`
  ADD CONSTRAINT `registrados_ibfk_1` FOREIGN KEY (`regalo`) REFERENCES `regalos` (`ID_regalo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
