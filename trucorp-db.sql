CREATE DATABASE Trucorp;
USE Trucorp;

CREATE TABLE users(
ID int PRIMARY KEY,
Nama Varchar(35),
Kantor Varchar(25)
);

INSERT INTO users VALUES
('202101','Luciano Argantara','Pusat'),
('202102','Argantara Luciano','Cabang'),
('202103','Calamity','Cabang');