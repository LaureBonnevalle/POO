<?php

class Reader
{
    public function __construct(private array $bookList)
    {

    }

    public function getBookList(): array
    {
        return $this->bookList;
    }

    public function setBookList(array $bookList): void
    {
        $this->bookList = $bookList;
    }
    
    
    public function borrowBook (Book $book): void
    {
        
        
        //on modifie d 'abord les statuts du livre avt de rajouter livre'
        
        // passer au statut emprunté
        $book->setReturned(false);
        // passer au statut pas rangé
        $book->setCleaned(false);
    
         // tableau a un livre en plus
        array_push($this->bookList,$book); //ecriture complete
        //autre ecriture possible (simplifiée)  $this->bookList[] = $book;
    }
    
    public function readBook(Book $book): void
    {
        //le livre statut pas rangé
        $book->setCleaned(false);
        //le livre statut rendu
        $book->setReturned(true);
        //livre en plus
        $this->bookList[] = $book;
    }  
    
    public function askForInfo(Librarian $librarian) :void
    {
        //librarian donne les renseignement
        $librarian->giveInfo();
    }
    
    public function giveBackBook(Book $book): void
    {
        //le livre statut rendu
        $book->setReturned(true);
        //le livre statut pas rangé
        $book->setCleaned(false);
        //livre en moins
        //unset($bookList[array_search(["title"], $bookList)]);
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
        //unset($bookList[array_search(["title"], $bookList)]);
        foreach($this->bookList as $key => $item)
         {
            if($item -> getTitle() === $book->getTitle())
            {
            unset($this->bookList[$key]);
             }
         }
    }
    
    
    public function stayQuiet(): void
    {
      echo "...";  
    }
}
?>