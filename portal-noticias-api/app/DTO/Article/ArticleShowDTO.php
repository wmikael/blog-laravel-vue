<?php

namespace App\DTO\Article;
use App\Models\Article;
class ArticleShowDTO
{
    public int $id;
    public string $title;
    public string $description;
    public string $content;
    public string $image;
    public string $published_at;

    public function __construct($id, $title, $description, $content, $image, $published_at)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->content = $content;
        $this->image = $image;
        $this->published_at = $published_at;
    }
}
