<?php

require 'Reader.php';

$reader1 = new Reader('cousine@meet.com', 'mule44', '$book');

echo"<br><pre";
var_dump ($reader1);
echo "<br></pre>";

$reader1 -> addBookToFavorites("Petit Ours");
$reader1 -> addBookToFavorites("L'arc-en-ciel");

echo"<br><pre>";
var_dump ($reader1);
echo "<br></pre>";

$favoriteBooks = $reader1-> addBookToFavorites("Dessine moi un mouton");


foreach($favoriteBooks as $book){
    echo $book."<br>";
}

$favoriteBooks = $reader1 -> removeBookFromFavorites("L'arc-en-ciel");

echo"<br><pre>";
var_dump ($reader1);
echo "<br></pre>";

foreach($favoriteBooks as $book){
    echo $book."<br>";
}

$login =$reader1 -> login();
echo "{$login['login']} {$login['password']}<br>";

?>