<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'name' => 'Cafés',
        ]);

        DB::table('category')->insert([
            'name' => 'Erva Mate',
        ]);

        DB::table('category')->insert([
            'name' => 'Terere',
            'id_category' => 2,

        ]);

        
        DB::table('category')->insert([
            'name' => 'Cervejas',
        ]);

        DB::table('category')->insert([
            'name' => 'Artesanais',
            'id_category' => 3,

        ]);
    }
}
