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
        Schema::create('product_special_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id');
            $table->decimal('price',10,2);
            $table->date('date_start');
            $table->date('date_end');

            $table->timestamps();
        });

        Schema::table('product_special_prices', function(Blueprint $table) {
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
        Schema::dropIfExists('product_special_prices');
    }
}
