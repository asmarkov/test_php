<?php

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
        $this->call(CitiesSeeder::class);
        $this->call(QualificationsSeeder::class);
        $this->call(UsersCitiesSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
