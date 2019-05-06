<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_type'); //etf, futures, derivative, cash
            $table->string('asset_type'); // bond, equity, volatility, 
            $table->string('product_name');
            $table->double('size',10,2);
            $table->double('price',10,2);
            $table->string('direction'); //B or S
            $table->boolean('closed');   
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
        Schema::dropIfExists('positions');
    }
}
