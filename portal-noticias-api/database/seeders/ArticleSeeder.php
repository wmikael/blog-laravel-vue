<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use Faker\Factory as Faker;
class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Criar 25 artigos de exemplo
        for ($i = 0; $i < 25; $i++) {
            Article::create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'content' => $faker->text,
                'image' => $faker->imageUrl(),
                'published_at' => $faker->dateTimeBetween('2023-01-01', '2024-12-31'), // Data aleatória entre 2023 e 2024
            ]);
        }
    }
}
