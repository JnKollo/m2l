
<?php

function connexionbdd() {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=m2l;charset=utf8', 'root', '');
        $bdd ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

/* inscription sur le site de la maison des ligues
function inscriptionSite($nom,$prenom,$idAssociation,$fonction,$adresse,$codePostal,$email,$tel,$pseudogitg,$mdp){
    $reussi = false;
    $bdd = Connexion();
    if ($bdd != false) {
        
        $req = "INSERT INTO personnelassociatif VALUES (null,:pseudo,:mdp,:adresse,:email,:nom,:prenom,:tel,:codePostal,:fonction,1,:idAssociation)";
        
        $pdoStatement = $pdo->prepare($req);
        $pdoStatement->bindParam(":pseudo", $login);
        $pdoStatement->bindParam(":mdp", $mdp);
        $pdoStatement->bindParam(":adresse", $adresse);
        $pdoStatement->bindParam(":email", $email);
        $pdoStatement->bindParam(":nom", $nom);
        $pdoStatement->bindParam(":prenom", $prenom);
        $pdoStatement->bindParam(":tel", $tel);
        $pdoStatement->bindParam(":codePostal", $codePostal);
        $pdoStatement->bindParam(":fonction", $fonction);
        $pdoStatement->bindParam(":idAssociation", $idAssociation);
        
        $pdoStatement->execute();
        $reussi = $pdoStatement->rowCount();
    }
    return $reussi;
}
 * 
 */
