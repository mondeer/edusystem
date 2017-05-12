<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{

    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('national_id')->unique();
            $table->string('gender');
            $table->string('dob');
            $table->string('reg_no')->unique();
            $table->string('course');
            $table->string('email')->unique();
            $table->string('mobile')->unique();
            $table->string('address');
            $table->string('next_of_kin');
            $table->string('next_of_kin_contact');
            $table->string('guardian')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
