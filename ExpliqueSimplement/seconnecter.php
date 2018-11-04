<?php

    if(isset($_POST['pseudo'], $_POST['pwd']))
    {
        $pseudo = $_POST['pseudo'];
        $pwd = $_POST['pwd'];
        $db = new PDO('mysql:host=localhost;dbname=expliquesimplement', 'root', '');
        $str = 'SELECT * FROM compte WHERE pseudo = :pseudo AND pwd = :pwd';
        $r = $db->prepare($str);
        $r->execute(array(
            'pseudo' => $pseudo,
            'pwd' => $pwd
        ));

        $result = $r->fetch();

        if(!$result)
        {
            echo "Mauvais identifiant ou mot de passe";
        }
        else
        {
            session_start();
            $_SESSION['pseudo'] = $pseudo;
            echo "vous etes connecter!!!";
        }

    }
?>