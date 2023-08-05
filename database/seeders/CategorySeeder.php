<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Zabava']);
        Category::create(['name' => 'Edukacija']);
        Category::create(['name' => 'Umetnost']);
    }
}
