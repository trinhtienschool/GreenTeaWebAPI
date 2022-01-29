<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountsSeeder extends Seeder
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
            DB::table('accounts')->insert([
                'name'=> $faker->unique()->userName,
                'password' => md5("1"),
                'birthday' => $faker->dateTimeBetween('-50 years','-20 years','Asia/Ho_Chi_Minh'),
                'address' => $faker->address,
                'created_at' => $faker->dateTimeBetween('-50 days','-5 days','Asia/Ho_Chi_Minh'),
                'updated_at' => $faker->dateTimeBetween('-50 days','-5 days','Asia/Ho_Chi_Minh')
            ]);
        }

    }
}
