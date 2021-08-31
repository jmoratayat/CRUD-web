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
INSERT INTO parcial (id, nombre, grado, seccion, asignatura) VALUES
(1, 'nombre', 'segundo', 'a', 'calculo'),
(2, 'asdf', 'primero', 'B', 'ASDFSADF123');