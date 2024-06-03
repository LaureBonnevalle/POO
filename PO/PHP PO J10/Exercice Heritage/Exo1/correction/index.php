<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */
require "Reader.php";
/* 1.1 */

$reader = new Reader("mari@test.fr", "maritest");
$reader->addBookToFavorites("Pépé la boulange");
$favoriteBooks = $reader->addBookToFavorites("Do androids dream of mechanical sheep ?");

/* 1.2 */

foreach($favoriteBooks as $book){
    echo $book."<br>";
}

/* 1.3 */

$favoriteBooks = $reader->removeBookFromFavorites("Do androids dream of mechanical sheep ?");

/* 1.4 */

foreach($favoriteBooks as $book){
    echo $book."<br>";
}

/* 1.5 */
$login = $reader->login();

echo "{$login['login']} {$login['password']} <br>";