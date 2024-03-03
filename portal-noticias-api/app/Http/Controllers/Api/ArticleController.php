<?php

namespace App\Http\Controllers\Api;

use App\DTO\Article\ArticleStoreDTO;
use App\DTO\Article\ArticleUpdateDTO;
use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleIndexResource;

use App\Services\ArticleService;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    protected $articleService;

    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    public function index(Request $request)
    {
        $perPage = $request->validate([
            'per_page' => 'integer'
        ])['per_page'] ?? 10;

        $articles = $this->articleService->index($perPage);

        return ArticleIndexResource::collection($articles);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|string|max:255',
            'published_at' => 'nullable|date',
        ]);

        $articleStoreDTO = new ArticleStoreDTO($validatedData);
        $article = $this->articleService->store($articleStoreDTO);

        return response()->json($article, 201);
    }

    public function show($id)
    {
        $article = $this->articleService->show($id);

        return $article;
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|string|max:255',
            'published_at' => 'nullable|date',
        ]);
        $articleUpdateDTO = new ArticleUpdateDTO($validatedData);
        $article = $this->articleService->update($id, $articleUpdateDTO);

        return response()->json($article);
    }

    public function destroy($id)
    {
        $article = $this->articleService->destroy($id);

        return response()->json(null, 204);
    }
}
