<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_descriptions')->insert([
            'product_id' => 1,
            'description' => 'Café arabica tipo 2, ideal para quem gosta de café forte',
        ]);

        DB::table('product_descriptions')->insert([
            'product_id' => 2,
            'description' => 'Café arabica tipo 1, ideal para quem gosta de café forte',
        ]);

        DB::table('product_descriptions')->insert([
            'product_id' => 3,
            'description' => 'Erva raiz, ideal para quem toma com apenas limão na agua',
        ]);

        DB::table('product_descriptions')->insert([
            'product_id' => 4,
            'description' => 'Erva modinha, caiu no gosto do sul matogrossense',
        ]);

        DB::table('product_descriptions')->insert([
            'product_id' => 5,
            'description' => 'Cerveja Artesanal frutada com leve toque de laranja, assemelha a uma IPA',
        ]);

        DB::table('product_descriptions')->insert([
            'product_id' => 6,
            'description' => 'Cerveja Artesanal com leve toque de mel',
        ]);

        
    }
}