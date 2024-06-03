<?php


class Page
{
    public function __construct(private ? int $id=NULL, private string $title, private string $content, private string $route)
    {

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }


    public function getRoute(): string
    {
        return $this->route;
    }
    
    public function setRoute(string $route): void
    {
        $this->route = $route;
    }
}

?>
