<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <!-- page css -->
    <link rel="stylesheet" href="css/chat.css">

    <title>minichat!</title>
  </head>

  <body>
    <div class=container>
      <div class=row>

        <div class="jumbotron text-center col-8 offset-2 fond">         <!-- jumbotron pour donner du style a la boite de dialogue-->
            
          <h1 class="display-4">Hello, world!</h1>
               <hr class="my-4">
               <p>Ecrivez votre pseudo puis votre message!!!</p>

                  <form method='post' action='store.php' onsubmit='storeMessage(event, this)'>
                 
                 
                      <div class="form-minichat row ">
                        <label for="pseudo" class="col-sm-2 col-form-label">Pseudo:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-pseudo" id="pseudo" placeholder="Pseuso" name="pseudo" minlength="2" value="<?= isset($_COOKIE['pseudo']) ? $_COOKIE['pseudo'] : ""; ?>" Required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputMessage" class="col-sm-2 col-form-label">Message:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-message" id="inputMessage" placeholder="Message" name="message" minlength="5" Required>
                        </div>
                      </div>


                        <!--<div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>-->
                        <button type="submit" class="btn btn-outline-warning" >Envoyer</button>
                  </form>
        </div>
      </div>
    </div>

    
    <!-- Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)-->
<div id='result'>
  <?php
  include ('inc.php');
  ?>
</div>

              

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script type= "text/javascript" src="/tests/minichat/js/ajax.js"></script>
  </body>
</html>