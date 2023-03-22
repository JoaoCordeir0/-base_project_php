create database mvc_php;
use mvc_php;

CREATE TABLE texts(
	id int auto_increment primary key NOT NULL,
	title varchar(50) NULL,
	nome_ingles varchar(50) NULL,
	body text NULL,
	body_ingles text NULL	
);


