<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i<20; $i++){
        DB::table('messages')->insert([
            'messages'=>$faker->paragraph,
            'user_id'=>mt_rand(1, 10)
        ]);
        }
    }
}
