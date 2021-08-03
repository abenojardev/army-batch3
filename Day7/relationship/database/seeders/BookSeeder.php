<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'The Adventures of Tom Sawyer',
            'category' => 'Novel',
            'date_published' => '1876/06/01',
            'author_id' => 0,
            'publisher_id' => 0
        ]);

        Book::create([
            'title' => 'Romeo and Juliet',
            'category' => 'Romance',
            'date_published' => '1597/01/01',
            'author_id' => 0,
            'publisher_id' => 0
        ]);
    }
}
