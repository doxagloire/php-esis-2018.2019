<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Explique-Simplement</title>
    <link rel="stylesheet" type="text/css"  href="style.css" />
</head>
<body>
    <h1>Explique Simplement</h1>
    <hr>
    <form method="post" action="seconnecter.php" >
    <h2>Se connecter</h2>
        <label for="pseudo" >Pseudo :</label><input type="text" name="pseudo" id="pseudo" />
        <br/><br/>
        <label for="pwd" >Mot de passe :</label><input type="text" name="pwd" id="pwd" /><br/><br/>
        <input type="submit" value="Connexion" />
    </form>
    <br/><br/><hr><hr><br/>
    <form method="post" action="compte.php" >
    <h2>Creer un compte</h2>
        <label for="pseudo" >Pseudo :</label><input type="text" name="pseudo" id="pseudo" />
        <br/><br/>
        <label for="pwd" >Mot de passe :</label><input type="text" name="pwd" id="pwd" />
        <br/><br/>
        <label for="confpwd" >Confirmer pwd :</label><input type="text" name="confpwd" id="confpwd" />
        <br/><br/>
        <label for="email" >Email :</label><input type="text" name="email" id="email" />
        <br/><br/>
        <label for="sexe" >Sexe :</label><select name="sexe" id="sexe" ><option value="M" selected="selected" >M</option><option value="F" >F</option></select><br/><br/><input type="submit" value="Creer" />
    </form>
</body>
</html>