<?php

    // Configurez ici votre email qui est utilisé à plusieurs endroits sur la page
    // Le reste des infos est à changer manuellement.
    // C'est votre page ! Faites en ce que vous voulez.
    $email = "clementdebatisse1996@gmail.com";

?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- PAGE settings -->
    <link rel="icon">
    <title>Clément Debatisse - Simplon Roanne P3</title>
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
                    <h1 class="display-4 mb-0">Clément Debatisse</h1>
                    <h3 class="my-0">Développeur web et web mobile junior</h3>
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
                                        src="library\CD-Profile.jpg" alt="Card image">
                                </div>
                                <div class="col-8 text-left">
                                    <h3 style="text-align:center;">Développeur Web et Mobile</h3>
                                    <p class="lead">Actuellement en formation Développeur Web et
                                        Mobile</p>
<<<<<<< HEAD
                                    <p> Bonjour... Pour me présenter, je vais tout d'abord énoncer mon parcours, un parcours qui n'est pas forcément aytpique, mais qui présente tout de même quelques singularités.<br><br>
                                        Mon cursus scolaire s'est arrêté à une <strong>Terminale Economique et Sociale</strong>, suite à laquelle j'ai obtenu mon <strong>certificat de fin d'études secondaires (niveau BAC).</strong><br>
                                        Pour des raisons personelles, je me suis par la suite écarté du système scolaire, enchaînant petits boulots et intérim. J'ai toujours été un passionné de multimédia et d'informatique, mais ce n'est qu'en 2019 que je me suis intéressé au domaine
=======
                                    <p> Bonjour ! Pour me présenter, je vais tout d'abord énoncer mon parcours, un parcours qui n'est pas forcément aytpique, mais qui présente tout de même quelques singularités.<br><br>
                                        Mon cursus scolaire s'est arrêté à une <strong>Terminale Economique et Sociale</strong>, suite à laquelle j'ai obtenu mon <strong>certificat de fin d'études secondaires (niveau BAC).</strong><br>
                                        Pour des raisons personelles, je me suis par la suite écarté du système scolaire, enchaînant petits boulots et intérim. J'ai toujours été un passionné de multimédia et d'informatique, mais ce n'est qu'en 2018 que je me suis intéressé au domaine
>>>>>>> d613964b63b19b5444770b35a6ab18f56764d511
                                        du développement web. <br><br>
                                        J'ai donc tenté la Piscine de l'<strong>école 42</strong> à Lyon, qui m'a apporté des connaissances de bases en développement web, mais qui majoritairement, m'a permis de me remettre sur les rails d'un
                                        système d'apprentissage de type scolaire.<br>
                                        Titulaire du <strong>TOEIC®</strong>, je certifie d'un excellent niveau en anglais, tant à l'oral qu'à l'écrit. La majorité du contenu que je consulte pendant ma formation est en anglais, et dans mon temps
                                        libre, la majorité du contenu que je consulte est aussi en anglais. J'ai déjà donné quelques cours d'anglais à des collégiens et lycéens.<br><br>
<<<<<<< HEAD
                                        J'ai pris connaissance de <strong>Simplon</strong> en 2019, Fabrique labelisée <strong>Grande Ecole du numérique</strong>, en faisant des recherches personnelles. Ce centre de formation s'est présenté à moi comme une évidence.<br>
                                        J'ai donc déposé ma candidature pour faire partie de la Promotion 3 de Simplon Roanne; j'ai par la suite passé plusieurs entretiens remettant en question mes motivations, mes ambitions, mes capacités et mes connaissances.<br>
                                        Simplon Roanne a décidé, <strong>parmis 92 candidatures</strong>, de retenir ma candidature ainsi que celle de 13 autres apprennants (4 étant déjà pré-séléctionnés ) et de m'intégrer à la <strong>Promotion 3</strong>.<br>
                                        Je fais maintenant partie intégrante d'une formation de développeur web et web mobile, et je m'épanouis chaque jour d'apprentissage vécu, tout en étoffant mes connaissances.

                                        
=======
                                        J'ai pris connaissance de <strong>Simplon</strong> en 2018, Fabrique labelisée <strong>Grande Ecole du numérique</strong>, en faisant des recherches personnelles. Ce centre de formation s'est présenté à moi comme une évidence; je n'ai pas hésité une seule secondre à rompre un CDD dans l'alimentaire que j'occupais à l'époque pour postuler à Simplon.<br>
                                        J'ai donc déposé ma candidature pour faire partie de la Promotion 3 de Simplon Roanne, en passant plusieurs tests et entretiens. Je fais désormais partie intégrante de cette école !<br>
                                                                                
