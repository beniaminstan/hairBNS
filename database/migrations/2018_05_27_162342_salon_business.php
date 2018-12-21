<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SalonBusiness extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salon_businesses', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('user_id');
            $table->string('name');
            $table->string('cvr')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('city')->nullable();
            $table->string('street')->nullable();
            $table->string('street_number')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('post_code')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salon_businesses');
    }
}
