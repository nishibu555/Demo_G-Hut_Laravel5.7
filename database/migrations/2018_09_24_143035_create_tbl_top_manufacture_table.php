<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblTopManufactureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_top_manufacture', function (Blueprint $table) {
            $table->increments('top_manufacture_id');
            $table->string('top_manufacture_name');
            $table->string('top_manufacture_city');
            $table->string('top_manufacture_address');
            $table->string('top_manufacture_phone');
            $table->string('top_manufacture_image');
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
        Schema::dropIfExists('tbl_top_manufacture');
    }
}
