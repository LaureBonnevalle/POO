<?php

require 'Weapon.php';

class Character {
     
     private Weapon $weapon;
     
     public function __construct(private string $name, private string $damages )
     {
          $this->weapon = new Weapon("", 0);
     }
     
     public function getName() : string
     {
         return $this->name;
     }
     
     public function setName(string $name): string
     {
         return $this->$name;
     }
     
     
     public function getweapon() : Weapon
     {
         return $this->weapon;
     }
     
     public function setWeapon(Weapon $weapon): void
     {
         return $this->$weapon;
     }
     
     public function Fight(): string
     {
         return $fight = getstrike();
     }
}

?>