CREATE DATABASE workdone;

CREATE TABLE usuario (
	usuarioId INT PRIMARY KEY AUTO_INCREMENT,
    nomeUsuario VARCHAR(60),
    senha VARCHAR(100),
    email VARCHAR(120),
    telefone VARCHAR(11),
    sexo CHAR(1)
);

CREATE TABLE projetos (
	projetoId INT PRIMARY KEY AUTO_INCREMENT,
    nomeProjeto VARCHAR(60),
    prazo DATE,
    descricao TEXT,
    situacao CHAR(1),
    usuarioId INT,
    FOREIGN KEY (usuarioId) REFERENCES usuario(usuarioId)
);

CREATE TABLE tarefas (
	tarefaId INT PRIMARY KEY AUTO_INCREMENT,
    nomeTarefa VARCHAR(60),
    descricao TEXT,
    prazo DATE,
    situacao CHAR(1),
    projetoId INT,
    FOREIGN KEY (projetoId) REFERENCES projetos(projetoId)
);

CREATE TABLE blocoNotas (
	notasId INT PRIMARY KEY AUTO_INCREMENT,
	notas TEXT,
    usuarioId INT,
    FOREIGN KEY (usuarioId) REFERENCES usuario(usuarioId)
);
