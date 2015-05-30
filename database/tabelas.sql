CREATE TABLE clientes
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome LONGTEXT NOT NULL,
    titulo LONGTEXT NOT NULL,
    morada LONGTEXT NOT NULL,
    username LONGTEXT NOT NULL,
    password LONGTEXT NOT NULL,
    telemovel INT NOT NULL,
    email LONGTEXT NOT NULL
);
CREATE TABLE condutores
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome LONGTEXT NOT NULL,
    apelido LONGTEXT NOT NULL,
    datanascimento DATE NOT NULL,
    ncartaconducao INT NOT NULL
);
CREATE TABLE condutoresclientes
(
    condutor_id INT NOT NULL,
    cliente_id INT NOT NULL,
    FOREIGN KEY (cliente_id) REFERENCES clientes (id) ON DELETE CASCADE,
    FOREIGN KEY (condutor_id) REFERENCES condutores (id) ON DELETE CASCADE
);
CREATE INDEX condutor_id ON condutoresclientes (cliente_id);
CREATE INDEX condutor_id_2 ON condutoresclientes (condutor_id);
CREATE TABLE empresas
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome LONGTEXT NOT NULL,
    morada LONGTEXT NOT NULL,
    username LONGTEXT NOT NULL,
    password LONGTEXT NOT NULL,
    nif INT NOT NULL,
    telefone INT NOT NULL,
    telemovel INT NOT NULL,
    email LONGTEXT NOT NULL
);
CREATE TABLE filiais
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username LONGTEXT NOT NULL,
    password LONGTEXT NOT NULL,
    morada LONGTEXT NOT NULL,
    cidade LONGTEXT NOT NULL,
    telefone INT NOT NULL,
    telemovel INT NOT NULL,
    email LONGTEXT NOT NULL,
    empresa_id INT NOT NULL,
    FOREIGN KEY (empresa_id) REFERENCES empresas (id) ON DELETE CASCADE
);
CREATE TABLE marcacoes
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    datamarcacao DATE NOT NULL,
    datainicio DATE NOT NULL,
    datafim DATE NOT NULL
);
CREATE TABLE marcacoesalugueres
(
    id INT NOT NULL,
    referencia INT NOT NULL,
    veiculo_id INT NOT NULL,
    condutor_id INT NOT NULL,
    cliente_id INT NOT NULL,
    pagamento_id INT NOT NULL,
    FOREIGN KEY (pagamento_id) REFERENCES pagamentos (id) ON DELETE CASCADE,
    FOREIGN KEY (id) REFERENCES marcacoes (id) ON DELETE CASCADE,
    FOREIGN KEY (veiculo_id) REFERENCES veiculos (id) ON DELETE CASCADE,
    FOREIGN KEY (condutor_id) REFERENCES condutores (id) ON DELETE CASCADE,
    FOREIGN KEY (cliente_id) REFERENCES clientes (id) ON DELETE CASCADE
);
CREATE TABLE marcacoesrevisoes
(
    id INT NOT NULL,
    kms INT NOT NULL,
    componentes LONGTEXT NOT NULL,
    veiculo_id INT NOT NULL,
    FOREIGN KEY (veiculo_id) REFERENCES veiculos (id) ON DELETE CASCADE,
    FOREIGN KEY (id) REFERENCES marcacoes (id) ON DELETE CASCADE
);
CREATE TABLE pagamentos
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    montante DOUBLE NOT NULL,
    descricao LONGTEXT NOT NULL,
    data DATE NOT NULL,
    cliente_id INT NOT NULL,
    FOREIGN KEY (cliente_id) REFERENCES clientes (id) ON DELETE CASCADE
);
CREATE TABLE tiposveiculos
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    categoria LONGTEXT NOT NULL,
    npassageiros INT NOT NULL,
    nbagagens INT NOT NULL
);
CREATE TABLE veiculos
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    marca LONGTEXT NOT NULL,
    modelo LONGTEXT NOT NULL,
    matricula LONGTEXT NOT NULL,
    cor LONGTEXT NOT NULL,
    kms INT NOT NULL,
    tipo_id INT NOT NULL,
    filial_id INT NOT NULL,
    FOREIGN KEY (filial_id) REFERENCES filiais (id) ON DELETE CASCADE,
    FOREIGN KEY (tipo_id) REFERENCES tiposveiculos (id) ON DELETE CASCADE
);
