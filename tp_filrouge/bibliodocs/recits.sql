

USE recitsDuBibliodocs;

drop table IF exists recits;
create table IF not exists recits
(
    identifiantrecit INT primary key AUTO_INCREMENT,
    titrerecit varchar(200) NOT NULL,
    descriptionrecit TEXT NOT NULL,
    illustrationRecit varchar(250),
    texterecit TEXT NOT NULL,
    num_utilisateur INT

);

insert into recits (titrerecit, descriptionrecit, illustrationrecit, texterecit)values("La Foire à la Saucisse", "L'an 40 après le grand effondrement de la Bourse. Alors que le monde se reconstruit non sans mal, la bonne tenue ou non de la Foire à la Saucisse annuelle pourrait compromettre l'intégrité du Royaume tout entier.", "lien pour une image trop cool", "Cursus euismod quis viverra nibh cras. Amet massa vitae tortor condimentum lacinia quis vel eros donec. Feugiat scelerisque varius morbi enim nunc. Quam vulputate dignissim suspendisse in. Feugiat vivamus at augue eget arcu dictum. Mi quis hendrerit dolor magna. Volutpat maecenas volutpat blandit aliquam etiam erat velit scelerisque in. Eget magna fermentum iaculis eu. Enim praesent elementum facilisis leo vel fringilla est.");

insert into recits (titrerecit, descriptionrecit, illustrationrecit, texterecit)values("Le Retour de la Saucisse", "Dix ans après les évènements de la Révolution avortée, le Chevalier Juno Brosé voyage au travers du Royaume, se rendant compte qu'un vent de colère souffle une nouvelle fois du côté des petites gens, la Saucisse retrouvant peu à peu place sur les étendards agités par les foules.", "lien pour une image trop cool", "Cursus euismod quis viverra nibh cras. Amet massa vitae tortor condimentum lacinia quis vel eros donec. Feugiat scelerisque varius morbi enim nunc. Quam vulputate dignissim suspendisse in. Feugiat vivamus at augue eget arcu dictum. Mi quis hendrerit dolor magna. Volutpat maecenas volutpat blandit aliquam etiam erat velit scelerisque in. Eget magna fermentum iaculis eu. Enim praesent elementum facilisis leo vel fringilla est.");

insert into recits (titrerecit, descriptionrecit, illustrationrecit, texterecit)values("Les Héritiers des Boyaux", "Les déchirures sociales du siècle dernier ont été oublié depuis longtemps et l'histoire de Juno Brosé aussi. Pourtant, à la marge du Nouvel Empire Méridional, l'on se rassemble pour célébrer une Foire ancienne, dont les énigmatiques organisateurs semblent décidés à agiter une nouvelle fois la Bannière de la Saucisse.", "lien pour une image trop cool", "Cursus euismod quis viverra nibh cras. Amet massa vitae tortor condimentum lacinia quis vel eros donec. Feugiat scelerisque varius morbi enim nunc. Quam vulputate dignissim suspendisse in. Feugiat vivamus at augue eget arcu dictum. Mi quis hendrerit dolor magna. Volutpat maecenas volutpat blandit aliquam etiam erat velit scelerisque in. Eget magna fermentum iaculis eu. Enim praesent elementum facilisis leo vel fringilla est.");

insert into recits (titrerecit, descriptionrecit, illustrationrecit, texterecit)values("L'Andouille de Trop", "La guerre civile a éclaté au sein de l'Empire, et bien que les instigateurs de la Foire à la Saucisse aient été jetés en prison, leurs partisans quant à eux sont bien décidés à continuer la lutte. L'héritier du célèbre Juno Brosé devra choisir son camp.", "lien pour une image trop cool", "Cursus euismod quis viverra nibh cras. Amet massa vitae tortor condimentum lacinia quis vel eros donec. Feugiat scelerisque varius morbi enim nunc. Quam vulputate dignissim suspendisse in. Feugiat vivamus at augue eget arcu dictum. Mi quis hendrerit dolor magna. Volutpat maecenas volutpat blandit aliquam etiam erat velit scelerisque in. Eget magna fermentum iaculis eu. Enim praesent elementum facilisis leo vel fringilla est.");

insert into recits (titrerecit, descriptionrecit, illustrationrecit, texterecit)values("Les Saucisses sont cuites", "L'Armée à la Bannière Charcutière se masse aux portes du domaine impérial qui s'attend à recevoir de l'aide des principautés voisines. L'Héritier Brosé quant à lui doit se faufiler entre les combats pour exfiltrer son cousin depuis les geôles de l'Impératrice.", "lien pour une image trop cool", "Cursus euismod quis viverra nibh cras. Amet massa vitae tortor condimentum lacinia quis vel eros donec. Feugiat scelerisque varius morbi enim nunc. Quam vulputate dignissim suspendisse in. Feugiat vivamus at augue eget arcu dictum. Mi quis hendrerit dolor magna. Volutpat maecenas volutpat blandit aliquam etiam erat velit scelerisque in. Eget magna fermentum iaculis eu. Enim praesent elementum facilisis leo vel fringilla est.");
