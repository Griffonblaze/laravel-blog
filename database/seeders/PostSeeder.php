<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for($i = 0; $i<26;$i++){
            Post::create([
                'title' => $faker->sentence(10),
                'subtitle' => $faker->sentence(10),
                'content' => $faker->text(200),
                'category_id'=>$faker->numberBetween(1,26)
            ]);
        };
    }
}
