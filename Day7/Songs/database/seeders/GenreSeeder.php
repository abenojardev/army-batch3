<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create([
            'genre' => 'Rock'
        ]);
        Genre::create([
            'genre' => 'Pop'
        ]);
        Genre::create([
            'genre' => 'Classical'
        ]);
    }
}
