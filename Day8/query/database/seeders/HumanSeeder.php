<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Human;

class HumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 100 random

        for($i=0; $i <= 100; $i++){

            $faker = new Faker\Factory;
            Human::create([
                'age' => '',
                'birth_date' => '',
                'city' => '',
                'civil_status' => '', 
                'first_name' => '',
                'gender' => '', 
                'last_name' => '',
                'occupation' => '', 
            ]);
        }
    }
}
