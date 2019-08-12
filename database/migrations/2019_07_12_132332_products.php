<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
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

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('products_categories');

            $table->unsignedBigInteger('product_type');
            $table->foreign('product_type')->references('id')->on('products_types');

            $table->string('product_name');
            $table->string('product_descri');
            $table->string('price');
            $table->integer('is_approved')->default(0);
            $table->boolean('is_available')->default(0);
            $table->boolean('is_active')->default(0);
            $table->string('comment')->default(' ');
            $table->string('from_DateTime')->default(' ');
            $table->string('to_DateTime')->default(' ');
            $table->integer('totalQuantity')->default(1);
            $table->integer('quantityLeft')->default(1);
            $table->string('productImage')->default('');
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
        Schema::dropIfExists('products');
    }
}
