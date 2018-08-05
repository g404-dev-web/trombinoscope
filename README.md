# Trombinoscope

## Démarrage du projet

```bash
git clone https://github.com/simplon-roanne/trombinoscope
cd trombinoscope
# Stopper les autres conteneurs actifs
docker stop $(docker ps -a -q)
docker rm $(docker ps -a -q
# Lancer Docker
docker-compose up
```
Le serveur web est accessible sur http://localhost:8080

## Mission
Simplon Roanne vous demande d'ajouter votre avatar au trombinoscope de la promotion sur la page d'accueil existante :
* Prenez vous en selfie ! (avec votre téléphone ou votre webcam)
* Redimensionnez la photo en 300px par 300px
* Modifiez la structure HTML existante dans la page index.html pour y afficher votre photo
* la balise html englobante <a> de votre élément avatar devra avoir un id comportant votre nom
* Ouvrez le fichier trombi.scss et éditez le. Attention les fichiers CSS sont les fichiers générés par le compileur SASS (il ne faut pas les éditer) !
* Ajouter la ligne d'appel du fichier trombi.css dans le fichier index.html
* Appliquez seulement un filtre CSS3 de votre choix, choisissez le bien
* Créez un effet de transition sur ce filtre au survol de la souris sur votre avatar
* Modifiez vos informations personelles (votre nom et votre statut)
* Supprimer le reste des avatars inutiles, ils sont là pour vous donner un exemple de la grid
* Pull request !!

#### Extra
* Appliquez une transformation 3D sur votre avatar, visible seulement au :hover avec une transition non linéaire

#### Recherches associées
* _débuter avec Sass Scss_
* _How to apply Css3 filters_

## Mission 2 
* Créer une page personnelle avec le contenu de votre choix ( un CV ? ) accessible par un lien sur l'avatar
* Vous pourrez vous servir du fichier styleguide.html qui recense tous les élements d'UI disponibles pour ce thème. Attention, il ne doit pas être édité !

#### Extra
* Appliquez les normes responsives à votre page personnelle en utilisant les class de la grid existante
* Votre page personnelle devrait contenir une photo et des liens vers github+linkedin

#### Recherches associées
* _getting started with Bootstrap 4_
* _Css grid system_
* _How to Use Sass Variables/Extends/Mixins/Functions_

#### Admin base de données
L'interface grapique pour éditer la base données MySQL est sur http://localhost:8085
host : trombinoscope-mysql
user : root
pwd : p4ssword

#### Executer le script d'insertion en BDD des positions
```
docker exec -i -t trombinoscope-mysql sh -c "mysql -u root -p < migration.sql"
```
Mot de passe : p4ssword

#### Recherches associées
* _mysql insert_
* _adminer add rows_

## Accomplissements
* Votre avatar et vos informations s'affichent bien sur la page d'accueil
* Votre code est mergé avec succès dans le projet
* Vous avez créé une page personnelle mergée dans le projet
* Vous avez participé au codage d'une fonctionnalité de bouton like
