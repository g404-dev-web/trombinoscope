<?php

// Configurez ici votre email qui est utilisé à plusieurs endroits sur la page
// Le reste des infos est à changer manuellement.
// C'est votre page ! Faites en ce que vous voulez.
$email = "victoria.lasnon@laposte.net";

?>
<!DOCTYPE html>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
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

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar3SupportedContent" aria-controls="navbar3SupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center justify-content-end" id="navbar3SupportedContent">

                <a class="btn navbar-btn btn-outline-light" href="http://trombi.simplon-roanne.com">Retour à l'accueil</a>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->
    <!-- First section -->
    <div class="py-5 text-center section-parallax filter-dark bg-fixed" style="background-image: url('/assets/promo2/simplon.jpg');">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="display-4 mb-0">Victoria Lasnon</h1>
                    <h3 class="my-0">Développeuse back-end</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Second Section -->
    <div class="container-fluid text-center bg-dark">
        <ul class="nav nav-tabs row">
            <li class="nav-item col-4 px-0">
                <a href="javascript:void(0);" data-target="#profile" class="nav-link h3 my-0 active" aria-controls="profile" aria-selected="true" data-toggle="tab" id="profile-tab" role="tab">Profil</a>
            </li>
            <li class="nav-item col-4 px-0">
                <a href="javascript:void(0);" data-target="#projects" class="nav-link h3 my-0" aria-controls="projects" aria-selected="false" data-toggle="tab" id="projects-tab" role="tab">Projets</a>
            </li>
            <li class="nav-item col-4 px-0">
                <a href="javascript:void(0);" data-target="#contact" class="nav-link h3 my-0" aria-controls="contact" aria-selected="false" data-toggle="tab" id="contact-tab" role="tab">Contact</a>
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
                        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row text-center">
                                <div class="col-12">
                                    <h2 class="display-4">Mon profil</h2>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <img class="img-fluid rounded-circle p-3" id="Victoria-Lasnon" src="images/Victoria-Lasnon.jpg" alt="Card image">
                                </div>
                                <div class="col-8 text-left">
                                    <h3>Développeur back end</h3>
                                    <p class="lead">Actuellement en formation Développeur Web et
                                        Mobile</p>
                                    <p class="bio">Je suis passionnée par les nouvelles technologies depuis déjà plusieurs années,
                                        notamment par la technologie mobile et l'informatique.<br>
                                        M'étant dirigée précédemment vers la biologie j'ai mis entre parenthèses mon cursus dans le but
                                        d'obtenir un peu d'expérience professionnelle.<br>
                                        j'ai donc travaillé pendant 10 mois en tant qu'assistante d'éducation dans un collège, puis pendant 
                                        un mois en tant qu'assistante ménagère et enfin durant 6 mois au service clientèle d'Enedis<br>
                                        J'ai depuis eu l'occasion de me retourner vers ma passion du code et de l'informatique afin de continuer
                                        a apprendre et à progresser dans ce domaine.
                                    </p>
                                    <div class="blockquote">
                                        <div class="blockquote-footer">
                                            Pour réussir, travailler dur, ne jamais abandonner et surtout chérir une obsession magnifique
                                            <cite>Walt Disney</cite>
                                        </div>
                                        <div class="blockquote-footer">
                                            Le travail d'équipe va dans le bon sens de la cohérence
                                            <cite>Ali Tagorti</cite>
                                        </div>
                                        <div class="blockquote-footer">
                                            GGGGWAAAAAARRRRGGGGLLLLLLLLLLLLLLL
                                            <cite>Chewbacca (<i>Star Wars</i>)</cite>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-0">
                                    <b class="lead">Liens :</b>
                                    <div class="liens">
                                        <a href="https://github.com/victorialasnon" class="liens" target="_blank">
                                            <i class="fa fa-github d-inline fa-lg mr-3 text-dark"></i>
                                        </a>
                                        <a href="https://www.linkedin.com/in/victoria-lasnon-0790b0153/" class="liens" target="_blank">
                                            <i class="fa fa-linkedin d-inline fa-lg mr-3 text-dark"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Second tab -->
                        <div class="tab-pane fade" id="projects" role="tabpanel" aria-labelledby="projects-tab">
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
                                                <h4 class="card-title">clone Instagram</h4>
                                                <p class="card-text">Exercice mettant en pratique l'ensemble des compétences developpées à Simplon. Effectué en binome avec
                                                    <a href=../Maureen-Depresle>Maureen Depresle</a>.
                                                </p>
                                                <a class="btn btn-lg btn-outline-secondary m-2" href="https://github.com/maureen69170/insta-clone" target="_blank">Voir le projet</a>
                                            </div>
                                        </div>
                                        <!--<div class="bg-dark text-white text-center card">
                                            <div class="card-body">
                                                <h4 class="card-title">Simplony</h4>
                                                <p class="card-text">
                                                
                                                </p>
                                                <a class="btn btn-lg btn-outline-secondary m-2" href="https://github.com/pozorfluo/simplon-php-skeleton/tree/core/wip" target="_blank">Voir le projet</a>
                                            </div>
                                        </div>
                                        <div class="bg-dark text-white text-center card">
                                            <div class="card-body">
                                                <h4 class="card-title">showcase Jekyll</h4>
                                                <p class="card-text">
                                                    heeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeu
                                                </p>
                                                <a class="btn btn-lg btn-outline-secondary m-2" href="https://pozorfluo.github.io/index.html" target="_blank">Voir le projet</a>
                                            </div>
                                        </div>
                                    </div>-->
                                    <div class="col-8 text-left">
                                        <h3>Compétences acquises</h3>
                                        <p class="lead bio">Créer une web app ( HTML, CSS, JS, PHP, 
                                            MySQL )</p>
                                        <p>
                                        <p class="lead bio">Utilisation de Git</p>
                                        <p class="lead bio">Utilisation de Docker</p>
                                        <p class="lead bio">Utilisation de Visual Studio Code</p>
                                        <h3>Projet personnel</h3>
                                        <p></p>
                                    </div>
                                </div>
                                <hr>
                            </section>
                        </div>
                        <!-- Third tab -->
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
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
                                            <b>Email</b> : <a href="mailto:<?= $email ?>"><?= $email ?></a>
                                        </li>
                                        <li>
                                            <b>Téléphone</b> : <a href="tel:0699201357">06 49 78 63 67</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-8 text-left">
                                    <h3>Envoyez un email</h3>
                                    <!-- Contact form -->
                                    <form method="post" action="../../api/mail.php">
                                        <input type="hidden" name="to" value="<?= $email ?>">
                                        <div class="form-group">
                                            <label for="email">Votre email</label>
                                            <input type="email" class="form-control form-control-lg" placeholder="Email" required="required" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Votre nom</label>
                                            <input type="text" class="form-control form-control-lg" placeholder="Nom" required="required" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Votre message</label>
                                            <textarea class="form-control p-1 form-control-lg" rows="3" placeholder="Message" name="message" required="required"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-secondary btn-lg">ENVOYER</button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Script: Smooth scrolling between anchors in the same page -->
    <script src="/js/smooth-scroll.js"></script>
</body>

</html>