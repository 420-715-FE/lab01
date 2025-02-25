# Laboratoire 01

## Objectif

Vous familiariser avec les notions de base de PHP. Le laboratoire est divisé en deux parties couvrant respectivement la matière des deux premiers cours:

### Partie 1

* Les variables
* Les opérateurs arithmétiques
* L'opérateur de concaténation
* Lecture de données transmises par l'URL

### Partie 2

* Les variables booléennes
* Les structures conditionnelles
* Les opérateurs logiques

## Prérequis

Clonez ce dépôt à la racine du répertoire contenant les fichiers Web de votre installation Xampp. Utilisez ensuite un navigateur Web pour accéder à l'adresse `/lab01` sur votre serveur local (ex: `http://localhost/lab01` ou `http://localhost:8080/lab01`).

Vous devriez voir une page avec le titre « Laboratoire 01 » suivi d'une liste de liens.

Ouvrez ensuite le dossier `lab01` dans Visual Studio Code.

## Partie 1

Cette partie utilise les 5 pages Web suivantes:

* index.html
* arithmetique.php
* concatenation.php
* precedent_suivant.php
* fibonacci.php

### 1.1 - Arithmétique

Dans votre navigateur, cliquez sur **Arithmétique**. Vous devriez voir une page contenant seulement un lien de retour.

Regardez dans la barre d'adresse. Vous remarquerez que le fichier PHP correspondant à la page est `arithmetique.php`, et que deux variables ont été passées via l'URL: `a=2` et `b=4`.

Accédez au fichier `arithmetique.php` dans votre IDE (Visual Studio Code).

Vous voulez modifier ce fichier afin d'ajouter le contenu suivant sur la page:

![](images-readme/arithmetique.png)

Voici comment la page doit se comporter:

* Les deuxième à cinquième éléments de la liste à puces doivent montrer respectivement l'addition, la soustraction, la multiplication, la division et le modulo des deux variables reçues dans l'URL.
* Le symbole `-` du premier élément de la liste doit être un lien vers la même page, mais avec les paramètres décrémentés de 1. Par exemple, si `a` vaut 2 et que `b` vaut 4, leurs nouvelles valeurs seront 1 et 3 respectivement.
* L'élément avec le symbole `+` est un lien semblable au `-`, mais qui incrémente chaque variable de 1 au lieu de la décrémenter.
* L'élément `^2` met au carré chacune des deux variables.
* L'élément `√` remplace chacune des deux variables par sa racine.

Référez-vous aux exemples vus en classe pour répondre à la demande.

Le code pour calculer le carré d'une variable `$a` est le suivant:

`$aCarre = $a ** 2;`

Le code pour calculer la racine carrée d'une variable `$a` est le suivant:

`$racineA = sqrt($a);`
