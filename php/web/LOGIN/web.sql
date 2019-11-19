CREATE DATABASE IF NOT EXISTS web;

USE web;

CREATE TABLE IF NOT EXISTS users (
  user varchar(20) NOT NULL PRIMARY KEY,
  pass varchar(250)
);

INSERT INTO users (user, pass) VALUES ("root", "root");

INSERT INTO users (User, Pass) VALUES ("peru", "$2y$10$ni3fIGXrupwf8hNCIbKaj.xuWg./Vbfa3RQLnJDjLUq6Raz9L1vjK");

drop table news;
CREATE TABLE IF NOT EXISTS news (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    tittle VARCHAR(100) NOT NULL,
    info VARCHAR(5000) NOT NULL,
    img VARCHAR(100)
);

INSERT INTO news (tittle, info, img) VALUES ("1 tittle","1 info","FEST2.png");
INSERT INTO news (tittle, info, img) VALUES ("2 tittle","2 info","FEST3.png");
