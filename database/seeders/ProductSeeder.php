<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('products')->insert([
            'name' => 'Cafe Gourmet',
            'price' => 24.90,
            'qty' => 3,
            'category_id' => 1,
            'description' => 'Café arabica tipo 2, ideal para quem gosta de café forte',
            'image_path' => '/img/jaguari_gourmet.png',
        ]);
        DB::table('products')->insert([
            'name' => 'Cafe Extra Forte',
            'price' => 18.90,
            'qty' => 3,
            'category_id' => 1,
            'description' => 'Café arabica tipo 1, ideal para quem gosta de café forte',
            'image_path' => '/img/jaguari_extra_forte.png'
        ]);
        DB::table('products')->insert([
            'name' => 'Caixa Erva Mate Tereré Tradicional',
            'price' => 9.90,
            'qty' => 3,
            'category_id' => 3,
            'description' => 'Erva raiz, ideal para quem toma com apenas limão na agua',
            'image_path' => '/img/erva_mate.jpg'
        
        ]);
        DB::table('products')->insert([
            'name' => 'Caixa Erva Mate Tereré Menta e Boldo',
            'price' => 15.90,
            'qty' => 3,
            'category_id' => 3,
            'description' => 'Erva modinha, caiu no gosto do sul matogrossense',
            'image_path' => '/img/menta.jpg'
      
        ]);
        DB::table('products')->insert([
            'name' => 'Cerveja Colorado Ribeirao Larger',
            'price' => 10.90,
            'qty' => 3,
            'category_id' => 4,
            'description' => 'Cerveja Artesanal frutada com leve toque de laranja, assemelha a uma IPA',
            'image_path' => '/img/Ribeirao-Lager.jpg'
        ]);
        DB::table('products')->insert([
            'name' => 'Cerveja Colorado Appia Larger',
            'price' => 12.90,
            'qty' => 3,
            'category_id' => 4,
            'description' => 'Cerveja Artesanal com leve toque de mel',
            'image_path' => '/img/ColoradoAppia.jpg'
        ]);
    }
}
