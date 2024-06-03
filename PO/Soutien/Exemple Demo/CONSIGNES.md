# Démo de soutien concernant la POO

Je veux, en code (et en POO sinon c'est pas drôle) représenter une bibliothèque.

## Question 1 : Il y a quoi dans une bibliothèque ?

- des livres
- des étagères
- des lecteurs et lectrices
- des index pour retrouver les livres
- la dame de la bibliothèque autrement connu sous le nom de bibliothéquaire

## Question 2 : Qu'est-ce qu'on peut faire dans une bibliothèque

- emprunter des livres
- lire des livres
- se reposer
- demander des renseignements à la bibliothéquaire
- rendre des livres
- ranger le livre qu'on lit sur place
- garder le silence ("chhhhhhhut")

## Question 3 : comment je peux découper ça en différentes entités 

- Book
- ensemble de Book avec un classement des Book
- Reader
- Librarian
- Library

## Question 4 : qui peut faire quoi

- Reader :
    - peut emprunter des livres
    - peut lire des livres
    - peut demander des renseignement au Librarian
    - peut rendre des livres qu'on a emprunté
    - peut ranger un livre lu sur place
    - peut garder le silence

- Librarian :
    - peut emprunter des livres
    - peut donner des renseignements
    - peut rendre des livres qu'on a emprunté
    - range les livres 
    - peut demander le silence

## Question 5 : quelles conséquences ont les actions ?

- Reader emprunte un livre :
    - L'étagère a un livre en moins
    - il a un livre en plus
    - le livre passe au statut emprunté
    - le livre passe au statut pas rangé

- Reader lit un livre sur place
    - l'étagère a un livre en moins
    - il a un livre en plus
    - le livre a le statut pas rangé
    - le livre a un statut rendu

- Reader demande des renseignements
    - Librarian donne des renseignements

- Reader rend un livre qu'il a emprunté
    - il a un livre en moins
    - le livre a le statut rendu
    - le livre a un statut pas rangé

- Reader range un livre qu'il a lu sur place
    - étagère a un livre en plus 
    - il a un livre en moins
    - le livre a le statut rangé
    - le livre a le statut rendu 

- Reader garde le silence

- Librarian emprunte un livre
    - L'étagère a un livre en moins
    - il a un livre en plus
    - le livre passe au statut emprunté
    - le livre passe au statut pas rangé

- Librarian donne des renseignements

- Librarian rend des livres qu'il a emprunté
    - il a un livre en moins
    - le livre a le statut rendu
    - le livre a un statut pas rangé

- Librarian range un livre pas rangé
    - l'étagère a un livre en plus
    - le livre a le statut rangé
    - le livre a le statut rendu 

- Librarian demande le silence
    - Reader garde le silence 

## Question 6 : quelles sont les attributs ( == caractèristiques) de chacun

- Reader
    - a une liste de livres

- Book
    - pages
    - titre
    - auteur
    - date de publication
    - catégorie
    - statut rangé / pas rangé
    - statut emprunté / rendu

- Librarian
    - a une liste de livres

## Question 7 : quelles sont les fonctions de chacun ?

- Reader :
    - peut emprunter des livres
    - peut lire des livres
    - peut demander des renseignement au Librarian
    - peut rendre des livres qu'on a emprunté
    - peut ranger un livre lu sur place
    - peut garder le silence

- Librarian :
    - peut emprunter des livres
    - peut donner des renseignements
    - peut rendre des livres qu'on a emprunté
    - range les livres 
    - peut demander le silence

### Book 

Il ne fait pas d'action, c'est de la donnée "pure", il est parfait pour être représenté tel quel en base de données.

## Créer nos classes

Reader

Librarian

Book


## Une fois la classe Book récupérée 

Vous allez créer un fichier `test_book.php`.

Dans ce fichier on va vouloir utiliser notre classe `Book.php` , pour faire ça on a besoin que notre fichier 
connaisse le code de la classe, on va donc faire un `require_once` du fichier de la classe.

Ensuite on va commencer en douceur : 

Créez un nouvelle instance de Book : 

- pour lui passer la date de publication passez-lui simplement `new DateTime()`

- pour les autres attributs, essayez de retrouver comment faire dans le cours et votre mémoire

- une fois que vous l'avez instancié faites un var_dump de votre variable



- ensuite essayez de faire le même exercice pour Reader et Librarian (sans vous occuper des méthodes qui ne sont pas les getters et setters)




- ensuite dans la classe reader, créez une méthode `borrowBook(Book $book)` (borrow en frçais ça veut dire emprunter) qui ne renvoie rien, et en vous basant sur ceci : 
- Reader emprunte un livre :
    - il a un livre en plus
    - le livre passe au statut emprunté
    - le livre passe au statut pas rangé

mettez des commentaires dans la méthode sur les différentes étapes puis essayez de les coder

- Dans la classe Reader on va créer une méthode readBook(Book $book) qui ne renvoie rien
- Reader lit un livre sur place
    - il a un livre en plus
    - le livre a le statut pas rangé
    - le livre a un statut rendu

mettez des commentaires dans la méthode sur les différentes étapes puis essayez de les coder



Dans la classe Librarian on va lui ajouter une méthode `giveInformation()` qui ne renvoie rien.

Choisissez une citation d'un auteurice que vous aimez et dans la méthode faites simplement un `echo` de cette citation.



Dans la classe Reader, on va ahouter une méthode `askForInformation(Librarian $librarian)` qui ne renvoie rien
- Reader demande des renseignements
    - Librarian donne des renseignements


On va ensuite créer un fichier index.php et on va d'ores et déjà faire quelques tests pour s'assurer que tout fonctionne.

Pour plus de facilités dans l'ordre faites dans l'index.php :

- require_once de Book.php
- require_once de Librarian.php
- require_once de Reader.php

1 Instancier un Book, un Reader et un Librarian
2 Faire emprunter le Book au Reader
3 var_dump de Book et Reader pour vérifier que tout a fonctionné
4 Instancier un second Book
5 faire lire le second Book au Reader
6 var_dump du second Book et du Reader pour vérifier que tout a fonctionné
7 faire en sorte que le Reader demande des renseignements au Librarian


Dans la classe Reader vous allez ajouter une méthode `giveBackBook(Book $book)` qui ne renvoie rien
- Reader rend un livre qu'il a emprunté
    - il a un livre en moins (retirer le livre de sa liste de livres)
    - le livre a le statut rendu
    - le livre a un statut pas rangé


Dans la classe Reader vous allez ajouter une méthode `putBackBook(Book $book)` qui ne renvoie rien
- Reader range un livre qu'il a lu sur place
    - il a un livre en moins (retirer le livre de sa liste de livres)
    - le livre a le statut rangé
    - le livre a le statut rendu 


Dans la classe Reader vous allez ajouter une méthode `stayQuiet()` qui ne renvoie rien.
Elle fait un `echo "..."`.


Dans la classe Librarian vous allez ajouter la méthode `borrowBook(Book $book)` qui ne renvoie rien.
- Librarian emprunte un livre
    - il a un livre en plus
    - le livre passe au statut emprunté
    - le livre passe au statut pas rangé


Dans la classe Librarian vous allez ajouter la méthode `giveBackBook(Book $book)` qui ne renvoie rien
- Librarian rend des livres qu'il a emprunté
    - il a un livre en moins (retirer le livre de sa liste de livres)
    - le livre a le statut rendu
    - le livre a un statut pas rangé


Dans la classe Librarian vous allez ajouter une méthode `putBackBook(Book $book)` qui ne renvoie rien
- Reader range un livre qu'il a lu sur place
    - il a un livre en moins (retirer le livre de sa liste de livres)
    - le livre a le statut rangé
    - le livre a le statut rendu 



Dans la classe Librarian vous allez ajouter la méthode `askForQuiet()` qui ne renvoie rien
Elle fait simplement un `echo "Chuuuuuuuuuut";`.



It's testing time !

Essayez de créer des tests dans index.php pour vérifier que les nouvelles méthodes fonctionnent : 

- giveBackBook du Reader
- putBackBook du Reader
- stayQuiet
- borrowBook du Librarian
- giveBackBook du Librarian
- askForQuiet