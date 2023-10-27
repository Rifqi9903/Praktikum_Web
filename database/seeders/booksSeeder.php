<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class booksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
        ['title' => 'The Blood Of Olympus',
        'author' => 'Rick Riordan',
        'year' => 2014,
        'publisher' => 'Disney-Hyperion Books',
        'city' => 'New York',
        'cover' => 'book1.jpg',
        'bookshelf_id' => 1,
        ],
        ['title' => 'A Study in Drowning',
        'author' => 'Ava Reid',
        'year' => 2023,
        'publisher' => 'HarperTeen',
        'city' => 'Palo Alto',
        'cover' => 'book2.jpg',
        'bookshelf_id' => 2,
        ],
        ['title' => 'Thieves Gambit',
        'author' => 'Kayvion Lewis',
        'year' => 2023,
        'publisher' => 'Nancy Paulsen Books',
        'city' => 'New York',
        'cover' => 'book3.jpg',
        'bookshelf_id' => 3,
        ],

    ]);
    }
}
