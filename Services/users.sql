create database users;

use users;

create table tb_users(id_user int primary key,
nome_us varchar(30) not null, email_us varchar(50) not null,
idade_us int (3) not null, login varchar(30) not null, senha_us varchar(30) not null);

show tables;