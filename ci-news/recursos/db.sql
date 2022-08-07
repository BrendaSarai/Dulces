DROP DATABASE 8c_ci4;
CREATE DATABASE IF NOT EXISTS 8c_ci4 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE 8c_ci4;

CREATE TABLE usuario(
  fecha_creaction date,
  fecha_actualizacion date,
  fecha_eliminacion date,
  id_usuario int not null primary key auto_increment,
  nombre varchar(50) not null,
  paterno varchar(50) not null,
  materno varchar(50) not null,
  correo varchar(100) not null,
  contrasena varchar(100) not null
);

INSERT INTO usuario values (now(), now(), null,1, "Dulce","saldana","suarez","dulce.saldana85@gmail.com",SHA2('12345',0));
