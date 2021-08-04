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

            $faker = Faker\Factory::create();

            Human::create([
                'age' => $faker->numberBetween(18, 60),
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
