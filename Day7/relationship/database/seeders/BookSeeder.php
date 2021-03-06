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
            //yyyy/mm/dd
            //date('Y-m-d', strtotime('1876/06/01')) 
            'date_published' => '1876/06/01',
            'author_id' => 3,
            'publisher_id' => 2
        ]);

        Book::create([
            'title' => 'Romeo and Juliet',
            'category' => 'Romance',
            'date_published' => '1597/01/01',
            'author_id' => 1,
            'publisher_id' => 3
        ]);
    }
}
