<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => "Hobbit",
            'year' => "2018",
            'publication_place' => "Warsaw",
            'pages' => "313",
            'price' => "49.99",
        ]);

        DB::table('books')->insert([
            'title' => "Advanced Programming in PHP",
            'year' => "2020",
            'publication_place' => "Cracow",
            'pages' => "500",
            'price' => "79.90",
        ]);

        DB::table('books')->insert([
            'title' => "The second World War",
            'year' => "2016",
            'publication_place' => "London",
            'pages' => "600",
            'price' => "88.88",
        ]);
    }
}
