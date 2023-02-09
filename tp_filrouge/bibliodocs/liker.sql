
USE recitsdubibliodocs;

drop table if exists liker;
create table if not exists liker(
    num_utilisateur INT,
    num_recit INT
)