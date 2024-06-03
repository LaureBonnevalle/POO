<?php

require 'Character.php';

class Mage extends Charcater {
    
    
 public function __construct(int $life, string $name, int $mana){
     $this->life = $life;
     $this->name = $name;
     $this->mana =$mana;
     
 }
 
   public function getMana() : int
     {
         return $this->mana;
     }
     
     public function setMana(int $mana): int
     {
         return $this->$mana;
     } 
    
    
    
    
}




?>