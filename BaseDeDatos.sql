
CREATE TABLE usuarios(
username varchar(20) not null,
password varchar(20) not null,
email varchar(30) not null,
nombre varchar(20) not null,
apellidos varchar(40) not null,
edad int ,
sexo varchar(2) not null,
primary key(username, password)
);