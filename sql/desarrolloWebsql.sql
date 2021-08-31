create database if not exists htmldb;
use htmldb;
create table if not exists parcial (
  id 					int not null auto_increment,
  nombre 				varchar(100) null,
  grado 				varchar(100) null,
  seccion 				varchar(100) null,
  asignatura 			varchar(100) null,
  primary key (id)
);
create table if not exists usuario (
  id 					int not null auto_increment,
  usern 				varchar(100) null,
  passw 				varchar(100) null,
  primary key (id)
);
INSERT INTO parcial (id, nombre, grado, seccion, asignatura) VALUES
(1, 'nombre', 'segundo', 'a', 'calculo'),
(2, 'asdf', 'primero', 'B', 'ASDFSADF123');
INSERT INTO usuario (id, usern, passw) VALUES
(1, 'user', 'user'),
(2, 'admin', 'admin');