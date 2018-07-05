# Trombinoscope

## Démarrage du projet

```bash
git clone https://github.com/simplon-roanne/trombinoscope
cd trombinoscope
docker-compose up
```
Server will be ready on http://localhost:8080

## Mission
Simplon Roanne vous demande d'ajouter votre avatar au trombinoscope de la promotion sur la page d'accueil existante :
* Prenez vous en selfie ! (avec votre téléphone ou votre webcam)
* Redimensionnez la photo en 300px par 300px
* Modifiez la structure HTML existante dans la page index.html pour y afficher votre photo
* la balise html englobante <a> de votre élément avatar devra avoir un id comportant votre nom
* Ouvrez le fichier trombi.scss et éditez le, attention les fichiers CSS sont les fichiers générés par le compileur SASS (il ne faut pas les éditer)
* Ajouter la ligne d'appel du fichier trombi.css dans le fichier index.html
* Appliquez seulement un filtre CSS3 de votre choix, choisissez le bien
* Créez un effet de transition sur ce filtre au survol de la souris sur votre avatar
* Modifiez vos informations personelles (votre nom et votre statut)
* Supprimer le reste des avatars inutiles, ils sont là pour vous donner un exemple de la grid
* Avant de pull request, vous devez faire un pull pour synchroniser votre projet ! 
* Exécuter un _pull-request_ sur le projet Github

### Extra
* Appliquez une transformation 3D sur votre avatar, visible seulement au :hover avec une transition non linéaire
  
## Mission 2 
* Créer une page personnelle avec le contenu de votre choix ( un CV ? ) accessible par un lien sur l'avatar
* Vous pourrez vous servir du fichier styleguide.html qui recense tous les élements d'UI disponibles pour ce thème. Attention, il ne doit pas être édité !

### Extra
* Appliquez les normes responsives à votre page personnelle en utilisant les class de la grid existante

## Accomplissement
* Votre avatar et vos informations s'affichent bien sur la page d'accueil
* Votre code est mergé avec succès dans le projet
* Vous avez créé une page personnelle mergée dans le projet

## Recherches utiles
* _getting started with Bootstrap 4_
* _débuter avec Sass Scss_
* _How to apply Css3 filters_
