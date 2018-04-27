<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 27.04.2018
 * Time: 2:45
 */

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            array("name" => "Richard King", "id" => 1, "qualification_id" => 4),
            array("name" => "Kasper Graham", "id" => 2, "qualification_id" => 4),
            array("name" => "Charles Cunningham", "id" => 3, "qualification_id" => 1),
            array("name" => "Kieran Kent", "id" => 4, "qualification_id" => 2),
            array("name" => "Baker Garner", "id" => 5, "qualification_id" => 4),
            array("name" => "Aristotle Powers", "id" => 6, "qualification_id" => 1),
            array("name" => "Jordan Hess", "id" => 7, "qualification_id" => 4),
            array("name" => "Hoyt Frederick", "id" => 8, "qualification_id" => 1),
            array("name" => "Akeem Greene", "id" => 9, "qualification_id" => 2),
            array("name" => "Aladdin Franks", "id" => 10, "qualification_id" => 4),
            array("name" => "Baxter Andrews", "id" => 11, "qualification_id" => 4),
            array("name" => "Channing Durham", "id" => 12, "qualification_id" => 2),
            array("name" => "Lane Harvey", "id" => 13, "qualification_id" => 1),
            array("name" => "Gage Hayes", "id" => 14, "qualification_id" => 2),
            array("name" => "Kuame Chase", "id" => 15, "qualification_id" => 3),
            array("name" => "Shad Molina", "id" => 16, "qualification_id" => 3),
            array("name" => "Kieran Jarvis", "id" => 17, "qualification_id" => 3),
            array("name" => "Quentin Bauer", "id" => 18, "qualification_id" => 1),
            array("name" => "Craig Macias", "id" => 19, "qualification_id" => 2),
            array("name" => "Colin Frederick", "id" => 20, "qualification_id" => 3),
            array("name" => "Ferris Clark", "id" => 21, "qualification_id" => 2),
            array("name" => "Daniel Garcia", "id" => 22, "qualification_id" => 3),
            array("name" => "Tiger Hogan", "id" => 23, "qualification_id" => 1),
            array("name" => "Elvis Newman", "id" => 24, "qualification_id" => 4),
            array("name" => "Kyle Sweeney", "id" => 25, "qualification_id" => 3),
            array("name" => "Rajah Ryan", "id" => 26, "qualification_id" => 4),
            array("name" => "Ryan Horn", "id" => 27, "qualification_id" => 4),
            array("name" => "Merrill Jones", "id" => 28, "qualification_id" => 3),
            array("name" => "Jonas Palmer", "id" => 29, "qualification_id" => 1),
            array("name" => "Uriel Oneal", "id" => 30, "qualification_id" => 2),
            array("name" => "Ray Puckett", "id" => 31, "qualification_id" => 3),
            array("name" => "Kermit Merrill", "id" => 32, "qualification_id" => 4),
            array("name" => "Clarke Ferrell", "id" => 33, "qualification_id" => 2),
            array("name" => "Owen Patel", "id" => 34, "qualification_id" => 2),
            array("name" => "Garrett Walsh", "id" => 35, "qualification_id" => 2),
            array("name" => "Clarke Knowles", "id" => 36, "qualification_id" => 4),
            array("name" => "Wayne Warren", "id" => 37, "qualification_id" => 1),
            array("name" => "Nash Nicholson", "id" => 38, "qualification_id" => 1),
            array("name" => "Abraham Rosario", "id" => 39, "qualification_id" => 4),
            array("name" => "Nehru Baird", "id" => 40, "qualification_id" => 1),
            array("name" => "Hilel Petty", "id" => 41, "qualification_id" => 3),
            array("name" => "Jin Nichols", "id" => 42, "qualification_id" => 3),
            array("name" => "Kasper Berger", "id" => 43, "qualification_id" => 3),
            array("name" => "Armand Knight", "id" => 44, "qualification_id" => 2),
            array("name" => "Lance Nielsen", "id" => 45, "qualification_id" => 1),
            array("name" => "Colorado Curtis", "id" => 46, "qualification_id" => 4),
            array("name" => "Ishmael George", "id" => 47, "qualification_id" => 2),
            array("name" => "Grady Tanner", "id" => 48, "qualification_id" => 1),
            array("name" => "Ryder Durham", "id" => 49, "qualification_id" => 1),
            array("name" => "Dalton Wilder", "id" => 50, "qualification_id" => 1),
            array("name" => "Xenos Fischer", "id" => 51, "qualification_id" => 2),
            array("name" => "Victor Craft", "id" => 52, "qualification_id" => 3),
            array("name" => "Gareth Ferrell", "id" => 53, "qualification_id" => 1),
            array("name" => "Herrod Ortega", "id" => 54, "qualification_id" => 3),
            array("name" => "Talon Erickson", "id" => 55, "qualification_id" => 3),
            array("name" => "Lev Kaufman", "id" => 56, "qualification_id" => 2),
            array("name" => "Barclay Cunningham", "id" => 57, "qualification_id" => 2),
            array("name" => "Jin Vargas", "id" => 58, "qualification_id" => 3),
            array("name" => "Castor Tyler", "id" => 59, "qualification_id" => 2),
            array("name" => "Louis Thomas", "id" => 60, "qualification_id" => 1),
            array("name" => "Gary Hodge", "id" => 61, "qualification_id" => 1),
            array("name" => "Grady Booth", "id" => 62, "qualification_id" => 3),
            array("name" => "Logan Weiss", "id" => 63, "qualification_id" => 4),
            array("name" => "Simon Best", "id" => 64, "qualification_id" => 1),
            array("name" => "Levi Griffin", "id" => 65, "qualification_id" => 1),
            array("name" => "Ferris Calhoun", "id" => 66, "qualification_id" => 3),
            array("name" => "Kenyon Parsons", "id" => 67, "qualification_id" => 4),
            array("name" => "Leo Buchanan", "id" => 68, "qualification_id" => 2),
            array("name" => "Walter Mckenzie", "id" => 69, "qualification_id" => 2),
            array("name" => "Gannon Barron", "id" => 70, "qualification_id" => 1),
            array("name" => "Ezra Bradshaw", "id" => 71, "qualification_id" => 1),
            array("name" => "Xenos Owen", "id" => 72, "qualification_id" => 3),
            array("name" => "Herrod Olsen", "id" => 73, "qualification_id" => 3),
            array("name" => "Philip Berger", "id" => 74, "qualification_id" => 1),
            array("name" => "Hyatt Navarro", "id" => 75, "qualification_id" => 3),
            array("name" => "Michael Frost", "id" => 76, "qualification_id" => 4),
            array("name" => "Colin Tran", "id" => 77, "qualification_id" => 2),
            array("name" => "Travis Knowles", "id" => 78, "qualification_id" => 1),
            array("name" => "Kaseem Sharp", "id" => 79, "qualification_id" => 4),
            array("name" => "Lance Herrera", "id" => 80, "qualification_id" => 4),
            array("name" => "Cody Calderon", "id" => 81, "qualification_id" => 3),
            array("name" => "Samuel Witt", "id" => 82, "qualification_id" => 2),
            array("name" => "Tyler Hinton", "id" => 83, "qualification_id" => 2),
            array("name" => "Callum Hutchinson", "id" => 84, "qualification_id" => 2),
            array("name" => "Castor Simpson", "id" => 85, "qualification_id" => 1),
            array("name" => "Abdul Hayden", "id" => 86, "qualification_id" => 3),
            array("name" => "Rashad Reynolds", "id" => 87, "qualification_id" => 1),
            array("name" => "Rooney Emerson", "id" => 88, "qualification_id" => 4),
            array("name" => "Fritz Hardy", "id" => 89, "qualification_id" => 2),
            array("name" => "Lamar Wilkins", "id" => 90, "qualification_id" => 3),
            array("name" => "Lucian Parsons", "id" => 91, "qualification_id" => 4),
            array("name" => "Cairo Blair", "id" => 92, "qualification_id" => 4),
            array("name" => "Donovan Lucas", "id" => 93, "qualification_id" => 1),
            array("name" => "Jeremy Contreras", "id" => 94, "qualification_id" => 2),
            array("name" => "Harlan Cantu", "id" => 95, "qualification_id" => 2),
            array("name" => "Hector Roth", "id" => 96, "qualification_id" => 2),
            array("name" => "Oren Kirk", "id" => 97, "qualification_id" => 4),
            array("name" => "Conan Doyle", "id" => 98, "qualification_id" => 1),
            array("name" => "Flynn Roman", "id" => 99, "qualification_id" => 1),
            array("name" => "Lester Bruce", "id" => 100, "qualification_id" => 2)
        );
        DB::table('users')->insert($data);
    }

}