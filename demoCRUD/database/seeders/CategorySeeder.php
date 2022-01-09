<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $limit = 4;

        for($i = 0;$i<$limit;$i++){
            DB::table('categories')->insert([
                'name'=> $faker->word,
                'quantity'=> 0,
                'created_at' => $faker->dateTimeBetween('-50 days','-5 days','Asia/Ho_Chi_Minh'),
                'updated_at' => $faker->dateTimeBetween('-50 days','-5 days','Asia/Ho_Chi_Minh')
            ]);
        }
    }
}
