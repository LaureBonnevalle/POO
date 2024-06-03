<?php

class Librarian
{
    public function __construct(private array $bookList)
    {

    }

    public function getbookList(): array
    {
        return $this->bookList;
    }

    public function setBook(array $books): void
    {
        $this->bookList = $bookList;
    }
    
    
    public function giveInfo(): void
    {
        echo "Chaque chose en son temps";
        
    }
    
    public function borrowBook(Book $book) : void
    {
        // le livre passe au statut emprunté
        $book->setReturned(false);
        
        // le livre passe au statut pas rangé
        $book->setCleaned(false);
        
        // j'ai un livre en plus
        $this->bookList[] = $book; // array push ecriture simplifiée
    }
    
     public function giveBackBook(Book $book): void
    {
        //le livre statut rendu
        $book->setReturned(true);
        //le livre statut pas rangé
        $book->setCleaned(false);
        //livre en moins
        foreach($this->bookList as $key => $item)
         {
            if($item -> getTitle() === $book->getTitle())
            {
            unset($this->bookList[$key]);
             }
         }
        
    }
    
    public function putBackBook(Book $book): void
    {
         //le livre statut rangé
        $book->setCleaned(true);
        //le livre statut rendu
        $book->setReturned(true);
        foreach($this->bookList as $key => $item)
         {
            if($item -> getTitle() === $book->getTitle())
            {
            unset($this->bookList[$key]);
             }
         }
    }
    
    public function askForQuiet(): void
    {
        echo "Chuuuuuut";
    }
    
    
    
    
}
?>