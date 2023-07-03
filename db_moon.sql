
CREATE TABLE `Animal` (
    `idAnimal` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `apelido` varchar(255) NOT NULL,
    `especie` varchar(100) NOT NULL,
    `sexo` varchar(100) NOT NULL
);

CREATE TABLE `Espécie` (
    `idEspecie` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `especie` varchar(300) NOT NULL
);

CREATE TABLE `Região` (
    `idRegiao` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `regiao` varchar(300) NOT NULL
);

CREATE TABLE `Cidade` (
    `idCidade` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `cidade` varchar(300) NOT NULL
);

CREATE TABLE `Cliente_Animal` (
    `idAnimal` INT NOT NULL,
    FOREIGN KEY (`idAnimal`) REFERENCES `Animal`(`idAnimal`)
);


CREATE TABLE `Cadastro` (
    `idCadastro` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `nome` varchar(100) NOT NULL,
    `cpf` INT NOT NULL,
    `telefone` varchar(20) NOT NULL,
    `email` varchar(500) NOT NULL,
    `senha` varchar(100) NOT NULL
);

CREATE TABLE `Adocao` (
    `idAdocao` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `email` varchar(300) NOT NULL,
    `telefone` varchar(20) NOT NULL,
    `idAnimal` INT NOT NULL,
    `idCidade` INT NOT NULL,
    `idRegiao` INT NOT NULL,
    FOREIGN KEY (`idAnimal`) REFERENCES `Animal`(`idAnimal`),
    FOREIGN KEY (`idCidade`) REFERENCES `Cidade`(`idCidade`),
    FOREIGN KEY (`idRegiao`) REFERENCES `Região`(`idRegiao`)
);

CREATE TABLE `Doacao`(
`idDoacao` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
`nome` varchar(100) NOT NULL,
`raca` varchar(100) NOT NULL,
`sexo` varchar(100) NOT NULL,
`informacoes` varchar(5000) NOT NULL,
`imagem` varchar(100),
`idCidade` INT NOT NULL, 
FOREIGN KEY (`idCidade`) REFERENCES `Cidade`(`idCidade`)
);

