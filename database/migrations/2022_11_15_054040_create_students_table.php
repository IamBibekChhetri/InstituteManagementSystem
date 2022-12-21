<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('branch_id');
            $table->integer('faculty_id');
            $table->integer('batch_id');
            $table->string('name');
            $table->string('gender');
            $table->string('qualification');
            $table->string('status');
            $table->string('photo')->nullable();
            $table->string('email');
            $table->string('password');
            $table->string('DOB');
            $table->string('phone');
// ------------ Father Information ------------            
            $table->string('fatherName');
            $table->string('fatherEmail');
            $table->string('fatherPhone');
            $table->string('fatherOccupation');
            $table->string('fatherOffice');
            $table->string('fatherDesignation');
// ----------------- Mother Information -------------
            $table->string('motherName');
            $table->string('motherEmail');
            $table->string('motherPhone');
            $table->string('motherOccupation');
            $table->string('motherOffice');
            $table->string('motherDesignation');
// ------------ Temprorary Address Of Student -----------
            $table->string('t_country');
            $table->string('t_state');
            $table->string('t_city');
            $table->string('t_zipcode');
            $table->string('t_nationality');
// --------------- Permanent Address Of Student ----------
            $table->string('p_country');
            $table->string('p_state');
            $table->string('p_city');
            $table->string('p_zipcode');
            $table->string('p_nationality');

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
};
