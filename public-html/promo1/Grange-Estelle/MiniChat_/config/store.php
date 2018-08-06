<?php

// use à mettre avant la bibliothéque couleur (autoload.php)
use \Colors\RandomColor;

// insert la librairie color (autoload.php)
include '../vendor/autoload.php';

// connexion à la base de données
include '../include/connexion.php';

// fonction bonne méthode pour l'adresse ip
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



// Insertion du message à l'aide d'une requête préparée (une autre méthode existe )
$req = $bdd->prepare('INSERT INTO minichat (pseudo, message, adresse_ip, user_agent, date_) VALUES(?, ?, ?, ?, NOW())');
    $req->execute(array($_POST['pseudo'], $_POST['message'], get_ip(), $_SERVER['HTTP_USER_AGENT']));


//générer la couleur unique par pseudo
/*est ce que le pseudo existe déjà dans la base de donnée? */
$estExistant = $bdd->query('SELECT count(*) FROM users WHERE pseudo= '. $bdd->quote($_POST['pseudo']));

// faut évité de faire le fetchColumnn directement dans le if, on passe par une autre varibale
$autrevariable = $estExistant->fetchColumn();

if ($autrevariable === "0"){
	//le pseudo n'existe pas on enregistre la couleur et le pseudo dans users exemple : INSERT INTO users (pseudo,color) VALUES ('zestelle2', '#e4b97e')
	$sql= $bdd->query("INSERT INTO users (pseudo,color) 
		VALUES ('"
			.$_POST['pseudo']."','".
			RandomColor::one() ."'		
			   )");
}

/*if (!$estexistant ->fetchColumn() === "0"){
	echo "ton pseudo n'hesite pas";
}*/


// si la couleur existe déjà
//if ($estexistant ->fetchColumn() ==="0"){
//	echo "ton pseudo n'hesite pas";
//}

// enregistrement du cookies
if(isset($_POST['pseudo'])) {
    setcookie('pseudo', $_POST['pseudo'], time()+365*24*3600, "/" );
}


//rafraichissement de la page 
//header('location: ../minichat.php'); // faut faire attention il  n'a aucun espace entre location et ":" AUCUN !