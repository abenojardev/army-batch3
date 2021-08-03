<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Publisher;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publisher::create([
            'code' => 'BPC',
            'name' => 'Bookware Publishing Corporation'
        ]);

        Publisher::create([
            'code' => 'ISBN',
            'name' => 'International Standard Book Number'
        ]);

        Publisher::create([
            'code' => 'NBS',
            'name' => 'National Books Store'
        ]);
    }
}
