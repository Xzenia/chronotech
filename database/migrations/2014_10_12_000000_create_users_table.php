<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('age');
            $table->string('sex');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('nickname')->nullable();
            $table->string('birthday');
            $table->integer('height');
            $table->integer('weight');
            $table->integer('bmi');
            $table->string('diet');
            $table->string('time_for_caffeine_intake')->nullable();
            $table->string('chronotype');

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
