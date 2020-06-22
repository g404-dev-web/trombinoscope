<?php

    // Configurez ici votre email qui est utilisé à plusieurs endroits sur la page
    // Le reste des infos est à changer manuellement.
    // C'est votre page ! Faites en ce que vous voulez.
    $email = "shivalita@pm.me";

?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- PAGE settings -->
    <link rel="icon">
    <title>Simplon Roanne P3</title>
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
                    <h1 class="display-4 mb-0">Perle Mathias</h1>
                    <h3 class="my-0">Développeuse Web et Mobile</h3>
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
                                        src="./img/perle.jpg" alt="Card image">
                                </div>
                                <div class="col-8 text-left">
                                    <h3>Développeuse Full-Stack orientée Back-End</h3>
                                    <p class="lead">Miss JavaScript de la promo</p>
                                    <p>
                                        Férue d'informatique depuis 20 ans, j'entretiens une 
                                        relation privilégiée avec cet outil. J'ai occupé un poste de 
                                        conseillère en dépannage internet, et assuré un rôle de technicienne 
                                        assistante en informatique, où j'ai effectué mes premières requêtes SQL.
                                    </p>
                                    <p>
                                        Je me suis par la suite initiée à la programmation par loisir. Le coup 
                                        de foudre pour l'algorithmie ayant été aussi immédiat qu'absolu, j'ai 
                                        entrepris d'apprendre les bases du développement en autodidacte. J'ai 
                                        rapidement pris la décision de faire de cette passion mon métier, et 
                                        choisi d'intégrer une formation professionnelle qualifiante.
                                    </p>
                                    <p>
                                        J'ai pu rejoindre la Fabrique Simplon où je suis formée au métier 
                                        de développeuse Web et Mobile. En plus des diverses aptitudes techniques, 
                                        j'y développe des compétences annexes comme la maîtrise des outils de 
                                        programmation, la gestion de projet, ou le travail en méthode Agile.
                                        Passionnée d'algorithmie avant tout, mes langages de prédilection
                                        sont JavaScript, dont je suis une amoureuse transie notoire, mais aussi PHP.
                                    </p>
                                    <p>
                                        let isConvinced = confirm('Are you convinced ?');</br>
                                        alert(isConvinced);</br>
                                        if (!isConvinced) {
                                    </p>
                                    <p class="ml-4">
                                        Je suis particulièrement rigoureuse, et je m'efforce de développer un code clair,</br> 
                                        cohérent, et respectueux des normes (en un mot : propre). J'ai un bon sens</br> 
                                        de la communication et je suis toujours ravie d'apporter mon aide, je m'intègre</br> 
                                        donc très bien au travail en équipe. Enfin, je suis dotée d'une persévérance</br> 
                                        à toute épreuve, et travaille d'arrache-pied pour mener à bien mes projets.</br> 
                                        Je fais aussi d'excellents gâteaux.</br>
                                    </p>
                                    <span>}</span> 
                                    <div class="blockquote mt-4">
                                        <p class="mb-2">Citation</p>
                                        <div class="blockquote-footer">
                                            Un problème sans solution est un problème mal posé.
                                            <cite>Albert Einstein</cite>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-0">
                                    <b class="lead">Liens :</b>
                                    <div class="liens">
                                        <a href="https://github.com/Shivalita" class="liens"
                                            target="_blank">
                                            <i
                                                class="fa fa-github d-inline fa-lg mr-3 text-dark"></i>
                                        </a>
                                        <a href="https://fr.linkedin.com/in/perle-mathias-5a08181ab"
                                            class="liens" target="_blank">
                                            <i
                                                class="fa fa-linkedin d-inline fa-lg mr-3 text-dark"></i>
                                        </a>
                                        <!-- <a href="http://www.doyoubuzz.com/christophe-chaxel/"
                                            class="liens" target="_blank">
                                            <i class="fa d-inline fa-lg mr-3 text-dark"><img
                                                    src="../../promo1/Gauthier-MF/images/logodoyoubuzz.jpeg"
                                                    class="logo"></i>
                                        </a> -->
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
                                            <h4 class="card-title">ComparOperator</h4>
                                                <p class="card-text">
                                                Projet réalisé en duo avec</br><a
                                                        href="../Avon-Antonin/index.html">Antonin Avon</a></br></br>
                                                        L'objectif était de concevoir un comparateur de tours opérateurs.</br> 
                                                        Ce projet m'a permis de développer mes compétences en Programmation 
                                                        Orientée Objet PHP, via la prise en charge du développement Back-End du site.
                                                </p>
                                                <a class="btn btn-lg btn-outline-secondary m-2"
                                                    href="https://github.com/Shivalita/ComparOperator"
                                                    target="_blank">Voir le projet</a>
                                            </div>
                                        </div>

                                        <div class="bg-dark text-white text-center card mt-3">
                                            <div class="card-body">
                                            <h4 class="card-title">Client Deezer</h4>
                                                <p class="card-text">
                                                    Projet réalisé en duo avec</br><a
                                                        href="../Coatmeur-Audrene/index.html">Audrène 
                                                        Coatmeur</a></br></br>
                                                        L'objectif était de réaliser une web app de musique offrant un lecteur 
                                                        audio complet fonctionnant avec l'API Deezer.</br></br>
                                                        Ce projet a développé des compétences variées, allant de l'exploitation 
                                                        d'une API à la programmation asynchrone, en passant par la 
                                                        gestion de projet et la conception d'une interface ergonomique.
                                                </p>
                                                <a class="btn btn-lg btn-outline-secondary m-2"
                                                    href="https://github.com/Shivalita/project-audio-player"
                                                    target="_blank">Voir le projet</a>
                                            </div>
                                        </div>
                                    </div>
                        
                                    <div class="col-8 text-left">
                                    <h3 class="mb-2 mt-2">ComparOperator - Compétences acquises</h3>
                                        <p class="lead mb-4">Développer la partie Back-End d'un site en PHP et
                                            MySQL</p>
                                        <p>
                                            Les processus de traitement de l'ensemble du site sont conçus en POO PHP.<br>
                                            Le site possède un accès utilisateur qui permet de parcourir l'ensemble 
                                            des tours opérateurs et des destinations disponibles, ainsi que de laisser des reviews.<br>
                                            Un accès spécifique aux tours opérateurs permet d'ajouter et de modifier des destinations 
                                            proposées, ainsi que de devenir membre premium.</br>
                                            Enfin, l'accès administrateur permet d'ajouter ou supprimer des tours opérateurs, de leur 
                                            attribuer ou retirer le statut premium, ainsi que de supprimer des destinations.</br>
                                            La création d'une documentation qui répertorie les méthodes mises en places permet au 
                                            développeur Front-End d'afficher les données de façon simplifiée.</br>
                                        </p>

                                        <h3 class="mb-2 mt-5">Client Deezer - Compétences acquises</h3>
                                        <p class="lead mb-4">Créer des pages web en HTML, CSS, JavaScript, PHP et
                                            MySQL</p>
                                        <p>
                                            Les fonctionnalités du lecteur audio sont conçues "from scratch" en JavaScript.<br>
                                            L'affichage est géré dynamiquement par JavaScript via des requêtes fetch.<br>
                                            L'ensemble des fonctionnalités se déploie sur une unique page dont le 
                                            contenu est rafraîchi sans rechargement, ce qui permet notamment une 
                                            continuité dans la lecture de la musique.</br>
                                        </p>
                                        <p class="mt-2"> Au cours de ce projet j'ai pu développer mes compétences en JavaScript, 
                                        en prenant en charge :</br></p>
                                        <ul>
                                            <li>Les requêtes API, la récupération et l'affichage dynamique des données de chansons</li>
                                            <li>L'affichage des albums correspondants et de leurs titres, rendus jouables au clic</li>
                                            <li>La création des comptes utilisateurs</li>
                                            <li>Le code métier et l'affichage des commentaires</li>
                                            <li>La gestion et l'affichage dynamique des onglets de navigation</li>
                                        </ul>
                                        <p class="lead mt-4">Utilisation de Git</p>
                                        <p class="lead">Utilisation de Visual Studio Code</p>
                                        <p class="lead">Utilisation de Coggle, Trello, Wireframe</p>
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
                                            <b>Téléphone</b> : <a href="tel:0624100023">06 24 10 00 23</a>
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