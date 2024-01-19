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

        DB::table('books')->insert([
            'title' => "Introduction to Programing",
            'year' => "2014",
            'publication_place' => "London",
            'pages' => "234",
            'price' => "12.34",
         ]);
       
        DB::table('books')->insert([    
            'title' => "Sample Book",
            'year' => "2023",
            'publication_place' => "Warsaw",
            'pages' => "213",
            'price' => "78",
         ]);

        DB::table('books')->insert([ 
            'title' => "Who let the dogs out?",
            'year' => "1923",
            'publication_place' => "Nairobi",
            'pages' => "50",
            'price' => "12",
         ]);
    }
}
