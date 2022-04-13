#criar base
create database aula8php;

#chamar a base
use aula8php;

#criar tabela
create table usuario(
    idusuario int auto_increment primary key,
    nome varchar(50),
    login varchar(20) unique,
    senha varchar(50),
    perfil enum('admin','user')
);

#inserir dado na tabela
insert into usuario value(null,'maria','admin',md5('123'),'admin');
insert into usuario value(null,'manuela','manuela',md5('123'),'user');
insert into usuario value(null,'ariane','ariane',md5('123'),'user');

select * from usuario;