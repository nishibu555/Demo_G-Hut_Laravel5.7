<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblDeliveryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_delivery', function (Blueprint $table) {
            $table->increments('delivery_id');
            $table->string('delivery_name');
            $table->string('delivery_phone');
            $table->string('delivery_city');
            $table->string('delivery_address');
            $table->string('payment_method');
            $table->string('payment_account');
            $table->string('cart_total');
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
        Schema::dropIfExists('tbl_delivery');
    }
}
