<?php
// Connexion à la base de données

try{

    $bdd = new PDO('mysql:host=localhost;dbname=minichatJenn;charset=utf8', 'root', '');

}

catch(Exception $e){

        die('Erreur : connection échouée '.$e->getMessage());       //affiche qu'il y a une erreur ici
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  //par défaut Mysql vous renverra une erreur
}
