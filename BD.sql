DROP DATABASE IF EXISTS biblioteca;
CREATE DATABASE IF NOT EXISTS biblioteca;
USE biblioteca;

CREATE TABLE IF NOT EXISTS CLIENTE (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    sexo ENUM('F', 'M') DEFAULT 'F',
    dt_nascimento DATE NOT NULL,
    cpf VARCHAR(11) NOT NULL,
    senha VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS LIVROS (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    Qtd_total int NOT NULL,
    Qtd_disponivel int NOT NULL
);

CREATE TABLE IF NOT EXISTS EMPRESTIMO (
    codigo INT PRIMARY KEY AUTO_INCREMENT,
    id_cliente INT NOT NULL,
    id_livro INT NOT NULL,
    dt_retirada DATE NOT NULL,
    dt_entrega DATE NOT NULL,
    taxa INT,
    CONSTRAINT fk_Cliente FOREIGN KEY (id_cliente)
        REFERENCES CLIENTE (id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT fk_Livro FOREIGN KEY (id_livro)
        REFERENCES LIVROS (id)
        ON UPDATE CASCADE ON DELETE CASCADE
);

select * from livros;
select * from cliente;
select * from emprestimo;

/*CRIEI UM NOVO USUÁRIO*/
INSERT INTO CLIENTE (nome,email,sexo,dt_nascimento,cpf, senha) 
VALUES ('vivi', 'heyvitoria.lopes@gmail.com', 'F', 20030225, '44664992840', 'oi');  

/*SÓ INSERI UM LIVRO. NÃO É NECESSÁRIO FAZER ISSO POIS VCS JÁ TÊM OS LIVROS*/
insert into livros (nome, qtd_total, qtd_disponivel) values ('Crave a marca', 2, 2),
															('Convergente', 4, 4),
															('Jogos Vorazes', 4, 4),
															('Perdido em Marte', 7, 7),
															('A Rainha Vermelha', 10, 10),
															('A Escolha', 2, 2),
															('Moby Dick', 11, 11),
															('Eu sou Malala', 1, 1),
															('O Domador de Ventos', 5, 5),
															('1984', 3, 3);



SET SQL_SAFE_UPDATES = 0; /*FAÇA ISSO ANTES DO UPDATE*/


/*SUBTRAI 1 EXEMPLAR DISPONÍVEL, QUE FOI EMPRESTADO*/
update livros set qtd_disponivel = qtd_disponivel-1 where nome = 'Jogos Vorazes';

select id from cliente where  email = "vitor13m2003@gmail.com" or cpf="48302352845";

/*INSERI UM EMPRÉSTIMO, COM BASE NO ID DO LIVRO, QUE FOI REQUERIDO DURANTE A INSERÇÃO*/
insert into emprestimo (id_cliente, id_livro, dt_retirada, dt_entrega, taxa) values (2,(select id from livros where nome = 'Jogos Vorazes'), '2019-05-19','2019-06-09',0); 



SELECT CLIENTE.nome  , LIVROS.nome  , dt_retirada  ,
dt_entrega  , taxa  FROM CLIENTE INNER JOIN EMPRESTIMO ON CLIENTE.id = 
EMPRESTIMO.id_cliente INNER JOIN LIVROS ON LIVROS.id = EMPRESTIMO.id_livro WHERE Cliente.ID = 1;



SELECT CLIENTE.nome  , LIVROS.nome  , date_format(dt_retirada,'%d-%m-%Y')   ,
date_format(dt_entrega,'%d-%m-%Y')  , taxa  FROM CLIENTE INNER JOIN EMPRESTIMO ON CLIENTE.id = 
EMPRESTIMO.id_cliente INNER JOIN LIVROS ON LIVROS.id = EMPRESTIMO.id_livro WHERE Cliente.ID = 1;