<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 27.04.2018
 * Time: 2:54
 */

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            array("name" => "Heikruis", "id" => 1),
            array("name" => "Maaseik", "id" => 2),
            array("name" => "Neu-Ulm", "id" => 3),
            array("name" => "Mandi Burewala", "id" => 4),
            array("name" => "Northallerton", "id" => 5),
            array("name" => "Sadiqabad", "id" => 6),
            array("name" => "Vilvoorde", "id" => 7),
            array("name" => "Kapelle-op-den-Bos", "id" => 8),
            array("name" => "Santa María", "id" => 9),
            array("name" => "Oklahoma City", "id" => 10),
            array("name" => "Beveren", "id" => 11),
            array("name" => "Fort Wayne", "id" => 12),
            array("name" => "Quesada", "id" => 13),
            array("name" => "Papudo", "id" => 14),
            array("name" => "Cochrane", "id" => 15),
            array("name" => "Eisenstadt", "id" => 16),
            array("name" => "Midway", "id" => 17),
            array("name" => "Lolol", "id" => 18),
            array("name" => "Kircudbright", "id" => 19),
            array("name" => "Bridgeport", "id" => 20),
            array("name" => "Husum", "id" => 21),
            array("name" => "Baarle-Hertog", "id" => 22),
            array("name" => "Lexington", "id" => 23),
            array("name" => "Town of Yarmouth", "id" => 24),
            array("name" => "Meix-Devant-Virton", "id" => 25),
            array("name" => "Rae-Edzo", "id" => 26),
            array("name" => "Durness", "id" => 27),
            array("name" => "Warisoulx", "id" => 28),
            array("name" => "Bergeggi", "id" => 29),
            array("name" => "Kavaratti", "id" => 30),
            array("name" => "Ancarano", "id" => 31),
            array("name" => "Los Sauces", "id" => 32),
            array("name" => "Hines Creek", "id" => 33),
            array("name" => "Gölcük", "id" => 34),
            array("name" => "Scala Coeli", "id" => 35),
            array("name" => "Cartagena", "id" => 36),
            array("name" => "Dover", "id" => 37),
            array("name" => "Pemberton", "id" => 38),
            array("name" => "Kisi", "id" => 39),
            array("name" => "Holman", "id" => 40),
            array("name" => "Chicago", "id" => 41),
            array("name" => "Voitsberg", "id" => 42),
            array("name" => "Victoria", "id" => 43),
            array("name" => "Deschambault", "id" => 44),
            array("name" => "Saint-Quentin", "id" => 45),
            array("name" => "Morhet", "id" => 46),
            array("name" => "Renlies", "id" => 47),
            array("name" => "Chilliwack", "id" => 48),
            array("name" => "Oxford", "id" => 49),
            array("name" => "Liernu", "id" => 50),
            array("name" => "Swansea", "id" => 51),
            array("name" => "Heidenheim", "id" => 52),
            array("name" => "Paisley", "id" => 53),
            array("name" => "Crowsnest Pass", "id" => 54),
            array("name" => "Okara", "id" => 55),
            array("name" => "Gattatico", "id" => 56),
            array("name" => "Ronciglione", "id" => 57),
            array("name" => "Hampstead", "id" => 58),
            array("name" => "Habay-la-Neuve", "id" => 59),
            array("name" => "Lleida", "id" => 60),
            array("name" => "Baie-Saint-Paul", "id" => 61),
            array("name" => "Sfruz", "id" => 62),
            array("name" => "Bicinicco", "id" => 63),
            array("name" => "Sant'Eufemia a Maiella", "id" => 64),
            array("name" => "Sennariolo", "id" => 65),
            array("name" => "HomprŽ", "id" => 66),
            array("name" => "Pagazzano", "id" => 67),
            array("name" => "Pudukkottai", "id" => 68),
            array("name" => "Orlando", "id" => 69),
            array("name" => "Rotello", "id" => 70),
            array("name" => "Cochrane", "id" => 71),
            array("name" => "Orp-le-Grand", "id" => 72),
            array("name" => "Kansas City", "id" => 73),
            array("name" => "Eisleben", "id" => 74),
            array("name" => "Navadwip", "id" => 75),
            array("name" => "Provo", "id" => 76),
            array("name" => "Rüsselsheim", "id" => 77),
            array("name" => "Sant'Egidio alla Vibrata", "id" => 78),
            array("name" => "Imperatriz", "id" => 79),
            array("name" => "Court-Saint-Etienne", "id" => 80),
            array("name" => "Camaragibe", "id" => 81),
            array("name" => "Quemchi", "id" => 82),
            array("name" => "Cambiago", "id" => 83),
            array("name" => "Dibrugarh", "id" => 84),
            array("name" => "Sens", "id" => 85),
            array("name" => "Gualdo Tadino", "id" => 86),
            array("name" => "Chennai", "id" => 87),
            array("name" => "San Mauro Marchesato", "id" => 88),
            array("name" => "Aubervilliers", "id" => 89),
            array("name" => "Opdorp", "id" => 90),
            array("name" => "Flensburg", "id" => 91),
            array("name" => "Vertou", "id" => 92),
            array("name" => "Bellevue", "id" => 93),
            array("name" => "Moerkerke", "id" => 94),
            array("name" => "Noragugume", "id" => 95),
            array("name" => "Stralsund", "id" => 96),
            array("name" => "Lagundo/Algund", "id" => 97),
            array("name" => "Lauro de Freitas", "id" => 98),
            array("name" => "Walhain-Saint-Paul", "id" => 99),
            array("name" => "San Felipe", "id" => 100)
        );

        DB::table('cities')->insert($data);
    }

}