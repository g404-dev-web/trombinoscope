<?php
try
{
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=simplon;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


?>  