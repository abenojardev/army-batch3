<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;
use Str;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $batch = 100000;

        for ($i=0; $i <= $batch; $i++) {  
            Doctor::create([
                'name' => Str::random(15)
            ]);
        }
    }
}
