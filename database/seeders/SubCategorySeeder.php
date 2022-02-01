<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_categories')->insert([
            'name' => 'Terere',
            'category_id' => 2,

        ]);

        DB::table('sub_categories')->insert([
            'name' => 'Artesanais',
            'category_id' => 3,
        ]);
    }
}
