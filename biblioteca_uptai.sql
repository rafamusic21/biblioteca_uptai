-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2022 a las 05:25:09
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca_uptai`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria_estudiante`
--

CREATE TABLE `auditoria_estudiante` (
  `id_audi_est` int(11) NOT NULL,
  `fecha_audi_est` date DEFAULT NULL,
  `hora_audi_est` time DEFAULT NULL,
  `agg_est_audi` int(11) DEFAULT NULL,
  `lista_est_audi` int(11) DEFAULT NULL,
  `edit_est_audi` int(11) DEFAULT NULL,
  `delet_est_audi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `auditoria_estudiante`
--

INSERT INTO `auditoria_estudiante` (`id_audi_est`, `fecha_audi_est`, `hora_audi_est`, `agg_est_audi`, `lista_est_audi`, `edit_est_audi`, `delet_est_audi`) VALUES
(1, '2022-10-24', '23:07:42', 1, NULL, NULL, NULL),
(2, '2022-10-24', '23:08:02', 1, NULL, NULL, NULL),
(3, '2022-10-24', '23:08:35', 1, NULL, NULL, NULL),
(4, '2022-10-24', '23:09:02', 1, NULL, NULL, NULL),
(5, '2022-10-24', '23:09:06', NULL, 1, NULL, NULL),
(6, '2022-10-24', '23:09:14', 1, NULL, NULL, NULL),
(7, '2022-10-24', '23:10:17', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria_libro`
--

CREATE TABLE `auditoria_libro` (
  `id_audi_libro` int(11) NOT NULL,
  `fecha_audi_libro` date DEFAULT NULL,
  `hora_audi_libro` time DEFAULT NULL,
  `agg_libro_audi` int(11) DEFAULT NULL,
  `lista_libro_audi` int(11) DEFAULT NULL,
  `pres_libro_audi` int(11) DEFAULT NULL,
  `delet_libro_audi` int(11) DEFAULT NULL,
  `edit_libro_audi` int(11) DEFAULT NULL,
  `retor_libro_audi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `auditoria_libro`
--

INSERT INTO `auditoria_libro` (`id_audi_libro`, `fecha_audi_libro`, `hora_audi_libro`, `agg_libro_audi`, `lista_libro_audi`, `pres_libro_audi`, `delet_libro_audi`, `edit_libro_audi`, `retor_libro_audi`) VALUES
(1, '2022-10-24', '22:33:55', 1, NULL, NULL, NULL, NULL, NULL),
(2, '2022-10-24', '22:36:24', 1, NULL, NULL, NULL, NULL, NULL),
(3, '2022-10-24', '22:38:04', 1, NULL, NULL, NULL, NULL, NULL),
(4, '2022-10-24', '22:40:40', 1, NULL, NULL, NULL, NULL, NULL),
(5, '2022-10-24', '22:42:12', 1, NULL, NULL, NULL, NULL, NULL),
(6, '2022-10-24', '22:42:55', 1, NULL, NULL, NULL, NULL, NULL),
(7, '2022-10-24', '22:43:16', NULL, 1, NULL, NULL, NULL, NULL),
(8, '2022-10-24', '22:43:22', 1, NULL, NULL, NULL, NULL, NULL),
(9, '2022-10-24', '22:44:24', 1, NULL, NULL, NULL, NULL, NULL),
(10, '2022-10-24', '22:46:08', 1, NULL, NULL, NULL, NULL, NULL),
(11, '2022-10-24', '22:46:52', NULL, 1, NULL, NULL, NULL, NULL),
(12, '2022-10-24', '22:46:59', NULL, 1, NULL, NULL, NULL, NULL),
(13, '2022-10-24', '22:47:02', NULL, 1, NULL, NULL, NULL, NULL),
(14, '2022-10-24', '22:47:36', 1, NULL, NULL, NULL, NULL, NULL),
(15, '2022-10-24', '22:47:40', NULL, 1, NULL, NULL, NULL, NULL),
(16, '2022-10-24', '22:47:43', 1, NULL, NULL, NULL, NULL, NULL),
(17, '2022-10-24', '22:49:26', 1, NULL, NULL, NULL, NULL, NULL),
(18, '2022-10-24', '22:50:46', 1, NULL, NULL, NULL, NULL, NULL),
(19, '2022-10-24', '22:51:24', NULL, 1, NULL, NULL, NULL, NULL),
(20, '2022-10-24', '22:51:29', 1, NULL, NULL, NULL, NULL, NULL),
(21, '2022-10-24', '22:52:00', 1, NULL, NULL, NULL, NULL, NULL),
(22, '2022-10-24', '22:52:03', NULL, 1, NULL, NULL, NULL, NULL),
(23, '2022-10-24', '22:52:12', NULL, 1, NULL, NULL, NULL, NULL),
(24, '2022-10-24', '22:52:18', NULL, 1, NULL, NULL, NULL, NULL),
(25, '2022-10-24', '22:52:26', 1, NULL, NULL, NULL, NULL, NULL),
(26, '2022-10-24', '22:52:53', 1, NULL, NULL, NULL, NULL, NULL),
(27, '2022-10-24', '22:52:56', NULL, 1, NULL, NULL, NULL, NULL),
(28, '2022-10-24', '22:55:35', NULL, 1, NULL, NULL, NULL, NULL),
(29, '2022-10-24', '22:55:37', NULL, 1, NULL, NULL, NULL, NULL),
(30, '2022-10-24', '22:55:58', 1, NULL, NULL, NULL, NULL, NULL),
(31, '2022-10-24', '22:56:56', 1, NULL, NULL, NULL, NULL, NULL),
(32, '2022-10-24', '22:58:03', 1, NULL, NULL, NULL, NULL, NULL),
(33, '2022-10-24', '22:58:05', NULL, 1, NULL, NULL, NULL, NULL),
(34, '2022-10-24', '22:58:07', NULL, 1, NULL, NULL, NULL, NULL),
(35, '2022-10-24', '22:59:11', NULL, 1, NULL, NULL, NULL, NULL),
(36, '2022-10-24', '22:59:33', NULL, 1, NULL, NULL, NULL, NULL),
(37, '2022-10-24', '23:00:40', 1, NULL, NULL, NULL, NULL, NULL),
(38, '2022-10-24', '23:01:32', 1, NULL, NULL, NULL, NULL, NULL),
(39, '2022-10-24', '23:03:17', 1, NULL, NULL, NULL, NULL, NULL),
(40, '2022-10-24', '23:05:07', 1, NULL, NULL, NULL, NULL, NULL),
(41, '2022-10-24', '23:05:13', NULL, 1, NULL, NULL, NULL, NULL),
(42, '2022-10-24', '23:05:24', 1, NULL, NULL, NULL, NULL, NULL),
(43, '2022-10-24', '23:05:52', 1, NULL, NULL, NULL, NULL, NULL),
(44, '2022-10-24', '23:06:34', NULL, 1, NULL, NULL, NULL, NULL),
(45, '2022-10-24', '23:06:37', NULL, 1, NULL, NULL, NULL, NULL),
(46, '2022-10-24', '23:06:39', NULL, 1, NULL, NULL, NULL, NULL),
(47, '2022-10-24', '23:06:41', 1, NULL, NULL, NULL, NULL, NULL),
(48, '2022-10-24', '23:07:31', 1, NULL, NULL, NULL, NULL, NULL),
(49, '2022-10-24', '23:07:36', NULL, 1, NULL, NULL, NULL, NULL),
(50, '2022-10-24', '23:07:37', NULL, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria_user`
--

CREATE TABLE `auditoria_user` (
  `id_audi_user` int(11) NOT NULL,
  `fecha_user_audi` date DEFAULT NULL,
  `hora_user_audi` time DEFAULT NULL,
  `agg_user_audi` int(11) DEFAULT NULL,
  `lista_user_audi` int(11) DEFAULT NULL,
  `edit_user_audi` int(11) DEFAULT NULL,
  `delet_user_audi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `auditoria_user`
--

INSERT INTO `auditoria_user` (`id_audi_user`, `fecha_user_audi`, `hora_user_audi`, `agg_user_audi`, `lista_user_audi`, `edit_user_audi`, `delet_user_audi`) VALUES
(1, '2022-10-24', '22:30:36', 1, NULL, NULL, NULL),
(2, '2022-10-24', '22:30:37', NULL, NULL, 1, NULL),
(3, '2022-10-24', '22:30:44', 1, NULL, NULL, NULL),
(4, '2022-10-24', '22:31:02', 1, NULL, NULL, NULL),
(5, '2022-10-24', '22:31:33', 1, NULL, NULL, NULL),
(6, '2022-10-24', '22:31:54', 1, NULL, NULL, NULL),
(7, '2022-10-24', '22:32:26', 1, NULL, NULL, NULL),
(8, '2022-10-24', '22:32:28', NULL, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `idcarrera` int(11) NOT NULL,
  `nom_carrera` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`idcarrera`, `nom_carrera`) VALUES
(1, 'PNF INFORMATICA'),
(2, 'PNF CONSTRUCCION CIVIL'),
(3, 'PNF MECANICA'),
(4, 'PNF PROSESAMIENTO DE ALIMENTOS'),
(5, 'PNF ELECTRONICA'),
(6, 'PNF ELECTRICIDAD'),
(7, 'PNF AGROALIMENTACION');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eliminar_inf_estudiante`
--

CREATE TABLE `eliminar_inf_estudiante` (
  `idestudiante` int(11) DEFAULT NULL,
  `cedula` int(10) DEFAULT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellido` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `carrera` int(11) DEFAULT NULL,
  `id_userdeleted` int(11) DEFAULT NULL,
  `fecha_eliminar` date DEFAULT NULL,
  `hora_eliminar` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eliminar_libro`
--

CREATE TABLE `eliminar_libro` (
  `id_eliminar` int(11) NOT NULL,
  `cota` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombre_libro` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auto` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `año_libro` date DEFAULT NULL,
  `n_ejemplar` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `carrera` int(11) DEFAULT NULL,
  `id_userdeleted` int(11) DEFAULT NULL,
  `stock` int(100) DEFAULT NULL,
  `fecha_eliminar` date DEFAULT NULL,
  `hora_eliminar` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eliminar_usuario`
--

CREATE TABLE `eliminar_usuario` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `correo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usuario` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `clave` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rol` int(11) DEFAULT NULL,
  `status` int(2) DEFAULT 1,
  `id_userdeleted` int(11) DEFAULT NULL,
  `fecha_eliminar` date DEFAULT NULL,
  `hora_eliminar` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrega_libro`
--

CREATE TABLE `entrega_libro` (
  `id` int(4) NOT NULL,
  `cota` varchar(15) NOT NULL,
  `fecha_entrega` date NOT NULL,
  `hora_entrega` time DEFAULT NULL,
  `id_estudiante_el` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cedula` int(11) NOT NULL,
  `id_userCreador` int(11) DEFAULT NULL,
  `id_userDeleted` int(11) DEFAULT NULL,
  `status` int(2) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Disparadores `entrega_libro`
--
DELIMITER $$
CREATE TRIGGER `A_entrega_libro` AFTER INSERT ON `entrega_libro` FOR EACH ROW BEGIN
INSERT INTO respaldo_entraga_libro(cota, fecha_entrega, hora_entrega, id_estudiante, nom_est, cedula, id_usercreador) VALUES(new.cota, CURRENT_DATE(), CURRENT_TIME(), new.id_estudiante_el, new.nombre, new.cedula, new.id_userCreador);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inf_estudiante`
--

CREATE TABLE `inf_estudiante` (
  `id` int(4) NOT NULL,
  `cedula` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `numero` varchar(15) NOT NULL,
  `carrera` int(11) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `id_userCreador` int(11) DEFAULT NULL,
  `id_userDeleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inf_estudiante`
--

INSERT INTO `inf_estudiante` (`id`, `cedula`, `nombre`, `apellido`, `numero`, `carrera`, `status`, `id_userCreador`, `id_userDeleted`) VALUES
(1, 28457797, 'Rafael Antonio', 'Maldonado Burgos', '4247190072', 1, 1, 1, NULL),
(2, 26934846, 'bertha margarita', 'Maldonado Burgos', '', 1, 1, 1, NULL),
(3, 29988297, 'shayer', 'bonilla', '4241597894', 1, 1, 1, NULL);

--
-- Disparadores `inf_estudiante`
--
DELIMITER $$
CREATE TRIGGER `A_inf_estudiante` AFTER INSERT ON `inf_estudiante` FOR EACH ROW BEGIN
INSERT INTO respaldo_inf_estudiante(idestudiante, cedula, nombre,  apellido, numero, carrera, id_userCreador, fehca_respaldo, hora_respaldo) VALUES(new.id, new.cedula, new.nombre, new.apellido, new.numero, new.carrera, new. id_userCreador, CURRENT_DATE(), CURRENT_TIME()); END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `b_eliminar_estudiante` BEFORE UPDATE ON `inf_estudiante` FOR EACH ROW BEGIN
IF NEW.status = 0 THEN
INSERT INTO eliminar_inf_estudiante(idestudiante, cedula, nombre, apellido, numero, carrera, id_userdeleted, fecha_eliminar, hora_eliminar) VALUES(old.id, old.cedula, old.nombre, old.apellido, old.numero, old.carrera, new.id_userDeleted, CURRENT_DATE(), CURRENT_TIME());
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `cota` varchar(20) NOT NULL,
  `nombre_libro` varchar(70) NOT NULL,
  `autor` varchar(20) NOT NULL,
  `año_libro` date NOT NULL,
  `n_ejemplar` varchar(20) NOT NULL,
  `carrera` int(11) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `id_userCreador` int(11) DEFAULT NULL,
  `id_userDeleted` int(11) DEFAULT NULL,
  `stock` int(100) DEFAULT NULL,
  `disponible` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`cota`, `nombre_libro`, `autor`, `año_libro`, `n_ejemplar`, `carrera`, `status`, `id_userCreador`, `id_userDeleted`, `stock`, `disponible`) VALUES
('a001', 'Analisis Basicos de Circuitos Electricos y Electronicos ', 'anonimo', '2009-06-23', '2', 5, 1, 1, NULL, NULL, NULL),
('a002', 'ELECTRONICA BASICA para INGENIEROS', 'anonimo', '2013-02-26', '2', 5, 1, 1, NULL, NULL, NULL),
('b001', 'Mecanica para Ingenieros ESTAT', 'Russell C. Hibbeler', '2003-05-26', '4', 3, 1, 1, NULL, NULL, NULL),
('b002', 'Diseño en ingeniería mecánica ', 'Richard G. Budynas', '2003-06-14', '2', 3, 1, 1, NULL, NULL, NULL),
('b003', 'Mecánica de sólidos', 'egor popov', '2008-09-25', '3', 1, 1, 1, NULL, NULL, NULL),
('b004', 'Ingeniería Mecánica: Dinámica ', 'Russel Hibbeler', '1998-11-19', '3', 3, 1, 1, NULL, NULL, NULL),
('c001', 'The Everything Store', 'Brad Stone', '2022-10-06', '3', 1, 1, 1, NULL, NULL, NULL),
('c002', 'El libro de Steve Jobs: luces ', ' Brent Schlender y R', '2015-02-18', '2', 1, 1, 1, NULL, NULL, NULL),
('c003', ' Estructura e interpretación d', 'Harold Abelson, Gera', '1995-05-13', '2', 1, 1, 1, NULL, NULL, NULL),
('c004', 'Conceptos, técnicas y modelos ', ' Peter Van Roy y Sei', '2005-02-21', '3', 1, 1, 1, NULL, NULL, NULL),
('c005', 'Clean Code', 'Robert C. Martin', '2010-03-26', '3', 1, 1, 1, NULL, NULL, NULL),
('c006', 'c++ para pincipiantes', 'José Suarez', '1989-04-23', '3', 1, 1, 1, NULL, NULL, NULL),
('d001', ' Código QR Diseño de estructur', 'McCormac, Jack C.', '2013-07-05', '2', 2, 1, 1, NULL, NULL, NULL),
('d002', 'Manual del ingeniero civil. To', 'Frederick S. Merritt', '2009-01-31', '4', 2, 1, 1, NULL, NULL, NULL),
('d003', 'Diseño Estructural', 'Roberto Meli Piralla', '2015-06-26', '3', 2, 1, 1, NULL, NULL, NULL),
('e001', 'ELECTRONICA BASICA para INGENIEROS', 'Antonio Madrid Vicen', '2006-05-02', '4', 7, 1, 1, NULL, NULL, NULL);

--
-- Disparadores `libros`
--
DELIMITER $$
CREATE TRIGGER `A_respaldo_libro` AFTER INSERT ON `libros` FOR EACH ROW BEGIN
INSERT INTO respaldo_libros(cota, nombre_libro, autor, año_libro, n_ejemplar, carrera, stock, fecha_respaldo, id_usercreador) VALUES(new.cota, new.nombre_libro, new.autor, new.año_libro, new.n_ejemplar, new.carrera, new.stock, NOW(), new.id_userCreador);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `B_eliminar_libro` BEFORE UPDATE ON `libros` FOR EACH ROW BEGIN
IF NEW.status = 0 THEN
INSERT INTO eliminar_libro(cota, nombre_libro, auto, año_libro, n_ejemplar, carrera, id_userdeleted, stock, fecha_eliminar, hora_eliminar) VALUES(OLD.cota, OLD.nombre_libro, OLD.autor, OLD.año_libro, OLD.n_ejemplar, OLD.carrera, NEW.id_userDeleted, OLD.stock, CURRENT_DATE(), CURRENT_TIME());
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respaldo_entraga_libro`
--

CREATE TABLE `respaldo_entraga_libro` (
  `cota` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `hora_entrega` time DEFAULT NULL,
  `id_estudiante` int(11) DEFAULT NULL,
  `nom_est` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cedula` int(11) DEFAULT NULL,
  `id_usercreador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respaldo_inf_estudiante`
--

CREATE TABLE `respaldo_inf_estudiante` (
  `idestudiante` int(11) DEFAULT NULL,
  `cedula` int(10) DEFAULT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellido` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `carrera` int(11) DEFAULT NULL,
  `id_userCreador` int(11) DEFAULT NULL,
  `fehca_respaldo` date DEFAULT NULL,
  `hora_respaldo` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `respaldo_inf_estudiante`
--

INSERT INTO `respaldo_inf_estudiante` (`idestudiante`, `cedula`, `nombre`, `apellido`, `numero`, `carrera`, `id_userCreador`, `fehca_respaldo`, `hora_respaldo`) VALUES
(1, 28457797, 'Rafael Antonio', 'Maldonado Burgos', '4247190072', 1, 1, '2022-10-24', '2022-10-24'),
(2, 26934846, 'bertha margarita', 'Maldonado Burgos', '', 1, 1, '2022-10-24', '2022-10-24'),
(3, 29988297, 'shayer', 'bonilla', '4241597894', 1, 1, '2022-10-24', '2022-10-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respaldo_libros`
--

CREATE TABLE `respaldo_libros` (
  `cota` varchar(10) NOT NULL,
  `nombre_libro` varchar(30) NOT NULL,
  `autor` varchar(30) NOT NULL,
  `año_libro` varchar(12) NOT NULL,
  `n_ejemplar` varchar(10) NOT NULL,
  `carrera` int(11) NOT NULL,
  `stock` int(100) DEFAULT NULL,
  `fecha_respaldo` time DEFAULT NULL,
  `id_usercreador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `respaldo_libros`
--

INSERT INTO `respaldo_libros` (`cota`, `nombre_libro`, `autor`, `año_libro`, `n_ejemplar`, `carrera`, `stock`, `fecha_respaldo`, `id_usercreador`) VALUES
('c001', 'The Everything Store', 'Brad Stone', '2022-10-06', '3', 1, NULL, '22:36:24', 1),
('c002', 'El libro de Steve Jobs: luces ', ' Brent Schlender y R', '2015-02-18', '2', 1, NULL, '22:38:04', 1),
('c003', ' Estructura e interpretación d', 'Harold Abelson, Gera', '1995-05-13', '2', 1, NULL, '22:40:40', 1),
('c004', 'Conceptos, técnicas y modelos ', ' Peter Van Roy y Sei', '2005-02-21', '3', 1, NULL, '22:42:12', 1),
('c005', 'Clean Code', 'Robert C. Martin', '2010-03-26', '3', 1, NULL, '22:42:55', 1),
('c006', 'c++ para pincipiantes', 'José Suarez', '1989-04-23', '3', 1, NULL, '22:44:24', 1),
('b001', 'Mecanica para Ingenieros ESTAT', 'Russell C. Hibbeler', '2003-05-26', '4', 3, NULL, '22:46:08', 1),
('b002', 'Diseño en ingeniería mecánica ', 'Richard G. Budynas', '2003-06-14', '2', 3, NULL, '22:49:26', 1),
('b003', 'Mecánica de sólidos', 'egor popov', '2008-09-25', '3', 1, NULL, '22:50:46', 1),
('b004', 'Ingeniería Mecánica: Dinámica ', 'Russel Hibbeler', '1998-11-19', '3', 3, NULL, '22:52:54', 1),
('d001', ' Código QR Diseño de estructur', 'McCormac, Jack C.', '2013-07-05', '2', 2, NULL, '22:56:56', 1),
('d002', 'Manual del ingeniero civil. To', 'Frederick S. Merritt', '2009-01-31', '4', 2, NULL, '22:58:03', 1),
('d003', 'Diseño Estructural', 'Roberto Meli Piralla', '2015-06-26', '3', 2, NULL, '23:01:32', 1),
('a001', 'Analisis Basicos de Circuitos ', 'anonimo', '2009-06-23', '2', 5, NULL, '23:03:18', 1),
('a002', 'ELECTRONICA BASICA para INGENI', 'anonimo', '2013-02-26', '2', 5, NULL, '23:05:52', 1),
('e001', 'ELECTRONICA BASICA para INGENI', 'Antonio Madrid Vicen', '2006-05-02', '4', 7, NULL, '23:07:31', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respaldo_retiro_libro`
--

CREATE TABLE `respaldo_retiro_libro` (
  `id_libro` int(11) DEFAULT NULL,
  `cota` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_retiro` date DEFAULT NULL,
  `hora_retiro` time DEFAULT NULL,
  `id_estudiante` int(11) DEFAULT NULL,
  `nom_est` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cedula` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_usercreador` int(11) DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respaldo_usuario`
--

CREATE TABLE `respaldo_usuario` (
  `idusuario` int(11) DEFAULT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `correo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usuario` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `clave` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rol` int(11) DEFAULT NULL,
  `id_usercreador` int(11) DEFAULT NULL,
  `fecha_respaldo` date DEFAULT NULL,
  `hora_respaldo` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `respaldo_usuario`
--

INSERT INTO `respaldo_usuario` (`idusuario`, `nombre`, `correo`, `usuario`, `clave`, `rol`, `id_usercreador`, `fecha_respaldo`, `hora_respaldo`) VALUES
(1, 'nakary vivas', 'nakariv.iut@gmail.com', 'nakariv12', 'e10adc3949ba59abbe56e057f20f883e', 1, 1, '2022-10-24', '2022-10-24'),
(2, 'Rafael Antonio', 'ramb2786@gamil.com', 'rafamusic', 'e10adc3949ba59abbe56e057f20f883e', 1, 1, '2022-10-24', '2022-10-24'),
(3, 'bertha maldonado', 'bertha.maldonado@gmail.com', 'bertha', 'e10adc3949ba59abbe56e057f20f883e', 2, 1, '2022-10-24', '2022-10-24'),
(4, 'mario Dalessandro', 'mario.123@gmail.com', 'mario', 'e10adc3949ba59abbe56e057f20f883e', 2, 1, '2022-10-24', '2022-10-24'),
(5, 'shayer bonilla', 'shayer_boni@gmail.com', 'shayer', 'e10adc3949ba59abbe56e057f20f883e', 1, 1, '2022-10-24', '2022-10-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retiro_libros`
--

CREATE TABLE `retiro_libros` (
  `id` int(4) NOT NULL,
  `cota` varchar(15) NOT NULL,
  `fecha_retiro` date NOT NULL,
  `hora_retiro` time NOT NULL,
  `id_estudiante_rl` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cedula` int(10) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `id_userCreador` int(11) DEFAULT NULL,
  `id_userDeleted` int(11) DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Disparadores `retiro_libros`
--
DELIMITER $$
CREATE TRIGGER `A_retiro_libro` AFTER INSERT ON `retiro_libros` FOR EACH ROW BEGIN
INSERT INTO respaldo_retiro_libro(cota, fecha_retiro, hora_retiro, id_estudiante, nom_est, cedula, id_usercreador, fecha_entrega) VALUES(new.cota, new.fecha_retiro, new.hora_retiro, new.id_estudiante_rl, new.nombre, new.cedula, new.id_userCreador, new.fecha_entrega);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL,
  `rol` varchar(20) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `rol`) VALUES
(1, 'administrador'),
(2, 'colaborador'),
(3, 'lector');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion_login`
--

CREATE TABLE `sesion_login` (
  `id_sesion` int(11) NOT NULL,
  `id_user_login` int(11) DEFAULT NULL,
  `hora_user_login` time DEFAULT NULL,
  `fecha_user_login` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sesion_login`
--

INSERT INTO `sesion_login` (`id_sesion`, `id_user_login`, `hora_user_login`, `fecha_user_login`) VALUES
(1, 1, '23:24:43', '2022-10-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion_logout`
--

CREATE TABLE `sesion_logout` (
  `id_sesion_logout` int(11) NOT NULL,
  `id_user_logout` int(11) NOT NULL,
  `hora_logout` time DEFAULT NULL,
  `fecha_logout` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sesion_logout`
--

INSERT INTO `sesion_logout` (`id_sesion_logout`, `id_user_logout`, `hora_logout`, `fecha_logout`) VALUES
(1, 1, '23:24:36', '2022-10-24'),
(2, 1, '23:24:51', '2022-10-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `nombre_u` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `correo` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `usuario` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `clave` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `rol` int(11) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `id_userCreador` int(11) DEFAULT NULL,
  `id_userDeleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `nombre_u`, `correo`, `usuario`, `clave`, `rol`, `status`, `id_userCreador`, `id_userDeleted`) VALUES
(1, 'nakary vivas', 'nakariv.iut@gmail.com', 'nakariv12', 'e10adc3949ba59abbe56e057f20f883e', 1, 1, 1, NULL),
(2, 'Rafael Antonio', 'ramb2786@gamil.com', 'rafamusic', 'e10adc3949ba59abbe56e057f20f883e', 1, 1, 1, NULL),
(3, 'bertha maldonado', 'bertha.maldonado@gmail.com', 'bertha', 'e10adc3949ba59abbe56e057f20f883e', 2, 1, 1, NULL),
(4, 'mario Dalessandro', 'mario.123@gmail.com', 'mario', 'e10adc3949ba59abbe56e057f20f883e', 2, 1, 1, NULL),
(5, 'shayer bonilla', 'shayer_boni@gmail.com', 'shayer', 'e10adc3949ba59abbe56e057f20f883e', 1, 1, 1, NULL);

--
-- Disparadores `usuarios`
--
DELIMITER $$
CREATE TRIGGER `eliminar_usuario` BEFORE UPDATE ON `usuarios` FOR EACH ROW BEGIN
IF NEW.status = 0 THEN
INSERT INTO eliminar_usuario(id, nombre, correo,  usuario, clave, rol, id_userDeleted, fecha_eliminar, hora_eliminar) VALUES(OLD.idusuario, OLD.nombre_u, old.correo, OLD.usuario, old.clave, OLD.rol, NEW.id_userDeleted, CURRENT_DATE(), CURRENT_TIME());
END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `respaldo_usuario` AFTER INSERT ON `usuarios` FOR EACH ROW INSERT INTO respaldo_usuario(idusuario, nombre, correo, usuario, clave, rol, id_usercreador, fecha_respaldo, hora_respaldo)
VALUES (new.idusuario, new.nombre_u, new.correo, new.usuario, new.clave, new.rol, new.id_userCreador, CURRENT_DATE(), CURRENT_TIME())
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auditoria_estudiante`
--
ALTER TABLE `auditoria_estudiante`
  ADD PRIMARY KEY (`id_audi_est`),
  ADD KEY `agg_est_audi` (`agg_est_audi`,`lista_est_audi`,`edit_est_audi`,`delet_est_audi`),
  ADD KEY `lista_est_audi` (`lista_est_audi`),
  ADD KEY `edit_est_audi` (`edit_est_audi`),
  ADD KEY `delet_est_audi` (`delet_est_audi`);

--
-- Indices de la tabla `auditoria_libro`
--
ALTER TABLE `auditoria_libro`
  ADD PRIMARY KEY (`id_audi_libro`),
  ADD KEY `agg_libro_audi` (`agg_libro_audi`,`lista_libro_audi`,`pres_libro_audi`,`delet_libro_audi`,`edit_libro_audi`),
  ADD KEY `retor_libro_audi` (`retor_libro_audi`),
  ADD KEY `lista_libro_audi` (`lista_libro_audi`),
  ADD KEY `pres_libro_audi` (`pres_libro_audi`),
  ADD KEY `delet_libro_audi` (`delet_libro_audi`),
  ADD KEY `edit_libro_audi` (`edit_libro_audi`);

--
-- Indices de la tabla `auditoria_user`
--
ALTER TABLE `auditoria_user`
  ADD PRIMARY KEY (`id_audi_user`),
  ADD KEY `agg_user_audi` (`agg_user_audi`),
  ADD KEY `lista_user_audi` (`lista_user_audi`),
  ADD KEY `edit_user_audi` (`edit_user_audi`),
  ADD KEY `delet_user_audi` (`delet_user_audi`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`idcarrera`);

--
-- Indices de la tabla `eliminar_libro`
--
ALTER TABLE `eliminar_libro`
  ADD PRIMARY KEY (`id_eliminar`);

--
-- Indices de la tabla `entrega_libro`
--
ALTER TABLE `entrega_libro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cota` (`cota`),
  ADD KEY `id_userCreador` (`id_userCreador`,`id_userDeleted`),
  ADD KEY `id_userDeleted` (`id_userDeleted`),
  ADD KEY `id_estudiante_el` (`id_estudiante_el`);

--
-- Indices de la tabla `inf_estudiante`
--
ALTER TABLE `inf_estudiante`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cedula` (`cedula`),
  ADD KEY `carrera` (`carrera`),
  ADD KEY `id_userCreador` (`id_userCreador`,`id_userDeleted`),
  ADD KEY `id_userDeleted` (`id_userDeleted`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`cota`),
  ADD KEY `carrera` (`carrera`),
  ADD KEY `id_userCreador` (`id_userCreador`,`id_userDeleted`),
  ADD KEY `id_userDeleted` (`id_userDeleted`);

--
-- Indices de la tabla `retiro_libros`
--
ALTER TABLE `retiro_libros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cota` (`cota`),
  ADD KEY `id_userCreador` (`id_userCreador`,`id_userDeleted`),
  ADD KEY `id_estudiante_rl` (`id_estudiante_rl`),
  ADD KEY `id_userDeleted` (`id_userDeleted`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `sesion_login`
--
ALTER TABLE `sesion_login`
  ADD PRIMARY KEY (`id_sesion`),
  ADD KEY `id_user_login` (`id_user_login`);

--
-- Indices de la tabla `sesion_logout`
--
ALTER TABLE `sesion_logout`
  ADD PRIMARY KEY (`id_sesion_logout`),
  ADD KEY `id_user_logout` (`id_user_logout`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD KEY `id_userCreador` (`id_userCreador`,`id_userDeleted`),
  ADD KEY `id_userDeleted` (`id_userDeleted`),
  ADD KEY `rol` (`rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `auditoria_estudiante`
--
ALTER TABLE `auditoria_estudiante`
  MODIFY `id_audi_est` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `auditoria_libro`
--
ALTER TABLE `auditoria_libro`
  MODIFY `id_audi_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `auditoria_user`
--
ALTER TABLE `auditoria_user`
  MODIFY `id_audi_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `idcarrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `eliminar_libro`
--
ALTER TABLE `eliminar_libro`
  MODIFY `id_eliminar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `entrega_libro`
--
ALTER TABLE `entrega_libro`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inf_estudiante`
--
ALTER TABLE `inf_estudiante`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `retiro_libros`
--
ALTER TABLE `retiro_libros`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sesion_login`
--
ALTER TABLE `sesion_login`
  MODIFY `id_sesion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sesion_logout`
--
ALTER TABLE `sesion_logout`
  MODIFY `id_sesion_logout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auditoria_estudiante`
--
ALTER TABLE `auditoria_estudiante`
  ADD CONSTRAINT `auditoria_estudiante_ibfk_1` FOREIGN KEY (`agg_est_audi`) REFERENCES `usuarios` (`idusuario`),
  ADD CONSTRAINT `auditoria_estudiante_ibfk_2` FOREIGN KEY (`lista_est_audi`) REFERENCES `usuarios` (`idusuario`),
  ADD CONSTRAINT `auditoria_estudiante_ibfk_3` FOREIGN KEY (`edit_est_audi`) REFERENCES `usuarios` (`idusuario`),
  ADD CONSTRAINT `auditoria_estudiante_ibfk_4` FOREIGN KEY (`delet_est_audi`) REFERENCES `usuarios` (`idusuario`);

--
-- Filtros para la tabla `auditoria_libro`
--
ALTER TABLE `auditoria_libro`
  ADD CONSTRAINT `auditoria_libro_ibfk_1` FOREIGN KEY (`agg_libro_audi`) REFERENCES `usuarios` (`idusuario`),
  ADD CONSTRAINT `auditoria_libro_ibfk_2` FOREIGN KEY (`lista_libro_audi`) REFERENCES `usuarios` (`idusuario`),
  ADD CONSTRAINT `auditoria_libro_ibfk_3` FOREIGN KEY (`pres_libro_audi`) REFERENCES `usuarios` (`idusuario`),
  ADD CONSTRAINT `auditoria_libro_ibfk_4` FOREIGN KEY (`delet_libro_audi`) REFERENCES `usuarios` (`idusuario`),
  ADD CONSTRAINT `auditoria_libro_ibfk_5` FOREIGN KEY (`edit_libro_audi`) REFERENCES `usuarios` (`idusuario`),
  ADD CONSTRAINT `auditoria_libro_ibfk_6` FOREIGN KEY (`retor_libro_audi`) REFERENCES `usuarios` (`idusuario`);

--
-- Filtros para la tabla `auditoria_user`
--
ALTER TABLE `auditoria_user`
  ADD CONSTRAINT `auditoria_user_ibfk_1` FOREIGN KEY (`agg_user_audi`) REFERENCES `usuarios` (`idusuario`),
  ADD CONSTRAINT `auditoria_user_ibfk_2` FOREIGN KEY (`lista_user_audi`) REFERENCES `usuarios` (`idusuario`),
  ADD CONSTRAINT `auditoria_user_ibfk_3` FOREIGN KEY (`edit_user_audi`) REFERENCES `usuarios` (`idusuario`),
  ADD CONSTRAINT `auditoria_user_ibfk_4` FOREIGN KEY (`delet_user_audi`) REFERENCES `usuarios` (`idusuario`);

--
-- Filtros para la tabla `entrega_libro`
--
ALTER TABLE `entrega_libro`
  ADD CONSTRAINT `entrega_libro_ibfk_1` FOREIGN KEY (`cota`) REFERENCES `libros` (`cota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `entrega_libro_ibfk_2` FOREIGN KEY (`id_userCreador`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `entrega_libro_ibfk_3` FOREIGN KEY (`id_userDeleted`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `entrega_libro_ibfk_4` FOREIGN KEY (`id_estudiante_el`) REFERENCES `inf_estudiante` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inf_estudiante`
--
ALTER TABLE `inf_estudiante`
  ADD CONSTRAINT `inf_estudiante_ibfk_1` FOREIGN KEY (`carrera`) REFERENCES `carrera` (`idcarrera`),
  ADD CONSTRAINT `inf_estudiante_ibfk_2` FOREIGN KEY (`id_userCreador`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inf_estudiante_ibfk_3` FOREIGN KEY (`id_userDeleted`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`carrera`) REFERENCES `carrera` (`idcarrera`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `libros_ibfk_2` FOREIGN KEY (`id_userCreador`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `libros_ibfk_3` FOREIGN KEY (`id_userDeleted`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `retiro_libros`
--
ALTER TABLE `retiro_libros`
  ADD CONSTRAINT `retiro_libros_ibfk_1` FOREIGN KEY (`cota`) REFERENCES `libros` (`cota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `retiro_libros_ibfk_2` FOREIGN KEY (`id_estudiante_rl`) REFERENCES `inf_estudiante` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `retiro_libros_ibfk_3` FOREIGN KEY (`id_userCreador`) REFERENCES `usuarios` (`idusuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `retiro_libros_ibfk_4` FOREIGN KEY (`id_userDeleted`) REFERENCES `usuarios` (`idusuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `sesion_login`
--
ALTER TABLE `sesion_login`
  ADD CONSTRAINT `sesion_login_ibfk_1` FOREIGN KEY (`id_user_login`) REFERENCES `usuarios` (`idusuario`);

--
-- Filtros para la tabla `sesion_logout`
--
ALTER TABLE `sesion_logout`
  ADD CONSTRAINT `sesion_logout_ibfk_1` FOREIGN KEY (`id_user_logout`) REFERENCES `usuarios` (`idusuario`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`id_userCreador`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`id_userDeleted`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
