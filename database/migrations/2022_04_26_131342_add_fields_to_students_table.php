<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->string('student_surname')->nullable();
            $table->string('student_firstname')->nullable(); 
            $table->string('student_othername')->nullable(); 
            $table->string('student_gender')->nullable(); 
            $table->string('student_date_of_birth')->nullable(); 
            $table->string('student_parent_name')->nullable(); 
            $table->string('student_photo_url')->nullable(); 
            $table->string('student_postal_address')->nullable(); 
            $table->string('student_mobile')->nullable(); 
            $table->string('student_region')->nullable(); 
            $table->string('student_hometown')->nullable(); 
            $table->string('student_house')->nullable(); 
            $table->string('student_religion')->nullable(); 
            $table->string('year_of_admission')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            //
        });
    }
}
