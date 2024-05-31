<?php

class User {
     
     
     
     
     public function __construct(private ? int $id = NULL, private string $username, private string $password )
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
     
     
     public function getusername() : string
     {
         return $this->username;
     }
     
     public function setusername(string $username): string
     {
         return $this->$username;
     }
     
     
      public function getpassword() : string
     {
         return $this->password;
     }
     
     public function setpassword(string $password): string
     {
         return $this->$password;
     }
}

?>