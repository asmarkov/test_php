<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 27.04.2018
 * Time: 2:42
 */

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QualificationsSeeder extends Seeder
{
    public function run()
    {
        DB::table('qualifications')->insert(
            [
                ["id" => 1, 'name' => 'Среднее'],
                ["id" => 2, 'name' => 'Бакалавр'],
                ["id" => 3, 'name' => 'Магистр'],
                ["id" => 4, 'name' => 'Аспирант'],
            ]
        );
    }

}