<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 10; $i++){

            $new_user = new User();
            $new_user->name = $faker->name();
            $new_user->surname = $faker->name();
            $new_user->email = $faker->email();
            $new_user->birthday_date = $faker->dateTime();
            
            $new_user->save();
        }
    }


}
