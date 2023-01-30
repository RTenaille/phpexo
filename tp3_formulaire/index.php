<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malbiche</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="banniere">
        <h1>Marlboromen's</h1>
        <h2>Malbiche</h2>
    </div>

    <fieldset>
    <form action="reponse.php" id="name" method="post">
        <div id="nom">
            <select name="nameOptions" id="nameOption">
                <option id="madame" value="madame">Meudeume</option>
                <option id="monsieur" value="monsieur">Meussieu</option>
            </select>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" placeholder="Votre nom">
        </div>
        <div id="prenom">
            <label for="prenom">Prenom :</label>
            <input type="text" name="prenom" placeholder="Votre prénom">
        </div>
        <div id="birthday">
            <label for="birthday">Votre année de naissance :</label>
            <input type="date" name="birthday" value="2023-01-01">
        </div>
        <div id="idUtilisateur">
            <label for="identifiant">Votre identifiant</label>
            <input type="text" name="identifiantUtilisateur" placeholder="000000">
        </div>
        <div id="motDePasse">
            <label for="mdp">Votre mot de passe :</label>
            <input type="password" name="mdp" placeholder="*******">
        </div>
        <div id="radioFormulaire">
            <label for="radioForm">Êtes-vous d'accord avec ces informations ?</label>
            <label for="oui">Uhi</label>
            <input type="radio" name="oui" value="oui">
            <label for="non">Nan</label>
            <input type="radio" name="non" value="non">
        </div>
        <div id="boutonCheckFormulaire">
            <label for="check">Je débute en PHP.</label>
            <input type="checkbox" name="check" value="niveauPhp">
        </div>

        <input type="submit" value="Envoyer">
    </form>
    </fieldset>
</body>
</html>