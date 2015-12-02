/*
SCRIPT VISA ATUALIZAR A BASE DE DADOS
MAS ATENÇÃO TODOS DA BASE ATUAL SERÃO PERDIDOS
*/

drop database agua_bd;
create database if not exists agua_bd;
use agua_bd;

/*INSTRUÇÕES DDL*/

create table if not exists usuarios(
    usuario_id integer(5) auto_increment primary key,
    nome varchar(40) NOT NULL,
    email varchar(80) NOT NULL,
    telefone varchar(14) NOT NULL,
    endereco varchar(200) NOT NULL,
    senha varchar(8) NOT NULL,
    tipo char(1) NOT NULL/*Tipo representado por C 'cliente' e F 'fornecedor'*/
);




/*INSTRUÇÕES DML*/
insert into usuarios(nome, email,telefone, endereco,  senha, tipo) 
values('leeung', 'leeungalves@gmail.com','(85)98120-0856', 'R. Monte libano, 1164, bl28, ap102, fortaleza-mondubin',  123456, 'C');
