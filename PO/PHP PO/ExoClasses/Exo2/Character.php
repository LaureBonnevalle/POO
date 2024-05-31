<?php

class Character {
     
     
     public function __construct(private ? int $id, private string $first_name='Jane', private string $last_name="Doe" )
     {
     }
     
     public function getId() : int
     {
         return $this->id;
     }
     
     public function setId(int $id): int
     {
         return $this->$id;
     }
     
     
     public function getfirstname() : string
     {
         return $this->firstname;
     }
     
     public function setfirstname(string $first_name): string
     {
         return $this->$firs_tname;
     }
     
     
      public function getlastname() : string
     {
         return $this->lastname;
     }
     
     public function setlastname(string $last_name): string
     {
         return $this->$last_name;
     }
     
     
     public function getFullName ($id, $first_name, $last_name)
     {
         return $FullName = $first_name." ".$last_name;
     }
}

?>