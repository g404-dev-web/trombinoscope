<?php

// connexion à la base de données
include 'connexion.php';

// Récupération des 10 derniers messages et la couleur (faire une jointure de table)  ( LEFT OUTER JOIN  ) 
//$message = $bdd->query('SELECT id, pseudo, message , date_ FROM minichat ORDER BY id DESC LIMIT 0, 10');
     

// Jointure des deux tables (user et minichat) et récupérer les 10 derniers messages, il est important de faire étape par étape 
$messagesQuery = $bdd->query(
    'SELECT m.* , u.color 
    FROM minichat m LEFT OUTER JOIN users u 
    ON m.pseudo = u.pseudo 
    ORDER BY id DESC 
    LIMIT 0, 10'
);
// nous indique s'il y a une erreur sql et nous l'affiche
if(!$messagesQuery) {
    die('Erreur sql : '.$bdd->errorInfo()[2]);
}

$messages = array_reverse($messagesQuery->fetchAll());

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars et la fonction reverse inverse l'ordre du tableau)
foreach ($messages as $message) {
    echo "<div class='col-12' id='messages-container'>
        <div class='card mb-0 message'>
            <div class='card-body'>
                <p class='my-0'>
                    <strong style='color:".$message['color']."'>
                        " . htmlspecialchars($message['pseudo']) . "
                    </strong>
                    : " . htmlspecialchars($message['message']) . " 
                    <span class='badge badge-secondary float-right created_at'>" . $message['date_'] . "</span>
                </p>
            </div>
        </div>
    </div>";
}

// on met style ='color 