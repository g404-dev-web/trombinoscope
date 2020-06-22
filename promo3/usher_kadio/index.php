<?php

// Configurez ici votre email qui est utilisé à plusieurs endroits sur la page
// Le reste des infos est à changer manuellement.
// C'est votre page ! Faites en ce que vous voulez.
$email = "kadiousherxavier@gmail.com";

?>
<!DOCTYPE html>
  <html>

  <head>
      <meta charset = "utf-8">
      <meta name = "viewport"
            content = "width=device-width, initial-scale=1">
   <!-- PAGE settings -->
      <link rel = "icon">
      <title>Simplonien Test - Simplon Roanne P3</title>
      <meta name = "description"
            content = "">
      <meta name = "keywords"
            content = "">
   <!-- CSS dependencies -->
      <link rel = "stylesheet"
            href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
            type = "text/css">
   <!-- ANIMATE.CSS link -->
    <link rel = "stylesheet"
          href = "https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
      <link rel = "stylesheet"
            href = "../../css/style.css">
      <link rel = "stylesheet"
            href = "styles.css">
   <!-- FONTAWESOME LINKS-->
   <script src = "https://kit.fontawesome.com/4ba32a977e.js"
           crossorigin = "anonymous"></script>
   <!-- Script: Navbar on-top -->

      <script src = "../../js/navbar-ontop.js"></script>
  </head>

  <body>
      <!-- Navbar -->
      <nav class = "navbar navbar-expand fixed-top navbar-dark bg-dark">
          <div class = "container">
              <a class = "navbar-brand"
                 href = "http://trombi.simplon-roanne.com">Simplon</a>

              <button class = "navbar-toggler navbar-toggler-right"
                      type = "button"
                      data-toggle = "collapse"
                      data-target = "#navbar3SupportedContent"
                      aria-controls = "navbar3SupportedContent"
                      aria-expanded = "false"
                      aria-label = "Toggle navigation">

                  <span class = "navbar-toggler-icon"></span>
              </button>
              <div class = "collapse navbar-collapse text-center justify-content-end"
                   id = "navbar3SupportedContent">

                  <a class = "btn navbar-btn btn-outline-light"
                     href = "../../index.php">Retour à l'accueil</a>
              </div>
          </div>
      </nav>
      <!-- Navbar end -->
      <!-- First section -->
      <div class = "py-5 text-center section-parallax filter-dark bg-fixed"
           style = "background-image: url('/assets/promo2/simplon.jpg');">
          <div class = "container py-5">
              <div class = "row">
                  <div class = "col-12">
                      <h1 class = "display-4 mb-0">Usher Kadio</h1>
                      <h3 class = "my-0">Développeur Web et mobile</h3>
                  </div>
              </div>
          </div>
      </div>
      <!-- Second Section -->
      <div class = "container-fluid text-center bg-dark ">
          <ul class = "nav nav-tabs row page-nav">
              <li class = "nav-item col-sm-4 px-0">
                  <a href = "javascript:void(0);"
                     data-target = "#profile"
                     class = "nav-link h3 my-0 active"
                     aria-controls = "profile"
                     aria-selected = "true"
                     data-toggle = "tab"
                     id = "profile-tab"
                     role = "tab">Profil</a>
              </li>
              <li class = "nav-item col-sm-4 px-0">
                  <a href = "javascript:void(0);"
                     data-target = "#projects"
                     class = "nav-link h3 my-0"
                     aria-controls = "projects"
                     aria-selected = "false"
                     data-toggle = "tab"
                     id = "projects-tab"
                     role = "tab">Projets</a>
              </li>
              <li class = "nav-item col-sm-4 px-0">
                  <a href = "javascript:void(0);"
                     data-target = "#contact"
                     class = "nav-link h3 my-0"
                     aria-controls = "contact"
                     aria-selected = "false"
                     data-toggle = "tab"
                     id = "contact-tab"
                     role = "tab">Contact</a>
              </li>
          </ul>
      </div>
      <!-- Third Section -->
      <div class = "bg-light py-4">
          <div class = "container">
              <div class = "row">
                  <div class = "col-12">
                      <div class = "tab-content my-2"
                           id = "myTabContent">
                          <!-- First tab -->
                          <div class = "tab-pane fade show active profil_main-content"
                               id = "profile"
                               role = "tabpanel"
                               aria-labelledby = "profile-tab">
                              <div class = "row text-center">
                                  <div class = "col-md-12">
                                      <h2 class = "display-4 text-success font-weight-bold">Mon profil</h2>
                                      <hr>
                                  </div>
                              </div>
                              <div class = "row profil_content">
                                  <div class = "col-4 animate__animated animate__backInLeft mb-4">
                                      <img class = "img-fluid rounded-circle p-3 mb-3"
                                           src = "./images/usher_pic1.jpg"
                                           alt = "my pic">
                                    <div class = "mb-0 d-flex flex-column justify-content-center">
                                      <p class = "lead text-center"> My Professional Links
                                       :</p>
                                      <div class = "liens animate__animated animate__rubberBand animate__delay-4s
                                       text-center ">
                                          <a href = "https://github.com/Kadev0502"
                                             class = "liens "
                                             target = "_blank">
                                              <i
                                                 class = "fa fa-github d-inline fa-lg mr-3
                                                 text-success"></i>
                                          </a>
                                          <a href = "https://www.linkedin.com/in/usher-kadio-4ba2a019b/"
                                             class = "liens"
                                             target = "_blank">
                                              <i
                                                 class = "fa fa-linkedin d-inline fa-lg mr-3
                                                  text-success"></i>
                                          </a>

                                      </div>
                                  </div>
                                  </div>



                                  <div class = "col-8 text-left animate__animated animate__backInRight animate__delay-1s">
                                      <h3 class = "animate__animated animate__bounceIn">Développeur Web et Mobile</h3>
                                      <p class = "lead">Actuellement en formation Développeur Web et
                                          Mobile</p>
                                      <p>J'ai effectué une formation de Technicien Supérieur en Automatisme qui m’as permis de connaître les bases du développement ( en C et C++).
                                       <br> <br>Suite à cette formation j’ai travaillé pendant un an  dans un bureau
                                       d’études avant que ma passion pour le développement
                                       web ne soit plus forte. Après une rupture
                                       conventionnelle je décide donc de me lancer
                                       pleinement dans une formation et mon choix se tourne
                                       logiquement vers l’école Simplon au vue du retour
                                       positif des anciens apprenants et après des
                                       entretiens fructueux avec les formateurs.


                                      </p>
                                      <p>
                                          Depuis que j’ai été retenu et malgré les conditions particulières dans
                                       lesquelles nous avons commencé cette
                                          formation, chaque jour en

                                      
                                      </p>
                                      <p>
                                          Depuis que j’ai été retenu et malgré les conditions particulières dans
                                       lesquelles nous avons commencé cette formation, chaque jour en

                                       formation me
                                       conforte
                                       dans mon
                                       choix et je prend un réel plaisir à acquérir de
                                       nouvelles connaissances dans ce métier.
                                          <br><br>
                                          Mon bon niveau d’anglais me permet dans cette formation de chercher facilement des infos lorsque j’ai besoin de me documenter.
                                      </p>
                                   <br>

                                   <p>A part coder, je suis un passionné de danse
                                      et de Football que je pratique
                                   <p>A part coder ,je suis un passionné de danse et de Football que je pratique

                              </p>
                                     <div class = "citation text-success">
                                      <div class = "blockquote">
                                          <p class = "mb-2">Citations</p>
                                          <div class = "blockquote-footer">
                                              L'erreur n'annule pas la valeur de l'effort accompli.
                                            <cite>Proverbe africain</cite>
                                          </div>
                                      </div>
                                      <div class = "blockquote">
                                          <div class = "blockquote-footer">
                                              Qui a planté un arbre n'a pas vécu inutilement.
                                              <cite>Proverbe africain</cite>
                                          </div>
                                      </div>

                                      </div>
                                  </div>

                              </div>
                          </div>
                       <!-- Second tab -->
                          <div class = "tab-pane fade"
                               id = "projects"
                               role = "tabpanel"
                               aria-labelledby = "projects-tab">
                              <div class = "row text-center">
                                  <div class = "col-12">
                                      <h2 class = "display-4 text-warning font-weight-bold">Projets</h2>
                                      <hr>
                                  </div>
                              </div>
                              <section class = "project py-4">
                                  <!-- One project -->
                                  <div class = "row">

                                    <div class = "card mb-4">
                                          <div class = "row no-gutters">
                                                 <div class = "col-md-4">
                                                       <div class = "bg-dark text-white text-center card">
                                                          <div class = "card-body">
                                                             <h4 class = "card-title">MINI Chat</h4>
                                                             <p class = "card-text">Exercice de mise en
                                                               pratique des bases de PHP et
                                                               d'utilisation d'une API</p>
                                                             <a class = "btn btn-lg
                                                              btn-outline-warning m-2"
                                                                href = "https://github.com/Kadev0502/minichat"
                                                                target = "_blank">Voir le projet</a>
                                                          </div>
                                                      </div>
                                                 </div>
                                                <div class = "col-md-8">
                                                   <div class = "card-body">
                                                   <h5 class = "card-title">Compétences acquises</h5>
                                                     <ul class = "list-group list-group-flush">

                                                      <li class = "list-group-item"><strong>
                                                        PHP</strong>
                                                       :
                                                       Mise en pratique des bases d'un
                                                       nouveau language de programmation</li>
                                                     <li class = "list-group-item"><strong>
                                                       RandomColor</strong>
                                                       :
                                                       Utilisation d'une API dans la
                                                      conception d'une application</li>

                                                     <li class = "list-group-item"><strong> MySQL</strong>
                                                       :
                                                       requête PDO</li>
                                                  </ul>
                                                </div>
                                            </div>
                                          </div>
                                    </div>

                                    <div class = "card mb-4">
                                          <div class = "row no-gutters">
                                                 <div class = "col-md-4">
                                                       <div class = "bg-dark text-white text-center card">
                                                          <div class = "card-body">
                                                             <h4 class = "card-title">QuizzApp</h4>
                                                             <p class = "card-text">
                                                               Project effectué en duo avec <a
                                                                 href = "../celine-leroux/
                                                                    ">Céline Leroux</a>. L'objectif était de
                                                                 reproduire
                                                                    les fonctionnalités principales d'un
                                                                 jeu de quiz avec des
                                                                 QCM.
                                                             </p>
                                                             <a class = "btn btn-lg
                                                             btn-outline-warning m-2"
                                                                href = "https://github.com/Kadev0502/quizzApp"
                                                                target = "_blank">Voir le projet</a>
                                                          </div>
                                                      </div>
                                                 </div>
                                                <div class = "col-md-8">
                                                   <div class = "card-body">
                                                   <h5 class = "card-title">Compétences acquises</h5>
                                                   <ul class = "list-group list-group-flush">


                                                     <li class = "list-group-item"><strong> MySQL</strong>
                                                       :
                                                       requête PDO et CRUD </li>

                                                    <li class = "list-group-item"><strong>
                                                       PHP</strong>
                                                       :
                                                       utilisation approfondie de PHP pour
                                                     rendre le site dynamique
                                                    </li>
                                                     <li class = "list-group-item"><strong>
                                                       Git</strong>
                                                       :
                                                       utilisation de Git et Github en binôme
                                                    </li>
                                                  </ul>
                                                </div>
                                            </div>
                                          </div>
                                    </div>

                                    </div>
                               <div class = "more-info">

                               <p class = "lead text-center">Voir les projets que j'ai
                                commencé sur
                               </p>
                               <div class = "d-flex justify-content-center projet_link">
                              <a class = "btn btn-lg
                              btn-outline-warning m-2 mx-auto"
                                 href = "https://github.com/Kadev0502?tab=repositories"
                                 target = "_blank">Github</a>
                               </div>
                              </div>

                              </section>
                          </div>
                       <!-- Third tab -->
                          <div class = "tab-pane fade"
                               id = "contact"
                               role = "tabpanel"
                               aria-labelledby = "contact-tab">
                              <div class = "row text-center">
                                  <div class = "col-12">
                                      <h2 class = "display-4 text-info font-weight-bold">Contactez-moi</h2>
                                      <hr>
                                  </div>
                              </div>
                              <div class = "row justify-content-between contact-contain">
                                  <div class = "col-sm-5 mb-4 ">
                                      <div class = "card"
                                           ">
                                             <div class = "card-header">
                                             <h3 class = "text-info">Mes coordonnées</h3>
                                             </div>
                                             <ul class = "list-group list-group-flush">
                                               <li class = "list-group-item"><i class = "fas
                                               fa-at text-info"></i> <a
                                                   href = "mailto:<?= $email ?>"><?= $email ?></a></li>
                                               <li class = "list-group-item"> <i class = "fas
                                               fa-mobile-alt text-info"></i> <a href =
                                                                                                                                                                          "tel:0606060606">06 63
                                               51 62 49</a></li>
                                             </ul>
                                       </div>

                                  </div>
                                  <div class = "col-sm-7 text-left ">
                                   <!-- Contact form -->
                                     <form method = "post"
                                           action = "../../api/mail.php"
                                           class = "">
                                      <div class = "card border-primary rounded-0">
                                          <div class = "card-header p-0">
                                              <div class = "bg-info text-white text-center py-2">
                                                  <h3><i class = "fa fa-envelope mr-2"></i>Envoyez moi un
                                                   mail</h3>

                                                  <p class = "m-0">C'est avec plaisir que je vous répondrai</p>
