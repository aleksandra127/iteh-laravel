<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $users = User::all();
        $categories = Category::all();

        for ($i = 0; $i < 5; $i++) {
            $user = $users->random();
            $category = $categories->random();

            Post::create([
                'user_id' => $user->id,
                'category_id' => $category->id,
                'title' => $faker->sentence(5),
                'content' => $faker->paragraphs(3, true),
            ]);
        }
    }
}
