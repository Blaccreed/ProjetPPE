<?php
/*
Page: connexion.php
*/
session_start(); // à mettre tout en haut du fichier .php, cette fonction propre à PHP servira à maintenir la $_SESSION
if(isset($_POST['connexion'])) { // si le bouton "Connexion" est appuyé
    // on vérifie que le champ "Pseudo" n'est pas vide
    // empty vérifie à la fois si le champ est vide et si le champ existe belle et bien (is set)
    if(empty($_POST['email'])) {
        echo "Le champ Pseudo est vide.";
    } else {
        // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if(empty($_POST['motdepasse'])) {
            echo "Le champ Mot de passe est vide.";
        } else {

            $email = htmlentities($_POST['email'], ENT_QUOTES, "ISO-8859-1"); // le htmlentities() passera les guillemets en entités HTML, ce qui empêchera les injections SQL
            $motdepasse = htmlentities($_POST['motdepasse'], ENT_QUOTES, "ISO-8859-1");

            $mysqli = mysqli_connect("localhost", "root", "root", "sinama") or die(mysql_error());;
            if(!$mysqli){
                echo "Erreur de connexion à la base de données.";
            } else {
                $requete = mysqli_query($mysqli,"SELECT * FROM user WHERE email = '".$email."' AND motdepasse = '".$motdepasse."'") or die(mysql_error());
                $result = mysqli_fetch_row($requete);
                $id = $result[0];
                $nom = $result[1];
                $prenom = $result[2];
                if(mysqli_num_rows($requete) == 0) {
                    echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
                } else
                {
                    // on ouvre la session avec $_SESSION:
                    $_SESSION['nom'] = $nom;
                    $_SESSION['prenom'] = $prenom;
                    $_SESSION['id'] = $id; // la session peut être appelée différemment et son contenu aussi peut être autre chose que le pseudo
                    echo "Vous êtes à présent connecté !";
                    header("Location: accueil.php");
                }
            }
        }
    }
}
?>
