<?php

require 'Character.php';

class Warrior extends Character {
    
    
 public function __construct(int $life, string $name, int $energy){
     $this->life = $life;
     $this->name = $name;
     $this->energy =$energy;
     
 }
 
   public function getEnergy() : int
     {
         return $this->energy;
     }
     
     public function setEnergy(int $energy): int
     {
         return $this->$energy;
     } 
    
    
    
    
}




?>