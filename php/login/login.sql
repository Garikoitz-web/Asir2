CREATE DATABASE IF NOT EXISTS login;

USE login;

CREATE TABLE IF NOT EXISTS users (User varchar(20) NOT NULL PRIMARY KEY, Pass varchar(250));

INSERT INTO users (User, Pass) VALUES ("koxme", "$2y$10$/yhoaDf2YOLwOHBZdjwApe7lim.8zQqOGahzJzwe3xxi5jhDBw4JS");
INSERT INTO users (User, Pass) VALUES ("peru", "$2y$10$ni3fIGXrupwf8hNCIbKaj.xuWg./Vbfa3RQLnJDjLUq6Raz9L1vjK");
