CREATE DATABASE digitalcommerce;
CREATE TABLE `digitalcommerce`.`produtos` (
  `idprodutos` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(55) NOT NULL,
  `categoria` VARCHAR(55) NOT NULL,
  `valor` INT NOT NULL,
  PRIMARY KEY (`idprodutos`),
  UNIQUE INDEX `idprodutos_UNIQUE` (`idprodutos` ASC) VISIBLE);
INSERT INTO `digitalcommerce`.`produtos` (`idprodutos`, `nome`, `categoria`, `valor`) VALUES ('1', 'Monitor', 'eletronicos', '500');
INSERT INTO `digitalcommerce`.`produtos` (`idprodutos`, `nome`, `categoria`, `valor`) VALUES ('2', 'Mouse', 'acessorios', '150');
INSERT INTO `digitalcommerce`.`produtos` (`idprodutos`, `nome`, `categoria`, `valor`) VALUES ('3', 'Teclado', 'acessorios', '250');
INSERT INTO `digitalcommerce`.`produtos` (`idprodutos`, `nome`, `categoria`, `valor`) VALUES ('4', 'Cadeira gamer', 'acessorios', '1500');
INSERT INTO `digitalcommerce`.`produtos` (`idprodutos`, `nome`, `categoria`, `valor`) VALUES ('5', 'HD-SSD', 'peças', '300');
