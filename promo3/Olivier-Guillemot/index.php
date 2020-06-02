<?php

    // Configurez ici votre email qui est utilisé à plusieurs endroits sur la page
    // Le reste des infos est à changer manuellement.
    // C'est votre page ! Faites en ce que vous voulez.
    $email = "olivierjean.guillemot@gmail.com";

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

        <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
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
                    <h1 class="display-4 mb-0">Olivier Guillemot</h1>
                    <h3 class="my-0">Développeur Full-Stack</h3>
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
                                <div class="col-4 text-center">
                                    <img class="img-fluid rounded-circle p-3"
                                        src="https://media-exp1.licdn.com/dms/image/C4D03AQHVdkIXYcnWMg/profile-displayphoto-shrink_200_200/0?e=1596672000&v=beta&t=DFKHunYkD5caK_R4Gv11MDuWjRPYgfx4XKWWp_nV02s"  width="300" height="300" alt="Card image">
                                    <div class="mb-0">
                                    
                                        <div class="liens">
                                        <b class="lead">Liens :</b>
                                            <a href="https://github.com/leojen23" class="liens"
                                                target="_blank">
                                                <i class="fa fa-github d-inline fa-lg mr-3 text-primary "></i>
                                            </a>
                                            <a href="https://www.linkedin.com/in/olivier-guillemot-299057186/"
                                                class="liens" target="_blank" >
                                                <i class="fa fa-linkedin d-inline fa-lg mr-3 text-primary"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 text-left">
                                    <h3 >Développeur Web et Mobile</h3>
                                    
                                    <p>Je suis, depuis toujours, passionné par l’apprentissage des langues étrangères et l’observation des comportements humains. Ma curiosité et ma détermination m’ont conduit à partir étudier en Russie, puis au Royaume-Uni.</p>

                                    <p> Après avoir travaillé de nombreuses années en Angleterre dans le domaine de l'Hôtellerie-Restauration puis dans celui de l'imprimerie, je suis rentré en France pour mettre à profit et partager mes compétences linguistiques et professionnelles dans la formation pour adultes.
                                    </p>
                                    
                                    <p>Suite à l'obtention de mon <span class="text-primary">Diplôme de Formateur d'Adultes</span>, puis d'une <span class="text-primary">licence en Sciences de l'Education</span> par le biais du CNED, j'ai eu l’opportunité de travailler au sein de différentes structures sur des dispositifs de formation au public varié. </p>

                                    </p>
                                    <p>Aussi, j’ai toujours été très attiré par les différents métiers du développement web et par l’apprentissage des langages de développement car ils offrent un terrain professionnel en constante évolution et requièrent de la rigueur, des capacités d’analyse et le sens du travail en équipe.
                                    </p>

                                    <p>J’ai donc saisi l’opportunité de notre déménagement dans la Loire pour initier mon projet de reconversion professionnelle en me formant de manière autonome sur le site d’OpenClassroom tout en effectuant les démarches requises pour accéder à la formation.</p>

                                    <p>A ce jour, la fabrique Simplon représente une opportunité de continuer à grandir en compétences et m’épanouir dans un métier qui correspond à mes centres d’intérêt , mes envies et mes aptitudes.</p>


                                    <div class="blockquote">
                                        <p class="mb-2">Citations</p>
                                        <div class="blockquote-footer">
                                            "Deviens ce que tu es."
                                            <cite>Friedrich Nietzsche</cite>
                                        </div>
                                    </div>
                                    <div class="blockquote">
                                        <div class="blockquote-footer">
                                            "La beauté est dans les yeux de celui qui regarde."
                                            <cite>Oscar Wilde</cite>
                                        </div>
                                    </div>
                                    <div class="blockquote">
                                        <div class="blockquote-footer">
                                            "Un problème sans solution est un problème mal posé."
                                            <cite>Albert Einstein</cite>
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
                                    <div class="col-lg-4 col-sm-12">
                                    <div class="bg-dark text-white text-center card">
                                            <div class="card-body">
                                                <h4 class="card-title">Project Hunt</h4>
                                                <p class="card-text">
                                                    Project effectué en duo avec <a
                                                        href="http://trombi.simplon-roanne.com/promo3/Esther-Itam/">Esther
                                                        Itam</a>. L'objectif était de reproduire
                                                    les fonctionnalités du site Product Hunt.
                                                    .
                                                </p>
                                                <a class="btn btn-lg btn-outline-primary m-2"
                                                    href="https://github.com/leojen23/SIMPLON-Product-Hunt.git"
                                                    target="_blank">Voir le projet</a>
                                            </div>
                                        </div>
                                    <div class="bg-dark text-white text-center card">
                                            <div class="card-body">
                                                <h4 class="card-title">Bootstrap Training</h4>
                                                <p class="card-text">
                                                    Exercice d'intégration utilisant le framework
                                                    Bootstrap et ayant pour objectif de reproduire un
                                                    site fidèle au model fourni en png.
                                                </p>
                                                <a class="btn btn-lg btn-outline-primary btn-yellow m-2"
                                                    href="https://github.com/leojen23/One-Million-Lines.git"
                                                    target="_blank">Voir le projet</a>
                                            </div>
                                        </div>
                                        <div class="bg-dark text-white text-center card">
                                            <div class="card-body">
                                                <h4 class="card-title">Mini-TP Allo-Ciné</h4>
                                                <p class="card-text">Exercice ayant pour objectif d'afficher une liste de films à partir d'un fichier .json en utilisant les template strings.
                                                    .</p>
                                                <a class="btn btn-lg btn-outline-primary m-2"
                                                    href="https://github.com/leojen23/SIMPLON-allo-cine.git"
                                                    target="_blank">Voir le projet</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8 text-left">
                                        <h3>Compétences en cours d'acquisition</h3>
                                        <p class="lead">Modéliser l’architecture d’une application ( <i>Outils de Mind Mapping et de User Story Mapping</i> )</p>
                                      
                                        <p class="lead">Concevoir le design d’une application web ( <i>Wireframe, HTML, CSS</i> )</p>
                                      
                                        <p class="lead">Modéliser une base de données ( <i>PHPMyAdmin</i> )</p>
                                        
                                        <p class="lead">Configurer un serveur local ( <i>Devilbox</i> )</p>
                                        <p>
                                       
                                        <p class="lead">Collaborer sur un projet à l’aide d’outils de gestion de versions ( <i>Git, GitHub</i> )</p>
                                        </p>
                                       
                                        <p class="lead">Développer et maintenir une application web responsive et dynamique ( <i>HTML, CSS, JavaScript, PHP7, MySQL, Bootstrap, Materialize, WordPress</i> )</p>
                                        </p>
                                      

                                        <p class="lead">Exploiter une documentation technique</p>

                                        
                                        <h3>Projet personnel</h3>
                                        <p>
                                        Afin de pouvoir mettre en application les apports de la formation, je travaille actuellement sur la restructuration du site de l’association sportive « Sport Plus Bédarrides ». Nous souhaitons permettre aux visiteurs du site de :
                                            <ul>
                                                <li>Suivre l’actualité de l’association sportive</li>
                                                <li>Adhérer à l’association</li>
                                                <li>Accéder à un espace d'échange entre adhérants</li>
                                                <li>S'inscrire à des activités</li>
                                                <li>Visualiser et commenter des photos</li>
                                                <li>Contacter les gérants de l'association</li>
                                            </ul>
                                        </p>

                                        <h3>Qualités Professionnelles</h3>
                                        <ul>
                                            <li>Dynamisme et Motivation</li>
                                            <li>Pédagogue et Esprit d'équipe  </li>
                                            <li>Autonomie</li>
                                            <li>Rigueur et Méthode</li>
                                            <li>Fléxibilité et Adaptabilité</li>
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
                                    <b>Email</b> : <a
                                        href="mailto:<?=$email?>"><?=$email?></a>
                                    <b>Téléphone</b> : <a href="tel:0629308097">06 29 30 80 97</a>
                                     
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
                                            class="btn btn-primary btn-lg">ENVOYER</button>
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