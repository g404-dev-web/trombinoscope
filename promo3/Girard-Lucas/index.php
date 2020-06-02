<?php

    // Configurez ici votre email qui est utilisé à plusieurs endroits sur la page
    // Le reste des infos est à changer manuellement.
    // C'est votre page ! Faites en ce que vous voulez.
    $email = "pro.girard.lucas@gmail.com";

?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- PAGE settings -->
    <link rel="icon">
    <title>Simplonien Test - Simplon Roanne P3</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- CSS dependencies -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        type="text/css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="styles.css">
    <!-- scss 
    <link rel="stylesheet" href="styles.css">
    -->
    <!-- Script: Navbar on-top -->

    <script src="../../js/navbar-ontop.js"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand fixed-top navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="http://trombi.simplon-roanne.com">Simplon</a>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbar3SupportedContent" aria-controls="navbar3SupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center justify-content-end"
                id="navbar3SupportedContent">

                <a class="btn navbar-btn btn-outline-light"
                    href="http://trombi.simplon-roanne.com">Retour à l'accueil</a>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->
    <!-- First section -->
    <div class="py-5 text-center section-parallax filter-dark bg-fixed"
        style="background-image: url('/assets/promo2/simplon.jpg');">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="display-4 mb-0">Girard Lucas </h1>
                    <h3 class="my-0">Développeur web et web junior</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Second Section -->
    <div class="container-fluid text-center bg-dark">
        <ul class="nav nav-tabs row">
            <li class="nav-item col-4 px-0">
                <a href="javascript:void(0);" data-target="#profile" class="nav-link h3 my-0 active"
                    aria-controls="profile" aria-selected="true" data-toggle="tab" id="profile-tab"
                    role="tab">Profil</a>
            </li>
            <li class="nav-item col-4 px-0">
                <a href="javascript:void(0);" data-target="#projects" class="nav-link h3 my-0"
                    aria-controls="projects" aria-selected="false" data-toggle="tab"
                    id="projects-tab" role="tab">Projets</a>
            </li>
            <li class="nav-item col-4 px-0">
                <a href="javascript:void(0);" data-target="#contact" class="nav-link h3 my-0"
                    aria-controls="contact" aria-selected="false" data-toggle="tab" id="contact-tab"
                    role="tab">Contact</a>
            </li>
        </ul>
    </div>
    <!-- Third Section -->
    <div class="bg-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-content my-2" id="myTabContent">
                        <!-- First tab -->
                        <div class="tab-pane fade show active" id="profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            <div class="row text-center">
                                <div class="col-12">
                                    <h2 class="display-4">Mon profil</h2>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <img class="img-fluid rounded-circle p-3"
                                        src="img\lucas2.jpg" alt="Card image">
                                </div>
                                <div class="col-8 text-left">
                                    <h3>Développeur junior Web et Mobile </h3>
                                    <p class="lead">Actuellement en formation Développeur Web et
                                        Mobile</p>
                                        <p>Je m'intéresse au monde de l'informatique depuis 10 ans.</p> 
                                        <p>Quand j'ai commencé à travailler à 18 ans, 
                                        j'ai fais un BEP transport routier par défaut. En parallèle, je me passionne sur l'évolution des métiers de la technologie.</p>
                                        <p>Après, 12 ans en tant que chauffeur routier.
                                        j'aimerais m'investir dans un projet/métier qui pourrais plus me correspondre.<br> 
                                        L’expérience que j'ai eu en tant que chauffeur poids lourd m'a appris à être autonome ,
                                        organisé et efficient.</p><br> 
                                        Grace à cela, j'ai développé la capacité de m'adapter à toute situation, à vivre en communauté et à respecter mes collaborateurs.<br>
                                        <p>Ce qui m’intéresse le plus dans ce métier c'est qu'il est en constante évolution.<br> 
                                        Chaque projet est différent selon la demande du client ainsi que la relation clientèle et la participation commune aux projets.</p>

                                        
                               
                                    <div class="blockquote">
                                        <p class="mb-2">Citations</p>
                                        <div class="blockquote-footer">
                                            <cite> "Je n'ai pas échoué. J'ai juste trouvé 10.000 moyens qui ne fonctionnent pas." -Thomas A. Edison</cite>
                                        </div>
                                    </div>

                                </div>
                                <div class="mb-0">
                                    <b class="lead">Liens :</b>
                                    <div class="liens">
                                        <a href="https://github.com/lucasgirard42" class="liens"
                                            target="_blank">
                                            <i
                                                class="fa fa-github d-inline fa-lg mr-3 text-dark"></i>
                                        </a>
                                        <a href="https://www.linkedin.com/in/lucas-girard-43994718a/"
                                            class="liens" target="_blank">
                                            <i
                                                class="fa fa-linkedin d-inline fa-lg mr-3 text-dark"></i>
                                        </a>
                                        <a href="http://www.doyoubuzz.com"
                                            class="liens" target="_blank">
                                            <i class="fa d-inline fa-lg mr-3 text-dark"><img
                                                    src="../../promo1/Gauthier-MF/images/logodoyoubuzz.jpeg"
                                                    class="logo"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Second tab -->
                        <div class="tab-pane fade" id="projects" role="tabpanel"
                            aria-labelledby="projects-tab">
                            <div class="row text-center">
                                <div class="col-12">
                                    <h2 class="display-4">Projets</h2>
                                    <hr>
                                </div>
                            </div>
                            <section class="project py-4">
                                <!-- One project -->
                                <div class="row">
                                    <div class="col-4">
                                        <div class="bg-dark text-white text-center card">
                                            <div class="card-body">
                                                <h4 class="card-title">Instgrame-binome</h4>
                                                <p class="card-text">
                                                    Project effectué en duo avec <a
                                                        href="../Avon-Antonin/index.html">Avon
                                                        Antonin</a>. L'objectif était de reproduire
                                                    les fonctionnalités principales d'Instagram.
                                                </p>
                                                <a class="btn btn-lg btn-outline-secondary m-2"
                                                    href="https://github.com/lucasgirard42/Instagram-binome"
                                                    target="_blank">Voir le projet</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="col-8 text-left">
                                        <h3>Compétences acquises</h3>
                                        <p class="lead">Créer des pages web en HTML, CSS, PHP7 et
                                            MySQL</p>
                                        <p>
                                            Le mini chat est composé d'une interface en HTML, CSS et
                                            Javascript. <br> Les messages sont dynamiquement envoyés
                                            et affichés en PHP grâce la base de données MySQL.
                                        </p>
                                        <p class="lead">Utilisation de Git</p>
                                        <p class="lead"></p>
                                        <p class="lead">Utilisation de Visual Studio Code</p>
                                        <h3>Projets personnels</h3>
                                        <p>Afin d'améliorer mes compétences en <b>JavaScript</b>
                                            j'ai plusieurs projets en <span
                                                title="Work In Progress">W.I.P</span> tels que :
                                            <br>
                                            <ul>
                                                <li>un script utilisant une API météo.
                                                    (<i>openweathermap</i>)</li>
                                                <li>un <i>viewer</i> d'images, on importe un dossier
                                                    de photos et on parcourt les images.</li>
                                                <li>un script d'image <i>recognition</i> qui
                                                    parcourt un screenshot à la recherche d'éléments
                                                    prédéfinis et en extrait des données grâce à
                                                    plusieurs outils dont : <b>pixfinder</b>,
                                                    <b>Tesseract.js</b>, <b>Resemble.js</b>, et un
                                                    outil de <b>crop</b>.</i></li>
                                            </ul>
                                    </div>-->
                                </div>
                                <hr>
                            </section>
                        </div>
                        <!-- Third tab -->
                        <div class="tab-pane fade" id="contact" role="tabpanel"
                            aria-labelledby="contact-tab">
                            <div class="row text-center">
                                <div class="col-12">
                                    <h2 class="display-4">Contactez-moi</h2>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <h3>Mes coordonnées</h3>
                                    <ul>
                                        <li>
                                            <b>Email</b> : <a
                                                href="mailto:<?=$email?>"><?=$email?></a>
                                        </li>
                                        <li>
                                            <b>Téléphone</b> : <a href="tel:0603366705">0603366705</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-8 text-left">
                                    <h3>Envoyez un email</h3>
                                    <!-- Contact form -->
                                    <form method="post" action="../../api/mail.php">
                                        <input type="hidden" name="to" value="<?=$email?>">
                                        <div class="form-group">
                                            <label for="email">Votre email</label>
                                            <input type="email"
                                                   class="form-control form-control-lg"
                                                   placeholder="Email"
                                                   required="required"
                                                   name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Votre nom</label>
                                            <input type="text"
                                                   class="form-control form-control-lg"
                                                   placeholder="Nom"
                                                   required="required"
                                                   name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Votre message</label>
                                            <textarea class="form-control p-1 form-control-lg"
                                                      rows="3"
                                                      placeholder="Message"
                                                      name="message"
                                                      required="required"></textarea>
                                        </div>
                                        <button type="submit"
                                            class="btn btn-secondary btn-lg">ENVOYER</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <div class="text-white bg-dark text-center">
        <div class="container">
            <div class="row">
                <div class="p-5 col-8 offset-2">
                    <h3>
                        <b>Simplon</b>
                    </h3>
                    <p class="">
                        <a href="#" target="_blank">27 Rue Lucien Langnieux,
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
                <div class="row">
                    <div class="col-12">
                        <p class="text-center text-muted">© Copyright 2018 Simplon Roanne - Tous
                            droits réservés. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <!-- Script: Smooth scrolling between anchors in the same page -->
    <script src="/js/smooth-scroll.js"></script>
</body>

</html>