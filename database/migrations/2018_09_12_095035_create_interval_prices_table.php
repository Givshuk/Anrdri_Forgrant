<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntervalPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interval_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->date('date_from')->format('dd.mm.YYYY');
            $table->date('date_till')->format('dd.mm.YYYY');
            $table->string('price');
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
        Schema::dropIfExists('interval_prices');
    }
}
