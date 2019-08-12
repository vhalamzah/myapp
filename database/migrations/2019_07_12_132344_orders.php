<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');


            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');

//            $table->unsignedBigInteger('delivery_id');
//            $table->foreign('delivery_id')->references('id')->on('ship_address');

//            $table->unsignedBigInteger('address_id');
//            $table->foreign('address_id')->references('id')->on('recipe');


            $table->dateTime('order_time');
            $table->string('delivery_time');
            $table->string('status');
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
        Schema::dropIfExists('orders');
    }
}
