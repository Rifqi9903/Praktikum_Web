<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['id'=>1,
            'category' => 'Fantasy',
            ],
            ['id'=>2,
            'category' => 'Romance',
            ],
            ['id'=>3,
            'category' => 'Action',
            ],
        ]);
        
    }
}
