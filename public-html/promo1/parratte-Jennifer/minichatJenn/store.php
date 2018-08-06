<?php

// pour la couleur appel du dossier vendor
include ('vendor/autoload.php');
use \Colors\RandomColor;

// Connexion à la base de données
include ('conection.php');

//include ('messages.php pdo');

// fonction pour récupérer l'adresse ip et userAngent
function get_ip() {
    // IP si internet partagé
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    // IP derrière un proxy
    elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    // Sinon : IP normale
    else {
        return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
    }

}


// 1/ Vérifier que le pseudo n'existe pas encore en base de données

// 2/ Si le pseudo n'existe pas dans la table users, on insère

// 3 DAns afficahge des données, récuperer la couleur


// Insertion du message à l'aide d'une requête préparée

$req = $bdd->prepare('INSERT INTO minichatJenn.messages (pseudo, message, date, ip, UserAgent) 
                      VALUES(?, ?, NOW(), ?, ?)');                                                       //$database->query('INSERT INTO messages (nickname, message) VALUES('.$database->quote
                                                                                                        //($_POST["pseudo"]).' , '.$database->quote()))
$req->execute(array($_POST['pseudo'], $_POST['message'], get_ip(), $_SERVER['HTTP_USER_AGENT']));

$pseudoExists= $bdd->prepare('SELECT COUNT(*) FROM minichatJenn.users WHERE pseudo=? ');
$pseudoExists->execute(array($_POST['pseudo']));

$pseudoColor=$pseudoExists -> fetchColumn();

if ($pseudoColor === "0"){
    $sql='INSERT INTO users (pseudo, color) 
    VALUES ("'.$_POST["pseudo"].'", "'.RandomColor::one().'")';
    $insertQuery=$bdd->query($sql);

    if (!$insertQuery){
        die("erreur mysql: ".$bdd->errorInfo()[2]."\n<br>".$sql);
    }
}


setcookie('pseudo',$_POST['pseudo'], time() + 365*24*3600, null, null, false, true);

// Redirection du visiteur vers la page du minichat

//header('Location:chat.php');

?>
