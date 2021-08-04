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
            $gender = $faker->randomElement(
                Human::GENDER
            );

            Human::create([
                'first_name' => $faker->firstName($gender),
                'last_name' => $faker->lastName($gender),
                'gender' => $gender,
                'age' => $faker->numberBetween(18, 60),
                'birth_date' => $faker->date(),
                'occupation' => $faker->jobTitle(), 
                'city' => $faker->randomElement(
                    Human::CITY
                ),
                'civil_status' => $faker->randomElement(
                    Human::CIVIL_STATUS
                ) 
            ]);
        }
    }
}
