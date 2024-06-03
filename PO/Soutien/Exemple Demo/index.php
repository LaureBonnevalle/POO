<?php

require_once('Book.php');
require_once('Librarian.php');
require_once('Reader.php');

$book1= new Book (360, "meurtre au paradis", "Michael Poper", new DateTime(), "roman policier", true, false);

echo"<br><pre> book1";
var_dump($book1);
echo"<br></pre>";

//$librarian1= new Librarian ([[320,"Partir de rien","Personne",new DateTime(),"roman"],[200,"prendre son temps", "Michel Pare", new DateTime(),"humour"]]);


$librarian1= new Librarian ([new Book(320,"Partir de rien","Personne",new DateTime(),"roman", false, true), new Book(200,"prendre son temps", "Michel Pare", new DateTime(),"humour", false, true)]);


echo"<br><pre>Librarian1";
var_dump ($librarian1);
echo"<br></pre>";

$reader1 = new Reader ([[250,"Pris sur le fait", "patrick Trust", new DateTime(), "roman policier"],[800,"il en faut si peu", "Ninon", new DateTime(),"philosophie"],[107,"pourquoi pas", "Sophie Sacraint", new DateTime(),"art de vivre"]]);


echo"<br><pre>Librarian1";
var_dump ($reader1);
echo"<br></pre>";

$reader1-> borrowBook($book1);

echo"<br><pre>reader1 emprunte book1";
var_dump ($reader1);
echo"<br></pre>";


$book2= new Book (700, "pris sur le fait", "Bernard Minet", new DateTime(), "aventure", false, true);

echo"<br><pre> book2";
var_dump ($book2);
echo"<br></pre>";

$reader1->readBook($book2);

echo"<br><pre>reader1 lis book2";
var_dump ($reader1);
echo"<br></pre>";



echo"<br><pre>reader1 ask info";
var_dump ($reader1);

$reader1->askForInfo($librarian1);
echo"<br></pre>";


echo"<br><pre>librarian askForQuiet";

$librarian1->askForQuiet();


echo"<br><pre>reader1 stayQuiet";
$reader1->stayQuiet();
echo"<br></pre>";


echo"rendre un livre<br>";
$librarian1->giveBackBook($book2); 
// il faut lui envoyer l'instance de la classe Book pas juste le titre, comment tu l'as écrit quand tu voulais appeler borrowBook ?
//$book1 celui que j'ai instancié donc si c'est le seul instancié c'est le seul que tu peux retirer, les autres tu n'as pas créé des Book mais des tableaux associatifs
// alors j'en ai instancié 2 $book1 et $book2 mais j'en ai rentre aussi dans les bookList de reader et librarian
// donc ceux que tu as mis par défaut dans Reader et Librarian ne sont pas des Books
// mai en gros tu dois envoyer une instance Book à giveBackBook parce que c'est ce qu'il attend
// de base je voulais recup les books de mon tableau avec l'"id" dans le tableau puisque ça m'a crée des tableaux de book || non justement ça n'a pas créé un tableau de book pour reader et librarian mais pas trouver comment ecrire l'unset de cette maniere
// [320,"Partir de rien","Personne",new DateTime(),"roman"] c'est pas un book c'est juste un tableau, pour avoir un book il faut un new Book ^^
// et comme c'est pas des Book la méthode ne peut pas fonctionner il faut utiliser des instances de la classe Book puisque c'est ce qu'elle attend en paramètres :)
// je t'ai mis en commentaire en haut pour Librarian comment faire pour créer des Book par défaut :)
//cool merci



echo"<br><pre>";
var_dump ($reader1);
echo"<br></pre>";



?>