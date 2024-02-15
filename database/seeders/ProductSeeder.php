<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('products')->insert(
        
            [
                "name" => 'Monstera Thai Constellation',
                "price" => '190',
                "category" => "Plants",
                "description" => "The highly coveted Monstera ‘Thai Constellation’ is a Monstera cultivar with eye-catching variegated cream and green heart-shaped leaves.",
                "gallery" => "https://www.easytogrowbulbs.com/cdn/shop/files/MonteraThaiConstellationinWhiteClassicPot_ETGB-SHUT_800x.jpg?v=1698684731",
            ],

        );
    }
}
