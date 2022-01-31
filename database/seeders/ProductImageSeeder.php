<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;


class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_image')->insert([
            'product_id' => 1,
            'image_path' => '/img/jaguari_gourmet.png',
        ]);

        DB::table('product_image')->insert([
            'product_id' => 2,
            'image_path' => '/img/jaguari_extra_forte.png',
        ]);

        DB::table('product_image')->insert([
            'product_id' => 3,
            'image_path' => '/img/erva_mate.jpg',
        ]);

        DB::table('product_image')->insert([
            'product_id' => 4,
            'image_path' => '/img/menta.jpg',
        ]);

        DB::table('product_image')->insert([
            'product_id' => 5,
            'image_path' => '/img/Ribeirao-Larger.jpg',
        ]);

        DB::table('product_image')->insert([
            'product_id' => 6,
            'image_path' => '/img/ColoradoAppia.jpg',
        ]);
    }
}
