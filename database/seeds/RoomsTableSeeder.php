<?php

use App\Category;
use App\Room;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $rooms = [];

        for ($i = 1; $i <= 50; $i++) {
            $roomname = 'Room ' . intval($i + 100);
            $slug = Str::slug($roomname);
            $cat = Category::count();
            $rooms[] = [
                'id'          => $i,
                'name'        => $roomname,
                'slug'        => $slug,
                'category_id' => rand(1, $cat),
                'description' => $faker->paragraph,
                'capacity'    => mt_rand(10, 100),
            ];
        }

        Room::insert($rooms);
    }
}
