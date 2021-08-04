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
                'birth_date' => $faker->date(),
                'first_name' => $faker->name(),
                'last_name' => $faker->name(),
                'occupation' => $faker->randomElement([
                    'Self Employed', 'Student', 'Employed'
                ]), 
                'city' => $faker->randomElement(
                    Human::CITY
                ),
                'civil_status' => $faker->randomElement(
                    Human::CIVIL_STATUS
                ), 
                'gender' => $faker->randomElement(
                    Human::GENDER
                ), 
            ]);
        }
    }
}
