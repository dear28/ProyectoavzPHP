select current_date();
select version();

drop database if exists tectop;
create database tectop;
use tectop;

CREATE TABLE usuarios(
usu varchar (20) Not null,
pass varchar (20) not null,
nombre varchar (40) not null,
apellido varchar (40) not null,
telefono varchar (20) not null,
email varchar (30) not null,
primary key (usu)) Engine=innodb;

describe usuarios;

insert into usuarios values

("akixi21", "1122", "erica", "ladino", "328382122", "erica@gmail.com"),
("dani23", "2233", "daniel", "betancourt", "3228483452", "daniel@gmail.com"),
("eueu26", "6262", "eukaris", "marquez", "3207564327", "euue@gmail.com");

select * from usuarios;

CREATE TABLE samsung(
modelo_sam varchar (20) not null,
nombre_sam varchar (20) not null,
memoria_sam varchar (20) not null,
resolucion_sam varchar (20) not null,
precio_sam int (20) not null,
primary key (modelo_sam))
engine=innodb;

describe samsung;

insert into samsung values

("S20 ultra duos", "Samsung S20 ultra", "512gb", "1440x3200", "5400000"),
("M31", "Samsung Galaxy M31", "128gb", "1080x2340", "849900");

select * from samsung;

CREATE TABLE iphone(
id_ip int not null AUTO_INCREMENT ,
modelo_ip varchar (20) not null,
nombre_ip varchar (20) not null,
memoria_ip varchar (20) not null,
resolucion_ip varchar (20) not null,
precio_ip int (20) not null,
primary key (id_ip))
engine=innodb;

describe iphone;

insert into iphone ()values

(null, "12 Pro", "iPhone 12 Pro", "512gb", "xdr de 6,1", "6800000"),
(null, "12", "iphone 12", "64gb", "OLED de 6,1", "3380000");

select * from iphone;

CREATE TABLE xiaomi(
modelo_xi varchar (20) not null,
nombre_xi varchar (30) not null,
memoria_xi varchar (20) not null,
resolucion_xi varchar (20) not null,
precio_xi int (20) not null,
primary key (modelo_xi))
engine=innodb;

describe xiaomi;

insert into xiaomi values

("Note 9 Pro", "Xiaomi Redmi Note 9 Pro", "128gb", "hd", "970000"),
("Note 8", "xiaomi Redmi Note 8", "128gb", "hd", "640000");

select * from xiaomi;

CREATE TABLE acer (
modelo_ac varchar(20) NOT NULL,
nombre_ac varchar (20) not null,
procesador_ac varchar(20) NOT NULL,
memoria_ac varchar(10) NOT NULL,
capacidad_ac varchar(20) NOT NULL,
resolucion_ac varchar(20) NOT NULL,
gpu_ac varchar(40) NOT NULL,
precio_ac int(25) NOT NULL,
PRIMARY KEY (modelo_ac)) ENGINE=InnoDB;

describe acer;

insert into acer values

("A315-23G-R5B3", "Acer R5jr", "AMD", "8gb", "12gb", "1920x1080", "AMD Radeon 625 2GB", "2500000"),
("A315-34-C54A", "Acer C54", "AMD", "4gb", "500gb", "1366x768", "AMD RADEON 5", "1300000");

select * from acer;

CREATE TABLE lenovo (
modelo_len varchar(20) NOT NULL,
nombre_len varchar (20) not null,
procesador_len varchar(20) NOT NULL,
memoria_len varchar(10) NOT NULL,
capacidad_len varchar(20) NOT NULL,
resolucion_len varchar(20) NOT NULL,
gpu_len varchar(20) NOT NULL,
precio_len int(25) NOT NULL,
PRIMARY KEY (modelo_len)) ENGINE=InnoDB;

describe lenovo;

insert into lenovo values

("81w6000blm", "Lenovo s145-14iil", "i3", "4gb", "1tb", "hd", "intel UHD", "1600000"),
("S145", "Lenovo S145", "i3", "4gb", "1tb", "1366x768", "Intel UHD", "1330000");

select * from lenovo;

CREATE TABLE dell (
modelo_del varchar(20) NOT NULL,
nombre_del varchar (20) not null,
procesador_del varchar(20) NOT NULL,
memoria_del varchar(10) NOT NULL,
capacidad_del varchar(20) NOT NULL,
resolucion_del varchar(20) NOT NULL,
gpu_del varchar(20) NOT NULL,
precio_del int(25) NOT NULL,
PRIMARY KEY (modelo_del)) ENGINE=InnoDB;

describe dell;

insert into dell values

("3493", "Dell 3490 I5", "i5", "8gb", "1tb", "hd", "intel UHD", "2600000"),
("CGD7T- 3410", "Dell Inspiron", "i3", "8gb", "16gb", "hd", "intel UHD", "1900000");

select * from dell;