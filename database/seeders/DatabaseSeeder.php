<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Database\Seeders\CategorySeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\ProductSpecialPriceSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        // $this->call(ProductSpecialPriceSeeder::class);
    }
}
