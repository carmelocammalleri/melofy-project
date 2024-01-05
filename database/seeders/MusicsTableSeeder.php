<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Music;
use Faker\Generator as Faker;

class MusicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {

            $music= new Music();
            $music->name= $faker->name;
            $music->album= $faker->word();
            $music->artist= $faker->word();
            $music->music_time= $faker->time();
            $music->publication_year= $faker->year();
            $music->save();
        }
    }
}
