<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artist;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artist::create([
            'first_name' => 'Chito',
            'last_name' => 'Miranda',
            'band' => 'Parokya ni Edgar',
        ]);
        Artist::create([
            'first_name' => 'Sarah',
            'last_name' => 'Geronimo',
            'band' => 'Kamikazee',
        ]);
        Artist::create([
            'first_name' => 'Mike',
            'last_name' => 'Enriquez',
            'band' => 'Soco',
        ]);
    }
}
