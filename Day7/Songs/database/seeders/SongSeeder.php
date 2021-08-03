<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Song;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Song::create([
            'title' => 'Wake me up',
            'genre_id' => 1,
            'artist_id' => 1,
            'album_id' => 1,
        ]);
        Song::create([
            'title' => 'Green Day',
            'genre_id' => 2,
            'artist_id' => 2,
            'album_id' => 2,
        ]);
        Song::create([
            'title' => 'Graveyard',
            'genre_id' => 3,
            'artist_id' => 3,
            'album_id' => 3,
        ]);
    }
}
