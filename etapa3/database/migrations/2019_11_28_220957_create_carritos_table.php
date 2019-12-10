<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarritostable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carritos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');
            $table->string('name', 255);
            $table->integer('precio');
            $table->string('image_url', 2048);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('carritos');
    }
}
