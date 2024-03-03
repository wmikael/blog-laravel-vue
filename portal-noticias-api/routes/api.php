<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Article
Route::get('/articles', [App\Http\Controllers\Api\ArticleController::class, 'index'])->name('articles.index');
Route::post('/articles', [App\Http\Controllers\Api\ArticleController::class, 'store'])->name('articles.store');
Route::get('/articles/{id}', [App\Http\Controllers\Api\ArticleController::class, 'show'])->name('articles.show');
Route::put('/articles/{id}', [App\Http\Controllers\Api\ArticleController::class, 'update'])->name('articles.update');
Route::delete('/articles/{id}', [App\Http\Controllers\Api\ArticleController::class, 'destroy'])->name('articles.destroy');
