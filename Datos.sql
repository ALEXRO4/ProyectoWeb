drop schema if exists `velocimotor`;

-- creacion de la base de datos
create schema if not exists `velocimotor` default character set utf8 collate utf8_sapanish_ci;

-- selecionamos la DB para trabajar sobre ella
USE `velocimotor`;

-- Crear un tabla

CREATE TABLE `cita`(
`id` int auto_increment PRIMARY KEY not null,
`nombre` text not null,
`email` text not null,
`phone` int (10) not null,
`fecha` text not null,
`descripcion` text ,
`fecha_registro` datetime not null default current_timestamp

) engine=Innodb default charset=utf8;

