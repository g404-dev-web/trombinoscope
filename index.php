<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- PAGE settings -->
    <link rel="icon">
    <title>Simplon Roanne</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- CSS dependencies -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css">
    <!-- scss -->
    <link rel="stylesheet" href="css/trombi.css">
    <!-- Script: Navbar on-top -->

    <script src="js/navbar-ontop.js"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Simplon</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar3SupportedContent" aria-controls="navbar3SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center justify-content-end" id="navbar3SupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#missions">Missions</a>
                    </li>
                    <li class="nav-item mx-2 mb-2 my-md-0">
                        <a class="nav-link" href="#team">Equipe</a>
                    </li>
                </ul>
                <a class="btn navbar-btn btn-outline-light" href="#contact">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->
    <!-- First section -->
    <div class="py-5 text-center cover d-flex flex-column bg-dark text-white">
        <div class="container my-auto">
            <div class="row">
                <div class="mx-auto col-lg-6 col-md-8">
                    <h1 class="display-1 mb-0 mt-5 big-title">Promo3</h1>
                    <h3 class="mb-4">
                        <b>Ecole Simplon Roanne</b>
                    </h3>

                    <p>Simplon Roanne est un projet initié par Onevalue en partenarait avec Roannais Agglomération, notre école est hébergée au Numériparc, au plus proche des entreprises de la filière numérique.

                        <br>Nous proposons des formations en développement web, gratuites et intensives.</p>
                </div>
            </div>
        </div>
        <div class="container mt-auto">
            <div class="row">
                <div class="mx-auto col-lg-6 col-md-8 col-10">
                    <a href="#mission">
                        <i class="d-block fa fa-angle-down fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
<!--    <div class="py-5 filter-dark cover bg-fixed" style="background-image: url('assets/promo2/simplon.jpg');background-position:center bottom;background-size:cover;" id="mission">-->
<!--        <div class="container my-auto">-->
<!--            <div class="row">-->
<!--                <div class="col-md-8 p-3 text-white">-->
<!--                    <h2 class="mb-4">Notre mission</h2>-->
<!--                    <p class="lead">-->
<!--                        <i>Mené dans une démarche d’innovation sociale,-->
<!--                            <br>ce projet constitue un double défi</i>-->
<!--                    </p>-->
<!--                </div>-->
<!--                <div class="col-xs-12 col-md-6 p-3 text-white">-->
<!--                    <h2 class="mb-4">Social</h2>-->
<!--                    <p class="lead">-->
<!--                        <i>Agir sur l’emploi et la qualification de publics marginalisés sélectionnés uniquement sur la base-->
<!--                            de leur motivation et de critères sociaux, et non sur la base des diplômes.</i>-->
<!--                    </p>-->
<!--                </div>-->
<!--                <div class="col-xs-12 col-md-6 p-3 text-white">-->
<!--                    <h2 class="mb-4">Économique</h2>-->
<!--                    <p class="lead">-->
<!--                        <i>Répondre aux besoins de recrutement des entreprises du numérique engagées dans cette démarche citoyenne.</i>-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!-- End first section -->
    <!-- Trombinoscope -->
    <div class="py-5 text-center" id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-4">Promotion Roanne _03</h2>
                </div>
            </div>
            <div class="row">

                <?php 
                    include 'includes/eleves-cards.php';
                ?>

            </div>
        </div>
    </div>

    <!-- End trombinoscope -->

    <!-- Footer -->
    <div class="text-white bg-dark" id="contact">
        <div class="container">
            <div class="row">
                <div class="p-5 col-md-6">
                    <h3>
                        <b>Smpln</b>
                    </h3>
                    <p class="">
                        <a href="#" target="_blank">27 Rue Lucien Langenieux,
                            <br>42300 Roanne
                        </a>
                    </p>
                    <p class="">
                        <a href="mailto:simplonroanne@gmail.com">simplonroanne@gmail.com</a>
                    </p>
                    <p class="mb-3">
                        <a href="tel:0625250591">06 25 25 05 91</a>
                    </p>
                    <a href="#" target="_blank">
                        <i class="fa fa-github d-inline fa-lg mr-3 text-white"></i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fa d-inline fa-lg mr-3 text-white fa-linkedin"></i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fa fa-facebook d-inline fa-lg mr-3 text-white"></i>
                    </a>
                </div>
                <div class="p-5 col-md-6">
                    <h3>Contactez-nous</h3>
                    <form method="post" action="api/mail.php">
                        <div class="form-group">
                            <input type="email" class="form-control form-control-sm" placeholder="Votre email" required="required" name="email"> </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-sm" id="inlineFormInput" placeholder="A propos" required="required" name="subject"> </div>
                        <div class="form-group">
                            <textarea class="form-control p-1 form-control-sm" id="exampleTextarea" rows="3" placeholder="Votre message" name="message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-light btn-sm">ENVOYER</button>
                    </form>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <p class="text-center text-muted">© Copyright 2018 Simplon Roanne - Tous droits réservés. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Script: Smooth scrolling between anchors in the same page -->
    <script src="js/smooth-scroll.js"></script>

    <!-- Like Button Challenge
    <button class="add-like" data-student-id="1">Like</button>
    <span class="like-count" data-student-id="1"></span>
    <script src="js/likes.js"></script> -->
</body>
</html>
