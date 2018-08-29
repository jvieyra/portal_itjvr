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
            $table->string('name');
            $table->string('lastname');
            $table->string('second_lastname');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('matricula')->unique();
            $table->string('matricula_familia');
            $table->string('foto');
            $table->string('grade');
            $table->string('group');
            $table->string('status');
            $table->string('nationality');
            $table->date('birthday');
            $table->string('gender');
            $table->string('home_student');
            $table->string('allergies');
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
