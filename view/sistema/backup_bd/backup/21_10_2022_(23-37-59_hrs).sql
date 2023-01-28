SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS bd_biblioteca;

USE bd_biblioteca;

DROP TABLE IF EXISTS auditoria_estudiante;

CREATE TABLE `auditoria_estudiante` (
  `id_audi_est` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_audi_est` date DEFAULT NULL,
  `hora_audi_est` time DEFAULT NULL,
  `agg_est_audi` int(11) DEFAULT NULL,
  `lista_est_audi` int(11) DEFAULT NULL,
  `edit_est_audi` int(11) DEFAULT NULL,
  `delet_est_audi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_audi_est`),
  KEY `agg_est_audi` (`agg_est_audi`,`lista_est_audi`,`edit_est_audi`,`delet_est_audi`),
  KEY `lista_est_audi` (`lista_est_audi`),
  KEY `edit_est_audi` (`edit_est_audi`),
  KEY `delet_est_audi` (`delet_est_audi`),
  CONSTRAINT `auditoria_estudiante_ibfk_1` FOREIGN KEY (`agg_est_audi`) REFERENCES `usuarios` (`idusuario`),
  CONSTRAINT `auditoria_estudiante_ibfk_2` FOREIGN KEY (`lista_est_audi`) REFERENCES `usuarios` (`idusuario`),
  CONSTRAINT `auditoria_estudiante_ibfk_3` FOREIGN KEY (`edit_est_audi`) REFERENCES `usuarios` (`idusuario`),
  CONSTRAINT `auditoria_estudiante_ibfk_4` FOREIGN KEY (`delet_est_audi`) REFERENCES `usuarios` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

INSERT INTO auditoria_estudiante VALUES("1","2022-09-28","11:53:53","1","","","");
INSERT INTO auditoria_estudiante VALUES("2","2022-09-28","11:54:03","","1","","");
INSERT INTO auditoria_estudiante VALUES("3","2022-09-28","11:54:11","","","1","");
INSERT INTO auditoria_estudiante VALUES("4","2022-09-28","11:54:18","","1","","");
INSERT INTO auditoria_estudiante VALUES("5","2022-09-28","11:54:20","","","","1");
INSERT INTO auditoria_estudiante VALUES("6","2022-09-28","12:13:51","","","","1");
INSERT INTO auditoria_estudiante VALUES("7","2022-10-11","21:10:28","","1","","");
INSERT INTO auditoria_estudiante VALUES("8","2022-10-20","21:25:11","","1","","");
INSERT INTO auditoria_estudiante VALUES("9","2022-10-20","21:40:43","","1","","");



DROP TABLE IF EXISTS auditoria_libro;

CREATE TABLE `auditoria_libro` (
  `id_audi_libro` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_audi_libro` date DEFAULT NULL,
  `hora_audi_libro` time DEFAULT NULL,
  `agg_libro_audi` int(11) DEFAULT NULL,
  `lista_libro_audi` int(11) DEFAULT NULL,
  `pres_libro_audi` int(11) DEFAULT NULL,
  `delet_libro_audi` int(11) DEFAULT NULL,
  `edit_libro_audi` int(11) DEFAULT NULL,
  `retor_libro_audi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_audi_libro`),
  KEY `agg_libro_audi` (`agg_libro_audi`,`lista_libro_audi`,`pres_libro_audi`,`delet_libro_audi`,`edit_libro_audi`),
  KEY `retor_libro_audi` (`retor_libro_audi`),
  KEY `lista_libro_audi` (`lista_libro_audi`),
  KEY `pres_libro_audi` (`pres_libro_audi`),
  KEY `delet_libro_audi` (`delet_libro_audi`),
  KEY `edit_libro_audi` (`edit_libro_audi`),
  CONSTRAINT `auditoria_libro_ibfk_1` FOREIGN KEY (`agg_libro_audi`) REFERENCES `usuarios` (`idusuario`),
  CONSTRAINT `auditoria_libro_ibfk_2` FOREIGN KEY (`lista_libro_audi`) REFERENCES `usuarios` (`idusuario`),
  CONSTRAINT `auditoria_libro_ibfk_3` FOREIGN KEY (`pres_libro_audi`) REFERENCES `usuarios` (`idusuario`),
  CONSTRAINT `auditoria_libro_ibfk_4` FOREIGN KEY (`delet_libro_audi`) REFERENCES `usuarios` (`idusuario`),
  CONSTRAINT `auditoria_libro_ibfk_5` FOREIGN KEY (`edit_libro_audi`) REFERENCES `usuarios` (`idusuario`),
  CONSTRAINT `auditoria_libro_ibfk_6` FOREIGN KEY (`retor_libro_audi`) REFERENCES `usuarios` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8mb4;

