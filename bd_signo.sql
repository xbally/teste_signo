CREATE DATABASE teste_signo;


USE teste_signo;

CREATE TABLE `usuario` (
  `usuario_id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `email` VARCHAR(150) NOT NULL,
  `senha` VARCHAR(50) NOT NULL,
  `telefone` VARCHAR(50) NOT NULL,
  `data_nascimento` VARCHAR(50) NOT NULL,
  `cep` char(8) NOT NULL,
  `estado` VARCHAR(50) NOT NULL,
  `cidade` VARCHAR(50) NOT NULL
)