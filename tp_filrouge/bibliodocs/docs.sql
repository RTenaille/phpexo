create database IF not exists recitsDuBibliodocs;
USE recitsDuBibliodocs;

drop table IF exists docs;
create table IF not exists docs
(
    identifiantdoc INT primary key AUTO_INCREMENT,
    titredoc varchar(200) NOT NULL,
    liendoc varchar(250),

);