INSERT INTO auditoria_libro VALUES("1","2022-09-28","12:27:39","1","","","","","");
INSERT INTO auditoria_libro VALUES("2","2022-09-28","12:28:18","","1","","","","");
INSERT INTO auditoria_libro VALUES("3","2022-09-28","12:28:28","","","","1","","");
INSERT INTO auditoria_libro VALUES("4","2022-09-28","12:28:40","","1","","","","");
INSERT INTO auditoria_libro VALUES("5","2022-09-28","12:28:41","","","1","","","");
INSERT INTO auditoria_libro VALUES("6","2022-09-28","12:28:49","","1","","","","");
INSERT INTO auditoria_libro VALUES("7","2022-09-28","12:28:50","","","","","1","");
INSERT INTO auditoria_libro VALUES("8","2022-09-28","12:28:59","","","","","","1");
INSERT INTO auditoria_libro VALUES("9","2022-09-28","14:33:35","","","","","","1");
INSERT INTO auditoria_libro VALUES("10","2022-09-28","14:33:36","","","","","1","");
INSERT INTO auditoria_libro VALUES("11","2022-09-28","14:33:37","","1","","","","");
INSERT INTO auditoria_libro VALUES("12","2022-09-28","14:33:37","","","","1","","");
INSERT INTO auditoria_libro VALUES("13","2022-09-28","14:33:38","","1","","","","");
INSERT INTO auditoria_libro VALUES("14","2022-09-29","22:36:34","1","","","","","");
INSERT INTO auditoria_libro VALUES("15","2022-10-11","18:23:48","1","","","","","");
INSERT INTO auditoria_libro VALUES("16","2022-10-11","18:23:53","","1","","","","");
INSERT INTO auditoria_libro VALUES("17","2022-10-11","18:23:59","1","","","","","");
INSERT INTO auditoria_libro VALUES("18","2022-10-11","18:24:01","","1","","","","");
INSERT INTO auditoria_libro VALUES("19","2022-10-11","18:51:47","","1","","","","");
INSERT INTO auditoria_libro VALUES("20","2022-10-11","18:51:49","1","","","","","");
INSERT INTO auditoria_libro VALUES("21","2022-10-11","21:10:41","1","","","","","");
INSERT INTO auditoria_libro VALUES("22","2022-10-11","21:10:44","","1","","","","");
INSERT INTO auditoria_libro VALUES("23","2022-10-11","21:11:33","","1","","","","");
INSERT INTO auditoria_libro VALUES("24","2022-10-11","21:11:35","1","","","","","");
INSERT INTO auditoria_libro VALUES("25","2022-10-11","21:13:29","","1","","","","");
INSERT INTO auditoria_libro VALUES("26","2022-10-11","21:13:39","1","","","","","");
INSERT INTO auditoria_libro VALUES("27","2022-10-12","12:44:12","1","","","","","");
INSERT INTO auditoria_libro VALUES("28","2022-10-18","14:26:57","1","","","","","");
INSERT INTO auditoria_libro VALUES("29","2022-10-18","14:27:22","1","","","","","");
INSERT INTO auditoria_libro VALUES("30","2022-10-20","19:44:42","","1","","","","");
INSERT INTO auditoria_libro VALUES("31","2022-10-20","19:44:45","","","1","","","");
INSERT INTO auditoria_libro VALUES("32","2022-10-20","19:44:57","","","1","","","");
INSERT INTO auditoria_libro VALUES("33","2022-10-20","19:44:57","","1","","","","");
INSERT INTO auditoria_libro VALUES("34","2022-10-20","19:46:17","","1","","","","");
INSERT INTO auditoria_libro VALUES("35","2022-10-20","21:14:41","","1","","","","");
INSERT INTO auditoria_libro VALUES("36","2022-10-20","21:20:22","","","1","","","");
INSERT INTO auditoria_libro VALUES("37","2022-10-20","21:20:27","","","1","","","");
INSERT INTO auditoria_libro VALUES("38","2022-10-20","21:20:27","","1","","","","");
INSERT INTO auditoria_libro VALUES("39","2022-10-20","21:23:37","","","1","","","");
INSERT INTO auditoria_libro VALUES("40","2022-10-20","21:23:39","","","1","","","");
INSERT INTO auditoria_libro VALUES("41","2022-10-20","21:23:39","","1","","","","");
INSERT INTO auditoria_libro VALUES("42","2022-10-20","21:23:40","","","1","","","");
INSERT INTO auditoria_libro VALUES("43","2022-10-20","21:23:47","","","1","","","");
INSERT INTO auditoria_libro VALUES("44","2022-10-20","21:23:47","","1","","","","");
INSERT INTO auditoria_libro VALUES("45","2022-10-20","21:30:26","","1","","","","");
INSERT INTO auditoria_libro VALUES("46","2022-10-20","21:39:54","","","","","","1");
INSERT INTO auditoria_libro VALUES("47","2022-10-20","21:40:00","","","","","","1");
INSERT INTO auditoria_libro VALUES("48","2022-10-20","21:40:03","","","","","","1");
INSERT INTO auditoria_libro VALUES("49","2022-10-20","21:40:03","","1","","","","");
INSERT INTO auditoria_libro VALUES("50","2022-10-20","21:40:05","","","","","","1");
INSERT INTO auditoria_libro VALUES("51","2022-10-20","21:40:09","","","","","","1");
INSERT INTO auditoria_libro VALUES("52","2022-10-20","21:40:31","","","","","","1");
INSERT INTO auditoria_libro VALUES("53","2022-10-20","21:40:40","","","","","","1");
INSERT INTO auditoria_libro VALUES("54","2022-10-20","21:40:41","","1","","","","");
INSERT INTO auditoria_libro VALUES("55","2022-10-20","21:40:50","","","","","","1");
INSERT INTO auditoria_libro VALUES("56","2022-10-20","21:40:54","","","","","","1");
INSERT INTO auditoria_libro VALUES("57","2022-10-20","21:40:59","","","","","","1");
INSERT INTO auditoria_libro VALUES("58","2022-10-20","21:40:59","","1","","","","");
INSERT INTO auditoria_libro VALUES("59","2022-10-20","21:41:08","","","","","","1");
INSERT INTO auditoria_libro VALUES("60","2022-10-20","21:41:12","","","","","","1");
INSERT INTO auditoria_libro VALUES("61","2022-10-20","21:41:13","","1","","","","");
INSERT INTO auditoria_libro VALUES("62","2022-10-20","21:41:22","","","","","","1");
INSERT INTO auditoria_libro VALUES("63","2022-10-20","21:41:26","","","","","","1");
INSERT INTO auditoria_libro VALUES("64","2022-10-20","21:41:27","","1","","","","");
INSERT INTO auditoria_libro VALUES("65","2022-10-20","21:41:38","","","","","","1");
INSERT INTO auditoria_libro VALUES("66","2022-10-20","21:41:42","","","","","","1");
INSERT INTO auditoria_libro VALUES("67","2022-10-20","21:41:43","","1","","","","");
INSERT INTO auditoria_libro VALUES("68","2022-10-20","21:41:52","","","","","","1");
INSERT INTO auditoria_libro VALUES("69","2022-10-20","21:41:57","","","","","","1");
INSERT INTO auditoria_libro VALUES("70","2022-10-20","21:41:57","","1","","","","");
INSERT INTO auditoria_libro VALUES("71","2022-10-20","21:42:12","","","","","","1");
INSERT INTO auditoria_libro VALUES("72","2022-10-20","21:42:15","","","","","","1");
INSERT INTO auditoria_libro VALUES("73","2022-10-20","21:42:15","","1","","","","");
INSERT INTO auditoria_libro VALUES("74","2022-10-20","21:42:27","","","","","","1");
INSERT INTO auditoria_libro VALUES("75","2022-10-20","21:42:31","","","","","","1");
INSERT INTO auditoria_libro VALUES("76","2022-10-20","21:42:31","","1","","","","");
INSERT INTO auditoria_libro VALUES("77","2022-10-20","21:42:40","","","","","","1");
INSERT INTO auditoria_libro VALUES("78","2022-10-20","21:42:43","","","","","","1");
INSERT INTO auditoria_libro VALUES("79","2022-10-20","21:42:43","","1","","","","");
INSERT INTO auditoria_libro VALUES("80","2022-10-20","21:42:44","","1","","","","");
INSERT INTO auditoria_libro VALUES("81","2022-10-20","21:42:47","","1","","","","");
INSERT INTO auditoria_libro VALUES("82","2022-10-20","21:42:49","","1","","","","");
INSERT INTO auditoria_libro VALUES("83","2022-10-20","21:42:53","","","1","","","");
INSERT INTO auditoria_libro VALUES("84","2022-10-20","21:43:03","","","1","","","");
INSERT INTO auditoria_libro VALUES("85","2022-10-20","21:43:03","","1","","","","");
INSERT INTO auditoria_libro VALUES("86","2022-10-20","21:44:05","","","","","","1");
INSERT INTO auditoria_libro VALUES("87","2022-10-20","21:44:09","","","","","","1");
INSERT INTO auditoria_libro VALUES("88","2022-10-20","21:44:09","","1","","","","");
INSERT INTO auditoria_libro VALUES("89","2022-10-20","22:13:21","","1","","","","");
INSERT INTO auditoria_libro VALUES("90","2022-10-20","22:13:22","","","1","","","");
INSERT INTO auditoria_libro VALUES("91","2022-10-20","22:13:29","","","1","","","");
INSERT INTO auditoria_libro VALUES("92","2022-10-20","22:13:29","","1","","","","");
INSERT INTO auditoria_libro VALUES("93","2022-10-20","22:42:23","","1","","","","");
INSERT INTO auditoria_libro VALUES("94","2022-10-20","23:54:50","","1","","","","");
INSERT INTO auditoria_libro VALUES("95","2022-10-20","23:54:52","","1","","","","");
INSERT INTO auditoria_libro VALUES("96","2022-10-20","23:54:55","","1","","","","");
INSERT INTO auditoria_libro VALUES("97","2022-10-21","00:02:28","","","","","","1");



DROP TABLE IF EXISTS auditoria_user;

