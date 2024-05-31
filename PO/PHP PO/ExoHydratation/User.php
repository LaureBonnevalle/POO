<?php


class User {
     
     
     
     
     public function __construct(private ? int $id = NULL, private string $first_name, private string $last_name, private string $email)
     {
     }
     
     public function getId() : ? int
     {
         return $this->id;
     }
     
     public function setId(int $id): int
     {
         return $this->$id;
     }
     
     
     public function getfirstname() : string
     {
         return $this->first_name;
     }
     
     public function setfirst(string $firs_name): string
     {
         return $this->$first_name;
     }
     
     
      public function getlastname() : string
     {
         return $this->last_name;
     }
     
     public function setlastname(string $last_name): string
     {
         return $this->$last_name;
     }
     
     
      public function getemail() : string
     {
         return $this->email;
     }
     
     public function setemail(string $email): string
     {
         return $this->$email;
     }
}


?>