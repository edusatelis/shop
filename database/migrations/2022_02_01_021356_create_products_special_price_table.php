<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsSpecialPriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_special_price', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id');
            $table->date('date_start');
            $table->date('date_end');

            $table->timestamps();
        });

        Schema::table('products_special_price', function(Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_special_price');
    }
}
