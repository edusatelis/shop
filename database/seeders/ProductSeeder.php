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
            'category_id' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Cafe Extra Forte',
            'price' => 18.90,
            'qty' => 3,
            'category_id' => 1
        ]);
        DB::table('products')->insert([
            'name' => 'Caixa Erva Mate Tereré Tradicional',
            'price' => 9.90,
            'qty' => 3,
            'category_id' => 2
        
        ]);
        DB::table('products')->insert([
            'name' => 'Caixa Erva Mate Tereré Menta e Boldo',
            'price' => 15.90,
            'qty' => 3,
            'category_id' => 2
      
        ]);
        DB::table('products')->insert([
            'name' => 'Cerveja Colorado Ribeirao Larger',
            'price' => 10.90,
            'qty' => 3,
            'category_id' => 3
        ]);
        DB::table('products')->insert([
            'name' => 'Cerveja Colorado Appia Larger',
            'price' => 12.90,
            'qty' => 3,
            'category_id' => 3
        ]);
    }
}
