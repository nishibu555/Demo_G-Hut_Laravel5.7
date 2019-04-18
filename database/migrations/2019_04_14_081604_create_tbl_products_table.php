<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
 Schema::create('tbl_products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->integer('manufacture_id');
            $table->string('product_name');
            $table->longText('product_description');
            $table->string('product_unit');
            $table->integer('product_purchase_cost');
            $table->integer('product_price');
            $table->integer('product_stock');
            $table->integer('product_current_stock');
            $table->string('product_image');
            $table->timestamps();

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_products');
    }
}
