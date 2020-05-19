<?php
use PHPUnit\Framework\TestCase;
class MiniChatTest extends TestCase
{
    public function testLeNomDeVotreTest() 
    {
        // Instanciation de la connexion à base de données 
        // utilisée pour vérifier la présence du message dans la table messages
       $pdo = new PDO('mysql:host=127.0.0.1;dbname=minichat;charset=utf8');
        // Définition des données POST qui simulent un message
        $postData = [
            '' =>'',
            '' => ''
        ];
        // Envoi de la requête POST
        $result = $this->postRequest('', $postData);
        // Si $result vaut "" alors c'est bien : la requête s'est executée
        // Si $result vaut FALSE alors c'est pas bien : la requête a échouée
        // Si $result contient quelque chose ici ( une string remplie ), 
        // c'est forcément une erreur retournée par store.php
        
        // Si $result est vide c'est que la requête POST a bien été envoyée.
        // = store.php n'a renvoyé aucune erreur et donc n'a rien affiché.
        $this->assertEmpty();
        // On vérifie que le message existe bien dans la table messages
        $messageQuery = $pdo->query('');
        $message = $messageQuery->fetchAll()[0];
        // Pour vérifier que les datas sont identiques
        $this->assertEquals();
    }   
    
    // Création de la fonction PostRequest()
