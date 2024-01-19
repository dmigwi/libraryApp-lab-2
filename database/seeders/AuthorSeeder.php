<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            'firstname' => 'James',
            'lastname' => 'Kurose',
            'birthday' => '1970-01-01',
            'genres' => 'Computer science',
        ]);

        DB::table('authors')->insert([
            'firstname' => 'Keith',
            'lastname' => 'Ross',
            'birthday' => '1985-01-01',
            'genres' => 'Computer science',
        ]);
    }
}
