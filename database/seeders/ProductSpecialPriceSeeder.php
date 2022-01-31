<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;


class ProductSpecialPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_special_price')->insert([
            'product_id' => 1,
            'price' => 15.90,
            'date_start'=> Carbon::now('America/Sao_Paulo')->toDateTimeString(),
            'date_end'=> Carbon::parse(Carbon::now('America/Sao_Paulo'))->addWeeks(1)
        ]);

        DB::table('product_special_price')->insert([
            'product_id' => 2,
            'price' => 9.90,
            'date_start'=> Carbon::now('America/Sao_Paulo')->toDateTimeString(),
            'date_end'=> Carbon::parse(Carbon::now('America/Sao_Paulo'))->addWeeks(1)
        ]);

        DB::table('product_special_price')->insert([
            'product_id' => 3,
            'price' => 5.90,
            'date_start'=> Carbon::now('America/Sao_Paulo')->toDateTimeString(),
            'date_end'=> Carbon::parse(Carbon::now('America/Sao_Paulo'))->addWeeks(1)
        ]);

        DB::table('product_special_price')->insert([
            'product_id' => 4,
            'price' => 10.90,
            'date_start'=> Carbon::now('America/Sao_Paulo')->toDateTimeString(),
            'date_end'=> Carbon::parse(Carbon::now('America/Sao_Paulo'))->addWeeks(1)
        ]);
        DB::table('product_special_price')->insert([
            'product_id' => 5,
            'price' => 7.90,
            'date_start'=> Carbon::now('America/Sao_Paulo')->toDateTimeString(),
            'date_end'=> Carbon::parse(Carbon::now('America/Sao_Paulo'))->addWeeks(1)
        ]);
        DB::table('product_special_price')->insert([
            'product_id' => 6,
            'price' => 8.90,
            'date_start'=> Carbon::now('America/Sao_Paulo')->toDateTimeString(),
            'date_end'=> Carbon::parse(Carbon::now('America/Sao_Paulo'))->addWeeks(1)
        ]);
    }
}
