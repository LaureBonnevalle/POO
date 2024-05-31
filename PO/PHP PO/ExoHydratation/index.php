<?php

require './config/connexion.php';

require 'User.php';

$superman = [
"first_name" => "Clark",
"last_name" => "Kent",
"email" => "clark.kent@test.fr"
];

$user1 = new User(null, $superman["first_name"], $superman["last_name"], $superman["email"]); 

$user1->setId($db->lastInsertId());

echo "<pre>";
var_dump($user1);
echo "</pre><br>";



// 👍

echo "<pre>";
var_dump($user1);
echo "</pre><br>";

$query = $db->prepare('SELECT * FROM users LIMIT 1');  
$query->execute();
$userBD = $query->fetch(PDO::FETCH_ASSOC);

$usersfromBD = [];

foreach($usersBD as $userBD)
{
    $userfromBD = new User($userBD["first_name"], $userBD["last_name"], $userBD["email"]);
    $userfromBD->setId($userBD["id"]);
    $usersfromBD[] = $userfromBD;
}

echo "<pre>";
var_dump($usersfromBD);
echo "</pre><br>";

echo "<pre>"; /** echo "<pre>" pour la mise en page*/
var_dump ($user);
echo "</pre><br>";

$query = $db->prepare('SELECT * FROM users');
$query->execute();
$usersBD = $query->fetchAll(PDO::FETCH_ASSOC);

$usersfromBD = [];

foreach($usersBD as $userBD)
{
    $userfromBD = new User($userBD["first_name"], $userBD["last_name"], $userBD["email"]);
    $userfromBD->setId($userBD["id"]);
    $usersfromBD[] = $userfromBD;
}

echo "<pre>";
var_dump($usersfromBD);
echo "</pre><br>";




?>