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
        Category::create(['name' => '化粧水']);
        Category::create(['name' => '乳液']);
        Category::create(['name' => '美容液']);
        Category::create(['name' => 'パック']);
    }
}
