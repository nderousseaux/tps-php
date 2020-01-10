Laragames
=========

Objectif
--------

Développer une application Laravel permettant de gérer une collection de jeux vidéos.


Base
----

1. Partez d'une solution fonctionnelle du TP8, la vôtre ou celle proposée dans le répertoire "correction" à la racine de ce dépôt Git.

2. Les parties I et II sont indépendantes.

3. **[Un site d'exemple est accessible ici](http://adrien.krahenbuhl.fr/courses/IUTRS/W31/mockup2019/)** : attention, tous les liens et les boutons d'envoi de formulaires sont de simples appels à des pages HTML statiques. Les actions d'ajout, de suppression et de modification son inopérantes. Pas besoin de compte pour se connecter et naviguer.


Rendu
-----

Le rendu se fait sur vôtre fork Gitlab de "W31", **dans un répertoire nommé "Laragames" à la racine de votre dépôt**.

- Pensez à "commiter" (et éventuellement "pusher") au fur et à mesure du TP
- N'oubliez pas de "pusher" à la fin du TP noté
- Attention, **les commits effectués APRÈS l'horaire de fin du TP ne seront pas pris en compte** : pensez à prendre le temps nécessaire à ces opération avant la fin de l'examen.


I. Compte utilisateur
---------------------

L'objectif de cette première partie est d'ajouter un âge au profil d'un utilisateur. Pour cela vous devez :

1. utiliser un `<input>` de type `number` lors de la création du compte.

1. afficher l'âge sur la page d'accueil d'un utilisateur connecté (en plus de son nom).

1. proposer la modification de l'âge sur la même page que la modification du mot de passe. Pour cela vous devez :

    - créer un second formulaire
    - définir une route spécifique pour traiter ce second formulaire
    - afficher à nouveau la page de modification en cas d'erreur
    - afficher de la page `welcome` si tout s'est bien passé, avec l'âge mis à jour

1. afficher l'âge courant comme valeur par défaut de l'`<input>` du nouveau formulaire.


II. Jeux vidéos
---------------

Un utilisateur peut gérer sa liste de jeux vidéos. Un jeu vidéo est défini par :

- un id
- un nom
- une URL de la jaquette du jeu
- une description
- un propriétaire (qui référence l'utilisateur qui le possède)

> Note : Dans un premier temps, il est possible de considérer qu'un jeu n'a pas de propriétaire. Tous les utilisateurs accèdent à tous les jeux. Il faudra bien entendu intégrer la relation dans un second temps et adapter votre code.

1. Créer un modèle `VideoGame` avec son contrôleur et son fichier de migration associés, à l'aide de la commande suivante :
    ```
    $ php artisan make:model VideoGame -c -m
    ```

1. Compléter le fichier de migration créé en 1.

1. Créer une page `gamelist` :
    - accessible depuis la page d'accueil d'un utilisateur connecté,
    - qui affiche toutes les informations (nom, illustration et description) de tous les jeux de l'utilisateur connecté,
    - qui propose un lien pour retourner sur la page d'accueil de l'utilisateur.

1. Créer une page `formgame` :
    - accessible depuis la page `gamelist` d'un utilisateur connecté,
    - qui propose un formulaire pour ajouter un nouveau jeu à la collection de l'utilisateur connecté. Il faut indiquer nom, url et description du jeu/

1. Pour chaque jeu, ajouter la possibilité de le supprimer depuis la page `gamelist`.

1. Faire en sorte que la suppression d'un compte utilisateur supprime également tous les jeux qu'il possède.
