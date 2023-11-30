<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();

        for($a=0; $a<20; $a++) {
            $category = $categories->random();

            Post::factory()->create([
                'category_id' => $category->id
            ]);
        }

    }
}
