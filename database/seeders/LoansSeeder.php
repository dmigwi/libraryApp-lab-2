<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('loans')->insert([
            'book_id' => 4,	
            'client' => 'Betty White',
            'loaned_on' => '2023-12-14 17:03:20',
            'estimated_on' => '2023-12-14 17:03:20',
        ]);
    }
}
