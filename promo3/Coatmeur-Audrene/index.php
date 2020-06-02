<?php

    // Configurez ici votre email qui est utilisé à plusieurs endroits sur la page
    // Le reste des infos est à changer manuellement.
    // C'est votre page ! Faites en ce que vous voulez.
    $email = "audrene.coatmeur@gmail.com";

?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- PAGE settings -->
    <link rel="icon">
    <title>Coatmeur Audrene - Simplon Roanne P3</title>
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
                    <h1 class="display-4 mb-0">Coatmeur Audrène</h1>
                    <h3 class="my-0">Développeuse full-stack</h3>
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
                                    <img id="audrene" class="img-fluid rounded-circle p-3"
                                        src="img/photo.jpg" alt="Card image">
                                </div>
                                <div class="col-8 text-left">
                                    <h3>Développeuse Web et Mobile</h3>
                                    <p class="lead">
                                        <b>Qui suis-je?</b> Audrène Coatmeur, bretonne loin de chez elle.
                                        J'aime lire, écrire, et regarder des séries en anglais. Enchantée!
                                    </p>
                                    <p class="lead">
                                        <b>D'où viens-je?</b> Originellement, j'étais une commerciale qui vendait du 
                                        référencement internet aux professionnels. Entre garder un métier qui ne me 
                                        passionnait pas, et me reconvertir, j'ai choisi. J'ai pris mon temps pour trouver 
                                        <i>la</i> formation qu'il me fallait, et je l'ai trouvé! C'est un plaisir 
                                        d'apprendre à écrire un code toujours plus propre, plus optimisé, et rien 
                                        n'égale la satisfaction de résoudre un problème et de voir le résultat attendu 
                                        s'afficher à l'écran.
                                    </p>
                                    <p class="lead">
                                        <b>Où vais-je?</b> Vers le dev web full stack apparement. Pour l'instant, tout ce 
                                        que j'ai appris avec Simplon me plaît, je n'ai pas de petit préféré. Si ça change, 
                                        je vous tiendrai au courant!
                                    </p>
                                    <h3>
                                        Compétences acquises :
                                    </h3>
                                    <ul>
                                        <li>
                                            <p>Créer des pages web avec HTML et CSS</p>
                                        </li>
                                        <li>
                                            <p>Utiliser Bootstrap et ses classes</p>
                                        </li>
                                        <li>
                                            <p>Créer une base de données et gérer des requêtes SQL</p>
                                        </li>
                                        <li>
                                            <p>Traiter des données et les passer d'une page à l'autre avec PHP</p>
                                        </li>
                                        <li>
                                            <p>Afficher du contenu dynamique avec des fonctions asynchrones JS</p>
                                        </li>
                                    </ul>
                                    <h3>
                                        Compétences en cours d'acquisition :
                                    </h3>
                                    <ul>
                                        <li>
                                            <p>Programmation orientée objet</p>
                                        </li>
                                    </ul>
                                    <h3>
                                        Soft skills :
                                    </h3>
                                    <ul>
                                        <li>
                                            <p>Sociable, à l'écoute</p>
                                            <p>Curieuse</p>
                                            <p>Patiente</p>
                                            <p>Sens de l'humour</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mb-0">
                                    <b class="lead">Liens :</b>
                                    <div class="liens">
                                        <a href="https://github.com/Audrene-C" class="liens"
                                            target="_blank">
                                            <i
                                                class="fa fa-github d-inline fa-lg mr-3 text-dark"></i>
                                        </a>
                                        <a href=""
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
                                                <h4 class="card-title">Un client Deezer</h4>
                                                <p class="card-text">Premier projet chez Simplon, 
                                                    en binôme avec <a href="../../promo3/Mathias-Perle">Perle Mathias</a>, 
                                                    nous avons créé un lecteur audio en nous servant de l'API Deezer. 
                                                    Requêtes SQL, un peu de PHP, et beaucoup de
                                                    fonctions asynchrones JS!</p>
                                                <a class="btn btn-lg btn-outline-secondary m-2"
                                                    href="https://github.com/Audrene-C/project-audio-player"
                                                    target="_blank">Voir le projet</a>
                                            </div>
                                        </div>
                                        <div class="bg-dark text-white text-center card">
                                            <div class="card-body">
                                                <h4 class="card-title">A venir!</h4>
                                                <p class="card-text">
                                                    Please come back later!
                                                </p>
                                                <a class="btn btn-lg btn-outline-secondary m-2"
                                                    href=""
                                                    target="_blank">Voir le projet</a>
                                            </div>
                                        </div>
                                        <div class="bg-dark text-white text-center card">
                                            <div class="card-body">
                                                <h4 class="card-title">A venir!</h4>
                                                <p class="card-text">
                                                    Please come back later!
                                                </p>
                                                <a class="btn btn-lg btn-outline-secondary m-2"
                                                    href=""
                                                    target="_blank">Voir le projet</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8 text-left">
                                        <h3>Projets Simplon</h3>
                                        <p class="lead">
                                            Client Deezer :
                                        </p>
                                        <p>
                                            Le projet repose majoritairement sur JS, car à chaque chanson, album ou 
                                            playlist jouée, une fonction asynchrone récupère les données de l'API Deezer 
                                            et les affiche dynamiquement sur notre index, tout se fait sur la même page. 
                                            Nous avons utilisé PHP pour le système de login et de commentaires, et avons 
                                            créé notre base de données en conséquence.
                                        </p>
                                        <h3>Projets personnels</h3>
                                        <p>
                                            Avant Simplon, j'avais commencé un bestiaire de Monster Hunter World, je 
                                            l'améliore au fur et à mesure que j'apprends de nouvelles façons de faire. 
                                            Pour y jeter un coup d'oeil, c'est <a href="https://mhwbestiaire.alwaysdata.net">par ici</a>.
                                        </p>
                                        <p>
                                            Le premier cours de programmation orientée objet m'a vraiment inspiré, aussi 
                                            est-il possible que j'ai un peu outrepassé les consignes pour rajouter quelques 
                                            propriétés et méthodes, pour voir jusqu'où je pouvais pousser les choses. Pour 
                                            voir mes expériences, c'est <a href="https://github.com/Audrene-C/tp-rpg">par là</a>.
                                        </p>
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
                                            <b>Téléphone</b> : <a href="tel:0606060606">06 58 09 81 48</a>
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