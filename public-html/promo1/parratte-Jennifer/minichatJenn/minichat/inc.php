<?php

// Connexion à la base de données
include 'conection.php';


// Récupération des 10 derniers messages

$reponse=$bdd->query('SELECT m.pseudo, m.message, m.date , u.color FROM messages m LEFT OUTER JOIN users u ON m.pseudo=u.pseudo ORDER BY ID DESC LIMIT 0, 10');


// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)

while ($donnees=$reponse->fetch()){
    echo '<div class="list-group-item"><p><strong style= "color: '.$donnees['color']. '">' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . ' ' . ($donnees['date']) . '</p></div>';
}


$reponse->closeCursor();


?>