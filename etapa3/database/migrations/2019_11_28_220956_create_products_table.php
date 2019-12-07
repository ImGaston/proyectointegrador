<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->string('description', 2048);
            $table->string('image_url', 2048);
            $table->integer('precio');            
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('talle_id');
            $table->unsignedBigInteger('prenda_id');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('talle_id')->references('id')->on('talles');
            $table->foreign('prenda_id')->references('id')->on('prendas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
