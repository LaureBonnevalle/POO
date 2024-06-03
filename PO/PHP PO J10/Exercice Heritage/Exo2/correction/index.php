<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

require "Mage.php";
require "Warrior.php";

$character = new Character();
$character->setName("Hero");
$character->setLife(0);
echo $character->getName()."<br>";

$mage = new Mage();
$mage->setName("Gandalf");
$mage->setLife(10);
$mage->setMana(50);
echo $mage->introduce()."<br>";

$warrior = new Warrior();
$warrior->setName("Ragnar");
$warrior->setLife(30);
$warrior->setEnergy(42);
echo $warrior->introduce()."<br>";

echo $mage->fullIntroduction()."<br>";
echo $warrior->fullIntroduction()."<br>";