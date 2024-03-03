<?php

namespace App\DTO\Article;
class ArticleIndexDTO
{
    public int $id;
    public string $title;
    public string $description;
    public string $image;
    public string $published_at;

    public function __construct($id, $title, $description, $image, $published_at)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->published_at = $published_at;
    }
}
