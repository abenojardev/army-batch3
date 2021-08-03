<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Album;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Album::create([
            'name' => 'Blue Horizon',
            'date_released' => '2020/12/01',
        ]);
        Album::create([
            'name' => 'Sunset Cream',
            'date_released' => '2019/08/25',
        ]);
        Album::create([
            'name' => 'Cranberry',
            'date_released' => '1964/06/15',
        ]);
    }
}
