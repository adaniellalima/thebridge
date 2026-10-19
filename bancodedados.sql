drop database if exists thebridge;
create database thebridge;
use thebridge;

create table usuario (
    id_usuario int not null auto_increment,
    nome varchar(100) not null,
    email varchar(30) not null,
    senha varchar(20) not null,
    cpf varchar (11) not null,
    nasc date not null,
    sexo char(1) not null,
    telefone int(11) not null,
    primary key (id_usuario)
);

create table produto (
    id_produto int not null auto_increment,
    descricao varchar(100) not null,
    preco float not null,
    fichatecnica varchar(300) not null,
    categoria char,
    imagem varchar(250) not null,
    primary key (id_produto)
);