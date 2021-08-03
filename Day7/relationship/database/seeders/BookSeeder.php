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
            'category' => ,
            'date_published' => ,
            'author_id' => 0,
            'publisher_id' => 0
        ])
    }
}
