create database IF not exists recitsdubibliodocs;
USE recitsdubibliodocs;

drop TABLE if exists utilisateurs;
create TABLE if not exists utilisateurs(
    identifiantutilisateur INT primary key AUTO_INCREMENT,
    nomutilisateur VARCHAR(50) NOT NULL,
    prenomutilisateur VARCHAR(100) NOT NULL
);

