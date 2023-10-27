<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshelfsSeeder extends Seeder
{
    public function run()
    {
        DB::table('bookshelfs')->insert([
            [
                'code' => 'A1',
                'name' => 'Bookshelf 1',
            ],
            [
                'code' => 'A2',
                'name' => 'Bookshelf 2',
            ],
            [
                'code' => 'A3',
                'name' => 'Bookshelf 3',
            ],
            
        ]);
    }
}