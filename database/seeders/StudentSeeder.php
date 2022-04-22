<?php

namespace Database\Seeders;

use App\Models\Student;
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,10) as $value){
            Student::create([
                'name' => $faker->name(),
                'city' =>$faker->city(),
                'fees'=>$faker->randomDigit()
            ]);
        }
    }
}
