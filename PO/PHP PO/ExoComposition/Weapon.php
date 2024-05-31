<?php

class Weapon {
     
     
     public function __construct(private string $name, private string $damages )
     {
     }
     
     public function getName() : string
     {
         return $this->name;
     }
     
     public function setId(string $name): string
     {
         return $this->$name;
     }
     
     
     public function getDamages() : string
     {
         return $this->damages;
     }
     
     public function setDamages(string $damages): void
     {
         return $this->$damages;
     }
     
     public function Strike(): string
     {
         return $txt="Mais aĩeuh !<br>";
     }
}

?>