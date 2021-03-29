<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id',10)->unique();
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->string('medicine_id',10);
            $table->foreign('medicine_id')->references('medicine_id')->on('medicines');
            $table->integer('quantity');
            $table->integer('total');
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
        Schema::dropIfExists('customer_carts');
    }
}
