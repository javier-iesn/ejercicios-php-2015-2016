DROP DATABASE IF EXISTS agenda;
CREATE DATABASE agenda DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE agenda;
GRANT ALL PRIVILEGES ON agenda.* TO agenda@localhost IDENTIFIED BY 'agenda2016';

CREATE TABLE amigos (
   movil int(12) NOT NULL,
   telefono int(12)  NULL,
   nombre varchar(40)  NOT NULL,
   apellido1 varchar(25)  NOT NULL,
   apellido2 varchar(25)   NULL,
   email varchar(50)   NULL,
   direccion varchar(50)   NULL,
   cp int(5) unsigned zerofill NULL,
   ciudad varchar(30)  NULL,
   PRIMARY KEY (movil),
   KEY apellido1 (apellido1)
) ENGINE=InnoDB;

