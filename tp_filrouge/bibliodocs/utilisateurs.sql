create database IF not exists recitsdubibliodocs;
USE recitsdubibliodocs;

drop TABLE if exists utilisateurs;
create TABLE if not exists utilisateurs(
    identifiantutilisateur INT primary key AUTO_INCREMENT,
    pseudoutilisateur VARCHAR(50) NOT NULL,
    emailutilisateur VARCHAR(100) NOT NULL
);

insert into utilisateurs(pseudoutilisateur, emailutilisateur) values ("Zrobard","zrobard.georges@exemple.com");

insert into utilisateurs(pseud)