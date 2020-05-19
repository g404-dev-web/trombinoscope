<?php 
use \Colors\RandomColor;
include 'vendor/autoload.php';

// Connexion base de donnée
try
{

    $bdd = new PDO('mysql:host='.(getenv('MYSQL_HOST') ?: 'localhost').';dbname=mini_chat_marine;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Enregistrer adresse ip et user agent
function get_ip() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}


// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO messages (pseudo, message, IP, user_agent) VALUES(?, ?, ?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message'], get_ip(), $_SERVER['HTTP_USER_AGENT']));

setcookie('pseudo', $_POST['pseudo'], time() + 3600*24*365,'/',null,false,true);

if(!$req){
    die($bdd->errorInfo()[2]); }



// est ce que le pseudo existe deja en bdd ?
$nicknameExistQuery = $bdd->prepare('SELECT count(*) FROM users WHERE pseudo = ?');
$nicknameExistQuery->execute(array($_POST['pseudo']));

if(!$nicknameExistQuery){
    die($bdd->errorInfo()[2]);
}


//si le pseudo n'existe pas, on peut l'enregistrer avec sa couleur
if($nicknameExistQuery->fetchColumn() === "0") {
    $nicknameExistQuery = $bdd->prepare('INSERT INTO users (pseudo, color) VALUES (?, ?)');
    $nicknameExistQuery->execute(array($_POST["pseudo"], RandomColor::one()));
}

// Effectuer ici la requête qui insère le message Puis rediriger vers minichat.php:
// header('Location: index.php');
?>
