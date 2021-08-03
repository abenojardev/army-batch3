<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create 
        Author::create([
            'name' => 'William Shakespeare',
            'location' => array_rand(
                Author::LOCATION
            )
        ]);
 
        Author::create([
            'name' => 'Charles Dickens',
            'location' => array_rand(
                Author::LOCATION
            )
        ]);
    }
 
