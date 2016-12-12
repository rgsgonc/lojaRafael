CREATE DATABASE loja;
USE loja;

CREATE TABLE produtos (id integer auto_increment primary key, nome varchar (255), preco double, descricao text, categoria_id integer, usado boolean default false);

CREATE TABLE categorias (id integer auto_increment primary key, nome varchar (255));

CREATE TABLE usuarios (id integer auto_increment primary key, email varchar (255),senha varchar(255));


INSERT INTO categorias (nome) values ("Alimento");
INSERT INTO categorias (nome) values ("Bebidas");
INSERT INTO produtos (nome,preco,descricao,categoria_id,usado) values ("Arroz", 2.5, "Arroz branco", 1, true);
INSERT INTO produtos (nome,preco,descricao,categoria_id,usado) values ("Macarrão", 3.5, "Macarrão Parafuso", 1, false);
INSERT INTO produtos (nome,preco,descricao,categoria_id,usado) values ("Coca-Cola", 5.5, "Coca 2 Litros", 2, true);
INSERT INTO usuarios (email,senha) values ("rgs.gonc@gmail.com", "e10adc3949ba59abbe56e057f20f883e");
