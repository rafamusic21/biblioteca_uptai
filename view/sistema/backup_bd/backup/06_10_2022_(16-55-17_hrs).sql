SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS bot;

USE bot;

DROP TABLE IF EXISTS chatbot;

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO chatbot VALUES("1","hola|hello|hi|hey|","Hola a todos");
INSERT INTO chatbot VALUES("2","como te llamas|cual es tu nombre|tienes nombre|como te dicen|","Me llamo genos");
INSERT INTO chatbot VALUES("3","de donde eres|de donde vienes|","soy de Venezuela, estado tachira, por lo tanto soy gocho o eso creo!!!");
INSERT INTO chatbot VALUES("4","adios|chao|nos vemos luego|hasta la proxima|bye|see you later|hasta pronto","Adios amigo!!! espero saber mas de ti...");



SET FOREIGN_KEY_CHECKS=1;