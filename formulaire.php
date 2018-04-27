<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=m2l;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
  
//verifiez que le bouton submit a été posté
if (!$_POST['submit']) {
	throw new Exception('Please submit ');
  // echo ('ca marche pas');
} 

extract($_POST);
$fetchUser = "SELECT email FROM 'perso'";
$bdd->exec($fetchUser);

//code de verification
        //Si le pseudo est déja utilisé
        if ($fetchUser['email'] === $_POST['email']) {
            $display['email'] = "Pseudo déja utilisé!";
        } else {
            $display['email'] = "Veuillez remplir tous les champs";
        }

$insert = "INSERT INTO perso (pseudo, mdp, etc) VALUES ($pseudo, $mdp)";

$bdd->exec($req);

echo $display;