<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //open permit multiple insert
        Model::unguard();
        $this->call(AccountsSeeder::class);
        //close permit multiple insert
        Model::reguard();
    }
}
