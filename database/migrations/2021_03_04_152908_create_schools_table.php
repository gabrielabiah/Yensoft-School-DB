<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('postal_address_id')->nullable();
            $table->string('school_name')->nullable();
            $table->string('short_name')->nullable();
            $table->string('created_by')->nullable();
            $table->string('date_established')->nullable();
            $table->string('sector')->nullable(); 
            $table->string('logo')->nullable();
            $table->string('mobile')->nullable();
            $table->string('term_begins')->nullable();
            $table->string('term_ends')->nullable();
            $table->string('additional_data1')->nullable();
            $table->string('date_registered')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('schools');
    }
}
