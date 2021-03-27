<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
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
            $table->string('username',20)->unique();
            $table->string('name',50);
            $table->string('password',200);
            $table->string('email',50)->unique();
            $table->string('country',15)->unique();
            $table->string('city',15)->unique();
            $table->mediumText('address');
            $table->mediumText('companyname');
            $table->string('user_type',15);
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
