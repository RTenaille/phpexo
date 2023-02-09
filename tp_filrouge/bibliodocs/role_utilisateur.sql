USE recitsdubibliodocs;

drop TABLE if exists role_utilisateur;
create TABLE if not exists role_utilisateur(
    identifiant_role INT primary key AUTO_INCREMENT not null,
    intitule_role VARCHAR(50) not null
)