<?php

    if(isset($_POST['pseudo'], $_POST['pwd'], $_POST['confpwd'], $_POST['email'], $_POST['sexe']))
    {
        if($_POST['pwd'] == $_POST['confpwd'])
        {
            $db = new PDO('mysql:host=localhost;dbname=expliquesimplement', 'root', '');

            $str = 'INSERT INTO compte VALUES(null, :pseudo, :pwd, :email, :sexe)';
            $r = $db->prepare($str);
            $r->execute(array(
                'pseudo' => $_POST['pseudo'],
                'pwd' => $_POST['pwd'],
                'email' => $_POST['email'],
                'sexe' => $_POST['sexe']
            ));

            echo '<a href="index.php">Creation Succefully</a>';
        }
        else
        {
            echo "les mot de passe ne correspondent pas<br/>";
            echo '<a href="index.php">Recommencer</a>';
        }
    
    }
    else
    {
        echo "Erreur dans les donnees <br/>";
        echo '<a href="index.php" >Recommencer</a>';
    }
?>