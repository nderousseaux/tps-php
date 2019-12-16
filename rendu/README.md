TP noté
=======

## Contexte

La startup dans laquelle vous venez d'être recruté s'agrandit et il devient primordial de mettre en place une **gestion mutualisée du parc informatique**.
C'est en partie pour vos compétences en développement web que vous avez tapé dans l'œil de votre chef de projet : votre première mission consiste à concevoir une application back-end (partie serveur) Lumen avec un front-end (site web) minimaliste pour la gestion du parc informatique, répondant au cahier des charges qui suit.


## Rendu

- Pensez à "commiter" au fur et à mesure du TP
- Ne "pusher" l'ensemble de votre code sur Gitlab qu'au moment où vous terminez.
- Attention, **seul les commits effectués AVANT la fin de la séance seront pris en compte** : pensez à prendre le temps nécessaire à ces opération avant la fin de l'examen.


## Évaluation

- L'évaluation ne tiendra pas compte de la qualité de l'interface et de l'ergonomie : concentrez-vous sur le PHP, pas sur le HTML.
- Les intentions seront prises en compte : si vous savez comment faire mais êtes bloqués par un problème technique, signalez-le par un commentaire et passez aux autres fonctionnalités.


## Base de données

Le modèle de données utilisé doit être composé des 3 tables suivantes :

- `Users`  : login (varchar,255), password (varchar,255)`
- `Postes` : id (int,11), salle (int,3), os (varchar,255)`
- `Reservations` : id (int,11), user_id (varchar,255), poste_id (int,11), date_debut (date), date_fin (date), est_root (tinyint,1)`

Dans la table `Users` :

- la colonne `login` est la clé primaire et unique de la table `Users`

Dans la table `Reservations` :

- les colonnes `user_id` et `poste_id` sont des clés étrangères référençant les colonnes `login` et `id` des tables `Users` et `Postes`.
- la colonne `est_root` est un booléen indiquant si l'utilisateur est administrateur ou non.
- Les colonnes `date_debut` et `date_fin` définissent la période sur laquelle un utilisateur est autorisé à utiliser un poste.
- Pour la colonne `est_root`, le type `(tinyint,1)` est identique à un booléen

Le fichier `init_db.sql` contient un script SQL permettant de créer ces tables avec leurs contraintes et des enregistrements. Il doit être importé dans PhpMyAdmin selon les indications ci-dessous.


## Démarrer le TP

1. Exécutez la commande le `git pull prof master` pour récupérer le répertoire `TP_note` qui contient :
	- `ParcInfo/` : le répertoire contenant le framework lumen de base.
	- `init_db.sql` : le script d'initialisation de la base de données
	- `README.md` : l'énoncé du TP noté que vous êtes en train de lire.

2. Importez la base de données dans PhpMyAdmin :
	- Créez une nouvelle base de données `ParcInfo` depuis http://ss4s.iutrs.unistra.fr
	- Connectez-vous sur PhpMyAdmin à l'adresse http://webetu.iutrs.unistra.fr/phpmyadmin/
	- Suivez [cette procédure](https://help.fasthosts.co.uk/app/answers/detail/a_id/3186/~/importing-and-exporting-mysql-databases-using-phpmyadmin) en
	choisissant sélectionnant la base `ParcInfo` et le script `init_db.sql` comme fichier à importer.

3. Modifiez le fichier `ParcInfo/.env` avec vos informations de connexion à la base de données.

4. Copiez-collez le répertoire `vendor` de l'un de vos projet Lumen, ainsi que tous les autres fichiers que vous voulez.

5. Votre environnement est prêt.

## Fonctionnalités à implémenter

[Un site d'exemple est accessible ici](http://adrien.krahenbuhl.fr/courses/IUTRS/W31/TP-note-mockup/) : attention, tous les liens et les boutons d'envoi de formulaires sont de simples appels à des pages HTML statiques. Les actions d'ajout, de suppression et de modification son inopérantes. Pas besoin de compte pour se connecter et naviguer.

### Fonctionnalités de gestion du compte

1. Un visiteur anonyme doit pouvoir : (~5 points)
	- voir la page d'accueil
	- créer un compte
	- se connecter
2. Un utilisateur connecté doit pouvoir : (~6 points)
	- changer son mot de passe (les mots de passes doivent être chiffrés)
	- supprimer son compte

> Note: Au moment de la connexion, c'est le nom de l'utilisateur qui est enregistré dans une variable de session et qui pourra (devra) être réutilisée lors de la gestion des postes.

### Fonctionnalités de gestion du parc informatique

Les fonctionnalités de gestion du parc informatique doivent uniquement être réalisables si l'utilisateur est connecté. Un utilisateur connecté doit pouvoir :

1. Lister tous les postes informatiques avec pour chacun son id, sa salle et l'OS installé.

2. Ajouter un nouveau poste informatique en indiquant :
	- le numéro de la salle (balise `<input>` de type `number`)
	- l'OS (balise `<select>` contenant 4 `<option>` : Ubuntu, Debian, MacOS, et Windows)

3. Supprimer un poste depuis la page listant tous les postes, avec un lien spécifique pour chaque poste.

4. Lister toutes les réservations avec le n° de poste concerné, l'id de l'utilisateur concerné (qui peut être présent dans les varaibles de session), les dates de début et de fin, et si l'utilisateur aura les droits d'administration.

5. Réserver un poste pour soi en indiquant :
	- l'identifiant du poste (élément `input` de type `number`)
	- la date de début d'utilisation (élément `input` de type `date`)
	- la date de fin d'utilisation (élément `input` de type `number`)
	- les droits sur le poste (élément `<select>` contenant 2 `<option>` : admin ou user)

6. Supprimer une réservation depuis la page listant toutes les réservations avec un lien différent pour chaque réservation

7. Visualiser toutes les réservations liées à un poste donné depuis la page listant tous les postes, avec un lien spécifique ajouté au niveau de chaque poste.

8. Lister toutes mes réservations.


> *Indication* :
> Les champs de type `date` doivent être traitée comme une chaîne de caractères au format YYYY-MM-DD lors de la construction de la requête.
> Il se trouve que c'est dans ce format qu'un élément HTML input de type "date" formate la date lors la soumission du formulaire.
