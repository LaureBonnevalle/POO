<?php

class Character {
     
     
     public function __construct(protected int $life, protected string $name )
     {
     }
     
     
     public function getLife() : int
     {
         return $this->life;
     }
     
     public function setLife(string $life): int
     {
         return $this->$life;
     }
     
     
     public function getName() : string
     {
         return $this->name;
     }
     
     public function setName(string $name): string
     {
         return $this->$name;
     }
     
     
     public function Introduce(): string
     {
         return $txt="Bonjour je m'appelle.{$name}<br>";
     }
     
     
}



?>