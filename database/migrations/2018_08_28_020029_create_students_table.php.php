<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();;
            $table->string('lastname')->nullable();;
            $table->string('second_lastname')->nullable();;
            $table->string('email')->unique();
            $table->string('password');
            $table->string('matricula')->unique();
            $table->string('matricula_familia')->nullable();;
            $table->string('foto')->nullable();;
            $table->string('grade')->nullable();;
            $table->string('group')->nullable();;
            $table->string('status')->nullable();;
            $table->string('nationality')->nullable();;
            $table->date('birthday')->nullable();;
            $table->string('gender')->nullable();;
            $table->string('home_student')->nullable();;
            $table->string('allergies')->nullable();;
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
        Schema::dropIfExists('students');
    }
}
