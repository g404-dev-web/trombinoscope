<?php
include ('conection.php');

$messagesQuery=$bdd->query('SELECT pseudo,  message, date FROM messages ORDER BY ID DESC LIMIT 0, 10');
if (!$insertQuery){
    die("erreur mysql: ".$bdd->errorInfo()[2]."\n<br>".$sql);
}