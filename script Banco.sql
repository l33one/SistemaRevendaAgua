create database if not exists agua_bd;
use agua_bd;

create table if not exists usuarios(
    usuario_id integer(5) auto_increment primary key,
    nome varchar(40) NOT NULL,
    email varchar(80) NOT NULL,
    senha varchar(8) NOT NULL
);
