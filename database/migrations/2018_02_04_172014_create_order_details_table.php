<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('quantity');
          $table->float('total_price');
          $table->integer('tour_id')->unsigned()->nullable();
          $table->foreign('tour_id')->references('id')->on('tours');
          $table->integer('order_id')->unsigned()->nullable();
          $table->foreign('order_id')->references('id')->on('orders');
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
        Schema::dropIfExists('order_details');
    }
}
