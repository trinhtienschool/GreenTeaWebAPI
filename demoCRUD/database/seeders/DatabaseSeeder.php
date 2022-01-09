<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //open permit multiple insert
        Model::unguard();
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        //close permit multiple insert
        Model::reguard();
    }
}
