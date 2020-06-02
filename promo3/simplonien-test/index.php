<?php

    // Configurez ici votre email qui est utilisé à plusieurs endroits sur la page
    // Le reste des infos est à changer manuellement.
    // C'est votre page ! Faites en ce que vous voulez.
    $email = "zzgael@gmail.com";

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
                    <h1 class="display-4 mb-0">Simplonien Test</h1>
                    <h3 class="my-0">Développeur front-end</h3>
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
                                        src="https://s3.amazonaws.com/kinlane-productions/bw-icons/bw-test-user.png" alt="Card image">
                                </div>
                                <div class="col-8 text-left">
                                    <h3>Développeur Web et Mobile</h3>
                                    <p class="lead">Actuellement en formation Développeur Web et
                                        Mobile</p>
                                    <p>Je suis passionné d'informatique, notamment de programmation
                                        et de design depuis plus de 10 ans.<br><br>
                                        J'ai effectué un Bac STG
                                        Gestion des Systèmes d'Information qui m'appris du droit,
                                        du management, de la comptabilité, et du SI. Je ne le
                                        complétai
                                        malheureusement pas, pour raisons
                                        personnelles.<br>J'ai des connaissances avancées en anglais
                                        qui me sont d'un
                                        réel avantage dans le domaine qui est le nôtre.
                                    </p>
                                    <p>
                                        Début février 2019, grâce à mon coach en insertion pro, je
                                        découvris les formations que proposaient Simplon. Afin de
                                        maximiser mes chances de réussite, je postulai aux quatre
                                        coins de la France.
                                        <br><br>
                                        La Grande École du Numérique de Simplon Roanne retint mon
                                        profil. Je pris donc mon train au départ d'Épinal (Vosges)
                                        direction
                                        Roanne, pour rejoindre cette fabuleuse opportunité qui
                                        m'ouvrait les bras.
                                    </p>
                                    <div class="blockquote">
                                        <p class="mb-2">Citations</p>
                                        <div class="blockquote-footer">
                                            Qui ne progresse pas chaque jour, recule chaque jour.
                                            <cite>Confucius</cite>
                                        </div>
                                    </div>
                                    <div class="blockquote">
                                        <div class="blockquote-footer">
                                            L'homme supérieur fait de l'équité et de la justice la
                                            base de toutes ses actions.
                                            <cite>Confucius</cite>
                                        </div>
                                    </div>
                                    <div class="blockquote">
                                        <div class="blockquote-footer">
                                            In medio stat virtus.
                                            <cite>Roi Loth (<i>Kaamelott</i>)</cite>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-0">
                                    <b class="lead">Liens :</b>
                                    <div class="liens">
                                        <a href="https://github.com/HeathSilcox" class="liens"
                                            target="_blank">
                                            <i
                                                class="fa fa-github d-inline fa-lg mr-3 text-dark"></i>
                                        </a>
                                        <a href="https://www.linkedin.com/in/christophe-chaxel/"
                                            class="liens" target="_blank">
                                            <i
                                                class="fa fa-linkedin d-inline fa-lg mr-3 text-dark"></i>
                                        </a>
                                        <a href="http://www.doyoubuzz.com/christophe-chaxel/"
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
                                                <h4 class="card-title">SASS Training</h4>
                                                <p class="card-text">Exercice d'entrainement avec
                                                    pour objectif d'obtenir un fichier SASS
                                                    reproduisant un fichier CSS.</p>
                                                <a class="btn btn-lg btn-outline-secondary m-2"
                                                    href="https://github.com/HeathSilcox/sassufit/blob/master/sass/main.scss"
                                                    target="_blank">Voir le projet</a>
                                            </div>
                                        </div>
                                        <div class="bg-dark text-white text-center card">
                                            <div class="card-body">
                                                <h4 class="card-title">Quizzy</h4>
                                                <p class="card-text">
                                                    Project effectué en duo avec <a
                                                        href="../Emilie-Catteau/index.html">Émilie
                                                        Catteau</a>. L'objectif était de reproduire
                                                    les fonctionnalités principales d'un jeu de type
                                                    QCM.
                                                </p>
                                                <a class="btn btn-lg btn-outline-secondary m-2"
                                                    href="https://github.com/HeathSilcox/quizzy"
                                                    target="_blank">Voir le projet</a>
                                            </div>
                                        </div>
                                        <div class="bg-dark text-white text-center card">
                                            <div class="card-body">
                                                <h4 class="card-title">Bootstrap Training</h4>
                                                <p class="card-text">
                                                    Exercice d'intégration utilisant le framework
                                                    Bootstrap. L'objectif était de reproduire un
                                                    site fidèle au model fourni en png.
                                                </p>
                                                <a class="btn btn-lg btn-outline-secondary m-2"
                                                    href="https://github.com/HeathSilcox/OneMillionLines"
                                                    target="_blank">Voir le projet</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8 text-left">
                                        <h3>Compétences acquises</h3>
                                        <p class="lead">Créer des pages web en HTML, CSS, PHP7 et
                                            MySQL</p>
                                        <p>
                                            Le mini chat est composé d'une interface en HTML, CSS et
                                            Javascript. <br> Les messages sont dynamiquement envoyés
                                            et affichés en PHP grâce la base de données MySQL.
                                        </p>
                                        <p class="lead">Utilisation de Git</p>
                                        <p class="lead">Utilisation de Docker</p>
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
                                    </div>
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
                                            <b>Téléphone</b> : <a href="tel:0606060606">06 06 06 06 06</a>
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