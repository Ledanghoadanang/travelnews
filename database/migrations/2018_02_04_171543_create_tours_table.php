<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
          $table->increments('id');
          $table->string('code');
          $table->string('name');
          $table->string('departure');
          $table->string('destination');
          $table->string('vehicle');
          $table->string('schedule');
          $table->float('price');
          $table->float('child_price');
          $table->float('baby_price');
          $table->text('image');
          $table->text('description');
          $table->longText('detail');
          $table->integer('company_id')->unsigned()->nullable();
          $table->foreign('company_id')->references('id')->on('companies');
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
        Schema::dropIfExists('tours');
    }
}
