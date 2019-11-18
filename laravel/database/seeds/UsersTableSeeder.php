<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use  App\User;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param Faker $faker
     * @return void
     */
    public function run(Faker $faker)
    {
        factory(User::class)->create([
            'email' => 'test@test.com',
            'password' => bcrypt('123456789')
        ]);

        factory(User::class, 10)->create();

    }
}

