CREATE DATABASE IF NOT EXISTS instagram;

USE instagram;

CREATE TABLE IF NOT EXISTS users (
  user varchar(20) NOT NULL PRIMARY KEY,
  password varchar(250)
);

INSERT INTO users (user, password) VALUES ("root", "root");
