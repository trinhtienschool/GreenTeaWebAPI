<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $limit = 50;

        for($i = 0;$i<$limit;$i++){
            DB::table('products')->insert([
                'name'=> $faker->word,
                'price'=> $faker->numberBetween(50,100),
                'image'=>'https://picsum.photos/200/300?random=' . $i,
                'categoryId'=>$faker->numberBetween(1,4),
                'created_at' => $faker->dateTimeBetween('-50 days','-5 days','Asia/Ho_Chi_Minh'),
                'updated_at' => $faker->dateTimeBetween('-50 days','-5 days','Asia/Ho_Chi_Minh')
            ]);
        }
    }
}
