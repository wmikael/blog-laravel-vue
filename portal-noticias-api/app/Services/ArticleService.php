<?php

namespace App\Services;

use App\Models\Article;
use App\DTO\Article\ArticleIndexDTO;
use App\DTO\Article\ArticleStoreDTO;
use App\DTO\Article\ArticleUpdateDTO;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;


class ArticleService
{
    public function index(int $perPage = 10): LengthAwarePaginator
    {
        $articles = Article::select('id', 'title', 'description', 'image', 'published_at')->orderBy('published_at', 'desc')->paginate($perPage);
        return $articles;
    }

    public function store(ArticleStoreDTO $articleStoreDTO): Article
    {
        $article = Article::create([
            'title' => $articleStoreDTO->title,
            'description' => $articleStoreDTO->description,
            'content' => $articleStoreDTO->content,
            'image' => $articleStoreDTO->image,
            'published_at' => $articleStoreDTO->published_at
        ]);

        return $article;
    }

    public function show(int $id): Article
    {
        $article = Article::find($id);
        return $article;
    }

    public function update($id, ArticleUpdateDTO $articleUpdateDTO): Article
    {
        $article = Article::findOrFail($id);

        $article->update([
            'title' => $articleUpdateDTO->title,
            'description' => $articleUpdateDTO->description,
            'content' => $articleUpdateDTO->content,
            'image' => $articleUpdateDTO->image,
            'published_at' => $articleUpdateDTO->published_at
        ]);

        return $article;
    }

    public function destroy(int $id): Article
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return $article;
    }

}
