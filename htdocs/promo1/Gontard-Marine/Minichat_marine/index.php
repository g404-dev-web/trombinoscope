<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>

    <script src="ajax.js" type="text/javascript"></script>
  
  

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="design.css" rel="stylesheet" type="text/css">
    <title>Chat Marine</title>
    </head>
    <body>
        <audio controls="controls">
        <source src="worakls.mp3" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>

                <!-- Debut Bootstrap jumbotron -->
    <div class="jumbotron text-center col-16  offset">
            <h1 class="display-4">Bienvenue sur le mini chat</h1>
                <p class="lead"></p>
                    <hr class="my-4">
        <form action="store.php" method="post" onsubmit="storeMessage(event, this)">
            <div class="form-group">
                <label for="nom">Pseudo</label>
                <input type="text" class="form-control" placeholder="Entrez votre pseudo" name="pseudo" value="<?= ($_COOKIE['pseudo']) ??  ""; ?>"><br>
                <label for='message'>Message</label>
                <input type="text" class="form-control" placeholder="Entrez votre message" name="message">
            </div> 
            <button type="submit" class="btn btn-danger">Envoyer</button>

        </form>
    </div><br>
                     <!--Fin formulaire jumbotron -->

<div id="messages">                   
<?php

include 'inc.php';

?>
</div>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
  </body>
</html>