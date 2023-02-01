
--création de la base de données
create database IF not exists recitsDuBibliodocs;
USE recitsDuBibliodocs;
--création de la table recits
drop table IF exists recits;
create table IF not exists recits
(
    identifiantrecit INT primary key AUTO_INCREMENT,
    titrerecit varchar(200) NOT NULL,
    descriptionrecit TEXT NOT NULL,
    illustrationRecit varchar(250),
    texterecit TEXT NOT NULL

);
--ajout de récits
insert into recits (titrerecit, descriptionrecit, illustrationrecit, texterecit)values("La Foire à la Saucisse", "L'an 40 après le grand effondrement de la Bourse. Alors que le monde se reconstruit non sans mal, la bonne tenue ou non de la Foire à la Saucisse annuelle pourrait compromettre l'intégrité du Royaume tout entier.", "lien pour une image trop cool", "Cursus euismod quis viverra nibh cras. Amet massa vitae tortor condimentum lacinia quis vel eros donec. Feugiat scelerisque varius morbi enim nunc. Quam vulputate dignissim suspendisse in. Feugiat vivamus at augue eget arcu dictum. Mi quis hendrerit dolor magna. Volutpat maecenas volutpat blandit aliquam etiam erat velit scelerisque in. Eget magna fermentum iaculis eu. Enim praesent elementum facilisis leo vel fringilla est.");
