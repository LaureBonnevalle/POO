<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

require "Character.php";


$ragnar = new Character("Ragnar");

$weapon = new Weapon("Sword", 10);
$ragnar->setWeapon($weapon);

echo "My name is {$ragnar->getName()}, I deal {$ragnar->getWeapon()->getDamages()} damages with my {$ragnar->getWeapon()->getName()}<br>";

echo $ragnar->fight();

