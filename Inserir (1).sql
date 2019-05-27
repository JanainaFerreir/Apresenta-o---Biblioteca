/*INSERINDO CLIENTE*/

USE BIBLIOTECA;

INSERT INTO CLIENTE (nome,email,sexo,dt_nascimento,cpf, senha) 
VALUES ('Vitor Bonito', 'vitor13m2003@gmail.com', 'M', 20030613, '48302352845', 'lalala');

SELECT 
    *
FROM
    CLIENTE;

/*INSERINDO LIVROS*/

INSERT INTO LIVROS(nome, Qtd_total, Qtd_disponivel)
VALUES ('Divergente', 10, 8);

SELECT 
    *
FROM
    LIVROS;
    
/*INSERINDO EMPRESTIMO*/
INSERT INTO EMPRESTIMO(id_cliente, id_livro, dt_retirada, dt_entrega, taxa)
VALUES (1, 1, 20190508, 20190515, 5);

SELECT 
    *
FROM
    EMPRESTIMO;
    
/*INNER JOIN PRA VER QUEM FEZ O EMPRESTIMOE QUAL É O LIVRO*/

SELECT 
    CLIENTE.nome Cliente,
    LIVROS.nome Livro,
    dt_retirada Retirada,
    dt_entrega Entrega,
    taxa Taxa
FROM
    CLIENTE
        INNER JOIN
    EMPRESTIMO ON CLIENTE.id = EMPRESTIMO.id_cliente
        INNER JOIN
    LIVROS ON LIVROS.id = EMPRESTIMO.id_livro;
    
INSERT INTO CLIENTE (nome,email,sexo,dt_nascimento,cpf, senha) 
VALUES ('vivi', 'heyvitoria.lopes@gmail.com', 'F', 20030225, '44664992840', 'oi');    
    
    
    
    SELECT CLIENTE.nome Cliente, LIVROS.nome Livros, dt_retirada Retirada,
dt_entrega Entrega, taxa Taxa FROM CLIENTE INNER JOIN EMPRESTIMO ON CLIENTE.id = 
EMPRESTIMO.id_cliente INNER JOIN LIVROS ON LIVROS.id = EMPRESTIMO.id_livro WHERE ID_CLIENTE = 1;