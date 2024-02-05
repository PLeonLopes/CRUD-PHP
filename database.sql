create database cadastro;

use cadastro;

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED auto_increment,
  `nome` varchar(50),
  `email` varchar(255),
  `senha` varchar(255),
  `data_nasc` date(),
  PRIMARY KEY  (`id`)
);