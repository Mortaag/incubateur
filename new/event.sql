drop database if exists creation_event;
create database creation_event;
use creation_event;

create table evenement(id INT primary key auto_increment not null, 
name varchar(255) not null, 
description TEXT not null, 
realised_by varchar(255) not null, 
image_name text,
meeting_date TIMESTAMP);

create table ticket(id INT primary key auto_increment not null, 
name varchar(255) not null, 
ticket_number int not null, 
text TEXT not null, 
image_qrcode text , 
);