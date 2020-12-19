create database produtos;

use produtos;

create table produtos(
ID int not null auto_increment,
produto varchar(30),
descricao varchar(70),
marca varchar(20),
preco float,
primary key(ID),
unique(ID)