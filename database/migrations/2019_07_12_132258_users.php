<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lname')->nullable();
            $table->string('email')->unique();

            $table->unsignedBigInteger('user_role');
            $table->foreign('user_role')->references('id')->on('user_roles');

            $table->boolean('ischef')->default(0);

            $table->bigInteger('cell');
            $table->string('address')->default('');
            $table->string('profile_image')->default('user.png');
            $table->string('LatLong')->default('');
            $table->string('chef_qualificiation')->default('');
            $table->integer('idno')->default(0);
            $table->string('chef_licence_no')->default('');
            $table->string('about_me')->default('');
            $table->string('business_reg_no')->default('');
            $table->string('delivery_vehicle_no')->default('');

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
