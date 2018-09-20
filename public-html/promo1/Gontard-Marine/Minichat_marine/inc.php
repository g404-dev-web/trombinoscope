<?php
// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host='.(getenv('MYSQL_HOST') ?: 'localhost').';dbname=mini_chat_marine;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Récupération des 10 derniers messages
// m = alias de messages
$reponse = $bdd->query('SELECT m.*, u.color FROM messages m LEFT JOIN users u on m.pseudo = u.pseudo ORDER BY ID DESC LIMIT 0, 10');


//Afficher probleme mysql
if(!$reponse){
    die($bdd->errorInfo()[2]);}


// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
foreach ($reponse->fetchAll() as $message) {
    echo '<div class="pseu"><p><strong style = "color:' . $message["color"].'">' . htmlspecialchars($message['pseudo']) .' : </strong>' . htmlspecialchars($message['message']) .'</div><h4><span class="badge2 badge-secondary">' . $message['date_message'] .'</span></h4></p><br>';
}
$reponse->closeCursor();


?>