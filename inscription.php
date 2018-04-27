<?php include 'config/gestionBase.php';

if (isset($_POST['inscription'])) {
    throw new exception ('Veuillez cliquer sur le bouton valider');

}

$fetchUser = "SELECT email FROM personnelassociatif";
$bdd->exec($fetchUser);
/*
    if (!empty($_POST['pseudo']) && !empty($_POST['mdp']) && !empty($_POST['mdpc']) && !empty($_POST['adresse']) && !empty($_POST['email']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['tel']) && !empty($_POST['codepostal']) && !empty($_POST['fonction']) && !empty($_POST['association'])) {

        $errors = []; //Tableau qui contient l'ensemble des erreurs

        extract($_POST);

        if (mb_strlen($pseudo) < 3) {
            $errors[] = "Pseudo trop court! (Minimun 3 caracteres)";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Adresse email invalide";
        }
        if (mb_strlen($mdp) < 6) {
            $errors[] = "Mot de passe trop court! (Minimun 6 caracteres)";
        } else {
            //Si les deux mots de passes sont differents
            if ($mdp != $mdpc) {
                $errors[] = "Les deux mots de passe ne concordent pas!";
            } else {
                $errors[] = " Veuillez remplir les champs mot de passe.";
            }
        }
*/
        //Si l'email est déja utilisé
        if ($fetchUser['email']=== $_POST['email']) {
            $display['email'] = "email déja utilisé!";
        } else {
            $display['email'] = "Veuillez remplir tous les champs";
        }
        
    
    

?>





<?php

require 'pages/inscription_vue.php';


