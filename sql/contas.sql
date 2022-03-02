create database contas;
use contas;
create table lancamentos (
	Id int not null auto_increment,
    Tipo varchar(40),
    Valor float(40) not null,
    AnoMesDia date,
    Validacao varchar(255) not null,
    Descricao varchar(255),
    Parcelado varchar(4),
    QtdParc int,
    nParc int,
    anomes varchar(12),
    primary key(Id)
);
create table auth (
	user varchar(40),
    passwd varchar(20),
    hashvalid varchar(60)
);
create table hashes(
	AnoMesDia date,
    hash varchar(255) primary key
);
drop table lancamentos, hashes;
select * from lancamentos;
select * from hashes;

delete from lancamentos where Tipo = 'Teste';

update lancamentos
set Tipo = 'Aquisicao'
where Tipo = 'Aquisição';

alter table lancamentos add anomes varchar(12);

