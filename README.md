# agenda-mvc


# códigos pra criação do banco de dados MYSQL

-- CREATE DATABASE agenda;

-- CREATE TABLE contacts(
 id INT PRIMARY KEY AUTO_INCREMENT,
 name VARCHAR(50) NOT NULL,
 number VARCHAR(20) NOT NULL,
 createdAt DATETIME NOT NULL
 );

* Na classe ConfigDatabase é possivel alterar as configurações de conexão ao Banco de Dados* 