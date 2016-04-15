create table regional(
idRegional serial,
nome varchar(255),
constraint regional_pk primary key(idRegional)
);

create table usuario(
id serial,
email varchar(255),
senha varchar(255),
idRegional int,
constraint usuario_pk primary key(id)
);

create table escola(
idEscola serial,
idRegional int,
nome varchar(255),
constraint escola_pk primary key(idEscola)
);

create table turma(
idTurma serial,
idEscola int,
nome_turma varchar(255),
constraint turma_pk primary key(idTurma)
);

create table aluno(
idAluno serial,
idTurma int,
nome_aluno varchar(255),
constraint aluno_pk primary key(idAluno)
);

create table periodo(
idPeriodo int,
nivel int,
idAluno int
);

create table admin(
idAdmin serial,
email varchar(255),
senha varchar(255),
constraint admin_pk primary key(idAdmin)
);

create table posts(
idPost serial primary key,
idRegional integer,
mensagem text
);

create table imagem(
idPost integer,
idImagem text
);

insert into admin(email, senha) values('admin@sape.com', '123');
insert into regional(idRegional, nome) values('1', 'Campo Novo');
insert into escola(idEscola,idRegional, nome) values('1','1','E.E.F.Jean Silva');
insert into turma(idTurma,idEscola, nome_turma) values('1','1','5° B');