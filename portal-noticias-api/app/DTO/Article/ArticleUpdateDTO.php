<?php

namespace App\DTO\Article;
class ArticleUpdateDTO
{
    public int $id;
    public string $title;
    public string $description;
    public string $content;
    public string $image;
    public string $published_at;

    public function __construct(array $data)
    {
        $this->title = $data['title'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->content = $data['content'] ?? null;
        $this->image = $data['image'] ?? null;
        $this->published_at = $data['published_at'] ?? null;
    }
}
