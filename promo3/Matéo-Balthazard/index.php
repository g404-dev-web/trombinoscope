<?php

    // Configurez ici votre email qui est utilisé à plusieurs endroits sur la page
    // Le reste des infos est à changer manuellement.
    // C'est votre page ! Faites en ce que vous voulez.
    $email = "mateo.balthazard@hotmail.com";

?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- PAGE settings -->
    <link rel="icon">
    <title>Matéo Balthazard Trombinoscope</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- CSS dependencies -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        type="text/css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../scss/trombi.scss">
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
                    <h1 class="display-4 mb-0">Matéo Balthazard</h1>
                    <h3 class="my-0">Apprenti développeur chez Simplon</h3>
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
                                    <h2 class="display-4"> <i class="fa fa-laptop" aria-hidden="true"></i>  à propos de moi  <i class="fa fa-laptop" aria-hidden="true"></i></h2>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <img class="img-fluid rounded-circle p-3"
                                        src="images\mateo.JPG" alt="Card image" id="balthazard">

</br>

                                        <div class="mb-0">
                                    <b class="lead">Mes liens professionels :</b>
                                    <div class="liens">
                                        <a href="https://github.com/Mateo-BTZ" class="liens"
                                            target="_blank">
                                            <i
                                                class="fa fa-github d-inline fa-lg mr-3 text-dark" id="logogit"></i>
                                        </a>
                                        <a href="https://www.linkedin.com/in/matéo-balthazard-96a4021ab/"
                                            class="liens" target="_blank">
                                            <i
                                                class="fa fa-linkedin d-inline fa-lg mr-3 text-dark" id="logolinkedin"></i>
                                        </a>
                                    </div>
                                </div>
                                </div>
                                <div class="col-8 text-left">
                                    <h3>Développeur Web et Mobile</h3>
                                    <p class="lead" style="text-align: center;">Actuellement en formation Développeur Web et
                                        Mobile</p>
                                    <p>Je suis un jeune développeur de 21 ans, passionné d'informatique et de nouvelles technologies depuis mon enfance.<br>

                                    <h3>Mon parcours</h3>
                                        
                                        Après un BAC Littéraire en 2016 et une année de Faculté d'anglais,
                                        J'ai enchaîné les jobs alimentaires dans l'industrie pendant près de 3 ans en tant qu'intérimaire.<br>
                                        Lassé de ne pas pouvoir m'épanouir au travail, je décide alors de mettre fin à plusieurs années de monotonie, 
                                        et me lance donc dans l'aventure SIMPLON. <br> J'ai eu la chance d'être
                                        sélectionné pour participer à la promo 3 !
                                                                            
                                    </p>
                                    <p>
                                        Cela a éclairci mon avenir professionel, qui était jusque là très flou. J'ai commencé à
                                        m'interesser au métier de Développeur, et depuis, ma principale motivation est d'acquérir un maximum
                                        d'expérience afin d'en faire mon métier.
                                        <br><br>
                                        <h3>Mes qualités</h3>
                                        <p>
                                        Je suis un garçon curieux, disponible et très motivé. Je n'ai aucun problème avec l'anglais,
                                        J'ai le goût de l'effort, et j'adore le café !     
                                        </p>
                                        
                                        </p>
                                        <h3>Citations</h3>
                                    <div class="blockquote">
                                        <div class="blockquote-footer">
                                            Les choses que l'on possède finissent par nous posséder.
                                            <cite>Tyler Durden (<i>Fight club</i>)</cite>
                                        </div>
                                    </div>
                                    <div class="blockquote">
                                        <div class="blockquote-footer">
                                         N'abandonnez jamais votre droit à l'erreur, car vous perdriez la capacité d'apprendre des choses nouvelles et d'avancer dans la vie. 
                                            <cite>David Burns </cite>
                                        </div>
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
                                                <h4 class="card-title">Premier projet en binôme (fait en une semaine)</h4>
                                                <p class="card-text">Exercice d'entrainement avec
                                                    pour objectif de créer un site type <a href="https://www.producthunt.com/">Product hunt.</a></p>
                                                    <p>fait en binôme avec Clément Debatisse.<br>
                                                    Fait avec : </p>
                                                    <ul style="list-style: none;"> 
                                                        <li>HTML</li>
                                                        <li>CSS</li>
                                                        <li>PHP</li>
                                                        <li>Bootstrap</li>
                                                        <li>My SQL</li>
                                                        <li>PhpMyAdmin</li>
                                                    </ul>
                                                <a class="btn btn-lg btn-outline-secondary m-2"
                                                    href="https://github.com/Mateo-BTZ/CD-MB-ProductHunt.git"
                                                    target="_blank">Voir le projet</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8 text-left">
                                        <h3>Compétences acquises / en cours d'acquisition</h3>
                                        <p class="lead">Créer des pages web en HTML, CSS, PHP7 et
                                            MySQL</p>
                                        <p class="lead">Utilisation de Git</p>
                                        <p class="lead">Utilisation de Visual Studio Code</p>
                                        <p class="lead">Création de requêtes SQL et gestion de base de données</p>
                                        <p class="lead">Utilisation de CMS et frameworks (Bootstrap, Wordpress..)</p>
                                        <h3>Projets personnels</h3>
                                        <p> (à venir) Création d'un lecteur audio musical qui joue en fonction de l'humeur de l'utilisateur
                                        </p>
                                        <p style="text-align: center; color: red;">D'autres projets arrivent bientôt, restez connectés ! </p>
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
                                            <b>Téléphone</b> : <a href="tel:0671463634">06 71 46 36 34</a>
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
                    <a href="https://github.com/Mateo-BTZ" target="_blank">
                        <i class="fa fa-github d-inline fa-lg mr-3 text-white" id="logogit"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/matéo-balthazard-96a4021ab/" target="_blank">
                        <i class="fa d-inline fa-lg mr-3 text-white fa-linkedin" id="logolinkedin"></i>
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