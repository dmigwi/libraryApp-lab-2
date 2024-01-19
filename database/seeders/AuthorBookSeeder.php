<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            'lastname' => 'Kurose',
            'firstname' => 'James',
            'birthday' => '1970-01-01',
            'genres' => 'Computer science',
            'book_id' => 1,
            'author_id' => 1,
        ]);

        DB::table('authors')->insert([
            'lastname' => 'Ross',
            'firstname' => 'Keith',
            'birthday' => '1985-01-01',
            'genres' => 'Computer science',
            'book_id' => 1,
            'author_id' => 1,
        ]);
    }
}
