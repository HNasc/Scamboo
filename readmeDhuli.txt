Projeto Integrador-Scamboo
Nome:Dhuli Kopczenski

At� o momento foi implementado somente o cadastro ea conex�o com o banco de dados!!!

1- Tabela para criar banco cadastro:

Creat database Scamboo;
use Scamboo;
create table Usuarios (
    IdUsuario int auto_increment primary key,
    email varchar(50) not null,
    senha varchar(50) not null,
    nome varchar(80) not null,
    apelido varchar(15) not null,
    tipo_pessoa char(1),
    cpf_cnpj varchar(14),
    sexo char(1),
    tipo_contato char(1),
    telefone varchar(12),
    cep varchar(8),
    endereco varchar (50),
    numero varchar (6),
    complemento varchar(50),
    estado varchar(2),
    cidade varchar(30)
);


2- Criando cadastro de usu�rio: Meu c�digo desenvolvi baseado no que o professor passou, ent�o primeiro recebo os parametros, fa�o a conex�o com Banco de Dados e insiros os parametros informados no formulario para dentro do banco... No mesmo arquivo tenho o "body" com o formulario de Cadastro de Usu�rios que � exibido na tela e preenchido pelo usu�rio.

3- Problemas:
Implementar o busca CEP 
Implementar bot�es e listas no cadastroUsuario pois o banco n�o salva a op��o escolida
Implementar seguran�a no momento de logar com a senha emcripitada