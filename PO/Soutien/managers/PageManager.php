<?php

class PageManager {
    private array $users = [];
    private PDO $db;

    
    public function __construct()
    {
        $host = "db.3wa.io";
        $port = "3306";
        $dbname = "laurebonnevalle_poo_soutien";
        $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

        $user = "laurebonnevalle";
        $password = "0143d153a0a995dd144dbabddf0210fe";

        $this->db = new PDO(
        $connexionString,
        $user,
        $password
        );
    }
    
    
    public function getAllPages(): array
    {
        return
        $query = $this ->db->prepare('SELECT titre, route FROM pages');
        $query->execute();
        $pages = $query->fetchAll(PDO::FETCH_ASSOC);   

    }
    
    
     public function getPageByRoute(): string
    {
        return $_GET  ;
    }
    
    
     public function getAllRoutes(): array
    {
        return $_GET  ;
    }
}





?>