CREATE DATABASE sistema_puc_final;

CREATE TABLE usuarios (
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

CREATE TABLE marcas (
	id_marca INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(200) NOT NULL,
    data_cadastro DATETIME NOT NULL
);

INSERT INTO marcas(nome, data_cadastro) VALUES ('Panela Clubs', NOW());

CREATE TABLE categorias (
	id_categoria INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(200) NOT NULL,
    data_cadastro DATETIME NOT NULL 
);

CREATE TABLE produtos (
	id_produto INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(200) NOT NULL,
    id_marca INTEGER NOT NULL,
    id_categoria INTEGER NOT NULL,
    id_fornecedor INTEGER NOT NULL,
    observacoes VARCHAR(200),
    data_cadastro DATETIME NOT NULL,
    FOREIGN KEY(id_marca) REFERENCES marcas(id_marca),
    FOREIGN KEY(id_categoria) REFERENCES categorias(id_categoria),
    FOREIGN KEY(id_fornecedor) REFERENCES fornecedores(id_fornecedor)
);

CREATE TABLE estoques (
	id_estoque INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(200) NOT NULL,
    cep VARCHAR(8),
    logradouro VARCHAR(100),
    complemento VARCHAR(100),
    bairro VARCHAR(100),
    uf VARCHAR(2),
    data_cadastro DATETIME NOT NULL
);

CREATE TABLE fornecedores (
	id_fornecedor INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome_fantasia VARCHAR(200) NOT NULL,
    razao_social VARCHAR(200) NOT NULL,
    cpf VARCHAR(12) NOT NULL,
    cnpj VARCHAR(14) NOT NULL,
    email VARCHAR(100),
    telefone VARCHAR(16) NOT NULL,
    celular VARCHAR(12) NOT NULL,
    cep VARCHAR(8) NOT NULL,
    rua VARCHAR(100) NOT NULL,
    complemento VARCHAR(100) NOT NULL,
    bairro VARCHAR(100) NOT NULL,
    uf VARCHAR(2) NOT NULL,
    data_cadastro DATETIME NOT NULL
);

CREATE TABLE entradas_estoque (
	id_entrada_estoque INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_produto INTEGER NOT NULL,
    id_estoque INTEGER NOT NULL,
    quantidade INTEGER NOT NULL,
    data_entrada_estoque DATETIME NOT NULL,
    observacoes VARCHAR(200),
    FOREIGN KEY(id_produto) REFERENCES produtos(id_produto),
    FOREIGN KEY(id_estoque) REFERENCES estoques(id_estoque)
);

CREATE TABLE saidas_estoque (
	id_saida_estoque INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_produto INTEGER NOT NULL,
    id_estoque INTEGER NOT NULL,
    quantidade INTEGER NOT NULL,
    data_saida_estoque DATETIME NOT NULL,
    observacoes VARCHAR(200),
    FOREIGN KEY(id_produto) REFERENCES produtos(id_produto),
    FOREIGN KEY(id_estoque) REFERENCES estoques(id_estoque)
);