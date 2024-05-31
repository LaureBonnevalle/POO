<?php

require "Character.php";

$character = new Character(1);
echo $character->getFullName(). "<br>";

$character->getcharacter()->setName("Ragnard");
$character->getweapon()->setname("sword");
$character->getweapons()->setdamages(10);

echo "{$character->getcharacter()->getname()} {$character->getweapon()->getname()} {$character->getweapon()->getdamages()}"; "<br>";
echo "$fight"."<br>";

?>

