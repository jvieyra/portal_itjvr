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
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->string('second_lastname')->nullable();
            $table->string('picture_profile')->nullable();
            $table->date('birthday')->nullable();
            $table->date('hiring_date')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nss')->nullable();
            $table->string('curp')->nullable();
            $table->string('rfc')->nullable();
            $table->string('phone')->nullable();
            $table->string('celphone')->nullable();
            $table->enum('gender', ['M', 'F'])->nullable();
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
