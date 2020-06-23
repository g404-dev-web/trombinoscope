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
                                        relation privilégiée avec cet outil, et j'ai toujours gravité autour 
                                        de ce monde et de celui d'internet. J'ai occupé un poste de 
                                        conseillère en dépannage internet, et assuré un rôle de technicienne 
                                        assistante en informatique, où j'ai effectué mes premières requêtes SQL. 
                                        Plus jeune, je m'amusais à créer de petits scripts sur IRC.
                                    </p>
                                    <p>
                                        Bien des années plus tard je me suis initiée à la programmation par loisir, 
                                        en Python dans un premier temps. Le coup de foudre pour l'algorithmie ayant été 
                                        aussi immédiat qu'absolu, j'ai entrepris d'apprendre les bases du développement en 
                                        autodidacte. J'ai rapidement pris la décision de faire de cette passion mon métier, et 
                                        choisi d'intégrer une formation professionnelle qualifiante. En attendant, j'ai troqué Python 
                                        contre JavaScript, car ce langage semblait mieux correspondre à mes aspirations professionnelles.
                                        Je n'y ai rien perdu en émerveillement et en passion, qui n'ont fait que grandir et 
                                        s'épanouir avec le temps.
                                    </p>
                                    <p>
                                        Début avril 2020 j'ai pu rejoindre la Fabrique Simplon, où je suis actuellement formée au métier 
                                        de développeuse Web et Mobile. En plus des diverses aptitudes techniques, 
                                        j'y développe des compétences annexes comme la maîtrise des outils de 
                                        programmation, la gestion de projet, ou le travail en méthode Agile.
                                        Passionnée d'algorithmie avant tout, mes langages de prédilection
                                        sont JavaScript - dont je suis une amoureuse transie notoire - et PHP, 
                                        mais tout langage de script est chaleureusement invité à les rejoindre.
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
                                        <p class="mb-2">Citations</p>
                                        <div class="blockquote-footer">
                                        C'est en voulant connaître toujours davantage qu'on se rend compte qu'on ne sait pas grand-chose.
                                            <cite>Pierre Dac</cite>
                                        </div>
                                        <div class="blockquote-footer mt-2">
                                        La joie de regarder et de comprendre est le plus beau cadeau de la nature.
                                            <cite>Albert Einstein</cite>
                                        </div>
                                        <div class="blockquote-footer mt-2">
                                        Ce n'est pas que je suis si intelligent, c'est que je reste plus longtemps avec les problèmes.
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
                                            <i>Deuxième projet effectué</i></br></br>
                                                <p class="card-text">
                                                Réalisé en duo avec</br><a
                                                        href="../Avon-Antonin/index.html">Antonin Avon</a></br></br>
                                                        L'objectif était de concevoir un annuaire comparateur de tours opérateurs.</br></br> 
                                                        Ce projet m'a permis de développer mes compétences en POO PHP, via la prise en charge du développement Back-End du site. 
                                                        J'ai ainsi pu apprendre à répartir efficacement les tâches, et découvrir les bonnes pratiques 
                                                        d'un travail compartimenté mais toujours en lien.
                                                </p>
                                                <a class="btn btn-lg btn-outline-secondary m-2"
                                                    href="https://github.com/Shivalita/ComparOperator"
                                                    target="_blank">Voir le projet</a>
                                            </div>
                                        </div>

                                        <div class="bg-dark text-white text-center card mt-5">
                                            <div class="card-body">
                                            <h4 class="card-title">Client Deezer</h4>
                                                <i>Premier projet effectué</i></br></br>
                                                <p class="card-text">
                                                    Réalisé en duo avec</br><a
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
                                        <p class="lead mt-4">Utilisation de Git</p>
                                        <p class="lead">Utilisation de Visual Studio Code</p>
                                        <p class="lead">Utilisation de Coggle, Trello, et Wireframe</p>
                                    </div>
                        
                                    <div class="col-8 text-left">
                                    <h3 class="mb-2">ComparOperator - Compétences acquises</h3>
                                        <p class="lead mb-4">Développer la partie Back-End d'un site en PHP7 et
                                            MySQL</p>
                                        <p>
                                            L'ensemble des fonctionnalités du site est conçu en POO PHP, et 
                                            l'affichage est dynamique.<br>
                                            Le site possède trois accès : utilisateur, tour opérateur et administrateur, 
                                            chacun avec ses spécificités et ses codes métiers propres.</br>
                                            La base de données stocke les tours opérateurs et les destinations proposées, ainsi 
                                            que les reviews des utilisateurs. Chacune de ces tables est associée à une classe 
                                            et à un manager de classe correspondant. Toutes les méthodes ont été rigoureusement 
                                            testées et sont fonctionnelles, seul le système de notation n'a pas été implémenté 
                                            par manque de temps (réalisation : 1 semaine).</br>
                                            Une documentation a été créée afin de faciliter au maximum le travail de mon collègue 
                                            en charge du développement Front-End. Elle répertorie toutes les méthodes mises en place, 
                                            accompagnées chacune du type des données récupérées, d'explications, et d'un exemple clair 
                                            sur son utilisation.</br>
                                        </p>
                                        <p class="mt-2"> Pour ce projet nous avons scrupuleusement réparti les tâches, et la prise 
                                        en charge de la partie Back-End du site m'a permis :</br></p>
                                        <ul>
                                            <li>De développer grandement mes compétences en POO PHP</li>
                                            <li>D'améliorer mes connaissances en SQL via une complexité accrue des requêtes</li>
                                            <li>D'apprendre à compartimenter le travail, et rester en liaison constante avec le côté Front-End</li>
                                            <li>De créer une documentation complète afin d'assurer au mieux mon rôle de Back-End</li>
                                        </ul>

                                        <h3 class="mb-2 mt-5">Client Deezer - Compétences acquises</h3>
                                        <p class="lead mb-4">Créer des pages web en HTML5, CSS3, JavaScript, PHP7 et
                                            MySQL</p>
                                        <p>
                                            Les fonctionnalités du lecteur audio sont conçues "from scratch" en JavaScript.<br>
                                            L'affichage est géré dynamiquement par JavaScript via des requêtes fetch. JavaScript 
                                            se charge de récupérer les données auprès de l'API, ainsi que de les envoyer aux pages de 
                                            traitement PHP lorsque c'est nécessaire. Celles-ci exécutent alors des requêtes SQL sur la base 
                                            de données, avant de renvoyer les données à afficher à JavaScript.<br>
                                            L'ensemble des fonctionnalités se déploie sur une unique page dont le 
                                            contenu est rafraîchi sans rechargement, ce qui permet notamment une 
                                            continuité dans la lecture de la musique.</br>
                                        </p>
                                        <p class="mt-2"> Au cours de ce projet j'ai pu développer mes compétences en PHP, et bien 
                                        davantage encore en JavaScript, en prenant notamment en charge :</br></p>
                                        <ul>
                                            <li>Les requêtes API, la récupération et l'affichage dynamique des données de chansons</li>
                                            <li>L'affichage des albums correspondants et de leurs titres, rendus jouables au clic</li>
                                            <li>La création/gestion des comptes utilisateurs</li>
                                            <li>Le code métier et l'affichage des commentaires</li>
                                            <li>La gestion et l'affichage dynamique des onglets de navigation</li>
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