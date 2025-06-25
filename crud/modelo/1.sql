CREATE DATABASE IF NOT EXISTS crud

USE crud;

CREATE TABLE usuario(
    id INT AUTO_INCREMENT PRIMARY KEY
    nome varchar(200),
    email varchar(200),
    senha varchar(200)
);

CREATE TABLE IF NOT EXITS produto(
    id INT AUTO_INCREMENTPRIMARY KEY,
    nome varchar(200) not null,
    valor decimal(2,2) not null
)