<<<<<<< HEAD


=======
>>>>>>> 3405aedeb5d8c65cc50aba56bd6b43135747a287
                                              </div>
                                          </div>
                                          <div class = "card-body p-3">

                                              <!--Body-->
                                              <div class = "form-group">
                                                  <div class = "input-group mb-2">
                                                      <div class = "input-group-prepend">
                                                          <div class = "input-group-text"><i class = "fa fa-user text-info"></i></div>
                                                      </div>
                                                      <input type = "text"
                                                             class = "form-control"
                                                             id = "nombre"
                                                             name = "nombre"
                                                             placeholder = "Nom"
                                                             required>
                                                  </div>
                                              </div>
                                              <div class = "form-group">
                                                  <div class = "input-group mb-2">
                                                      <div class = "input-group-prepend">
                                                          <div class = "input-group-text"><i class = "fa fa-envelope text-info"></i></div>
                                                      </div>
                                                      <input type = "email"
                                                             class = "form-control"
                                                             id = "nombre"
                                                             name = "email"
                                                             placeholder = "adresse mail"
                                                             required>
                                                  </div>
                                              </div>

                                              <div class = "form-group">
                                                  <div class = "input-group mb-2">
                                                      <div class = "input-group-prepend">
                                                          <div class = "input-group-text"><i class = "fa fa-comment text-info"></i></div>
                                                      </div>
                                                      <textarea class = "form-control"
                                                                placeholder = "Message"
                                                                required></textarea>
                                                  </div>
                                              </div>

                                              <div class = "text-center">
                                                  <input type = "submit"
                                                         value = "ENVOYER"
                                                         class = "btn btn-info
                                                  btn-block rounded-0 py-2">
                                              </div>
                                          </div>

                                      </div>
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
      <div class = "text-white bg-dark text-center">
          <div class = "container">
              <div class = "row">
                  <div class = "p-5 col-8 offset-2">
                      <h3>
                          <b>Simplon</b>
                      </h3>
                      <p class = "">
                          <a href = "#"
                             target = "_blank">27 Rue Lucien Langenieux,
                              <br>42300 Roanne
                          </a>
                      </p>
                      <p class = "">
                          <a href = "mailto:simplonroanne@gmail.com">simplonroanne@gmail.com</a>
                      </p>
                      <p class = "mb-3">
                          <a href = "tel:0625250591">06 25 25 05 91</a>
                      </p>
                      <a href = "#"
                         target = "_blank">
                          <i class = "fa fa-github d-inline fa-lg mr-3 text-white"></i>
                      </a>
                      <a href = "#"
                         target = "_blank">
                          <i class = "fa d-inline fa-lg mr-3 text-white fa-linkedin"></i>
                      </a>
                      <a href = "#"
                         target = "_blank">
                          <i class = "fa fa-facebook d-inline fa-lg mr-3 text-white"></i>
                      </a>
                  </div>
                  <div class = "row">
                      <div class = "col-12">
                          <p class = "text-center text-muted">© Copyright 2018 Simplon Roanne - Tous
                              droits réservés. </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>


      <script src = "https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
              integrity = "sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
              crossorigin = "anonymous"></script>
      <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
              integrity = "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
              crossorigin = "anonymous"></script>
      <!-- Script: Smooth scrolling between anchors in the same page -->
      <script src = "/js/smooth-scroll.js"></script>
      <!--  personal script-->
  <script src = "typewriter.js"></script>

  </body>

  </html>
