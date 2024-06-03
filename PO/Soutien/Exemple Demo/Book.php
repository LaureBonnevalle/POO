<?php

class Book
{
    public function __construct(private int $nbPages, private string $title, private string $author,
                                private DateTime $published, private string $category, private bool $cleaned, private bool $returned)
    {

    }

    public function getNbPages(): int
    {
        return $this->nbPages;
    }

    public function setNbPages(int $nbPages): void
    {
        $this->nbPages = $nbPages;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function getPublished(): DateTime
    {
        return $this->published;
    }

    public function setPublished(DateTime $published): void
    {
        $this->published = $published;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    public function isCleaned(): bool
    {
        return $this->cleaned;
    }

    public function setCleaned(bool $cleaned): void
    {
        $this->cleaned = $cleaned;
    }

    public function isReturned(): bool
    {
        return $this->returned;
    }

    public function setReturned(bool $returned): void
    {
        $this->returned = $returned;
    }
}

?>