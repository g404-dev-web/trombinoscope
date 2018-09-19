<?php
try
{
    $bdd = new PDO('mysql:host=trombinoscopemaster_mariadb_1;dbname=simplon;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


?>  