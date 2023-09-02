CREATE DATABASE sistema_puc_final;

CREATE TABLE usuarios (
	id_usuario INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
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

INSERT INTO categorias(nome, data_cadastro) VALUES ('Cozinha', NOW());

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

INSERT INTO produtos(nome, id_marca, id_categoria, id_fornecedor, observacoes, data_cadastro)
VALUES
('Panela Pressão 24cm 6 Litros Vancouver Vermelho Tramontina', 1, 1, 1, 'Produto projetado para fogões à gás, elétrico, vitrocerâmico', NOW());
('Panela Pressão 32cm 8 Litros Vancouver Vermelho Tramontina', 1, 1, 1, 'Produto projetado para fogões à gás, elétrico, vitrocerâmico 32 Litros', NOW());

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

INSERT INTO estoques(nome, cep, logradouro, complemento, bairro, uf, data_cadastro)
VALUES ('Armazém geral', '1600000', 'Rua 1', 'Armazém', 'Bairro 1', 'SP', NOW());

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

INSERT INTO fornecedores(nome_fantasia, razao_social, cpf, cnpj, email, telefone, celular, cep, rua, complemento, bairro, uf, data_cadastro)
VALUES ('John Doe', 'John Doe', '00591084015', '85994079000176', 'johndoe@email.com', '99994444', '11223333', '18000310', 'Rua 1', 'Empresa', 'Bairro 1', 'SP', NOW());

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

INSERT INTO entradas_estoque(id_produto, id_estoque, quantidade, data_entrada_estoque, observacoes)
VALUES (1, 1, 3, NOW(), 'Entrada de estoque teste');

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