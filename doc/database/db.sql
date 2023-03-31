create database bradcases;
use bradcases;

CREATE TABLE texts(
	id int auto_increment primary key NOT NULL,
	title_pt varchar(50) NULL,
	title_en varchar(50) NULL,
	body_pt text NULL,
	body_en text NULL	
);