CREATE TABLE `auditoria_user` (
  `id_audi_user` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_user_audi` date DEFAULT NULL,
  `hora_user_audi` time DEFAULT NULL,
  `agg_user_audi` int(11) DEFAULT NULL,
  `lista_user_audi` int(11) DEFAULT NULL,
  `edit_user_audi` int(11) DEFAULT NULL,
  `delet_user_audi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_audi_user`),
  KEY `agg_user_audi` (`agg_user_audi`),
  KEY `lista_user_audi` (`lista_user_audi`),
  KEY `edit_user_audi` (`edit_user_audi`),
  KEY `delet_user_audi` (`delet_user_audi`),
  CONSTRAINT `auditoria_user_ibfk_1` FOREIGN KEY (`agg_user_audi`) REFERENCES `usuarios` (`idusuario`),
  CONSTRAINT `auditoria_user_ibfk_2` FOREIGN KEY (`lista_user_audi`) REFERENCES `usuarios` (`idusuario`),
  CONSTRAINT `auditoria_user_ibfk_3` FOREIGN KEY (`edit_user_audi`) REFERENCES `usuarios` (`idusuario`),
  CONSTRAINT `auditoria_user_ibfk_4` FOREIGN KEY (`delet_user_audi`) REFERENCES `usuarios` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4;

INSERT INTO auditoria_user VALUES("1","2022-09-27","18:15:01","1","","","");
INSERT INTO auditoria_user VALUES("2","2022-09-27","18:16:15","","1","","");
INSERT INTO auditoria_user VALUES("3","2022-09-27","18:17:38","","","1","");
INSERT INTO auditoria_user VALUES("4","2022-09-27","18:17:50","","1","","");
INSERT INTO auditoria_user VALUES("5","2022-09-27","18:17:56","","","","1");
INSERT INTO auditoria_user VALUES("6","2022-09-27","18:18:05","","1","","");
INSERT INTO auditoria_user VALUES("7","2022-09-27","18:18:08","","1","","");
INSERT INTO auditoria_user VALUES("8","2022-09-28","11:53:43","","1","","");
INSERT INTO auditoria_user VALUES("9","2022-09-28","11:53:49","","1","","");
INSERT INTO auditoria_user VALUES("10","2022-09-29","22:36:43","1","","","");
INSERT INTO auditoria_user VALUES("11","2022-10-20","18:51:35","1","","","");
INSERT INTO auditoria_user VALUES("12","2022-10-20","18:51:36","1","","","");
INSERT INTO auditoria_user VALUES("13","2022-10-20","18:51:38","1","","","");
INSERT INTO auditoria_user VALUES("14","2022-10-20","18:51:39","1","","","");
INSERT INTO auditoria_user VALUES("15","2022-10-20","18:51:40","1","","","");
INSERT INTO auditoria_user VALUES("16","2022-10-20","18:51:41","1","","","");
INSERT INTO auditoria_user VALUES("17","2022-10-20","18:51:42","1","","","");
INSERT INTO auditoria_user VALUES("18","2022-10-20","18:51:44","1","","","");
INSERT INTO auditoria_user VALUES("19","2022-10-20","18:51:45","1","","","");
INSERT INTO auditoria_user VALUES("20","2022-10-21","00:02:23","1","","","");
INSERT INTO auditoria_user VALUES("21","2022-10-21","00:02:24","","1","","");
INSERT INTO auditoria_user VALUES("22","2022-10-21","09:33:04","","1","","");
INSERT INTO auditoria_user VALUES("23","2022-10-21","09:33:06","","1","","");
INSERT INTO auditoria_user VALUES("24","2022-10-21","09:33:09","","1","","");
INSERT INTO auditoria_user VALUES("25","2022-10-21","09:34:49","","1","","");
INSERT INTO auditoria_user VALUES("26","2022-10-21","10:46:14","","1","","");
INSERT INTO auditoria_user VALUES("27","2022-10-21","14:40:06","","1","","");
INSERT INTO auditoria_user VALUES("28","2022-10-21","15:32:34","","1","","");
INSERT INTO auditoria_user VALUES("29","2022-10-21","15:32:50","","1","","");
INSERT INTO auditoria_user VALUES("30","2022-10-21","15:32:51","","1","","");
INSERT INTO auditoria_user VALUES("31","2022-10-21","15:32:52","","1","","");
INSERT INTO auditoria_user VALUES("32","2022-10-21","15:32:53","","1","","");
INSERT INTO auditoria_user VALUES("33","2022-10-21","15:32:54","","1","","");
INSERT INTO auditoria_user VALUES("34","2022-10-21","15:32:56","","1","","");
INSERT INTO auditoria_user VALUES("35","2022-10-21","15:32:57","","1","","");
INSERT INTO auditoria_user VALUES("36","2022-10-21","15:32:58","","1","","");
INSERT INTO auditoria_user VALUES("37","2022-10-21","16:04:11","","1","","");
INSERT INTO auditoria_user VALUES("38","2022-10-21","16:04:15","","1","","");
INSERT INTO auditoria_user VALUES("39","2022-10-21","16:04:34","","1","","");
INSERT INTO auditoria_user VALUES("40","2022-10-21","16:04:55","","","","1");
INSERT INTO auditoria_user VALUES("41","2022-10-21","16:06:24","","1","","");
INSERT INTO auditoria_user VALUES("42","2022-10-21","16:06:29","","","","1");
INSERT INTO auditoria_user VALUES("43","2022-10-21","16:06:32","","","","1");
INSERT INTO auditoria_user VALUES("44","2022-10-21","16:06:32","","1","","");
INSERT INTO auditoria_user VALUES("45","2022-10-21","16:09:14","","","","1");



DROP TABLE IF EXISTS carrera;

CREATE TABLE `carrera` (
  `idcarrera` int(11) NOT NULL AUTO_INCREMENT,
  `nom_carrera` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idcarrera`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO carrera VALUES("1","PNF INFORMATICA");
INSERT INTO carrera VALUES("2","PNF CONSTRUCCION CIVIL");
INSERT INTO carrera VALUES("3","PNF MECANICA");
INSERT INTO carrera VALUES("4","PNF PROSESAMIENTO DE ALIMENTOS");
INSERT INTO carrera VALUES("5","PNF ELECTRONICA");
INSERT INTO carrera VALUES("6","PNF ELECTRICIDAD");
INSERT INTO carrera VALUES("7","PNF AGROALIMENTACION");



DROP TABLE IF EXISTS eliminar_inf_estudiante;

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

INSERT INTO eliminar_inf_estudiante VALUES("3","23511075","marga","burgos","04269733099","7","1","2022-07-17","17:01:01");
INSERT INTO eliminar_inf_estudiante VALUES("2","26934846","bertha","maldonado","04164771198","1","1","2022-07-27","03:29:55");
INSERT INTO eliminar_inf_estudiante VALUES("1","28457797","Rafael Antonio","Maldonado Burgos","4247190072","1","1","2022-10-21","17:32:25");



DROP TABLE IF EXISTS eliminar_libro;

CREATE TABLE `eliminar_libro` (
  `id_eliminar` int(11) NOT NULL AUTO_INCREMENT,
  `cota` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombre_libro` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auto` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `año_libro` date DEFAULT NULL,
  `n_ejemplar` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `carrera` int(11) DEFAULT NULL,
  `id_userdeleted` int(11) DEFAULT NULL,
  `stock` int(100) DEFAULT NULL,
  `fecha_eliminar` date DEFAULT NULL,
  `hora_eliminar` time DEFAULT NULL,
  PRIMARY KEY (`id_eliminar`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO eliminar_libro VALUES("1","c123","java","mario","2022-06-25","1","1","1","","2022-07-15","20:12:58");
INSERT INTO eliminar_libro VALUES("2","c123","java","mario","2022-06-25","1","1","1","","2022-07-15","20:13:52");
INSERT INTO eliminar_libro VALUES("3","c13","matematica","mario ","2020-06-23","2","1","1","","2022-07-27","03:23:52");
INSERT INTO eliminar_libro VALUES("4","c0033232","electricidad 1","mario castañeda","2022-10-13","5","6","1","","2022-10-19","14:28:57");
INSERT INTO eliminar_libro VALUES("5","c123","java","mario ","2022-06-25","0","1","1","","2022-10-19","14:30:45");
INSERT INTO eliminar_libro VALUES("6","c1b23c","inteligencia artificial basica","j.s","2022-10-05","4","1","1","","2022-10-19","14:31:08");
INSERT INTO eliminar_libro VALUES("7","c003","java","ulioanof","2022-05-25","3","1","1","","2022-10-19","14:32:15");
INSERT INTO eliminar_libro VALUES("8","c001","c++","mariana suarez","2005-07-24","2","1","","","2022-10-21","22:40:05");



DROP TABLE IF EXISTS eliminar_usuario;

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

INSERT INTO eliminar_usuario VALUES("2","mario Dalessandro","mario.123@gmail.com","mario","1eb6cd273513","2","1","1","2022-07-15","17:19:02");
INSERT INTO eliminar_usuario VALUES("28","prueba","pedro@gmail.com","prueba","e10adc3949ba","3","1","1","2022-07-27","03:36:11");
INSERT INTO eliminar_usuario VALUES("2","mario Dalessandro Z","mario.123@gmail.com","mariodz80","e10adc3949ba","1","1","1","2022-10-21","13:58:03");



DROP TABLE IF EXISTS entrega_libro;

CREATE TABLE `entrega_libro` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `cota` varchar(15) NOT NULL,
  `fecha_entrega` date NOT NULL,
  `hora_entrega` time DEFAULT NULL,
  `id_estudiante_el` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cedula` int(11) NOT NULL,
  `id_userCreador` int(11) DEFAULT NULL,
  `id_userDeleted` int(11) DEFAULT NULL,
  `status` int(2) DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `cota` (`cota`),
  KEY `id_userCreador` (`id_userCreador`,`id_userDeleted`),
  KEY `id_userDeleted` (`id_userDeleted`),
  KEY `id_estudiante_el` (`id_estudiante_el`),
  CONSTRAINT `entrega_libro_ibfk_1` FOREIGN KEY (`cota`) REFERENCES `libros` (`cota`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `entrega_libro_ibfk_2` FOREIGN KEY (`id_userCreador`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `entrega_libro_ibfk_3` FOREIGN KEY (`id_userDeleted`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `entrega_libro_ibfk_4` FOREIGN KEY (`id_estudiante_el`) REFERENCES `inf_estudiante` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

INSERT INTO entrega_libro VALUES("1","c123","2022-06-26","","1","Rafael Antonio","28457797","1","","1");
INSERT INTO entrega_libro VALUES("2","c123","2022-06-26","","1","Rafael Antonio","28457797","1","","1");
INSERT INTO entrega_libro VALUES("10","c123","2022-07-17","18:12:13","1","Rafael Antonio","28457797","1","","1");
INSERT INTO entrega_libro VALUES("11","c123","2022-07-17","18:26:34","1","Rafael Antonio","28457797","1","","1");
INSERT INTO entrega_libro VALUES("12","c123","2022-07-17","18:26:41","1","Rafael Antonio","28457797","1","","1");
INSERT INTO entrega_libro VALUES("13","c001","2022-07-20","11:16:00","1","Rafael Antonio","28457797","1","","1");
INSERT INTO entrega_libro VALUES("14","c002","2022-07-20","11:16:33","1","Rafael Antonio","28457797","1","","1");
INSERT INTO entrega_libro VALUES("15","c002","2022-07-20","11:16:57","3","marga","23511075","1","","1");
INSERT INTO entrega_libro VALUES("16","c123","2022-07-20","11:17:27","3","marga","23511075","1","","1");
INSERT INTO entrega_libro VALUES("17","c123","2022-07-20","11:17:39","2","bertha","26934846","1","","1");
INSERT INTO entrega_libro VALUES("18","c001","2022-07-20","11:18:06","1","Rafael Antonio","28457797","1","","1");
INSERT INTO entrega_libro VALUES("19","c001","2022-07-20","22:34:33","1","Rafael Antonio","28457797","1","","1");
INSERT INTO entrega_libro VALUES("20","c002","2022-07-20","22:35:13","1","Rafael Antonio","28457797","1","","1");
INSERT INTO entrega_libro VALUES("21","c123","2022-07-20","22:36:29","2","bertha","26934846","1","","1");
INSERT INTO entrega_libro VALUES("22","c123","2022-07-20","22:36:47","3","marga","23511075","1","","1");
INSERT INTO entrega_libro VALUES("23","c123","2022-07-20","22:37:27","1","Rafael Antonio","28457797","1","","1");
INSERT INTO entrega_libro VALUES("24","c001","2022-07-20","22:51:19","1","Rafael Antonio","28457797","1","","1");
INSERT INTO entrega_libro VALUES("25","c001","2022-07-20","22:51:57","1","Rafael Antonio","28457797","1","","1");
INSERT INTO entrega_libro VALUES("26","c123","2022-07-21","13:04:18","1","Rafael Antonio","28457797","1","","1");
INSERT INTO entrega_libro VALUES("27","c001","2022-07-27","00:21:51","1","Rafael Antonio","28457797","1","","1");
INSERT INTO entrega_libro VALUES("28","c003","2022-07-27","09:10:20","1","Rafael Antonio","28457797","1","","1");
INSERT INTO entrega_libro VALUES("29","c123","2022-10-20","21:40:03","1","Rafael Antonio","28457797","1","","1");
INSERT INTO entrega_libro VALUES("30","c123","2022-10-20","21:40:41","2","bertha","26934846","1","","1");
INSERT INTO entrega_libro VALUES("31","c002","2022-10-20","21:40:59","3","marga","23511075","1","","1");
INSERT INTO entrega_libro VALUES("32","c001","2022-10-20","21:41:12","2","bertha","26934846","1","","1");
INSERT INTO entrega_libro VALUES("33","c001","2022-10-20","21:41:26","3","marga","23511075","1","","1");
INSERT INTO entrega_libro VALUES("34","c123","2022-10-20","21:41:43","3","marga","23511075","1","","1");
INSERT INTO entrega_libro VALUES("35","c001","2022-10-20","21:41:57","3","mario","23511075","1","","1");
INSERT INTO entrega_libro VALUES("36","c0033232","2022-10-20","21:42:15","1","Rafael Antonio","28457797","1","","1");
INSERT INTO entrega_libro VALUES("37","c0033232","2022-10-20","21:42:31","1","Rafael Antonio","28457797","1","","1");
INSERT INTO entrega_libro VALUES("38","c1b23c","2022-10-20","21:42:43","1","Rafael Antonio","28457797","1","","1");
INSERT INTO entrega_libro VALUES("39","c001","2022-10-20","21:44:09","1","Rafael Antonio","28457797","1","","1");
INSERT INTO entrega_libro VALUES("40","c001","2022-10-20","22:38:09","1","Rafael Antonio","28457797","1","","1");
INSERT INTO entrega_libro VALUES("41","c001","2022-10-20","22:38:39","1","Rafael Antonio","28457797","1","","1");
INSERT INTO entrega_libro VALUES("42","c001","2022-10-21","23:34:04","1","Rafael Antonio","28457797","1","","1");
INSERT INTO entrega_libro VALUES("43","c001","2022-10-21","23:34:35","1","Rafael Antonio","28457797","1","","1");



DROP TABLE IF EXISTS inf_estudiante;

CREATE TABLE `inf_estudiante` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `cedula` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `numero` varchar(15) NOT NULL,
  `carrera` int(11) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `id_userCreador` int(11) DEFAULT NULL,
  `id_userDeleted` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cedula` (`cedula`),
  KEY `carrera` (`carrera`),
  KEY `id_userCreador` (`id_userCreador`,`id_userDeleted`),
  KEY `id_userDeleted` (`id_userDeleted`),
  CONSTRAINT `inf_estudiante_ibfk_1` FOREIGN KEY (`carrera`) REFERENCES `carrera` (`idcarrera`),
  CONSTRAINT `inf_estudiante_ibfk_2` FOREIGN KEY (`id_userCreador`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `inf_estudiante_ibfk_3` FOREIGN KEY (`id_userDeleted`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

INSERT INTO inf_estudiante VALUES("1","28457797","Rafael Antonio","Maldonado Burgos","4247190072","1","1","1","1");
INSERT INTO inf_estudiante VALUES("2","26934846","bertha","maldonado","04164771198","1","1","1","1");
INSERT INTO inf_estudiante VALUES("3","27239209","mario a","Dalessandro","04247522101","1","1","1","1");
INSERT INTO inf_estudiante VALUES("7","29988297","shayer","bpnilla","04247012173","1","1","1","");
INSERT INTO inf_estudiante VALUES("8","23546897","jose ","manuel","25646865465","3","1","1","");
INSERT INTO inf_estudiante VALUES("9","28457735","miguel","escalante","4247190072","1","1","1","");



DROP TABLE IF EXISTS libros;

CREATE TABLE `libros` (
  `cota` varchar(20) NOT NULL,
  `nombre_libro` varchar(30) NOT NULL,
  `autor` varchar(20) NOT NULL,
  `año_libro` date NOT NULL,
  `n_ejemplar` varchar(20) NOT NULL,
  `carrera` int(11) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `id_userCreador` int(11) DEFAULT NULL,
  `id_userDeleted` int(11) DEFAULT NULL,
  `stock` int(100) DEFAULT NULL,
  `disponible` int(100) DEFAULT NULL,
  PRIMARY KEY (`cota`),
  KEY `carrera` (`carrera`),
  KEY `id_userCreador` (`id_userCreador`,`id_userDeleted`),
  KEY `id_userDeleted` (`id_userDeleted`),
  CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`carrera`) REFERENCES `carrera` (`idcarrera`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `libros_ibfk_2` FOREIGN KEY (`id_userCreador`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `libros_ibfk_3` FOREIGN KEY (`id_userDeleted`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO libros VALUES("c001","c++","mariana suarez","2005-07-24","3","1","1","1","","","");
INSERT INTO libros VALUES("c002","html 5","maria mendez","2017-05-05","1","1","1","1","","","");
INSERT INTO libros VALUES("c003","java","ulioanof","2022-05-25","0","1","1","1","1","","");
INSERT INTO libros VALUES("c0033232","electricidad 1","mario castañeda","2022-10-13","2","6","1","1","1","","");
INSERT INTO libros VALUES("c123","java","mario ","2022-06-25","3","1","1","1","1","","");
INSERT INTO libros VALUES("c13","matematica","mario ","2020-06-23","2","1","1","1","1","","");
INSERT INTO libros VALUES("c1b23c","inteligencia artificial basica","j.s","2022-10-05","4","1","1","1","1","","");



DROP TABLE IF EXISTS respaldo_entraga_libro;

CREATE TABLE `respaldo_entraga_libro` (
  `cota` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `hora_entrega` time DEFAULT NULL,
  `id_estudiante` int(11) DEFAULT NULL,
  `nom_est` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cedula` int(11) DEFAULT NULL,
  `id_usercreador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO respaldo_entraga_libro VALUES("c123","2022-07-17","18:12:13","1","Rafael Antonio","28457797","1");
INSERT INTO respaldo_entraga_libro VALUES("c123","2022-07-17","18:26:34","1","Rafael Antonio","28457797","1");
INSERT INTO respaldo_entraga_libro VALUES("c123","2022-07-17","18:26:41","1","Rafael Antonio","28457797","1");
INSERT INTO respaldo_entraga_libro VALUES("c001","2022-07-20","11:16:00","1","Rafael Antonio","28457797","1");
INSERT INTO respaldo_entraga_libro VALUES("c002","2022-07-20","11:16:33","1","Rafael Antonio","28457797","1");
INSERT INTO respaldo_entraga_libro VALUES("c002","2022-07-20","11:16:57","3","marga","23511075","1");
INSERT INTO respaldo_entraga_libro VALUES("c123","2022-07-20","11:17:27","3","marga","23511075","1");
INSERT INTO respaldo_entraga_libro VALUES("c123","2022-07-20","11:17:39","2","bertha","26934846","1");
INSERT INTO respaldo_entraga_libro VALUES("c001","2022-07-20","11:18:06","1","Rafael Antonio","28457797","1");
INSERT INTO respaldo_entraga_libro VALUES("c001","2022-07-20","22:34:33","1","Rafael Antonio","28457797","1");
INSERT INTO respaldo_entraga_libro VALUES("c002","2022-07-20","22:35:13","1","Rafael Antonio","28457797","1");
INSERT INTO respaldo_entraga_libro VALUES("c123","2022-07-20","22:36:29","2","bertha","26934846","1");
INSERT INTO respaldo_entraga_libro VALUES("c123","2022-07-20","22:36:47","3","marga","23511075","1");
INSERT INTO respaldo_entraga_libro VALUES("c123","2022-07-20","22:37:27","1","Rafael Antonio","28457797","1");
INSERT INTO respaldo_entraga_libro VALUES("c001","2022-07-20","22:51:19","1","Rafael Antonio","28457797","1");
INSERT INTO respaldo_entraga_libro VALUES("c001","2022-07-20","22:51:57","1","Rafael Antonio","28457797","1");
INSERT INTO respaldo_entraga_libro VALUES("c123","2022-07-21","13:04:18","1","Rafael Antonio","28457797","1");
INSERT INTO respaldo_entraga_libro VALUES("c001","2022-07-27","00:21:51","1","Rafael Antonio","28457797","1");
INSERT INTO respaldo_entraga_libro VALUES("c003","2022-07-27","09:10:20","1","Rafael Antonio","28457797","1");
INSERT INTO respaldo_entraga_libro VALUES("c123","2022-10-20","21:40:03","1","Rafael Antonio","28457797","1");
INSERT INTO respaldo_entraga_libro VALUES("c123","2022-10-20","21:40:41","2","bertha","26934846","1");
INSERT INTO respaldo_entraga_libro VALUES("c002","2022-10-20","21:40:59","3","marga","23511075","1");
INSERT INTO respaldo_entraga_libro VALUES("c001","2022-10-20","21:41:12","2","bertha","26934846","1");
INSERT INTO respaldo_entraga_libro VALUES("c001","2022-10-20","21:41:26","3","marga","23511075","1");
INSERT INTO respaldo_entraga_libro VALUES("c123","2022-10-20","21:41:43","3","marga","23511075","1");
INSERT INTO respaldo_entraga_libro VALUES("c001","2022-10-20","21:41:57","3","mario","23511075","1");
INSERT INTO respaldo_entraga_libro VALUES("c0033232","2022-10-20","21:42:15","1","Rafael Antonio","28457797","1");
INSERT INTO respaldo_entraga_libro VALUES("c0033232","2022-10-20","21:42:31","1","Rafael Antonio","28457797","1");
INSERT INTO respaldo_entraga_libro VALUES("c1b23c","2022-10-20","21:42:43","1","Rafael Antonio","28457797","1");
INSERT INTO respaldo_entraga_libro VALUES("c001","2022-10-20","21:44:09","1","Rafael Antonio","28457797","1");
INSERT INTO respaldo_entraga_libro VALUES("c001","2022-10-20","22:38:09","1","Rafael Antonio","28457797","1");
INSERT INTO respaldo_entraga_libro VALUES("c001","2022-10-20","22:38:39","1","Rafael Antonio","28457797","1");
INSERT INTO respaldo_entraga_libro VALUES("c001","2022-10-21","23:34:04","1","Rafael Antonio","28457797","1");
INSERT INTO respaldo_entraga_libro VALUES("c001","2022-10-21","23:34:35","1","Rafael Antonio","28457797","1");



DROP TABLE IF EXISTS respaldo_inf_estudiante;

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

INSERT INTO respaldo_inf_estudiante VALUES("7","29988297","shayer","bpnilla","04247012173","1","1","2022-07-27","2022-07-27");
INSERT INTO respaldo_inf_estudiante VALUES("8","23546897","jose ","manuel","25646865465","3","1","2022-07-27","2022-07-27");
INSERT INTO respaldo_inf_estudiante VALUES("9","28457735","miguel","escalante","4247190072","1","1","2022-10-21","2022-10-21");



DROP TABLE IF EXISTS respaldo_libros;

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

INSERT INTO respaldo_libros VALUES("c001","c++","mariana suares","2005-07-24","3","1","","17:24:15","1");
INSERT INTO respaldo_libros VALUES("c002","html 5","maria mendez","2017-05-05","2","1","","18:35:48","1");
INSERT INTO respaldo_libros VALUES("c13","matematica","mario ","2020-06-23","2","1","","03:18:53","1");
INSERT INTO respaldo_libros VALUES("c003","java","ulioanof","2022-05-25","3","1","","08:56:33","1");
INSERT INTO respaldo_libros VALUES("c1b23c","inteligencia artificial basica","j.s","2022-10-05","4","1","","14:27:22","1");
INSERT INTO respaldo_libros VALUES("c0033232","electricidad 1","mario castañeda","2022-10-13","5","6","","14:44:26","1");



DROP TABLE IF EXISTS respaldo_retiro_libro;

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

INSERT INTO respaldo_retiro_libro VALUES("","c123","2022-07-13","09:47:23","2","bertha","26934846","1","2022-07-16");
INSERT INTO respaldo_retiro_libro VALUES("","c123","2022-07-17","17:39:49","1","Rafael Antonio","28457797","1","2022-07-20");
INSERT INTO respaldo_retiro_libro VALUES("","c001","2022-07-17","17:40:01","1","Rafael Antonio","28457797","1","2022-07-20");
INSERT INTO respaldo_retiro_libro VALUES("","c123","2022-07-17","18:26:16","1","Rafael Antonio","28457797","1","2022-07-20");
INSERT INTO respaldo_retiro_libro VALUES("","c001","2022-07-17","18:42:38","1","Rafael Antonio","28457797","1","2022-07-20");
INSERT INTO respaldo_retiro_libro VALUES("","c001","2022-07-17","18:43:46","1","Rafael Antonio","28457797","1","2022-07-20");
INSERT INTO respaldo_retiro_libro VALUES("","c002","2022-07-17","18:43:59","1","Rafael Antonio","28457797","1","2022-07-20");
INSERT INTO respaldo_retiro_libro VALUES("","c002","2022-07-17","18:44:23","3","marga","23511075","1","2022-07-20");
INSERT INTO respaldo_retiro_libro VALUES("","c123","2022-07-17","18:44:31","3","marga","23511075","1","2022-07-20");
INSERT INTO respaldo_retiro_libro VALUES("","c123","2022-07-17","18:44:57","2","bertha","26934846","1","2022-07-20");
INSERT INTO respaldo_retiro_libro VALUES("","c001","2022-07-20","09:55:35","1","Rafael Antonio","28457797","1","2022-07-23");
INSERT INTO respaldo_retiro_libro VALUES("","c001","2022-07-20","11:17:52","1","Rafael Antonio","28457797","1","2022-07-23");
INSERT INTO respaldo_retiro_libro VALUES("","c001","2022-07-20","12:59:43","1","Rafael Antonio","28457797","1","2022-07-23");
INSERT INTO respaldo_retiro_libro VALUES("","c002","2022-07-20","22:19:27","1","Rafael Antonio","28457797","1","2022-07-23");
INSERT INTO respaldo_retiro_libro VALUES("","c001","2022-07-20","22:19:58","1","Rafael Antonio","28457797","1","2022-07-23");
INSERT INTO respaldo_retiro_libro VALUES("","c002","2022-07-20","22:24:40","1","Rafael Antonio","28457797","1","2022-07-23");
INSERT INTO respaldo_retiro_libro VALUES("","c123","2022-07-20","22:24:52","3","marga","23511075","1","2022-07-23");
INSERT INTO respaldo_retiro_libro VALUES("","c123","2022-07-20","22:25:11","2","bertha","26934846","1","2022-07-23");
INSERT INTO respaldo_retiro_libro VALUES("","c123","2022-07-20","22:37:08","1","Rafael Antonio","28457797","1","2022-07-23");
INSERT INTO respaldo_retiro_libro VALUES("","c123","2022-07-20","22:37:14","1","Rafael Antonio","28457797","1","2022-07-23");
INSERT INTO respaldo_retiro_libro VALUES("","c123","2022-07-21","09:54:00","1","Rafael Antonio","28457797","1","2022-07-24");
INSERT INTO respaldo_retiro_libro VALUES("","c123","2022-07-21","09:54:26","2","bertha","26934846","1","2022-07-24");
INSERT INTO respaldo_retiro_libro VALUES("","c002","2022-07-21","09:55:44","3","marga","23511075","1","2022-07-24");
INSERT INTO respaldo_retiro_libro VALUES("","c001","2022-07-21","09:56:24","2","bertha","26934846","1","2022-07-24");
INSERT INTO respaldo_retiro_libro VALUES("","c001","2022-07-21","09:56:40","3","marga","23511075","1","2022-07-24");
INSERT INTO respaldo_retiro_libro VALUES("","c001","2022-07-21","10:14:32","1","Rafael Antonio","28457797","1","2022-07-24");
INSERT INTO respaldo_retiro_libro VALUES("","c123","2022-07-22","20:56:04","3","marga","23511075","1","2022-07-25");
INSERT INTO respaldo_retiro_libro VALUES("","c001","2022-07-27","03:27:17","3","mario","23511075","1","2022-07-30");
INSERT INTO respaldo_retiro_libro VALUES("","c003","2022-07-27","09:08:49","1","Rafael Antonio","28457797","1","2022-07-30");
INSERT INTO respaldo_retiro_libro VALUES("","c0033232","2022-10-20","21:20:27","1","Rafael Antonio","28457797","1","2022-10-23");
INSERT INTO respaldo_retiro_libro VALUES("","c0033232","2022-10-20","21:25:39","1","Rafael Antonio","28457797","1","2022-10-23");
INSERT INTO respaldo_retiro_libro VALUES("","c1b23c","2022-10-20","21:38:44","1","Rafael Antonio","28457797","1","2022-10-23");
INSERT INTO respaldo_retiro_libro VALUES("","c001","2022-10-20","21:43:58","1","Rafael Antonio","28457797","1","2022-10-23");
INSERT INTO respaldo_retiro_libro VALUES("","c001","2022-10-20","22:13:29","1","Rafael Antonio","28457797","1","2022-10-23");
INSERT INTO respaldo_retiro_libro VALUES("","c001","2022-10-20","22:38:25","1","Rafael Antonio","28457797","1","2022-10-23");
INSERT INTO respaldo_retiro_libro VALUES("","c001","2022-10-20","23:47:33","1","Rafael Antonio","28457797","1","2022-10-23");
INSERT INTO respaldo_retiro_libro VALUES("","c001","2022-10-21","23:33:38","1","Rafael Antonio","28457797","1","2022-10-24");



DROP TABLE IF EXISTS respaldo_usuario;

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

INSERT INTO respaldo_usuario VALUES("25","bertha","bertha@gamil.com","bertha","81dc9bdb52d04dc20036dbd8313ed055","2","1","2022-07-21","2022-07-21");
INSERT INTO respaldo_usuario VALUES("26","jose","jose_22@gmail.com","josegomez","e10adc3949ba59abbe56e057f20f883e","2","1","2022-07-26","2022-07-26");
INSERT INTO respaldo_usuario VALUES("27","shayer","shayer0529@gmail.com","shayerboz","d31d1592d76ba9b08512d82a0c643d47","2","1","2022-07-27","2022-07-27");
INSERT INTO respaldo_usuario VALUES("28","prueba","pedro@gmail.com","prueba","e10adc3949ba59abbe56e057f20f883e","3","1","2022-07-27","2022-07-27");
INSERT INTO respaldo_usuario VALUES("31","Rafael Antonio","ramb2786@gamil.com","rafamusic","e10adc3949ba59abbe56e057f20f883e","1","1","2022-10-21","2022-10-21");



DROP TABLE IF EXISTS retiro_libros;

CREATE TABLE `retiro_libros` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `cota` varchar(15) NOT NULL,
  `fecha_retiro` date NOT NULL,
  `hora_retiro` time NOT NULL,
  `id_estudiante_rl` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cedula` int(10) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `id_userCreador` int(11) DEFAULT NULL,
  `id_userDeleted` int(11) DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cota` (`cota`),
  KEY `id_userCreador` (`id_userCreador`,`id_userDeleted`),
  KEY `id_estudiante_rl` (`id_estudiante_rl`),
  KEY `id_userDeleted` (`id_userDeleted`),
  CONSTRAINT `retiro_libros_ibfk_1` FOREIGN KEY (`cota`) REFERENCES `libros` (`cota`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `retiro_libros_ibfk_2` FOREIGN KEY (`id_estudiante_rl`) REFERENCES `inf_estudiante` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `retiro_libros_ibfk_3` FOREIGN KEY (`id_userCreador`) REFERENCES `usuarios` (`idusuario`) ON UPDATE CASCADE,
  CONSTRAINT `retiro_libros_ibfk_4` FOREIGN KEY (`id_userDeleted`) REFERENCES `usuarios` (`idusuario`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

INSERT INTO retiro_libros VALUES("1","c123","2022-07-17","18:26:16","1","Rafael Antonio","28457797","0","1","1","2022-07-20");
INSERT INTO retiro_libros VALUES("2","c001","2022-07-17","18:42:38","1","Rafael Antonio","28457797","0","1","1","2022-07-20");
INSERT INTO retiro_libros VALUES("3","c001","2022-07-17","18:43:46","1","Rafael Antonio","28457797","0","1","1","2022-07-20");
INSERT INTO retiro_libros VALUES("4","c002","2022-07-17","18:43:59","1","Rafael Antonio","28457797","0","1","1","2022-07-20");
INSERT INTO retiro_libros VALUES("5","c002","2022-07-17","18:44:23","3","marga","23511075","0","1","1","2022-07-20");
INSERT INTO retiro_libros VALUES("6","c123","2022-07-17","18:44:31","3","marga","23511075","0","1","1","2022-07-20");
INSERT INTO retiro_libros VALUES("7","c123","2022-07-17","18:44:57","2","bertha","26934846","0","1","1","2022-07-20");
INSERT INTO retiro_libros VALUES("8","c001","2022-07-20","09:55:35","1","Rafael Antonio","28457797","0","1","1","2022-07-23");
INSERT INTO retiro_libros VALUES("9","c001","2022-07-20","11:17:52","1","Rafael Antonio","28457797","0","1","1","2022-07-23");
INSERT INTO retiro_libros VALUES("10","c001","2022-07-20","12:59:43","1","Rafael Antonio","28457797","0","1","1","2022-07-23");
INSERT INTO retiro_libros VALUES("11","c002","2022-07-20","22:19:27","1","Rafael Antonio","28457797","0","1","1","2022-07-23");
INSERT INTO retiro_libros VALUES("12","c001","2022-07-20","22:19:58","1","Rafael Antonio","28457797","0","1","1","2022-07-23");
INSERT INTO retiro_libros VALUES("13","c002","2022-07-20","22:24:40","1","Rafael Antonio","28457797","0","1","1","2022-07-23");
INSERT INTO retiro_libros VALUES("14","c123","2022-07-20","22:24:52","3","marga","23511075","0","1","1","2022-07-23");
INSERT INTO retiro_libros VALUES("15","c123","2022-07-20","22:25:11","2","bertha","26934846","0","1","1","2022-07-23");
INSERT INTO retiro_libros VALUES("16","c123","2022-07-20","22:37:08","1","Rafael Antonio","28457797","0","1","1","2022-07-23");
INSERT INTO retiro_libros VALUES("17","c123","2022-07-20","22:37:14","1","Rafael Antonio","28457797","0","1","1","2022-07-23");
INSERT INTO retiro_libros VALUES("18","c123","2022-07-21","09:54:00","1","Rafael Antonio","28457797","0","1","1","2022-07-24");
INSERT INTO retiro_libros VALUES("19","c123","2022-07-21","09:54:26","2","bertha","26934846","0","1","1","2022-07-24");
INSERT INTO retiro_libros VALUES("20","c002","2022-07-21","09:55:44","3","marga","23511075","0","1","1","2022-07-24");
INSERT INTO retiro_libros VALUES("21","c001","2022-07-21","09:56:24","2","bertha","26934846","0","1","1","2022-07-24");
INSERT INTO retiro_libros VALUES("22","c001","2022-07-21","09:56:40","3","marga","23511075","0","1","1","2022-07-24");
INSERT INTO retiro_libros VALUES("23","c001","2022-07-21","10:14:32","1","Rafael Antonio","28457797","0","1","1","2022-07-24");
INSERT INTO retiro_libros VALUES("24","c123","2022-07-22","20:56:04","3","marga","23511075","0","1","1","2022-07-25");
INSERT INTO retiro_libros VALUES("25","c001","2022-07-27","03:27:17","3","mario","23511075","0","1","1","2022-07-30");
INSERT INTO retiro_libros VALUES("26","c003","2022-07-27","09:08:49","1","Rafael Antonio","28457797","0","1","1","2022-07-30");
INSERT INTO retiro_libros VALUES("27","c0033232","2022-10-20","21:20:27","1","Rafael Antonio","28457797","0","1","1","2022-10-23");
INSERT INTO retiro_libros VALUES("28","c0033232","2022-10-20","21:25:39","1","Rafael Antonio","28457797","0","1","1","2022-10-23");
INSERT INTO retiro_libros VALUES("29","c1b23c","2022-10-20","21:38:44","1","Rafael Antonio","28457797","0","1","1","2022-10-23");
INSERT INTO retiro_libros VALUES("30","c001","2022-10-20","21:43:58","1","Rafael Antonio","28457797","0","1","1","2022-10-23");
INSERT INTO retiro_libros VALUES("31","c001","2022-10-20","22:13:29","1","Rafael Antonio","28457797","0","1","1","2022-10-23");
INSERT INTO retiro_libros VALUES("32","c001","2022-10-20","22:38:25","1","Rafael Antonio","28457797","0","1","1","2022-10-23");
INSERT INTO retiro_libros VALUES("33","c001","2022-10-20","23:47:33","1","Rafael Antonio","28457797","0","1","1","2022-10-23");
INSERT INTO retiro_libros VALUES("34","c001","2022-10-21","23:33:38","1","Rafael Antonio","28457797","0","1","1","2022-10-24");



DROP TABLE IF EXISTS rol;

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`idrol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO rol VALUES("1","administrador");
INSERT INTO rol VALUES("2","colaborador");
INSERT INTO rol VALUES("3","lector");



DROP TABLE IF EXISTS sesion_login;

CREATE TABLE `sesion_login` (
  `id_sesion` int(11) NOT NULL AUTO_INCREMENT,
  `id_user_login` int(11) DEFAULT NULL,
  `hora_user_login` time DEFAULT NULL,
  `fecha_user_login` date DEFAULT NULL,
  PRIMARY KEY (`id_sesion`),
  KEY `id_user_login` (`id_user_login`),
  CONSTRAINT `sesion_login_ibfk_1` FOREIGN KEY (`id_user_login`) REFERENCES `usuarios` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

INSERT INTO sesion_login VALUES("1","1","12:24:09","2022-09-28");
INSERT INTO sesion_login VALUES("2","1","14:29:33","2022-09-28");
INSERT INTO sesion_login VALUES("3","1","21:14:54","2022-10-04");
INSERT INTO sesion_login VALUES("4","1","14:45:31","2022-10-09");
INSERT INTO sesion_login VALUES("5","1","09:02:14","2022-10-10");
INSERT INTO sesion_login VALUES("6","1","10:50:20","2022-10-10");
INSERT INTO sesion_login VALUES("7","1","18:01:06","2022-10-11");
INSERT INTO sesion_login VALUES("8","1","18:13:08","2022-10-11");
INSERT INTO sesion_login VALUES("9","1","09:58:26","2022-10-12");
INSERT INTO sesion_login VALUES("10","1","10:01:06","2022-10-12");
INSERT INTO sesion_login VALUES("11","1","12:15:45","2022-10-12");
INSERT INTO sesion_login VALUES("12","1","20:33:03","2022-10-12");
INSERT INTO sesion_login VALUES("13","1","19:05:45","2022-10-16");
INSERT INTO sesion_login VALUES("14","1","19:06:47","2022-10-16");
INSERT INTO sesion_login VALUES("15","1","23:50:36","2022-10-16");
INSERT INTO sesion_login VALUES("16","1","21:41:19","2022-10-18");
INSERT INTO sesion_login VALUES("17","1","21:48:27","2022-10-18");
INSERT INTO sesion_login VALUES("18","1","21:50:00","2022-10-18");
INSERT INTO sesion_login VALUES("19","1","04:33:58","2022-10-21");
INSERT INTO sesion_login VALUES("20","1","04:35:55","2022-10-21");
INSERT INTO sesion_login VALUES("21","1","05:00:27","2022-10-21");
INSERT INTO sesion_login VALUES("22","1","18:32:51","2022-10-21");



DROP TABLE IF EXISTS sesion_logout;

CREATE TABLE `sesion_logout` (
  `id_sesion_logout` int(11) NOT NULL AUTO_INCREMENT,
  `id_user_logout` int(11) NOT NULL,
  `hora_logout` time DEFAULT NULL,
  `fecha_logout` date DEFAULT NULL,
  PRIMARY KEY (`id_sesion_logout`),
  KEY `id_user_logout` (`id_user_logout`),
  CONSTRAINT `sesion_logout_ibfk_1` FOREIGN KEY (`id_user_logout`) REFERENCES `usuarios` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

INSERT INTO sesion_logout VALUES("1","1","12:29:33","2022-09-28");
INSERT INTO sesion_logout VALUES("2","1","22:51:36","2022-09-29");
INSERT INTO sesion_logout VALUES("3","1","21:15:05","2022-10-04");
INSERT INTO sesion_logout VALUES("6","1","18:00:37","2022-10-11");
INSERT INTO sesion_logout VALUES("7","1","10:00:48","2022-10-12");
INSERT INTO sesion_logout VALUES("9","1","19:06:00","2022-10-16");
INSERT INTO sesion_logout VALUES("10","1","23:49:57","2022-10-16");
INSERT INTO sesion_logout VALUES("11","1","21:41:23","2022-10-18");
INSERT INTO sesion_logout VALUES("12","1","21:49:47","2022-10-18");
INSERT INTO sesion_logout VALUES("13","1","18:53:46","2022-10-20");
INSERT INTO sesion_logout VALUES("14","1","00:02:44","2022-10-21");
INSERT INTO sesion_logout VALUES("15","1","04:35:48","2022-10-21");
INSERT INTO sesion_logout VALUES("16","1","04:57:57","2022-10-21");
INSERT INTO sesion_logout VALUES("17","1","18:32:36","2022-10-21");



DROP TABLE IF EXISTS usuarios;

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_u` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `correo` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `usuario` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `clave` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `rol` int(11) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `id_userCreador` int(11) DEFAULT NULL,
  `id_userDeleted` int(11) DEFAULT NULL,
  PRIMARY KEY (`idusuario`),
  UNIQUE KEY `correo` (`correo`),
  UNIQUE KEY `usuario` (`usuario`),
  KEY `id_userCreador` (`id_userCreador`,`id_userDeleted`),
  KEY `id_userDeleted` (`id_userDeleted`),
  KEY `rol` (`rol`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`id_userCreador`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`id_userDeleted`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO usuarios VALUES("1","nakary vivas","nakariv.iut@gmail.com","nakariv12","e10adc3949ba59abbe56e057f20f883e","1","1","","");
INSERT INTO usuarios VALUES("2","mario Dalessandro Z","mario.123@gmail.com","mariodz80","e10adc3949ba59abbe56e057f20f883e","1","1","1","1");
INSERT INTO usuarios VALUES("3","shayer bonilla","shayer_nohacenada@gmail.com","shayer","827ccb0eea8a706c4c34a16891f84e7b","3","1","1","");
INSERT INTO usuarios VALUES("25","bertha","bertha@gamil.com","bertha","81dc9bdb52d04dc20036dbd8313ed055","2","1","1","");
INSERT INTO usuarios VALUES("26","jose","jose_22@gmail.com","josegomez","e10adc3949ba59abbe56e057f20f883e","2","1","1","");
INSERT INTO usuarios VALUES("27","shayer","shayer0529@gmail.com","shayerboz","d2c4ad759c06c3bf1f0d45261a71a8f2","2","1","1","");
INSERT INTO usuarios VALUES("28","prueba","pedro@gmail.com","prueba","e10adc3949ba59abbe56e057f20f883e","3","0","1","1");
INSERT INTO usuarios VALUES("31","Rafael Antonio","ramb2786@gamil.com","rafamusic","e10adc3949ba59abbe56e057f20f883e","3","1","1","");



SET FOREIGN_KEY_CHECKS=1;