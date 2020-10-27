create database mercearia;

use mercearia;

create table cliente(id int primary key auto_increment,
nome varchar(25),
endereco text,
email varchar(255)
);

insert into cliente (
nome,
endereco,
email
)

values(
'João',
'joao@teste.com',
'11 9999-9999'
),

(
'Maria',
'maria@teste.com',
'11 2222 9999'
)





