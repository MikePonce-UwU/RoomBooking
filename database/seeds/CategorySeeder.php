<?php

use App\Category;
use Illuminate\Support\Str;
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
        //
        $categories = [];

        for ($i = 1; $i <= 5; $i++) {
            $name = 'Category ' . intval($i);
            $slug = Str::slug($name);
            $categories[] = [
                'name'        => $name,
                'slug'        => $slug,
            ];
        }

        Category::insert($categories);
    }
}
