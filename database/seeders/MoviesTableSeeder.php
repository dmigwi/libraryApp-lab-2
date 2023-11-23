<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'title' => "Love Wedding Repeat",
            'director_name' => "Dean Craig",
            'production_year' => 2020,
            'genre' => "Commedy",
        ]);
        
        DB::table('movies')->insert([
            'title' => "The Invisible Man",
            'director_name' => "Leigh Whannell",
            'production_year' => 2020,
            'genre' => "Adventure",
        ]);
            
        DB::table('movies')->insert([
            'title' => "Impractical Jokers: The Movie",
            'director_name' => "Chris Henchy",
            'production_year' => 2020,
            'genre' => "Reality Commedy",
        ]);

        DB::table('movies')->insert([
            'title' => "The Last Days of American Crime",
            'director_name' => "Olivier Megaton",
            'production_year' => 2020,
            'genre' => "Thriller",
        ]);
    }
}
