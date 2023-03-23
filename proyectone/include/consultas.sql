

create database practica;
create table practica.Usuario(id_usuario int auto_increment not null,Nombre text not null, Apellidos text not null, Direccion text not null,Telefono text not null, Fecha date not null, Email text not null, primary key(id_usuario))engine=innodb;
create table practica.Plantel(id_plantel int auto_increment not null,NombreP text not null, Clave text not null, DireccionP text not null, TelefonoP text not null, Responsable text not null, primary key(id_plantel))engine=innodb;
create table practica.Lugares(id_lugares int auto_increment not null, NombreL text not null, Descripcion text not null, TelefonoL text not null, Facebook text not null, EmailL text not null, Horario text not null,primary key(id_lugares))engine=innodb;

DROP database practica1;