>>>>>>> d613964b63b19b5444770b35a6ab18f56764d511
                                    </p>
                                    <div class="blockquote">
                                        <p class="mb-2">Citations</p>
                                        <div class="blockquote-footer">
                                            Choisissez un travail que vous aimez, et vous n'aurez pas à travailler un seul jour de votre vie.
                                            <cite>Confucius</cite>
                                        </div>
                                    </div>
                                    <div class="blockquote">
                                        <div class="blockquote-footer">
                                            S'aimer soi-même est le début d'une histoire d'amour qui durera toute une vie.
                                            <cite>Oscar Wilde</cite>
                                        </div>
                                    </div>
                                    <div class="blockquote">
                                        <div class="blockquote-footer">
                                            Dans la vie on ne fait pas ce que l'on veut, mais on est responsable de ce que l'on est.
                                            <cite>Jean-Paul Sartre</cite>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-0">
                                    <b class="lead">Liens :</b>
                                    <div class="liens">
                                        <a href="https://github.com/clementdebatisse" class="liens"
                                            target="_blank">
                                            <i
                                                class="fa fa-github d-inline fa-lg mr-3 text-dark"></i>
                                        </a>
                                        <a href="https://www.linkedin.com/in/cl%C3%A9ment-debatisse-4975901aa/"
                                            class="liens" target="_blank">
                                            <i
                                                class="fa fa-linkedin d-inline fa-lg mr-3 text-dark"></i>
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
                                                <h4 class="card-title">Product-Hunt</h4>
                                                <p class="card-text">Tout premier projet après 1 mois de formation, réalisé en binôme et en quelques jours, m'ayant permis d'apprendre à travailler sur le même workflow, avec Github. 
                                                    Projet commencé avec le CMS Wordpress, puis recommencé from scratch avec l'aide du Framework Bootstrap et de mes connaissances personelles en front-end et back-end. </p>
                                                <a class="btn btn-lg btn-outline-info m-2"
                                                    href="https://github.com/clementdebatisse/CD-MB-ProductHunt"
                                                    target="_blank">Voir le projet</a>
                                            </div>
                                        </div>
                                        <div class="bg-dark text-white text-center card">
                                            <div class="card-body">

                                                <h4 class="card-title">Site internet fonctionnel</h4>
                                                <p class="card-text">
                                                    Site internet portant sur le domaine de la finance réalisé en l'espace de quelques heures à l'aide du CMS Wordpress, en ne partant d'aucune expérience ni maîtrise de ce CMS. Projet à upload. </a>
                                                </p>
                                                <a class="btn btn-lg btn-outline-info m-2"
                                                    href="..."
                                                    target="_blank">Voir le projet</a>
                                            </div>
                                        </div>
                                        <div class="bg-dark text-white text-center card">
                                            <div class="card-body">
                                                <h4 class="card-title">Jeu de combat</h4>
                                                <p class="card-text">
                                                    Jeu par naviguateur très basique réalisé en quelques heures à l'aide de la POO, intégrant le concept de classes et respectant les normes PSR. 
                                                </p>
                                                <a class="btn btn-lg btn-outline-info m-2"
                                                    href="https://github.com/clementdebatisse/Fighting-game"
                                                    target="_blank">Voir le projet</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8 text-left">
                                        <h3>Compétences acquises</h3>
                                        <p class="lead">Créer des pages web en HTML, CSS, PHP7 et
                                            MySQL</p>
                                        <p class="lead">Utilisation de Git</p>
                                        <p class="lead">Utilisation de Docker</p>
                                        <p class="lead">Utilisation de Visual Studio Code</p>
                                        <p class="lead">Utilisation de Wordpress</p>
                                        <p class="lead">Utilisation de frameworks CSS</p>
                                        <h3>Projets personnels</h3>
                                        <p><span
                                                title="Work In Progress">W.I.P</span> tels que :
                                            <br>
                                            <ul>
                                                <li>Site en production pour un ami portant sur le domaine du sport</li>
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
                                            <b>Téléphone</b> : <a href="tel:0643542427">06 43 54 24 27</a>
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