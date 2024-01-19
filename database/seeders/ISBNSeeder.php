<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ISBNSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
        DB::table('isbns')->insert([
            'book_id' => 1,
            'number' => 'AK1197',
            'issued_by' => 'dmigwi',
            'issued_on' => '2023-12-14 16:29:48',
        ]);

        DB::table('isbns')->insert([        
            'book_id' => 2,
            'number' => '0x0F',
            'issued_by' => 'dmigwi',
            'issued_on' => '2023-12-14 16:30:44',
        ]);
        DB::table('isbns')->insert([ 
            'book_id' => 3,
            'number' => 'AK1197',
            'issued_by' => 'longhorn',
            'issued_on' => '2023-12-14 16:32:00',
        ]);
        DB::table('isbns')->insert([    
            'book_id' => 4,
            'number' => 'AK1197',
            'issued_by' => 'Macmillan Publishers',
            'issued_on' => '2023-12-14 16:37:51',
        ]);
        DB::table('isbns')->insert([ 
            'book_id' => 5,
            'number' => ' AK1197',
            'issued_by' => 'Publishewe',
            'issued_on' => '2023-12-14 16:39:12',
        ]);
        DB::table('isbns')->insert([      
            'book_id' => 6,
            'number' => 'AK1197368hsgjd',
            'issued_by' => 'Publishewe',
            'issued_on' => '2023-12-14 16:40:05',
        ]);
    }
}


	