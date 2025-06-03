create database veterinaria;
use veterinaria;

create table propietarios(
  idpropietario int auto_increment primary key,
  apellidos varchar(40) not null,
  nombres varchar(40) not null
)engine = innodb;

create table mascotas(
  idmascota int auto_increment primary key,
  idpropietario int not null,
  tipo enum('Perro', 'Gato') not null,
  nombre varchar(40) not null,
  color varchar(40) not null,
  genero enum('hembra', 'macho'),
  vive enum('si', 'no') not null default 'si',
  constraint fk_idpropietario foreign key (idpropietario) references propietarios (idpropietario)
)engine = innodb;

insert into propietarios (apellidos, nombres) values
 ('Perez', 'Hugo'),
 ('Castilla', 'Teresa');

insert into mascotas(idpropietario, tipo, nombre, color, genero) values
 (1, 'Perro', 'Firulais', 'negro', 'macho'),
 (1, 'Perro', 'Guerrero', 'marron', 'macho'),
 (2, 'Perro', 'Pelusa', 'blanco', 'hembra'),
 (2, 'Gato', 'Yager', 'blanco', 'macho');

update mascotas set 
 idpropietario = 1,
 tipo = 'Gato',
 nombre = 'Matador',
 color = 'Chocolate',
 genero = 'macho'
where idmascota = 2;

select * from mascotas;

SELECT 
  MA.idmascota,
  MA.nombre,
  MA.tipo,
  MA.color,
  MA.genero,
  CONCAT(PR.apellidos, ' ', PR.nombres) 'propietario'
  FROM mascotas MA
  INNER JOIN propietarios PR ON ma.idpropietario = PR.idpropietario
  ORDER BY MA.nombre;