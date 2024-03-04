create database soyus_enterprise;
use soyus_enterprise;

create table cliente(
idCliente int auto_increment primary key,
nombre varchar(50) not null,
apellidos varchar(60) not null,
fecha_nac date not null,
telefono varchar(9) not null unique,
password varchar(15) not null,
residencia varchar(30) not null
);


CREATE TABLE empleados(
idEmpleado INT auto_increment primary key,
nombre VARCHAR(50) NOT NULL,
apellidos VARCHAR(60) NOT NULL,
telefono VARCHAR(9) NOT NULL UNIQUE,
email VARCHAR(50) NOT NULL UNIQUE,
dni VARCHAR(8) NOT NULL UNIQUE,
cargo VARCHAR(20) NOT NULL,
estado VARCHAR(20) NOT NULL,
password VARCHAR(15) NOT NULL
);


CREATE TABLE destino(
idDestino INT auto_increment PRIMARY KEY,
nombre varchar(40) not null UNIQUE,
idCategoria int not null,
modified_by int not null
);

alter table destino
add foreign key (idCategoria)
references categoria(idCategoria);

alter table destino
add foreign key (modified_by)
references empleados(idEmpleado);


CREATE TABLE categoria(
idCategoria INT AUTO_INCREMENT PRIMARY KEY,
nombre varchar(20) NOT NULL UNIQUE
);

create table vuelos(
idVuelo int auto_increment primary key,
nombre varchar(100) not null unique,
fecha_salida date not null,
fecha_retorno date not null,
asientos int not null,
idDestino int not null,
precio_unitario double not null,
descripcion text,
modified_by int not null
);

alter table vuelos
add foreign key (idDestino)
references destino(idDestino);

alter table vuelos
add foreign key (modified_by)
references empleados(idEmpleado);

CREATE TABLE venta(
idVenta int auto_increment primary key,
idCliente int not null,
idTransaccion varchar(100) not null,
idClientBank varchar(100) not null,
fecha_pago date not null,
estado varchar(30) not null,
total double not null,
met_pago varchar(100)
);

alter table venta
add foreign key (idCliente)
references cliente(idCliente);


create table detventa(
idDetVent int auto_increment primary key,
idVenta int not null,
idVuelo int not null,
cant_ticket int not null,
nombre_vuelo varchar(100) not null
);

alter table detventa
add foreign key (idVenta)
references venta(idVenta);

alter table detventa
add foreign key (idVuelo)
references vuelos(idVuelo);

















