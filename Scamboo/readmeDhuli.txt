Projeto Integrador-Scamboo
Nome:Dhuli Kopczenski

Até o momento foi implementado somente o cadastro ea conexão com o banco de dados!!!

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


2- Criando cadastro de usuário: Meu código desenvolvi baseado no que o professor passou, então primeiro recebo os parametros, faço a conexão com Banco de Dados e insiros os parametros informados no formulario para dentro do banco... No mesmo arquivo tenho o "body" com o formulario de Cadastro de Usuários que é exibido na tela e preenchido pelo usuário.

3- Problemas:
Implementar o busca CEP 
Implementar botões e listas no cadastroUsuario pois o banco não salva a opção escolida
Implementar segurança no momento de logar com a senha emcripitada